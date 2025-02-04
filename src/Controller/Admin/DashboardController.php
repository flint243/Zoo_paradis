<?php

namespace App\Controller\Admin;

use App\Entity\Avis;
use App\Entity\User;
use App\Entity\Animal;
use App\Entity\Habitat;
use App\Entity\Services;
use App\Repository\AvisRepository;
use App\Repository\UserRepository;
use App\Repository\AnimalRepository;
use App\Repository\ContactRepository;
use App\Repository\HabitatRepository;
use App\Repository\ServicesRepository;
use App\Repository\InfosAnimalRepository;
use App\Controller\Admin\UserCrudController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;


class DashboardController extends AbstractDashboardController
{

protected $userRepository;
protected $avisRepository;
protected $animalRepository;
protected $contactRepository;
protected $habitatRepository;
protected $infosAnimalRepository;
protected $servicesRepository;
private UrlGeneratorInterface $urlGenerator;

    public function __construct(
        UrlGeneratorInterface $urlGenerator,

        UserRepository $userRepository,
        AvisRepository $avisRepository,
        AnimalRepository $animalRepository,
        ContactRepository $contactRepository,
        HabitatRepository $habitatRepository,
        InfosAnimalRepository $infosAnimalRepository,
        ServicesRepository $servicesRepository
    )
    {
        $this->urlGenerator = $urlGenerator;

        $this->userRepository = $userRepository;
        $this->avisRepository = $avisRepository;
        $this->animalRepository = $animalRepository;
        $this->contactRepository = $contactRepository;
        $this->habitatRepository = $habitatRepository;
        $this->infosAnimalRepository = $infosAnimalRepository;
        $this->servicesRepository = $servicesRepository;

        
    }

    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        // Redirection vers une entité ou un CRUD spécifique
        /*$adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
        return $this->redirect($adminUrlGenerator->setController(UserCrudController::class)->generateUrl());
        */
        return $this->render('admin/dashboardAdmin.html.twig', [

            'countAllUser' => $this->userRepository->countAllUser(),
            'countAllAvis' => $this->avisRepository->countAllAvis(),
            'countAllAnimal' => $this->animalRepository->countAllAnimal(),
            'countAllContact' => $this->contactRepository->countAllContact(),
            'countAllHabitat' => $this->habitatRepository->countAllHabitat(),
            'countAllInfosAnimal' => $this->infosAnimalRepository->countAllInfosAnimal(),
            'countAllServices' => $this->servicesRepository->countAllServices(),
    ]);
    }

    public function configureDashboard(): Dashboard
    {
        // Générer le lien vers la route 'Accueil'
        $homeUrl = $this->urlGenerator->generate('Accueil');
        
        return Dashboard::new()
        ->setTitle('<a href="' . $homeUrl . '">Zoo Paradis</a>')
        ->setFaviconPath('favicon.ico'); // Optionnel : ajouter un favicon personnalisé
    }

    public function configureFields(string $pageName): iterable
        {
            return [
                IdField::new('id')->hideOnForm(),
                TextField::new('email', 'Email'), // Vérifie que c'est bien un TextField
            ];
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
        yield MenuItem::linkToCrud('Nos services', 'fas fa-users', Services::class);

        // Section "Gestion des habitats"
        yield MenuItem::section('Gestion des habitats');
        yield MenuItem::linkToCrud('Nos habitats', 'fas fa-users', Habitat::class);

        // Section "Gestion des animaux"
        yield MenuItem::section('Gestion des animaux');
        yield MenuItem::linkToCrud('Nos animaux', 'fas fa-users', Animal::class);

        // Section "Gestion des avis"
        yield MenuItem::section('Gestion des avis');
        yield MenuItem::linkToCrud('Les avis', 'fas fa-users', Avis::class);



        // Ajouter un lien vers une URL externe
        //yield MenuItem::linkToUrl('Google', 'fas fa-external-link-alt', 'https://www.google.com');

    

    yield MenuItem::subMenu('Produits', 'fas fa-box')->setSubItems([
        //MenuItem::linkToCrud('Voir les produits', 'fas fa-eye', Product::class),
       // MenuItem::linkToCrud('Ajouter un produit', 'fas fa-plus', Product::class)->setAction('new'),
    ]);
    }

    
}
