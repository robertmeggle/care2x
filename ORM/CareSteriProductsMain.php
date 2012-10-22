<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\CareSteriProductsMain
 *
 * InnoDB free: 8192 kB
 *
 * @ORM\Entity(repositoryClass="CareSteriProductsMainRepository")
 * @ORM\Table(name="care_steri_products_main")
 */
class CareSteriProductsMain
{
    /**
     * @ORM\Column(type="integer")
     */
    protected $bestellnum;

    /**
     * @ORM\Column(type="string", length=15)
     */
    protected $containernum;

    /**
     * @ORM\Column(type="text")
     */
    protected $industrynum;

    /**
     * @ORM\Column(type="string", length=40)
     */
    protected $containername;

    /**
     * @ORM\Column(type="text")
     */
    protected $description;

    /**
     * @ORM\Column(type="text")
     */
    protected $packing;

    /**
     * @ORM\Column(type="integer")
     */
    protected $minorder;

    /**
     * @ORM\Column(type="integer")
     */
    protected $maxorder;

    /**
     * @ORM\Column(type="text")
     */
    protected $proorder;

    /**
     * @ORM\Column(type="text")
     */
    protected $picfile;

    /**
     * @ORM\Column(type="text")
     */
    protected $encoder;

    /**
     * @ORM\Column(type="text")
     */
    protected $enc_date;

    /**
     * @ORM\Column(type="text")
     */
    protected $enc_time;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $lock_flag;

    /**
     * @ORM\Column(type="text")
     */
    protected $medgroup;

    /**
     * @ORM\Column(type="text")
     */
    protected $cave;

    public function __construct()
    {
    }

    /**
     * Set the value of bestellnum.
     *
     * @param integer $bestellnum
     * @return \Entity\CareSteriProductsMain
     */
    public function setBestellnum($bestellnum)
    {
        $this->bestellnum = $bestellnum;

        return $this;
    }

    /**
     * Get the value of bestellnum.
     *
     * @return integer
     */
    public function getBestellnum()
    {
        return $this->bestellnum;
    }

    /**
     * Set the value of containernum.
     *
     * @param string $containernum
     * @return \Entity\CareSteriProductsMain
     */
    public function setContainernum($containernum)
    {
        $this->containernum = $containernum;

        return $this;
    }

    /**
     * Get the value of containernum.
     *
     * @return string
     */
    public function getContainernum()
    {
        return $this->containernum;
    }

    /**
     * Set the value of industrynum.
     *
     * @param string $industrynum
     * @return \Entity\CareSteriProductsMain
     */
    public function setIndustrynum($industrynum)
    {
        $this->industrynum = $industrynum;

        return $this;
    }

    /**
     * Get the value of industrynum.
     *
     * @return string
     */
    public function getIndustrynum()
    {
        return $this->industrynum;
    }

    /**
     * Set the value of containername.
     *
     * @param string $containername
     * @return \Entity\CareSteriProductsMain
     */
    public function setContainername($containername)
    {
        $this->containername = $containername;

        return $this;
    }

    /**
     * Get the value of containername.
     *
     * @return string
     */
    public function getContainername()
    {
        return $this->containername;
    }

    /**
     * Set the value of description.
     *
     * @param string $description
     * @return \Entity\CareSteriProductsMain
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of description.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of packing.
     *
     * @param string $packing
     * @return \Entity\CareSteriProductsMain
     */
    public function setPacking($packing)
    {
        $this->packing = $packing;

        return $this;
    }

    /**
     * Get the value of packing.
     *
     * @return string
     */
    public function getPacking()
    {
        return $this->packing;
    }

    /**
     * Set the value of minorder.
     *
     * @param integer $minorder
     * @return \Entity\CareSteriProductsMain
     */
    public function setMinorder($minorder)
    {
        $this->minorder = $minorder;

        return $this;
    }

    /**
     * Get the value of minorder.
     *
     * @return integer
     */
    public function getMinorder()
    {
        return $this->minorder;
    }

    /**
     * Set the value of maxorder.
     *
     * @param integer $maxorder
     * @return \Entity\CareSteriProductsMain
     */
    public function setMaxorder($maxorder)
    {
        $this->maxorder = $maxorder;

        return $this;
    }

    /**
     * Get the value of maxorder.
     *
     * @return integer
     */
    public function getMaxorder()
    {
        return $this->maxorder;
    }

    /**
     * Set the value of proorder.
     *
     * @param string $proorder
     * @return \Entity\CareSteriProductsMain
     */
    public function setProorder($proorder)
    {
        $this->proorder = $proorder;

        return $this;
    }

    /**
     * Get the value of proorder.
     *
     * @return string
     */
    public function getProorder()
    {
        return $this->proorder;
    }

    /**
     * Set the value of picfile.
     *
     * @param string $picfile
     * @return \Entity\CareSteriProductsMain
     */
    public function setPicfile($picfile)
    {
        $this->picfile = $picfile;

        return $this;
    }

    /**
     * Get the value of picfile.
     *
     * @return string
     */
    public function getPicfile()
    {
        return $this->picfile;
    }

    /**
     * Set the value of encoder.
     *
     * @param string $encoder
     * @return \Entity\CareSteriProductsMain
     */
    public function setEncoder($encoder)
    {
        $this->encoder = $encoder;

        return $this;
    }

    /**
     * Get the value of encoder.
     *
     * @return string
     */
    public function getEncoder()
    {
        return $this->encoder;
    }

    /**
     * Set the value of enc_date.
     *
     * @param string $enc_date
     * @return \Entity\CareSteriProductsMain
     */
    public function setEncDate($enc_date)
    {
        $this->enc_date = $enc_date;

        return $this;
    }

    /**
     * Get the value of enc_date.
     *
     * @return string
     */
    public function getEncDate()
    {
        return $this->enc_date;
    }

    /**
     * Set the value of enc_time.
     *
     * @param string $enc_time
     * @return \Entity\CareSteriProductsMain
     */
    public function setEncTime($enc_time)
    {
        $this->enc_time = $enc_time;

        return $this;
    }

    /**
     * Get the value of enc_time.
     *
     * @return string
     */
    public function getEncTime()
    {
        return $this->enc_time;
    }

    /**
     * Set the value of lock_flag.
     *
     * @param boolean $lock_flag
     * @return \Entity\CareSteriProductsMain
     */
    public function setLockFlag($lock_flag)
    {
        $this->lock_flag = $lock_flag;

        return $this;
    }

    /**
     * Get the value of lock_flag.
     *
     * @return boolean
     */
    public function getLockFlag()
    {
        return $this->lock_flag;
    }

    /**
     * Set the value of medgroup.
     *
     * @param string $medgroup
     * @return \Entity\CareSteriProductsMain
     */
    public function setMedgroup($medgroup)
    {
        $this->medgroup = $medgroup;

        return $this;
    }

    /**
     * Get the value of medgroup.
     *
     * @return string
     */
    public function getMedgroup()
    {
        return $this->medgroup;
    }

    /**
     * Set the value of cave.
     *
     * @param string $cave
     * @return \Entity\CareSteriProductsMain
     */
    public function setCave($cave)
    {
        $this->cave = $cave;

        return $this;
    }

    /**
     * Get the value of cave.
     *
     * @return string
     */
    public function getCave()
    {
        return $this->cave;
    }

    public function __sleep()
    {
        return array('bestellnum', 'containernum', 'industrynum', 'containername', 'description', 'packing', 'minorder', 'maxorder', 'proorder', 'picfile', 'encoder', 'enc_date', 'enc_time', 'lock_flag', 'medgroup', 'cave');
    }
}