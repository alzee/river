<?php

namespace App\Controller\Admin;

use App\Entity\Pattern;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\FormField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\PercentField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use App\Admin\Field\VichImageField;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;

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
            yield IntegerField::new('SN');
            yield TextField::new('name', 'Pattern Name');
            yield TextField::new('shiShiFuZeRen');
            yield TextField::new('zhuanTiFuZeRen');
            yield TextField::new('location');
            yield NumberField::new('latitude');
            yield NumberField::new('longitude');
            yield IntegerField::new('area');
            yield TextField::new('tuRangZhiDi');
            yield TextField::new('yanJianChengDu');
            yield ImageField::new('image')->setBasePath('images');
            return;
        }
        
        yield FormField::addColumn(12);
        yield FormField::addFieldset('基本信息');
        yield IntegerField::new('SN')
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
        yield NumberField::new('latitude')->setColumns(6);
        yield NumberField::new('longitude')->setColumns(6);
        yield IntegerField::new('gaoCheng')->setColumns(6);
        yield IntegerField::new('area')->setColumns(6);
        yield VichImageField::new('imageFile', 'Image');
        
        yield FormField::addFieldset('耕地质量');
        yield TextField::new('tuRangZhiDi')->setColumns(6);
        yield TextField::new('yanJianChengDu')->setColumns(6);
        yield TextField::new('yanHuaJianHua')->setColumns(6);
        yield NumberField::new('diLiDengJi')->setColumns(6);
        yield TextField::new('yanJianChengYin')->setColumns(6);
        yield NumberField::new('quanYanLiang')->setColumns(6);
        yield IntegerField::new('EC')->setColumns(6);
        yield NumberField::new('PH')->setColumns(6);
        yield NumberField::new('youJiZhiHanLiang')->setColumns(6);
        yield TextField::new('zhuYaoZhangAi');
        
        
        yield FormField::addColumn(4);
        yield FormField::addFieldset('技术模式');
        yield TextField::new('zhongZhiZuoWu')->setColumns(6);
        yield TextField::new('guanGaiFangShi')->setColumns(6);
        yield IntegerField::new('guanGaiDingE')->setColumns(6);
        yield TextField::new('paiShuiFangShi')->setColumns(6);
        yield TextField::new('xiaoZhangCuoShi')->setColumns(6);
        yield TextField::new('zengTanPeiFei')->setColumns(6);
        yield TextField::new('nongYiZhiBao')->setColumns(6);
        
        yield FormField::addFieldset('成本效益');
        yield IntegerField::new('moShiDanJia')->setColumns(6);
        yield NumberField::new('moShiZongJia')->setColumns(6);
        yield IntegerField::new('yuQiDanChan')->setColumns(6);
        yield IntegerField::new('yuQiZongChan')->setColumns(6);
        yield NumberField::new('chanTouBi')->setColumns(6);
        
        yield FormField::addFieldset('预期目标');
        yield PercentField::new('yanJianXiaJiang')->setColumns(6);
        yield NumberField::new('diLiTiSheng')->setColumns(6);
        yield PercentField::new('danChanTiSheng')->setColumns(6);
        yield PercentField::new('shuiXiaoTiSheng')->setColumns(6);
        
        yield FormField::addColumn(4);
        yield FormField::addFieldset('审批审核');
        yield TextField::new('guanPaiXieTongShenHe')->setColumns(6);
        yield TextField::new('xiaoZhangPeiFeiShenHe')->setColumns(6);
        yield TextField::new('zhongZiNongYiShenHe')->setColumns(6);
        yield TextField::new('genZongJianCeShenHe')->setColumns(6);
        yield TextField::new('jiShuMoShiShenHe')->setColumns(6);
        yield TextField::new('caiWuYuSuanShenHe')->setColumns(6);
        yield TextField::new('keTiShenPi')->setColumns(6);
        yield TextField::new('xiangMuPiZhun')->setColumns(6);
        
        yield TextField::new('guanPaiSheJi')->setColumns(6);
        yield TextField::new('peiFeiSheJi')->setColumns(6);
        yield TextField::new('zhongZiQueRen')->setColumns(6);
        yield TextField::new('nongYiSheJi')->setColumns(6);
        yield TextField::new('jianCeShenHe')->setColumns(6);
        yield TextField::new('moShiShenHe')->setColumns(6);
        
        yield FormField::addColumn(12);
        yield FormField::addFieldset('技术模式简述（每项不超过100字）');
        yield TextareaField::new('guanPaiXieTong')->setColumns(6);
        yield TextareaField::new('xiaoZhangPeiFei')->setColumns(6);
        yield TextareaField::new('zhongZiNongYi')->setColumns(6);
        yield TextareaField::new('genZongJianCe')->setColumns(6);
        yield TextareaField::new('guanPaiXieTongCuoShi')->setColumns(6);
        yield TextareaField::new('xiaoZhangPeiFeiYaoDian')->setColumns(6);
        yield TextareaField::new('nongYiZaiPeiTeDian')->setColumns(6);
        yield TextareaField::new('genZongJianCeFangAn')->setColumns(6);
        yield TextareaField::new('zuZhiShiShiXieTong')->setColumns(6);
        
        yield FormField::addFieldset('其它');
        yield NumberField::new('zhongShiDanChan')->setColumns(6);
        yield TextField::new('feiLiaoShiYong')->setColumns(6);
        yield TextField::new('chanNengTiSheng')->setColumns(6);
        yield NumberField::new('touRu')->setColumns(6);
        yield NumberField::new('chanChu')->setColumns(6);
        
    }
}
