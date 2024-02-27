<?php

namespace App\Controller\Admin;

use App\Entity\Pattern;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Field\FormField;

class PatternSoilCrudController extends AbstractCrudController
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
            ->setPageTitle('index', 'Soil')
            ->setPageTitle('edit', 'Soil')
        ;
    }

    public function configureFields(string $pageName): iterable
    {
        yield IdField::new('id')->onlyOnIndex();
        // yield FormField::addColumn(12);
        yield TextField::new('SN')
            ->setDisabled()
            ->setColumns(4)
        ;
        yield TextField::new('name')
            ->setDisabled()
            ->setColumns(8)
        ;
        // yield AssociationField::new('soils');
     
        yield CollectionField::new('soils')
            ->useEntryCrudForm()
            ->renderExpanded()
            ->allowAdd(false)
            ->allowDelete(false)
            ->onlyWhenUpdating()
            ->setColumns(12)
        ;
        yield TextField::new('soil0.nianFenSha', 'nianFenSha')->onlyOnIndex();
    }
}
