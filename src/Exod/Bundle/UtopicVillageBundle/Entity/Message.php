<?php

namespace Exod\Bundle\UtopicVillageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Exod\Bundle\UtopicVillageBundle\Entity\User;

/**
 * Exod\Bundle\UtopicVillageBundle\Entity\Message
 *
 * @ORM\Table(name="message")
 * @ORM\Entity(repositoryClass="Exod\Bundle\UtopicVillageBundle\Repository\MessageRepository")
 */
class Message
{
    /**
     * @var text $body
     *
     * @ORM\Column(name="body", type="text", nullable=false)
     */
    private $body;

    /**
     * @var datetime $date
     *
     * @ORM\Column(name="date", type="datetime", nullable=false)
     */
    private $date;

    /**
     * @var boolean $new
     *
     * @ORM\Column(name="new", type="boolean", nullable=false)
     */
    private $new;

    /**
     * @var boolean $alreadyRead
     *
     * @ORM\Column(name="already_read", type="boolean", nullable=false)
     */
    private $alreadyRead;
    
    /**
     * @var boolean $notified
     *
     * @ORM\Column(name="notified", type="boolean", nullable=false)
     */
    private $notified;
    
    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="User")
     */
    private $sender;
    
    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="User")
     */
    private $receiver;

    /**
     * Set body
     *
     * @param text $body
     */
    public function setBody($body)
    {
        $this->body = $body;
    }

    /**
     * Get body
     *
     * @return text 
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Set date
     *
     * @param datetime $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * Get date
     *
     * @return datetime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set new
     *
     * @param boolean $new
     */
    public function setNew($new)
    {
        $this->new = $new;
    }

    /**
     * Get new
     *
     * @return boolean 
     */
    public function getNew()
    {
        return $this->new;
    }

    /**
     * Set alreadyRead
     *
     * @param boolean $alreadyRead
     */
    public function setAlreadyRead($alreadyRead)
    {
        $this->alreadyRead = $alreadyRead;
    }

    /**
     * Get alreadyRead
     *
     * @return boolean 
     */
    public function getAlreadyRead()
    {
        return $this->alreadyRead;
    }
    
    /**
     * Set notified
     *
     * @param boolean $notified
     */
    public function setNotified($notifiedd)
    {
    	$this->notified = $notified;
    }
    
    /**
     * Get notified
     *
     * @return boolean
     */
    public function getNotified()
    {
    	return $this->notified;
    }
    
    /**
     * Set sender
     *
     * @param User $sender
     */
    public function setSender($sender)
    {
    	$this->sender = $sender;
    }
    
    /**
     * Get sender
     *
     * @return User
     */
    public function getSender()
    {
    	return $this->sender;
    }
    
    /**
     * Set receiver
     *
     * @param User $receiver
     */
    public function setReceiver($receiver)
    {
    	$this->receiver = $receiver;
    }
    
    /**
     * Get receiver
     *
     * @return User
     */
    public function getReceiver()
    {
    	return $this->receiver;
    }
}