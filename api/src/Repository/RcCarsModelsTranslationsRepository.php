<?php

namespace App\Repository;

use App\Entity\RcCarsModelsTranslations;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method RcCarsModelsTranslations|null find($id, $lockMode = null, $lockVersion = null)
 * @method RcCarsModelsTranslations|null findOneBy(array $criteria, array $orderBy = null)
 * @method RcCarsModelsTranslations[] findAll()
 * @method RcCarsModelsTranslations[] findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RcCarsModelsTranslationsRepository extends ServiceEntityRepository
{

    /**
     * @param ManagerRegistry $registry
     */
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RcCarsModelsTranslations::class);
    }

}
