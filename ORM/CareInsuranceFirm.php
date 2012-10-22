<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\CareInsuranceFirm
 *
 * InnoDB free: 9216 kB
 *
 * @ORM\Entity(repositoryClass="CareInsuranceFirmRepository")
 * @ORM\Table(name="care_insurance_firm", indexes={@ORM\Index(name="name", columns={"name"})})
 */
class CareInsuranceFirm
{
    /**
     * @ORM\Id
     * @ORM\Column(type="string", length=40)
     */
    protected $firm_id;

    /**
     * @ORM\Column(type="string", length=60)
     */
    protected $name;

    /**
     * @ORM\Column(type="string", length=3)
     */
    protected $iso_country_id;

    /**
     * @ORM\Column(type="string", length=60)
     */
    protected $sub_area;

    /**
     * @ORM\Column(type="smallint")
     */
    protected $type_nr;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $addr;

    /**
     * @ORM\Column(type="string", length=200, nullable=true)
     */
    protected $addr_mail;

    /**
     * @ORM\Column(type="string", length=200, nullable=true)
     */
    protected $addr_billing;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    protected $addr_email;

    /**
     * @ORM\Column(type="string", length=35, nullable=true)
     */
    protected $phone_main;

    /**
     * @ORM\Column(type="string", length=35, nullable=true)
     */
    protected $phone_aux;

    /**
     * @ORM\Column(type="string", length=35, nullable=true)
     */
    protected $fax_main;

    /**
     * @ORM\Column(type="string", length=35, nullable=true)
     */
    protected $fax_aux;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    protected $contact_person;

    /**
     * @ORM\Column(type="string", length=35, nullable=true)
     */
    protected $contact_phone;

    /**
     * @ORM\Column(type="string", length=35, nullable=true)
     */
    protected $contact_fax;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    protected $contact_email;

    /**
     * @ORM\Column(type="bigint")
     */
    protected $use_frequency;

    /**
     * @ORM\Column(type="string", length=25)
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
     * Set the value of firm_id.
     *
     * @param string $firm_id
     * @return \Entity\CareInsuranceFirm
     */
    public function setFirmId($firm_id)
    {
        $this->firm_id = $firm_id;

        return $this;
    }

    /**
     * Get the value of firm_id.
     *
     * @return string
     */
    public function getFirmId()
    {
        return $this->firm_id;
    }

    /**
     * Set the value of name.
     *
     * @param string $name
     * @return \Entity\CareInsuranceFirm
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
     * Set the value of iso_country_id.
     *
     * @param string $iso_country_id
     * @return \Entity\CareInsuranceFirm
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
     * Set the value of sub_area.
     *
     * @param string $sub_area
     * @return \Entity\CareInsuranceFirm
     */
    public function setSubArea($sub_area)
    {
        $this->sub_area = $sub_area;

        return $this;
    }

    /**
     * Get the value of sub_area.
     *
     * @return string
     */
    public function getSubArea()
    {
        return $this->sub_area;
    }

    /**
     * Set the value of type_nr.
     *
     * @param integer $type_nr
     * @return \Entity\CareInsuranceFirm
     */
    public function setTypeNr($type_nr)
    {
        $this->type_nr = $type_nr;

        return $this;
    }

    /**
     * Get the value of type_nr.
     *
     * @return integer
     */
    public function getTypeNr()
    {
        return $this->type_nr;
    }

    /**
     * Set the value of addr.
     *
     * @param string $addr
     * @return \Entity\CareInsuranceFirm
     */
    public function setAddr($addr)
    {
        $this->addr = $addr;

        return $this;
    }

    /**
     * Get the value of addr.
     *
     * @return string
     */
    public function getAddr()
    {
        return $this->addr;
    }

    /**
     * Set the value of addr_mail.
     *
     * @param string $addr_mail
     * @return \Entity\CareInsuranceFirm
     */
    public function setAddrMail($addr_mail)
    {
        $this->addr_mail = $addr_mail;

        return $this;
    }

    /**
     * Get the value of addr_mail.
     *
     * @return string
     */
    public function getAddrMail()
    {
        return $this->addr_mail;
    }

    /**
     * Set the value of addr_billing.
     *
     * @param string $addr_billing
     * @return \Entity\CareInsuranceFirm
     */
    public function setAddrBilling($addr_billing)
    {
        $this->addr_billing = $addr_billing;

        return $this;
    }

    /**
     * Get the value of addr_billing.
     *
     * @return string
     */
    public function getAddrBilling()
    {
        return $this->addr_billing;
    }

    /**
     * Set the value of addr_email.
     *
     * @param string $addr_email
     * @return \Entity\CareInsuranceFirm
     */
    public function setAddrEmail($addr_email)
    {
        $this->addr_email = $addr_email;

        return $this;
    }

    /**
     * Get the value of addr_email.
     *
     * @return string
     */
    public function getAddrEmail()
    {
        return $this->addr_email;
    }

    /**
     * Set the value of phone_main.
     *
     * @param string $phone_main
     * @return \Entity\CareInsuranceFirm
     */
    public function setPhoneMain($phone_main)
    {
        $this->phone_main = $phone_main;

        return $this;
    }

    /**
     * Get the value of phone_main.
     *
     * @return string
     */
    public function getPhoneMain()
    {
        return $this->phone_main;
    }

    /**
     * Set the value of phone_aux.
     *
     * @param string $phone_aux
     * @return \Entity\CareInsuranceFirm
     */
    public function setPhoneAux($phone_aux)
    {
        $this->phone_aux = $phone_aux;

        return $this;
    }

    /**
     * Get the value of phone_aux.
     *
     * @return string
     */
    public function getPhoneAux()
    {
        return $this->phone_aux;
    }

    /**
     * Set the value of fax_main.
     *
     * @param string $fax_main
     * @return \Entity\CareInsuranceFirm
     */
    public function setFaxMain($fax_main)
    {
        $this->fax_main = $fax_main;

        return $this;
    }

    /**
     * Get the value of fax_main.
     *
     * @return string
     */
    public function getFaxMain()
    {
        return $this->fax_main;
    }

    /**
     * Set the value of fax_aux.
     *
     * @param string $fax_aux
     * @return \Entity\CareInsuranceFirm
     */
    public function setFaxAux($fax_aux)
    {
        $this->fax_aux = $fax_aux;

        return $this;
    }

    /**
     * Get the value of fax_aux.
     *
     * @return string
     */
    public function getFaxAux()
    {
        return $this->fax_aux;
    }

    /**
     * Set the value of contact_person.
     *
     * @param string $contact_person
     * @return \Entity\CareInsuranceFirm
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
     * Set the value of contact_phone.
     *
     * @param string $contact_phone
     * @return \Entity\CareInsuranceFirm
     */
    public function setContactPhone($contact_phone)
    {
        $this->contact_phone = $contact_phone;

        return $this;
    }

    /**
     * Get the value of contact_phone.
     *
     * @return string
     */
    public function getContactPhone()
    {
        return $this->contact_phone;
    }

    /**
     * Set the value of contact_fax.
     *
     * @param string $contact_fax
     * @return \Entity\CareInsuranceFirm
     */
    public function setContactFax($contact_fax)
    {
        $this->contact_fax = $contact_fax;

        return $this;
    }

    /**
     * Get the value of contact_fax.
     *
     * @return string
     */
    public function getContactFax()
    {
        return $this->contact_fax;
    }

    /**
     * Set the value of contact_email.
     *
     * @param string $contact_email
     * @return \Entity\CareInsuranceFirm
     */
    public function setContactEmail($contact_email)
    {
        $this->contact_email = $contact_email;

        return $this;
    }

    /**
     * Get the value of contact_email.
     *
     * @return string
     */
    public function getContactEmail()
    {
        return $this->contact_email;
    }

    /**
     * Set the value of use_frequency.
     *
     * @param integer $use_frequency
     * @return \Entity\CareInsuranceFirm
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
     * @return \Entity\CareInsuranceFirm
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
     * @return \Entity\CareInsuranceFirm
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
     * @return \Entity\CareInsuranceFirm
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
     * @return \Entity\CareInsuranceFirm
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
     * @return \Entity\CareInsuranceFirm
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
     * @return \Entity\CareInsuranceFirm
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
        return array('firm_id', 'name', 'iso_country_id', 'sub_area', 'type_nr', 'addr', 'addr_mail', 'addr_billing', 'addr_email', 'phone_main', 'phone_aux', 'fax_main', 'fax_aux', 'contact_person', 'contact_phone', 'contact_fax', 'contact_email', 'use_frequency', 'status', 'history', 'modify_id', 'modify_time', 'create_id', 'create_time');
    }
}