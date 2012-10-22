<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\CareEncounterCustomDdc
 *
 * InnoDB free: 10240 kB
 *
 * @ORM\Entity(repositoryClass="CareEncounterCustomDdcRepository")
 * @ORM\Table(name="care_encounter_custom_ddc")
 */
class CareEncounterCustomDdc
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
     * @ORM\Column(type="string", length=35)
     */
    protected $urinesugar;

    /**
     * @ORM\Column(type="string", length=35)
     */
    protected $acetone;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2)
     */
    protected $bloodsugar;

    /**
     * @ORM\Column(type="string", length=35)
     */
    protected $tablets;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2)
     */
    protected $insulin;

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
     * @return \Entity\CareEncounterCustomDdc
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
     * @return \Entity\CareEncounterCustomDdc
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
     * @return \Entity\CareEncounterCustomDdc
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
     * Set the value of urinesugar.
     *
     * @param string $urinesugar
     * @return \Entity\CareEncounterCustomDdc
     */
    public function setUrinesugar($urinesugar)
    {
        $this->urinesugar = $urinesugar;

        return $this;
    }

    /**
     * Get the value of urinesugar.
     *
     * @return string
     */
    public function getUrinesugar()
    {
        return $this->urinesugar;
    }

    /**
     * Set the value of acetone.
     *
     * @param string $acetone
     * @return \Entity\CareEncounterCustomDdc
     */
    public function setAcetone($acetone)
    {
        $this->acetone = $acetone;

        return $this;
    }

    /**
     * Get the value of acetone.
     *
     * @return string
     */
    public function getAcetone()
    {
        return $this->acetone;
    }

    /**
     * Set the value of bloodsugar.
     *
     * @param float $bloodsugar
     * @return \Entity\CareEncounterCustomDdc
     */
    public function setBloodsugar($bloodsugar)
    {
        $this->bloodsugar = $bloodsugar;

        return $this;
    }

    /**
     * Get the value of bloodsugar.
     *
     * @return float
     */
    public function getBloodsugar()
    {
        return $this->bloodsugar;
    }

    /**
     * Set the value of tablets.
     *
     * @param string $tablets
     * @return \Entity\CareEncounterCustomDdc
     */
    public function setTablets($tablets)
    {
        $this->tablets = $tablets;

        return $this;
    }

    /**
     * Get the value of tablets.
     *
     * @return string
     */
    public function getTablets()
    {
        return $this->tablets;
    }

    /**
     * Set the value of insulin.
     *
     * @param float $insulin
     * @return \Entity\CareEncounterCustomDdc
     */
    public function setInsulin($insulin)
    {
        $this->insulin = $insulin;

        return $this;
    }

    /**
     * Get the value of insulin.
     *
     * @return float
     */
    public function getInsulin()
    {
        return $this->insulin;
    }

    /**
     * Set the value of createid.
     *
     * @param string $createid
     * @return \Entity\CareEncounterCustomDdc
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
     * @return \Entity\CareEncounterCustomDdc
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
        return array('nr', 'encounter_nr', 'indatetime', 'urinesugar', 'acetone', 'bloodsugar', 'tablets', 'insulin', 'createid', 'createtime');
    }
}