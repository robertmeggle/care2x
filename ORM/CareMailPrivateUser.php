<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\CareMailPrivateUser
 *
 * InnoDB free: 9216 kB
 *
 * @ORM\Entity(repositoryClass="CareMailPrivateUserRepository")
 * @ORM\Table(name="care_mail_private_users")
 */
class CareMailPrivateUser
{
    /**
     * @ORM\Column(type="string", length=60)
     */
    protected $user_name;

    /**
     * @ORM\Id
     * @ORM\Column(type="string", length=60)
     */
    protected $email;

    /**
     * @ORM\Column(type="string", length=60)
     */
    protected $alias;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $pw;

    /**
     * @ORM\Column(type="text")
     */
    protected $inbox;

    /**
     * @ORM\Column(type="text")
     */
    protected $sent;

    /**
     * @ORM\Column(type="text")
     */
    protected $drafts;

    /**
     * @ORM\Column(type="text")
     */
    protected $trash;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $lastcheck;

    /**
     * @ORM\Column(type="integer")
     */
    protected $lock_flag;

    /**
     * @ORM\Column(type="text")
     */
    protected $addr_book;

    /**
     * @ORM\Column(type="text")
     */
    protected $addr_quick;

    /**
     * @ORM\Column(type="text")
     */
    protected $secret_q;

    /**
     * @ORM\Column(type="text")
     */
    protected $secret_q_ans;

    /**
     * @ORM\Column(type="integer")
     */
    protected $public;

    /**
     * @ORM\Column(type="text")
     */
    protected $sig;

    /**
     * @ORM\Column(type="integer")
     */
    protected $append_sig;

    public function __construct()
    {
    }

    /**
     * Set the value of user_name.
     *
     * @param string $user_name
     * @return \Entity\CareMailPrivateUser
     */
    public function setUserName($user_name)
    {
        $this->user_name = $user_name;

        return $this;
    }

    /**
     * Get the value of user_name.
     *
     * @return string
     */
    public function getUserName()
    {
        return $this->user_name;
    }

    /**
     * Set the value of email.
     *
     * @param string $email
     * @return \Entity\CareMailPrivateUser
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of email.
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of alias.
     *
     * @param string $alias
     * @return \Entity\CareMailPrivateUser
     */
    public function setAlias($alias)
    {
        $this->alias = $alias;

        return $this;
    }

    /**
     * Get the value of alias.
     *
     * @return string
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * Set the value of pw.
     *
     * @param string $pw
     * @return \Entity\CareMailPrivateUser
     */
    public function setPw($pw)
    {
        $this->pw = $pw;

        return $this;
    }

    /**
     * Get the value of pw.
     *
     * @return string
     */
    public function getPw()
    {
        return $this->pw;
    }

    /**
     * Set the value of inbox.
     *
     * @param string $inbox
     * @return \Entity\CareMailPrivateUser
     */
    public function setInbox($inbox)
    {
        $this->inbox = $inbox;

        return $this;
    }

    /**
     * Get the value of inbox.
     *
     * @return string
     */
    public function getInbox()
    {
        return $this->inbox;
    }

    /**
     * Set the value of sent.
     *
     * @param string $sent
     * @return \Entity\CareMailPrivateUser
     */
    public function setSent($sent)
    {
        $this->sent = $sent;

        return $this;
    }

    /**
     * Get the value of sent.
     *
     * @return string
     */
    public function getSent()
    {
        return $this->sent;
    }

    /**
     * Set the value of drafts.
     *
     * @param string $drafts
     * @return \Entity\CareMailPrivateUser
     */
    public function setDrafts($drafts)
    {
        $this->drafts = $drafts;

        return $this;
    }

    /**
     * Get the value of drafts.
     *
     * @return string
     */
    public function getDrafts()
    {
        return $this->drafts;
    }

    /**
     * Set the value of trash.
     *
     * @param string $trash
     * @return \Entity\CareMailPrivateUser
     */
    public function setTrash($trash)
    {
        $this->trash = $trash;

        return $this;
    }

    /**
     * Get the value of trash.
     *
     * @return string
     */
    public function getTrash()
    {
        return $this->trash;
    }

    /**
     * Set the value of lastcheck.
     *
     * @param datetime $lastcheck
     * @return \Entity\CareMailPrivateUser
     */
    public function setLastcheck($lastcheck)
    {
        $this->lastcheck = $lastcheck;

        return $this;
    }

    /**
     * Get the value of lastcheck.
     *
     * @return datetime
     */
    public function getLastcheck()
    {
        return $this->lastcheck;
    }

    /**
     * Set the value of lock_flag.
     *
     * @param integer $lock_flag
     * @return \Entity\CareMailPrivateUser
     */
    public function setLockFlag($lock_flag)
    {
        $this->lock_flag = $lock_flag;

        return $this;
    }

    /**
     * Get the value of lock_flag.
     *
     * @return integer
     */
    public function getLockFlag()
    {
        return $this->lock_flag;
    }

    /**
     * Set the value of addr_book.
     *
     * @param string $addr_book
     * @return \Entity\CareMailPrivateUser
     */
    public function setAddrBook($addr_book)
    {
        $this->addr_book = $addr_book;

        return $this;
    }

    /**
     * Get the value of addr_book.
     *
     * @return string
     */
    public function getAddrBook()
    {
        return $this->addr_book;
    }

    /**
     * Set the value of addr_quick.
     *
     * @param string $addr_quick
     * @return \Entity\CareMailPrivateUser
     */
    public function setAddrQuick($addr_quick)
    {
        $this->addr_quick = $addr_quick;

        return $this;
    }

    /**
     * Get the value of addr_quick.
     *
     * @return string
     */
    public function getAddrQuick()
    {
        return $this->addr_quick;
    }

    /**
     * Set the value of secret_q.
     *
     * @param string $secret_q
     * @return \Entity\CareMailPrivateUser
     */
    public function setSecretQ($secret_q)
    {
        $this->secret_q = $secret_q;

        return $this;
    }

    /**
     * Get the value of secret_q.
     *
     * @return string
     */
    public function getSecretQ()
    {
        return $this->secret_q;
    }

    /**
     * Set the value of secret_q_ans.
     *
     * @param string $secret_q_ans
     * @return \Entity\CareMailPrivateUser
     */
    public function setSecretQAns($secret_q_ans)
    {
        $this->secret_q_ans = $secret_q_ans;

        return $this;
    }

    /**
     * Get the value of secret_q_ans.
     *
     * @return string
     */
    public function getSecretQAns()
    {
        return $this->secret_q_ans;
    }

    /**
     * Set the value of public.
     *
     * @param integer $public
     * @return \Entity\CareMailPrivateUser
     */
    public function setPublic($public)
    {
        $this->public = $public;

        return $this;
    }

    /**
     * Get the value of public.
     *
     * @return integer
     */
    public function getPublic()
    {
        return $this->public;
    }

    /**
     * Set the value of sig.
     *
     * @param string $sig
     * @return \Entity\CareMailPrivateUser
     */
    public function setSig($sig)
    {
        $this->sig = $sig;

        return $this;
    }

    /**
     * Get the value of sig.
     *
     * @return string
     */
    public function getSig()
    {
        return $this->sig;
    }

    /**
     * Set the value of append_sig.
     *
     * @param integer $append_sig
     * @return \Entity\CareMailPrivateUser
     */
    public function setAppendSig($append_sig)
    {
        $this->append_sig = $append_sig;

        return $this;
    }

    /**
     * Get the value of append_sig.
     *
     * @return integer
     */
    public function getAppendSig()
    {
        return $this->append_sig;
    }

    public function __sleep()
    {
        return array('user_name', 'email', 'alias', 'pw', 'inbox', 'sent', 'drafts', 'trash', 'lastcheck', 'lock_flag', 'addr_book', 'addr_quick', 'secret_q', 'secret_q_ans', 'public', 'sig', 'append_sig');
    }
}