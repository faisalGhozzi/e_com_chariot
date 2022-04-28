<?php

namespace App\Repository;

use App\Entity\Salle;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Salle|null find($id, $lockMode = null, $lockVersion = null)
 * @method Salle|null findOneBy(array $criteria, array $orderBy = null)
 * @method Salle[]    findAll()
 * @method Salle[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SalleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Salle::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(Salle $entity, bool $flush = true): void
    {
        $this->_em->persist($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function remove(Salle $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    /**
     * @return Salle[] Returns an array of Salle objects
     */

    public function recherchesalles($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.nom like :val')
            ->setParameter('val', '%'. $value.'%')
            ->getQuery()
            ->getResult()
            ;
    }

    /**
     * @return Salle[] Returns an array of Salle objects
     */

    public function SallesCroissante()
    {
        return $this->createQueryBuilder('s')
            ->orderBy('s.prixsalle','ASC')
            ->getQuery()
            ->getResult()
            ;
    }

    /**
     * @return Salle[] Returns an array of Salle objects
     */

    public function SallesDecroissante()
    {
        return $this->createQueryBuilder('s')
            ->orderBy('s.prixsalle','DESC')
            ->getQuery()
            ->getResult()
            ;
    }

    // /**
    //  * @return Salle[] Returns an array of Salle objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Salle
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
