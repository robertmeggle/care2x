<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\CareDepartment
 *
 * InnoDB free: 11264 kB
 *
 * @ORM\Entity(repositoryClass="CareDepartmentRepository")
 * @ORM\Table(name="care_department", indexes={@ORM\Index(name="pharma_dept_nr", columns={"pharma_dept_nr"})}, uniqueConstraints={@ORM\UniqueConstraint(name="id", columns={"id"})})
 */
class CareDepartment
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $nr;

    /**
     * @ORM\Column(type="string", length=60)
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=25)
     */
    protected $type;

    /**
     * @ORM\Column(type="string", length=200)
     */
    protected $name_formal;

    /**
     * @ORM\Column(type="string", length=35)
     */
    protected $name_short;

    /**
     * @ORM\Column(type="string", length=225, nullable=true)
     */
    protected $name_alternate;

    /**
     * @ORM\Column(type="string", length=35)
     */
    protected $LD_var;

    /**
     * @ORM\Column(type="text")
     */
    protected $description;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $admit_inpatient;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $admit_outpatient;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $has_oncall_doc;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $has_oncall_nurse;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $does_surgery;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $this_institution;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $is_sub_dept;

    /**
     * @ORM\Column(type="integer")
     */
    protected $parent_dept_nr;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    protected $work_hours;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    protected $consult_hours;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $is_inactive;

    /**
     * @ORM\Column(type="integer")
     */
    protected $sort_order;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $address;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    protected $sig_line;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $sig_stamp;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    protected $logo_mime_type;

    /**
     * @ORM\Column(type="string", length=25)
     */
    protected $status;

    /**
     * @ORM\Column(type="text", nullable=true)
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

    /**
     * is a pharmacy, or a normal dept ?
     *
     * @ORM\Column(type="integer")
     */
    protected $is_pharmacy;

    /**
     * to wich pharmacy i take medicaments ?
     *
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $pharma_dept_nr;

    public function __construct()
    {
    }

    /**
     * Set the value of nr.
     *
     * @param integer $nr
     * @return \Entity\CareDepartment
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
     * Set the value of id.
     *
     * @param string $id
     * @return \Entity\CareDepartment
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
     * Set the value of type.
     *
     * @param string $type
     * @return \Entity\CareDepartment
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get the value of type.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of name_formal.
     *
     * @param string $name_formal
     * @return \Entity\CareDepartment
     */
    public function setNameFormal($name_formal)
    {
        $this->name_formal = $name_formal;

        return $this;
    }

    /**
     * Get the value of name_formal.
     *
     * @return string
     */
    public function getNameFormal()
    {
        return $this->name_formal;
    }

    /**
     * Set the value of name_short.
     *
     * @param string $name_short
     * @return \Entity\CareDepartment
     */
    public function setNameShort($name_short)
    {
        $this->name_short = $name_short;

        return $this;
    }

    /**
     * Get the value of name_short.
     *
     * @return string
     */
    public function getNameShort()
    {
        return $this->name_short;
    }

    /**
     * Set the value of name_alternate.
     *
     * @param string $name_alternate
     * @return \Entity\CareDepartment
     */
    public function setNameAlternate($name_alternate)
    {
        $this->name_alternate = $name_alternate;

        return $this;
    }

    /**
     * Get the value of name_alternate.
     *
     * @return string
     */
    public function getNameAlternate()
    {
        return $this->name_alternate;
    }

    /**
     * Set the value of LD_var.
     *
     * @param string $LD_var
     * @return \Entity\CareDepartment
     */
    public function setLDVar($LD_var)
    {
        $this->LD_var = $LD_var;

        return $this;
    }

    /**
     * Get the value of LD_var.
     *
     * @return string
     */
    public function getLDVar()
    {
        return $this->LD_var;
    }

    /**
     * Set the value of description.
     *
     * @param string $description
     * @return \Entity\CareDepartment
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
     * Set the value of admit_inpatient.
     *
     * @param boolean $admit_inpatient
     * @return \Entity\CareDepartment
     */
    public function setAdmitInpatient($admit_inpatient)
    {
        $this->admit_inpatient = $admit_inpatient;

        return $this;
    }

    /**
     * Get the value of admit_inpatient.
     *
     * @return boolean
     */
    public function getAdmitInpatient()
    {
        return $this->admit_inpatient;
    }

    /**
     * Set the value of admit_outpatient.
     *
     * @param boolean $admit_outpatient
     * @return \Entity\CareDepartment
     */
    public function setAdmitOutpatient($admit_outpatient)
    {
        $this->admit_outpatient = $admit_outpatient;

        return $this;
    }

    /**
     * Get the value of admit_outpatient.
     *
     * @return boolean
     */
    public function getAdmitOutpatient()
    {
        return $this->admit_outpatient;
    }

    /**
     * Set the value of has_oncall_doc.
     *
     * @param boolean $has_oncall_doc
     * @return \Entity\CareDepartment
     */
    public function setHasOncallDoc($has_oncall_doc)
    {
        $this->has_oncall_doc = $has_oncall_doc;

        return $this;
    }

    /**
     * Get the value of has_oncall_doc.
     *
     * @return boolean
     */
    public function getHasOncallDoc()
    {
        return $this->has_oncall_doc;
    }

    /**
     * Set the value of has_oncall_nurse.
     *
     * @param boolean $has_oncall_nurse
     * @return \Entity\CareDepartment
     */
    public function setHasOncallNurse($has_oncall_nurse)
    {
        $this->has_oncall_nurse = $has_oncall_nurse;

        return $this;
    }

    /**
     * Get the value of has_oncall_nurse.
     *
     * @return boolean
     */
    public function getHasOncallNurse()
    {
        return $this->has_oncall_nurse;
    }

    /**
     * Set the value of does_surgery.
     *
     * @param boolean $does_surgery
     * @return \Entity\CareDepartment
     */
    public function setDoesSurgery($does_surgery)
    {
        $this->does_surgery = $does_surgery;

        return $this;
    }

    /**
     * Get the value of does_surgery.
     *
     * @return boolean
     */
    public function getDoesSurgery()
    {
        return $this->does_surgery;
    }

    /**
     * Set the value of this_institution.
     *
     * @param boolean $this_institution
     * @return \Entity\CareDepartment
     */
    public function setThisInstitution($this_institution)
    {
        $this->this_institution = $this_institution;

        return $this;
    }

    /**
     * Get the value of this_institution.
     *
     * @return boolean
     */
    public function getThisInstitution()
    {
        return $this->this_institution;
    }

    /**
     * Set the value of is_sub_dept.
     *
     * @param boolean $is_sub_dept
     * @return \Entity\CareDepartment
     */
    public function setIsSubDept($is_sub_dept)
    {
        $this->is_sub_dept = $is_sub_dept;

        return $this;
    }

    /**
     * Get the value of is_sub_dept.
     *
     * @return boolean
     */
    public function getIsSubDept()
    {
        return $this->is_sub_dept;
    }

    /**
     * Set the value of parent_dept_nr.
     *
     * @param integer $parent_dept_nr
     * @return \Entity\CareDepartment
     */
    public function setParentDeptNr($parent_dept_nr)
    {
        $this->parent_dept_nr = $parent_dept_nr;

        return $this;
    }

    /**
     * Get the value of parent_dept_nr.
     *
     * @return integer
     */
    public function getParentDeptNr()
    {
        return $this->parent_dept_nr;
    }

    /**
     * Set the value of work_hours.
     *
     * @param string $work_hours
     * @return \Entity\CareDepartment
     */
    public function setWorkHours($work_hours)
    {
        $this->work_hours = $work_hours;

        return $this;
    }

    /**
     * Get the value of work_hours.
     *
     * @return string
     */
    public function getWorkHours()
    {
        return $this->work_hours;
    }

    /**
     * Set the value of consult_hours.
     *
     * @param string $consult_hours
     * @return \Entity\CareDepartment
     */
    public function setConsultHours($consult_hours)
    {
        $this->consult_hours = $consult_hours;

        return $this;
    }

    /**
     * Get the value of consult_hours.
     *
     * @return string
     */
    public function getConsultHours()
    {
        return $this->consult_hours;
    }

    /**
     * Set the value of is_inactive.
     *
     * @param boolean $is_inactive
     * @return \Entity\CareDepartment
     */
    public function setIsInactive($is_inactive)
    {
        $this->is_inactive = $is_inactive;

        return $this;
    }

    /**
     * Get the value of is_inactive.
     *
     * @return boolean
     */
    public function getIsInactive()
    {
        return $this->is_inactive;
    }

    /**
     * Set the value of sort_order.
     *
     * @param integer $sort_order
     * @return \Entity\CareDepartment
     */
    public function setSortOrder($sort_order)
    {
        $this->sort_order = $sort_order;

        return $this;
    }

    /**
     * Get the value of sort_order.
     *
     * @return integer
     */
    public function getSortOrder()
    {
        return $this->sort_order;
    }

    /**
     * Set the value of address.
     *
     * @param string $address
     * @return \Entity\CareDepartment
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get the value of address.
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set the value of sig_line.
     *
     * @param string $sig_line
     * @return \Entity\CareDepartment
     */
    public function setSigLine($sig_line)
    {
        $this->sig_line = $sig_line;

        return $this;
    }

    /**
     * Get the value of sig_line.
     *
     * @return string
     */
    public function getSigLine()
    {
        return $this->sig_line;
    }

    /**
     * Set the value of sig_stamp.
     *
     * @param string $sig_stamp
     * @return \Entity\CareDepartment
     */
    public function setSigStamp($sig_stamp)
    {
        $this->sig_stamp = $sig_stamp;

        return $this;
    }

    /**
     * Get the value of sig_stamp.
     *
     * @return string
     */
    public function getSigStamp()
    {
        return $this->sig_stamp;
    }

    /**
     * Set the value of logo_mime_type.
     *
     * @param string $logo_mime_type
     * @return \Entity\CareDepartment
     */
    public function setLogoMimeType($logo_mime_type)
    {
        $this->logo_mime_type = $logo_mime_type;

        return $this;
    }

    /**
     * Get the value of logo_mime_type.
     *
     * @return string
     */
    public function getLogoMimeType()
    {
        return $this->logo_mime_type;
    }

    /**
     * Set the value of status.
     *
     * @param string $status
     * @return \Entity\CareDepartment
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
     * @return \Entity\CareDepartment
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
     * @return \Entity\CareDepartment
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
     * @return \Entity\CareDepartment
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
     * @return \Entity\CareDepartment
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
     * @return \Entity\CareDepartment
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
     * Set the value of is_pharmacy.
     *
     * @param integer $is_pharmacy
     * @return \Entity\CareDepartment
     */
    public function setIsPharmacy($is_pharmacy)
    {
        $this->is_pharmacy = $is_pharmacy;

        return $this;
    }

    /**
     * Get the value of is_pharmacy.
     *
     * @return integer
     */
    public function getIsPharmacy()
    {
        return $this->is_pharmacy;
    }

    /**
     * Set the value of pharma_dept_nr.
     *
     * @param integer $pharma_dept_nr
     * @return \Entity\CareDepartment
     */
    public function setPharmaDeptNr($pharma_dept_nr)
    {
        $this->pharma_dept_nr = $pharma_dept_nr;

        return $this;
    }

    /**
     * Get the value of pharma_dept_nr.
     *
     * @return integer
     */
    public function getPharmaDeptNr()
    {
        return $this->pharma_dept_nr;
    }

    public function __sleep()
    {
        return array('nr', 'id', 'type', 'name_formal', 'name_short', 'name_alternate', 'LD_var', 'description', 'admit_inpatient', 'admit_outpatient', 'has_oncall_doc', 'has_oncall_nurse', 'does_surgery', 'this_institution', 'is_sub_dept', 'parent_dept_nr', 'work_hours', 'consult_hours', 'is_inactive', 'sort_order', 'address', 'sig_line', 'sig_stamp', 'logo_mime_type', 'status', 'history', 'modify_id', 'modify_time', 'create_id', 'create_time', 'is_pharmacy', 'pharma_dept_nr');
    }
}