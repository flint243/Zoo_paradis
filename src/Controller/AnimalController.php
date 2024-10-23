<?php

namespace App\Controller;

use App\Entity\Animal;
use Kreait\Firebase\Factory;
use Kreait\Firebase\Database;
use App\Repository\AnimalRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AnimalController extends AbstractController
{
    #[Route('/aerien/{id}', name: 'animal_aerien_show')]
    public function showaerien(AnimalRepository $animalRepository, $id): Response
    {
        $aerien = $animalRepository->find($id);

        // Vérifiez si l'animal existe
        if (!$aerien) {
            throw $this->createNotFoundException('Cet animal n\'existe pas');
        }
        return $this->render('animal/show.html.twig', [
            'aerien' => $aerien,
        ]);
    }


    #[Route('habitats/terrestre/{id}', name: 'terrestre_show')]
    public function showTerrestre(AnimalRepository $animalRepository, $id): Response
    {
        $terrestre = $animalRepository->find($id);

        // Vérifiez si l'animal existe
        if (!$terrestre) {
            throw $this->createNotFoundException('Cet animal n\'existe pas');
        }
        return $this->render('animal/show_terrestre.html.twig', [
            'terrestre' => $terrestre,
        ]);
    }

    /******************* AQUATIQUE *****************/


    #[Route('/aquatique/{id}', name: 'animal_aquatique_show')]
    public function showAquatique(AnimalRepository $animalRepository, $id): Response
    {
        $aquatique = $animalRepository->find($id);

        // Vérifiez si l'animal existe
        if (!$aquatique) {
            throw $this->createNotFoundException('Cet animal n\'existe pas');
        }

        return $this->render('animal/show_aquatique.html.twig', [
            'aquatique' => $aquatique,
        ]);
    }
}
