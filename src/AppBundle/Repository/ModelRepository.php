<?php

namespace AppBundle\Repository;

/**
 * GenreRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ModelRepository extends \Doctrine\ORM\EntityRepository
{
    
    
    public function findByMake($make){
        $query = $this->createQueryBuilder('m')
                ->innerJoin('m.make', 'ma')
                ->where('ma.id = :make_id')
                ->setParameter('make_id', $make->getId())
                ->orderBy('m.name', 'ASC')
                ->getQuery();
          
        return $query->getResult();
    }
    
    
}