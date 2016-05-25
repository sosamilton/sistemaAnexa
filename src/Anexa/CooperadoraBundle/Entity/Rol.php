<?php

namespace Anexa\CooperadoraBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
* Rol
* @ORM\Table()
* @ORM\Entity
*/

class Rol {

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
	* @var string
	* @ORM\Column (name="nombre", type="string", length=255)
	*/
	protected $nombre;


	public function __construct(){
		$this->users = new ArrayCollection();
	}


	/** **********************************   ********************************* */



	/**
	* toString
	* @return string
	*/
	public function __toString() {
            return $this->nombre;
    }

/** ****************************** GETTERS ****************************** */

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
	* Get nombre
	* @return string
	*/
	public function getNombre() {
		return $this->nombre;
	}

	/**
	* toogle borrado
	* @return Rol
	*/
	public function toogle()
	{
		$this->borrado = false;
	}




	/** ********************** SETTERS ******************************** */

	/**
	*Set nombre
	* @param string @ORM\nombre
	* return Rol
	*/
	public function setNombre($nombre) {
		$this->nombre = $nombre;
		return $this;
	}

}
