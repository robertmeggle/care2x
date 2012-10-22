<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Entity\CareContract
 *
 * @ORM\Entity(repositoryClass="CareContractRepository")
 * @ORM\Table(name="care_contract", indexes={@ORM\Index(name="lista_supplier", columns={}), @ORM\Index(name="fk_care_contract_care_supplier1_idx", columns={"lista_supplier"})})
 */
class CareContract
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $nr;

    /**
     * @ORM\Column(type="string", length=50)
     */
    protected $emertimi_kontrate;

    /**
     * @ORM\Column(type="string", length=50)
     */
    protected $kontrate_tipi;

    /**
     * @ORM\Column(type="string", length=50)
     */
    protected $numri_kontrate;

    /**
     * @ORM\Column(type="date")
     */
    protected $dt_fillim_kontrate;

    /**
     * @ORM\Column(type="date")
     */
    protected $dt_mbarim_kontrate;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $objekti_kontrate;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $history;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    protected $modify_id;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $modify_time;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    protected $create_id;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $create_time;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $update_time;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    protected $update_id;

    /**
     * @ORM\OneToMany(targetEntity="CareContractSub", mappedBy="careContract")
     * @ORM\JoinColumn(name="id_contract", referencedColumnName="nr", nullable=false)
     */
    protected $careContractSubs;

    /**
     * @ORM\ManyToOne(targetEntity="CareSupplier", inversedBy="careContracts")
     * @ORM\JoinColumn(name="lista_supplier", referencedColumnName="idcare_supplier", nullable=false)
     */
    protected $careSupplier;

    public function __construct()
    {
        $this->careContractSubs = new ArrayCollection();
    }

    /**
     * Set the value of nr.
     *
     * @param integer $nr
     * @return \Entity\CareContract
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
     * Set the value of emertimi_kontrate.
     *
     * @param string $emertimi_kontrate
     * @return \Entity\CareContract
     */
    public function setEmertimiKontrate($emertimi_kontrate)
    {
        $this->emertimi_kontrate = $emertimi_kontrate;

        return $this;
    }

    /**
     * Get the value of emertimi_kontrate.
     *
     * @return string
     */
    public function getEmertimiKontrate()
    {
        return $this->emertimi_kontrate;
    }

    /**
     * Set the value of kontrate_tipi.
     *
     * @param string $kontrate_tipi
     * @return \Entity\CareContract
     */
    public function setKontrateTipi($kontrate_tipi)
    {
        $this->kontrate_tipi = $kontrate_tipi;

        return $this;
    }

    /**
     * Get the value of kontrate_tipi.
     *
     * @return string
     */
    public function getKontrateTipi()
    {
        return $this->kontrate_tipi;
    }

    /**
     * Set the value of numri_kontrate.
     *
     * @param string $numri_kontrate
     * @return \Entity\CareContract
     */
    public function setNumriKontrate($numri_kontrate)
    {
        $this->numri_kontrate = $numri_kontrate;

        return $this;
    }

    /**
     * Get the value of numri_kontrate.
     *
     * @return string
     */
    public function getNumriKontrate()
    {
        return $this->numri_kontrate;
    }

    /**
     * Set the value of dt_fillim_kontrate.
     *
     * @param datetime $dt_fillim_kontrate
     * @return \Entity\CareContract
     */
    public function setDtFillimKontrate($dt_fillim_kontrate)
    {
        $this->dt_fillim_kontrate = $dt_fillim_kontrate;

        return $this;
    }

    /**
     * Get the value of dt_fillim_kontrate.
     *
     * @return datetime
     */
    public function getDtFillimKontrate()
    {
        return $this->dt_fillim_kontrate;
    }

    /**
     * Set the value of dt_mbarim_kontrate.
     *
     * @param datetime $dt_mbarim_kontrate
     * @return \Entity\CareContract
     */
    public function setDtMbarimKontrate($dt_mbarim_kontrate)
    {
        $this->dt_mbarim_kontrate = $dt_mbarim_kontrate;

        return $this;
    }

    /**
     * Get the value of dt_mbarim_kontrate.
     *
     * @return datetime
     */
    public function getDtMbarimKontrate()
    {
        return $this->dt_mbarim_kontrate;
    }

    /**
     * Set the value of objekti_kontrate.
     *
     * @param string $objekti_kontrate
     * @return \Entity\CareContract
     */
    public function setObjektiKontrate($objekti_kontrate)
    {
        $this->objekti_kontrate = $objekti_kontrate;

        return $this;
    }

    /**
     * Get the value of objekti_kontrate.
     *
     * @return string
     */
    public function getObjektiKontrate()
    {
        return $this->objekti_kontrate;
    }

    /**
     * Set the value of history.
     *
     * @param string $history
     * @return \Entity\CareContract
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
     * @return \Entity\CareContract
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
     * @return \Entity\CareContract
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
     * @return \Entity\CareContract
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
     * @return \Entity\CareContract
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
     * Set the value of update_time.
     *
     * @param datetime $update_time
     * @return \Entity\CareContract
     */
    public function setUpdateTime($update_time)
    {
        $this->update_time = $update_time;

        return $this;
    }

    /**
     * Get the value of update_time.
     *
     * @return datetime
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    /**
     * Set the value of update_id.
     *
     * @param string $update_id
     * @return \Entity\CareContract
     */
    public function setUpdateId($update_id)
    {
        $this->update_id = $update_id;

        return $this;
    }

    /**
     * Get the value of update_id.
     *
     * @return string
     */
    public function getUpdateId()
    {
        return $this->update_id;
    }

    /**
     * Add CareContractSub entity to collection (one to many).
     *
     * @param \Entity\CareContractSub $careContractSub
     * @return \Entity\CareContract
     */
    public function addCareContractSub(CareContractSub $careContractSub)
    {
        $this->careContractSubs[] = $careContractSub;

        return $this;
    }

    /**
     * Get CareContractSub entity collection (one to many).
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCareContractSubs()
    {
        return $this->careContractSubs;
    }

    /**
     * Set CareSupplier entity (many to one).
     *
     * @param \Entity\CareSupplier $careSupplier
     * @return \Entity\CareContract
     */
    public function setCareSupplier(CareSupplier $careSupplier = null)
    {
        $this->careSupplier = $careSupplier;

        return $this;
    }

    /**
     * Get CareSupplier entity (many to one).
     *
     * @return \Entity\CareSupplier
     */
    public function getCareSupplier()
    {
        return $this->careSupplier;
    }

    public function __sleep()
    {
        return array('nr', 'emertimi_kontrate', 'kontrate_tipi', 'numri_kontrate', 'lista_supplier', 'dt_fillim_kontrate', 'dt_mbarim_kontrate', 'objekti_kontrate', 'history', 'modify_id', 'modify_time', 'create_id', 'create_time', 'update_time', 'update_id');
    }
}