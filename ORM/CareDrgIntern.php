<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\CareDrgIntern
 *
 * InnoDB free: 11264 kB
 *
 * @ORM\Entity(repositoryClass="CareDrgInternRepository")
 * @ORM\Table(name="care_drg_intern", indexes={@ORM\Index(name="nr", columns={"nr"}), @ORM\Index(name="code", columns={"code"})})
 */
class CareDrgIntern
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $nr;

    /**
     * @ORM\Column(type="string", length=12)
     */
    protected $code;

    /**
     * @ORM\Column(type="text")
     */
    protected $description;

    /**
     * @ORM\Column(type="text")
     */
    protected $synonyms;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $notes;

    /**
     * @ORM\Column(type="string", length=1)
     */
    protected $std_code;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $sub_level;

    /**
     * @ORM\Column(type="string", length=12)
     */
    protected $parent_code;

    /**
     * @ORM\Column(type="string", length=25)
     */
    protected $status;

    /**
     * @ORM\Column(type="text")
     */
    protected $history;

    /**
     * @ORM\Column(type="string", length=25)
     */
    protected $modify_id;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $modify_time;

    /**
     * @ORM\Column(type="string", length=25)
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
     * @return \Entity\CareDrgIntern
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
     * Set the value of code.
     *
     * @param string $code
     * @return \Entity\CareDrgIntern
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
     * Set the value of description.
     *
     * @param string $description
     * @return \Entity\CareDrgIntern
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
     * Set the value of synonyms.
     *
     * @param string $synonyms
     * @return \Entity\CareDrgIntern
     */
    public function setSynonyms($synonyms)
    {
        $this->synonyms = $synonyms;

        return $this;
    }

    /**
     * Get the value of synonyms.
     *
     * @return string
     */
    public function getSynonyms()
    {
        return $this->synonyms;
    }

    /**
     * Set the value of notes.
     *
     * @param string $notes
     * @return \Entity\CareDrgIntern
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
     * @return \Entity\CareDrgIntern
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
     * @param boolean $sub_level
     * @return \Entity\CareDrgIntern
     */
    public function setSubLevel($sub_level)
    {
        $this->sub_level = $sub_level;

        return $this;
    }

    /**
     * Get the value of sub_level.
     *
     * @return boolean
     */
    public function getSubLevel()
    {
        return $this->sub_level;
    }

    /**
     * Set the value of parent_code.
     *
     * @param string $parent_code
     * @return \Entity\CareDrgIntern
     */
    public function setParentCode($parent_code)
    {
        $this->parent_code = $parent_code;

        return $this;
    }

    /**
     * Get the value of parent_code.
     *
     * @return string
     */
    public function getParentCode()
    {
        return $this->parent_code;
    }

    /**
     * Set the value of status.
     *
     * @param string $status
     * @return \Entity\CareDrgIntern
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
     * @return \Entity\CareDrgIntern
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
     * @return \Entity\CareDrgIntern
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
     * @return \Entity\CareDrgIntern
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
     * @return \Entity\CareDrgIntern
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
     * @return \Entity\CareDrgIntern
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
        return array('nr', 'code', 'description', 'synonyms', 'notes', 'std_code', 'sub_level', 'parent_code', 'status', 'history', 'modify_id', 'modify_time', 'create_id', 'create_time');
    }
}