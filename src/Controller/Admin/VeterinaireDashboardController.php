<?php

namespace App\Controller\Admin;

use App\Entity\Animal;
use App\Entity\Habitat;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;


class VeterinaireDashboardController extends AbstractDashboardController
{
    private UrlGeneratorInterface $urlGenerator;

    public function __construct(UrlGeneratorInterface $urlGenerator)
    {
        $this->urlGenerator = $urlGenerator;
    }

    #[Route('/veterinaire-admin', name: 'veterinaire_admin')]
    public function index(): Response
    {
         // Redirection vers une entité ou un CRUD spécifique
         return $this->render('admin/veterinaireDashboard.html.twig');
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
        yield MenuItem::linkToCrud('Animaux', 'fas fa-crow', Animal::class);
        yield MenuItem::linkToCrud('Habitats', 'fas fa-home', Habitat::class);
    }
}
