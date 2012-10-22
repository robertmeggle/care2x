<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\CareTechRepairDone
 *
 * InnoDB free: 8192 kB
 *
 * @ORM\Entity(repositoryClass="CareTechRepairDoneRepository")
 * @ORM\Table(name="care_tech_repair_done")
 */
class CareTechRepairDone
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $batch_nr;

    /**
     * @ORM\Column(type="string", length=15, nullable=true)
     */
    protected $dept;

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    protected $dept_nr;

    /**
     * @ORM\Column(type="string", length=15)
     */
    protected $job_id;

    /**
     * @ORM\Column(type="text")
     */
    protected $job;

    /**
     * @ORM\Column(type="string", length=25)
     */
    protected $reporter;

    /**
     * @ORM\Column(type="string", length=15)
     */
    protected $id;

    /**
     * @ORM\Column(type="date")
     */
    protected $tdate;

    /**
     * @ORM\Column(type="time")
     */
    protected $ttime;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $tid;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $seen;

    /**
     * @ORM\Column(type="string", length=8)
     */
    protected $d_idx;

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
     * @return \Entity\CareTechRepairDone
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
     * Set the value of dept.
     *
     * @param string $dept
     * @return \Entity\CareTechRepairDone
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
     * Set the value of dept_nr.
     *
     * @param integer $dept_nr
     * @return \Entity\CareTechRepairDone
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
     * Set the value of job_id.
     *
     * @param string $job_id
     * @return \Entity\CareTechRepairDone
     */
    public function setJobId($job_id)
    {
        $this->job_id = $job_id;

        return $this;
    }

    /**
     * Get the value of job_id.
     *
     * @return string
     */
    public function getJobId()
    {
        return $this->job_id;
    }

    /**
     * Set the value of job.
     *
     * @param string $job
     * @return \Entity\CareTechRepairDone
     */
    public function setJob($job)
    {
        $this->job = $job;

        return $this;
    }

    /**
     * Get the value of job.
     *
     * @return string
     */
    public function getJob()
    {
        return $this->job;
    }

    /**
     * Set the value of reporter.
     *
     * @param string $reporter
     * @return \Entity\CareTechRepairDone
     */
    public function setReporter($reporter)
    {
        $this->reporter = $reporter;

        return $this;
    }

    /**
     * Get the value of reporter.
     *
     * @return string
     */
    public function getReporter()
    {
        return $this->reporter;
    }

    /**
     * Set the value of id.
     *
     * @param string $id
     * @return \Entity\CareTechRepairDone
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of id.
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of tdate.
     *
     * @param datetime $tdate
     * @return \Entity\CareTechRepairDone
     */
    public function setTdate($tdate)
    {
        $this->tdate = $tdate;

        return $this;
    }

    /**
     * Get the value of tdate.
     *
     * @return datetime
     */
    public function getTdate()
    {
        return $this->tdate;
    }

    /**
     * Set the value of ttime.
     *
     * @param datetime $ttime
     * @return \Entity\CareTechRepairDone
     */
    public function setTtime($ttime)
    {
        $this->ttime = $ttime;

        return $this;
    }

    /**
     * Get the value of ttime.
     *
     * @return datetime
     */
    public function getTtime()
    {
        return $this->ttime;
    }

    /**
     * Set the value of tid.
     *
     * @param datetime $tid
     * @return \Entity\CareTechRepairDone
     */
    public function setTid($tid)
    {
        $this->tid = $tid;

        return $this;
    }

    /**
     * Get the value of tid.
     *
     * @return datetime
     */
    public function getTid()
    {
        return $this->tid;
    }

    /**
     * Set the value of seen.
     *
     * @param boolean $seen
     * @return \Entity\CareTechRepairDone
     */
    public function setSeen($seen)
    {
        $this->seen = $seen;

        return $this;
    }

    /**
     * Get the value of seen.
     *
     * @return boolean
     */
    public function getSeen()
    {
        return $this->seen;
    }

    /**
     * Set the value of d_idx.
     *
     * @param string $d_idx
     * @return \Entity\CareTechRepairDone
     */
    public function setDIdx($d_idx)
    {
        $this->d_idx = $d_idx;

        return $this;
    }

    /**
     * Get the value of d_idx.
     *
     * @return string
     */
    public function getDIdx()
    {
        return $this->d_idx;
    }

    /**
     * Set the value of status.
     *
     * @param string $status
     * @return \Entity\CareTechRepairDone
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
     * @return \Entity\CareTechRepairDone
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
     * @return \Entity\CareTechRepairDone
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
     * @return \Entity\CareTechRepairDone
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
     * @return \Entity\CareTechRepairDone
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
     * @return \Entity\CareTechRepairDone
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
        return array('batch_nr', 'dept', 'dept_nr', 'job_id', 'job', 'reporter', 'id', 'tdate', 'ttime', 'tid', 'seen', 'd_idx', 'status', 'history', 'modify_id', 'modify_time', 'create_id', 'create_time');
    }
}