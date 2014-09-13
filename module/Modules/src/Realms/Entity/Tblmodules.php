<?php

namespace Realms\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tblmodules
 *
 * @ORM\Table(name="tblModules", indexes={@ORM\Index(name="fk_tblModules_tblRealms1_idx", columns={"intRealmID"})})
 * @ORM\Entity
 */
class Tblmodules
{
    /**
     * @var integer
     *
     * @ORM\Column(name="intModuleID", type="integer", precision=0, scale=0, nullable=false, unique=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $intmoduleid;

    /**
     * @var string
     *
     * @ORM\Column(name="strModuleName", type="string", length=45, precision=0, scale=0, nullable=true, unique=false)
     */
    private $strmodulename;

    /**
     * @var integer
     *
     * @ORM\Column(name="intStatus", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $intstatus;

    /**
     * @var \Realms\Entity\Tblrealms
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Realms\Entity\Tblrealms")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="intRealmID", referencedColumnName="intRealmID", nullable=true)
     * })
     */
    private $intrealmid;


    /**
     * Set intmoduleid
     *
     * @param integer $intmoduleid
     * @return Tblmodules
     */
    public function setIntmoduleid($intmoduleid)
    {
        $this->intmoduleid = $intmoduleid;

        return $this;
    }

    /**
     * Get intmoduleid
     *
     * @return integer 
     */
    public function getIntmoduleid()
    {
        return $this->intmoduleid;
    }

    /**
     * Set strmodulename
     *
     * @param string $strmodulename
     * @return Tblmodules
     */
    public function setStrmodulename($strmodulename)
    {
        $this->strmodulename = $strmodulename;

        return $this;
    }

    /**
     * Get strmodulename
     *
     * @return string 
     */
    public function getStrmodulename()
    {
        return $this->strmodulename;
    }

    /**
     * Set intstatus
     *
     * @param integer $intstatus
     * @return Tblmodules
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
     * Set intrealmid
     *
     * @param \Realms\Entity\Tblrealms $intrealmid
     * @return Tblmodules
     */
    public function setIntrealmid(\Realms\Entity\Tblrealms $intrealmid)
    {
        $this->intrealmid = $intrealmid;

        return $this;
    }

    /**
     * Get intrealmid
     *
     * @return \Realms\Entity\Tblrealms 
     */
    public function getIntrealmid()
    {
        return $this->intrealmid;
    }
}
