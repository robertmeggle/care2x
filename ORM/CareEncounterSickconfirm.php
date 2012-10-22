<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\CareEncounterSickconfirm
 *
 * InnoDB free: 10240 kB
 *
 * @ORM\Entity(repositoryClass="CareEncounterSickconfirmRepository")
 * @ORM\Table(name="care_encounter_sickconfirm", indexes={@ORM\Index(name="encounter_nr", columns={"encounter_nr"})})
 */
class CareEncounterSickconfirm
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $nr;

    /**
     * @ORM\Column(type="integer")
     */
    protected $encounter_nr;

    /**
     * @ORM\Column(type="date")
     */
    protected $date_confirm;

    /**
     * @ORM\Column(type="date")
     */
    protected $date_start;

    /**
     * @ORM\Column(type="date")
     */
    protected $date_end;

    /**
     * @ORM\Column(type="date")
     */
    protected $date_create;

    /**
     * @ORM\Column(type="text")
     */
    protected $diagnosis;

    /**
     * @ORM\Column(type="smallint")
     */
    protected $dept_nr;

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
     * @return \Entity\CareEncounterSickconfirm
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
     * @return \Entity\CareEncounterSickconfirm
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
     * Set the value of date_confirm.
     *
     * @param datetime $date_confirm
     * @return \Entity\CareEncounterSickconfirm
     */
    public function setDateConfirm($date_confirm)
    {
        $this->date_confirm = $date_confirm;

        return $this;
    }

    /**
     * Get the value of date_confirm.
     *
     * @return datetime
     */
    public function getDateConfirm()
    {
        return $this->date_confirm;
    }

    /**
     * Set the value of date_start.
     *
     * @param datetime $date_start
     * @return \Entity\CareEncounterSickconfirm
     */
    public function setDateStart($date_start)
    {
        $this->date_start = $date_start;

        return $this;
    }

    /**
     * Get the value of date_start.
     *
     * @return datetime
     */
    public function getDateStart()
    {
        return $this->date_start;
    }

    /**
     * Set the value of date_end.
     *
     * @param datetime $date_end
     * @return \Entity\CareEncounterSickconfirm
     */
    public function setDateEnd($date_end)
    {
        $this->date_end = $date_end;

        return $this;
    }

    /**
     * Get the value of date_end.
     *
     * @return datetime
     */
    public function getDateEnd()
    {
        return $this->date_end;
    }

    /**
     * Set the value of date_create.
     *
     * @param datetime $date_create
     * @return \Entity\CareEncounterSickconfirm
     */
    public function setDateCreate($date_create)
    {
        $this->date_create = $date_create;

        return $this;
    }

    /**
     * Get the value of date_create.
     *
     * @return datetime
     */
    public function getDateCreate()
    {
        return $this->date_create;
    }

    /**
     * Set the value of diagnosis.
     *
     * @param string $diagnosis
     * @return \Entity\CareEncounterSickconfirm
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
     * Set the value of dept_nr.
     *
     * @param integer $dept_nr
     * @return \Entity\CareEncounterSickconfirm
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
     * Set the value of status.
     *
     * @param string $status
     * @return \Entity\CareEncounterSickconfirm
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
     * @return \Entity\CareEncounterSickconfirm
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
     * @return \Entity\CareEncounterSickconfirm
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
     * @return \Entity\CareEncounterSickconfirm
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
     * @return \Entity\CareEncounterSickconfirm
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
     * @return \Entity\CareEncounterSickconfirm
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
        return array('nr', 'encounter_nr', 'date_confirm', 'date_start', 'date_end', 'date_create', 'diagnosis', 'dept_nr', 'status', 'history', 'modify_id', 'modify_time', 'create_id', 'create_time');
    }
}