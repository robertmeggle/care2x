<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\CareEncounterMeasurement
 *
 * InnoDB free: 10240 kB
 *
 * @ORM\Entity(repositoryClass="CareEncounterMeasurementRepository")
 * @ORM\Table(name="care_encounter_measurement", indexes={@ORM\Index(name="type", columns={"msr_type_nr"}), @ORM\Index(name="encounter_nr", columns={"encounter_nr"})})
 */
class CareEncounterMeasurement
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $nr;

    /**
     * @ORM\Column(type="date")
     */
    protected $msr_date;

    /**
     * @ORM\Column(type="float", precision=4, scale=2)
     */
    protected $msr_time;

    /**
     * @ORM\Column(type="integer")
     */
    protected $encounter_nr;

    /**
     * @ORM\Column(type="integer")
     */
    protected $msr_type_nr;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $value;

    /**
     * @ORM\Column(type="smallint", nullable=true)
     */
    protected $unit_nr;

    /**
     * @ORM\Column(type="integer")
     */
    protected $unit_type_nr;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $notes;

    /**
     * @ORM\Column(type="string", length=35)
     */
    protected $measured_by;

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
     * @return \Entity\CareEncounterMeasurement
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
     * Set the value of msr_date.
     *
     * @param datetime $msr_date
     * @return \Entity\CareEncounterMeasurement
     */
    public function setMsrDate($msr_date)
    {
        $this->msr_date = $msr_date;

        return $this;
    }

    /**
     * Get the value of msr_date.
     *
     * @return datetime
     */
    public function getMsrDate()
    {
        return $this->msr_date;
    }

    /**
     * Set the value of msr_time.
     *
     * @param float $msr_time
     * @return \Entity\CareEncounterMeasurement
     */
    public function setMsrTime($msr_time)
    {
        $this->msr_time = $msr_time;

        return $this;
    }

    /**
     * Get the value of msr_time.
     *
     * @return float
     */
    public function getMsrTime()
    {
        return $this->msr_time;
    }

    /**
     * Set the value of encounter_nr.
     *
     * @param integer $encounter_nr
     * @return \Entity\CareEncounterMeasurement
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
     * Set the value of msr_type_nr.
     *
     * @param integer $msr_type_nr
     * @return \Entity\CareEncounterMeasurement
     */
    public function setMsrTypeNr($msr_type_nr)
    {
        $this->msr_type_nr = $msr_type_nr;

        return $this;
    }

    /**
     * Get the value of msr_type_nr.
     *
     * @return integer
     */
    public function getMsrTypeNr()
    {
        return $this->msr_type_nr;
    }

    /**
     * Set the value of value.
     *
     * @param string $value
     * @return \Entity\CareEncounterMeasurement
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get the value of value.
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set the value of unit_nr.
     *
     * @param integer $unit_nr
     * @return \Entity\CareEncounterMeasurement
     */
    public function setUnitNr($unit_nr)
    {
        $this->unit_nr = $unit_nr;

        return $this;
    }

    /**
     * Get the value of unit_nr.
     *
     * @return integer
     */
    public function getUnitNr()
    {
        return $this->unit_nr;
    }

    /**
     * Set the value of unit_type_nr.
     *
     * @param integer $unit_type_nr
     * @return \Entity\CareEncounterMeasurement
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
     * Set the value of notes.
     *
     * @param string $notes
     * @return \Entity\CareEncounterMeasurement
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;

        return $this;
    }

    /**
     * Get the value of notes.
     *
     * @return string
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Set the value of measured_by.
     *
     * @param string $measured_by
     * @return \Entity\CareEncounterMeasurement
     */
    public function setMeasuredBy($measured_by)
    {
        $this->measured_by = $measured_by;

        return $this;
    }

    /**
     * Get the value of measured_by.
     *
     * @return string
     */
    public function getMeasuredBy()
    {
        return $this->measured_by;
    }

    /**
     * Set the value of status.
     *
     * @param string $status
     * @return \Entity\CareEncounterMeasurement
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
     * @return \Entity\CareEncounterMeasurement
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
     * @return \Entity\CareEncounterMeasurement
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
     * @return \Entity\CareEncounterMeasurement
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
     * @return \Entity\CareEncounterMeasurement
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
     * @return \Entity\CareEncounterMeasurement
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
        return array('nr', 'msr_date', 'msr_time', 'encounter_nr', 'msr_type_nr', 'value', 'unit_nr', 'unit_type_nr', 'notes', 'measured_by', 'status', 'history', 'modify_id', 'modify_time', 'create_id', 'create_time');
    }
}