<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\CareEncounterYellowPaper
 *
 * @ORM\Entity(repositoryClass="CareEncounterYellowPaperRepository")
 * @ORM\Table(name="care_encounter_yellow_paper", uniqueConstraints={@ORM\UniqueConstraint(name="nr", columns={"nr"})})
 */
class CareEncounterYellowPaper
{
    /**
     * @ORM\Column(type="bigint")
     */
    protected $encounter_nr;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    protected $personell_name;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    protected $location_id;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $history;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    protected $create_id;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $create_time;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $sunto_anamnestico;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $stato_presente;

    /**
     * @ORM\Column(type="float", precision=15, scale=3, nullable=true)
     */
    protected $altezza;

    /**
     * @ORM\Column(type="float", precision=15, scale=3, nullable=true)
     */
    protected $peso;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    protected $norm;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    protected $dati_urine;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    protected $dati_sangue;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    protected $dati_altro;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $diagnosi;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $terapia;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $malattie_ereditarie;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $padre;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $madre;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $fratelli;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $coniuge;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $figli;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $paesi_esteri;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $abitazione;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $lavoro_pregresso;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $lavoro_presente;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $lavoro_attuale;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $ambiente_lavoro;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $gas_lavoro;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $tossiche_lavoro;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $conviventi;

    /**
     * @ORM\Column(type="string", length=4, nullable=true)
     */
    protected $prematuro;

    /**
     * @ORM\Column(type="string", length=4, nullable=true)
     */
    protected $eutocico;

    /**
     * @ORM\Column(type="string", length=4, nullable=true)
     */
    protected $fisiologici_normali;

    /**
     * @ORM\Column(type="string", length=4, nullable=true)
     */
    protected $fisiologici_tardivi;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $mestruazione;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $gravidanze;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $militare;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    protected $alcolici;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    protected $caffe;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    protected $fumo;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    protected $droghe;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    protected $sete;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    protected $alvo;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    protected $diuresi;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $anamnesi_remota;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $anamnesi_prossima;

    /**
     * @ORM\Id
     * @ORM\Column(type="bigint")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $nr;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $modify_id;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $modify_time;

    public function __construct()
    {
    }

    /**
     * Set the value of encounter_nr.
     *
     * @param integer $encounter_nr
     * @return \Entity\CareEncounterYellowPaper
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
     * Set the value of personell_name.
     *
     * @param string $personell_name
     * @return \Entity\CareEncounterYellowPaper
     */
    public function setPersonellName($personell_name)
    {
        $this->personell_name = $personell_name;

        return $this;
    }

    /**
     * Get the value of personell_name.
     *
     * @return string
     */
    public function getPersonellName()
    {
        return $this->personell_name;
    }

    /**
     * Set the value of location_id.
     *
     * @param string $location_id
     * @return \Entity\CareEncounterYellowPaper
     */
    public function setLocationId($location_id)
    {
        $this->location_id = $location_id;

        return $this;
    }

    /**
     * Get the value of location_id.
     *
     * @return string
     */
    public function getLocationId()
    {
        return $this->location_id;
    }

    /**
     * Set the value of history.
     *
     * @param string $history
     * @return \Entity\CareEncounterYellowPaper
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
     * @return \Entity\CareEncounterYellowPaper
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
     * @return \Entity\CareEncounterYellowPaper
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
     * Set the value of sunto_anamnestico.
     *
     * @param string $sunto_anamnestico
     * @return \Entity\CareEncounterYellowPaper
     */
    public function setSuntoAnamnestico($sunto_anamnestico)
    {
        $this->sunto_anamnestico = $sunto_anamnestico;

        return $this;
    }

    /**
     * Get the value of sunto_anamnestico.
     *
     * @return string
     */
    public function getSuntoAnamnestico()
    {
        return $this->sunto_anamnestico;
    }

    /**
     * Set the value of stato_presente.
     *
     * @param string $stato_presente
     * @return \Entity\CareEncounterYellowPaper
     */
    public function setStatoPresente($stato_presente)
    {
        $this->stato_presente = $stato_presente;

        return $this;
    }

    /**
     * Get the value of stato_presente.
     *
     * @return string
     */
    public function getStatoPresente()
    {
        return $this->stato_presente;
    }

    /**
     * Set the value of altezza.
     *
     * @param float $altezza
     * @return \Entity\CareEncounterYellowPaper
     */
    public function setAltezza($altezza)
    {
        $this->altezza = $altezza;

        return $this;
    }

    /**
     * Get the value of altezza.
     *
     * @return float
     */
    public function getAltezza()
    {
        return $this->altezza;
    }

    /**
     * Set the value of peso.
     *
     * @param float $peso
     * @return \Entity\CareEncounterYellowPaper
     */
    public function setPeso($peso)
    {
        $this->peso = $peso;

        return $this;
    }

    /**
     * Get the value of peso.
     *
     * @return float
     */
    public function getPeso()
    {
        return $this->peso;
    }

    /**
     * Set the value of norm.
     *
     * @param string $norm
     * @return \Entity\CareEncounterYellowPaper
     */
    public function setNorm($norm)
    {
        $this->norm = $norm;

        return $this;
    }

    /**
     * Get the value of norm.
     *
     * @return string
     */
    public function getNorm()
    {
        return $this->norm;
    }

    /**
     * Set the value of dati_urine.
     *
     * @param string $dati_urine
     * @return \Entity\CareEncounterYellowPaper
     */
    public function setDatiUrine($dati_urine)
    {
        $this->dati_urine = $dati_urine;

        return $this;
    }

    /**
     * Get the value of dati_urine.
     *
     * @return string
     */
    public function getDatiUrine()
    {
        return $this->dati_urine;
    }

    /**
     * Set the value of dati_sangue.
     *
     * @param string $dati_sangue
     * @return \Entity\CareEncounterYellowPaper
     */
    public function setDatiSangue($dati_sangue)
    {
        $this->dati_sangue = $dati_sangue;

        return $this;
    }

    /**
     * Get the value of dati_sangue.
     *
     * @return string
     */
    public function getDatiSangue()
    {
        return $this->dati_sangue;
    }

    /**
     * Set the value of dati_altro.
     *
     * @param string $dati_altro
     * @return \Entity\CareEncounterYellowPaper
     */
    public function setDatiAltro($dati_altro)
    {
        $this->dati_altro = $dati_altro;

        return $this;
    }

    /**
     * Get the value of dati_altro.
     *
     * @return string
     */
    public function getDatiAltro()
    {
        return $this->dati_altro;
    }

    /**
     * Set the value of diagnosi.
     *
     * @param string $diagnosi
     * @return \Entity\CareEncounterYellowPaper
     */
    public function setDiagnosi($diagnosi)
    {
        $this->diagnosi = $diagnosi;

        return $this;
    }

    /**
     * Get the value of diagnosi.
     *
     * @return string
     */
    public function getDiagnosi()
    {
        return $this->diagnosi;
    }

    /**
     * Set the value of terapia.
     *
     * @param string $terapia
     * @return \Entity\CareEncounterYellowPaper
     */
    public function setTerapia($terapia)
    {
        $this->terapia = $terapia;

        return $this;
    }

    /**
     * Get the value of terapia.
     *
     * @return string
     */
    public function getTerapia()
    {
        return $this->terapia;
    }

    /**
     * Set the value of malattie_ereditarie.
     *
     * @param string $malattie_ereditarie
     * @return \Entity\CareEncounterYellowPaper
     */
    public function setMalattieEreditarie($malattie_ereditarie)
    {
        $this->malattie_ereditarie = $malattie_ereditarie;

        return $this;
    }

    /**
     * Get the value of malattie_ereditarie.
     *
     * @return string
     */
    public function getMalattieEreditarie()
    {
        return $this->malattie_ereditarie;
    }

    /**
     * Set the value of padre.
     *
     * @param string $padre
     * @return \Entity\CareEncounterYellowPaper
     */
    public function setPadre($padre)
    {
        $this->padre = $padre;

        return $this;
    }

    /**
     * Get the value of padre.
     *
     * @return string
     */
    public function getPadre()
    {
        return $this->padre;
    }

    /**
     * Set the value of madre.
     *
     * @param string $madre
     * @return \Entity\CareEncounterYellowPaper
     */
    public function setMadre($madre)
    {
        $this->madre = $madre;

        return $this;
    }

    /**
     * Get the value of madre.
     *
     * @return string
     */
    public function getMadre()
    {
        return $this->madre;
    }

    /**
     * Set the value of fratelli.
     *
     * @param string $fratelli
     * @return \Entity\CareEncounterYellowPaper
     */
    public function setFratelli($fratelli)
    {
        $this->fratelli = $fratelli;

        return $this;
    }

    /**
     * Get the value of fratelli.
     *
     * @return string
     */
    public function getFratelli()
    {
        return $this->fratelli;
    }

    /**
     * Set the value of coniuge.
     *
     * @param string $coniuge
     * @return \Entity\CareEncounterYellowPaper
     */
    public function setConiuge($coniuge)
    {
        $this->coniuge = $coniuge;

        return $this;
    }

    /**
     * Get the value of coniuge.
     *
     * @return string
     */
    public function getConiuge()
    {
        return $this->coniuge;
    }

    /**
     * Set the value of figli.
     *
     * @param string $figli
     * @return \Entity\CareEncounterYellowPaper
     */
    public function setFigli($figli)
    {
        $this->figli = $figli;

        return $this;
    }

    /**
     * Get the value of figli.
     *
     * @return string
     */
    public function getFigli()
    {
        return $this->figli;
    }

    /**
     * Set the value of paesi_esteri.
     *
     * @param string $paesi_esteri
     * @return \Entity\CareEncounterYellowPaper
     */
    public function setPaesiEsteri($paesi_esteri)
    {
        $this->paesi_esteri = $paesi_esteri;

        return $this;
    }

    /**
     * Get the value of paesi_esteri.
     *
     * @return string
     */
    public function getPaesiEsteri()
    {
        return $this->paesi_esteri;
    }

    /**
     * Set the value of abitazione.
     *
     * @param string $abitazione
     * @return \Entity\CareEncounterYellowPaper
     */
    public function setAbitazione($abitazione)
    {
        $this->abitazione = $abitazione;

        return $this;
    }

    /**
     * Get the value of abitazione.
     *
     * @return string
     */
    public function getAbitazione()
    {
        return $this->abitazione;
    }

    /**
     * Set the value of lavoro_pregresso.
     *
     * @param string $lavoro_pregresso
     * @return \Entity\CareEncounterYellowPaper
     */
    public function setLavoroPregresso($lavoro_pregresso)
    {
        $this->lavoro_pregresso = $lavoro_pregresso;

        return $this;
    }

    /**
     * Get the value of lavoro_pregresso.
     *
     * @return string
     */
    public function getLavoroPregresso()
    {
        return $this->lavoro_pregresso;
    }

    /**
     * Set the value of lavoro_presente.
     *
     * @param string $lavoro_presente
     * @return \Entity\CareEncounterYellowPaper
     */
    public function setLavoroPresente($lavoro_presente)
    {
        $this->lavoro_presente = $lavoro_presente;

        return $this;
    }

    /**
     * Get the value of lavoro_presente.
     *
     * @return string
     */
    public function getLavoroPresente()
    {
        return $this->lavoro_presente;
    }

    /**
     * Set the value of lavoro_attuale.
     *
     * @param string $lavoro_attuale
     * @return \Entity\CareEncounterYellowPaper
     */
    public function setLavoroAttuale($lavoro_attuale)
    {
        $this->lavoro_attuale = $lavoro_attuale;

        return $this;
    }

    /**
     * Get the value of lavoro_attuale.
     *
     * @return string
     */
    public function getLavoroAttuale()
    {
        return $this->lavoro_attuale;
    }

    /**
     * Set the value of ambiente_lavoro.
     *
     * @param string $ambiente_lavoro
     * @return \Entity\CareEncounterYellowPaper
     */
    public function setAmbienteLavoro($ambiente_lavoro)
    {
        $this->ambiente_lavoro = $ambiente_lavoro;

        return $this;
    }

    /**
     * Get the value of ambiente_lavoro.
     *
     * @return string
     */
    public function getAmbienteLavoro()
    {
        return $this->ambiente_lavoro;
    }

    /**
     * Set the value of gas_lavoro.
     *
     * @param string $gas_lavoro
     * @return \Entity\CareEncounterYellowPaper
     */
    public function setGasLavoro($gas_lavoro)
    {
        $this->gas_lavoro = $gas_lavoro;

        return $this;
    }

    /**
     * Get the value of gas_lavoro.
     *
     * @return string
     */
    public function getGasLavoro()
    {
        return $this->gas_lavoro;
    }

    /**
     * Set the value of tossiche_lavoro.
     *
     * @param string $tossiche_lavoro
     * @return \Entity\CareEncounterYellowPaper
     */
    public function setTossicheLavoro($tossiche_lavoro)
    {
        $this->tossiche_lavoro = $tossiche_lavoro;

        return $this;
    }

    /**
     * Get the value of tossiche_lavoro.
     *
     * @return string
     */
    public function getTossicheLavoro()
    {
        return $this->tossiche_lavoro;
    }

    /**
     * Set the value of conviventi.
     *
     * @param string $conviventi
     * @return \Entity\CareEncounterYellowPaper
     */
    public function setConviventi($conviventi)
    {
        $this->conviventi = $conviventi;

        return $this;
    }

    /**
     * Get the value of conviventi.
     *
     * @return string
     */
    public function getConviventi()
    {
        return $this->conviventi;
    }

    /**
     * Set the value of prematuro.
     *
     * @param string $prematuro
     * @return \Entity\CareEncounterYellowPaper
     */
    public function setPrematuro($prematuro)
    {
        $this->prematuro = $prematuro;

        return $this;
    }

    /**
     * Get the value of prematuro.
     *
     * @return string
     */
    public function getPrematuro()
    {
        return $this->prematuro;
    }

    /**
     * Set the value of eutocico.
     *
     * @param string $eutocico
     * @return \Entity\CareEncounterYellowPaper
     */
    public function setEutocico($eutocico)
    {
        $this->eutocico = $eutocico;

        return $this;
    }

    /**
     * Get the value of eutocico.
     *
     * @return string
     */
    public function getEutocico()
    {
        return $this->eutocico;
    }

    /**
     * Set the value of fisiologici_normali.
     *
     * @param string $fisiologici_normali
     * @return \Entity\CareEncounterYellowPaper
     */
    public function setFisiologiciNormali($fisiologici_normali)
    {
        $this->fisiologici_normali = $fisiologici_normali;

        return $this;
    }

    /**
     * Get the value of fisiologici_normali.
     *
     * @return string
     */
    public function getFisiologiciNormali()
    {
        return $this->fisiologici_normali;
    }

    /**
     * Set the value of fisiologici_tardivi.
     *
     * @param string $fisiologici_tardivi
     * @return \Entity\CareEncounterYellowPaper
     */
    public function setFisiologiciTardivi($fisiologici_tardivi)
    {
        $this->fisiologici_tardivi = $fisiologici_tardivi;

        return $this;
    }

    /**
     * Get the value of fisiologici_tardivi.
     *
     * @return string
     */
    public function getFisiologiciTardivi()
    {
        return $this->fisiologici_tardivi;
    }

    /**
     * Set the value of mestruazione.
     *
     * @param string $mestruazione
     * @return \Entity\CareEncounterYellowPaper
     */
    public function setMestruazione($mestruazione)
    {
        $this->mestruazione = $mestruazione;

        return $this;
    }

    /**
     * Get the value of mestruazione.
     *
     * @return string
     */
    public function getMestruazione()
    {
        return $this->mestruazione;
    }

    /**
     * Set the value of gravidanze.
     *
     * @param string $gravidanze
     * @return \Entity\CareEncounterYellowPaper
     */
    public function setGravidanze($gravidanze)
    {
        $this->gravidanze = $gravidanze;

        return $this;
    }

    /**
     * Get the value of gravidanze.
     *
     * @return string
     */
    public function getGravidanze()
    {
        return $this->gravidanze;
    }

    /**
     * Set the value of militare.
     *
     * @param string $militare
     * @return \Entity\CareEncounterYellowPaper
     */
    public function setMilitare($militare)
    {
        $this->militare = $militare;

        return $this;
    }

    /**
     * Get the value of militare.
     *
     * @return string
     */
    public function getMilitare()
    {
        return $this->militare;
    }

    /**
     * Set the value of alcolici.
     *
     * @param string $alcolici
     * @return \Entity\CareEncounterYellowPaper
     */
    public function setAlcolici($alcolici)
    {
        $this->alcolici = $alcolici;

        return $this;
    }

    /**
     * Get the value of alcolici.
     *
     * @return string
     */
    public function getAlcolici()
    {
        return $this->alcolici;
    }

    /**
     * Set the value of caffe.
     *
     * @param string $caffe
     * @return \Entity\CareEncounterYellowPaper
     */
    public function setCaffe($caffe)
    {
        $this->caffe = $caffe;

        return $this;
    }

    /**
     * Get the value of caffe.
     *
     * @return string
     */
    public function getCaffe()
    {
        return $this->caffe;
    }

    /**
     * Set the value of fumo.
     *
     * @param string $fumo
     * @return \Entity\CareEncounterYellowPaper
     */
    public function setFumo($fumo)
    {
        $this->fumo = $fumo;

        return $this;
    }

    /**
     * Get the value of fumo.
     *
     * @return string
     */
    public function getFumo()
    {
        return $this->fumo;
    }

    /**
     * Set the value of droghe.
     *
     * @param string $droghe
     * @return \Entity\CareEncounterYellowPaper
     */
    public function setDroghe($droghe)
    {
        $this->droghe = $droghe;

        return $this;
    }

    /**
     * Get the value of droghe.
     *
     * @return string
     */
    public function getDroghe()
    {
        return $this->droghe;
    }

    /**
     * Set the value of sete.
     *
     * @param string $sete
     * @return \Entity\CareEncounterYellowPaper
     */
    public function setSete($sete)
    {
        $this->sete = $sete;

        return $this;
    }

    /**
     * Get the value of sete.
     *
     * @return string
     */
    public function getSete()
    {
        return $this->sete;
    }

    /**
     * Set the value of alvo.
     *
     * @param string $alvo
     * @return \Entity\CareEncounterYellowPaper
     */
    public function setAlvo($alvo)
    {
        $this->alvo = $alvo;

        return $this;
    }

    /**
     * Get the value of alvo.
     *
     * @return string
     */
    public function getAlvo()
    {
        return $this->alvo;
    }

    /**
     * Set the value of diuresi.
     *
     * @param string $diuresi
     * @return \Entity\CareEncounterYellowPaper
     */
    public function setDiuresi($diuresi)
    {
        $this->diuresi = $diuresi;

        return $this;
    }

    /**
     * Get the value of diuresi.
     *
     * @return string
     */
    public function getDiuresi()
    {
        return $this->diuresi;
    }

    /**
     * Set the value of anamnesi_remota.
     *
     * @param string $anamnesi_remota
     * @return \Entity\CareEncounterYellowPaper
     */
    public function setAnamnesiRemota($anamnesi_remota)
    {
        $this->anamnesi_remota = $anamnesi_remota;

        return $this;
    }

    /**
     * Get the value of anamnesi_remota.
     *
     * @return string
     */
    public function getAnamnesiRemota()
    {
        return $this->anamnesi_remota;
    }

    /**
     * Set the value of anamnesi_prossima.
     *
     * @param string $anamnesi_prossima
     * @return \Entity\CareEncounterYellowPaper
     */
    public function setAnamnesiProssima($anamnesi_prossima)
    {
        $this->anamnesi_prossima = $anamnesi_prossima;

        return $this;
    }

    /**
     * Get the value of anamnesi_prossima.
     *
     * @return string
     */
    public function getAnamnesiProssima()
    {
        return $this->anamnesi_prossima;
    }

    /**
     * Set the value of nr.
     *
     * @param integer $nr
     * @return \Entity\CareEncounterYellowPaper
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
     * Set the value of modify_id.
     *
     * @param string $modify_id
     * @return \Entity\CareEncounterYellowPaper
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
     * @return \Entity\CareEncounterYellowPaper
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

    public function __sleep()
    {
        return array('encounter_nr', 'personell_name', 'location_id', 'history', 'create_id', 'create_time', 'sunto_anamnestico', 'stato_presente', 'altezza', 'peso', 'norm', 'dati_urine', 'dati_sangue', 'dati_altro', 'diagnosi', 'terapia', 'malattie_ereditarie', 'padre', 'madre', 'fratelli', 'coniuge', 'figli', 'paesi_esteri', 'abitazione', 'lavoro_pregresso', 'lavoro_presente', 'lavoro_attuale', 'ambiente_lavoro', 'gas_lavoro', 'tossiche_lavoro', 'conviventi', 'prematuro', 'eutocico', 'fisiologici_normali', 'fisiologici_tardivi', 'mestruazione', 'gravidanze', 'militare', 'alcolici', 'caffe', 'fumo', 'droghe', 'sete', 'alvo', 'diuresi', 'anamnesi_remota', 'anamnesi_prossima', 'nr', 'modify_id', 'modify_time');
    }
}