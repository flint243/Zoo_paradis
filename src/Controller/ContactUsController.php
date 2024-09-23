<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Kreait\Firebase\Messaging\CloudMessage;
use Kreait\Firebase\Factory;
use App\Entity\Contact;
use App\Form\ContactUsType;

class ContactUsController extends AbstractController
{
 /*   private $messaging;

    public function __construct(Factory $firebaseFactory)
    {
        // Initialise Firebase Messaging
        $this->messaging = $firebaseFactory->createMessaging();
    }

    #[Route('/contact/us', name: 'app_contact_us')]
    public function index(EntityManagerInterface $entityManager, Request $request): Response
    {
        $contact = new Contact();
        $form = $this->createForm(ContactUsType::class, $contact);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Enregistrement dans la base de données
            $contact->setCreatedAt(new \DateTimeImmutable());
            $entityManager->persist($contact);
            $entityManager->flush();

            // Créer un message pour Firebase
            $message = CloudMessage::fromArray([
                'notification' => [
                    'title' => 'Nouveau message de contact',
                    'body' => 'Vous avez reçu un nouveau message de contact.',
                ],
                'data' => [
                    'email' => $contact->getEmail(),
                    'message' => $contact->getMessage(),
                ],
                'topic' => 'contact',
            ]);

            // Envoyer le message à Firebase
            $this->messaging->send($message);

            // Optionnel: Ajouter un message flash ou rediriger
            $this->addFlash('success', 'Votre message a bien été envoyé.');
        }

        return $this->render('contact_us/contact.html.twig', [
            'controller_name' => 'ContactUsController',
            'ContactForm' => $form->createView(),
        ]);
    }
*/

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
