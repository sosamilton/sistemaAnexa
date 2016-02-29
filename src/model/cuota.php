<?php
namespace Anexa\Model\Entity;
use Doctrine\ORM\Mapping;
use Doctrine\Common\Collections\ArrayCollection;



/**
* Cuota
* @Table()
* @Entity
*/

class Cuota {

	/**
	* @var integer
	* @Column (name="id", type="integer")
	* @Id
	* @GeneratedValue (strategy="AUTO")
	*/
	protected $id;

	/**
	* @var boolean
	* @Column(name="borrado", type="boolean")
	*/
	protected $borrado = false;



	/**
	* @var integer
	* @Column(name="anio", type="integer")
	*/
	protected $anio;


	/**
	* @var integer
	* @Column(name="mes", type="integer")
	*/
	protected $mes;


	/**
	* @var integer
	* @Column(name="numero", type="integer")
	*/
	protected $numero;


	/**
	* @var decimal
	* @Column(name="monto", type="decimal")
	*/
	protected $monto;


	/**
	* @var string
	* @Column (name="tipoCuota", type="string", length=255)
	*/
	protected $tipo;


	/**
	* @var decimal
	* @Column(name="comisionCobrador", type="decimal")
	*/
	protected $comisionCobrador;


	/**
	* @var datetime
	* @Column (name="fechaAlta", type="datetime")
	*/
	protected $fechaAlta;

	/**
	* @OneToMany (targetEntity="Pago", mappedBy="cuota")
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

    /*
    /**
    *cmp
    * @param Cuota $a Cuota $b
    *@return boolean

    public function cmp($a, $b) {
        if ($a->getAnio() > $b->getAnio()){
            return true;
        } elseif ($a->getAnio() == $b->getAnio()) {
            if ($a->getMes() > $b->getMes()) {
                return true;
            } else {
                return false;
                }
         }
      return false;
    }
    */




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
	* toogle borrado
	* @return Cuota
	*/
	public function toogle()
	{
		$this->borrado = false;
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
    * @return integer
    */
    public function getMes()
    {
    	return $this->mes;
    }

    /**
    *Get numero
    * @return integer
    */
    public function getNumero()
    {
    	return $this->numero;
    }

    /**
    *Get monto
    * @return decimal
    */
    public function getMonto()
    {
    	return $this->monto;
    }


    /**
    *Get comisionCobrador
    * @return decimal
    */
    public function getComisionCobrador()
    {
    	return $this->comisionCobrador;
    }

    /**
    *Get fechaAlta
    * @return datetime
    */
    public function getFechaAlta()
    {
    	return $this->fechaAlta;
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
    * Set anio
    * @param integer @anio
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

    /**
    *Set numero
    * @param $nro
    * @return Cuota
    */
    public function setNumero($nro)
    {
    	$this->numero = $nro;
    	return $this;
    }

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
    *Set comisionCobrador
    * @param decimal $comision
    * @return Cuota
    */
    public function setComisionCobrador($comision)
    {
    	$this->comisionCobrador = $comision;
    	return $this;
    }

    /**
    *Set fechaAlta
    * @param datetime $fecha
    * @return Cuota
    */
    public function setFechaAlta($fecha)
    {
    	$this->fechaAlta = $fecha;
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

}
