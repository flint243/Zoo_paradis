<?php

namespace App\Controller\Admin;

use App\Entity\Habitat;
use EasyCorp\Bundle\EasyAdminBundle\Field\Field;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class HabitatCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Habitat::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('nom'),
            TextareaField::new('description_habitat'),
            ImageField::new('images_habitat')
                ->setBasePath('/uploads/images')
                ->onlyOnIndex(),
            Field::new('imageFile', 'Image')
                ->setFormType(FileType::class)
                ->onlyOnForms(), // Formulaire pour upload d'image// Ajouter le champ de type DateTimeImmutable
                
                DateTimeField::new('createdAt')
                    ->setFormat('Y-MM-dd HH:mm:ss')  // Optionnel : format personnalisé
                    ->hideOnForm() // Si tu ne veux pas qu'il soit éditable dans le formulaire
            ];
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
