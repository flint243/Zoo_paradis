<?php

namespace App\Controller\Admin;

use App\Entity\Aerien;
use Vich\UploaderBundle\Form\Type\VichImageType;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class AerienCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Aerien::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('nom'),
            TextField::new('Race'),
        TextField::new('description'),
        ImageField::new('images_animal')
            ->setBasePath('/uploadsAnimal/imagesAnimal')
            ->onlyOnIndex(),
        TextField::new('images_animal_File')
            ->setFormType(VichImageType::class) 
            ->onlyOnForms(),
        DateTimeField::new('createdAt')
            ->setFormat('Y-MM-dd HH:mm:ss')
            ->hideOnForm(),
        ];
    }
}
