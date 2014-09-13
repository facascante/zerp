<?php

namespace Realms\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tblactionfieldtype
 *
 * @ORM\Table(name="tblActionFieldType")
 * @ORM\Entity
 */
class Tblactionfieldtype
{
    /**
     * @var integer
     *
     * @ORM\Column(name="intActionFieldTypeID", type="integer", precision=0, scale=0, nullable=false, unique=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $intactionfieldtypeid;

    /**
     * @var string
     *
     * @ORM\Column(name="strActionFieldName", type="string", length=45, precision=0, scale=0, nullable=false, unique=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $stractionfieldname;

    /**
     * @var integer
     *
     * @ORM\Column(name="intStatus", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $intstatus;


    /**
     * Set intactionfieldtypeid
     *
     * @param integer $intactionfieldtypeid
     * @return Tblactionfieldtype
     */
    public function setIntactionfieldtypeid($intactionfieldtypeid)
    {
        $this->intactionfieldtypeid = $intactionfieldtypeid;

        return $this;
    }

    /**
     * Get intactionfieldtypeid
     *
     * @return integer 
     */
    public function getIntactionfieldtypeid()
    {
        return $this->intactionfieldtypeid;
    }

    /**
     * Set stractionfieldname
     *
     * @param string $stractionfieldname
     * @return Tblactionfieldtype
     */
    public function setStractionfieldname($stractionfieldname)
    {
        $this->stractionfieldname = $stractionfieldname;

        return $this;
    }

    /**
     * Get stractionfieldname
     *
     * @return string 
     */
    public function getStractionfieldname()
    {
        return $this->stractionfieldname;
    }

    /**
     * Set intstatus
     *
     * @param integer $intstatus
     * @return Tblactionfieldtype
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
