<?php

namespace Api\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tblcustomerterms
 *
 * @ORM\Table(name="tblCustomerTerms", indexes={@ORM\Index(name="fk_tblCustomerTerms_tblPaymentTerms1_idx", columns={"intPaymentTermID"}), @ORM\Index(name="fk_tblCustomerTerms_tblCustomers1_idx", columns={"intCustomerID"})})
 * @ORM\Entity
 */
class Tblcustomerterms
{
    /**
     * @var integer
     *
     * @ORM\Column(name="intCustomerTermID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $intcustomertermid;

    /**
     * @var \Api\Entity\Tblpaymentterms
     *
     * @ORM\ManyToOne(targetEntity="Api\Entity\Tblpaymentterms")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="intPaymentTermID", referencedColumnName="intPaymentTermID")
     * })
     */
    private $intpaymenttermid;

    /**
     * @var \Api\Entity\Tblcustomers
     *
     * @ORM\ManyToOne(targetEntity="Api\Entity\Tblcustomers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="intCustomerID", referencedColumnName="intCustomerID")
     * })
     */
    private $intcustomerid;



    /**
     * Get intcustomertermid
     *
     * @return integer 
     */
    public function getIntcustomertermid()
    {
        return $this->intcustomertermid;
    }

    /**
     * Set intpaymenttermid
     *
     * @param \Api\Entity\Tblpaymentterms $intpaymenttermid
     * @return Tblcustomerterms
     */
    public function setIntpaymenttermid(\Api\Entity\Tblpaymentterms $intpaymenttermid = null)
    {
        $this->intpaymenttermid = $intpaymenttermid;

        return $this;
    }

    /**
     * Get intpaymenttermid
     *
     * @return \Api\Entity\Tblpaymentterms 
     */
    public function getIntpaymenttermid()
    {
        return $this->intpaymenttermid;
    }

    /**
     * Set intcustomerid
     *
     * @param \Api\Entity\Tblcustomers $intcustomerid
     * @return Tblcustomerterms
     */
    public function setIntcustomerid(\Api\Entity\Tblcustomers $intcustomerid = null)
    {
        $this->intcustomerid = $intcustomerid;

        return $this;
    }

    /**
     * Get intcustomerid
     *
     * @return \Api\Entity\Tblcustomers 
     */
    public function getIntcustomerid()
    {
        return $this->intcustomerid;
    }
}
