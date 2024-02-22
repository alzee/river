<?php

namespace App\Entity;

use App\Repository\CostRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CostRepository::class)]
class Cost
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'costs')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Pattern $pattern = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $neiRong = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $zongLiang = null;

    #[ORM\Column(nullable: true)]
    private ?float $zongJia = null;

    #[ORM\Column(nullable: true)]
    private ?float $danJia = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $danWei = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $fangFa = null;

    #[ORM\Column(nullable: true)]
    private ?float $shiYongLiang = null;

    #[ORM\Column(nullable: true)]
    private ?float $chanLiang = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPattern(): ?Pattern
    {
        return $this->pattern;
    }

    public function setPattern(?Pattern $pattern): static
    {
        $this->pattern = $pattern;

        return $this;
    }

    public function getNeiRong(): ?string
    {
        return $this->neiRong;
    }

    public function setNeiRong(?string $neiRong): static
    {
        $this->neiRong = $neiRong;

        return $this;
    }

    public function getZongLiang(): ?string
    {
        return $this->zongLiang;
    }

    public function setZongLiang(?string $zongLiang): static
    {
        $this->zongLiang = $zongLiang;

        return $this;
    }

    public function getZongJia(): ?float
    {
        return $this->zongJia;
    }

    public function setZongJia(?float $zongJia): static
    {
        $this->zongJia = $zongJia;

        return $this;
    }

    public function getDanJia(): ?float
    {
        return $this->danJia;
    }

    public function setDanJia(?float $danJia): static
    {
        $this->danJia = $danJia;

        return $this;
    }

    public function getDanWei(): ?string
    {
        return $this->danWei;
    }

    public function setDanWei(?string $danWei): static
    {
        $this->danWei = $danWei;

        return $this;
    }

    public function getFangFa(): ?string
    {
        return $this->fangFa;
    }

    public function setFangFa(?string $fangFa): static
    {
        $this->fangFa = $fangFa;

        return $this;
    }

    public function getShiYongLiang(): ?float
    {
        return $this->shiYongLiang;
    }

    public function setShiYongLiang(?float $shiYongLiang): static
    {
        $this->shiYongLiang = $shiYongLiang;

        return $this;
    }

    public function getChanLiang(): ?float
    {
        return $this->chanLiang;
    }

    public function setChanLiang(float $chanLiang): static
    {
        $this->chanLiang = $chanLiang;

        return $this;
    }
}
