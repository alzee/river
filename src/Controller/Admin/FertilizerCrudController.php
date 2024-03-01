<?php

namespace App\Controller\Admin;

use App\Entity\Fertilizer;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;

class FertilizerCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Fertilizer::class;
    }

    public function configureFields(string $pageName): iterable
    {
        yield DateField::new('date')
            ->setColumns(3)
        ;
        yield TextField::new('cuoShi1')
            ->setColumns(3)
        ;
        yield TextField::new('shiYongLiang1')
            ->setColumns(3)
        ;
        yield TextField::new('cuoShi2')
            ->setColumns(3)
        ;
        yield TextField::new('shiYongLiang2')
            ->setColumns(3)
        ;
        yield TextField::new('cuoShi3')
            ->setColumns(3)
        ;
        yield TextField::new('shiYongLiang3')
            ->setColumns(3)
        ;
        yield TextField::new('cuoShi4')
            ->setColumns(3)
        ;
        yield TextField::new('shiYongLiang4')
            ->setColumns(3)
        ;
    }
}
