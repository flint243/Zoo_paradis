<?php

namespace App\Controller\Admin;

use App\Entity\Habitat;
use EasyCorp\Bundle\EasyAdminBundle\Field\Field;
use Vich\UploaderBundle\Form\Type\VichImageType;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
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
            TextareaField::new('description'),
            
            ImageField::new('habitat_image')
                ->setBasePath('/uploadsHabitat/imagesHabitat')
                ->onlyOnIndex(),

            Field::new('habitat_image_file', 'Image')
            ->setFormType(VichImageType::class) 
            ->onlyOnForms(),

            DateTimeField::new('createdAt')
                ->setFormat('Y-MM-dd HH:mm:ss')  // Optionnel : format personnalisé
                ->hideOnForm() // Si tu ne veux pas qu'il soit éditable dans le formulaire
        ];
    }
}
