<?php

namespace App\Entity;

use App\Repository\SeedRepository;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Metadata\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;
use ApiPlatform\Metadata\ApiFilter;
use ApiPlatform\Doctrine\Orm\Filter\SearchFilter;
use ApiPlatform\Doctrine\Orm\Filter\OrderFilter;

#[ORM\Entity(repositoryClass: SeedRepository::class)]
#[ApiResource(
    normalizationContext: ['groups' => ['other_read']],
    denormalizationContext: ['groups' => ['other_write']],
)]
#[ApiFilter(SearchFilter::class, properties: ['pattern' => 'exact'])]
class Seed
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['other_read', 'read'])]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'seeds')]
    #[ORM\JoinColumn(nullable: false)]
    #[Groups(['other_read'])]
    private ?Pattern $pattern = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['other_read', 'read', 'other_write'])]
    private ?string $date = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['other_read', 'read', 'other_write'])]
    private ?string $nongYiJiShu = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['other_read', 'read', 'other_write'])]
    private ?string $wuLiJieGouGaiShan = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['other_read', 'read', 'other_write'])]
    private ?string $cuoShi3 = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['other_read', 'read', 'other_write'])]
    private ?string $type = null;
    
    public function __toString()
    {
        return $this->type;
    }

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

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): static
    {
        $this->type = $type;

        return $this;
    }
}
