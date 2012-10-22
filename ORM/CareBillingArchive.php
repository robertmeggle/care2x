<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\CareBillingArchive
 *
 * @ORM\Entity(repositoryClass="CareBillingArchiveRepository")
 * @ORM\Table(name="care_billing_archive")
 */
class CareBillingArchive
{
    /**
     * @ORM\Id
     * @ORM\Column(type="bigint")
     */
    protected $bill_no;

    /**
     * @ORM\Column(type="integer")
     */
    protected $encounter_nr;

    /**
     * @ORM\Column(type="text")
     */
    protected $patient_name;

    /**
     * @ORM\Column(type="string", length=35)
     */
    protected $vorname;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $bill_date_time;

    /**
     * @ORM\Column(type="float", precision=16, scale=4)
     */
    protected $bill_amt;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $payment_date_time;

    /**
     * @ORM\Column(type="text")
     */
    protected $payment_mode;

    /**
     * @ORM\Column(type="string", length=10)
     */
    protected $cheque_no;

    /**
     * @ORM\Column(type="string", length=10)
     */
    protected $creditcard_no;

    /**
     * @ORM\Column(type="string", length=15)
     */
    protected $paid_by;

    public function __construct()
    {
    }

    /**
     * Set the value of bill_no.
     *
     * @param integer $bill_no
     * @return \Entity\CareBillingArchive
     */
    public function setBillNo($bill_no)
    {
        $this->bill_no = $bill_no;

        return $this;
    }

    /**
     * Get the value of bill_no.
     *
     * @return integer
     */
    public function getBillNo()
    {
        return $this->bill_no;
    }

    /**
     * Set the value of encounter_nr.
     *
     * @param integer $encounter_nr
     * @return \Entity\CareBillingArchive
     */
    public function setEncounterNr($encounter_nr)
    {
        $this->encounter_nr = $encounter_nr;

        return $this;
    }

    /**
     * Get the value of encounter_nr.
     *
     * @return integer
     */
    public function getEncounterNr()
    {
        return $this->encounter_nr;
    }

    /**
     * Set the value of patient_name.
     *
     * @param string $patient_name
     * @return \Entity\CareBillingArchive
     */
    public function setPatientName($patient_name)
    {
        $this->patient_name = $patient_name;

        return $this;
    }

    /**
     * Get the value of patient_name.
     *
     * @return string
     */
    public function getPatientName()
    {
        return $this->patient_name;
    }

    /**
     * Set the value of vorname.
     *
     * @param string $vorname
     * @return \Entity\CareBillingArchive
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
     * Set the value of bill_date_time.
     *
     * @param datetime $bill_date_time
     * @return \Entity\CareBillingArchive
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
     * Set the value of bill_amt.
     *
     * @param float $bill_amt
     * @return \Entity\CareBillingArchive
     */
    public function setBillAmt($bill_amt)
    {
        $this->bill_amt = $bill_amt;

        return $this;
    }

    /**
     * Get the value of bill_amt.
     *
     * @return float
     */
    public function getBillAmt()
    {
        return $this->bill_amt;
    }

    /**
     * Set the value of payment_date_time.
     *
     * @param datetime $payment_date_time
     * @return \Entity\CareBillingArchive
     */
    public function setPaymentDateTime($payment_date_time)
    {
        $this->payment_date_time = $payment_date_time;

        return $this;
    }

    /**
     * Get the value of payment_date_time.
     *
     * @return datetime
     */
    public function getPaymentDateTime()
    {
        return $this->payment_date_time;
    }

    /**
     * Set the value of payment_mode.
     *
     * @param string $payment_mode
     * @return \Entity\CareBillingArchive
     */
    public function setPaymentMode($payment_mode)
    {
        $this->payment_mode = $payment_mode;

        return $this;
    }

    /**
     * Get the value of payment_mode.
     *
     * @return string
     */
    public function getPaymentMode()
    {
        return $this->payment_mode;
    }

    /**
     * Set the value of cheque_no.
     *
     * @param string $cheque_no
     * @return \Entity\CareBillingArchive
     */
    public function setChequeNo($cheque_no)
    {
        $this->cheque_no = $cheque_no;

        return $this;
    }

    /**
     * Get the value of cheque_no.
     *
     * @return string
     */
    public function getChequeNo()
    {
        return $this->cheque_no;
    }

    /**
     * Set the value of creditcard_no.
     *
     * @param string $creditcard_no
     * @return \Entity\CareBillingArchive
     */
    public function setCreditcardNo($creditcard_no)
    {
        $this->creditcard_no = $creditcard_no;

        return $this;
    }

    /**
     * Get the value of creditcard_no.
     *
     * @return string
     */
    public function getCreditcardNo()
    {
        return $this->creditcard_no;
    }

    /**
     * Set the value of paid_by.
     *
     * @param string $paid_by
     * @return \Entity\CareBillingArchive
     */
    public function setPaidBy($paid_by)
    {
        $this->paid_by = $paid_by;

        return $this;
    }

    /**
     * Get the value of paid_by.
     *
     * @return string
     */
    public function getPaidBy()
    {
        return $this->paid_by;
    }

    public function __sleep()
    {
        return array('bill_no', 'encounter_nr', 'patient_name', 'vorname', 'bill_date_time', 'bill_amt', 'payment_date_time', 'payment_mode', 'cheque_no', 'creditcard_no', 'paid_by');
    }
}