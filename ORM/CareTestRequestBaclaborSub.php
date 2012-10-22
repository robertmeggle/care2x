<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\CareTestRequestBaclaborSub
 *
 * @ORM\Entity(repositoryClass="CareTestRequestBaclaborSubRepository")
 * @ORM\Table(name="care_test_request_baclabor_sub")
 */
class CareTestRequestBaclaborSub
{
    /**
     * primary key
     *
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $sub_id;

    /**
     * connects to care_test_request_baclabor.batch_nr
     *
     * @ORM\Column(type="integer")
     */
    protected $batch_nr;

    /**
     * Related encounter number
     *
     * @ORM\Column(type="integer")
     */
    protected $encounter_nr;

    /**
     * Type of test requested
     *
     * @ORM\Column(type="string", length=255)
     */
    protected $test_type;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $test_type_value;

    /**
     * Material notes and remarks
     *
     * @ORM\Column(type="string", length=255)
     */
    protected $material;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $material_value;

    public function __construct()
    {
    }

    /**
     * Set the value of sub_id.
     *
     * @param integer $sub_id
     * @return \Entity\CareTestRequestBaclaborSub
     */
    public function setSubId($sub_id)
    {
        $this->sub_id = $sub_id;

        return $this;
    }

    /**
     * Get the value of sub_id.
     *
     * @return integer
     */
    public function getSubId()
    {
        return $this->sub_id;
    }

    /**
     * Set the value of batch_nr.
     *
     * @param integer $batch_nr
     * @return \Entity\CareTestRequestBaclaborSub
     */
    public function setBatchNr($batch_nr)
    {
        $this->batch_nr = $batch_nr;

        return $this;
    }

    /**
     * Get the value of batch_nr.
     *
     * @return integer
     */
    public function getBatchNr()
    {
        return $this->batch_nr;
    }

    /**
     * Set the value of encounter_nr.
     *
     * @param integer $encounter_nr
     * @return \Entity\CareTestRequestBaclaborSub
     */
    public function setEncounterNr($encounter_nr)
    {
        $this->encounter_nr = $encounter_nr;

        return $this;
    }

    /**
     * Get the value of encounter_nr.
     *
     * @return integer
     */
    public function getEncounterNr()
    {
        return $this->encounter_nr;
    }

    /**
     * Set the value of test_type.
     *
     * @param string $test_type
     * @return \Entity\CareTestRequestBaclaborSub
     */
    public function setTestType($test_type)
    {
        $this->test_type = $test_type;

        return $this;
    }

    /**
     * Get the value of test_type.
     *
     * @return string
     */
    public function getTestType()
    {
        return $this->test_type;
    }

    /**
     * Set the value of test_type_value.
     *
     * @param string $test_type_value
     * @return \Entity\CareTestRequestBaclaborSub
     */
    public function setTestTypeValue($test_type_value)
    {
        $this->test_type_value = $test_type_value;

        return $this;
    }

    /**
     * Get the value of test_type_value.
     *
     * @return string
     */
    public function getTestTypeValue()
    {
        return $this->test_type_value;
    }

    /**
     * Set the value of material.
     *
     * @param string $material
     * @return \Entity\CareTestRequestBaclaborSub
     */
    public function setMaterial($material)
    {
        $this->material = $material;

        return $this;
    }

    /**
     * Get the value of material.
     *
     * @return string
     */
    public function getMaterial()
    {
        return $this->material;
    }

    /**
     * Set the value of material_value.
     *
     * @param string $material_value
     * @return \Entity\CareTestRequestBaclaborSub
     */
    public function setMaterialValue($material_value)
    {
        $this->material_value = $material_value;

        return $this;
    }

    /**
     * Get the value of material_value.
     *
     * @return string
     */
    public function getMaterialValue()
    {
        return $this->material_value;
    }

    public function __sleep()
    {
        return array('sub_id', 'batch_nr', 'encounter_nr', 'test_type', 'test_type_value', 'material', 'material_value');
    }
}