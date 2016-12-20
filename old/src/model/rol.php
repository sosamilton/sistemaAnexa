<?php

namespace Anexa\Model\Entity;
use Doctrine\ORM\Mapping;
use Doctrine\Common\Collections\ArrayCollection;

/**
* Rol
* @Table()
* @Entity
*/

class Rol {

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
	* @var string
	* @Column (name="nombre", type="string", length=255)
	*/
	protected $nombre;

	/**
	* @OnetoMany(targetEntity="Usuario", mappedBy="rol_id")
	*/
	protected $usuarios;

	public function __construct(){
		$this->usuarios = new ArrayCollection();
	}


	/** **********************************   ********************************* */

	/**
	* Add usuario
	* @param Usuario $unUsuario
	* return arrayCollection
	*/
	public function addUsuario($unUsuario) {
		$this->usuarios[] = $unUsuario;
		return $this->getUsuarios();
	}

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


	/**
	* Get Usuarios
	* return ArrayCollection
	*/
	public function getUsuarios(){
		return $this->usuarios;
	}

	

	/** ********************** SETTERS ******************************** */

	/**
	*Set nombre
	* @param string @nombre
	* return Rol
	*/
	public function setNombre($nombre) {
		$this->nombre = $nombre;
		return $this;
	}

}