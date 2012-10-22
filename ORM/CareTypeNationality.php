<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\CareTypeNationality
 *
 * @ORM\Entity(repositoryClass="CareTypeNationalityRepository")
 * @ORM\Table(name="care_type_nationality")
 */
class CareTypeNationality
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id_nationality;

    /**
     * @ORM\Column(type="string", length=150)
     */
    protected $nationality;

    public function __construct()
    {
    }

    /**
     * Set the value of id_nationality.
     *
     * @param integer $id_nationality
     * @return \Entity\CareTypeNationality
     */
    public function setIdNationality($id_nationality)
    {
        $this->id_nationality = $id_nationality;

        return $this;
    }

    /**
     * Get the value of id_nationality.
     *
     * @return integer
     */
    public function getIdNationality()
    {
        return $this->id_nationality;
    }

    /**
     * Set the value of nationality.
     *
     * @param string $nationality
     * @return \Entity\CareTypeNationality
     */
    public function setNationality($nationality)
    {
        $this->nationality = $nationality;

        return $this;
    }

    /**
     * Get the value of nationality.
     *
     * @return string
     */
    public function getNationality()
    {
        return $this->nationality;
    }

    public function __sleep()
    {
        return array('id_nationality', 'nationality');
    }
}