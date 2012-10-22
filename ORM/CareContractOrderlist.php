<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\CareContractOrderlist
 *
 * @ORM\Entity(repositoryClass="CareContractOrderlistRepository")
 * @ORM\Table(name="care_contract_orderlist")
 */
class CareContractOrderlist
{
    /**
     * @ORM\Column(type="integer")
     */
    protected $lista_supplier;

    /**
     * @ORM\Column(type="string", length=50)
     */
    protected $numri_kontrate;

    /**
     * @ORM\Column(type="integer")
     */
    protected $nr;

    /**
     * @ORM\Column(type="integer")
     */
    protected $id_contract;

    /**
     * @ORM\Column(type="string", length=250)
     */
    protected $medikamenti;

    /**
     * @ORM\Column(type="string", length=15)
     */
    protected $atc;

    /**
     * @ORM\Column(type="string", length=250)
     */
    protected $form_doza_njesi_baze;

    /**
     * @ORM\Column(type="string", length=250)
     */
    protected $njesi_baze_form_doze;

    /**
     * @ORM\Column(type="decimal", precision=11, scale=2)
     */
    protected $sasi;

    /**
     * @ORM\Column(type="decimal", precision=11, scale=2)
     */
    protected $sasi_levizur;

    /**
     * @ORM\Column(type="decimal", precision=11, scale=2)
     */
    protected $cmimi_pa_tvsh;

    /**
     * @ORM\Column(type="decimal", precision=11, scale=2)
     */
    protected $tvsh_perqindje;

    /**
     * @ORM\Column(type="decimal", precision=11, scale=2)
     */
    protected $vlera_pa_tvsh;

    /**
     * @ORM\Column(type="decimal", precision=11, scale=2)
     */
    protected $vlera_me_tvsh;

    /**
     * @ORM\Column(type="string", length=250, nullable=true)
     */
    protected $origjina;

    /**
     * @ORM\Column(type="string", length=250, nullable=true)
     */
    protected $prodhuesi;

    /**
     * @ORM\Column(type="string", length=250)
     */
    protected $emri_tregtar;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $create_time;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    protected $create_id;

    public function __construct()
    {
    }

    /**
     * Set the value of lista_supplier.
     *
     * @param integer $lista_supplier
     * @return \Entity\CareContractOrderlist
     */
    public function setListaSupplier($lista_supplier)
    {
        $this->lista_supplier = $lista_supplier;

        return $this;
    }

    /**
     * Get the value of lista_supplier.
     *
     * @return integer
     */
    public function getListaSupplier()
    {
        return $this->lista_supplier;
    }

    /**
     * Set the value of numri_kontrate.
     *
     * @param string $numri_kontrate
     * @return \Entity\CareContractOrderlist
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
     * Set the value of nr.
     *
     * @param integer $nr
     * @return \Entity\CareContractOrderlist
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
     * Set the value of id_contract.
     *
     * @param integer $id_contract
     * @return \Entity\CareContractOrderlist
     */
    public function setIdContract($id_contract)
    {
        $this->id_contract = $id_contract;

        return $this;
    }

    /**
     * Get the value of id_contract.
     *
     * @return integer
     */
    public function getIdContract()
    {
        return $this->id_contract;
    }

    /**
     * Set the value of medikamenti.
     *
     * @param string $medikamenti
     * @return \Entity\CareContractOrderlist
     */
    public function setMedikamenti($medikamenti)
    {
        $this->medikamenti = $medikamenti;

        return $this;
    }

    /**
     * Get the value of medikamenti.
     *
     * @return string
     */
    public function getMedikamenti()
    {
        return $this->medikamenti;
    }

    /**
     * Set the value of atc.
     *
     * @param string $atc
     * @return \Entity\CareContractOrderlist
     */
    public function setAtc($atc)
    {
        $this->atc = $atc;

        return $this;
    }

    /**
     * Get the value of atc.
     *
     * @return string
     */
    public function getAtc()
    {
        return $this->atc;
    }

    /**
     * Set the value of form_doza_njesi_baze.
     *
     * @param string $form_doza_njesi_baze
     * @return \Entity\CareContractOrderlist
     */
    public function setFormDozaNjesiBaze($form_doza_njesi_baze)
    {
        $this->form_doza_njesi_baze = $form_doza_njesi_baze;

        return $this;
    }

    /**
     * Get the value of form_doza_njesi_baze.
     *
     * @return string
     */
    public function getFormDozaNjesiBaze()
    {
        return $this->form_doza_njesi_baze;
    }

    /**
     * Set the value of njesi_baze_form_doze.
     *
     * @param string $njesi_baze_form_doze
     * @return \Entity\CareContractOrderlist
     */
    public function setNjesiBazeFormDoze($njesi_baze_form_doze)
    {
        $this->njesi_baze_form_doze = $njesi_baze_form_doze;

        return $this;
    }

    /**
     * Get the value of njesi_baze_form_doze.
     *
     * @return string
     */
    public function getNjesiBazeFormDoze()
    {
        return $this->njesi_baze_form_doze;
    }

    /**
     * Set the value of sasi.
     *
     * @param float $sasi
     * @return \Entity\CareContractOrderlist
     */
    public function setSasi($sasi)
    {
        $this->sasi = $sasi;

        return $this;
    }

    /**
     * Get the value of sasi.
     *
     * @return float
     */
    public function getSasi()
    {
        return $this->sasi;
    }

    /**
     * Set the value of sasi_levizur.
     *
     * @param float $sasi_levizur
     * @return \Entity\CareContractOrderlist
     */
    public function setSasiLevizur($sasi_levizur)
    {
        $this->sasi_levizur = $sasi_levizur;

        return $this;
    }

    /**
     * Get the value of sasi_levizur.
     *
     * @return float
     */
    public function getSasiLevizur()
    {
        return $this->sasi_levizur;
    }

    /**
     * Set the value of cmimi_pa_tvsh.
     *
     * @param float $cmimi_pa_tvsh
     * @return \Entity\CareContractOrderlist
     */
    public function setCmimiPaTvsh($cmimi_pa_tvsh)
    {
        $this->cmimi_pa_tvsh = $cmimi_pa_tvsh;

        return $this;
    }

    /**
     * Get the value of cmimi_pa_tvsh.
     *
     * @return float
     */
    public function getCmimiPaTvsh()
    {
        return $this->cmimi_pa_tvsh;
    }

    /**
     * Set the value of tvsh_perqindje.
     *
     * @param float $tvsh_perqindje
     * @return \Entity\CareContractOrderlist
     */
    public function setTvshPerqindje($tvsh_perqindje)
    {
        $this->tvsh_perqindje = $tvsh_perqindje;

        return $this;
    }

    /**
     * Get the value of tvsh_perqindje.
     *
     * @return float
     */
    public function getTvshPerqindje()
    {
        return $this->tvsh_perqindje;
    }

    /**
     * Set the value of vlera_pa_tvsh.
     *
     * @param float $vlera_pa_tvsh
     * @return \Entity\CareContractOrderlist
     */
    public function setVleraPaTvsh($vlera_pa_tvsh)
    {
        $this->vlera_pa_tvsh = $vlera_pa_tvsh;

        return $this;
    }

    /**
     * Get the value of vlera_pa_tvsh.
     *
     * @return float
     */
    public function getVleraPaTvsh()
    {
        return $this->vlera_pa_tvsh;
    }

    /**
     * Set the value of vlera_me_tvsh.
     *
     * @param float $vlera_me_tvsh
     * @return \Entity\CareContractOrderlist
     */
    public function setVleraMeTvsh($vlera_me_tvsh)
    {
        $this->vlera_me_tvsh = $vlera_me_tvsh;

        return $this;
    }

    /**
     * Get the value of vlera_me_tvsh.
     *
     * @return float
     */
    public function getVleraMeTvsh()
    {
        return $this->vlera_me_tvsh;
    }

    /**
     * Set the value of origjina.
     *
     * @param string $origjina
     * @return \Entity\CareContractOrderlist
     */
    public function setOrigjina($origjina)
    {
        $this->origjina = $origjina;

        return $this;
    }

    /**
     * Get the value of origjina.
     *
     * @return string
     */
    public function getOrigjina()
    {
        return $this->origjina;
    }

    /**
     * Set the value of prodhuesi.
     *
     * @param string $prodhuesi
     * @return \Entity\CareContractOrderlist
     */
    public function setProdhuesi($prodhuesi)
    {
        $this->prodhuesi = $prodhuesi;

        return $this;
    }

    /**
     * Get the value of prodhuesi.
     *
     * @return string
     */
    public function getProdhuesi()
    {
        return $this->prodhuesi;
    }

    /**
     * Set the value of emri_tregtar.
     *
     * @param string $emri_tregtar
     * @return \Entity\CareContractOrderlist
     */
    public function setEmriTregtar($emri_tregtar)
    {
        $this->emri_tregtar = $emri_tregtar;

        return $this;
    }

    /**
     * Get the value of emri_tregtar.
     *
     * @return string
     */
    public function getEmriTregtar()
    {
        return $this->emri_tregtar;
    }

    /**
     * Set the value of create_time.
     *
     * @param datetime $create_time
     * @return \Entity\CareContractOrderlist
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
     * Set the value of create_id.
     *
     * @param string $create_id
     * @return \Entity\CareContractOrderlist
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

    public function __sleep()
    {
        return array('lista_supplier', 'numri_kontrate', 'nr', 'id_contract', 'medikamenti', 'atc', 'form_doza_njesi_baze', 'njesi_baze_form_doze', 'sasi', 'sasi_levizur', 'cmimi_pa_tvsh', 'tvsh_perqindje', 'vlera_pa_tvsh', 'vlera_me_tvsh', 'origjina', 'prodhuesi', 'emri_tregtar', 'create_time', 'create_id');
    }
}