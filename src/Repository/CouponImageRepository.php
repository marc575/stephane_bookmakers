<?php

namespace App\Repository;

use App\Entity\CouponImage;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CouponImage|null find($id, $lockMode = null, $lockVersion = null)
 * @method CouponImage|null findOneBy(array $criteria, array $orderBy = null)
 * @method CouponImage[]    findAll()
 * @method CouponImage[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CouponImageRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CouponImage::class);
    }

    // /**
    //  * @return CouponImage[] Returns an array of CouponImage objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CouponImage
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
