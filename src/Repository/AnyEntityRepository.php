<?php

namespace App\Repository;

use App\Entity\AnyEntity;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method AnyEntity|null find($id, $lockMode = null, $lockVersion = null)
 * @method AnyEntity|null findOneBy(array $criteria, array $orderBy = null)
 * @method AnyEntity[]    findAll()
 * @method AnyEntity[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AnyEntityRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AnyEntity::class);
    }

    // /**
    //  * @return AnyEntity[] Returns an array of AnyEntity objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?AnyEntity
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
