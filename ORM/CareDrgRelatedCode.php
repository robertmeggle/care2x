<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\CareDrgRelatedCode
 *
 * InnoDB free: 11264 kB
 *
 * @ORM\Entity(repositoryClass="CareDrgRelatedCodeRepository")
 * @ORM\Table(name="care_drg_related_codes")
 */
class CareDrgRelatedCode
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
    protected $group_nr;

    /**
     * @ORM\Column(type="string", length=15)
     */
    protected $code;

    /**
     * @ORM\Column(type="string", length=15)
     */
    protected $code_parent;

    /**
     * @ORM\Column(type="string", length=15)
     */
    protected $code_type;

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
     * @return \Entity\CareDrgRelatedCode
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
     * Set the value of group_nr.
     *
     * @param integer $group_nr
     * @return \Entity\CareDrgRelatedCode
     */
    public function setGroupNr($group_nr)
    {
        $this->group_nr = $group_nr;

        return $this;
    }

    /**
     * Get the value of group_nr.
     *
     * @return integer
     */
    public function getGroupNr()
    {
        return $this->group_nr;
    }

    /**
     * Set the value of code.
     *
     * @param string $code
     * @return \Entity\CareDrgRelatedCode
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
     * @return \Entity\CareDrgRelatedCode
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
     * Set the value of code_type.
     *
     * @param string $code_type
     * @return \Entity\CareDrgRelatedCode
     */
    public function setCodeType($code_type)
    {
        $this->code_type = $code_type;

        return $this;
    }

    /**
     * Get the value of code_type.
     *
     * @return string
     */
    public function getCodeType()
    {
        return $this->code_type;
    }

    /**
     * Set the value of rank.
     *
     * @param integer $rank
     * @return \Entity\CareDrgRelatedCode
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
     * @return \Entity\CareDrgRelatedCode
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
     * @return \Entity\CareDrgRelatedCode
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
     * @return \Entity\CareDrgRelatedCode
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
     * @return \Entity\CareDrgRelatedCode
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
     * @return \Entity\CareDrgRelatedCode
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
     * @return \Entity\CareDrgRelatedCode
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
        return array('nr', 'group_nr', 'code', 'code_parent', 'code_type', 'rank', 'status', 'history', 'modify_id', 'modify_time', 'create_id', 'create_time');
    }
}