<?php

namespace App\Controller\Admin;

use App\Entity\Animal;
use App\Entity\Habitat;
use App\Entity\Services;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;



class EmployeDashboardController extends AbstractDashboardController
{
    private UrlGeneratorInterface $urlGenerator;

    public function __construct(UrlGeneratorInterface $urlGenerator)
    {
        $this->urlGenerator = $urlGenerator;
    }

    #[Route('/employee-admin', name: 'employee_admin')]
    public function index(): Response
    {

        // Redirection vers une entité ou un CRUD spécifique
        return $this->render('admin/dashboard.html.twig');
        
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
        yield MenuItem::linkToDashboard('Tableau de bord Employé', 'fa fa-home');
        yield MenuItem::linkToDashboard('');yield MenuItem::linkToDashboard('');yield MenuItem::linkToDashboard('');
        yield MenuItem::linkToCrud('Habitats', 'fas fa-house-flag', Habitat::class);
        yield MenuItem::linkToCrud('Animaux', 'fas fa-paw', Animal::class);
        yield MenuItem::linkToCrud('Services', 'fas fa-utensils', Services::class);
    }
}
