<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\CareEncounter
 *
 * @ORM\Entity(repositoryClass="CareEncounterRepository")
 * @ORM\Table(name="care_encounter", indexes={@ORM\Index(name="pid", columns={"pid"}), @ORM\Index(name="encounter_date", columns={"encounter_date"}), @ORM\Index(name="pid_2", columns={"pid"}), @ORM\Index(name="current_dept_nr", columns={"current_dept_nr"})})
 */
class CareEncounter
{
    /**
     * @ORM\Id
     * @ORM\Column(type="bigint")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $encounter_nr;

    /**
     * @ORM\Column(type="integer")
     */
    protected $pid;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $encounter_date;

    /**
     * @ORM\Column(type="smallint")
     */
    protected $encounter_class_nr;

    /**
     * @ORM\Column(type="string", length=35)
     */
    protected $encounter_type;

    /**
     * @ORM\Column(type="string", length=35)
     */
    protected $encounter_status;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $referrer_diagnosis;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $referrer_recom_therapy;

    /**
     * @ORM\Column(type="integer")
     */
    protected $referred_dr;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $referrer_dr;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    protected $referred_number;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $referrer_dept;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $referrer_institution;

    /**
     * @ORM\Column(type="text")
     */
    protected $referrer_notes;

    /**
     * @ORM\Column(type="string", length=20)
     */
    protected $triage;

    /**
     * @ORM\Column(type="integer")
     */
    protected $admit_type;

    /**
     * @ORM\Column(type="integer")
     */
    protected $financial_class_nr;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    protected $insurance_nr;

    /**
     * @ORM\Column(type="string", length=25)
     */
    protected $insurance_firm_id;

    /**
     * @ORM\Column(type="integer")
     */
    protected $insurance_class_nr;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    protected $insurance_2_nr;

    /**
     * @ORM\Column(type="string", length=25)
     */
    protected $insurance_2_firm_id;

    /**
     * @ORM\Column(type="integer")
     */
    protected $guarantor_pid;

    /**
     * @ORM\Column(type="integer")
     */
    protected $contact_pid;

    /**
     * @ORM\Column(type="string", length=35)
     */
    protected $contact_relation;

    /**
     * @ORM\Column(type="smallint")
     */
    protected $current_ward_nr;

    /**
     * @ORM\Column(type="smallint")
     */
    protected $current_room_nr;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $in_ward;

    /**
     * @ORM\Column(type="smallint")
     */
    protected $current_dept_nr;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $in_dept;

    /**
     * @ORM\Column(type="smallint")
     */
    protected $current_firm_nr;

    /**
     * @ORM\Column(type="integer")
     */
    protected $current_att_dr_nr;

    /**
     * @ORM\Column(type="string", length=60)
     */
    protected $consulting_dr;

    /**
     * @ORM\Column(type="string", length=25)
     */
    protected $extra_service;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $is_discharged;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    protected $discharge_date;

    /**
     * @ORM\Column(type="time", nullable=true)
     */
    protected $discharge_time;

    /**
     * @ORM\Column(type="date")
     */
    protected $followup_date;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $followup_responsibility;

    /**
     * @ORM\Column(type="text")
     */
    protected $post_encounter_notes;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $kategoria_ushtaraku;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $statusi_ushtaraku;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $grada_ushtaraku;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $kategoria_pranimit;

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
     * Set the value of encounter_nr.
     *
     * @param integer $encounter_nr
     * @return \Entity\CareEncounter
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
     * Set the value of pid.
     *
     * @param integer $pid
     * @return \Entity\CareEncounter
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
     * Set the value of encounter_date.
     *
     * @param datetime $encounter_date
     * @return \Entity\CareEncounter
     */
    public function setEncounterDate($encounter_date)
    {
        $this->encounter_date = $encounter_date;

        return $this;
    }

    /**
     * Get the value of encounter_date.
     *
     * @return datetime
     */
    public function getEncounterDate()
    {
        return $this->encounter_date;
    }

    /**
     * Set the value of encounter_class_nr.
     *
     * @param integer $encounter_class_nr
     * @return \Entity\CareEncounter
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
     * Set the value of encounter_type.
     *
     * @param string $encounter_type
     * @return \Entity\CareEncounter
     */
    public function setEncounterType($encounter_type)
    {
        $this->encounter_type = $encounter_type;

        return $this;
    }

    /**
     * Get the value of encounter_type.
     *
     * @return string
     */
    public function getEncounterType()
    {
        return $this->encounter_type;
    }

    /**
     * Set the value of encounter_status.
     *
     * @param string $encounter_status
     * @return \Entity\CareEncounter
     */
    public function setEncounterStatus($encounter_status)
    {
        $this->encounter_status = $encounter_status;

        return $this;
    }

    /**
     * Get the value of encounter_status.
     *
     * @return string
     */
    public function getEncounterStatus()
    {
        return $this->encounter_status;
    }

    /**
     * Set the value of referrer_diagnosis.
     *
     * @param string $referrer_diagnosis
     * @return \Entity\CareEncounter
     */
    public function setReferrerDiagnosis($referrer_diagnosis)
    {
        $this->referrer_diagnosis = $referrer_diagnosis;

        return $this;
    }

    /**
     * Get the value of referrer_diagnosis.
     *
     * @return string
     */
    public function getReferrerDiagnosis()
    {
        return $this->referrer_diagnosis;
    }

    /**
     * Set the value of referrer_recom_therapy.
     *
     * @param string $referrer_recom_therapy
     * @return \Entity\CareEncounter
     */
    public function setReferrerRecomTherapy($referrer_recom_therapy)
    {
        $this->referrer_recom_therapy = $referrer_recom_therapy;

        return $this;
    }

    /**
     * Get the value of referrer_recom_therapy.
     *
     * @return string
     */
    public function getReferrerRecomTherapy()
    {
        return $this->referrer_recom_therapy;
    }

    /**
     * Set the value of referred_dr.
     *
     * @param integer $referred_dr
     * @return \Entity\CareEncounter
     */
    public function setReferredDr($referred_dr)
    {
        $this->referred_dr = $referred_dr;

        return $this;
    }

    /**
     * Get the value of referred_dr.
     *
     * @return integer
     */
    public function getReferredDr()
    {
        return $this->referred_dr;
    }

    /**
     * Set the value of referrer_dr.
     *
     * @param string $referrer_dr
     * @return \Entity\CareEncounter
     */
    public function setReferrerDr($referrer_dr)
    {
        $this->referrer_dr = $referrer_dr;

        return $this;
    }

    /**
     * Get the value of referrer_dr.
     *
     * @return string
     */
    public function getReferrerDr()
    {
        return $this->referrer_dr;
    }

    /**
     * Set the value of referred_number.
     *
     * @param string $referred_number
     * @return \Entity\CareEncounter
     */
    public function setReferredNumber($referred_number)
    {
        $this->referred_number = $referred_number;

        return $this;
    }

    /**
     * Get the value of referred_number.
     *
     * @return string
     */
    public function getReferredNumber()
    {
        return $this->referred_number;
    }

    /**
     * Set the value of referrer_dept.
     *
     * @param string $referrer_dept
     * @return \Entity\CareEncounter
     */
    public function setReferrerDept($referrer_dept)
    {
        $this->referrer_dept = $referrer_dept;

        return $this;
    }

    /**
     * Get the value of referrer_dept.
     *
     * @return string
     */
    public function getReferrerDept()
    {
        return $this->referrer_dept;
    }

    /**
     * Set the value of referrer_institution.
     *
     * @param string $referrer_institution
     * @return \Entity\CareEncounter
     */
    public function setReferrerInstitution($referrer_institution)
    {
        $this->referrer_institution = $referrer_institution;

        return $this;
    }

    /**
     * Get the value of referrer_institution.
     *
     * @return string
     */
    public function getReferrerInstitution()
    {
        return $this->referrer_institution;
    }

    /**
     * Set the value of referrer_notes.
     *
     * @param string $referrer_notes
     * @return \Entity\CareEncounter
     */
    public function setReferrerNotes($referrer_notes)
    {
        $this->referrer_notes = $referrer_notes;

        return $this;
    }

    /**
     * Get the value of referrer_notes.
     *
     * @return string
     */
    public function getReferrerNotes()
    {
        return $this->referrer_notes;
    }

    /**
     * Set the value of triage.
     *
     * @param string $triage
     * @return \Entity\CareEncounter
     */
    public function setTriage($triage)
    {
        $this->triage = $triage;

        return $this;
    }

    /**
     * Get the value of triage.
     *
     * @return string
     */
    public function getTriage()
    {
        return $this->triage;
    }

    /**
     * Set the value of admit_type.
     *
     * @param integer $admit_type
     * @return \Entity\CareEncounter
     */
    public function setAdmitType($admit_type)
    {
        $this->admit_type = $admit_type;

        return $this;
    }

    /**
     * Get the value of admit_type.
     *
     * @return integer
     */
    public function getAdmitType()
    {
        return $this->admit_type;
    }

    /**
     * Set the value of financial_class_nr.
     *
     * @param integer $financial_class_nr
     * @return \Entity\CareEncounter
     */
    public function setFinancialClassNr($financial_class_nr)
    {
        $this->financial_class_nr = $financial_class_nr;

        return $this;
    }

    /**
     * Get the value of financial_class_nr.
     *
     * @return integer
     */
    public function getFinancialClassNr()
    {
        return $this->financial_class_nr;
    }

    /**
     * Set the value of insurance_nr.
     *
     * @param string $insurance_nr
     * @return \Entity\CareEncounter
     */
    public function setInsuranceNr($insurance_nr)
    {
        $this->insurance_nr = $insurance_nr;

        return $this;
    }

    /**
     * Get the value of insurance_nr.
     *
     * @return string
     */
    public function getInsuranceNr()
    {
        return $this->insurance_nr;
    }

    /**
     * Set the value of insurance_firm_id.
     *
     * @param string $insurance_firm_id
     * @return \Entity\CareEncounter
     */
    public function setInsuranceFirmId($insurance_firm_id)
    {
        $this->insurance_firm_id = $insurance_firm_id;

        return $this;
    }

    /**
     * Get the value of insurance_firm_id.
     *
     * @return string
     */
    public function getInsuranceFirmId()
    {
        return $this->insurance_firm_id;
    }

    /**
     * Set the value of insurance_class_nr.
     *
     * @param integer $insurance_class_nr
     * @return \Entity\CareEncounter
     */
    public function setInsuranceClassNr($insurance_class_nr)
    {
        $this->insurance_class_nr = $insurance_class_nr;

        return $this;
    }

    /**
     * Get the value of insurance_class_nr.
     *
     * @return integer
     */
    public function getInsuranceClassNr()
    {
        return $this->insurance_class_nr;
    }

    /**
     * Set the value of insurance_2_nr.
     *
     * @param string $insurance_2_nr
     * @return \Entity\CareEncounter
     */
    public function setInsurance2Nr($insurance_2_nr)
    {
        $this->insurance_2_nr = $insurance_2_nr;

        return $this;
    }

    /**
     * Get the value of insurance_2_nr.
     *
     * @return string
     */
    public function getInsurance2Nr()
    {
        return $this->insurance_2_nr;
    }

    /**
     * Set the value of insurance_2_firm_id.
     *
     * @param string $insurance_2_firm_id
     * @return \Entity\CareEncounter
     */
    public function setInsurance2FirmId($insurance_2_firm_id)
    {
        $this->insurance_2_firm_id = $insurance_2_firm_id;

        return $this;
    }

    /**
     * Get the value of insurance_2_firm_id.
     *
     * @return string
     */
    public function getInsurance2FirmId()
    {
        return $this->insurance_2_firm_id;
    }

    /**
     * Set the value of guarantor_pid.
     *
     * @param integer $guarantor_pid
     * @return \Entity\CareEncounter
     */
    public function setGuarantorPid($guarantor_pid)
    {
        $this->guarantor_pid = $guarantor_pid;

        return $this;
    }

    /**
     * Get the value of guarantor_pid.
     *
     * @return integer
     */
    public function getGuarantorPid()
    {
        return $this->guarantor_pid;
    }

    /**
     * Set the value of contact_pid.
     *
     * @param integer $contact_pid
     * @return \Entity\CareEncounter
     */
    public function setContactPid($contact_pid)
    {
        $this->contact_pid = $contact_pid;

        return $this;
    }

    /**
     * Get the value of contact_pid.
     *
     * @return integer
     */
    public function getContactPid()
    {
        return $this->contact_pid;
    }

    /**
     * Set the value of contact_relation.
     *
     * @param string $contact_relation
     * @return \Entity\CareEncounter
     */
    public function setContactRelation($contact_relation)
    {
        $this->contact_relation = $contact_relation;

        return $this;
    }

    /**
     * Get the value of contact_relation.
     *
     * @return string
     */
    public function getContactRelation()
    {
        return $this->contact_relation;
    }

    /**
     * Set the value of current_ward_nr.
     *
     * @param integer $current_ward_nr
     * @return \Entity\CareEncounter
     */
    public function setCurrentWardNr($current_ward_nr)
    {
        $this->current_ward_nr = $current_ward_nr;

        return $this;
    }

    /**
     * Get the value of current_ward_nr.
     *
     * @return integer
     */
    public function getCurrentWardNr()
    {
        return $this->current_ward_nr;
    }

    /**
     * Set the value of current_room_nr.
     *
     * @param integer $current_room_nr
     * @return \Entity\CareEncounter
     */
    public function setCurrentRoomNr($current_room_nr)
    {
        $this->current_room_nr = $current_room_nr;

        return $this;
    }

    /**
     * Get the value of current_room_nr.
     *
     * @return integer
     */
    public function getCurrentRoomNr()
    {
        return $this->current_room_nr;
    }

    /**
     * Set the value of in_ward.
     *
     * @param boolean $in_ward
     * @return \Entity\CareEncounter
     */
    public function setInWard($in_ward)
    {
        $this->in_ward = $in_ward;

        return $this;
    }

    /**
     * Get the value of in_ward.
     *
     * @return boolean
     */
    public function getInWard()
    {
        return $this->in_ward;
    }

    /**
     * Set the value of current_dept_nr.
     *
     * @param integer $current_dept_nr
     * @return \Entity\CareEncounter
     */
    public function setCurrentDeptNr($current_dept_nr)
    {
        $this->current_dept_nr = $current_dept_nr;

        return $this;
    }

    /**
     * Get the value of current_dept_nr.
     *
     * @return integer
     */
    public function getCurrentDeptNr()
    {
        return $this->current_dept_nr;
    }

    /**
     * Set the value of in_dept.
     *
     * @param boolean $in_dept
     * @return \Entity\CareEncounter
     */
    public function setInDept($in_dept)
    {
        $this->in_dept = $in_dept;

        return $this;
    }

    /**
     * Get the value of in_dept.
     *
     * @return boolean
     */
    public function getInDept()
    {
        return $this->in_dept;
    }

    /**
     * Set the value of current_firm_nr.
     *
     * @param integer $current_firm_nr
     * @return \Entity\CareEncounter
     */
    public function setCurrentFirmNr($current_firm_nr)
    {
        $this->current_firm_nr = $current_firm_nr;

        return $this;
    }

    /**
     * Get the value of current_firm_nr.
     *
     * @return integer
     */
    public function getCurrentFirmNr()
    {
        return $this->current_firm_nr;
    }

    /**
     * Set the value of current_att_dr_nr.
     *
     * @param integer $current_att_dr_nr
     * @return \Entity\CareEncounter
     */
    public function setCurrentAttDrNr($current_att_dr_nr)
    {
        $this->current_att_dr_nr = $current_att_dr_nr;

        return $this;
    }

    /**
     * Get the value of current_att_dr_nr.
     *
     * @return integer
     */
    public function getCurrentAttDrNr()
    {
        return $this->current_att_dr_nr;
    }

    /**
     * Set the value of consulting_dr.
     *
     * @param string $consulting_dr
     * @return \Entity\CareEncounter
     */
    public function setConsultingDr($consulting_dr)
    {
        $this->consulting_dr = $consulting_dr;

        return $this;
    }

    /**
     * Get the value of consulting_dr.
     *
     * @return string
     */
    public function getConsultingDr()
    {
        return $this->consulting_dr;
    }

    /**
     * Set the value of extra_service.
     *
     * @param string $extra_service
     * @return \Entity\CareEncounter
     */
    public function setExtraService($extra_service)
    {
        $this->extra_service = $extra_service;

        return $this;
    }

    /**
     * Get the value of extra_service.
     *
     * @return string
     */
    public function getExtraService()
    {
        return $this->extra_service;
    }

    /**
     * Set the value of is_discharged.
     *
     * @param boolean $is_discharged
     * @return \Entity\CareEncounter
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
     * Set the value of discharge_date.
     *
     * @param datetime $discharge_date
     * @return \Entity\CareEncounter
     */
    public function setDischargeDate($discharge_date)
    {
        $this->discharge_date = $discharge_date;

        return $this;
    }

    /**
     * Get the value of discharge_date.
     *
     * @return datetime
     */
    public function getDischargeDate()
    {
        return $this->discharge_date;
    }

    /**
     * Set the value of discharge_time.
     *
     * @param datetime $discharge_time
     * @return \Entity\CareEncounter
     */
    public function setDischargeTime($discharge_time)
    {
        $this->discharge_time = $discharge_time;

        return $this;
    }

    /**
     * Get the value of discharge_time.
     *
     * @return datetime
     */
    public function getDischargeTime()
    {
        return $this->discharge_time;
    }

    /**
     * Set the value of followup_date.
     *
     * @param datetime $followup_date
     * @return \Entity\CareEncounter
     */
    public function setFollowupDate($followup_date)
    {
        $this->followup_date = $followup_date;

        return $this;
    }

    /**
     * Get the value of followup_date.
     *
     * @return datetime
     */
    public function getFollowupDate()
    {
        return $this->followup_date;
    }

    /**
     * Set the value of followup_responsibility.
     *
     * @param string $followup_responsibility
     * @return \Entity\CareEncounter
     */
    public function setFollowupResponsibility($followup_responsibility)
    {
        $this->followup_responsibility = $followup_responsibility;

        return $this;
    }

    /**
     * Get the value of followup_responsibility.
     *
     * @return string
     */
    public function getFollowupResponsibility()
    {
        return $this->followup_responsibility;
    }

    /**
     * Set the value of post_encounter_notes.
     *
     * @param string $post_encounter_notes
     * @return \Entity\CareEncounter
     */
    public function setPostEncounterNotes($post_encounter_notes)
    {
        $this->post_encounter_notes = $post_encounter_notes;

        return $this;
    }

    /**
     * Get the value of post_encounter_notes.
     *
     * @return string
     */
    public function getPostEncounterNotes()
    {
        return $this->post_encounter_notes;
    }

    /**
     * Set the value of kategoria_ushtaraku.
     *
     * @param string $kategoria_ushtaraku
     * @return \Entity\CareEncounter
     */
    public function setKategoriaUshtaraku($kategoria_ushtaraku)
    {
        $this->kategoria_ushtaraku = $kategoria_ushtaraku;

        return $this;
    }

    /**
     * Get the value of kategoria_ushtaraku.
     *
     * @return string
     */
    public function getKategoriaUshtaraku()
    {
        return $this->kategoria_ushtaraku;
    }

    /**
     * Set the value of statusi_ushtaraku.
     *
     * @param string $statusi_ushtaraku
     * @return \Entity\CareEncounter
     */
    public function setStatusiUshtaraku($statusi_ushtaraku)
    {
        $this->statusi_ushtaraku = $statusi_ushtaraku;

        return $this;
    }

    /**
     * Get the value of statusi_ushtaraku.
     *
     * @return string
     */
    public function getStatusiUshtaraku()
    {
        return $this->statusi_ushtaraku;
    }

    /**
     * Set the value of grada_ushtaraku.
     *
     * @param string $grada_ushtaraku
     * @return \Entity\CareEncounter
     */
    public function setGradaUshtaraku($grada_ushtaraku)
    {
        $this->grada_ushtaraku = $grada_ushtaraku;

        return $this;
    }

    /**
     * Get the value of grada_ushtaraku.
     *
     * @return string
     */
    public function getGradaUshtaraku()
    {
        return $this->grada_ushtaraku;
    }

    /**
     * Set the value of kategoria_pranimit.
     *
     * @param string $kategoria_pranimit
     * @return \Entity\CareEncounter
     */
    public function setKategoriaPranimit($kategoria_pranimit)
    {
        $this->kategoria_pranimit = $kategoria_pranimit;

        return $this;
    }

    /**
     * Get the value of kategoria_pranimit.
     *
     * @return string
     */
    public function getKategoriaPranimit()
    {
        return $this->kategoria_pranimit;
    }

    /**
     * Set the value of status.
     *
     * @param string $status
     * @return \Entity\CareEncounter
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
     * @return \Entity\CareEncounter
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
     * @return \Entity\CareEncounter
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
     * @return \Entity\CareEncounter
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
     * @return \Entity\CareEncounter
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
     * @return \Entity\CareEncounter
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
        return array('encounter_nr', 'pid', 'encounter_date', 'encounter_class_nr', 'encounter_type', 'encounter_status', 'referrer_diagnosis', 'referrer_recom_therapy', 'referred_dr', 'referrer_dr', 'referred_number', 'referrer_dept', 'referrer_institution', 'referrer_notes', 'triage', 'admit_type', 'financial_class_nr', 'insurance_nr', 'insurance_firm_id', 'insurance_class_nr', 'insurance_2_nr', 'insurance_2_firm_id', 'guarantor_pid', 'contact_pid', 'contact_relation', 'current_ward_nr', 'current_room_nr', 'in_ward', 'current_dept_nr', 'in_dept', 'current_firm_nr', 'current_att_dr_nr', 'consulting_dr', 'extra_service', 'is_discharged', 'discharge_date', 'discharge_time', 'followup_date', 'followup_responsibility', 'post_encounter_notes', 'kategoria_ushtaraku', 'statusi_ushtaraku', 'grada_ushtaraku', 'kategoria_pranimit', 'status', 'history', 'modify_id', 'modify_time', 'create_id', 'create_time');
    }
}