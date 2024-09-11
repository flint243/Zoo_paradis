<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class SingleProductController extends AbstractController
{
    #[Route('/single/product', name: 'app_single_product')]
    public function index(): Response
    {
        return $this->render('single_product/singleProduct.html.twig', [
            'controller_name' => 'SingleProductController',
        ]);
    }
}
