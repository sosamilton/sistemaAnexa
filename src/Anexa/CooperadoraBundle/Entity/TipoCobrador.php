<?php

namespace Anexa\CooperadoraBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;



/**
* TipoCobrador
* @ORM\Table()
* @ORM\Entity()
*/

class TipoCobrador {

	/**
	* @var integer
	* @ORM\Column(name="id", type="integer")
	* @ORM\Id
	* @ORM\GeneratedValue (strategy="AUTO")
	*/
	protected $id;

	/**
	* @var denominacion
	* @ORM\Column(name="denominacion", type="string", length=255)
	*/
	protected $denominacion;

	/**
	* @var decimal
	* @ORM\Column(name="comision", type="decimal")
	*/
	protected $comision;

    /**
    * @var montoMinimo
    * @ORM\Column(name="montoMinimo", type="decimal")
    */
    protected $montoMinimo;


    /**
    * @var boolean
    * @ORM\Column(name="borrado", type="boolean")
    */
    protected $borrado = false;

    /**
     * @ORM\OneToMany(targetEntity="User", mappedBy="tipoCobrador")
     */

    protected $users;

    public function __construct(){
        $this->users = new ArrayCollection();
    }

	/* ****************************** GETTERS ******************************* */

    /**
    * Add user
    * @param User $unUser
    * @return ArrayCollection
    */
    public function addUser($unUser) {
        $this->users[] = $unUser;
        return $this->getUsers();
    }

    /**
    *remove user
    *@param User $unUser
    *@return ArrayCollection
    */
    public function removeUser($unUser) {
        $this->users->removeElement($unUser);
        return $this->users;
    }

    public function __toString(){
        return (string)$this->id;
    }

	/**
	* Get id
	* @return integer
	*/

	public function getId(){
		return $this->id;
	}


    /**
    * Get denominacion
    * @return string
    */
	public function getDenominacion(){
		return $this->denominacion;
	}

	/**
    * Get comision
    * @return decimal
    */

    public function getComision(){
    	return $this->comision;
    }

    /**
    * Get montoMinimo
    * @return decimal
    */

    public function getMontoMinimo(){
        return $this->montoMinimo;
    }

    /**
    * Get borrado
    * @return boolean
    */
    public function getBorrado()
    {
        return $this->borrado;
    }


    /* ************************************* SETTERS ****************************** */

    /**
    * Set denominacion
    * @param string $denominacion
    * @return TipoCobrador
    */
    public function setDenominacion($den)
    {
    	$this->denominacion = $den;
    	return $this;
    }

    /**
    * Set comision
    * @param decimal $comision
    * @return TipoCobrador
    */
    public function setComision($comision){
    	$this->comision = $comision;
    	return $this;
    }

    /**
    * Set montoMinimo
    * @param decimal $monto
    * @return TipoCobrador
    */
    public function setMontoMinimo($monto){
        $this->montoMinimo = $monto;
        return $this;
    }

    /**
    *Set borrado
    * @param boolean $borrado
    * @return TipoCobrador
    */
    public function setBorrado($borrado)
    {
        $this->borrado = $borrado;
        return $this;
    }
}
