<?php

namespace Exod\Bundle\UtopicVillageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Exod\Bundle\UtopicVillageBundle\Entity\Volunteer
 *
 * @ORM\Table(name="volunteer")
 * @ORM\Entity(repositoryClass="Exod\Bundle\UtopicVillageBundle\Repository\VolunteerRepository")
 */
class Volunteer
{
	function __construct(){
		$this->active=1;
	}
    /**
     * @var datetime $date
     *
     * @ORM\Column(name="date", type="datetime", nullable=true)
     */
    private $date;
    
    /**
     * @var boolean $active
     *
     * @ORM\Column(name="active", type="boolean", nullable=false)
     */
    private $active;
    
    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="User")
     */
    private $user;
    
    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Help")
     */
    private $help;

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
     * Set active
     *
     * @param boolean $active
     */
    public function setActive($date)
    {
    	$this->active = $active;
    }
    
    /**
     * Get active
     *
     * @return booblean
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
     * Set help
     *
     * @param Help $help
     */
    public function setHelp($help)
    {
    	$this->help = $help;
    }
    
    /**
     * Get help
     *
     * @return Help
     */
    public function getHelp()
    {
    	return $this->help;
    }
}