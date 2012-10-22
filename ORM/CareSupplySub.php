<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\CareSupplySub
 *
 * @ORM\Entity(repositoryClass="CareSupplySubRepository")
 * @ORM\Table(name="care_supply_sub", indexes={@ORM\Index(name="idcare_supply", columns={"idcare_supply"})}, uniqueConstraints={@ORM\UniqueConstraint(name="unique_med_movement", columns={"idcare_supply", "atc", "artikelname", "pcs", "expiry_date", "price"})})
 */
class CareSupplySub
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $care_supply_sub_id;

    /**
     * @ORM\Column(type="string", length=25)
     */
    protected $atc;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $artikelname;

    /**
     * @ORM\Column(type="float")
     */
    protected $pcs;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    protected $expiry_date;

    /**
     * @ORM\Column(type="decimal", precision=11, scale=4)
     */
    protected $price;

    /**
     * @ORM\Column(type="decimal", precision=15, scale=4)
     */
    protected $value;

    /**
     * @ORM\Column(type="string", length=250, nullable=true)
     */
    protected $packing;

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
     * @ORM\ManyToOne(targetEntity="CareSupply", inversedBy="careSupplySubs")
     * @ORM\JoinColumn(name="idcare_supply", referencedColumnName="idcare_supply", nullable=false)
     */
    protected $careSupply;

    public function __construct()
    {
    }

    /**
     * Set the value of care_supply_sub_id.
     *
     * @param integer $care_supply_sub_id
     * @return \Entity\CareSupplySub
     */
    public function setCareSupplySubId($care_supply_sub_id)
    {
        $this->care_supply_sub_id = $care_supply_sub_id;

        return $this;
    }

    /**
     * Get the value of care_supply_sub_id.
     *
     * @return integer
     */
    public function getCareSupplySubId()
    {
        return $this->care_supply_sub_id;
    }

    /**
     * Set the value of atc.
     *
     * @param string $atc
     * @return \Entity\CareSupplySub
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
     * Set the value of artikelname.
     *
     * @param string $artikelname
     * @return \Entity\CareSupplySub
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
     * @return \Entity\CareSupplySub
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
     * Set the value of expiry_date.
     *
     * @param datetime $expiry_date
     * @return \Entity\CareSupplySub
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
     * @return \Entity\CareSupplySub
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
     * @return \Entity\CareSupplySub
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
     * Set the value of packing.
     *
     * @param string $packing
     * @return \Entity\CareSupplySub
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
     * Set the value of serial_number.
     *
     * @param string $serial_number
     * @return \Entity\CareSupplySub
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
     * @return \Entity\CareSupplySub
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
     * @return \Entity\CareSupplySub
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
     * @return \Entity\CareSupplySub
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
     * Set CareSupply entity (many to one).
     *
     * @param \Entity\CareSupply $careSupply
     * @return \Entity\CareSupplySub
     */
    public function setCareSupply(CareSupply $careSupply = null)
    {
        $this->careSupply = $careSupply;

        return $this;
    }

    /**
     * Get CareSupply entity (many to one).
     *
     * @return \Entity\CareSupply
     */
    public function getCareSupply()
    {
        return $this->careSupply;
    }

    public function __sleep()
    {
        return array('care_supply_sub_id', 'idcare_supply', 'atc', 'artikelname', 'pcs', 'expiry_date', 'price', 'value', 'packing', 'serial_number', 'warehouse', 'details', 'emri_tregtar');
    }
}