<?php

namespace App\Controller;

use App\Entity\Animal;
use Kreait\Firebase\Factory;
use Kreait\Firebase\Database;
use App\Repository\AnimalRepository;
use App\Repository\CelesteRepository;
use App\Repository\AquatiqueRepository;
use App\Repository\TerrestreRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class AnimalController extends AbstractController
{

    #[Route('/celeste/{id}', name: 'animal_show_celeste')]
    public function showCeleste(CelesteRepository $celesteRepository, $id): Response
    {
        $celeste = $celesteRepository->find($id);

        // Vérifiez si l'animal existe
        if (!$celeste) {
            throw $this->createNotFoundException('Cet animal n\'existe pas');
        }


        return $this->render('animal/showCeleste.html.twig', [
            'celeste' => $celeste,
        ]);
    }

    #[Route('/terrestre/{id}', name: 'animal_show')]
    public function show(TerrestreRepository $terrestreRepository, $id): Response
    {
        $terrestre = $terrestreRepository->find($id);

        // Vérifiez si l'animal existe
        if (!$terrestre) {
            throw $this->createNotFoundException('Cet animal n\'existe pas');
        }


        return $this->render('animal/show.html.twig', [
            'terrestre' => $terrestre,
        ]);
    }

    #[Route('/aquatique/{id}', name: 'animal_show_aquatique')]
    public function showAquatique(AquatiqueRepository $aquatiqueRepository, $id): Response
    {
        $aquatique = $aquatiqueRepository->find($id);

        // Vérifiez si l'animal existe
        if (!$aquatique) {
            throw $this->createNotFoundException('Cet animal n\'existe pas');
        }


        return $this->render('animal/showAquatique.html.twig', [
            'aquatique' => $aquatique,
        ]);
    }




    #[Route('/terrestre', name: 'animal_terrestre')]
    public function terretsre(TerrestreRepository $terrestreRepository): Response
    {
        $terrestre = $terrestreRepository->findAll();

       
        return $this->render('habitats/terrestre.html.twig', [
            'terrestre' => $terrestre,
        ]);
    }

    #[Route('/celeste', name: 'animal_celeste')]
    public function celeste(CelesteRepository $celesteRepository): Response
    {
        $celeste = $celesteRepository->findAll();


        return $this->render('habitats/celeste.html.twig', [
            'celeste' => $celeste,
        ]);
    }


    #[Route('/aquatique', name: 'animal_aquatique')]
    public function aquatique(AquatiqueRepository $aquatiqueRepository): Response
    {
        $aquatique = $aquatiqueRepository->findAll();

       
        return $this->render('habitats/aquatique.html.twig', [
            'aquatique' => $aquatique,
        ]);
    }


}
