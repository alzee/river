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
use EasyCorp\Bundle\EasyAdminBundle\Field\FormField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use App\Admin\Field\VichImageField;

class PatternCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Pattern::class;
    }

    public function configureFields(string $pageName): iterable
    {
        $disabled = true;
        if ($pageName === 'new') $disabled = false;
        
        $help = '4位数字，如 5101';
        if ($pageName == 'edit') $help = '';
        
        // yield FormField::addColumn(3);
        // yield FormField::addRow();
        if ($pageName === 'index') {
            yield IdField::new('id');
            yield TextField::new('SN');
            yield TextField::new('name', 'Pattern Name');
            yield TextField::new('shiShiFuZeRen');
            yield TextField::new('zhuanTiFuZeRen');
            yield TextField::new('location');
            yield NumberField::new('latitude');
            yield NumberField::new('longitude');
            yield NumberField::new('area');
            yield TextField::new('tuRangZhiDi');
            yield TextField::new('yanJianChengDu');
            yield ImageField::new('image')->setBasePath('images');
            return;
        }
        
        yield FormField::addColumn(12);
        yield FormField::addFieldset('基本信息');
        yield TextField::new('SN')
            ->setHelp('4位数字，如 5101')
            ->setHelp($help)
            ->setDisabled($disabled)
            ->setColumns(4)
        ;
        yield NumberField::new('yanZhengZhuanTi')
            ->setColumns(4)
        ;
        yield TextField::new('shiShiFuZeRen')
            ->setColumns(4)
        ;
        
        
        yield TextField::new('name', 'Pattern Name')
            ->setDisabled($disabled)
            ->setColumns(8)
        ;
        yield TextField::new('zhuanTiFuZeRen')
            ->setColumns(4)
        ;
        
        yield FormField::addColumn(4);
        yield FormField::addFieldset('验证地点');
        yield TextField::new('location');
        yield NumberField::new('latitude');
        yield NumberField::new('longitude');
        yield NumberField::new('area');
        yield TextField::new('tuRangZhiDi');
        yield TextField::new('yanJianChengDu');
        yield TextField::new('diLiDengJi');
        yield TextField::new('yanJianChengYin');
        yield TextField::new('zhuYaoZhangAi');
        
        
        yield FormField::addColumn(4);
        yield FormField::addFieldset('技术模式措施');
        yield TextField::new('zhongZhiZuoWu')->setColumns(6);
        yield TextField::new('guanGaiXieTong')->setColumns(6);
        yield TextField::new('xiaoZhangPeiFei')->setColumns(6);
        yield TextField::new('zhongZiNongYi')->setColumns(6);
        yield TextField::new('genZongJianCe')->setColumns(6);
        yield NumberField::new('moShiDanJia')->setColumns(6);
        yield NumberField::new('moShiZongJia')->setColumns(6);
        yield NumberField::new('zhongShiDanChan')->setColumns(6);
        yield NumberField::new('guanGaiDingE')->setColumns(6);
        yield NumberField::new('yanJianXiaJiang')->setColumns(6);
        yield NumberField::new('diLiTiSheng')->setColumns(6);
        yield TextField::new('danChanTiSheng')->setColumns(6);
        yield NumberField::new('shuiXiaoTiSheng')->setColumns(6);
        yield TextField::new('gaoCheng')->setColumns(6);
        yield TextField::new('yanHuaJianHua')->setColumns(6);
        yield NumberField::new('quanYanLiang')->setColumns(6);
        yield NumberField::new('youJiZhiHanLiang')->setColumns(6);
        yield NumberField::new('EC')->setColumns(6);
        yield NumberField::new('PH')->setColumns(6);
        yield TextField::new('guanGaiFangShi')->setColumns(6);
        yield TextField::new('feiLiaoShiYong')->setColumns(6);
        yield NumberField::new('yuQiDanChan')->setColumns(6);
        yield TextField::new('chanNengTiSheng')->setColumns(6);
        yield NumberField::new('touRu')->setColumns(6);
        yield NumberField::new('chanChu')->setColumns(6);
        yield TextField::new('guanPaiXieTongCuoShi')->setColumns(6);
        yield TextField::new('xiaoZhangPeiFeiYaoDian')->setColumns(6);
        yield TextField::new('nongYiZaiPeiTeDian')->setColumns(6);
        yield TextField::new('genZongJianCeFangAn')->setColumns(6);
        yield TextField::new('zuZhiShiShiXieTong')->setColumns(6);
        yield TextField::new('zhongZiPinZhong')->setColumns(6);
        yield VichImageField::new('imageFile', 'Image');
        
        yield FormField::addColumn(4);
        yield FormField::addFieldset('审批审核');
        
        yield TextField::new('guanPaiSheJi');
        yield TextField::new('peiFeiSheJi');
        yield TextField::new('zhongZiQueRen');
        yield TextField::new('nongYiSheJi');
        yield TextField::new('jianCeShenHe');
        yield TextField::new('moShiShenHe');
        yield TextField::new('keTiShenPi');
        yield TextField::new('xiangMuPiZhun');
    }
}
