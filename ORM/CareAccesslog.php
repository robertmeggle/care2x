<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\CareAccesslog
 *
 * @ORM\Entity(repositoryClass="CareAccesslogRepository")
 * @ORM\Table(name="care_accesslog")
 */
class CareAccesslog
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $datetime;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $ip;

    /**
     * @ORM\Column(type="text")
     */
    protected $lognote;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $userid;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $username;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $password;

    /**
     * @ORM\Column(type="text")
     */
    protected $thisfile;

    /**
     * @ORM\Column(type="text")
     */
    protected $fileforward;

    /**
     * @ORM\Column(type="integer")
     */
    protected $login_success;

    public function __construct()
    {
    }

    /**
     * Set the value of id.
     *
     * @param integer $id
     * @return \Entity\CareAccesslog
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
     * Set the value of datetime.
     *
     * @param datetime $datetime
     * @return \Entity\CareAccesslog
     */
    public function setDatetime($datetime)
    {
        $this->datetime = $datetime;

        return $this;
    }

    /**
     * Get the value of datetime.
     *
     * @return datetime
     */
    public function getDatetime()
    {
        return $this->datetime;
    }

    /**
     * Set the value of ip.
     *
     * @param string $ip
     * @return \Entity\CareAccesslog
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Get the value of ip.
     *
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Set the value of lognote.
     *
     * @param string $lognote
     * @return \Entity\CareAccesslog
     */
    public function setLognote($lognote)
    {
        $this->lognote = $lognote;

        return $this;
    }

    /**
     * Get the value of lognote.
     *
     * @return string
     */
    public function getLognote()
    {
        return $this->lognote;
    }

    /**
     * Set the value of userid.
     *
     * @param string $userid
     * @return \Entity\CareAccesslog
     */
    public function setUserid($userid)
    {
        $this->userid = $userid;

        return $this;
    }

    /**
     * Get the value of userid.
     *
     * @return string
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * Set the value of username.
     *
     * @param string $username
     * @return \Entity\CareAccesslog
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get the value of username.
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set the value of password.
     *
     * @param string $password
     * @return \Entity\CareAccesslog
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of password.
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of thisfile.
     *
     * @param string $thisfile
     * @return \Entity\CareAccesslog
     */
    public function setThisfile($thisfile)
    {
        $this->thisfile = $thisfile;

        return $this;
    }

    /**
     * Get the value of thisfile.
     *
     * @return string
     */
    public function getThisfile()
    {
        return $this->thisfile;
    }

    /**
     * Set the value of fileforward.
     *
     * @param string $fileforward
     * @return \Entity\CareAccesslog
     */
    public function setFileforward($fileforward)
    {
        $this->fileforward = $fileforward;

        return $this;
    }

    /**
     * Get the value of fileforward.
     *
     * @return string
     */
    public function getFileforward()
    {
        return $this->fileforward;
    }

    /**
     * Set the value of login_success.
     *
     * @param integer $login_success
     * @return \Entity\CareAccesslog
     */
    public function setLoginSuccess($login_success)
    {
        $this->login_success = $login_success;

        return $this;
    }

    /**
     * Get the value of login_success.
     *
     * @return integer
     */
    public function getLoginSuccess()
    {
        return $this->login_success;
    }

    public function __sleep()
    {
        return array('id', 'datetime', 'ip', 'lognote', 'userid', 'username', 'password', 'thisfile', 'fileforward', 'login_success');
    }
}