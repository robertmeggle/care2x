<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\CareConfigUser
 *
 * InnoDB free: 11264 kB
 *
 * @ORM\Entity(repositoryClass="CareConfigUserRepository")
 * @ORM\Table(name="care_config_user")
 */
class CareConfigUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="string", length=100)
     */
    protected $user_id;

    /**
     * @ORM\Column(type="text")
     */
    protected $serial_config_data;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $notes;

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
     * Set the value of user_id.
     *
     * @param string $user_id
     * @return \Entity\CareConfigUser
     */
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;

        return $this;
    }

    /**
     * Get the value of user_id.
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Set the value of serial_config_data.
     *
     * @param string $serial_config_data
     * @return \Entity\CareConfigUser
     */
    public function setSerialConfigData($serial_config_data)
    {
        $this->serial_config_data = $serial_config_data;

        return $this;
    }

    /**
     * Get the value of serial_config_data.
     *
     * @return string
     */
    public function getSerialConfigData()
    {
        return $this->serial_config_data;
    }

    /**
     * Set the value of notes.
     *
     * @param string $notes
     * @return \Entity\CareConfigUser
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
     * Set the value of status.
     *
     * @param string $status
     * @return \Entity\CareConfigUser
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
     * @return \Entity\CareConfigUser
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
     * @return \Entity\CareConfigUser
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
     * @return \Entity\CareConfigUser
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
     * @return \Entity\CareConfigUser
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
     * @return \Entity\CareConfigUser
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
        return array('user_id', 'serial_config_data', 'notes', 'status', 'history', 'modify_id', 'modify_time', 'create_id', 'create_time');
    }
}