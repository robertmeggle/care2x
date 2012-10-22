<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\CareTestFindingsBaclaborSub
 *
 * @ORM\Entity(repositoryClass="CareTestFindingsBaclaborSubRepository")
 * @ORM\Table(name="care_test_findings_baclabor_sub")
 */
class CareTestFindingsBaclaborSub
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $sub_id;

    /**
     * @ORM\Column(type="integer")
     */
    protected $batch_nr;

    /**
     * @ORM\Column(type="integer")
     */
    protected $encounter_nr;

    /**
     * General type
     *
     * @ORM\Column(type="string", length=255)
     */
    protected $type_general;

    /**
     * Flag if resistant to anaerobic
     *
     * @ORM\Column(type="string", length=255)
     */
    protected $resist_anaerob;

    /**
     * Flag if resistant to aerobic
     *
     * @ORM\Column(type="string", length=255)
     */
    protected $resist_aerob;

    /**
     * General findings
     *
     * @ORM\Column(type="string", length=255)
     */
    protected $findings;

    /**
     * Date of findings report
     *
     * @ORM\Column(type="date")
     */
    protected $findings_date;

    /**
     * Time of findings report
     *
     * @ORM\Column(type="time")
     */
    protected $findings_time;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
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
     * @ORM\Column(type="string", length=35, nullable=true)
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
     * Set the value of sub_id.
     *
     * @param integer $sub_id
     * @return \Entity\CareTestFindingsBaclaborSub
     */
    public function setSubId($sub_id)
    {
        $this->sub_id = $sub_id;

        return $this;
    }

    /**
     * Get the value of sub_id.
     *
     * @return integer
     */
    public function getSubId()
    {
        return $this->sub_id;
    }

    /**
     * Set the value of batch_nr.
     *
     * @param integer $batch_nr
     * @return \Entity\CareTestFindingsBaclaborSub
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
     * @return \Entity\CareTestFindingsBaclaborSub
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
     * Set the value of type_general.
     *
     * @param string $type_general
     * @return \Entity\CareTestFindingsBaclaborSub
     */
    public function setTypeGeneral($type_general)
    {
        $this->type_general = $type_general;

        return $this;
    }

    /**
     * Get the value of type_general.
     *
     * @return string
     */
    public function getTypeGeneral()
    {
        return $this->type_general;
    }

    /**
     * Set the value of resist_anaerob.
     *
     * @param string $resist_anaerob
     * @return \Entity\CareTestFindingsBaclaborSub
     */
    public function setResistAnaerob($resist_anaerob)
    {
        $this->resist_anaerob = $resist_anaerob;

        return $this;
    }

    /**
     * Get the value of resist_anaerob.
     *
     * @return string
     */
    public function getResistAnaerob()
    {
        return $this->resist_anaerob;
    }

    /**
     * Set the value of resist_aerob.
     *
     * @param string $resist_aerob
     * @return \Entity\CareTestFindingsBaclaborSub
     */
    public function setResistAerob($resist_aerob)
    {
        $this->resist_aerob = $resist_aerob;

        return $this;
    }

    /**
     * Get the value of resist_aerob.
     *
     * @return string
     */
    public function getResistAerob()
    {
        return $this->resist_aerob;
    }

    /**
     * Set the value of findings.
     *
     * @param string $findings
     * @return \Entity\CareTestFindingsBaclaborSub
     */
    public function setFindings($findings)
    {
        $this->findings = $findings;

        return $this;
    }

    /**
     * Get the value of findings.
     *
     * @return string
     */
    public function getFindings()
    {
        return $this->findings;
    }

    /**
     * Set the value of findings_date.
     *
     * @param datetime $findings_date
     * @return \Entity\CareTestFindingsBaclaborSub
     */
    public function setFindingsDate($findings_date)
    {
        $this->findings_date = $findings_date;

        return $this;
    }

    /**
     * Get the value of findings_date.
     *
     * @return datetime
     */
    public function getFindingsDate()
    {
        return $this->findings_date;
    }

    /**
     * Set the value of findings_time.
     *
     * @param datetime $findings_time
     * @return \Entity\CareTestFindingsBaclaborSub
     */
    public function setFindingsTime($findings_time)
    {
        $this->findings_time = $findings_time;

        return $this;
    }

    /**
     * Get the value of findings_time.
     *
     * @return datetime
     */
    public function getFindingsTime()
    {
        return $this->findings_time;
    }

    /**
     * Set the value of status.
     *
     * @param string $status
     * @return \Entity\CareTestFindingsBaclaborSub
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
     * @return \Entity\CareTestFindingsBaclaborSub
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
     * @return \Entity\CareTestFindingsBaclaborSub
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
     * @return \Entity\CareTestFindingsBaclaborSub
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
     * @return \Entity\CareTestFindingsBaclaborSub
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
     * @return \Entity\CareTestFindingsBaclaborSub
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
        return array('sub_id', 'batch_nr', 'encounter_nr', 'type_general', 'resist_anaerob', 'resist_aerob', 'findings', 'findings_date', 'findings_time', 'status', 'history', 'modify_id', 'modify_time', 'create_id', 'create_time');
    }
}