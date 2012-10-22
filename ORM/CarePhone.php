<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\CarePhone
 *
 * InnoDB free: 9216 kB
 *
 * @ORM\Entity(repositoryClass="CarePhoneRepository")
 * @ORM\Table(name="care_phone", indexes={@ORM\Index(name="name", columns={"name"}), @ORM\Index(name="vorname", columns={"vorname"})})
 */
class CarePhone
{
    /**
     * @ORM\Id
     * @ORM\Column(type="bigint")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $item_nr;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    protected $title;

    /**
     * @ORM\Column(type="string", length=45)
     */
    protected $name;

    /**
     * @ORM\Column(type="string", length=45)
     */
    protected $vorname;

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    protected $pid;

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    protected $personell_nr;

    /**
     * @ORM\Id
     * @ORM\Column(type="smallint")
     */
    protected $dept_nr;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    protected $beruf;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    protected $bereich1;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    protected $bereich2;

    /**
     * @ORM\Column(type="string", length=15, nullable=true)
     */
    protected $inphone1;

    /**
     * @ORM\Column(type="string", length=15, nullable=true)
     */
    protected $inphone2;

    /**
     * @ORM\Column(type="string", length=15, nullable=true)
     */
    protected $inphone3;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    protected $exphone1;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    protected $exphone2;

    /**
     * @ORM\Column(type="string", length=15, nullable=true)
     */
    protected $funk1;

    /**
     * @ORM\Column(type="string", length=15, nullable=true)
     */
    protected $funk2;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    protected $roomnr;

    /**
     * @ORM\Column(type="date")
     */
    protected $date;

    /**
     * @ORM\Column(type="time")
     */
    protected $time;

    /**
     * @ORM\Column(type="string", length=15)
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
     * Set the value of item_nr.
     *
     * @param integer $item_nr
     * @return \Entity\CarePhone
     */
    public function setItemNr($item_nr)
    {
        $this->item_nr = $item_nr;

        return $this;
    }

    /**
     * Get the value of item_nr.
     *
     * @return integer
     */
    public function getItemNr()
    {
        return $this->item_nr;
    }

    /**
     * Set the value of title.
     *
     * @param string $title
     * @return \Entity\CarePhone
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of title.
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of name.
     *
     * @param string $name
     * @return \Entity\CarePhone
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
     * Set the value of vorname.
     *
     * @param string $vorname
     * @return \Entity\CarePhone
     */
    public function setVorname($vorname)
    {
        $this->vorname = $vorname;

        return $this;
    }

    /**
     * Get the value of vorname.
     *
     * @return string
     */
    public function getVorname()
    {
        return $this->vorname;
    }

    /**
     * Set the value of pid.
     *
     * @param integer $pid
     * @return \Entity\CarePhone
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
     * Set the value of personell_nr.
     *
     * @param integer $personell_nr
     * @return \Entity\CarePhone
     */
    public function setPersonellNr($personell_nr)
    {
        $this->personell_nr = $personell_nr;

        return $this;
    }

    /**
     * Get the value of personell_nr.
     *
     * @return integer
     */
    public function getPersonellNr()
    {
        return $this->personell_nr;
    }

    /**
     * Set the value of dept_nr.
     *
     * @param integer $dept_nr
     * @return \Entity\CarePhone
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
     * Set the value of beruf.
     *
     * @param string $beruf
     * @return \Entity\CarePhone
     */
    public function setBeruf($beruf)
    {
        $this->beruf = $beruf;

        return $this;
    }

    /**
     * Get the value of beruf.
     *
     * @return string
     */
    public function getBeruf()
    {
        return $this->beruf;
    }

    /**
     * Set the value of bereich1.
     *
     * @param string $bereich1
     * @return \Entity\CarePhone
     */
    public function setBereich1($bereich1)
    {
        $this->bereich1 = $bereich1;

        return $this;
    }

    /**
     * Get the value of bereich1.
     *
     * @return string
     */
    public function getBereich1()
    {
        return $this->bereich1;
    }

    /**
     * Set the value of bereich2.
     *
     * @param string $bereich2
     * @return \Entity\CarePhone
     */
    public function setBereich2($bereich2)
    {
        $this->bereich2 = $bereich2;

        return $this;
    }

    /**
     * Get the value of bereich2.
     *
     * @return string
     */
    public function getBereich2()
    {
        return $this->bereich2;
    }

    /**
     * Set the value of inphone1.
     *
     * @param string $inphone1
     * @return \Entity\CarePhone
     */
    public function setInphone1($inphone1)
    {
        $this->inphone1 = $inphone1;

        return $this;
    }

    /**
     * Get the value of inphone1.
     *
     * @return string
     */
    public function getInphone1()
    {
        return $this->inphone1;
    }

    /**
     * Set the value of inphone2.
     *
     * @param string $inphone2
     * @return \Entity\CarePhone
     */
    public function setInphone2($inphone2)
    {
        $this->inphone2 = $inphone2;

        return $this;
    }

    /**
     * Get the value of inphone2.
     *
     * @return string
     */
    public function getInphone2()
    {
        return $this->inphone2;
    }

    /**
     * Set the value of inphone3.
     *
     * @param string $inphone3
     * @return \Entity\CarePhone
     */
    public function setInphone3($inphone3)
    {
        $this->inphone3 = $inphone3;

        return $this;
    }

    /**
     * Get the value of inphone3.
     *
     * @return string
     */
    public function getInphone3()
    {
        return $this->inphone3;
    }

    /**
     * Set the value of exphone1.
     *
     * @param string $exphone1
     * @return \Entity\CarePhone
     */
    public function setExphone1($exphone1)
    {
        $this->exphone1 = $exphone1;

        return $this;
    }

    /**
     * Get the value of exphone1.
     *
     * @return string
     */
    public function getExphone1()
    {
        return $this->exphone1;
    }

    /**
     * Set the value of exphone2.
     *
     * @param string $exphone2
     * @return \Entity\CarePhone
     */
    public function setExphone2($exphone2)
    {
        $this->exphone2 = $exphone2;

        return $this;
    }

    /**
     * Get the value of exphone2.
     *
     * @return string
     */
    public function getExphone2()
    {
        return $this->exphone2;
    }

    /**
     * Set the value of funk1.
     *
     * @param string $funk1
     * @return \Entity\CarePhone
     */
    public function setFunk1($funk1)
    {
        $this->funk1 = $funk1;

        return $this;
    }

    /**
     * Get the value of funk1.
     *
     * @return string
     */
    public function getFunk1()
    {
        return $this->funk1;
    }

    /**
     * Set the value of funk2.
     *
     * @param string $funk2
     * @return \Entity\CarePhone
     */
    public function setFunk2($funk2)
    {
        $this->funk2 = $funk2;

        return $this;
    }

    /**
     * Get the value of funk2.
     *
     * @return string
     */
    public function getFunk2()
    {
        return $this->funk2;
    }

    /**
     * Set the value of roomnr.
     *
     * @param string $roomnr
     * @return \Entity\CarePhone
     */
    public function setRoomnr($roomnr)
    {
        $this->roomnr = $roomnr;

        return $this;
    }

    /**
     * Get the value of roomnr.
     *
     * @return string
     */
    public function getRoomnr()
    {
        return $this->roomnr;
    }

    /**
     * Set the value of date.
     *
     * @param datetime $date
     * @return \Entity\CarePhone
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get the value of date.
     *
     * @return datetime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set the value of time.
     *
     * @param datetime $time
     * @return \Entity\CarePhone
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
     * Set the value of status.
     *
     * @param string $status
     * @return \Entity\CarePhone
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
     * @return \Entity\CarePhone
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
     * @return \Entity\CarePhone
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
     * @return \Entity\CarePhone
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
     * @return \Entity\CarePhone
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
     * @return \Entity\CarePhone
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
        return array('item_nr', 'title', 'name', 'vorname', 'pid', 'personell_nr', 'dept_nr', 'beruf', 'bereich1', 'bereich2', 'inphone1', 'inphone2', 'inphone3', 'exphone1', 'exphone2', 'funk1', 'funk2', 'roomnr', 'date', 'time', 'status', 'history', 'modify_id', 'modify_time', 'create_id', 'create_time');
    }
}