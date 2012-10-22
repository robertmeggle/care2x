<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\CareRegistry
 *
 * InnoDB free: 9216 kB
 *
 * @ORM\Entity(repositoryClass="CareRegistryRepository")
 * @ORM\Table(name="care_registry")
 */
class CareRegistry
{
    /**
     * @ORM\Id
     * @ORM\Column(type="string", length=35)
     */
    protected $registry_id;

    /**
     * @ORM\Column(type="string", length=60)
     */
    protected $module_start_script;

    /**
     * @ORM\Column(type="string", length=60)
     */
    protected $news_start_script;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $news_editor_script;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $news_reader_script;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $passcheck_script;

    /**
     * @ORM\Column(type="text")
     */
    protected $composite;

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
     * Set the value of registry_id.
     *
     * @param string $registry_id
     * @return \Entity\CareRegistry
     */
    public function setRegistryId($registry_id)
    {
        $this->registry_id = $registry_id;

        return $this;
    }

    /**
     * Get the value of registry_id.
     *
     * @return string
     */
    public function getRegistryId()
    {
        return $this->registry_id;
    }

    /**
     * Set the value of module_start_script.
     *
     * @param string $module_start_script
     * @return \Entity\CareRegistry
     */
    public function setModuleStartScript($module_start_script)
    {
        $this->module_start_script = $module_start_script;

        return $this;
    }

    /**
     * Get the value of module_start_script.
     *
     * @return string
     */
    public function getModuleStartScript()
    {
        return $this->module_start_script;
    }

    /**
     * Set the value of news_start_script.
     *
     * @param string $news_start_script
     * @return \Entity\CareRegistry
     */
    public function setNewsStartScript($news_start_script)
    {
        $this->news_start_script = $news_start_script;

        return $this;
    }

    /**
     * Get the value of news_start_script.
     *
     * @return string
     */
    public function getNewsStartScript()
    {
        return $this->news_start_script;
    }

    /**
     * Set the value of news_editor_script.
     *
     * @param string $news_editor_script
     * @return \Entity\CareRegistry
     */
    public function setNewsEditorScript($news_editor_script)
    {
        $this->news_editor_script = $news_editor_script;

        return $this;
    }

    /**
     * Get the value of news_editor_script.
     *
     * @return string
     */
    public function getNewsEditorScript()
    {
        return $this->news_editor_script;
    }

    /**
     * Set the value of news_reader_script.
     *
     * @param string $news_reader_script
     * @return \Entity\CareRegistry
     */
    public function setNewsReaderScript($news_reader_script)
    {
        $this->news_reader_script = $news_reader_script;

        return $this;
    }

    /**
     * Get the value of news_reader_script.
     *
     * @return string
     */
    public function getNewsReaderScript()
    {
        return $this->news_reader_script;
    }

    /**
     * Set the value of passcheck_script.
     *
     * @param string $passcheck_script
     * @return \Entity\CareRegistry
     */
    public function setPasscheckScript($passcheck_script)
    {
        $this->passcheck_script = $passcheck_script;

        return $this;
    }

    /**
     * Get the value of passcheck_script.
     *
     * @return string
     */
    public function getPasscheckScript()
    {
        return $this->passcheck_script;
    }

    /**
     * Set the value of composite.
     *
     * @param string $composite
     * @return \Entity\CareRegistry
     */
    public function setComposite($composite)
    {
        $this->composite = $composite;

        return $this;
    }

    /**
     * Get the value of composite.
     *
     * @return string
     */
    public function getComposite()
    {
        return $this->composite;
    }

    /**
     * Set the value of status.
     *
     * @param string $status
     * @return \Entity\CareRegistry
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
     * @return \Entity\CareRegistry
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
     * @return \Entity\CareRegistry
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
     * @return \Entity\CareRegistry
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
     * @return \Entity\CareRegistry
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
        return array('registry_id', 'module_start_script', 'news_start_script', 'news_editor_script', 'news_reader_script', 'passcheck_script', 'composite', 'status', 'modify_id', 'modify_time', 'create_id', 'create_time');
    }
}