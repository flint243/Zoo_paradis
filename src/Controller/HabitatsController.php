<?php

namespace App\Controller;

use App\Entity\Animal;
use App\Entity\Habitat;
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
        $habitats = $habitatRepository->findAll(); // Modifier selon tes besoins pour ne récupérer que les habitats validés

        return $this->render('habitats/habitats.html.twig', [
            'habitats' => $habitats,
        ]);
    }




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

    #[Route('/habitat/{id}', name: 'habitat_detail')]
    public function habitatDetail(int $id, EntityManagerInterface $entityManager): Response
    {
        // Récupérer les détails de l'habitat par son ID
        $habitat = $entityManager->getRepository(Habitat::class)->find($id);

        if (!$habitat) {
            throw $this->createNotFoundException('Habitat non trouvé');
        }
            $entityManager->persist($habitat);
            $entityManager->flush();
    
        return $this->render('habitats/details.html.twig', [
            'habitat' => $habitat,
        ]);
    }

/*
    #[Route('/habitats/celeste/', name: 'habitat_celeste')]
    public function habitatCelest($id, EntityManagerInterface $entityManager): Response
    {
        // Récupérer les détails de l'habitat par son ID
        $animaux = $entityManager->getRepository(Animal::class)->find($id);

        if (!$animaux) {
            throw $this->createNotFoundException('animaul non trouvé');
        }
        return $this->render('habitats/celeste.html.twig', [
            'animaux' => $animaux,
        ]);
    }
*/

    #[Route('habitats/terrestre', name: 'habitat_terrestre')]
    public function habitatTerrestre(EntityManagerInterface $entityManager): Response
    {

       $animals = $entityManager->getRepository(Animal::class)->findAll();


        return $this->render('habitats/terrestre.html.twig', [
           'animals' => $animals,
        ]);
    }



    #[Route('/habitats/terrestre/{id}', name: 'terrestre_by_habitat')]
    public function terre(int $id, int $habitat, EntityManagerInterface $entityManager): Response
    {
        // Récupérer l'objet Habitat par son ID
        //$animaux = $entityManager->getRepository(Animal::class)->findBy(['habitat' => $habitat]);

        $habitat = $entityManager->getRepository(Habitat::class)->find($id);
        
            $entityManager->persist($habitat);
            $entityManager->flush();


        if (!$habitat) {
            throw $this->createNotFoundException('habitat non trouvé');
        }
        // Récupérer tous les animaux liés à cet habitat
        $animals = $habitat->getAnimals();

        // Récupérer les animaux en fonction de l'objet Habitat
        //$animaux = $entityManager->getRepository(Animal::class)->findBy(['habitat' => $habitatEntity]);

        return $this->render('habitats/details.html.twig', [
            'habitat' => $habitat,
            'animals' => $animals,
        ]);
    }

/******************** FIN TERRESTRE **********************/


    
    #[Route('/habitats/aquatique', name: 'habitat_aquatique')]
    public function habitatAquatique(/*int $id, */EntityManagerInterface $entityManager): Response
    {

         // Récupérer les détails de l'habitat par son ID
         $animaux = $entityManager->getRepository(Animal::class)->findAll();

        if (!$animaux) {
            throw $this->createNotFoundException('animaul non trouvé');
        }
        return $this->render('habitats/aquatique.html.twig', [
            //'animaux' => $animaux,
        ]);
    }






    #[Route('/habitat/celeste', name: 'celeste')]
    public function ciel(): Response
    {
        return $this->render('habitats/celeste.html.twig', [
            'controller_name' => 'HabitatsController',
        ]);
    }


    
    #[Route('/habitat/aquatique', name: 'aquatique')]
    public function aquatique(): Response
    {
        return $this->render('habitats/aquatique.html.twig', [
            'controller_name' => 'HabitatsController',
        ]);
    }


}
