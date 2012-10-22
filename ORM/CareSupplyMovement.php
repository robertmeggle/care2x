<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\CareSupplyMovement
 *
 * InnoDB free: 10240 kB
 *
 * @ORM\Entity(repositoryClass="CareSupplyMovementRepository")
 * @ORM\Table(name="care_supply_movements", indexes={@ORM\Index(name="medicament", columns={"atc"})}, uniqueConstraints={@ORM\UniqueConstraint(name="unique_med_movement", columns={"id_supplier", "data", "bill_nr", "atc", "qty", "price", "expiry_date"})})
 */
class CareSupplyMovement
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="integer")
     */
    protected $id_supplier;

    /**
     * @ORM\Column(type="date")
     */
    protected $data;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $bill_nr;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $atc;

    /**
     * @ORM\Column(type="float")
     */
    protected $qty;

    /**
     * @ORM\Column(type="decimal", precision=11, scale=4)
     */
    protected $price;

    /**
     * @ORM\Column(type="decimal", precision=15, scale=4)
     */
    protected $value;

    /**
     * @ORM\Column(type="date")
     */
    protected $expiry_date;

    /**
     * @ORM\Column(type="string", length=50)
     */
    protected $serial_number;

    /**
     * @ORM\Column(type="string", length=10)
     */
    protected $warehouse;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $details;

    /**
     * @ORM\Column(type="string", length=250)
     */
    protected $emri_tregtar;

    public function __construct()
    {
    }

    /**
     * Set the value of id.
     *
     * @param integer $id
     * @return \Entity\CareSupplyMovement
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
     * Set the value of id_supplier.
     *
     * @param integer $id_supplier
     * @return \Entity\CareSupplyMovement
     */
    public function setIdSupplier($id_supplier)
    {
        $this->id_supplier = $id_supplier;

        return $this;
    }

    /**
     * Get the value of id_supplier.
     *
     * @return integer
     */
    public function getIdSupplier()
    {
        return $this->id_supplier;
    }

    /**
     * Set the value of data.
     *
     * @param datetime $data
     * @return \Entity\CareSupplyMovement
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get the value of data.
     *
     * @return datetime
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set the value of bill_nr.
     *
     * @param string $bill_nr
     * @return \Entity\CareSupplyMovement
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
     * Set the value of atc.
     *
     * @param string $atc
     * @return \Entity\CareSupplyMovement
     */
    public function setAtc($atc)
    {
        $this->atc = $atc;

        return $this;
    }

    /**
     * Get the value of atc.
     *
     * @return string
     */
    public function getAtc()
    {
        return $this->atc;
    }

    /**
     * Set the value of qty.
     *
     * @param float $qty
     * @return \Entity\CareSupplyMovement
     */
    public function setQty($qty)
    {
        $this->qty = $qty;

        return $this;
    }

    /**
     * Get the value of qty.
     *
     * @return float
     */
    public function getQty()
    {
        return $this->qty;
    }

    /**
     * Set the value of price.
     *
     * @param float $price
     * @return \Entity\CareSupplyMovement
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get the value of price.
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of value.
     *
     * @param float $value
     * @return \Entity\CareSupplyMovement
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get the value of value.
     *
     * @return float
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set the value of expiry_date.
     *
     * @param datetime $expiry_date
     * @return \Entity\CareSupplyMovement
     */
    public function setExpiryDate($expiry_date)
    {
        $this->expiry_date = $expiry_date;

        return $this;
    }

    /**
     * Get the value of expiry_date.
     *
     * @return datetime
     */
    public function getExpiryDate()
    {
        return $this->expiry_date;
    }

    /**
     * Set the value of serial_number.
     *
     * @param string $serial_number
     * @return \Entity\CareSupplyMovement
     */
    public function setSerialNumber($serial_number)
    {
        $this->serial_number = $serial_number;

        return $this;
    }

    /**
     * Get the value of serial_number.
     *
     * @return string
     */
    public function getSerialNumber()
    {
        return $this->serial_number;
    }

    /**
     * Set the value of warehouse.
     *
     * @param string $warehouse
     * @return \Entity\CareSupplyMovement
     */
    public function setWarehouse($warehouse)
    {
        $this->warehouse = $warehouse;

        return $this;
    }

    /**
     * Get the value of warehouse.
     *
     * @return string
     */
    public function getWarehouse()
    {
        return $this->warehouse;
    }

    /**
     * Set the value of details.
     *
     * @param string $details
     * @return \Entity\CareSupplyMovement
     */
    public function setDetails($details)
    {
        $this->details = $details;

        return $this;
    }

    /**
     * Get the value of details.
     *
     * @return string
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * Set the value of emri_tregtar.
     *
     * @param string $emri_tregtar
     * @return \Entity\CareSupplyMovement
     */
    public function setEmriTregtar($emri_tregtar)
    {
        $this->emri_tregtar = $emri_tregtar;

        return $this;
    }

    /**
     * Get the value of emri_tregtar.
     *
     * @return string
     */
    public function getEmriTregtar()
    {
        return $this->emri_tregtar;
    }

    public function __sleep()
    {
        return array('id', 'id_supplier', 'data', 'bill_nr', 'atc', 'qty', 'price', 'value', 'expiry_date', 'serial_number', 'warehouse', 'details', 'emri_tregtar');
    }
}