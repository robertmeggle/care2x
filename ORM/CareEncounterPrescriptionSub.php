<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\CareEncounterPrescriptionSub
 *
 * @ORM\Entity(repositoryClass="CareEncounterPrescriptionSubRepository")
 * @ORM\Table(name="care_encounter_prescription_sub", indexes={@ORM\Index(name="prescription_nr", columns={"prescription_nr"})})
 */
class CareEncounterPrescriptionSub
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $nr;

    /**
     * @ORM\Column(type="smallint")
     */
    protected $prescription_type_nr;

    /**
     * @ORM\Column(type="string", length=20)
     */
    protected $atc;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $article;

    /**
     * @ORM\Column(type="string", length=60)
     */
    protected $drug_class;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $dosage;

    /**
     * @ORM\Column(type="string", length=50)
     */
    protected $admin_time;

    /**
     * @ORM\Column(type="string", length=10)
     */
    protected $quantity;

    /**
     * @ORM\Column(type="smallint")
     */
    protected $application_type_nr;

    /**
     * @ORM\Column(type="float", precision=5, scale=3, nullable=true)
     */
    protected $sub_speed;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $notes_sub;

    /**
     * @ORM\Column(type="string", length=10)
     */
    protected $color_marker;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $is_stopped;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    protected $stop_date;

    /**
     * @ORM\Column(type="string", length=25)
     */
    protected $status;

    /**
     * @ORM\Column(type="string", length=50)
     */
    protected $companion;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2)
     */
    protected $price;

    /**
     * @ORM\ManyToOne(targetEntity="CareEncounterPrescription", inversedBy="careEncounterPrescriptionSubs")
     * @ORM\JoinColumn(name="prescription_nr", referencedColumnName="nr", onDelete="CASCADE", nullable=false)
     */
    protected $careEncounterPrescription;

    public function __construct()
    {
    }

    /**
     * Set the value of nr.
     *
     * @param integer $nr
     * @return \Entity\CareEncounterPrescriptionSub
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
     * Set the value of prescription_type_nr.
     *
     * @param integer $prescription_type_nr
     * @return \Entity\CareEncounterPrescriptionSub
     */
    public function setPrescriptionTypeNr($prescription_type_nr)
    {
        $this->prescription_type_nr = $prescription_type_nr;

        return $this;
    }

    /**
     * Get the value of prescription_type_nr.
     *
     * @return integer
     */
    public function getPrescriptionTypeNr()
    {
        return $this->prescription_type_nr;
    }

    /**
     * Set the value of atc.
     *
     * @param string $atc
     * @return \Entity\CareEncounterPrescriptionSub
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
     * Set the value of article.
     *
     * @param string $article
     * @return \Entity\CareEncounterPrescriptionSub
     */
    public function setArticle($article)
    {
        $this->article = $article;

        return $this;
    }

    /**
     * Get the value of article.
     *
     * @return string
     */
    public function getArticle()
    {
        return $this->article;
    }

    /**
     * Set the value of drug_class.
     *
     * @param string $drug_class
     * @return \Entity\CareEncounterPrescriptionSub
     */
    public function setDrugClass($drug_class)
    {
        $this->drug_class = $drug_class;

        return $this;
    }

    /**
     * Get the value of drug_class.
     *
     * @return string
     */
    public function getDrugClass()
    {
        return $this->drug_class;
    }

    /**
     * Set the value of dosage.
     *
     * @param string $dosage
     * @return \Entity\CareEncounterPrescriptionSub
     */
    public function setDosage($dosage)
    {
        $this->dosage = $dosage;

        return $this;
    }

    /**
     * Get the value of dosage.
     *
     * @return string
     */
    public function getDosage()
    {
        return $this->dosage;
    }

    /**
     * Set the value of admin_time.
     *
     * @param string $admin_time
     * @return \Entity\CareEncounterPrescriptionSub
     */
    public function setAdminTime($admin_time)
    {
        $this->admin_time = $admin_time;

        return $this;
    }

    /**
     * Get the value of admin_time.
     *
     * @return string
     */
    public function getAdminTime()
    {
        return $this->admin_time;
    }

    /**
     * Set the value of quantity.
     *
     * @param string $quantity
     * @return \Entity\CareEncounterPrescriptionSub
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get the value of quantity.
     *
     * @return string
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set the value of application_type_nr.
     *
     * @param integer $application_type_nr
     * @return \Entity\CareEncounterPrescriptionSub
     */
    public function setApplicationTypeNr($application_type_nr)
    {
        $this->application_type_nr = $application_type_nr;

        return $this;
    }

    /**
     * Get the value of application_type_nr.
     *
     * @return integer
     */
    public function getApplicationTypeNr()
    {
        return $this->application_type_nr;
    }

    /**
     * Set the value of sub_speed.
     *
     * @param float $sub_speed
     * @return \Entity\CareEncounterPrescriptionSub
     */
    public function setSubSpeed($sub_speed)
    {
        $this->sub_speed = $sub_speed;

        return $this;
    }

    /**
     * Get the value of sub_speed.
     *
     * @return float
     */
    public function getSubSpeed()
    {
        return $this->sub_speed;
    }

    /**
     * Set the value of notes_sub.
     *
     * @param string $notes_sub
     * @return \Entity\CareEncounterPrescriptionSub
     */
    public function setNotesSub($notes_sub)
    {
        $this->notes_sub = $notes_sub;

        return $this;
    }

    /**
     * Get the value of notes_sub.
     *
     * @return string
     */
    public function getNotesSub()
    {
        return $this->notes_sub;
    }

    /**
     * Set the value of color_marker.
     *
     * @param string $color_marker
     * @return \Entity\CareEncounterPrescriptionSub
     */
    public function setColorMarker($color_marker)
    {
        $this->color_marker = $color_marker;

        return $this;
    }

    /**
     * Get the value of color_marker.
     *
     * @return string
     */
    public function getColorMarker()
    {
        return $this->color_marker;
    }

    /**
     * Set the value of is_stopped.
     *
     * @param boolean $is_stopped
     * @return \Entity\CareEncounterPrescriptionSub
     */
    public function setIsStopped($is_stopped)
    {
        $this->is_stopped = $is_stopped;

        return $this;
    }

    /**
     * Get the value of is_stopped.
     *
     * @return boolean
     */
    public function getIsStopped()
    {
        return $this->is_stopped;
    }

    /**
     * Set the value of stop_date.
     *
     * @param datetime $stop_date
     * @return \Entity\CareEncounterPrescriptionSub
     */
    public function setStopDate($stop_date)
    {
        $this->stop_date = $stop_date;

        return $this;
    }

    /**
     * Get the value of stop_date.
     *
     * @return datetime
     */
    public function getStopDate()
    {
        return $this->stop_date;
    }

    /**
     * Set the value of status.
     *
     * @param string $status
     * @return \Entity\CareEncounterPrescriptionSub
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
     * Set the value of companion.
     *
     * @param string $companion
     * @return \Entity\CareEncounterPrescriptionSub
     */
    public function setCompanion($companion)
    {
        $this->companion = $companion;

        return $this;
    }

    /**
     * Get the value of companion.
     *
     * @return string
     */
    public function getCompanion()
    {
        return $this->companion;
    }

    /**
     * Set the value of price.
     *
     * @param float $price
     * @return \Entity\CareEncounterPrescriptionSub
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get the value of price.
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set CareEncounterPrescription entity (many to one).
     *
     * @param \Entity\CareEncounterPrescription $careEncounterPrescription
     * @return \Entity\CareEncounterPrescriptionSub
     */
    public function setCareEncounterPrescription(CareEncounterPrescription $careEncounterPrescription = null)
    {
        $this->careEncounterPrescription = $careEncounterPrescription;

        return $this;
    }

    /**
     * Get CareEncounterPrescription entity (many to one).
     *
     * @return \Entity\CareEncounterPrescription
     */
    public function getCareEncounterPrescription()
    {
        return $this->careEncounterPrescription;
    }

    public function __sleep()
    {
        return array('nr', 'prescription_nr', 'prescription_type_nr', 'atc', 'article', 'drug_class', 'dosage', 'admin_time', 'quantity', 'application_type_nr', 'sub_speed', 'notes_sub', 'color_marker', 'is_stopped', 'stop_date', 'status', 'companion', 'price');
    }
}