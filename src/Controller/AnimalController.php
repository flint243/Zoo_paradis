<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use App\Service\FirebaseService;
use App\Repository\AnimalRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AnimalController extends AbstractController
{
    private FirebaseService $firebaseService;
    private LoggerInterface $logger;

    public function __construct(FirebaseService $firebaseService, LoggerInterface $logger)
    {
        $this->firebaseService = $firebaseService;
        $this->logger = $logger;
    }
    

    /******************* AERIEN *****************/
   

/*
    #[Route('/aerien/{id}', name: 'animal_aerien_show')]
    public function showaerien(AnimalRepository $animalRepository, int $id): Response
    {
        $aerien = $animalRepository->find($id);

        // Vérifiez si l'animal existe
        if (!$aerien) {
            throw $this->createNotFoundException('Cet animal n\'existe pas');
        }

        // Récupérer le compteur de clics depuis Firebase
        $database = $this->firebaseService->getDatabase();
        $ref = $database->getReference('uploadsAnimals/imagesAnimals/' . $id);
        $clickCount = $ref->getSnapshot()->getValue()['click_count'] ?? 0;
        dump($clickCount);

        return $this->render('animal/show.html.twig', [
            'aerien' => $aerien,
            'clickCount' => $clickCount,
        ]);
    }
*/

/******************* TERRESTRE *****************/
/*    public function incrementClickTerrestre(Request $request): JsonResponse
    {
        $terrestre = $request->request->get('terrestre');

        // Chemin Firebase pour l'image cliquée
        $ref = $this->database->getReference('images/' . $terrestre);

        // Récupérer le compteur actuel et l'incrémenter
        $currentCount = $ref->getSnapshot()->getValue()['click_count'] ?? 0;
        $ref->update(['click_count' => $currentCount + 1]);

        return new JsonResponse(['message' => 'Click counted!', 'new_count' => $currentCount + 1]);
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
 /*   public function incrementClickAquatique(Request $request): JsonResponse
    {
        $aquatique = $request->request->get('aquatique');

        // Chemin Firebase pour l'image cliquée
        $ref = $this->database->getReference('images/' . $aquatique);

        // Récupérer le compteur actuel et l'incrémenter
        $currentCount = $ref->getSnapshot()->getValue()['click_count'] ?? 0;
        $ref->update(['click_count' => $currentCount + 1]);

        return new JsonResponse(['message' => 'Click counted!', 'new_count' => $currentCount + 1]);
    }

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
*/

    
}
