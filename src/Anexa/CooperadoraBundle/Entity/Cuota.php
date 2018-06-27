<?php

namespace Anexa\CooperadoraBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;



/**
* Cuota
* @ORM\Table()
* @ORM\Entity(repositoryClass="Anexa\CooperadoraBundle\Repository\CuotaRepository")
*/

class Cuota {

	/**
	* @var integer
	* @ORM\Column (name="id", type="integer")
	* @ORM\Id
	* @ORM\GeneratedValue (strategy="AUTO")
	*/
	protected $id;

	/**
	* @var boolean
	* @ORM\Column(name="borrado", type="boolean")
	*/
	protected $borrado = false;



	/**
	* @var integer
	* @ORM\Column(name="anio", type="integer")
	*/
	protected $anio;


	/*
	* @var integer
	* @ORM\Column(name="orden", type="integer")

	protected $orden; */


    /**
    * @var string
    * @ORM\Column (name="mes", type="string", length=255)
    */
    protected $mes;


	/**
	* @var decimal
	* @ORM\Column(name="monto", type="decimal")
	*/
	protected $monto;


	/**
	* @var string
	* @ORM\Column (name="tipo", type="string", length=255)
	*/
	protected $tipo;

	/**
	* @ORM\OneToMany (targetEntity="Pago", mappedBy="cuota")
	*/
	protected $pagos;

	public function __construct(){
		$this->pagos = new ArrayCollection();
	}

    /** ************************************************* */
    public function __toString(){
        return (string)$this->id;
    }
    /**
    * Add pago
    *
    * @param Pago $pago
    * @return ArrayCollection
    */
    public function addPago($pago)
    {
        $this->pagos[] = $pago;
        return $this->pagos;
    }

    /**
    * Remove pago
    *@param Pago $pago
    *@return ArrayCollection
    */
    public function removePago($pago)
    {
        $this->pagos->removeElement($pago);
        return $this->pagos;
    }


	/* *********************** GETTERS *********************** */

	/**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
	* Get borrado
	* @return boolean
	*/
	public function getBorrado()
	{
		return $this->borrado;
	}

    /**
    * Get anio
    * @return integer
    */
    public function getAnio()
    {
    	return $this->anio;
    }

    /**
    * Get mes
    * @return string
    */
    public function getMes()
    {
    	return $this->mes;
    }

    /*
    *Get orden
    * @return integer

    public function getOrden()
    {
    	return $this->orden;
    } */

    /**
    *Get monto
    * @return decimal
    */
    public function getMonto()
    {
    	return $this->monto;
    }


    /**
    *Get pagos
    * @return ArrayCollection()
    */
    public function getPagos()
    {
    	return $this->pagos;
    }


    /**
    *Get tipo
    * @return string
    */
    public function getTipo()
    {
        return $this->tipo;
    }



	/* *********************** SETTERS *********************** */
	/**
    * Set Anio
    * @param integer $anio
    * @return Cuota
    */
    public function setAnio($anio)
    {
    	$this->anio = $anio;
    	return $this;
    }

    /**
    * Set mes
    * @param string $mes
    * @return Cuota
    */
    public function setMes($mes)
    {
    	$this->mes = $mes;
    	return $this;
    }

    /*
    *Set orden
    * @param $orden
    * @return Cuota
    *
    public function setOrden($orden)
    {
    	$this->orden = $orden;
    	return $this;
    } */

    /**
    *set monto
    * @param decimal $monto
    * @return Cuota
    */
    public function setMonto($monto)
    {
    	$this->monto = $monto;
    	return $this;
    }

    /**
    * Set pagos
    * @param ArrayCollection $pagos
    * @return Alumno
    */
    public function setPagos($pagos) {
        $this->pagos = $pagos;
    return $this;
    }

     /**
    *Set tipo
    * @param string $tipo
    * @return Cuota
    */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
        return $this;
    }

    /**
    *Set borrado
    * @param boolean $borrado
    * @return Cuota
    */
    public function setBorrado($borrado)
    {
        $this->borrado = $borrado;
        return $this;
    }

}
