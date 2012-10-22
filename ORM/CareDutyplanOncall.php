<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\CareDutyplanOncall
 *
 * InnoDB free: 11264 kB
 *
 * @ORM\Entity(repositoryClass="CareDutyplanOncallRepository")
 * @ORM\Table(name="care_dutyplan_oncall", indexes={@ORM\Index(name="dept_nr", columns={"dept_nr"})})
 */
class CareDutyplanOncall
{
    /**
     * @ORM\Id
     * @ORM\Column(type="bigint")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $nr;

    /**
     * @ORM\Column(type="integer")
     */
    protected $dept_nr;

    /**
     * @ORM\Column(type="integer")
     */
    protected $role_nr;

    /**
     * @ORM\Column(type="smallint", length=4)
     */
    protected $year;

    /**
     * @ORM\Column(type="string", length=2)
     */
    protected $month;

    /**
     * @ORM\Column(type="text")
     */
    protected $duty_1_txt;

    /**
     * @ORM\Column(type="text")
     */
    protected $duty_2_txt;

    /**
     * @ORM\Column(type="text")
     */
    protected $duty_1_pnr;

    /**
     * @ORM\Column(type="text")
     */
    protected $duty_2_pnr;

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

    public function __construct()
    {
    }

    /**
     * Set the value of nr.
     *
     * @param integer $nr
     * @return \Entity\CareDutyplanOncall
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
     * Set the value of dept_nr.
     *
     * @param integer $dept_nr
     * @return \Entity\CareDutyplanOncall
     */
    public function setDeptNr($dept_nr)
    {
        $this->dept_nr = $dept_nr;

        return $this;
    }

    /**
     * Get the value of dept_nr.
     *
     * @return integer
     */
    public function getDeptNr()
    {
        return $this->dept_nr;
    }

    /**
     * Set the value of role_nr.
     *
     * @param integer $role_nr
     * @return \Entity\CareDutyplanOncall
     */
    public function setRoleNr($role_nr)
    {
        $this->role_nr = $role_nr;

        return $this;
    }

    /**
     * Get the value of role_nr.
     *
     * @return integer
     */
    public function getRoleNr()
    {
        return $this->role_nr;
    }

    /**
     * Set the value of year.
     *
     * @param integer $year
     * @return \Entity\CareDutyplanOncall
     */
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Get the value of year.
     *
     * @return integer
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set the value of month.
     *
     * @param string $month
     * @return \Entity\CareDutyplanOncall
     */
    public function setMonth($month)
    {
        $this->month = $month;

        return $this;
    }

    /**
     * Get the value of month.
     *
     * @return string
     */
    public function getMonth()
    {
        return $this->month;
    }

    /**
     * Set the value of duty_1_txt.
     *
     * @param string $duty_1_txt
     * @return \Entity\CareDutyplanOncall
     */
    public function setDuty1Txt($duty_1_txt)
    {
        $this->duty_1_txt = $duty_1_txt;

        return $this;
    }

    /**
     * Get the value of duty_1_txt.
     *
     * @return string
     */
    public function getDuty1Txt()
    {
        return $this->duty_1_txt;
    }

    /**
     * Set the value of duty_2_txt.
     *
     * @param string $duty_2_txt
     * @return \Entity\CareDutyplanOncall
     */
    public function setDuty2Txt($duty_2_txt)
    {
        $this->duty_2_txt = $duty_2_txt;

        return $this;
    }

    /**
     * Get the value of duty_2_txt.
     *
     * @return string
     */
    public function getDuty2Txt()
    {
        return $this->duty_2_txt;
    }

    /**
     * Set the value of duty_1_pnr.
     *
     * @param string $duty_1_pnr
     * @return \Entity\CareDutyplanOncall
     */
    public function setDuty1Pnr($duty_1_pnr)
    {
        $this->duty_1_pnr = $duty_1_pnr;

        return $this;
    }

    /**
     * Get the value of duty_1_pnr.
     *
     * @return string
     */
    public function getDuty1Pnr()
    {
        return $this->duty_1_pnr;
    }

    /**
     * Set the value of duty_2_pnr.
     *
     * @param string $duty_2_pnr
     * @return \Entity\CareDutyplanOncall
     */
    public function setDuty2Pnr($duty_2_pnr)
    {
        $this->duty_2_pnr = $duty_2_pnr;

        return $this;
    }

    /**
     * Get the value of duty_2_pnr.
     *
     * @return string
     */
    public function getDuty2Pnr()
    {
        return $this->duty_2_pnr;
    }

    /**
     * Set the value of status.
     *
     * @param string $status
     * @return \Entity\CareDutyplanOncall
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
     * @return \Entity\CareDutyplanOncall
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
     * @return \Entity\CareDutyplanOncall
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
     * @return \Entity\CareDutyplanOncall
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
     * @return \Entity\CareDutyplanOncall
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
     * @return \Entity\CareDutyplanOncall
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
        return array('nr', 'dept_nr', 'role_nr', 'year', 'month', 'duty_1_txt', 'duty_2_txt', 'duty_1_pnr', 'duty_2_pnr', 'status', 'history', 'modify_id', 'modify_time', 'create_id', 'create_time');
    }
}