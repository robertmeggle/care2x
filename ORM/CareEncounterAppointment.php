<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\CareEncounterAppointment
 *
 * InnoDB free: 4096 kB
 *
 * @ORM\Entity(repositoryClass="CareEncounterAppointmentRepository")
 * @ORM\Table(name="care_encounter_appointment", indexes={@ORM\Index(name="pid", columns={"pid"})})
 */
class CareEncounterAppointment
{
    /**
     * @ORM\Id
     * @ORM\Column(type="bigint")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $nr;

    /**
     * @ORM\Column(type="integer")
     */
    protected $pid;

    /**
     * @ORM\Column(type="date")
     */
    protected $date;

    /**
     * @ORM\Column(type="time")
     */
    protected $time;

    /**
     * @ORM\Column(type="string", length=25)
     */
    protected $to_dept_id;

    /**
     * @ORM\Column(type="smallint")
     */
    protected $to_dept_nr;

    /**
     * @ORM\Column(type="integer")
     */
    protected $to_personell_nr;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    protected $to_personell_name;

    /**
     * @ORM\Column(type="text")
     */
    protected $purpose;

    /**
     * @ORM\Column(type="integer")
     */
    protected $urgency;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $remind;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $remind_email;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $remind_mail;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $remind_phone;

    /**
     * @ORM\Column(type="string", length=35)
     */
    protected $appt_status;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $cancel_by;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    protected $cancel_date;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $cancel_reason;

    /**
     * @ORM\Column(type="integer")
     */
    protected $encounter_class_nr;

    /**
     * @ORM\Column(type="integer")
     */
    protected $encounter_nr;

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
     * @return \Entity\CareEncounterAppointment
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
     * Set the value of pid.
     *
     * @param integer $pid
     * @return \Entity\CareEncounterAppointment
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
     * Set the value of date.
     *
     * @param datetime $date
     * @return \Entity\CareEncounterAppointment
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
     * Set the value of time.
     *
     * @param datetime $time
     * @return \Entity\CareEncounterAppointment
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Get the value of time.
     *
     * @return datetime
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Set the value of to_dept_id.
     *
     * @param string $to_dept_id
     * @return \Entity\CareEncounterAppointment
     */
    public function setToDeptId($to_dept_id)
    {
        $this->to_dept_id = $to_dept_id;

        return $this;
    }

    /**
     * Get the value of to_dept_id.
     *
     * @return string
     */
    public function getToDeptId()
    {
        return $this->to_dept_id;
    }

    /**
     * Set the value of to_dept_nr.
     *
     * @param integer $to_dept_nr
     * @return \Entity\CareEncounterAppointment
     */
    public function setToDeptNr($to_dept_nr)
    {
        $this->to_dept_nr = $to_dept_nr;

        return $this;
    }

    /**
     * Get the value of to_dept_nr.
     *
     * @return integer
     */
    public function getToDeptNr()
    {
        return $this->to_dept_nr;
    }

    /**
     * Set the value of to_personell_nr.
     *
     * @param integer $to_personell_nr
     * @return \Entity\CareEncounterAppointment
     */
    public function setToPersonellNr($to_personell_nr)
    {
        $this->to_personell_nr = $to_personell_nr;

        return $this;
    }

    /**
     * Get the value of to_personell_nr.
     *
     * @return integer
     */
    public function getToPersonellNr()
    {
        return $this->to_personell_nr;
    }

    /**
     * Set the value of to_personell_name.
     *
     * @param string $to_personell_name
     * @return \Entity\CareEncounterAppointment
     */
    public function setToPersonellName($to_personell_name)
    {
        $this->to_personell_name = $to_personell_name;

        return $this;
    }

    /**
     * Get the value of to_personell_name.
     *
     * @return string
     */
    public function getToPersonellName()
    {
        return $this->to_personell_name;
    }

    /**
     * Set the value of purpose.
     *
     * @param string $purpose
     * @return \Entity\CareEncounterAppointment
     */
    public function setPurpose($purpose)
    {
        $this->purpose = $purpose;

        return $this;
    }

    /**
     * Get the value of purpose.
     *
     * @return string
     */
    public function getPurpose()
    {
        return $this->purpose;
    }

    /**
     * Set the value of urgency.
     *
     * @param integer $urgency
     * @return \Entity\CareEncounterAppointment
     */
    public function setUrgency($urgency)
    {
        $this->urgency = $urgency;

        return $this;
    }

    /**
     * Get the value of urgency.
     *
     * @return integer
     */
    public function getUrgency()
    {
        return $this->urgency;
    }

    /**
     * Set the value of remind.
     *
     * @param boolean $remind
     * @return \Entity\CareEncounterAppointment
     */
    public function setRemind($remind)
    {
        $this->remind = $remind;

        return $this;
    }

    /**
     * Get the value of remind.
     *
     * @return boolean
     */
    public function getRemind()
    {
        return $this->remind;
    }

    /**
     * Set the value of remind_email.
     *
     * @param boolean $remind_email
     * @return \Entity\CareEncounterAppointment
     */
    public function setRemindEmail($remind_email)
    {
        $this->remind_email = $remind_email;

        return $this;
    }

    /**
     * Get the value of remind_email.
     *
     * @return boolean
     */
    public function getRemindEmail()
    {
        return $this->remind_email;
    }

    /**
     * Set the value of remind_mail.
     *
     * @param boolean $remind_mail
     * @return \Entity\CareEncounterAppointment
     */
    public function setRemindMail($remind_mail)
    {
        $this->remind_mail = $remind_mail;

        return $this;
    }

    /**
     * Get the value of remind_mail.
     *
     * @return boolean
     */
    public function getRemindMail()
    {
        return $this->remind_mail;
    }

    /**
     * Set the value of remind_phone.
     *
     * @param boolean $remind_phone
     * @return \Entity\CareEncounterAppointment
     */
    public function setRemindPhone($remind_phone)
    {
        $this->remind_phone = $remind_phone;

        return $this;
    }

    /**
     * Get the value of remind_phone.
     *
     * @return boolean
     */
    public function getRemindPhone()
    {
        return $this->remind_phone;
    }

    /**
     * Set the value of appt_status.
     *
     * @param string $appt_status
     * @return \Entity\CareEncounterAppointment
     */
    public function setApptStatus($appt_status)
    {
        $this->appt_status = $appt_status;

        return $this;
    }

    /**
     * Get the value of appt_status.
     *
     * @return string
     */
    public function getApptStatus()
    {
        return $this->appt_status;
    }

    /**
     * Set the value of cancel_by.
     *
     * @param string $cancel_by
     * @return \Entity\CareEncounterAppointment
     */
    public function setCancelBy($cancel_by)
    {
        $this->cancel_by = $cancel_by;

        return $this;
    }

    /**
     * Get the value of cancel_by.
     *
     * @return string
     */
    public function getCancelBy()
    {
        return $this->cancel_by;
    }

    /**
     * Set the value of cancel_date.
     *
     * @param datetime $cancel_date
     * @return \Entity\CareEncounterAppointment
     */
    public function setCancelDate($cancel_date)
    {
        $this->cancel_date = $cancel_date;

        return $this;
    }

    /**
     * Get the value of cancel_date.
     *
     * @return datetime
     */
    public function getCancelDate()
    {
        return $this->cancel_date;
    }

    /**
     * Set the value of cancel_reason.
     *
     * @param string $cancel_reason
     * @return \Entity\CareEncounterAppointment
     */
    public function setCancelReason($cancel_reason)
    {
        $this->cancel_reason = $cancel_reason;

        return $this;
    }

    /**
     * Get the value of cancel_reason.
     *
     * @return string
     */
    public function getCancelReason()
    {
        return $this->cancel_reason;
    }

    /**
     * Set the value of encounter_class_nr.
     *
     * @param integer $encounter_class_nr
     * @return \Entity\CareEncounterAppointment
     */
    public function setEncounterClassNr($encounter_class_nr)
    {
        $this->encounter_class_nr = $encounter_class_nr;

        return $this;
    }

    /**
     * Get the value of encounter_class_nr.
     *
     * @return integer
     */
    public function getEncounterClassNr()
    {
        return $this->encounter_class_nr;
    }

    /**
     * Set the value of encounter_nr.
     *
     * @param integer $encounter_nr
     * @return \Entity\CareEncounterAppointment
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
     * Set the value of status.
     *
     * @param string $status
     * @return \Entity\CareEncounterAppointment
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
     * @return \Entity\CareEncounterAppointment
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
     * @return \Entity\CareEncounterAppointment
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
     * @return \Entity\CareEncounterAppointment
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
     * @return \Entity\CareEncounterAppointment
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
     * @return \Entity\CareEncounterAppointment
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
        return array('nr', 'pid', 'date', 'time', 'to_dept_id', 'to_dept_nr', 'to_personell_nr', 'to_personell_name', 'purpose', 'urgency', 'remind', 'remind_email', 'remind_mail', 'remind_phone', 'appt_status', 'cancel_by', 'cancel_date', 'cancel_reason', 'encounter_class_nr', 'encounter_nr', 'status', 'history', 'modify_id', 'modify_time', 'create_id', 'create_time');
    }
}