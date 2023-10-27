<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\RcCarsRepository;
use DateTime;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RcCarsRepository::class)]
#[ApiResource]
class RcCars
{

    /**
     * @var int|null
     */
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    #[ORM\Column(name: "car_id", type: "integer", nullable: false)]
    private ?int $carId;

    /**
     * @var int|null
     */
    #[ORM\Column(name: "car_model_id", type: "integer", nullable: true)]
    private ?int $carModelId;

    /**
     * @var int|null
     */
    #[ORM\Column(name: "car_serie_id", type: "integer", nullable: true)]
    private ?int $carSerieId;

    /**
     * @var int|null
     */
    #[ORM\Column(name: "car_body_id", type: "integer", nullable: true)]
    private ?int $carBodyId;

    /**
     * @var int|null
     */
    #[ORM\Column(name: "company_id", type: "integer", nullable: true)]
    private ?int $companyId;

    /**
     * @var int|null
     */
    #[ORM\Column(name: "city_id", type: "integer", nullable: false, options: ["default" => 1])]
    private ?int $cityId = 1;

    /**
     * @var int|null
     */
    #[ORM\Column(name: "sales_tax_id", type: "integer", nullable: true, options: ["unsigned" => true])]
    private ?int $salesTaxId;

    /**
     * @var int|null
     */
    #[ORM\Column(name: "holiday_calculator_id", type: "integer", nullable: true, options: ["unsigned" => true])]
    private ?int $holidayCalculatorId;

    /**
     * @var int|null
     */
    #[ORM\Column(name: "range_calculator_id", type: "integer", nullable: true, options: ["unsigned" => true])]
    private ?int $rangeCalculatorId;

    /**
     * @var string|null
     */
    #[ORM\Column(name: "registration_number", type: "string", length: 255, nullable: true)]
    private ?string $registrationNumber;

    /**
     * @var string|null
     */
    #[ORM\Column(name: "photo", type: "string", length: 255, nullable: true)]
    private ?string $photo;

    /**
     * @var string|null
     */
    #[ORM\Column(name: "price_type", type: "string", length: 255, nullable: false, options: ["default" => "luxury"])]
    private ?string $priceType = 'luxury';

    /**
     * @var float|null
     */
    #[ORM\Column(name: "price_1", type: "float", precision: 10, scale: 0, nullable: true)]
    private ?float $price1;

    /**
     * @var float|null
     */
    #[ORM\Column(name: "price_2", type: "float", precision: 10, scale: 0, nullable: false)]
    private ?float $price2;

    /**
     * @var float|null
     */
    #[ORM\Column(name: "price_3_6", type: "float", precision: 10, scale: 0, nullable: false)]
    private ?float $price36;

    /**
     * @var float|null
     */
    #[ORM\Column(name: "price_7_13", type: "float", precision: 10, scale: 0, nullable: true)]
    private ?float $price713;

    /**
     * @var float|null
     */
    #[ORM\Column(name: "price_14_20", type: "float", precision: 10, scale: 0, nullable: false)]
    private ?float $price1420;

    /**
     * @var float|null
     */
    #[ORM\Column(name: "price_21_29", type: "float", precision: 10, scale: 0, nullable: false)]
    private ?float $price2129;

    /**
     * @var float|null
     */
    #[ORM\Column(name: "price_30_more", type: "float", precision: 10, scale: 0, nullable: true)]
    private ?float $price30More;

    /**
     * @var string|null
     */
    #[ORM\Column(name: "currency", type: "string", length: 3, nullable: true)]
    private ?string $currency;

    /**
     * @var float|null
     */
    #[ORM\Column(name: "price_partner_1", type: "float", precision: 10, scale: 0, nullable: false)]
    private ?float $pricePartner1;

    /**
     * @var float|null
     */
    #[ORM\Column(name: "price_partner_2", type: "float", precision: 10, scale: 0, nullable: false)]
    private ?float $pricePartner2;

    /**
     * @var float|null
     */
    #[ORM\Column(name: "price_partner_3_6", type: "float", precision: 10, scale: 0, nullable: false)]
    private ?float $pricePartner36;

    /**
     * @var float|null
     */
    #[ORM\Column(name: "price_partner_7_13", type: "float", precision: 10, scale: 0, nullable: false)]
    private ?float $pricePartner713;

    /**
     * @var float|null
     */
    #[ORM\Column(name: "price_partner_14_20", type: "float", precision: 10, scale: 0, nullable: false)]
    private ?float $pricePartner1420;

    /**
     * @var float|null
     */
    #[ORM\Column(name: "price_partner_21_29", type: "float", precision: 10, scale: 0, nullable: false)]
    private ?float $pricePartner2129;

    /**
     * @var float|null
     */
    #[ORM\Column(name: "price_partner_30_more", type: "float", precision: 10, scale: 0, nullable: false)]
    private ?float $pricePartner30More;

    /**
     * @var int|null
     */
    #[ORM\Column(name: "deposit", type: "integer", nullable: true)]
    private ?int $deposit;

    /**
     * @var float|null
     */
    #[ORM\Column(name: "overlimit_charge", type: "float", precision: 10, scale: 0, nullable: true)]
    private ?float $overlimitCharge;

    /**
     * @var int|null
     */
    #[ORM\Column(name: "salik", type: "integer", nullable: true, options: ["default" => 5])]
    private ?int $salik;

    /**
     * @var int|null
     */
    #[ORM\Column(name: "age_restriction", type: "integer", nullable: true, options: ["default" => 24])]
    private ?int $ageRestriction;

    /**
     * @var int|null
     */
    #[ORM\Column(name: "driving_licence_restriction", type: "integer", nullable: true)]
    private ?int $drivingLicenceRestriction;

    /**
     * @var bool|null
     */
    #[ORM\Column(name: "free_delivery_dubai", type: "boolean", nullable: false, options: ["default" => true])]
    private ?bool $freeDeliveryDubai;

    /**
     * @var string|null
     */
    #[ORM\Column(name: "km_included_per_day", type: "string", length: 255, nullable: true)]
    private ?string $kmIncludedPerDay;

    /**
     * @var string|null
     */
    #[ORM\Column(name: "km_included_per_month", type: "string", length: 255, nullable: true)]
    private ?string $kmIncludedPerMonth;

    /**
     * @var string|null
     */
    #[ORM\Column(name: "youtube_video_link", type: "string", length: 255, nullable: true)]
    private ?string $youtubeVideoLink;

    /**
     * @var int|null
     */
    #[ORM\Column(name: "min_day_reservation", type: "integer", nullable: true)]
    private ?int $minDayReservation;

    /**
     * @var string|null
     */
    #[ORM\Column(name: "attribute_year", type: "string", length: 255, nullable: true)]
    private ?string $attributeYear;

    /**
     * @var string|null
     */
    #[ORM\Column(name: "attribute_tinted", type: "string", length: 255, nullable: true)]
    private ?string $attributeTinted;

    /**
     * @var string|null
     */
    #[ORM\Column(name: "attribute_max_speed", type: "string", length: 255, nullable: true)]
    private ?string $attributeMaxSpeed;

    /**
     * @var string|null
     */
    #[ORM\Column(name: "attribute_0_100", type: "string", length: 255, nullable: true)]
    private ?string $attribute0100;

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
    #[ORM\Column(name: "attribute_mileage", type: "string", length: 255, nullable: true, options: ["default" => "50,000"])]
    private ?string $attributeMileage;

    /**
     * @var int|null
     */
    #[ORM\Column(name: "attribute_sm_bag", type: "integer", nullable: false, options: ["default" => 1])]
    private ?int $attributeSmBag = 1;

    /**
     * @var int|null
     */
    #[ORM\Column(name: "attribute_lg_bag", type: "integer", nullable: false, options: ["default" => 1])]
    private ?int $attributeLgBag = 1;

    /**
     * @var int|null
     */
    #[ORM\Column(name: "attribute_doors", type: "integer", nullable: true)]
    private ?int $attributeDoors;

    /**
     * @var string|null
     */
    #[ORM\Column(name: "features", type: "text", length: 65535, nullable: true)]
    private ?string $features;

    /**
     * @var int|null
     */
    #[ORM\Column(name: "exterior_condition", type: "integer", nullable: false, options: ["default" => 8])]
    private ?int $exteriorCondition = 8;

    /**
     * @var int|null
     */
    #[ORM\Column(name: "interior_condition", type: "integer", nullable: false, options: ["default" => 8])]
    private ?int $interiorCondition = 8;

    /**
     * @var int|null
     */
    #[ORM\Column(name: "engine_suspention_condition", type: "integer", nullable: false, options: ["default" => 8])]
    private ?int $engineSuspentionCondition = 8;

    /**
     * @var string|null
     */
    #[ORM\Column(name: "insurance", type: "string", length: 255, nullable: false, options: ["default" => "no"])]
    private ?string $insurance = 'no';

    /**
     * @var int|null
     */
    #[ORM\Column(name: "insurance_amount", type: "integer", nullable: false)]
    private ?int $insuranceAmount = 0;

    /**
     * @var string|null
     */
    #[ORM\Column(name: "insurance_default", type: "text", length: 65535, nullable: true)]
    private ?string $insuranceDefault;

    /**
     * @var string|null
     */
    #[ORM\Column(name: "insurance_cdw", type: "text", length: 65535, nullable: true)]
    private ?string $insuranceCdw;

    /**
     * @var string|null
     */
    #[ORM\Column(name: "insurance_default_desc", type: "text", length: 65535, nullable: true)]
    private ?string $insuranceDefaultDesc;

    /**
     * @var string|null
     */
    #[ORM\Column(name: "insurance_cdw_desc", type: "text", length: 65535, nullable: true)]
    private ?string $insuranceCdwDesc;

    /**
     * @var string|null
     */
    #[ORM\Column(name: "aiport_charge", type: "string", length: 255, nullable: true, options: ["default" => "charge"])]
    private ?string $aiportCharge = 'charge';

    /**
     * @var int|null
     */
    #[ORM\Column(name: "complete", type: "integer", nullable: false)]
    private ?int $complete = 0;

    /**
     * @var bool|null
     */
    #[ORM\Column(name: "status", type: "boolean", nullable: false, options: ["default" => true])]
    private ?bool $status = true;

    /**
     * @var bool|null
     */
    #[ORM\Column(name: "is_deleted", type: "boolean", nullable: false)]
    private ?bool $isDeleted = false;

    /**
     * @var string|null
     */
    #[ORM\Column(name: "message_color", type: "string", length: 255, nullable: true)]
    private ?string $messageColor;

    /**
     * @var string|null
     */
    #[ORM\Column(name: "message_title", type: "string", length: 255, nullable: true)]
    private ?string $messageTitle;

    /**
     * @var string|null
     */
    #[ORM\Column(name: "message_text", type: "string", length: 255, nullable: true)]
    private ?string $messageText;

    /**
     * @var DateTime
     */
    #[ORM\Column(name: "created_at", type: "datetime", nullable: false, options: ["default" => "CURRENT_TIMESTAMP"])]
    private DateTime $createdAt;

    /**
     * @var DateTime
     */
    #[ORM\Column(name: "updated_at", type: "datetime", nullable: true)]
    private DateTime $updatedAt;

    /**
     * @var DateTime
     */
    #[ORM\Column(name: "deleted_at", type: "datetime", nullable: true)]
    private DateTime $deletedAt;

    /**
     * @var DateTime
     */
    #[ORM\Column(name: "sort_time", type: "datetime", nullable: true)]
    private DateTime $sortTime;

    /**
     * @var string|null
     */
    #[ORM\Column(name: "longitude", type: "string", length: 100, nullable: true)]
    private ?string $longitude;

    /**
     * @var string|null
     */
    #[ORM\Column(name: "latitude", type: "string", length: 100, nullable: true)]
    private ?string $latitude;

    /**
     * @var bool|null
     */
    #[ORM\Column(name: "was_migrated", type: "boolean", nullable: false)]
    private ?bool $wasMigrated;
    /**
     * @var bool|null
     */
    #[ORM\Column(name: "from_carsss", type: "boolean", nullable: false)]
    private ?bool $fromCarsss;

    /**
     * @var bool|null
     */
    #[ORM\Column(name: "no_deposit_needed", type: "boolean", nullable: false)]
    private ?bool $noDepositNeeded;

    /**
     * @var int|null
     */
    #[ORM\Column(name: "attribute_engine_type", type: "integer", nullable: false, options: ["default" => 1])]
    private ?int $attributeEngineType = 1;

    /**
     * @var bool|null
     */
    #[ORM\Column(name: "with_owner", type: "boolean", nullable: false)]
    private ?bool $withOwner;

    /**
     * @var bool|null
     */
    #[ORM\Column(name: "in_abu_dhabi", type: "boolean", nullable: false)]
    private ?bool $inAbuDhabi;

    /**
     * @return int|null
     */
    public function getCarId(): ?int
    {
        return $this->carId;
    }

    /**
     * @param int|null $carId
     * @return RcCars
     */
    public function setCarId(?int $carId): self
    {
        $this->carId = $carId;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getCarModelId(): ?int
    {
        return $this->carModelId;
    }

    /**
     * @param int|null $carModelId
     * @return RcCars
     */
    public function setCarModelId(?int $carModelId): self
    {
        $this->carModelId = $carModelId;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getCarSerieId(): ?int
    {
        return $this->carSerieId;
    }

    /**
     * @param int|null $carSerieId
     * @return RcCars
     */
    public function setCarSerieId(?int $carSerieId): self
    {
        $this->carSerieId = $carSerieId;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getCarBodyId(): ?int
    {
        return $this->carBodyId;
    }

    /**
     * @param int|null $carBodyId
     * @return RcCars
     */
    public function setCarBodyId(?int $carBodyId): self
    {
        $this->carBodyId = $carBodyId;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getCompanyId(): ?int
    {
        return $this->companyId;
    }

    /**
     * @param int|null $companyId
     * @return RcCars
     */
    public function setCompanyId(?int $companyId): self
    {
        $this->companyId = $companyId;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getCityId(): ?int
    {
        return $this->cityId;
    }

    /**
     * @param int|null $cityId
     * @return RcCars
     */
    public function setCityId(?int $cityId): self
    {
        $this->cityId = $cityId;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getSalesTaxId(): ?int
    {
        return $this->salesTaxId;
    }

    /**
     * @param int|null $salesTaxId
     * @return RcCars
     */
    public function setSalesTaxId(?int $salesTaxId): self
    {
        $this->salesTaxId = $salesTaxId;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getHolidayCalculatorId(): ?int
    {
        return $this->holidayCalculatorId;
    }

    /**
     * @param int|null $holidayCalculatorId
     * @return RcCars
     */
    public function setHolidayCalculatorId(?int $holidayCalculatorId): self
    {
        $this->holidayCalculatorId = $holidayCalculatorId;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getRangeCalculatorId(): ?int
    {
        return $this->rangeCalculatorId;
    }

    /**
     * @param int|null $rangeCalculatorId
     * @return RcCars
     */
    public function setRangeCalculatorId(?int $rangeCalculatorId): self
    {
        $this->rangeCalculatorId = $rangeCalculatorId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getRegistrationNumber(): ?string
    {
        return $this->registrationNumber;
    }

    /**
     * @param string|null $registrationNumber
     * @return RcCars
     */
    public function setRegistrationNumber(?string $registrationNumber): self
    {
        $this->registrationNumber = $registrationNumber;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    /**
     * @param string|null $photo
     * @return RcCars
     */
    public function setPhoto(?string $photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPriceType(): ?string
    {
        return $this->priceType;
    }

    /**
     * @param string|null $priceType
     * @return RcCars
     */
    public function setPriceType(?string $priceType): self
    {
        $this->priceType = $priceType;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getPrice1(): ?float
    {
        return $this->price1;
    }

    /**
     * @param float|null $price1
     * @return RcCars
     */
    public function setPrice1(?float $price1): self
    {
        $this->price1 = $price1;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getPrice2(): ?float
    {
        return $this->price2;
    }

    /**
     * @param float|null $price2
     * @return RcCars
     */
    public function setPrice2(?float $price2): self
    {
        $this->price2 = $price2;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getPrice36(): ?float
    {
        return $this->price36;
    }

    /**
     * @param float|null $price36
     * @return RcCars
     */
    public function setPrice36(?float $price36): self
    {
        $this->price36 = $price36;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getPrice713(): ?float
    {
        return $this->price713;
    }

    /**
     * @param float|null $price713
     * @return RcCars
     */
    public function setPrice713(?float $price713): self
    {
        $this->price713 = $price713;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getPrice1420(): ?float
    {
        return $this->price1420;
    }

    /**
     * @param float|null $price1420
     * @return RcCars
     */
    public function setPrice1420(?float $price1420): self
    {
        $this->price1420 = $price1420;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getPrice2129(): ?float
    {
        return $this->price2129;
    }

    /**
     * @param float|null $price2129
     * @return RcCars
     */
    public function setPrice2129(?float $price2129): self
    {
        $this->price2129 = $price2129;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getPrice30More(): ?float
    {
        return $this->price30More;
    }

    /**
     * @param float|null $price30More
     * @return RcCars
     */
    public function setPrice30More(?float $price30More): self
    {
        $this->price30More = $price30More;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * @param string|null $currency
     * @return RcCars
     */
    public function setCurrency(?string $currency): self
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getPricePartner1(): ?float
    {
        return $this->pricePartner1;
    }

    /**
     * @param float|null $pricePartner1
     * @return RcCars
     */
    public function setPricePartner1(?float $pricePartner1): self
    {
        $this->pricePartner1 = $pricePartner1;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getPricePartner2(): ?float
    {
        return $this->pricePartner2;
    }

    /**
     * @param float|null $pricePartner2
     * @return RcCars
     */
    public function setPricePartner2(?float $pricePartner2): self
    {
        $this->pricePartner2 = $pricePartner2;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getPricePartner36(): ?float
    {
        return $this->pricePartner36;
    }

    /**
     * @param float|null $pricePartner36
     * @return RcCars
     */
    public function setPricePartner36(?float $pricePartner36): self
    {
        $this->pricePartner36 = $pricePartner36;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getPricePartner713(): ?float
    {
        return $this->pricePartner713;
    }

    /**
     * @param float|null $pricePartner713
     * @return RcCars
     */
    public function setPricePartner713(?float $pricePartner713): self
    {
        $this->pricePartner713 = $pricePartner713;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getPricePartner1420(): ?float
    {
        return $this->pricePartner1420;
    }

    /**
     * @param float|null $pricePartner1420
     * @return RcCars
     */
    public function setPricePartner1420(?float $pricePartner1420): self
    {
        $this->pricePartner1420 = $pricePartner1420;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getPricePartner2129(): ?float
    {
        return $this->pricePartner2129;
    }

    /**
     * @param float|null $pricePartner2129
     * @return RcCars
     */
    public function setPricePartner2129(?float $pricePartner2129): self
    {
        $this->pricePartner2129 = $pricePartner2129;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getPricePartner30More(): ?float
    {
        return $this->pricePartner30More;
    }

    /**
     * @param float|null $pricePartner30More
     * @return RcCars
     */
    public function setPricePartner30More(?float $pricePartner30More): self
    {
        $this->pricePartner30More = $pricePartner30More;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getDeposit(): ?int
    {
        return $this->deposit;
    }

    /**
     * @param int|null $deposit
     * @return RcCars
     */
    public function setDeposit(?int $deposit): self
    {
        $this->deposit = $deposit;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getOverlimitCharge(): ?float
    {
        return $this->overlimitCharge;
    }

    /**
     * @param float|null $overlimitCharge
     * @return RcCars
     */
    public function setOverlimitCharge(?float $overlimitCharge): self
    {
        $this->overlimitCharge = $overlimitCharge;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getSalik(): ?int
    {
        return $this->salik;
    }

    /**
     * @param int|null $salik
     * @return RcCars
     */
    public function setSalik(?int $salik): self
    {
        $this->salik = $salik;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getAgeRestriction(): ?int
    {
        return $this->ageRestriction;
    }

    /**
     * @param int|null $ageRestriction
     * @return RcCars
     */
    public function setAgeRestriction(?int $ageRestriction): self
    {
        $this->ageRestriction = $ageRestriction;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getDrivingLicenceRestriction(): ?int
    {
        return $this->drivingLicenceRestriction;
    }

    /**
     * @param int|null $drivingLicenceRestriction
     * @return RcCars
     */
    public function setDrivingLicenceRestriction(?int $drivingLicenceRestriction): self
    {
        $this->drivingLicenceRestriction = $drivingLicenceRestriction;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getFreeDeliveryDubai(): ?bool
    {
        return $this->freeDeliveryDubai;
    }

    /**
     * @param bool|null $freeDeliveryDubai
     * @return RcCars
     */
    public function setFreeDeliveryDubai(?bool $freeDeliveryDubai): self
    {
        $this->freeDeliveryDubai = $freeDeliveryDubai;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getKmIncludedPerDay(): ?string
    {
        return $this->kmIncludedPerDay;
    }

    /**
     * @param string|null $kmIncludedPerDay
     * @return RcCars
     */
    public function setKmIncludedPerDay(?string $kmIncludedPerDay): self
    {
        $this->kmIncludedPerDay = $kmIncludedPerDay;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getKmIncludedPerMonth(): ?string
    {
        return $this->kmIncludedPerMonth;
    }

    /**
     * @param string|null $kmIncludedPerMonth
     * @return RcCars
     */
    public function setKmIncludedPerMonth(?string $kmIncludedPerMonth): self
    {
        $this->kmIncludedPerMonth = $kmIncludedPerMonth;

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
     * @return RcCars
     */
    public function setYoutubeVideoLink(?string $youtubeVideoLink): self
    {
        $this->youtubeVideoLink = $youtubeVideoLink;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getMinDayReservation(): ?int
    {
        return $this->minDayReservation;
    }

    /**
     * @param int|null $minDayReservation
     * @return RcCars
     */
    public function setMinDayReservation(?int $minDayReservation): self
    {
        $this->minDayReservation = $minDayReservation;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getAttributeYear(): ?string
    {
        return $this->attributeYear;
    }

    /**
     * @param string|null $attributeYear
     */
    public function setAttributeYear(?string $attributeYear): self
    {
        $this->attributeYear = $attributeYear;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getAttributeTinted(): ?string
    {
        return $this->attributeTinted;
    }

    /**
     * @param string|null $attributeTinted
     * @return RcCars
     */
    public function setAttributeTinted(?string $attributeTinted): self
    {
        $this->attributeTinted = $attributeTinted;

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
     * @return RcCars
     */
    public function setAttributeMaxSpeed(?string $attributeMaxSpeed): self
    {
        $this->attributeMaxSpeed = $attributeMaxSpeed;

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
     * @return RcCars
     */
    public function setAttribute0100(?string $attribute0100): self
    {
        $this->attribute0100 = $attribute0100;

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
     * @return RcCars
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
     * @return RcCars
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
     * @return RcCars
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
     * @return RcCars
     */
    public function setAttributeTransmission(?string $attributeTransmission): self
    {
        $this->attributeTransmission = $attributeTransmission;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getAttributeMileage(): ?string
    {
        return $this->attributeMileage;
    }

    /**
     * @param string|null $attributeMileage
     * @return RcCars
     */
    public function setAttributeMileage(?string $attributeMileage): self
    {
        $this->attributeMileage = $attributeMileage;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getAttributeSmBag(): ?int
    {
        return $this->attributeSmBag;
    }

    /**
     * @param int|null $attributeSmBag
     * @return RcCars
     */
    public function setAttributeSmBag(?int $attributeSmBag): self
    {
        $this->attributeSmBag = $attributeSmBag;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getAttributeLgBag(): ?int
    {
        return $this->attributeLgBag;
    }

    /**
     * @param int|null $attributeLgBag
     * @return RcCars
     */
    public function setAttributeLgBag(?int $attributeLgBag): self
    {
        $this->attributeLgBag = $attributeLgBag;

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
     * @return RcCars
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
     * @return RcCars
     */
    public function setFeatures(?string $features): self
    {
        $this->features = $features;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getExteriorCondition(): ?int
    {
        return $this->exteriorCondition;
    }

    /**
     * @param int|null $exteriorCondition
     * @return RcCars
     */
    public function setExteriorCondition(?int $exteriorCondition): self
    {
        $this->exteriorCondition = $exteriorCondition;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getInteriorCondition(): ?int
    {
        return $this->interiorCondition;
    }

    /**
     * @param int|null $interiorCondition
     * @return RcCars
     */
    public function setInteriorCondition(?int $interiorCondition): self
    {
        $this->interiorCondition = $interiorCondition;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getEngineSuspentionCondition(): ?int
    {
        return $this->engineSuspentionCondition;
    }

    /**
     * @param int|null $engineSuspentionCondition
     * @return RcCars
     */
    public function setEngineSuspentionCondition(?int $engineSuspentionCondition): self
    {
        $this->engineSuspentionCondition = $engineSuspentionCondition;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getInsurance(): ?string
    {
        return $this->insurance;
    }

    /**
     * @param string|null $insurance
     * @return RcCars
     */
    public function setInsurance(?string $insurance): self
    {
        $this->insurance = $insurance;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getInsuranceAmount(): ?int
    {
        return $this->insuranceAmount;
    }

    /**
     * @param int|null $insuranceAmount
     * @return RcCars
     */
    public function setInsuranceAmount(?int $insuranceAmount): self
    {
        $this->insuranceAmount = $insuranceAmount;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getInsuranceDefault(): ?string
    {
        return $this->insuranceDefault;
    }

    /**
     * @param string|null $insuranceDefault
     * @return RcCars
     */
    public function setInsuranceDefault(?string $insuranceDefault): self
    {
        $this->insuranceDefault = $insuranceDefault;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getInsuranceCdw(): ?string
    {
        return $this->insuranceCdw;
    }

    /**
     * @param string|null $insuranceCdw
     * @return RcCars
     */
    public function setInsuranceCdw(?string $insuranceCdw): self
    {
        $this->insuranceCdw = $insuranceCdw;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getInsuranceDefaultDesc(): ?string
    {
        return $this->insuranceDefaultDesc;
    }

    /**
     * @param string|null $insuranceDefaultDesc
     * @return RcCars
     */
    public function setInsuranceDefaultDesc(?string $insuranceDefaultDesc): self
    {
        $this->insuranceDefaultDesc = $insuranceDefaultDesc;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getInsuranceCdwDesc(): ?string
    {
        return $this->insuranceCdwDesc;
    }

    /**
     * @param string|null $insuranceCdwDesc
     */
    public function setInsuranceCdwDesc(?string $insuranceCdwDesc): self
    {
        $this->insuranceCdwDesc = $insuranceCdwDesc;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getAiportCharge(): ?string
    {
        return $this->aiportCharge;
    }

    /**
     * @param string|null $aiportCharge
     * @return RcCars
     */
    public function setAiportCharge(?string $aiportCharge): self
    {
        $this->aiportCharge = $aiportCharge;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getComplete(): ?int
    {
        return $this->complete;
    }

    /**
     * @param int|null $complete
     * @return RcCars
     */
    public function setComplete(?int $complete): self
    {
        $this->complete = $complete;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getStatus(): ?bool
    {
        return $this->status;
    }

    /**
     * @param bool|null $status
     * @return RcCars
     */
    public function setStatus(?bool $status): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getIsDeleted(): ?bool
    {
        return $this->isDeleted;
    }

    /**
     * @param bool|null $isDeleted
     * @return RcCars
     */
    public function setIsDeleted(?bool $isDeleted): self
    {
        $this->isDeleted = $isDeleted;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getMessageColor(): ?string
    {
        return $this->messageColor;
    }

    /**
     * @param string|null $messageColor
     * @return RcCars
     */
    public function setMessageColor(?string $messageColor): self
    {
        $this->messageColor = $messageColor;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getMessageTitle(): ?string
    {
        return $this->messageTitle;
    }

    /**
     * @param string|null $messageTitle
     * @return RcCars
     */
    public function setMessageTitle(?string $messageTitle): self
    {
        $this->messageTitle = $messageTitle;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getMessageText(): ?string
    {
        return $this->messageText;
    }

    /**
     * @param string|null $messageText
     * @return RcCars
     */
    public function setMessageText(?string $messageText): self
    {
        $this->messageText = $messageText;

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
     */
    public function setCreatedAt(DateTime $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return DateTime
     */
    public function getUpdatedAt(): DateTime
    {
        return $this->updatedAt;
    }

    /**
     * @param DateTime $updatedAt
     * @return RcCars
     */
    public function setUpdatedAt(DateTime $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getDeletedAt(): DateTime
    {
        return $this->deletedAt;
    }

    /**
     * @param DateTime $deletedAt
     * @return RcCars
     */
    public function setDeletedAt(DateTime $deletedAt): self
    {
        $this->deletedAt = $deletedAt;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getSortTime(): DateTime
    {
        return $this->sortTime;
    }

    /**
     * @param DateTime $sortTime
     * @return RcCars
     */
    public function setSortTime(DateTime $sortTime): self
    {
        $this->sortTime = $sortTime;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getLongitude(): ?string
    {
        return $this->longitude;
    }

    /**
     * @param string|null $longitude
     * @return RcCars
     */
    public function setLongitude(?string $longitude): self
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getLatitude(): ?string
    {
        return $this->latitude;
    }

    /**
     * @param string|null $latitude
     * @return RcCars
     */
    public function setLatitude(?string $latitude): self
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getWasMigrated(): ?bool
    {
        return $this->wasMigrated;
    }

    /**
     * @param bool|null $wasMigrated
     * @return RcCars
     */
    public function setWasMigrated(?bool $wasMigrated): self
    {
        $this->wasMigrated = $wasMigrated;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getFromCarsss(): ?bool
    {
        return $this->fromCarsss;
    }

    /**
     * @param bool|null $fromCarsss
     * @return RcCars
     */
    public function setFromCarsss(?bool $fromCarsss): self
    {
        $this->fromCarsss = $fromCarsss;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getNoDepositNeeded(): ?bool
    {
        return $this->noDepositNeeded;
    }

    /**
     * @param bool|null $noDepositNeeded
     * @return RcCars
     */
    public function setNoDepositNeeded(?bool $noDepositNeeded): self
    {
        $this->noDepositNeeded = $noDepositNeeded;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getAttributeEngineType(): ?int
    {
        return $this->attributeEngineType;
    }

    /**
     * @param int|null $attributeEngineType
     * @return RcCars
     */
    public function setAttributeEngineType(?int $attributeEngineType): self
    {
        $this->attributeEngineType = $attributeEngineType;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getWithOwner(): ?bool
    {
        return $this->withOwner;
    }

    /**
     * @param bool|null $withOwner
     * @return RcCars
     */
    public function setWithOwner(?bool $withOwner): self
    {
        $this->withOwner = $withOwner;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getInAbuDhabi(): ?bool
    {
        return $this->inAbuDhabi;
    }

    /**
     * @param bool|null $inAbuDhabi
     * @return RcCars
     */
    public function setInAbuDhabi(?bool $inAbuDhabi): self
    {
        $this->inAbuDhabi = $inAbuDhabi;

        return $this;
    }


}

