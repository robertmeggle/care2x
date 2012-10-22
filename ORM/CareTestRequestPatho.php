<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\CareTestRequestPatho
 *
 * InnoDB free: 8192 kB
 *
 * @ORM\Entity(repositoryClass="CareTestRequestPathoRepository")
 * @ORM\Table(name="care_test_request_patho", indexes={@ORM\Index(name="encounter_nr", columns={"encounter_nr"}), @ORM\Index(name="send_date", columns={"send_date"})})
 */
class CareTestRequestPatho
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
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
     * @ORM\Column(type="integer")
     */
    protected $quick_cut;

    /**
     * @ORM\Column(type="string", length=40)
     */
    protected $qc_phone;

    /**
     * @ORM\Column(type="integer")
     */
    protected $quick_diagnosis;

    /**
     * @ORM\Column(type="string", length=40)
     */
    protected $qd_phone;

    /**
     * @ORM\Column(type="string", length=25)
     */
    protected $material_type;

    /**
     * @ORM\Column(type="text")
     */
    protected $material_desc;

    /**
     * @ORM\Column(type="text")
     */
    protected $localization;

    /**
     * @ORM\Column(type="text")
     */
    protected $clinical_note;

    /**
     * @ORM\Column(type="text")
     */
    protected $extra_note;

    /**
     * @ORM\Column(type="text")
     */
    protected $repeat_note;

    /**
     * @ORM\Column(type="string", length=25)
     */
    protected $gyn_last_period;

    /**
     * @ORM\Column(type="string", length=25)
     */
    protected $gyn_period_type;

    /**
     * @ORM\Column(type="string", length=25)
     */
    protected $gyn_gravida;

    /**
     * @ORM\Column(type="string", length=25)
     */
    protected $gyn_menopause_since;

    /**
     * @ORM\Column(type="string", length=25)
     */
    protected $gyn_hysterectomy;

    /**
     * @ORM\Column(type="string", length=25)
     */
    protected $gyn_contraceptive;

    /**
     * @ORM\Column(type="string", length=25)
     */
    protected $gyn_iud;

    /**
     * @ORM\Column(type="string", length=25)
     */
    protected $gyn_hormone_therapy;

    /**
     * @ORM\Column(type="string", length=35)
     */
    protected $doctor_sign;

    /**
     * @ORM\Column(type="date")
     */
    protected $op_date;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $send_date;

    /**
     * @ORM\Column(type="string", length=10)
     */
    protected $status;

    /**
     * @ORM\Column(type="date")
     */
    protected $entry_date;

    /**
     * @ORM\Column(type="string", length=15)
     */
    protected $journal_nr;

    /**
     * @ORM\Column(type="integer")
     */
    protected $blocks_nr;

    /**
     * @ORM\Column(type="integer")
     */
    protected $deep_cuts;

    /**
     * @ORM\Column(type="string", length=35)
     */
    protected $special_dye;

    /**
     * @ORM\Column(type="string", length=35)
     */
    protected $immune_histochem;

    /**
     * @ORM\Column(type="string", length=35)
     */
    protected $hormone_receptors;

    /**
     * @ORM\Column(type="string", length=35)
     */
    protected $specials;

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
     * @return \Entity\CareTestRequestPatho
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
     * @return \Entity\CareTestRequestPatho
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
     * @return \Entity\CareTestRequestPatho
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
     * Set the value of quick_cut.
     *
     * @param integer $quick_cut
     * @return \Entity\CareTestRequestPatho
     */
    public function setQuickCut($quick_cut)
    {
        $this->quick_cut = $quick_cut;

        return $this;
    }

    /**
     * Get the value of quick_cut.
     *
     * @return integer
     */
    public function getQuickCut()
    {
        return $this->quick_cut;
    }

    /**
     * Set the value of qc_phone.
     *
     * @param string $qc_phone
     * @return \Entity\CareTestRequestPatho
     */
    public function setQcPhone($qc_phone)
    {
        $this->qc_phone = $qc_phone;

        return $this;
    }

    /**
     * Get the value of qc_phone.
     *
     * @return string
     */
    public function getQcPhone()
    {
        return $this->qc_phone;
    }

    /**
     * Set the value of quick_diagnosis.
     *
     * @param integer $quick_diagnosis
     * @return \Entity\CareTestRequestPatho
     */
    public function setQuickDiagnosis($quick_diagnosis)
    {
        $this->quick_diagnosis = $quick_diagnosis;

        return $this;
    }

    /**
     * Get the value of quick_diagnosis.
     *
     * @return integer
     */
    public function getQuickDiagnosis()
    {
        return $this->quick_diagnosis;
    }

    /**
     * Set the value of qd_phone.
     *
     * @param string $qd_phone
     * @return \Entity\CareTestRequestPatho
     */
    public function setQdPhone($qd_phone)
    {
        $this->qd_phone = $qd_phone;

        return $this;
    }

    /**
     * Get the value of qd_phone.
     *
     * @return string
     */
    public function getQdPhone()
    {
        return $this->qd_phone;
    }

    /**
     * Set the value of material_type.
     *
     * @param string $material_type
     * @return \Entity\CareTestRequestPatho
     */
    public function setMaterialType($material_type)
    {
        $this->material_type = $material_type;

        return $this;
    }

    /**
     * Get the value of material_type.
     *
     * @return string
     */
    public function getMaterialType()
    {
        return $this->material_type;
    }

    /**
     * Set the value of material_desc.
     *
     * @param string $material_desc
     * @return \Entity\CareTestRequestPatho
     */
    public function setMaterialDesc($material_desc)
    {
        $this->material_desc = $material_desc;

        return $this;
    }

    /**
     * Get the value of material_desc.
     *
     * @return string
     */
    public function getMaterialDesc()
    {
        return $this->material_desc;
    }

    /**
     * Set the value of localization.
     *
     * @param string $localization
     * @return \Entity\CareTestRequestPatho
     */
    public function setLocalization($localization)
    {
        $this->localization = $localization;

        return $this;
    }

    /**
     * Get the value of localization.
     *
     * @return string
     */
    public function getLocalization()
    {
        return $this->localization;
    }

    /**
     * Set the value of clinical_note.
     *
     * @param string $clinical_note
     * @return \Entity\CareTestRequestPatho
     */
    public function setClinicalNote($clinical_note)
    {
        $this->clinical_note = $clinical_note;

        return $this;
    }

    /**
     * Get the value of clinical_note.
     *
     * @return string
     */
    public function getClinicalNote()
    {
        return $this->clinical_note;
    }

    /**
     * Set the value of extra_note.
     *
     * @param string $extra_note
     * @return \Entity\CareTestRequestPatho
     */
    public function setExtraNote($extra_note)
    {
        $this->extra_note = $extra_note;

        return $this;
    }

    /**
     * Get the value of extra_note.
     *
     * @return string
     */
    public function getExtraNote()
    {
        return $this->extra_note;
    }

    /**
     * Set the value of repeat_note.
     *
     * @param string $repeat_note
     * @return \Entity\CareTestRequestPatho
     */
    public function setRepeatNote($repeat_note)
    {
        $this->repeat_note = $repeat_note;

        return $this;
    }

    /**
     * Get the value of repeat_note.
     *
     * @return string
     */
    public function getRepeatNote()
    {
        return $this->repeat_note;
    }

    /**
     * Set the value of gyn_last_period.
     *
     * @param string $gyn_last_period
     * @return \Entity\CareTestRequestPatho
     */
    public function setGynLastPeriod($gyn_last_period)
    {
        $this->gyn_last_period = $gyn_last_period;

        return $this;
    }

    /**
     * Get the value of gyn_last_period.
     *
     * @return string
     */
    public function getGynLastPeriod()
    {
        return $this->gyn_last_period;
    }

    /**
     * Set the value of gyn_period_type.
     *
     * @param string $gyn_period_type
     * @return \Entity\CareTestRequestPatho
     */
    public function setGynPeriodType($gyn_period_type)
    {
        $this->gyn_period_type = $gyn_period_type;

        return $this;
    }

    /**
     * Get the value of gyn_period_type.
     *
     * @return string
     */
    public function getGynPeriodType()
    {
        return $this->gyn_period_type;
    }

    /**
     * Set the value of gyn_gravida.
     *
     * @param string $gyn_gravida
     * @return \Entity\CareTestRequestPatho
     */
    public function setGynGravida($gyn_gravida)
    {
        $this->gyn_gravida = $gyn_gravida;

        return $this;
    }

    /**
     * Get the value of gyn_gravida.
     *
     * @return string
     */
    public function getGynGravida()
    {
        return $this->gyn_gravida;
    }

    /**
     * Set the value of gyn_menopause_since.
     *
     * @param string $gyn_menopause_since
     * @return \Entity\CareTestRequestPatho
     */
    public function setGynMenopauseSince($gyn_menopause_since)
    {
        $this->gyn_menopause_since = $gyn_menopause_since;

        return $this;
    }

    /**
     * Get the value of gyn_menopause_since.
     *
     * @return string
     */
    public function getGynMenopauseSince()
    {
        return $this->gyn_menopause_since;
    }

    /**
     * Set the value of gyn_hysterectomy.
     *
     * @param string $gyn_hysterectomy
     * @return \Entity\CareTestRequestPatho
     */
    public function setGynHysterectomy($gyn_hysterectomy)
    {
        $this->gyn_hysterectomy = $gyn_hysterectomy;

        return $this;
    }

    /**
     * Get the value of gyn_hysterectomy.
     *
     * @return string
     */
    public function getGynHysterectomy()
    {
        return $this->gyn_hysterectomy;
    }

    /**
     * Set the value of gyn_contraceptive.
     *
     * @param string $gyn_contraceptive
     * @return \Entity\CareTestRequestPatho
     */
    public function setGynContraceptive($gyn_contraceptive)
    {
        $this->gyn_contraceptive = $gyn_contraceptive;

        return $this;
    }

    /**
     * Get the value of gyn_contraceptive.
     *
     * @return string
     */
    public function getGynContraceptive()
    {
        return $this->gyn_contraceptive;
    }

    /**
     * Set the value of gyn_iud.
     *
     * @param string $gyn_iud
     * @return \Entity\CareTestRequestPatho
     */
    public function setGynIud($gyn_iud)
    {
        $this->gyn_iud = $gyn_iud;

        return $this;
    }

    /**
     * Get the value of gyn_iud.
     *
     * @return string
     */
    public function getGynIud()
    {
        return $this->gyn_iud;
    }

    /**
     * Set the value of gyn_hormone_therapy.
     *
     * @param string $gyn_hormone_therapy
     * @return \Entity\CareTestRequestPatho
     */
    public function setGynHormoneTherapy($gyn_hormone_therapy)
    {
        $this->gyn_hormone_therapy = $gyn_hormone_therapy;

        return $this;
    }

    /**
     * Get the value of gyn_hormone_therapy.
     *
     * @return string
     */
    public function getGynHormoneTherapy()
    {
        return $this->gyn_hormone_therapy;
    }

    /**
     * Set the value of doctor_sign.
     *
     * @param string $doctor_sign
     * @return \Entity\CareTestRequestPatho
     */
    public function setDoctorSign($doctor_sign)
    {
        $this->doctor_sign = $doctor_sign;

        return $this;
    }

    /**
     * Get the value of doctor_sign.
     *
     * @return string
     */
    public function getDoctorSign()
    {
        return $this->doctor_sign;
    }

    /**
     * Set the value of op_date.
     *
     * @param datetime $op_date
     * @return \Entity\CareTestRequestPatho
     */
    public function setOpDate($op_date)
    {
        $this->op_date = $op_date;

        return $this;
    }

    /**
     * Get the value of op_date.
     *
     * @return datetime
     */
    public function getOpDate()
    {
        return $this->op_date;
    }

    /**
     * Set the value of send_date.
     *
     * @param datetime $send_date
     * @return \Entity\CareTestRequestPatho
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
     * Set the value of status.
     *
     * @param string $status
     * @return \Entity\CareTestRequestPatho
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
     * Set the value of entry_date.
     *
     * @param datetime $entry_date
     * @return \Entity\CareTestRequestPatho
     */
    public function setEntryDate($entry_date)
    {
        $this->entry_date = $entry_date;

        return $this;
    }

    /**
     * Get the value of entry_date.
     *
     * @return datetime
     */
    public function getEntryDate()
    {
        return $this->entry_date;
    }

    /**
     * Set the value of journal_nr.
     *
     * @param string $journal_nr
     * @return \Entity\CareTestRequestPatho
     */
    public function setJournalNr($journal_nr)
    {
        $this->journal_nr = $journal_nr;

        return $this;
    }

    /**
     * Get the value of journal_nr.
     *
     * @return string
     */
    public function getJournalNr()
    {
        return $this->journal_nr;
    }

    /**
     * Set the value of blocks_nr.
     *
     * @param integer $blocks_nr
     * @return \Entity\CareTestRequestPatho
     */
    public function setBlocksNr($blocks_nr)
    {
        $this->blocks_nr = $blocks_nr;

        return $this;
    }

    /**
     * Get the value of blocks_nr.
     *
     * @return integer
     */
    public function getBlocksNr()
    {
        return $this->blocks_nr;
    }

    /**
     * Set the value of deep_cuts.
     *
     * @param integer $deep_cuts
     * @return \Entity\CareTestRequestPatho
     */
    public function setDeepCuts($deep_cuts)
    {
        $this->deep_cuts = $deep_cuts;

        return $this;
    }

    /**
     * Get the value of deep_cuts.
     *
     * @return integer
     */
    public function getDeepCuts()
    {
        return $this->deep_cuts;
    }

    /**
     * Set the value of special_dye.
     *
     * @param string $special_dye
     * @return \Entity\CareTestRequestPatho
     */
    public function setSpecialDye($special_dye)
    {
        $this->special_dye = $special_dye;

        return $this;
    }

    /**
     * Get the value of special_dye.
     *
     * @return string
     */
    public function getSpecialDye()
    {
        return $this->special_dye;
    }

    /**
     * Set the value of immune_histochem.
     *
     * @param string $immune_histochem
     * @return \Entity\CareTestRequestPatho
     */
    public function setImmuneHistochem($immune_histochem)
    {
        $this->immune_histochem = $immune_histochem;

        return $this;
    }

    /**
     * Get the value of immune_histochem.
     *
     * @return string
     */
    public function getImmuneHistochem()
    {
        return $this->immune_histochem;
    }

    /**
     * Set the value of hormone_receptors.
     *
     * @param string $hormone_receptors
     * @return \Entity\CareTestRequestPatho
     */
    public function setHormoneReceptors($hormone_receptors)
    {
        $this->hormone_receptors = $hormone_receptors;

        return $this;
    }

    /**
     * Get the value of hormone_receptors.
     *
     * @return string
     */
    public function getHormoneReceptors()
    {
        return $this->hormone_receptors;
    }

    /**
     * Set the value of specials.
     *
     * @param string $specials
     * @return \Entity\CareTestRequestPatho
     */
    public function setSpecials($specials)
    {
        $this->specials = $specials;

        return $this;
    }

    /**
     * Get the value of specials.
     *
     * @return string
     */
    public function getSpecials()
    {
        return $this->specials;
    }

    /**
     * Set the value of history.
     *
     * @param string $history
     * @return \Entity\CareTestRequestPatho
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
     * @return \Entity\CareTestRequestPatho
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
     * @return \Entity\CareTestRequestPatho
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
     * @return \Entity\CareTestRequestPatho
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
     * @return \Entity\CareTestRequestPatho
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
     * @return \Entity\CareTestRequestPatho
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
     * @return \Entity\CareTestRequestPatho
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
        return array('batch_nr', 'encounter_nr', 'dept_nr', 'quick_cut', 'qc_phone', 'quick_diagnosis', 'qd_phone', 'material_type', 'material_desc', 'localization', 'clinical_note', 'extra_note', 'repeat_note', 'gyn_last_period', 'gyn_period_type', 'gyn_gravida', 'gyn_menopause_since', 'gyn_hysterectomy', 'gyn_contraceptive', 'gyn_iud', 'gyn_hormone_therapy', 'doctor_sign', 'op_date', 'send_date', 'status', 'entry_date', 'journal_nr', 'blocks_nr', 'deep_cuts', 'special_dye', 'immune_histochem', 'hormone_receptors', 'specials', 'history', 'modify_id', 'modify_time', 'create_id', 'create_time', 'process_id', 'process_time');
    }
}