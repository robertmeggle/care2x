<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\CarePersonOtherNumber
 *
 * InnoDB free: 9216 kB
 *
 * @ORM\Entity(repositoryClass="CarePersonOtherNumberRepository")
 * @ORM\Table(name="care_person_other_number", indexes={@ORM\Index(name="pid", columns={"pid"}), @ORM\Index(name="other_nr", columns={"other_nr"})})
 */
class CarePersonOtherNumber
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
    protected $pid;

    /**
     * @ORM\Column(type="string", length=30)
     */
    protected $other_nr;

    /**
     * @ORM\Column(type="string", length=35)
     */
    protected $org;

    /**
     * @ORM\Column(type="string", length=25)
     */
    protected $status;

    /**
     * @ORM\Column(type="text", nullable=true)
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
     * @return \Entity\CarePersonOtherNumber
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
     * Set the value of pid.
     *
     * @param integer $pid
     * @return \Entity\CarePersonOtherNumber
     */
    public function setPid($pid)
    {
        $this->pid = $pid;

        return $this;
    }

    /**
     * Get the value of pid.
     *
     * @return integer
     */
    public function getPid()
    {
        return $this->pid;
    }

    /**
     * Set the value of other_nr.
     *
     * @param string $other_nr
     * @return \Entity\CarePersonOtherNumber
     */
    public function setOtherNr($other_nr)
    {
        $this->other_nr = $other_nr;

        return $this;
    }

    /**
     * Get the value of other_nr.
     *
     * @return string
     */
    public function getOtherNr()
    {
        return $this->other_nr;
    }

    /**
     * Set the value of org.
     *
     * @param string $org
     * @return \Entity\CarePersonOtherNumber
     */
    public function setOrg($org)
    {
        $this->org = $org;

        return $this;
    }

    /**
     * Get the value of org.
     *
     * @return string
     */
    public function getOrg()
    {
        return $this->org;
    }

    /**
     * Set the value of status.
     *
     * @param string $status
     * @return \Entity\CarePersonOtherNumber
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
     * @return \Entity\CarePersonOtherNumber
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
     * @return \Entity\CarePersonOtherNumber
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
     * @return \Entity\CarePersonOtherNumber
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
     * @return \Entity\CarePersonOtherNumber
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
     * @return \Entity\CarePersonOtherNumber
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
        return array('nr', 'pid', 'other_nr', 'org', 'status', 'history', 'modify_id', 'modify_time', 'create_id', 'create_time');
    }
}