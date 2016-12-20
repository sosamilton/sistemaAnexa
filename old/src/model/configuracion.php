<?php

namespace Anexa\Model\Entity;
use Doctrine\ORM\Mapping;

/**
* Configuracion
*
*@Table()
*@Entity
*/
class Configuracion {
	/**
	* @var integer
	* @Id
	* @Column(name="clave", type="string", unique=true)
	* 
	*/
	protected $clave;

	/**
	* @var integer
	* @Column (name="valorNumerico", type="integer", nullable=true)
	*/
	protected $valorNumerico;

	/**
	* @var string
	* @Column (name="valorTextual", type="text", nullable=true)
	*/
	protected $valorTextual;

	/** ********************** GETTERS ********************************** */

	/** Get clave
	*return string
	*/
	public function getClave()
	{
		return $this->clave;
	}

	/** Get valorNumerico
	*return integer
	*/
	public function getValorNumerico()
	{
		return $this->valorNumerico;
	}

	/** Get valor textual
	*return string
	*/
	public function getValorTextual()
	{
		return $this->valorTextual;
	}

	/** ******************************* SETTERS ************************************* */

	/**
	*Set valorNumerico
	* @param integer $valor
	* @return Configuracion
	*/
	public function setValorNumerico($valor)
	{
		$this->valorNumerico = $valor;
		return $this;
	}

	/**
	*Set valortextual
	* @param string $valor
	* @return Configuracion
	*/
	public function setValorTextual($valor)
	{
		$this->valorTextual= $valor;
		return $this;
	}

	/**
	*Set clave
	* @param string $clave
	* @return Configuracion
	*/
	public function setClave($clave)
	{
		$this->clave= $clave;
		return $this;
	}

}


