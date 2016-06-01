<?php

namespace Anexa\CooperadoraBundle\Entity;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
    * @var boolean
    * @ORM\Column(name="borrado", type="boolean")
    */
    protected $borrado = false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="habilitado", type="boolean")
     */
    protected $habilitado = True;

    /**
    * @ORM\OneToMany(targetEntity="Pago", mappedBy="user")
    *
    */
    protected $pagos;

    public function __construct(){
        parent::__construct();
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
     * Get pagos
     * @return Pago
     */
    public function getPagos()
    {
        return $this->pagos;
    }

    /**
     * Set habilitado
     *
     *
     * @return User
     */
    public function toogleHabilitado()
    {
        $this->habilitado = !$this->habilitado;

        return $this;
    }

    /**
     * Agrega un rol al user.
     * @throws Exception
     * @param string $rol
     */
    public function addRole( $rol )
    {
	     array_push($this->roles, $rol);
    }


    public function getRoles() {
        return $this->roles;
    }

    public function __toString(){
        return $this->getUserName();
    }


}
