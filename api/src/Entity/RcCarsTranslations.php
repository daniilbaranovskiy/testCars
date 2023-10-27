<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\RcCarsTranslationsRepository;
use DateTime;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RcCarsTranslationsRepository::class)]
#[ApiResource]
class RcCarsTranslations
{

    /**
     * @var int
     */
    #[ORM\Column(name: "id", type: "integer", nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private int $id;

    /**
     * @var int
     */
    #[ORM\Column(name: "car_id", type: "integer", nullable: false)]
    private int $carId;

    /**
     * @var string
     */
    #[ORM\Column(name: "lang", type: "string", length: 255, nullable: false, options: ["default" => "en"])]
    private string $lang = 'en';

    /**
     * @var string|null
     */
    #[ORM\Column(name: "title", type: "string", length: 255, nullable: true)]
    private ?string $title;

    /**
     * @var string|null
     */
    #[ORM\Column(name: "page_title", type: "string", length: 255, nullable: true)]
    private ?string $pageTitle;

    /**
     * @var string|null
     */
    #[ORM\Column(name: "page_meta_keywords", type: "string", length: 255, nullable: true)]
    private ?string $pageMetaKeywords;

    /**
     * @var string|null
     */
    #[ORM\Column(name: "page_meta_description", type: "string", length: 255, nullable: true)]
    private ?string $pageMetaDescription;

    /**
     * @var string|null
     */
    #[ORM\Column(name: "description", type: "text", length: 65535, nullable: true)]
    private ?string $description;

    /**
     * @var string|null
     */
    #[ORM\Column(name: "footer_title", type: "string", length: 255, nullable: true)]
    private ?string $footerTitle;

    /**
     * @var string|null
     */
    #[ORM\Column(name: "footer_description", type: "text", length: 65535, nullable: true)]
    private ?string $footerDescription;

    /**
     * @var string|null
     */
    #[ORM\Column(name: "footer_subtitle", type: "string", length: 255, nullable: true)]
    private ?string $footerSubtitle;

    /**
     * @var string|null
     */
    #[ORM\Column(name: "footer_subdescription", type: "text", length: 65535, nullable: true)]
    private ?string $footerSubdescription;

    /**
     * @var string|null
     */
    #[ORM\Column(name: "attribute_color", type: "string", length: 255, nullable: true)]
    private ?string $attributeColor;

    /**
     * @var string|null
     */
    #[ORM\Column(name: "attribute_interior_color", type: "string", length: 255, nullable: true)]
    private ?string $attributeInteriorColor;

    /**
     * @var DateTime|null
     */
    #[ORM\Column(name: "created_at", type: "datetime", nullable: true)]
    private ?DateTime $createdAt;

    /**
     * @var DateTime|null
     */
    #[ORM\Column(name: "updated_at", type: "datetime", nullable: true)]
    private ?DateTime $updatedAt;

    /**
     * @var bool
     */
    #[ORM\Column(name: "was_migrated", type: "boolean", nullable: false)]
    private bool $wasMigrated;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return RcCarsTranslations
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return int
     */
    public function getCarId(): int
    {
        return $this->carId;
    }

    /**
     * @param int $carId
     * @return RcCarsTranslations
     */
    public function setCarId(int $carId): self
    {
        $this->carId = $carId;

        return $this;
    }

    /**
     * @return string
     */
    public function getLang(): string
    {
        return $this->lang;
    }

    /**
     * @param string $lang
     * @return RcCarsTranslations
     */
    public function setLang(string $lang): self
    {
        $this->lang = $lang;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string|null $title
     * @return RcCarsTranslations
     */
    public function setTitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPageTitle(): ?string
    {
        return $this->pageTitle;
    }

    /**
     * @param string|null $pageTitle
     * @return RcCarsTranslations
     */
    public function setPageTitle(?string $pageTitle): self
    {
        $this->pageTitle = $pageTitle;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPageMetaKeywords(): ?string
    {
        return $this->pageMetaKeywords;
    }

    /**
     * @param string|null $pageMetaKeywords
     * @return RcCarsTranslations
     */
    public function setPageMetaKeywords(?string $pageMetaKeywords): self
    {
        $this->pageMetaKeywords = $pageMetaKeywords;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPageMetaDescription(): ?string
    {
        return $this->pageMetaDescription;
    }

    /**
     * @param string|null $pageMetaDescription
     * @return RcCarsTranslations
     */
    public function setPageMetaDescription(?string $pageMetaDescription): self
    {
        $this->pageMetaDescription = $pageMetaDescription;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string|null $description
     * @return RcCarsTranslations
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getFooterTitle(): ?string
    {
        return $this->footerTitle;
    }

    /**
     * @param string|null $footerTitle
     * @return RcCarsTranslations
     */
    public function setFooterTitle(?string $footerTitle): self
    {
        $this->footerTitle = $footerTitle;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getFooterDescription(): ?string
    {
        return $this->footerDescription;
    }

    /**
     * @param string|null $footerDescription
     * @return RcCarsTranslations
     */
    public function setFooterDescription(?string $footerDescription): self
    {
        $this->footerDescription = $footerDescription;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getFooterSubtitle(): ?string
    {
        return $this->footerSubtitle;
    }

    /**
     * @param string|null $footerSubtitle
     * @return RcCarsTranslations
     */
    public function setFooterSubtitle(?string $footerSubtitle): self
    {
        $this->footerSubtitle = $footerSubtitle;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getFooterSubdescription(): ?string
    {
        return $this->footerSubdescription;
    }

    /**
     * @param string|null $footerSubdescription
     * @return RcCarsTranslations
     */
    public function setFooterSubdescription(?string $footerSubdescription): self
    {
        $this->footerSubdescription = $footerSubdescription;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getAttributeColor(): ?string
    {
        return $this->attributeColor;
    }

    /**
     * @param string|null $attributeColor
     * @return RcCarsTranslations
     */
    public function setAttributeColor(?string $attributeColor): self
    {
        $this->attributeColor = $attributeColor;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getAttributeInteriorColor(): ?string
    {
        return $this->attributeInteriorColor;
    }

    /**
     * @param string|null $attributeInteriorColor
     * @return RcCarsTranslations
     */
    public function setAttributeInteriorColor(?string $attributeInteriorColor): self
    {
        $this->attributeInteriorColor = $attributeInteriorColor;

        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getCreatedAt(): ?DateTime
    {
        return $this->createdAt;
    }

    /**
     * @param DateTime|null $createdAt
     * @return RcCarsTranslations
     */
    public function setCreatedAt(?DateTime $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getUpdatedAt(): ?DateTime
    {
        return $this->updatedAt;
    }

    /**
     * @param DateTime|null $updatedAt
     * @return RcCarsTranslations
     */
    public function setUpdatedAt(?DateTime $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * @return bool
     */
    public function isWasMigrated(): bool
    {
        return $this->wasMigrated;
    }

    /**
     * @param bool $wasMigrated
     * @return RcCarsTranslations
     */
    public function setWasMigrated(bool $wasMigrated): self
    {
        $this->wasMigrated = $wasMigrated;

        return $this;
    }

}
