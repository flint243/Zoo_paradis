<?php

namespace App\Controller\Admin;

use App\Entity\Animal;
use Vich\UploaderBundle\Form\Type\VichImageType;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
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
        ImageField::new('images_animal')
            ->setBasePath('/uploadsAnimal/imagesAnimal')
            ->onlyOnIndex(),
        TextField::new('images_animal_File')
            ->setFormType(VichImageType::class) 
            ->onlyOnForms(),
        
        // Association avec l'entité Habitat, incluant le type
        AssociationField::new('habitat')
            ->setFormTypeOptions(['by_reference' => false])
            ->onlyOnForms()
            ->setCustomOption('widget', 'native'), // Permet de choisir un habitat

            

        DateTimeField::new('createdAt')
            ->setFormat('Y-MM-dd HH:mm:ss')
            ->hideOnForm(),
        ];
    }
}
