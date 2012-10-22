<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\CareEncounterImmunization
 *
 * InnoDB free: 10240 kB
 *
 * @ORM\Entity(repositoryClass="CareEncounterImmunizationRepository")
 * @ORM\Table(name="care_encounter_immunization")
 */
class CareEncounterImmunization
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
     * @ORM\Column(type="date")
     */
    protected $date;

    /**
     * @ORM\Column(type="string", length=60)
     */
    protected $type;

    /**
     * @ORM\Column(type="string", length=60)
     */
    protected $medicine;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    protected $dosage;

    /**
     * @ORM\Column(type="smallint")
     */
    protected $application_type_nr;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    protected $application_by;

    /**
     * @ORM\Column(type="string", length=15, nullable=true)
     */
    protected $titer;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    protected $refresh_date;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $notes;

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
     * @return \Entity\CareEncounterImmunization
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
     * @return \Entity\CareEncounterImmunization
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
     * Set the value of date.
     *
     * @param datetime $date
     * @return \Entity\CareEncounterImmunization
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get the value of date.
     *
     * @return datetime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set the value of type.
     *
     * @param string $type
     * @return \Entity\CareEncounterImmunization
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
     * Set the value of medicine.
     *
     * @param string $medicine
     * @return \Entity\CareEncounterImmunization
     */
    public function setMedicine($medicine)
    {
        $this->medicine = $medicine;

        return $this;
    }

    /**
     * Get the value of medicine.
     *
     * @return string
     */
    public function getMedicine()
    {
        return $this->medicine;
    }

    /**
     * Set the value of dosage.
     *
     * @param string $dosage
     * @return \Entity\CareEncounterImmunization
     */
    public function setDosage($dosage)
    {
        $this->dosage = $dosage;

        return $this;
    }

    /**
     * Get the value of dosage.
     *
     * @return string
     */
    public function getDosage()
    {
        return $this->dosage;
    }

    /**
     * Set the value of application_type_nr.
     *
     * @param integer $application_type_nr
     * @return \Entity\CareEncounterImmunization
     */
    public function setApplicationTypeNr($application_type_nr)
    {
        $this->application_type_nr = $application_type_nr;

        return $this;
    }

    /**
     * Get the value of application_type_nr.
     *
     * @return integer
     */
    public function getApplicationTypeNr()
    {
        return $this->application_type_nr;
    }

    /**
     * Set the value of application_by.
     *
     * @param string $application_by
     * @return \Entity\CareEncounterImmunization
     */
    public function setApplicationBy($application_by)
    {
        $this->application_by = $application_by;

        return $this;
    }

    /**
     * Get the value of application_by.
     *
     * @return string
     */
    public function getApplicationBy()
    {
        return $this->application_by;
    }

    /**
     * Set the value of titer.
     *
     * @param string $titer
     * @return \Entity\CareEncounterImmunization
     */
    public function setTiter($titer)
    {
        $this->titer = $titer;

        return $this;
    }

    /**
     * Get the value of titer.
     *
     * @return string
     */
    public function getTiter()
    {
        return $this->titer;
    }

    /**
     * Set the value of refresh_date.
     *
     * @param datetime $refresh_date
     * @return \Entity\CareEncounterImmunization
     */
    public function setRefreshDate($refresh_date)
    {
        $this->refresh_date = $refresh_date;

        return $this;
    }

    /**
     * Get the value of refresh_date.
     *
     * @return datetime
     */
    public function getRefreshDate()
    {
        return $this->refresh_date;
    }

    /**
     * Set the value of notes.
     *
     * @param string $notes
     * @return \Entity\CareEncounterImmunization
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
     * Set the value of status.
     *
     * @param string $status
     * @return \Entity\CareEncounterImmunization
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
     * @return \Entity\CareEncounterImmunization
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
     * @return \Entity\CareEncounterImmunization
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
     * @return \Entity\CareEncounterImmunization
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
     * @return \Entity\CareEncounterImmunization
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
     * @return \Entity\CareEncounterImmunization
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
        return array('nr', 'encounter_nr', 'date', 'type', 'medicine', 'dosage', 'application_type_nr', 'application_by', 'titer', 'refresh_date', 'notes', 'status', 'history', 'modify_id', 'modify_time', 'create_id', 'create_time');
    }
}