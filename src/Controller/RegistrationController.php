<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationFormType;
use App\Security\UserAuthenticator;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Security\Http\Authentication\UserAuthenticatorInterface;

class RegistrationController extends AbstractController
{
    #[Route('/inscription', name: 'app_register')]
    public function register(
        Request $request,
        UserPasswordHasherInterface $userPasswordHasher,
        EntityManagerInterface $entityManager,
        UserAuthenticatorInterface $userAuthenticator,
        UserAuthenticator $authenticator,
        SluggerInterface $slugger
    ): Response {
        $user = new User();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Gestion de l'image
            $profileImage = $form->get('profileImage')->getData();

            if ($profileImage) {
                $originalFilename = pathinfo($profileImage->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$profileImage->guessExtension();

                try {
                    $profileImage->move(
                        $this->getParameter('kernel.project_dir').('/public/images/profile'), // Utiliser le paramètre configuré pour le chemin d'upload
                        $newFilename
                    );
                } catch (FileException $e) {
                    // Gérer l'erreur si nécessaire
                    $this->addFlash('danger', 'Erreur lors du téléchargement de l\'image.');
                }

                // Ici, on passe simplement le nom de fichier à la propriété 'profileImage' qui stocke le nom du fichier
                $user->setProfileImage($newFilename);
            }

            // Encoder le mot de passe
            $user->setPassword(
                $userPasswordHasher->hashPassword(
                    $user,
                    $form->get('plainPassword')->getData()
                )
            );

            // Persister l'utilisateur
            $entityManager->persist($user);
            $entityManager->flush();

            // Connexion automatique après inscription
            $response = $userAuthenticator->authenticateUser(
                $user,
                $authenticator,
                $request
            );
            // Si $response est null, on redirige vers une page par défaut
            return $response ?? $this->redirectToRoute('Accueil');
        }
        

        return $this->render('registration/register.html.twig', [
            'registrationForm' => $form->createView(), 
            // Assure-toi de créer la vue correctement
        ]);
    }
}
