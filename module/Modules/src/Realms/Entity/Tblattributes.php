<?php

namespace Realms\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tblattributes
 *
 * @ORM\Table(name="tblAttributes", indexes={@ORM\Index(name="fk_tblAttributes_tblObjects1_idx", columns={"intObjectID"}), @ORM\Index(name="fk_tblAttributes_tblAttributeTypes1_idx", columns={"intAttributeTypeID"})})
 * @ORM\Entity
 */
class Tblattributes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="intAttributeID", type="integer", precision=0, scale=0, nullable=false, unique=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $intattributeid;

    /**
     * @var string
     *
     * @ORM\Column(name="strAttributeName", type="string", length=45, precision=0, scale=0, nullable=true, unique=false)
     */
    private $strattributename;

    /**
     * @var string
     *
     * @ORM\Column(name="strAttributeLabel", type="string", length=45, precision=0, scale=0, nullable=true, unique=false)
     */
    private $strattributelabel;

    /**
     * @var integer
     *
     * @ORM\Column(name="intStatus", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $intstatus;

    /**
     * @var \Realms\Entity\Tblattributetypes
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Realms\Entity\Tblattributetypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="intAttributeTypeID", referencedColumnName="intAttributeTypeID", nullable=true)
     * })
     */
    private $intattributetypeid;

    /**
     * @var \Realms\Entity\Tblobjects
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Realms\Entity\Tblobjects")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="intObjectID", referencedColumnName="intObjectID", nullable=true)
     * })
     */
    private $intobjectid;


    /**
     * Set intattributeid
     *
     * @param integer $intattributeid
     * @return Tblattributes
     */
    public function setIntattributeid($intattributeid)
    {
        $this->intattributeid = $intattributeid;

        return $this;
    }

    /**
     * Get intattributeid
     *
     * @return integer 
     */
    public function getIntattributeid()
    {
        return $this->intattributeid;
    }

    /**
     * Set strattributename
     *
     * @param string $strattributename
     * @return Tblattributes
     */
    public function setStrattributename($strattributename)
    {
        $this->strattributename = $strattributename;

        return $this;
    }

    /**
     * Get strattributename
     *
     * @return string 
     */
    public function getStrattributename()
    {
        return $this->strattributename;
    }

    /**
     * Set strattributelabel
     *
     * @param string $strattributelabel
     * @return Tblattributes
     */
    public function setStrattributelabel($strattributelabel)
    {
        $this->strattributelabel = $strattributelabel;

        return $this;
    }

    /**
     * Get strattributelabel
     *
     * @return string 
     */
    public function getStrattributelabel()
    {
        return $this->strattributelabel;
    }

    /**
     * Set intstatus
     *
     * @param integer $intstatus
     * @return Tblattributes
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
     * Set intattributetypeid
     *
     * @param \Realms\Entity\Tblattributetypes $intattributetypeid
     * @return Tblattributes
     */
    public function setIntattributetypeid(\Realms\Entity\Tblattributetypes $intattributetypeid)
    {
        $this->intattributetypeid = $intattributetypeid;

        return $this;
    }

    /**
     * Get intattributetypeid
     *
     * @return \Realms\Entity\Tblattributetypes 
     */
    public function getIntattributetypeid()
    {
        return $this->intattributetypeid;
    }

    /**
     * Set intobjectid
     *
     * @param \Realms\Entity\Tblobjects $intobjectid
     * @return Tblattributes
     */
    public function setIntobjectid(\Realms\Entity\Tblobjects $intobjectid)
    {
        $this->intobjectid = $intobjectid;

        return $this;
    }

    /**
     * Get intobjectid
     *
     * @return \Realms\Entity\Tblobjects 
     */
    public function getIntobjectid()
    {
        return $this->intobjectid;
    }
}
