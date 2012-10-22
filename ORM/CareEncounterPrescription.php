<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Entity\CareEncounterPrescription
 *
 * @ORM\Entity(repositoryClass="CareEncounterPrescriptionRepository")
 * @ORM\Table(name="care_encounter_prescription", indexes={@ORM\Index(name="encounter_nr", columns={"encounter_nr"})})
 */
class CareEncounterPrescription
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
     * @ORM\Column(type="date", nullable=true)
     */
    protected $prescribe_date;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $notes;

    /**
     * @ORM\Column(type="string", length=25)
     */
    protected $status;

    /**
     * @ORM\Column(type="string", length=60)
     */
    protected $prescriber;

    /**
     * the dept from wich the prescriprion is being made
     *
     * @ORM\Column(type="integer")
     */
    protected $dept_nr;

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

    /**
     * @ORM\OneToMany(targetEntity="CareEncounterPrescriptionSub", mappedBy="careEncounterPrescription")
     * @ORM\JoinColumn(name="prescription_nr", referencedColumnName="nr", nullable=false)
     */
    protected $careEncounterPrescriptionSubs;

    public function __construct()
    {
        $this->careEncounterPrescriptionSubs = new ArrayCollection();
    }

    /**
     * Set the value of nr.
     *
     * @param integer $nr
     * @return \Entity\CareEncounterPrescription
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
     * @return \Entity\CareEncounterPrescription
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
     * Set the value of prescribe_date.
     *
     * @param datetime $prescribe_date
     * @return \Entity\CareEncounterPrescription
     */
    public function setPrescribeDate($prescribe_date)
    {
        $this->prescribe_date = $prescribe_date;

        return $this;
    }

    /**
     * Get the value of prescribe_date.
     *
     * @return datetime
     */
    public function getPrescribeDate()
    {
        return $this->prescribe_date;
    }

    /**
     * Set the value of notes.
     *
     * @param string $notes
     * @return \Entity\CareEncounterPrescription
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
     * Set the value of status.
     *
     * @param string $status
     * @return \Entity\CareEncounterPrescription
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
     * Set the value of prescriber.
     *
     * @param string $prescriber
     * @return \Entity\CareEncounterPrescription
     */
    public function setPrescriber($prescriber)
    {
        $this->prescriber = $prescriber;

        return $this;
    }

    /**
     * Get the value of prescriber.
     *
     * @return string
     */
    public function getPrescriber()
    {
        return $this->prescriber;
    }

    /**
     * Set the value of dept_nr.
     *
     * @param integer $dept_nr
     * @return \Entity\CareEncounterPrescription
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
     * Set the value of history.
     *
     * @param string $history
     * @return \Entity\CareEncounterPrescription
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
     * @return \Entity\CareEncounterPrescription
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
     * @return \Entity\CareEncounterPrescription
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
     * @return \Entity\CareEncounterPrescription
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
     * @return \Entity\CareEncounterPrescription
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
     * Add CareEncounterPrescriptionSub entity to collection (one to many).
     *
     * @param \Entity\CareEncounterPrescriptionSub $careEncounterPrescriptionSub
     * @return \Entity\CareEncounterPrescription
     */
    public function addCareEncounterPrescriptionSub(CareEncounterPrescriptionSub $careEncounterPrescriptionSub)
    {
        $this->careEncounterPrescriptionSubs[] = $careEncounterPrescriptionSub;

        return $this;
    }

    /**
     * Get CareEncounterPrescriptionSub entity collection (one to many).
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCareEncounterPrescriptionSubs()
    {
        return $this->careEncounterPrescriptionSubs;
    }

    public function __sleep()
    {
        return array('nr', 'encounter_nr', 'prescribe_date', 'notes', 'status', 'prescriber', 'dept_nr', 'history', 'modify_id', 'modify_time', 'create_id', 'create_time');
    }
}