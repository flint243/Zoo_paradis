<?php

namespace App\Controller;

use App\Entity\Avis;
use App\Entity\User;
use App\Form\AvisType;
use App\Service\FirebaseService;
use App\Repository\AvisRepository;
use App\Repository\HabitatRepository;
use App\Repository\ServicesZooRepository;
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
    ServicesZooRepository $serviceszooRepository,
    HabitatRepository $habitatRepository, 
    Request $request, 
    EntityManagerInterface $entityManager, 
    Security $security
): Response {
    // Récupérer l'erreur d'authentification (le cas échéant)
    $error = $authenticationUtils->getLastAuthenticationError();

    // Dernier nom d'utilisateur saisi
    $lastUsername = $authenticationUtils->getLastUsername();
    
    // Utilisateur connecté
    //$user = $security->getUser();
    
    // Création du formulaire d'avis
    $avis = new Avis();
    $form = $this->createForm(AvisType::class, $avis);

    // Gestion du formulaire
    $form->handleRequest($request);

    // Récupérer tous les avis existants
    $avisList = $avisRepository->findAll();

    // Récupérer tous les services existants
    $habitat = $habitatRepository->findBy(['nom'=> 'celeste']);
    $habitat2 = $habitatRepository->findBy(['nom'=> 'terrestre']);
    $habitat3 = $habitatRepository->findBy(['nom'=> 'aquatique']);

    //Récupérer tous les services existants
    $services = $serviceszooRepository->findBy(['nom'=> 'Restauration']);
    $services2 = $serviceszooRepository->findBy(['nom'=> 'Habitats']);
    $services3 = $serviceszooRepository->findBy(['nom'=> 'Visites']);

   
       
        
    // Vérifier si le formulaire a été soumis et est valide
    if ($form->isSubmitted() && $form->isValid()) {
        
        // Associer l'utilisateur connecté à l'avis
       /* if ($user) {
            $avis->setUser($user); // Associe l'utilisateur connecté
            $avis->setPseudo($user->getPseudo()); // Associe le pseudo de l'utilisateur
        } else {
            throw new \Exception('Aucun utilisateur connecté. Impossible de soumettre un avis.');
        }*/

        // Définir la date de création et marquer l'avis comme validé
        $avis->setCreatedAt(new \DateTimeImmutable());
        $avis->setIsValidated(true);

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
        //'user'            => $user,
        'form'            => $form->createView(),
        'avisList'        => $avisList,
        /*'avisProfileImages' => $avisProfileImages, // Passer les images de profil à la vue*/
        'services'    => $services,
        'services2'    => $services2,
        'services3'    => $services3,

        'habitat'    => $habitat,
        'habitat2'    => $habitat2,
        'habitat3'    => $habitat3,
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
