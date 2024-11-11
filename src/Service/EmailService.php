<?php

namespace App\Service;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Twig\Environment;
use Psr\Log\LoggerInterface;

class EmailService
{
    private MailerInterface $mailer;
    private Environment $twig;
    private LoggerInterface $logger;
    private EntityManagerInterface $entityManager;

    public function __construct(
        MailerInterface $mailer,
        Environment $twig,
        LoggerInterface $logger,
        EntityManagerInterface $entityManager
    ) {
        $this->mailer = $mailer;
        $this->twig = $twig;
        $this->logger = $logger;
        $this->entityManager = $entityManager;
    }

    public function sendEmail(
        string $to,
        string $subject,
        string $template,
        array $context = [],
        string $from = 'noreply@zooparadis.com'
    ) {
        try {
            $body = $this->twig->render($template, $context);

            $email = (new Email())
                ->from($from)
                ->to($to)
                ->subject($subject)
                ->html($body);

            $this->mailer->send($email);
        } catch (\Symfony\Component\Mailer\Exception\TransportExceptionInterface $e) {
            $this->logger->error('Erreur lors de l\'envoi de l\'email: ' . $e->getMessage());
            throw new \Exception('Erreur lors de l\'envoi de l\'email.');
        }
    }

    public function sendRegistrationEmail(User $user): void
    {
        // Génère un token de confirmation et l’associe à l’utilisateur
        $token = bin2hex(random_bytes(32));
        $user->setConfirmationToken($token);
        $this->entityManager->flush();

        // Génère le lien de confirmation
        $confirmationLink = sprintf('https://votre-site.com/confirmation?token=%s', $token);

        // Envoie l’email
        $this->sendEmail(
            $user->getEmail(),
            'Confirmation de votre compte',
            'emails/registration_confirmation.html.twig',
            ['user' => $user, 'confirmationLink' => $confirmationLink]
        );
    }
}
