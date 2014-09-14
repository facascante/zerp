<?php

namespace Api\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tblcity
 *
 * @ORM\Table(name="tblCity", indexes={@ORM\Index(name="fk_tblCity_tblProvince1_idx", columns={"intProvinceID"})})
 * @ORM\Entity
 */
class Tblcity
{
    /**
     * @var integer
     *
     * @ORM\Column(name="intCityID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $intcityid;

    /**
     * @var string
     *
     * @ORM\Column(name="strCityName", type="string", length=45, nullable=false)
     */
    private $strcityname;

    /**
     * @var \Api\Entity\Tblprovince
     *
     * @ORM\ManyToOne(targetEntity="Api\Entity\Tblprovince")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="intProvinceID", referencedColumnName="intProvinceID")
     * })
     */
    private $intprovinceid;



    /**
     * Get intcityid
     *
     * @return integer 
     */
    public function getIntcityid()
    {
        return $this->intcityid;
    }

    /**
     * Set strcityname
     *
     * @param string $strcityname
     * @return Tblcity
     */
    public function setStrcityname($strcityname)
    {
        $this->strcityname = $strcityname;

        return $this;
    }

    /**
     * Get strcityname
     *
     * @return string 
     */
    public function getStrcityname()
    {
        return $this->strcityname;
    }

    /**
     * Set intprovinceid
     *
     * @param \Api\Entity\Tblprovince $intprovinceid
     * @return Tblcity
     */
    public function setIntprovinceid(\Api\Entity\Tblprovince $intprovinceid = null)
    {
        $this->intprovinceid = $intprovinceid;

        return $this;
    }

    /**
     * Get intprovinceid
     *
     * @return \Api\Entity\Tblprovince 
     */
    public function getIntprovinceid()
    {
        return $this->intprovinceid;
    }
}
