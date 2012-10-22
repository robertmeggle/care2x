<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Entity\CareSupplier
 *
 * InnoDB free: 10240 kB
 *
 * @ORM\Entity(repositoryClass="CareSupplierRepository")
 * @ORM\Table(name="care_supplier")
 */
class CareSupplier
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $idcare_supplier;

    /**
     * @ORM\Column(type="string", length=35)
     */
    protected $supplier;

    /**
     * @ORM\Column(type="integer")
     */
    protected $local_supplier_id;

    /**
     * @ORM\Column(type="integer")
     */
    protected $local_supplier;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $nipt;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    protected $address;

    /**
     * @ORM\Column(type="string", length=35, nullable=true)
     */
    protected $telephone;

    /**
     * @ORM\Column(type="string", length=35, nullable=true)
     */
    protected $fax;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    protected $postal_code;

    /**
     * @ORM\Column(type="string", length=35, nullable=true)
     */
    protected $representative;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $notes;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $history;

    /**
     * @ORM\Column(type="string", length=35, nullable=true)
     */
    protected $create_id;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $create_time;

    /**
     * @ORM\OneToMany(targetEntity="CareContract", mappedBy="careSupplier")
     * @ORM\JoinColumn(name="lista_supplier", referencedColumnName="idcare_supplier", nullable=false)
     */
    protected $careContracts;

    /**
     * @ORM\OneToMany(targetEntity="CareSupply", mappedBy="careSupplier")
     * @ORM\JoinColumn(name="idcare_supplier", referencedColumnName="idcare_supplier", nullable=false)
     */
    protected $careSupplies;

    public function __construct()
    {
        $this->careContracts = new ArrayCollection();
        $this->careSupplies = new ArrayCollection();
    }

    /**
     * Set the value of idcare_supplier.
     *
     * @param integer $idcare_supplier
     * @return \Entity\CareSupplier
     */
    public function setIdcareSupplier($idcare_supplier)
    {
        $this->idcare_supplier = $idcare_supplier;

        return $this;
    }

    /**
     * Get the value of idcare_supplier.
     *
     * @return integer
     */
    public function getIdcareSupplier()
    {
        return $this->idcare_supplier;
    }

    /**
     * Set the value of supplier.
     *
     * @param string $supplier
     * @return \Entity\CareSupplier
     */
    public function setSupplier($supplier)
    {
        $this->supplier = $supplier;

        return $this;
    }

    /**
     * Get the value of supplier.
     *
     * @return string
     */
    public function getSupplier()
    {
        return $this->supplier;
    }

    /**
     * Set the value of local_supplier_id.
     *
     * @param integer $local_supplier_id
     * @return \Entity\CareSupplier
     */
    public function setLocalSupplierId($local_supplier_id)
    {
        $this->local_supplier_id = $local_supplier_id;

        return $this;
    }

    /**
     * Get the value of local_supplier_id.
     *
     * @return integer
     */
    public function getLocalSupplierId()
    {
        return $this->local_supplier_id;
    }

    /**
     * Set the value of local_supplier.
     *
     * @param integer $local_supplier
     * @return \Entity\CareSupplier
     */
    public function setLocalSupplier($local_supplier)
    {
        $this->local_supplier = $local_supplier;

        return $this;
    }

    /**
     * Get the value of local_supplier.
     *
     * @return integer
     */
    public function getLocalSupplier()
    {
        return $this->local_supplier;
    }

    /**
     * Set the value of nipt.
     *
     * @param string $nipt
     * @return \Entity\CareSupplier
     */
    public function setNipt($nipt)
    {
        $this->nipt = $nipt;

        return $this;
    }

    /**
     * Get the value of nipt.
     *
     * @return string
     */
    public function getNipt()
    {
        return $this->nipt;
    }

    /**
     * Set the value of address.
     *
     * @param string $address
     * @return \Entity\CareSupplier
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
     * Set the value of telephone.
     *
     * @param string $telephone
     * @return \Entity\CareSupplier
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get the value of telephone.
     *
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set the value of fax.
     *
     * @param string $fax
     * @return \Entity\CareSupplier
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
     * Set the value of postal_code.
     *
     * @param string $postal_code
     * @return \Entity\CareSupplier
     */
    public function setPostalCode($postal_code)
    {
        $this->postal_code = $postal_code;

        return $this;
    }

    /**
     * Get the value of postal_code.
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postal_code;
    }

    /**
     * Set the value of representative.
     *
     * @param string $representative
     * @return \Entity\CareSupplier
     */
    public function setRepresentative($representative)
    {
        $this->representative = $representative;

        return $this;
    }

    /**
     * Get the value of representative.
     *
     * @return string
     */
    public function getRepresentative()
    {
        return $this->representative;
    }

    /**
     * Set the value of notes.
     *
     * @param string $notes
     * @return \Entity\CareSupplier
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;

        return $this;
    }

    /**
     * Get the value of notes.
     *
     * @return string
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Set the value of history.
     *
     * @param string $history
     * @return \Entity\CareSupplier
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
     * Set the value of create_id.
     *
     * @param string $create_id
     * @return \Entity\CareSupplier
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
     * @return \Entity\CareSupplier
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
     * Add CareContract entity to collection (one to many).
     *
     * @param \Entity\CareContract $careContract
     * @return \Entity\CareSupplier
     */
    public function addCareContract(CareContract $careContract)
    {
        $this->careContracts[] = $careContract;

        return $this;
    }

    /**
     * Get CareContract entity collection (one to many).
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCareContracts()
    {
        return $this->careContracts;
    }

    /**
     * Add CareSupply entity to collection (one to many).
     *
     * @param \Entity\CareSupply $careSupply
     * @return \Entity\CareSupplier
     */
    public function addCareSupply(CareSupply $careSupply)
    {
        $this->careSupplies[] = $careSupply;

        return $this;
    }

    /**
     * Get CareSupply entity collection (one to many).
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCareSupplies()
    {
        return $this->careSupplies;
    }

    public function __sleep()
    {
        return array('idcare_supplier', 'supplier', 'local_supplier_id', 'local_supplier', 'nipt', 'address', 'telephone', 'fax', 'postal_code', 'representative', 'notes', 'history', 'create_id', 'create_time');
    }
}