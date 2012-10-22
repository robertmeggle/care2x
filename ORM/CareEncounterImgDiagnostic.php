<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\CareEncounterImgDiagnostic
 *
 * InnoDB free: 9216 kB
 *
 * @ORM\Entity(repositoryClass="CareEncounterImgDiagnosticRepository")
 * @ORM\Table(name="care_encounter_img_diagnostic", indexes={@ORM\Index(name="encounter_nr", columns={"pid"})})
 */
class CareEncounterImgDiagnostic
{
    /**
     * @ORM\Id
     * @ORM\Column(type="bigint")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $nr;

    /**
     * @ORM\Column(type="integer")
     */
    protected $pid;

    /**
     * @ORM\Column(type="integer")
     */
    protected $encounter_nr;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $doc_ref_ids;

    /**
     * @ORM\Column(type="string", length=10)
     */
    protected $img_type;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $max_nr;

    /**
     * @ORM\Column(type="date")
     */
    protected $upload_date;

    /**
     * @ORM\Column(type="date")
     */
    protected $cancel_date;

    /**
     * @ORM\Column(type="string", length=35, nullable=true)
     */
    protected $cancel_by;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $notes;

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
     * @return \Entity\CareEncounterImgDiagnostic
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
     * Set the value of pid.
     *
     * @param integer $pid
     * @return \Entity\CareEncounterImgDiagnostic
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
     * Set the value of encounter_nr.
     *
     * @param integer $encounter_nr
     * @return \Entity\CareEncounterImgDiagnostic
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
     * Set the value of doc_ref_ids.
     *
     * @param string $doc_ref_ids
     * @return \Entity\CareEncounterImgDiagnostic
     */
    public function setDocRefIds($doc_ref_ids)
    {
        $this->doc_ref_ids = $doc_ref_ids;

        return $this;
    }

    /**
     * Get the value of doc_ref_ids.
     *
     * @return string
     */
    public function getDocRefIds()
    {
        return $this->doc_ref_ids;
    }

    /**
     * Set the value of img_type.
     *
     * @param string $img_type
     * @return \Entity\CareEncounterImgDiagnostic
     */
    public function setImgType($img_type)
    {
        $this->img_type = $img_type;

        return $this;
    }

    /**
     * Get the value of img_type.
     *
     * @return string
     */
    public function getImgType()
    {
        return $this->img_type;
    }

    /**
     * Set the value of max_nr.
     *
     * @param integer $max_nr
     * @return \Entity\CareEncounterImgDiagnostic
     */
    public function setMaxNr($max_nr)
    {
        $this->max_nr = $max_nr;

        return $this;
    }

    /**
     * Get the value of max_nr.
     *
     * @return integer
     */
    public function getMaxNr()
    {
        return $this->max_nr;
    }

    /**
     * Set the value of upload_date.
     *
     * @param datetime $upload_date
     * @return \Entity\CareEncounterImgDiagnostic
     */
    public function setUploadDate($upload_date)
    {
        $this->upload_date = $upload_date;

        return $this;
    }

    /**
     * Get the value of upload_date.
     *
     * @return datetime
     */
    public function getUploadDate()
    {
        return $this->upload_date;
    }

    /**
     * Set the value of cancel_date.
     *
     * @param datetime $cancel_date
     * @return \Entity\CareEncounterImgDiagnostic
     */
    public function setCancelDate($cancel_date)
    {
        $this->cancel_date = $cancel_date;

        return $this;
    }

    /**
     * Get the value of cancel_date.
     *
     * @return datetime
     */
    public function getCancelDate()
    {
        return $this->cancel_date;
    }

    /**
     * Set the value of cancel_by.
     *
     * @param string $cancel_by
     * @return \Entity\CareEncounterImgDiagnostic
     */
    public function setCancelBy($cancel_by)
    {
        $this->cancel_by = $cancel_by;

        return $this;
    }

    /**
     * Get the value of cancel_by.
     *
     * @return string
     */
    public function getCancelBy()
    {
        return $this->cancel_by;
    }

    /**
     * Set the value of notes.
     *
     * @param string $notes
     * @return \Entity\CareEncounterImgDiagnostic
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
     * @return \Entity\CareEncounterImgDiagnostic
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
     * @return \Entity\CareEncounterImgDiagnostic
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
     * @return \Entity\CareEncounterImgDiagnostic
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
     * @return \Entity\CareEncounterImgDiagnostic
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
     * @return \Entity\CareEncounterImgDiagnostic
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
     * @return \Entity\CareEncounterImgDiagnostic
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
        return array('nr', 'pid', 'encounter_nr', 'doc_ref_ids', 'img_type', 'max_nr', 'upload_date', 'cancel_date', 'cancel_by', 'notes', 'status', 'history', 'modify_id', 'modify_time', 'create_id', 'create_time');
    }
}