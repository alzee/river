<?php

namespace App\Entity;

use App\Repository\SeedRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SeedRepository::class)]
class Seed
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'seeds')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Pattern $pattern = null;

    #[ORM\Column(length: 255)]
    private ?string $date = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nongYiJiShu = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $wuLiJieGouGaiShan = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $cuoShi3 = null;

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

    public function getDate(): ?string
    {
        return $this->date;
    }

    public function setDate(string $date): static
    {
        $this->date = $date;

        return $this;
    }

    public function getNongYiJiShu(): ?string
    {
        return $this->nongYiJiShu;
    }

    public function setNongYiJiShu(?string $nongYiJiShu): static
    {
        $this->nongYiJiShu = $nongYiJiShu;

        return $this;
    }

    public function getWuLiJieGouGaiShan(): ?string
    {
        return $this->wuLiJieGouGaiShan;
    }

    public function setWuLiJieGouGaiShan(?string $wuLiJieGouGaiShan): static
    {
        $this->wuLiJieGouGaiShan = $wuLiJieGouGaiShan;

        return $this;
    }

    public function getCuoShi3(): ?string
    {
        return $this->cuoShi3;
    }

    public function setCuoShi3(?string $cuoShi3): static
    {
        $this->cuoShi3 = $cuoShi3;

        return $this;
    }
}
