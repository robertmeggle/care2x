<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\CareTestFindingsBaclabor
 *
 * InnoDB free: 8192 kB
 *
 * @ORM\Entity(repositoryClass="CareTestFindingsBaclaborRepository")
 * @ORM\Table(name="care_test_findings_baclabor", indexes={@ORM\Index(name="findings_date", columns={"findings_date"}), @ORM\Index(name="rec_date", columns={"rec_date"})})
 */
class CareTestFindingsBaclabor
{
    /**
     * Test findings report number. Primary key
     *
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    protected $batch_nr;

    /**
     * Related encounter number
     *
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    protected $encounter_nr;

    /**
     * Room number, e.g. OP room. (foreign key)
     *
     * @ORM\Id
     * @ORM\Column(type="string", length=10)
     */
    protected $room_nr;

    /**
     * Department number (foreign key)
     *
     * @ORM\Id
     * @ORM\Column(type="smallint")
     */
    protected $dept_nr;

    /**
     * Supplementary remarks
     *
     * @ORM\Column(type="string", length=255)
     */
    protected $notes;

    /**
     * Initial findings text
     *
     * @ORM\Column(type="boolean")
     */
    protected $findings_init;

    /**
     * Current findings text
     *
     * @ORM\Column(type="boolean")
     */
    protected $findings_current;

    /**
     * Final findings report text
     *
     * @ORM\Column(type="boolean")
     */
    protected $findings_final;

    /**
     * Entry number
     *
     * @ORM\Column(type="string", length=10)
     */
    protected $entry_nr;

    /**
     * Reception date
     *
     * @ORM\Column(type="date")
     */
    protected $rec_date;

    /**
     * General type
     *
     * @ORM\Column(type="text")
     */
    protected $type_general;

    /**
     * Flag if resistant to anaerobic
     *
     * @ORM\Column(type="text")
     */
    protected $resist_anaerob;

    /**
     * Flag if resistant to aerobic
     *
     * @ORM\Column(type="text")
     */
    protected $resist_aerob;

    /**
     * General findings
     *
     * @ORM\Column(type="text")
     */
    protected $findings;

    /**
     * Doctors id
     *
     * @ORM\Column(type="string", length=35)
     */
    protected $doctor_id;

    /**
     * Date of findings report
     *
     * @ORM\Column(type="date")
     */
    protected $findings_date;

    /**
     * Time of findings report
     *
     * @ORM\Column(type="time")
     */
    protected $findings_time;

    /**
     * This record's status - initial or done
     *
     * @ORM\Column(type="string", length=10)
     */
    protected $status;

    /**
     * @ORM\Column(type="text", nullable=true)
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
     * Set the value of batch_nr.
     *
     * @param integer $batch_nr
     * @return \Entity\CareTestFindingsBaclabor
     */
    public function setBatchNr($batch_nr)
    {
        $this->batch_nr = $batch_nr;

        return $this;
    }

    /**
     * Get the value of batch_nr.
     *
     * @return integer
     */
    public function getBatchNr()
    {
        return $this->batch_nr;
    }

    /**
     * Set the value of encounter_nr.
     *
     * @param integer $encounter_nr
     * @return \Entity\CareTestFindingsBaclabor
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
     * Set the value of room_nr.
     *
     * @param string $room_nr
     * @return \Entity\CareTestFindingsBaclabor
     */
    public function setRoomNr($room_nr)
    {
        $this->room_nr = $room_nr;

        return $this;
    }

    /**
     * Get the value of room_nr.
     *
     * @return string
     */
    public function getRoomNr()
    {
        return $this->room_nr;
    }

    /**
     * Set the value of dept_nr.
     *
     * @param integer $dept_nr
     * @return \Entity\CareTestFindingsBaclabor
     */
    public function setDeptNr($dept_nr)
    {
        $this->dept_nr = $dept_nr;

        return $this;
    }

    /**
     * Get the value of dept_nr.
     *
     * @return integer
     */
    public function getDeptNr()
    {
        return $this->dept_nr;
    }

    /**
     * Set the value of notes.
     *
     * @param string $notes
     * @return \Entity\CareTestFindingsBaclabor
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
     * Set the value of findings_init.
     *
     * @param boolean $findings_init
     * @return \Entity\CareTestFindingsBaclabor
     */
    public function setFindingsInit($findings_init)
    {
        $this->findings_init = $findings_init;

        return $this;
    }

    /**
     * Get the value of findings_init.
     *
     * @return boolean
     */
    public function getFindingsInit()
    {
        return $this->findings_init;
    }

    /**
     * Set the value of findings_current.
     *
     * @param boolean $findings_current
     * @return \Entity\CareTestFindingsBaclabor
     */
    public function setFindingsCurrent($findings_current)
    {
        $this->findings_current = $findings_current;

        return $this;
    }

    /**
     * Get the value of findings_current.
     *
     * @return boolean
     */
    public function getFindingsCurrent()
    {
        return $this->findings_current;
    }

    /**
     * Set the value of findings_final.
     *
     * @param boolean $findings_final
     * @return \Entity\CareTestFindingsBaclabor
     */
    public function setFindingsFinal($findings_final)
    {
        $this->findings_final = $findings_final;

        return $this;
    }

    /**
     * Get the value of findings_final.
     *
     * @return boolean
     */
    public function getFindingsFinal()
    {
        return $this->findings_final;
    }

    /**
     * Set the value of entry_nr.
     *
     * @param string $entry_nr
     * @return \Entity\CareTestFindingsBaclabor
     */
    public function setEntryNr($entry_nr)
    {
        $this->entry_nr = $entry_nr;

        return $this;
    }

    /**
     * Get the value of entry_nr.
     *
     * @return string
     */
    public function getEntryNr()
    {
        return $this->entry_nr;
    }

    /**
     * Set the value of rec_date.
     *
     * @param datetime $rec_date
     * @return \Entity\CareTestFindingsBaclabor
     */
    public function setRecDate($rec_date)
    {
        $this->rec_date = $rec_date;

        return $this;
    }

    /**
     * Get the value of rec_date.
     *
     * @return datetime
     */
    public function getRecDate()
    {
        return $this->rec_date;
    }

    /**
     * Set the value of type_general.
     *
     * @param string $type_general
     * @return \Entity\CareTestFindingsBaclabor
     */
    public function setTypeGeneral($type_general)
    {
        $this->type_general = $type_general;

        return $this;
    }

    /**
     * Get the value of type_general.
     *
     * @return string
     */
    public function getTypeGeneral()
    {
        return $this->type_general;
    }

    /**
     * Set the value of resist_anaerob.
     *
     * @param string $resist_anaerob
     * @return \Entity\CareTestFindingsBaclabor
     */
    public function setResistAnaerob($resist_anaerob)
    {
        $this->resist_anaerob = $resist_anaerob;

        return $this;
    }

    /**
     * Get the value of resist_anaerob.
     *
     * @return string
     */
    public function getResistAnaerob()
    {
        return $this->resist_anaerob;
    }

    /**
     * Set the value of resist_aerob.
     *
     * @param string $resist_aerob
     * @return \Entity\CareTestFindingsBaclabor
     */
    public function setResistAerob($resist_aerob)
    {
        $this->resist_aerob = $resist_aerob;

        return $this;
    }

    /**
     * Get the value of resist_aerob.
     *
     * @return string
     */
    public function getResistAerob()
    {
        return $this->resist_aerob;
    }

    /**
     * Set the value of findings.
     *
     * @param string $findings
     * @return \Entity\CareTestFindingsBaclabor
     */
    public function setFindings($findings)
    {
        $this->findings = $findings;

        return $this;
    }

    /**
     * Get the value of findings.
     *
     * @return string
     */
    public function getFindings()
    {
        return $this->findings;
    }

    /**
     * Set the value of doctor_id.
     *
     * @param string $doctor_id
     * @return \Entity\CareTestFindingsBaclabor
     */
    public function setDoctorId($doctor_id)
    {
        $this->doctor_id = $doctor_id;

        return $this;
    }

    /**
     * Get the value of doctor_id.
     *
     * @return string
     */
    public function getDoctorId()
    {
        return $this->doctor_id;
    }

    /**
     * Set the value of findings_date.
     *
     * @param datetime $findings_date
     * @return \Entity\CareTestFindingsBaclabor
     */
    public function setFindingsDate($findings_date)
    {
        $this->findings_date = $findings_date;

        return $this;
    }

    /**
     * Get the value of findings_date.
     *
     * @return datetime
     */
    public function getFindingsDate()
    {
        return $this->findings_date;
    }

    /**
     * Set the value of findings_time.
     *
     * @param datetime $findings_time
     * @return \Entity\CareTestFindingsBaclabor
     */
    public function setFindingsTime($findings_time)
    {
        $this->findings_time = $findings_time;

        return $this;
    }

    /**
     * Get the value of findings_time.
     *
     * @return datetime
     */
    public function getFindingsTime()
    {
        return $this->findings_time;
    }

    /**
     * Set the value of status.
     *
     * @param string $status
     * @return \Entity\CareTestFindingsBaclabor
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
     * @return \Entity\CareTestFindingsBaclabor
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
     * @return \Entity\CareTestFindingsBaclabor
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
     * @return \Entity\CareTestFindingsBaclabor
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
     * @return \Entity\CareTestFindingsBaclabor
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
     * @return \Entity\CareTestFindingsBaclabor
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
        return array('batch_nr', 'encounter_nr', 'room_nr', 'dept_nr', 'notes', 'findings_init', 'findings_current', 'findings_final', 'entry_nr', 'rec_date', 'type_general', 'resist_anaerob', 'resist_aerob', 'findings', 'doctor_id', 'findings_date', 'findings_time', 'status', 'history', 'modify_id', 'modify_time', 'create_id', 'create_time');
    }
}