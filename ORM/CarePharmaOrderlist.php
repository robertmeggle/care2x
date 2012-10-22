<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Entity\CarePharmaOrderlist
 *
 * @ORM\Entity(repositoryClass="CarePharmaOrderlistRepository")
 * @ORM\Table(name="care_pharma_orderlist", indexes={@ORM\Index(name="dept", columns={"dept_nr"}), @ORM\Index(name="order_nr", columns={"order_nr"})})
 */
class CarePharmaOrderlist
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $order_nr;

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    protected $dept_nr;

    /**
     * @ORM\Column(type="string", length=20)
     */
    protected $doc_nr;

    /**
     * @ORM\Column(type="date")
     */
    protected $order_date;

    /**
     * @ORM\Column(type="time")
     */
    protected $order_time;

    /**
     * @ORM\Column(type="text")
     */
    protected $extra1;

    /**
     * @ORM\Column(type="text")
     */
    protected $extra2;

    /**
     * @ORM\Column(type="text")
     */
    protected $validator;

    /**
     * @ORM\Column(type="text")
     */
    protected $ip_addr;

    /**
     * @ORM\Column(type="text")
     */
    protected $priority;

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

    /**
     * @ORM\Column(type="datetime")
     */
    protected $sent_datetime;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $process_datetime;

    /**
     * @ORM\OneToMany(targetEntity="CarePharmaOrderlistSub", mappedBy="carePharmaOrderlist")
     * @ORM\JoinColumn(name="order_nr_sub", referencedColumnName="order_nr", nullable=false)
     */
    protected $carePharmaOrderlistSubs;

    public function __construct()
    {
        $this->carePharmaOrderlistSubs = new ArrayCollection();
    }

    /**
     * Set the value of order_nr.
     *
     * @param integer $order_nr
     * @return \Entity\CarePharmaOrderlist
     */
    public function setOrderNr($order_nr)
    {
        $this->order_nr = $order_nr;

        return $this;
    }

    /**
     * Get the value of order_nr.
     *
     * @return integer
     */
    public function getOrderNr()
    {
        return $this->order_nr;
    }

    /**
     * Set the value of dept_nr.
     *
     * @param integer $dept_nr
     * @return \Entity\CarePharmaOrderlist
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
     * Set the value of doc_nr.
     *
     * @param string $doc_nr
     * @return \Entity\CarePharmaOrderlist
     */
    public function setDocNr($doc_nr)
    {
        $this->doc_nr = $doc_nr;

        return $this;
    }

    /**
     * Get the value of doc_nr.
     *
     * @return string
     */
    public function getDocNr()
    {
        return $this->doc_nr;
    }

    /**
     * Set the value of order_date.
     *
     * @param datetime $order_date
     * @return \Entity\CarePharmaOrderlist
     */
    public function setOrderDate($order_date)
    {
        $this->order_date = $order_date;

        return $this;
    }

    /**
     * Get the value of order_date.
     *
     * @return datetime
     */
    public function getOrderDate()
    {
        return $this->order_date;
    }

    /**
     * Set the value of order_time.
     *
     * @param datetime $order_time
     * @return \Entity\CarePharmaOrderlist
     */
    public function setOrderTime($order_time)
    {
        $this->order_time = $order_time;

        return $this;
    }

    /**
     * Get the value of order_time.
     *
     * @return datetime
     */
    public function getOrderTime()
    {
        return $this->order_time;
    }

    /**
     * Set the value of extra1.
     *
     * @param string $extra1
     * @return \Entity\CarePharmaOrderlist
     */
    public function setExtra1($extra1)
    {
        $this->extra1 = $extra1;

        return $this;
    }

    /**
     * Get the value of extra1.
     *
     * @return string
     */
    public function getExtra1()
    {
        return $this->extra1;
    }

    /**
     * Set the value of extra2.
     *
     * @param string $extra2
     * @return \Entity\CarePharmaOrderlist
     */
    public function setExtra2($extra2)
    {
        $this->extra2 = $extra2;

        return $this;
    }

    /**
     * Get the value of extra2.
     *
     * @return string
     */
    public function getExtra2()
    {
        return $this->extra2;
    }

    /**
     * Set the value of validator.
     *
     * @param string $validator
     * @return \Entity\CarePharmaOrderlist
     */
    public function setValidator($validator)
    {
        $this->validator = $validator;

        return $this;
    }

    /**
     * Get the value of validator.
     *
     * @return string
     */
    public function getValidator()
    {
        return $this->validator;
    }

    /**
     * Set the value of ip_addr.
     *
     * @param string $ip_addr
     * @return \Entity\CarePharmaOrderlist
     */
    public function setIpAddr($ip_addr)
    {
        $this->ip_addr = $ip_addr;

        return $this;
    }

    /**
     * Get the value of ip_addr.
     *
     * @return string
     */
    public function getIpAddr()
    {
        return $this->ip_addr;
    }

    /**
     * Set the value of priority.
     *
     * @param string $priority
     * @return \Entity\CarePharmaOrderlist
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;

        return $this;
    }

    /**
     * Get the value of priority.
     *
     * @return string
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Set the value of status.
     *
     * @param string $status
     * @return \Entity\CarePharmaOrderlist
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
     * @return \Entity\CarePharmaOrderlist
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
     * @return \Entity\CarePharmaOrderlist
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
     * @return \Entity\CarePharmaOrderlist
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
     * @return \Entity\CarePharmaOrderlist
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
     * @return \Entity\CarePharmaOrderlist
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

    /**
     * Set the value of sent_datetime.
     *
     * @param datetime $sent_datetime
     * @return \Entity\CarePharmaOrderlist
     */
    public function setSentDatetime($sent_datetime)
    {
        $this->sent_datetime = $sent_datetime;

        return $this;
    }

    /**
     * Get the value of sent_datetime.
     *
     * @return datetime
     */
    public function getSentDatetime()
    {
        return $this->sent_datetime;
    }

    /**
     * Set the value of process_datetime.
     *
     * @param datetime $process_datetime
     * @return \Entity\CarePharmaOrderlist
     */
    public function setProcessDatetime($process_datetime)
    {
        $this->process_datetime = $process_datetime;

        return $this;
    }

    /**
     * Get the value of process_datetime.
     *
     * @return datetime
     */
    public function getProcessDatetime()
    {
        return $this->process_datetime;
    }

    /**
     * Add CarePharmaOrderlistSub entity to collection (one to many).
     *
     * @param \Entity\CarePharmaOrderlistSub $carePharmaOrderlistSub
     * @return \Entity\CarePharmaOrderlist
     */
    public function addCarePharmaOrderlistSub(CarePharmaOrderlistSub $carePharmaOrderlistSub)
    {
        $this->carePharmaOrderlistSubs[] = $carePharmaOrderlistSub;

        return $this;
    }

    /**
     * Get CarePharmaOrderlistSub entity collection (one to many).
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCarePharmaOrderlistSubs()
    {
        return $this->carePharmaOrderlistSubs;
    }

    public function __sleep()
    {
        return array('order_nr', 'dept_nr', 'doc_nr', 'order_date', 'order_time', 'extra1', 'extra2', 'validator', 'ip_addr', 'priority', 'status', 'history', 'modify_id', 'modify_time', 'create_id', 'create_time', 'sent_datetime', 'process_datetime');
    }
}