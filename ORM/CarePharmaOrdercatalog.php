<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\CarePharmaOrdercatalog
 *
 * @ORM\Entity(repositoryClass="CarePharmaOrdercatalogRepository")
 * @ORM\Table(name="care_pharma_ordercatalog", indexes={@ORM\Index(name="item_no", columns={"item_no"})})
 */
class CarePharmaOrdercatalog
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $item_no;

    /**
     * @ORM\Column(type="integer")
     */
    protected $dept_nr;

    /**
     * @ORM\Column(type="integer")
     */
    protected $hit;

    /**
     * @ORM\Column(type="text")
     */
    protected $artikelname;

    /**
     * @ORM\Column(type="string", length=20)
     */
    protected $atc;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $dose;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $packing;

    /**
     * @ORM\Column(type="float")
     */
    protected $quantity;

    public function __construct()
    {
    }

    /**
     * Set the value of item_no.
     *
     * @param integer $item_no
     * @return \Entity\CarePharmaOrdercatalog
     */
    public function setItemNo($item_no)
    {
        $this->item_no = $item_no;

        return $this;
    }

    /**
     * Get the value of item_no.
     *
     * @return integer
     */
    public function getItemNo()
    {
        return $this->item_no;
    }

    /**
     * Set the value of dept_nr.
     *
     * @param integer $dept_nr
     * @return \Entity\CarePharmaOrdercatalog
     */
    public function setDeptNr($dept_nr)
    {
        $this->dept_nr = $dept_nr;

        return $this;
    }

    /**
     * Get the value of dept_nr.
     *
     * @return integer
     */
    public function getDeptNr()
    {
        return $this->dept_nr;
    }

    /**
     * Set the value of hit.
     *
     * @param integer $hit
     * @return \Entity\CarePharmaOrdercatalog
     */
    public function setHit($hit)
    {
        $this->hit = $hit;

        return $this;
    }

    /**
     * Get the value of hit.
     *
     * @return integer
     */
    public function getHit()
    {
        return $this->hit;
    }

    /**
     * Set the value of artikelname.
     *
     * @param string $artikelname
     * @return \Entity\CarePharmaOrdercatalog
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
     * Set the value of atc.
     *
     * @param string $atc
     * @return \Entity\CarePharmaOrdercatalog
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
     * Set the value of dose.
     *
     * @param string $dose
     * @return \Entity\CarePharmaOrdercatalog
     */
    public function setDose($dose)
    {
        $this->dose = $dose;

        return $this;
    }

    /**
     * Get the value of dose.
     *
     * @return string
     */
    public function getDose()
    {
        return $this->dose;
    }

    /**
     * Set the value of packing.
     *
     * @param string $packing
     * @return \Entity\CarePharmaOrdercatalog
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
     * Set the value of quantity.
     *
     * @param float $quantity
     * @return \Entity\CarePharmaOrdercatalog
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get the value of quantity.
     *
     * @return float
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    public function __sleep()
    {
        return array('item_no', 'dept_nr', 'hit', 'artikelname', 'atc', 'dose', 'packing', 'quantity');
    }
}