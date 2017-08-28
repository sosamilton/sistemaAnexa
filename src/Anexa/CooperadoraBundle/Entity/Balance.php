<?php

namespace Anexa\CooperadoraBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
* Balance
* @ORM\Table()
* @ORM\Entity()
*/

class Balance {

	/**
	* @var integer
	* @ORM\Column(name="id", type="integer")
	* @ORM\Id
	* @ORM\GeneratedValue (strategy="AUTO")
	*/
	protected $id;

	/**
	* @var string
	* @ORM\Column (name="fechaDesde", type="string")
	*/
	protected $fechaDesde;

	/**
	* @var string
	* @ORM\Column (name="fechaHasta", type="string")
	*/
	protected $fechaHasta;

	/**
	* @ORM\ManyToOne(targetEntity="User", inversedBy="balances")
	* @ORM\JoinColumn(name="blance_cobrador", referencedColumnName="id")
	*/
	protected $cobrador;

	/**
    * @ORM\OneToMany(targetEntity="Pago", mappedBy="balance")
    *
    */
    protected $pagos;
	
	/**
	* @var decimal
	* @ORM\Column(name="total", type="decimal")
	*/
	protected $total;

    /**
    * @var decimal
    * @ORM\Column(name="totalComision", type="decimal")
    */
    protected $totalComision;

	public function __construct(){
		$this->pagos = new ArrayCollection();
	}

	/* *********************************************************** */

	public function __toString(){
        return (string)$this->id;
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
     * Set fechaDesde
     *
     * @param string $fechaDesde
     *
     * @return Balance
     */
    public function setFechaDesde($fechaDesde)
    {
        $this->fechaDesde = $fechaDesde;

        return $this;
    }

    /**
     * Get fechaDesde
     *
     * @return string
     */
    public function getFechaDesde()
    {
        return $this->fechaDesde;
    }

    /**
     * Set fechaHasta
     *
     * @param string $fechaHasta
     *
     * @return Balance
     */
    public function setFechaHasta($fechaHasta)
    {
        $this->fechaHasta = $fechaHasta;

        return $this;
    }

    /**
     * Get fechaHasta
     *
     * @return string
     */
    public function getFechaHasta()
    {
        return $this->fechaHasta;
    }

    /**
     * Set total
     *
     * @param string $total
     *
     * @return Balance
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Get total
     *
     * @return string
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Set cobrador
     *
     * @param \Anexa\CooperadoraBundle\Entity\User $cobrador
     *
     * @return Balance
     */
    public function setCobrador(\Anexa\CooperadoraBundle\Entity\User $cobrador = null)
    {
        $this->cobrador = $cobrador;

        return $this;
    }

    /**
     * Get cobrador
     *
     * @return \Anexa\CooperadoraBundle\Entity\User
     */
    public function getCobrador()
    {
        return $this->cobrador;
    }

    /**
     * Add pago
     *
     * @param \Anexa\CooperadoraBundle\Entity\Pago $pago
     *
     * @return Balance
     */
    public function addPago(\Anexa\CooperadoraBundle\Entity\Pago $pago)
    {
        $this->pagos[] = $pago;

        return $this;
    }

    /**
     * Remove pago
     *
     * @param \Anexa\CooperadoraBundle\Entity\Pago $pago
     */
    public function removePago(\Anexa\CooperadoraBundle\Entity\Pago $pago)
    {
        $this->pagos->removeElement($pago);
    }

    /**
     * Get pagos
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPagos()
    {
        return $this->pagos;
    }
}
