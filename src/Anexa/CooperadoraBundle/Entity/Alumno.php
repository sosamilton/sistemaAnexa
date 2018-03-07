<?php

namespace Anexa\CooperadoraBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;



/**
* Alumno
* @ORM\Table()
* @ORM\Entity()
*/

class Alumno {

	/**
	* @var integer
	* @ORM\Column(name="id", type="integer")
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
	* @ORM\Column(name="anioIngreso", type="integer")
	*/
	protected $anioIngreso;


	/**
	* @var decimal
	* @ORM\Column(name="saldoFavor", type="decimal")
	*/
	protected $saldoFavor;

	/**
	* @var boolean
	* @ORM\Column(name="nuevo", type="boolean")
	*/
	protected $nuevo = false;


	/**
	* @var integer
	* @ORM\Column (name="dni", type="integer", unique=true)
	*/
	protected $dni;


	/**
	* @var string
	* @ORM\Column (name="apellido", type="string", length=255)
	*/
	protected $apellido;


    /**
    * @var string
	* @ORM\Column (name="nombre", type="string", length=255)
	*/
	protected $nombre;

	/**
	* @var string
	* @ORM\Column (name="fechaNacimiento", type="string", nullable=true)
	*/
	protected $fechaNacimiento;

	/**
	* @var string
	* @ORM\Column (name="telefono", type="string", length=255, nullable=true)
	*/
	protected $telefono;

	/**
	* @var string
	* @ORM\Column (name="direccion", type="string", length=255, nullable=true)
	*/
	protected $direccion;

	/**
	* @var string
	* @ORM\Column (name="email", type="string", length=255, nullable=true)
	*/
	protected $email;

	/**
	* @var string
	* @ORM\Column (name="contacto", type="text", nullable=true)
	*/
	protected $contacto;


	/**
	* @var string
	* @ORM\Column (name="comentario", type="text", nullable=true)
	*/
	protected $comentario;

	/**
	* @var string
	* @ORM\Column (name="nivel", type="string", length=255, nullable=true)
	*/
	protected $nivel;

	/**
	* @var integer
	* @ORM\Column (name="curso", type="integer", nullable=true)
	*/
	protected $curso;

	/**
	* @var string
	* @ORM\Column (name="division", type="string", length=1, nullable=true)
	*/
	protected $division;

  /**
  * @ORM\OneToMany(targetEntity="Pago", mappedBy="alumno")
  */
  protected $pagos;

 	public function __construct(){
 		$this->pagos = new ArrayCollection();
 	}

 	public function __toString(){
 		return $this->nombre.$this->apellido;
 	}

/** **********************************   ********************************* */

	/**
	* Add pago
	* @param Pago $unPago
	* @return ArrayCollection
	*/
	public function addPago($unPago) {
		$this->pagos[] = $unPago;
		return $this->getPagos();
	}

	/**
	*remove pago
	*@param Pago $unPago
	*@return ArrayCollection
	*/
	public function removePago($unPago) {
		$this->pagos->removeElement($unPago);
		return $this->pagos;
	}


/** ************************** GETTERS ***************************** */

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
	* Get nuevo
	* @return boolean
	*/
	public function getNuevo()
	{
		return $this->nuevo;
	}

	/**
	* Get anioIngreso
	* @return integer
	*/
	public function getAnioIngreso()
	{
		return $this->anioIngreso;
	}

	/**
	* Get saldoFavor
	* @return decimal
	*/
	public function getSaldoFavor()
	{
		return $this->saldoFavor;
	}


	/**
	* Get DNI
	* @return integer
	*/
	public function getDni() {
		return $this->dni;
	}


	/**
	* Get apellido
	* @return string
	*/

	public function getApellido() {
		return $this->apellido;
	}

	/**
	* Get nombre
	* @return string
	*/
	public function getNombre() {
		return $this->nombre;
	}

	/**
	* Get fechaNacimiento
	* @return string
	*/
	public function getFechaNacimiento() {
		return $this->fechaNacimiento;
	}

	 /**
    * Get telefono
    *
    * @return string
    */
    public function getTelefono()
    {
        return $this->telefono;
    }


	/**
	* Get email
	* @return string
	*/
	public function getEmail() {
		return $this->email;
	}

	/**
	* Get contacto
	* @return string
	*/
	public function getContacto() {
		return $this->contacto;
	}

	/**
	* Get comentario
	* @return string
	*/
	public function getComentario() {
		return $this->comentario;
	}

	/**
	* Get nivel
	* @return string
	*/
	public function getNivel() {
		return $this->nivel;
	}

	/**
	* Get curso
	* @return integer
	*/
	public function getCurso() {
		return $this->curso;
	}

	/**
	* Get division
	* @return string
	*/
	public function getDivision() {
		return $this->division;
	}

	/**
	* Get direccion
	* @return string
	*/
	public function getDireccion() {
		return $this->direccion;
	}

	/**
	* Get Pagos
	* @return ArrayCollection
	*/
	public function getPagos(){
		return $this->pagos;
	}

/** **************************  SETTERS  ********************************** */

/**
* Set Borrado
* @param boolean $borrado
* @return Alumno
*/
public function setBorrado($borrado) {
	$this->borrado = $borrado;
	return $this;
}


/**
* Set Nuevo
* @param boolean $nuevo
* @return Alumno
*/
public function setNuevo($nuevo) {
	$this->nuevo = $nuevo;
	return $this;
}

/**
* Set Dni
* @param integer $dni
* @return Alumno
*/
public function setDni($dni) {
	$this->dni = $dni;
	return $this;
}

/**
* Set anioIngreso
* @param integer $anio
* @return Alumno
*/
public function setAnioIngreso($anio) {
	$this->anioIngreso = $anio;
	return $this;
}

/**
* Set saldoFavor
* @param decimal $saldo
* @return Alumno
*/
public function setSaldoFavor($saldo) {
	$this->saldoFavor = $saldo;
	return $this;
}

/**
* Set Apellido
* @param string $apellido
* @return Alumno
*/
public function setApellido($apellido) {
	$this->apellido = $apellido;
	return $this;
}

/**
* Set nombre
* @param string $nombre
* @return Alumno
*/

public function setNombre($nombre) {
	$this->nombre = $nombre;
	return $this;
}

/**
* Set fechaNacimiento
* @param string $fechaNacimiento
* @return Alumno
*/
public function setFechaNacimiento($fechaNacimiento) {
	$this->fechaNacimiento = $fechaNacimiento;
	return $this;
}

/**
    * Set telefono
    *
    * @param string $telefono
    * @return User
    */
    public function setTelefono($telefono) {
        $this->telefono = $telefono;
        return $this;
    }

/**
* Set email
* @param string $email
* @return Alumno
*/
public function setEmail($email) {
	$this->email = $email;
	return $this;
}

/**
* Set contacto
* @param string $contacto
* @return Alumno
*/
public function setContacto($contacto) {
	$this->contacto = $contacto;
	return $this;
}

/**
* Set comentario
* @param string $comentario
* @return Alumno
*/
public function setComentario($comentario) {
	$this->comentario = $comentario;
	return $this;
}

/**
* Set nivel
* @param string $nivel
* @return Alumno
*/
public function setNivel($nivel) {
	$this->nivel = $nivel;
	return $this;
}

/**
* Set curso
* @param string $curso
* @return Alumno
*/
public function setCurso($curso) {
	$this->curso = $curso;
	return $this;
}

/**
* Set division
* @param string $division
* @return Alumno
*/
public function setDivision($division) {
	$this->division = $division;
	return $this;
}

/**
* Set direccion
* @param string $direccion
* @return Alumno
*/
public function setDireccion($direccion) {
	$this->direccion = $direccion;
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


}
