<?php

namespace App\Controller\Admin;

use App\Entity\Animal;
use App\Entity\Habitat;
use App\Entity\InfosAnimal;
use App\Repository\AnimalRepository;
use App\Repository\HabitatRepository;
use App\Repository\InfosAnimalRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;

class VeterinaireDashboardController extends AbstractDashboardController
{
    protected $animalRepository;
    protected $habitatRepository;
    protected $infosAnimalRepository;
    private UrlGeneratorInterface $urlGenerator;

    public function __construct(UrlGeneratorInterface $urlGenerator,

        AnimalRepository $animalRepository,
        HabitatRepository $habitatRepository,
        InfosAnimalRepository $infosAnimalRepository
    )
    {
        $this->urlGenerator = $urlGenerator;

        $this->animalRepository = $animalRepository;
        $this->habitatRepository = $habitatRepository;
        $this->infosAnimalRepository = $infosAnimalRepository;
    }

    #[Route('/veterinaire-admin', name: 'veterinaire_admin')]
    public function index(): Response
    {
         // Redirection vers une entité ou un CRUD spécifique
         return $this->render('admin/veterinaireDashboard.html.twig', [

            'countAllAnimal' => $this->animalRepository->countAllAnimal(),
            'countAllHabitat' => $this->habitatRepository->countAllHabitat(),
            'countAllInfosAnimal' => $this->infosAnimalRepository->countAllInfosAnimal(),
        ]);
    }

    public function configureDashboard(): Dashboard
    {
        // Générer le lien vers la route 'Accueil'
        $homeUrl = $this->urlGenerator->generate('Accueil');
        
        return Dashboard::new()
        ->setTitle('<a href="' . $homeUrl . '">ZooParadis</a>');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Vétérinaire dashboard', 'fa fa-house-chimney-medical');
        yield MenuItem::linkToDashboard(' '); yield MenuItem::linkToDashboard(' '); yield MenuItem::linkToDashboard(' ');

        yield MenuItem::linkToCrud('Animaux', 'fas fa-crow', Animal::class);
        yield MenuItem::linkToCrud('Habitats', 'fas fa-home', Habitat::class);
        yield MenuItem::linkToCrud('Infos animaux', 'fas fa-home', InfosAnimal::class);
    }
}
