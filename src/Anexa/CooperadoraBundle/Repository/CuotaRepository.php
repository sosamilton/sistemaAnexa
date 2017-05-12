<?php

namespace Anexa\CooperadoraBundle\Repository;

class CuotaRepository extends \Doctrine\ORM\EntityRepository
{
	public function CuotasAlumnosPorAnio($anio, $alumno)
    {
        return $this->createQueryBuilder('c')
				    ->select(array('c.mes', 'p.id as pago'))
				    ->leftJoin('c.pagos', 'p', 'WITH', 'p.alumno = :alumno')
				    ->where('c.anio = :anio')
				    ->AndWhere('c.borrado = 0')
				    ->setParameter('alumno', $alumno)
				    ->setParameter('anio', $anio)
				    ->getQuery()
        		    ->getResult();
    }
}
