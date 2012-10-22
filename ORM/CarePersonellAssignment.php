<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\CarePersonellAssignment
 *
 * InnoDB free: 9216 kB
 *
 * @ORM\Entity(repositoryClass="CarePersonellAssignmentRepository")
 * @ORM\Table(name="care_personell_assignment", indexes={@ORM\Index(name="personell_nr", columns={"personell_nr"})})
 */
class CarePersonellAssignment
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $nr;

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    protected $personell_nr;

    /**
     * @ORM\Id
     * @ORM\Column(type="smallint")
     */
    protected $role_nr;

    /**
     * @ORM\Id
     * @ORM\Column(type="smallint")
     */
    protected $location_type_nr;

    /**
     * @ORM\Id
     * @ORM\Column(type="smallint")
     */
    protected $location_nr;

    /**
     * @ORM\Column(type="date")
     */
    protected $date_start;

    /**
     * @ORM\Column(type="date")
     */
    protected $date_end;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    protected $is_temporary;

    /**
     * @ORM\Column(type="integer")
     */
    protected $list_frequency;

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
     * Set the value of nr.
     *
     * @param integer $nr
     * @return \Entity\CarePersonellAssignment
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
     * Set the value of personell_nr.
     *
     * @param integer $personell_nr
     * @return \Entity\CarePersonellAssignment
     */
    public function setPersonellNr($personell_nr)
    {
        $this->personell_nr = $personell_nr;

        return $this;
    }

    /**
     * Get the value of personell_nr.
     *
     * @return integer
     */
    public function getPersonellNr()
    {
        return $this->personell_nr;
    }

    /**
     * Set the value of role_nr.
     *
     * @param integer $role_nr
     * @return \Entity\CarePersonellAssignment
     */
    public function setRoleNr($role_nr)
    {
        $this->role_nr = $role_nr;

        return $this;
    }

    /**
     * Get the value of role_nr.
     *
     * @return integer
     */
    public function getRoleNr()
    {
        return $this->role_nr;
    }

    /**
     * Set the value of location_type_nr.
     *
     * @param integer $location_type_nr
     * @return \Entity\CarePersonellAssignment
     */
    public function setLocationTypeNr($location_type_nr)
    {
        $this->location_type_nr = $location_type_nr;

        return $this;
    }

    /**
     * Get the value of location_type_nr.
     *
     * @return integer
     */
    public function getLocationTypeNr()
    {
        return $this->location_type_nr;
    }

    /**
     * Set the value of location_nr.
     *
     * @param integer $location_nr
     * @return \Entity\CarePersonellAssignment
     */
    public function setLocationNr($location_nr)
    {
        $this->location_nr = $location_nr;

        return $this;
    }

    /**
     * Get the value of location_nr.
     *
     * @return integer
     */
    public function getLocationNr()
    {
        return $this->location_nr;
    }

    /**
     * Set the value of date_start.
     *
     * @param datetime $date_start
     * @return \Entity\CarePersonellAssignment
     */
    public function setDateStart($date_start)
    {
        $this->date_start = $date_start;

        return $this;
    }

    /**
     * Get the value of date_start.
     *
     * @return datetime
     */
    public function getDateStart()
    {
        return $this->date_start;
    }

    /**
     * Set the value of date_end.
     *
     * @param datetime $date_end
     * @return \Entity\CarePersonellAssignment
     */
    public function setDateEnd($date_end)
    {
        $this->date_end = $date_end;

        return $this;
    }

    /**
     * Get the value of date_end.
     *
     * @return datetime
     */
    public function getDateEnd()
    {
        return $this->date_end;
    }

    /**
     * Set the value of is_temporary.
     *
     * @param boolean $is_temporary
     * @return \Entity\CarePersonellAssignment
     */
    public function setIsTemporary($is_temporary)
    {
        $this->is_temporary = $is_temporary;

        return $this;
    }

    /**
     * Get the value of is_temporary.
     *
     * @return boolean
     */
    public function getIsTemporary()
    {
        return $this->is_temporary;
    }

    /**
     * Set the value of list_frequency.
     *
     * @param integer $list_frequency
     * @return \Entity\CarePersonellAssignment
     */
    public function setListFrequency($list_frequency)
    {
        $this->list_frequency = $list_frequency;

        return $this;
    }

    /**
     * Get the value of list_frequency.
     *
     * @return integer
     */
    public function getListFrequency()
    {
        return $this->list_frequency;
    }

    /**
     * Set the value of status.
     *
     * @param string $status
     * @return \Entity\CarePersonellAssignment
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
     * @return \Entity\CarePersonellAssignment
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
     * @return \Entity\CarePersonellAssignment
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
     * @return \Entity\CarePersonellAssignment
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
     * @return \Entity\CarePersonellAssignment
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
     * @return \Entity\CarePersonellAssignment
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
        return array('nr', 'personell_nr', 'role_nr', 'location_type_nr', 'location_nr', 'date_start', 'date_end', 'is_temporary', 'list_frequency', 'status', 'history', 'modify_id', 'modify_time', 'create_id', 'create_time');
    }
}