<?php

namespace App\Repository;

use App\Entity\Saveurs;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Saveurs>
 *
 * @method Saveurs|null find($id, $lockMode = null, $lockVersion = null)
 * @method Saveurs|null findOneBy(array $criteria, array $orderBy = null)
 * @method Saveurs[]    findAll()
 * @method Saveurs[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SaveursRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Saveurs::class);
    }

//    /**
//     * @return Saveurs[] Returns an array of Saveurs objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('s.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Saveurs
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
