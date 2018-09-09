<?php

namespace App\Repository;

use App\Entity\BioSiswa;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method BioSiswa|null find($id, $lockMode = null, $lockVersion = null)
 * @method BioSiswa|null findOneBy(array $criteria, array $orderBy = null)
 * @method BioSiswa[]    findAll()
 * @method BioSiswa[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BioSiswaRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, BioSiswa::class);
    }

//    /**
//     * @return BioSiswa[] Returns an array of BioSiswa objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?BioSiswa
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
