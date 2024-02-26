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
        
        yield IdField::new('id')->onlyOnIndex();
        yield TextField::new('name')->setDisabled($disabled);
        yield TextField::new('SN')
            ->setHelp('4位数字，如 5101')
            ->setHelp($help)
            ->setDisabled($disabled);
        yield TextField::new('location');
        yield NumberField::new('latitude');
        yield NumberField::new('longitude');
        yield NumberField::new('area');
        yield TextField::new('tuRangZhiDi');
        yield TextField::new('yanJianChengDu');
        yield TextField::new('diLiDengJi');
        yield TextField::new('yanJianChengYin');
        yield TextField::new('zhuYaoZhangAi');
        if ($pageName !== 'index') {
            yield TextField::new('zhongZhiZuoWu');
            yield TextField::new('guanGaiXieTong');
            yield TextField::new('xiaoZhangPeiFei');
            yield TextField::new('zhongZiNongYi');
            yield TextField::new('genZongJianCe');
            yield NumberField::new('moShiDanJia');
            yield NumberField::new('moShiZongJia');
            yield NumberField::new('zhongShiDanChan');
            yield NumberField::new('guanGaiDingE');
            yield NumberField::new('yanJianXiaJiang');
            yield NumberField::new('diLiTiSheng');
            yield TextField::new('danChanTiSheng');
            yield NumberField::new('shuiXiaoTiSheng');
            yield NumberField::new('yanZhengZhuanTi');
            yield TextField::new('zhuanTiFuZeRen');
            yield TextField::new('shiShiFuZeRen');
            yield TextField::new('guanPaiSheJi');
            yield TextField::new('peiFeiSheJi');
            yield TextField::new('zhongZiQueRen');
            yield TextField::new('nongYiSheJi');
            yield TextField::new('jianCeShenHe');
            yield TextField::new('moShiShenHe');
            yield TextField::new('keTiShenPi');
            yield TextField::new('xiangMuPiZhun');
            yield TextField::new('gaoCheng');
            yield TextField::new('yanHuaJianHua');
            yield NumberField::new('quanYanLiang');
            yield NumberField::new('youJiZhiHanLiang');
            yield NumberField::new('EC');
            yield NumberField::new('PH');
            yield TextField::new('guanGaiFangShi');
            yield TextField::new('feiLiaoShiYong');
            yield NumberField::new('yuQiDanChan');
            yield TextField::new('chanNengTiSheng');
            yield NumberField::new('touRu');
            yield NumberField::new('chanChu');
            yield TextField::new('guanPaiXieTongCuoShi');
            yield TextField::new('xiaoZhangPeiFeiYaoDian');
            yield TextField::new('nongYiZaiPeiTeDian');
            yield TextField::new('genZongJianCeFangAn');
            yield TextField::new('zuZhiShiShiXieTong');
            yield TextField::new('image');
            yield TextField::new('zhongZiPinZhong');
        }
    }
}
