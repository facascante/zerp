<?php

namespace Api\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tblsuppliers
 *
 * @ORM\Table(name="tblSuppliers", uniqueConstraints={@ORM\UniqueConstraint(name="intCompanyID_UNIQUE", columns={"intCompanyID"})}, indexes={@ORM\Index(name="fk_tblSuppliers_tblSupplierStatus1_idx", columns={"intSupplierStatusID"}), @ORM\Index(name="fk_tblSuppliers_tblPerson1_idx", columns={"intPersonID"})})
 * @ORM\Entity
 */
class Tblsuppliers
{
    /**
     * @var integer
     *
     * @ORM\Column(name="intSupplierID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $intsupplierid;

    /**
     * @var \Api\Entity\Tblcompany
     *
     * @ORM\ManyToOne(targetEntity="Api\Entity\Tblcompany")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="intCompanyID", referencedColumnName="intCompanyID")
     * })
     */
    private $intcompanyid;

    /**
     * @var \Api\Entity\Tblsupplierstatus
     *
     * @ORM\ManyToOne(targetEntity="Api\Entity\Tblsupplierstatus")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="intSupplierStatusID", referencedColumnName="intSupplierStatusID")
     * })
     */
    private $intsupplierstatusid;

    /**
     * @var \Api\Entity\Tblperson
     *
     * @ORM\ManyToOne(targetEntity="Api\Entity\Tblperson")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="intPersonID", referencedColumnName="intPersonID")
     * })
     */
    private $intpersonid;



    /**
     * Get intsupplierid
     *
     * @return integer 
     */
    public function getIntsupplierid()
    {
        return $this->intsupplierid;
    }

    /**
     * Set intcompanyid
     *
     * @param \Api\Entity\Tblcompany $intcompanyid
     * @return Tblsuppliers
     */
    public function setIntcompanyid(\Api\Entity\Tblcompany $intcompanyid = null)
    {
        $this->intcompanyid = $intcompanyid;

        return $this;
    }

    /**
     * Get intcompanyid
     *
     * @return \Api\Entity\Tblcompany 
     */
    public function getIntcompanyid()
    {
        return $this->intcompanyid;
    }

    /**
     * Set intsupplierstatusid
     *
     * @param \Api\Entity\Tblsupplierstatus $intsupplierstatusid
     * @return Tblsuppliers
     */
    public function setIntsupplierstatusid(\Api\Entity\Tblsupplierstatus $intsupplierstatusid = null)
    {
        $this->intsupplierstatusid = $intsupplierstatusid;

        return $this;
    }

    /**
     * Get intsupplierstatusid
     *
     * @return \Api\Entity\Tblsupplierstatus 
     */
    public function getIntsupplierstatusid()
    {
        return $this->intsupplierstatusid;
    }

    /**
     * Set intpersonid
     *
     * @param \Api\Entity\Tblperson $intpersonid
     * @return Tblsuppliers
     */
    public function setIntpersonid(\Api\Entity\Tblperson $intpersonid = null)
    {
        $this->intpersonid = $intpersonid;

        return $this;
    }

    /**
     * Get intpersonid
     *
     * @return \Api\Entity\Tblperson 
     */
    public function getIntpersonid()
    {
        return $this->intpersonid;
    }
}
