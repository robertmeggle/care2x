<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\CareBillingBillItem
 *
 * InnoDB free: 4096 kB
 *
 * @ORM\Entity(repositoryClass="CareBillingBillItemRepository")
 * @ORM\Table(name="care_billing_bill_item", indexes={@ORM\Index(name="index_bill_item_patnum", columns={"bill_item_encounter_nr"}), @ORM\Index(name="index_bill_item_bill_no", columns={"bill_item_bill_no"})})
 */
class CareBillingBillItem
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $bill_item_id;

    /**
     * @ORM\Column(type="integer")
     */
    protected $bill_item_encounter_nr;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    protected $bill_item_code;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    protected $bill_item_unit_cost;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $bill_item_units;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    protected $bill_item_amount;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $bill_item_date;

    /**
     * @ORM\Column(type="integer")
     */
    protected $bill_item_refered_dr;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $bill_item_status;

    /**
     * @ORM\Column(type="string", length=20)
     */
    protected $bill_item_bill_no;

    /**
     * @ORM\Column(type="integer")
     */
    protected $bill_id;

    public function __construct()
    {
    }

    /**
     * Set the value of bill_item_id.
     *
     * @param integer $bill_item_id
     * @return \Entity\CareBillingBillItem
     */
    public function setBillItemId($bill_item_id)
    {
        $this->bill_item_id = $bill_item_id;

        return $this;
    }

    /**
     * Get the value of bill_item_id.
     *
     * @return integer
     */
    public function getBillItemId()
    {
        return $this->bill_item_id;
    }

    /**
     * Set the value of bill_item_encounter_nr.
     *
     * @param integer $bill_item_encounter_nr
     * @return \Entity\CareBillingBillItem
     */
    public function setBillItemEncounterNr($bill_item_encounter_nr)
    {
        $this->bill_item_encounter_nr = $bill_item_encounter_nr;

        return $this;
    }

    /**
     * Get the value of bill_item_encounter_nr.
     *
     * @return integer
     */
    public function getBillItemEncounterNr()
    {
        return $this->bill_item_encounter_nr;
    }

    /**
     * Set the value of bill_item_code.
     *
     * @param string $bill_item_code
     * @return \Entity\CareBillingBillItem
     */
    public function setBillItemCode($bill_item_code)
    {
        $this->bill_item_code = $bill_item_code;

        return $this;
    }

    /**
     * Get the value of bill_item_code.
     *
     * @return string
     */
    public function getBillItemCode()
    {
        return $this->bill_item_code;
    }

    /**
     * Set the value of bill_item_unit_cost.
     *
     * @param float $bill_item_unit_cost
     * @return \Entity\CareBillingBillItem
     */
    public function setBillItemUnitCost($bill_item_unit_cost)
    {
        $this->bill_item_unit_cost = $bill_item_unit_cost;

        return $this;
    }

    /**
     * Get the value of bill_item_unit_cost.
     *
     * @return float
     */
    public function getBillItemUnitCost()
    {
        return $this->bill_item_unit_cost;
    }

    /**
     * Set the value of bill_item_units.
     *
     * @param integer $bill_item_units
     * @return \Entity\CareBillingBillItem
     */
    public function setBillItemUnits($bill_item_units)
    {
        $this->bill_item_units = $bill_item_units;

        return $this;
    }

    /**
     * Get the value of bill_item_units.
     *
     * @return integer
     */
    public function getBillItemUnits()
    {
        return $this->bill_item_units;
    }

    /**
     * Set the value of bill_item_amount.
     *
     * @param float $bill_item_amount
     * @return \Entity\CareBillingBillItem
     */
    public function setBillItemAmount($bill_item_amount)
    {
        $this->bill_item_amount = $bill_item_amount;

        return $this;
    }

    /**
     * Get the value of bill_item_amount.
     *
     * @return float
     */
    public function getBillItemAmount()
    {
        return $this->bill_item_amount;
    }

    /**
     * Set the value of bill_item_date.
     *
     * @param datetime $bill_item_date
     * @return \Entity\CareBillingBillItem
     */
    public function setBillItemDate($bill_item_date)
    {
        $this->bill_item_date = $bill_item_date;

        return $this;
    }

    /**
     * Get the value of bill_item_date.
     *
     * @return datetime
     */
    public function getBillItemDate()
    {
        return $this->bill_item_date;
    }

    /**
     * Set the value of bill_item_refered_dr.
     *
     * @param integer $bill_item_refered_dr
     * @return \Entity\CareBillingBillItem
     */
    public function setBillItemReferedDr($bill_item_refered_dr)
    {
        $this->bill_item_refered_dr = $bill_item_refered_dr;

        return $this;
    }

    /**
     * Get the value of bill_item_refered_dr.
     *
     * @return integer
     */
    public function getBillItemReferedDr()
    {
        return $this->bill_item_refered_dr;
    }

    /**
     * Set the value of bill_item_status.
     *
     * @param string $bill_item_status
     * @return \Entity\CareBillingBillItem
     */
    public function setBillItemStatus($bill_item_status)
    {
        $this->bill_item_status = $bill_item_status;

        return $this;
    }

    /**
     * Get the value of bill_item_status.
     *
     * @return string
     */
    public function getBillItemStatus()
    {
        return $this->bill_item_status;
    }

    /**
     * Set the value of bill_item_bill_no.
     *
     * @param string $bill_item_bill_no
     * @return \Entity\CareBillingBillItem
     */
    public function setBillItemBillNo($bill_item_bill_no)
    {
        $this->bill_item_bill_no = $bill_item_bill_no;

        return $this;
    }

    /**
     * Get the value of bill_item_bill_no.
     *
     * @return string
     */
    public function getBillItemBillNo()
    {
        return $this->bill_item_bill_no;
    }

    /**
     * Set the value of bill_id.
     *
     * @param integer $bill_id
     * @return \Entity\CareBillingBillItem
     */
    public function setBillId($bill_id)
    {
        $this->bill_id = $bill_id;

        return $this;
    }

    /**
     * Get the value of bill_id.
     *
     * @return integer
     */
    public function getBillId()
    {
        return $this->bill_id;
    }

    public function __sleep()
    {
        return array('bill_item_id', 'bill_item_encounter_nr', 'bill_item_code', 'bill_item_unit_cost', 'bill_item_units', 'bill_item_amount', 'bill_item_date', 'bill_item_refered_dr', 'bill_item_status', 'bill_item_bill_no', 'bill_id');
    }
}