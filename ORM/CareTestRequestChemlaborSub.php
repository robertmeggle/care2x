<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\CareTestRequestChemlaborSub
 *
 * @ORM\Entity(repositoryClass="CareTestRequestChemlaborSubRepository")
 * @ORM\Table(name="care_test_request_chemlabor_sub")
 */
class CareTestRequestChemlaborSub
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $sub_id;

    /**
     * @ORM\Column(type="integer")
     */
    protected $batch_nr;

    /**
     * @ORM\Column(type="integer")
     */
    protected $encounter_nr;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $paramater_name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $parameter_value;

    public function __construct()
    {
    }

    /**
     * Set the value of sub_id.
     *
     * @param integer $sub_id
     * @return \Entity\CareTestRequestChemlaborSub
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
     * @return \Entity\CareTestRequestChemlaborSub
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
     * @return \Entity\CareTestRequestChemlaborSub
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
     * Set the value of paramater_name.
     *
     * @param string $paramater_name
     * @return \Entity\CareTestRequestChemlaborSub
     */
    public function setParamaterName($paramater_name)
    {
        $this->paramater_name = $paramater_name;

        return $this;
    }

    /**
     * Get the value of paramater_name.
     *
     * @return string
     */
    public function getParamaterName()
    {
        return $this->paramater_name;
    }

    /**
     * Set the value of parameter_value.
     *
     * @param string $parameter_value
     * @return \Entity\CareTestRequestChemlaborSub
     */
    public function setParameterValue($parameter_value)
    {
        $this->parameter_value = $parameter_value;

        return $this;
    }

    /**
     * Get the value of parameter_value.
     *
     * @return string
     */
    public function getParameterValue()
    {
        return $this->parameter_value;
    }

    public function __sleep()
    {
        return array('sub_id', 'batch_nr', 'encounter_nr', 'paramater_name', 'parameter_value');
    }
}