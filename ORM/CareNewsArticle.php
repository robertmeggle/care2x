<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\CareNewsArticle
 *
 * InnoDB free: 9216 kB
 *
 * @ORM\Entity(repositoryClass="CareNewsArticleRepository")
 * @ORM\Table(name="care_news_article", indexes={@ORM\Index(name="item_no", columns={"nr"})})
 */
class CareNewsArticle
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $nr;

    /**
     * @ORM\Column(type="string", length=10)
     */
    protected $lang;

    /**
     * @ORM\Column(type="smallint")
     */
    protected $dept_nr;

    /**
     * @ORM\Column(type="text")
     */
    protected $category;

    /**
     * @ORM\Column(type="string", length=10)
     */
    protected $status;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $title;

    /**
     * @ORM\Column(type="text")
     */
    protected $preface;

    /**
     * @ORM\Column(type="text")
     */
    protected $body;

    /**
     * @ORM\Column(type="blob", nullable=true)
     */
    protected $pic;

    /**
     * @ORM\Column(type="string", length=4, nullable=true)
     */
    protected $pic_mime;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $art_num;

    /**
     * @ORM\Column(type="text")
     */
    protected $head_file;

    /**
     * @ORM\Column(type="text")
     */
    protected $main_file;

    /**
     * @ORM\Column(type="text")
     */
    protected $pic_file;

    /**
     * @ORM\Column(type="string", length=30)
     */
    protected $author;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $submit_date;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $encode_date;

    /**
     * @ORM\Column(type="date")
     */
    protected $publish_date;

    /**
     * @ORM\Column(type="string", length=30)
     */
    protected $modify_id;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $modify_time;

    /**
     * @ORM\Column(type="string", length=30)
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
     * @return \Entity\CareNewsArticle
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
     * Set the value of lang.
     *
     * @param string $lang
     * @return \Entity\CareNewsArticle
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
     * Set the value of dept_nr.
     *
     * @param integer $dept_nr
     * @return \Entity\CareNewsArticle
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
     * Set the value of category.
     *
     * @param string $category
     * @return \Entity\CareNewsArticle
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get the value of category.
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set the value of status.
     *
     * @param string $status
     * @return \Entity\CareNewsArticle
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
     * Set the value of title.
     *
     * @param string $title
     * @return \Entity\CareNewsArticle
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of title.
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of preface.
     *
     * @param string $preface
     * @return \Entity\CareNewsArticle
     */
    public function setPreface($preface)
    {
        $this->preface = $preface;

        return $this;
    }

    /**
     * Get the value of preface.
     *
     * @return string
     */
    public function getPreface()
    {
        return $this->preface;
    }

    /**
     * Set the value of body.
     *
     * @param string $body
     * @return \Entity\CareNewsArticle
     */
    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }

    /**
     * Get the value of body.
     *
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Set the value of pic.
     *
     * @param string $pic
     * @return \Entity\CareNewsArticle
     */
    public function setPic($pic)
    {
        $this->pic = $pic;

        return $this;
    }

    /**
     * Get the value of pic.
     *
     * @return string
     */
    public function getPic()
    {
        return $this->pic;
    }

    /**
     * Set the value of pic_mime.
     *
     * @param string $pic_mime
     * @return \Entity\CareNewsArticle
     */
    public function setPicMime($pic_mime)
    {
        $this->pic_mime = $pic_mime;

        return $this;
    }

    /**
     * Get the value of pic_mime.
     *
     * @return string
     */
    public function getPicMime()
    {
        return $this->pic_mime;
    }

    /**
     * Set the value of art_num.
     *
     * @param boolean $art_num
     * @return \Entity\CareNewsArticle
     */
    public function setArtNum($art_num)
    {
        $this->art_num = $art_num;

        return $this;
    }

    /**
     * Get the value of art_num.
     *
     * @return boolean
     */
    public function getArtNum()
    {
        return $this->art_num;
    }

    /**
     * Set the value of head_file.
     *
     * @param string $head_file
     * @return \Entity\CareNewsArticle
     */
    public function setHeadFile($head_file)
    {
        $this->head_file = $head_file;

        return $this;
    }

    /**
     * Get the value of head_file.
     *
     * @return string
     */
    public function getHeadFile()
    {
        return $this->head_file;
    }

    /**
     * Set the value of main_file.
     *
     * @param string $main_file
     * @return \Entity\CareNewsArticle
     */
    public function setMainFile($main_file)
    {
        $this->main_file = $main_file;

        return $this;
    }

    /**
     * Get the value of main_file.
     *
     * @return string
     */
    public function getMainFile()
    {
        return $this->main_file;
    }

    /**
     * Set the value of pic_file.
     *
     * @param string $pic_file
     * @return \Entity\CareNewsArticle
     */
    public function setPicFile($pic_file)
    {
        $this->pic_file = $pic_file;

        return $this;
    }

    /**
     * Get the value of pic_file.
     *
     * @return string
     */
    public function getPicFile()
    {
        return $this->pic_file;
    }

    /**
     * Set the value of author.
     *
     * @param string $author
     * @return \Entity\CareNewsArticle
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get the value of author.
     *
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set the value of submit_date.
     *
     * @param datetime $submit_date
     * @return \Entity\CareNewsArticle
     */
    public function setSubmitDate($submit_date)
    {
        $this->submit_date = $submit_date;

        return $this;
    }

    /**
     * Get the value of submit_date.
     *
     * @return datetime
     */
    public function getSubmitDate()
    {
        return $this->submit_date;
    }

    /**
     * Set the value of encode_date.
     *
     * @param datetime $encode_date
     * @return \Entity\CareNewsArticle
     */
    public function setEncodeDate($encode_date)
    {
        $this->encode_date = $encode_date;

        return $this;
    }

    /**
     * Get the value of encode_date.
     *
     * @return datetime
     */
    public function getEncodeDate()
    {
        return $this->encode_date;
    }

    /**
     * Set the value of publish_date.
     *
     * @param datetime $publish_date
     * @return \Entity\CareNewsArticle
     */
    public function setPublishDate($publish_date)
    {
        $this->publish_date = $publish_date;

        return $this;
    }

    /**
     * Get the value of publish_date.
     *
     * @return datetime
     */
    public function getPublishDate()
    {
        return $this->publish_date;
    }

    /**
     * Set the value of modify_id.
     *
     * @param string $modify_id
     * @return \Entity\CareNewsArticle
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
     * @return \Entity\CareNewsArticle
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
     * @return \Entity\CareNewsArticle
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
     * @return \Entity\CareNewsArticle
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
        return array('nr', 'lang', 'dept_nr', 'category', 'status', 'title', 'preface', 'body', 'pic', 'pic_mime', 'art_num', 'head_file', 'main_file', 'pic_file', 'author', 'submit_date', 'encode_date', 'publish_date', 'modify_id', 'modify_time', 'create_id', 'create_time');
    }
}