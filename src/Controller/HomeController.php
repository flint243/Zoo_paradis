<?php

namespace App\Controller;

use App\Entity\Avis;
use App\Form\AvisType;
use App\Entity\Contact;
use App\Form\ContactType;
use App\Repository\AvisRepository;
use App\Repository\AnimalRepository;
use App\Repository\HabitatRepository;
use App\Repository\ServicesRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class HomeController extends AbstractController
{
    #[Route('/', name: 'Accueil')]
public function index(
    AuthenticationUtils $authenticationUtils, 
    AvisRepository $avisRepository,
    ServicesRepository $servicesRepository,
    HabitatRepository $habitatRepository, 
    Request $request, 
    EntityManagerInterface $entityManager, 
    Security $security
): Response {
    // Récupérer l'erreur d'authentification (le cas échéant)
    $error = $authenticationUtils->getLastAuthenticationError();

    // Dernier nom d'utilisateur saisi
    $lastUsername = $authenticationUtils->getLastUsername();
    
    // Création du formulaire d'avis
    $avis = new Avis();
    $form = $this->createForm(AvisType::class, $avis);    

    // Gestion du formulaire
    $form->handleRequest($request);
   
    // Récupérer tous les avis existants
    $avisList = $avisRepository->findAll();

    // Récupérer tous les services existants
    $habitat1 = $habitatRepository->findBy(['nom'=> 'aerien']);
    $habitat2 = $habitatRepository->findBy(['nom'=> 'terrestre']);
    $habitat3 = $habitatRepository->findBy(['nom'=> 'aquatique']);

    //Récupérer tous les services existants
    $services = $servicesRepository->findBy(['nom'=> 'Restauration']);
    $services2 = $servicesRepository->findBy(['nom'=> 'Habitats']);
    $services3 = $servicesRepository->findBy(['nom'=> 'Visites']);

    // Vérifier si le formulaire a été soumis et est valide
    if ($form->isSubmitted() && $form->isValid()) {
        
        // Définir la date de création et marquer l'avis comme validé
        $avis->setCreatedAt(new \DateTimeImmutable());
        $avis->setIsValidated(false);

        // Persister l'avis
        $entityManager->persist($avis);
        $entityManager->flush();

        // Redirection après soumission
        return $this->redirectToRoute('Accueil');
    }

    // Rendre la vue avec les données
    return $this->render('home/index.html.twig', [
        'last_username'   => $lastUsername,
        'error'           => $error,
        'form'            => $form->createView(),
        'avisList'        => $avisList,
        'services'    => $services,
        'services2'    => $services2,
        'services3'    => $services3,

        'habitat1'    => $habitat1,
        'habitat2'    => $habitat2,
        'habitat3'    => $habitat3,
    ]);
}



#[Route('/about', name: 'about')]
public function about(): Response
{
    return $this->render('home/about.html.twig', [
        'controller_name' => 'AboutController',
    ]);
}



#[Route('/contact', name: 'contact')]
public function contact(EntityManagerInterface $entityManager, Request $request,): Response
{
    $contact = new Contact();
    $form = $this->createForm(ContactType::class, $contact);

    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $contact->setCreatedAt(new \DateTimeImmutable());
        $entityManager->persist($contact);
        $entityManager->flush();
    }

    return $this->render('home/contact.html.twig', [
        'ContactForm' => $form->createView(),
    ]);
}



    #[Route('/api/avis', name: 'api_avis_list')]
    public function list(AvisRepository $avisRepository): JsonResponse
    {
        // Récupère tous les avis
        $avisList = $avisRepository->findAll();

         // Transforme les données en JSON
         $avisData = [];
         foreach ($avisList as $avis) {
             $imagePath = $potentialPath = '/' . $avis->getNom();
     
             // Ensuite on vérifie si une image spécifique existe
             foreach (['.jpg', '.png', '.jpeg'] as $extension) {
                 
                 if (file_exists($potentialPath)) {
                     $imagePath = $potentialPath;
                     break;
                 }
             }
             $avisData[] = [
                 //'pseudo' => $avis->getPseudo(),
                 'comnnetaire' => $avis->getCommentaire(),
                 'image_habitat' => $imagePath,
             ];
         }

        return $this->render('home/index.html.twig', [
            'avisList' => $avisList,
        ]);
    }

    #[Route('/habitats/aerien/{id}', name: 'animal_aerien_show')]
    public function showaerien(AnimalRepository $aerienRepository, $id): Response
    {
        $aerien = $aerienRepository->find($id);

        // Vérifiez si l'animal existe
        if (!$aerien) {
            throw $this->createNotFoundException('Cet animal n\'existe pas');
        }
        return $this->render('animal/show.html.twig', [
            'aerien' => $aerien,
        ]);
    }




/*private $firebaseService;

public function __construct(FirebaseService $firebaseService)
{
    $this->firebaseService = $firebaseService;
}


  #[Route('/', name:'add_review', methods:'{"POST"}')]
public function addReview(Request $request): Response
{
    $pseudo = $request->request->get('pseudo');
    $commentaire = $request->request->get('commentaire');
    $userId = $request->request->get('user_id');
    $createdAt = new \DateTime();
    $isValidated = false;

    $reviewData = [
        'pseudo' => $pseudo,
        'commentaire' => $commentaire,
        'user_id' => $userId,
        'createdAt' => $createdAt->format(\DateTime::ISO8601),
        'isvalidated' => $isValidated,
    ];

    $this->firebaseService->addReview($reviewData);

    return new Response('Review added successfully.');
}


 #[Route('/reviews', name:'get_reviews', methods:'{"GET"}')]
 
public function getReviews(): Response
{
    $reviews = $this->firebaseService->getReviews();

    // Optionnel : formater les données pour les afficher dans une vue ou une réponse JSON
    return $this->json($reviews);
}
    */

}
