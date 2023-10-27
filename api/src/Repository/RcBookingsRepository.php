<?php

namespace App\Repository;

use App\Entity\RcBookings;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method RcBookings|null find($id, $lockMode = null, $lockVersion = null)
 * @method RcBookings|null findOneBy(array $criteria, array $orderBy = null)
 * @method RcBookings[] findAll()
 * @method RcBookings[] findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RcBookingsRepository extends ServiceEntityRepository
{

    /**
     * @param ManagerRegistry $registry
     */
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RcBookings::class);
    }

}
