<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\CareEncounterLocation
 *
 * InnoDB free: 10240 kB
 *
 * @ORM\Entity(repositoryClass="CareEncounterLocationRepository")
 * @ORM\Table(name="care_encounter_location", indexes={@ORM\Index(name="type", columns={"type_nr"}), @ORM\Index(name="location_id", columns={"location_nr"}), @ORM\Index(name="encounter_nr", columns={"encounter_nr"}), @ORM\Index(name="location_nr", columns={"location_nr"})})
 */
class CareEncounterLocation
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $nr;

    /**
     * @ORM\Column(type="integer")
     */
    protected $encounter_nr;

    /**
     * @ORM\Column(type="smallint")
     */
    protected $type_nr;

    /**
     * @ORM\Id
     * @ORM\Column(type="smallint")
     */
    protected $location_nr;

    /**
     * @ORM\Column(type="smallint")
     */
    protected $group_nr;

    /**
     * @ORM\Column(type="date")
     */
    protected $date_from;

    /**
     * @ORM\Column(type="date")
     */
    protected $date_to;

    /**
     * @ORM\Column(type="time", nullable=true)
     */
    protected $time_from;

    /**
     * @ORM\Column(type="time", nullable=true)
     */
    protected $time_to;

    /**
     * @ORM\Column(type="integer")
     */
    protected $discharge_type_nr;

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
     * @return \Entity\CareEncounterLocation
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
     * Set the value of encounter_nr.
     *
     * @param integer $encounter_nr
     * @return \Entity\CareEncounterLocation
     */
    public function setEncounterNr($encounter_nr)
    {
        $this->encounter_nr = $encounter_nr;

        return $this;
    }

    /**
     * Get the value of encounter_nr.
     *
     * @return integer
     */
    public function getEncounterNr()
    {
        return $this->encounter_nr;
    }

    /**
     * Set the value of type_nr.
     *
     * @param integer $type_nr
     * @return \Entity\CareEncounterLocation
     */
    public function setTypeNr($type_nr)
    {
        $this->type_nr = $type_nr;

        return $this;
    }

    /**
     * Get the value of type_nr.
     *
     * @return integer
     */
    public function getTypeNr()
    {
        return $this->type_nr;
    }

    /**
     * Set the value of location_nr.
     *
     * @param integer $location_nr
     * @return \Entity\CareEncounterLocation
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
     * Set the value of group_nr.
     *
     * @param integer $group_nr
     * @return \Entity\CareEncounterLocation
     */
    public function setGroupNr($group_nr)
    {
        $this->group_nr = $group_nr;

        return $this;
    }

    /**
     * Get the value of group_nr.
     *
     * @return integer
     */
    public function getGroupNr()
    {
        return $this->group_nr;
    }

    /**
     * Set the value of date_from.
     *
     * @param datetime $date_from
     * @return \Entity\CareEncounterLocation
     */
    public function setDateFrom($date_from)
    {
        $this->date_from = $date_from;

        return $this;
    }

    /**
     * Get the value of date_from.
     *
     * @return datetime
     */
    public function getDateFrom()
    {
        return $this->date_from;
    }

    /**
     * Set the value of date_to.
     *
     * @param datetime $date_to
     * @return \Entity\CareEncounterLocation
     */
    public function setDateTo($date_to)
    {
        $this->date_to = $date_to;

        return $this;
    }

    /**
     * Get the value of date_to.
     *
     * @return datetime
     */
    public function getDateTo()
    {
        return $this->date_to;
    }

    /**
     * Set the value of time_from.
     *
     * @param datetime $time_from
     * @return \Entity\CareEncounterLocation
     */
    public function setTimeFrom($time_from)
    {
        $this->time_from = $time_from;

        return $this;
    }

    /**
     * Get the value of time_from.
     *
     * @return datetime
     */
    public function getTimeFrom()
    {
        return $this->time_from;
    }

    /**
     * Set the value of time_to.
     *
     * @param datetime $time_to
     * @return \Entity\CareEncounterLocation
     */
    public function setTimeTo($time_to)
    {
        $this->time_to = $time_to;

        return $this;
    }

    /**
     * Get the value of time_to.
     *
     * @return datetime
     */
    public function getTimeTo()
    {
        return $this->time_to;
    }

    /**
     * Set the value of discharge_type_nr.
     *
     * @param integer $discharge_type_nr
     * @return \Entity\CareEncounterLocation
     */
    public function setDischargeTypeNr($discharge_type_nr)
    {
        $this->discharge_type_nr = $discharge_type_nr;

        return $this;
    }

    /**
     * Get the value of discharge_type_nr.
     *
     * @return integer
     */
    public function getDischargeTypeNr()
    {
        return $this->discharge_type_nr;
    }

    /**
     * Set the value of status.
     *
     * @param string $status
     * @return \Entity\CareEncounterLocation
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
     * @return \Entity\CareEncounterLocation
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
     * @return \Entity\CareEncounterLocation
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
     * @return \Entity\CareEncounterLocation
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
     * @return \Entity\CareEncounterLocation
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
     * @return \Entity\CareEncounterLocation
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
        return array('nr', 'encounter_nr', 'type_nr', 'location_nr', 'group_nr', 'date_from', 'date_to', 'time_from', 'time_to', 'discharge_type_nr', 'status', 'history', 'modify_id', 'modify_time', 'create_id', 'create_time');
    }
}