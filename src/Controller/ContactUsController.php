<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactUsType;
use App\Service\FirebaseService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactUsController extends AbstractController
{
    private $firebaseService;

    public function __construct(FirebaseService $firebaseService)
    {
        $this->firebaseService = $firebaseService;
    }

    #[Route('/contact/us', name: 'app_contact_us',  methods: ['POST'])]
    public function contact(Request $request): Response
    {
        $contact = new Contact();
        $form = $this->createForm(ContactUsType::class, $contact);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $contact = $form->getData();
            // Enregistrement dans la base de données
            $contact->setCreatedAt(new \DateTimeImmutable());

            // Préparation des données pour Firebase
           
            // Envoi du message Firebase via le service Firebase
           return $this->redirectToRoute('contact', $contact);
        }

        return $this->render('contact_us/contact.html.twig', [
            'controller_name' => 'ContactUsController',
            'ContactForm' => $form->createView(),
        ]);
    }


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
