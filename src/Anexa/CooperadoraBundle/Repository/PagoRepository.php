<?php

namespace Anexa\CooperadoraBundle\Repository;

class PagoRepository extends \Doctrine\ORM\EntityRepository
{
	public function getCobrosDe($cobrador, $desde, $hasta )
    {
        return $this->createQueryBuilder('p')
				    ->select('p')
				    ->where('p.user = :cobrador')
				    ->AndWhere('p.fecha BETWEEN :desde AND :hasta')
				    ->AndWhere('p.borrado = 0')
				    ->setParameter('cobrador', $cobrador)
				    ->setParameter('desde', $desde)
				    ->setParameter('hasta', $hasta)
				    ->getQuery()
        		    ->getResult();
    }
    
}