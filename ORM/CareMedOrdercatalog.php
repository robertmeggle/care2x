<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\CareMedOrdercatalog
 *
 * InnoDB free: 9216 kB
 *
 * @ORM\Entity(repositoryClass="CareMedOrdercatalogRepository")
 * @ORM\Table(name="care_med_ordercatalog", indexes={@ORM\Index(name="item_no", columns={"item_no"})})
 */
class CareMedOrdercatalog
{
    /**
     * @ORM\Id
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
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $supplier_nr;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $dose;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $packing;

    public function __construct()
    {
    }

    /**
     * Set the value of item_no.
     *
     * @param integer $item_no
     * @return \Entity\CareMedOrdercatalog
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
     * @return \Entity\CareMedOrdercatalog
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
     * @return \Entity\CareMedOrdercatalog
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
     * @return \Entity\CareMedOrdercatalog
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
     * @return \Entity\CareMedOrdercatalog
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
     * Set the value of supplier_nr.
     *
     * @param integer $supplier_nr
     * @return \Entity\CareMedOrdercatalog
     */
    public function setSupplierNr($supplier_nr)
    {
        $this->supplier_nr = $supplier_nr;

        return $this;
    }

    /**
     * Get the value of supplier_nr.
     *
     * @return integer
     */
    public function getSupplierNr()
    {
        return $this->supplier_nr;
    }

    /**
     * Set the value of dose.
     *
     * @param string $dose
     * @return \Entity\CareMedOrdercatalog
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
     * @return \Entity\CareMedOrdercatalog
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

    public function __sleep()
    {
        return array('item_no', 'dept_nr', 'hit', 'artikelname', 'atc', 'supplier_nr', 'dose', 'packing');
    }
}