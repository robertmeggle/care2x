<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\CareVersion
 *
 * InnoDB free: 7168 kB
 *
 * @ORM\Entity(repositoryClass="CareVersionRepository")
 * @ORM\Table(name="care_version")
 */
class CareVersion
{
    /**
     * @ORM\Column(type="string", length=20)
     */
    protected $name;

    /**
     * @ORM\Column(type="string", length=20)
     */
    protected $type;

    /**
     * @ORM\Column(type="string", length=10)
     */
    protected $number;

    /**
     * @ORM\Column(type="string", length=5)
     */
    protected $build;

    /**
     * @ORM\Column(type="date")
     */
    protected $date;

    /**
     * @ORM\Column(type="time")
     */
    protected $time;

    /**
     * @ORM\Column(type="string", length=30)
     */
    protected $releaser;

    public function __construct()
    {
    }

    /**
     * Set the value of name.
     *
     * @param string $name
     * @return \Entity\CareVersion
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
     * Set the value of type.
     *
     * @param string $type
     * @return \Entity\CareVersion
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get the value of type.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of number.
     *
     * @param string $number
     * @return \Entity\CareVersion
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get the value of number.
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set the value of build.
     *
     * @param string $build
     * @return \Entity\CareVersion
     */
    public function setBuild($build)
    {
        $this->build = $build;

        return $this;
    }

    /**
     * Get the value of build.
     *
     * @return string
     */
    public function getBuild()
    {
        return $this->build;
    }

    /**
     * Set the value of date.
     *
     * @param datetime $date
     * @return \Entity\CareVersion
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get the value of date.
     *
     * @return datetime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set the value of time.
     *
     * @param datetime $time
     * @return \Entity\CareVersion
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Get the value of time.
     *
     * @return datetime
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Set the value of releaser.
     *
     * @param string $releaser
     * @return \Entity\CareVersion
     */
    public function setReleaser($releaser)
    {
        $this->releaser = $releaser;

        return $this;
    }

    /**
     * Get the value of releaser.
     *
     * @return string
     */
    public function getReleaser()
    {
        return $this->releaser;
    }

    public function __sleep()
    {
        return array('name', 'type', 'number', 'build', 'date', 'time', 'releaser');
    }
}