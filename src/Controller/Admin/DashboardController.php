<?php

namespace App\Controller\Admin;

use App\Entity\User;
use App\Entity\Animal;
use App\Entity\Employe;
use App\Entity\Habitat;
use App\Entity\Veterinaire;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;


class DashboardController extends AbstractDashboardController
{
    private UrlGeneratorInterface $urlGenerator;

    public function __construct(UrlGeneratorInterface $urlGenerator)
    {
        $this->urlGenerator = $urlGenerator;
    }

    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        // Redirection vers une entité ou un CRUD spécifique
        $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
        return $this->redirect($adminUrlGenerator->setController(UserCrudController::class)->generateUrl());
    }

    public function configureDashboard(): Dashboard
    {
        // Générer le lien vers la route 'Accueil'
        $homeUrl = $this->urlGenerator->generate('Accueil');
        
        return Dashboard::new()
        ->setTitle('<a href="' . $homeUrl . '">Zoo Paradis</a>')
        ->setFaviconPath('favicon.ico'); // Optionnel : ajouter un favicon personnalisé
    }

    public function configureMenuItems(): iterable
    {
        // Lien vers le tableau de bord
        yield MenuItem::linkToRoute('Dashboard Admin', 'fa fa-home','Accueil');

        // Section avec un sous-menu
        yield MenuItem::section('Gestion');
        yield MenuItem::subMenu('Utilisateurs', 'fas fa-users')->setSubItems([
              MenuItem::linkToCrud('Voir les utilisateurs', 'fas fa-eye', User::class),
              MenuItem::linkToCrud('Ajouter un utilisateur', 'fas fa-plus', User::class)->setAction('new'),
    ]);

        // Section "Gestion du personnel"
        yield MenuItem::section('Gestion du personnel');
        yield MenuItem::linkToCrud('Nos employés', 'fas fa-users', Employe::class);

        // Section "Gestion des Vétérinaires"
        yield MenuItem::section('Gestion du des Vétérinaires');
        yield MenuItem::linkToCrud('Nos Vétérinaires', 'fas fa-users', Veterinaire::class);

        // Section "Gestion des Animaux"
        yield MenuItem::section('Gestion des habitats');
        yield MenuItem::linkToCrud('Nos habitats', 'fas fa-users', Habitat::class);

        // Section "Gestion des Animaux"
        yield MenuItem::section('Gestion des animaux');
        yield MenuItem::linkToCrud('Nos animaux', 'fas fa-users', Animal::class);

        // Ajouter un lien vers une URL externe
        yield MenuItem::linkToUrl('Google', 'fas fa-external-link-alt', 'https://www.google.com');

        // Lien vers des actions spécifiques
        yield MenuItem::linkToRoute('Retour au site', 'fas fa-arrow-left', 'Accueil');


    

    yield MenuItem::subMenu('Produits', 'fas fa-box')->setSubItems([
        //MenuItem::linkToCrud('Voir les produits', 'fas fa-eye', Product::class),
       // MenuItem::linkToCrud('Ajouter un produit', 'fas fa-plus', Product::class)->setAction('new'),
    ]);
    }

    
}
