<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactType;
use App\Entity\NewsletterSubscriber;
use App\Form\NewsletterSubscriberType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ContactController extends AbstractController
{

    #[Route('/contact', name: 'app_contact')]
    public function contact(Request $request, EntityManagerInterface $entityManager): Response
    {
        $contact = new Contact();
        $subscriber = new NewsletterSubscriber();

        $form = $this->createForm(ContactType::class, $contact);
        $formSub = $this->createForm(NewsletterSubscriberType::class, $subscriber);

        $form->handleRequest($request);
        $formSub->handleRequest($request);

        // Traitement du formulaire de contact
        if ($form->isSubmitted() && $form->isValid()) {
            $contact->setCreatedAt(new \DateTimeImmutable());

            // Enregistrement dans la base de données
            $entityManager->persist($contact);
            $entityManager->flush();

            // Ajouter un message flash pour le formulaire de contact
            $this->addFlash('success_contact', 'Votre message a été envoyé avec succès !');

            return $this->redirectToRoute('app_contact');
        }

        // Traitement du formulaire de newsletter
        if ($formSub->isSubmitted() && $formSub->isValid()) {
            // Vérification si l'email existe déjà
            $existingSubscriber = $entityManager->getRepository(NewsletterSubscriber::class)
                ->findOneBy(['email' => $subscriber->getEmail()]);

            if ($existingSubscriber) {
                // Message flash pour un email déjà existant
                $this->addFlash('warning_newsletter', 'Cet email est déjà inscrit à la newsletter.');
            } else {
                $entityManager->persist($subscriber);
                $entityManager->flush();

                // Message flash pour une inscription réussie
                $this->addFlash('success_newsletter', 'Inscription à la newsletter réussie !');
            }

            return $this->redirectToRoute('app_contact');
        }

        return $this->render('home/contact.html.twig', [
            'ContactForm' => $form->createView(),
            'formSub' => $formSub->createView(),
        ]);
        }
    }
 