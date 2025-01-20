<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\RateLimiter\RateLimiterFactory;

class SecurityController extends AbstractController
{
    #[Route(path: '/connexion', name: 'app_login')]
    public function login(
        Request $request,
        AuthenticationUtils $authenticationUtils,
        Security $security,
        RateLimiterFactory $loginLimiter
    ): Response {
        $limiter = $loginLimiter->create($request->getClientIp());
        
        // Gestion des erreurs de connexion
        if (!$limiter->consume(1)->isAccepted()) {
            $error = 'Trop de tentatives de connexion. Veuillez réessayer plus tard.';
        } else {
            $error = $authenticationUtils->getLastAuthenticationError();
        }

        // Dernier identifiant saisi
        $lastUsername = $authenticationUtils->getLastUsername();

        // Récupération de l'utilisateur connecté (si présent)
        $user = $security->getUser();
        if ($user) {
            // Redirection conditionnelle en fonction des rôles
            if (in_array('ROLE_SUPER_ADMIN', $user->getRoles(), true)) {
                return $this->redirectToRoute('admin_dashboard');
            }
            #return $this->redirectToRoute('user_dashboard');
            /*if (in_array('ROLE_EMPLOYE', $user->getRoles(), true)) {
                return $this->redirectToRoute('admin_dashboard');
            }
            if (in_array('ROLE_VETERINAIRE', $user->getRoles(), true)) {
                return $this->redirectToRoute('admin_dashboard');
            }*/
        }

        return $this->render('security/login.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error,
        ]);
    }

    #[Route(path: '/logout', name: 'app_logout')]
    public function logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }
}
