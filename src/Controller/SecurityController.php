<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\RateLimiter\RateLimiterFactory;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    #[Route(path: '/connexion', name: 'app_login')]
    public function login(
        Request $request,
        AuthenticationUtils $authenticationUtils,
        Security $security,
        RateLimiterFactory $loginLimiter
    ): Response {
        // Gestion du rate limiter (limite de tentatives de connexion)
        $limiter = $loginLimiter->create($request->getClientIp());

        if (!$limiter->consume(1)->isAccepted()) {
            $customErrorMessage = 'Trop de tentatives de connexion. Veuillez réessayer plus tard.';
        } else {
            // Récupération de l'erreur de connexion
            $error = $authenticationUtils->getLastAuthenticationError();
            $customErrorMessage = null;

            if ($error) {
                if ($error->getMessageKey() === 'Invalid credentials.') {
                    $customErrorMessage = "Email ou mot de passe incorrect. Veuillez réessayer.";
                } else {
                    $customErrorMessage = "Une erreur s'est produite. Veuillez réessayer.";
                }
            }
        }

        // Dernier identifiant saisi
        $lastUsername = $authenticationUtils->getLastUsername();

        // Redirection si l'utilisateur est déjà connecté
        if ($security->getUser()) {
            return $this->redirectToRoute('Accueil');
        }

        return $this->render('security/login.html.twig', [
            'last_username' => $lastUsername,
            'error' => $customErrorMessage,
        ]);
    }


    #[Route(path: '/logout', name: 'app_logout')]
    public function logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }
}
