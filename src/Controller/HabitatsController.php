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
    public function habitats(HabitatRepository $habitatRepository): Response
    {
        // Récupère uniquement les habitat validés
        // Récupérer tous les services existants
    $habitatAerien = $habitatRepository->findBy(['nom'=> 'aerien']);
    $habitatTerrestre = $habitatRepository->findBy(['nom'=> 'terrestre']);
    $habitatAquatique = $habitatRepository->findBy(['nom'=> 'aquatique']);

        return $this->render('habitats/habitats.html.twig', [
            'habitatAerien' => $habitatAerien,
            'habitatTerrestre' => $habitatTerrestre,
            'habitatAquatique' => $habitatAquatique,
        ]);
    }



    #[Route('/habitats/aerien', name: 'aerien')]
    public function aerien(AnimalRepository $animalRepository): Response
    {

        $aerien = $animalRepository->findBy(["habitat" => "1"]);

        return $this->render('habitats/aerien.html.twig', [
            'controller_name' => 'HabitatsController',
            'aerien' => $aerien,
        ]);
    }


/*
    #[Route('/habitats/aerien/{id}', name: 'habitat_aerien')]
    public function aerienId(int $id, EntityManagerInterface $entityManager): Response
    {
        // Récupérer les détails de l'habitat par son ID
        $habitatAerien = $entityManager->getRepository(Habitat::class)->find($id);
        //$aerien = $entityManager->getRepository(Animal::class)->findAll();

            $entityManager->persist($habitatAerien);
            $entityManager->flush();

       
        return $this->render('habitats/aerien.html.twig', [
            'habitatAerien' => $habitatAerien,
            //'aerien' => $aerien,
        ]);
    }
*/

/******************** FIN AERIENS **********************/

    #[Route('/habitats/terrestre', name: 'terrestre')]
    public function habitatTerrestre(AnimalRepository $animalRepository): Response
    {
       $terrestre = $animalRepository->findBy(["habitat" => "2"]);

        return $this->render('habitats/terrestre.html.twig', [
           'terrestre' => $terrestre,
        ]);
    }
/*
    #[Route('/habitats/terrestre/{id}', name: 'habitat_terrestre')]
    public function terre(int $id, EntityManagerInterface $entityManager): Response
    {
        // Récupérer l'objet Habitat par son ID
        //$animaux = $entityManager->getRepository(Animal::class)->findBy(['habitat' => $habitat]);

        $habitat = $entityManager->getRepository(Habitat::class)->find($id);
        $terrestre = $entityManager->getRepository(Animal::class)->findAll();
        
            $entityManager->persist($habitat);
            $entityManager->flush();


        if (!$habitat) {
            throw $this->createNotFoundException('habitat non trouvé');
        }
        // Récupérer tous les animaux liés à cet habitat
        $terrestre = $habitat->getAnimals();

        // Récupérer les animaux en fonction de l'objet Habitat
        //$animaux = $entityManager->getRepository(Animal::class)->findBy(['habitat' => $habitatEntity]);

        return $this->render('habitats/terrestre.html.twig', [
            'habitat' => $habitat,
            'terrestre' => $terrestre,
        ]);
    }

/******************** FIN TERRESTRE **********************/
    
    #[Route('/habitats/aquatique', name: 'aquatique')]
    public function aquatique(EntityManagerInterface $entityManager): Response
    {
        $aquatique = $entityManager->getRepository(Animal::class)->findBy(["habitat" => "3"]);

        return $this->render('habitats/aquatique.html.twig', [
            'controller_name' => 'HabitatsController',
            "aquatique" => $aquatique,
        ]);
    }

    
    #[Route('/habitats/aquatique/{id}', name: 'habitat_aquatique')]
    public function habitatAquatique(int $id, AnimalRepository $animalRepository, EntityManagerInterface $entityManager): Response
    {

         // Récupérer les détails de l'habitat par son ID
         $habitat = $entityManager->getRepository(Habitat::class)->find($id);

         $animal = $animalRepository->findAll();

        if (!$habitat) {
            throw $this->createNotFoundException('animal non trouvé');
        }
        return $this->render('habitats/aquatique.html.twig', [
            'habitat' => $habitat,
            'animal' => $animal,
        ]);
    }








/*
#[Route('/api/habitat', name: 'api_habitat_list')]
public function list(HabitatRepository $habitatRepository): JsonResponse
{
    // Récupère uniquement les habitat validés
    $habitats = $habitatRepository->findAll(); // Modifier selon tes besoins pour ne récupérer que les habitats validés

    // Transforme les données en JSON
    $habitatData = [];
    foreach ($habitats as $habitat) {
        $imagePath = $potentialPath = '/' . $habitat->getNom();

        // Ensuite on vérifie si une image spécifique existe
        foreach (['.jpg', '.png', '.jpeg'] as $extension) {
            
            if (file_exists($potentialPath)) {
                $imagePath = $potentialPath;
                break;
            }
        }
        $habitatData[] = [
            'nom' => $habitat->getNom(),
            'description_habitat' => $habitat->getDescription(),
            'image_habitat' => $imagePath,
        ];
    }

    return new JsonResponse($habitatData);
}
    */

}
