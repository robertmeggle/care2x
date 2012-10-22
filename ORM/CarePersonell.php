<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\CarePersonell
 *
 * InnoDB free: 9216 kB
 *
 * @ORM\Entity(repositoryClass="CarePersonellRepository")
 * @ORM\Table(name="care_personell", indexes={@ORM\Index(name="pid", columns={"pid"})})
 */
class CarePersonell
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $nr;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    protected $short_id;

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    protected $pid;

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    protected $job_type_nr;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    protected $job_function_title;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    protected $date_join;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    protected $date_exit;

    /**
     * @ORM\Column(type="string", length=35)
     */
    protected $contract_class;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    protected $contract_start;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    protected $contract_end;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $is_discharged;

    /**
     * @ORM\Column(type="string", length=25)
     */
    protected $pay_class;

    /**
     * @ORM\Column(type="string", length=25)
     */
    protected $pay_class_sub;

    /**
     * @ORM\Column(type="string", length=5)
     */
    protected $local_premium_id;

    /**
     * @ORM\Column(type="string", length=60)
     */
    protected $tax_account_nr;

    /**
     * @ORM\Column(type="string", length=25)
     */
    protected $ir_code;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $nr_workday;

    /**
     * @ORM\Column(type="float", precision=10, scale=2)
     */
    protected $nr_weekhour;

    /**
     * @ORM\Column(type="integer")
     */
    protected $nr_vacation_day;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $multiple_employer;

    /**
     * @ORM\Column(type="integer")
     */
    protected $nr_dependent;

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
     * @return \Entity\CarePersonell
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
     * Set the value of short_id.
     *
     * @param string $short_id
     * @return \Entity\CarePersonell
     */
    public function setShortId($short_id)
    {
        $this->short_id = $short_id;

        return $this;
    }

    /**
     * Get the value of short_id.
     *
     * @return string
     */
    public function getShortId()
    {
        return $this->short_id;
    }

    /**
     * Set the value of pid.
     *
     * @param integer $pid
     * @return \Entity\CarePersonell
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
     * Set the value of job_type_nr.
     *
     * @param integer $job_type_nr
     * @return \Entity\CarePersonell
     */
    public function setJobTypeNr($job_type_nr)
    {
        $this->job_type_nr = $job_type_nr;

        return $this;
    }

    /**
     * Get the value of job_type_nr.
     *
     * @return integer
     */
    public function getJobTypeNr()
    {
        return $this->job_type_nr;
    }

    /**
     * Set the value of job_function_title.
     *
     * @param string $job_function_title
     * @return \Entity\CarePersonell
     */
    public function setJobFunctionTitle($job_function_title)
    {
        $this->job_function_title = $job_function_title;

        return $this;
    }

    /**
     * Get the value of job_function_title.
     *
     * @return string
     */
    public function getJobFunctionTitle()
    {
        return $this->job_function_title;
    }

    /**
     * Set the value of date_join.
     *
     * @param datetime $date_join
     * @return \Entity\CarePersonell
     */
    public function setDateJoin($date_join)
    {
        $this->date_join = $date_join;

        return $this;
    }

    /**
     * Get the value of date_join.
     *
     * @return datetime
     */
    public function getDateJoin()
    {
        return $this->date_join;
    }

    /**
     * Set the value of date_exit.
     *
     * @param datetime $date_exit
     * @return \Entity\CarePersonell
     */
    public function setDateExit($date_exit)
    {
        $this->date_exit = $date_exit;

        return $this;
    }

    /**
     * Get the value of date_exit.
     *
     * @return datetime
     */
    public function getDateExit()
    {
        return $this->date_exit;
    }

    /**
     * Set the value of contract_class.
     *
     * @param string $contract_class
     * @return \Entity\CarePersonell
     */
    public function setContractClass($contract_class)
    {
        $this->contract_class = $contract_class;

        return $this;
    }

    /**
     * Get the value of contract_class.
     *
     * @return string
     */
    public function getContractClass()
    {
        return $this->contract_class;
    }

    /**
     * Set the value of contract_start.
     *
     * @param datetime $contract_start
     * @return \Entity\CarePersonell
     */
    public function setContractStart($contract_start)
    {
        $this->contract_start = $contract_start;

        return $this;
    }

    /**
     * Get the value of contract_start.
     *
     * @return datetime
     */
    public function getContractStart()
    {
        return $this->contract_start;
    }

    /**
     * Set the value of contract_end.
     *
     * @param datetime $contract_end
     * @return \Entity\CarePersonell
     */
    public function setContractEnd($contract_end)
    {
        $this->contract_end = $contract_end;

        return $this;
    }

    /**
     * Get the value of contract_end.
     *
     * @return datetime
     */
    public function getContractEnd()
    {
        return $this->contract_end;
    }

    /**
     * Set the value of is_discharged.
     *
     * @param boolean $is_discharged
     * @return \Entity\CarePersonell
     */
    public function setIsDischarged($is_discharged)
    {
        $this->is_discharged = $is_discharged;

        return $this;
    }

    /**
     * Get the value of is_discharged.
     *
     * @return boolean
     */
    public function getIsDischarged()
    {
        return $this->is_discharged;
    }

    /**
     * Set the value of pay_class.
     *
     * @param string $pay_class
     * @return \Entity\CarePersonell
     */
    public function setPayClass($pay_class)
    {
        $this->pay_class = $pay_class;

        return $this;
    }

    /**
     * Get the value of pay_class.
     *
     * @return string
     */
    public function getPayClass()
    {
        return $this->pay_class;
    }

    /**
     * Set the value of pay_class_sub.
     *
     * @param string $pay_class_sub
     * @return \Entity\CarePersonell
     */
    public function setPayClassSub($pay_class_sub)
    {
        $this->pay_class_sub = $pay_class_sub;

        return $this;
    }

    /**
     * Get the value of pay_class_sub.
     *
     * @return string
     */
    public function getPayClassSub()
    {
        return $this->pay_class_sub;
    }

    /**
     * Set the value of local_premium_id.
     *
     * @param string $local_premium_id
     * @return \Entity\CarePersonell
     */
    public function setLocalPremiumId($local_premium_id)
    {
        $this->local_premium_id = $local_premium_id;

        return $this;
    }

    /**
     * Get the value of local_premium_id.
     *
     * @return string
     */
    public function getLocalPremiumId()
    {
        return $this->local_premium_id;
    }

    /**
     * Set the value of tax_account_nr.
     *
     * @param string $tax_account_nr
     * @return \Entity\CarePersonell
     */
    public function setTaxAccountNr($tax_account_nr)
    {
        $this->tax_account_nr = $tax_account_nr;

        return $this;
    }

    /**
     * Get the value of tax_account_nr.
     *
     * @return string
     */
    public function getTaxAccountNr()
    {
        return $this->tax_account_nr;
    }

    /**
     * Set the value of ir_code.
     *
     * @param string $ir_code
     * @return \Entity\CarePersonell
     */
    public function setIrCode($ir_code)
    {
        $this->ir_code = $ir_code;

        return $this;
    }

    /**
     * Get the value of ir_code.
     *
     * @return string
     */
    public function getIrCode()
    {
        return $this->ir_code;
    }

    /**
     * Set the value of nr_workday.
     *
     * @param boolean $nr_workday
     * @return \Entity\CarePersonell
     */
    public function setNrWorkday($nr_workday)
    {
        $this->nr_workday = $nr_workday;

        return $this;
    }

    /**
     * Get the value of nr_workday.
     *
     * @return boolean
     */
    public function getNrWorkday()
    {
        return $this->nr_workday;
    }

    /**
     * Set the value of nr_weekhour.
     *
     * @param float $nr_weekhour
     * @return \Entity\CarePersonell
     */
    public function setNrWeekhour($nr_weekhour)
    {
        $this->nr_weekhour = $nr_weekhour;

        return $this;
    }

    /**
     * Get the value of nr_weekhour.
     *
     * @return float
     */
    public function getNrWeekhour()
    {
        return $this->nr_weekhour;
    }

    /**
     * Set the value of nr_vacation_day.
     *
     * @param integer $nr_vacation_day
     * @return \Entity\CarePersonell
     */
    public function setNrVacationDay($nr_vacation_day)
    {
        $this->nr_vacation_day = $nr_vacation_day;

        return $this;
    }

    /**
     * Get the value of nr_vacation_day.
     *
     * @return integer
     */
    public function getNrVacationDay()
    {
        return $this->nr_vacation_day;
    }

    /**
     * Set the value of multiple_employer.
     *
     * @param boolean $multiple_employer
     * @return \Entity\CarePersonell
     */
    public function setMultipleEmployer($multiple_employer)
    {
        $this->multiple_employer = $multiple_employer;

        return $this;
    }

    /**
     * Get the value of multiple_employer.
     *
     * @return boolean
     */
    public function getMultipleEmployer()
    {
        return $this->multiple_employer;
    }

    /**
     * Set the value of nr_dependent.
     *
     * @param integer $nr_dependent
     * @return \Entity\CarePersonell
     */
    public function setNrDependent($nr_dependent)
    {
        $this->nr_dependent = $nr_dependent;

        return $this;
    }

    /**
     * Get the value of nr_dependent.
     *
     * @return integer
     */
    public function getNrDependent()
    {
        return $this->nr_dependent;
    }

    /**
     * Set the value of status.
     *
     * @param string $status
     * @return \Entity\CarePersonell
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
     * @return \Entity\CarePersonell
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
     * @return \Entity\CarePersonell
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
     * @return \Entity\CarePersonell
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
     * @return \Entity\CarePersonell
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
     * @return \Entity\CarePersonell
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
        return array('nr', 'short_id', 'pid', 'job_type_nr', 'job_function_title', 'date_join', 'date_exit', 'contract_class', 'contract_start', 'contract_end', 'is_discharged', 'pay_class', 'pay_class_sub', 'local_premium_id', 'tax_account_nr', 'ir_code', 'nr_workday', 'nr_weekhour', 'nr_vacation_day', 'multiple_employer', 'nr_dependent', 'status', 'history', 'modify_id', 'modify_time', 'create_id', 'create_time');
    }
}