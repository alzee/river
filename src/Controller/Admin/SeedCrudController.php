<?php

namespace App\Controller\Admin;

use App\Entity\Seed;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;

class SeedCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Seed::class;
    }

    public function configureFields(string $pageName): iterable
    {
        yield DateField::new('date')
            ->setColumns(3)
        ;
        yield TextField::new('nongYiJiShu')
            ->setColumns(3)
        ;
        yield TextField::new('wuLiJieGouGaiShan')
            ->setColumns(3)
        ;
        yield TextField::new('cuoShi3')
            ->setColumns(3)
        ;
    }
}
