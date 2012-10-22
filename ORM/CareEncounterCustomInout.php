<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\CareEncounterCustomInout
 *
 * InnoDB free: 10240 kB
 *
 * @ORM\Entity(repositoryClass="CareEncounterCustomInoutRepository")
 * @ORM\Table(name="care_encounter_custom_inout")
 */
class CareEncounterCustomInout
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
     * @ORM\Column(type="decimal", precision=10, scale=2)
     */
    protected $pint;

    /**
     * @ORM\Column(type="string", length=32)
     */
    protected $solution;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2)
     */
    protected $solutionamount;

    /**
     * @ORM\Column(type="string", length=6)
     */
    protected $initial;

    /**
     * @ORM\Column(type="string", length=32)
     */
    protected $oralfluid;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2)
     */
    protected $oralfluidamount;

    /**
     * @ORM\Column(type="time")
     */
    protected $urinetime;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2)
     */
    protected $urineamount;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2)
     */
    protected $rta;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2)
     */
    protected $drain;

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
     * @return \Entity\CareEncounterCustomInout
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
     * @return \Entity\CareEncounterCustomInout
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
     * @return \Entity\CareEncounterCustomInout
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
     * Set the value of pint.
     *
     * @param float $pint
     * @return \Entity\CareEncounterCustomInout
     */
    public function setPint($pint)
    {
        $this->pint = $pint;

        return $this;
    }

    /**
     * Get the value of pint.
     *
     * @return float
     */
    public function getPint()
    {
        return $this->pint;
    }

    /**
     * Set the value of solution.
     *
     * @param string $solution
     * @return \Entity\CareEncounterCustomInout
     */
    public function setSolution($solution)
    {
        $this->solution = $solution;

        return $this;
    }

    /**
     * Get the value of solution.
     *
     * @return string
     */
    public function getSolution()
    {
        return $this->solution;
    }

    /**
     * Set the value of solutionamount.
     *
     * @param float $solutionamount
     * @return \Entity\CareEncounterCustomInout
     */
    public function setSolutionamount($solutionamount)
    {
        $this->solutionamount = $solutionamount;

        return $this;
    }

    /**
     * Get the value of solutionamount.
     *
     * @return float
     */
    public function getSolutionamount()
    {
        return $this->solutionamount;
    }

    /**
     * Set the value of initial.
     *
     * @param string $initial
     * @return \Entity\CareEncounterCustomInout
     */
    public function setInitial($initial)
    {
        $this->initial = $initial;

        return $this;
    }

    /**
     * Get the value of initial.
     *
     * @return string
     */
    public function getInitial()
    {
        return $this->initial;
    }

    /**
     * Set the value of oralfluid.
     *
     * @param string $oralfluid
     * @return \Entity\CareEncounterCustomInout
     */
    public function setOralfluid($oralfluid)
    {
        $this->oralfluid = $oralfluid;

        return $this;
    }

    /**
     * Get the value of oralfluid.
     *
     * @return string
     */
    public function getOralfluid()
    {
        return $this->oralfluid;
    }

    /**
     * Set the value of oralfluidamount.
     *
     * @param float $oralfluidamount
     * @return \Entity\CareEncounterCustomInout
     */
    public function setOralfluidamount($oralfluidamount)
    {
        $this->oralfluidamount = $oralfluidamount;

        return $this;
    }

    /**
     * Get the value of oralfluidamount.
     *
     * @return float
     */
    public function getOralfluidamount()
    {
        return $this->oralfluidamount;
    }

    /**
     * Set the value of urinetime.
     *
     * @param datetime $urinetime
     * @return \Entity\CareEncounterCustomInout
     */
    public function setUrinetime($urinetime)
    {
        $this->urinetime = $urinetime;

        return $this;
    }

    /**
     * Get the value of urinetime.
     *
     * @return datetime
     */
    public function getUrinetime()
    {
        return $this->urinetime;
    }

    /**
     * Set the value of urineamount.
     *
     * @param float $urineamount
     * @return \Entity\CareEncounterCustomInout
     */
    public function setUrineamount($urineamount)
    {
        $this->urineamount = $urineamount;

        return $this;
    }

    /**
     * Get the value of urineamount.
     *
     * @return float
     */
    public function getUrineamount()
    {
        return $this->urineamount;
    }

    /**
     * Set the value of rta.
     *
     * @param float $rta
     * @return \Entity\CareEncounterCustomInout
     */
    public function setRta($rta)
    {
        $this->rta = $rta;

        return $this;
    }

    /**
     * Get the value of rta.
     *
     * @return float
     */
    public function getRta()
    {
        return $this->rta;
    }

    /**
     * Set the value of drain.
     *
     * @param float $drain
     * @return \Entity\CareEncounterCustomInout
     */
    public function setDrain($drain)
    {
        $this->drain = $drain;

        return $this;
    }

    /**
     * Get the value of drain.
     *
     * @return float
     */
    public function getDrain()
    {
        return $this->drain;
    }

    /**
     * Set the value of createid.
     *
     * @param string $createid
     * @return \Entity\CareEncounterCustomInout
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
     * @return \Entity\CareEncounterCustomInout
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
        return array('nr', 'encounter_nr', 'indatetime', 'pint', 'solution', 'solutionamount', 'initial', 'oralfluid', 'oralfluidamount', 'urinetime', 'urineamount', 'rta', 'drain', 'createid', 'createtime');
    }
}