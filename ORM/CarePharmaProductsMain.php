<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\CarePharmaProductsMain
 *
 * @ORM\Entity(repositoryClass="CarePharmaProductsMainRepository")
 * @ORM\Table(name="care_pharma_products_main", indexes={@ORM\Index(name="bestellnum", columns={"atc"}), @ORM\Index(name="fk_care_pharma_products_main_care_pharma_dilution_type1_idx", columns={}), @ORM\Index(name="fk_care_pharma_products_main_care_pharma_form1_idx", columns={}), @ORM\Index(name="fk_care_pharma_products_main_care_pharma_administration1_idx", columns={}), @ORM\Index(name="fk_care_pharma_products_main_care_pharma_unit1_idx", columns={}), @ORM\Index(name="fk_care_pharma_products_main_care_med_categories1_idx", columns={})})
 */
class CarePharmaProductsMain
{
    /**
     * @ORM\Id
     * @ORM\Column(type="string", length=25)
     */
    protected $atc;

    /**
     * connection to sub table
     *
     * @ORM\Column(type="integer")
     */
    protected $id_sub;

    /**
     * @ORM\Column(type="text")
     */
    protected $artikelnum;

    /**
     * @ORM\Column(type="text")
     */
    protected $industrynum;

    /**
     * @ORM\Column(type="text")
     */
    protected $artikelname;

    /**
     * @ORM\Column(type="text")
     */
    protected $generic;

    /**
     * @ORM\Column(type="text")
     */
    protected $description;

    /**
     * @ORM\Column(type="text")
     */
    protected $packing;

    /**
     * @ORM\Column(type="text")
     */
    protected $dose;

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
    protected $cave;

    /**
     * @ORM\Column(type="string", length=20)
     */
    protected $status;

    /**
     * @ORM\Column(type="integer")
     */
    protected $minpcs;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $unit;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $dilution;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $pharma_form;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $base_unit;

    /**
     * @ORM\Column(type="text")
     */
    protected $warehouse;

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
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $create_time;

    /**
     * @ORM\ManyToOne(targetEntity="CareMedCategory", inversedBy="carePharmaProductsMains")
     * @ORM\JoinColumn(name="medgroup", referencedColumnName="id", nullable=false)
     */
    protected $careMedCategory;

    /**
     * @ORM\ManyToOne(targetEntity="CarePharmaUnit", inversedBy="carePharmaProductsMains")
     * @ORM\JoinColumn(name="unit_type", referencedColumnName="id", nullable=false)
     */
    protected $carePharmaUnit;

    /**
     * @ORM\ManyToOne(targetEntity="CarePharmaDilutionType", inversedBy="carePharmaProductsMains")
     * @ORM\JoinColumn(name="dilution_type", referencedColumnName="id", nullable=false)
     */
    protected $carePharmaDilutionType;

    /**
     * @ORM\ManyToOne(targetEntity="CarePharmaForm", inversedBy="carePharmaProductsMains")
     * @ORM\JoinColumn(name="form_type", referencedColumnName="id", nullable=false)
     */
    protected $carePharmaForm;

    /**
     * @ORM\ManyToOne(targetEntity="CarePharmaAdministration", inversedBy="carePharmaProductsMains")
     * @ORM\JoinColumn(name="administration_route", referencedColumnName="id", nullable=false)
     */
    protected $carePharmaAdministration;

    public function __construct()
    {
    }

    /**
     * Set the value of atc.
     *
     * @param string $atc
     * @return \Entity\CarePharmaProductsMain
     */
    public function setAtc($atc)
    {
        $this->atc = $atc;

        return $this;
    }

    /**
     * Get the value of atc.
     *
     * @return string
     */
    public function getAtc()
    {
        return $this->atc;
    }

    /**
     * Set the value of id_sub.
     *
     * @param integer $id_sub
     * @return \Entity\CarePharmaProductsMain
     */
    public function setIdSub($id_sub)
    {
        $this->id_sub = $id_sub;

        return $this;
    }

    /**
     * Get the value of id_sub.
     *
     * @return integer
     */
    public function getIdSub()
    {
        return $this->id_sub;
    }

    /**
     * Set the value of artikelnum.
     *
     * @param string $artikelnum
     * @return \Entity\CarePharmaProductsMain
     */
    public function setArtikelnum($artikelnum)
    {
        $this->artikelnum = $artikelnum;

        return $this;
    }

    /**
     * Get the value of artikelnum.
     *
     * @return string
     */
    public function getArtikelnum()
    {
        return $this->artikelnum;
    }

    /**
     * Set the value of industrynum.
     *
     * @param string $industrynum
     * @return \Entity\CarePharmaProductsMain
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
     * Set the value of artikelname.
     *
     * @param string $artikelname
     * @return \Entity\CarePharmaProductsMain
     */
    public function setArtikelname($artikelname)
    {
        $this->artikelname = $artikelname;

        return $this;
    }

    /**
     * Get the value of artikelname.
     *
     * @return string
     */
    public function getArtikelname()
    {
        return $this->artikelname;
    }

    /**
     * Set the value of generic.
     *
     * @param string $generic
     * @return \Entity\CarePharmaProductsMain
     */
    public function setGeneric($generic)
    {
        $this->generic = $generic;

        return $this;
    }

    /**
     * Get the value of generic.
     *
     * @return string
     */
    public function getGeneric()
    {
        return $this->generic;
    }

    /**
     * Set the value of description.
     *
     * @param string $description
     * @return \Entity\CarePharmaProductsMain
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
     * @return \Entity\CarePharmaProductsMain
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
     * Set the value of dose.
     *
     * @param string $dose
     * @return \Entity\CarePharmaProductsMain
     */
    public function setDose($dose)
    {
        $this->dose = $dose;

        return $this;
    }

    /**
     * Get the value of dose.
     *
     * @return string
     */
    public function getDose()
    {
        return $this->dose;
    }

    /**
     * Set the value of minorder.
     *
     * @param integer $minorder
     * @return \Entity\CarePharmaProductsMain
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
     * @return \Entity\CarePharmaProductsMain
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
     * @return \Entity\CarePharmaProductsMain
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
     * @return \Entity\CarePharmaProductsMain
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
     * @return \Entity\CarePharmaProductsMain
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
     * @return \Entity\CarePharmaProductsMain
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
     * @return \Entity\CarePharmaProductsMain
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
     * @return \Entity\CarePharmaProductsMain
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
     * Set the value of cave.
     *
     * @param string $cave
     * @return \Entity\CarePharmaProductsMain
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

    /**
     * Set the value of status.
     *
     * @param string $status
     * @return \Entity\CarePharmaProductsMain
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
     * Set the value of minpcs.
     *
     * @param integer $minpcs
     * @return \Entity\CarePharmaProductsMain
     */
    public function setMinpcs($minpcs)
    {
        $this->minpcs = $minpcs;

        return $this;
    }

    /**
     * Get the value of minpcs.
     *
     * @return integer
     */
    public function getMinpcs()
    {
        return $this->minpcs;
    }

    /**
     * Set the value of unit.
     *
     * @param string $unit
     * @return \Entity\CarePharmaProductsMain
     */
    public function setUnit($unit)
    {
        $this->unit = $unit;

        return $this;
    }

    /**
     * Get the value of unit.
     *
     * @return string
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * Set the value of dilution.
     *
     * @param string $dilution
     * @return \Entity\CarePharmaProductsMain
     */
    public function setDilution($dilution)
    {
        $this->dilution = $dilution;

        return $this;
    }

    /**
     * Get the value of dilution.
     *
     * @return string
     */
    public function getDilution()
    {
        return $this->dilution;
    }

    /**
     * Set the value of pharma_form.
     *
     * @param string $pharma_form
     * @return \Entity\CarePharmaProductsMain
     */
    public function setPharmaForm($pharma_form)
    {
        $this->pharma_form = $pharma_form;

        return $this;
    }

    /**
     * Get the value of pharma_form.
     *
     * @return string
     */
    public function getPharmaForm()
    {
        return $this->pharma_form;
    }

    /**
     * Set the value of base_unit.
     *
     * @param integer $base_unit
     * @return \Entity\CarePharmaProductsMain
     */
    public function setBaseUnit($base_unit)
    {
        $this->base_unit = $base_unit;

        return $this;
    }

    /**
     * Get the value of base_unit.
     *
     * @return integer
     */
    public function getBaseUnit()
    {
        return $this->base_unit;
    }

    /**
     * Set the value of warehouse.
     *
     * @param string $warehouse
     * @return \Entity\CarePharmaProductsMain
     */
    public function setWarehouse($warehouse)
    {
        $this->warehouse = $warehouse;

        return $this;
    }

    /**
     * Get the value of warehouse.
     *
     * @return string
     */
    public function getWarehouse()
    {
        return $this->warehouse;
    }

    /**
     * Set the value of history.
     *
     * @param string $history
     * @return \Entity\CarePharmaProductsMain
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
     * @return \Entity\CarePharmaProductsMain
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
     * @return \Entity\CarePharmaProductsMain
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
     * @return \Entity\CarePharmaProductsMain
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
     * @return \Entity\CarePharmaProductsMain
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

    /**
     * Set CareMedCategory entity (many to one).
     *
     * @param \Entity\CareMedCategory $careMedCategory
     * @return \Entity\CarePharmaProductsMain
     */
    public function setCareMedCategory(CareMedCategory $careMedCategory = null)
    {
        $this->careMedCategory = $careMedCategory;

        return $this;
    }

    /**
     * Get CareMedCategory entity (many to one).
     *
     * @return \Entity\CareMedCategory
     */
    public function getCareMedCategory()
    {
        return $this->careMedCategory;
    }

    /**
     * Set CarePharmaUnit entity (many to one).
     *
     * @param \Entity\CarePharmaUnit $carePharmaUnit
     * @return \Entity\CarePharmaProductsMain
     */
    public function setCarePharmaUnit(CarePharmaUnit $carePharmaUnit = null)
    {
        $this->carePharmaUnit = $carePharmaUnit;

        return $this;
    }

    /**
     * Get CarePharmaUnit entity (many to one).
     *
     * @return \Entity\CarePharmaUnit
     */
    public function getCarePharmaUnit()
    {
        return $this->carePharmaUnit;
    }

    /**
     * Set CarePharmaDilutionType entity (many to one).
     *
     * @param \Entity\CarePharmaDilutionType $carePharmaDilutionType
     * @return \Entity\CarePharmaProductsMain
     */
    public function setCarePharmaDilutionType(CarePharmaDilutionType $carePharmaDilutionType = null)
    {
        $this->carePharmaDilutionType = $carePharmaDilutionType;

        return $this;
    }

    /**
     * Get CarePharmaDilutionType entity (many to one).
     *
     * @return \Entity\CarePharmaDilutionType
     */
    public function getCarePharmaDilutionType()
    {
        return $this->carePharmaDilutionType;
    }

    /**
     * Set CarePharmaForm entity (many to one).
     *
     * @param \Entity\CarePharmaForm $carePharmaForm
     * @return \Entity\CarePharmaProductsMain
     */
    public function setCarePharmaForm(CarePharmaForm $carePharmaForm = null)
    {
        $this->carePharmaForm = $carePharmaForm;

        return $this;
    }

    /**
     * Get CarePharmaForm entity (many to one).
     *
     * @return \Entity\CarePharmaForm
     */
    public function getCarePharmaForm()
    {
        return $this->carePharmaForm;
    }

    /**
     * Set CarePharmaAdministration entity (many to one).
     *
     * @param \Entity\CarePharmaAdministration $carePharmaAdministration
     * @return \Entity\CarePharmaProductsMain
     */
    public function setCarePharmaAdministration(CarePharmaAdministration $carePharmaAdministration = null)
    {
        $this->carePharmaAdministration = $carePharmaAdministration;

        return $this;
    }

    /**
     * Get CarePharmaAdministration entity (many to one).
     *
     * @return \Entity\CarePharmaAdministration
     */
    public function getCarePharmaAdministration()
    {
        return $this->carePharmaAdministration;
    }

    public function __sleep()
    {
        return array('atc', 'id_sub', 'artikelnum', 'industrynum', 'artikelname', 'generic', 'description', 'packing', 'dose', 'minorder', 'maxorder', 'proorder', 'picfile', 'encoder', 'enc_date', 'enc_time', 'lock_flag', 'medgroup', 'cave', 'status', 'minpcs', 'unit', 'unit_type', 'dilution', 'dilution_type', 'pharma_form', 'form_type', 'administration_route', 'base_unit', 'warehouse', 'history', 'modify_id', 'modify_time', 'create_id', 'create_time');
    }
}