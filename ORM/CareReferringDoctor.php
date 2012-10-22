<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\CareReferringDoctor
 *
 * @ORM\Entity(repositoryClass="CareReferringDoctorRepository")
 * @ORM\Table(name="care_referring_doctor", indexes={@ORM\Index(name="name", columns={"name"})})
 */
class CareReferringDoctor
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $nr;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $name;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $surname;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    protected $cel_nr;

    /**
     * @ORM\Column(type="integer")
     */
    protected $city_town;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    protected $health_center;

    /**
     * @ORM\Column(type="string", length=25)
     */
    protected $doctor_code;

    /**
     * @ORM\Column(type="integer")
     */
    protected $qendra_shedetesore;

    /**
     * @ORM\Column(type="integer")
     */
    protected $qarku;

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
     * @return \Entity\CareReferringDoctor
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
     * Set the value of name.
     *
     * @param string $name
     * @return \Entity\CareReferringDoctor
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
     * Set the value of surname.
     *
     * @param string $surname
     * @return \Entity\CareReferringDoctor
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * Get the value of surname.
     *
     * @return string
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Set the value of cel_nr.
     *
     * @param string $cel_nr
     * @return \Entity\CareReferringDoctor
     */
    public function setCelNr($cel_nr)
    {
        $this->cel_nr = $cel_nr;

        return $this;
    }

    /**
     * Get the value of cel_nr.
     *
     * @return string
     */
    public function getCelNr()
    {
        return $this->cel_nr;
    }

    /**
     * Set the value of city_town.
     *
     * @param integer $city_town
     * @return \Entity\CareReferringDoctor
     */
    public function setCityTown($city_town)
    {
        $this->city_town = $city_town;

        return $this;
    }

    /**
     * Get the value of city_town.
     *
     * @return integer
     */
    public function getCityTown()
    {
        return $this->city_town;
    }

    /**
     * Set the value of health_center.
     *
     * @param string $health_center
     * @return \Entity\CareReferringDoctor
     */
    public function setHealthCenter($health_center)
    {
        $this->health_center = $health_center;

        return $this;
    }

    /**
     * Get the value of health_center.
     *
     * @return string
     */
    public function getHealthCenter()
    {
        return $this->health_center;
    }

    /**
     * Set the value of doctor_code.
     *
     * @param string $doctor_code
     * @return \Entity\CareReferringDoctor
     */
    public function setDoctorCode($doctor_code)
    {
        $this->doctor_code = $doctor_code;

        return $this;
    }

    /**
     * Get the value of doctor_code.
     *
     * @return string
     */
    public function getDoctorCode()
    {
        return $this->doctor_code;
    }

    /**
     * Set the value of qendra_shedetesore.
     *
     * @param integer $qendra_shedetesore
     * @return \Entity\CareReferringDoctor
     */
    public function setQendraShedetesore($qendra_shedetesore)
    {
        $this->qendra_shedetesore = $qendra_shedetesore;

        return $this;
    }

    /**
     * Get the value of qendra_shedetesore.
     *
     * @return integer
     */
    public function getQendraShedetesore()
    {
        return $this->qendra_shedetesore;
    }

    /**
     * Set the value of qarku.
     *
     * @param integer $qarku
     * @return \Entity\CareReferringDoctor
     */
    public function setQarku($qarku)
    {
        $this->qarku = $qarku;

        return $this;
    }

    /**
     * Get the value of qarku.
     *
     * @return integer
     */
    public function getQarku()
    {
        return $this->qarku;
    }

    /**
     * Set the value of status.
     *
     * @param string $status
     * @return \Entity\CareReferringDoctor
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
     * @return \Entity\CareReferringDoctor
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
     * @return \Entity\CareReferringDoctor
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
     * @return \Entity\CareReferringDoctor
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
     * @return \Entity\CareReferringDoctor
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
     * @return \Entity\CareReferringDoctor
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
        return array('nr', 'name', 'surname', 'cel_nr', 'city_town', 'health_center', 'doctor_code', 'qendra_shedetesore', 'qarku', 'status', 'history', 'modify_id', 'modify_time', 'create_id', 'create_time');
    }
}