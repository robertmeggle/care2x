<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Entity\CarePharmaDilutionType
 *
 * @ORM\Entity(repositoryClass="CarePharmaDilutionTypeRepository")
 * @ORM\Table(name="care_pharma_dilution_type")
 */
class CarePharmaDilutionType
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
    protected $dilution_type;

    /**
     * @ORM\OneToMany(targetEntity="CarePharmaProductsMain", mappedBy="carePharmaDilutionType")
     * @ORM\JoinColumn(name="dilution_type", referencedColumnName="id", nullable=false)
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
     * @return \Entity\CarePharmaDilutionType
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
     * Set the value of dilution_type.
     *
     * @param string $dilution_type
     * @return \Entity\CarePharmaDilutionType
     */
    public function setDilutionType($dilution_type)
    {
        $this->dilution_type = $dilution_type;

        return $this;
    }

    /**
     * Get the value of dilution_type.
     *
     * @return string
     */
    public function getDilutionType()
    {
        return $this->dilution_type;
    }

    /**
     * Add CarePharmaProductsMain entity to collection (one to many).
     *
     * @param \Entity\CarePharmaProductsMain $carePharmaProductsMain
     * @return \Entity\CarePharmaDilutionType
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
        return array('id', 'dilution_type');
    }
}