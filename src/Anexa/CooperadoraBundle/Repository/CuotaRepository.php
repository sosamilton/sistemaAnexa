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
				    ->AndWhere('c.tipo <> :tipo')
				    ->setParameter('alumno', $alumno)
				    ->setParameter('anio', $anio)
				    ->setParameter('tipo', "matriculaIngreso")
				    ->getQuery()
        		    ->getResult();
    }
    public function cuotasActivasAlumno()
    {
        return $this->createQueryBuilder('c')
				    ->select('c')
				    ->where('c.tipo <> :tipo')
				    ->AndWhere('c.borrado = 0')
				    ->setParameter('tipo', "matriculaIngreso")
				    ->addOrderBy('c.anio', 'DESC')
   					->addOrderBy('c.mes', 'DESC')
				    ->getQuery()
        		    ->getResult();
    }

    public function cuotasIngreso()
    {
        return $this->createQueryBuilder('c')
				    ->select('c')
				    ->where('c.tipo = :tipo')
				    ->AndWhere('c.borrado = 0')
				    ->setParameter('tipo', "matriculaIngreso")
				    ->addOrderBy('c.anio', 'DESC')
   					->addOrderBy('c.mes', 'DESC')
				    ->getQuery()
        		    ->getOneOrNullResult();
    }

    public function cuotasIngresoData($anio, $alumno)
    {
        return $this->createQueryBuilder('c')
		    ->select(array('c.mes', 'p.id as pago'))
		    ->leftJoin('c.pagos', 'p', 'WITH', 'p.alumno = :alumno')
		    ->where('c.anio = :anio')
		    ->AndWhere('c.borrado = 0')
		    ->AndWhere('c.tipo = :tipo')
		    ->setParameter('alumno', $alumno)
		    ->setParameter('anio', $anio)
		    ->setParameter('tipo', "matriculaIngreso")
		    ->getQuery()
		    ->getOneOrNullResult();
    }
}
