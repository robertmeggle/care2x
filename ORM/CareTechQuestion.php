<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\CareTechQuestion
 *
 * InnoDB free: 8192 kB
 *
 * @ORM\Entity(repositoryClass="CareTechQuestionRepository")
 * @ORM\Table(name="care_tech_questions", indexes={@ORM\Index(name="batch_nr", columns={"batch_nr"})})
 */
class CareTechQuestion
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $batch_nr;

    /**
     * @ORM\Column(type="string", length=60)
     */
    protected $dept;

    /**
     * @ORM\Column(type="text")
     */
    protected $query;

    /**
     * @ORM\Column(type="string", length=25)
     */
    protected $inquirer;

    /**
     * @ORM\Column(type="string", length=30)
     */
    protected $tphone;

    /**
     * @ORM\Column(type="date")
     */
    protected $tdate;

    /**
     * @ORM\Column(type="time")
     */
    protected $ttime;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $tid;

    /**
     * @ORM\Column(type="text")
     */
    protected $reply;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $answered;

    /**
     * @ORM\Column(type="string", length=25)
     */
    protected $ansby;

    /**
     * @ORM\Column(type="string", length=16)
     */
    protected $astamp;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $archive;

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
     * Set the value of batch_nr.
     *
     * @param integer $batch_nr
     * @return \Entity\CareTechQuestion
     */
    public function setBatchNr($batch_nr)
    {
        $this->batch_nr = $batch_nr;

        return $this;
    }

    /**
     * Get the value of batch_nr.
     *
     * @return integer
     */
    public function getBatchNr()
    {
        return $this->batch_nr;
    }

    /**
     * Set the value of dept.
     *
     * @param string $dept
     * @return \Entity\CareTechQuestion
     */
    public function setDept($dept)
    {
        $this->dept = $dept;

        return $this;
    }

    /**
     * Get the value of dept.
     *
     * @return string
     */
    public function getDept()
    {
        return $this->dept;
    }

    /**
     * Set the value of query.
     *
     * @param string $query
     * @return \Entity\CareTechQuestion
     */
    public function setQuery($query)
    {
        $this->query = $query;

        return $this;
    }

    /**
     * Get the value of query.
     *
     * @return string
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * Set the value of inquirer.
     *
     * @param string $inquirer
     * @return \Entity\CareTechQuestion
     */
    public function setInquirer($inquirer)
    {
        $this->inquirer = $inquirer;

        return $this;
    }

    /**
     * Get the value of inquirer.
     *
     * @return string
     */
    public function getInquirer()
    {
        return $this->inquirer;
    }

    /**
     * Set the value of tphone.
     *
     * @param string $tphone
     * @return \Entity\CareTechQuestion
     */
    public function setTphone($tphone)
    {
        $this->tphone = $tphone;

        return $this;
    }

    /**
     * Get the value of tphone.
     *
     * @return string
     */
    public function getTphone()
    {
        return $this->tphone;
    }

    /**
     * Set the value of tdate.
     *
     * @param datetime $tdate
     * @return \Entity\CareTechQuestion
     */
    public function setTdate($tdate)
    {
        $this->tdate = $tdate;

        return $this;
    }

    /**
     * Get the value of tdate.
     *
     * @return datetime
     */
    public function getTdate()
    {
        return $this->tdate;
    }

    /**
     * Set the value of ttime.
     *
     * @param datetime $ttime
     * @return \Entity\CareTechQuestion
     */
    public function setTtime($ttime)
    {
        $this->ttime = $ttime;

        return $this;
    }

    /**
     * Get the value of ttime.
     *
     * @return datetime
     */
    public function getTtime()
    {
        return $this->ttime;
    }

    /**
     * Set the value of tid.
     *
     * @param datetime $tid
     * @return \Entity\CareTechQuestion
     */
    public function setTid($tid)
    {
        $this->tid = $tid;

        return $this;
    }

    /**
     * Get the value of tid.
     *
     * @return datetime
     */
    public function getTid()
    {
        return $this->tid;
    }

    /**
     * Set the value of reply.
     *
     * @param string $reply
     * @return \Entity\CareTechQuestion
     */
    public function setReply($reply)
    {
        $this->reply = $reply;

        return $this;
    }

    /**
     * Get the value of reply.
     *
     * @return string
     */
    public function getReply()
    {
        return $this->reply;
    }

    /**
     * Set the value of answered.
     *
     * @param boolean $answered
     * @return \Entity\CareTechQuestion
     */
    public function setAnswered($answered)
    {
        $this->answered = $answered;

        return $this;
    }

    /**
     * Get the value of answered.
     *
     * @return boolean
     */
    public function getAnswered()
    {
        return $this->answered;
    }

    /**
     * Set the value of ansby.
     *
     * @param string $ansby
     * @return \Entity\CareTechQuestion
     */
    public function setAnsby($ansby)
    {
        $this->ansby = $ansby;

        return $this;
    }

    /**
     * Get the value of ansby.
     *
     * @return string
     */
    public function getAnsby()
    {
        return $this->ansby;
    }

    /**
     * Set the value of astamp.
     *
     * @param string $astamp
     * @return \Entity\CareTechQuestion
     */
    public function setAstamp($astamp)
    {
        $this->astamp = $astamp;

        return $this;
    }

    /**
     * Get the value of astamp.
     *
     * @return string
     */
    public function getAstamp()
    {
        return $this->astamp;
    }

    /**
     * Set the value of archive.
     *
     * @param boolean $archive
     * @return \Entity\CareTechQuestion
     */
    public function setArchive($archive)
    {
        $this->archive = $archive;

        return $this;
    }

    /**
     * Get the value of archive.
     *
     * @return boolean
     */
    public function getArchive()
    {
        return $this->archive;
    }

    /**
     * Set the value of status.
     *
     * @param string $status
     * @return \Entity\CareTechQuestion
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
     * @return \Entity\CareTechQuestion
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
     * @return \Entity\CareTechQuestion
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
     * @return \Entity\CareTechQuestion
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
     * @return \Entity\CareTechQuestion
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
     * @return \Entity\CareTechQuestion
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
        return array('batch_nr', 'dept', 'query', 'inquirer', 'tphone', 'tdate', 'ttime', 'tid', 'reply', 'answered', 'ansby', 'astamp', 'archive', 'status', 'history', 'modify_id', 'modify_time', 'create_id', 'create_time');
    }
}