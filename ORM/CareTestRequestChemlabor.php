<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\CareTestRequestChemlabor
 *
 * InnoDB free: 8192 kB
 *
 * @ORM\Entity(repositoryClass="CareTestRequestChemlaborRepository")
 * @ORM\Table(name="care_test_request_chemlabor", indexes={@ORM\Index(name="encounter_nr", columns={"encounter_nr"})})
 */
class CareTestRequestChemlabor
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $batch_nr;

    /**
     * @ORM\Column(type="integer")
     */
    protected $encounter_nr;

    /**
     * @ORM\Column(type="string", length=10)
     */
    protected $room_nr;

    /**
     * @ORM\Column(type="smallint")
     */
    protected $dept_nr;

    /**
     * @ORM\Column(type="text")
     */
    protected $parameters;

    /**
     * @ORM\Column(type="string", length=35)
     */
    protected $doctor_sign;

    /**
     * @ORM\Column(type="smallint")
     */
    protected $highrisk;

    /**
     * @ORM\Column(type="text")
     */
    protected $notes;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $send_date;

    /**
     * @ORM\Column(type="time")
     */
    protected $sample_time;

    /**
     * @ORM\Column(type="integer")
     */
    protected $urgent;

    /**
     * @ORM\Column(type="smallint")
     */
    protected $sample_weekday;

    /**
     * @ORM\Column(type="string", length=15)
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
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $create_time;

    public function __construct()
    {
    }

    /**
     * Set the value of batch_nr.
     *
     * @param integer $batch_nr
     * @return \Entity\CareTestRequestChemlabor
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
     * @return \Entity\CareTestRequestChemlabor
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
     * @return \Entity\CareTestRequestChemlabor
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
     * @return \Entity\CareTestRequestChemlabor
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
     * Set the value of parameters.
     *
     * @param string $parameters
     * @return \Entity\CareTestRequestChemlabor
     */
    public function setParameters($parameters)
    {
        $this->parameters = $parameters;

        return $this;
    }

    /**
     * Get the value of parameters.
     *
     * @return string
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Set the value of doctor_sign.
     *
     * @param string $doctor_sign
     * @return \Entity\CareTestRequestChemlabor
     */
    public function setDoctorSign($doctor_sign)
    {
        $this->doctor_sign = $doctor_sign;

        return $this;
    }

    /**
     * Get the value of doctor_sign.
     *
     * @return string
     */
    public function getDoctorSign()
    {
        return $this->doctor_sign;
    }

    /**
     * Set the value of highrisk.
     *
     * @param integer $highrisk
     * @return \Entity\CareTestRequestChemlabor
     */
    public function setHighrisk($highrisk)
    {
        $this->highrisk = $highrisk;

        return $this;
    }

    /**
     * Get the value of highrisk.
     *
     * @return integer
     */
    public function getHighrisk()
    {
        return $this->highrisk;
    }

    /**
     * Set the value of notes.
     *
     * @param string $notes
     * @return \Entity\CareTestRequestChemlabor
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
     * Set the value of send_date.
     *
     * @param datetime $send_date
     * @return \Entity\CareTestRequestChemlabor
     */
    public function setSendDate($send_date)
    {
        $this->send_date = $send_date;

        return $this;
    }

    /**
     * Get the value of send_date.
     *
     * @return datetime
     */
    public function getSendDate()
    {
        return $this->send_date;
    }

    /**
     * Set the value of sample_time.
     *
     * @param datetime $sample_time
     * @return \Entity\CareTestRequestChemlabor
     */
    public function setSampleTime($sample_time)
    {
        $this->sample_time = $sample_time;

        return $this;
    }

    /**
     * Get the value of sample_time.
     *
     * @return datetime
     */
    public function getSampleTime()
    {
        return $this->sample_time;
    }

    /**
     * Set the value of urgent.
     *
     * @param integer $urgent
     * @return \Entity\CareTestRequestChemlabor
     */
    public function setUrgent($urgent)
    {
        $this->urgent = $urgent;

        return $this;
    }

    /**
     * Get the value of urgent.
     *
     * @return integer
     */
    public function getUrgent()
    {
        return $this->urgent;
    }

    /**
     * Set the value of sample_weekday.
     *
     * @param integer $sample_weekday
     * @return \Entity\CareTestRequestChemlabor
     */
    public function setSampleWeekday($sample_weekday)
    {
        $this->sample_weekday = $sample_weekday;

        return $this;
    }

    /**
     * Get the value of sample_weekday.
     *
     * @return integer
     */
    public function getSampleWeekday()
    {
        return $this->sample_weekday;
    }

    /**
     * Set the value of status.
     *
     * @param string $status
     * @return \Entity\CareTestRequestChemlabor
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
     * @return \Entity\CareTestRequestChemlabor
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
     * @return \Entity\CareTestRequestChemlabor
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
     * @return \Entity\CareTestRequestChemlabor
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
     * @return \Entity\CareTestRequestChemlabor
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
     * @return \Entity\CareTestRequestChemlabor
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
        return array('batch_nr', 'encounter_nr', 'room_nr', 'dept_nr', 'parameters', 'doctor_sign', 'highrisk', 'notes', 'send_date', 'sample_time', 'urgent', 'sample_weekday', 'status', 'history', 'modify_id', 'modify_time', 'create_id', 'create_time');
    }
}