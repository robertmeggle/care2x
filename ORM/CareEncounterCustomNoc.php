<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\CareEncounterCustomNoc
 *
 * InnoDB free: 10240 kB
 *
 * @ORM\Entity(repositoryClass="CareEncounterCustomNocRepository")
 * @ORM\Table(name="care_encounter_custom_noc")
 */
class CareEncounterCustomNoc
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
     * @ORM\Column(type="datetime")
     */
    protected $indatetime;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $verbal;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $moton;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $eyes;

    /**
     * @ORM\Column(type="string", length=64)
     */
    protected $createid;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $createtime;

    public function __construct()
    {
    }

    /**
     * Set the value of nr.
     *
     * @param integer $nr
     * @return \Entity\CareEncounterCustomNoc
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
     * @return \Entity\CareEncounterCustomNoc
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
     * Set the value of indatetime.
     *
     * @param datetime $indatetime
     * @return \Entity\CareEncounterCustomNoc
     */
    public function setIndatetime($indatetime)
    {
        $this->indatetime = $indatetime;

        return $this;
    }

    /**
     * Get the value of indatetime.
     *
     * @return datetime
     */
    public function getIndatetime()
    {
        return $this->indatetime;
    }

    /**
     * Set the value of verbal.
     *
     * @param boolean $verbal
     * @return \Entity\CareEncounterCustomNoc
     */
    public function setVerbal($verbal)
    {
        $this->verbal = $verbal;

        return $this;
    }

    /**
     * Get the value of verbal.
     *
     * @return boolean
     */
    public function getVerbal()
    {
        return $this->verbal;
    }

    /**
     * Set the value of moton.
     *
     * @param boolean $moton
     * @return \Entity\CareEncounterCustomNoc
     */
    public function setMoton($moton)
    {
        $this->moton = $moton;

        return $this;
    }

    /**
     * Get the value of moton.
     *
     * @return boolean
     */
    public function getMoton()
    {
        return $this->moton;
    }

    /**
     * Set the value of eyes.
     *
     * @param boolean $eyes
     * @return \Entity\CareEncounterCustomNoc
     */
    public function setEyes($eyes)
    {
        $this->eyes = $eyes;

        return $this;
    }

    /**
     * Get the value of eyes.
     *
     * @return boolean
     */
    public function getEyes()
    {
        return $this->eyes;
    }

    /**
     * Set the value of createid.
     *
     * @param string $createid
     * @return \Entity\CareEncounterCustomNoc
     */
    public function setCreateid($createid)
    {
        $this->createid = $createid;

        return $this;
    }

    /**
     * Get the value of createid.
     *
     * @return string
     */
    public function getCreateid()
    {
        return $this->createid;
    }

    /**
     * Set the value of createtime.
     *
     * @param datetime $createtime
     * @return \Entity\CareEncounterCustomNoc
     */
    public function setCreatetime($createtime)
    {
        $this->createtime = $createtime;

        return $this;
    }

    /**
     * Get the value of createtime.
     *
     * @return datetime
     */
    public function getCreatetime()
    {
        return $this->createtime;
    }

    public function __sleep()
    {
        return array('nr', 'encounter_nr', 'indatetime', 'verbal', 'moton', 'eyes', 'createid', 'createtime');
    }
}