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
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var datetime $date
     *
     * @ORM\Column(name="date", type="datetime", nullable=true)
     */
    private $date;
    
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
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