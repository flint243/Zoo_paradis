<?php

namespace App\Controller\Admin;

use App\Entity\Animal;
use EasyCorp\Bundle\EasyAdminBundle\Field\Field;
use Vich\UploaderBundle\Form\Type\VichImageType;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class AnimalCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Animal::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('Prenom'),
            TextField::new('Race'),

            // Affiche une seule image sur la page index
            ImageField::new('images_animal')
                ->setBasePath('/uploads/animal_images')
                ->onlyOnIndex(),

            Field::new('images_animal_File', 'Image')
            ->setFormType(VichImageType::class) 
            ->onlyOnForms(),

            DateTimeField::new('createdAt')
                ->setFormat('Y-MM-dd HH:mm:ss')
                ->hideOnForm(),
        ];
    }
}
