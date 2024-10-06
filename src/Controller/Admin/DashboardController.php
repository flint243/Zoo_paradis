<?php

namespace App\Controller\Admin;

use App\Entity\Avis;
use App\Entity\User;
use App\Entity\Animal;
use App\Entity\Habitat;
use App\Entity\ServicesZoo;
use App\Entity\Veterinaire;
use App\Entity\Aquatique;
use App\Entity\Aerien;
use App\Entity\Employe;
use App\Entity\Terrestre;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\Security\Http\Attribute\IsGranted;


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
        yield MenuItem::linkToRoute('Retour accueil', 'fa fa-home','Accueil');

        // Section avec un sous-menu
        yield MenuItem::section('Gestion');
        yield MenuItem::subMenu('Utilisateurs', 'fas fa-users')->setSubItems([
              MenuItem::linkToCrud('Voir les utilisateurs', 'fas fa-eye', User::class),
              MenuItem::linkToCrud('Ajouter un utilisateur', 'fas fa-plus', User::class)->setAction('new'),
    ]);

        // Section "Gestion des services"
        yield MenuItem::section('Gestion des services');
        yield MenuItem::linkToCrud('Nos services', 'fas fa-users', ServicesZoo::class);

         // Section "Gestion des employé"
         yield MenuItem::section('Gestion des employés');
         yield MenuItem::linkToCrud('Nos employés', 'fas fa-users', Employe::class);

        // Section "Gestion des vétérinaires"
        yield MenuItem::section('Gestion du des vétérinaires');
        yield MenuItem::linkToCrud('Nos Vétérinaires', 'fas fa-user-doctor', Veterinaire::class);

        // Section "Gestion des habitats"
        yield MenuItem::section('Gestion des habitats');
        yield MenuItem::linkToCrud('Nos habitats', 'fas fa-paw', Habitat::class);

        // Section "Gestion des animaux"
        yield MenuItem::section('Gestion des animaux');
        yield MenuItem::linkToCrud('Nos animaux', 'fas fa-paw', Animal::class);

        // Section "Gestion des habitats aériens"
        yield MenuItem::section('Gestion des habitats aériens');
        yield MenuItem::linkToCrud('Habitats aériens', 'fas fa-crow', Aerien::class);

        
        // Section "Gestion des animaux"
        yield MenuItem::section('Gestion des animaux terrestres');
        yield MenuItem::linkToCrud('Habitats terretres', 'fas fa-cow', Terrestre::class);

        // Section "Gestion des animaux"
        yield MenuItem::section('Gestion des animaux aquatiques');
        yield MenuItem::linkToCrud('Habitats aquatiques', 'fas fa-fish', Aquatique::class);
        
        
        // Section "Gestion des avis"
        yield MenuItem::section('Gestion des avis');
        yield MenuItem::linkToCrud('Les avis', 'fas fa-comment', Avis::class);



        // Ajouter un lien vers une URL externe
        //yield MenuItem::linkToUrl('Google', 'fas fa-external-link-alt', 'https://www.google.com');

    

    yield MenuItem::subMenu('Produits', 'fas fa-box')->setSubItems([
        //MenuItem::linkToCrud('Voir les produits', 'fas fa-eye', Product::class),
       // MenuItem::linkToCrud('Ajouter un produit', 'fas fa-plus', Product::class)->setAction('new'),
    ]);
    }

    
}
