<?php

namespace App\Controller\Admin;

use App\Entity\Irrigation;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;

class IrrigationCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Irrigation::class;
    }

    public function configureFields(string $pageName): iterable
    {
        yield DateField::new('date')
            ->setColumns(3)
            ;
        yield IntegerField::new('guanShuiLiang')
            ->setColumns(3)
            ;
    }
}
