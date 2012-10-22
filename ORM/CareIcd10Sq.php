<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\CareIcd10Sq
 *
 * InnoDB free: 10240 kB
 *
 * @ORM\Entity(repositoryClass="CareIcd10SqRepository")
 * @ORM\Table(name="care_icd10_sq", indexes={@ORM\Index(name="diagnosis_code", columns={"diagnosis_code"}), @ORM\Index(name="std_code", columns={"std_code"})})
 */
class CareIcd10Sq
{
    /**
     * @ORM\Column(type="string", length=12, nullable=true)
     */
    protected $diagnosis_code;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $description;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    protected $class_sub;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    protected $type;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $inclusive;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $exclusive;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $notes;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    protected $std_code;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $sub_level;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $remarks;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $extra_codes;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $extra_subclass;

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    public function __construct()
    {
    }

    /**
     * Set the value of diagnosis_code.
     *
     * @param string $diagnosis_code
     * @return \Entity\CareIcd10Sq
     */
    public function setDiagnosisCode($diagnosis_code)
    {
        $this->diagnosis_code = $diagnosis_code;

        return $this;
    }

    /**
     * Get the value of diagnosis_code.
     *
     * @return string
     */
    public function getDiagnosisCode()
    {
        return $this->diagnosis_code;
    }

    /**
     * Set the value of description.
     *
     * @param string $description
     * @return \Entity\CareIcd10Sq
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
     * @return \Entity\CareIcd10Sq
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
     * @return \Entity\CareIcd10Sq
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
     * @return \Entity\CareIcd10Sq
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
     * @return \Entity\CareIcd10Sq
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
     * @return \Entity\CareIcd10Sq
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
     * @return \Entity\CareIcd10Sq
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
     * @return \Entity\CareIcd10Sq
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
     * @return \Entity\CareIcd10Sq
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
     * @return \Entity\CareIcd10Sq
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
     * @return \Entity\CareIcd10Sq
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
     * Set the value of id.
     *
     * @param integer $id
     * @return \Entity\CareIcd10Sq
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of id.
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    public function __sleep()
    {
        return array('diagnosis_code', 'description', 'class_sub', 'type', 'inclusive', 'exclusive', 'notes', 'std_code', 'sub_level', 'remarks', 'extra_codes', 'extra_subclass', 'id');
    }
}