<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\CareCurrency
 *
 * InnoDB free: 11264 kB
 *
 * @ORM\Entity(repositoryClass="CareCurrencyRepository")
 * @ORM\Table(name="care_currency", indexes={@ORM\Index(name="item_no", columns={"item_no"}), @ORM\Index(name="short_name", columns={"short_name"})})
 */
class CareCurrency
{
    /**
     * @ORM\Column(type="smallint")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $item_no;

    /**
     * @ORM\Column(type="string", length=5)
     */
    protected $short_name;

    /**
     * @ORM\Column(type="string", length=20)
     */
    protected $long_name;

    /**
     * @ORM\Column(type="string", length=50)
     */
    protected $info;

    /**
     * @ORM\Column(type="string", length=5)
     */
    protected $status;

    /**
     * @ORM\Column(type="string", length=20)
     */
    protected $modify_id;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $modify_time;

    /**
     * @ORM\Column(type="string", length=20)
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
     * Set the value of item_no.
     *
     * @param integer $item_no
     * @return \Entity\CareCurrency
     */
    public function setItemNo($item_no)
    {
        $this->item_no = $item_no;

        return $this;
    }

    /**
     * Get the value of item_no.
     *
     * @return integer
     */
    public function getItemNo()
    {
        return $this->item_no;
    }

    /**
     * Set the value of short_name.
     *
     * @param string $short_name
     * @return \Entity\CareCurrency
     */
    public function setShortName($short_name)
    {
        $this->short_name = $short_name;

        return $this;
    }

    /**
     * Get the value of short_name.
     *
     * @return string
     */
    public function getShortName()
    {
        return $this->short_name;
    }

    /**
     * Set the value of long_name.
     *
     * @param string $long_name
     * @return \Entity\CareCurrency
     */
    public function setLongName($long_name)
    {
        $this->long_name = $long_name;

        return $this;
    }

    /**
     * Get the value of long_name.
     *
     * @return string
     */
    public function getLongName()
    {
        return $this->long_name;
    }

    /**
     * Set the value of info.
     *
     * @param string $info
     * @return \Entity\CareCurrency
     */
    public function setInfo($info)
    {
        $this->info = $info;

        return $this;
    }

    /**
     * Get the value of info.
     *
     * @return string
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * Set the value of status.
     *
     * @param string $status
     * @return \Entity\CareCurrency
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
     * Set the value of modify_id.
     *
     * @param string $modify_id
     * @return \Entity\CareCurrency
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
     * @return \Entity\CareCurrency
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
     * @return \Entity\CareCurrency
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
     * @return \Entity\CareCurrency
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
        return array('item_no', 'short_name', 'long_name', 'info', 'status', 'modify_id', 'modify_time', 'create_id', 'create_time');
    }
}