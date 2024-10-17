<?php

namespace App\Controller\Admin;

use App\Entity\Services;
use EasyCorp\Bundle\EasyAdminBundle\Field\Field;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
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
            ImageField::new('servicesImage')
                ->setBasePath('/uploads/services')
                ->onlyOnIndex(),
            Field::new('servicesImageFile', 'Image')
                ->setFormType(FileType::class)
                ->onlyOnForms(), // Formulaire pour upload d'image// Ajouter le champ de type DateTimeImmutable
                
                DateTimeField::new('createdAt')
                    ->setFormat('Y-MM-dd HH:mm:ss')  // Optionnel : format personnalisé
                    ->hideOnForm() // Si tu ne veux pas qu'il soit éditable dans le formulaire
            ];
    }
}
