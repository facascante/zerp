<?php

namespace Api\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tblcustomercategory
 *
 * @ORM\Table(name="tblCustomerCategory", uniqueConstraints={@ORM\UniqueConstraint(name="strCustomerCategory_UNIQUE", columns={"strCustomerCategory"})})
 * @ORM\Entity
 */
class Tblcustomercategory
{
    /**
     * @var integer
     *
     * @ORM\Column(name="intCustomerCategoryID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $intcustomercategoryid;

    /**
     * @var string
     *
     * @ORM\Column(name="strCustomerCategory", type="string", length=45, nullable=false)
     */
    private $strcustomercategory;



    /**
     * Get intcustomercategoryid
     *
     * @return integer 
     */
    public function getIntcustomercategoryid()
    {
        return $this->intcustomercategoryid;
    }

    /**
     * Set strcustomercategory
     *
     * @param string $strcustomercategory
     * @return Tblcustomercategory
     */
    public function setStrcustomercategory($strcustomercategory)
    {
        $this->strcustomercategory = $strcustomercategory;

        return $this;
    }

    /**
     * Get strcustomercategory
     *
     * @return string 
     */
    public function getStrcustomercategory()
    {
        return $this->strcustomercategory;
    }
}
