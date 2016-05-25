<?php

namespace Anexa\CooperadoraBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
* Configuracion
*
*@ORM\Table(name="Configuracion")
*@ORM\Entity(repositoryClass="Anexa\CooperadoraBundle\Repository\ConfiguracionRepository")
*/
class Configuracion {
	/**
	* @var integer
	* @ORM\Id
	* @ORM\Column(name="clave", type="string", unique=true)
	*
	*/
	protected $clave;

	/**
	* @var integer
	* @ORM\Column (name="valorNumerico", type="integer", nullable=true)
	*/
	protected $valorNumerico;

	/**
	* @var string
	* @ORM\Column (name="valorTextual", type="text", nullable=true)
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
