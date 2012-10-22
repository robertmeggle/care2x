<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\CareRoom
 *
 * InnoDB free: 8192 kB
 *
 * @ORM\Entity(repositoryClass="CareRoomRepository")
 * @ORM\Table(name="care_room", indexes={@ORM\Index(name="room_nr", columns={"room_nr"}), @ORM\Index(name="ward_nr", columns={"ward_nr"}), @ORM\Index(name="dept_nr", columns={"dept_nr"})})
 */
class CareRoom
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $nr;

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    protected $type_nr;

    /**
     * @ORM\Column(type="date")
     */
    protected $date_create;

    /**
     * @ORM\Column(type="date")
     */
    protected $date_close;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    protected $is_temp_closed;

    /**
     * @ORM\Column(type="smallint")
     */
    protected $room_nr;

    /**
     * @ORM\Id
     * @ORM\Column(type="smallint")
     */
    protected $ward_nr;

    /**
     * @ORM\Id
     * @ORM\Column(type="smallint")
     */
    protected $dept_nr;

    /**
     * @ORM\Column(type="integer")
     */
    protected $nr_of_beds;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $closed_beds;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    protected $info;

    /**
     * @ORM\Column(type="string", length=25)
     */
    protected $status;

    /**
     * @ORM\Column(type="text")
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
     * @return \Entity\CareRoom
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
     * Set the value of type_nr.
     *
     * @param integer $type_nr
     * @return \Entity\CareRoom
     */
    public function setTypeNr($type_nr)
    {
        $this->type_nr = $type_nr;

        return $this;
    }

    /**
     * Get the value of type_nr.
     *
     * @return integer
     */
    public function getTypeNr()
    {
        return $this->type_nr;
    }

    /**
     * Set the value of date_create.
     *
     * @param datetime $date_create
     * @return \Entity\CareRoom
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
     * @return \Entity\CareRoom
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
     * Set the value of is_temp_closed.
     *
     * @param boolean $is_temp_closed
     * @return \Entity\CareRoom
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
     * Set the value of room_nr.
     *
     * @param integer $room_nr
     * @return \Entity\CareRoom
     */
    public function setRoomNr($room_nr)
    {
        $this->room_nr = $room_nr;

        return $this;
    }

    /**
     * Get the value of room_nr.
     *
     * @return integer
     */
    public function getRoomNr()
    {
        return $this->room_nr;
    }

    /**
     * Set the value of ward_nr.
     *
     * @param integer $ward_nr
     * @return \Entity\CareRoom
     */
    public function setWardNr($ward_nr)
    {
        $this->ward_nr = $ward_nr;

        return $this;
    }

    /**
     * Get the value of ward_nr.
     *
     * @return integer
     */
    public function getWardNr()
    {
        return $this->ward_nr;
    }

    /**
     * Set the value of dept_nr.
     *
     * @param integer $dept_nr
     * @return \Entity\CareRoom
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
     * Set the value of nr_of_beds.
     *
     * @param integer $nr_of_beds
     * @return \Entity\CareRoom
     */
    public function setNrOfBeds($nr_of_beds)
    {
        $this->nr_of_beds = $nr_of_beds;

        return $this;
    }

    /**
     * Get the value of nr_of_beds.
     *
     * @return integer
     */
    public function getNrOfBeds()
    {
        return $this->nr_of_beds;
    }

    /**
     * Set the value of closed_beds.
     *
     * @param string $closed_beds
     * @return \Entity\CareRoom
     */
    public function setClosedBeds($closed_beds)
    {
        $this->closed_beds = $closed_beds;

        return $this;
    }

    /**
     * Get the value of closed_beds.
     *
     * @return string
     */
    public function getClosedBeds()
    {
        return $this->closed_beds;
    }

    /**
     * Set the value of info.
     *
     * @param string $info
     * @return \Entity\CareRoom
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
     * Set the value of status.
     *
     * @param string $status
     * @return \Entity\CareRoom
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
     * @return \Entity\CareRoom
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
     * @return \Entity\CareRoom
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
     * @return \Entity\CareRoom
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
     * @return \Entity\CareRoom
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
     * @return \Entity\CareRoom
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
        return array('nr', 'type_nr', 'date_create', 'date_close', 'is_temp_closed', 'room_nr', 'ward_nr', 'dept_nr', 'nr_of_beds', 'closed_beds', 'info', 'status', 'history', 'modify_id', 'modify_time', 'create_id', 'create_time');
    }
}