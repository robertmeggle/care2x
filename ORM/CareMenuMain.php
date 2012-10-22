<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\CareMenuMain
 *
 * @ORM\Entity(repositoryClass="CareMenuMainRepository")
 * @ORM\Table(name="care_menu_main")
 */
class CareMenuMain
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $nr;

    /**
     * @ORM\Column(type="integer")
     */
    protected $sort_nr;

    /**
     * @ORM\Column(type="string", length=35)
     */
    protected $name;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    protected $image;

    /**
     * @ORM\Column(type="string", length=35)
     */
    protected $LD_var;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $url;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $is_visible;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $hide_by;

    /**
     * @ORM\Column(type="string", length=25)
     */
    protected $status;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
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
     * Set the value of nr.
     *
     * @param integer $nr
     * @return \Entity\CareMenuMain
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
     * Set the value of sort_nr.
     *
     * @param integer $sort_nr
     * @return \Entity\CareMenuMain
     */
    public function setSortNr($sort_nr)
    {
        $this->sort_nr = $sort_nr;

        return $this;
    }

    /**
     * Get the value of sort_nr.
     *
     * @return integer
     */
    public function getSortNr()
    {
        return $this->sort_nr;
    }

    /**
     * Set the value of name.
     *
     * @param string $name
     * @return \Entity\CareMenuMain
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
     * Set the value of image.
     *
     * @param string $image
     * @return \Entity\CareMenuMain
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get the value of image.
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set the value of LD_var.
     *
     * @param string $LD_var
     * @return \Entity\CareMenuMain
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
     * Set the value of url.
     *
     * @param string $url
     * @return \Entity\CareMenuMain
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get the value of url.
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set the value of is_visible.
     *
     * @param boolean $is_visible
     * @return \Entity\CareMenuMain
     */
    public function setIsVisible($is_visible)
    {
        $this->is_visible = $is_visible;

        return $this;
    }

    /**
     * Get the value of is_visible.
     *
     * @return boolean
     */
    public function getIsVisible()
    {
        return $this->is_visible;
    }

    /**
     * Set the value of hide_by.
     *
     * @param string $hide_by
     * @return \Entity\CareMenuMain
     */
    public function setHideBy($hide_by)
    {
        $this->hide_by = $hide_by;

        return $this;
    }

    /**
     * Get the value of hide_by.
     *
     * @return string
     */
    public function getHideBy()
    {
        return $this->hide_by;
    }

    /**
     * Set the value of status.
     *
     * @param string $status
     * @return \Entity\CareMenuMain
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
     * @return \Entity\CareMenuMain
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
     * @return \Entity\CareMenuMain
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
        return array('nr', 'sort_nr', 'name', 'image', 'LD_var', 'url', 'is_visible', 'hide_by', 'status', 'modify_id', 'modify_time');
    }
}