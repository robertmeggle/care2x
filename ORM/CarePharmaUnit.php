<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Entity\CarePharmaUnit
 *
 * @ORM\Entity(repositoryClass="CarePharmaUnitRepository")
 * @ORM\Table(name="care_pharma_unit")
 */
class CarePharmaUnit
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $unit;

    /**
     * @ORM\OneToMany(targetEntity="CarePharmaProductsMain", mappedBy="carePharmaUnit")
     * @ORM\JoinColumn(name="unit_type", referencedColumnName="id", nullable=false)
     */
    protected $carePharmaProductsMains;

    public function __construct()
    {
        $this->carePharmaProductsMains = new ArrayCollection();
    }

    /**
     * Set the value of id.
     *
     * @param integer $id
     * @return \Entity\CarePharmaUnit
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
     * Set the value of unit.
     *
     * @param string $unit
     * @return \Entity\CarePharmaUnit
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
     * Add CarePharmaProductsMain entity to collection (one to many).
     *
     * @param \Entity\CarePharmaProductsMain $carePharmaProductsMain
     * @return \Entity\CarePharmaUnit
     */
    public function addCarePharmaProductsMain(CarePharmaProductsMain $carePharmaProductsMain)
    {
        $this->carePharmaProductsMains[] = $carePharmaProductsMain;

        return $this;
    }

    /**
     * Get CarePharmaProductsMain entity collection (one to many).
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCarePharmaProductsMains()
    {
        return $this->carePharmaProductsMains;
    }

    public function __sleep()
    {
        return array('id', 'unit');
    }
}