<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\CareCafeMenu
 *
 * InnoDB free: 3072 kB
 *
 * @ORM\Entity(repositoryClass="CareCafeMenuRepository")
 * @ORM\Table(name="care_cafe_menu", indexes={@ORM\Index(name="item", columns={"item", "lang"}), @ORM\Index(name="cdate", columns={"cdate"})}, uniqueConstraints={@ORM\UniqueConstraint(name="item_2", columns={"item"})})
 */
class CareCafeMenu
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $item;

    /**
     * @ORM\Column(type="string", length=10)
     */
    protected $lang;

    /**
     * @ORM\Column(type="date")
     */
    protected $cdate;

    /**
     * @ORM\Column(type="text")
     */
    protected $menu;

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
     * Set the value of item.
     *
     * @param integer $item
     * @return \Entity\CareCafeMenu
     */
    public function setItem($item)
    {
        $this->item = $item;

        return $this;
    }

    /**
     * Get the value of item.
     *
     * @return integer
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Set the value of lang.
     *
     * @param string $lang
     * @return \Entity\CareCafeMenu
     */
    public function setLang($lang)
    {
        $this->lang = $lang;

        return $this;
    }

    /**
     * Get the value of lang.
     *
     * @return string
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * Set the value of cdate.
     *
     * @param datetime $cdate
     * @return \Entity\CareCafeMenu
     */
    public function setCdate($cdate)
    {
        $this->cdate = $cdate;

        return $this;
    }

    /**
     * Get the value of cdate.
     *
     * @return datetime
     */
    public function getCdate()
    {
        return $this->cdate;
    }

    /**
     * Set the value of menu.
     *
     * @param string $menu
     * @return \Entity\CareCafeMenu
     */
    public function setMenu($menu)
    {
        $this->menu = $menu;

        return $this;
    }

    /**
     * Get the value of menu.
     *
     * @return string
     */
    public function getMenu()
    {
        return $this->menu;
    }

    /**
     * Set the value of modify_id.
     *
     * @param string $modify_id
     * @return \Entity\CareCafeMenu
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
     * @return \Entity\CareCafeMenu
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
     * @return \Entity\CareCafeMenu
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
     * @return \Entity\CareCafeMenu
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
        return array('item', 'lang', 'cdate', 'menu', 'modify_id', 'modify_time', 'create_id', 'create_time');
    }
}