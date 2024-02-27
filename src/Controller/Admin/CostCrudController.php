<?php

namespace App\Controller\Admin;

use App\Entity\Cost;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use App\Admin\Field\VichImageField;

class CostCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Cost::class;
    }

    public function configureFields(string $pageName): iterable
    {
        yield TextField::new('neiRong')
            ->setColumns(3)
        ;
        yield TextField::new('zongLiang')
            ->setColumns(3)
        ;
        yield TextField::new('zongJia')
            ->setColumns(3)
        ;
        yield TextField::new('danJia')
            ->setColumns(3)
        ;
        yield TextField::new('danWei')
            ->setColumns(3)
        ;
        yield TextField::new('fangFa')
            ->setColumns(3)
        ;
        yield TextField::new('shiYongLiang')
            ->setColumns(3)
        ;
        yield TextField::new('chanLiang')
            ->setColumns(3)
        ;
    }
}
