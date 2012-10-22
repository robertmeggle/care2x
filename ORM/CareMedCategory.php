<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Entity\CareMedCategory
 *
 * @ORM\Entity(repositoryClass="CareMedCategoryRepository")
 * @ORM\Table(name="care_med_categories")
 */
class CareMedCategory
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $name;

    /**
     * @ORM\Column(type="string", length=10)
     */
    protected $category;

    /**
     * @ORM\OneToMany(targetEntity="CarePharmaProductsMain", mappedBy="careMedCategory")
     * @ORM\JoinColumn(name="medgroup", referencedColumnName="id", nullable=false)
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
     * @return \Entity\CareMedCategory
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
     * Set the value of name.
     *
     * @param string $name
     * @return \Entity\CareMedCategory
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of category.
     *
     * @param string $category
     * @return \Entity\CareMedCategory
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get the value of category.
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Add CarePharmaProductsMain entity to collection (one to many).
     *
     * @param \Entity\CarePharmaProductsMain $carePharmaProductsMain
     * @return \Entity\CareMedCategory
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
        return array('id', 'name', 'category');
    }
}