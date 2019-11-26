<?php

namespace App\Repository;

use App\Entity\Nouvelle;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Nouvelle|null find($id, $lockMode = null, $lockVersion = null)
 * @method Nouvelle|null findOneBy(array $criteria, array $orderBy = null)
 * @method Nouvelle[]    findAll()
 * @method Nouvelle[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NouvelleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Nouvelle::class);
    }

    // /**
    //  * @return Nouvelle[] Returns an array of Nouvelle objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('n.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Nouvelle
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
