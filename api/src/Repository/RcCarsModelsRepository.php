<?php

namespace App\Repository;

use App\Entity\RcCarsModels;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method RcCarsModels|null find($id, $lockMode = null, $lockVersion = null)
 * @method RcCarsModels|null findOneBy(array $criteria, array $orderBy = null)
 * @method RcCarsModels[] findAll()
 * @method RcCarsModels[] findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RcCarsModelsRepository extends ServiceEntityRepository
{

    /**
     * @param ManagerRegistry $registry
     */
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RcCarsModels::class);
    }

}
