<?php

namespace Api\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tblproductprice
 *
 * @ORM\Table(name="tblProductPrice", indexes={@ORM\Index(name="fk_tblProductPrice_tblPriceType1_idx", columns={"intPriceTypeID"}), @ORM\Index(name="fk_tblProductPrice_tblCurrency1_idx", columns={"intCurrencyID"}), @ORM\Index(name="fk_tblProductPrice_tblProducts1_idx", columns={"intProductID"})})
 * @ORM\Entity
 */
class Tblproductprice
{
    /**
     * @var integer
     *
     * @ORM\Column(name="intProductPriceID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $intproductpriceid;

    /**
     * @var float
     *
     * @ORM\Column(name="floatPrice", type="float", precision=10, scale=0, nullable=false)
     */
    private $floatprice;

    /**
     * @var integer
     *
     * @ORM\Column(name="intActive", type="integer", nullable=true)
     */
    private $intactive = '1';

    /**
     * @var \Api\Entity\Tblpricetype
     *
     * @ORM\ManyToOne(targetEntity="Api\Entity\Tblpricetype")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="intPriceTypeID", referencedColumnName="intPriceTypeID")
     * })
     */
    private $intpricetypeid;

    /**
     * @var \Api\Entity\Tblcurrency
     *
     * @ORM\ManyToOne(targetEntity="Api\Entity\Tblcurrency")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="intCurrencyID", referencedColumnName="intCurrencyID")
     * })
     */
    private $intcurrencyid;

    /**
     * @var \Api\Entity\Tblproducts
     *
     * @ORM\ManyToOne(targetEntity="Api\Entity\Tblproducts")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="intProductID", referencedColumnName="intProductID")
     * })
     */
    private $intproductid;



    /**
     * Get intproductpriceid
     *
     * @return integer 
     */
    public function getIntproductpriceid()
    {
        return $this->intproductpriceid;
    }

    /**
     * Set floatprice
     *
     * @param float $floatprice
     * @return Tblproductprice
     */
    public function setFloatprice($floatprice)
    {
        $this->floatprice = $floatprice;

        return $this;
    }

    /**
     * Get floatprice
     *
     * @return float 
     */
    public function getFloatprice()
    {
        return $this->floatprice;
    }

    /**
     * Set intactive
     *
     * @param integer $intactive
     * @return Tblproductprice
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

    /**
     * Set intpricetypeid
     *
     * @param \Api\Entity\Tblpricetype $intpricetypeid
     * @return Tblproductprice
     */
    public function setIntpricetypeid(\Api\Entity\Tblpricetype $intpricetypeid = null)
    {
        $this->intpricetypeid = $intpricetypeid;

        return $this;
    }

    /**
     * Get intpricetypeid
     *
     * @return \Api\Entity\Tblpricetype 
     */
    public function getIntpricetypeid()
    {
        return $this->intpricetypeid;
    }

    /**
     * Set intcurrencyid
     *
     * @param \Api\Entity\Tblcurrency $intcurrencyid
     * @return Tblproductprice
     */
    public function setIntcurrencyid(\Api\Entity\Tblcurrency $intcurrencyid = null)
    {
        $this->intcurrencyid = $intcurrencyid;

        return $this;
    }

    /**
     * Get intcurrencyid
     *
     * @return \Api\Entity\Tblcurrency 
     */
    public function getIntcurrencyid()
    {
        return $this->intcurrencyid;
    }

    /**
     * Set intproductid
     *
     * @param \Api\Entity\Tblproducts $intproductid
     * @return Tblproductprice
     */
    public function setIntproductid(\Api\Entity\Tblproducts $intproductid = null)
    {
        $this->intproductid = $intproductid;

        return $this;
    }

    /**
     * Get intproductid
     *
     * @return \Api\Entity\Tblproducts 
     */
    public function getIntproductid()
    {
        return $this->intproductid;
    }
}
