<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\CareTestRequestGeneric
 *
 * InnoDB free: 8192 kB
 *
 * @ORM\Entity(repositoryClass="CareTestRequestGenericRepository")
 * @ORM\Table(name="care_test_request_generic", indexes={@ORM\Index(name="batch_nr", columns={"batch_nr", "encounter_nr"}), @ORM\Index(name="send_date", columns={"send_date"})})
 */
class CareTestRequestGeneric
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
     * @ORM\Column(type="string", length=35)
     */
    protected $testing_dept;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $visit;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $order_patient;

    /**
     * @ORM\Column(type="text")
     */
    protected $diagnosis_quiry;

    /**
     * @ORM\Column(type="date")
     */
    protected $send_date;

    /**
     * @ORM\Column(type="string", length=35)
     */
    protected $send_doctor;

    /**
     * @ORM\Column(type="text")
     */
    protected $result;

    /**
     * @ORM\Column(type="date")
     */
    protected $result_date;

    /**
     * @ORM\Column(type="string", length=35)
     */
    protected $result_doctor;

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
     * @return \Entity\CareTestRequestGeneric
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
     * @return \Entity\CareTestRequestGeneric
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
     * Set the value of testing_dept.
     *
     * @param string $testing_dept
     * @return \Entity\CareTestRequestGeneric
     */
    public function setTestingDept($testing_dept)
    {
        $this->testing_dept = $testing_dept;

        return $this;
    }

    /**
     * Get the value of testing_dept.
     *
     * @return string
     */
    public function getTestingDept()
    {
        return $this->testing_dept;
    }

    /**
     * Set the value of visit.
     *
     * @param boolean $visit
     * @return \Entity\CareTestRequestGeneric
     */
    public function setVisit($visit)
    {
        $this->visit = $visit;

        return $this;
    }

    /**
     * Get the value of visit.
     *
     * @return boolean
     */
    public function getVisit()
    {
        return $this->visit;
    }

    /**
     * Set the value of order_patient.
     *
     * @param boolean $order_patient
     * @return \Entity\CareTestRequestGeneric
     */
    public function setOrderPatient($order_patient)
    {
        $this->order_patient = $order_patient;

        return $this;
    }

    /**
     * Get the value of order_patient.
     *
     * @return boolean
     */
    public function getOrderPatient()
    {
        return $this->order_patient;
    }

    /**
     * Set the value of diagnosis_quiry.
     *
     * @param string $diagnosis_quiry
     * @return \Entity\CareTestRequestGeneric
     */
    public function setDiagnosisQuiry($diagnosis_quiry)
    {
        $this->diagnosis_quiry = $diagnosis_quiry;

        return $this;
    }

    /**
     * Get the value of diagnosis_quiry.
     *
     * @return string
     */
    public function getDiagnosisQuiry()
    {
        return $this->diagnosis_quiry;
    }

    /**
     * Set the value of send_date.
     *
     * @param datetime $send_date
     * @return \Entity\CareTestRequestGeneric
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
     * @return \Entity\CareTestRequestGeneric
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
     * Set the value of result.
     *
     * @param string $result
     * @return \Entity\CareTestRequestGeneric
     */
    public function setResult($result)
    {
        $this->result = $result;

        return $this;
    }

    /**
     * Get the value of result.
     *
     * @return string
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Set the value of result_date.
     *
     * @param datetime $result_date
     * @return \Entity\CareTestRequestGeneric
     */
    public function setResultDate($result_date)
    {
        $this->result_date = $result_date;

        return $this;
    }

    /**
     * Get the value of result_date.
     *
     * @return datetime
     */
    public function getResultDate()
    {
        return $this->result_date;
    }

    /**
     * Set the value of result_doctor.
     *
     * @param string $result_doctor
     * @return \Entity\CareTestRequestGeneric
     */
    public function setResultDoctor($result_doctor)
    {
        $this->result_doctor = $result_doctor;

        return $this;
    }

    /**
     * Get the value of result_doctor.
     *
     * @return string
     */
    public function getResultDoctor()
    {
        return $this->result_doctor;
    }

    /**
     * Set the value of status.
     *
     * @param string $status
     * @return \Entity\CareTestRequestGeneric
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
     * @return \Entity\CareTestRequestGeneric
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
     * @return \Entity\CareTestRequestGeneric
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
     * @return \Entity\CareTestRequestGeneric
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
     * @return \Entity\CareTestRequestGeneric
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
     * @return \Entity\CareTestRequestGeneric
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
        return array('batch_nr', 'encounter_nr', 'testing_dept', 'visit', 'order_patient', 'diagnosis_quiry', 'send_date', 'send_doctor', 'result', 'result_date', 'result_doctor', 'status', 'history', 'modify_id', 'modify_time', 'create_id', 'create_time');
    }
}