<?php

namespace App\Controller;

use App\Entity\Habitat;
use App\Form\HabitatType;
use App\Repository\HabitatRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class HabitatsController extends AbstractController
{
    #[Route('/habitats', name: 'habitats')]
    public function habitats(HabitatRepository $habitatRepository): Response
    {
        
        // Récupère uniquement les habitat validés
        $habitats = $habitatRepository->findAll(); // Modifier selon tes besoins pour ne récupérer que les habitats validés
    
        // Transforme les données en JSON
        $habitatData = [];
        foreach ($habitats as $habitat) {
            $imagePath = $potentialPath = '/public/uploads/images/' . $habitat->getImagesHabitat();
    
            // Ensuite on vérifie si une image spécifique existe
            foreach (['.jpg', '.png', '.jpeg'] as $extension) {
                
                if (file_exists($potentialPath)) {
                    $imagePath = $potentialPath;
                    break;
                }
            }
            $habitatData[] = [
                'nom' => $habitat->getNom(),
                'description_habitat' => $habitat->getDescriptionHabitat(),
                'image_habitat' => $imagePath,
            ];
        }

        /*foreach ($imagesHabitat as $avis) {
            $imagesHabitat = $avis->getImagesHabitat(); // Récupère l'image de profil
            // Vous pouvez maintenant utiliser $profileImage dans votre vue
        }*/

        return $this->render('habitats/habitats.html.twig', [
            'habitats' => $habitats,
            new JsonResponse($habitatData),
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
                'description_habitat' => $habitat->getDescriptionHabitat(),
                'image_habitat' => $imagePath,
            ];
        }
    
        return new JsonResponse($habitatData);
    }


    #[Route('/habitats/aquatique', name: 'aquatique')]
    public function aqua(): Response
    {
        return $this->render('habitats/aquatique.html.twig', [
            'controller_name' => 'HabitatsController',
        ]);
    }

    #[Route('/habitats/terrestre', name: 'terrestre')]
    public function terre(): Response
    {
        return $this->render('habitats/terrestre.html.twig', [
            'controller_name' => 'HabitatsController',
        ]);
    }

    #[Route('/habitats/celeste', name: 'celeste')]
    public function ciel(): Response
    {
        return $this->render('habitats/celeste.html.twig', [
            'controller_name' => 'HabitatsController',
        ]);
    }

}
