<?php

namespace Exod\Bundle\UtopicVillageBundle\Entity;

use Doctrine\ORM\Mapping\Column;

use Doctrine\ORM\Mapping\JoinColumn;

use Doctrine\ORM\Mapping as ORM;
use Exod\Bundle\UtopicVillageBundle\Entity\User;

/**
 * Exod\Bundle\UtopicVillageBundle\Entity\Help
 *
 * @ORM\Table(name="help")
 * @ORM\Entity(repositoryClass="Exod\Bundle\UtopicVillageBundle\Repository\HelpRepository")
 */
class Help
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var text $description
     *
     * @ORM\Column(name="description", type="text", nullable=false)
     */
    private $description;

    /**
     * @var integer $amount
     *
     * @ORM\Column(name="amount", type="integer", nullable=false)
     */
    private $amount;

    /**
     * @var boolean $reproducible
     *
     * @ORM\Column(name="reproducible", type="boolean", nullable=false)
     */
    private $reproducible;

    /**
     * @var boolean $report
     *
     * @ORM\Column(name="report", type="boolean", nullable=false)
     */
    private $report;
    
    /**
     * @var boolean $active
     *
     * @ORM\Column(name="active", type="boolean", nullable=false)
     */
    private $active;

    /**
     * @var datetime $date
     *
     * @ORM\Column(name="date", type="datetime", nullable=false)
     */
    private $date;
    
    /**
     * @ORM\ManyToOne(targetEntity="User")
     * @JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;
    
    /**
     * @ORM\ManyToOne(targetEntity="User")
     * @JoinColumn(name="participant_id", referencedColumnName="id")
     */
    private $participant;
    
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set description
     *
     * @param text $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Get description
     *
     * @return text 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set amount
     *
     * @param integer $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * Get amount
     *
     * @return integer 
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set reproducible
     *
     * @param boolean $reproducible
     */
    public function setReproducible($reproducible)
    {
        $this->reproducible = $reproducible;
    }

    /**
     * Get reproducible
     *
     * @return boolean 
     */
    public function getReproducible()
    {
        return $this->reproducible;
    }

    /**
     * Set report
     *
     * @param boolean $report
     */
    public function setReport($report)
    {
        $this->report = $report;
    }

    /**
     * Get report
     *
     * @return boolean 
     */
    public function getReport()
    {
        return $this->report;
    }
    
    /**
     * Set active
     *
     * @param boolean $active
     */
    public function setActive($active)
    {
    	$this->active = $active;
    }
    
    /**
     * Get active
     *
     * @return boolean
     */
    public function getActive()
    {
    	return $this->active;
    }
    
    /**
     * Set user
     *
     * @param User $user
     */
    public function setUser($user)
    {
    	$this->user = $user;
    }
    
    /**
     * Get user
     *
     * @return User
     */
    public function getUser()
    {
    	return $this->user;
    }
    
    /**
     * Set user
     *
     * @param User $user
     */
    public function setParticipant($participant)
    {
    	$this->participant = $participant;
    }
    
    /**
     * Get participant
     *
     * @return User
     */
    public function getParticipant()
    {
    	return $this->participant;
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
    
    public function toArray($bool=true){
		if($bool){
    		$this->user = $this->user->toArray();
		}
		$this->participant = $this->participant->toArray();
		
		$arrayReturn = get_object_vars($this);
		$arrayReturn['status'] = 'ok';
		return $arrayReturn;
    }
}