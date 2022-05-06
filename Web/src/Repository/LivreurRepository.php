<?php

namespace App\Repository;

use App\Entity\Livreur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;
use PHPUnit\Framework\Constraint\Count;

/**
 * @method Livreur|null find($id, $lockMode = null, $lockVersion = null)
 * @method Livreur|null findOneBy(array $criteria, array $orderBy = null)
 * @method Livreur[]    findAll()
 * @method Livreur[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LivreurRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Livreur::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(Livreur $entity, bool $flush = true): void
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
    public function remove(Livreur $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    // /**
    //  * @return Livreur[] Returns an array of Livreur objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Livreur
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
 /*   public function searchLivreur($data)
    {
        $user = $this->getDoctrine()->getRepository(User::class)->find(44444459);
        return $this->createQueryBuilder('l')
            ->andWhere('l.nomlivreur LIKE :x')
            ->setParameter('x', '%'.$data.'%')
            ->getQuery()
            ->execute();
    }*/

    public function findEntitiesByString($str){
        return $this->getEntityManager()
            ->createQuery(
                'SELECT p
                FROM APP\Entity\Livreur p
                WHERE p.nomlivreur LIKE :str'
            )
            ->setParameter('str', '%'.$str.'%')
            ->getResult();
    }


}
