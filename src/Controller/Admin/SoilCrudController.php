<?php

namespace App\Controller\Admin;

use App\Entity\Soil;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\FormField;

class SoilCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Soil::class;
    }

    public function configureFields(string $pageName): iterable
    {
        // yield AssociationField::new('pattern');
        // yield FormField::addColumn(12);
        yield TextField::new('nianFenSha')
            ->setColumns(4)
            ;
        yield TextField::new('tuRangZhiDi')
            ->setColumns(4)
            ;
        yield TextField::new('ganRongLiang')
            ->setColumns(4)
            ;
    }
}
