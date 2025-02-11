<?php

namespace App\Controller;

use App\Entity\Animal;
use App\Entity\Habitat;
use App\Entity\InfosAnimal;
use Doctrine\DBAL\Exception;
use Psr\Log\LoggerInterface;
use Doctrine\DBAL\Connection;
use App\Service\FirebaseService;
use App\Repository\AnimalRepository;
use App\Repository\HabitatRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Doctrine\DBAL\Statement; // Vérifiez que cela est bien inclus
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HabitatsController extends AbstractController
{
    private FirebaseService $firebaseService;
    private LoggerInterface $logger;

    public function __construct(FirebaseService $firebaseService, LoggerInterface $logger)
    {
        $this->firebaseService = $firebaseService;
        $this->logger = $logger;
    }

    #[Route('/habitats', name: 'habitats')]
    public function habitats(EntityManagerInterface $entityManagerInterface, HabitatRepository $habitatRepository): Response
    {
        // Récupérer tous les services existants
    $habitatAerien    = $entityManagerInterface->getRepository(Habitat::class)->findBy(['nom'  => 'aerien']);
    $habitatTerrestre = $entityManagerInterface->getRepository(Habitat::class)->findBy(['nom'  => 'terrestre']);
    $habitatAquatique = $entityManagerInterface->getRepository(Habitat::class)->findBy(['nom'  => 'aquatique']);
    
        return $this->render('habitats/habitats.html.twig', [
            'habitatAerien'    => $habitatAerien,
            'habitatTerrestre' => $habitatTerrestre,
            'habitatAquatique' => $habitatAquatique,
        ]);
    }

/************************ HABITAT AERIEN  **************************/

    #[Route('/habitats/aerien', name: 'show_aerien')]
    public function aerien(AnimalRepository $animalRepository): Response
    {
        $aerien = $aerien = $animalRepository->findBy(["habitat" => 1], ['created_at' => 'DESC']);

        return $this->render('habitats/aerien.html.twig', [
            'aerien' => $aerien,
        ]);
    }


    #[Route('/habitats/aerien/{id}', name: 'show_aerienId')]
    public function aerienId(EntityManagerInterface $entityManager, int $id): Response
    {
        $aerien = $aerien = $entityManager->getRepository(Animal::class)->find($id);

        $infos = $infos = $entityManager->getRepository(InfosAnimal::class)->find($id);

        // Récupérer le compteur de clics depuis Firebase
        $database = $this->firebaseService->getDatabase();
        $ref = $database->getReference('uploadsAnimals/imagesAnimals/' . $id);
        $clickCount = $ref->getSnapshot()->getValue()['click_count'] ?? 0;
        //dump($aerien);

        return $this->render('animal/show.html.twig', [
            'aerien' => $aerien,
            'clickCount' => $clickCount,
            'infos' => $infos,
        ]);
    }

     
    #[Route("/increment-click-aerien", name: "increment_click_aerien", methods: ["POST"])]     
    public function incrementClickAerien(Request $request): JsonResponse {
    try {
        // Récupérer l'ID de l'aérien depuis le corps de la requête
        $aerienId = $request->getContent();
        $data = json_decode($aerienId, true);
        
        $aerienId = $data['aerienId'] ?? null;
        
        if (!$aerienId) {
            $this->logger->error('Aérien ID manquant dans la requête.');
            return new JsonResponse(['error' => 'Missing image ID'], 400);
        }

        $this->logger->info('Récupération de la base de données Firebase...');
        $database = $this->firebaseService->getDatabase();
        
        if (!$database) {
            $this->logger->error('Firebase database non accessible.');
            return new JsonResponse(['error' => 'Firebase database not accessible'], 500);
        }

        $this->logger->info('Connexion à Firebase réussie.');
        $ref = $database->getReference('uploadsAnimals/imagesAnimals/' . $aerienId);
        $this->logger->info('Référence récupérée.');

        $currentCount = $ref->getSnapshot()->getValue()['click_count'] ?? 0;
        $this->logger->info('Compteur actuel : ' . $currentCount);

        $ref->update(['click_count' => $currentCount + 1]);
        $this->logger->info('Compteur mis à jour.');

        return new JsonResponse([]);
    } catch (\Exception $e) {
        $this->logger->error('Erreur lors de l\'incrémentation : ' . $e->getMessage());
        return new JsonResponse(['error' => 'Internal Server Error', 'message' => $e->getMessage()], 500);
    }
}
/******************** FIN AERIENS **********************/



    #[Route('/habitats/terrestre', name: 'terrestre_show')]
    public function habitatTerrestre(AnimalRepository $animalRepository): Response
    {
       $terrestre = $animalRepository->findBy(["habitat" => 2], ['created_at' => 'DESC']);
        return $this->render('habitats/terrestre.html.twig', [
           'terrestre' => $terrestre,
        ]);
    }

    #[Route('/habitats/terrestre/{id}', name: 'show_terrestreId')]
    public function terrestreId(EntityManagerInterface $entityManager, int $id): Response
    {
        $terrestre = $terrestre = $entityManager->getRepository(Animal::class)->find($id);

         // Récupérer le compteur de clics depuis Firebase
         $database = $this->firebaseService->getDatabase();
         $ref = $database->getReference('uploadsAnimals/imagesAnimals/' . $id);
         $clickCount = $ref->getSnapshot()->getValue()['click_count'] ?? 0;
        //dump($terrestre);

        return $this->render('animal/show_terrestre.html.twig', [
            'terrestre' => $terrestre,
            'clickCount' => $clickCount,
        ]);
    }


    #[Route("/increment-click-terrestre", name: "increment_click_terrestre", methods: ["POST"])]     
    public function incrementClickTerrestre(Request $request): JsonResponse {
    try {
        // Récupérer l'ID de l'aérien depuis le corps de la requête
        $terrestreId = $request->getContent();
        $data = json_decode($terrestreId, true);
        
        $terrestreId = $data['terrestreId'] ?? null;
        
        if (!$terrestreId) {
            $this->logger->error('Aérien ID manquant dans la requête.');
            return new JsonResponse(['error' => 'Missing image ID'], 400);
        }

        $this->logger->info('Récupération de la base de données Firebase...');
        $database = $this->firebaseService->getDatabase();
        
        if (!$database) {
            $this->logger->error('Firebase database non accessible.');
            return new JsonResponse(['error' => 'Firebase database not accessible'], 500);
        }

        $this->logger->info('Connexion à Firebase réussie.');
        $ref = $database->getReference('uploadsAnimals/imagesAnimals/' . $terrestreId);
        $this->logger->info('Référence récupérée.');

        $currentCount = $ref->getSnapshot()->getValue()['click_count'] ?? 0;
        $this->logger->info('Compteur actuel : ' . $currentCount);

        $ref->update(['click_count' => $currentCount + 1]);
        $this->logger->info('Compteur mis à jour.');

        return new JsonResponse([]);
    } catch (\Exception $e) {
        $this->logger->error('Erreur lors de l\'incrémentation : ' . $e->getMessage());
        return new JsonResponse(['error' => 'Internal Server Error', 'message' => $e->getMessage()], 500);
    }
}
/******************** FIN TERRESTRE **********************/

    
    #[Route('/habitats/aquatique', name: 'aquatique')]
    public function aquatique(AnimalRepository $animalRepository): Response
    {
        $aquatique = $animalRepository->findBy(["habitat" => 3], ['created_at' => 'DESC']);
       

        return $this->render('habitats/aquatique.html.twig', [
            "aquatique" => $aquatique,
        ]);
    }

    #[Route('/habitats/aquatique/{id}', name: 'show_aquatiqueId')]
    public function aquatiqueId(EntityManagerInterface $entityManager, int $id): Response
    {
        $aquatique = $aquatique = $entityManager->getRepository(Animal::class)->find($id);

         // Récupérer le compteur de clics depuis Firebase
         $database = $this->firebaseService->getDatabase();
         $ref = $database->getReference('uploadsAnimals/imagesAnimals/' . $id);
         $clickCount = $ref->getSnapshot()->getValue()['click_count'] ?? 0;
        //dump($aquatique);

        return $this->render('animal/show_aquatique.html.twig', [
            'aquatique' => $aquatique,
            'clickCount' => $clickCount,
        ]);
    }

    #[Route("/increment-click-aquatique", name: "increment_click_aquatique", methods: ["POST"])]     
    public function incrementClickAquatique(Request $request): JsonResponse {
    try {
        // Récupérer l'ID de l'aérien depuis le corps de la requête
        $aquatiqueId = $request->getContent();
        $data = json_decode($aquatiqueId, true);
        
        $aquatiqueId = $data['aquatiqueId'] ?? null;
        
        if (!$aquatiqueId) {
            $this->logger->error('Aérien ID manquant dans la requête.');
            return new JsonResponse(['error' => 'Missing image ID'], 400);
        }

        $this->logger->info('Récupération de la base de données Firebase...');
        $database = $this->firebaseService->getDatabase();
        
        if (!$database) {
            $this->logger->error('Firebase database non accessible.');
            return new JsonResponse(['error' => 'Firebase database not accessible'], 500);
        }

        $this->logger->info('Connexion à Firebase réussie.');
        $ref = $database->getReference('uploadsAnimals/imagesAnimals/' . $aquatiqueId);
        $this->logger->info('Référence récupérée.');

        $currentCount = $ref->getSnapshot()->getValue()['click_count'] ?? 0;
        $this->logger->info('Compteur actuel : ' . $currentCount);

        $ref->update(['click_count' => $currentCount + 1]);
        $this->logger->info('Compteur mis à jour.');

        return new JsonResponse([]);
    } catch (\Exception $e) {
        $this->logger->error('Erreur lors de l\'incrémentation : ' . $e->getMessage());
        return new JsonResponse(['error' => 'Internal Server Error', 'message' => $e->getMessage()], 500);
    }
}  

/******************** FIN AQUATIQUE **********************/

}
