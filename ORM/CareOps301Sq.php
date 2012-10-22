<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\CareOps301Sq
 *
 * @ORM\Entity(repositoryClass="CareOps301SqRepository")
 * @ORM\Table(name="care_ops301_sq", indexes={@ORM\Index(name="code", columns={"code"})})
 */
class CareOps301Sq
{
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

    public function __construct()
    {
    }

    /**
     * Set the value of code.
     *
     * @param string $code
     * @return \Entity\CareOps301Sq
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
     * @return \Entity\CareOps301Sq
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
     * Set the value of inclusive.
     *
     * @param string $inclusive
     * @return \Entity\CareOps301Sq
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
     * @return \Entity\CareOps301Sq
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
     * @return \Entity\CareOps301Sq
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
     * @return \Entity\CareOps301Sq
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
     * @return \Entity\CareOps301Sq
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
     * @return \Entity\CareOps301Sq
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

    public function __sleep()
    {
        return array('code', 'description', 'inclusive', 'exclusive', 'notes', 'std_code', 'sub_level', 'remarks');
    }
}