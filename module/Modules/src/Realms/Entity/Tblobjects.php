<?php

namespace Realms\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tblobjects
 *
 * @ORM\Table(name="tblObjects")
 * @ORM\Entity
 */
class Tblobjects
{
    /**
     * @var integer
     *
     * @ORM\Column(name="intObjectID", type="integer", precision=0, scale=0, nullable=false, unique=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $intobjectid;

    /**
     * @var string
     *
     * @ORM\Column(name="strObjectName", type="string", length=45, precision=0, scale=0, nullable=true, unique=false)
     */
    private $strobjectname;

    /**
     * @var string
     *
     * @ORM\Column(name="strObjectLabel", type="string", length=45, precision=0, scale=0, nullable=true, unique=false)
     */
    private $strobjectlabel;

    /**
     * @var integer
     *
     * @ORM\Column(name="intStatus", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $intstatus;


    /**
     * Get intobjectid
     *
     * @return integer 
     */
    public function getIntobjectid()
    {
        return $this->intobjectid;
    }

    /**
     * Set strobjectname
     *
     * @param string $strobjectname
     * @return Tblobjects
     */
    public function setStrobjectname($strobjectname)
    {
        $this->strobjectname = $strobjectname;

        return $this;
    }

    /**
     * Get strobjectname
     *
     * @return string 
     */
    public function getStrobjectname()
    {
        return $this->strobjectname;
    }

    /**
     * Set strobjectlabel
     *
     * @param string $strobjectlabel
     * @return Tblobjects
     */
    public function setStrobjectlabel($strobjectlabel)
    {
        $this->strobjectlabel = $strobjectlabel;

        return $this;
    }

    /**
     * Get strobjectlabel
     *
     * @return string 
     */
    public function getStrobjectlabel()
    {
        return $this->strobjectlabel;
    }

    /**
     * Set intstatus
     *
     * @param integer $intstatus
     * @return Tblobjects
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
}
