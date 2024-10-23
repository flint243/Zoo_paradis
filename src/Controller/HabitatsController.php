<?php

namespace App\Controller;

use App\Entity\Animal;
use App\Entity\Habitat;
use App\Repository\AnimalRepository;
use App\Repository\HabitatRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HabitatsController extends AbstractController
{
    #[Route('/habitats', name: 'habitats')]
    public function habitats(EntityManagerInterface $entityManagerInterface, HabitatRepository $habitatRepository): Response
    {
        // Récupérer tous les services existants
    $habitatAerien    = $entityManagerInterface->getRepository(Habitat::class)->findBy(['nom'  => 'aerien']);
    $habitatTerrestre = $entityManagerInterface->getRepository(Habitat::class)->findBy(['nom'  => 'terrestre']);
    $habitatAquatique = $entityManagerInterface->getRepository(Habitat::class)->findBy(['nom'  => 'aquatique']);
    if (!$habitatAerien) {
        // Gérer le cas où l'entité n'existe pas
        throw $this->createNotFoundException('Habitat not found');
    }
    if (!$habitatTerrestre) {
        // Gérer le cas où l'entité n'existe pas
        throw $this->createNotFoundException('Habitat not found');
    }
    if (!$habitatAquatique) {
        // Gérer le cas où l'entité n'existe pas
        throw $this->createNotFoundException('Habitat not found');
    }
    
    // Assurez-vous que l'entité est persistée avant de l'utiliser
    $entityManagerInterface->persist($habitatAerien[]);

    // Assurez-vous que l'entité est persistée avant de l'utiliser
    $entityManagerInterface->persist($habitatTerrestre[]);

    // Assurez-vous que l'entité est persistée avant de l'utiliser
    $entityManagerInterface->persist($habitatAquatique[]);

        return $this->render('habitats/habitats.html.twig', [
            'habitatAerien'    => $habitatAerien,
            'habitatTerrestre' => $habitatTerrestre,
            'habitatAquatique' => $habitatAquatique,
        ]);
    }



    #[Route('/habitats/aerien', name: 'aerien')]
    public function aerien(AnimalRepository $animalRepository): Response
    {
        $aerien = $animalRepository->findBy(["habitat" => "1"]);
        
        return $this->render('habitats/aerien.html.twig', [
            'aerien' => $aerien,
        ]);
    }

/******************** FIN AERIENS **********************/

    #[Route('/habitats/terrestre', name: 'terrestre')]
    public function habitatTerrestre(AnimalRepository $animalRepository): Response
    {
       $terrestre = $animalRepository->findBy(["habitat" => "2"]);
       
        return $this->render('habitats/terrestre.html.twig', [
           'terrestre' => $terrestre,
        ]);
    }

/******************** FIN TERRESTRE **********************/
    
    #[Route('/habitats/aquatique', name: 'aquatique')]
    public function aquatique(AnimalRepository $animalRepository): Response
    {
        $aquatique = $animalRepository->findBy(["habitat" => "3"]);
       

        return $this->render('habitats/aquatique.html.twig', [
            "aquatique" => $aquatique,
        ]);
    }

/******************** FIN AQUATIQUE **********************/

}
