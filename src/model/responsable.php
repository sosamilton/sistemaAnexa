<?php

namespace Anexa\Model\Entity;
use Doctrine\ORM\Mapping;
use Doctrine\Common\Collections\ArrayCollection;



/**
* Responsable
* @Table()
* @Entity  
*/

class Responsable {

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
    protected $borrado;

    /**
    * @var string
    * @Column (name="tipoDNI", type="string", length=255)
    */
    protected $tipoDNI;


    /**
    * @var integer
    * @Column (name="dni", type="integer")
    */
    protected $dni;


	/**
	* @var string
	* @Column (name="tipoResponsable", type="string", length=255)
	*/
	protected $tipoResponsable;


	/**
	* @var string
	* @Column (name="apellido", type="string", length=255)
	*/
	protected $apellido;


    /**
    * @var string
	* @Column (name="nombre", type="string", length=255)
	*/
	protected $nombre;

	/**
	* @var date
	* @Column (name="fechaNacimiento")
	*/
	protected $fechaNacimiento;


	/**
	* @var string
	* @Column (name="sexo", type="string", length=1)
	*/
	protected $sexo;


	/**
	* @var string
	* @Column (name="email", type="string", length=255)
	*/
	protected $email;


	/**
	* @var string
	* @Column (name="telefono", type="string")
	*/
	protected $telefono;


	/**
	* @var string
	* @Column (name="direccion", type="string", length=255)
	*/
	protected $direccion;

	/**
	* @ManyToMany(targetEntity="Alumno", mappedBy="responsables")
	*/
	protected $alumnos;


    /**
    * @OneToOne(targetEntity="Usuario")
    * @JoinColumn(name="usuario_id", referencedColumnName="id")
    */
    protected $usuario;

	public function __construct(){
		$this->alumnos = new ArrayCollection();
        $this->borrado = false;
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
    * @return Responsable
    */
    public function toogle()
    {
        $this->borrado = false;
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
	* @return date
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
    public function getAlumnosACargo()
    {
        return $this->alumnos;
    }

    /** 
    * Get usuario
    * @return Usuario
    */
    public function getUsuario()
    {
        return $this->usuario;
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
    * @param date $fechaNacimiento
    * @return Responsable
    */
    public function setFechaNacimiento($fechaNac) {
    	$this->fechaNacimiento = $fechaNac;
    	return $this;
    }

    /** 
    * set usuario
    * @param Usuario $user
    * @return Responsable
    */
    public function setUsuario($user)
    {
        $this->usuario = $user;
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





}
