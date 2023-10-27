<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\RcCarsModelsTranslationsRepository;
use DateTime;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RcCarsModelsTranslationsRepository::class)]
#[ApiResource]
class RcCarsModelsTranslations
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
    #[ORM\Column(name: "car_model_id", type: "integer", nullable: false)]
    private int $carModelId;

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
     * @return RcCarsModelsTranslations
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return int
     */
    public function getCarModelId(): int
    {
        return $this->carModelId;
    }

    /**
     * @param int $carModelId
     * @return RcCarsModelsTranslations
     */
    public function setCarModelId(int $carModelId): self
    {
        $this->carModelId = $carModelId;

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
     * @return RcCarsModelsTranslations
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
     * @return RcCarsModelsTranslations
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
     * @return RcCarsModelsTranslations
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
     * @return RcCarsModelsTranslations
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
     * @return RcCarsModelsTranslations
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
     * @return RcCarsModelsTranslations
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
     * @return RcCarsModelsTranslations
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
     * @return RcCarsModelsTranslations
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
     * @return RcCarsModelsTranslations
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
     * @return RcCarsModelsTranslations
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
     * @return RcCarsModelsTranslations
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
     * @return RcCarsModelsTranslations
     */
    public function setUpdatedAt(?DateTime $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

}
