<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\CareBillingBill
 *
 * InnoDB free: 4096 kB
 *
 * @ORM\Entity(repositoryClass="CareBillingBillRepository")
 * @ORM\Table(name="care_billing_bill")
 */
class CareBillingBill
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=20)
     */
    protected $bill_bill_no;

    /**
     * @ORM\Column(type="integer")
     */
    protected $bill_encounter_nr;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    protected $bill_date_time;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    protected $bill_amount;

    /**
     * @ORM\Column(type="float", precision=10, scale=2, nullable=true)
     */
    protected $bill_outstanding;

    /**
     * @ORM\Column(type="string", length=1)
     */
    protected $bill_cancelled;

    public function __construct()
    {
    }

    /**
     * Set the value of id.
     *
     * @param integer $id
     * @return \Entity\CareBillingBill
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of id.
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of bill_bill_no.
     *
     * @param string $bill_bill_no
     * @return \Entity\CareBillingBill
     */
    public function setBillBillNo($bill_bill_no)
    {
        $this->bill_bill_no = $bill_bill_no;

        return $this;
    }

    /**
     * Get the value of bill_bill_no.
     *
     * @return string
     */
    public function getBillBillNo()
    {
        return $this->bill_bill_no;
    }

    /**
     * Set the value of bill_encounter_nr.
     *
     * @param integer $bill_encounter_nr
     * @return \Entity\CareBillingBill
     */
    public function setBillEncounterNr($bill_encounter_nr)
    {
        $this->bill_encounter_nr = $bill_encounter_nr;

        return $this;
    }

    /**
     * Get the value of bill_encounter_nr.
     *
     * @return integer
     */
    public function getBillEncounterNr()
    {
        return $this->bill_encounter_nr;
    }

    /**
     * Set the value of bill_date_time.
     *
     * @param datetime $bill_date_time
     * @return \Entity\CareBillingBill
     */
    public function setBillDateTime($bill_date_time)
    {
        $this->bill_date_time = $bill_date_time;

        return $this;
    }

    /**
     * Get the value of bill_date_time.
     *
     * @return datetime
     */
    public function getBillDateTime()
    {
        return $this->bill_date_time;
    }

    /**
     * Set the value of bill_amount.
     *
     * @param float $bill_amount
     * @return \Entity\CareBillingBill
     */
    public function setBillAmount($bill_amount)
    {
        $this->bill_amount = $bill_amount;

        return $this;
    }

    /**
     * Get the value of bill_amount.
     *
     * @return float
     */
    public function getBillAmount()
    {
        return $this->bill_amount;
    }

    /**
     * Set the value of bill_outstanding.
     *
     * @param float $bill_outstanding
     * @return \Entity\CareBillingBill
     */
    public function setBillOutstanding($bill_outstanding)
    {
        $this->bill_outstanding = $bill_outstanding;

        return $this;
    }

    /**
     * Get the value of bill_outstanding.
     *
     * @return float
     */
    public function getBillOutstanding()
    {
        return $this->bill_outstanding;
    }

    /**
     * Set the value of bill_cancelled.
     *
     * @param string $bill_cancelled
     * @return \Entity\CareBillingBill
     */
    public function setBillCancelled($bill_cancelled)
    {
        $this->bill_cancelled = $bill_cancelled;

        return $this;
    }

    /**
     * Get the value of bill_cancelled.
     *
     * @return string
     */
    public function getBillCancelled()
    {
        return $this->bill_cancelled;
    }

    public function __sleep()
    {
        return array('id', 'bill_bill_no', 'bill_encounter_nr', 'bill_date_time', 'bill_amount', 'bill_outstanding', 'bill_cancelled');
    }
}