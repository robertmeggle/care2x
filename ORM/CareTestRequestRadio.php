<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\CareTestRequestRadio
 *
 * InnoDB free: 8192 kB
 *
 * @ORM\Entity(repositoryClass="CareTestRequestRadioRepository")
 * @ORM\Table(name="care_test_request_radio", indexes={@ORM\Index(name="batch_nr", columns={"batch_nr", "encounter_nr"}), @ORM\Index(name="send_date", columns={"xray_time"})}, uniqueConstraints={@ORM\UniqueConstraint(name="batch_nr_2", columns={"batch_nr"})})
 */
class CareTestRequestRadio
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    protected $batch_nr;

    /**
     * @ORM\Column(type="integer")
     */
    protected $encounter_nr;

    /**
     * @ORM\Column(type="smallint")
     */
    protected $dept_nr;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $xray;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $ct;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $sono;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $mammograph;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $mrt;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $nuclear;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $if_patmobile;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $if_allergy;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $if_hyperten;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $if_pregnant;

    /**
     * @ORM\Column(type="text")
     */
    protected $clinical_info;

    /**
     * @ORM\Column(type="text")
     */
    protected $test_request;

    /**
     * @ORM\Column(type="date")
     */
    protected $send_date;

    /**
     * @ORM\Column(type="string", length=35)
     */
    protected $send_doctor;

    /**
     * @ORM\Column(type="string", length=9)
     */
    protected $xray_nr;

    /**
     * @ORM\Column(type="string", length=15)
     */
    protected $r_cm_2;

    /**
     * @ORM\Column(type="string", length=35)
     */
    protected $mtr;

    /**
     * @ORM\Column(type="date")
     */
    protected $xray_date;

    /**
     * @ORM\Column(type="time")
     */
    protected $xray_time;

    /**
     * @ORM\Column(type="text")
     */
    protected $results;

    /**
     * @ORM\Column(type="date")
     */
    protected $results_date;

    /**
     * @ORM\Column(type="string", length=35)
     */
    protected $results_doctor;

    /**
     * @ORM\Column(type="string", length=10)
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

    /**
     * @ORM\Column(type="string", length=35)
     */
    protected $process_id;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $process_time;

    public function __construct()
    {
    }

    /**
     * Set the value of batch_nr.
     *
     * @param integer $batch_nr
     * @return \Entity\CareTestRequestRadio
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
     * @return \Entity\CareTestRequestRadio
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
     * Set the value of dept_nr.
     *
     * @param integer $dept_nr
     * @return \Entity\CareTestRequestRadio
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
     * Set the value of xray.
     *
     * @param boolean $xray
     * @return \Entity\CareTestRequestRadio
     */
    public function setXray($xray)
    {
        $this->xray = $xray;

        return $this;
    }

    /**
     * Get the value of xray.
     *
     * @return boolean
     */
    public function getXray()
    {
        return $this->xray;
    }

    /**
     * Set the value of ct.
     *
     * @param boolean $ct
     * @return \Entity\CareTestRequestRadio
     */
    public function setCt($ct)
    {
        $this->ct = $ct;

        return $this;
    }

    /**
     * Get the value of ct.
     *
     * @return boolean
     */
    public function getCt()
    {
        return $this->ct;
    }

    /**
     * Set the value of sono.
     *
     * @param boolean $sono
     * @return \Entity\CareTestRequestRadio
     */
    public function setSono($sono)
    {
        $this->sono = $sono;

        return $this;
    }

    /**
     * Get the value of sono.
     *
     * @return boolean
     */
    public function getSono()
    {
        return $this->sono;
    }

    /**
     * Set the value of mammograph.
     *
     * @param boolean $mammograph
     * @return \Entity\CareTestRequestRadio
     */
    public function setMammograph($mammograph)
    {
        $this->mammograph = $mammograph;

        return $this;
    }

    /**
     * Get the value of mammograph.
     *
     * @return boolean
     */
    public function getMammograph()
    {
        return $this->mammograph;
    }

    /**
     * Set the value of mrt.
     *
     * @param boolean $mrt
     * @return \Entity\CareTestRequestRadio
     */
    public function setMrt($mrt)
    {
        $this->mrt = $mrt;

        return $this;
    }

    /**
     * Get the value of mrt.
     *
     * @return boolean
     */
    public function getMrt()
    {
        return $this->mrt;
    }

    /**
     * Set the value of nuclear.
     *
     * @param boolean $nuclear
     * @return \Entity\CareTestRequestRadio
     */
    public function setNuclear($nuclear)
    {
        $this->nuclear = $nuclear;

        return $this;
    }

    /**
     * Get the value of nuclear.
     *
     * @return boolean
     */
    public function getNuclear()
    {
        return $this->nuclear;
    }

    /**
     * Set the value of if_patmobile.
     *
     * @param boolean $if_patmobile
     * @return \Entity\CareTestRequestRadio
     */
    public function setIfPatmobile($if_patmobile)
    {
        $this->if_patmobile = $if_patmobile;

        return $this;
    }

    /**
     * Get the value of if_patmobile.
     *
     * @return boolean
     */
    public function getIfPatmobile()
    {
        return $this->if_patmobile;
    }

    /**
     * Set the value of if_allergy.
     *
     * @param boolean $if_allergy
     * @return \Entity\CareTestRequestRadio
     */
    public function setIfAllergy($if_allergy)
    {
        $this->if_allergy = $if_allergy;

        return $this;
    }

    /**
     * Get the value of if_allergy.
     *
     * @return boolean
     */
    public function getIfAllergy()
    {
        return $this->if_allergy;
    }

    /**
     * Set the value of if_hyperten.
     *
     * @param boolean $if_hyperten
     * @return \Entity\CareTestRequestRadio
     */
    public function setIfHyperten($if_hyperten)
    {
        $this->if_hyperten = $if_hyperten;

        return $this;
    }

    /**
     * Get the value of if_hyperten.
     *
     * @return boolean
     */
    public function getIfHyperten()
    {
        return $this->if_hyperten;
    }

    /**
     * Set the value of if_pregnant.
     *
     * @param boolean $if_pregnant
     * @return \Entity\CareTestRequestRadio
     */
    public function setIfPregnant($if_pregnant)
    {
        $this->if_pregnant = $if_pregnant;

        return $this;
    }

    /**
     * Get the value of if_pregnant.
     *
     * @return boolean
     */
    public function getIfPregnant()
    {
        return $this->if_pregnant;
    }

    /**
     * Set the value of clinical_info.
     *
     * @param string $clinical_info
     * @return \Entity\CareTestRequestRadio
     */
    public function setClinicalInfo($clinical_info)
    {
        $this->clinical_info = $clinical_info;

        return $this;
    }

    /**
     * Get the value of clinical_info.
     *
     * @return string
     */
    public function getClinicalInfo()
    {
        return $this->clinical_info;
    }

    /**
     * Set the value of test_request.
     *
     * @param string $test_request
     * @return \Entity\CareTestRequestRadio
     */
    public function setTestRequest($test_request)
    {
        $this->test_request = $test_request;

        return $this;
    }

    /**
     * Get the value of test_request.
     *
     * @return string
     */
    public function getTestRequest()
    {
        return $this->test_request;
    }

    /**
     * Set the value of send_date.
     *
     * @param datetime $send_date
     * @return \Entity\CareTestRequestRadio
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
     * Set the value of send_doctor.
     *
     * @param string $send_doctor
     * @return \Entity\CareTestRequestRadio
     */
    public function setSendDoctor($send_doctor)
    {
        $this->send_doctor = $send_doctor;

        return $this;
    }

    /**
     * Get the value of send_doctor.
     *
     * @return string
     */
    public function getSendDoctor()
    {
        return $this->send_doctor;
    }

    /**
     * Set the value of xray_nr.
     *
     * @param string $xray_nr
     * @return \Entity\CareTestRequestRadio
     */
    public function setXrayNr($xray_nr)
    {
        $this->xray_nr = $xray_nr;

        return $this;
    }

    /**
     * Get the value of xray_nr.
     *
     * @return string
     */
    public function getXrayNr()
    {
        return $this->xray_nr;
    }

    /**
     * Set the value of r_cm_2.
     *
     * @param string $r_cm_2
     * @return \Entity\CareTestRequestRadio
     */
    public function setRCm2($r_cm_2)
    {
        $this->r_cm_2 = $r_cm_2;

        return $this;
    }

    /**
     * Get the value of r_cm_2.
     *
     * @return string
     */
    public function getRCm2()
    {
        return $this->r_cm_2;
    }

    /**
     * Set the value of mtr.
     *
     * @param string $mtr
     * @return \Entity\CareTestRequestRadio
     */
    public function setMtr($mtr)
    {
        $this->mtr = $mtr;

        return $this;
    }

    /**
     * Get the value of mtr.
     *
     * @return string
     */
    public function getMtr()
    {
        return $this->mtr;
    }

    /**
     * Set the value of xray_date.
     *
     * @param datetime $xray_date
     * @return \Entity\CareTestRequestRadio
     */
    public function setXrayDate($xray_date)
    {
        $this->xray_date = $xray_date;

        return $this;
    }

    /**
     * Get the value of xray_date.
     *
     * @return datetime
     */
    public function getXrayDate()
    {
        return $this->xray_date;
    }

    /**
     * Set the value of xray_time.
     *
     * @param datetime $xray_time
     * @return \Entity\CareTestRequestRadio
     */
    public function setXrayTime($xray_time)
    {
        $this->xray_time = $xray_time;

        return $this;
    }

    /**
     * Get the value of xray_time.
     *
     * @return datetime
     */
    public function getXrayTime()
    {
        return $this->xray_time;
    }

    /**
     * Set the value of results.
     *
     * @param string $results
     * @return \Entity\CareTestRequestRadio
     */
    public function setResults($results)
    {
        $this->results = $results;

        return $this;
    }

    /**
     * Get the value of results.
     *
     * @return string
     */
    public function getResults()
    {
        return $this->results;
    }

    /**
     * Set the value of results_date.
     *
     * @param datetime $results_date
     * @return \Entity\CareTestRequestRadio
     */
    public function setResultsDate($results_date)
    {
        $this->results_date = $results_date;

        return $this;
    }

    /**
     * Get the value of results_date.
     *
     * @return datetime
     */
    public function getResultsDate()
    {
        return $this->results_date;
    }

    /**
     * Set the value of results_doctor.
     *
     * @param string $results_doctor
     * @return \Entity\CareTestRequestRadio
     */
    public function setResultsDoctor($results_doctor)
    {
        $this->results_doctor = $results_doctor;

        return $this;
    }

    /**
     * Get the value of results_doctor.
     *
     * @return string
     */
    public function getResultsDoctor()
    {
        return $this->results_doctor;
    }

    /**
     * Set the value of status.
     *
     * @param string $status
     * @return \Entity\CareTestRequestRadio
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
     * @return \Entity\CareTestRequestRadio
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
     * @return \Entity\CareTestRequestRadio
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
     * @return \Entity\CareTestRequestRadio
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
     * @return \Entity\CareTestRequestRadio
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
     * @return \Entity\CareTestRequestRadio
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

    /**
     * Set the value of process_id.
     *
     * @param string $process_id
     * @return \Entity\CareTestRequestRadio
     */
    public function setProcessId($process_id)
    {
        $this->process_id = $process_id;

        return $this;
    }

    /**
     * Get the value of process_id.
     *
     * @return string
     */
    public function getProcessId()
    {
        return $this->process_id;
    }

    /**
     * Set the value of process_time.
     *
     * @param datetime $process_time
     * @return \Entity\CareTestRequestRadio
     */
    public function setProcessTime($process_time)
    {
        $this->process_time = $process_time;

        return $this;
    }

    /**
     * Get the value of process_time.
     *
     * @return datetime
     */
    public function getProcessTime()
    {
        return $this->process_time;
    }

    public function __sleep()
    {
        return array('batch_nr', 'encounter_nr', 'dept_nr', 'xray', 'ct', 'sono', 'mammograph', 'mrt', 'nuclear', 'if_patmobile', 'if_allergy', 'if_hyperten', 'if_pregnant', 'clinical_info', 'test_request', 'send_date', 'send_doctor', 'xray_nr', 'r_cm_2', 'mtr', 'xray_date', 'xray_time', 'results', 'results_date', 'results_doctor', 'status', 'history', 'modify_id', 'modify_time', 'create_id', 'create_time', 'process_id', 'process_time');
    }
}