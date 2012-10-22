<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\CareEncounterOp
 *
 * InnoDB free: 10240 kB
 *
 * @ORM\Entity(repositoryClass="CareEncounterOpRepository")
 * @ORM\Table(name="care_encounter_op", indexes={@ORM\Index(name="dept", columns={"dept_nr"}), @ORM\Index(name="op_room", columns={"op_room"}), @ORM\Index(name="op_date", columns={"op_date"})})
 */
class CareEncounterOp
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $nr;

    /**
     * @ORM\Column(type="string", length=4)
     */
    protected $year;

    /**
     * @ORM\Column(type="smallint")
     */
    protected $dept_nr;

    /**
     * @ORM\Column(type="string", length=10)
     */
    protected $op_room;

    /**
     * @ORM\Column(type="integer")
     */
    protected $op_nr;

    /**
     * @ORM\Column(type="date")
     */
    protected $op_date;

    /**
     * @ORM\Column(type="string", length=8)
     */
    protected $op_src_date;

    /**
     * @ORM\Column(type="integer")
     */
    protected $encounter_nr;

    /**
     * @ORM\Column(type="text")
     */
    protected $diagnosis;

    /**
     * @ORM\Column(type="text")
     */
    protected $operator;

    /**
     * @ORM\Column(type="text")
     */
    protected $assistant;

    /**
     * @ORM\Column(type="text")
     */
    protected $scrub_nurse;

    /**
     * @ORM\Column(type="text")
     */
    protected $rotating_nurse;

    /**
     * @ORM\Column(type="string", length=30)
     */
    protected $anesthesia;

    /**
     * @ORM\Column(type="text")
     */
    protected $an_doctor;

    /**
     * @ORM\Column(type="text")
     */
    protected $op_therapy;

    /**
     * @ORM\Column(type="text")
     */
    protected $result_info;

    /**
     * @ORM\Column(type="string", length=5)
     */
    protected $entry_time;

    /**
     * @ORM\Column(type="string", length=5)
     */
    protected $cut_time;

    /**
     * @ORM\Column(type="string", length=5)
     */
    protected $close_time;

    /**
     * @ORM\Column(type="string", length=5)
     */
    protected $exit_time;

    /**
     * @ORM\Column(type="text")
     */
    protected $entry_out;

    /**
     * @ORM\Column(type="text")
     */
    protected $cut_close;

    /**
     * @ORM\Column(type="text")
     */
    protected $wait_time;

    /**
     * @ORM\Column(type="text")
     */
    protected $bandage_time;

    /**
     * @ORM\Column(type="text")
     */
    protected $repos_time;

    /**
     * @ORM\Column(type="text")
     */
    protected $encoding;

    /**
     * @ORM\Column(type="string", length=10)
     */
    protected $doc_date;

    /**
     * @ORM\Column(type="string", length=5)
     */
    protected $doc_time;

    /**
     * @ORM\Column(type="string", length=15)
     */
    protected $duty_type;

    /**
     * @ORM\Column(type="text")
     */
    protected $material_codedlist;

    /**
     * @ORM\Column(type="text")
     */
    protected $container_codedlist;

    /**
     * @ORM\Column(type="text")
     */
    protected $icd_code;

    /**
     * @ORM\Column(type="text")
     */
    protected $ops_code;

    /**
     * @ORM\Column(type="text")
     */
    protected $ops_intern_code;

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
     * @return \Entity\CareEncounterOp
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
     * Set the value of year.
     *
     * @param string $year
     * @return \Entity\CareEncounterOp
     */
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Get the value of year.
     *
     * @return string
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set the value of dept_nr.
     *
     * @param integer $dept_nr
     * @return \Entity\CareEncounterOp
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
     * Set the value of op_room.
     *
     * @param string $op_room
     * @return \Entity\CareEncounterOp
     */
    public function setOpRoom($op_room)
    {
        $this->op_room = $op_room;

        return $this;
    }

    /**
     * Get the value of op_room.
     *
     * @return string
     */
    public function getOpRoom()
    {
        return $this->op_room;
    }

    /**
     * Set the value of op_nr.
     *
     * @param integer $op_nr
     * @return \Entity\CareEncounterOp
     */
    public function setOpNr($op_nr)
    {
        $this->op_nr = $op_nr;

        return $this;
    }

    /**
     * Get the value of op_nr.
     *
     * @return integer
     */
    public function getOpNr()
    {
        return $this->op_nr;
    }

    /**
     * Set the value of op_date.
     *
     * @param datetime $op_date
     * @return \Entity\CareEncounterOp
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
     * Set the value of op_src_date.
     *
     * @param string $op_src_date
     * @return \Entity\CareEncounterOp
     */
    public function setOpSrcDate($op_src_date)
    {
        $this->op_src_date = $op_src_date;

        return $this;
    }

    /**
     * Get the value of op_src_date.
     *
     * @return string
     */
    public function getOpSrcDate()
    {
        return $this->op_src_date;
    }

    /**
     * Set the value of encounter_nr.
     *
     * @param integer $encounter_nr
     * @return \Entity\CareEncounterOp
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
     * Set the value of diagnosis.
     *
     * @param string $diagnosis
     * @return \Entity\CareEncounterOp
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
     * Set the value of operator.
     *
     * @param string $operator
     * @return \Entity\CareEncounterOp
     */
    public function setOperator($operator)
    {
        $this->operator = $operator;

        return $this;
    }

    /**
     * Get the value of operator.
     *
     * @return string
     */
    public function getOperator()
    {
        return $this->operator;
    }

    /**
     * Set the value of assistant.
     *
     * @param string $assistant
     * @return \Entity\CareEncounterOp
     */
    public function setAssistant($assistant)
    {
        $this->assistant = $assistant;

        return $this;
    }

    /**
     * Get the value of assistant.
     *
     * @return string
     */
    public function getAssistant()
    {
        return $this->assistant;
    }

    /**
     * Set the value of scrub_nurse.
     *
     * @param string $scrub_nurse
     * @return \Entity\CareEncounterOp
     */
    public function setScrubNurse($scrub_nurse)
    {
        $this->scrub_nurse = $scrub_nurse;

        return $this;
    }

    /**
     * Get the value of scrub_nurse.
     *
     * @return string
     */
    public function getScrubNurse()
    {
        return $this->scrub_nurse;
    }

    /**
     * Set the value of rotating_nurse.
     *
     * @param string $rotating_nurse
     * @return \Entity\CareEncounterOp
     */
    public function setRotatingNurse($rotating_nurse)
    {
        $this->rotating_nurse = $rotating_nurse;

        return $this;
    }

    /**
     * Get the value of rotating_nurse.
     *
     * @return string
     */
    public function getRotatingNurse()
    {
        return $this->rotating_nurse;
    }

    /**
     * Set the value of anesthesia.
     *
     * @param string $anesthesia
     * @return \Entity\CareEncounterOp
     */
    public function setAnesthesia($anesthesia)
    {
        $this->anesthesia = $anesthesia;

        return $this;
    }

    /**
     * Get the value of anesthesia.
     *
     * @return string
     */
    public function getAnesthesia()
    {
        return $this->anesthesia;
    }

    /**
     * Set the value of an_doctor.
     *
     * @param string $an_doctor
     * @return \Entity\CareEncounterOp
     */
    public function setAnDoctor($an_doctor)
    {
        $this->an_doctor = $an_doctor;

        return $this;
    }

    /**
     * Get the value of an_doctor.
     *
     * @return string
     */
    public function getAnDoctor()
    {
        return $this->an_doctor;
    }

    /**
     * Set the value of op_therapy.
     *
     * @param string $op_therapy
     * @return \Entity\CareEncounterOp
     */
    public function setOpTherapy($op_therapy)
    {
        $this->op_therapy = $op_therapy;

        return $this;
    }

    /**
     * Get the value of op_therapy.
     *
     * @return string
     */
    public function getOpTherapy()
    {
        return $this->op_therapy;
    }

    /**
     * Set the value of result_info.
     *
     * @param string $result_info
     * @return \Entity\CareEncounterOp
     */
    public function setResultInfo($result_info)
    {
        $this->result_info = $result_info;

        return $this;
    }

    /**
     * Get the value of result_info.
     *
     * @return string
     */
    public function getResultInfo()
    {
        return $this->result_info;
    }

    /**
     * Set the value of entry_time.
     *
     * @param string $entry_time
     * @return \Entity\CareEncounterOp
     */
    public function setEntryTime($entry_time)
    {
        $this->entry_time = $entry_time;

        return $this;
    }

    /**
     * Get the value of entry_time.
     *
     * @return string
     */
    public function getEntryTime()
    {
        return $this->entry_time;
    }

    /**
     * Set the value of cut_time.
     *
     * @param string $cut_time
     * @return \Entity\CareEncounterOp
     */
    public function setCutTime($cut_time)
    {
        $this->cut_time = $cut_time;

        return $this;
    }

    /**
     * Get the value of cut_time.
     *
     * @return string
     */
    public function getCutTime()
    {
        return $this->cut_time;
    }

    /**
     * Set the value of close_time.
     *
     * @param string $close_time
     * @return \Entity\CareEncounterOp
     */
    public function setCloseTime($close_time)
    {
        $this->close_time = $close_time;

        return $this;
    }

    /**
     * Get the value of close_time.
     *
     * @return string
     */
    public function getCloseTime()
    {
        return $this->close_time;
    }

    /**
     * Set the value of exit_time.
     *
     * @param string $exit_time
     * @return \Entity\CareEncounterOp
     */
    public function setExitTime($exit_time)
    {
        $this->exit_time = $exit_time;

        return $this;
    }

    /**
     * Get the value of exit_time.
     *
     * @return string
     */
    public function getExitTime()
    {
        return $this->exit_time;
    }

    /**
     * Set the value of entry_out.
     *
     * @param string $entry_out
     * @return \Entity\CareEncounterOp
     */
    public function setEntryOut($entry_out)
    {
        $this->entry_out = $entry_out;

        return $this;
    }

    /**
     * Get the value of entry_out.
     *
     * @return string
     */
    public function getEntryOut()
    {
        return $this->entry_out;
    }

    /**
     * Set the value of cut_close.
     *
     * @param string $cut_close
     * @return \Entity\CareEncounterOp
     */
    public function setCutClose($cut_close)
    {
        $this->cut_close = $cut_close;

        return $this;
    }

    /**
     * Get the value of cut_close.
     *
     * @return string
     */
    public function getCutClose()
    {
        return $this->cut_close;
    }

    /**
     * Set the value of wait_time.
     *
     * @param string $wait_time
     * @return \Entity\CareEncounterOp
     */
    public function setWaitTime($wait_time)
    {
        $this->wait_time = $wait_time;

        return $this;
    }

    /**
     * Get the value of wait_time.
     *
     * @return string
     */
    public function getWaitTime()
    {
        return $this->wait_time;
    }

    /**
     * Set the value of bandage_time.
     *
     * @param string $bandage_time
     * @return \Entity\CareEncounterOp
     */
    public function setBandageTime($bandage_time)
    {
        $this->bandage_time = $bandage_time;

        return $this;
    }

    /**
     * Get the value of bandage_time.
     *
     * @return string
     */
    public function getBandageTime()
    {
        return $this->bandage_time;
    }

    /**
     * Set the value of repos_time.
     *
     * @param string $repos_time
     * @return \Entity\CareEncounterOp
     */
    public function setReposTime($repos_time)
    {
        $this->repos_time = $repos_time;

        return $this;
    }

    /**
     * Get the value of repos_time.
     *
     * @return string
     */
    public function getReposTime()
    {
        return $this->repos_time;
    }

    /**
     * Set the value of encoding.
     *
     * @param string $encoding
     * @return \Entity\CareEncounterOp
     */
    public function setEncoding($encoding)
    {
        $this->encoding = $encoding;

        return $this;
    }

    /**
     * Get the value of encoding.
     *
     * @return string
     */
    public function getEncoding()
    {
        return $this->encoding;
    }

    /**
     * Set the value of doc_date.
     *
     * @param string $doc_date
     * @return \Entity\CareEncounterOp
     */
    public function setDocDate($doc_date)
    {
        $this->doc_date = $doc_date;

        return $this;
    }

    /**
     * Get the value of doc_date.
     *
     * @return string
     */
    public function getDocDate()
    {
        return $this->doc_date;
    }

    /**
     * Set the value of doc_time.
     *
     * @param string $doc_time
     * @return \Entity\CareEncounterOp
     */
    public function setDocTime($doc_time)
    {
        $this->doc_time = $doc_time;

        return $this;
    }

    /**
     * Get the value of doc_time.
     *
     * @return string
     */
    public function getDocTime()
    {
        return $this->doc_time;
    }

    /**
     * Set the value of duty_type.
     *
     * @param string $duty_type
     * @return \Entity\CareEncounterOp
     */
    public function setDutyType($duty_type)
    {
        $this->duty_type = $duty_type;

        return $this;
    }

    /**
     * Get the value of duty_type.
     *
     * @return string
     */
    public function getDutyType()
    {
        return $this->duty_type;
    }

    /**
     * Set the value of material_codedlist.
     *
     * @param string $material_codedlist
     * @return \Entity\CareEncounterOp
     */
    public function setMaterialCodedlist($material_codedlist)
    {
        $this->material_codedlist = $material_codedlist;

        return $this;
    }

    /**
     * Get the value of material_codedlist.
     *
     * @return string
     */
    public function getMaterialCodedlist()
    {
        return $this->material_codedlist;
    }

    /**
     * Set the value of container_codedlist.
     *
     * @param string $container_codedlist
     * @return \Entity\CareEncounterOp
     */
    public function setContainerCodedlist($container_codedlist)
    {
        $this->container_codedlist = $container_codedlist;

        return $this;
    }

    /**
     * Get the value of container_codedlist.
     *
     * @return string
     */
    public function getContainerCodedlist()
    {
        return $this->container_codedlist;
    }

    /**
     * Set the value of icd_code.
     *
     * @param string $icd_code
     * @return \Entity\CareEncounterOp
     */
    public function setIcdCode($icd_code)
    {
        $this->icd_code = $icd_code;

        return $this;
    }

    /**
     * Get the value of icd_code.
     *
     * @return string
     */
    public function getIcdCode()
    {
        return $this->icd_code;
    }

    /**
     * Set the value of ops_code.
     *
     * @param string $ops_code
     * @return \Entity\CareEncounterOp
     */
    public function setOpsCode($ops_code)
    {
        $this->ops_code = $ops_code;

        return $this;
    }

    /**
     * Get the value of ops_code.
     *
     * @return string
     */
    public function getOpsCode()
    {
        return $this->ops_code;
    }

    /**
     * Set the value of ops_intern_code.
     *
     * @param string $ops_intern_code
     * @return \Entity\CareEncounterOp
     */
    public function setOpsInternCode($ops_intern_code)
    {
        $this->ops_intern_code = $ops_intern_code;

        return $this;
    }

    /**
     * Get the value of ops_intern_code.
     *
     * @return string
     */
    public function getOpsInternCode()
    {
        return $this->ops_intern_code;
    }

    /**
     * Set the value of status.
     *
     * @param string $status
     * @return \Entity\CareEncounterOp
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
     * @return \Entity\CareEncounterOp
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
     * @return \Entity\CareEncounterOp
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
     * @return \Entity\CareEncounterOp
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
     * @return \Entity\CareEncounterOp
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
     * @return \Entity\CareEncounterOp
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
        return array('nr', 'year', 'dept_nr', 'op_room', 'op_nr', 'op_date', 'op_src_date', 'encounter_nr', 'diagnosis', 'operator', 'assistant', 'scrub_nurse', 'rotating_nurse', 'anesthesia', 'an_doctor', 'op_therapy', 'result_info', 'entry_time', 'cut_time', 'close_time', 'exit_time', 'entry_out', 'cut_close', 'wait_time', 'bandage_time', 'repos_time', 'encoding', 'doc_date', 'doc_time', 'duty_type', 'material_codedlist', 'container_codedlist', 'icd_code', 'ops_code', 'ops_intern_code', 'status', 'history', 'modify_id', 'modify_time', 'create_id', 'create_time');
    }
}