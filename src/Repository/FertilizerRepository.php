<?php

namespace App\Repository;

use App\Entity\Fertilizer;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Fertilizer>
 *
 * @method Fertilizer|null find($id, $lockMode = null, $lockVersion = null)
 * @method Fertilizer|null findOneBy(array $criteria, array $orderBy = null)
 * @method Fertilizer[]    findAll()
 * @method Fertilizer[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FertilizerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Fertilizer::class);
    }

    //    /**
    //     * @return Fertilizer[] Returns an array of Fertilizer objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('f')
    //            ->andWhere('f.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('f.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Fertilizer
    //    {
    //        return $this->createQueryBuilder('f')
    //            ->andWhere('f.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
