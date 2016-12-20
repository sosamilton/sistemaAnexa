<?php

namespace Anexa\Model\Entity;
use Doctrine\ORM\Mapping;
use Doctrine\Common\Collections\ArrayCollection;

/**
* Usuario
*
*@Table()
*@Entity
*/
class Usuario {

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
     *
     * @Column(name="username", type="string", length=255, unique=true)
     */
    protected $username;

    /**
     * @var string
     *
     * @Column(name="password", type="string", length=255)
     */
    protected $password;

    /**
     * @var boolean
     *
     * @Column(name="habilitado", type="boolean")
     */
    protected $habilitado = True;

    /** 
    * @ManyToOne(targetEntity="Rol", inversedBy="usuarios")
    * @JoinColumn(name="rol", referencedColumnName="id", nullable=false)
    */
      protected $rol;

    /**
    * @OneToMany(targetEntity="Pago", mappedBy="usuario")
    *
    */
    protected $pagos;
   
    public function __construct(){
        $this->habilitado = true;
        $this->borrado = false;
        $this->pagos = new ArrayCollection();
        }

/* ******************************* */

    /**
    * Add pago
    * @param Pago $unPago
    * @return ArrayCollection
    */
    public function addPago($unPago) {
        $this->pagos[] = $unPago;
        return $this->getPagos();
    }        
    
/* ***************** GETTERS ************************* */

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
    * @return model
    */
    public function borrar()
    {
        $this->borrado = true;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }


    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }


    /**
     * Get habilitado
     * 
     * @return boolean
     */
    public function getHabilitado()
    {
        return $this->habilitado;
    }


    /**
     * Get rol
     *
     * @return Rol
     */
    public function getRol()
    {
        return $this->rol;
    }

    /**
     * Get pagos
     * @return Pago
     */
    public function getPagos()
    {
        return $this->pagos;
    }


/* ***************   SETTERS    ********************/


   /**
     * Set username
     *
     * @param string $username
     * @return Usuario
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }


    /**
     * Set password
     *
     * @param string $password
     * @return Usuario
     */
    public function setPassword($pass)
    {
        $this->password = md5($pass);
        return $this;
    }

    /**
     * Set habilitado
     *
     * 
     * @return Usuario
     */
    public function toogleHabilitado()
    {
        $this->habilitado = !$this->habilitado;

        return $this;
    }

    /**
     * Set rol
     *
     * @param Anexa\Model\Entity\Rol
     * @return Usuario
     */
    public function setRol($rol)
    {   
        $this->rol=$rol;
        return $this;
    }


}



