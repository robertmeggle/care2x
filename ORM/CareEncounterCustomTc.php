<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\CareEncounterCustomTc
 *
 * InnoDB free: 10240 kB
 *
 * @ORM\Entity(repositoryClass="CareEncounterCustomTcRepository")
 * @ORM\Table(name="care_encounter_custom_tc")
 */
class CareEncounterCustomTc
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
     * @ORM\Column(type="string", length=64)
     */
    protected $createid;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $createtime;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $indatetime;

    /**
     * @ORM\Column(type="time")
     */
    protected $time;

    /**
     * @ORM\Column(type="string", length=32)
     */
    protected $position;

    public function __construct()
    {
    }

    /**
     * Set the value of nr.
     *
     * @param integer $nr
     * @return \Entity\CareEncounterCustomTc
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
     * @return \Entity\CareEncounterCustomTc
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
     * Set the value of createid.
     *
     * @param string $createid
     * @return \Entity\CareEncounterCustomTc
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
     * @return \Entity\CareEncounterCustomTc
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

    /**
     * Set the value of indatetime.
     *
     * @param datetime $indatetime
     * @return \Entity\CareEncounterCustomTc
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
     * Set the value of time.
     *
     * @param datetime $time
     * @return \Entity\CareEncounterCustomTc
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
     * Set the value of position.
     *
     * @param string $position
     * @return \Entity\CareEncounterCustomTc
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get the value of position.
     *
     * @return string
     */
    public function getPosition()
    {
        return $this->position;
    }

    public function __sleep()
    {
        return array('nr', 'encounter_nr', 'createid', 'createtime', 'indatetime', 'time', 'position');
    }
}