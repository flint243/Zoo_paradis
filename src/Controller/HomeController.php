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
    public function index(AuthenticationUtils $authenticationUtils, 
    AvisRepository $avisRepository, 
    Request $request, 
    EntityManagerInterface $entityManager, 
    Security $security
    ): Response {
        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();
        $user = $security->getUser();
        
        $avis = new Avis();
        //$user = new User();
        $form = $this->createForm(AvisType::class, $avis);

        $form->handleRequest($request);
        $avisList = $avisRepository->findAll();

        // Boucler sur les avis pour accéder aux données utilisateur et image de profil
        foreach ($avisList as $avis) {
            $profileImage = $avis->getUser()->getProfileImage(); // Récupère l'image de profil
            // Vous pouvez maintenant utiliser $profileImage dans votre vue
        }
        
            $pseudo = $avis->getPseudo();
        if ($form->isSubmitted() && $form->isValid()) {
            /*if (!$user->getPseudo()) {
                throw new \Exception('L\'utilisateur n\'a pas de pseudo défini.');
            }*/
            
            $avis->setCreatedAt(new \DateTimeImmutable());
            $avis->setIsValidated(true);
            // Associer l'utilisateur connecté à l'avis
            //$avis->setUser();
            $avis->setPseudo($pseudo);
            

            $entityManager->persist($avis);
            $entityManager->flush();

            // Redirige après la soumission réussie
            return $this->redirectToRoute('Accueil');
        }
        return $this->render('home/index.html.twig', [
            'last_username' => $lastUsername,
            'error'     => $error,
            'user'      => $user,
            'form'      => $form->createView(),
            'avisList'  => $avisList,
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
