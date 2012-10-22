<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\CareTypeImmunization
 *
 * InnoDB free: 7168 kB
 *
 * @ORM\Entity(repositoryClass="CareTypeImmunizationRepository")
 * @ORM\Table(name="care_type_immunization")
 */
class CareTypeImmunization
{
    /**
     * @ORM\Id
     * @ORM\Column(type="smallint")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $nr;

    /**
     * Immunization type
     *
     * @ORM\Column(type="string", length=20)
     */
    protected $type;

    /**
     * @ORM\Column(type="string", length=20)
     */
    protected $name;

    /**
     * @ORM\Column(type="string", length=35)
     */
    protected $LD_var;

    /**
     * period..in days ?
     *
     * @ORM\Column(type="smallint", nullable=true)
     */
    protected $period;

    /**
     * @ORM\Column(type="smallint", nullable=true)
     */
    protected $tolerance;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $dosage;

    /**
     * @ORM\Column(type="text")
     */
    protected $medicine;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $titer;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $note;

    /**
     * from care_type_application...application type
     *
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $application;

    /**
     * @ORM\Column(type="string", length=25)
     */
    protected $status;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $history;

    /**
     * @ORM\Column(type="string", length=35, nullable=true)
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
     * @return \Entity\CareTypeImmunization
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
     * Set the value of type.
     *
     * @param string $type
     * @return \Entity\CareTypeImmunization
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
     * Set the value of name.
     *
     * @param string $name
     * @return \Entity\CareTypeImmunization
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of LD_var.
     *
     * @param string $LD_var
     * @return \Entity\CareTypeImmunization
     */
    public function setLDVar($LD_var)
    {
        $this->LD_var = $LD_var;

        return $this;
    }

    /**
     * Get the value of LD_var.
     *
     * @return string
     */
    public function getLDVar()
    {
        return $this->LD_var;
    }

    /**
     * Set the value of period.
     *
     * @param integer $period
     * @return \Entity\CareTypeImmunization
     */
    public function setPeriod($period)
    {
        $this->period = $period;

        return $this;
    }

    /**
     * Get the value of period.
     *
     * @return integer
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Set the value of tolerance.
     *
     * @param integer $tolerance
     * @return \Entity\CareTypeImmunization
     */
    public function setTolerance($tolerance)
    {
        $this->tolerance = $tolerance;

        return $this;
    }

    /**
     * Get the value of tolerance.
     *
     * @return integer
     */
    public function getTolerance()
    {
        return $this->tolerance;
    }

    /**
     * Set the value of dosage.
     *
     * @param string $dosage
     * @return \Entity\CareTypeImmunization
     */
    public function setDosage($dosage)
    {
        $this->dosage = $dosage;

        return $this;
    }

    /**
     * Get the value of dosage.
     *
     * @return string
     */
    public function getDosage()
    {
        return $this->dosage;
    }

    /**
     * Set the value of medicine.
     *
     * @param string $medicine
     * @return \Entity\CareTypeImmunization
     */
    public function setMedicine($medicine)
    {
        $this->medicine = $medicine;

        return $this;
    }

    /**
     * Get the value of medicine.
     *
     * @return string
     */
    public function getMedicine()
    {
        return $this->medicine;
    }

    /**
     * Set the value of titer.
     *
     * @param string $titer
     * @return \Entity\CareTypeImmunization
     */
    public function setTiter($titer)
    {
        $this->titer = $titer;

        return $this;
    }

    /**
     * Get the value of titer.
     *
     * @return string
     */
    public function getTiter()
    {
        return $this->titer;
    }

    /**
     * Set the value of note.
     *
     * @param string $note
     * @return \Entity\CareTypeImmunization
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get the value of note.
     *
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set the value of application.
     *
     * @param integer $application
     * @return \Entity\CareTypeImmunization
     */
    public function setApplication($application)
    {
        $this->application = $application;

        return $this;
    }

    /**
     * Get the value of application.
     *
     * @return integer
     */
    public function getApplication()
    {
        return $this->application;
    }

    /**
     * Set the value of status.
     *
     * @param string $status
     * @return \Entity\CareTypeImmunization
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
     * @return \Entity\CareTypeImmunization
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
     * @return \Entity\CareTypeImmunization
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
     * @return \Entity\CareTypeImmunization
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
     * @return \Entity\CareTypeImmunization
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
     * @return \Entity\CareTypeImmunization
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
        return array('nr', 'type', 'name', 'LD_var', 'period', 'tolerance', 'dosage', 'medicine', 'titer', 'note', 'application', 'status', 'history', 'modify_id', 'modify_time', 'create_id', 'create_time');
    }
}