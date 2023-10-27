<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\RcCarsModelsRepository;
use DateTime;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RcCarsModelsRepository::class)]
#[ApiResource]
class RcCarsModels
{

    /**
     * @var int
     */
    #[ORM\Column(name: "car_model_id", type: "integer", nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private int $carModelId;

    /**
     * @var int|null
     */
    #[ORM\Column(name: "car_brand_id", type: "integer", nullable: true)]
    private ?int $carBrandId;

    /**
     * @var int
     */
    #[ORM\Column(name: "car_body_id", type: "integer", nullable: false)]
    private int $carBodyId;

    /**
     * @var string|null
     */
    #[ORM\Column(name: "slug", type: "string", length: 255, nullable: true)]
    private ?string $slug;

    /**
     * @var string
     */
    #[ORM\Column(name: "type", type: "string", length: 255, nullable: false, options: ["default" => "luxury"])]
    private string $type = 'luxury';

    /**
     * @var string|null
     */
    #[ORM\Column(name: "attribute_0_100", type: "string", length: 255, nullable: true)]
    private ?string $attribute0100;

    /**
     * @var string|null
     */
    #[ORM\Column(name: "attribute_max_speed", type: "string", length: 255, nullable: true)]
    private ?string $attributeMaxSpeed;

    /**
     * @var string|null
     */
    #[ORM\Column(name: "attribute_number_of_seats", type: "string", length: 255, nullable: true)]
    private ?string $attributeNumberOfSeats;

    /**
     * @var string|null
     */
    #[ORM\Column(name: "attribute_horsepower", type: "string", length: 255, nullable: true)]
    private ?string $attributeHorsepower;

    /**
     * @var string|null
     */
    #[ORM\Column(name: "attribute_engine", type: "string", length: 255, nullable: true)]
    private ?string $attributeEngine;

    /**
     * @var string|null
     */
    #[ORM\Column(name: "attribute_transmission", type: "string", length: 255, nullable: true)]
    private ?string $attributeTransmission;

    /**
     * @var string|null
     */
    #[ORM\Column(name: "attribute_interior_color", type: "string", length: 255, nullable: true)]
    private ?string $attributeInteriorColor;

    /**
     * @var int|null
     */
    #[ORM\Column(name: "attribute_doors", type: "integer", nullable: true, options: ["default" => 4])]
    private ?int $attributeDoors = 4;

    /**
     * @var string|null
     */
    #[ORM\Column(name: "features", type: "text", length: 65535, nullable: true)]
    private ?string $features;

    /**
     * @var string|null
     */
    #[ORM\Column(name: "youtube_video_link", type: "string", length: 255, nullable: true)]
    private ?string $youtubeVideoLink;

    /**
     * @var bool
     */
    #[ORM\Column(name: "status", type: "boolean", nullable: false, options: ["default" => true])]
    private bool $status = true;

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
     * @var int
     */
    #[ORM\Column(name: "attribute_engine_type", type: "integer", nullable: false, options: ["default" => 1])]
    private int $attributeEngineType = 1;

    /**
     * @return int
     */
    public function getCarModelId(): int
    {
        return $this->carModelId;
    }

    /**
     * @param int $carModelId
     * @return RcCarsModels
     */
    public function setCarModelId(int $carModelId): self
    {
        $this->carModelId = $carModelId;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getCarBrandId(): ?int
    {
        return $this->carBrandId;
    }

    /**
     * @param int|null $carBrandId
     * @return RcCarsModels
     */
    public function setCarBrandId(?int $carBrandId): self
    {
        $this->carBrandId = $carBrandId;

        return $this;
    }

    /**
     * @return int
     */
    public function getCarBodyId(): int
    {
        return $this->carBodyId;
    }

    /**
     * @param int $carBodyId
     * @return RcCarsModels
     */
    public function setCarBodyId(int $carBodyId): self
    {
        $this->carBodyId = $carBodyId;

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
     * @return RcCarsModels
     */
    public function setSlug(?string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return RcCarsModels
     */
    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getAttribute0100(): ?string
    {
        return $this->attribute0100;
    }

    /**
     * @param string|null $attribute0100
     * @return RcCarsModels
     */
    public function setAttribute0100(?string $attribute0100): self
    {
        $this->attribute0100 = $attribute0100;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getAttributeMaxSpeed(): ?string
    {
        return $this->attributeMaxSpeed;
    }

    /**
     * @param string|null $attributeMaxSpeed
     * @return RcCarsModels
     */
    public function setAttributeMaxSpeed(?string $attributeMaxSpeed): self
    {
        $this->attributeMaxSpeed = $attributeMaxSpeed;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getAttributeNumberOfSeats(): ?string
    {
        return $this->attributeNumberOfSeats;
    }

    /**
     * @param string|null $attributeNumberOfSeats
     * @return RcCarsModels
     */
    public function setAttributeNumberOfSeats(?string $attributeNumberOfSeats): self
    {
        $this->attributeNumberOfSeats = $attributeNumberOfSeats;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getAttributeHorsepower(): ?string
    {
        return $this->attributeHorsepower;
    }

    /**
     * @param string|null $attributeHorsepower
     * @return RcCarsModels
     */
    public function setAttributeHorsepower(?string $attributeHorsepower): self
    {
        $this->attributeHorsepower = $attributeHorsepower;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getAttributeEngine(): ?string
    {
        return $this->attributeEngine;
    }

    /**
     * @param string|null $attributeEngine
     * @return RcCarsModels
     */
    public function setAttributeEngine(?string $attributeEngine): self
    {
        $this->attributeEngine = $attributeEngine;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getAttributeTransmission(): ?string
    {
        return $this->attributeTransmission;
    }

    /**
     * @param string|null $attributeTransmission
     * @return RcCarsModels
     */
    public function setAttributeTransmission(?string $attributeTransmission): self
    {
        $this->attributeTransmission = $attributeTransmission;

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
     * @return RcCarsModels
     */
    public function setAttributeInteriorColor(?string $attributeInteriorColor): self
    {
        $this->attributeInteriorColor = $attributeInteriorColor;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getAttributeDoors(): ?int
    {
        return $this->attributeDoors;
    }

    /**
     * @param int|null $attributeDoors
     * @return RcCarsModels
     */
    public function setAttributeDoors(?int $attributeDoors): self
    {
        $this->attributeDoors = $attributeDoors;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getFeatures(): ?string
    {
        return $this->features;
    }

    /**
     * @param string|null $features
     * @return RcCarsModels
     */
    public function setFeatures(?string $features): self
    {
        $this->features = $features;

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
     * @return RcCarsModels
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
     * @return RcCarsModels
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
     * @return RcCarsModels
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
     * @return RcCarsModels
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
     * @return RcCarsModels
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
     * @return RcCarsModels
     */
    public function setDeletedAt(?DateTime $deletedAt): self
    {
        $this->deletedAt = $deletedAt;

        return $this;
    }

    /**
     * @return int
     */
    public function getAttributeEngineType(): int
    {
        return $this->attributeEngineType;
    }

    /**
     * @param int $attributeEngineType
     * @return RcCarsModels
     */
    public function setAttributeEngineType(int $attributeEngineType): self
    {
        $this->attributeEngineType = $attributeEngineType;

        return $this;
    }

}
