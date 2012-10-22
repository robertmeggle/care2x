<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\CarePharmaOrderlistSubReturn
 *
 * @ORM\Entity(repositoryClass="CarePharmaOrderlistSubReturnRepository")
 * @ORM\Table(name="care_pharma_orderlist_sub_return", indexes={@ORM\Index(name="order_nr_sub", columns={"order_nr_sub"}), @ORM\Index(name="bestellnum", columns={"atc"}), @ORM\Index(name="bestellnum_2", columns={"atc"}), @ORM\Index(name="idsub", columns={"idsub"}), @ORM\Index(name="idsub_2", columns={"idsub"})}, uniqueConstraints={@ORM\UniqueConstraint(name="sub_order", columns={"sub_order"})})
 */
class CarePharmaOrderlistSubReturn
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $sub_order;

    /**
     * @ORM\Column(type="integer")
     */
    protected $order_nr_sub;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    protected $atc;

    /**
     * id of care_pharma_products_main_sub
     *
     * @ORM\Column(type="integer")
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

    public function __construct()
    {
    }

    /**
     * Set the value of sub_order.
     *
     * @param integer $sub_order
     * @return \Entity\CarePharmaOrderlistSubReturn
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
     * Set the value of order_nr_sub.
     *
     * @param integer $order_nr_sub
     * @return \Entity\CarePharmaOrderlistSubReturn
     */
    public function setOrderNrSub($order_nr_sub)
    {
        $this->order_nr_sub = $order_nr_sub;

        return $this;
    }

    /**
     * Get the value of order_nr_sub.
     *
     * @return integer
     */
    public function getOrderNrSub()
    {
        return $this->order_nr_sub;
    }

    /**
     * Set the value of atc.
     *
     * @param string $atc
     * @return \Entity\CarePharmaOrderlistSubReturn
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
     * @param integer $idsub
     * @return \Entity\CarePharmaOrderlistSubReturn
     */
    public function setIdsub($idsub)
    {
        $this->idsub = $idsub;

        return $this;
    }

    /**
     * Get the value of idsub.
     *
     * @return integer
     */
    public function getIdsub()
    {
        return $this->idsub;
    }

    /**
     * Set the value of artikelname.
     *
     * @param string $artikelname
     * @return \Entity\CarePharmaOrderlistSubReturn
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
     * @return \Entity\CarePharmaOrderlistSubReturn
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
     * @return \Entity\CarePharmaOrderlistSubReturn
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
     * @return \Entity\CarePharmaOrderlistSubReturn
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
     * @return \Entity\CarePharmaOrderlistSubReturn
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
     * @return \Entity\CarePharmaOrderlistSubReturn
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
     * @return \Entity\CarePharmaOrderlistSubReturn
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
     * @return \Entity\CarePharmaOrderlistSubReturn
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
     * @return \Entity\CarePharmaOrderlistSubReturn
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

    public function __sleep()
    {
        return array('sub_order', 'order_nr_sub', 'atc', 'idsub', 'artikelname', 'pcs', 'pcs_given', 'unit', 'expiry_date', 'price', 'dose', 'packing', 'value');
    }
}