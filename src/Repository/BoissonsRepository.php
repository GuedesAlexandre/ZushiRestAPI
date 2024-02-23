<?php

namespace App\Repository;

use App\Entity\Boissons;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Boissons>
 *
 * @method Boissons|null find($id, $lockMode = null, $lockVersion = null)
 * @method Boissons|null findOneBy(array $criteria, array $orderBy = null)
 * @method Boissons[]    findAll()
 * @method Boissons[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BoissonsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Boissons::class);
    }

//    /**
//     * @return Boissons[] Returns an array of Boissons objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('b.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Boissons
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
