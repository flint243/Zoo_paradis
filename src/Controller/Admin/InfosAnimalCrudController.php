<?php

namespace App\Controller\Admin;

use App\Entity\InfosAnimal;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class InfosAnimalCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return InfosAnimal::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('Etat'),
            TextField::new('Nourriture'),

            TextField::new('user'),
            AssociationField::new('user')
                ->setFormTypeOptions([
                    'choice_label' => 'nom', 
                ])
                ->onlyOnForms(),

                TextField::new('animal.Prenom', 'Animal') // Affiche le prénom dans la liste
                ->onlyOnIndex(),

            AssociationField::new('animal')
                ->setFormTypeOptions([
                    'choice_label' => 'Prenom',
                ])
                ->onlyOnForms(),

            DateTimeField::new('createdAt')
                ->setFormat('Y-MM-dd HH:mm:ss')
                ->hideOnForm(),

            DateTimeField::new('updatedAt')
            ->setFormat('Y-MM-dd HH:mm:ss')
            ->hideOnForm(),
        ];
    }
}
