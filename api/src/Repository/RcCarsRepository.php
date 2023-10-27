<?php

namespace App\Repository;

use App\Entity\RcCars;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method RcCars|null find($id, $lockMode = null, $lockVersion = null)
 * @method RcCars|null findOneBy(array $criteria, array $orderBy = null)
 * @method RcCars[] findAll()
 * @method RcCars[] findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RcCarsRepository extends ServiceEntityRepository
{

    /**
     * @param ManagerRegistry $registry
     */
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RcCars::class);
    }

}
