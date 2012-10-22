<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\CareSequence
 *
 * @ORM\Entity(repositoryClass="CareSequenceRepository")
 * @ORM\Table(name="care_sequences")
 */
class CareSequence
{
    /**
     * @ORM\Id
     * @ORM\Column(type="string", length=30)
     */
    protected $name;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $value;

    public function __construct()
    {
    }

    /**
     * Set the value of name.
     *
     * @param string $name
     * @return \Entity\CareSequence
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
     * Set the value of value.
     *
     * @param integer $value
     * @return \Entity\CareSequence
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get the value of value.
     *
     * @return integer
     */
    public function getValue()
    {
        return $this->value;
    }

    public function __sleep()
    {
        return array('name', 'value');
    }
}