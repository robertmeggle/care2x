<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\CarePerson
 *
 * InnoDB free: 9216 kB
 *
 * @ORM\Entity(repositoryClass="CarePersonRepository")
 * @ORM\Table(name="care_person", indexes={@ORM\Index(name="name_last", columns={"name_last"}), @ORM\Index(name="name_first", columns={"name_first"}), @ORM\Index(name="date_reg", columns={"date_reg"}), @ORM\Index(name="date_birth", columns={"date_birth"}), @ORM\Index(name="pid", columns={"pid"})})
 */
class CarePerson
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $pid;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $date_reg;

    /**
     * @ORM\Column(type="string", length=60)
     */
    protected $name_first;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    protected $name_2;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    protected $name_3;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    protected $name_middle;

    /**
     * @ORM\Column(type="string", length=60)
     */
    protected $name_last;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    protected $name_maiden;

    /**
     * @ORM\Column(type="text")
     */
    protected $name_others;

    /**
     * @ORM\Column(type="date")
     */
    protected $date_birth;

    /**
     * @ORM\Column(type="string", length=2)
     */
    protected $blood_group;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    protected $addr_str;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    protected $addr_str_nr;

    /**
     * @ORM\Column(type="string", length=15, nullable=true)
     */
    protected $addr_zip;

    /**
     * @ORM\Column(type="integer")
     */
    protected $addr_citytown_nr;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $addr_is_valid;

    /**
     * @ORM\Column(type="string", length=35, nullable=true)
     */
    protected $citizenship;

    /**
     * @ORM\Column(type="string", length=15, nullable=true)
     */
    protected $phone_1_code;

    /**
     * @ORM\Column(type="string", length=35, nullable=true)
     */
    protected $phone_1_nr;

    /**
     * @ORM\Column(type="string", length=15, nullable=true)
     */
    protected $phone_2_code;

    /**
     * @ORM\Column(type="string", length=35, nullable=true)
     */
    protected $phone_2_nr;

    /**
     * @ORM\Column(type="string", length=35, nullable=true)
     */
    protected $cellphone_1_nr;

    /**
     * @ORM\Column(type="string", length=35, nullable=true)
     */
    protected $cellphone_2_nr;

    /**
     * @ORM\Column(type="string", length=35, nullable=true)
     */
    protected $fax;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    protected $email;

    /**
     * @ORM\Column(type="string", length=35)
     */
    protected $civil_status;

    /**
     * @ORM\Column(type="string", length=1)
     */
    protected $sex;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    protected $title;

    /**
     * @ORM\Column(type="blob", nullable=true)
     */
    protected $photo;

    /**
     * @ORM\Column(type="string", length=60)
     */
    protected $photo_filename;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $ethnic_orig;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    protected $org_id;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    protected $sss_nr;

    /**
     * @ORM\Column(type="string", length=60)
     */
    protected $nat_id_nr;

    /**
     * @ORM\Column(type="string", length=125, nullable=true)
     */
    protected $religion;

    /**
     * @ORM\Column(type="integer")
     */
    protected $mother_pid;

    /**
     * @ORM\Column(type="integer")
     */
    protected $father_pid;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $contact_person;

    /**
     * @ORM\Column(type="integer")
     */
    protected $contact_pid;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    protected $contact_relation;

    /**
     * @ORM\Column(type="date")
     */
    protected $death_date;

    /**
     * @ORM\Column(type="integer")
     */
    protected $death_encounter_nr;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $death_cause;

    /**
     * @ORM\Column(type="string", length=15, nullable=true)
     */
    protected $death_cause_code;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $date_update;

    /**
     * @ORM\Column(type="string", length=20)
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
     * Set the value of pid.
     *
     * @param integer $pid
     * @return \Entity\CarePerson
     */
    public function setPid($pid)
    {
        $this->pid = $pid;

        return $this;
    }

    /**
     * Get the value of pid.
     *
     * @return integer
     */
    public function getPid()
    {
        return $this->pid;
    }

    /**
     * Set the value of date_reg.
     *
     * @param datetime $date_reg
     * @return \Entity\CarePerson
     */
    public function setDateReg($date_reg)
    {
        $this->date_reg = $date_reg;

        return $this;
    }

    /**
     * Get the value of date_reg.
     *
     * @return datetime
     */
    public function getDateReg()
    {
        return $this->date_reg;
    }

    /**
     * Set the value of name_first.
     *
     * @param string $name_first
     * @return \Entity\CarePerson
     */
    public function setNameFirst($name_first)
    {
        $this->name_first = $name_first;

        return $this;
    }

    /**
     * Get the value of name_first.
     *
     * @return string
     */
    public function getNameFirst()
    {
        return $this->name_first;
    }

    /**
     * Set the value of name_2.
     *
     * @param string $name_2
     * @return \Entity\CarePerson
     */
    public function setName2($name_2)
    {
        $this->name_2 = $name_2;

        return $this;
    }

    /**
     * Get the value of name_2.
     *
     * @return string
     */
    public function getName2()
    {
        return $this->name_2;
    }

    /**
     * Set the value of name_3.
     *
     * @param string $name_3
     * @return \Entity\CarePerson
     */
    public function setName3($name_3)
    {
        $this->name_3 = $name_3;

        return $this;
    }

    /**
     * Get the value of name_3.
     *
     * @return string
     */
    public function getName3()
    {
        return $this->name_3;
    }

    /**
     * Set the value of name_middle.
     *
     * @param string $name_middle
     * @return \Entity\CarePerson
     */
    public function setNameMiddle($name_middle)
    {
        $this->name_middle = $name_middle;

        return $this;
    }

    /**
     * Get the value of name_middle.
     *
     * @return string
     */
    public function getNameMiddle()
    {
        return $this->name_middle;
    }

    /**
     * Set the value of name_last.
     *
     * @param string $name_last
     * @return \Entity\CarePerson
     */
    public function setNameLast($name_last)
    {
        $this->name_last = $name_last;

        return $this;
    }

    /**
     * Get the value of name_last.
     *
     * @return string
     */
    public function getNameLast()
    {
        return $this->name_last;
    }

    /**
     * Set the value of name_maiden.
     *
     * @param string $name_maiden
     * @return \Entity\CarePerson
     */
    public function setNameMaiden($name_maiden)
    {
        $this->name_maiden = $name_maiden;

        return $this;
    }

    /**
     * Get the value of name_maiden.
     *
     * @return string
     */
    public function getNameMaiden()
    {
        return $this->name_maiden;
    }

    /**
     * Set the value of name_others.
     *
     * @param string $name_others
     * @return \Entity\CarePerson
     */
    public function setNameOthers($name_others)
    {
        $this->name_others = $name_others;

        return $this;
    }

    /**
     * Get the value of name_others.
     *
     * @return string
     */
    public function getNameOthers()
    {
        return $this->name_others;
    }

    /**
     * Set the value of date_birth.
     *
     * @param datetime $date_birth
     * @return \Entity\CarePerson
     */
    public function setDateBirth($date_birth)
    {
        $this->date_birth = $date_birth;

        return $this;
    }

    /**
     * Get the value of date_birth.
     *
     * @return datetime
     */
    public function getDateBirth()
    {
        return $this->date_birth;
    }

    /**
     * Set the value of blood_group.
     *
     * @param string $blood_group
     * @return \Entity\CarePerson
     */
    public function setBloodGroup($blood_group)
    {
        $this->blood_group = $blood_group;

        return $this;
    }

    /**
     * Get the value of blood_group.
     *
     * @return string
     */
    public function getBloodGroup()
    {
        return $this->blood_group;
    }

    /**
     * Set the value of addr_str.
     *
     * @param string $addr_str
     * @return \Entity\CarePerson
     */
    public function setAddrStr($addr_str)
    {
        $this->addr_str = $addr_str;

        return $this;
    }

    /**
     * Get the value of addr_str.
     *
     * @return string
     */
    public function getAddrStr()
    {
        return $this->addr_str;
    }

    /**
     * Set the value of addr_str_nr.
     *
     * @param string $addr_str_nr
     * @return \Entity\CarePerson
     */
    public function setAddrStrNr($addr_str_nr)
    {
        $this->addr_str_nr = $addr_str_nr;

        return $this;
    }

    /**
     * Get the value of addr_str_nr.
     *
     * @return string
     */
    public function getAddrStrNr()
    {
        return $this->addr_str_nr;
    }

    /**
     * Set the value of addr_zip.
     *
     * @param string $addr_zip
     * @return \Entity\CarePerson
     */
    public function setAddrZip($addr_zip)
    {
        $this->addr_zip = $addr_zip;

        return $this;
    }

    /**
     * Get the value of addr_zip.
     *
     * @return string
     */
    public function getAddrZip()
    {
        return $this->addr_zip;
    }

    /**
     * Set the value of addr_citytown_nr.
     *
     * @param integer $addr_citytown_nr
     * @return \Entity\CarePerson
     */
    public function setAddrCitytownNr($addr_citytown_nr)
    {
        $this->addr_citytown_nr = $addr_citytown_nr;

        return $this;
    }

    /**
     * Get the value of addr_citytown_nr.
     *
     * @return integer
     */
    public function getAddrCitytownNr()
    {
        return $this->addr_citytown_nr;
    }

    /**
     * Set the value of addr_is_valid.
     *
     * @param boolean $addr_is_valid
     * @return \Entity\CarePerson
     */
    public function setAddrIsValid($addr_is_valid)
    {
        $this->addr_is_valid = $addr_is_valid;

        return $this;
    }

    /**
     * Get the value of addr_is_valid.
     *
     * @return boolean
     */
    public function getAddrIsValid()
    {
        return $this->addr_is_valid;
    }

    /**
     * Set the value of citizenship.
     *
     * @param string $citizenship
     * @return \Entity\CarePerson
     */
    public function setCitizenship($citizenship)
    {
        $this->citizenship = $citizenship;

        return $this;
    }

    /**
     * Get the value of citizenship.
     *
     * @return string
     */
    public function getCitizenship()
    {
        return $this->citizenship;
    }

    /**
     * Set the value of phone_1_code.
     *
     * @param string $phone_1_code
     * @return \Entity\CarePerson
     */
    public function setPhone1Code($phone_1_code)
    {
        $this->phone_1_code = $phone_1_code;

        return $this;
    }

    /**
     * Get the value of phone_1_code.
     *
     * @return string
     */
    public function getPhone1Code()
    {
        return $this->phone_1_code;
    }

    /**
     * Set the value of phone_1_nr.
     *
     * @param string $phone_1_nr
     * @return \Entity\CarePerson
     */
    public function setPhone1Nr($phone_1_nr)
    {
        $this->phone_1_nr = $phone_1_nr;

        return $this;
    }

    /**
     * Get the value of phone_1_nr.
     *
     * @return string
     */
    public function getPhone1Nr()
    {
        return $this->phone_1_nr;
    }

    /**
     * Set the value of phone_2_code.
     *
     * @param string $phone_2_code
     * @return \Entity\CarePerson
     */
    public function setPhone2Code($phone_2_code)
    {
        $this->phone_2_code = $phone_2_code;

        return $this;
    }

    /**
     * Get the value of phone_2_code.
     *
     * @return string
     */
    public function getPhone2Code()
    {
        return $this->phone_2_code;
    }

    /**
     * Set the value of phone_2_nr.
     *
     * @param string $phone_2_nr
     * @return \Entity\CarePerson
     */
    public function setPhone2Nr($phone_2_nr)
    {
        $this->phone_2_nr = $phone_2_nr;

        return $this;
    }

    /**
     * Get the value of phone_2_nr.
     *
     * @return string
     */
    public function getPhone2Nr()
    {
        return $this->phone_2_nr;
    }

    /**
     * Set the value of cellphone_1_nr.
     *
     * @param string $cellphone_1_nr
     * @return \Entity\CarePerson
     */
    public function setCellphone1Nr($cellphone_1_nr)
    {
        $this->cellphone_1_nr = $cellphone_1_nr;

        return $this;
    }

    /**
     * Get the value of cellphone_1_nr.
     *
     * @return string
     */
    public function getCellphone1Nr()
    {
        return $this->cellphone_1_nr;
    }

    /**
     * Set the value of cellphone_2_nr.
     *
     * @param string $cellphone_2_nr
     * @return \Entity\CarePerson
     */
    public function setCellphone2Nr($cellphone_2_nr)
    {
        $this->cellphone_2_nr = $cellphone_2_nr;

        return $this;
    }

    /**
     * Get the value of cellphone_2_nr.
     *
     * @return string
     */
    public function getCellphone2Nr()
    {
        return $this->cellphone_2_nr;
    }

    /**
     * Set the value of fax.
     *
     * @param string $fax
     * @return \Entity\CarePerson
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get the value of fax.
     *
     * @return string
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set the value of email.
     *
     * @param string $email
     * @return \Entity\CarePerson
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of email.
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of civil_status.
     *
     * @param string $civil_status
     * @return \Entity\CarePerson
     */
    public function setCivilStatus($civil_status)
    {
        $this->civil_status = $civil_status;

        return $this;
    }

    /**
     * Get the value of civil_status.
     *
     * @return string
     */
    public function getCivilStatus()
    {
        return $this->civil_status;
    }

    /**
     * Set the value of sex.
     *
     * @param string $sex
     * @return \Entity\CarePerson
     */
    public function setSex($sex)
    {
        $this->sex = $sex;

        return $this;
    }

    /**
     * Get the value of sex.
     *
     * @return string
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * Set the value of title.
     *
     * @param string $title
     * @return \Entity\CarePerson
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of title.
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of photo.
     *
     * @param string $photo
     * @return \Entity\CarePerson
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get the value of photo.
     *
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set the value of photo_filename.
     *
     * @param string $photo_filename
     * @return \Entity\CarePerson
     */
    public function setPhotoFilename($photo_filename)
    {
        $this->photo_filename = $photo_filename;

        return $this;
    }

    /**
     * Get the value of photo_filename.
     *
     * @return string
     */
    public function getPhotoFilename()
    {
        return $this->photo_filename;
    }

    /**
     * Set the value of ethnic_orig.
     *
     * @param integer $ethnic_orig
     * @return \Entity\CarePerson
     */
    public function setEthnicOrig($ethnic_orig)
    {
        $this->ethnic_orig = $ethnic_orig;

        return $this;
    }

    /**
     * Get the value of ethnic_orig.
     *
     * @return integer
     */
    public function getEthnicOrig()
    {
        return $this->ethnic_orig;
    }

    /**
     * Set the value of org_id.
     *
     * @param string $org_id
     * @return \Entity\CarePerson
     */
    public function setOrgId($org_id)
    {
        $this->org_id = $org_id;

        return $this;
    }

    /**
     * Get the value of org_id.
     *
     * @return string
     */
    public function getOrgId()
    {
        return $this->org_id;
    }

    /**
     * Set the value of sss_nr.
     *
     * @param string $sss_nr
     * @return \Entity\CarePerson
     */
    public function setSssNr($sss_nr)
    {
        $this->sss_nr = $sss_nr;

        return $this;
    }

    /**
     * Get the value of sss_nr.
     *
     * @return string
     */
    public function getSssNr()
    {
        return $this->sss_nr;
    }

    /**
     * Set the value of nat_id_nr.
     *
     * @param string $nat_id_nr
     * @return \Entity\CarePerson
     */
    public function setNatIdNr($nat_id_nr)
    {
        $this->nat_id_nr = $nat_id_nr;

        return $this;
    }

    /**
     * Get the value of nat_id_nr.
     *
     * @return string
     */
    public function getNatIdNr()
    {
        return $this->nat_id_nr;
    }

    /**
     * Set the value of religion.
     *
     * @param string $religion
     * @return \Entity\CarePerson
     */
    public function setReligion($religion)
    {
        $this->religion = $religion;

        return $this;
    }

    /**
     * Get the value of religion.
     *
     * @return string
     */
    public function getReligion()
    {
        return $this->religion;
    }

    /**
     * Set the value of mother_pid.
     *
     * @param integer $mother_pid
     * @return \Entity\CarePerson
     */
    public function setMotherPid($mother_pid)
    {
        $this->mother_pid = $mother_pid;

        return $this;
    }

    /**
     * Get the value of mother_pid.
     *
     * @return integer
     */
    public function getMotherPid()
    {
        return $this->mother_pid;
    }

    /**
     * Set the value of father_pid.
     *
     * @param integer $father_pid
     * @return \Entity\CarePerson
     */
    public function setFatherPid($father_pid)
    {
        $this->father_pid = $father_pid;

        return $this;
    }

    /**
     * Get the value of father_pid.
     *
     * @return integer
     */
    public function getFatherPid()
    {
        return $this->father_pid;
    }

    /**
     * Set the value of contact_person.
     *
     * @param string $contact_person
     * @return \Entity\CarePerson
     */
    public function setContactPerson($contact_person)
    {
        $this->contact_person = $contact_person;

        return $this;
    }

    /**
     * Get the value of contact_person.
     *
     * @return string
     */
    public function getContactPerson()
    {
        return $this->contact_person;
    }

    /**
     * Set the value of contact_pid.
     *
     * @param integer $contact_pid
     * @return \Entity\CarePerson
     */
    public function setContactPid($contact_pid)
    {
        $this->contact_pid = $contact_pid;

        return $this;
    }

    /**
     * Get the value of contact_pid.
     *
     * @return integer
     */
    public function getContactPid()
    {
        return $this->contact_pid;
    }

    /**
     * Set the value of contact_relation.
     *
     * @param string $contact_relation
     * @return \Entity\CarePerson
     */
    public function setContactRelation($contact_relation)
    {
        $this->contact_relation = $contact_relation;

        return $this;
    }

    /**
     * Get the value of contact_relation.
     *
     * @return string
     */
    public function getContactRelation()
    {
        return $this->contact_relation;
    }

    /**
     * Set the value of death_date.
     *
     * @param datetime $death_date
     * @return \Entity\CarePerson
     */
    public function setDeathDate($death_date)
    {
        $this->death_date = $death_date;

        return $this;
    }

    /**
     * Get the value of death_date.
     *
     * @return datetime
     */
    public function getDeathDate()
    {
        return $this->death_date;
    }

    /**
     * Set the value of death_encounter_nr.
     *
     * @param integer $death_encounter_nr
     * @return \Entity\CarePerson
     */
    public function setDeathEncounterNr($death_encounter_nr)
    {
        $this->death_encounter_nr = $death_encounter_nr;

        return $this;
    }

    /**
     * Get the value of death_encounter_nr.
     *
     * @return integer
     */
    public function getDeathEncounterNr()
    {
        return $this->death_encounter_nr;
    }

    /**
     * Set the value of death_cause.
     *
     * @param string $death_cause
     * @return \Entity\CarePerson
     */
    public function setDeathCause($death_cause)
    {
        $this->death_cause = $death_cause;

        return $this;
    }

    /**
     * Get the value of death_cause.
     *
     * @return string
     */
    public function getDeathCause()
    {
        return $this->death_cause;
    }

    /**
     * Set the value of death_cause_code.
     *
     * @param string $death_cause_code
     * @return \Entity\CarePerson
     */
    public function setDeathCauseCode($death_cause_code)
    {
        $this->death_cause_code = $death_cause_code;

        return $this;
    }

    /**
     * Get the value of death_cause_code.
     *
     * @return string
     */
    public function getDeathCauseCode()
    {
        return $this->death_cause_code;
    }

    /**
     * Set the value of date_update.
     *
     * @param datetime $date_update
     * @return \Entity\CarePerson
     */
    public function setDateUpdate($date_update)
    {
        $this->date_update = $date_update;

        return $this;
    }

    /**
     * Get the value of date_update.
     *
     * @return datetime
     */
    public function getDateUpdate()
    {
        return $this->date_update;
    }

    /**
     * Set the value of status.
     *
     * @param string $status
     * @return \Entity\CarePerson
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
     * @return \Entity\CarePerson
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
     * @return \Entity\CarePerson
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
     * @return \Entity\CarePerson
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
     * @return \Entity\CarePerson
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
     * @return \Entity\CarePerson
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
        return array('pid', 'date_reg', 'name_first', 'name_2', 'name_3', 'name_middle', 'name_last', 'name_maiden', 'name_others', 'date_birth', 'blood_group', 'addr_str', 'addr_str_nr', 'addr_zip', 'addr_citytown_nr', 'addr_is_valid', 'citizenship', 'phone_1_code', 'phone_1_nr', 'phone_2_code', 'phone_2_nr', 'cellphone_1_nr', 'cellphone_2_nr', 'fax', 'email', 'civil_status', 'sex', 'title', 'photo', 'photo_filename', 'ethnic_orig', 'org_id', 'sss_nr', 'nat_id_nr', 'religion', 'mother_pid', 'father_pid', 'contact_person', 'contact_pid', 'contact_relation', 'death_date', 'death_encounter_nr', 'death_cause', 'death_cause_code', 'date_update', 'status', 'history', 'modify_id', 'modify_time', 'create_id', 'create_time');
    }
}