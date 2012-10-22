<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\CareTestFindingsRadio
 *
 * InnoDB free: 8192 kB
 *
 * @ORM\Entity(repositoryClass="CareTestFindingsRadioRepository")
 * @ORM\Table(name="care_test_findings_radio", indexes={@ORM\Index(name="send_date", columns={"findings_date"}), @ORM\Index(name="findings_date", columns={"findings_date"})})
 */
class CareTestFindingsRadio
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    protected $batch_nr;

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    protected $encounter_nr;

    /**
     * @ORM\Column(type="smallint")
     */
    protected $room_nr;

    /**
     * @ORM\Column(type="smallint")
     */
    protected $dept_nr;

    /**
     * @ORM\Column(type="text")
     */
    protected $findings;

    /**
     * @ORM\Column(type="text")
     */
    protected $diagnosis;

    /**
     * @ORM\Column(type="string", length=35)
     */
    protected $doctor_id;

    /**
     * @ORM\Column(type="date")
     */
    protected $findings_date;

    /**
     * @ORM\Column(type="time")
     */
    protected $findings_time;

    /**
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
     * @return \Entity\CareTestFindingsRadio
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
     * @return \Entity\CareTestFindingsRadio
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
     * @param integer $room_nr
     * @return \Entity\CareTestFindingsRadio
     */
    public function setRoomNr($room_nr)
    {
        $this->room_nr = $room_nr;

        return $this;
    }

    /**
     * Get the value of room_nr.
     *
     * @return integer
     */
    public function getRoomNr()
    {
        return $this->room_nr;
    }

    /**
     * Set the value of dept_nr.
     *
     * @param integer $dept_nr
     * @return \Entity\CareTestFindingsRadio
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
     * Set the value of findings.
     *
     * @param string $findings
     * @return \Entity\CareTestFindingsRadio
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
     * Set the value of diagnosis.
     *
     * @param string $diagnosis
     * @return \Entity\CareTestFindingsRadio
     */
    public function setDiagnosis($diagnosis)
    {
        $this->diagnosis = $diagnosis;

        return $this;
    }

    /**
     * Get the value of diagnosis.
     *
     * @return string
     */
    public function getDiagnosis()
    {
        return $this->diagnosis;
    }

    /**
     * Set the value of doctor_id.
     *
     * @param string $doctor_id
     * @return \Entity\CareTestFindingsRadio
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
     * @return \Entity\CareTestFindingsRadio
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
     * @return \Entity\CareTestFindingsRadio
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
     * @return \Entity\CareTestFindingsRadio
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
     * @return \Entity\CareTestFindingsRadio
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
     * @return \Entity\CareTestFindingsRadio
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
     * @return \Entity\CareTestFindingsRadio
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
     * @return \Entity\CareTestFindingsRadio
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
     * @return \Entity\CareTestFindingsRadio
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
        return array('batch_nr', 'encounter_nr', 'room_nr', 'dept_nr', 'findings', 'diagnosis', 'doctor_id', 'findings_date', 'findings_time', 'status', 'history', 'modify_id', 'modify_time', 'create_id', 'create_time');
    }
}