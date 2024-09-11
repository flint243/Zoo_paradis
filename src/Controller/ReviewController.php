<?php

// src/Controller/ReviewController.php
namespace App\Controller;

use App\Service\FirebaseService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReviewController extends AbstractController
{
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
