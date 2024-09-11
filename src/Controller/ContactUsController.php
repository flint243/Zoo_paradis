<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactUsType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ContactUsController extends AbstractController
{
    #[Route('/contact/us', name: 'app_contact_us')]
    public function index(EntityManagerInterface $entityManager, Request $request,): Response
    {
        $contact = new Contact();
        $form = $this->createForm(ContactUsType::class, $contact);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $contact->setCreatedAt(new \DateTimeImmutable());
            $entityManager->persist($contact);
            $entityManager->flush();

           
        }

        return $this->render('contact_us/contact.html.twig', [
            'controller_name' => 'ContactUsController',
            'ContactForm' => $form->createView(),
        ]);
    }
}
