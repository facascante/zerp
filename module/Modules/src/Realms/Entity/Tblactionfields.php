<?php

namespace Realms\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tblactionfields
 *
 * @ORM\Table(name="tblActionFields", indexes={@ORM\Index(name="fk_tblActionFields_tblAttributes1_idx", columns={"intAttributeID"}), @ORM\Index(name="fk_tblActionFields_tblActions1_idx", columns={"intActionID"}), @ORM\Index(name="fk_tblActionFields_tblDisplayTypes1_idx", columns={"intDisplayTypeID"}), @ORM\Index(name="fk_tblActionFields_tblActionFieldType1_idx", columns={"intActionFieldTypeID"})})
 * @ORM\Entity
 */
class Tblactionfields
{
    /**
     * @var integer
     *
     * @ORM\Column(name="intActionFieldID", type="integer", precision=0, scale=0, nullable=false, unique=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $intactionfieldid;

    /**
     * @var integer
     *
     * @ORM\Column(name="intOrder", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $intorder;

    /**
     * @var integer
     *
     * @ORM\Column(name="intGroup", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $intgroup;

    /**
     * @var integer
     *
     * @ORM\Column(name="intStatus", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $intstatus;

    /**
     * @var \Realms\Entity\Tblactionfieldtype
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Realms\Entity\Tblactionfieldtype")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="intActionFieldTypeID", referencedColumnName="intActionFieldTypeID", nullable=true)
     * })
     */
    private $intactionfieldtypeid;

    /**
     * @var \Realms\Entity\Tblactions
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Realms\Entity\Tblactions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="intActionID", referencedColumnName="intActionID", nullable=true)
     * })
     */
    private $intactionid;

    /**
     * @var \Realms\Entity\Tblattributes
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Realms\Entity\Tblattributes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="intAttributeID", referencedColumnName="intAttributeID", nullable=true)
     * })
     */
    private $intattributeid;

    /**
     * @var \Realms\Entity\Tbldisplaytypes
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Realms\Entity\Tbldisplaytypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="intDisplayTypeID", referencedColumnName="intDisplayTypeID", nullable=true)
     * })
     */
    private $intdisplaytypeid;


    /**
     * Set intactionfieldid
     *
     * @param integer $intactionfieldid
     * @return Tblactionfields
     */
    public function setIntactionfieldid($intactionfieldid)
    {
        $this->intactionfieldid = $intactionfieldid;

        return $this;
    }

    /**
     * Get intactionfieldid
     *
     * @return integer 
     */
    public function getIntactionfieldid()
    {
        return $this->intactionfieldid;
    }

    /**
     * Set intorder
     *
     * @param integer $intorder
     * @return Tblactionfields
     */
    public function setIntorder($intorder)
    {
        $this->intorder = $intorder;

        return $this;
    }

    /**
     * Get intorder
     *
     * @return integer 
     */
    public function getIntorder()
    {
        return $this->intorder;
    }

    /**
     * Set intgroup
     *
     * @param integer $intgroup
     * @return Tblactionfields
     */
    public function setIntgroup($intgroup)
    {
        $this->intgroup = $intgroup;

        return $this;
    }

    /**
     * Get intgroup
     *
     * @return integer 
     */
    public function getIntgroup()
    {
        return $this->intgroup;
    }

    /**
     * Set intstatus
     *
     * @param integer $intstatus
     * @return Tblactionfields
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
     * Set intactionfieldtypeid
     *
     * @param \Realms\Entity\Tblactionfieldtype $intactionfieldtypeid
     * @return Tblactionfields
     */
    public function setIntactionfieldtypeid(\Realms\Entity\Tblactionfieldtype $intactionfieldtypeid)
    {
        $this->intactionfieldtypeid = $intactionfieldtypeid;

        return $this;
    }

    /**
     * Get intactionfieldtypeid
     *
     * @return \Realms\Entity\Tblactionfieldtype 
     */
    public function getIntactionfieldtypeid()
    {
        return $this->intactionfieldtypeid;
    }

    /**
     * Set intactionid
     *
     * @param \Realms\Entity\Tblactions $intactionid
     * @return Tblactionfields
     */
    public function setIntactionid(\Realms\Entity\Tblactions $intactionid)
    {
        $this->intactionid = $intactionid;

        return $this;
    }

    /**
     * Get intactionid
     *
     * @return \Realms\Entity\Tblactions 
     */
    public function getIntactionid()
    {
        return $this->intactionid;
    }

    /**
     * Set intattributeid
     *
     * @param \Realms\Entity\Tblattributes $intattributeid
     * @return Tblactionfields
     */
    public function setIntattributeid(\Realms\Entity\Tblattributes $intattributeid)
    {
        $this->intattributeid = $intattributeid;

        return $this;
    }

    /**
     * Get intattributeid
     *
     * @return \Realms\Entity\Tblattributes 
     */
    public function getIntattributeid()
    {
        return $this->intattributeid;
    }

    /**
     * Set intdisplaytypeid
     *
     * @param \Realms\Entity\Tbldisplaytypes $intdisplaytypeid
     * @return Tblactionfields
     */
    public function setIntdisplaytypeid(\Realms\Entity\Tbldisplaytypes $intdisplaytypeid)
    {
        $this->intdisplaytypeid = $intdisplaytypeid;

        return $this;
    }

    /**
     * Get intdisplaytypeid
     *
     * @return \Realms\Entity\Tbldisplaytypes 
     */
    public function getIntdisplaytypeid()
    {
        return $this->intdisplaytypeid;
    }
}
