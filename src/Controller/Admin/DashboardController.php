<?php

namespace App\Controller\Admin;

use App\Entity\User;
use App\Entity\Product;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        // Redirection vers une entité ou un CRUD spécifique
        $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
        return $this->redirect($adminUrlGenerator->setController(UserCrudController::class)->generateUrl());
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Mon Application Admin');
    }

    public function configureMenuItems(): iterable
    {
        // Lien vers le tableau de bord
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');

        // Section "Gestion des Utilisateurs"
        yield MenuItem::section('Gestion des Utilisateurs');
        yield MenuItem::linkToCrud('Utilisateurs', 'fas fa-users', User::class);

        // Section "Gestion des Produits"
        yield MenuItem::section('Gestion des Produits');
        //yield MenuItem::linkToCrud('Produits', 'fas fa-box', Product::class);

        // Ajouter un lien vers une URL externe
        yield MenuItem::linkToUrl('Google', 'fas fa-external-link-alt', 'https://www.google.com');

        // Lien vers des actions spécifiques
        yield MenuItem::linkToRoute('Retour au site', 'fas fa-arrow-left', 'homepage');


    // Section avec un sous-menu
    yield MenuItem::section('Gestion');
    yield MenuItem::subMenu('Utilisateurs', 'fas fa-users')->setSubItems([
        MenuItem::linkToCrud('Voir les utilisateurs', 'fas fa-eye', User::class),
        MenuItem::linkToCrud('Ajouter un utilisateur', 'fas fa-plus', User::class)->setAction('new'),
    ]);

    yield MenuItem::subMenu('Produits', 'fas fa-box')->setSubItems([
        //MenuItem::linkToCrud('Voir les produits', 'fas fa-eye', Product::class),
       // MenuItem::linkToCrud('Ajouter un produit', 'fas fa-plus', Product::class)->setAction('new'),
    ]);
    }

    
}
