<?php

namespace App\Repository;

use App\Entity\TaxiService;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method TaxiService|null find($id, $lockMode = null, $lockVersion = null)
 * @method TaxiService|null findOneBy(array $criteria, array $orderBy = null)
 * @method TaxiService[]    findAll()
 * @method TaxiService[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TaxiServiceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TaxiService::class);
    }

    // /**
    //  * @return TaxiService[] Returns an array of TaxiService objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TaxiService
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
