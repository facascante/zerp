<?php

namespace Api\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tblproductcost
 *
 * @ORM\Table(name="tblProductCost", indexes={@ORM\Index(name="fk_tblProductCost_tblProducts1_idx", columns={"intProductID"}), @ORM\Index(name="fk_tblProductCost_tblCurrency1_idx", columns={"intCurrencyID"})})
 * @ORM\Entity
 */
class Tblproductcost
{
    /**
     * @var integer
     *
     * @ORM\Column(name="intProductCostID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $intproductcostid;

    /**
     * @var string
     *
     * @ORM\Column(name="actual_landed_cost", type="string", length=45, nullable=true)
     */
    private $actualLandedCost;

    /**
     * @var string
     *
     * @ORM\Column(name="purchase_cost", type="string", length=45, nullable=true)
     */
    private $purchaseCost;

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
     * @var \Api\Entity\Tblcurrency
     *
     * @ORM\ManyToOne(targetEntity="Api\Entity\Tblcurrency")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="intCurrencyID", referencedColumnName="intCurrencyID")
     * })
     */
    private $intcurrencyid;



    /**
     * Get intproductcostid
     *
     * @return integer 
     */
    public function getIntproductcostid()
    {
        return $this->intproductcostid;
    }

    /**
     * Set actualLandedCost
     *
     * @param string $actualLandedCost
     * @return Tblproductcost
     */
    public function setActualLandedCost($actualLandedCost)
    {
        $this->actualLandedCost = $actualLandedCost;

        return $this;
    }

    /**
     * Get actualLandedCost
     *
     * @return string 
     */
    public function getActualLandedCost()
    {
        return $this->actualLandedCost;
    }

    /**
     * Set purchaseCost
     *
     * @param string $purchaseCost
     * @return Tblproductcost
     */
    public function setPurchaseCost($purchaseCost)
    {
        $this->purchaseCost = $purchaseCost;

        return $this;
    }

    /**
     * Get purchaseCost
     *
     * @return string 
     */
    public function getPurchaseCost()
    {
        return $this->purchaseCost;
    }

    /**
     * Set intproductid
     *
     * @param \Api\Entity\Tblproducts $intproductid
     * @return Tblproductcost
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

    /**
     * Set intcurrencyid
     *
     * @param \Api\Entity\Tblcurrency $intcurrencyid
     * @return Tblproductcost
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
}
