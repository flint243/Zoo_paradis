<?php

namespace App\Controller;

//use App\Entity\Avis;
//use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\FirebaseService;

class AvisController extends AbstractController
{
        private $firebaseService;

       /* public function __construct(FirebaseService $firebaseService)
        {
            $this->firebaseService = $firebaseService;
        }
    
        /**
         * @Route("/avis", name="add_avis")
         */
       /* public function addAvis(Request $request): Response
        {
            $avisData = [
                'user' => $request->request->get('user'),
                'rating' => $request->request->get('rating'),
                'comment' => $request->request->get('comment'),
            ];
    
            $this->firebaseService->addAvis($avisData);
    
            return new Response('avis added successfully.');
        }*/

}


