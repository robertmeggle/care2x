<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\CareCategoryProcedure
 *
 * InnoDB free: 3072 kB
 *
 * @ORM\Entity(repositoryClass="CareCategoryProcedureRepository")
 * @ORM\Table(name="care_category_procedure")
 */
class CareCategoryProcedure
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    protected $nr;

    /**
     * @ORM\Column(type="string", length=35)
     */
    protected $category;

    /**
     * @ORM\Column(type="string", length=35)
     */
    protected $name;

    /**
     * @ORM\Column(type="string", length=35)
     */
    protected $LD_var;

    /**
     * @ORM\Column(type="string", length=1)
     */
    protected $short_code;

    /**
     * @ORM\Column(type="string", length=25)
     */
    protected $LD_var_short_code;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $hide_from;

    /**
     * @ORM\Column(type="string", length=25)
     */
    protected $status;

    /**
     * @ORM\Column(type="text")
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
     * @return \Entity\CareCategoryProcedure
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
     * Set the value of category.
     *
     * @param string $category
     * @return \Entity\CareCategoryProcedure
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
     * Set the value of name.
     *
     * @param string $name
     * @return \Entity\CareCategoryProcedure
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
     * @return \Entity\CareCategoryProcedure
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
     * Set the value of short_code.
     *
     * @param string $short_code
     * @return \Entity\CareCategoryProcedure
     */
    public function setShortCode($short_code)
    {
        $this->short_code = $short_code;

        return $this;
    }

    /**
     * Get the value of short_code.
     *
     * @return string
     */
    public function getShortCode()
    {
        return $this->short_code;
    }

    /**
     * Set the value of LD_var_short_code.
     *
     * @param string $LD_var_short_code
     * @return \Entity\CareCategoryProcedure
     */
    public function setLDVarShortCode($LD_var_short_code)
    {
        $this->LD_var_short_code = $LD_var_short_code;

        return $this;
    }

    /**
     * Get the value of LD_var_short_code.
     *
     * @return string
     */
    public function getLDVarShortCode()
    {
        return $this->LD_var_short_code;
    }

    /**
     * Set the value of description.
     *
     * @param string $description
     * @return \Entity\CareCategoryProcedure
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
     * Set the value of hide_from.
     *
     * @param string $hide_from
     * @return \Entity\CareCategoryProcedure
     */
    public function setHideFrom($hide_from)
    {
        $this->hide_from = $hide_from;

        return $this;
    }

    /**
     * Get the value of hide_from.
     *
     * @return string
     */
    public function getHideFrom()
    {
        return $this->hide_from;
    }

    /**
     * Set the value of status.
     *
     * @param string $status
     * @return \Entity\CareCategoryProcedure
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
     * @return \Entity\CareCategoryProcedure
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
     * @return \Entity\CareCategoryProcedure
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
     * @return \Entity\CareCategoryProcedure
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
     * @return \Entity\CareCategoryProcedure
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
     * @return \Entity\CareCategoryProcedure
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
        return array('nr', 'category', 'name', 'LD_var', 'short_code', 'LD_var_short_code', 'description', 'hide_from', 'status', 'history', 'modify_id', 'modify_time', 'create_id', 'create_time');
    }
}