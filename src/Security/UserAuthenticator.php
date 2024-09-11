<?php

namespace App\Security;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\Exception\CustomUserMessageAuthenticationException;
use Symfony\Component\Security\Http\Authenticator\AbstractAuthenticator;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\UserBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Passport;
use Symfony\Component\Security\Http\Authenticator\Passport\SelfValidatingPassport;
use App\Repository\UserRepository;
use Symfony\Contracts\Translation\TranslatorInterface;

class UserAuthenticator extends AbstractAuthenticator
{
    private UserRepository $userRepository;
    private TranslatorInterface $translator;

    public function __construct(UserRepository $userRepository, TranslatorInterface $translator)
    {
        $this->userRepository = $userRepository;
        $this->translator = $translator;
    }

    /**
     * Appelée sur chaque requête pour décider si cet authentificateur doit être utilisé.
     * Si `false` est renvoyé, l'authentificateur est ignoré pour cette requête.
     */
    public function supports(Request $request): ?bool
    {
        // Authentification basée sur l'existence d'un en-tête 'X-AUTH-TOKEN'
        return $request->headers->has('X-AUTH-TOKEN');
    }

    public function authenticate(Request $request): Passport
    {
        $apiToken = $request->headers->get('X-AUTH-TOKEN');
        if (null === $apiToken) {
            throw new CustomUserMessageAuthenticationException('No API token provided');
        }

        // Cherche l'utilisateur via le jeton API dans la base de données
        $user = $this->userRepository->findOneBy(['apiToken' => $apiToken]);

        if (!$user) {
            throw new CustomUserMessageAuthenticationException('Invalid API token');
        }

        return new SelfValidatingPassport(new UserBadge($user->getEmail()));
    }

    /**
     * Gérée lors de la réussite de l'authentification.
     */
    public function onAuthenticationSuccess(Request $request, TokenInterface $token, string $firewallName): ?Response
    {
        // Laisser la requête continuer en cas de succès d'authentification
        return null;
    }

    /**
     * Gérée lors de l'échec de l'authentification.
     */
    public function onAuthenticationFailure(Request $request, AuthenticationException $exception): ?Response
    {
        $data = [
            'message' => $this->translator->trans($exception->getMessageKey(), $exception->getMessageData())
        ];

        return new JsonResponse($data, Response::HTTP_UNAUTHORIZED);
    }
}
