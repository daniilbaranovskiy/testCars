<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\RcCarsBrandsRepository;
use DateTime;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: RcCarsBrandsRepository::class)]
#[ApiResource]
class RcCarsBrands
{

    /**
     * @var int
     */
    #[ORM\Column(name: "car_brand_id", type: "integer", nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private int $carBrandId;

    /**
     * @var string|null
     */
    #[ORM\Column(name: "icon", type: "string", length: 255, nullable: true)]
    private ?string $icon;

    /**
     * @var string|null
     */
    #[ORM\Column(name: "slug", type: "string", length: 255, nullable: true)]
    private ?string $slug;

    /**
     * @var string|null
     */
    #[ORM\Column(name: "youtube_video_link", type: "string", length: 255, nullable: true)]
    private ?string $youtubeVideoLink;

    /**
     * @var bool
     */
    #[ORM\Column(name: "status", type: "boolean", nullable: false)]
    private bool $status;

    /**
     * @var bool
     */
    #[ORM\Column(name: "is_deleted", type: "boolean", nullable: false)]
    private bool $isDeleted = false;

    /**
     * @var DateTime
     */
    #[ORM\Column(name: "created_at", type: "datetime", nullable: false, options: ["default" => "CURRENT_TIMESTAMP"])]
    private DateTime $createdAt;

    /**
     * @var DateTime|null
     */
    #[ORM\Column(name: "updated_at", type: "datetime", nullable: true)]
    private ?DateTime $updatedAt;

    /**
     * @var DateTime|null
     */
    #[ORM\Column(name: "deleted_at", type: "datetime", nullable: true)]
    private ?DateTime $deletedAt;

    /**
     * @return int
     */
    public function getCarBrandId(): int
    {
        return $this->carBrandId;
    }

    /**
     * @param int $carBrandId
     * @return RcCarsBrands
     */
    public function setCarBrandId(int $carBrandId): self
    {
        $this->carBrandId = $carBrandId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getIcon(): ?string
    {
        return $this->icon;
    }

    /**
     * @param string|null $icon
     * @return RcCarsBrands
     */
    public function setIcon(?string $icon): self
    {
        $this->icon = $icon;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getSlug(): ?string
    {
        return $this->slug;
    }

    /**
     * @param string|null $slug
     * @return RcCarsBrands
     */
    public function setSlug(?string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getYoutubeVideoLink(): ?string
    {
        return $this->youtubeVideoLink;
    }

    /**
     * @param string|null $youtubeVideoLink
     * @return RcCarsBrands
     */
    public function setYoutubeVideoLink(?string $youtubeVideoLink): self
    {
        $this->youtubeVideoLink = $youtubeVideoLink;

        return $this;
    }

    /**
     * @return bool
     */
    public function isStatus(): bool
    {
        return $this->status;
    }

    /**
     * @param bool $status
     * @return RcCarsBrands
     */
    public function setStatus(bool $status): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return bool
     */
    public function isDeleted(): bool
    {
        return $this->isDeleted;
    }

    /**
     * @param bool $isDeleted
     * @return RcCarsBrands
     */
    public function setIsDeleted(bool $isDeleted): self
    {
        $this->isDeleted = $isDeleted;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }

    /**
     * @param DateTime $createdAt
     * @return RcCarsBrands
     */
    public function setCreatedAt(DateTime $createdAt): self
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
     * @return RcCarsBrands
     */
    public function setUpdatedAt(?DateTime $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getDeletedAt(): ?DateTime
    {
        return $this->deletedAt;
    }

    /**
     * @param DateTime|null $deletedAt
     * @return RcCarsBrands
     */
    public function setDeletedAt(?DateTime $deletedAt): self
    {
        $this->deletedAt = $deletedAt;

        return $this;
    }

}
