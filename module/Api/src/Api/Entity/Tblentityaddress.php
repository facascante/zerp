<?php

namespace Api\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tblentityaddress
 *
 * @ORM\Table(name="tblEntityAddress", indexes={@ORM\Index(name="fk_tblEntityAddress_tblAddressType1_idx", columns={"intAddressTypeID"}), @ORM\Index(name="fk_tblEntityAddress_tblCity1_idx", columns={"intCityID"}), @ORM\Index(name="fk_tblEntityAddress_tblCompany1_idx", columns={"intCompanyID"}), @ORM\Index(name="fk_tblEntityAddress_tblPerson1_idx", columns={"intPersonID"})})
 * @ORM\Entity
 */
class Tblentityaddress
{
    /**
     * @var integer
     *
     * @ORM\Column(name="intlEntityAddressID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $intlentityaddressid;

    /**
     * @var string
     *
     * @ORM\Column(name="strAddress", type="string", length=45, nullable=false)
     */
    private $straddress;

    /**
     * @var string
     *
     * @ORM\Column(name="strZipCode", type="string", length=45, nullable=true)
     */
    private $strzipcode;

    /**
     * @var integer
     *
     * @ORM\Column(name="intStatus", type="integer", nullable=true)
     */
    private $intstatus = '1';

    /**
     * @var \Api\Entity\Tbladdresstype
     *
     * @ORM\ManyToOne(targetEntity="Api\Entity\Tbladdresstype")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="intAddressTypeID", referencedColumnName="intAddressTypeID")
     * })
     */
    private $intaddresstypeid;

    /**
     * @var \Api\Entity\Tblcity
     *
     * @ORM\ManyToOne(targetEntity="Api\Entity\Tblcity")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="intCityID", referencedColumnName="intCityID")
     * })
     */
    private $intcityid;

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
     * Get intlentityaddressid
     *
     * @return integer 
     */
    public function getIntlentityaddressid()
    {
        return $this->intlentityaddressid;
    }

    /**
     * Set straddress
     *
     * @param string $straddress
     * @return Tblentityaddress
     */
    public function setStraddress($straddress)
    {
        $this->straddress = $straddress;

        return $this;
    }

    /**
     * Get straddress
     *
     * @return string 
     */
    public function getStraddress()
    {
        return $this->straddress;
    }

    /**
     * Set strzipcode
     *
     * @param string $strzipcode
     * @return Tblentityaddress
     */
    public function setStrzipcode($strzipcode)
    {
        $this->strzipcode = $strzipcode;

        return $this;
    }

    /**
     * Get strzipcode
     *
     * @return string 
     */
    public function getStrzipcode()
    {
        return $this->strzipcode;
    }

    /**
     * Set intstatus
     *
     * @param integer $intstatus
     * @return Tblentityaddress
     */
    public function setIntstatus($intstatus)
    {
        $this->intstatus = $intstatus;

        return $this;
    }

    /**
     * Get intstatus
     *
     * @return integer 
     */
    public function getIntstatus()
    {
        return $this->intstatus;
    }

    /**
     * Set intaddresstypeid
     *
     * @param \Api\Entity\Tbladdresstype $intaddresstypeid
     * @return Tblentityaddress
     */
    public function setIntaddresstypeid(\Api\Entity\Tbladdresstype $intaddresstypeid = null)
    {
        $this->intaddresstypeid = $intaddresstypeid;

        return $this;
    }

    /**
     * Get intaddresstypeid
     *
     * @return \Api\Entity\Tbladdresstype 
     */
    public function getIntaddresstypeid()
    {
        return $this->intaddresstypeid;
    }

    /**
     * Set intcityid
     *
     * @param \Api\Entity\Tblcity $intcityid
     * @return Tblentityaddress
     */
    public function setIntcityid(\Api\Entity\Tblcity $intcityid = null)
    {
        $this->intcityid = $intcityid;

        return $this;
    }

    /**
     * Get intcityid
     *
     * @return \Api\Entity\Tblcity 
     */
    public function getIntcityid()
    {
        return $this->intcityid;
    }

    /**
     * Set intcompanyid
     *
     * @param \Api\Entity\Tblcompany $intcompanyid
     * @return Tblentityaddress
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
     * @return Tblentityaddress
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
