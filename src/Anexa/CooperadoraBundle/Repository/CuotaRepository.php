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
				    ->setParameter('tipo', "matricula")
				    ->getQuery()
        		    ->getResult();
    }
    public function cuotasActivasAlumno()
    {
        return $this->createQueryBuilder('c')
				    ->select('c')
				    ->where('c.tipo <> :tipo')
				    ->AndWhere('c.borrado = 0')
				    ->setParameter('tipo', "matricula")
				    ->addOrderBy('c.anio', 'DESC')
   					->addOrderBy('c.id', 'ASC')
				    ->getQuery()
        		    ->getResult();
    }

    public function cuotasIngreso($anio)
    {
        return $this->createQueryBuilder('c')
				    ->select('c')
				    ->where('c.tipo = :tipo')
				    ->AndWhere('c.borrado = 0')
						->AndWhere('c.anio = :anio')
				    ->setParameter('tipo', "matricula")
						->setParameter('anio', $anio)
						->addOrderBy('c.anio', 'DESC')
						->addOrderBy('c.id', 'ASC')
				    ->getQuery()
						->setMaxResults(1)
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
		    ->setParameter('tipo', "matricula")
				->addOrderBy('c.anio', 'DESC')
				->addOrderBy('c.id', 'ASC')
		    ->getQuery()
		    ->getOneOrNullResult();
    }
}
