<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\RcCarsBrandsTranslationsRepository;
use DateTime;
use Doctrine\ORM\Mapping as ORM;

/**
 * RcCarsBrandsTranslations
 */
#[ORM\Entity(repositoryClass: RcCarsBrandsTranslationsRepository::class)]
#[ApiResource]
class RcCarsBrandsTranslations
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
    #[ORM\Column(name: "car_brand_id", type: "integer", nullable: false)]
    private int $carBrandId;

    /**
     * @var string
     */
    #[ORM\Column(name: "lang", type: "string", length: 255, nullable: false, options: ["default" => "en"])]
    private string $lang = 'en';

    /**
     * @var string|null
     */
    #[ORM\Column(name: "name", type: "string", length: 255, nullable: true)]
    private ?string $name;

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
    #[ORM\Column(name: "header_description", type: "text", length: 65535, nullable: true)]
    private ?string $headerDescription;

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
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return RcCarsBrandsTranslations
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return int
     */
    public function getCarBrandId(): int
    {
        return $this->carBrandId;
    }

    /**
     * @param int $carBrandId
     * @return RcCarsBrandsTranslations
     */
    public function setCarBrandId(int $carBrandId): self
    {
        $this->carBrandId = $carBrandId;

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
     * @return RcCarsBrandsTranslations
     */
    public function setLang(string $lang): self
    {
        $this->lang = $lang;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     * @return RcCarsBrandsTranslations
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

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
     * @return RcCarsBrandsTranslations
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
     * @return RcCarsBrandsTranslations
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
     * @return RcCarsBrandsTranslations
     */
    public function setPageMetaDescription(?string $pageMetaDescription): self
    {
        $this->pageMetaDescription = $pageMetaDescription;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getHeaderDescription(): ?string
    {
        return $this->headerDescription;
    }

    /**
     * @param string|null $headerDescription
     * @return RcCarsBrandsTranslations
     */
    public function setHeaderDescription(?string $headerDescription): self
    {
        $this->headerDescription = $headerDescription;

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
     * @return RcCarsBrandsTranslations
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
     * @return RcCarsBrandsTranslations
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
     * @return RcCarsBrandsTranslations
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
     * @return RcCarsBrandsTranslations
     */
    public function setFooterSubdescription(?string $footerSubdescription): self
    {
        $this->footerSubdescription = $footerSubdescription;

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
     * @return RcCarsBrandsTranslations
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
     * @return RcCarsBrandsTranslations
     */
    public function setUpdatedAt(?DateTime $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

}
