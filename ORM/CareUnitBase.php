<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\CareUnitBase
 *
 * @ORM\Entity(repositoryClass="CareUnitBaseRepository")
 * @ORM\Table(name="care_unit_base")
 */
class CareUnitBase
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $unit_type;

    public function __construct()
    {
    }

    /**
     * Set the value of id.
     *
     * @param integer $id
     * @return \Entity\CareUnitBase
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of id.
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of unit_type.
     *
     * @param string $unit_type
     * @return \Entity\CareUnitBase
     */
    public function setUnitType($unit_type)
    {
        $this->unit_type = $unit_type;

        return $this;
    }

    /**
     * Get the value of unit_type.
     *
     * @return string
     */
    public function getUnitType()
    {
        return $this->unit_type;
    }

    public function __sleep()
    {
        return array('id', 'unit_type');
    }
}