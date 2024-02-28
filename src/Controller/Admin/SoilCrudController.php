<?php

namespace App\Controller\Admin;

use App\Entity\Soil;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\FormField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;

class SoilCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Soil::class;
    }

    public function configureFields(string $pageName): iterable
    {
        yield TextField::new('nianFenSha')
            ->setColumns(3)
            ;
        yield TextField::new('tuRangZhiDi')
            ->setColumns(3)
            ;
        yield NumberField::new('ganRongLiang')
            ->setColumns(3)
            ;
        yield TextField::new('kongXiDu')
            ->setColumns(3)
            ;
        yield TextField::new('quanDan')
            ->setColumns(3)
            ;
        yield TextField::new('quanLin')
            ->setColumns(3)
            ;
        yield TextField::new('quanJia')
            ->setColumns(3)
            ;
        yield TextField::new('youJiZhi')
            ->setColumns(3)
            ;
        yield TextField::new('xiaoTaiDan')
            ->setColumns(3)
            ;
        yield TextField::new('anTaiDan')
            ->setColumns(3)
            ;
        yield TextField::new('youXiaoLin')
            ->setColumns(3)
            ;
        yield TextField::new('youXiaoJia')
            ->setColumns(3)
            ;
        yield TextField::new('jianJieDan')
            ->setColumns(3)
            ;
        yield TextField::new('quanYanLiang')
            ->setColumns(3)
            ;
        yield TextField::new('EC')
            ->setColumns(3)
            ;
        yield TextField::new('PH')
            ->setColumns(3)
            ;
        yield TextField::new('baoHeHanShuiLv')
            ->setColumns(3)
            ;
        yield TextField::new('baoHeDaoShuiLv')
            ->setColumns(3)
            ;
        yield TextField::new('tianJianChiShuiLiang')
            ->setColumns(3)
            ;
    }
}
