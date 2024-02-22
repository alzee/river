<?php

namespace App\Entity;

use App\Repository\TrackingRepository;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Metadata\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;
use ApiPlatform\Metadata\ApiFilter;
use ApiPlatform\Doctrine\Orm\Filter\SearchFilter;
use ApiPlatform\Doctrine\Orm\Filter\OrderFilter;

#[ORM\Entity(repositoryClass: TrackingRepository::class)]
#[ApiResource(
    normalizationContext: ['groups' => ['read']],
    denormalizationContext: ['groups' => ['write']],
)]
class Tracking
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['read'])]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'trackings')]
    #[ORM\JoinColumn(nullable: false)]
    #[Groups(['read'])]
    private ?Pattern $pattern = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['read', 'write'])]
    private ?string $fangFaSheBei = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['read', 'write'])]
    private ?string $jianCePinCi = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['read', 'write'])]
    private ?string $xianDiYuanCheng = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['read', 'write'])]
    private ?string $jianCeZhuanTi = null;

    #[ORM\Column(length: 255)]
    #[Groups(['read', 'write'])]
    private ?string $type = null;

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

    public function getFangFaSheBei(): ?string
    {
        return $this->fangFaSheBei;
    }

    public function setFangFaSheBei(?string $fangFaSheBei): static
    {
        $this->fangFaSheBei = $fangFaSheBei;

        return $this;
    }

    public function getJianCePinCi(): ?string
    {
        return $this->jianCePinCi;
    }

    public function setJianCePinCi(?string $jianCePinCi): static
    {
        $this->jianCePinCi = $jianCePinCi;

        return $this;
    }

    public function getXianDiYuanCheng(): ?string
    {
        return $this->xianDiYuanCheng;
    }

    public function setXianDiYuanCheng(?string $xianDiYuanCheng): static
    {
        $this->xianDiYuanCheng = $xianDiYuanCheng;

        return $this;
    }

    public function getJianCeZhuanTi(): ?string
    {
        return $this->jianCeZhuanTi;
    }

    public function setJianCeZhuanTi(?string $jianCeZhuanTi): static
    {
        $this->jianCeZhuanTi = $jianCeZhuanTi;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): static
    {
        $this->type = $type;

        return $this;
    }
}
