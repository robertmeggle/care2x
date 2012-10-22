<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\CareTestFindingsChemlaborSub
 *
 * @ORM\Entity(repositoryClass="CareTestFindingsChemlaborSubRepository")
 * @ORM\Table(name="care_test_findings_chemlabor_sub")
 */
class CareTestFindingsChemlaborSub
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $sub_id;

    /**
     * @ORM\Column(type="integer")
     */
    protected $batch_nr;

    /**
     * @ORM\Column(type="string", length=25)
     */
    protected $job_id;

    /**
     * @ORM\Column(type="integer")
     */
    protected $encounter_nr;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $paramater_name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $parameter_value;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $status;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $history;

    /**
     * @ORM\Column(type="date")
     */
    protected $test_date_sub;

    /**
     * @ORM\Column(type="time", nullable=true)
     */
    protected $test_time;

    /**
     * @ORM\Column(type="string", length=35, nullable=true)
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
     * Set the value of sub_id.
     *
     * @param integer $sub_id
     * @return \Entity\CareTestFindingsChemlaborSub
     */
    public function setSubId($sub_id)
    {
        $this->sub_id = $sub_id;

        return $this;
    }

    /**
     * Get the value of sub_id.
     *
     * @return integer
     */
    public function getSubId()
    {
        return $this->sub_id;
    }

    /**
     * Set the value of batch_nr.
     *
     * @param integer $batch_nr
     * @return \Entity\CareTestFindingsChemlaborSub
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
     * Set the value of job_id.
     *
     * @param string $job_id
     * @return \Entity\CareTestFindingsChemlaborSub
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
     * Set the value of encounter_nr.
     *
     * @param integer $encounter_nr
     * @return \Entity\CareTestFindingsChemlaborSub
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
     * Set the value of paramater_name.
     *
     * @param string $paramater_name
     * @return \Entity\CareTestFindingsChemlaborSub
     */
    public function setParamaterName($paramater_name)
    {
        $this->paramater_name = $paramater_name;

        return $this;
    }

    /**
     * Get the value of paramater_name.
     *
     * @return string
     */
    public function getParamaterName()
    {
        return $this->paramater_name;
    }

    /**
     * Set the value of parameter_value.
     *
     * @param string $parameter_value
     * @return \Entity\CareTestFindingsChemlaborSub
     */
    public function setParameterValue($parameter_value)
    {
        $this->parameter_value = $parameter_value;

        return $this;
    }

    /**
     * Get the value of parameter_value.
     *
     * @return string
     */
    public function getParameterValue()
    {
        return $this->parameter_value;
    }

    /**
     * Set the value of status.
     *
     * @param string $status
     * @return \Entity\CareTestFindingsChemlaborSub
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
     * @return \Entity\CareTestFindingsChemlaborSub
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
     * Set the value of test_date_sub.
     *
     * @param datetime $test_date_sub
     * @return \Entity\CareTestFindingsChemlaborSub
     */
    public function setTestDateSub($test_date_sub)
    {
        $this->test_date_sub = $test_date_sub;

        return $this;
    }

    /**
     * Get the value of test_date_sub.
     *
     * @return datetime
     */
    public function getTestDateSub()
    {
        return $this->test_date_sub;
    }

    /**
     * Set the value of test_time.
     *
     * @param datetime $test_time
     * @return \Entity\CareTestFindingsChemlaborSub
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
     * Set the value of create_id.
     *
     * @param string $create_id
     * @return \Entity\CareTestFindingsChemlaborSub
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
     * @return \Entity\CareTestFindingsChemlaborSub
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
        return array('sub_id', 'batch_nr', 'job_id', 'encounter_nr', 'paramater_name', 'parameter_value', 'status', 'history', 'test_date_sub', 'test_time', 'create_id', 'create_time');
    }
}