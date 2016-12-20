<?php

namespace Anexa\Model\Entity;
use Doctrine\ORM\Mapping;


/**
* Pago
* @Table()
* @Entity
*/

class Pago {

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
	* @var datetime
	* @Column (name="fecha", type="datetime")
	*/
	protected $fecha;


	/**
	* @var datetime
	* @Column (name="fechaAlta", type="datetime")
	*/
	protected $fechaAlta;


	/**
	* @var datetime
	* @Column (name="fechaActualizacion", type="datetime")
	*/
	protected $fechaActualizacion;

	/**
	* @ManyToOne(targetEntity="Alumno", inversedBy="pagos")
	* @JoinColumn(name="alumno_id", referencedColumnName="id")
	*/
	protected $alumno;

	/**
	* @ManyToOne(targetEntity="Usuario", inversedBy="pagos")
	* @JoinColumn(name="usuario_id", referencedColumnName="id")
	*/
	protected $usuario;


	/**
	* @ManyToOne(targetEntity="Cuota", inversedBy="pagos")
	* @JoinColumn(name="cuota_id", referencedColumnName="id")
	*/
	protected $cuota;

	/**
	* @var boolean
	* @Column(name="becado", type="boolean")
	*/
	protected $becado;

	

/** ************************ GETTERS ******************************** */


	/**
	* Get id
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
	* Get becado
	* @return boolean
	*/
	public function getBecado()
	{
		return $this->becado;
	}

	/**
	* toogle borrado
	* @return boolean
	*/
	public function toogle()
	{
		$this->borrado = false;
	}

	/**
	* Get fecha
	* @return datetime
	*/
	public function getFecha()
	{
		return $this->fecha;
	}

	/**
	* Get fechaAlta
	* @return datetime
	*/
	public function getFechaAlta()
	{
		return $this->fechaAlta;
	}

	/**
	* Get fechaActualizacion
	* @return datetime
	*/
	public function getFechaActualizacion()
	{
		return $this->fechaActualizacion;
	}

	/**
	* Get alumno
	* @return Alumno
	*/
	public function getAlumno()
	{
		return $this->alumno;
	}

	/**
	* Get usuario
	* @return Usuario
	*/
	public function getUsuario()
	{
		return $this->usuario;
	}

	/**
	* Get cuota
	* @return Cuota
	*/
	public function getCuota()
	{
		return $this->cuota;
	}


	/** ****************************** SETTERS ***********************************+ */

	/**
	* Set fecha
	* @param datetime $fecha
	* @return Pago
	*/
	public function setFecha($fecha)
	{
		$this->fecha = $fecha;
		return $this;
	}

	/**
	* Set fechaAlta
	* @param datetime $fecha
	* @return Pago
	*/
	public function setFechaAlta($fecha)
	{
		$this->fechaAlta = $fecha;
		return $this;
	}

	/**
	* Set fechaActualizacion
	* @param datetime $fecha
	* @return Pago
	*/
	public function setFechaActualizacion($fecha)
	{
		$this->fechaActualizacion = $fecha;
		return $this;
	}

	/**
	* Set cuota
	* @param integer $cuotaId
	* @return Pago
	*/
	public function setCuota($cuotaId)
	{
		$this->cuota = $cuotaId;
		return $this;
	}

	/** Set alumno
	* @param $alumno
	* @return Pago
	*/
	public function setAlumno($alumno)
	{
		$this->alumno = $alumno;
		return $this;
	}

	/** Set usuario
	* @param $usuario
	* @return Pago
	*/
	public function setUsuario($usuario)
	{
		$this->usuario = $usuario;
		return $this;
	}
	
	/** Set becado
	* @param boolean $becado
	* @return Pago
	*/
	public function setBecado($becado)
	{
		$this->becado = $becado;
		return $this;
	}


	/** Set borrado
	* @param boolean $borrado
	* @return Pago
	*/
	public function setBorrado($borrado)
	{
		$this->borrado = $borrado;
		return $this;
	}









}