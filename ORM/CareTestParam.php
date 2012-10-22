<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\CareTestParam
 *
 * InnoDB free: 8192 kB
 *
 * @ORM\Entity(repositoryClass="CareTestParamRepository")
 * @ORM\Table(name="care_test_param")
 */
class CareTestParam
{
    /**
     * @ORM\Id
     * @ORM\Column(type="smallint")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $nr;

    /**
     * @ORM\Id
     * @ORM\Column(type="string", length=35)
     */
    protected $group_id;

    /**
     * @ORM\Column(type="string", length=35)
     */
    protected $name;

    /**
     * @ORM\Column(type="string", length=50)
     */
    protected $id;

    /**
     * @ORM\Column(type="integer")
     */
    protected $sort_nr;

    /**
     * @ORM\Column(type="string", length=15)
     */
    protected $msr_unit;

    /**
     * @ORM\Column(type="string", length=25)
     */
    protected $status;

    /**
     * for males
     *
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    protected $median;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    protected $hi_bound;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    protected $lo_bound;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    protected $hi_critical;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    protected $lo_critical;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    protected $hi_toxic;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    protected $lo_toxic;

    /**
     * _ f for females
     *
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    protected $median_f;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    protected $hi_bound_f;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    protected $lo_bound_f;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    protected $hi_critical_f;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    protected $lo_critical_f;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    protected $hi_toxic_f;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    protected $lo_toxic_f;

    /**
     * _n for neonatal from 0 to 1 month
     *
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    protected $median_n;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    protected $hi_bound_n;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    protected $lo_bound_n;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    protected $hi_critical_n;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    protected $lo_critical_n;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    protected $hi_toxic_n;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    protected $lo_toxic_n;

    /**
     * _y for children form 1 month to 12 months
     *
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    protected $median_y;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    protected $hi_bound_y;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    protected $lo_bound_y;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    protected $hi_critical_y;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    protected $lo_critical_y;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    protected $hi_toxic_y;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    protected $lo_toxic_y;

    /**
     * _c for children form 1 to 14 years
     *
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    protected $median_c;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    protected $hi_bound_c;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    protected $lo_bound_c;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    protected $hi_critical_c;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    protected $lo_critical_c;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    protected $hi_toxic_c;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    protected $lo_toxic_c;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $method;

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
     * @return \Entity\CareTestParam
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
     * Set the value of group_id.
     *
     * @param string $group_id
     * @return \Entity\CareTestParam
     */
    public function setGroupId($group_id)
    {
        $this->group_id = $group_id;

        return $this;
    }

    /**
     * Get the value of group_id.
     *
     * @return string
     */
    public function getGroupId()
    {
        return $this->group_id;
    }

    /**
     * Set the value of name.
     *
     * @param string $name
     * @return \Entity\CareTestParam
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
     * Set the value of id.
     *
     * @param string $id
     * @return \Entity\CareTestParam
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of id.
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of sort_nr.
     *
     * @param integer $sort_nr
     * @return \Entity\CareTestParam
     */
    public function setSortNr($sort_nr)
    {
        $this->sort_nr = $sort_nr;

        return $this;
    }

    /**
     * Get the value of sort_nr.
     *
     * @return integer
     */
    public function getSortNr()
    {
        return $this->sort_nr;
    }

    /**
     * Set the value of msr_unit.
     *
     * @param string $msr_unit
     * @return \Entity\CareTestParam
     */
    public function setMsrUnit($msr_unit)
    {
        $this->msr_unit = $msr_unit;

        return $this;
    }

    /**
     * Get the value of msr_unit.
     *
     * @return string
     */
    public function getMsrUnit()
    {
        return $this->msr_unit;
    }

    /**
     * Set the value of status.
     *
     * @param string $status
     * @return \Entity\CareTestParam
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
     * Set the value of median.
     *
     * @param string $median
     * @return \Entity\CareTestParam
     */
    public function setMedian($median)
    {
        $this->median = $median;

        return $this;
    }

    /**
     * Get the value of median.
     *
     * @return string
     */
    public function getMedian()
    {
        return $this->median;
    }

    /**
     * Set the value of hi_bound.
     *
     * @param string $hi_bound
     * @return \Entity\CareTestParam
     */
    public function setHiBound($hi_bound)
    {
        $this->hi_bound = $hi_bound;

        return $this;
    }

    /**
     * Get the value of hi_bound.
     *
     * @return string
     */
    public function getHiBound()
    {
        return $this->hi_bound;
    }

    /**
     * Set the value of lo_bound.
     *
     * @param string $lo_bound
     * @return \Entity\CareTestParam
     */
    public function setLoBound($lo_bound)
    {
        $this->lo_bound = $lo_bound;

        return $this;
    }

    /**
     * Get the value of lo_bound.
     *
     * @return string
     */
    public function getLoBound()
    {
        return $this->lo_bound;
    }

    /**
     * Set the value of hi_critical.
     *
     * @param string $hi_critical
     * @return \Entity\CareTestParam
     */
    public function setHiCritical($hi_critical)
    {
        $this->hi_critical = $hi_critical;

        return $this;
    }

    /**
     * Get the value of hi_critical.
     *
     * @return string
     */
    public function getHiCritical()
    {
        return $this->hi_critical;
    }

    /**
     * Set the value of lo_critical.
     *
     * @param string $lo_critical
     * @return \Entity\CareTestParam
     */
    public function setLoCritical($lo_critical)
    {
        $this->lo_critical = $lo_critical;

        return $this;
    }

    /**
     * Get the value of lo_critical.
     *
     * @return string
     */
    public function getLoCritical()
    {
        return $this->lo_critical;
    }

    /**
     * Set the value of hi_toxic.
     *
     * @param string $hi_toxic
     * @return \Entity\CareTestParam
     */
    public function setHiToxic($hi_toxic)
    {
        $this->hi_toxic = $hi_toxic;

        return $this;
    }

    /**
     * Get the value of hi_toxic.
     *
     * @return string
     */
    public function getHiToxic()
    {
        return $this->hi_toxic;
    }

    /**
     * Set the value of lo_toxic.
     *
     * @param string $lo_toxic
     * @return \Entity\CareTestParam
     */
    public function setLoToxic($lo_toxic)
    {
        $this->lo_toxic = $lo_toxic;

        return $this;
    }

    /**
     * Get the value of lo_toxic.
     *
     * @return string
     */
    public function getLoToxic()
    {
        return $this->lo_toxic;
    }

    /**
     * Set the value of median_f.
     *
     * @param string $median_f
     * @return \Entity\CareTestParam
     */
    public function setMedianF($median_f)
    {
        $this->median_f = $median_f;

        return $this;
    }

    /**
     * Get the value of median_f.
     *
     * @return string
     */
    public function getMedianF()
    {
        return $this->median_f;
    }

    /**
     * Set the value of hi_bound_f.
     *
     * @param string $hi_bound_f
     * @return \Entity\CareTestParam
     */
    public function setHiBoundF($hi_bound_f)
    {
        $this->hi_bound_f = $hi_bound_f;

        return $this;
    }

    /**
     * Get the value of hi_bound_f.
     *
     * @return string
     */
    public function getHiBoundF()
    {
        return $this->hi_bound_f;
    }

    /**
     * Set the value of lo_bound_f.
     *
     * @param string $lo_bound_f
     * @return \Entity\CareTestParam
     */
    public function setLoBoundF($lo_bound_f)
    {
        $this->lo_bound_f = $lo_bound_f;

        return $this;
    }

    /**
     * Get the value of lo_bound_f.
     *
     * @return string
     */
    public function getLoBoundF()
    {
        return $this->lo_bound_f;
    }

    /**
     * Set the value of hi_critical_f.
     *
     * @param string $hi_critical_f
     * @return \Entity\CareTestParam
     */
    public function setHiCriticalF($hi_critical_f)
    {
        $this->hi_critical_f = $hi_critical_f;

        return $this;
    }

    /**
     * Get the value of hi_critical_f.
     *
     * @return string
     */
    public function getHiCriticalF()
    {
        return $this->hi_critical_f;
    }

    /**
     * Set the value of lo_critical_f.
     *
     * @param string $lo_critical_f
     * @return \Entity\CareTestParam
     */
    public function setLoCriticalF($lo_critical_f)
    {
        $this->lo_critical_f = $lo_critical_f;

        return $this;
    }

    /**
     * Get the value of lo_critical_f.
     *
     * @return string
     */
    public function getLoCriticalF()
    {
        return $this->lo_critical_f;
    }

    /**
     * Set the value of hi_toxic_f.
     *
     * @param string $hi_toxic_f
     * @return \Entity\CareTestParam
     */
    public function setHiToxicF($hi_toxic_f)
    {
        $this->hi_toxic_f = $hi_toxic_f;

        return $this;
    }

    /**
     * Get the value of hi_toxic_f.
     *
     * @return string
     */
    public function getHiToxicF()
    {
        return $this->hi_toxic_f;
    }

    /**
     * Set the value of lo_toxic_f.
     *
     * @param string $lo_toxic_f
     * @return \Entity\CareTestParam
     */
    public function setLoToxicF($lo_toxic_f)
    {
        $this->lo_toxic_f = $lo_toxic_f;

        return $this;
    }

    /**
     * Get the value of lo_toxic_f.
     *
     * @return string
     */
    public function getLoToxicF()
    {
        return $this->lo_toxic_f;
    }

    /**
     * Set the value of median_n.
     *
     * @param string $median_n
     * @return \Entity\CareTestParam
     */
    public function setMedianN($median_n)
    {
        $this->median_n = $median_n;

        return $this;
    }

    /**
     * Get the value of median_n.
     *
     * @return string
     */
    public function getMedianN()
    {
        return $this->median_n;
    }

    /**
     * Set the value of hi_bound_n.
     *
     * @param string $hi_bound_n
     * @return \Entity\CareTestParam
     */
    public function setHiBoundN($hi_bound_n)
    {
        $this->hi_bound_n = $hi_bound_n;

        return $this;
    }

    /**
     * Get the value of hi_bound_n.
     *
     * @return string
     */
    public function getHiBoundN()
    {
        return $this->hi_bound_n;
    }

    /**
     * Set the value of lo_bound_n.
     *
     * @param string $lo_bound_n
     * @return \Entity\CareTestParam
     */
    public function setLoBoundN($lo_bound_n)
    {
        $this->lo_bound_n = $lo_bound_n;

        return $this;
    }

    /**
     * Get the value of lo_bound_n.
     *
     * @return string
     */
    public function getLoBoundN()
    {
        return $this->lo_bound_n;
    }

    /**
     * Set the value of hi_critical_n.
     *
     * @param string $hi_critical_n
     * @return \Entity\CareTestParam
     */
    public function setHiCriticalN($hi_critical_n)
    {
        $this->hi_critical_n = $hi_critical_n;

        return $this;
    }

    /**
     * Get the value of hi_critical_n.
     *
     * @return string
     */
    public function getHiCriticalN()
    {
        return $this->hi_critical_n;
    }

    /**
     * Set the value of lo_critical_n.
     *
     * @param string $lo_critical_n
     * @return \Entity\CareTestParam
     */
    public function setLoCriticalN($lo_critical_n)
    {
        $this->lo_critical_n = $lo_critical_n;

        return $this;
    }

    /**
     * Get the value of lo_critical_n.
     *
     * @return string
     */
    public function getLoCriticalN()
    {
        return $this->lo_critical_n;
    }

    /**
     * Set the value of hi_toxic_n.
     *
     * @param string $hi_toxic_n
     * @return \Entity\CareTestParam
     */
    public function setHiToxicN($hi_toxic_n)
    {
        $this->hi_toxic_n = $hi_toxic_n;

        return $this;
    }

    /**
     * Get the value of hi_toxic_n.
     *
     * @return string
     */
    public function getHiToxicN()
    {
        return $this->hi_toxic_n;
    }

    /**
     * Set the value of lo_toxic_n.
     *
     * @param string $lo_toxic_n
     * @return \Entity\CareTestParam
     */
    public function setLoToxicN($lo_toxic_n)
    {
        $this->lo_toxic_n = $lo_toxic_n;

        return $this;
    }

    /**
     * Get the value of lo_toxic_n.
     *
     * @return string
     */
    public function getLoToxicN()
    {
        return $this->lo_toxic_n;
    }

    /**
     * Set the value of median_y.
     *
     * @param string $median_y
     * @return \Entity\CareTestParam
     */
    public function setMedianY($median_y)
    {
        $this->median_y = $median_y;

        return $this;
    }

    /**
     * Get the value of median_y.
     *
     * @return string
     */
    public function getMedianY()
    {
        return $this->median_y;
    }

    /**
     * Set the value of hi_bound_y.
     *
     * @param string $hi_bound_y
     * @return \Entity\CareTestParam
     */
    public function setHiBoundY($hi_bound_y)
    {
        $this->hi_bound_y = $hi_bound_y;

        return $this;
    }

    /**
     * Get the value of hi_bound_y.
     *
     * @return string
     */
    public function getHiBoundY()
    {
        return $this->hi_bound_y;
    }

    /**
     * Set the value of lo_bound_y.
     *
     * @param string $lo_bound_y
     * @return \Entity\CareTestParam
     */
    public function setLoBoundY($lo_bound_y)
    {
        $this->lo_bound_y = $lo_bound_y;

        return $this;
    }

    /**
     * Get the value of lo_bound_y.
     *
     * @return string
     */
    public function getLoBoundY()
    {
        return $this->lo_bound_y;
    }

    /**
     * Set the value of hi_critical_y.
     *
     * @param string $hi_critical_y
     * @return \Entity\CareTestParam
     */
    public function setHiCriticalY($hi_critical_y)
    {
        $this->hi_critical_y = $hi_critical_y;

        return $this;
    }

    /**
     * Get the value of hi_critical_y.
     *
     * @return string
     */
    public function getHiCriticalY()
    {
        return $this->hi_critical_y;
    }

    /**
     * Set the value of lo_critical_y.
     *
     * @param string $lo_critical_y
     * @return \Entity\CareTestParam
     */
    public function setLoCriticalY($lo_critical_y)
    {
        $this->lo_critical_y = $lo_critical_y;

        return $this;
    }

    /**
     * Get the value of lo_critical_y.
     *
     * @return string
     */
    public function getLoCriticalY()
    {
        return $this->lo_critical_y;
    }

    /**
     * Set the value of hi_toxic_y.
     *
     * @param string $hi_toxic_y
     * @return \Entity\CareTestParam
     */
    public function setHiToxicY($hi_toxic_y)
    {
        $this->hi_toxic_y = $hi_toxic_y;

        return $this;
    }

    /**
     * Get the value of hi_toxic_y.
     *
     * @return string
     */
    public function getHiToxicY()
    {
        return $this->hi_toxic_y;
    }

    /**
     * Set the value of lo_toxic_y.
     *
     * @param string $lo_toxic_y
     * @return \Entity\CareTestParam
     */
    public function setLoToxicY($lo_toxic_y)
    {
        $this->lo_toxic_y = $lo_toxic_y;

        return $this;
    }

    /**
     * Get the value of lo_toxic_y.
     *
     * @return string
     */
    public function getLoToxicY()
    {
        return $this->lo_toxic_y;
    }

    /**
     * Set the value of median_c.
     *
     * @param string $median_c
     * @return \Entity\CareTestParam
     */
    public function setMedianC($median_c)
    {
        $this->median_c = $median_c;

        return $this;
    }

    /**
     * Get the value of median_c.
     *
     * @return string
     */
    public function getMedianC()
    {
        return $this->median_c;
    }

    /**
     * Set the value of hi_bound_c.
     *
     * @param string $hi_bound_c
     * @return \Entity\CareTestParam
     */
    public function setHiBoundC($hi_bound_c)
    {
        $this->hi_bound_c = $hi_bound_c;

        return $this;
    }

    /**
     * Get the value of hi_bound_c.
     *
     * @return string
     */
    public function getHiBoundC()
    {
        return $this->hi_bound_c;
    }

    /**
     * Set the value of lo_bound_c.
     *
     * @param string $lo_bound_c
     * @return \Entity\CareTestParam
     */
    public function setLoBoundC($lo_bound_c)
    {
        $this->lo_bound_c = $lo_bound_c;

        return $this;
    }

    /**
     * Get the value of lo_bound_c.
     *
     * @return string
     */
    public function getLoBoundC()
    {
        return $this->lo_bound_c;
    }

    /**
     * Set the value of hi_critical_c.
     *
     * @param string $hi_critical_c
     * @return \Entity\CareTestParam
     */
    public function setHiCriticalC($hi_critical_c)
    {
        $this->hi_critical_c = $hi_critical_c;

        return $this;
    }

    /**
     * Get the value of hi_critical_c.
     *
     * @return string
     */
    public function getHiCriticalC()
    {
        return $this->hi_critical_c;
    }

    /**
     * Set the value of lo_critical_c.
     *
     * @param string $lo_critical_c
     * @return \Entity\CareTestParam
     */
    public function setLoCriticalC($lo_critical_c)
    {
        $this->lo_critical_c = $lo_critical_c;

        return $this;
    }

    /**
     * Get the value of lo_critical_c.
     *
     * @return string
     */
    public function getLoCriticalC()
    {
        return $this->lo_critical_c;
    }

    /**
     * Set the value of hi_toxic_c.
     *
     * @param string $hi_toxic_c
     * @return \Entity\CareTestParam
     */
    public function setHiToxicC($hi_toxic_c)
    {
        $this->hi_toxic_c = $hi_toxic_c;

        return $this;
    }

    /**
     * Get the value of hi_toxic_c.
     *
     * @return string
     */
    public function getHiToxicC()
    {
        return $this->hi_toxic_c;
    }

    /**
     * Set the value of lo_toxic_c.
     *
     * @param string $lo_toxic_c
     * @return \Entity\CareTestParam
     */
    public function setLoToxicC($lo_toxic_c)
    {
        $this->lo_toxic_c = $lo_toxic_c;

        return $this;
    }

    /**
     * Get the value of lo_toxic_c.
     *
     * @return string
     */
    public function getLoToxicC()
    {
        return $this->lo_toxic_c;
    }

    /**
     * Set the value of method.
     *
     * @param string $method
     * @return \Entity\CareTestParam
     */
    public function setMethod($method)
    {
        $this->method = $method;

        return $this;
    }

    /**
     * Get the value of method.
     *
     * @return string
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * Set the value of history.
     *
     * @param string $history
     * @return \Entity\CareTestParam
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
     * @return \Entity\CareTestParam
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
     * @return \Entity\CareTestParam
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
     * @return \Entity\CareTestParam
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
     * @return \Entity\CareTestParam
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
        return array('nr', 'group_id', 'name', 'id', 'sort_nr', 'msr_unit', 'status', 'median', 'hi_bound', 'lo_bound', 'hi_critical', 'lo_critical', 'hi_toxic', 'lo_toxic', 'median_f', 'hi_bound_f', 'lo_bound_f', 'hi_critical_f', 'lo_critical_f', 'hi_toxic_f', 'lo_toxic_f', 'median_n', 'hi_bound_n', 'lo_bound_n', 'hi_critical_n', 'lo_critical_n', 'hi_toxic_n', 'lo_toxic_n', 'median_y', 'hi_bound_y', 'lo_bound_y', 'hi_critical_y', 'lo_critical_y', 'hi_toxic_y', 'lo_toxic_y', 'median_c', 'hi_bound_c', 'lo_bound_c', 'hi_critical_c', 'lo_critical_c', 'hi_toxic_c', 'lo_toxic_c', 'method', 'history', 'modify_id', 'modify_time', 'create_id', 'create_time');
    }
}