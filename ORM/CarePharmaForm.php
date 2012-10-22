<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Entity\CarePharmaForm
 *
 * @ORM\Entity(repositoryClass="CarePharmaFormRepository")
 * @ORM\Table(name="care_pharma_form")
 */
class CarePharmaForm
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
    protected $form_type;

    /**
     * @ORM\OneToMany(targetEntity="CarePharmaProductsMain", mappedBy="carePharmaForm")
     * @ORM\JoinColumn(name="form_type", referencedColumnName="id", nullable=false)
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
     * @return \Entity\CarePharmaForm
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
     * Set the value of form_type.
     *
     * @param string $form_type
     * @return \Entity\CarePharmaForm
     */
    public function setFormType($form_type)
    {
        $this->form_type = $form_type;

        return $this;
    }

    /**
     * Get the value of form_type.
     *
     * @return string
     */
    public function getFormType()
    {
        return $this->form_type;
    }

    /**
     * Add CarePharmaProductsMain entity to collection (one to many).
     *
     * @param \Entity\CarePharmaProductsMain $carePharmaProductsMain
     * @return \Entity\CarePharmaForm
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
        return array('id', 'form_type');
    }
}