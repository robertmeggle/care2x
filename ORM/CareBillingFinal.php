<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\CareBillingFinal
 *
 * InnoDB free: 4096 kB
 *
 * @ORM\Entity(repositoryClass="CareBillingFinalRepository")
 * @ORM\Table(name="care_billing_final", indexes={@ORM\Index(name="index_final_patnum", columns={"final_encounter_nr"})})
 */
class CareBillingFinal
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $final_id;

    /**
     * @ORM\Column(type="integer")
     */
    protected $final_encounter_nr;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $final_bill_no;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    protected $final_date;

    /**
     * @ORM\Column(type="float", precision=10, scale=2, nullable=true)
     */
    protected $final_total_bill_amount;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $final_discount;

    /**
     * @ORM\Column(type="float", precision=10, scale=2, nullable=true)
     */
    protected $final_total_receipt_amount;

    /**
     * @ORM\Column(type="float", precision=10, scale=2, nullable=true)
     */
    protected $final_amount_due;

    /**
     * @ORM\Column(type="float", precision=10, scale=2, nullable=true)
     */
    protected $final_amount_recieved;

    public function __construct()
    {
    }

    /**
     * Set the value of final_id.
     *
     * @param integer $final_id
     * @return \Entity\CareBillingFinal
     */
    public function setFinalId($final_id)
    {
        $this->final_id = $final_id;

        return $this;
    }

    /**
     * Get the value of final_id.
     *
     * @return integer
     */
    public function getFinalId()
    {
        return $this->final_id;
    }

    /**
     * Set the value of final_encounter_nr.
     *
     * @param integer $final_encounter_nr
     * @return \Entity\CareBillingFinal
     */
    public function setFinalEncounterNr($final_encounter_nr)
    {
        $this->final_encounter_nr = $final_encounter_nr;

        return $this;
    }

    /**
     * Get the value of final_encounter_nr.
     *
     * @return integer
     */
    public function getFinalEncounterNr()
    {
        return $this->final_encounter_nr;
    }

    /**
     * Set the value of final_bill_no.
     *
     * @param integer $final_bill_no
     * @return \Entity\CareBillingFinal
     */
    public function setFinalBillNo($final_bill_no)
    {
        $this->final_bill_no = $final_bill_no;

        return $this;
    }

    /**
     * Get the value of final_bill_no.
     *
     * @return integer
     */
    public function getFinalBillNo()
    {
        return $this->final_bill_no;
    }

    /**
     * Set the value of final_date.
     *
     * @param datetime $final_date
     * @return \Entity\CareBillingFinal
     */
    public function setFinalDate($final_date)
    {
        $this->final_date = $final_date;

        return $this;
    }

    /**
     * Get the value of final_date.
     *
     * @return datetime
     */
    public function getFinalDate()
    {
        return $this->final_date;
    }

    /**
     * Set the value of final_total_bill_amount.
     *
     * @param float $final_total_bill_amount
     * @return \Entity\CareBillingFinal
     */
    public function setFinalTotalBillAmount($final_total_bill_amount)
    {
        $this->final_total_bill_amount = $final_total_bill_amount;

        return $this;
    }

    /**
     * Get the value of final_total_bill_amount.
     *
     * @return float
     */
    public function getFinalTotalBillAmount()
    {
        return $this->final_total_bill_amount;
    }

    /**
     * Set the value of final_discount.
     *
     * @param integer $final_discount
     * @return \Entity\CareBillingFinal
     */
    public function setFinalDiscount($final_discount)
    {
        $this->final_discount = $final_discount;

        return $this;
    }

    /**
     * Get the value of final_discount.
     *
     * @return integer
     */
    public function getFinalDiscount()
    {
        return $this->final_discount;
    }

    /**
     * Set the value of final_total_receipt_amount.
     *
     * @param float $final_total_receipt_amount
     * @return \Entity\CareBillingFinal
     */
    public function setFinalTotalReceiptAmount($final_total_receipt_amount)
    {
        $this->final_total_receipt_amount = $final_total_receipt_amount;

        return $this;
    }

    /**
     * Get the value of final_total_receipt_amount.
     *
     * @return float
     */
    public function getFinalTotalReceiptAmount()
    {
        return $this->final_total_receipt_amount;
    }

    /**
     * Set the value of final_amount_due.
     *
     * @param float $final_amount_due
     * @return \Entity\CareBillingFinal
     */
    public function setFinalAmountDue($final_amount_due)
    {
        $this->final_amount_due = $final_amount_due;

        return $this;
    }

    /**
     * Get the value of final_amount_due.
     *
     * @return float
     */
    public function getFinalAmountDue()
    {
        return $this->final_amount_due;
    }

    /**
     * Set the value of final_amount_recieved.
     *
     * @param float $final_amount_recieved
     * @return \Entity\CareBillingFinal
     */
    public function setFinalAmountRecieved($final_amount_recieved)
    {
        $this->final_amount_recieved = $final_amount_recieved;

        return $this;
    }

    /**
     * Get the value of final_amount_recieved.
     *
     * @return float
     */
    public function getFinalAmountRecieved()
    {
        return $this->final_amount_recieved;
    }

    public function __sleep()
    {
        return array('final_id', 'final_encounter_nr', 'final_bill_no', 'final_date', 'final_total_bill_amount', 'final_discount', 'final_total_receipt_amount', 'final_amount_due', 'final_amount_recieved');
    }
}