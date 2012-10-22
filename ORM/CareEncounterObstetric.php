<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\CareEncounterObstetric
 *
 * InnoDB free: 10240 kB
 *
 * @ORM\Entity(repositoryClass="CareEncounterObstetricRepository")
 * @ORM\Table(name="care_encounter_obstetric", indexes={@ORM\Index(name="encounter_nr", columns={"pregnancy_nr"})})
 */
class CareEncounterObstetric
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $encounter_nr;

    /**
     * @ORM\Column(type="integer")
     */
    protected $pregnancy_nr;

    /**
     * @ORM\Column(type="integer")
     */
    protected $hospital_adm_nr;

    /**
     * @ORM\Column(type="string", length=60)
     */
    protected $patient_class;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    protected $is_discharged_not_in_labour;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    protected $is_re_admission;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    protected $referral_status;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $referral_reason;

    /**
     * @ORM\Column(type="string", length=25)
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
     * Set the value of encounter_nr.
     *
     * @param integer $encounter_nr
     * @return \Entity\CareEncounterObstetric
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
     * Set the value of pregnancy_nr.
     *
     * @param integer $pregnancy_nr
     * @return \Entity\CareEncounterObstetric
     */
    public function setPregnancyNr($pregnancy_nr)
    {
        $this->pregnancy_nr = $pregnancy_nr;

        return $this;
    }

    /**
     * Get the value of pregnancy_nr.
     *
     * @return integer
     */
    public function getPregnancyNr()
    {
        return $this->pregnancy_nr;
    }

    /**
     * Set the value of hospital_adm_nr.
     *
     * @param integer $hospital_adm_nr
     * @return \Entity\CareEncounterObstetric
     */
    public function setHospitalAdmNr($hospital_adm_nr)
    {
        $this->hospital_adm_nr = $hospital_adm_nr;

        return $this;
    }

    /**
     * Get the value of hospital_adm_nr.
     *
     * @return integer
     */
    public function getHospitalAdmNr()
    {
        return $this->hospital_adm_nr;
    }

    /**
     * Set the value of patient_class.
     *
     * @param string $patient_class
     * @return \Entity\CareEncounterObstetric
     */
    public function setPatientClass($patient_class)
    {
        $this->patient_class = $patient_class;

        return $this;
    }

    /**
     * Get the value of patient_class.
     *
     * @return string
     */
    public function getPatientClass()
    {
        return $this->patient_class;
    }

    /**
     * Set the value of is_discharged_not_in_labour.
     *
     * @param boolean $is_discharged_not_in_labour
     * @return \Entity\CareEncounterObstetric
     */
    public function setIsDischargedNotInLabour($is_discharged_not_in_labour)
    {
        $this->is_discharged_not_in_labour = $is_discharged_not_in_labour;

        return $this;
    }

    /**
     * Get the value of is_discharged_not_in_labour.
     *
     * @return boolean
     */
    public function getIsDischargedNotInLabour()
    {
        return $this->is_discharged_not_in_labour;
    }

    /**
     * Set the value of is_re_admission.
     *
     * @param boolean $is_re_admission
     * @return \Entity\CareEncounterObstetric
     */
    public function setIsReAdmission($is_re_admission)
    {
        $this->is_re_admission = $is_re_admission;

        return $this;
    }

    /**
     * Get the value of is_re_admission.
     *
     * @return boolean
     */
    public function getIsReAdmission()
    {
        return $this->is_re_admission;
    }

    /**
     * Set the value of referral_status.
     *
     * @param string $referral_status
     * @return \Entity\CareEncounterObstetric
     */
    public function setReferralStatus($referral_status)
    {
        $this->referral_status = $referral_status;

        return $this;
    }

    /**
     * Get the value of referral_status.
     *
     * @return string
     */
    public function getReferralStatus()
    {
        return $this->referral_status;
    }

    /**
     * Set the value of referral_reason.
     *
     * @param string $referral_reason
     * @return \Entity\CareEncounterObstetric
     */
    public function setReferralReason($referral_reason)
    {
        $this->referral_reason = $referral_reason;

        return $this;
    }

    /**
     * Get the value of referral_reason.
     *
     * @return string
     */
    public function getReferralReason()
    {
        return $this->referral_reason;
    }

    /**
     * Set the value of status.
     *
     * @param string $status
     * @return \Entity\CareEncounterObstetric
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
     * @return \Entity\CareEncounterObstetric
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
     * @return \Entity\CareEncounterObstetric
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
     * @return \Entity\CareEncounterObstetric
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
     * @return \Entity\CareEncounterObstetric
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
     * @return \Entity\CareEncounterObstetric
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
        return array('encounter_nr', 'pregnancy_nr', 'hospital_adm_nr', 'patient_class', 'is_discharged_not_in_labour', 'is_re_admission', 'referral_status', 'referral_reason', 'status', 'history', 'modify_id', 'modify_time', 'create_id', 'create_time');
    }
}