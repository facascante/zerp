<?php

namespace Realms\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tblrealms
 *
 * @ORM\Table(name="tblRealms", indexes={@ORM\Index(name="fk_tblRealms_tblRealmTypes1_idx", columns={"intRealmTypeID"})})
 * @ORM\Entity
 */
class Tblrealms
{
    /**
     * @var integer
     *
     * @ORM\Column(name="intRealmID", type="integer", precision=0, scale=0, nullable=false, unique=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $intrealmid;

    /**
     * @var string
     *
     * @ORM\Column(name="strRealmKey", type="string", length=45, precision=0, scale=0, nullable=true, unique=false)
     */
    private $strrealmkey;

    /**
     * @var string
     *
     * @ORM\Column(name="strRealmSecret", type="string", length=100, precision=0, scale=0, nullable=true, unique=false)
     */
    private $strrealmsecret;

    /**
     * @var integer
     *
     * @ORM\Column(name="intStatus", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $intstatus;

    /**
     * @var \Realms\Entity\Tblrealmtypes
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Realms\Entity\Tblrealmtypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="intRealmTypeID", referencedColumnName="intRealmTypeID", nullable=true)
     * })
     */
    private $intrealmtypeid;


    /**
     * Set intrealmid
     *
     * @param integer $intrealmid
     * @return Tblrealms
     */
    public function setIntrealmid($intrealmid)
    {
        $this->intrealmid = $intrealmid;

        return $this;
    }

    /**
     * Get intrealmid
     *
     * @return integer 
     */
    public function getIntrealmid()
    {
        return $this->intrealmid;
    }

    /**
     * Set strrealmkey
     *
     * @param string $strrealmkey
     * @return Tblrealms
     */
    public function setStrrealmkey($strrealmkey)
    {
        $this->strrealmkey = $strrealmkey;

        return $this;
    }

    /**
     * Get strrealmkey
     *
     * @return string 
     */
    public function getStrrealmkey()
    {
        return $this->strrealmkey;
    }

    /**
     * Set strrealmsecret
     *
     * @param string $strrealmsecret
     * @return Tblrealms
     */
    public function setStrrealmsecret($strrealmsecret)
    {
        $this->strrealmsecret = $strrealmsecret;

        return $this;
    }

    /**
     * Get strrealmsecret
     *
     * @return string 
     */
    public function getStrrealmsecret()
    {
        return $this->strrealmsecret;
    }

    /**
     * Set intstatus
     *
     * @param integer $intstatus
     * @return Tblrealms
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
     * Set intrealmtypeid
     *
     * @param \Realms\Entity\Tblrealmtypes $intrealmtypeid
     * @return Tblrealms
     */
    public function setIntrealmtypeid(\Realms\Entity\Tblrealmtypes $intrealmtypeid)
    {
        $this->intrealmtypeid = $intrealmtypeid;

        return $this;
    }

    /**
     * Get intrealmtypeid
     *
     * @return \Realms\Entity\Tblrealmtypes 
     */
    public function getIntrealmtypeid()
    {
        return $this->intrealmtypeid;
    }
}
