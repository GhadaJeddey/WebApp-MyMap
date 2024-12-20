<?php

namespace App\Repository;

use App\Entity\Complaints;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Complaints>
 *
 * @method Complaints|null find($id, $lockMode = null, $lockVersion = null)
 * @method Complaints|null findOneBy(array $criteria, array $orderBy = null)
 * @method Complaints[]    findAll()
 * @method Complaints[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ComplaintsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Complaints::class);
    }

//    /**
//     * @return Complaints[] Returns an array of Complaints objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Complaints
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
