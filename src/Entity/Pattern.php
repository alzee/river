<?php

namespace App\Entity;

use App\Repository\PatternRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\HttpFoundation\File\File;

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

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $gaoCheng = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $yanHuaJianHua = null;

    #[ORM\Column(nullable: true)]
    private ?float $quanYanLiang = null;

    #[ORM\Column(nullable: true)]
    private ?float $youJiZhiHanLiang = null;

    #[ORM\Column(nullable: true)]
    private ?float $EC = null;

    #[ORM\Column(nullable: true)]
    private ?float $PH = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $guanGaiFangShi = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $feiLiaoShiYong = null;

    #[ORM\Column(nullable: true)]
    private ?int $yuQiDanChan = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $chanNengTiSheng = null;

    #[ORM\Column(nullable: true)]
    private ?float $touRu = null;

    #[ORM\Column(nullable: true)]
    private ?float $chanChu = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $guanPaiXieTongCuoShi = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $xiaoZhangPeiFeiYaoDian = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $nongYiZaiPeiTeDian = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $genZongJianCeFangAn = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $zuZhiShiShiXieTong = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $image = null;
    
    #[Vich\UploadableField(mapping: 'patterns', fileNameProperty: 'image')]
    #[Assert\Image(maxSize: '1024k', mimeTypes: ['image/jpeg', 'image/png'], mimeTypesMessage: 'Only jpg and png')]
    private ?File $imageFile = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $updatedAt = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $zhongZiPinZhong = null;

    #[ORM\OneToMany(targetEntity: Soil::class, mappedBy: 'pattern')]
    private Collection $soils;

    #[ORM\OneToMany(targetEntity: Irrigation::class, mappedBy: 'pattern', orphanRemoval: true)]
    private Collection $irrigations;

    #[ORM\OneToMany(targetEntity: Fertilizer::class, mappedBy: 'pattern', orphanRemoval: true)]
    private Collection $fertilizers;

    #[ORM\OneToMany(targetEntity: Seed::class, mappedBy: 'pattern', orphanRemoval: true)]
    private Collection $seeds;
    
    public function __construct()
    {
        $this->createdAt = new \DateTimeImmutable();
        $this->soils = new ArrayCollection();
        $this->irrigations = new ArrayCollection();
        $this->fertilizers = new ArrayCollection();
        $this->seeds = new ArrayCollection();
    }
    
    public function __toString()
    {
        return $this->name;
    }

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

    public function getGaoCheng(): ?string
    {
        return $this->gaoCheng;
    }

    public function setGaoCheng(?string $gaoCheng): static
    {
        $this->gaoCheng = $gaoCheng;

        return $this;
    }

    public function getYanHuaJianHua(): ?string
    {
        return $this->yanHuaJianHua;
    }

    public function setYanHuaJianHua(?string $yanHuaJianHua): static
    {
        $this->yanHuaJianHua = $yanHuaJianHua;

        return $this;
    }

    public function getQuanYanLiang(): ?float
    {
        return $this->quanYanLiang;
    }

    public function setQuanYanLiang(float $quanYanLiang): static
    {
        $this->quanYanLiang = $quanYanLiang;

        return $this;
    }

    public function getYouJiZhiHanLiang(): ?float
    {
        return $this->youJiZhiHanLiang;
    }

    public function setYouJiZhiHanLiang(?float $youJiZhiHanLiang): static
    {
        $this->youJiZhiHanLiang = $youJiZhiHanLiang;

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

    public function getGuanGaiFangShi(): ?string
    {
        return $this->guanGaiFangShi;
    }

    public function setGuanGaiFangShi(?string $guanGaiFangShi): static
    {
        $this->guanGaiFangShi = $guanGaiFangShi;

        return $this;
    }

    public function getFeiLiaoShiYong(): ?string
    {
        return $this->feiLiaoShiYong;
    }

    public function setFeiLiaoShiYong(?string $feiLiaoShiYong): static
    {
        $this->feiLiaoShiYong = $feiLiaoShiYong;

        return $this;
    }

    public function getYuQiDanChan(): ?int
    {
        return $this->yuQiDanChan;
    }

    public function setYuQiDanChan(?int $yuQiDanChan): static
    {
        $this->yuQiDanChan = $yuQiDanChan;

        return $this;
    }

    public function getChanNengTiSheng(): ?string
    {
        return $this->chanNengTiSheng;
    }

    public function setChanNengTiSheng(?string $chanNengTiSheng): static
    {
        $this->chanNengTiSheng = $chanNengTiSheng;

        return $this;
    }

    public function getTouRu(): ?float
    {
        return $this->touRu;
    }

    public function setTouRu(?float $touRu): static
    {
        $this->touRu = $touRu;

        return $this;
    }

    public function getChanChu(): ?float
    {
        return $this->chanChu;
    }

    public function setChanChu(?float $chanChu): static
    {
        $this->chanChu = $chanChu;

        return $this;
    }

    public function getGuanPaiXieTongCuoShi(): ?string
    {
        return $this->guanPaiXieTongCuoShi;
    }

    public function setGuanPaiXieTongCuoShi(?string $guanPaiXieTongCuoShi): static
    {
        $this->guanPaiXieTongCuoShi = $guanPaiXieTongCuoShi;

        return $this;
    }

    public function getXiaoZhangPeiFeiYaoDian(): ?string
    {
        return $this->xiaoZhangPeiFeiYaoDian;
    }

    public function setXiaoZhangPeiFeiYaoDian(?string $xiaoZhangPeiFeiYaoDian): static
    {
        $this->xiaoZhangPeiFeiYaoDian = $xiaoZhangPeiFeiYaoDian;

        return $this;
    }

    public function getNongYiZaiPeiTeDian(): ?string
    {
        return $this->nongYiZaiPeiTeDian;
    }

    public function setNongYiZaiPeiTeDian(?string $nongYiZaiPeiTeDian): static
    {
        $this->nongYiZaiPeiTeDian = $nongYiZaiPeiTeDian;

        return $this;
    }

    public function getGenZongJianCeFangAn(): ?string
    {
        return $this->genZongJianCeFangAn;
    }

    public function setGenZongJianCeFangAn(?string $genZongJianCeFangAn): static
    {
        $this->genZongJianCeFangAn = $genZongJianCeFangAn;

        return $this;
    }

    public function getZuZhiShiShiXieTong(): ?string
    {
        return $this->zuZhiShiShiXieTong;
    }

    public function setZuZhiShiShiXieTong(string $zuZhiShiShiXieTong): static
    {
        $this->zuZhiShiShiXieTong = $zuZhiShiShiXieTong;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): static
    {
        $this->image = $image;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): static
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeImmutable
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeImmutable $updatedAt): static
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function setImageFile(?File $imageFile = null): void
    {
        $this->imageFile = $imageFile;

        if (null !== $imageFile) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt = new \DateTimeImmutable();
        }
    }

    public function getImageFile(): ?File
    {
        return $this->imageFile;
    }

    public function getZhongZiPinZhong(): ?string
    {
        return $this->zhongZiPinZhong;
    }

    public function setZhongZiPinZhong(?string $zhongZiPinZhong): static
    {
        $this->zhongZiPinZhong = $zhongZiPinZhong;

        return $this;
    }

    /**
     * @return Collection<int, Soil>
     */
    public function getSoils(): Collection
    {
        return $this->soils;
    }

    public function addSoil(Soil $soil): static
    {
        if (!$this->soils->contains($soil)) {
            $this->soils->add($soil);
            $soil->setPattern($this);
        }

        return $this;
    }

    public function removeSoil(Soil $soil): static
    {
        if ($this->soils->removeElement($soil)) {
            // set the owning side to null (unless already changed)
            if ($soil->getPattern() === $this) {
                $soil->setPattern(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Irrigation>
     */
    public function getIrrigations(): Collection
    {
        return $this->irrigations;
    }

    public function addIrrigation(Irrigation $irrigation): static
    {
        if (!$this->irrigations->contains($irrigation)) {
            $this->irrigations->add($irrigation);
            $irrigation->setPattern($this);
        }

        return $this;
    }

    public function removeIrrigation(Irrigation $irrigation): static
    {
        if ($this->irrigations->removeElement($irrigation)) {
            // set the owning side to null (unless already changed)
            if ($irrigation->getPattern() === $this) {
                $irrigation->setPattern(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Fertilizer>
     */
    public function getFertilizers(): Collection
    {
        return $this->fertilizers;
    }

    public function addFertilizer(Fertilizer $fertilizer): static
    {
        if (!$this->fertilizers->contains($fertilizer)) {
            $this->fertilizers->add($fertilizer);
            $fertilizer->setPattern($this);
        }

        return $this;
    }

    public function removeFertilizer(Fertilizer $fertilizer): static
    {
        if ($this->fertilizers->removeElement($fertilizer)) {
            // set the owning side to null (unless already changed)
            if ($fertilizer->getPattern() === $this) {
                $fertilizer->setPattern(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Seed>
     */
    public function getSeeds(): Collection
    {
        return $this->seeds;
    }

    public function addSeed(Seed $seed): static
    {
        if (!$this->seeds->contains($seed)) {
            $this->seeds->add($seed);
            $seed->setPattern($this);
        }

        return $this;
    }

    public function removeSeed(Seed $seed): static
    {
        if ($this->seeds->removeElement($seed)) {
            // set the owning side to null (unless already changed)
            if ($seed->getPattern() === $this) {
                $seed->setPattern(null);
            }
        }

        return $this;
    }
}
