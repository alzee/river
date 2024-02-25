<?php

namespace App\Entity;

use App\Repository\FertilizerRepository;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Metadata\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;
use ApiPlatform\Metadata\ApiFilter;
use ApiPlatform\Doctrine\Orm\Filter\SearchFilter;
use ApiPlatform\Doctrine\Orm\Filter\OrderFilter;

#[ORM\Entity(repositoryClass: FertilizerRepository::class)]
#[ApiResource(
    normalizationContext: ['groups' => ['other_read']],
    denormalizationContext: ['groups' => ['other_write']],
)]
#[ApiFilter(SearchFilter::class, properties: ['pattern' => 'exact'])]
class Fertilizer
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['other_read', 'read'])]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'fertilizers')]
    #[ORM\JoinColumn(nullable: false)]
    #[Groups(['other_read'])]
    private ?Pattern $pattern = null;

    #[ORM\Column(length: 255)]
    #[Groups(['other_read', 'read', 'other_write'])]
    private ?string $date = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['other_read', 'read', 'other_write'])]
    private ?string $cuoShi1 = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['other_read', 'read', 'other_write'])]
    private ?string $shiYongLiang1 = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['other_read', 'read', 'other_write'])]
    private ?string $cuoShi2 = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['other_read', 'read', 'other_write'])]
    private ?string $shiYongLiang2 = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['other_read', 'read', 'other_write'])]
    private ?string $cuoShi3 = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['other_read', 'read', 'other_write'])]
    private ?string $shiYongLiang3 = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['other_read', 'read', 'other_write'])]
    private ?string $cuoShi4 = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['other_read', 'read', 'other_write'])]
    private ?string $shiYongLiang4 = null;

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

    public function getCuoShi1(): ?string
    {
        return $this->cuoShi1;
    }

    public function setCuoShi1(?string $cuoShi1): static
    {
        $this->cuoShi1 = $cuoShi1;

        return $this;
    }

    public function getShiYongLiang1(): ?string
    {
        return $this->shiYongLiang1;
    }

    public function setShiYongLiang1(?string $shiYongLiang1): static
    {
        $this->shiYongLiang1 = $shiYongLiang1;

        return $this;
    }

    public function getCuoShi2(): ?string
    {
        return $this->cuoShi2;
    }

    public function setCuoShi2(?string $cuoShi2): static
    {
        $this->cuoShi2 = $cuoShi2;

        return $this;
    }

    public function getShiYongLiang2(): ?string
    {
        return $this->shiYongLiang2;
    }

    public function setShiYongLiang2(?string $shiYongLiang2): static
    {
        $this->shiYongLiang2 = $shiYongLiang2;

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

    public function getShiYongLiang3(): ?string
    {
        return $this->shiYongLiang3;
    }

    public function setShiYongLiang3(?string $shiYongLiang3): static
    {
        $this->shiYongLiang3 = $shiYongLiang3;

        return $this;
    }

    public function getCuoShi4(): ?string
    {
        return $this->cuoShi4;
    }

    public function setCuoShi4(?string $cuoShi4): static
    {
        $this->cuoShi4 = $cuoShi4;

        return $this;
    }

    public function getShiYongLiang4(): ?string
    {
        return $this->shiYongLiang4;
    }

    public function setShiYongLiang4(?string $shiYongLiang4): static
    {
        $this->shiYongLiang4 = $shiYongLiang4;

        return $this;
    }
}
