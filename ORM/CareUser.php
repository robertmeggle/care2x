<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\CareUser
 *
 * @ORM\Entity(repositoryClass="CareUserRepository")
 * @ORM\Table(name="care_users", indexes={@ORM\Index(name="login_id", columns={"login_id"}), @ORM\Index(name="user_role", columns={"user_role"})})
 */
class CareUser
{
    /**
     * @ORM\Column(type="string", length=60)
     */
    protected $name;

    /**
     * @ORM\Id
     * @ORM\Column(type="string", length=35)
     */
    protected $login_id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $password;

    /**
     * @ORM\Column(type="integer")
     */
    protected $personell_nr;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $lockflag;

    /**
     * @ORM\Column(type="text")
     */
    protected $permission;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $exc;

    /**
     * @ORM\Column(type="date")
     */
    protected $s_date;

    /**
     * @ORM\Column(type="time")
     */
    protected $s_time;

    /**
     * @ORM\Column(type="date")
     */
    protected $expire_date;

    /**
     * @ORM\Column(type="time")
     */
    protected $expire_time;

    /**
     * the department in wich the user is allowed to enter / view
     *
     * @ORM\Column(type="text")
     */
    protected $dept_nr;

    /**
     * @ORM\Column(type="integer")
     */
    protected $user_role;

    /**
     * @ORM\Column(type="string", length=15)
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
     * Set the value of name.
     *
     * @param string $name
     * @return \Entity\CareUser
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
     * Set the value of login_id.
     *
     * @param string $login_id
     * @return \Entity\CareUser
     */
    public function setLoginId($login_id)
    {
        $this->login_id = $login_id;

        return $this;
    }

    /**
     * Get the value of login_id.
     *
     * @return string
     */
    public function getLoginId()
    {
        return $this->login_id;
    }

    /**
     * Set the value of password.
     *
     * @param string $password
     * @return \Entity\CareUser
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
     * Set the value of personell_nr.
     *
     * @param integer $personell_nr
     * @return \Entity\CareUser
     */
    public function setPersonellNr($personell_nr)
    {
        $this->personell_nr = $personell_nr;

        return $this;
    }

    /**
     * Get the value of personell_nr.
     *
     * @return integer
     */
    public function getPersonellNr()
    {
        return $this->personell_nr;
    }

    /**
     * Set the value of lockflag.
     *
     * @param integer $lockflag
     * @return \Entity\CareUser
     */
    public function setLockflag($lockflag)
    {
        $this->lockflag = $lockflag;

        return $this;
    }

    /**
     * Get the value of lockflag.
     *
     * @return integer
     */
    public function getLockflag()
    {
        return $this->lockflag;
    }

    /**
     * Set the value of permission.
     *
     * @param string $permission
     * @return \Entity\CareUser
     */
    public function setPermission($permission)
    {
        $this->permission = $permission;

        return $this;
    }

    /**
     * Get the value of permission.
     *
     * @return string
     */
    public function getPermission()
    {
        return $this->permission;
    }

    /**
     * Set the value of exc.
     *
     * @param boolean $exc
     * @return \Entity\CareUser
     */
    public function setExc($exc)
    {
        $this->exc = $exc;

        return $this;
    }

    /**
     * Get the value of exc.
     *
     * @return boolean
     */
    public function getExc()
    {
        return $this->exc;
    }

    /**
     * Set the value of s_date.
     *
     * @param datetime $s_date
     * @return \Entity\CareUser
     */
    public function setSDate($s_date)
    {
        $this->s_date = $s_date;

        return $this;
    }

    /**
     * Get the value of s_date.
     *
     * @return datetime
     */
    public function getSDate()
    {
        return $this->s_date;
    }

    /**
     * Set the value of s_time.
     *
     * @param datetime $s_time
     * @return \Entity\CareUser
     */
    public function setSTime($s_time)
    {
        $this->s_time = $s_time;

        return $this;
    }

    /**
     * Get the value of s_time.
     *
     * @return datetime
     */
    public function getSTime()
    {
        return $this->s_time;
    }

    /**
     * Set the value of expire_date.
     *
     * @param datetime $expire_date
     * @return \Entity\CareUser
     */
    public function setExpireDate($expire_date)
    {
        $this->expire_date = $expire_date;

        return $this;
    }

    /**
     * Get the value of expire_date.
     *
     * @return datetime
     */
    public function getExpireDate()
    {
        return $this->expire_date;
    }

    /**
     * Set the value of expire_time.
     *
     * @param datetime $expire_time
     * @return \Entity\CareUser
     */
    public function setExpireTime($expire_time)
    {
        $this->expire_time = $expire_time;

        return $this;
    }

    /**
     * Get the value of expire_time.
     *
     * @return datetime
     */
    public function getExpireTime()
    {
        return $this->expire_time;
    }

    /**
     * Set the value of dept_nr.
     *
     * @param string $dept_nr
     * @return \Entity\CareUser
     */
    public function setDeptNr($dept_nr)
    {
        $this->dept_nr = $dept_nr;

        return $this;
    }

    /**
     * Get the value of dept_nr.
     *
     * @return string
     */
    public function getDeptNr()
    {
        return $this->dept_nr;
    }

    /**
     * Set the value of user_role.
     *
     * @param integer $user_role
     * @return \Entity\CareUser
     */
    public function setUserRole($user_role)
    {
        $this->user_role = $user_role;

        return $this;
    }

    /**
     * Get the value of user_role.
     *
     * @return integer
     */
    public function getUserRole()
    {
        return $this->user_role;
    }

    /**
     * Set the value of status.
     *
     * @param string $status
     * @return \Entity\CareUser
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
     * @return \Entity\CareUser
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
     * @return \Entity\CareUser
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
     * @return \Entity\CareUser
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
     * @return \Entity\CareUser
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
     * @return \Entity\CareUser
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
        return array('name', 'login_id', 'password', 'personell_nr', 'lockflag', 'permission', 'exc', 's_date', 's_time', 'expire_date', 'expire_time', 'dept_nr', 'user_role', 'status', 'history', 'modify_id', 'modify_time', 'create_id', 'create_time');
    }
}