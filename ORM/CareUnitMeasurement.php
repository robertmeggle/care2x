<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\CareUnitMeasurement
 *
 * InnoDB free: 7168 kB
 *
 * @ORM\Entity(repositoryClass="CareUnitMeasurementRepository")
 * @ORM\Table(name="care_unit_measurement", uniqueConstraints={@ORM\UniqueConstraint(name="id", columns={"id"})})
 */
class CareUnitMeasurement
{
    /**
     * @ORM\Id
     * @ORM\Column(type="smallint")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $nr;

    /**
     * @ORM\Column(type="smallint")
     */
    protected $unit_type_nr;

    /**
     * @ORM\Column(type="string", length=15)
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=35)
     */
    protected $name;

    /**
     * @ORM\Column(type="string", length=35)
     */
    protected $LD_var;

    /**
     * @ORM\Column(type="string", length=35)
     */
    protected $sytem;

    /**
     * @ORM\Column(type="bigint", nullable=true)
     */
    protected $use_frequency;

    /**
     * @ORM\Column(type="string", length=25)
     */
    protected $status;

    /**
     * @ORM\Column(type="string", length=35)
     */
    protected $modify_id;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $modify_time;

    /**
     * @ORM\Column(type="string", length=35)
     */
    protected $create_id;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $create_time;

    public function __construct()
    {
    }

    /**
     * Set the value of nr.
     *
     * @param integer $nr
     * @return \Entity\CareUnitMeasurement
     */
    public function setNr($nr)
    {
        $this->nr = $nr;

        return $this;
    }

    /**
     * Get the value of nr.
     *
     * @return integer
     */
    public function getNr()
    {
        return $this->nr;
    }

    /**
     * Set the value of unit_type_nr.
     *
     * @param integer $unit_type_nr
     * @return \Entity\CareUnitMeasurement
     */
    public function setUnitTypeNr($unit_type_nr)
    {
        $this->unit_type_nr = $unit_type_nr;

        return $this;
    }

    /**
     * Get the value of unit_type_nr.
     *
     * @return integer
     */
    public function getUnitTypeNr()
    {
        return $this->unit_type_nr;
    }

    /**
     * Set the value of id.
     *
     * @param string $id
     * @return \Entity\CareUnitMeasurement
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of id.
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of name.
     *
     * @param string $name
     * @return \Entity\CareUnitMeasurement
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of LD_var.
     *
     * @param string $LD_var
     * @return \Entity\CareUnitMeasurement
     */
    public function setLDVar($LD_var)
    {
        $this->LD_var = $LD_var;

        return $this;
    }

    /**
     * Get the value of LD_var.
     *
     * @return string
     */
    public function getLDVar()
    {
        return $this->LD_var;
    }

    /**
     * Set the value of sytem.
     *
     * @param string $sytem
     * @return \Entity\CareUnitMeasurement
     */
    public function setSytem($sytem)
    {
        $this->sytem = $sytem;

        return $this;
    }

    /**
     * Get the value of sytem.
     *
     * @return string
     */
    public function getSytem()
    {
        return $this->sytem;
    }

    /**
     * Set the value of use_frequency.
     *
     * @param integer $use_frequency
     * @return \Entity\CareUnitMeasurement
     */
    public function setUseFrequency($use_frequency)
    {
        $this->use_frequency = $use_frequency;

        return $this;
    }

    /**
     * Get the value of use_frequency.
     *
     * @return integer
     */
    public function getUseFrequency()
    {
        return $this->use_frequency;
    }

    /**
     * Set the value of status.
     *
     * @param string $status
     * @return \Entity\CareUnitMeasurement
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get the value of status.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the value of modify_id.
     *
     * @param string $modify_id
     * @return \Entity\CareUnitMeasurement
     */
    public function setModifyId($modify_id)
    {
        $this->modify_id = $modify_id;

        return $this;
    }

    /**
     * Get the value of modify_id.
     *
     * @return string
     */
    public function getModifyId()
    {
        return $this->modify_id;
    }

    /**
     * Set the value of modify_time.
     *
     * @param datetime $modify_time
     * @return \Entity\CareUnitMeasurement
     */
    public function setModifyTime($modify_time)
    {
        $this->modify_time = $modify_time;

        return $this;
    }

    /**
     * Get the value of modify_time.
     *
     * @return datetime
     */
    public function getModifyTime()
    {
        return $this->modify_time;
    }

    /**
     * Set the value of create_id.
     *
     * @param string $create_id
     * @return \Entity\CareUnitMeasurement
     */
    public function setCreateId($create_id)
    {
        $this->create_id = $create_id;

        return $this;
    }

    /**
     * Get the value of create_id.
     *
     * @return string
     */
    public function getCreateId()
    {
        return $this->create_id;
    }

    /**
     * Set the value of create_time.
     *
     * @param datetime $create_time
     * @return \Entity\CareUnitMeasurement
     */
    public function setCreateTime($create_time)
    {
        $this->create_time = $create_time;

        return $this;
    }

    /**
     * Get the value of create_time.
     *
     * @return datetime
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function __sleep()
    {
        return array('nr', 'unit_type_nr', 'id', 'name', 'LD_var', 'sytem', 'use_frequency', 'status', 'modify_id', 'modify_time', 'create_id', 'create_time');
    }
}