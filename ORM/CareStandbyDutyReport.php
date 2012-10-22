<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\CareStandbyDutyReport
 *
 * InnoDB free: 8192 kB
 *
 * @ORM\Entity(repositoryClass="CareStandbyDutyReportRepository")
 * @ORM\Table(name="care_standby_duty_report", indexes={@ORM\Index(name="report_nr", columns={"report_nr"})})
 */
class CareStandbyDutyReport
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $report_nr;

    /**
     * @ORM\Column(type="string", length=15)
     */
    protected $dept;

    /**
     * @ORM\Column(type="date")
     */
    protected $date;

    /**
     * @ORM\Column(type="string", length=35)
     */
    protected $standby_name;

    /**
     * @ORM\Column(type="time")
     */
    protected $standby_start;

    /**
     * @ORM\Column(type="time")
     */
    protected $standby_end;

    /**
     * @ORM\Column(type="string", length=35)
     */
    protected $oncall_name;

    /**
     * @ORM\Column(type="time")
     */
    protected $oncall_start;

    /**
     * @ORM\Column(type="time")
     */
    protected $oncall_end;

    /**
     * @ORM\Column(type="string", length=2)
     */
    protected $op_room;

    /**
     * @ORM\Column(type="text")
     */
    protected $diagnosis_therapy;

    /**
     * @ORM\Column(type="text")
     */
    protected $encoding;

    /**
     * @ORM\Column(type="string", length=20)
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
     * Set the value of report_nr.
     *
     * @param integer $report_nr
     * @return \Entity\CareStandbyDutyReport
     */
    public function setReportNr($report_nr)
    {
        $this->report_nr = $report_nr;

        return $this;
    }

    /**
     * Get the value of report_nr.
     *
     * @return integer
     */
    public function getReportNr()
    {
        return $this->report_nr;
    }

    /**
     * Set the value of dept.
     *
     * @param string $dept
     * @return \Entity\CareStandbyDutyReport
     */
    public function setDept($dept)
    {
        $this->dept = $dept;

        return $this;
    }

    /**
     * Get the value of dept.
     *
     * @return string
     */
    public function getDept()
    {
        return $this->dept;
    }

    /**
     * Set the value of date.
     *
     * @param datetime $date
     * @return \Entity\CareStandbyDutyReport
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
     * Set the value of standby_name.
     *
     * @param string $standby_name
     * @return \Entity\CareStandbyDutyReport
     */
    public function setStandbyName($standby_name)
    {
        $this->standby_name = $standby_name;

        return $this;
    }

    /**
     * Get the value of standby_name.
     *
     * @return string
     */
    public function getStandbyName()
    {
        return $this->standby_name;
    }

    /**
     * Set the value of standby_start.
     *
     * @param datetime $standby_start
     * @return \Entity\CareStandbyDutyReport
     */
    public function setStandbyStart($standby_start)
    {
        $this->standby_start = $standby_start;

        return $this;
    }

    /**
     * Get the value of standby_start.
     *
     * @return datetime
     */
    public function getStandbyStart()
    {
        return $this->standby_start;
    }

    /**
     * Set the value of standby_end.
     *
     * @param datetime $standby_end
     * @return \Entity\CareStandbyDutyReport
     */
    public function setStandbyEnd($standby_end)
    {
        $this->standby_end = $standby_end;

        return $this;
    }

    /**
     * Get the value of standby_end.
     *
     * @return datetime
     */
    public function getStandbyEnd()
    {
        return $this->standby_end;
    }

    /**
     * Set the value of oncall_name.
     *
     * @param string $oncall_name
     * @return \Entity\CareStandbyDutyReport
     */
    public function setOncallName($oncall_name)
    {
        $this->oncall_name = $oncall_name;

        return $this;
    }

    /**
     * Get the value of oncall_name.
     *
     * @return string
     */
    public function getOncallName()
    {
        return $this->oncall_name;
    }

    /**
     * Set the value of oncall_start.
     *
     * @param datetime $oncall_start
     * @return \Entity\CareStandbyDutyReport
     */
    public function setOncallStart($oncall_start)
    {
        $this->oncall_start = $oncall_start;

        return $this;
    }

    /**
     * Get the value of oncall_start.
     *
     * @return datetime
     */
    public function getOncallStart()
    {
        return $this->oncall_start;
    }

    /**
     * Set the value of oncall_end.
     *
     * @param datetime $oncall_end
     * @return \Entity\CareStandbyDutyReport
     */
    public function setOncallEnd($oncall_end)
    {
        $this->oncall_end = $oncall_end;

        return $this;
    }

    /**
     * Get the value of oncall_end.
     *
     * @return datetime
     */
    public function getOncallEnd()
    {
        return $this->oncall_end;
    }

    /**
     * Set the value of op_room.
     *
     * @param string $op_room
     * @return \Entity\CareStandbyDutyReport
     */
    public function setOpRoom($op_room)
    {
        $this->op_room = $op_room;

        return $this;
    }

    /**
     * Get the value of op_room.
     *
     * @return string
     */
    public function getOpRoom()
    {
        return $this->op_room;
    }

    /**
     * Set the value of diagnosis_therapy.
     *
     * @param string $diagnosis_therapy
     * @return \Entity\CareStandbyDutyReport
     */
    public function setDiagnosisTherapy($diagnosis_therapy)
    {
        $this->diagnosis_therapy = $diagnosis_therapy;

        return $this;
    }

    /**
     * Get the value of diagnosis_therapy.
     *
     * @return string
     */
    public function getDiagnosisTherapy()
    {
        return $this->diagnosis_therapy;
    }

    /**
     * Set the value of encoding.
     *
     * @param string $encoding
     * @return \Entity\CareStandbyDutyReport
     */
    public function setEncoding($encoding)
    {
        $this->encoding = $encoding;

        return $this;
    }

    /**
     * Get the value of encoding.
     *
     * @return string
     */
    public function getEncoding()
    {
        return $this->encoding;
    }

    /**
     * Set the value of status.
     *
     * @param string $status
     * @return \Entity\CareStandbyDutyReport
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
     * @return \Entity\CareStandbyDutyReport
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
     * @return \Entity\CareStandbyDutyReport
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
     * @return \Entity\CareStandbyDutyReport
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
     * @return \Entity\CareStandbyDutyReport
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
     * @return \Entity\CareStandbyDutyReport
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
        return array('report_nr', 'dept', 'date', 'standby_name', 'standby_start', 'standby_end', 'oncall_name', 'oncall_start', 'oncall_end', 'op_room', 'diagnosis_therapy', 'encoding', 'status', 'history', 'modify_id', 'modify_time', 'create_id', 'create_time');
    }
}