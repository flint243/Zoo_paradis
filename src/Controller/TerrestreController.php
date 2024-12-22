<?php

namespace App\Controller;

use App\Entity\Animal;
use App\Entity\Habitat;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class TerrestreController extends AbstractController
{
    #[Route('/SingleTerrestre/{id}', name: 'single_terrestre')]
    public function index(int $id, EntityManagerInterface $entityManager): Response
    {
         // Récupérer les détails de l'animal par son ID
         $habitats = $entityManager->getRepository(Habitat::class)->find($id);

         if (!$habitats) {
             throw $this->createNotFoundException('animal non trouvé');
         }
        return $this->render('animal/singleTerrestre.html.twig', [
            'habitats' => $habitats,
        ]);
    }
}
