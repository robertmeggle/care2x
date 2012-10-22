<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\CareTypeAlQarku
 *
 * @ORM\Entity(repositoryClass="CareTypeAlQarkuRepository")
 * @ORM\Table(name="care_type_al_qarku", indexes={@ORM\Index(name="idqarku", columns={"idqarku"})})
 */
class CareTypeAlQarku
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $idqarku;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $qarku;

    /**
     * @ORM\Column(type="string", length=3)
     */
    protected $kodi_qarku;

    public function __construct()
    {
    }

    /**
     * Set the value of idqarku.
     *
     * @param integer $idqarku
     * @return \Entity\CareTypeAlQarku
     */
    public function setIdqarku($idqarku)
    {
        $this->idqarku = $idqarku;

        return $this;
    }

    /**
     * Get the value of idqarku.
     *
     * @return integer
     */
    public function getIdqarku()
    {
        return $this->idqarku;
    }

    /**
     * Set the value of qarku.
     *
     * @param string $qarku
     * @return \Entity\CareTypeAlQarku
     */
    public function setQarku($qarku)
    {
        $this->qarku = $qarku;

        return $this;
    }

    /**
     * Get the value of qarku.
     *
     * @return string
     */
    public function getQarku()
    {
        return $this->qarku;
    }

    /**
     * Set the value of kodi_qarku.
     *
     * @param string $kodi_qarku
     * @return \Entity\CareTypeAlQarku
     */
    public function setKodiQarku($kodi_qarku)
    {
        $this->kodi_qarku = $kodi_qarku;

        return $this;
    }

    /**
     * Get the value of kodi_qarku.
     *
     * @return string
     */
    public function getKodiQarku()
    {
        return $this->kodi_qarku;
    }

    public function __sleep()
    {
        return array('idqarku', 'qarku', 'kodi_qarku');
    }
}