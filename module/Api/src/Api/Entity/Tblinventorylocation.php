<?php

namespace Api\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tblinventorylocation
 *
 * @ORM\Table(name="tblInventoryLocation", indexes={@ORM\Index(name="fk_tblInventoryLocation_tblLocationTypes1_idx", columns={"intLocationTypeID"}), @ORM\Index(name="fk_tblInventoryLocation_tblCompany1_idx", columns={"intCompanyID"}), @ORM\Index(name="fk_tblInventoryLocation_tblPerson1_idx", columns={"intPersonID"})})
 * @ORM\Entity
 */
class Tblinventorylocation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="intLocationID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $intlocationid;

    /**
     * @var string
     *
     * @ORM\Column(name="strLocationName", type="string", length=100, nullable=true)
     */
    private $strlocationname;

    /**
     * @var \Api\Entity\Tbllocationtypes
     *
     * @ORM\ManyToOne(targetEntity="Api\Entity\Tbllocationtypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="intLocationTypeID", referencedColumnName="intLocationTypeID")
     * })
     */
    private $intlocationtypeid;

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
     * @var \Api\Entity\Tblperson
     *
     * @ORM\ManyToOne(targetEntity="Api\Entity\Tblperson")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="intPersonID", referencedColumnName="intPersonID")
     * })
     */
    private $intpersonid;



    /**
     * Get intlocationid
     *
     * @return integer 
     */
    public function getIntlocationid()
    {
        return $this->intlocationid;
    }

    /**
     * Set strlocationname
     *
     * @param string $strlocationname
     * @return Tblinventorylocation
     */
    public function setStrlocationname($strlocationname)
    {
        $this->strlocationname = $strlocationname;

        return $this;
    }

    /**
     * Get strlocationname
     *
     * @return string 
     */
    public function getStrlocationname()
    {
        return $this->strlocationname;
    }

    /**
     * Set intlocationtypeid
     *
     * @param \Api\Entity\Tbllocationtypes $intlocationtypeid
     * @return Tblinventorylocation
     */
    public function setIntlocationtypeid(\Api\Entity\Tbllocationtypes $intlocationtypeid = null)
    {
        $this->intlocationtypeid = $intlocationtypeid;

        return $this;
    }

    /**
     * Get intlocationtypeid
     *
     * @return \Api\Entity\Tbllocationtypes 
     */
    public function getIntlocationtypeid()
    {
        return $this->intlocationtypeid;
    }

    /**
     * Set intcompanyid
     *
     * @param \Api\Entity\Tblcompany $intcompanyid
     * @return Tblinventorylocation
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
     * Set intpersonid
     *
     * @param \Api\Entity\Tblperson $intpersonid
     * @return Tblinventorylocation
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
