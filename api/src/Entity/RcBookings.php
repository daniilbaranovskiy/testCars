<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiFilter;
use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;
use App\Repository\RcBookingsRepository;
use DateTime;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RcBookingsRepository::class)]
#[ApiResource]
#[ApiFilter(SearchFilter::class, properties: [
    'bookingId' => 'exact',
    'carId'     => 'exact'
])]
class RcBookings
{

    /**
     * @var int
     */
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    #[ORM\Column(name: "booking_id", type: "integer")]
    private int $bookingId;

    /**
     * @var int|null
     */
    #[ORM\Column(name: "uid", type: "bigint", nullable: true)]
    private ?int $uid;

    /**
     * @var int|null
     */
    #[ORM\Column(name: "car_id", type: "integer", nullable: true)]
    private ?int $carId;

    /**
     * @var int|null
     */
    #[ORM\Column(name: "user_id", type: "integer", nullable: true)]
    private ?int $userId;

    /**
     * @var int|null
     */
    #[ORM\Column(name: "added_by", type: "integer", nullable: true)]
    private ?int $addedBy;

    /**
     * @var int|null
     */
    #[ORM\Column(name: "company_id", type: "integer", nullable: true)]
    private ?int $companyId;

    /**
     * @var string|null
     */
    #[ORM\Column(name: "source", type: "string", length: 255, nullable: true)]
    private ?string $source;

    /**
     * @var int|null
     */
    #[ORM\Column(name: "agent_id", type: "integer", nullable: true)]
    private ?int $agentId;

    /**
     * @var int|null
     */
    #[ORM\Column(name: "sales", type: "integer", nullable: true)]
    private ?int $sales;

    /**
     * @var string|null
     */
    #[ORM\Column(name: "other", type: "string", length: 255, nullable: true)]
    private ?string $other;

    /**
     * @var string|null
     */
    #[ORM\Column(name: "direct", type: "string", length: 255, nullable: true)]
    private ?string $direct;

    /**
     * @var DateTime
     */
    #[ORM\Column(name: "start_date", type: "datetime", nullable: true)]
    private DateTime $startDate;

    /**
     * @var string|null
     */
    #[ORM\Column(name: "pickup_location", type: "string", length: 255, nullable: true)]
    private ?string $pickupLocation;

    /**
     * @var string|null
     */
    #[ORM\Column(name: "pickup_place_id", type: "string", length: 255, nullable: true)]
    private ?string $pickupPlaceId;

    /**
     * @var float|null
     */
    #[ORM\Column(name: "pickup_latitude", type: "float", precision: 10, scale: 0, nullable: true)]
    private ?float $pickupLatitude;

    /**
     * @var float|null
     */
    #[ORM\Column(name: "pickup_longitude", type: "float", precision: 10, scale: 0, nullable: true)]
    private ?float $pickupLongitude;

    /**
     * @var int|null
     */
    #[ORM\Column(name: "pickup_driver", type: "integer", nullable: true)]
    private ?int $pickupDriver;

    /**
     * @var string|null
     */
    #[ORM\Column(name: "pickup_driver_note", type: "string", length: 255, options: ["default" => ""])]
    private ?string $pickupDriverNote = '';

    /**
     * @var DateTime
     */
    #[ORM\Column(name: "end_date", type: "datetime", nullable: true)]
    private DateTime $endDate;

    /**
     * @var string|null
     */
    #[ORM\Column(name: "drop_location", type: "string", length: 255, nullable: true)]
    private ?string $dropLocation;

    /**
     * @var string|null
     */
    #[ORM\Column(name: "drop_place_id", type: "string", length: 255, nullable: true)]
    private ?string $dropPlaceId;

    /**
     * @var float|null
     */
    #[ORM\Column(name: "drop_latitude", type: "float", precision: 10, scale: 0, nullable: true)]
    private ?float $dropLatitude;

    /**
     * @var float|null
     */
    #[ORM\Column(name: "drop_longitude", type: "float", precision: 10, scale: 0, nullable: true)]
    private ?float $dropLongitude;

    /**
     * @var int|null
     */
    #[ORM\Column(name: "drop_driver", type: "integer", nullable: true)]
    private ?int $dropDriver;

    /**
     * @var string|null
     */
    #[ORM\Column(name: "drop_driver_note", type: "string", length: 255, options: ["default" => ""])]
    private ?string $dropDriverNote = '';

    /**
     * @var bool|null
     */
    #[ORM\Column(name: "send_sms_to_drivers", type: "boolean", nullable: true)]
    private ?bool $sendSmsToDrivers;

    /**
     * @var bool|null
     */
    #[ORM\Column(name: "send_sms_to_me", type: "boolean", nullable: true)]
    private ?bool $sendSmsToMe;

    /**
     * @var float|null
     */
    #[ORM\Column(name: "total_amount", type: "float", precision: 10, scale: 0, nullable: true)]
    private ?float $totalAmount;

    /**
     * @var string|null
     */
    #[ORM\Column(name: "currency_id", type: "string", length: 3, nullable: true)]
    private ?string $currencyId;

    /**
     * @var int|null
     */
    #[ORM\Column(name: "city_id", type: "integer", options: ["default" => 1])]
    private ?int $cityId = 1;

    /**
     * @var string|null
     */
    #[ORM\Column(name: "client_full_name", type: "string", length: 255, nullable: true)]
    private ?string $clientFullName;

    /**
     * @var string|null
     */
    #[ORM\Column(name: "special_request", type: "string", length: 500, nullable: true)]
    private ?string $specialRequest;

    /**
     * @var int|null
     */
    #[ORM\Column(name: "cancellation_answer_id", type: "integer", nullable: true)]
    private ?int $cancellationAnswerId;

    /**
     * @var string|null
     */
    #[ORM\Column(name: "cancellation_reason", type: "text", length: 65535, nullable: true)]
    private ?string $cancellationReason;

    /**
     * @var bool|null
     */
    #[ORM\Column(name: "open_date", type: "boolean", options: ["default" => 0])]
    private ?bool $openDate = false;

    /**
     * @var DateTime
     */
    #[ORM\Column(name: "paid_at", type: "datetime", nullable: true)]
    private DateTime $paidAt;

    /**
     * @var bool|null
     */
    #[ORM\Column(name: "status", type: "boolean", options: ["default" => 0])]
    private ?bool $status = false;

    /**
     * @var bool|null
     */
    #[ORM\Column(name: "payment_status", type: "boolean", options: ["default" => 0])]
    private ?bool $paymentStatus = false;

    /**
     * @var bool|null
     */
    #[ORM\Column(name: "is_reserved", type: "boolean", options: ["default" => 0])]
    private ?bool $isReserved = false;

    /**
     * @var bool|null
     */
    #[ORM\Column(name: "is_deleted", type: "boolean", options: ["default" => 0])]
    private ?bool $isDeleted = false;

    /**
     * @var int|null
     */
    #[ORM\Column(name: "cancelled_by", type: "integer", nullable: true)]
    private ?int $cancelledBy;

    /**
     * @var DateTime
     */
    #[ORM\Column(name: "cancelled_at", type: "datetime", nullable: true)]
    private DateTime $cancelledAt;

    /**
     * @var DateTime
     */
    #[ORM\Column(name: "created_at", type: "datetime", options: ["default" => "CURRENT_TIMESTAMP"])]
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
     * @var bool|null
     */
    #[ORM\Column(name: "replacement", type: "boolean", options: ["default" => 0])]
    private ?bool $replacement;

    /**
     * @return int
     */
    public function getBookingId(): int
    {
        return $this->bookingId;
    }

    /**
     * @param int $bookingId
     */
    public function setBookingId(int $bookingId): self
    {
        $this->bookingId = $bookingId;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getUid(): ?int
    {
        return $this->uid;
    }

    /**
     * @param int|null $uid
     * @return RcBookings
     */
    public function setUid(?int $uid): self
    {
        $this->uid = $uid;

        return $this;

    }

    /**
     * @return int|null
     */
    public function getCarId(): ?int
    {
        return $this->carId;
    }

    /**
     * @param int|null $carId
     * @return RcBookings
     */
    public function setCarId(?int $carId): self
    {
        $this->carId = $carId;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getUserId(): ?int
    {
        return $this->userId;
    }

    /**
     * @param int|null $userId
     * @return RcBookings
     */
    public function setUserId(?int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getAddedBy(): ?int
    {
        return $this->addedBy;
    }

    /**
     * @param int|null $addedBy
     * @return RcBookings
     */
    public function setAddedBy(?int $addedBy): self
    {
        $this->addedBy = $addedBy;

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
     * @return RcBookings
     */
    public function setCompanyId(?int $companyId): self
    {
        $this->companyId = $companyId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getSource(): ?string
    {
        return $this->source;
    }

    /**
     * @param string|null $source
     * @return RcBookings
     */
    public function setSource(?string $source): self
    {
        $this->source = $source;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getAgentId(): ?int
    {
        return $this->agentId;
    }

    /**
     * @param int|null $agentId
     * @return RcBookings
     */
    public function setAgentId(?int $agentId): self
    {
        $this->agentId = $agentId;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getSales(): ?int
    {
        return $this->sales;
    }

    /**
     * @param int|null $sales
     * @return RcBookings
     */
    public function setSales(?int $sales): self
    {
        $this->sales = $sales;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getOther(): ?string
    {
        return $this->other;
    }

    /**
     * @param string|null $other
     * @return RcBookings
     */
    public function setOther(?string $other): self
    {
        $this->other = $other;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDirect(): ?string
    {
        return $this->direct;
    }

    /**
     * @param string|null $direct
     * @return RcBookings
     */
    public function setDirect(?string $direct): self
    {
        $this->direct = $direct;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getStartDate(): DateTime
    {
        return $this->startDate;
    }

    /**
     * @param DateTime $startDate
     * @return RcBookings
     */
    public function setStartDate(DateTime $startDate): self
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPickupLocation(): ?string
    {
        return $this->pickupLocation;
    }

    /**
     * @param string|null $pickupLocation
     * @return RcBookings
     */
    public function setPickupLocation(?string $pickupLocation): self
    {
        $this->pickupLocation = $pickupLocation;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPickupPlaceId(): ?string
    {
        return $this->pickupPlaceId;
    }

    /**
     * @param string|null $pickupPlaceId
     * @return RcBookings
     */
    public function setPickupPlaceId(?string $pickupPlaceId): self
    {
        $this->pickupPlaceId = $pickupPlaceId;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getPickupLatitude(): ?float
    {
        return $this->pickupLatitude;
    }

    /**
     * @param float|null $pickupLatitude
     * @return RcBookings
     */
    public function setPickupLatitude(?float $pickupLatitude): self
    {
        $this->pickupLatitude = $pickupLatitude;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getPickupLongitude(): ?float
    {
        return $this->pickupLongitude;
    }

    /**
     * @param float|null $pickupLongitude
     * @return RcBookings
     */
    public function setPickupLongitude(?float $pickupLongitude): self
    {
        $this->pickupLongitude = $pickupLongitude;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getPickupDriver(): ?int
    {
        return $this->pickupDriver;
    }

    /**
     * @param int|null $pickupDriver
     * @return RcBookings
     */
    public function setPickupDriver(?int $pickupDriver): self
    {
        $this->pickupDriver = $pickupDriver;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPickupDriverNote(): ?string
    {
        return $this->pickupDriverNote;
    }

    /**
     * @param string|null $pickupDriverNote
     * @return RcBookings
     */
    public function setPickupDriverNote(?string $pickupDriverNote): self
    {
        $this->pickupDriverNote = $pickupDriverNote;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getEndDate(): DateTime
    {
        return $this->endDate;
    }

    /**
     * @param DateTime $endDate
     * @return RcBookings
     */
    public function setEndDate(DateTime $endDate): self
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDropLocation(): ?string
    {
        return $this->dropLocation;
    }

    /**
     * @param string|null $dropLocation
     * @return RcBookings
     */
    public function setDropLocation(?string $dropLocation): self
    {
        $this->dropLocation = $dropLocation;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDropPlaceId(): ?string
    {
        return $this->dropPlaceId;
    }

    /**
     * @param string|null $dropPlaceId
     * @return RcBookings
     */
    public function setDropPlaceId(?string $dropPlaceId): self
    {
        $this->dropPlaceId = $dropPlaceId;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getDropLatitude(): ?float
    {
        return $this->dropLatitude;
    }

    /**
     * @param float|null $dropLatitude
     * @return RcBookings
     */
    public function setDropLatitude(?float $dropLatitude): self
    {
        $this->dropLatitude = $dropLatitude;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getDropLongitude(): ?float
    {
        return $this->dropLongitude;
    }

    /**
     * @param float|null $dropLongitude
     * @return RcBookings
     */
    public function setDropLongitude(?float $dropLongitude): self
    {
        $this->dropLongitude = $dropLongitude;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getDropDriver(): ?int
    {
        return $this->dropDriver;
    }

    /**
     * @param int|null $dropDriver
     * @return RcBookings
     */
    public function setDropDriver(?int $dropDriver): self
    {
        $this->dropDriver = $dropDriver;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDropDriverNote(): ?string
    {
        return $this->dropDriverNote;
    }

    /**
     * @param string|null $dropDriverNote
     * @return RcBookings
     */
    public function setDropDriverNote(?string $dropDriverNote): self
    {
        $this->dropDriverNote = $dropDriverNote;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getSendSmsToDrivers(): ?bool
    {
        return $this->sendSmsToDrivers;
    }

    /**
     * @param bool|null $sendSmsToDrivers
     * @return RcBookings
     */
    public function setSendSmsToDrivers(?bool $sendSmsToDrivers): self
    {
        $this->sendSmsToDrivers = $sendSmsToDrivers;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getSendSmsToMe(): ?bool
    {
        return $this->sendSmsToMe;
    }

    /**
     * @param bool|null $sendSmsToMe
     * @return RcBookings
     */
    public function setSendSmsToMe(?bool $sendSmsToMe): self
    {
        $this->sendSmsToMe = $sendSmsToMe;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getTotalAmount(): ?float
    {
        return $this->totalAmount;
    }

    /**
     * @param float|null $totalAmount
     * @return RcBookings
     */
    public function setTotalAmount(?float $totalAmount): self
    {
        $this->totalAmount = $totalAmount;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCurrencyId(): ?string
    {
        return $this->currencyId;
    }

    /**
     * @param string|null $currencyId
     * @return RcBookings
     */
    public function setCurrencyId(?string $currencyId): self
    {
        $this->currencyId = $currencyId;

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
     * @return RcBookings
     */
    public function setCityId(?int $cityId): self
    {
        $this->cityId = $cityId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getClientFullName(): ?string
    {
        return $this->clientFullName;
    }

    /**
     * @param string|null $clientFullName
     * @return RcBookings
     */
    public function setClientFullName(?string $clientFullName): self
    {
        $this->clientFullName = $clientFullName;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getSpecialRequest(): ?string
    {
        return $this->specialRequest;
    }

    /**
     * @param string|null $specialRequest
     * @return RcBookings
     */
    public function setSpecialRequest(?string $specialRequest): self
    {
        $this->specialRequest = $specialRequest;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getCancellationAnswerId(): ?int
    {
        return $this->cancellationAnswerId;
    }

    /**
     * @param int|null $cancellationAnswerId
     * @return RcBookings
     */
    public function setCancellationAnswerId(?int $cancellationAnswerId): self
    {
        $this->cancellationAnswerId = $cancellationAnswerId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCancellationReason(): ?string
    {
        return $this->cancellationReason;
    }

    /**
     * @param string|null $cancellationReason
     * @return RcBookings
     */
    public function setCancellationReason(?string $cancellationReason): self
    {
        $this->cancellationReason = $cancellationReason;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getOpenDate(): ?bool
    {
        return $this->openDate;
    }

    /**
     * @param bool|null $openDate
     * @return RcBookings
     */
    public function setOpenDate(?bool $openDate): self
    {
        $this->openDate = $openDate;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getPaidAt(): DateTime
    {
        return $this->paidAt;
    }

    /**
     * @param DateTime $paidAt
     * @return RcBookings
     */
    public function setPaidAt(DateTime $paidAt): self
    {
        $this->paidAt = $paidAt;

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
     * @return RcBookings
     */
    public function setStatus(?bool $status): self
    {
        $this->status = $status;


        return $this;
    }

    /**
     * @return bool|null
     */
    public function getPaymentStatus(): ?bool
    {
        return $this->paymentStatus;
    }

    /**
     * @param bool|null $paymentStatus
     * @return RcBookings
     */
    public function setPaymentStatus(?bool $paymentStatus): self
    {
        $this->paymentStatus = $paymentStatus;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getIsReserved(): ?bool
    {
        return $this->isReserved;
    }

    /**
     * @param bool|null $isReserved
     * @return RcBookings
     */
    public function setIsReserved(?bool $isReserved): self
    {
        $this->isReserved = $isReserved;

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
     * @return RcBookings
     */
    public function setIsDeleted(?bool $isDeleted): self
    {
        $this->isDeleted = $isDeleted;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getCancelledBy(): ?int
    {
        return $this->cancelledBy;
    }

    /**
     * @param int|null $cancelledBy
     * @return RcBookings
     */
    public function setCancelledBy(?int $cancelledBy): self
    {
        $this->cancelledBy = $cancelledBy;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getCancelledAt(): DateTime
    {
        return $this->cancelledAt;
    }

    /**
     * @param DateTime $cancelledAt
     * @return RcBookings
     */
    public function setCancelledAt(DateTime $cancelledAt): self
    {
        $this->cancelledAt = $cancelledAt;

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
     * @return RcBookings
     */
    public function setCreatedAt(DateTime $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
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
     * @return RcBookings
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
     * @return RcBookings
     */
    public function setDeletedAt(DateTime $deletedAt): self
    {
        $this->deletedAt = $deletedAt;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getReplacement(): ?bool
    {
        return $this->replacement;
    }

    /**
     * @param bool|null $replacement
     * @return RcBookings
     */
    public function setReplacement(?bool $replacement): self
    {
        $this->replacement = $replacement;

        return $this;
    }

}
