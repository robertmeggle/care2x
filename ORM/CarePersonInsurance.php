<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\CarePersonInsurance
 *
 * InnoDB free: 9216 kB
 *
 * @ORM\Entity(repositoryClass="CarePersonInsuranceRepository")
 * @ORM\Table(name="care_person_insurance")
 */
class CarePersonInsurance
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $item_nr;

    /**
     * @ORM\Column(type="integer")
     */
    protected $pid;

    /**
     * @ORM\Column(type="string", length=60)
     */
    protected $type;

    /**
     * @ORM\Column(type="string", length=50)
     */
    protected $insurance_nr;

    /**
     * @ORM\Column(type="string", length=60)
     */
    protected $firm_id;

    /**
     * @ORM\Column(type="integer")
     */
    protected $class_nr;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $is_void;

    /**
     * @ORM\Column(type="string", length=25)
     */
    protected $status;

    /**
     * @ORM\Column(type="text")
     */
    protected $history;

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
     * Set the value of item_nr.
     *
     * @param integer $item_nr
     * @return \Entity\CarePersonInsurance
     */
    public function setItemNr($item_nr)
    {
        $this->item_nr = $item_nr;

        return $this;
    }

    /**
     * Get the value of item_nr.
     *
     * @return integer
     */
    public function getItemNr()
    {
        return $this->item_nr;
    }

    /**
     * Set the value of pid.
     *
     * @param integer $pid
     * @return \Entity\CarePersonInsurance
     */
    public function setPid($pid)
    {
        $this->pid = $pid;

        return $this;
    }

    /**
     * Get the value of pid.
     *
     * @return integer
     */
    public function getPid()
    {
        return $this->pid;
    }

    /**
     * Set the value of type.
     *
     * @param string $type
     * @return \Entity\CarePersonInsurance
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get the value of type.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of insurance_nr.
     *
     * @param string $insurance_nr
     * @return \Entity\CarePersonInsurance
     */
    public function setInsuranceNr($insurance_nr)
    {
        $this->insurance_nr = $insurance_nr;

        return $this;
    }

    /**
     * Get the value of insurance_nr.
     *
     * @return string
     */
    public function getInsuranceNr()
    {
        return $this->insurance_nr;
    }

    /**
     * Set the value of firm_id.
     *
     * @param string $firm_id
     * @return \Entity\CarePersonInsurance
     */
    public function setFirmId($firm_id)
    {
        $this->firm_id = $firm_id;

        return $this;
    }

    /**
     * Get the value of firm_id.
     *
     * @return string
     */
    public function getFirmId()
    {
        return $this->firm_id;
    }

    /**
     * Set the value of class_nr.
     *
     * @param integer $class_nr
     * @return \Entity\CarePersonInsurance
     */
    public function setClassNr($class_nr)
    {
        $this->class_nr = $class_nr;

        return $this;
    }

    /**
     * Get the value of class_nr.
     *
     * @return integer
     */
    public function getClassNr()
    {
        return $this->class_nr;
    }

    /**
     * Set the value of is_void.
     *
     * @param boolean $is_void
     * @return \Entity\CarePersonInsurance
     */
    public function setIsVoid($is_void)
    {
        $this->is_void = $is_void;

        return $this;
    }

    /**
     * Get the value of is_void.
     *
     * @return boolean
     */
    public function getIsVoid()
    {
        return $this->is_void;
    }

    /**
     * Set the value of status.
     *
     * @param string $status
     * @return \Entity\CarePersonInsurance
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
     * Set the value of history.
     *
     * @param string $history
     * @return \Entity\CarePersonInsurance
     */
    public function setHistory($history)
    {
        $this->history = $history;

        return $this;
    }

    /**
     * Get the value of history.
     *
     * @return string
     */
    public function getHistory()
    {
        return $this->history;
    }

    /**
     * Set the value of modify_id.
     *
     * @param string $modify_id
     * @return \Entity\CarePersonInsurance
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
     * @return \Entity\CarePersonInsurance
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
     * @return \Entity\CarePersonInsurance
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
     * @return \Entity\CarePersonInsurance
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
        return array('item_nr', 'pid', 'type', 'insurance_nr', 'firm_id', 'class_nr', 'is_void', 'status', 'history', 'modify_id', 'modify_time', 'create_id', 'create_time');
    }
}