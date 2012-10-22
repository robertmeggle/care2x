<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\CareOpMedDoc
 *
 * InnoDB free: 9216 kB
 *
 * @ORM\Entity(repositoryClass="CareOpMedDocRepository")
 * @ORM\Table(name="care_op_med_doc", indexes={@ORM\Index(name="encounter_nr", columns={"encounter_nr"})})
 */
class CareOpMedDoc
{
    /**
     * @ORM\Id
     * @ORM\Column(type="bigint")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $nr;

    /**
     * @ORM\Column(type="string", length=12)
     */
    protected $op_date;

    /**
     * @ORM\Column(type="text")
     */
    protected $operator;

    /**
     * @ORM\Column(type="integer")
     */
    protected $encounter_nr;

    /**
     * @ORM\Column(type="smallint")
     */
    protected $dept_nr;

    /**
     * @ORM\Column(type="text")
     */
    protected $diagnosis;

    /**
     * @ORM\Column(type="text")
     */
    protected $localize;

    /**
     * @ORM\Column(type="text")
     */
    protected $therapy;

    /**
     * @ORM\Column(type="text")
     */
    protected $special;

    /**
     * @ORM\Column(type="integer")
     */
    protected $class_s;

    /**
     * @ORM\Column(type="integer")
     */
    protected $class_m;

    /**
     * @ORM\Column(type="integer")
     */
    protected $class_l;

    /**
     * @ORM\Column(type="string", length=8)
     */
    protected $op_start;

    /**
     * @ORM\Column(type="string", length=8)
     */
    protected $op_end;

    /**
     * @ORM\Column(type="string", length=70)
     */
    protected $scrub_nurse;

    /**
     * @ORM\Column(type="string", length=10)
     */
    protected $op_room;

    /**
     * @ORM\Column(type="string", length=15)
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
     * @return \Entity\CareOpMedDoc
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
     * Set the value of op_date.
     *
     * @param string $op_date
     * @return \Entity\CareOpMedDoc
     */
    public function setOpDate($op_date)
    {
        $this->op_date = $op_date;

        return $this;
    }

    /**
     * Get the value of op_date.
     *
     * @return string
     */
    public function getOpDate()
    {
        return $this->op_date;
    }

    /**
     * Set the value of operator.
     *
     * @param string $operator
     * @return \Entity\CareOpMedDoc
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
     * Set the value of encounter_nr.
     *
     * @param integer $encounter_nr
     * @return \Entity\CareOpMedDoc
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
     * @return \Entity\CareOpMedDoc
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
     * Set the value of diagnosis.
     *
     * @param string $diagnosis
     * @return \Entity\CareOpMedDoc
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
     * Set the value of localize.
     *
     * @param string $localize
     * @return \Entity\CareOpMedDoc
     */
    public function setLocalize($localize)
    {
        $this->localize = $localize;

        return $this;
    }

    /**
     * Get the value of localize.
     *
     * @return string
     */
    public function getLocalize()
    {
        return $this->localize;
    }

    /**
     * Set the value of therapy.
     *
     * @param string $therapy
     * @return \Entity\CareOpMedDoc
     */
    public function setTherapy($therapy)
    {
        $this->therapy = $therapy;

        return $this;
    }

    /**
     * Get the value of therapy.
     *
     * @return string
     */
    public function getTherapy()
    {
        return $this->therapy;
    }

    /**
     * Set the value of special.
     *
     * @param string $special
     * @return \Entity\CareOpMedDoc
     */
    public function setSpecial($special)
    {
        $this->special = $special;

        return $this;
    }

    /**
     * Get the value of special.
     *
     * @return string
     */
    public function getSpecial()
    {
        return $this->special;
    }

    /**
     * Set the value of class_s.
     *
     * @param integer $class_s
     * @return \Entity\CareOpMedDoc
     */
    public function setClassS($class_s)
    {
        $this->class_s = $class_s;

        return $this;
    }

    /**
     * Get the value of class_s.
     *
     * @return integer
     */
    public function getClassS()
    {
        return $this->class_s;
    }

    /**
     * Set the value of class_m.
     *
     * @param integer $class_m
     * @return \Entity\CareOpMedDoc
     */
    public function setClassM($class_m)
    {
        $this->class_m = $class_m;

        return $this;
    }

    /**
     * Get the value of class_m.
     *
     * @return integer
     */
    public function getClassM()
    {
        return $this->class_m;
    }

    /**
     * Set the value of class_l.
     *
     * @param integer $class_l
     * @return \Entity\CareOpMedDoc
     */
    public function setClassL($class_l)
    {
        $this->class_l = $class_l;

        return $this;
    }

    /**
     * Get the value of class_l.
     *
     * @return integer
     */
    public function getClassL()
    {
        return $this->class_l;
    }

    /**
     * Set the value of op_start.
     *
     * @param string $op_start
     * @return \Entity\CareOpMedDoc
     */
    public function setOpStart($op_start)
    {
        $this->op_start = $op_start;

        return $this;
    }

    /**
     * Get the value of op_start.
     *
     * @return string
     */
    public function getOpStart()
    {
        return $this->op_start;
    }

    /**
     * Set the value of op_end.
     *
     * @param string $op_end
     * @return \Entity\CareOpMedDoc
     */
    public function setOpEnd($op_end)
    {
        $this->op_end = $op_end;

        return $this;
    }

    /**
     * Get the value of op_end.
     *
     * @return string
     */
    public function getOpEnd()
    {
        return $this->op_end;
    }

    /**
     * Set the value of scrub_nurse.
     *
     * @param string $scrub_nurse
     * @return \Entity\CareOpMedDoc
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
     * Set the value of op_room.
     *
     * @param string $op_room
     * @return \Entity\CareOpMedDoc
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
     * Set the value of status.
     *
     * @param string $status
     * @return \Entity\CareOpMedDoc
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
     * @return \Entity\CareOpMedDoc
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
     * @return \Entity\CareOpMedDoc
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
     * @return \Entity\CareOpMedDoc
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
     * @return \Entity\CareOpMedDoc
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
     * @return \Entity\CareOpMedDoc
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
        return array('nr', 'op_date', 'operator', 'encounter_nr', 'dept_nr', 'diagnosis', 'localize', 'therapy', 'special', 'class_s', 'class_m', 'class_l', 'op_start', 'op_end', 'scrub_nurse', 'op_room', 'status', 'history', 'modify_id', 'modify_time', 'create_id', 'create_time');
    }
}