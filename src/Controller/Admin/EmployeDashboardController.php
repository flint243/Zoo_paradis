<?php

namespace App\Controller\Admin;

use App\Entity\Avis;
use App\Entity\Animal;
use App\Entity\Contact;
use App\Entity\Habitat;
use App\Entity\Services;
use App\Entity\InfosAnimal;
use App\Repository\AvisRepository;
use App\Repository\UserRepository;
use App\Repository\AnimalRepository;
use App\Repository\ContactRepository;
use App\Repository\HabitatRepository;
use App\Repository\ServicesRepository;
use App\Repository\InfosAnimalRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;

class EmployeDashboardController extends AbstractDashboardController
{
    protected $userRepository;
    protected $avisRepository;
    protected $animalRepository;
    protected $contactRepository;
    protected $habitatRepository;
    protected $infosAnimalRepository;
    protected $servicesRepository;
    private UrlGeneratorInterface $urlGenerator;

    public function __construct(UrlGeneratorInterface $urlGenerator,

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

    #[Route('/employee-admin', name: 'employee_admin')]
    public function index(): Response
    {

        // Redirection vers une entité ou un CRUD spécifique
        return $this->render('admin/dashboardEmploye.html.twig', [

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
         ->setTitle('<a href="' . $homeUrl . '">ZooParadis</a>');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Tableau de bord Employé', 'fa fa-home');
        yield MenuItem::linkToDashboard('');yield MenuItem::linkToDashboard('');
        yield MenuItem::linkToDashboard('');
        
        yield MenuItem::linkToCrud('Habitats', 'fas fa-house-flag', Habitat::class);
        yield MenuItem::linkToCrud('Animaux', 'fas fa-paw', Animal::class);
        yield MenuItem::linkToCrud('Services', 'fas fa-home', Services::class);
        yield MenuItem::linkToCrud('Contacts', 'fas fa-home', Contact::class);
        yield MenuItem::linkToCrud('Avis', 'fas fa-home', Avis::class);
        yield MenuItem::linkToCrud('Infos animal', 'fas fa-home', InfosAnimal::class);
    }
}
