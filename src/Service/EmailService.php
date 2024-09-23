<?php

namespace App\Service;

use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Twig\Environment;

class EmailService
{
    private $mailer;
    private $twig;

    public function __construct(MailerInterface $mailer, Environment $twig)
    {
        $this->mailer = $mailer;
        $this->twig = $twig;
    }

    public function sendRegistrationEmail(string $to, string $subject, string $userName)
    {
        // Rendre le template avec Twig
        $body = $this->twig->render('emails/registration.html.twig', [
            'name' => $userName,
        ]);

        $email = (new Email())
            ->from('noreply@yourdomain.com')
            ->to($to)
            ->subject($subject)
            ->html($body);

        try {
            $this->mailer->send($email);
        } catch (\Symfony\Component\Mailer\Exception\TransportExceptionInterface $e) {
            throw new \Exception('Erreur lors de l\'envoi de l\'email: '.$e->getMessage());
        }
    }
}

