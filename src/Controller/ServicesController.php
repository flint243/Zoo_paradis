<?php

namespace App\Controller;

use App\Entity\Services;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\ServicesRepository;
use App\Entity\Habitat;
use App\Repository\HabitatRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ServicesController extends AbstractController
{
    #[Route('/services', name: 'services')]
    public function index(ServicesRepository $servicesRepository, ): Response
    {
       // Récupérer tous les services existants
        $services = $servicesRepository->findBy(['nom'=> 'Restauration']);
        $services2 = $servicesRepository->findBy(['nom'=> 'Habitats']);
        $services3 = $servicesRepository->findBy(['nom'=> 'Visites']);

        return $this->render('nos-services/services.html.twig', [
            'services' => $services,
            'services2' => $services2,
            'services3' => $services3,
        ]);
    }



    #[Route('/restauration', name: 'restauration')]
    public function resto(): Response
    {
       

        return $this->render('nos-services/restauration.html.twig');
    }

    #[Route('/restauration1', name: 'restauration1')]
    public function resto1(): Response
    {
       

        return $this->render('nos-services/restauration1.html.twig');
    }

    #[Route('/restauration2', name: 'restauration2')]
    public function resto2(): Response
    {
       

        return $this->render('nos-services/restauration2.html.twig');
    }

    #[Route('/noshabitats', name: 'noshabitats')]
    public function habitats(): Response
    {
       
        return $this->render('nos-services/noshabitats.html.twig');
    }

    #[Route('/visites', name: 'visites_guidees')]
    public function visitesguidees(EntityManagerInterface $entityManagerInterface, HabitatRepository $habitatRepository): Response
    {

        $habitatAerien    = $entityManagerInterface->getRepository(Habitat::class)->findBy(['nom'  => 'aerien']);
        $habitatTerrestre = $entityManagerInterface->getRepository(Habitat::class)->findBy(['nom'  => 'terrestre']);
        $habitatAquatique = $entityManagerInterface->getRepository(Habitat::class)->findBy(['nom'  => 'aquatique']);

        return $this->render('nos-services/visitesguidees.html.twig',[
            'habitatAerien'    => $habitatAerien,
            'habitatTerrestre' => $habitatTerrestre,
            'habitatAquatique' => $habitatAquatique,
        ]);
    }

    #[Route('/single_visite', name: 'single_visite')]
    public function singleVisite(): Response
    {
       

        return $this->render('nos-services/single_visite.html.twig');
    }
}
