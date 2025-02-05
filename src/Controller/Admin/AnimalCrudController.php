<?php

namespace App\Controller\Admin;

use App\Entity\Animal;
use EasyCorp\Bundle\EasyAdminBundle\Field\Field;
use Vich\UploaderBundle\Form\Type\VichImageType;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
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
            TextField::new('Nom'),
            TextField::new('Prenom'),
            
            TextField::new('Race'),
            /*AssociationField::new('infosAnimal')
            ->setFormTypeOptions([
                'choice_label' =>  'etat',
            ])  // 'name' correspond à une propriété de l'entité Habitat
            ->onlyOnForms(),*/

            TextField::new('user'),
                AssociationField::new('user')
                ->setFormTypeOptions([
                    'choice_label' => 'nom', // Remplace 'nom' par le champ affiché dans le select
                ])
                ->onlyOnForms(),

                TextField::new('habitat'),
            // Champ pour habitat (relation ManyToOne avec Habitat)
            AssociationField::new('habitat')
            ->setFormTypeOptions([
                'choice_label' => 'nom', // Remplace 'nom' par le champ affiché dans le select
            ])
            ->onlyOnForms(),  // Afficher seulement dans le formulaire

            // Affiche une seule image sur la page index
            ImageField::new('images_animal')
                ->setBasePath('/uploadsAnimals/imagesAnimals')
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
