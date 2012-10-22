<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\CareEncounterDiagnosticsReport
 *
 * InnoDB free: 10240 kB
 *
 * @ORM\Entity(repositoryClass="CareEncounterDiagnosticsReportRepository")
 * @ORM\Table(name="care_encounter_diagnostics_report", indexes={@ORM\Index(name="report_nr", columns={"report_nr"})})
 */
class CareEncounterDiagnosticsReport
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $item_nr;

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    protected $report_nr;

    /**
     * @ORM\Column(type="smallint")
     */
    protected $reporting_dept_nr;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $reporting_dept;

    /**
     * @ORM\Column(type="date")
     */
    protected $report_date;

    /**
     * @ORM\Column(type="time")
     */
    protected $report_time;

    /**
     * @ORM\Column(type="integer")
     */
    protected $encounter_nr;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $script_call;

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
     * @return \Entity\CareEncounterDiagnosticsReport
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
     * Set the value of report_nr.
     *
     * @param integer $report_nr
     * @return \Entity\CareEncounterDiagnosticsReport
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
     * Set the value of reporting_dept_nr.
     *
     * @param integer $reporting_dept_nr
     * @return \Entity\CareEncounterDiagnosticsReport
     */
    public function setReportingDeptNr($reporting_dept_nr)
    {
        $this->reporting_dept_nr = $reporting_dept_nr;

        return $this;
    }

    /**
     * Get the value of reporting_dept_nr.
     *
     * @return integer
     */
    public function getReportingDeptNr()
    {
        return $this->reporting_dept_nr;
    }

    /**
     * Set the value of reporting_dept.
     *
     * @param string $reporting_dept
     * @return \Entity\CareEncounterDiagnosticsReport
     */
    public function setReportingDept($reporting_dept)
    {
        $this->reporting_dept = $reporting_dept;

        return $this;
    }

    /**
     * Get the value of reporting_dept.
     *
     * @return string
     */
    public function getReportingDept()
    {
        return $this->reporting_dept;
    }

    /**
     * Set the value of report_date.
     *
     * @param datetime $report_date
     * @return \Entity\CareEncounterDiagnosticsReport
     */
    public function setReportDate($report_date)
    {
        $this->report_date = $report_date;

        return $this;
    }

    /**
     * Get the value of report_date.
     *
     * @return datetime
     */
    public function getReportDate()
    {
        return $this->report_date;
    }

    /**
     * Set the value of report_time.
     *
     * @param datetime $report_time
     * @return \Entity\CareEncounterDiagnosticsReport
     */
    public function setReportTime($report_time)
    {
        $this->report_time = $report_time;

        return $this;
    }

    /**
     * Get the value of report_time.
     *
     * @return datetime
     */
    public function getReportTime()
    {
        return $this->report_time;
    }

    /**
     * Set the value of encounter_nr.
     *
     * @param integer $encounter_nr
     * @return \Entity\CareEncounterDiagnosticsReport
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
     * Set the value of script_call.
     *
     * @param string $script_call
     * @return \Entity\CareEncounterDiagnosticsReport
     */
    public function setScriptCall($script_call)
    {
        $this->script_call = $script_call;

        return $this;
    }

    /**
     * Get the value of script_call.
     *
     * @return string
     */
    public function getScriptCall()
    {
        return $this->script_call;
    }

    /**
     * Set the value of status.
     *
     * @param string $status
     * @return \Entity\CareEncounterDiagnosticsReport
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
     * @return \Entity\CareEncounterDiagnosticsReport
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
     * @return \Entity\CareEncounterDiagnosticsReport
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
     * @return \Entity\CareEncounterDiagnosticsReport
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
     * @return \Entity\CareEncounterDiagnosticsReport
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
     * @return \Entity\CareEncounterDiagnosticsReport
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
        return array('item_nr', 'report_nr', 'reporting_dept_nr', 'reporting_dept', 'report_date', 'report_time', 'encounter_nr', 'script_call', 'status', 'history', 'modify_id', 'modify_time', 'create_id', 'create_time');
    }
}