<?php

namespace App\Controller;

use App\Entity\Avis;
use App\Entity\User;
use App\Form\AvisType;
use App\Service\FirebaseService;
use App\Repository\AvisRepository;
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
    Request $request, 
    EntityManagerInterface $entityManager, 
    Security $security
): Response {
    // Récupérer l'erreur d'authentification (le cas échéant)
    $error = $authenticationUtils->getLastAuthenticationError();

    // Dernier nom d'utilisateur saisi
    $lastUsername = $authenticationUtils->getLastUsername();
    
    // Utilisateur connecté
    $user = $security->getUser();
    
    // Création du formulaire d'avis
    $avis = new Avis();
    $form = $this->createForm(AvisType::class, $avis);

    // Gestion du formulaire
    $form->handleRequest($request);

    // Récupérer tous les avis existants
    $avisList = $avisRepository->findAll();

    // Boucler sur les avis pour récupérer les images de profil
    $avisProfileImages = [];
    foreach ($avisList as $avisItem) {
        if ($avisItem->getUser()) {
            $profileImage = $avisItem->getUser()->getProfileImage(); // Récupérer l'image de profil
            $avisProfileImages[$avisItem->getId()] = $profileImage;  // Stocker l'image pour chaque avis
        }
    }
    
    // Vérifier si le formulaire a été soumis et est valide
    if ($form->isSubmitted() && $form->isValid()) {
        
        // Associer l'utilisateur connecté à l'avis
        if ($user) {
            $avis->setUser($user); // Associe l'utilisateur connecté
            $avis->setPseudo($user->getPseudo()); // Associe le pseudo de l'utilisateur
        } else {
            throw new \Exception('Aucun utilisateur connecté. Impossible de soumettre un avis.');
        }

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
        'user'            => $user,
        'form'            => $form->createView(),
        'avisList'        => $avisList,
        'avisProfileImages' => $avisProfileImages, // Passer les images de profil à la vue
    ]);
}


    #[Route('/restauration', name: 'restauration')]
    public function resto(): Response
    {
       

        return $this->render('home/restauration.html.twig');
    }

    #[Route('/zoo', name: 'zoo')]
    public function zoo(): Response
    {
       

        return $this->render('home/zoo.html.twig');
    }


    #[Route('/api/avis', name: 'api_avis_list')]
    public function list(AvisRepository $avisRepository): JsonResponse
    {
        // Récupère tous les avis
        $avisList = $avisRepository->findAll();

         // Transforme les données en JSON
         $avisData = [];
         foreach ($avisList as $avis) {
             $imagePath = $potentialPath = '/' . $avis->getPseudo();
     
             // Ensuite on vérifie si une image spécifique existe
             foreach (['.jpg', '.png', '.jpeg'] as $extension) {
                 
                 if (file_exists($potentialPath)) {
                     $imagePath = $potentialPath;
                     break;
                 }
             }
             $avisData[] = [
                 'pseudo' => $avis->getPseudo(),
                 'comnnetaire' => $avis->getCommentaire(),
                 'image_habitat' => $imagePath,
             ];
         }

        return $this->render('home/index.html.twig', [
            'avisList' => $avisList,
        ]);
    }






private $firebaseService;

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

}
