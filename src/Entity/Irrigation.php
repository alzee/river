<?php

namespace App\Entity;

use App\Repository\IrrigationRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: IrrigationRepository::class)]
class Irrigation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $date = null;

    #[ORM\Column(length: 255)]
    private ?string $guanShuiLiang = null;

    #[ORM\ManyToOne(inversedBy: 'irrigations')]
    #[ORM\JoinColumn(nullable: false)]
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