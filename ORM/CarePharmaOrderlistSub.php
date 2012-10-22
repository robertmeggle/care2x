<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\CarePharmaOrderlistSub
 *
 * @ORM\Entity(repositoryClass="CarePharmaOrderlistSubRepository")
 * @ORM\Table(name="care_pharma_orderlist_sub", indexes={@ORM\Index(name="order_nr_sub", columns={"order_nr_sub"})}, uniqueConstraints={@ORM\UniqueConstraint(name="sub_order", columns={"sub_order"})})
 */
class CarePharmaOrderlistSub
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $sub_order;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    protected $atc;

    /**
     * id of care_pharma_products_main_sub
     *
     * @ORM\Column(type="string", length=20)
     */
    protected $idsub;

    /**
     * @ORM\Column(type="string", length=40, nullable=true)
     */
    protected $artikelname;

    /**
     * @ORM\Column(type="float")
     */
    protected $pcs;

    /**
     * @ORM\Column(type="float", precision=10, scale=3)
     */
    protected $pcs_given;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    protected $unit;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    protected $expiry_date;

    /**
     * @ORM\Column(type="decimal", precision=11, scale=4)
     */
    protected $price;

    /**
     * @ORM\Column(type="decimal", precision=11, scale=2, nullable=true)
     */
    protected $dose;

    /**
     * @ORM\Column(type="string", length=250, nullable=true)
     */
    protected $packing;

    /**
     * @ORM\Column(type="decimal", precision=15, scale=4)
     */
    protected $value;

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

    /**
     * @ORM\ManyToOne(targetEntity="CarePharmaOrderlist", inversedBy="carePharmaOrderlistSubs")
     * @ORM\JoinColumn(name="order_nr_sub", referencedColumnName="order_nr", nullable=false)
     */
    protected $carePharmaOrderlist;

    public function __construct()
    {
    }

    /**
     * Set the value of sub_order.
     *
     * @param integer $sub_order
     * @return \Entity\CarePharmaOrderlistSub
     */
    public function setSubOrder($sub_order)
    {
        $this->sub_order = $sub_order;

        return $this;
    }

    /**
     * Get the value of sub_order.
     *
     * @return integer
     */
    public function getSubOrder()
    {
        return $this->sub_order;
    }

    /**
     * Set the value of atc.
     *
     * @param string $atc
     * @return \Entity\CarePharmaOrderlistSub
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
     * Set the value of idsub.
     *
     * @param string $idsub
     * @return \Entity\CarePharmaOrderlistSub
     */
    public function setIdsub($idsub)
    {
        $this->idsub = $idsub;

        return $this;
    }

    /**
     * Get the value of idsub.
     *
     * @return string
     */
    public function getIdsub()
    {
        return $this->idsub;
    }

    /**
     * Set the value of artikelname.
     *
     * @param string $artikelname
     * @return \Entity\CarePharmaOrderlistSub
     */
    public function setArtikelname($artikelname)
    {
        $this->artikelname = $artikelname;

        return $this;
    }

    /**
     * Get the value of artikelname.
     *
     * @return string
     */
    public function getArtikelname()
    {
        return $this->artikelname;
    }

    /**
     * Set the value of pcs.
     *
     * @param float $pcs
     * @return \Entity\CarePharmaOrderlistSub
     */
    public function setPcs($pcs)
    {
        $this->pcs = $pcs;

        return $this;
    }

    /**
     * Get the value of pcs.
     *
     * @return float
     */
    public function getPcs()
    {
        return $this->pcs;
    }

    /**
     * Set the value of pcs_given.
     *
     * @param float $pcs_given
     * @return \Entity\CarePharmaOrderlistSub
     */
    public function setPcsGiven($pcs_given)
    {
        $this->pcs_given = $pcs_given;

        return $this;
    }

    /**
     * Get the value of pcs_given.
     *
     * @return float
     */
    public function getPcsGiven()
    {
        return $this->pcs_given;
    }

    /**
     * Set the value of unit.
     *
     * @param string $unit
     * @return \Entity\CarePharmaOrderlistSub
     */
    public function setUnit($unit)
    {
        $this->unit = $unit;

        return $this;
    }

    /**
     * Get the value of unit.
     *
     * @return string
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * Set the value of expiry_date.
     *
     * @param datetime $expiry_date
     * @return \Entity\CarePharmaOrderlistSub
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
     * Set the value of price.
     *
     * @param float $price
     * @return \Entity\CarePharmaOrderlistSub
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
     * Set the value of dose.
     *
     * @param float $dose
     * @return \Entity\CarePharmaOrderlistSub
     */
    public function setDose($dose)
    {
        $this->dose = $dose;

        return $this;
    }

    /**
     * Get the value of dose.
     *
     * @return float
     */
    public function getDose()
    {
        return $this->dose;
    }

    /**
     * Set the value of packing.
     *
     * @param string $packing
     * @return \Entity\CarePharmaOrderlistSub
     */
    public function setPacking($packing)
    {
        $this->packing = $packing;

        return $this;
    }

    /**
     * Get the value of packing.
     *
     * @return string
     */
    public function getPacking()
    {
        return $this->packing;
    }

    /**
     * Set the value of value.
     *
     * @param float $value
     * @return \Entity\CarePharmaOrderlistSub
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
     * Set the value of serial_number.
     *
     * @param string $serial_number
     * @return \Entity\CarePharmaOrderlistSub
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
     * @return \Entity\CarePharmaOrderlistSub
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
     * @return \Entity\CarePharmaOrderlistSub
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
     * @return \Entity\CarePharmaOrderlistSub
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

    /**
     * Set CarePharmaOrderlist entity (many to one).
     *
     * @param \Entity\CarePharmaOrderlist $carePharmaOrderlist
     * @return \Entity\CarePharmaOrderlistSub
     */
    public function setCarePharmaOrderlist(CarePharmaOrderlist $carePharmaOrderlist = null)
    {
        $this->carePharmaOrderlist = $carePharmaOrderlist;

        return $this;
    }

    /**
     * Get CarePharmaOrderlist entity (many to one).
     *
     * @return \Entity\CarePharmaOrderlist
     */
    public function getCarePharmaOrderlist()
    {
        return $this->carePharmaOrderlist;
    }

    public function __sleep()
    {
        return array('sub_order', 'order_nr_sub', 'atc', 'idsub', 'artikelname', 'pcs', 'pcs_given', 'unit', 'expiry_date', 'price', 'dose', 'packing', 'value', 'serial_number', 'warehouse', 'details', 'emri_tregtar');
    }
}