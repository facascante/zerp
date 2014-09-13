<?php

namespace Realms\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tbldisplaytypes
 *
 * @ORM\Table(name="tblDisplayTypes")
 * @ORM\Entity
 */
class Tbldisplaytypes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="intDisplayTypeID", type="integer", precision=0, scale=0, nullable=false, unique=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $intdisplaytypeid;

    /**
     * @var string
     *
     * @ORM\Column(name="strDisplayType", type="string", length=45, precision=0, scale=0, nullable=true, unique=false)
     */
    private $strdisplaytype;

    /**
     * @var integer
     *
     * @ORM\Column(name="intStatus", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $intstatus;


    /**
     * Get intdisplaytypeid
     *
     * @return integer 
     */
    public function getIntdisplaytypeid()
    {
        return $this->intdisplaytypeid;
    }

    /**
     * Set strdisplaytype
     *
     * @param string $strdisplaytype
     * @return Tbldisplaytypes
     */
    public function setStrdisplaytype($strdisplaytype)
    {
        $this->strdisplaytype = $strdisplaytype;

        return $this;
    }

    /**
     * Get strdisplaytype
     *
     * @return string 
     */
    public function getStrdisplaytype()
    {
        return $this->strdisplaytype;
    }

    /**
     * Set intstatus
     *
     * @param integer $intstatus
     * @return Tbldisplaytypes
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
