<?php

namespace App\Repository;

use App\Entity\RcCarsTranslations;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method RcCarsTranslations|null find($id, $lockMode = null, $lockVersion = null)
 * @method RcCarsTranslations|null findOneBy(array $criteria, array $orderBy = null)
 * @method RcCarsTranslations[] findAll()
 * @method RcCarsTranslations[] findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RcCarsTranslationsRepository extends ServiceEntityRepository
{

    /**
     * @param ManagerRegistry $registry
     */
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RcCarsTranslations::class);
    }

}
