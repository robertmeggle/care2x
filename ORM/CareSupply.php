<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Entity\CareSupply
 *
 * InnoDB free: 10240 kB
 *
 * @ORM\Entity(repositoryClass="CareSupplyRepository")
 * @ORM\Table(name="care_supply", indexes={@ORM\Index(name="idcare_supplier", columns={}), @ORM\Index(name="contract_nr", columns={}), @ORM\Index(name="fk_care_supply_care_supplier1_idx", columns={"idcare_supplier"})})
 */
class CareSupply
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $idcare_supply;

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    protected $idcare_supplier;

    /**
     * @ORM\Column(type="string", length=25)
     */
    protected $bill_nr;

    /**
     * @ORM\Column(type="date")
     */
    protected $bill_date;

    /**
     * @ORM\Column(type="integer")
     */
    protected $contract_nr;

    /**
     * @ORM\Column(type="text")
     */
    protected $notes;

    /**
     * @ORM\Column(type="date")
     */
    protected $date_komision;

    /**
     * @ORM\Column(type="string", length=30)
     */
    protected $nr_protokoll;

    /**
     * @ORM\Column(type="string", length=50)
     */
    protected $kontrate_donacion;

    /**
     * @ORM\Column(type="string", length=30)
     */
    protected $nr_kontrate_donacion;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $create_time;

    /**
     * @ORM\Column(type="string", length=35, nullable=true)
     */
    protected $create_id;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $history;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    protected $order_date;

    /**
     * @ORM\Column(type="time", nullable=true)
     */
    protected $order_time;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $ip_addr;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    protected $status;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $sent_datetime;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $validator;

    /**
     * @ORM\Column(type="string", length=35, nullable=true)
     */
    protected $modify_id;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $process_datetime;

    /**
     * @ORM\OneToMany(targetEntity="CareSupplySub", mappedBy="careSupply")
     * @ORM\JoinColumn(name="idcare_supply", referencedColumnName="idcare_supply", nullable=false)
     */
    protected $careSupplySubs;

    /**
     * @ORM\ManyToOne(targetEntity="CareSupplier", inversedBy="careSupplies")
     * @ORM\JoinColumn(name="idcare_supplier", referencedColumnName="idcare_supplier", nullable=false)
     */
    protected $careSupplier;

    public function __construct()
    {
        $this->careSupplySubs = new ArrayCollection();
    }

    /**
     * Set the value of idcare_supply.
     *
     * @param integer $idcare_supply
     * @return \Entity\CareSupply
     */
    public function setIdcareSupply($idcare_supply)
    {
        $this->idcare_supply = $idcare_supply;

        return $this;
    }

    /**
     * Get the value of idcare_supply.
     *
     * @return integer
     */
    public function getIdcareSupply()
    {
        return $this->idcare_supply;
    }

    /**
     * Set the value of idcare_supplier.
     *
     * @param integer $idcare_supplier
     * @return \Entity\CareSupply
     */
    public function setIdcareSupplier($idcare_supplier)
    {
        $this->idcare_supplier = $idcare_supplier;

        return $this;
    }

    /**
     * Get the value of idcare_supplier.
     *
     * @return integer
     */
    public function getIdcareSupplier()
    {
        return $this->idcare_supplier;
    }

    /**
     * Set the value of bill_nr.
     *
     * @param string $bill_nr
     * @return \Entity\CareSupply
     */
    public function setBillNr($bill_nr)
    {
        $this->bill_nr = $bill_nr;

        return $this;
    }

    /**
     * Get the value of bill_nr.
     *
     * @return string
     */
    public function getBillNr()
    {
        return $this->bill_nr;
    }

    /**
     * Set the value of bill_date.
     *
     * @param datetime $bill_date
     * @return \Entity\CareSupply
     */
    public function setBillDate($bill_date)
    {
        $this->bill_date = $bill_date;

        return $this;
    }

    /**
     * Get the value of bill_date.
     *
     * @return datetime
     */
    public function getBillDate()
    {
        return $this->bill_date;
    }

    /**
     * Set the value of contract_nr.
     *
     * @param integer $contract_nr
     * @return \Entity\CareSupply
     */
    public function setContractNr($contract_nr)
    {
        $this->contract_nr = $contract_nr;

        return $this;
    }

    /**
     * Get the value of contract_nr.
     *
     * @return integer
     */
    public function getContractNr()
    {
        return $this->contract_nr;
    }

    /**
     * Set the value of notes.
     *
     * @param string $notes
     * @return \Entity\CareSupply
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;

        return $this;
    }

    /**
     * Get the value of notes.
     *
     * @return string
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Set the value of date_komision.
     *
     * @param datetime $date_komision
     * @return \Entity\CareSupply
     */
    public function setDateKomision($date_komision)
    {
        $this->date_komision = $date_komision;

        return $this;
    }

    /**
     * Get the value of date_komision.
     *
     * @return datetime
     */
    public function getDateKomision()
    {
        return $this->date_komision;
    }

    /**
     * Set the value of nr_protokoll.
     *
     * @param string $nr_protokoll
     * @return \Entity\CareSupply
     */
    public function setNrProtokoll($nr_protokoll)
    {
        $this->nr_protokoll = $nr_protokoll;

        return $this;
    }

    /**
     * Get the value of nr_protokoll.
     *
     * @return string
     */
    public function getNrProtokoll()
    {
        return $this->nr_protokoll;
    }

    /**
     * Set the value of kontrate_donacion.
     *
     * @param string $kontrate_donacion
     * @return \Entity\CareSupply
     */
    public function setKontrateDonacion($kontrate_donacion)
    {
        $this->kontrate_donacion = $kontrate_donacion;

        return $this;
    }

    /**
     * Get the value of kontrate_donacion.
     *
     * @return string
     */
    public function getKontrateDonacion()
    {
        return $this->kontrate_donacion;
    }

    /**
     * Set the value of nr_kontrate_donacion.
     *
     * @param string $nr_kontrate_donacion
     * @return \Entity\CareSupply
     */
    public function setNrKontrateDonacion($nr_kontrate_donacion)
    {
        $this->nr_kontrate_donacion = $nr_kontrate_donacion;

        return $this;
    }

    /**
     * Get the value of nr_kontrate_donacion.
     *
     * @return string
     */
    public function getNrKontrateDonacion()
    {
        return $this->nr_kontrate_donacion;
    }

    /**
     * Set the value of create_time.
     *
     * @param datetime $create_time
     * @return \Entity\CareSupply
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
     * Set the value of create_id.
     *
     * @param string $create_id
     * @return \Entity\CareSupply
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
     * Set the value of history.
     *
     * @param string $history
     * @return \Entity\CareSupply
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
     * Set the value of order_date.
     *
     * @param datetime $order_date
     * @return \Entity\CareSupply
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
     * @return \Entity\CareSupply
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
     * Set the value of ip_addr.
     *
     * @param string $ip_addr
     * @return \Entity\CareSupply
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
     * Set the value of status.
     *
     * @param string $status
     * @return \Entity\CareSupply
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
     * Set the value of sent_datetime.
     *
     * @param datetime $sent_datetime
     * @return \Entity\CareSupply
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
     * Set the value of validator.
     *
     * @param string $validator
     * @return \Entity\CareSupply
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
     * Set the value of modify_id.
     *
     * @param string $modify_id
     * @return \Entity\CareSupply
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
     * Set the value of process_datetime.
     *
     * @param datetime $process_datetime
     * @return \Entity\CareSupply
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
     * Add CareSupplySub entity to collection (one to many).
     *
     * @param \Entity\CareSupplySub $careSupplySub
     * @return \Entity\CareSupply
     */
    public function addCareSupplySub(CareSupplySub $careSupplySub)
    {
        $this->careSupplySubs[] = $careSupplySub;

        return $this;
    }

    /**
     * Get CareSupplySub entity collection (one to many).
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCareSupplySubs()
    {
        return $this->careSupplySubs;
    }

    /**
     * Set CareSupplier entity (many to one).
     *
     * @param \Entity\CareSupplier $careSupplier
     * @return \Entity\CareSupply
     */
    public function setCareSupplier(CareSupplier $careSupplier = null)
    {
        $this->careSupplier = $careSupplier;

        return $this;
    }

    /**
     * Get CareSupplier entity (many to one).
     *
     * @return \Entity\CareSupplier
     */
    public function getCareSupplier()
    {
        return $this->careSupplier;
    }

    public function __sleep()
    {
        return array('idcare_supply', 'idcare_supplier', 'bill_nr', 'bill_date', 'contract_nr', 'notes', 'date_komision', 'nr_protokoll', 'kontrate_donacion', 'nr_kontrate_donacion', 'create_time', 'create_id', 'history', 'order_date', 'order_time', 'ip_addr', 'status', 'sent_datetime', 'validator', 'modify_id', 'process_datetime');
    }
}