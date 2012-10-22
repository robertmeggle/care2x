<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\CareTestRequestBlood
 *
 * InnoDB free: 8192 kB
 *
 * @ORM\Entity(repositoryClass="CareTestRequestBloodRepository")
 * @ORM\Table(name="care_test_request_blood", indexes={@ORM\Index(name="send_date", columns={"send_date"})})
 */
class CareTestRequestBlood
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
     * @ORM\Column(type="string", length=10)
     */
    protected $blood_group;

    /**
     * @ORM\Column(type="string", length=10)
     */
    protected $rh_factor;

    /**
     * @ORM\Column(type="string", length=10)
     */
    protected $kell;

    /**
     * @ORM\Column(type="string", length=45)
     */
    protected $date_protoc_nr;

    /**
     * @ORM\Column(type="string", length=15)
     */
    protected $pure_blood;

    /**
     * @ORM\Column(type="string", length=15)
     */
    protected $red_blood;

    /**
     * @ORM\Column(type="string", length=15)
     */
    protected $leukoless_blood;

    /**
     * @ORM\Column(type="string", length=15)
     */
    protected $washed_blood;

    /**
     * @ORM\Column(type="string", length=15)
     */
    protected $prp_blood;

    /**
     * @ORM\Column(type="string", length=15)
     */
    protected $thrombo_con;

    /**
     * @ORM\Column(type="string", length=15)
     */
    protected $ffp_plasma;

    /**
     * @ORM\Column(type="string", length=15)
     */
    protected $transfusion_dev;

    /**
     * @ORM\Column(type="integer")
     */
    protected $match_sample;

    /**
     * @ORM\Column(type="date")
     */
    protected $transfusion_date;

    /**
     * @ORM\Column(type="text")
     */
    protected $diagnosis;

    /**
     * @ORM\Column(type="text")
     */
    protected $notes;

    /**
     * @ORM\Column(type="date")
     */
    protected $send_date;

    /**
     * @ORM\Column(type="string", length=35)
     */
    protected $doctor;

    /**
     * @ORM\Column(type="string", length=40)
     */
    protected $phone_nr;

    /**
     * @ORM\Column(type="string", length=10)
     */
    protected $status;

    /**
     * @ORM\Column(type="text")
     */
    protected $blood_pb;

    /**
     * @ORM\Column(type="text")
     */
    protected $blood_rb;

    /**
     * @ORM\Column(type="text")
     */
    protected $blood_llrb;

    /**
     * @ORM\Column(type="text")
     */
    protected $blood_wrb;

    /**
     * @ORM\Column(type="blob")
     */
    protected $blood_prp;

    /**
     * @ORM\Column(type="text")
     */
    protected $blood_tc;

    /**
     * @ORM\Column(type="text")
     */
    protected $blood_ffp;

    /**
     * @ORM\Column(type="integer")
     */
    protected $b_group_count;

    /**
     * @ORM\Column(type="float", precision=10, scale=2)
     */
    protected $b_group_price;

    /**
     * @ORM\Column(type="integer")
     */
    protected $a_subgroup_count;

    /**
     * @ORM\Column(type="float", precision=10, scale=2)
     */
    protected $a_subgroup_price;

    /**
     * @ORM\Column(type="integer")
     */
    protected $extra_factors_count;

    /**
     * @ORM\Column(type="float", precision=10, scale=2)
     */
    protected $extra_factors_price;

    /**
     * @ORM\Column(type="integer")
     */
    protected $coombs_count;

    /**
     * @ORM\Column(type="float", precision=10, scale=2)
     */
    protected $coombs_price;

    /**
     * @ORM\Column(type="integer")
     */
    protected $ab_test_count;

    /**
     * @ORM\Column(type="float", precision=10, scale=2)
     */
    protected $ab_test_price;

    /**
     * @ORM\Column(type="integer")
     */
    protected $crosstest_count;

    /**
     * @ORM\Column(type="float", precision=10, scale=2)
     */
    protected $crosstest_price;

    /**
     * @ORM\Column(type="integer")
     */
    protected $ab_diff_count;

    /**
     * @ORM\Column(type="float", precision=10, scale=2)
     */
    protected $ab_diff_price;

    /**
     * @ORM\Column(type="integer")
     */
    protected $x_test_1_code;

    /**
     * @ORM\Column(type="string", length=35)
     */
    protected $x_test_1_name;

    /**
     * @ORM\Column(type="integer")
     */
    protected $x_test_1_count;

    /**
     * @ORM\Column(type="float", precision=10, scale=2)
     */
    protected $x_test_1_price;

    /**
     * @ORM\Column(type="integer")
     */
    protected $x_test_2_code;

    /**
     * @ORM\Column(type="string", length=35)
     */
    protected $x_test_2_name;

    /**
     * @ORM\Column(type="integer")
     */
    protected $x_test_2_count;

    /**
     * @ORM\Column(type="float", precision=10, scale=2)
     */
    protected $x_test_2_price;

    /**
     * @ORM\Column(type="integer")
     */
    protected $x_test_3_code;

    /**
     * @ORM\Column(type="string", length=35)
     */
    protected $x_test_3_name;

    /**
     * @ORM\Column(type="integer")
     */
    protected $x_test_3_count;

    /**
     * @ORM\Column(type="float", precision=10, scale=2)
     */
    protected $x_test_3_price;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $lab_stamp;

    /**
     * @ORM\Column(type="string", length=20)
     */
    protected $release_via;

    /**
     * @ORM\Column(type="string", length=20)
     */
    protected $receipt_ack;

    /**
     * @ORM\Column(type="string", length=7)
     */
    protected $mainlog_nr;

    /**
     * @ORM\Column(type="string", length=7)
     */
    protected $lab_nr;

    /**
     * @ORM\Column(type="date")
     */
    protected $mainlog_date;

    /**
     * @ORM\Column(type="date")
     */
    protected $lab_date;

    /**
     * @ORM\Column(type="string", length=20)
     */
    protected $mainlog_sign;

    /**
     * @ORM\Column(type="string", length=20)
     */
    protected $lab_sign;

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
     * @return \Entity\CareTestRequestBlood
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
     * @return \Entity\CareTestRequestBlood
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
     * @return \Entity\CareTestRequestBlood
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
     * Set the value of blood_group.
     *
     * @param string $blood_group
     * @return \Entity\CareTestRequestBlood
     */
    public function setBloodGroup($blood_group)
    {
        $this->blood_group = $blood_group;

        return $this;
    }

    /**
     * Get the value of blood_group.
     *
     * @return string
     */
    public function getBloodGroup()
    {
        return $this->blood_group;
    }

    /**
     * Set the value of rh_factor.
     *
     * @param string $rh_factor
     * @return \Entity\CareTestRequestBlood
     */
    public function setRhFactor($rh_factor)
    {
        $this->rh_factor = $rh_factor;

        return $this;
    }

    /**
     * Get the value of rh_factor.
     *
     * @return string
     */
    public function getRhFactor()
    {
        return $this->rh_factor;
    }

    /**
     * Set the value of kell.
     *
     * @param string $kell
     * @return \Entity\CareTestRequestBlood
     */
    public function setKell($kell)
    {
        $this->kell = $kell;

        return $this;
    }

    /**
     * Get the value of kell.
     *
     * @return string
     */
    public function getKell()
    {
        return $this->kell;
    }

    /**
     * Set the value of date_protoc_nr.
     *
     * @param string $date_protoc_nr
     * @return \Entity\CareTestRequestBlood
     */
    public function setDateProtocNr($date_protoc_nr)
    {
        $this->date_protoc_nr = $date_protoc_nr;

        return $this;
    }

    /**
     * Get the value of date_protoc_nr.
     *
     * @return string
     */
    public function getDateProtocNr()
    {
        return $this->date_protoc_nr;
    }

    /**
     * Set the value of pure_blood.
     *
     * @param string $pure_blood
     * @return \Entity\CareTestRequestBlood
     */
    public function setPureBlood($pure_blood)
    {
        $this->pure_blood = $pure_blood;

        return $this;
    }

    /**
     * Get the value of pure_blood.
     *
     * @return string
     */
    public function getPureBlood()
    {
        return $this->pure_blood;
    }

    /**
     * Set the value of red_blood.
     *
     * @param string $red_blood
     * @return \Entity\CareTestRequestBlood
     */
    public function setRedBlood($red_blood)
    {
        $this->red_blood = $red_blood;

        return $this;
    }

    /**
     * Get the value of red_blood.
     *
     * @return string
     */
    public function getRedBlood()
    {
        return $this->red_blood;
    }

    /**
     * Set the value of leukoless_blood.
     *
     * @param string $leukoless_blood
     * @return \Entity\CareTestRequestBlood
     */
    public function setLeukolessBlood($leukoless_blood)
    {
        $this->leukoless_blood = $leukoless_blood;

        return $this;
    }

    /**
     * Get the value of leukoless_blood.
     *
     * @return string
     */
    public function getLeukolessBlood()
    {
        return $this->leukoless_blood;
    }

    /**
     * Set the value of washed_blood.
     *
     * @param string $washed_blood
     * @return \Entity\CareTestRequestBlood
     */
    public function setWashedBlood($washed_blood)
    {
        $this->washed_blood = $washed_blood;

        return $this;
    }

    /**
     * Get the value of washed_blood.
     *
     * @return string
     */
    public function getWashedBlood()
    {
        return $this->washed_blood;
    }

    /**
     * Set the value of prp_blood.
     *
     * @param string $prp_blood
     * @return \Entity\CareTestRequestBlood
     */
    public function setPrpBlood($prp_blood)
    {
        $this->prp_blood = $prp_blood;

        return $this;
    }

    /**
     * Get the value of prp_blood.
     *
     * @return string
     */
    public function getPrpBlood()
    {
        return $this->prp_blood;
    }

    /**
     * Set the value of thrombo_con.
     *
     * @param string $thrombo_con
     * @return \Entity\CareTestRequestBlood
     */
    public function setThromboCon($thrombo_con)
    {
        $this->thrombo_con = $thrombo_con;

        return $this;
    }

    /**
     * Get the value of thrombo_con.
     *
     * @return string
     */
    public function getThromboCon()
    {
        return $this->thrombo_con;
    }

    /**
     * Set the value of ffp_plasma.
     *
     * @param string $ffp_plasma
     * @return \Entity\CareTestRequestBlood
     */
    public function setFfpPlasma($ffp_plasma)
    {
        $this->ffp_plasma = $ffp_plasma;

        return $this;
    }

    /**
     * Get the value of ffp_plasma.
     *
     * @return string
     */
    public function getFfpPlasma()
    {
        return $this->ffp_plasma;
    }

    /**
     * Set the value of transfusion_dev.
     *
     * @param string $transfusion_dev
     * @return \Entity\CareTestRequestBlood
     */
    public function setTransfusionDev($transfusion_dev)
    {
        $this->transfusion_dev = $transfusion_dev;

        return $this;
    }

    /**
     * Get the value of transfusion_dev.
     *
     * @return string
     */
    public function getTransfusionDev()
    {
        return $this->transfusion_dev;
    }

    /**
     * Set the value of match_sample.
     *
     * @param integer $match_sample
     * @return \Entity\CareTestRequestBlood
     */
    public function setMatchSample($match_sample)
    {
        $this->match_sample = $match_sample;

        return $this;
    }

    /**
     * Get the value of match_sample.
     *
     * @return integer
     */
    public function getMatchSample()
    {
        return $this->match_sample;
    }

    /**
     * Set the value of transfusion_date.
     *
     * @param datetime $transfusion_date
     * @return \Entity\CareTestRequestBlood
     */
    public function setTransfusionDate($transfusion_date)
    {
        $this->transfusion_date = $transfusion_date;

        return $this;
    }

    /**
     * Get the value of transfusion_date.
     *
     * @return datetime
     */
    public function getTransfusionDate()
    {
        return $this->transfusion_date;
    }

    /**
     * Set the value of diagnosis.
     *
     * @param string $diagnosis
     * @return \Entity\CareTestRequestBlood
     */
    public function setDiagnosis($diagnosis)
    {
        $this->diagnosis = $diagnosis;

        return $this;
    }

    /**
     * Get the value of diagnosis.
     *
     * @return string
     */
    public function getDiagnosis()
    {
        return $this->diagnosis;
    }

    /**
     * Set the value of notes.
     *
     * @param string $notes
     * @return \Entity\CareTestRequestBlood
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;

        return $this;
    }

    /**
     * Get the value of notes.
     *
     * @return string
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Set the value of send_date.
     *
     * @param datetime $send_date
     * @return \Entity\CareTestRequestBlood
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
     * Set the value of doctor.
     *
     * @param string $doctor
     * @return \Entity\CareTestRequestBlood
     */
    public function setDoctor($doctor)
    {
        $this->doctor = $doctor;

        return $this;
    }

    /**
     * Get the value of doctor.
     *
     * @return string
     */
    public function getDoctor()
    {
        return $this->doctor;
    }

    /**
     * Set the value of phone_nr.
     *
     * @param string $phone_nr
     * @return \Entity\CareTestRequestBlood
     */
    public function setPhoneNr($phone_nr)
    {
        $this->phone_nr = $phone_nr;

        return $this;
    }

    /**
     * Get the value of phone_nr.
     *
     * @return string
     */
    public function getPhoneNr()
    {
        return $this->phone_nr;
    }

    /**
     * Set the value of status.
     *
     * @param string $status
     * @return \Entity\CareTestRequestBlood
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
     * Set the value of blood_pb.
     *
     * @param string $blood_pb
     * @return \Entity\CareTestRequestBlood
     */
    public function setBloodPb($blood_pb)
    {
        $this->blood_pb = $blood_pb;

        return $this;
    }

    /**
     * Get the value of blood_pb.
     *
     * @return string
     */
    public function getBloodPb()
    {
        return $this->blood_pb;
    }

    /**
     * Set the value of blood_rb.
     *
     * @param string $blood_rb
     * @return \Entity\CareTestRequestBlood
     */
    public function setBloodRb($blood_rb)
    {
        $this->blood_rb = $blood_rb;

        return $this;
    }

    /**
     * Get the value of blood_rb.
     *
     * @return string
     */
    public function getBloodRb()
    {
        return $this->blood_rb;
    }

    /**
     * Set the value of blood_llrb.
     *
     * @param string $blood_llrb
     * @return \Entity\CareTestRequestBlood
     */
    public function setBloodLlrb($blood_llrb)
    {
        $this->blood_llrb = $blood_llrb;

        return $this;
    }

    /**
     * Get the value of blood_llrb.
     *
     * @return string
     */
    public function getBloodLlrb()
    {
        return $this->blood_llrb;
    }

    /**
     * Set the value of blood_wrb.
     *
     * @param string $blood_wrb
     * @return \Entity\CareTestRequestBlood
     */
    public function setBloodWrb($blood_wrb)
    {
        $this->blood_wrb = $blood_wrb;

        return $this;
    }

    /**
     * Get the value of blood_wrb.
     *
     * @return string
     */
    public function getBloodWrb()
    {
        return $this->blood_wrb;
    }

    /**
     * Set the value of blood_prp.
     *
     * @param string $blood_prp
     * @return \Entity\CareTestRequestBlood
     */
    public function setBloodPrp($blood_prp)
    {
        $this->blood_prp = $blood_prp;

        return $this;
    }

    /**
     * Get the value of blood_prp.
     *
     * @return string
     */
    public function getBloodPrp()
    {
        return $this->blood_prp;
    }

    /**
     * Set the value of blood_tc.
     *
     * @param string $blood_tc
     * @return \Entity\CareTestRequestBlood
     */
    public function setBloodTc($blood_tc)
    {
        $this->blood_tc = $blood_tc;

        return $this;
    }

    /**
     * Get the value of blood_tc.
     *
     * @return string
     */
    public function getBloodTc()
    {
        return $this->blood_tc;
    }

    /**
     * Set the value of blood_ffp.
     *
     * @param string $blood_ffp
     * @return \Entity\CareTestRequestBlood
     */
    public function setBloodFfp($blood_ffp)
    {
        $this->blood_ffp = $blood_ffp;

        return $this;
    }

    /**
     * Get the value of blood_ffp.
     *
     * @return string
     */
    public function getBloodFfp()
    {
        return $this->blood_ffp;
    }

    /**
     * Set the value of b_group_count.
     *
     * @param integer $b_group_count
     * @return \Entity\CareTestRequestBlood
     */
    public function setBGroupCount($b_group_count)
    {
        $this->b_group_count = $b_group_count;

        return $this;
    }

    /**
     * Get the value of b_group_count.
     *
     * @return integer
     */
    public function getBGroupCount()
    {
        return $this->b_group_count;
    }

    /**
     * Set the value of b_group_price.
     *
     * @param float $b_group_price
     * @return \Entity\CareTestRequestBlood
     */
    public function setBGroupPrice($b_group_price)
    {
        $this->b_group_price = $b_group_price;

        return $this;
    }

    /**
     * Get the value of b_group_price.
     *
     * @return float
     */
    public function getBGroupPrice()
    {
        return $this->b_group_price;
    }

    /**
     * Set the value of a_subgroup_count.
     *
     * @param integer $a_subgroup_count
     * @return \Entity\CareTestRequestBlood
     */
    public function setASubgroupCount($a_subgroup_count)
    {
        $this->a_subgroup_count = $a_subgroup_count;

        return $this;
    }

    /**
     * Get the value of a_subgroup_count.
     *
     * @return integer
     */
    public function getASubgroupCount()
    {
        return $this->a_subgroup_count;
    }

    /**
     * Set the value of a_subgroup_price.
     *
     * @param float $a_subgroup_price
     * @return \Entity\CareTestRequestBlood
     */
    public function setASubgroupPrice($a_subgroup_price)
    {
        $this->a_subgroup_price = $a_subgroup_price;

        return $this;
    }

    /**
     * Get the value of a_subgroup_price.
     *
     * @return float
     */
    public function getASubgroupPrice()
    {
        return $this->a_subgroup_price;
    }

    /**
     * Set the value of extra_factors_count.
     *
     * @param integer $extra_factors_count
     * @return \Entity\CareTestRequestBlood
     */
    public function setExtraFactorsCount($extra_factors_count)
    {
        $this->extra_factors_count = $extra_factors_count;

        return $this;
    }

    /**
     * Get the value of extra_factors_count.
     *
     * @return integer
     */
    public function getExtraFactorsCount()
    {
        return $this->extra_factors_count;
    }

    /**
     * Set the value of extra_factors_price.
     *
     * @param float $extra_factors_price
     * @return \Entity\CareTestRequestBlood
     */
    public function setExtraFactorsPrice($extra_factors_price)
    {
        $this->extra_factors_price = $extra_factors_price;

        return $this;
    }

    /**
     * Get the value of extra_factors_price.
     *
     * @return float
     */
    public function getExtraFactorsPrice()
    {
        return $this->extra_factors_price;
    }

    /**
     * Set the value of coombs_count.
     *
     * @param integer $coombs_count
     * @return \Entity\CareTestRequestBlood
     */
    public function setCoombsCount($coombs_count)
    {
        $this->coombs_count = $coombs_count;

        return $this;
    }

    /**
     * Get the value of coombs_count.
     *
     * @return integer
     */
    public function getCoombsCount()
    {
        return $this->coombs_count;
    }

    /**
     * Set the value of coombs_price.
     *
     * @param float $coombs_price
     * @return \Entity\CareTestRequestBlood
     */
    public function setCoombsPrice($coombs_price)
    {
        $this->coombs_price = $coombs_price;

        return $this;
    }

    /**
     * Get the value of coombs_price.
     *
     * @return float
     */
    public function getCoombsPrice()
    {
        return $this->coombs_price;
    }

    /**
     * Set the value of ab_test_count.
     *
     * @param integer $ab_test_count
     * @return \Entity\CareTestRequestBlood
     */
    public function setAbTestCount($ab_test_count)
    {
        $this->ab_test_count = $ab_test_count;

        return $this;
    }

    /**
     * Get the value of ab_test_count.
     *
     * @return integer
     */
    public function getAbTestCount()
    {
        return $this->ab_test_count;
    }

    /**
     * Set the value of ab_test_price.
     *
     * @param float $ab_test_price
     * @return \Entity\CareTestRequestBlood
     */
    public function setAbTestPrice($ab_test_price)
    {
        $this->ab_test_price = $ab_test_price;

        return $this;
    }

    /**
     * Get the value of ab_test_price.
     *
     * @return float
     */
    public function getAbTestPrice()
    {
        return $this->ab_test_price;
    }

    /**
     * Set the value of crosstest_count.
     *
     * @param integer $crosstest_count
     * @return \Entity\CareTestRequestBlood
     */
    public function setCrosstestCount($crosstest_count)
    {
        $this->crosstest_count = $crosstest_count;

        return $this;
    }

    /**
     * Get the value of crosstest_count.
     *
     * @return integer
     */
    public function getCrosstestCount()
    {
        return $this->crosstest_count;
    }

    /**
     * Set the value of crosstest_price.
     *
     * @param float $crosstest_price
     * @return \Entity\CareTestRequestBlood
     */
    public function setCrosstestPrice($crosstest_price)
    {
        $this->crosstest_price = $crosstest_price;

        return $this;
    }

    /**
     * Get the value of crosstest_price.
     *
     * @return float
     */
    public function getCrosstestPrice()
    {
        return $this->crosstest_price;
    }

    /**
     * Set the value of ab_diff_count.
     *
     * @param integer $ab_diff_count
     * @return \Entity\CareTestRequestBlood
     */
    public function setAbDiffCount($ab_diff_count)
    {
        $this->ab_diff_count = $ab_diff_count;

        return $this;
    }

    /**
     * Get the value of ab_diff_count.
     *
     * @return integer
     */
    public function getAbDiffCount()
    {
        return $this->ab_diff_count;
    }

    /**
     * Set the value of ab_diff_price.
     *
     * @param float $ab_diff_price
     * @return \Entity\CareTestRequestBlood
     */
    public function setAbDiffPrice($ab_diff_price)
    {
        $this->ab_diff_price = $ab_diff_price;

        return $this;
    }

    /**
     * Get the value of ab_diff_price.
     *
     * @return float
     */
    public function getAbDiffPrice()
    {
        return $this->ab_diff_price;
    }

    /**
     * Set the value of x_test_1_code.
     *
     * @param integer $x_test_1_code
     * @return \Entity\CareTestRequestBlood
     */
    public function setXTest1Code($x_test_1_code)
    {
        $this->x_test_1_code = $x_test_1_code;

        return $this;
    }

    /**
     * Get the value of x_test_1_code.
     *
     * @return integer
     */
    public function getXTest1Code()
    {
        return $this->x_test_1_code;
    }

    /**
     * Set the value of x_test_1_name.
     *
     * @param string $x_test_1_name
     * @return \Entity\CareTestRequestBlood
     */
    public function setXTest1Name($x_test_1_name)
    {
        $this->x_test_1_name = $x_test_1_name;

        return $this;
    }

    /**
     * Get the value of x_test_1_name.
     *
     * @return string
     */
    public function getXTest1Name()
    {
        return $this->x_test_1_name;
    }

    /**
     * Set the value of x_test_1_count.
     *
     * @param integer $x_test_1_count
     * @return \Entity\CareTestRequestBlood
     */
    public function setXTest1Count($x_test_1_count)
    {
        $this->x_test_1_count = $x_test_1_count;

        return $this;
    }

    /**
     * Get the value of x_test_1_count.
     *
     * @return integer
     */
    public function getXTest1Count()
    {
        return $this->x_test_1_count;
    }

    /**
     * Set the value of x_test_1_price.
     *
     * @param float $x_test_1_price
     * @return \Entity\CareTestRequestBlood
     */
    public function setXTest1Price($x_test_1_price)
    {
        $this->x_test_1_price = $x_test_1_price;

        return $this;
    }

    /**
     * Get the value of x_test_1_price.
     *
     * @return float
     */
    public function getXTest1Price()
    {
        return $this->x_test_1_price;
    }

    /**
     * Set the value of x_test_2_code.
     *
     * @param integer $x_test_2_code
     * @return \Entity\CareTestRequestBlood
     */
    public function setXTest2Code($x_test_2_code)
    {
        $this->x_test_2_code = $x_test_2_code;

        return $this;
    }

    /**
     * Get the value of x_test_2_code.
     *
     * @return integer
     */
    public function getXTest2Code()
    {
        return $this->x_test_2_code;
    }

    /**
     * Set the value of x_test_2_name.
     *
     * @param string $x_test_2_name
     * @return \Entity\CareTestRequestBlood
     */
    public function setXTest2Name($x_test_2_name)
    {
        $this->x_test_2_name = $x_test_2_name;

        return $this;
    }

    /**
     * Get the value of x_test_2_name.
     *
     * @return string
     */
    public function getXTest2Name()
    {
        return $this->x_test_2_name;
    }

    /**
     * Set the value of x_test_2_count.
     *
     * @param integer $x_test_2_count
     * @return \Entity\CareTestRequestBlood
     */
    public function setXTest2Count($x_test_2_count)
    {
        $this->x_test_2_count = $x_test_2_count;

        return $this;
    }

    /**
     * Get the value of x_test_2_count.
     *
     * @return integer
     */
    public function getXTest2Count()
    {
        return $this->x_test_2_count;
    }

    /**
     * Set the value of x_test_2_price.
     *
     * @param float $x_test_2_price
     * @return \Entity\CareTestRequestBlood
     */
    public function setXTest2Price($x_test_2_price)
    {
        $this->x_test_2_price = $x_test_2_price;

        return $this;
    }

    /**
     * Get the value of x_test_2_price.
     *
     * @return float
     */
    public function getXTest2Price()
    {
        return $this->x_test_2_price;
    }

    /**
     * Set the value of x_test_3_code.
     *
     * @param integer $x_test_3_code
     * @return \Entity\CareTestRequestBlood
     */
    public function setXTest3Code($x_test_3_code)
    {
        $this->x_test_3_code = $x_test_3_code;

        return $this;
    }

    /**
     * Get the value of x_test_3_code.
     *
     * @return integer
     */
    public function getXTest3Code()
    {
        return $this->x_test_3_code;
    }

    /**
     * Set the value of x_test_3_name.
     *
     * @param string $x_test_3_name
     * @return \Entity\CareTestRequestBlood
     */
    public function setXTest3Name($x_test_3_name)
    {
        $this->x_test_3_name = $x_test_3_name;

        return $this;
    }

    /**
     * Get the value of x_test_3_name.
     *
     * @return string
     */
    public function getXTest3Name()
    {
        return $this->x_test_3_name;
    }

    /**
     * Set the value of x_test_3_count.
     *
     * @param integer $x_test_3_count
     * @return \Entity\CareTestRequestBlood
     */
    public function setXTest3Count($x_test_3_count)
    {
        $this->x_test_3_count = $x_test_3_count;

        return $this;
    }

    /**
     * Get the value of x_test_3_count.
     *
     * @return integer
     */
    public function getXTest3Count()
    {
        return $this->x_test_3_count;
    }

    /**
     * Set the value of x_test_3_price.
     *
     * @param float $x_test_3_price
     * @return \Entity\CareTestRequestBlood
     */
    public function setXTest3Price($x_test_3_price)
    {
        $this->x_test_3_price = $x_test_3_price;

        return $this;
    }

    /**
     * Get the value of x_test_3_price.
     *
     * @return float
     */
    public function getXTest3Price()
    {
        return $this->x_test_3_price;
    }

    /**
     * Set the value of lab_stamp.
     *
     * @param datetime $lab_stamp
     * @return \Entity\CareTestRequestBlood
     */
    public function setLabStamp($lab_stamp)
    {
        $this->lab_stamp = $lab_stamp;

        return $this;
    }

    /**
     * Get the value of lab_stamp.
     *
     * @return datetime
     */
    public function getLabStamp()
    {
        return $this->lab_stamp;
    }

    /**
     * Set the value of release_via.
     *
     * @param string $release_via
     * @return \Entity\CareTestRequestBlood
     */
    public function setReleaseVia($release_via)
    {
        $this->release_via = $release_via;

        return $this;
    }

    /**
     * Get the value of release_via.
     *
     * @return string
     */
    public function getReleaseVia()
    {
        return $this->release_via;
    }

    /**
     * Set the value of receipt_ack.
     *
     * @param string $receipt_ack
     * @return \Entity\CareTestRequestBlood
     */
    public function setReceiptAck($receipt_ack)
    {
        $this->receipt_ack = $receipt_ack;

        return $this;
    }

    /**
     * Get the value of receipt_ack.
     *
     * @return string
     */
    public function getReceiptAck()
    {
        return $this->receipt_ack;
    }

    /**
     * Set the value of mainlog_nr.
     *
     * @param string $mainlog_nr
     * @return \Entity\CareTestRequestBlood
     */
    public function setMainlogNr($mainlog_nr)
    {
        $this->mainlog_nr = $mainlog_nr;

        return $this;
    }

    /**
     * Get the value of mainlog_nr.
     *
     * @return string
     */
    public function getMainlogNr()
    {
        return $this->mainlog_nr;
    }

    /**
     * Set the value of lab_nr.
     *
     * @param string $lab_nr
     * @return \Entity\CareTestRequestBlood
     */
    public function setLabNr($lab_nr)
    {
        $this->lab_nr = $lab_nr;

        return $this;
    }

    /**
     * Get the value of lab_nr.
     *
     * @return string
     */
    public function getLabNr()
    {
        return $this->lab_nr;
    }

    /**
     * Set the value of mainlog_date.
     *
     * @param datetime $mainlog_date
     * @return \Entity\CareTestRequestBlood
     */
    public function setMainlogDate($mainlog_date)
    {
        $this->mainlog_date = $mainlog_date;

        return $this;
    }

    /**
     * Get the value of mainlog_date.
     *
     * @return datetime
     */
    public function getMainlogDate()
    {
        return $this->mainlog_date;
    }

    /**
     * Set the value of lab_date.
     *
     * @param datetime $lab_date
     * @return \Entity\CareTestRequestBlood
     */
    public function setLabDate($lab_date)
    {
        $this->lab_date = $lab_date;

        return $this;
    }

    /**
     * Get the value of lab_date.
     *
     * @return datetime
     */
    public function getLabDate()
    {
        return $this->lab_date;
    }

    /**
     * Set the value of mainlog_sign.
     *
     * @param string $mainlog_sign
     * @return \Entity\CareTestRequestBlood
     */
    public function setMainlogSign($mainlog_sign)
    {
        $this->mainlog_sign = $mainlog_sign;

        return $this;
    }

    /**
     * Get the value of mainlog_sign.
     *
     * @return string
     */
    public function getMainlogSign()
    {
        return $this->mainlog_sign;
    }

    /**
     * Set the value of lab_sign.
     *
     * @param string $lab_sign
     * @return \Entity\CareTestRequestBlood
     */
    public function setLabSign($lab_sign)
    {
        $this->lab_sign = $lab_sign;

        return $this;
    }

    /**
     * Get the value of lab_sign.
     *
     * @return string
     */
    public function getLabSign()
    {
        return $this->lab_sign;
    }

    /**
     * Set the value of history.
     *
     * @param string $history
     * @return \Entity\CareTestRequestBlood
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
     * @return \Entity\CareTestRequestBlood
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
     * @return \Entity\CareTestRequestBlood
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
     * @return \Entity\CareTestRequestBlood
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
     * @return \Entity\CareTestRequestBlood
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
        return array('batch_nr', 'encounter_nr', 'dept_nr', 'blood_group', 'rh_factor', 'kell', 'date_protoc_nr', 'pure_blood', 'red_blood', 'leukoless_blood', 'washed_blood', 'prp_blood', 'thrombo_con', 'ffp_plasma', 'transfusion_dev', 'match_sample', 'transfusion_date', 'diagnosis', 'notes', 'send_date', 'doctor', 'phone_nr', 'status', 'blood_pb', 'blood_rb', 'blood_llrb', 'blood_wrb', 'blood_prp', 'blood_tc', 'blood_ffp', 'b_group_count', 'b_group_price', 'a_subgroup_count', 'a_subgroup_price', 'extra_factors_count', 'extra_factors_price', 'coombs_count', 'coombs_price', 'ab_test_count', 'ab_test_price', 'crosstest_count', 'crosstest_price', 'ab_diff_count', 'ab_diff_price', 'x_test_1_code', 'x_test_1_name', 'x_test_1_count', 'x_test_1_price', 'x_test_2_code', 'x_test_2_name', 'x_test_2_count', 'x_test_2_price', 'x_test_3_code', 'x_test_3_name', 'x_test_3_count', 'x_test_3_price', 'lab_stamp', 'release_via', 'receipt_ack', 'mainlog_nr', 'lab_nr', 'mainlog_date', 'lab_date', 'mainlog_sign', 'lab_sign', 'history', 'modify_id', 'modify_time', 'create_id', 'create_time');
    }
}