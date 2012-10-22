<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\CareWard
 *
 * InnoDB free: 7168 kB
 *
 * @ORM\Entity(repositoryClass="CareWardRepository")
 * @ORM\Table(name="care_ward", indexes={@ORM\Index(name="ward_id", columns={"ward_id"})})
 */
class CareWard
{
    /**
     * @ORM\Id
     * @ORM\Column(type="smallint")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $nr;

    /**
     * @ORM\Column(type="string", length=35)
     */
    protected $ward_id;

    /**
     * @ORM\Column(type="string", length=35)
     */
    protected $name;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $is_temp_closed;

    /**
     * @ORM\Column(type="date")
     */
    protected $date_create;

    /**
     * @ORM\Column(type="date")
     */
    protected $date_close;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $description;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $info;

    /**
     * @ORM\Column(type="smallint")
     */
    protected $dept_nr;

    /**
     * @ORM\Column(type="smallint")
     */
    protected $room_nr_start;

    /**
     * @ORM\Column(type="smallint")
     */
    protected $room_nr_end;

    /**
     * @ORM\Column(type="string", length=4, nullable=true)
     */
    protected $roomprefix;

    /**
     * @ORM\Column(type="string", length=25)
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
     * @return \Entity\CareWard
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
     * Set the value of ward_id.
     *
     * @param string $ward_id
     * @return \Entity\CareWard
     */
    public function setWardId($ward_id)
    {
        $this->ward_id = $ward_id;

        return $this;
    }

    /**
     * Get the value of ward_id.
     *
     * @return string
     */
    public function getWardId()
    {
        return $this->ward_id;
    }

    /**
     * Set the value of name.
     *
     * @param string $name
     * @return \Entity\CareWard
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
     * Set the value of is_temp_closed.
     *
     * @param boolean $is_temp_closed
     * @return \Entity\CareWard
     */
    public function setIsTempClosed($is_temp_closed)
    {
        $this->is_temp_closed = $is_temp_closed;

        return $this;
    }

    /**
     * Get the value of is_temp_closed.
     *
     * @return boolean
     */
    public function getIsTempClosed()
    {
        return $this->is_temp_closed;
    }

    /**
     * Set the value of date_create.
     *
     * @param datetime $date_create
     * @return \Entity\CareWard
     */
    public function setDateCreate($date_create)
    {
        $this->date_create = $date_create;

        return $this;
    }

    /**
     * Get the value of date_create.
     *
     * @return datetime
     */
    public function getDateCreate()
    {
        return $this->date_create;
    }

    /**
     * Set the value of date_close.
     *
     * @param datetime $date_close
     * @return \Entity\CareWard
     */
    public function setDateClose($date_close)
    {
        $this->date_close = $date_close;

        return $this;
    }

    /**
     * Get the value of date_close.
     *
     * @return datetime
     */
    public function getDateClose()
    {
        return $this->date_close;
    }

    /**
     * Set the value of description.
     *
     * @param string $description
     * @return \Entity\CareWard
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
     * Set the value of info.
     *
     * @param string $info
     * @return \Entity\CareWard
     */
    public function setInfo($info)
    {
        $this->info = $info;

        return $this;
    }

    /**
     * Get the value of info.
     *
     * @return string
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * Set the value of dept_nr.
     *
     * @param integer $dept_nr
     * @return \Entity\CareWard
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
     * Set the value of room_nr_start.
     *
     * @param integer $room_nr_start
     * @return \Entity\CareWard
     */
    public function setRoomNrStart($room_nr_start)
    {
        $this->room_nr_start = $room_nr_start;

        return $this;
    }

    /**
     * Get the value of room_nr_start.
     *
     * @return integer
     */
    public function getRoomNrStart()
    {
        return $this->room_nr_start;
    }

    /**
     * Set the value of room_nr_end.
     *
     * @param integer $room_nr_end
     * @return \Entity\CareWard
     */
    public function setRoomNrEnd($room_nr_end)
    {
        $this->room_nr_end = $room_nr_end;

        return $this;
    }

    /**
     * Get the value of room_nr_end.
     *
     * @return integer
     */
    public function getRoomNrEnd()
    {
        return $this->room_nr_end;
    }

    /**
     * Set the value of roomprefix.
     *
     * @param string $roomprefix
     * @return \Entity\CareWard
     */
    public function setRoomprefix($roomprefix)
    {
        $this->roomprefix = $roomprefix;

        return $this;
    }

    /**
     * Get the value of roomprefix.
     *
     * @return string
     */
    public function getRoomprefix()
    {
        return $this->roomprefix;
    }

    /**
     * Set the value of status.
     *
     * @param string $status
     * @return \Entity\CareWard
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
     * @return \Entity\CareWard
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
     * @return \Entity\CareWard
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
     * @return \Entity\CareWard
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
     * @return \Entity\CareWard
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
     * @return \Entity\CareWard
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
        return array('nr', 'ward_id', 'name', 'is_temp_closed', 'date_create', 'date_close', 'description', 'info', 'dept_nr', 'room_nr_start', 'room_nr_end', 'roomprefix', 'status', 'history', 'modify_id', 'modify_time', 'create_id', 'create_time');
    }
}