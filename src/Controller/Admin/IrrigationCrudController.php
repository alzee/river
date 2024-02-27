<?php

namespace App\Controller\Admin;

use App\Entity\Irrigation;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class IrrigationCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Irrigation::class;
    }

    public function configureFields(string $pageName): iterable
    {
        yield TextField::new('date')
            ->setColumns(3)
            ;
        yield TextField::new('guanShuiLiang')
            ->setColumns(3)
            ;
    }
}
