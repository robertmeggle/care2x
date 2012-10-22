<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\CareEncounterNote
 *
 * InnoDB free: 10240 kB
 *
 * @ORM\Entity(repositoryClass="CareEncounterNoteRepository")
 * @ORM\Table(name="care_encounter_notes", indexes={@ORM\Index(name="encounter_nr", columns={"encounter_nr"}), @ORM\Index(name="type_nr", columns={"type_nr"})})
 */
class CareEncounterNote
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
     * @ORM\Column(type="smallint")
     */
    protected $type_nr;

    /**
     * @ORM\Column(type="text")
     */
    protected $notes;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    protected $short_notes;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $aux_notes;

    /**
     * @ORM\Column(type="integer")
     */
    protected $ref_notes_nr;

    /**
     * @ORM\Column(type="integer")
     */
    protected $personell_nr;

    /**
     * @ORM\Column(type="string", length=60)
     */
    protected $personell_name;

    /**
     * @ORM\Column(type="integer")
     */
    protected $send_to_pid;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    protected $send_to_name;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    protected $date;

    /**
     * @ORM\Column(type="time", nullable=true)
     */
    protected $time;

    /**
     * @ORM\Column(type="string", length=35, nullable=true)
     */
    protected $location_type;

    /**
     * @ORM\Column(type="integer")
     */
    protected $location_type_nr;

    /**
     * @ORM\Column(type="integer")
     */
    protected $location_nr;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    protected $location_id;

    /**
     * @ORM\Column(type="string", length=10)
     */
    protected $ack_short_id;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $date_ack;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $date_checked;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $date_printed;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    protected $send_by_mail;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    protected $send_by_email;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    protected $send_by_fax;

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
     * @return \Entity\CareEncounterNote
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
     * @return \Entity\CareEncounterNote
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
     * Set the value of type_nr.
     *
     * @param integer $type_nr
     * @return \Entity\CareEncounterNote
     */
    public function setTypeNr($type_nr)
    {
        $this->type_nr = $type_nr;

        return $this;
    }

    /**
     * Get the value of type_nr.
     *
     * @return integer
     */
    public function getTypeNr()
    {
        return $this->type_nr;
    }

    /**
     * Set the value of notes.
     *
     * @param string $notes
     * @return \Entity\CareEncounterNote
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
     * Set the value of short_notes.
     *
     * @param string $short_notes
     * @return \Entity\CareEncounterNote
     */
    public function setShortNotes($short_notes)
    {
        $this->short_notes = $short_notes;

        return $this;
    }

    /**
     * Get the value of short_notes.
     *
     * @return string
     */
    public function getShortNotes()
    {
        return $this->short_notes;
    }

    /**
     * Set the value of aux_notes.
     *
     * @param string $aux_notes
     * @return \Entity\CareEncounterNote
     */
    public function setAuxNotes($aux_notes)
    {
        $this->aux_notes = $aux_notes;

        return $this;
    }

    /**
     * Get the value of aux_notes.
     *
     * @return string
     */
    public function getAuxNotes()
    {
        return $this->aux_notes;
    }

    /**
     * Set the value of ref_notes_nr.
     *
     * @param integer $ref_notes_nr
     * @return \Entity\CareEncounterNote
     */
    public function setRefNotesNr($ref_notes_nr)
    {
        $this->ref_notes_nr = $ref_notes_nr;

        return $this;
    }

    /**
     * Get the value of ref_notes_nr.
     *
     * @return integer
     */
    public function getRefNotesNr()
    {
        return $this->ref_notes_nr;
    }

    /**
     * Set the value of personell_nr.
     *
     * @param integer $personell_nr
     * @return \Entity\CareEncounterNote
     */
    public function setPersonellNr($personell_nr)
    {
        $this->personell_nr = $personell_nr;

        return $this;
    }

    /**
     * Get the value of personell_nr.
     *
     * @return integer
     */
    public function getPersonellNr()
    {
        return $this->personell_nr;
    }

    /**
     * Set the value of personell_name.
     *
     * @param string $personell_name
     * @return \Entity\CareEncounterNote
     */
    public function setPersonellName($personell_name)
    {
        $this->personell_name = $personell_name;

        return $this;
    }

    /**
     * Get the value of personell_name.
     *
     * @return string
     */
    public function getPersonellName()
    {
        return $this->personell_name;
    }

    /**
     * Set the value of send_to_pid.
     *
     * @param integer $send_to_pid
     * @return \Entity\CareEncounterNote
     */
    public function setSendToPid($send_to_pid)
    {
        $this->send_to_pid = $send_to_pid;

        return $this;
    }

    /**
     * Get the value of send_to_pid.
     *
     * @return integer
     */
    public function getSendToPid()
    {
        return $this->send_to_pid;
    }

    /**
     * Set the value of send_to_name.
     *
     * @param string $send_to_name
     * @return \Entity\CareEncounterNote
     */
    public function setSendToName($send_to_name)
    {
        $this->send_to_name = $send_to_name;

        return $this;
    }

    /**
     * Get the value of send_to_name.
     *
     * @return string
     */
    public function getSendToName()
    {
        return $this->send_to_name;
    }

    /**
     * Set the value of date.
     *
     * @param datetime $date
     * @return \Entity\CareEncounterNote
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
     * Set the value of time.
     *
     * @param datetime $time
     * @return \Entity\CareEncounterNote
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Get the value of time.
     *
     * @return datetime
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Set the value of location_type.
     *
     * @param string $location_type
     * @return \Entity\CareEncounterNote
     */
    public function setLocationType($location_type)
    {
        $this->location_type = $location_type;

        return $this;
    }

    /**
     * Get the value of location_type.
     *
     * @return string
     */
    public function getLocationType()
    {
        return $this->location_type;
    }

    /**
     * Set the value of location_type_nr.
     *
     * @param integer $location_type_nr
     * @return \Entity\CareEncounterNote
     */
    public function setLocationTypeNr($location_type_nr)
    {
        $this->location_type_nr = $location_type_nr;

        return $this;
    }

    /**
     * Get the value of location_type_nr.
     *
     * @return integer
     */
    public function getLocationTypeNr()
    {
        return $this->location_type_nr;
    }

    /**
     * Set the value of location_nr.
     *
     * @param integer $location_nr
     * @return \Entity\CareEncounterNote
     */
    public function setLocationNr($location_nr)
    {
        $this->location_nr = $location_nr;

        return $this;
    }

    /**
     * Get the value of location_nr.
     *
     * @return integer
     */
    public function getLocationNr()
    {
        return $this->location_nr;
    }

    /**
     * Set the value of location_id.
     *
     * @param string $location_id
     * @return \Entity\CareEncounterNote
     */
    public function setLocationId($location_id)
    {
        $this->location_id = $location_id;

        return $this;
    }

    /**
     * Get the value of location_id.
     *
     * @return string
     */
    public function getLocationId()
    {
        return $this->location_id;
    }

    /**
     * Set the value of ack_short_id.
     *
     * @param string $ack_short_id
     * @return \Entity\CareEncounterNote
     */
    public function setAckShortId($ack_short_id)
    {
        $this->ack_short_id = $ack_short_id;

        return $this;
    }

    /**
     * Get the value of ack_short_id.
     *
     * @return string
     */
    public function getAckShortId()
    {
        return $this->ack_short_id;
    }

    /**
     * Set the value of date_ack.
     *
     * @param datetime $date_ack
     * @return \Entity\CareEncounterNote
     */
    public function setDateAck($date_ack)
    {
        $this->date_ack = $date_ack;

        return $this;
    }

    /**
     * Get the value of date_ack.
     *
     * @return datetime
     */
    public function getDateAck()
    {
        return $this->date_ack;
    }

    /**
     * Set the value of date_checked.
     *
     * @param datetime $date_checked
     * @return \Entity\CareEncounterNote
     */
    public function setDateChecked($date_checked)
    {
        $this->date_checked = $date_checked;

        return $this;
    }

    /**
     * Get the value of date_checked.
     *
     * @return datetime
     */
    public function getDateChecked()
    {
        return $this->date_checked;
    }

    /**
     * Set the value of date_printed.
     *
     * @param datetime $date_printed
     * @return \Entity\CareEncounterNote
     */
    public function setDatePrinted($date_printed)
    {
        $this->date_printed = $date_printed;

        return $this;
    }

    /**
     * Get the value of date_printed.
     *
     * @return datetime
     */
    public function getDatePrinted()
    {
        return $this->date_printed;
    }

    /**
     * Set the value of send_by_mail.
     *
     * @param boolean $send_by_mail
     * @return \Entity\CareEncounterNote
     */
    public function setSendByMail($send_by_mail)
    {
        $this->send_by_mail = $send_by_mail;

        return $this;
    }

    /**
     * Get the value of send_by_mail.
     *
     * @return boolean
     */
    public function getSendByMail()
    {
        return $this->send_by_mail;
    }

    /**
     * Set the value of send_by_email.
     *
     * @param boolean $send_by_email
     * @return \Entity\CareEncounterNote
     */
    public function setSendByEmail($send_by_email)
    {
        $this->send_by_email = $send_by_email;

        return $this;
    }

    /**
     * Get the value of send_by_email.
     *
     * @return boolean
     */
    public function getSendByEmail()
    {
        return $this->send_by_email;
    }

    /**
     * Set the value of send_by_fax.
     *
     * @param boolean $send_by_fax
     * @return \Entity\CareEncounterNote
     */
    public function setSendByFax($send_by_fax)
    {
        $this->send_by_fax = $send_by_fax;

        return $this;
    }

    /**
     * Get the value of send_by_fax.
     *
     * @return boolean
     */
    public function getSendByFax()
    {
        return $this->send_by_fax;
    }

    /**
     * Set the value of status.
     *
     * @param string $status
     * @return \Entity\CareEncounterNote
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
     * @return \Entity\CareEncounterNote
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
     * @return \Entity\CareEncounterNote
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
     * @return \Entity\CareEncounterNote
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
     * @return \Entity\CareEncounterNote
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
     * @return \Entity\CareEncounterNote
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
        return array('nr', 'encounter_nr', 'type_nr', 'notes', 'short_notes', 'aux_notes', 'ref_notes_nr', 'personell_nr', 'personell_name', 'send_to_pid', 'send_to_name', 'date', 'time', 'location_type', 'location_type_nr', 'location_nr', 'location_id', 'ack_short_id', 'date_ack', 'date_checked', 'date_printed', 'send_by_mail', 'send_by_email', 'send_by_fax', 'status', 'history', 'modify_id', 'modify_time', 'create_id', 'create_time');
    }
}