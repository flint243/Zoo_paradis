<?php

namespace App\Repository;

use App\Entity\InfosAnimal;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<InfosAnimal>
 */
class InfosAnimalRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, InfosAnimal::class);
    }

    public function findInfosAnimalById(int $id): ?InfosAnimal
    {
        return $this->find($id);
    }





    /**
     * @return int/mixed/string
     */
    public function countAllInfosAnimal()
    {
        return $this->createQueryBuilder('a')
                    ->select('COUNT(a.id) as value')
                    ->getQuery()
                    ->getOneOrNullResult();

    }

  


//    /**
//     * @return InfosAnimal[] Returns an array of InfosAnimal objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('i.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?InfosAnimal
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
