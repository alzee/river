<?php

namespace App\Controller\Admin;

use App\Entity\Pattern;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Field\FormField;

class PatternIrrigationCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Pattern::class;
    }

    public function configureActions(Actions $actions): Actions
    {
        return $actions
            ->remove('index', 'new')
            ->remove('index', 'delete')
        ;
    }
    
    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setPageTitle('index', 'Irrigation')
            ->setPageTitle('edit', 'Irrigation')
        ;
    }

    public function configureFields(string $pageName): iterable
    {
        yield IntegerField::new('SN')
            ->setDisabled()
            ->setColumns(4)
        ;
        yield TextField::new('name', 'Pattern Name')
            ->setDisabled()
            ->setColumns(8)
        ;
        
        yield TextField::new('guanGaiFangShi')
            ->setColumns(2)
        ;
        yield IntegerField::new('guanGaiCiShu')
            ->setColumns(2)
        ;
        yield IntegerField::new('zongGuanShuiLiang')
            ->setColumns(2)
        ;
        yield TextField::new('paiShuiFangShi')
            ->setColumns(2)
        ;
        yield NumberField::new('paiShuiMaiShen')
            ->setColumns(2)
        ;
        yield IntegerField::new('paiShuiJianJu')
            ->setColumns(2)
        ;
        yield IntegerField::new('huiYongNengLi')
            ->setColumns(2)
        ;
        yield NumberField::new('huiYongKongZhiShuiZhi')
            ->setColumns(2)
        ;
        
        // if ($pageName === 'index') return;
     
        yield CollectionField::new('irrigations')
            ->useEntryCrudForm()
            ->renderExpanded()
            ->allowAdd(false)
            ->allowDelete(false)
            ->onlyWhenUpdating()
            ->setColumns(12)
        ;
    }
}
