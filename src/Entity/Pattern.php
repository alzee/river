<?php

namespace App\Entity;

use App\Repository\PatternRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\HttpFoundation\File\File;
use ApiPlatform\Metadata\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;
use ApiPlatform\Metadata\ApiFilter;
use ApiPlatform\Doctrine\Orm\Filter\SearchFilter;
use ApiPlatform\Doctrine\Orm\Filter\OrderFilter;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

#[Vich\Uploadable]
#[ORM\Entity(repositoryClass: PatternRepository::class)]
#[ApiResource(
    normalizationContext: ['groups' => ['read']],
    denormalizationContext: ['groups' => ['write']],
)]
#[ApiFilter(SearchFilter::class, properties: ['id' => 'exact'])]
#[ApiFilter(OrderFilter::class, properties: ['id'])]
#[UniqueEntity('name',
    message: 'This name is already in use',
)]
#[UniqueEntity(
    fields: 'SN',
    message: 'SN is already in use',
)]
class Pattern
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['read'])]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Groups(['read', 'write'])]
    private ?string $name = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['read', 'write'])]
    private ?string $location = null;

    #[ORM\Column(nullable: true)]
    #[Groups(['read', 'write'])]
    private ?float $latitude = null;

    #[ORM\Column(nullable: true)]
    #[Groups(['read', 'write'])]
    private ?float $longitude = null;

    #[ORM\Column(nullable: true)]
    #[Groups(['read', 'write'])]
    private ?int $area = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['read', 'write'])]
    private ?string $tuRangZhiDi = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['read', 'write'])]
    private ?string $yanJianChengDu = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['read', 'write'])]
    private ?string $diLiDengJi = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['read', 'write'])]
    private ?string $yanJianChengYin = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['read', 'write'])]
    private ?string $zhuYaoZhangAi = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['read', 'write'])]
    private ?string $zhongZhiZuoWu = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['read', 'write'])]
    private ?string $guanGaiXieTong = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['read', 'write'])]
    private ?string $xiaoZhangPeiFei = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['read', 'write'])]
    private ?string $zhongZiNongYi = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    #[Groups(['read', 'write'])]
    private ?string $genZongJianCe = null;

    #[ORM\Column(nullable: true)]
    #[Groups(['read', 'write'])]
    private ?float $moShiDanJia = null;

    #[ORM\Column(nullable: true)]
    #[Groups(['read', 'write'])]
    private ?float $moShiZongJia = null;

    #[ORM\Column(nullable: true)]
    #[Groups(['read', 'write'])]
    private ?float $zhongShiDanChan = null;

    #[ORM\Column(nullable: true)]
    #[Groups(['read', 'write'])]
    private ?float $guanGaiDingE = null;

    #[ORM\Column(nullable: true)]
    #[Groups(['read', 'write'])]
    private ?float $yanJianXiaJiang = null;

    #[ORM\Column(nullable: true)]
    #[Groups(['read', 'write'])]
    private ?float $diLiTiSheng = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['read', 'write'])]
    private ?string $danChanTiSheng = null;

    #[ORM\Column(nullable: true)]
    #[Groups(['read', 'write'])]
    private ?float $shuiXiaoTiSheng = null;

    #[ORM\Column(nullable: true)]
    #[Groups(['read', 'write'])]
    private ?float $yanZhengZhuanTi = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['read', 'write'])]
    private ?string $zhuanTiFuZeRen = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['read', 'write'])]
    private ?string $shiShiFuZeRen = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['read', 'write'])]
    private ?string $guanPaiSheJi = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['read', 'write'])]
    private ?string $peiFeiSheJi = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['read', 'write'])]
    private ?string $zhongZiQueRen = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['read', 'write'])]
    private ?string $nongYiSheJi = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['read', 'write'])]
    private ?string $jianCeShenHe = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['read', 'write'])]
    private ?string $moShiShenHe = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['read', 'write'])]
    private ?string $keTiShenPi = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['read', 'write'])]
    private ?string $xiangMuPiZhun = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['read', 'write'])]
    private ?string $gaoCheng = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['read', 'write'])]
    private ?string $yanHuaJianHua = null;

    #[ORM\Column(nullable: true)]
    #[Groups(['read', 'write'])]
    private ?float $quanYanLiang = null;

    #[ORM\Column(nullable: true)]
    #[Groups(['read', 'write'])]
    private ?float $youJiZhiHanLiang = null;

    #[ORM\Column(nullable: true)]
    #[Groups(['read', 'write'])]
    private ?float $EC = null;

    #[ORM\Column(nullable: true)]
    #[Groups(['read', 'write'])]
    private ?float $PH = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['read', 'write'])]
    private ?string $guanGaiFangShi = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['read', 'write'])]
    private ?string $feiLiaoShiYong = null;

    #[ORM\Column(nullable: true)]
    #[Groups(['read', 'write'])]
    private ?int $yuQiDanChan = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['read', 'write'])]
    private ?string $chanNengTiSheng = null;

    #[ORM\Column(nullable: true)]
    #[Groups(['read', 'write'])]
    private ?float $touRu = null;

    #[ORM\Column(nullable: true)]
    #[Groups(['read', 'write'])]
    private ?float $chanChu = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    #[Groups(['read', 'write'])]
    private ?string $guanPaiXieTongCuoShi = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    #[Groups(['read', 'write'])]
    private ?string $xiaoZhangPeiFeiYaoDian = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    #[Groups(['read', 'write'])]
    private ?string $nongYiZaiPeiTeDian = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    #[Groups(['read', 'write'])]
    private ?string $genZongJianCeFangAn = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    #[Groups(['read', 'write'])]
    private ?string $zuZhiShiShiXieTong = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['read', 'write'])]
    private ?string $image = null;
    
    #[Vich\UploadableField(mapping: 'patterns', fileNameProperty: 'image')]
    #[Assert\Image(maxSize: '1024k', mimeTypes: ['image/jpeg', 'image/png'], mimeTypesMessage: 'Only jpg and png')]
    private ?File $imageFile = null;

    #[ORM\Column]
    #[Groups(['read', 'write'])]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\Column(nullable: true)]
    #[Groups(['read', 'write'])]
    private ?\DateTimeImmutable $updatedAt = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['read', 'write'])]
    private ?string $zhongZiPinZhong = null;

    #[ORM\OneToMany(targetEntity: Soil::class, mappedBy: 'pattern', cascade: ["remove"])]
    #[ORM\OrderBy(["id" => "ASC"])]
    #[Groups(['read', 'write'])]
    private Collection $soils;

    #[ORM\OneToMany(targetEntity: Irrigation::class, mappedBy: 'pattern', cascade: ["remove"], orphanRemoval: true)]
    #[ORM\OrderBy(["id" => "ASC"])]
    #[Groups(['read', 'write'])]
    private Collection $irrigations;

    #[ORM\OneToMany(targetEntity: Fertilizer::class, mappedBy: 'pattern', cascade: ["remove"], orphanRemoval: true)]
    #[ORM\OrderBy(["id" => "ASC"])]
    #[Groups(['read', 'write'])]
    private Collection $fertilizers;

    #[ORM\OneToMany(targetEntity: Seed::class, mappedBy: 'pattern', cascade: ["remove"], orphanRemoval: true)]
    #[ORM\OrderBy(["id" => "ASC"])]
    #[Groups(['read', 'write'])]
    private Collection $seeds;

    #[ORM\OneToMany(targetEntity: Tracking::class, mappedBy: 'pattern', cascade: ["remove"], orphanRemoval: true)]
    #[ORM\OrderBy(["id" => "ASC"])]
    #[Groups(['read', 'write'])]
    private Collection $trackings;

    #[ORM\OneToMany(targetEntity: Cost::class, mappedBy: 'pattern', cascade: ["remove"], orphanRemoval: true)]
    #[ORM\OrderBy(["id" => "ASC"])]
    #[Groups(['read', 'write'])]
    private Collection $costs;

    #[ORM\Column]
    #[Groups(['read', 'write'])]
    #[Assert\Length(exactly: 4, exactMessage: '请输入4位数字')]
    private ?int $SN = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $guanGaiCiShu = null;

    #[ORM\Column(nullable: true)]
    private ?int $zongGuanShuiLiang = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $paiShuiFangShi = null;

    #[ORM\Column(nullable: true)]
    private ?float $paiShuiMaiShen = null;

    #[ORM\Column(nullable: true)]
    private ?int $paiShuiJianJu = null;

    #[ORM\Column(nullable: true)]
    private ?int $huiYongNengLi = null;

    #[ORM\Column(nullable: true)]
    private ?float $huiYongKongZhiShuiZhi = null;

    #[ORM\Column(nullable: true)]
    private ?int $zhongShiMianJi = null;

    #[ORM\Column(nullable: true)]
    private ?int $zhuZeZhuanTi = null;

    #[ORM\Column(nullable: true)]
    private ?float $sheJiZongTouRu = null;

    #[ORM\Column(nullable: true)]
    private ?float $heSuanZongTouRu = null;

    #[ORM\Column(nullable: true)]
    private ?int $muJunTouRu = null;

    #[ORM\Column(nullable: true)]
    private ?int $muJunChanChu = null;

    #[ORM\Column(nullable: true)]
    private ?float $chanTouBi = null;
    
    public function getSoil0()
    {
        return $this->getSoils()[0];
    }
    
    public function getCost0()
    {
        return $this->getCosts()[0];
    }
    
    public function getFertilizer0()
    {
        return $this->getFertilizers()[0];
    }
    
    public function getIrrigation0()
    {
        return $this->getIrrigations()[0];
    }
    
    public function getSeed0()
    {
        return $this->getSeeds()[0];
    }
    
    public function getTracking0()
    {
        return $this->getTrackings()[0];
    }
    
    public function __construct()
    {
        $this->createdAt = new \DateTimeImmutable();
        $this->soils = new ArrayCollection();
        $this->irrigations = new ArrayCollection();
        $this->fertilizers = new ArrayCollection();
        $this->seeds = new ArrayCollection();
        $this->trackings = new ArrayCollection();
        $this->costs = new ArrayCollection();
    }
    
    public function __toString()
    {
        return $this->name;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function setLocation(?string $location): static
    {
        $this->location = $location;

        return $this;
    }

    public function getLatitude(): ?float
    {
        return $this->latitude;
    }

    public function setLatitude(?float $latitude): static
    {
        $this->latitude = $latitude;

        return $this;
    }

    public function getLongitude(): ?float
    {
        return $this->longitude;
    }

    public function setLongitude(?float $longitude): static
    {
        $this->longitude = $longitude;

        return $this;
    }

    public function getArea(): ?int
    {
        return $this->area;
    }

    public function setArea(?int $area): static
    {
        $this->area = $area;

        return $this;
    }

    public function getTuRangZhiDi(): ?string
    {
        return $this->tuRangZhiDi;
    }

    public function setTuRangZhiDi(?string $tuRangZhiDi): static
    {
        $this->tuRangZhiDi = $tuRangZhiDi;

        return $this;
    }

    public function getYanJianChengDu(): ?string
    {
        return $this->yanJianChengDu;
    }

    public function setYanJianChengDu(?string $yanJianChengDu): static
    {
        $this->yanJianChengDu = $yanJianChengDu;

        return $this;
    }

    public function getDiLiDengJi(): ?string
    {
        return $this->diLiDengJi;
    }

    public function setDiLiDengJi(?string $diLiDengJi): static
    {
        $this->diLiDengJi = $diLiDengJi;

        return $this;
    }

    public function getYanJianChengYin(): ?string
    {
        return $this->yanJianChengYin;
    }

    public function setYanJianChengYin(?string $yanJianChengYin): static
    {
        $this->yanJianChengYin = $yanJianChengYin;

        return $this;
    }

    public function getZhuYaoZhangAi(): ?string
    {
        return $this->zhuYaoZhangAi;
    }

    public function setZhuYaoZhangAi(?string $zhuYaoZhangAi): static
    {
        $this->zhuYaoZhangAi = $zhuYaoZhangAi;

        return $this;
    }

    public function getZhongZhiZuoWu(): ?string
    {
        return $this->zhongZhiZuoWu;
    }

    public function setZhongZhiZuoWu(?string $zhongZhiZuoWu): static
    {
        $this->zhongZhiZuoWu = $zhongZhiZuoWu;

        return $this;
    }

    public function getGuanGaiXieTong(): ?string
    {
        return $this->guanGaiXieTong;
    }

    public function setGuanGaiXieTong(?string $guanGaiXieTong): static
    {
        $this->guanGaiXieTong = $guanGaiXieTong;

        return $this;
    }

    public function getXiaoZhangPeiFei(): ?string
    {
        return $this->xiaoZhangPeiFei;
    }

    public function setXiaoZhangPeiFei(?string $xiaoZhangPeiFei): static
    {
        $this->xiaoZhangPeiFei = $xiaoZhangPeiFei;

        return $this;
    }

    public function getZhongZiNongYi(): ?string
    {
        return $this->zhongZiNongYi;
    }

    public function setZhongZiNongYi(?string $zhongZiNongYi): static
    {
        $this->zhongZiNongYi = $zhongZiNongYi;

        return $this;
    }

    public function getGenZongJianCe(): ?string
    {
        return $this->genZongJianCe;
    }

    public function setGenZongJianCe(?string $genZongJianCe): static
    {
        $this->genZongJianCe = $genZongJianCe;

        return $this;
    }

    public function getMoShiDanJia(): ?float
    {
        return $this->moShiDanJia;
    }

    public function setMoShiDanJia(?float $moShiDanJia): static
    {
        $this->moShiDanJia = $moShiDanJia;

        return $this;
    }

    public function getMoShiZongJia(): ?float
    {
        return $this->moShiZongJia;
    }

    public function setMoShiZongJia(?float $moShiZongJia): static
    {
        $this->moShiZongJia = $moShiZongJia;

        return $this;
    }

    public function getZhongShiDanChan(): ?float
    {
        return $this->zhongShiDanChan;
    }

    public function setZhongShiDanChan(?float $zhongShiDanChan): static
    {
        $this->zhongShiDanChan = $zhongShiDanChan;

        return $this;
    }

    public function getGuanGaiDingE(): ?float
    {
        return $this->guanGaiDingE;
    }

    public function setGuanGaiDingE(?float $guanGaiDingE): static
    {
        $this->guanGaiDingE = $guanGaiDingE;

        return $this;
    }

    public function getYanJianXiaJiang(): ?float
    {
        return $this->yanJianXiaJiang;
    }

    public function setYanJianXiaJiang(?float $yanJianXiaJiang): static
    {
        $this->yanJianXiaJiang = $yanJianXiaJiang;

        return $this;
    }

    public function getDiLiTiSheng(): ?float
    {
        return $this->diLiTiSheng;
    }

    public function setDiLiTiSheng(?float $diLiTiSheng): static
    {
        $this->diLiTiSheng = $diLiTiSheng;

        return $this;
    }

    public function getDanChanTiSheng(): ?string
    {
        return $this->danChanTiSheng;
    }

    public function setDanChanTiSheng(?string $danChanTiSheng): static
    {
        $this->danChanTiSheng = $danChanTiSheng;

        return $this;
    }

    public function getShuiXiaoTiSheng(): ?float
    {
        return $this->shuiXiaoTiSheng;
    }

    public function setShuiXiaoTiSheng(?float $shuiXiaoTiSheng): static
    {
        $this->shuiXiaoTiSheng = $shuiXiaoTiSheng;

        return $this;
    }

    public function getYanZhengZhuanTi(): ?float
    {
        return $this->yanZhengZhuanTi;
    }

    public function setYanZhengZhuanTi(?float $yanZhengZhuanTi): static
    {
        $this->yanZhengZhuanTi = $yanZhengZhuanTi;

        return $this;
    }

    public function getZhuanTiFuZeRen(): ?string
    {
        return $this->zhuanTiFuZeRen;
    }

    public function setZhuanTiFuZeRen(?string $zhuanTiFuZeRen): static
    {
        $this->zhuanTiFuZeRen = $zhuanTiFuZeRen;

        return $this;
    }

    public function getShiShiFuZeRen(): ?string
    {
        return $this->shiShiFuZeRen;
    }

    public function setShiShiFuZeRen(?string $shiShiFuZeRen): static
    {
        $this->shiShiFuZeRen = $shiShiFuZeRen;

        return $this;
    }

    public function getGuanPaiSheJi(): ?string
    {
        return $this->guanPaiSheJi;
    }

    public function setGuanPaiSheJi(?string $guanPaiSheJi): static
    {
        $this->guanPaiSheJi = $guanPaiSheJi;

        return $this;
    }

    public function getPeiFeiSheJi(): ?string
    {
        return $this->peiFeiSheJi;
    }

    public function setPeiFeiSheJi(?string $peiFeiSheJi): static
    {
        $this->peiFeiSheJi = $peiFeiSheJi;

        return $this;
    }

    public function getZhongZiQueRen(): ?string
    {
        return $this->zhongZiQueRen;
    }

    public function setZhongZiQueRen(?string $zhongZiQueRen): static
    {
        $this->zhongZiQueRen = $zhongZiQueRen;

        return $this;
    }

    public function getNongYiSheJi(): ?string
    {
        return $this->nongYiSheJi;
    }

    public function setNongYiSheJi(?string $nongYiSheJi): static
    {
        $this->nongYiSheJi = $nongYiSheJi;

        return $this;
    }

    public function getJianCeShenHe(): ?string
    {
        return $this->jianCeShenHe;
    }

    public function setJianCeShenHe(?string $jianCeShenHe): static
    {
        $this->jianCeShenHe = $jianCeShenHe;

        return $this;
    }

    public function getMoShiShenHe(): ?string
    {
        return $this->moShiShenHe;
    }

    public function setMoShiShenHe(?string $moShiShenHe): static
    {
        $this->moShiShenHe = $moShiShenHe;

        return $this;
    }

    public function getKeTiShenPi(): ?string
    {
        return $this->keTiShenPi;
    }

    public function setKeTiShenPi(?string $keTiShenPi): static
    {
        $this->keTiShenPi = $keTiShenPi;

        return $this;
    }

    public function getXiangMuPiZhun(): ?string
    {
        return $this->xiangMuPiZhun;
    }

    public function setXiangMuPiZhun(?string $xiangMuPiZhun): static
    {
        $this->xiangMuPiZhun = $xiangMuPiZhun;

        return $this;
    }

    public function getGaoCheng(): ?string
    {
        return $this->gaoCheng;
    }

    public function setGaoCheng(?string $gaoCheng): static
    {
        $this->gaoCheng = $gaoCheng;

        return $this;
    }

    public function getYanHuaJianHua(): ?string
    {
        return $this->yanHuaJianHua;
    }

    public function setYanHuaJianHua(?string $yanHuaJianHua): static
    {
        $this->yanHuaJianHua = $yanHuaJianHua;

        return $this;
    }

    public function getQuanYanLiang(): ?float
    {
        return $this->quanYanLiang;
    }

    public function setQuanYanLiang(float $quanYanLiang): static
    {
        $this->quanYanLiang = $quanYanLiang;

        return $this;
    }

    public function getYouJiZhiHanLiang(): ?float
    {
        return $this->youJiZhiHanLiang;
    }

    public function setYouJiZhiHanLiang(?float $youJiZhiHanLiang): static
    {
        $this->youJiZhiHanLiang = $youJiZhiHanLiang;

        return $this;
    }

    public function getEC(): ?float
    {
        return $this->EC;
    }

    public function setEC(?float $EC): static
    {
        $this->EC = $EC;

        return $this;
    }

    public function getPH(): ?float
    {
        return $this->PH;
    }

    public function setPH(?float $PH): static
    {
        $this->PH = $PH;

        return $this;
    }

    public function getGuanGaiFangShi(): ?string
    {
        return $this->guanGaiFangShi;
    }

    public function setGuanGaiFangShi(?string $guanGaiFangShi): static
    {
        $this->guanGaiFangShi = $guanGaiFangShi;

        return $this;
    }

    public function getFeiLiaoShiYong(): ?string
    {
        return $this->feiLiaoShiYong;
    }

    public function setFeiLiaoShiYong(?string $feiLiaoShiYong): static
    {
        $this->feiLiaoShiYong = $feiLiaoShiYong;

        return $this;
    }

    public function getYuQiDanChan(): ?int
    {
        return $this->yuQiDanChan;
    }

    public function setYuQiDanChan(?int $yuQiDanChan): static
    {
        $this->yuQiDanChan = $yuQiDanChan;

        return $this;
    }

    public function getChanNengTiSheng(): ?string
    {
        return $this->chanNengTiSheng;
    }

    public function setChanNengTiSheng(?string $chanNengTiSheng): static
    {
        $this->chanNengTiSheng = $chanNengTiSheng;

        return $this;
    }

    public function getTouRu(): ?float
    {
        return $this->touRu;
    }

    public function setTouRu(?float $touRu): static
    {
        $this->touRu = $touRu;

        return $this;
    }

    public function getChanChu(): ?float
    {
        return $this->chanChu;
    }

    public function setChanChu(?float $chanChu): static
    {
        $this->chanChu = $chanChu;

        return $this;
    }

    public function getGuanPaiXieTongCuoShi(): ?string
    {
        return $this->guanPaiXieTongCuoShi;
    }

    public function setGuanPaiXieTongCuoShi(?string $guanPaiXieTongCuoShi): static
    {
        $this->guanPaiXieTongCuoShi = $guanPaiXieTongCuoShi;

        return $this;
    }

    public function getXiaoZhangPeiFeiYaoDian(): ?string
    {
        return $this->xiaoZhangPeiFeiYaoDian;
    }

    public function setXiaoZhangPeiFeiYaoDian(?string $xiaoZhangPeiFeiYaoDian): static
    {
        $this->xiaoZhangPeiFeiYaoDian = $xiaoZhangPeiFeiYaoDian;

        return $this;
    }

    public function getNongYiZaiPeiTeDian(): ?string
    {
        return $this->nongYiZaiPeiTeDian;
    }

    public function setNongYiZaiPeiTeDian(?string $nongYiZaiPeiTeDian): static
    {
        $this->nongYiZaiPeiTeDian = $nongYiZaiPeiTeDian;

        return $this;
    }

    public function getGenZongJianCeFangAn(): ?string
    {
        return $this->genZongJianCeFangAn;
    }

    public function setGenZongJianCeFangAn(?string $genZongJianCeFangAn): static
    {
        $this->genZongJianCeFangAn = $genZongJianCeFangAn;

        return $this;
    }

    public function getZuZhiShiShiXieTong(): ?string
    {
        return $this->zuZhiShiShiXieTong;
    }

    public function setZuZhiShiShiXieTong(string $zuZhiShiShiXieTong): static
    {
        $this->zuZhiShiShiXieTong = $zuZhiShiShiXieTong;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): static
    {
        $this->image = $image;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): static
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeImmutable
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeImmutable $updatedAt): static
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function setImageFile(?File $imageFile = null): void
    {
        $this->imageFile = $imageFile;

        if (null !== $imageFile) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt = new \DateTimeImmutable();
        }
    }

    public function getImageFile(): ?File
    {
        return $this->imageFile;
    }

    public function getZhongZiPinZhong(): ?string
    {
        return $this->zhongZiPinZhong;
    }

    public function setZhongZiPinZhong(?string $zhongZiPinZhong): static
    {
        $this->zhongZiPinZhong = $zhongZiPinZhong;

        return $this;
    }

    /**
     * @return Collection<int, Soil>
     */
    public function getSoils(): Collection
    {
        return $this->soils;
    }

    public function addSoil(Soil $soil): static
    {
        if (!$this->soils->contains($soil)) {
            $this->soils->add($soil);
            $soil->setPattern($this);
        }

        return $this;
    }

    public function removeSoil(Soil $soil): static
    {
        if ($this->soils->removeElement($soil)) {
            // set the owning side to null (unless already changed)
            if ($soil->getPattern() === $this) {
                $soil->setPattern(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Irrigation>
     */
    public function getIrrigations(): Collection
    {
        return $this->irrigations;
    }

    public function addIrrigation(Irrigation $irrigation): static
    {
        if (!$this->irrigations->contains($irrigation)) {
            $this->irrigations->add($irrigation);
            $irrigation->setPattern($this);
        }

        return $this;
    }

    public function removeIrrigation(Irrigation $irrigation): static
    {
        if ($this->irrigations->removeElement($irrigation)) {
            // set the owning side to null (unless already changed)
            if ($irrigation->getPattern() === $this) {
                $irrigation->setPattern(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Fertilizer>
     */
    public function getFertilizers(): Collection
    {
        return $this->fertilizers;
    }

    public function addFertilizer(Fertilizer $fertilizer): static
    {
        if (!$this->fertilizers->contains($fertilizer)) {
            $this->fertilizers->add($fertilizer);
            $fertilizer->setPattern($this);
        }

        return $this;
    }

    public function removeFertilizer(Fertilizer $fertilizer): static
    {
        if ($this->fertilizers->removeElement($fertilizer)) {
            // set the owning side to null (unless already changed)
            if ($fertilizer->getPattern() === $this) {
                $fertilizer->setPattern(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Seed>
     */
    public function getSeeds(): Collection
    {
        return $this->seeds;
    }

    public function addSeed(Seed $seed): static
    {
        if (!$this->seeds->contains($seed)) {
            $this->seeds->add($seed);
            $seed->setPattern($this);
        }

        return $this;
    }

    public function removeSeed(Seed $seed): static
    {
        if ($this->seeds->removeElement($seed)) {
            // set the owning side to null (unless already changed)
            if ($seed->getPattern() === $this) {
                $seed->setPattern(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Tracking>
     */
    public function getTrackings(): Collection
    {
        return $this->trackings;
    }

    public function addTracking(Tracking $tracking): static
    {
        if (!$this->trackings->contains($tracking)) {
            $this->trackings->add($tracking);
            $tracking->setPattern($this);
        }

        return $this;
    }

    public function removeTracking(Tracking $tracking): static
    {
        if ($this->trackings->removeElement($tracking)) {
            // set the owning side to null (unless already changed)
            if ($tracking->getPattern() === $this) {
                $tracking->setPattern(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Cost>
     */
    public function getCosts(): Collection
    {
        return $this->costs;
    }

    public function addCost(Cost $cost): static
    {
        if (!$this->costs->contains($cost)) {
            $this->costs->add($cost);
            $cost->setPattern($this);
        }

        return $this;
    }

    public function removeCost(Cost $cost): static
    {
        if ($this->costs->removeElement($cost)) {
            // set the owning side to null (unless already changed)
            if ($cost->getPattern() === $this) {
                $cost->setPattern(null);
            }
        }

        return $this;
    }

    public function getSN(): ?int
    {
        return $this->SN;
    }

    public function setSN(int $SN): static
    {
        $this->SN = $SN;

        return $this;
    }

    public function getGuanGaiCiShu(): ?int
    {
        return $this->guanGaiCiShu;
    }

    public function setGuanGaiCiShu(?int $guanGaiCiShu): static
    {
        $this->guanGaiCiShu = $guanGaiCiShu;

        return $this;
    }

    public function getZongGuanShuiLiang(): ?int
    {
        return $this->zongGuanShuiLiang;
    }

    public function setZongGuanShuiLiang(?int $zongGuanShuiLiang): static
    {
        $this->zongGuanShuiLiang = $zongGuanShuiLiang;

        return $this;
    }

    public function getPaiShuiFangShi(): ?string
    {
        return $this->paiShuiFangShi;
    }

    public function setPaiShuiFangShi(?string $paiShuiFangShi): static
    {
        $this->paiShuiFangShi = $paiShuiFangShi;

        return $this;
    }

    public function getPaiShuiMaiShen(): ?float
    {
        return $this->paiShuiMaiShen;
    }

    public function setPaiShuiMaiShen(?float $paiShuiMaiShen): static
    {
        $this->paiShuiMaiShen = $paiShuiMaiShen;

        return $this;
    }

    public function getPaiShuiJianJu(): ?int
    {
        return $this->paiShuiJianJu;
    }

    public function setPaiShuiJianJu(?int $paiShuiJianJu): static
    {
        $this->paiShuiJianJu = $paiShuiJianJu;

        return $this;
    }

    public function getHuiYongNengLi(): ?int
    {
        return $this->huiYongNengLi;
    }

    public function setHuiYongNengLi(?int $huiYongNengLi): static
    {
        $this->huiYongNengLi = $huiYongNengLi;

        return $this;
    }

    public function getHuiYongKongZhiShuiZhi(): ?float
    {
        return $this->huiYongKongZhiShuiZhi;
    }

    public function setHuiYongKongZhiShuiZhi(?float $huiYongKongZhiShuiZhi): static
    {
        $this->huiYongKongZhiShuiZhi = $huiYongKongZhiShuiZhi;

        return $this;
    }

    public function getZhongShiMianJi(): ?int
    {
        return $this->zhongShiMianJi;
    }

    public function setZhongShiMianJi(?int $zhongShiMianJi): static
    {
        $this->zhongShiMianJi = $zhongShiMianJi;

        return $this;
    }

    public function getZhuZeZhuanTi(): ?int
    {
        return $this->zhuZeZhuanTi;
    }

    public function setZhuZeZhuanTi(?int $zhuZeZhuanTi): static
    {
        $this->zhuZeZhuanTi = $zhuZeZhuanTi;

        return $this;
    }

    public function getSheJiZongTouRu(): ?float
    {
        return $this->sheJiZongTouRu;
    }

    public function setSheJiZongTouRu(?float $sheJiZongTouRu): static
    {
        $this->sheJiZongTouRu = $sheJiZongTouRu;

        return $this;
    }

    public function getHeSuanZongTouRu(): ?float
    {
        return $this->heSuanZongTouRu;
    }

    public function setHeSuanZongTouRu(?float $heSuanZongTouRu): static
    {
        $this->heSuanZongTouRu = $heSuanZongTouRu;

        return $this;
    }

    public function getMuJunTouRu(): ?int
    {
        return $this->muJunTouRu;
    }

    public function setMuJunTouRu(?int $muJunTouRu): static
    {
        $this->muJunTouRu = $muJunTouRu;

        return $this;
    }

    public function getMuJunChanChu(): ?int
    {
        return $this->muJunChanChu;
    }

    public function setMuJunChanChu(?int $muJunChanChu): static
    {
        $this->muJunChanChu = $muJunChanChu;

        return $this;
    }

    public function getChanTouBi(): ?float
    {
        return $this->chanTouBi;
    }

    public function setChanTouBi(?float $chanTouBi): static
    {
        $this->chanTouBi = $chanTouBi;

        return $this;
    }
}
