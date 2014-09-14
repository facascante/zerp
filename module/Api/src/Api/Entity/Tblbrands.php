<?php

namespace Api\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tblbrands
 *
 * @ORM\Table(name="tblBrands", uniqueConstraints={@ORM\UniqueConstraint(name="strBrandName_UNIQUE", columns={"strBrandName"})})
 * @ORM\Entity
 */
class Tblbrands
{
    /**
     * @var integer
     *
     * @ORM\Column(name="intBrandID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $intbrandid;

    /**
     * @var string
     *
     * @ORM\Column(name="strBrandName", type="string", length=50, nullable=false)
     */
    private $strbrandname;

    /**
     * @var integer
     *
     * @ORM\Column(name="intActive", type="integer", nullable=true)
     */
    private $intactive = '1';



    /**
     * Get intbrandid
     *
     * @return integer 
     */
    public function getIntbrandid()
    {
        return $this->intbrandid;
    }

    /**
     * Set strbrandname
     *
     * @param string $strbrandname
     * @return Tblbrands
     */
    public function setStrbrandname($strbrandname)
    {
        $this->strbrandname = $strbrandname;

        return $this;
    }

    /**
     * Get strbrandname
     *
     * @return string 
     */
    public function getStrbrandname()
    {
        return $this->strbrandname;
    }

    /**
     * Set intactive
     *
     * @param integer $intactive
     * @return Tblbrands
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
