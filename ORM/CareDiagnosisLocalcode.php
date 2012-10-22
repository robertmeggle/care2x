<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\CareDiagnosisLocalcode
 *
 * InnoDB free: 11264 kB
 *
 * @ORM\Entity(repositoryClass="CareDiagnosisLocalcodeRepository")
 * @ORM\Table(name="care_diagnosis_localcode", indexes={@ORM\Index(name="diagnosis_code", columns={"localcode"})})
 */
class CareDiagnosisLocalcode
{
    /**
     * @ORM\Id
     * @ORM\Column(type="string", length=12)
     */
    protected $localcode;

    /**
     * @ORM\Column(type="text")
     */
    protected $description;

    /**
     * @ORM\Column(type="string", length=5)
     */
    protected $class_sub;

    /**
     * @ORM\Column(type="string", length=10)
     */
    protected $type;

    /**
     * @ORM\Column(type="text")
     */
    protected $inclusive;

    /**
     * @ORM\Column(type="text")
     */
    protected $exclusive;

    /**
     * @ORM\Column(type="text")
     */
    protected $notes;

    /**
     * @ORM\Column(type="string", length=1)
     */
    protected $std_code;

    /**
     * @ORM\Column(type="integer")
     */
    protected $sub_level;

    /**
     * @ORM\Column(type="text")
     */
    protected $remarks;

    /**
     * @ORM\Column(type="text")
     */
    protected $extra_codes;

    /**
     * @ORM\Column(type="text")
     */
    protected $extra_subclass;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $search_keys;

    /**
     * @ORM\Column(type="integer")
     */
    protected $use_frequency;

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
     * Set the value of localcode.
     *
     * @param string $localcode
     * @return \Entity\CareDiagnosisLocalcode
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
     * Set the value of description.
     *
     * @param string $description
     * @return \Entity\CareDiagnosisLocalcode
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of description.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of class_sub.
     *
     * @param string $class_sub
     * @return \Entity\CareDiagnosisLocalcode
     */
    public function setClassSub($class_sub)
    {
        $this->class_sub = $class_sub;

        return $this;
    }

    /**
     * Get the value of class_sub.
     *
     * @return string
     */
    public function getClassSub()
    {
        return $this->class_sub;
    }

    /**
     * Set the value of type.
     *
     * @param string $type
     * @return \Entity\CareDiagnosisLocalcode
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
     * Set the value of inclusive.
     *
     * @param string $inclusive
     * @return \Entity\CareDiagnosisLocalcode
     */
    public function setInclusive($inclusive)
    {
        $this->inclusive = $inclusive;

        return $this;
    }

    /**
     * Get the value of inclusive.
     *
     * @return string
     */
    public function getInclusive()
    {
        return $this->inclusive;
    }

    /**
     * Set the value of exclusive.
     *
     * @param string $exclusive
     * @return \Entity\CareDiagnosisLocalcode
     */
    public function setExclusive($exclusive)
    {
        $this->exclusive = $exclusive;

        return $this;
    }

    /**
     * Get the value of exclusive.
     *
     * @return string
     */
    public function getExclusive()
    {
        return $this->exclusive;
    }

    /**
     * Set the value of notes.
     *
     * @param string $notes
     * @return \Entity\CareDiagnosisLocalcode
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
     * Set the value of std_code.
     *
     * @param string $std_code
     * @return \Entity\CareDiagnosisLocalcode
     */
    public function setStdCode($std_code)
    {
        $this->std_code = $std_code;

        return $this;
    }

    /**
     * Get the value of std_code.
     *
     * @return string
     */
    public function getStdCode()
    {
        return $this->std_code;
    }

    /**
     * Set the value of sub_level.
     *
     * @param integer $sub_level
     * @return \Entity\CareDiagnosisLocalcode
     */
    public function setSubLevel($sub_level)
    {
        $this->sub_level = $sub_level;

        return $this;
    }

    /**
     * Get the value of sub_level.
     *
     * @return integer
     */
    public function getSubLevel()
    {
        return $this->sub_level;
    }

    /**
     * Set the value of remarks.
     *
     * @param string $remarks
     * @return \Entity\CareDiagnosisLocalcode
     */
    public function setRemarks($remarks)
    {
        $this->remarks = $remarks;

        return $this;
    }

    /**
     * Get the value of remarks.
     *
     * @return string
     */
    public function getRemarks()
    {
        return $this->remarks;
    }

    /**
     * Set the value of extra_codes.
     *
     * @param string $extra_codes
     * @return \Entity\CareDiagnosisLocalcode
     */
    public function setExtraCodes($extra_codes)
    {
        $this->extra_codes = $extra_codes;

        return $this;
    }

    /**
     * Get the value of extra_codes.
     *
     * @return string
     */
    public function getExtraCodes()
    {
        return $this->extra_codes;
    }

    /**
     * Set the value of extra_subclass.
     *
     * @param string $extra_subclass
     * @return \Entity\CareDiagnosisLocalcode
     */
    public function setExtraSubclass($extra_subclass)
    {
        $this->extra_subclass = $extra_subclass;

        return $this;
    }

    /**
     * Get the value of extra_subclass.
     *
     * @return string
     */
    public function getExtraSubclass()
    {
        return $this->extra_subclass;
    }

    /**
     * Set the value of search_keys.
     *
     * @param string $search_keys
     * @return \Entity\CareDiagnosisLocalcode
     */
    public function setSearchKeys($search_keys)
    {
        $this->search_keys = $search_keys;

        return $this;
    }

    /**
     * Get the value of search_keys.
     *
     * @return string
     */
    public function getSearchKeys()
    {
        return $this->search_keys;
    }

    /**
     * Set the value of use_frequency.
     *
     * @param integer $use_frequency
     * @return \Entity\CareDiagnosisLocalcode
     */
    public function setUseFrequency($use_frequency)
    {
        $this->use_frequency = $use_frequency;

        return $this;
    }

    /**
     * Get the value of use_frequency.
     *
     * @return integer
     */
    public function getUseFrequency()
    {
        return $this->use_frequency;
    }

    /**
     * Set the value of status.
     *
     * @param string $status
     * @return \Entity\CareDiagnosisLocalcode
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
     * @return \Entity\CareDiagnosisLocalcode
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
     * @return \Entity\CareDiagnosisLocalcode
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
     * @return \Entity\CareDiagnosisLocalcode
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
     * @return \Entity\CareDiagnosisLocalcode
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
     * @return \Entity\CareDiagnosisLocalcode
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
        return array('localcode', 'description', 'class_sub', 'type', 'inclusive', 'exclusive', 'notes', 'std_code', 'sub_level', 'remarks', 'extra_codes', 'extra_subclass', 'search_keys', 'use_frequency', 'status', 'history', 'modify_id', 'modify_time', 'create_id', 'create_time');
    }
}