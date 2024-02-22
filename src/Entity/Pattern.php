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
}
