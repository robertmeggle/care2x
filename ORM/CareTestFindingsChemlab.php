<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\CareTestFindingsChemlab
 *
 * InnoDB free: 8192 kB
 *
 * @ORM\Entity(repositoryClass="CareTestFindingsChemlabRepository")
 * @ORM\Table(name="care_test_findings_chemlab")
 */
class CareTestFindingsChemlab
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $batch_nr;

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    protected $encounter_nr;

    /**
     * @ORM\Id
     * @ORM\Column(type="string", length=25)
     */
    protected $job_id;

    /**
     * @ORM\Column(type="date")
     */
    protected $test_date;

    /**
     * @ORM\Column(type="time")
     */
    protected $test_time;

    /**
     * @ORM\Column(type="string", length=30)
     */
    protected $group_id;

    /**
     * @ORM\Column(type="text")
     */
    protected $serial_value;

    /**
     * @ORM\Column(type="string", length=15)
     */
    protected $validator;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $validate_dt;

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
     * Set the value of batch_nr.
     *
     * @param integer $batch_nr
     * @return \Entity\CareTestFindingsChemlab
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
     * @return \Entity\CareTestFindingsChemlab
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
     * Set the value of job_id.
     *
     * @param string $job_id
     * @return \Entity\CareTestFindingsChemlab
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
     * Set the value of test_date.
     *
     * @param datetime $test_date
     * @return \Entity\CareTestFindingsChemlab
     */
    public function setTestDate($test_date)
    {
        $this->test_date = $test_date;

        return $this;
    }

    /**
     * Get the value of test_date.
     *
     * @return datetime
     */
    public function getTestDate()
    {
        return $this->test_date;
    }

    /**
     * Set the value of test_time.
     *
     * @param datetime $test_time
     * @return \Entity\CareTestFindingsChemlab
     */
    public function setTestTime($test_time)
    {
        $this->test_time = $test_time;

        return $this;
    }

    /**
     * Get the value of test_time.
     *
     * @return datetime
     */
    public function getTestTime()
    {
        return $this->test_time;
    }

    /**
     * Set the value of group_id.
     *
     * @param string $group_id
     * @return \Entity\CareTestFindingsChemlab
     */
    public function setGroupId($group_id)
    {
        $this->group_id = $group_id;

        return $this;
    }

    /**
     * Get the value of group_id.
     *
     * @return string
     */
    public function getGroupId()
    {
        return $this->group_id;
    }

    /**
     * Set the value of serial_value.
     *
     * @param string $serial_value
     * @return \Entity\CareTestFindingsChemlab
     */
    public function setSerialValue($serial_value)
    {
        $this->serial_value = $serial_value;

        return $this;
    }

    /**
     * Get the value of serial_value.
     *
     * @return string
     */
    public function getSerialValue()
    {
        return $this->serial_value;
    }

    /**
     * Set the value of validator.
     *
     * @param string $validator
     * @return \Entity\CareTestFindingsChemlab
     */
    public function setValidator($validator)
    {
        $this->validator = $validator;

        return $this;
    }

    /**
     * Get the value of validator.
     *
     * @return string
     */
    public function getValidator()
    {
        return $this->validator;
    }

    /**
     * Set the value of validate_dt.
     *
     * @param datetime $validate_dt
     * @return \Entity\CareTestFindingsChemlab
     */
    public function setValidateDt($validate_dt)
    {
        $this->validate_dt = $validate_dt;

        return $this;
    }

    /**
     * Get the value of validate_dt.
     *
     * @return datetime
     */
    public function getValidateDt()
    {
        return $this->validate_dt;
    }

    /**
     * Set the value of status.
     *
     * @param string $status
     * @return \Entity\CareTestFindingsChemlab
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
     * @return \Entity\CareTestFindingsChemlab
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
     * @return \Entity\CareTestFindingsChemlab
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
     * @return \Entity\CareTestFindingsChemlab
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
     * @return \Entity\CareTestFindingsChemlab
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
     * @return \Entity\CareTestFindingsChemlab
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
        return array('batch_nr', 'encounter_nr', 'job_id', 'test_date', 'test_time', 'group_id', 'serial_value', 'validator', 'validate_dt', 'status', 'history', 'modify_id', 'modify_time', 'create_id', 'create_time');
    }
}