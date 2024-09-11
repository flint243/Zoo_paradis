<?php

namespace App\Controller;

//use App\Entity\Avis;
//use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\FirebaseService;

class AvisAdminController extends AbstractController
{
  /*  #[Route('/admin/avis/validation/{id}', name: 'avis_validation')]
    public function validateAvis(Avis $avis, EntityManagerInterface $entityManager): Response
    {
        // Valide l'avis
        $avis->setIsValidated(true);
        $entityManager->persist($avis);
        $entityManager->flush();

        // Redirection vers la page de gestion des avis
        return $this->redirectToRoute('admin_avis_list');
    }

    #[Route('/admin/avis/rejet/{id}', name: 'avis_rejet')]
    public function rejectAvis(Avis $avis, EntityManagerInterface $entityManager): Response
    {
        // Invalide l'avis (optionnel : le supprimer ou modifier)
        $entityManager->remove($avis);
        $entityManager->flush();

        // Redirection vers la page de gestion des avis
        return $this->redirectToRoute('admin_avis_list');
    }
        */




        private $firebaseService;

        public function __construct(FirebaseService $firebaseService)
        {
            $this->firebaseService = $firebaseService;
        }
    
        /**
         * @Route("/review/add", name="add_review")
         */
        public function addReview(Request $request): Response
        {
            $reviewData = [
                'user' => $request->request->get('user'),
                'rating' => $request->request->get('rating'),
                'comment' => $request->request->get('comment'),
            ];
    
            $this->firebaseService->addReview($reviewData);
    
            return new Response('Review added successfully.');
        }

}


