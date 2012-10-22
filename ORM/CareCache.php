<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\CareCache
 *
 * InnoDB free: 3072 kB
 *
 * @ORM\Entity(repositoryClass="CareCacheRepository")
 * @ORM\Table(name="care_cache")
 */
class CareCache
{
    /**
     * @ORM\Id
     * @ORM\Column(type="string", length=125)
     */
    protected $id;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $ctext;

    /**
     * @ORM\Column(type="blob", nullable=true)
     */
    protected $cbinary;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $tstamp;

    public function __construct()
    {
    }

    /**
     * Set the value of id.
     *
     * @param string $id
     * @return \Entity\CareCache
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of id.
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of ctext.
     *
     * @param string $ctext
     * @return \Entity\CareCache
     */
    public function setCtext($ctext)
    {
        $this->ctext = $ctext;

        return $this;
    }

    /**
     * Get the value of ctext.
     *
     * @return string
     */
    public function getCtext()
    {
        return $this->ctext;
    }

    /**
     * Set the value of cbinary.
     *
     * @param string $cbinary
     * @return \Entity\CareCache
     */
    public function setCbinary($cbinary)
    {
        $this->cbinary = $cbinary;

        return $this;
    }

    /**
     * Get the value of cbinary.
     *
     * @return string
     */
    public function getCbinary()
    {
        return $this->cbinary;
    }

    /**
     * Set the value of tstamp.
     *
     * @param datetime $tstamp
     * @return \Entity\CareCache
     */
    public function setTstamp($tstamp)
    {
        $this->tstamp = $tstamp;

        return $this;
    }

    /**
     * Get the value of tstamp.
     *
     * @return datetime
     */
    public function getTstamp()
    {
        return $this->tstamp;
    }

    public function __sleep()
    {
        return array('id', 'ctext', 'cbinary', 'tstamp');
    }
}