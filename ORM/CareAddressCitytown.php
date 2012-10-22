<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\CareAddressCitytown
 *
 * InnoDB free: 4096 kB
 *
 * @ORM\Entity(repositoryClass="CareAddressCitytownRepository")
 * @ORM\Table(name="care_address_citytown", indexes={@ORM\Index(name="name", columns={"name"})})
 */
class CareAddressCitytown
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $nr;

    /**
     * @ORM\Column(type="string", length=2, nullable=true)
     */
    protected $unece_modifier;

    /**
     * @ORM\Column(type="string", length=15, nullable=true)
     */
    protected $unece_locode;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $name;

    /**
     * @ORM\Column(type="string")
     */
    protected $is_village;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    protected $zip_code;

    /**
     * @ORM\Column(type="string", length=3, nullable=true)
     */
    protected $iso_country_id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $unece_locode_type;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $nat_id_nr;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    protected $unece_coordinates;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $info_url;

    /**
     * @ORM\Column(type="bigint")
     */
    protected $use_frequency;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    protected $status;

    /**
     * @ORM\Column(type="text")
     */
    protected $history;

    /**
     * @ORM\Column(type="string", length=35)
     */
    protected $modify_id;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $modify_time;

    /**
     * @ORM\Column(type="string", length=35)
     */
    protected $create_id;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $create_time;

    public function __construct()
    {
    }

    /**
     * Set the value of nr.
     *
     * @param integer $nr
     * @return \Entity\CareAddressCitytown
     */
    public function setNr($nr)
    {
        $this->nr = $nr;

        return $this;
    }

    /**
     * Get the value of nr.
     *
     * @return integer
     */
    public function getNr()
    {
        return $this->nr;
    }

    /**
     * Set the value of unece_modifier.
     *
     * @param string $unece_modifier
     * @return \Entity\CareAddressCitytown
     */
    public function setUneceModifier($unece_modifier)
    {
        $this->unece_modifier = $unece_modifier;

        return $this;
    }

    /**
     * Get the value of unece_modifier.
     *
     * @return string
     */
    public function getUneceModifier()
    {
        return $this->unece_modifier;
    }

    /**
     * Set the value of unece_locode.
     *
     * @param string $unece_locode
     * @return \Entity\CareAddressCitytown
     */
    public function setUneceLocode($unece_locode)
    {
        $this->unece_locode = $unece_locode;

        return $this;
    }

    /**
     * Get the value of unece_locode.
     *
     * @return string
     */
    public function getUneceLocode()
    {
        return $this->unece_locode;
    }

    /**
     * Set the value of name.
     *
     * @param string $name
     * @return \Entity\CareAddressCitytown
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
     * Set the value of is_village.
     *
     * @param string $is_village
     * @return \Entity\CareAddressCitytown
     */
    public function setIsVillage($is_village)
    {
        $this->is_village = $is_village;

        return $this;
    }

    /**
     * Get the value of is_village.
     *
     * @return string
     */
    public function getIsVillage()
    {
        return $this->is_village;
    }

    /**
     * Set the value of zip_code.
     *
     * @param string $zip_code
     * @return \Entity\CareAddressCitytown
     */
    public function setZipCode($zip_code)
    {
        $this->zip_code = $zip_code;

        return $this;
    }

    /**
     * Get the value of zip_code.
     *
     * @return string
     */
    public function getZipCode()
    {
        return $this->zip_code;
    }

    /**
     * Set the value of iso_country_id.
     *
     * @param string $iso_country_id
     * @return \Entity\CareAddressCitytown
     */
    public function setIsoCountryId($iso_country_id)
    {
        $this->iso_country_id = $iso_country_id;

        return $this;
    }

    /**
     * Get the value of iso_country_id.
     *
     * @return string
     */
    public function getIsoCountryId()
    {
        return $this->iso_country_id;
    }

    /**
     * Set the value of unece_locode_type.
     *
     * @param integer $unece_locode_type
     * @return \Entity\CareAddressCitytown
     */
    public function setUneceLocodeType($unece_locode_type)
    {
        $this->unece_locode_type = $unece_locode_type;

        return $this;
    }

    /**
     * Get the value of unece_locode_type.
     *
     * @return integer
     */
    public function getUneceLocodeType()
    {
        return $this->unece_locode_type;
    }

    /**
     * Set the value of nat_id_nr.
     *
     * @param integer $nat_id_nr
     * @return \Entity\CareAddressCitytown
     */
    public function setNatIdNr($nat_id_nr)
    {
        $this->nat_id_nr = $nat_id_nr;

        return $this;
    }

    /**
     * Get the value of nat_id_nr.
     *
     * @return integer
     */
    public function getNatIdNr()
    {
        return $this->nat_id_nr;
    }

    /**
     * Set the value of unece_coordinates.
     *
     * @param string $unece_coordinates
     * @return \Entity\CareAddressCitytown
     */
    public function setUneceCoordinates($unece_coordinates)
    {
        $this->unece_coordinates = $unece_coordinates;

        return $this;
    }

    /**
     * Get the value of unece_coordinates.
     *
     * @return string
     */
    public function getUneceCoordinates()
    {
        return $this->unece_coordinates;
    }

    /**
     * Set the value of info_url.
     *
     * @param string $info_url
     * @return \Entity\CareAddressCitytown
     */
    public function setInfoUrl($info_url)
    {
        $this->info_url = $info_url;

        return $this;
    }

    /**
     * Get the value of info_url.
     *
     * @return string
     */
    public function getInfoUrl()
    {
        return $this->info_url;
    }

    /**
     * Set the value of use_frequency.
     *
     * @param integer $use_frequency
     * @return \Entity\CareAddressCitytown
     */
    public function setUseFrequency($use_frequency)
    {
        $this->use_frequency = $use_frequency;

        return $this;
    }

    /**
     * Get the value of use_frequency.
     *
     * @return integer
     */
    public function getUseFrequency()
    {
        return $this->use_frequency;
    }

    /**
     * Set the value of status.
     *
     * @param string $status
     * @return \Entity\CareAddressCitytown
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get the value of status.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the value of history.
     *
     * @param string $history
     * @return \Entity\CareAddressCitytown
     */
    public function setHistory($history)
    {
        $this->history = $history;

        return $this;
    }

    /**
     * Get the value of history.
     *
     * @return string
     */
    public function getHistory()
    {
        return $this->history;
    }

    /**
     * Set the value of modify_id.
     *
     * @param string $modify_id
     * @return \Entity\CareAddressCitytown
     */
    public function setModifyId($modify_id)
    {
        $this->modify_id = $modify_id;

        return $this;
    }

    /**
     * Get the value of modify_id.
     *
     * @return string
     */
    public function getModifyId()
    {
        return $this->modify_id;
    }

    /**
     * Set the value of modify_time.
     *
     * @param datetime $modify_time
     * @return \Entity\CareAddressCitytown
     */
    public function setModifyTime($modify_time)
    {
        $this->modify_time = $modify_time;

        return $this;
    }

    /**
     * Get the value of modify_time.
     *
     * @return datetime
     */
    public function getModifyTime()
    {
        return $this->modify_time;
    }

    /**
     * Set the value of create_id.
     *
     * @param string $create_id
     * @return \Entity\CareAddressCitytown
     */
    public function setCreateId($create_id)
    {
        $this->create_id = $create_id;

        return $this;
    }

    /**
     * Get the value of create_id.
     *
     * @return string
     */
    public function getCreateId()
    {
        return $this->create_id;
    }

    /**
     * Set the value of create_time.
     *
     * @param datetime $create_time
     * @return \Entity\CareAddressCitytown
     */
    public function setCreateTime($create_time)
    {
        $this->create_time = $create_time;

        return $this;
    }

    /**
     * Get the value of create_time.
     *
     * @return datetime
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function __sleep()
    {
        return array('nr', 'unece_modifier', 'unece_locode', 'name', 'is_village', 'zip_code', 'iso_country_id', 'unece_locode_type', 'nat_id_nr', 'unece_coordinates', 'info_url', 'use_frequency', 'status', 'history', 'modify_id', 'modify_time', 'create_id', 'create_time');
    }
}