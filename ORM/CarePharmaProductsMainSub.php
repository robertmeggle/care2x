<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\CarePharmaProductsMainSub
 *
 * InnoDB free: 9216 kB
 *
 * @ORM\Entity(repositoryClass="CarePharmaProductsMainSubRepository")
 * @ORM\Table(name="care_pharma_products_main_sub", uniqueConstraints={@ORM\UniqueConstraint(name="bestellnum", columns={"atc", "expiry_date", "price", "idcare_pharma"})})
 */
class CarePharmaProductsMainSub
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * connection to care_pharma_products_main
     *
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    protected $atc;

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
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $idcare_pharma;

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
     * @return \Entity\CarePharmaProductsMainSub
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
     * Set the value of atc.
     *
     * @param string $atc
     * @return \Entity\CarePharmaProductsMainSub
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
     * Set the value of pcs.
     *
     * @param float $pcs
     * @return \Entity\CarePharmaProductsMainSub
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
     * @return \Entity\CarePharmaProductsMainSub
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
     * @return \Entity\CarePharmaProductsMainSub
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
     * Set the value of idcare_pharma.
     *
     * @param integer $idcare_pharma
     * @return \Entity\CarePharmaProductsMainSub
     */
    public function setIdcarePharma($idcare_pharma)
    {
        $this->idcare_pharma = $idcare_pharma;

        return $this;
    }

    /**
     * Get the value of idcare_pharma.
     *
     * @return integer
     */
    public function getIdcarePharma()
    {
        return $this->idcare_pharma;
    }

    /**
     * Set the value of create_time.
     *
     * @param datetime $create_time
     * @return \Entity\CarePharmaProductsMainSub
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
        return array('id', 'atc', 'pcs', 'expiry_date', 'price', 'idcare_pharma', 'create_time');
    }
}