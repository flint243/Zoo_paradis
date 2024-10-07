<?php

namespace App\Controller;

use App\Entity\ServicesZoo;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\ServicesZooRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ServicesController extends AbstractController
{
    #[Route('/services', name: 'services')]
    public function index(ServicesZooRepository $serviceszooRepository, ): Response
    {
       // Récupérer tous les services existants
        $services = $serviceszooRepository->findBy(['nom'=> 'Restauration']);
        $services2 = $serviceszooRepository->findBy(['nom'=> 'Habitats']);
        $services3 = $serviceszooRepository->findBy(['nom'=> 'Visites']);

        return $this->render('services/services.html.twig', [
            'services' => $services,
            'services2' => $services2,
            'services3' => $services3,
        ]);
    }



    #[Route('/restauration', name: 'restauration')]
    public function resto(): Response
    {
       

        return $this->render('services/restauration.html.twig');
    }

    #[Route('/noshabitats', name: 'noshabitats')]
    public function habitats(): Response
    {
       
        return $this->render('services/noshabitats.html.twig');
    }

    #[Route('/visites_guidees', name: 'visites_guidees')]
    public function visitesguidees(): Response
    {
       
        return $this->render('services/visitesguidees.html.twig');
    }
}