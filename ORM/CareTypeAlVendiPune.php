<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\CareTypeAlVendiPune
 *
 * @ORM\Entity(repositoryClass="CareTypeAlVendiPuneRepository")
 * @ORM\Table(name="care_type_al_vendi_punes", indexes={@ORM\Index(name="idvendi_punes", columns={"idvendi_punes"})})
 */
class CareTypeAlVendiPune
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $idvendi_punes;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $vendi_punes_pershkrim;

    /**
     * @ORM\Column(type="integer")
     */
    protected $id_qarku;

    public function __construct()
    {
    }

    /**
     * Set the value of idvendi_punes.
     *
     * @param integer $idvendi_punes
     * @return \Entity\CareTypeAlVendiPune
     */
    public function setIdvendiPunes($idvendi_punes)
    {
        $this->idvendi_punes = $idvendi_punes;

        return $this;
    }

    /**
     * Get the value of idvendi_punes.
     *
     * @return integer
     */
    public function getIdvendiPunes()
    {
        return $this->idvendi_punes;
    }

    /**
     * Set the value of vendi_punes_pershkrim.
     *
     * @param string $vendi_punes_pershkrim
     * @return \Entity\CareTypeAlVendiPune
     */
    public function setVendiPunesPershkrim($vendi_punes_pershkrim)
    {
        $this->vendi_punes_pershkrim = $vendi_punes_pershkrim;

        return $this;
    }

    /**
     * Get the value of vendi_punes_pershkrim.
     *
     * @return string
     */
    public function getVendiPunesPershkrim()
    {
        return $this->vendi_punes_pershkrim;
    }

    /**
     * Set the value of id_qarku.
     *
     * @param integer $id_qarku
     * @return \Entity\CareTypeAlVendiPune
     */
    public function setIdQarku($id_qarku)
    {
        $this->id_qarku = $id_qarku;

        return $this;
    }

    /**
     * Get the value of id_qarku.
     *
     * @return integer
     */
    public function getIdQarku()
    {
        return $this->id_qarku;
    }

    public function __sleep()
    {
        return array('idvendi_punes', 'vendi_punes_pershkrim', 'id_qarku');
    }
}