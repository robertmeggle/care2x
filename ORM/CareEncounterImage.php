<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\CareEncounterImage
 *
 * InnoDB free: 10240 kB
 *
 * @ORM\Entity(repositoryClass="CareEncounterImageRepository")
 * @ORM\Table(name="care_encounter_image", indexes={@ORM\Index(name="encounter_nr", columns={"encounter_nr"})})
 */
class CareEncounterImage
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
    protected $encounter_nr;

    /**
     * @ORM\Column(type="date")
     */
    protected $shot_date;

    /**
     * @ORM\Column(type="smallint")
     */
    protected $shot_nr;

    /**
     * @ORM\Column(type="string", length=10)
     */
    protected $mime_type;

    /**
     * @ORM\Column(type="date")
     */
    protected $upload_date;

    /**
     * @ORM\Column(type="text")
     */
    protected $notes;

    /**
     * @ORM\Column(type="text")
     */
    protected $graphic_script;

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
     * @return \Entity\CareEncounterImage
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
     * @return \Entity\CareEncounterImage
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
     * Set the value of shot_date.
     *
     * @param datetime $shot_date
     * @return \Entity\CareEncounterImage
     */
    public function setShotDate($shot_date)
    {
        $this->shot_date = $shot_date;

        return $this;
    }

    /**
     * Get the value of shot_date.
     *
     * @return datetime
     */
    public function getShotDate()
    {
        return $this->shot_date;
    }

    /**
     * Set the value of shot_nr.
     *
     * @param integer $shot_nr
     * @return \Entity\CareEncounterImage
     */
    public function setShotNr($shot_nr)
    {
        $this->shot_nr = $shot_nr;

        return $this;
    }

    /**
     * Get the value of shot_nr.
     *
     * @return integer
     */
    public function getShotNr()
    {
        return $this->shot_nr;
    }

    /**
     * Set the value of mime_type.
     *
     * @param string $mime_type
     * @return \Entity\CareEncounterImage
     */
    public function setMimeType($mime_type)
    {
        $this->mime_type = $mime_type;

        return $this;
    }

    /**
     * Get the value of mime_type.
     *
     * @return string
     */
    public function getMimeType()
    {
        return $this->mime_type;
    }

    /**
     * Set the value of upload_date.
     *
     * @param datetime $upload_date
     * @return \Entity\CareEncounterImage
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
     * Set the value of notes.
     *
     * @param string $notes
     * @return \Entity\CareEncounterImage
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
     * Set the value of graphic_script.
     *
     * @param string $graphic_script
     * @return \Entity\CareEncounterImage
     */
    public function setGraphicScript($graphic_script)
    {
        $this->graphic_script = $graphic_script;

        return $this;
    }

    /**
     * Get the value of graphic_script.
     *
     * @return string
     */
    public function getGraphicScript()
    {
        return $this->graphic_script;
    }

    /**
     * Set the value of status.
     *
     * @param string $status
     * @return \Entity\CareEncounterImage
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
     * @return \Entity\CareEncounterImage
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
     * @return \Entity\CareEncounterImage
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
     * @return \Entity\CareEncounterImage
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
     * @return \Entity\CareEncounterImage
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
     * @return \Entity\CareEncounterImage
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
        return array('nr', 'encounter_nr', 'shot_date', 'shot_nr', 'mime_type', 'upload_date', 'notes', 'graphic_script', 'status', 'history', 'modify_id', 'modify_time', 'create_id', 'create_time');
    }
}