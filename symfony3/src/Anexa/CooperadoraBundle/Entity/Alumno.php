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
	* @var string
	* @ORM\Column (name="tipoDNI", type="string", length=255)
	*/
	protected $tipoDNI;


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
	* @ORM\Column (name="fechaNacimiento", type="string")
	*/
	protected $fechaNacimiento;


	/**
	* @var string
	* @ORM\Column (name="sexo", type="string", length=1)
	*/
	protected $sexo;

	/**
	* @var string
	* @ORM\Column (name="calle", type="string", length=255)
	*/
	protected $calle;

	/**
	* @var string
	* @ORM\Column (name="numero", type="string", length=255)
	*/
	protected $numero;

	/**
	* @var string
	* @ORM\Column (name="ciudad", type="string", length=255)
	*/
	protected $ciudad;

	/**
	* @var string
	* @ORM\Column (name="provincia", type="string", length=255)
	*/
	protected $provincia;

	/**
	* @var string
	* @ORM\Column (name="codigoPostal", type="string", length=255)
	*/
	protected $codigoPostal;

	/**
	* @var string
	* @ORM\Column (name="pais", type="string", length=255)
	*/
	protected $pais;

	/**
	* @var string
	* @ORM\Column (name="telefono", type="string", length=255)
	*/
	protected $telefono;

	/**
	* @var string
	* @ORM\Column (name="email", type="string", length=255)
	*/
	protected $email;


	/**
	* @var string
	* @ORM\Column (name="fechaIngreso", type="string")
	*/
	protected $fechaIngreso;


	/**
	* @var string
	* @ORM\Column (name="fechaEgreso", type="string", nullable=true)
	*/
	protected $fechaEgreso;

	/**
	* @var float
	* @ORM\Column (name="latitud", type="float", nullable=true)
	*/
	protected $latitud;

	/**
	* @var float
	* @ORM\Column (name="longitud", type="float", nullable=true)
	*/
	protected $longitud;


	/**
	* @var string
	* @ORM\Column (name="fechaAlta", type="string")
	*/
	protected $fechaAlta;


	/**
	* @ORM\ManyToMany(targetEntity="Responsable", inversedBy="alumnos")
	* @ORM\JoinTable(name="Responsables_Alumnos")
    */
    protected $responsables;


    /**
    * @ORM\OneToMany(targetEntity="Pago", mappedBy="alumno")
    */
    protected $pagos;

   	public function __construct(){
   		$this->responsables = new ArrayCollection();
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

	/**
	* Add responsable
	* @param Responsable $unResponsable
	* @return ArrayCollection
	*/
	public function addResponsable($unResponsable) {
		return $this->responsables[] = $unResponsable;
		return $this->responsables;
	}

	/**
	*remove responsable
	*@param Responsable $unRes
	*@return ArrayCollection
	*/
	public function removeResponsable($unRes) {
		$this->responsables->removeElement($unRes);
		return $this->responsables;
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
	* toogle borrado
	* @return model
	*/
	public function toogle()
	{
		return $this->borrado = true;
	}

	/**
	* Get tipoDNI
	* @return string
	*/

	public function getTipoDni() {
		return $this->tipoDNI;
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
	* Get latitud
	* @return float
	*/
	public function getLatitud() {
		return $this->latitud;
	}

	/**
	* Get longitud
	* @return float
	*/
	public function getLongitud() {
		return $this->longitud;
	}

	/**
	* Get fechaNacimiento
	* @return string
	*/
	public function getFechaNacimiento() {
		return $this->fechaNacimiento;
	}

	/**
	* Get sexo
	* @return string
	*/
	public function getSexo() {
		return $this->sexo;
	}

	/**
	* Get calle
	* @return string
	*/
	public function getCalle() {
		return $this->calle;
	}

	/**
	* Get numero
	* @return string
	*/
	public function getNumero() {
		return $this->numero;
	}

	/**
	* Get codigoPostal
	* @return string
	*/
	public function getCodigoPostal() {
		return $this->codigoPostal;
	}

	/**
	* Get ciudad
	* @return string
	*/
	public function getCiudad() {
		return $this->ciudad;
	}

	/**
	* Get provincia
	* @return string
	*/
	public function getProvincia() {
		return $this->provincia;
	}

	/**
	* Get pais
	* @return string
	*/
	public function getPais() {
		return $this->pais;
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
	* Get fechaIngreso
	* @return string
	*/
	public function getFechaIngreso() {
		return $this->fechaIngreso;
	}

	/**
	* Get fechaEgreso
	* @return string
	*/
	public function getFechaEgreso() {
		return $this->fechaEgreso;
	}

	/**
	* Get fechaAlta
	* @return string
	*/
	public function getFechaAlta() {
		return $this->fechaAlta;
	}


	/**
	* Get Responsables
	* @return ArrayCollection
	*/
	public function getResponsables(){
		return $this->responsables;
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
* Set Dni
* @param integer $dni
* @return Alumno
*/
public function setDni($dni) {
	$this->dni = $dni;
	return $this;
}


/**
* Set tipoDni
* @param string $tipoDni
* @return Alumno
*/
public function setTipoDni($tipoDni) {
	$this->tipoDNI = $tipoDni;
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
* Set sexo
* @param string $sexo
* @return Alumno
*/
public function setSexo($sexo) {
	$this->sexo = $sexo;
	return $this;
}

/**
* Set calle
* @param string $calle
* @return Alumno
*/
public function setCalle($calle) {
	$this->calle = $calle;
	return $this;
}


/**
* Set numero
* @param string $numero
* @return Alumno
*/
public function setNumero($numero) {
	$this->numero = $numero;
	return $this;
}


/**
* Set codigoPostal
* @param string $codigoPostal
* @return Alumno
*/
public function setCodigoPostal($codigoPostal) {
	$this->codigoPostal = $codigoPostal;
	return $this;
}


/**
* Set ciudad
* @param string $ciudad
* @return Alumno
*/
public function setCiudad($ciudad) {
	$this->ciudad = $ciudad;
	return $this;
}


/**
* Set provincia
* @param string $provincia
* @return Alumno
*/
public function setProvincia($provincia) {
	$this->provincia = $provincia;
	return $this;
}


/**
* Set pais
* @param string $pais
* @return Alumno
*/
public function setPais($pais) {
	$this->pais = $pais;
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
* Set fechaIngreso
* @param string $fechaIngreso
* @return Alumno
*/

public function setFechaIngreso($fechaIngreso) {
	$this->fechaIngreso = $fechaIngreso;
	return $this;
}

/**
* Set fechaEgreso
* @param string $fechaEgreso
* @return Alumno
*/

public function setFechaEgreso($fechaEgreso) {
	$this->fechaEgreso = $fechaEgreso;
	return $this;
}


/**
* Set fechaAlta
* @param string $fechaAlta
* @return Alumno
*/
public function setFechaAlta($fechaAlta) {
	$this->fechaAlta = $fechaAlta;
	return $this;
}

/**
* Set responsables
* @param ArrayCollection $res
* @return Alumno
*/
public function setResponsables($res) {
	if (!$this->responsables->contains($res)) {
		$this->responsables[] = $res;
	}
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
* Set latitud
* @param float $latitud
* @return Alumno
*/
public function setLatitud($latitud) {
	$this->latitud = $latitud;
	return $this;
}

/**
* Set longitud
* @param float $longitud
* @return Alumno
*/
public function setLongitud($longitud) {
	$this->longitud = $longitud;
	return $this;
}





}
