<?php
// src/Controller/Api/UserController.php
namespace App\Controller;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class UserController
{
    private $entityManager;
    private $passwordHasher;
    private $mailer;

    public function __construct(EntityManagerInterface $entityManager, UserPasswordHasherInterface $passwordHasher, MailerInterface $mailer)
    {
        $this->entityManager = $entityManager;
        $this->passwordHasher = $passwordHasher;
        $this->mailer = $mailer;
    }

    #[Route('/inscriptionUser', name: 'api_create_user', methods: ['POST'])]
    public function createUser(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        // Validation des données reçues
        if (!isset($data['nom']) || !isset($data['email']) || !isset($data['password'])) {
            return new JsonResponse(['error' => 'Email and password are required'], 400);
        }

        $user = new User();
        $user->setNom($data['nom']);
        $user->setEmail($data['email']);
        $user->setPassword(
            $this->passwordHasher->hashPassword($user, $data['password'])
        );

        $this->entityManager->persist($user);
        $this->entityManager->flush();

        // Envoi de l'e-mail de notification
        $this->sendNotificationEmail($data['email']);

        return new JsonResponse(['success' => 'User created successfully']);
    }

    private function sendNotificationEmail(string $userEmail): void
    {
        $email = (new Email())
            ->from('noreply@zooparadis.com')
            ->to($userEmail)
            ->subject('Account Created Successfully')
            ->text('Your account has been created successfully. You can now log in.');

        $this->mailer->send($email);
    }
}
