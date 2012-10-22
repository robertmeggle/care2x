<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\CareBillingPayment
 *
 * InnoDB free: 3072 kB
 *
 * @ORM\Entity(repositoryClass="CareBillingPaymentRepository")
 * @ORM\Table(name="care_billing_payment", indexes={@ORM\Index(name="index_payment_patnum", columns={"payment_encounter_nr"}), @ORM\Index(name="index_payment_receipt_no", columns={"payment_receipt_no"})})
 */
class CareBillingPayment
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $payment_id;

    /**
     * @ORM\Column(type="integer")
     */
    protected $payment_encounter_nr;

    /**
     * @ORM\Column(type="integer")
     */
    protected $payment_receipt_no;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $payment_date;

    /**
     * @ORM\Column(type="float", precision=10, scale=2, nullable=true)
     */
    protected $payment_cash_amount;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $payment_cheque_no;

    /**
     * @ORM\Column(type="float", precision=10, scale=2, nullable=true)
     */
    protected $payment_cheque_amount;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $payment_creditcard_no;

    /**
     * @ORM\Column(type="float", precision=10, scale=2, nullable=true)
     */
    protected $payment_creditcard_amount;

    /**
     * @ORM\Column(type="float", precision=10, scale=2, nullable=true)
     */
    protected $payment_amount_total;

    public function __construct()
    {
    }

    /**
     * Set the value of payment_id.
     *
     * @param integer $payment_id
     * @return \Entity\CareBillingPayment
     */
    public function setPaymentId($payment_id)
    {
        $this->payment_id = $payment_id;

        return $this;
    }

    /**
     * Get the value of payment_id.
     *
     * @return integer
     */
    public function getPaymentId()
    {
        return $this->payment_id;
    }

    /**
     * Set the value of payment_encounter_nr.
     *
     * @param integer $payment_encounter_nr
     * @return \Entity\CareBillingPayment
     */
    public function setPaymentEncounterNr($payment_encounter_nr)
    {
        $this->payment_encounter_nr = $payment_encounter_nr;

        return $this;
    }

    /**
     * Get the value of payment_encounter_nr.
     *
     * @return integer
     */
    public function getPaymentEncounterNr()
    {
        return $this->payment_encounter_nr;
    }

    /**
     * Set the value of payment_receipt_no.
     *
     * @param integer $payment_receipt_no
     * @return \Entity\CareBillingPayment
     */
    public function setPaymentReceiptNo($payment_receipt_no)
    {
        $this->payment_receipt_no = $payment_receipt_no;

        return $this;
    }

    /**
     * Get the value of payment_receipt_no.
     *
     * @return integer
     */
    public function getPaymentReceiptNo()
    {
        return $this->payment_receipt_no;
    }

    /**
     * Set the value of payment_date.
     *
     * @param datetime $payment_date
     * @return \Entity\CareBillingPayment
     */
    public function setPaymentDate($payment_date)
    {
        $this->payment_date = $payment_date;

        return $this;
    }

    /**
     * Get the value of payment_date.
     *
     * @return datetime
     */
    public function getPaymentDate()
    {
        return $this->payment_date;
    }

    /**
     * Set the value of payment_cash_amount.
     *
     * @param float $payment_cash_amount
     * @return \Entity\CareBillingPayment
     */
    public function setPaymentCashAmount($payment_cash_amount)
    {
        $this->payment_cash_amount = $payment_cash_amount;

        return $this;
    }

    /**
     * Get the value of payment_cash_amount.
     *
     * @return float
     */
    public function getPaymentCashAmount()
    {
        return $this->payment_cash_amount;
    }

    /**
     * Set the value of payment_cheque_no.
     *
     * @param integer $payment_cheque_no
     * @return \Entity\CareBillingPayment
     */
    public function setPaymentChequeNo($payment_cheque_no)
    {
        $this->payment_cheque_no = $payment_cheque_no;

        return $this;
    }

    /**
     * Get the value of payment_cheque_no.
     *
     * @return integer
     */
    public function getPaymentChequeNo()
    {
        return $this->payment_cheque_no;
    }

    /**
     * Set the value of payment_cheque_amount.
     *
     * @param float $payment_cheque_amount
     * @return \Entity\CareBillingPayment
     */
    public function setPaymentChequeAmount($payment_cheque_amount)
    {
        $this->payment_cheque_amount = $payment_cheque_amount;

        return $this;
    }

    /**
     * Get the value of payment_cheque_amount.
     *
     * @return float
     */
    public function getPaymentChequeAmount()
    {
        return $this->payment_cheque_amount;
    }

    /**
     * Set the value of payment_creditcard_no.
     *
     * @param integer $payment_creditcard_no
     * @return \Entity\CareBillingPayment
     */
    public function setPaymentCreditcardNo($payment_creditcard_no)
    {
        $this->payment_creditcard_no = $payment_creditcard_no;

        return $this;
    }

    /**
     * Get the value of payment_creditcard_no.
     *
     * @return integer
     */
    public function getPaymentCreditcardNo()
    {
        return $this->payment_creditcard_no;
    }

    /**
     * Set the value of payment_creditcard_amount.
     *
     * @param float $payment_creditcard_amount
     * @return \Entity\CareBillingPayment
     */
    public function setPaymentCreditcardAmount($payment_creditcard_amount)
    {
        $this->payment_creditcard_amount = $payment_creditcard_amount;

        return $this;
    }

    /**
     * Get the value of payment_creditcard_amount.
     *
     * @return float
     */
    public function getPaymentCreditcardAmount()
    {
        return $this->payment_creditcard_amount;
    }

    /**
     * Set the value of payment_amount_total.
     *
     * @param float $payment_amount_total
     * @return \Entity\CareBillingPayment
     */
    public function setPaymentAmountTotal($payment_amount_total)
    {
        $this->payment_amount_total = $payment_amount_total;

        return $this;
    }

    /**
     * Get the value of payment_amount_total.
     *
     * @return float
     */
    public function getPaymentAmountTotal()
    {
        return $this->payment_amount_total;
    }

    public function __sleep()
    {
        return array('payment_id', 'payment_encounter_nr', 'payment_receipt_no', 'payment_date', 'payment_cash_amount', 'payment_cheque_no', 'payment_cheque_amount', 'payment_creditcard_no', 'payment_creditcard_amount', 'payment_amount_total');
    }
}