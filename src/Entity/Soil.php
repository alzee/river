<?php

namespace App\Entity;

use App\Repository\SoilRepository;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Metadata\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;
use ApiPlatform\Metadata\ApiFilter;
use ApiPlatform\Doctrine\Orm\Filter\SearchFilter;
use ApiPlatform\Doctrine\Orm\Filter\OrderFilter;

#[ORM\Entity(repositoryClass: SoilRepository::class)]
#[ApiResource(
    normalizationContext: ['groups' => ['other_read']],
    denormalizationContext: ['groups' => ['other_write']],
)]
#[ApiFilter(SearchFilter::class, properties: ['pattern' => 'exact'])]
class Soil
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['other_read'])]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'soils')]
    #[Groups(['other_read'])]
    private ?Pattern $pattern = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['other_read', 'other_write'])]
    private ?string $nianFenSha = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['other_read', 'other_write'])]
    private ?string $tuRangZhiDi = null;

    #[ORM\Column(nullable: true)]
    #[Groups(['other_read', 'other_write'])]
    private ?float $ganRongLiang = null;

    #[ORM\Column(nullable: true)]
    #[Groups(['other_read', 'other_write'])]
    private ?float $kongXiDu = null;

    #[ORM\Column(nullable: true)]
    #[Groups(['other_read', 'other_write'])]
    private ?float $quanDan = null;

    #[ORM\Column(nullable: true)]
    #[Groups(['other_read', 'other_write'])]
    private ?float $quanLin = null;

    #[ORM\Column(nullable: true)]
    #[Groups(['other_read', 'other_write'])]
    private ?float $quanJia = null;

    #[ORM\Column(nullable: true)]
    #[Groups(['other_read', 'other_write'])]
    private ?float $youJiZhi = null;

    #[ORM\Column(nullable: true)]
    #[Groups(['other_read', 'other_write'])]
    private ?float $xiaoTaiDan = null;

    #[ORM\Column(nullable: true)]
    #[Groups(['other_read', 'other_write'])]
    private ?float $anTaiDan = null;

    #[ORM\Column(nullable: true)]
    #[Groups(['other_read', 'other_write'])]
    private ?float $youXiaoLin = null;

    #[ORM\Column(nullable: true)]
    #[Groups(['other_read', 'other_write'])]
    private ?float $youXiaoJia = null;

    #[ORM\Column(nullable: true)]
    #[Groups(['other_read', 'other_write'])]
    private ?float $jianJieDan = null;

    #[ORM\Column(nullable: true)]
    #[Groups(['other_read', 'other_write'])]
    private ?float $quanYanLiang = null;

    #[ORM\Column(nullable: true)]
    #[Groups(['other_read', 'other_write'])]
    private ?float $EC = null;

    #[ORM\Column(nullable: true)]
    #[Groups(['other_read', 'other_write'])]
    private ?float $PH = null;

    #[ORM\Column(nullable: true)]
    #[Groups(['other_read', 'other_write'])]
    private ?float $baoHeHanShuiLv = null;

    #[ORM\Column(nullable: true)]
    #[Groups(['other_read', 'other_write'])]
    private ?float $baoHeDaoShuiLv = null;

    #[ORM\Column(nullable: true)]
    #[Groups(['other_read', 'other_write'])]
    private ?float $tianJianChiShuiLiang = null;

    #[ORM\Column(length: 255)]
    #[Groups(['other_read', 'other_write'])]
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

    public function getNianFenSha(): ?string
    {
        return $this->nianFenSha;
    }

    public function setNianFenSha(?string $nianFenSha): static
    {
        $this->nianFenSha = $nianFenSha;

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

    public function getGanRongLiang(): ?float
    {
        return $this->ganRongLiang;
    }

    public function setGanRongLiang(?float $ganRongLiang): static
    {
        $this->ganRongLiang = $ganRongLiang;

        return $this;
    }

    public function getKongXiDu(): ?float
    {
        return $this->kongXiDu;
    }

    public function setKongXiDu(?float $kongXiDu): static
    {
        $this->kongXiDu = $kongXiDu;

        return $this;
    }

    public function getQuanDan(): ?float
    {
        return $this->quanDan;
    }

    public function setQuanDan(?float $quanDan): static
    {
        $this->quanDan = $quanDan;

        return $this;
    }

    public function getQuanLin(): ?float
    {
        return $this->quanLin;
    }

    public function setQuanLin(?float $quanLin): static
    {
        $this->quanLin = $quanLin;

        return $this;
    }

    public function getQuanJia(): ?float
    {
        return $this->quanJia;
    }

    public function setQuanJia(?float $quanJia): static
    {
        $this->quanJia = $quanJia;

        return $this;
    }

    public function getYouJiZhi(): ?float
    {
        return $this->youJiZhi;
    }

    public function setYouJiZhi(?float $youJiZhi): static
    {
        $this->youJiZhi = $youJiZhi;

        return $this;
    }

    public function getXiaoTaiDan(): ?float
    {
        return $this->xiaoTaiDan;
    }

    public function setXiaoTaiDan(?float $xiaoTaiDan): static
    {
        $this->xiaoTaiDan = $xiaoTaiDan;

        return $this;
    }

    public function getAnTaiDan(): ?float
    {
        return $this->anTaiDan;
    }

    public function setAnTaiDan(?float $anTaiDan): static
    {
        $this->anTaiDan = $anTaiDan;

        return $this;
    }

    public function getYouXiaoLin(): ?float
    {
        return $this->youXiaoLin;
    }

    public function setYouXiaoLin(?float $youXiaoLin): static
    {
        $this->youXiaoLin = $youXiaoLin;

        return $this;
    }

    public function getYouXiaoJia(): ?float
    {
        return $this->youXiaoJia;
    }

    public function setYouXiaoJia(?float $youXiaoJia): static
    {
        $this->youXiaoJia = $youXiaoJia;

        return $this;
    }

    public function getJianJieDan(): ?float
    {
        return $this->jianJieDan;
    }

    public function setJianJieDan(?float $jianJieDan): static
    {
        $this->jianJieDan = $jianJieDan;

        return $this;
    }

    public function getQuanYanLiang(): ?float
    {
        return $this->quanYanLiang;
    }

    public function setQuanYanLiang(?float $quanYanLiang): static
    {
        $this->quanYanLiang = $quanYanLiang;

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

    public function getBaoHeHanShuiLv(): ?float
    {
        return $this->baoHeHanShuiLv;
    }

    public function setBaoHeHanShuiLv(?float $baoHeHanShuiLv): static
    {
        $this->baoHeHanShuiLv = $baoHeHanShuiLv;

        return $this;
    }

    public function getBaoHeDaoShuiLv(): ?float
    {
        return $this->baoHeDaoShuiLv;
    }

    public function setBaoHeDaoShuiLv(?float $baoHeDaoShuiLv): static
    {
        $this->baoHeDaoShuiLv = $baoHeDaoShuiLv;

        return $this;
    }

    public function getTianJianChiShuiLiang(): ?float
    {
        return $this->tianJianChiShuiLiang;
    }

    public function setTianJianChiShuiLiang(?float $tianJianChiShuiLiang): static
    {
        $this->tianJianChiShuiLiang = $tianJianChiShuiLiang;

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
