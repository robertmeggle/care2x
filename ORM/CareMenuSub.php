<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\CareMenuSub
 *
 * InnoDB free: 9216 kB
 *
 * @ORM\Entity(repositoryClass="CareMenuSubRepository")
 * @ORM\Table(name="care_menu_sub")
 */
class CareMenuSub
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="integer")
     */
    protected $s_nr;

    /**
     * @ORM\Column(type="integer")
     */
    protected $s_sort_nr;

    /**
     * @ORM\Column(type="integer")
     */
    protected $s_main_nr;

    /**
     * @ORM\Column(type="integer")
     */
    protected $s_ebene;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $s_name;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $s_LD_var;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $s_url;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $s_url_ext;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $s_image;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $s_open_image;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $s_is_visible;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $s_hide_by;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $s_status;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $s_modify_id;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $s_modify_time;

    public function __construct()
    {
    }

    /**
     * Set the value of id.
     *
     * @param integer $id
     * @return \Entity\CareMenuSub
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of id.
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of s_nr.
     *
     * @param integer $s_nr
     * @return \Entity\CareMenuSub
     */
    public function setSNr($s_nr)
    {
        $this->s_nr = $s_nr;

        return $this;
    }

    /**
     * Get the value of s_nr.
     *
     * @return integer
     */
    public function getSNr()
    {
        return $this->s_nr;
    }

    /**
     * Set the value of s_sort_nr.
     *
     * @param integer $s_sort_nr
     * @return \Entity\CareMenuSub
     */
    public function setSSortNr($s_sort_nr)
    {
        $this->s_sort_nr = $s_sort_nr;

        return $this;
    }

    /**
     * Get the value of s_sort_nr.
     *
     * @return integer
     */
    public function getSSortNr()
    {
        return $this->s_sort_nr;
    }

    /**
     * Set the value of s_main_nr.
     *
     * @param integer $s_main_nr
     * @return \Entity\CareMenuSub
     */
    public function setSMainNr($s_main_nr)
    {
        $this->s_main_nr = $s_main_nr;

        return $this;
    }

    /**
     * Get the value of s_main_nr.
     *
     * @return integer
     */
    public function getSMainNr()
    {
        return $this->s_main_nr;
    }

    /**
     * Set the value of s_ebene.
     *
     * @param integer $s_ebene
     * @return \Entity\CareMenuSub
     */
    public function setSEbene($s_ebene)
    {
        $this->s_ebene = $s_ebene;

        return $this;
    }

    /**
     * Get the value of s_ebene.
     *
     * @return integer
     */
    public function getSEbene()
    {
        return $this->s_ebene;
    }

    /**
     * Set the value of s_name.
     *
     * @param string $s_name
     * @return \Entity\CareMenuSub
     */
    public function setSName($s_name)
    {
        $this->s_name = $s_name;

        return $this;
    }

    /**
     * Get the value of s_name.
     *
     * @return string
     */
    public function getSName()
    {
        return $this->s_name;
    }

    /**
     * Set the value of s_LD_var.
     *
     * @param string $s_LD_var
     * @return \Entity\CareMenuSub
     */
    public function setSLDVar($s_LD_var)
    {
        $this->s_LD_var = $s_LD_var;

        return $this;
    }

    /**
     * Get the value of s_LD_var.
     *
     * @return string
     */
    public function getSLDVar()
    {
        return $this->s_LD_var;
    }

    /**
     * Set the value of s_url.
     *
     * @param string $s_url
     * @return \Entity\CareMenuSub
     */
    public function setSUrl($s_url)
    {
        $this->s_url = $s_url;

        return $this;
    }

    /**
     * Get the value of s_url.
     *
     * @return string
     */
    public function getSUrl()
    {
        return $this->s_url;
    }

    /**
     * Set the value of s_url_ext.
     *
     * @param string $s_url_ext
     * @return \Entity\CareMenuSub
     */
    public function setSUrlExt($s_url_ext)
    {
        $this->s_url_ext = $s_url_ext;

        return $this;
    }

    /**
     * Get the value of s_url_ext.
     *
     * @return string
     */
    public function getSUrlExt()
    {
        return $this->s_url_ext;
    }

    /**
     * Set the value of s_image.
     *
     * @param string $s_image
     * @return \Entity\CareMenuSub
     */
    public function setSImage($s_image)
    {
        $this->s_image = $s_image;

        return $this;
    }

    /**
     * Get the value of s_image.
     *
     * @return string
     */
    public function getSImage()
    {
        return $this->s_image;
    }

    /**
     * Set the value of s_open_image.
     *
     * @param string $s_open_image
     * @return \Entity\CareMenuSub
     */
    public function setSOpenImage($s_open_image)
    {
        $this->s_open_image = $s_open_image;

        return $this;
    }

    /**
     * Get the value of s_open_image.
     *
     * @return string
     */
    public function getSOpenImage()
    {
        return $this->s_open_image;
    }

    /**
     * Set the value of s_is_visible.
     *
     * @param string $s_is_visible
     * @return \Entity\CareMenuSub
     */
    public function setSIsVisible($s_is_visible)
    {
        $this->s_is_visible = $s_is_visible;

        return $this;
    }

    /**
     * Get the value of s_is_visible.
     *
     * @return string
     */
    public function getSIsVisible()
    {
        return $this->s_is_visible;
    }

    /**
     * Set the value of s_hide_by.
     *
     * @param string $s_hide_by
     * @return \Entity\CareMenuSub
     */
    public function setSHideBy($s_hide_by)
    {
        $this->s_hide_by = $s_hide_by;

        return $this;
    }

    /**
     * Get the value of s_hide_by.
     *
     * @return string
     */
    public function getSHideBy()
    {
        return $this->s_hide_by;
    }

    /**
     * Set the value of s_status.
     *
     * @param string $s_status
     * @return \Entity\CareMenuSub
     */
    public function setSStatus($s_status)
    {
        $this->s_status = $s_status;

        return $this;
    }

    /**
     * Get the value of s_status.
     *
     * @return string
     */
    public function getSStatus()
    {
        return $this->s_status;
    }

    /**
     * Set the value of s_modify_id.
     *
     * @param string $s_modify_id
     * @return \Entity\CareMenuSub
     */
    public function setSModifyId($s_modify_id)
    {
        $this->s_modify_id = $s_modify_id;

        return $this;
    }

    /**
     * Get the value of s_modify_id.
     *
     * @return string
     */
    public function getSModifyId()
    {
        return $this->s_modify_id;
    }

    /**
     * Set the value of s_modify_time.
     *
     * @param datetime $s_modify_time
     * @return \Entity\CareMenuSub
     */
    public function setSModifyTime($s_modify_time)
    {
        $this->s_modify_time = $s_modify_time;

        return $this;
    }

    /**
     * Get the value of s_modify_time.
     *
     * @return datetime
     */
    public function getSModifyTime()
    {
        return $this->s_modify_time;
    }

    public function __sleep()
    {
        return array('id', 's_nr', 's_sort_nr', 's_main_nr', 's_ebene', 's_name', 's_LD_var', 's_url', 's_url_ext', 's_image', 's_open_image', 's_is_visible', 's_hide_by', 's_status', 's_modify_id', 's_modify_time');
    }
}