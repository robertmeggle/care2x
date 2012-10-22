<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\CareEncounterEventSignaller
 *
 * InnoDB free: 10240 kB
 *
 * @ORM\Entity(repositoryClass="CareEncounterEventSignallerRepository")
 * @ORM\Table(name="care_encounter_event_signaller")
 */
class CareEncounterEventSignaller
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    protected $encounter_nr;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $yellow;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $black;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $blue_pale;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $brown;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $pink;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $yellow_pale;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $red;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $green_pale;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $violet;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $blue;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $biege;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $orange;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $green_1;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $green_2;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $green_3;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $green_4;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $green_5;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $green_6;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $green_7;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $rose_1;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $rose_2;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $rose_3;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $rose_4;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $rose_5;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $rose_6;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $rose_7;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $rose_8;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $rose_9;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $rose_10;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $rose_11;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $rose_12;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $rose_13;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $rose_14;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $rose_15;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $rose_16;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $rose_17;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $rose_18;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $rose_19;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $rose_20;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $rose_21;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $rose_22;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $rose_23;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $rose_24;

    public function __construct()
    {
    }

    /**
     * Set the value of encounter_nr.
     *
     * @param integer $encounter_nr
     * @return \Entity\CareEncounterEventSignaller
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
     * Set the value of yellow.
     *
     * @param boolean $yellow
     * @return \Entity\CareEncounterEventSignaller
     */
    public function setYellow($yellow)
    {
        $this->yellow = $yellow;

        return $this;
    }

    /**
     * Get the value of yellow.
     *
     * @return boolean
     */
    public function getYellow()
    {
        return $this->yellow;
    }

    /**
     * Set the value of black.
     *
     * @param boolean $black
     * @return \Entity\CareEncounterEventSignaller
     */
    public function setBlack($black)
    {
        $this->black = $black;

        return $this;
    }

    /**
     * Get the value of black.
     *
     * @return boolean
     */
    public function getBlack()
    {
        return $this->black;
    }

    /**
     * Set the value of blue_pale.
     *
     * @param boolean $blue_pale
     * @return \Entity\CareEncounterEventSignaller
     */
    public function setBluePale($blue_pale)
    {
        $this->blue_pale = $blue_pale;

        return $this;
    }

    /**
     * Get the value of blue_pale.
     *
     * @return boolean
     */
    public function getBluePale()
    {
        return $this->blue_pale;
    }

    /**
     * Set the value of brown.
     *
     * @param boolean $brown
     * @return \Entity\CareEncounterEventSignaller
     */
    public function setBrown($brown)
    {
        $this->brown = $brown;

        return $this;
    }

    /**
     * Get the value of brown.
     *
     * @return boolean
     */
    public function getBrown()
    {
        return $this->brown;
    }

    /**
     * Set the value of pink.
     *
     * @param boolean $pink
     * @return \Entity\CareEncounterEventSignaller
     */
    public function setPink($pink)
    {
        $this->pink = $pink;

        return $this;
    }

    /**
     * Get the value of pink.
     *
     * @return boolean
     */
    public function getPink()
    {
        return $this->pink;
    }

    /**
     * Set the value of yellow_pale.
     *
     * @param boolean $yellow_pale
     * @return \Entity\CareEncounterEventSignaller
     */
    public function setYellowPale($yellow_pale)
    {
        $this->yellow_pale = $yellow_pale;

        return $this;
    }

    /**
     * Get the value of yellow_pale.
     *
     * @return boolean
     */
    public function getYellowPale()
    {
        return $this->yellow_pale;
    }

    /**
     * Set the value of red.
     *
     * @param boolean $red
     * @return \Entity\CareEncounterEventSignaller
     */
    public function setRed($red)
    {
        $this->red = $red;

        return $this;
    }

    /**
     * Get the value of red.
     *
     * @return boolean
     */
    public function getRed()
    {
        return $this->red;
    }

    /**
     * Set the value of green_pale.
     *
     * @param boolean $green_pale
     * @return \Entity\CareEncounterEventSignaller
     */
    public function setGreenPale($green_pale)
    {
        $this->green_pale = $green_pale;

        return $this;
    }

    /**
     * Get the value of green_pale.
     *
     * @return boolean
     */
    public function getGreenPale()
    {
        return $this->green_pale;
    }

    /**
     * Set the value of violet.
     *
     * @param boolean $violet
     * @return \Entity\CareEncounterEventSignaller
     */
    public function setViolet($violet)
    {
        $this->violet = $violet;

        return $this;
    }

    /**
     * Get the value of violet.
     *
     * @return boolean
     */
    public function getViolet()
    {
        return $this->violet;
    }

    /**
     * Set the value of blue.
     *
     * @param boolean $blue
     * @return \Entity\CareEncounterEventSignaller
     */
    public function setBlue($blue)
    {
        $this->blue = $blue;

        return $this;
    }

    /**
     * Get the value of blue.
     *
     * @return boolean
     */
    public function getBlue()
    {
        return $this->blue;
    }

    /**
     * Set the value of biege.
     *
     * @param boolean $biege
     * @return \Entity\CareEncounterEventSignaller
     */
    public function setBiege($biege)
    {
        $this->biege = $biege;

        return $this;
    }

    /**
     * Get the value of biege.
     *
     * @return boolean
     */
    public function getBiege()
    {
        return $this->biege;
    }

    /**
     * Set the value of orange.
     *
     * @param boolean $orange
     * @return \Entity\CareEncounterEventSignaller
     */
    public function setOrange($orange)
    {
        $this->orange = $orange;

        return $this;
    }

    /**
     * Get the value of orange.
     *
     * @return boolean
     */
    public function getOrange()
    {
        return $this->orange;
    }

    /**
     * Set the value of green_1.
     *
     * @param boolean $green_1
     * @return \Entity\CareEncounterEventSignaller
     */
    public function setGreen1($green_1)
    {
        $this->green_1 = $green_1;

        return $this;
    }

    /**
     * Get the value of green_1.
     *
     * @return boolean
     */
    public function getGreen1()
    {
        return $this->green_1;
    }

    /**
     * Set the value of green_2.
     *
     * @param boolean $green_2
     * @return \Entity\CareEncounterEventSignaller
     */
    public function setGreen2($green_2)
    {
        $this->green_2 = $green_2;

        return $this;
    }

    /**
     * Get the value of green_2.
     *
     * @return boolean
     */
    public function getGreen2()
    {
        return $this->green_2;
    }

    /**
     * Set the value of green_3.
     *
     * @param boolean $green_3
     * @return \Entity\CareEncounterEventSignaller
     */
    public function setGreen3($green_3)
    {
        $this->green_3 = $green_3;

        return $this;
    }

    /**
     * Get the value of green_3.
     *
     * @return boolean
     */
    public function getGreen3()
    {
        return $this->green_3;
    }

    /**
     * Set the value of green_4.
     *
     * @param boolean $green_4
     * @return \Entity\CareEncounterEventSignaller
     */
    public function setGreen4($green_4)
    {
        $this->green_4 = $green_4;

        return $this;
    }

    /**
     * Get the value of green_4.
     *
     * @return boolean
     */
    public function getGreen4()
    {
        return $this->green_4;
    }

    /**
     * Set the value of green_5.
     *
     * @param boolean $green_5
     * @return \Entity\CareEncounterEventSignaller
     */
    public function setGreen5($green_5)
    {
        $this->green_5 = $green_5;

        return $this;
    }

    /**
     * Get the value of green_5.
     *
     * @return boolean
     */
    public function getGreen5()
    {
        return $this->green_5;
    }

    /**
     * Set the value of green_6.
     *
     * @param boolean $green_6
     * @return \Entity\CareEncounterEventSignaller
     */
    public function setGreen6($green_6)
    {
        $this->green_6 = $green_6;

        return $this;
    }

    /**
     * Get the value of green_6.
     *
     * @return boolean
     */
    public function getGreen6()
    {
        return $this->green_6;
    }

    /**
     * Set the value of green_7.
     *
     * @param boolean $green_7
     * @return \Entity\CareEncounterEventSignaller
     */
    public function setGreen7($green_7)
    {
        $this->green_7 = $green_7;

        return $this;
    }

    /**
     * Get the value of green_7.
     *
     * @return boolean
     */
    public function getGreen7()
    {
        return $this->green_7;
    }

    /**
     * Set the value of rose_1.
     *
     * @param boolean $rose_1
     * @return \Entity\CareEncounterEventSignaller
     */
    public function setRose1($rose_1)
    {
        $this->rose_1 = $rose_1;

        return $this;
    }

    /**
     * Get the value of rose_1.
     *
     * @return boolean
     */
    public function getRose1()
    {
        return $this->rose_1;
    }

    /**
     * Set the value of rose_2.
     *
     * @param boolean $rose_2
     * @return \Entity\CareEncounterEventSignaller
     */
    public function setRose2($rose_2)
    {
        $this->rose_2 = $rose_2;

        return $this;
    }

    /**
     * Get the value of rose_2.
     *
     * @return boolean
     */
    public function getRose2()
    {
        return $this->rose_2;
    }

    /**
     * Set the value of rose_3.
     *
     * @param boolean $rose_3
     * @return \Entity\CareEncounterEventSignaller
     */
    public function setRose3($rose_3)
    {
        $this->rose_3 = $rose_3;

        return $this;
    }

    /**
     * Get the value of rose_3.
     *
     * @return boolean
     */
    public function getRose3()
    {
        return $this->rose_3;
    }

    /**
     * Set the value of rose_4.
     *
     * @param boolean $rose_4
     * @return \Entity\CareEncounterEventSignaller
     */
    public function setRose4($rose_4)
    {
        $this->rose_4 = $rose_4;

        return $this;
    }

    /**
     * Get the value of rose_4.
     *
     * @return boolean
     */
    public function getRose4()
    {
        return $this->rose_4;
    }

    /**
     * Set the value of rose_5.
     *
     * @param boolean $rose_5
     * @return \Entity\CareEncounterEventSignaller
     */
    public function setRose5($rose_5)
    {
        $this->rose_5 = $rose_5;

        return $this;
    }

    /**
     * Get the value of rose_5.
     *
     * @return boolean
     */
    public function getRose5()
    {
        return $this->rose_5;
    }

    /**
     * Set the value of rose_6.
     *
     * @param boolean $rose_6
     * @return \Entity\CareEncounterEventSignaller
     */
    public function setRose6($rose_6)
    {
        $this->rose_6 = $rose_6;

        return $this;
    }

    /**
     * Get the value of rose_6.
     *
     * @return boolean
     */
    public function getRose6()
    {
        return $this->rose_6;
    }

    /**
     * Set the value of rose_7.
     *
     * @param boolean $rose_7
     * @return \Entity\CareEncounterEventSignaller
     */
    public function setRose7($rose_7)
    {
        $this->rose_7 = $rose_7;

        return $this;
    }

    /**
     * Get the value of rose_7.
     *
     * @return boolean
     */
    public function getRose7()
    {
        return $this->rose_7;
    }

    /**
     * Set the value of rose_8.
     *
     * @param boolean $rose_8
     * @return \Entity\CareEncounterEventSignaller
     */
    public function setRose8($rose_8)
    {
        $this->rose_8 = $rose_8;

        return $this;
    }

    /**
     * Get the value of rose_8.
     *
     * @return boolean
     */
    public function getRose8()
    {
        return $this->rose_8;
    }

    /**
     * Set the value of rose_9.
     *
     * @param boolean $rose_9
     * @return \Entity\CareEncounterEventSignaller
     */
    public function setRose9($rose_9)
    {
        $this->rose_9 = $rose_9;

        return $this;
    }

    /**
     * Get the value of rose_9.
     *
     * @return boolean
     */
    public function getRose9()
    {
        return $this->rose_9;
    }

    /**
     * Set the value of rose_10.
     *
     * @param boolean $rose_10
     * @return \Entity\CareEncounterEventSignaller
     */
    public function setRose10($rose_10)
    {
        $this->rose_10 = $rose_10;

        return $this;
    }

    /**
     * Get the value of rose_10.
     *
     * @return boolean
     */
    public function getRose10()
    {
        return $this->rose_10;
    }

    /**
     * Set the value of rose_11.
     *
     * @param boolean $rose_11
     * @return \Entity\CareEncounterEventSignaller
     */
    public function setRose11($rose_11)
    {
        $this->rose_11 = $rose_11;

        return $this;
    }

    /**
     * Get the value of rose_11.
     *
     * @return boolean
     */
    public function getRose11()
    {
        return $this->rose_11;
    }

    /**
     * Set the value of rose_12.
     *
     * @param boolean $rose_12
     * @return \Entity\CareEncounterEventSignaller
     */
    public function setRose12($rose_12)
    {
        $this->rose_12 = $rose_12;

        return $this;
    }

    /**
     * Get the value of rose_12.
     *
     * @return boolean
     */
    public function getRose12()
    {
        return $this->rose_12;
    }

    /**
     * Set the value of rose_13.
     *
     * @param boolean $rose_13
     * @return \Entity\CareEncounterEventSignaller
     */
    public function setRose13($rose_13)
    {
        $this->rose_13 = $rose_13;

        return $this;
    }

    /**
     * Get the value of rose_13.
     *
     * @return boolean
     */
    public function getRose13()
    {
        return $this->rose_13;
    }

    /**
     * Set the value of rose_14.
     *
     * @param boolean $rose_14
     * @return \Entity\CareEncounterEventSignaller
     */
    public function setRose14($rose_14)
    {
        $this->rose_14 = $rose_14;

        return $this;
    }

    /**
     * Get the value of rose_14.
     *
     * @return boolean
     */
    public function getRose14()
    {
        return $this->rose_14;
    }

    /**
     * Set the value of rose_15.
     *
     * @param boolean $rose_15
     * @return \Entity\CareEncounterEventSignaller
     */
    public function setRose15($rose_15)
    {
        $this->rose_15 = $rose_15;

        return $this;
    }

    /**
     * Get the value of rose_15.
     *
     * @return boolean
     */
    public function getRose15()
    {
        return $this->rose_15;
    }

    /**
     * Set the value of rose_16.
     *
     * @param boolean $rose_16
     * @return \Entity\CareEncounterEventSignaller
     */
    public function setRose16($rose_16)
    {
        $this->rose_16 = $rose_16;

        return $this;
    }

    /**
     * Get the value of rose_16.
     *
     * @return boolean
     */
    public function getRose16()
    {
        return $this->rose_16;
    }

    /**
     * Set the value of rose_17.
     *
     * @param boolean $rose_17
     * @return \Entity\CareEncounterEventSignaller
     */
    public function setRose17($rose_17)
    {
        $this->rose_17 = $rose_17;

        return $this;
    }

    /**
     * Get the value of rose_17.
     *
     * @return boolean
     */
    public function getRose17()
    {
        return $this->rose_17;
    }

    /**
     * Set the value of rose_18.
     *
     * @param boolean $rose_18
     * @return \Entity\CareEncounterEventSignaller
     */
    public function setRose18($rose_18)
    {
        $this->rose_18 = $rose_18;

        return $this;
    }

    /**
     * Get the value of rose_18.
     *
     * @return boolean
     */
    public function getRose18()
    {
        return $this->rose_18;
    }

    /**
     * Set the value of rose_19.
     *
     * @param boolean $rose_19
     * @return \Entity\CareEncounterEventSignaller
     */
    public function setRose19($rose_19)
    {
        $this->rose_19 = $rose_19;

        return $this;
    }

    /**
     * Get the value of rose_19.
     *
     * @return boolean
     */
    public function getRose19()
    {
        return $this->rose_19;
    }

    /**
     * Set the value of rose_20.
     *
     * @param boolean $rose_20
     * @return \Entity\CareEncounterEventSignaller
     */
    public function setRose20($rose_20)
    {
        $this->rose_20 = $rose_20;

        return $this;
    }

    /**
     * Get the value of rose_20.
     *
     * @return boolean
     */
    public function getRose20()
    {
        return $this->rose_20;
    }

    /**
     * Set the value of rose_21.
     *
     * @param boolean $rose_21
     * @return \Entity\CareEncounterEventSignaller
     */
    public function setRose21($rose_21)
    {
        $this->rose_21 = $rose_21;

        return $this;
    }

    /**
     * Get the value of rose_21.
     *
     * @return boolean
     */
    public function getRose21()
    {
        return $this->rose_21;
    }

    /**
     * Set the value of rose_22.
     *
     * @param boolean $rose_22
     * @return \Entity\CareEncounterEventSignaller
     */
    public function setRose22($rose_22)
    {
        $this->rose_22 = $rose_22;

        return $this;
    }

    /**
     * Get the value of rose_22.
     *
     * @return boolean
     */
    public function getRose22()
    {
        return $this->rose_22;
    }

    /**
     * Set the value of rose_23.
     *
     * @param boolean $rose_23
     * @return \Entity\CareEncounterEventSignaller
     */
    public function setRose23($rose_23)
    {
        $this->rose_23 = $rose_23;

        return $this;
    }

    /**
     * Get the value of rose_23.
     *
     * @return boolean
     */
    public function getRose23()
    {
        return $this->rose_23;
    }

    /**
     * Set the value of rose_24.
     *
     * @param boolean $rose_24
     * @return \Entity\CareEncounterEventSignaller
     */
    public function setRose24($rose_24)
    {
        $this->rose_24 = $rose_24;

        return $this;
    }

    /**
     * Get the value of rose_24.
     *
     * @return boolean
     */
    public function getRose24()
    {
        return $this->rose_24;
    }

    public function __sleep()
    {
        return array('encounter_nr', 'yellow', 'black', 'blue_pale', 'brown', 'pink', 'yellow_pale', 'red', 'green_pale', 'violet', 'blue', 'biege', 'orange', 'green_1', 'green_2', 'green_3', 'green_4', 'green_5', 'green_6', 'green_7', 'rose_1', 'rose_2', 'rose_3', 'rose_4', 'rose_5', 'rose_6', 'rose_7', 'rose_8', 'rose_9', 'rose_10', 'rose_11', 'rose_12', 'rose_13', 'rose_14', 'rose_15', 'rose_16', 'rose_17', 'rose_18', 'rose_19', 'rose_20', 'rose_21', 'rose_22', 'rose_23', 'rose_24');
    }
}