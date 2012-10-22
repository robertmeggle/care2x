<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Entity\CarePharmaAdministration
 *
 * @ORM\Entity(repositoryClass="CarePharmaAdministrationRepository")
 * @ORM\Table(name="care_pharma_administration")
 */
class CarePharmaAdministration
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
    protected $administration_type;

    /**
     * @ORM\OneToMany(targetEntity="CarePharmaProductsMain", mappedBy="carePharmaAdministration")
     * @ORM\JoinColumn(name="administration_route", referencedColumnName="id", nullable=false)
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
     * @return \Entity\CarePharmaAdministration
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
     * Set the value of administration_type.
     *
     * @param string $administration_type
     * @return \Entity\CarePharmaAdministration
     */
    public function setAdministrationType($administration_type)
    {
        $this->administration_type = $administration_type;

        return $this;
    }

    /**
     * Get the value of administration_type.
     *
     * @return string
     */
    public function getAdministrationType()
    {
        return $this->administration_type;
    }

    /**
     * Add CarePharmaProductsMain entity to collection (one to many).
     *
     * @param \Entity\CarePharmaProductsMain $carePharmaProductsMain
     * @return \Entity\CarePharmaAdministration
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
        return array('id', 'administration_type');
    }
}