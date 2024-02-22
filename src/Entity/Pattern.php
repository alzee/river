<?php

namespace App\Entity;

use App\Repository\PatternRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PatternRepository::class)]
class Pattern
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $location = null;

    #[ORM\Column(nullable: true)]
    private ?float $latitude = null;

    #[ORM\Column(nullable: true)]
    private ?float $longitude = null;

    #[ORM\Column(nullable: true)]
    private ?int $area = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $tuRangZhiDi = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $yanJianChengDu = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $diLiDengJi = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $yanJianChengYin = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $zhuYaoZhangAi = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $zhongZhiZuoWu = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $guanGaiXieTong = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $xiaoZhangPeiFei = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $zhongZiNongYi = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $genZongJianCe = null;

    #[ORM\Column(nullable: true)]
    private ?float $moShiDanJia = null;

    #[ORM\Column(nullable: true)]
    private ?float $moShiZongJia = null;

    #[ORM\Column(nullable: true)]
    private ?float $zhongShiDanChan = null;

    #[ORM\Column(nullable: true)]
    private ?float $guanGaiDingE = null;

    #[ORM\Column(nullable: true)]
    private ?float $yanJianXiaJiang = null;

    #[ORM\Column(nullable: true)]
    private ?float $diLiTiSheng = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $danChanTiSheng = null;

    #[ORM\Column(nullable: true)]
    private ?float $shuiXiaoTiSheng = null;

    #[ORM\Column(nullable: true)]
    private ?float $yanZhengZhuanTi = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $zhuanTiFuZeRen = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $shiShiFuZeRen = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $guanPaiSheJi = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $peiFeiSheJi = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $zhongZiQueRen = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nongYiSheJi = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $jianCeShenHe = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $moShiShenHe = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $keTiShenPi = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $xiangMuPiZhun = null;

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
}
