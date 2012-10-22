<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\CareMailPrivate
 *
 * InnoDB free: 9216 kB
 *
 * @ORM\Entity(repositoryClass="CareMailPrivateRepository")
 * @ORM\Table(name="care_mail_private", indexes={@ORM\Index(name="recipient", columns={"recipient"})})
 */
class CareMailPrivate
{
    /**
     * @ORM\Column(type="string", length=60)
     */
    protected $recipient;

    /**
     * @ORM\Column(type="string", length=60)
     */
    protected $sender;

    /**
     * @ORM\Column(type="string", length=60)
     */
    protected $sender_ip;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $cc;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $bcc;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $subject;

    /**
     * @ORM\Column(type="text")
     */
    protected $body;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $sign;

    /**
     * @ORM\Column(type="integer")
     */
    protected $ask4ack;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $reply2;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $attachment;

    /**
     * @ORM\Column(type="string", length=30)
     */
    protected $attach_type;

    /**
     * @ORM\Column(type="integer")
     */
    protected $read_flag;

    /**
     * @ORM\Column(type="string", length=60)
     */
    protected $mailgroup;

    /**
     * @ORM\Column(type="string", length=60)
     */
    protected $maildir;

    /**
     * @ORM\Column(type="integer")
     */
    protected $exec_level;

    /**
     * @ORM\Column(type="text")
     */
    protected $exclude_addr;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $send_dt;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $send_stamp;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $uid;

    public function __construct()
    {
    }

    /**
     * Set the value of recipient.
     *
     * @param string $recipient
     * @return \Entity\CareMailPrivate
     */
    public function setRecipient($recipient)
    {
        $this->recipient = $recipient;

        return $this;
    }

    /**
     * Get the value of recipient.
     *
     * @return string
     */
    public function getRecipient()
    {
        return $this->recipient;
    }

    /**
     * Set the value of sender.
     *
     * @param string $sender
     * @return \Entity\CareMailPrivate
     */
    public function setSender($sender)
    {
        $this->sender = $sender;

        return $this;
    }

    /**
     * Get the value of sender.
     *
     * @return string
     */
    public function getSender()
    {
        return $this->sender;
    }

    /**
     * Set the value of sender_ip.
     *
     * @param string $sender_ip
     * @return \Entity\CareMailPrivate
     */
    public function setSenderIp($sender_ip)
    {
        $this->sender_ip = $sender_ip;

        return $this;
    }

    /**
     * Get the value of sender_ip.
     *
     * @return string
     */
    public function getSenderIp()
    {
        return $this->sender_ip;
    }

    /**
     * Set the value of cc.
     *
     * @param string $cc
     * @return \Entity\CareMailPrivate
     */
    public function setCc($cc)
    {
        $this->cc = $cc;

        return $this;
    }

    /**
     * Get the value of cc.
     *
     * @return string
     */
    public function getCc()
    {
        return $this->cc;
    }

    /**
     * Set the value of bcc.
     *
     * @param string $bcc
     * @return \Entity\CareMailPrivate
     */
    public function setBcc($bcc)
    {
        $this->bcc = $bcc;

        return $this;
    }

    /**
     * Get the value of bcc.
     *
     * @return string
     */
    public function getBcc()
    {
        return $this->bcc;
    }

    /**
     * Set the value of subject.
     *
     * @param string $subject
     * @return \Entity\CareMailPrivate
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * Get the value of subject.
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Set the value of body.
     *
     * @param string $body
     * @return \Entity\CareMailPrivate
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
     * Set the value of sign.
     *
     * @param string $sign
     * @return \Entity\CareMailPrivate
     */
    public function setSign($sign)
    {
        $this->sign = $sign;

        return $this;
    }

    /**
     * Get the value of sign.
     *
     * @return string
     */
    public function getSign()
    {
        return $this->sign;
    }

    /**
     * Set the value of ask4ack.
     *
     * @param integer $ask4ack
     * @return \Entity\CareMailPrivate
     */
    public function setAsk4ack($ask4ack)
    {
        $this->ask4ack = $ask4ack;

        return $this;
    }

    /**
     * Get the value of ask4ack.
     *
     * @return integer
     */
    public function getAsk4ack()
    {
        return $this->ask4ack;
    }

    /**
     * Set the value of reply2.
     *
     * @param string $reply2
     * @return \Entity\CareMailPrivate
     */
    public function setReply2($reply2)
    {
        $this->reply2 = $reply2;

        return $this;
    }

    /**
     * Get the value of reply2.
     *
     * @return string
     */
    public function getReply2()
    {
        return $this->reply2;
    }

    /**
     * Set the value of attachment.
     *
     * @param string $attachment
     * @return \Entity\CareMailPrivate
     */
    public function setAttachment($attachment)
    {
        $this->attachment = $attachment;

        return $this;
    }

    /**
     * Get the value of attachment.
     *
     * @return string
     */
    public function getAttachment()
    {
        return $this->attachment;
    }

    /**
     * Set the value of attach_type.
     *
     * @param string $attach_type
     * @return \Entity\CareMailPrivate
     */
    public function setAttachType($attach_type)
    {
        $this->attach_type = $attach_type;

        return $this;
    }

    /**
     * Get the value of attach_type.
     *
     * @return string
     */
    public function getAttachType()
    {
        return $this->attach_type;
    }

    /**
     * Set the value of read_flag.
     *
     * @param integer $read_flag
     * @return \Entity\CareMailPrivate
     */
    public function setReadFlag($read_flag)
    {
        $this->read_flag = $read_flag;

        return $this;
    }

    /**
     * Get the value of read_flag.
     *
     * @return integer
     */
    public function getReadFlag()
    {
        return $this->read_flag;
    }

    /**
     * Set the value of mailgroup.
     *
     * @param string $mailgroup
     * @return \Entity\CareMailPrivate
     */
    public function setMailgroup($mailgroup)
    {
        $this->mailgroup = $mailgroup;

        return $this;
    }

    /**
     * Get the value of mailgroup.
     *
     * @return string
     */
    public function getMailgroup()
    {
        return $this->mailgroup;
    }

    /**
     * Set the value of maildir.
     *
     * @param string $maildir
     * @return \Entity\CareMailPrivate
     */
    public function setMaildir($maildir)
    {
        $this->maildir = $maildir;

        return $this;
    }

    /**
     * Get the value of maildir.
     *
     * @return string
     */
    public function getMaildir()
    {
        return $this->maildir;
    }

    /**
     * Set the value of exec_level.
     *
     * @param integer $exec_level
     * @return \Entity\CareMailPrivate
     */
    public function setExecLevel($exec_level)
    {
        $this->exec_level = $exec_level;

        return $this;
    }

    /**
     * Get the value of exec_level.
     *
     * @return integer
     */
    public function getExecLevel()
    {
        return $this->exec_level;
    }

    /**
     * Set the value of exclude_addr.
     *
     * @param string $exclude_addr
     * @return \Entity\CareMailPrivate
     */
    public function setExcludeAddr($exclude_addr)
    {
        $this->exclude_addr = $exclude_addr;

        return $this;
    }

    /**
     * Get the value of exclude_addr.
     *
     * @return string
     */
    public function getExcludeAddr()
    {
        return $this->exclude_addr;
    }

    /**
     * Set the value of send_dt.
     *
     * @param datetime $send_dt
     * @return \Entity\CareMailPrivate
     */
    public function setSendDt($send_dt)
    {
        $this->send_dt = $send_dt;

        return $this;
    }

    /**
     * Get the value of send_dt.
     *
     * @return datetime
     */
    public function getSendDt()
    {
        return $this->send_dt;
    }

    /**
     * Set the value of send_stamp.
     *
     * @param datetime $send_stamp
     * @return \Entity\CareMailPrivate
     */
    public function setSendStamp($send_stamp)
    {
        $this->send_stamp = $send_stamp;

        return $this;
    }

    /**
     * Get the value of send_stamp.
     *
     * @return datetime
     */
    public function getSendStamp()
    {
        return $this->send_stamp;
    }

    /**
     * Set the value of uid.
     *
     * @param string $uid
     * @return \Entity\CareMailPrivate
     */
    public function setUid($uid)
    {
        $this->uid = $uid;

        return $this;
    }

    /**
     * Get the value of uid.
     *
     * @return string
     */
    public function getUid()
    {
        return $this->uid;
    }

    public function __sleep()
    {
        return array('recipient', 'sender', 'sender_ip', 'cc', 'bcc', 'subject', 'body', 'sign', 'ask4ack', 'reply2', 'attachment', 'attach_type', 'read_flag', 'mailgroup', 'maildir', 'exec_level', 'exclude_addr', 'send_dt', 'send_stamp', 'uid');
    }
}