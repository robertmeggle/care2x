<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\CareSession
 *
 * InnoDB free: 8192 kB
 *
 * @ORM\Entity(repositoryClass="CareSessionRepository")
 * @ORM\Table(name="care_sessions", indexes={@ORM\Index(name="EXPIRY", columns={"EXPIRY"})})
 */
class CareSession
{
    /**
     * @ORM\Id
     * @ORM\Column(type="string", length=32)
     */
    protected $SESSKEY;

    /**
     * @ORM\Column(type="integer")
     */
    protected $EXPIRY;

    /**
     * @ORM\Column(type="string", length=64)
     */
    protected $expireref;

    /**
     * @ORM\Column(type="text")
     */
    protected $DATA;

    public function __construct()
    {
    }

    /**
     * Set the value of SESSKEY.
     *
     * @param string $SESSKEY
     * @return \Entity\CareSession
     */
    public function setSESSKEY($SESSKEY)
    {
        $this->SESSKEY = $SESSKEY;

        return $this;
    }

    /**
     * Get the value of SESSKEY.
     *
     * @return string
     */
    public function getSESSKEY()
    {
        return $this->SESSKEY;
    }

    /**
     * Set the value of EXPIRY.
     *
     * @param integer $EXPIRY
     * @return \Entity\CareSession
     */
    public function setEXPIRY($EXPIRY)
    {
        $this->EXPIRY = $EXPIRY;

        return $this;
    }

    /**
     * Get the value of EXPIRY.
     *
     * @return integer
     */
    public function getEXPIRY()
    {
        return $this->EXPIRY;
    }

    /**
     * Set the value of expireref.
     *
     * @param string $expireref
     * @return \Entity\CareSession
     */
    public function setExpireref($expireref)
    {
        $this->expireref = $expireref;

        return $this;
    }

    /**
     * Get the value of expireref.
     *
     * @return string
     */
    public function getExpireref()
    {
        return $this->expireref;
    }

    /**
     * Set the value of DATA.
     *
     * @param string $DATA
     * @return \Entity\CareSession
     */
    public function setDATA($DATA)
    {
        $this->DATA = $DATA;

        return $this;
    }

    /**
     * Get the value of DATA.
     *
     * @return string
     */
    public function getDATA()
    {
        return $this->DATA;
    }

    public function __sleep()
    {
        return array('SESSKEY', 'EXPIRY', 'expireref', 'DATA');
    }
}