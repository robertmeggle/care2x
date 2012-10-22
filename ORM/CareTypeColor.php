<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\CareTypeColor
 *
 * InnoDB free: 8192 kB
 *
 * @ORM\Entity(repositoryClass="CareTypeColorRepository")
 * @ORM\Table(name="care_type_color")
 */
class CareTypeColor
{
    /**
     * @ORM\Id
     * @ORM\Column(type="string", length=25)
     */
    protected $color_id;

    /**
     * @ORM\Column(type="string", length=35)
     */
    protected $name;

    /**
     * @ORM\Column(type="string", length=35)
     */
    protected $LD_var;

    /**
     * @ORM\Column(type="string", length=25)
     */
    protected $status;

    /**
     * @ORM\Column(type="string", length=35)
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
     * Set the value of color_id.
     *
     * @param string $color_id
     * @return \Entity\CareTypeColor
     */
    public function setColorId($color_id)
    {
        $this->color_id = $color_id;

        return $this;
    }

    /**
     * Get the value of color_id.
     *
     * @return string
     */
    public function getColorId()
    {
        return $this->color_id;
    }

    /**
     * Set the value of name.
     *
     * @param string $name
     * @return \Entity\CareTypeColor
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of LD_var.
     *
     * @param string $LD_var
     * @return \Entity\CareTypeColor
     */
    public function setLDVar($LD_var)
    {
        $this->LD_var = $LD_var;

        return $this;
    }

    /**
     * Get the value of LD_var.
     *
     * @return string
     */
    public function getLDVar()
    {
        return $this->LD_var;
    }

    /**
     * Set the value of status.
     *
     * @param string $status
     * @return \Entity\CareTypeColor
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
     * @return \Entity\CareTypeColor
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
     * @return \Entity\CareTypeColor
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
        return array('color_id', 'name', 'LD_var', 'status', 'modify_id', 'modify_time');
    }
}