<?php

namespace Api\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tbladdresstype
 *
 * @ORM\Table(name="tblAddressType")
 * @ORM\Entity
 */
class Tbladdresstype
{
    /**
     * @var integer
     *
     * @ORM\Column(name="intAddressTypeID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $intaddresstypeid;

    /**
     * @var string
     *
     * @ORM\Column(name="intAddressType", type="string", length=45, nullable=true)
     */
    private $intaddresstype;

    /**
     * @var integer
     *
     * @ORM\Column(name="intActive", type="integer", nullable=true)
     */
    private $intactive = '1';



    /**
     * Get intaddresstypeid
     *
     * @return integer 
     */
    public function getIntaddresstypeid()
    {
        return $this->intaddresstypeid;
    }

    /**
     * Set intaddresstype
     *
     * @param string $intaddresstype
     * @return Tbladdresstype
     */
    public function setIntaddresstype($intaddresstype)
    {
        $this->intaddresstype = $intaddresstype;

        return $this;
    }

    /**
     * Get intaddresstype
     *
     * @return string 
     */
    public function getIntaddresstype()
    {
        return $this->intaddresstype;
    }

    /**
     * Set intactive
     *
     * @param integer $intactive
     * @return Tbladdresstype
     */
    public function setIntactive($intactive)
    {
        $this->intactive = $intactive;

        return $this;
    }

    /**
     * Get intactive
     *
     * @return integer 
     */
    public function getIntactive()
    {
        return $this->intactive;
    }
}
