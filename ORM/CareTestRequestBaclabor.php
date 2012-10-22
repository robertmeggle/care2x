<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\CareTestRequestBaclabor
 *
 * InnoDB free: 8192 kB
 *
 * @ORM\Entity(repositoryClass="CareTestRequestBaclaborRepository")
 * @ORM\Table(name="care_test_request_baclabor", indexes={@ORM\Index(name="send_date", columns={"send_date"})})
 */
class CareTestRequestBaclabor
{
    /**
     * Test request batch number. primary key
     *
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $batch_nr;

    /**
     * Related encounter number
     *
     * @ORM\Column(type="integer")
     */
    protected $encounter_nr;

    /**
     * Department number (foreign key)
     *
     * @ORM\Column(type="smallint")
     */
    protected $dept_nr;

    /**
     * Material type
     *
     * @ORM\Column(type="text")
     */
    protected $material;

    /**
     * @ORM\Column(type="text")
     */
    protected $test_type;

    /**
     * @ORM\Column(type="text")
     */
    protected $material_note;

    /**
     * Supplementary diagnosis notes
     *
     * @ORM\Column(type="text")
     */
    protected $diagnosis_note;

    /**
     * Flag if immune suppressed. 1 = YES, 0 = NO
     *
     * @ORM\Column(type="integer")
     */
    protected $immune_supp;

    /**
     * @ORM\Column(type="date")
     */
    protected $send_date;

    /**
     * Date when sample was taken
     *
     * @ORM\Column(type="date")
     */
    protected $sample_date;

    /**
     * @ORM\Column(type="string", length=10)
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
     * Set the value of batch_nr.
     *
     * @param integer $batch_nr
     * @return \Entity\CareTestRequestBaclabor
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
     * @return \Entity\CareTestRequestBaclabor
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
     * Set the value of dept_nr.
     *
     * @param integer $dept_nr
     * @return \Entity\CareTestRequestBaclabor
     */
    public function setDeptNr($dept_nr)
    {
        $this->dept_nr = $dept_nr;

        return $this;
    }

    /**
     * Get the value of dept_nr.
     *
     * @return integer
     */
    public function getDeptNr()
    {
        return $this->dept_nr;
    }

    /**
     * Set the value of material.
     *
     * @param string $material
     * @return \Entity\CareTestRequestBaclabor
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
     * Set the value of test_type.
     *
     * @param string $test_type
     * @return \Entity\CareTestRequestBaclabor
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
     * Set the value of material_note.
     *
     * @param string $material_note
     * @return \Entity\CareTestRequestBaclabor
     */
    public function setMaterialNote($material_note)
    {
        $this->material_note = $material_note;

        return $this;
    }

    /**
     * Get the value of material_note.
     *
     * @return string
     */
    public function getMaterialNote()
    {
        return $this->material_note;
    }

    /**
     * Set the value of diagnosis_note.
     *
     * @param string $diagnosis_note
     * @return \Entity\CareTestRequestBaclabor
     */
    public function setDiagnosisNote($diagnosis_note)
    {
        $this->diagnosis_note = $diagnosis_note;

        return $this;
    }

    /**
     * Get the value of diagnosis_note.
     *
     * @return string
     */
    public function getDiagnosisNote()
    {
        return $this->diagnosis_note;
    }

    /**
     * Set the value of immune_supp.
     *
     * @param integer $immune_supp
     * @return \Entity\CareTestRequestBaclabor
     */
    public function setImmuneSupp($immune_supp)
    {
        $this->immune_supp = $immune_supp;

        return $this;
    }

    /**
     * Get the value of immune_supp.
     *
     * @return integer
     */
    public function getImmuneSupp()
    {
        return $this->immune_supp;
    }

    /**
     * Set the value of send_date.
     *
     * @param datetime $send_date
     * @return \Entity\CareTestRequestBaclabor
     */
    public function setSendDate($send_date)
    {
        $this->send_date = $send_date;

        return $this;
    }

    /**
     * Get the value of send_date.
     *
     * @return datetime
     */
    public function getSendDate()
    {
        return $this->send_date;
    }

    /**
     * Set the value of sample_date.
     *
     * @param datetime $sample_date
     * @return \Entity\CareTestRequestBaclabor
     */
    public function setSampleDate($sample_date)
    {
        $this->sample_date = $sample_date;

        return $this;
    }

    /**
     * Get the value of sample_date.
     *
     * @return datetime
     */
    public function getSampleDate()
    {
        return $this->sample_date;
    }

    /**
     * Set the value of status.
     *
     * @param string $status
     * @return \Entity\CareTestRequestBaclabor
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
     * @return \Entity\CareTestRequestBaclabor
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
     * @return \Entity\CareTestRequestBaclabor
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
     * @return \Entity\CareTestRequestBaclabor
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
     * @return \Entity\CareTestRequestBaclabor
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
     * @return \Entity\CareTestRequestBaclabor
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
        return array('batch_nr', 'encounter_nr', 'dept_nr', 'material', 'test_type', 'material_note', 'diagnosis_note', 'immune_supp', 'send_date', 'sample_date', 'status', 'history', 'modify_id', 'modify_time', 'create_id', 'create_time');
    }
}