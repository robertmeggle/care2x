<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\CareTargetTest
 *
 * @ORM\Entity(repositoryClass="CareTargetTestRepository")
 * @ORM\Table(name="care_target_test", uniqueConstraints={@ORM\UniqueConstraint(name="nr", columns={"nr"})})
 */
class CareTargetTest
{
    /**
     * @ORM\Id
     * @ORM\Column(type="bigint")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $nr;

    /**
     * @ORM\Column(type="string", length=20)
     */
    protected $encounter_nr;

    /**
     * @ORM\Column(type="string", length=20)
     */
    protected $personell_nr;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $personell_name;

    /**
     * @ORM\Column(type="string", length=20)
     */
    protected $location_id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $history;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $modify_id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $modify_time;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $create_id;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $create_time;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $tipo_costituzionale;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $condizioni_generali;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $stato_nutrizione;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $decubito;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $psiche;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $cute;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $descrizione_mucose;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $annessi_cutanei;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $edemi;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $sottocutaneo_descrizione;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $temperatura;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $polso_battiti;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $polso;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $pressione_max;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $pressione_min;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $linfoghiandolare_descrizione;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $capo_descrizione;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $globi_oculari;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $sclere_descrizione;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $pupille;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $riflesso_corneale;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $orecchie;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $naso;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $cavo_orofaringeo;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $lingua;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $dentatura;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $tonsille;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $collo_forma;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $mobilita;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $atteggiamento;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $giugulari_turgide;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $tiroide_normale;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $collo_descrizione;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $mammelle;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $torace_forma;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $reperti_torace;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $ispezione_respiratoria;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $palpazione_respiratoria;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $percussione_respiratoria;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $ascoltazione_respiratoria;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $reperti_respiratoria;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $fegato_descrizione;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $epatomegalia;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $murphy;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $colecisti_palpabile;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $reperti_fegato;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $milza_descrizione;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $reperti_milza;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $urogenitale_descrizione;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $esplorazione_vaginale;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $reperti_genitale;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $osteoarticolare_descrizione;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $muscolare_descrizione;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $reperti_muscolare;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $nervoso_descrizione;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $nervi_cranici;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $riflessi_superficiali;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $reperti_nervoso;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $ispezione_cuore;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $palpazione_cuore;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $percussione_cuore;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $ascoltazione_cuore;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $reperti_cuore;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $vasi_periferici_descrizione;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $arterie;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $vene;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $reperti_vasi;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $addome_descrizione;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $addome_ispezione;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $addome_palpazione;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $addome_percussione;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $addome_ascoltazione;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $rettale;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $reperti_addome;

    public function __construct()
    {
    }

    /**
     * Set the value of nr.
     *
     * @param integer $nr
     * @return \Entity\CareTargetTest
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
     * Set the value of encounter_nr.
     *
     * @param string $encounter_nr
     * @return \Entity\CareTargetTest
     */
    public function setEncounterNr($encounter_nr)
    {
        $this->encounter_nr = $encounter_nr;

        return $this;
    }

    /**
     * Get the value of encounter_nr.
     *
     * @return string
     */
    public function getEncounterNr()
    {
        return $this->encounter_nr;
    }

    /**
     * Set the value of personell_nr.
     *
     * @param string $personell_nr
     * @return \Entity\CareTargetTest
     */
    public function setPersonellNr($personell_nr)
    {
        $this->personell_nr = $personell_nr;

        return $this;
    }

    /**
     * Get the value of personell_nr.
     *
     * @return string
     */
    public function getPersonellNr()
    {
        return $this->personell_nr;
    }

    /**
     * Set the value of personell_name.
     *
     * @param string $personell_name
     * @return \Entity\CareTargetTest
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
     * @return \Entity\CareTargetTest
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
     * @return \Entity\CareTargetTest
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
     * @return \Entity\CareTargetTest
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
     * @param string $modify_time
     * @return \Entity\CareTargetTest
     */
    public function setModifyTime($modify_time)
    {
        $this->modify_time = $modify_time;

        return $this;
    }

    /**
     * Get the value of modify_time.
     *
     * @return string
     */
    public function getModifyTime()
    {
        return $this->modify_time;
    }

    /**
     * Set the value of create_id.
     *
     * @param string $create_id
     * @return \Entity\CareTargetTest
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
     * @return \Entity\CareTargetTest
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
     * Set the value of tipo_costituzionale.
     *
     * @param string $tipo_costituzionale
     * @return \Entity\CareTargetTest
     */
    public function setTipoCostituzionale($tipo_costituzionale)
    {
        $this->tipo_costituzionale = $tipo_costituzionale;

        return $this;
    }

    /**
     * Get the value of tipo_costituzionale.
     *
     * @return string
     */
    public function getTipoCostituzionale()
    {
        return $this->tipo_costituzionale;
    }

    /**
     * Set the value of condizioni_generali.
     *
     * @param string $condizioni_generali
     * @return \Entity\CareTargetTest
     */
    public function setCondizioniGenerali($condizioni_generali)
    {
        $this->condizioni_generali = $condizioni_generali;

        return $this;
    }

    /**
     * Get the value of condizioni_generali.
     *
     * @return string
     */
    public function getCondizioniGenerali()
    {
        return $this->condizioni_generali;
    }

    /**
     * Set the value of stato_nutrizione.
     *
     * @param string $stato_nutrizione
     * @return \Entity\CareTargetTest
     */
    public function setStatoNutrizione($stato_nutrizione)
    {
        $this->stato_nutrizione = $stato_nutrizione;

        return $this;
    }

    /**
     * Get the value of stato_nutrizione.
     *
     * @return string
     */
    public function getStatoNutrizione()
    {
        return $this->stato_nutrizione;
    }

    /**
     * Set the value of decubito.
     *
     * @param string $decubito
     * @return \Entity\CareTargetTest
     */
    public function setDecubito($decubito)
    {
        $this->decubito = $decubito;

        return $this;
    }

    /**
     * Get the value of decubito.
     *
     * @return string
     */
    public function getDecubito()
    {
        return $this->decubito;
    }

    /**
     * Set the value of psiche.
     *
     * @param string $psiche
     * @return \Entity\CareTargetTest
     */
    public function setPsiche($psiche)
    {
        $this->psiche = $psiche;

        return $this;
    }

    /**
     * Get the value of psiche.
     *
     * @return string
     */
    public function getPsiche()
    {
        return $this->psiche;
    }

    /**
     * Set the value of cute.
     *
     * @param string $cute
     * @return \Entity\CareTargetTest
     */
    public function setCute($cute)
    {
        $this->cute = $cute;

        return $this;
    }

    /**
     * Get the value of cute.
     *
     * @return string
     */
    public function getCute()
    {
        return $this->cute;
    }

    /**
     * Set the value of descrizione_mucose.
     *
     * @param string $descrizione_mucose
     * @return \Entity\CareTargetTest
     */
    public function setDescrizioneMucose($descrizione_mucose)
    {
        $this->descrizione_mucose = $descrizione_mucose;

        return $this;
    }

    /**
     * Get the value of descrizione_mucose.
     *
     * @return string
     */
    public function getDescrizioneMucose()
    {
        return $this->descrizione_mucose;
    }

    /**
     * Set the value of annessi_cutanei.
     *
     * @param string $annessi_cutanei
     * @return \Entity\CareTargetTest
     */
    public function setAnnessiCutanei($annessi_cutanei)
    {
        $this->annessi_cutanei = $annessi_cutanei;

        return $this;
    }

    /**
     * Get the value of annessi_cutanei.
     *
     * @return string
     */
    public function getAnnessiCutanei()
    {
        return $this->annessi_cutanei;
    }

    /**
     * Set the value of edemi.
     *
     * @param string $edemi
     * @return \Entity\CareTargetTest
     */
    public function setEdemi($edemi)
    {
        $this->edemi = $edemi;

        return $this;
    }

    /**
     * Get the value of edemi.
     *
     * @return string
     */
    public function getEdemi()
    {
        return $this->edemi;
    }

    /**
     * Set the value of sottocutaneo_descrizione.
     *
     * @param string $sottocutaneo_descrizione
     * @return \Entity\CareTargetTest
     */
    public function setSottocutaneoDescrizione($sottocutaneo_descrizione)
    {
        $this->sottocutaneo_descrizione = $sottocutaneo_descrizione;

        return $this;
    }

    /**
     * Get the value of sottocutaneo_descrizione.
     *
     * @return string
     */
    public function getSottocutaneoDescrizione()
    {
        return $this->sottocutaneo_descrizione;
    }

    /**
     * Set the value of temperatura.
     *
     * @param string $temperatura
     * @return \Entity\CareTargetTest
     */
    public function setTemperatura($temperatura)
    {
        $this->temperatura = $temperatura;

        return $this;
    }

    /**
     * Get the value of temperatura.
     *
     * @return string
     */
    public function getTemperatura()
    {
        return $this->temperatura;
    }

    /**
     * Set the value of polso_battiti.
     *
     * @param string $polso_battiti
     * @return \Entity\CareTargetTest
     */
    public function setPolsoBattiti($polso_battiti)
    {
        $this->polso_battiti = $polso_battiti;

        return $this;
    }

    /**
     * Get the value of polso_battiti.
     *
     * @return string
     */
    public function getPolsoBattiti()
    {
        return $this->polso_battiti;
    }

    /**
     * Set the value of polso.
     *
     * @param string $polso
     * @return \Entity\CareTargetTest
     */
    public function setPolso($polso)
    {
        $this->polso = $polso;

        return $this;
    }

    /**
     * Get the value of polso.
     *
     * @return string
     */
    public function getPolso()
    {
        return $this->polso;
    }

    /**
     * Set the value of pressione_max.
     *
     * @param string $pressione_max
     * @return \Entity\CareTargetTest
     */
    public function setPressioneMax($pressione_max)
    {
        $this->pressione_max = $pressione_max;

        return $this;
    }

    /**
     * Get the value of pressione_max.
     *
     * @return string
     */
    public function getPressioneMax()
    {
        return $this->pressione_max;
    }

    /**
     * Set the value of pressione_min.
     *
     * @param string $pressione_min
     * @return \Entity\CareTargetTest
     */
    public function setPressioneMin($pressione_min)
    {
        $this->pressione_min = $pressione_min;

        return $this;
    }

    /**
     * Get the value of pressione_min.
     *
     * @return string
     */
    public function getPressioneMin()
    {
        return $this->pressione_min;
    }

    /**
     * Set the value of linfoghiandolare_descrizione.
     *
     * @param string $linfoghiandolare_descrizione
     * @return \Entity\CareTargetTest
     */
    public function setLinfoghiandolareDescrizione($linfoghiandolare_descrizione)
    {
        $this->linfoghiandolare_descrizione = $linfoghiandolare_descrizione;

        return $this;
    }

    /**
     * Get the value of linfoghiandolare_descrizione.
     *
     * @return string
     */
    public function getLinfoghiandolareDescrizione()
    {
        return $this->linfoghiandolare_descrizione;
    }

    /**
     * Set the value of capo_descrizione.
     *
     * @param string $capo_descrizione
     * @return \Entity\CareTargetTest
     */
    public function setCapoDescrizione($capo_descrizione)
    {
        $this->capo_descrizione = $capo_descrizione;

        return $this;
    }

    /**
     * Get the value of capo_descrizione.
     *
     * @return string
     */
    public function getCapoDescrizione()
    {
        return $this->capo_descrizione;
    }

    /**
     * Set the value of globi_oculari.
     *
     * @param string $globi_oculari
     * @return \Entity\CareTargetTest
     */
    public function setGlobiOculari($globi_oculari)
    {
        $this->globi_oculari = $globi_oculari;

        return $this;
    }

    /**
     * Get the value of globi_oculari.
     *
     * @return string
     */
    public function getGlobiOculari()
    {
        return $this->globi_oculari;
    }

    /**
     * Set the value of sclere_descrizione.
     *
     * @param string $sclere_descrizione
     * @return \Entity\CareTargetTest
     */
    public function setSclereDescrizione($sclere_descrizione)
    {
        $this->sclere_descrizione = $sclere_descrizione;

        return $this;
    }

    /**
     * Get the value of sclere_descrizione.
     *
     * @return string
     */
    public function getSclereDescrizione()
    {
        return $this->sclere_descrizione;
    }

    /**
     * Set the value of pupille.
     *
     * @param string $pupille
     * @return \Entity\CareTargetTest
     */
    public function setPupille($pupille)
    {
        $this->pupille = $pupille;

        return $this;
    }

    /**
     * Get the value of pupille.
     *
     * @return string
     */
    public function getPupille()
    {
        return $this->pupille;
    }

    /**
     * Set the value of riflesso_corneale.
     *
     * @param string $riflesso_corneale
     * @return \Entity\CareTargetTest
     */
    public function setRiflessoCorneale($riflesso_corneale)
    {
        $this->riflesso_corneale = $riflesso_corneale;

        return $this;
    }

    /**
     * Get the value of riflesso_corneale.
     *
     * @return string
     */
    public function getRiflessoCorneale()
    {
        return $this->riflesso_corneale;
    }

    /**
     * Set the value of orecchie.
     *
     * @param string $orecchie
     * @return \Entity\CareTargetTest
     */
    public function setOrecchie($orecchie)
    {
        $this->orecchie = $orecchie;

        return $this;
    }

    /**
     * Get the value of orecchie.
     *
     * @return string
     */
    public function getOrecchie()
    {
        return $this->orecchie;
    }

    /**
     * Set the value of naso.
     *
     * @param string $naso
     * @return \Entity\CareTargetTest
     */
    public function setNaso($naso)
    {
        $this->naso = $naso;

        return $this;
    }

    /**
     * Get the value of naso.
     *
     * @return string
     */
    public function getNaso()
    {
        return $this->naso;
    }

    /**
     * Set the value of cavo_orofaringeo.
     *
     * @param string $cavo_orofaringeo
     * @return \Entity\CareTargetTest
     */
    public function setCavoOrofaringeo($cavo_orofaringeo)
    {
        $this->cavo_orofaringeo = $cavo_orofaringeo;

        return $this;
    }

    /**
     * Get the value of cavo_orofaringeo.
     *
     * @return string
     */
    public function getCavoOrofaringeo()
    {
        return $this->cavo_orofaringeo;
    }

    /**
     * Set the value of lingua.
     *
     * @param string $lingua
     * @return \Entity\CareTargetTest
     */
    public function setLingua($lingua)
    {
        $this->lingua = $lingua;

        return $this;
    }

    /**
     * Get the value of lingua.
     *
     * @return string
     */
    public function getLingua()
    {
        return $this->lingua;
    }

    /**
     * Set the value of dentatura.
     *
     * @param string $dentatura
     * @return \Entity\CareTargetTest
     */
    public function setDentatura($dentatura)
    {
        $this->dentatura = $dentatura;

        return $this;
    }

    /**
     * Get the value of dentatura.
     *
     * @return string
     */
    public function getDentatura()
    {
        return $this->dentatura;
    }

    /**
     * Set the value of tonsille.
     *
     * @param string $tonsille
     * @return \Entity\CareTargetTest
     */
    public function setTonsille($tonsille)
    {
        $this->tonsille = $tonsille;

        return $this;
    }

    /**
     * Get the value of tonsille.
     *
     * @return string
     */
    public function getTonsille()
    {
        return $this->tonsille;
    }

    /**
     * Set the value of collo_forma.
     *
     * @param string $collo_forma
     * @return \Entity\CareTargetTest
     */
    public function setColloForma($collo_forma)
    {
        $this->collo_forma = $collo_forma;

        return $this;
    }

    /**
     * Get the value of collo_forma.
     *
     * @return string
     */
    public function getColloForma()
    {
        return $this->collo_forma;
    }

    /**
     * Set the value of mobilita.
     *
     * @param string $mobilita
     * @return \Entity\CareTargetTest
     */
    public function setMobilita($mobilita)
    {
        $this->mobilita = $mobilita;

        return $this;
    }

    /**
     * Get the value of mobilita.
     *
     * @return string
     */
    public function getMobilita()
    {
        return $this->mobilita;
    }

    /**
     * Set the value of atteggiamento.
     *
     * @param string $atteggiamento
     * @return \Entity\CareTargetTest
     */
    public function setAtteggiamento($atteggiamento)
    {
        $this->atteggiamento = $atteggiamento;

        return $this;
    }

    /**
     * Get the value of atteggiamento.
     *
     * @return string
     */
    public function getAtteggiamento()
    {
        return $this->atteggiamento;
    }

    /**
     * Set the value of giugulari_turgide.
     *
     * @param string $giugulari_turgide
     * @return \Entity\CareTargetTest
     */
    public function setGiugulariTurgide($giugulari_turgide)
    {
        $this->giugulari_turgide = $giugulari_turgide;

        return $this;
    }

    /**
     * Get the value of giugulari_turgide.
     *
     * @return string
     */
    public function getGiugulariTurgide()
    {
        return $this->giugulari_turgide;
    }

    /**
     * Set the value of tiroide_normale.
     *
     * @param string $tiroide_normale
     * @return \Entity\CareTargetTest
     */
    public function setTiroideNormale($tiroide_normale)
    {
        $this->tiroide_normale = $tiroide_normale;

        return $this;
    }

    /**
     * Get the value of tiroide_normale.
     *
     * @return string
     */
    public function getTiroideNormale()
    {
        return $this->tiroide_normale;
    }

    /**
     * Set the value of collo_descrizione.
     *
     * @param string $collo_descrizione
     * @return \Entity\CareTargetTest
     */
    public function setColloDescrizione($collo_descrizione)
    {
        $this->collo_descrizione = $collo_descrizione;

        return $this;
    }

    /**
     * Get the value of collo_descrizione.
     *
     * @return string
     */
    public function getColloDescrizione()
    {
        return $this->collo_descrizione;
    }

    /**
     * Set the value of mammelle.
     *
     * @param string $mammelle
     * @return \Entity\CareTargetTest
     */
    public function setMammelle($mammelle)
    {
        $this->mammelle = $mammelle;

        return $this;
    }

    /**
     * Get the value of mammelle.
     *
     * @return string
     */
    public function getMammelle()
    {
        return $this->mammelle;
    }

    /**
     * Set the value of torace_forma.
     *
     * @param string $torace_forma
     * @return \Entity\CareTargetTest
     */
    public function setToraceForma($torace_forma)
    {
        $this->torace_forma = $torace_forma;

        return $this;
    }

    /**
     * Get the value of torace_forma.
     *
     * @return string
     */
    public function getToraceForma()
    {
        return $this->torace_forma;
    }

    /**
     * Set the value of reperti_torace.
     *
     * @param string $reperti_torace
     * @return \Entity\CareTargetTest
     */
    public function setRepertiTorace($reperti_torace)
    {
        $this->reperti_torace = $reperti_torace;

        return $this;
    }

    /**
     * Get the value of reperti_torace.
     *
     * @return string
     */
    public function getRepertiTorace()
    {
        return $this->reperti_torace;
    }

    /**
     * Set the value of ispezione_respiratoria.
     *
     * @param string $ispezione_respiratoria
     * @return \Entity\CareTargetTest
     */
    public function setIspezioneRespiratoria($ispezione_respiratoria)
    {
        $this->ispezione_respiratoria = $ispezione_respiratoria;

        return $this;
    }

    /**
     * Get the value of ispezione_respiratoria.
     *
     * @return string
     */
    public function getIspezioneRespiratoria()
    {
        return $this->ispezione_respiratoria;
    }

    /**
     * Set the value of palpazione_respiratoria.
     *
     * @param string $palpazione_respiratoria
     * @return \Entity\CareTargetTest
     */
    public function setPalpazioneRespiratoria($palpazione_respiratoria)
    {
        $this->palpazione_respiratoria = $palpazione_respiratoria;

        return $this;
    }

    /**
     * Get the value of palpazione_respiratoria.
     *
     * @return string
     */
    public function getPalpazioneRespiratoria()
    {
        return $this->palpazione_respiratoria;
    }

    /**
     * Set the value of percussione_respiratoria.
     *
     * @param string $percussione_respiratoria
     * @return \Entity\CareTargetTest
     */
    public function setPercussioneRespiratoria($percussione_respiratoria)
    {
        $this->percussione_respiratoria = $percussione_respiratoria;

        return $this;
    }

    /**
     * Get the value of percussione_respiratoria.
     *
     * @return string
     */
    public function getPercussioneRespiratoria()
    {
        return $this->percussione_respiratoria;
    }

    /**
     * Set the value of ascoltazione_respiratoria.
     *
     * @param string $ascoltazione_respiratoria
     * @return \Entity\CareTargetTest
     */
    public function setAscoltazioneRespiratoria($ascoltazione_respiratoria)
    {
        $this->ascoltazione_respiratoria = $ascoltazione_respiratoria;

        return $this;
    }

    /**
     * Get the value of ascoltazione_respiratoria.
     *
     * @return string
     */
    public function getAscoltazioneRespiratoria()
    {
        return $this->ascoltazione_respiratoria;
    }

    /**
     * Set the value of reperti_respiratoria.
     *
     * @param string $reperti_respiratoria
     * @return \Entity\CareTargetTest
     */
    public function setRepertiRespiratoria($reperti_respiratoria)
    {
        $this->reperti_respiratoria = $reperti_respiratoria;

        return $this;
    }

    /**
     * Get the value of reperti_respiratoria.
     *
     * @return string
     */
    public function getRepertiRespiratoria()
    {
        return $this->reperti_respiratoria;
    }

    /**
     * Set the value of fegato_descrizione.
     *
     * @param string $fegato_descrizione
     * @return \Entity\CareTargetTest
     */
    public function setFegatoDescrizione($fegato_descrizione)
    {
        $this->fegato_descrizione = $fegato_descrizione;

        return $this;
    }

    /**
     * Get the value of fegato_descrizione.
     *
     * @return string
     */
    public function getFegatoDescrizione()
    {
        return $this->fegato_descrizione;
    }

    /**
     * Set the value of epatomegalia.
     *
     * @param string $epatomegalia
     * @return \Entity\CareTargetTest
     */
    public function setEpatomegalia($epatomegalia)
    {
        $this->epatomegalia = $epatomegalia;

        return $this;
    }

    /**
     * Get the value of epatomegalia.
     *
     * @return string
     */
    public function getEpatomegalia()
    {
        return $this->epatomegalia;
    }

    /**
     * Set the value of murphy.
     *
     * @param string $murphy
     * @return \Entity\CareTargetTest
     */
    public function setMurphy($murphy)
    {
        $this->murphy = $murphy;

        return $this;
    }

    /**
     * Get the value of murphy.
     *
     * @return string
     */
    public function getMurphy()
    {
        return $this->murphy;
    }

    /**
     * Set the value of colecisti_palpabile.
     *
     * @param string $colecisti_palpabile
     * @return \Entity\CareTargetTest
     */
    public function setColecistiPalpabile($colecisti_palpabile)
    {
        $this->colecisti_palpabile = $colecisti_palpabile;

        return $this;
    }

    /**
     * Get the value of colecisti_palpabile.
     *
     * @return string
     */
    public function getColecistiPalpabile()
    {
        return $this->colecisti_palpabile;
    }

    /**
     * Set the value of reperti_fegato.
     *
     * @param string $reperti_fegato
     * @return \Entity\CareTargetTest
     */
    public function setRepertiFegato($reperti_fegato)
    {
        $this->reperti_fegato = $reperti_fegato;

        return $this;
    }

    /**
     * Get the value of reperti_fegato.
     *
     * @return string
     */
    public function getRepertiFegato()
    {
        return $this->reperti_fegato;
    }

    /**
     * Set the value of milza_descrizione.
     *
     * @param string $milza_descrizione
     * @return \Entity\CareTargetTest
     */
    public function setMilzaDescrizione($milza_descrizione)
    {
        $this->milza_descrizione = $milza_descrizione;

        return $this;
    }

    /**
     * Get the value of milza_descrizione.
     *
     * @return string
     */
    public function getMilzaDescrizione()
    {
        return $this->milza_descrizione;
    }

    /**
     * Set the value of reperti_milza.
     *
     * @param string $reperti_milza
     * @return \Entity\CareTargetTest
     */
    public function setRepertiMilza($reperti_milza)
    {
        $this->reperti_milza = $reperti_milza;

        return $this;
    }

    /**
     * Get the value of reperti_milza.
     *
     * @return string
     */
    public function getRepertiMilza()
    {
        return $this->reperti_milza;
    }

    /**
     * Set the value of urogenitale_descrizione.
     *
     * @param string $urogenitale_descrizione
     * @return \Entity\CareTargetTest
     */
    public function setUrogenitaleDescrizione($urogenitale_descrizione)
    {
        $this->urogenitale_descrizione = $urogenitale_descrizione;

        return $this;
    }

    /**
     * Get the value of urogenitale_descrizione.
     *
     * @return string
     */
    public function getUrogenitaleDescrizione()
    {
        return $this->urogenitale_descrizione;
    }

    /**
     * Set the value of esplorazione_vaginale.
     *
     * @param string $esplorazione_vaginale
     * @return \Entity\CareTargetTest
     */
    public function setEsplorazioneVaginale($esplorazione_vaginale)
    {
        $this->esplorazione_vaginale = $esplorazione_vaginale;

        return $this;
    }

    /**
     * Get the value of esplorazione_vaginale.
     *
     * @return string
     */
    public function getEsplorazioneVaginale()
    {
        return $this->esplorazione_vaginale;
    }

    /**
     * Set the value of reperti_genitale.
     *
     * @param string $reperti_genitale
     * @return \Entity\CareTargetTest
     */
    public function setRepertiGenitale($reperti_genitale)
    {
        $this->reperti_genitale = $reperti_genitale;

        return $this;
    }

    /**
     * Get the value of reperti_genitale.
     *
     * @return string
     */
    public function getRepertiGenitale()
    {
        return $this->reperti_genitale;
    }

    /**
     * Set the value of osteoarticolare_descrizione.
     *
     * @param string $osteoarticolare_descrizione
     * @return \Entity\CareTargetTest
     */
    public function setOsteoarticolareDescrizione($osteoarticolare_descrizione)
    {
        $this->osteoarticolare_descrizione = $osteoarticolare_descrizione;

        return $this;
    }

    /**
     * Get the value of osteoarticolare_descrizione.
     *
     * @return string
     */
    public function getOsteoarticolareDescrizione()
    {
        return $this->osteoarticolare_descrizione;
    }

    /**
     * Set the value of muscolare_descrizione.
     *
     * @param string $muscolare_descrizione
     * @return \Entity\CareTargetTest
     */
    public function setMuscolareDescrizione($muscolare_descrizione)
    {
        $this->muscolare_descrizione = $muscolare_descrizione;

        return $this;
    }

    /**
     * Get the value of muscolare_descrizione.
     *
     * @return string
     */
    public function getMuscolareDescrizione()
    {
        return $this->muscolare_descrizione;
    }

    /**
     * Set the value of reperti_muscolare.
     *
     * @param string $reperti_muscolare
     * @return \Entity\CareTargetTest
     */
    public function setRepertiMuscolare($reperti_muscolare)
    {
        $this->reperti_muscolare = $reperti_muscolare;

        return $this;
    }

    /**
     * Get the value of reperti_muscolare.
     *
     * @return string
     */
    public function getRepertiMuscolare()
    {
        return $this->reperti_muscolare;
    }

    /**
     * Set the value of nervoso_descrizione.
     *
     * @param string $nervoso_descrizione
     * @return \Entity\CareTargetTest
     */
    public function setNervosoDescrizione($nervoso_descrizione)
    {
        $this->nervoso_descrizione = $nervoso_descrizione;

        return $this;
    }

    /**
     * Get the value of nervoso_descrizione.
     *
     * @return string
     */
    public function getNervosoDescrizione()
    {
        return $this->nervoso_descrizione;
    }

    /**
     * Set the value of nervi_cranici.
     *
     * @param string $nervi_cranici
     * @return \Entity\CareTargetTest
     */
    public function setNerviCranici($nervi_cranici)
    {
        $this->nervi_cranici = $nervi_cranici;

        return $this;
    }

    /**
     * Get the value of nervi_cranici.
     *
     * @return string
     */
    public function getNerviCranici()
    {
        return $this->nervi_cranici;
    }

    /**
     * Set the value of riflessi_superficiali.
     *
     * @param string $riflessi_superficiali
     * @return \Entity\CareTargetTest
     */
    public function setRiflessiSuperficiali($riflessi_superficiali)
    {
        $this->riflessi_superficiali = $riflessi_superficiali;

        return $this;
    }

    /**
     * Get the value of riflessi_superficiali.
     *
     * @return string
     */
    public function getRiflessiSuperficiali()
    {
        return $this->riflessi_superficiali;
    }

    /**
     * Set the value of reperti_nervoso.
     *
     * @param string $reperti_nervoso
     * @return \Entity\CareTargetTest
     */
    public function setRepertiNervoso($reperti_nervoso)
    {
        $this->reperti_nervoso = $reperti_nervoso;

        return $this;
    }

    /**
     * Get the value of reperti_nervoso.
     *
     * @return string
     */
    public function getRepertiNervoso()
    {
        return $this->reperti_nervoso;
    }

    /**
     * Set the value of ispezione_cuore.
     *
     * @param string $ispezione_cuore
     * @return \Entity\CareTargetTest
     */
    public function setIspezioneCuore($ispezione_cuore)
    {
        $this->ispezione_cuore = $ispezione_cuore;

        return $this;
    }

    /**
     * Get the value of ispezione_cuore.
     *
     * @return string
     */
    public function getIspezioneCuore()
    {
        return $this->ispezione_cuore;
    }

    /**
     * Set the value of palpazione_cuore.
     *
     * @param string $palpazione_cuore
     * @return \Entity\CareTargetTest
     */
    public function setPalpazioneCuore($palpazione_cuore)
    {
        $this->palpazione_cuore = $palpazione_cuore;

        return $this;
    }

    /**
     * Get the value of palpazione_cuore.
     *
     * @return string
     */
    public function getPalpazioneCuore()
    {
        return $this->palpazione_cuore;
    }

    /**
     * Set the value of percussione_cuore.
     *
     * @param string $percussione_cuore
     * @return \Entity\CareTargetTest
     */
    public function setPercussioneCuore($percussione_cuore)
    {
        $this->percussione_cuore = $percussione_cuore;

        return $this;
    }

    /**
     * Get the value of percussione_cuore.
     *
     * @return string
     */
    public function getPercussioneCuore()
    {
        return $this->percussione_cuore;
    }

    /**
     * Set the value of ascoltazione_cuore.
     *
     * @param string $ascoltazione_cuore
     * @return \Entity\CareTargetTest
     */
    public function setAscoltazioneCuore($ascoltazione_cuore)
    {
        $this->ascoltazione_cuore = $ascoltazione_cuore;

        return $this;
    }

    /**
     * Get the value of ascoltazione_cuore.
     *
     * @return string
     */
    public function getAscoltazioneCuore()
    {
        return $this->ascoltazione_cuore;
    }

    /**
     * Set the value of reperti_cuore.
     *
     * @param string $reperti_cuore
     * @return \Entity\CareTargetTest
     */
    public function setRepertiCuore($reperti_cuore)
    {
        $this->reperti_cuore = $reperti_cuore;

        return $this;
    }

    /**
     * Get the value of reperti_cuore.
     *
     * @return string
     */
    public function getRepertiCuore()
    {
        return $this->reperti_cuore;
    }

    /**
     * Set the value of vasi_periferici_descrizione.
     *
     * @param string $vasi_periferici_descrizione
     * @return \Entity\CareTargetTest
     */
    public function setVasiPerifericiDescrizione($vasi_periferici_descrizione)
    {
        $this->vasi_periferici_descrizione = $vasi_periferici_descrizione;

        return $this;
    }

    /**
     * Get the value of vasi_periferici_descrizione.
     *
     * @return string
     */
    public function getVasiPerifericiDescrizione()
    {
        return $this->vasi_periferici_descrizione;
    }

    /**
     * Set the value of arterie.
     *
     * @param string $arterie
     * @return \Entity\CareTargetTest
     */
    public function setArterie($arterie)
    {
        $this->arterie = $arterie;

        return $this;
    }

    /**
     * Get the value of arterie.
     *
     * @return string
     */
    public function getArterie()
    {
        return $this->arterie;
    }

    /**
     * Set the value of vene.
     *
     * @param string $vene
     * @return \Entity\CareTargetTest
     */
    public function setVene($vene)
    {
        $this->vene = $vene;

        return $this;
    }

    /**
     * Get the value of vene.
     *
     * @return string
     */
    public function getVene()
    {
        return $this->vene;
    }

    /**
     * Set the value of reperti_vasi.
     *
     * @param string $reperti_vasi
     * @return \Entity\CareTargetTest
     */
    public function setRepertiVasi($reperti_vasi)
    {
        $this->reperti_vasi = $reperti_vasi;

        return $this;
    }

    /**
     * Get the value of reperti_vasi.
     *
     * @return string
     */
    public function getRepertiVasi()
    {
        return $this->reperti_vasi;
    }

    /**
     * Set the value of addome_descrizione.
     *
     * @param string $addome_descrizione
     * @return \Entity\CareTargetTest
     */
    public function setAddomeDescrizione($addome_descrizione)
    {
        $this->addome_descrizione = $addome_descrizione;

        return $this;
    }

    /**
     * Get the value of addome_descrizione.
     *
     * @return string
     */
    public function getAddomeDescrizione()
    {
        return $this->addome_descrizione;
    }

    /**
     * Set the value of addome_ispezione.
     *
     * @param string $addome_ispezione
     * @return \Entity\CareTargetTest
     */
    public function setAddomeIspezione($addome_ispezione)
    {
        $this->addome_ispezione = $addome_ispezione;

        return $this;
    }

    /**
     * Get the value of addome_ispezione.
     *
     * @return string
     */
    public function getAddomeIspezione()
    {
        return $this->addome_ispezione;
    }

    /**
     * Set the value of addome_palpazione.
     *
     * @param string $addome_palpazione
     * @return \Entity\CareTargetTest
     */
    public function setAddomePalpazione($addome_palpazione)
    {
        $this->addome_palpazione = $addome_palpazione;

        return $this;
    }

    /**
     * Get the value of addome_palpazione.
     *
     * @return string
     */
    public function getAddomePalpazione()
    {
        return $this->addome_palpazione;
    }

    /**
     * Set the value of addome_percussione.
     *
     * @param string $addome_percussione
     * @return \Entity\CareTargetTest
     */
    public function setAddomePercussione($addome_percussione)
    {
        $this->addome_percussione = $addome_percussione;

        return $this;
    }

    /**
     * Get the value of addome_percussione.
     *
     * @return string
     */
    public function getAddomePercussione()
    {
        return $this->addome_percussione;
    }

    /**
     * Set the value of addome_ascoltazione.
     *
     * @param string $addome_ascoltazione
     * @return \Entity\CareTargetTest
     */
    public function setAddomeAscoltazione($addome_ascoltazione)
    {
        $this->addome_ascoltazione = $addome_ascoltazione;

        return $this;
    }

    /**
     * Get the value of addome_ascoltazione.
     *
     * @return string
     */
    public function getAddomeAscoltazione()
    {
        return $this->addome_ascoltazione;
    }

    /**
     * Set the value of rettale.
     *
     * @param string $rettale
     * @return \Entity\CareTargetTest
     */
    public function setRettale($rettale)
    {
        $this->rettale = $rettale;

        return $this;
    }

    /**
     * Get the value of rettale.
     *
     * @return string
     */
    public function getRettale()
    {
        return $this->rettale;
    }

    /**
     * Set the value of reperti_addome.
     *
     * @param string $reperti_addome
     * @return \Entity\CareTargetTest
     */
    public function setRepertiAddome($reperti_addome)
    {
        $this->reperti_addome = $reperti_addome;

        return $this;
    }

    /**
     * Get the value of reperti_addome.
     *
     * @return string
     */
    public function getRepertiAddome()
    {
        return $this->reperti_addome;
    }

    public function __sleep()
    {
        return array('nr', 'encounter_nr', 'personell_nr', 'personell_name', 'location_id', 'history', 'modify_id', 'modify_time', 'create_id', 'create_time', 'tipo_costituzionale', 'condizioni_generali', 'stato_nutrizione', 'decubito', 'psiche', 'cute', 'descrizione_mucose', 'annessi_cutanei', 'edemi', 'sottocutaneo_descrizione', 'temperatura', 'polso_battiti', 'polso', 'pressione_max', 'pressione_min', 'linfoghiandolare_descrizione', 'capo_descrizione', 'globi_oculari', 'sclere_descrizione', 'pupille', 'riflesso_corneale', 'orecchie', 'naso', 'cavo_orofaringeo', 'lingua', 'dentatura', 'tonsille', 'collo_forma', 'mobilita', 'atteggiamento', 'giugulari_turgide', 'tiroide_normale', 'collo_descrizione', 'mammelle', 'torace_forma', 'reperti_torace', 'ispezione_respiratoria', 'palpazione_respiratoria', 'percussione_respiratoria', 'ascoltazione_respiratoria', 'reperti_respiratoria', 'fegato_descrizione', 'epatomegalia', 'murphy', 'colecisti_palpabile', 'reperti_fegato', 'milza_descrizione', 'reperti_milza', 'urogenitale_descrizione', 'esplorazione_vaginale', 'reperti_genitale', 'osteoarticolare_descrizione', 'muscolare_descrizione', 'reperti_muscolare', 'nervoso_descrizione', 'nervi_cranici', 'riflessi_superficiali', 'reperti_nervoso', 'ispezione_cuore', 'palpazione_cuore', 'percussione_cuore', 'ascoltazione_cuore', 'reperti_cuore', 'vasi_periferici_descrizione', 'arterie', 'vene', 'reperti_vasi', 'addome_descrizione', 'addome_ispezione', 'addome_palpazione', 'addome_percussione', 'addome_ascoltazione', 'rettale', 'reperti_addome');
    }
}