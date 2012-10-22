<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\CareEncounterPregnancy
 *
 * InnoDB free: 9216 kB
 *
 * @ORM\Entity(repositoryClass="CareEncounterPregnancyRepository")
 * @ORM\Table(name="care_encounter_pregnancy", indexes={@ORM\Index(name="encounter_nr", columns={"encounter_nr"})})
 */
class CareEncounterPregnancy
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $nr;

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    protected $encounter_nr;

    /**
     * @ORM\Column(type="integer")
     */
    protected $this_pregnancy_nr;

    /**
     * @ORM\Column(type="date")
     */
    protected $delivery_date;

    /**
     * @ORM\Column(type="time")
     */
    protected $delivery_time;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $gravida;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $para;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $pregnancy_gestational_age;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $nr_of_fetuses;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $child_encounter_nr;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $is_booked;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    protected $vdrl;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    protected $rh;

    /**
     * @ORM\Column(type="integer")
     */
    protected $delivery_mode;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    protected $delivery_by;

    /**
     * @ORM\Column(type="smallint", nullable=true)
     */
    protected $bp_systolic_high;

    /**
     * @ORM\Column(type="smallint", nullable=true)
     */
    protected $bp_diastolic_high;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    protected $proteinuria;

    /**
     * @ORM\Column(type="smallint", nullable=true)
     */
    protected $labour_duration;

    /**
     * @ORM\Column(type="integer")
     */
    protected $induction_method;

    /**
     * @ORM\Column(type="string", length=125, nullable=true)
     */
    protected $induction_indication;

    /**
     * @ORM\Column(type="integer")
     */
    protected $anaesth_type_nr;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    protected $is_epidural;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $complications;

    /**
     * @ORM\Column(type="integer")
     */
    protected $perineum;

    /**
     * @ORM\Column(type="float", precision=8, scale=2, nullable=true)
     */
    protected $blood_loss;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    protected $blood_loss_unit;

    /**
     * @ORM\Column(type="string", length=1)
     */
    protected $is_retained_placenta;

    /**
     * @ORM\Column(type="string", length=35, nullable=true)
     */
    protected $post_labour_condition;

    /**
     * @ORM\Column(type="string", length=35)
     */
    protected $outcome;

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
     * @return \Entity\CareEncounterPregnancy
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
     * Set the value of encounter_nr.
     *
     * @param integer $encounter_nr
     * @return \Entity\CareEncounterPregnancy
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
     * Set the value of this_pregnancy_nr.
     *
     * @param integer $this_pregnancy_nr
     * @return \Entity\CareEncounterPregnancy
     */
    public function setThisPregnancyNr($this_pregnancy_nr)
    {
        $this->this_pregnancy_nr = $this_pregnancy_nr;

        return $this;
    }

    /**
     * Get the value of this_pregnancy_nr.
     *
     * @return integer
     */
    public function getThisPregnancyNr()
    {
        return $this->this_pregnancy_nr;
    }

    /**
     * Set the value of delivery_date.
     *
     * @param datetime $delivery_date
     * @return \Entity\CareEncounterPregnancy
     */
    public function setDeliveryDate($delivery_date)
    {
        $this->delivery_date = $delivery_date;

        return $this;
    }

    /**
     * Get the value of delivery_date.
     *
     * @return datetime
     */
    public function getDeliveryDate()
    {
        return $this->delivery_date;
    }

    /**
     * Set the value of delivery_time.
     *
     * @param datetime $delivery_time
     * @return \Entity\CareEncounterPregnancy
     */
    public function setDeliveryTime($delivery_time)
    {
        $this->delivery_time = $delivery_time;

        return $this;
    }

    /**
     * Get the value of delivery_time.
     *
     * @return datetime
     */
    public function getDeliveryTime()
    {
        return $this->delivery_time;
    }

    /**
     * Set the value of gravida.
     *
     * @param integer $gravida
     * @return \Entity\CareEncounterPregnancy
     */
    public function setGravida($gravida)
    {
        $this->gravida = $gravida;

        return $this;
    }

    /**
     * Get the value of gravida.
     *
     * @return integer
     */
    public function getGravida()
    {
        return $this->gravida;
    }

    /**
     * Set the value of para.
     *
     * @param integer $para
     * @return \Entity\CareEncounterPregnancy
     */
    public function setPara($para)
    {
        $this->para = $para;

        return $this;
    }

    /**
     * Get the value of para.
     *
     * @return integer
     */
    public function getPara()
    {
        return $this->para;
    }

    /**
     * Set the value of pregnancy_gestational_age.
     *
     * @param integer $pregnancy_gestational_age
     * @return \Entity\CareEncounterPregnancy
     */
    public function setPregnancyGestationalAge($pregnancy_gestational_age)
    {
        $this->pregnancy_gestational_age = $pregnancy_gestational_age;

        return $this;
    }

    /**
     * Get the value of pregnancy_gestational_age.
     *
     * @return integer
     */
    public function getPregnancyGestationalAge()
    {
        return $this->pregnancy_gestational_age;
    }

    /**
     * Set the value of nr_of_fetuses.
     *
     * @param integer $nr_of_fetuses
     * @return \Entity\CareEncounterPregnancy
     */
    public function setNrOfFetuses($nr_of_fetuses)
    {
        $this->nr_of_fetuses = $nr_of_fetuses;

        return $this;
    }

    /**
     * Get the value of nr_of_fetuses.
     *
     * @return integer
     */
    public function getNrOfFetuses()
    {
        return $this->nr_of_fetuses;
    }

    /**
     * Set the value of child_encounter_nr.
     *
     * @param string $child_encounter_nr
     * @return \Entity\CareEncounterPregnancy
     */
    public function setChildEncounterNr($child_encounter_nr)
    {
        $this->child_encounter_nr = $child_encounter_nr;

        return $this;
    }

    /**
     * Get the value of child_encounter_nr.
     *
     * @return string
     */
    public function getChildEncounterNr()
    {
        return $this->child_encounter_nr;
    }

    /**
     * Set the value of is_booked.
     *
     * @param boolean $is_booked
     * @return \Entity\CareEncounterPregnancy
     */
    public function setIsBooked($is_booked)
    {
        $this->is_booked = $is_booked;

        return $this;
    }

    /**
     * Get the value of is_booked.
     *
     * @return boolean
     */
    public function getIsBooked()
    {
        return $this->is_booked;
    }

    /**
     * Set the value of vdrl.
     *
     * @param string $vdrl
     * @return \Entity\CareEncounterPregnancy
     */
    public function setVdrl($vdrl)
    {
        $this->vdrl = $vdrl;

        return $this;
    }

    /**
     * Get the value of vdrl.
     *
     * @return string
     */
    public function getVdrl()
    {
        return $this->vdrl;
    }

    /**
     * Set the value of rh.
     *
     * @param boolean $rh
     * @return \Entity\CareEncounterPregnancy
     */
    public function setRh($rh)
    {
        $this->rh = $rh;

        return $this;
    }

    /**
     * Get the value of rh.
     *
     * @return boolean
     */
    public function getRh()
    {
        return $this->rh;
    }

    /**
     * Set the value of delivery_mode.
     *
     * @param integer $delivery_mode
     * @return \Entity\CareEncounterPregnancy
     */
    public function setDeliveryMode($delivery_mode)
    {
        $this->delivery_mode = $delivery_mode;

        return $this;
    }

    /**
     * Get the value of delivery_mode.
     *
     * @return integer
     */
    public function getDeliveryMode()
    {
        return $this->delivery_mode;
    }

    /**
     * Set the value of delivery_by.
     *
     * @param string $delivery_by
     * @return \Entity\CareEncounterPregnancy
     */
    public function setDeliveryBy($delivery_by)
    {
        $this->delivery_by = $delivery_by;

        return $this;
    }

    /**
     * Get the value of delivery_by.
     *
     * @return string
     */
    public function getDeliveryBy()
    {
        return $this->delivery_by;
    }

    /**
     * Set the value of bp_systolic_high.
     *
     * @param integer $bp_systolic_high
     * @return \Entity\CareEncounterPregnancy
     */
    public function setBpSystolicHigh($bp_systolic_high)
    {
        $this->bp_systolic_high = $bp_systolic_high;

        return $this;
    }

    /**
     * Get the value of bp_systolic_high.
     *
     * @return integer
     */
    public function getBpSystolicHigh()
    {
        return $this->bp_systolic_high;
    }

    /**
     * Set the value of bp_diastolic_high.
     *
     * @param integer $bp_diastolic_high
     * @return \Entity\CareEncounterPregnancy
     */
    public function setBpDiastolicHigh($bp_diastolic_high)
    {
        $this->bp_diastolic_high = $bp_diastolic_high;

        return $this;
    }

    /**
     * Get the value of bp_diastolic_high.
     *
     * @return integer
     */
    public function getBpDiastolicHigh()
    {
        return $this->bp_diastolic_high;
    }

    /**
     * Set the value of proteinuria.
     *
     * @param boolean $proteinuria
     * @return \Entity\CareEncounterPregnancy
     */
    public function setProteinuria($proteinuria)
    {
        $this->proteinuria = $proteinuria;

        return $this;
    }

    /**
     * Get the value of proteinuria.
     *
     * @return boolean
     */
    public function getProteinuria()
    {
        return $this->proteinuria;
    }

    /**
     * Set the value of labour_duration.
     *
     * @param integer $labour_duration
     * @return \Entity\CareEncounterPregnancy
     */
    public function setLabourDuration($labour_duration)
    {
        $this->labour_duration = $labour_duration;

        return $this;
    }

    /**
     * Get the value of labour_duration.
     *
     * @return integer
     */
    public function getLabourDuration()
    {
        return $this->labour_duration;
    }

    /**
     * Set the value of induction_method.
     *
     * @param integer $induction_method
     * @return \Entity\CareEncounterPregnancy
     */
    public function setInductionMethod($induction_method)
    {
        $this->induction_method = $induction_method;

        return $this;
    }

    /**
     * Get the value of induction_method.
     *
     * @return integer
     */
    public function getInductionMethod()
    {
        return $this->induction_method;
    }

    /**
     * Set the value of induction_indication.
     *
     * @param string $induction_indication
     * @return \Entity\CareEncounterPregnancy
     */
    public function setInductionIndication($induction_indication)
    {
        $this->induction_indication = $induction_indication;

        return $this;
    }

    /**
     * Get the value of induction_indication.
     *
     * @return string
     */
    public function getInductionIndication()
    {
        return $this->induction_indication;
    }

    /**
     * Set the value of anaesth_type_nr.
     *
     * @param integer $anaesth_type_nr
     * @return \Entity\CareEncounterPregnancy
     */
    public function setAnaesthTypeNr($anaesth_type_nr)
    {
        $this->anaesth_type_nr = $anaesth_type_nr;

        return $this;
    }

    /**
     * Get the value of anaesth_type_nr.
     *
     * @return integer
     */
    public function getAnaesthTypeNr()
    {
        return $this->anaesth_type_nr;
    }

    /**
     * Set the value of is_epidural.
     *
     * @param string $is_epidural
     * @return \Entity\CareEncounterPregnancy
     */
    public function setIsEpidural($is_epidural)
    {
        $this->is_epidural = $is_epidural;

        return $this;
    }

    /**
     * Get the value of is_epidural.
     *
     * @return string
     */
    public function getIsEpidural()
    {
        return $this->is_epidural;
    }

    /**
     * Set the value of complications.
     *
     * @param string $complications
     * @return \Entity\CareEncounterPregnancy
     */
    public function setComplications($complications)
    {
        $this->complications = $complications;

        return $this;
    }

    /**
     * Get the value of complications.
     *
     * @return string
     */
    public function getComplications()
    {
        return $this->complications;
    }

    /**
     * Set the value of perineum.
     *
     * @param integer $perineum
     * @return \Entity\CareEncounterPregnancy
     */
    public function setPerineum($perineum)
    {
        $this->perineum = $perineum;

        return $this;
    }

    /**
     * Get the value of perineum.
     *
     * @return integer
     */
    public function getPerineum()
    {
        return $this->perineum;
    }

    /**
     * Set the value of blood_loss.
     *
     * @param float $blood_loss
     * @return \Entity\CareEncounterPregnancy
     */
    public function setBloodLoss($blood_loss)
    {
        $this->blood_loss = $blood_loss;

        return $this;
    }

    /**
     * Get the value of blood_loss.
     *
     * @return float
     */
    public function getBloodLoss()
    {
        return $this->blood_loss;
    }

    /**
     * Set the value of blood_loss_unit.
     *
     * @param string $blood_loss_unit
     * @return \Entity\CareEncounterPregnancy
     */
    public function setBloodLossUnit($blood_loss_unit)
    {
        $this->blood_loss_unit = $blood_loss_unit;

        return $this;
    }

    /**
     * Get the value of blood_loss_unit.
     *
     * @return string
     */
    public function getBloodLossUnit()
    {
        return $this->blood_loss_unit;
    }

    /**
     * Set the value of is_retained_placenta.
     *
     * @param string $is_retained_placenta
     * @return \Entity\CareEncounterPregnancy
     */
    public function setIsRetainedPlacenta($is_retained_placenta)
    {
        $this->is_retained_placenta = $is_retained_placenta;

        return $this;
    }

    /**
     * Get the value of is_retained_placenta.
     *
     * @return string
     */
    public function getIsRetainedPlacenta()
    {
        return $this->is_retained_placenta;
    }

    /**
     * Set the value of post_labour_condition.
     *
     * @param string $post_labour_condition
     * @return \Entity\CareEncounterPregnancy
     */
    public function setPostLabourCondition($post_labour_condition)
    {
        $this->post_labour_condition = $post_labour_condition;

        return $this;
    }

    /**
     * Get the value of post_labour_condition.
     *
     * @return string
     */
    public function getPostLabourCondition()
    {
        return $this->post_labour_condition;
    }

    /**
     * Set the value of outcome.
     *
     * @param string $outcome
     * @return \Entity\CareEncounterPregnancy
     */
    public function setOutcome($outcome)
    {
        $this->outcome = $outcome;

        return $this;
    }

    /**
     * Get the value of outcome.
     *
     * @return string
     */
    public function getOutcome()
    {
        return $this->outcome;
    }

    /**
     * Set the value of status.
     *
     * @param string $status
     * @return \Entity\CareEncounterPregnancy
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
     * @return \Entity\CareEncounterPregnancy
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
     * @return \Entity\CareEncounterPregnancy
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
     * @return \Entity\CareEncounterPregnancy
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
     * @return \Entity\CareEncounterPregnancy
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
     * @return \Entity\CareEncounterPregnancy
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
        return array('nr', 'encounter_nr', 'this_pregnancy_nr', 'delivery_date', 'delivery_time', 'gravida', 'para', 'pregnancy_gestational_age', 'nr_of_fetuses', 'child_encounter_nr', 'is_booked', 'vdrl', 'rh', 'delivery_mode', 'delivery_by', 'bp_systolic_high', 'bp_diastolic_high', 'proteinuria', 'labour_duration', 'induction_method', 'induction_indication', 'anaesth_type_nr', 'is_epidural', 'complications', 'perineum', 'blood_loss', 'blood_loss_unit', 'is_retained_placenta', 'post_labour_condition', 'outcome', 'status', 'history', 'modify_id', 'modify_time', 'create_id', 'create_time');
    }
}