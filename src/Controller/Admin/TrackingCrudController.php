<?php

namespace App\Controller\Admin;

use App\Entity\Tracking;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class TrackingCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Tracking::class;
    }

    public function configureFields(string $pageName): iterable
    {
        yield TextField::new('fangFaSheBei')
            ->setColumns(3)
        ;
        yield TextField::new('jianCePinCi')
            ->setColumns(3)
        ;
        yield TextField::new('xianDiYuanCheng')
            ->setColumns(3)
        ;
        yield TextField::new('jianCeZhuanTi')
            ->setColumns(3)
        ;
    }
}
