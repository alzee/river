<?php

namespace App\Entity;

use App\Repository\IrrigationRepository;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Metadata\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;
use ApiPlatform\Metadata\ApiFilter;
use ApiPlatform\Doctrine\Orm\Filter\SearchFilter;
use ApiPlatform\Doctrine\Orm\Filter\OrderFilter;

#[ORM\Entity(repositoryClass: IrrigationRepository::class)]
#[ApiResource(
    normalizationContext: ['groups' => ['other_read']],
    denormalizationContext: ['groups' => ['other_write']],
)]
#[ApiFilter(SearchFilter::class, properties: ['pattern' => 'exact'])]
class Irrigation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['other_read', 'read'])]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Groups(['other_read', 'read', 'other_write'])]
    private ?string $date = null;

    #[ORM\Column(length: 255)]
    #[Groups(['other_read', 'read', 'other_write'])]
    private ?string $guanShuiLiang = null;

    #[ORM\ManyToOne(inversedBy: 'irrigations')]
    #[ORM\JoinColumn(nullable: false)]
    #[Groups(['other_read'])]
    private ?Pattern $pattern = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getGuanShuiLiang(): ?string
    {
        return $this->guanShuiLiang;
    }

    public function setGuanShuiLiang(string $guanShuiLiang): static
    {
        $this->guanShuiLiang = $guanShuiLiang;

        return $this;
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
}
