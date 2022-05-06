<?php

namespace App\Repository;

use App\Entity\Commentaire;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\ORM\Query\Expr\Join;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Commentaire|null find($id, $lockMode = null, $lockVersion = null)
 * @method Commentaire|null findOneBy(array $criteria, array $orderBy = null)
 * @method Commentaire[]    findAll()
 * @method Commentaire[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CommentaireRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Commentaire::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(Commentaire $entity, bool $flush = true): void
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
    public function remove(Commentaire $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    /**
     * @return Commentaire[] Returns an array of Commentaire objects
     */

    public function findByArticle($article)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.idArticle = :val')
            ->setParameter('val', $article)
            ->orderBy('c.datepub', 'ASC')
            ->getQuery()
            ->getResult()
        ;
    }

    /**
     * @return Commentaire[] Returns an array of Commentaire objects
     */

    public function triAnciensCommentaire($article)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.idArticle = :val')
            ->setParameter('val', $article)
            ->orderBy('c.datepub', 'ASC')
            ->getQuery()
            ->getResult()
            ;
    }

    /**
     * @return Commentaire[] Returns an array of Commentaire objects
     */

    public function triRecentesCommentaires($article)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.idArticle = :val')
            ->setParameter('val', $article)
            ->orderBy('c.datepub', 'DESC')
            ->getQuery()
            ->getResult()
            ;
    }

    /**
     * @return Commentaire[] Returns an array of Commentaire objects
     */

    public function allCommentaires()
    {
        return $this->createQueryBuilder('c')
            ->getQuery()
            ->getResult()
            ;
    }


    /*
    public function findOneBySomeField($value): ?Commentaire
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
