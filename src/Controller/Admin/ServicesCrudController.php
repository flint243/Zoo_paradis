<?php

namespace App\Controller\Admin;

use App\Entity\Services;
use EasyCorp\Bundle\EasyAdminBundle\Field\Field;
use Vich\UploaderBundle\Form\Type\VichImageType;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ServicesCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Services::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('nom'),
            TextareaField::new('description'),

            ImageField::new('servicesImages')
                ->setBasePath('/uploads/services')
                ->onlyOnIndex(),
            
                TextField::new('user'),
                AssociationField::new('user')
                ->setFormTypeOptions([
                    'choice_label' => 'nom', // Remplace 'nom' par le champ affiché dans le select
                ])
                ->onlyOnForms(),

            Field::new('servicesImageFile', 'Image')
                ->setFormType(VichImageType::class)
                ->onlyOnForms(), // Formulaire pour upload d'image// Ajouter le champ de type DateTimeImmutable
                
            DateTimeField::new('createdAt')
                ->setFormat('Y-MM-dd HH:mm:ss')  // Optionnel : format personnalisé
                ->hideOnForm() // Si tu ne veux pas qu'il soit éditable dans le formulaire
            ];
    }
}
