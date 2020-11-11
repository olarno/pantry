<?php

namespace App\Repository;

use App\Entity\QuantityType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method QuantityType|null find($id, $lockMode = null, $lockVersion = null)
 * @method QuantityType|null findOneBy(array $criteria, array $orderBy = null)
 * @method QuantityType[]    findAll()
 * @method QuantityType[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class QuantityTypeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, QuantityType::class);
    }

    // /**
    //  * @return QuantityType[] Returns an array of QuantityType objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('q')
            ->andWhere('q.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('q.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?QuantityType
    {
        return $this->createQueryBuilder('q')
            ->andWhere('q.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
