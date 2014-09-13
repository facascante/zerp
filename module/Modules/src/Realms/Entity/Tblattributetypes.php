<?php

namespace Realms\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tblattributetypes
 *
 * @ORM\Table(name="tblAttributeTypes")
 * @ORM\Entity
 */
class Tblattributetypes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="intAttributeTypeID", type="integer", precision=0, scale=0, nullable=false, unique=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $intattributetypeid;

    /**
     * @var string
     *
     * @ORM\Column(name="intAttributeType", type="string", length=45, precision=0, scale=0, nullable=false, unique=false)
     */
    private $intattributetype;

    /**
     * @var integer
     *
     * @ORM\Column(name="intStatus", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $intstatus;


    /**
     * Get intattributetypeid
     *
     * @return integer 
     */
    public function getIntattributetypeid()
    {
        return $this->intattributetypeid;
    }

    /**
     * Set intattributetype
     *
     * @param string $intattributetype
     * @return Tblattributetypes
     */
    public function setIntattributetype($intattributetype)
    {
        $this->intattributetype = $intattributetype;

        return $this;
    }

    /**
     * Get intattributetype
     *
     * @return string 
     */
    public function getIntattributetype()
    {
        return $this->intattributetype;
    }

    /**
     * Set intstatus
     *
     * @param integer $intstatus
     * @return Tblattributetypes
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
