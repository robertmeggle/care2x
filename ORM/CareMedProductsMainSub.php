<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\CareMedProductsMainSub
 *
 * InnoDB free: 9216 kB
 *
 * @ORM\Entity(repositoryClass="CareMedProductsMainSubRepository")
 * @ORM\Table(name="care_med_products_main_sub", uniqueConstraints={@ORM\UniqueConstraint(name="expiry_date", columns={"expiry_date", "price", "atc", "idcare_supply"})})
 */
class CareMedProductsMainSub
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

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
     * connection to care_med_products_main
     *
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    protected $atc;

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
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $idcare_supply;

    /**
     * @ORM\Column(type="string", length=250)
     */
    protected $emri_tregtar;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $create_time;

    public function __construct()
    {
    }

    /**
     * Set the value of id.
     *
     * @param integer $id
     * @return \Entity\CareMedProductsMainSub
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
     * Set the value of pcs.
     *
     * @param float $pcs
     * @return \Entity\CareMedProductsMainSub
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
     * @return \Entity\CareMedProductsMainSub
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
     * @return \Entity\CareMedProductsMainSub
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
     * Set the value of atc.
     *
     * @param string $atc
     * @return \Entity\CareMedProductsMainSub
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
     * Set the value of serial_number.
     *
     * @param string $serial_number
     * @return \Entity\CareMedProductsMainSub
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
     * @return \Entity\CareMedProductsMainSub
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
     * @return \Entity\CareMedProductsMainSub
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
     * Set the value of idcare_supply.
     *
     * @param integer $idcare_supply
     * @return \Entity\CareMedProductsMainSub
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
     * Set the value of emri_tregtar.
     *
     * @param string $emri_tregtar
     * @return \Entity\CareMedProductsMainSub
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
     * Set the value of create_time.
     *
     * @param datetime $create_time
     * @return \Entity\CareMedProductsMainSub
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

    public function __sleep()
    {
        return array('id', 'pcs', 'expiry_date', 'price', 'atc', 'serial_number', 'warehouse', 'details', 'idcare_supply', 'emri_tregtar', 'create_time');
    }
}