<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\CarePharmaProductsMainMovementsReturn
 *
 * InnoDB free: 9216 kB
 *
 * @ORM\Entity(repositoryClass="CarePharmaProductsMainMovementsReturnRepository")
 * @ORM\Table(name="care_pharma_products_main_movements_return", indexes={@ORM\Index(name="medicament", columns={"atc"}), @ORM\Index(name="bill_nr", columns={"bill_nr"})}, uniqueConstraints={@ORM\UniqueConstraint(name="dept_id", columns={"dept_id", "data", "bill_nr", "atc", "qty", "price", "value", "expiry_date", "id_sub"})})
 */
class CarePharmaProductsMainMovementsReturn
{
    /**
     * @ORM\Id
     * @ORM\Column(type="bigint")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="integer")
     */
    protected $dept_id;

    /**
     * @ORM\Column(type="date")
     */
    protected $data;

    /**
     * @ORM\Column(type="integer")
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
     * @ORM\Column(type="float")
     */
    protected $qty_given;

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
     * lidhja me nenkatelen e produktit
     *
     * @ORM\Column(type="integer")
     */
    protected $id_sub;

    public function __construct()
    {
    }

    /**
     * Set the value of id.
     *
     * @param integer $id
     * @return \Entity\CarePharmaProductsMainMovementsReturn
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
     * Set the value of dept_id.
     *
     * @param integer $dept_id
     * @return \Entity\CarePharmaProductsMainMovementsReturn
     */
    public function setDeptId($dept_id)
    {
        $this->dept_id = $dept_id;

        return $this;
    }

    /**
     * Get the value of dept_id.
     *
     * @return integer
     */
    public function getDeptId()
    {
        return $this->dept_id;
    }

    /**
     * Set the value of data.
     *
     * @param datetime $data
     * @return \Entity\CarePharmaProductsMainMovementsReturn
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
     * @param integer $bill_nr
     * @return \Entity\CarePharmaProductsMainMovementsReturn
     */
    public function setBillNr($bill_nr)
    {
        $this->bill_nr = $bill_nr;

        return $this;
    }

    /**
     * Get the value of bill_nr.
     *
     * @return integer
     */
    public function getBillNr()
    {
        return $this->bill_nr;
    }

    /**
     * Set the value of atc.
     *
     * @param string $atc
     * @return \Entity\CarePharmaProductsMainMovementsReturn
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
     * @return \Entity\CarePharmaProductsMainMovementsReturn
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
     * Set the value of qty_given.
     *
     * @param float $qty_given
     * @return \Entity\CarePharmaProductsMainMovementsReturn
     */
    public function setQtyGiven($qty_given)
    {
        $this->qty_given = $qty_given;

        return $this;
    }

    /**
     * Get the value of qty_given.
     *
     * @return float
     */
    public function getQtyGiven()
    {
        return $this->qty_given;
    }

    /**
     * Set the value of price.
     *
     * @param float $price
     * @return \Entity\CarePharmaProductsMainMovementsReturn
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
     * @return \Entity\CarePharmaProductsMainMovementsReturn
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
     * @return \Entity\CarePharmaProductsMainMovementsReturn
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
     * Set the value of id_sub.
     *
     * @param integer $id_sub
     * @return \Entity\CarePharmaProductsMainMovementsReturn
     */
    public function setIdSub($id_sub)
    {
        $this->id_sub = $id_sub;

        return $this;
    }

    /**
     * Get the value of id_sub.
     *
     * @return integer
     */
    public function getIdSub()
    {
        return $this->id_sub;
    }

    public function __sleep()
    {
        return array('id', 'dept_id', 'data', 'bill_nr', 'atc', 'qty', 'qty_given', 'price', 'value', 'expiry_date', 'id_sub');
    }
}