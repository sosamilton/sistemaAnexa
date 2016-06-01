<?php

namespace Anexa\CooperadoraBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;



/**
* Responsable
* @ORM\Table()
* @ORM\Entity
*/

class Responsable {

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
    protected $borrado;

    /**
    * @var string
    * @ORM\Column (name="tipoDNI", type="string", length=255)
    */
    protected $tipoDNI;


    /**
    * @var integer
    * @ORM\Column (name="dni", type="integer")
    */
    protected $dni;


	/**
	* @var string
	* @ORM\Column (name="tipoResponsable", type="string", length=255)
	*/
	protected $tipoResponsable;


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
	* @ORM\Column (name="email", type="string", length=255)
	*/
	protected $email;


	/**
	* @var string
	* @ORM\Column (name="telefono", type="string")
	*/
	protected $telefono;


	/**
	* @var string
	* @ORM\Column (name="direccion", type="string", length=255)
	*/
	protected $direccion;

	/**
	* @ORM\ManyToMany(targetEntity="Alumno", mappedBy="responsables")
	*/
	protected $alumnos;


    /**
    * @ORM\OneToOne(targetEntity="User")
    * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
    */
    protected $user;

	public function __construct(){
		$this->alumnos = new ArrayCollection();
        $this->borrado = false;
	}

     public function __toString(){
        return $this->nombre.$this->apellido;
    }

/* ***************** GETTERS ************************* */

    /**
    * add alumno
    * @param Alumno $alumno
    * @return Alumno
    */
    public function addAlumnoACargo($alumno)
    {
        if (!$this->alumnos->contains($alumno)){
            $this->alumnos[] = $alumno;
        }
        return $this->getAlumnosACargo();
    }

    /**
    *remove alumno
    *@param Alumno $unAlu
    *@return ArrayCollection
    */
    public function removeAlumnoACargo($unAlu) {
        $this->alumnos->removeElement($unAlu);
        return $this->alumnos;
    }
    /**
    *actualizar alumnos
    *@param ArrayCollection $alumnos
    *@return ArrayCollection
    */
    public function updateAlumnos($alumnos) {
        $this->alumnos=$alumnos;
        return $this->alumnos;
    }

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
	* Get nombre
	*
	* @return string
	*/
	public function getNombre()
    {
        return $this->nombre;
    }


    /**
	* Get apellido
	*
	* @return string
	*/
	public function getApellido()
    {
        return $this->apellido;
    }


    /**
	* Get direccion
	*
	* @return string
	*/
	public function getDireccion()
    {
        return $this->direccion;
    }


    /**
	* Get email
	*
	* @return string
	*/
	public function getEmail()
    {
        return $this->email;
    }


    /**
	* Get fechaNacimiento
	*
	* @return string
	*/
	public function getFechaNacimiento()
    {
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
	* Get sexo
	*
	* @return string
	*/
	public function getSexo()
    {
        return $this->sexo;
    }


    /**
	* Get tipoResponsable
	*
	* @return string
	*/
	public function getTipoResponsable()
    {
        return $this->tipoResponsable;
    }

    /**
    * Get alumnos
    * @return arrayCollection
    */
    public function getAlumnos()
    {
        return $this->alumnos;
    }

    /**
    * Get user
    * @return User
    */
    public function getUsuario()
    {
        return $this->user;
    }



/* ***************   SETTERS    ******************* */

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
    * Set tipoResponsable
    *
    * @param  string $tipo
    * @return Responsable
    */
    public function setTipoResponsable($tipoResponsable) {
    	$this->tipoResponsable = $tipoResponsable;
    	return $this;
    }

    /**
    * Set apellido
    *
    * @param string $apellido
    * @return Responsable
    */
    public function setApellido($apellido) {
    	$this->apellido = $apellido;
    	return $this;
    }

     /**
    * Set nombre
    *
    * @param string $nombre
    * @return Responsable
    */
    public function setNombre($nombre) {
    	$this->nombre = $nombre;
    	return $this;
    }


     /**
    * Set email
    * @param string $email
    * @return Responsable
    */
    public function setEmail($email) {
    	$this->email = $email;
    	return $this;
    }


     /**
    * Set sexo
    * @param string $sexo
    * @return Responsable
    */
    public function setSexo($sexo) {
    	$this->sexo = $sexo;
    	return $this;
    }


     /**
    * Set telefono
    *
    * @param string $telefono
    * @return Responsable
    */
    public function setTelefono($telefono) {
    	$this->telefono = $telefono;
    	return $this;
    }


     /**
    * Set direccion
    *
    * @param string $direccion
    * @return Responsable
    */
    public function setDireccion($direccion) {
    	$this->direccion = $direccion;
    	return $this;
    }

     /**
    * Set fechaNacimiento
    *
    * @param string $fechaNacimiento
    * @return Responsable
    */
    public function setFechaNacimiento($fechaNac) {
    	$this->fechaNacimiento = $fechaNac;
    	return $this;
    }

    /**
    * set user
    * @param User $user
    * @return Responsable
    */
    public function setUsuario($user)
    {
        $this->user = $user;
        return $this;
    }

    /**
* Set alumnos
* @param ArrayCollection $alu
* @return Responsable
*/
public function setAlumnosACargo($alu) {
    $this->alumnos = $alu;
    return $this;
}

 /**
* Set alumnos
* @param ArrayCollection $alu
* @return Responsable
*/
public function setAlumnos($alu) {
    $this->alumnos = $alu;
    return $this;
}

/**
* Set alumnos
* @param boolean $valor
* @return Responsable
*/
public function setBorrado($valor) {
    $this->borrado = $valor;
    return $this;
}





}
