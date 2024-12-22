<?php

namespace App\Controller\Admin;

use App\Entity\Animal;
use App\Entity\InfosVeto;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class InfosVetoCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return InfosVeto::class;
    }

  
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('etat_animal'),
            TextField::new('nourriture_proposee'),
            TextareaField::new('commentaire_habitat'),
            TextareaField::new('detail_animal'),

            // Champ pour animal_id (relation ManyToOne avec Animal)
            AssociationField::new('animal')
            ->setFormTypeOption('choice_label', 'prenom')  // 'name' correspond à une propriété de l'entité Animal
            ->onlyOnForms(),  // Afficher seulement dans le formulaire

            DateField::new('date_passage')
                ->setFormat('Y-MM-dd HH:mm:ss')
                ->hideOnForm(),

            DateTimeField::new('createdAt')
            ->setFormat('Y-MM-dd HH:mm:ss')
            ->hideOnForm(),
        ];
    }
    
}
