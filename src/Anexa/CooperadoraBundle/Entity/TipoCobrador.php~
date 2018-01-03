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
    * @var boolean
    * @ORM\Column(name="borrado", type="boolean")
    */
    protected $borrado = false;

	/* ****************************** GETTERS ******************************* */

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