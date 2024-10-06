<?php

namespace App\Controller\Admin;

use App\Entity\User;
use App\Service\EmailService;
use Doctrine\ORM\EntityManagerInterface;
use EasyCorp\Bundle\EasyAdminBundle\Field\Field;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;


class UserCrudController extends AbstractCrudController
{
    private $passwordHasher;
    private $emailService;

    public function __construct(UserPasswordHasherInterface $passwordHasher, EmailService $emailService)
    {
        $this->passwordHasher = $passwordHasher;
        $this->emailService = $emailService;
        
    }

    public function persistEntity(EntityManagerInterface $entityManager, $entityInstance): void
    {
        if ($entityInstance instanceof User && $entityInstance->getPassword()) {
            $hashedPassword = $this->passwordHasher->hashPassword(
                $entityInstance,
                $entityInstance->getPassword()
            );
            $entityInstance->setPassword($hashedPassword);
        }

        parent::persistEntity($entityManager, $entityInstance);

        // Envoyer un email à l'utilisateur après l'ajout depuis l'admin
        $this->emailService->sendRegistrationEmail(
            $entityInstance->getEmail(),
            'Votre compte a été créé par un administrateur',
            '<p>Un administrateur a créé un compte pour vous. Votre nom d\'utilisateur est '.$entityInstance->getNom().'.</p>'
        );
    }
    public static function getEntityFqcn(): string
    {
        return User::class;
    }

    public function configureFields(string $pageName): iterable
    {
        
            return [
                TextField::new('nom'),
                EmailField::new('email'),
                
                // Utiliser ChoiceField pour afficher les rôles avec sélection multiple
                ChoiceField::new('roles', 'Rôles')
                ->setChoices([
                    'Admin' => 'ROLE_ADMIN',
                    'User' => 'ROLE_USER',
                    'Manager' => 'ROLE_MANAGER',
                ])
                ->allowMultipleChoices(),
            
                // Champ pour le mot de passe, avec type password pour plus de sécurité
                TextField::new('password')
                    ->setFormType(PasswordType::class)
                    ->hideOnIndex(),
            
                // Champ pour l'image de profil, avec un chemin pour afficher l'image dans la liste
                ImageField::new('imageProfile')
                    ->setBasePath('/uploadsUsers/imagesUsers')
                    ->onlyOnIndex(),
            
                // Champ pour uploader l'image dans le formulaire
                Field::new('profileImageFile', 'Image')
                    ->setFormType(FileType::class)
                    ->onlyOnForms(),
            
                // Champ pour la date de mise à jour, affiché uniquement dans la liste
                DateTimeField::new('updatedAt')
                    ->setFormat('Y-MM-dd HH:mm:ss')
                    ->hideOnForm(),
            
                // Champ pour la date de création, affiché uniquement dans la liste
                DateTimeField::new('createdAt')
                    ->setFormat('Y-MM-dd HH:mm:ss')
                    ->hideOnForm(),
            ];
    }

    /*public function configureActions(Actions $actions): Actions
    {
        return $actions
            ->disable(Action::DELETE, Action::NEW) // Désactiver par défaut
            ->disable(Action::EDIT, 'ROLE_ADMIN'); // Désactiver par défaut
    }*/
}
