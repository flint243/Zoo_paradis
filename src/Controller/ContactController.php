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
public function contact(Request $request): Response
{
    $contactForm = $this->createForm(ContactType::class);
    $newsletterForm = $this->createForm(NewsletterSubscriberType::class);

    return $this->render('home/contact.html.twig', [
        'ContactForm' => $contactForm->createView(),
        'formSub' => $newsletterForm->createView(),
    ]);
}

#[Route('/contact/submit', name: 'app_contact_submit', methods: ['POST'])]
public function submitContactForm(Request $request, EntityManagerInterface $entityManager): Response
{
    $contact = new Contact();
    $form = $this->createForm(ContactType::class, $contact);

    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $contact->setCreatedAt(new \DateTimeImmutable());
        $entityManager->persist($contact);
        $entityManager->flush();

        $this->addFlash('success_contact', 'Votre message a été envoyé avec succès !');
    }

    return $this->redirectToRoute('app_contact');
}

#[Route('/newsletter/submit', name: 'app_newsletter_submit', methods: ['POST'])]
public function submitNewsletterForm(Request $request, EntityManagerInterface $entityManager): Response
{
    $subscriber = new NewsletterSubscriber();
    $form = $this->createForm(NewsletterSubscriberType::class, $subscriber);

    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $existingSubscriber = $entityManager->getRepository(NewsletterSubscriber::class)
            ->findOneBy(['email' => $subscriber->getEmail()]);

        if ($existingSubscriber) {
            $this->addFlash('warning_newsletter', 'Cet email est déjà inscrit à la newsletter.');
        } else {
            $entityManager->persist($subscriber);
            $entityManager->flush();
            $this->addFlash('success_newsletter', 'Inscription à la newsletter réussie !');
        }
    }

    return $this->redirectToRoute('app_contact');
}

    }
 