<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\CareDrgQuicklist
 *
 * InnoDB free: 11264 kB
 *
 * @ORM\Entity(repositoryClass="CareDrgQuicklistRepository")
 * @ORM\Table(name="care_drg_quicklist")
 */
class CareDrgQuicklist
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $nr;

    /**
     * @ORM\Column(type="string", length=25)
     */
    protected $code;

    /**
     * @ORM\Column(type="string", length=25)
     */
    protected $code_parent;

    /**
     * @ORM\Column(type="smallint")
     */
    protected $dept_nr;

    /**
     * @ORM\Column(type="string", length=25)
     */
    protected $qlist_type;

    /**
     * @ORM\Column(type="integer")
     */
    protected $rank;

    /**
     * @ORM\Column(type="string", length=15)
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
     * @return \Entity\CareDrgQuicklist
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
     * @return \Entity\CareDrgQuicklist
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
     * Set the value of code_parent.
     *
     * @param string $code_parent
     * @return \Entity\CareDrgQuicklist
     */
    public function setCodeParent($code_parent)
    {
        $this->code_parent = $code_parent;

        return $this;
    }

    /**
     * Get the value of code_parent.
     *
     * @return string
     */
    public function getCodeParent()
    {
        return $this->code_parent;
    }

    /**
     * Set the value of dept_nr.
     *
     * @param integer $dept_nr
     * @return \Entity\CareDrgQuicklist
     */
    public function setDeptNr($dept_nr)
    {
        $this->dept_nr = $dept_nr;

        return $this;
    }

    /**
     * Get the value of dept_nr.
     *
     * @return integer
     */
    public function getDeptNr()
    {
        return $this->dept_nr;
    }

    /**
     * Set the value of qlist_type.
     *
     * @param string $qlist_type
     * @return \Entity\CareDrgQuicklist
     */
    public function setQlistType($qlist_type)
    {
        $this->qlist_type = $qlist_type;

        return $this;
    }

    /**
     * Get the value of qlist_type.
     *
     * @return string
     */
    public function getQlistType()
    {
        return $this->qlist_type;
    }

    /**
     * Set the value of rank.
     *
     * @param integer $rank
     * @return \Entity\CareDrgQuicklist
     */
    public function setRank($rank)
    {
        $this->rank = $rank;

        return $this;
    }

    /**
     * Get the value of rank.
     *
     * @return integer
     */
    public function getRank()
    {
        return $this->rank;
    }

    /**
     * Set the value of status.
     *
     * @param string $status
     * @return \Entity\CareDrgQuicklist
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
     * @return \Entity\CareDrgQuicklist
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
     * @return \Entity\CareDrgQuicklist
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
     * @return \Entity\CareDrgQuicklist
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
     * @return \Entity\CareDrgQuicklist
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
     * @return \Entity\CareDrgQuicklist
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
        return array('nr', 'code', 'code_parent', 'dept_nr', 'qlist_type', 'rank', 'status', 'history', 'modify_id', 'modify_time', 'create_id', 'create_time');
    }
}