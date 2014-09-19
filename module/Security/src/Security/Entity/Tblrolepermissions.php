<?php

namespace Api\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tblrolepermissions
 *
 * @ORM\Table(name="tblRolePermissions", indexes={@ORM\Index(name="fk_tblRolePermissions_roles1_idx", columns={"intRoleID"}), @ORM\Index(name="fk_tblRolePermissions_tblPermissions1_idx", columns={"intPermissionID"})})
 * @ORM\Entity
 */
class Tblrolepermissions
{
    /**
     * @var integer
     *
     * @ORM\Column(name="intRolePermissionID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $introlepermissionid;

    /**
     * @var \Api\Entity\Tblroles
     *
     * @ORM\ManyToOne(targetEntity="Api\Entity\Tblroles")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="intRoleID", referencedColumnName="intRoleID")
     * })
     */
    private $introleid;

    /**
     * @var \Api\Entity\Tblpermissions
     *
     * @ORM\ManyToOne(targetEntity="Api\Entity\Tblpermissions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="intPermissionID", referencedColumnName="intPermissionID")
     * })
     */
    private $intpermissionid;



    /**
     * Get introlepermissionid
     *
     * @return integer 
     */
    public function getIntrolepermissionid()
    {
        return $this->introlepermissionid;
    }

    /**
     * Set introleid
     *
     * @param \Api\Entity\Tblroles $introleid
     * @return Tblrolepermissions
     */
    public function setIntroleid(\Api\Entity\Tblroles $introleid = null)
    {
        $this->introleid = $introleid;

        return $this;
    }

    /**
     * Get introleid
     *
     * @return \Api\Entity\Tblroles 
     */
    public function getIntroleid()
    {
        return $this->introleid;
    }

    /**
     * Set intpermissionid
     *
     * @param \Api\Entity\Tblpermissions $intpermissionid
     * @return Tblrolepermissions
     */
    public function setIntpermissionid(\Api\Entity\Tblpermissions $intpermissionid = null)
    {
        $this->intpermissionid = $intpermissionid;

        return $this;
    }

    /**
     * Get intpermissionid
     *
     * @return \Api\Entity\Tblpermissions 
     */
    public function getIntpermissionid()
    {
        return $this->intpermissionid;
    }
}
