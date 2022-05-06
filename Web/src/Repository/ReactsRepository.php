<?php

namespace App\Repository;

use App\Entity\Reacts;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Reacts|null find($id, $lockMode = null, $lockVersion = null)
 * @method Reacts|null findOneBy(array $criteria, array $orderBy = null)
 * @method Reacts[]    findAll()
 * @method Reacts[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReactsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Reacts::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(Reacts $entity, bool $flush = true): void
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
    public function remove(Reacts $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }
    public function findByUserComment($user, $comm) {
        $qb = $this->createQueryBuilder('c');
        $qb->where('c.idusers = :idusers')
            ->where('c.idcommentaire = :idcommentaire')
            ->setParameter(':idusers', $user)
            ->setParameter(':idcommentaire', $comm);
        return $qb->getQuery()->getResult();
    }


}
