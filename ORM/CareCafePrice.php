<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\CareCafePrice
 *
 * InnoDB free: 3072 kB
 *
 * @ORM\Entity(repositoryClass="CareCafePriceRepository")
 * @ORM\Table(name="care_cafe_prices", indexes={@ORM\Index(name="item", columns={"item"}), @ORM\Index(name="lang", columns={"lang"})})
 */
class CareCafePrice
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
     * @ORM\Column(type="text")
     */
    protected $productgroup;

    /**
     * @ORM\Column(type="text")
     */
    protected $article;

    /**
     * @ORM\Column(type="text")
     */
    protected $description;

    /**
     * @ORM\Column(type="string", length=10)
     */
    protected $price;

    /**
     * @ORM\Column(type="text")
     */
    protected $unit;

    /**
     * @ORM\Column(type="text")
     */
    protected $pic_filename;

    /**
     * @ORM\Column(type="string", length=25)
     */
    protected $modify_id;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $modify_time;

    /**
     * @ORM\Column(type="string", length=25)
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
     * @return \Entity\CareCafePrice
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
     * @return \Entity\CareCafePrice
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
     * Set the value of productgroup.
     *
     * @param string $productgroup
     * @return \Entity\CareCafePrice
     */
    public function setProductgroup($productgroup)
    {
        $this->productgroup = $productgroup;

        return $this;
    }

    /**
     * Get the value of productgroup.
     *
     * @return string
     */
    public function getProductgroup()
    {
        return $this->productgroup;
    }

    /**
     * Set the value of article.
     *
     * @param string $article
     * @return \Entity\CareCafePrice
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
     * Set the value of description.
     *
     * @param string $description
     * @return \Entity\CareCafePrice
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of description.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of price.
     *
     * @param string $price
     * @return \Entity\CareCafePrice
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get the value of price.
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of unit.
     *
     * @param string $unit
     * @return \Entity\CareCafePrice
     */
    public function setUnit($unit)
    {
        $this->unit = $unit;

        return $this;
    }

    /**
     * Get the value of unit.
     *
     * @return string
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * Set the value of pic_filename.
     *
     * @param string $pic_filename
     * @return \Entity\CareCafePrice
     */
    public function setPicFilename($pic_filename)
    {
        $this->pic_filename = $pic_filename;

        return $this;
    }

    /**
     * Get the value of pic_filename.
     *
     * @return string
     */
    public function getPicFilename()
    {
        return $this->pic_filename;
    }

    /**
     * Set the value of modify_id.
     *
     * @param string $modify_id
     * @return \Entity\CareCafePrice
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
     * @return \Entity\CareCafePrice
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
     * @return \Entity\CareCafePrice
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
     * @return \Entity\CareCafePrice
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
        return array('item', 'lang', 'productgroup', 'article', 'description', 'price', 'unit', 'pic_filename', 'modify_id', 'modify_time', 'create_id', 'create_time');
    }
}