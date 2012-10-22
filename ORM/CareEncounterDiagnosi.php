<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\CareEncounterDiagnosi
 *
 * InnoDB free: 10240 kB
 *
 * @ORM\Entity(repositoryClass="CareEncounterDiagnosiRepository")
 * @ORM\Table(name="care_encounter_diagnosis", indexes={@ORM\Index(name="encounter_nr", columns={"encounter_nr"})})
 */
class CareEncounterDiagnosi
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $diagnosis_nr;

    /**
     * @ORM\Column(type="integer")
     */
    protected $encounter_nr;

    /**
     * @ORM\Column(type="integer")
     */
    protected $op_nr;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $date;

    /**
     * @ORM\Column(type="string", length=25)
     */
    protected $code;

    /**
     * @ORM\Column(type="string", length=25)
     */
    protected $code_parent;

    /**
     * @ORM\Column(type="integer")
     */
    protected $group_nr;

    /**
     * @ORM\Column(type="integer")
     */
    protected $code_version;

    /**
     * @ORM\Column(type="string", length=35)
     */
    protected $localcode;

    /**
     * @ORM\Column(type="integer")
     */
    protected $category_nr;

    /**
     * @ORM\Column(type="string", length=35)
     */
    protected $type;

    /**
     * @ORM\Column(type="string", length=35)
     */
    protected $localization;

    /**
     * @ORM\Column(type="string", length=60)
     */
    protected $diagnosing_clinician;

    /**
     * @ORM\Column(type="smallint")
     */
    protected $diagnosing_dept_nr;

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
     * Set the value of diagnosis_nr.
     *
     * @param integer $diagnosis_nr
     * @return \Entity\CareEncounterDiagnosi
     */
    public function setDiagnosisNr($diagnosis_nr)
    {
        $this->diagnosis_nr = $diagnosis_nr;

        return $this;
    }

    /**
     * Get the value of diagnosis_nr.
     *
     * @return integer
     */
    public function getDiagnosisNr()
    {
        return $this->diagnosis_nr;
    }

    /**
     * Set the value of encounter_nr.
     *
     * @param integer $encounter_nr
     * @return \Entity\CareEncounterDiagnosi
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
     * Set the value of op_nr.
     *
     * @param integer $op_nr
     * @return \Entity\CareEncounterDiagnosi
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
     * Set the value of date.
     *
     * @param datetime $date
     * @return \Entity\CareEncounterDiagnosi
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get the value of date.
     *
     * @return datetime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set the value of code.
     *
     * @param string $code
     * @return \Entity\CareEncounterDiagnosi
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get the value of code.
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set the value of code_parent.
     *
     * @param string $code_parent
     * @return \Entity\CareEncounterDiagnosi
     */
    public function setCodeParent($code_parent)
    {
        $this->code_parent = $code_parent;

        return $this;
    }

    /**
     * Get the value of code_parent.
     *
     * @return string
     */
    public function getCodeParent()
    {
        return $this->code_parent;
    }

    /**
     * Set the value of group_nr.
     *
     * @param integer $group_nr
     * @return \Entity\CareEncounterDiagnosi
     */
    public function setGroupNr($group_nr)
    {
        $this->group_nr = $group_nr;

        return $this;
    }

    /**
     * Get the value of group_nr.
     *
     * @return integer
     */
    public function getGroupNr()
    {
        return $this->group_nr;
    }

    /**
     * Set the value of code_version.
     *
     * @param integer $code_version
     * @return \Entity\CareEncounterDiagnosi
     */
    public function setCodeVersion($code_version)
    {
        $this->code_version = $code_version;

        return $this;
    }

    /**
     * Get the value of code_version.
     *
     * @return integer
     */
    public function getCodeVersion()
    {
        return $this->code_version;
    }

    /**
     * Set the value of localcode.
     *
     * @param string $localcode
     * @return \Entity\CareEncounterDiagnosi
     */
    public function setLocalcode($localcode)
    {
        $this->localcode = $localcode;

        return $this;
    }

    /**
     * Get the value of localcode.
     *
     * @return string
     */
    public function getLocalcode()
    {
        return $this->localcode;
    }

    /**
     * Set the value of category_nr.
     *
     * @param integer $category_nr
     * @return \Entity\CareEncounterDiagnosi
     */
    public function setCategoryNr($category_nr)
    {
        $this->category_nr = $category_nr;

        return $this;
    }

    /**
     * Get the value of category_nr.
     *
     * @return integer
     */
    public function getCategoryNr()
    {
        return $this->category_nr;
    }

    /**
     * Set the value of type.
     *
     * @param string $type
     * @return \Entity\CareEncounterDiagnosi
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get the value of type.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of localization.
     *
     * @param string $localization
     * @return \Entity\CareEncounterDiagnosi
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
     * Set the value of diagnosing_clinician.
     *
     * @param string $diagnosing_clinician
     * @return \Entity\CareEncounterDiagnosi
     */
    public function setDiagnosingClinician($diagnosing_clinician)
    {
        $this->diagnosing_clinician = $diagnosing_clinician;

        return $this;
    }

    /**
     * Get the value of diagnosing_clinician.
     *
     * @return string
     */
    public function getDiagnosingClinician()
    {
        return $this->diagnosing_clinician;
    }

    /**
     * Set the value of diagnosing_dept_nr.
     *
     * @param integer $diagnosing_dept_nr
     * @return \Entity\CareEncounterDiagnosi
     */
    public function setDiagnosingDeptNr($diagnosing_dept_nr)
    {
        $this->diagnosing_dept_nr = $diagnosing_dept_nr;

        return $this;
    }

    /**
     * Get the value of diagnosing_dept_nr.
     *
     * @return integer
     */
    public function getDiagnosingDeptNr()
    {
        return $this->diagnosing_dept_nr;
    }

    /**
     * Set the value of status.
     *
     * @param string $status
     * @return \Entity\CareEncounterDiagnosi
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
     * @return \Entity\CareEncounterDiagnosi
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
     * @return \Entity\CareEncounterDiagnosi
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
     * @return \Entity\CareEncounterDiagnosi
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
     * @return \Entity\CareEncounterDiagnosi
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
     * @return \Entity\CareEncounterDiagnosi
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
        return array('diagnosis_nr', 'encounter_nr', 'op_nr', 'date', 'code', 'code_parent', 'group_nr', 'code_version', 'localcode', 'category_nr', 'type', 'localization', 'diagnosing_clinician', 'diagnosing_dept_nr', 'status', 'history', 'modify_id', 'modify_time', 'create_id', 'create_time');
    }
}