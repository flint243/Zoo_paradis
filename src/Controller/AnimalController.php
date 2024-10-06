<?php

namespace App\Controller;

use App\Entity\Animal;
use Kreait\Firebase\Factory;
use Kreait\Firebase\Database;
use App\Repository\AnimalRepository;
use App\Repository\AerienRepository;
use App\Repository\AquatiqueRepository;
use App\Repository\TerrestreRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class AnimalController extends AbstractController
{

    #[Route('/aerien/{id}', name: 'animal_show_aerien')]
    public function showaerien(AerienRepository $aerienRepository, $id): Response
    {
        $aerien = $aerienRepository->find($id);

        // Vérifiez si l'animal existe
        if (!$aerien) {
            throw $this->createNotFoundException('Cet animal n\'existe pas');
        }


        return $this->render('animal/showaerien.html.twig', [
            'aerien' => $aerien,
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

    #[Route('/aerien', name: 'animal_aerien')]
    public function aerien(AerienRepository $aerienRepository): Response
    {
        $aerien = $aerienRepository->findAll();


        return $this->render('habitats/aerien.html.twig', [
            'aerien' => $aerien,
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
