<?php

namespace App\Repository;

use App\Entity\RcCarsBrandsTranslations;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method RcCarsBrandsTranslations|null find($id, $lockMode = null, $lockVersion = null)
 * @method RcCarsBrandsTranslations|null findOneBy(array $criteria, array $orderBy = null)
 * @method RcCarsBrandsTranslations[] findAll()
 * @method RcCarsBrandsTranslations[] findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RcCarsBrandsTranslationsRepository extends ServiceEntityRepository
{

    /**
     * @param ManagerRegistry $registry
     */
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RcCarsBrandsTranslations::class);
    }

}
