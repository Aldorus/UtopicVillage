<?php

namespace Exod\Bundle\UtopicVillageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Exod\Bundle\UtopicVillageBundle\Entity\User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="Exod\Bundle\UtopicVillageBundle\Repository\UserRepository")
 */
class User
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
     * @var string $password
     *
     * @ORM\Column(name="password", type="string", length=100, nullable=false)
     */
    private $password;

    /**
     * @var string $salt
     *
     * @ORM\Column(name="salt", type="string", length=100, nullable=false)
     */
    private $salt;

    /**
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=100)
     */
    private $name;

    /**
     * @var string $firstname
     *
     * @ORM\Column(name="firstname", type="string", length=100)
     */
    private $firstname;

    /**
     * @var date $birthdate
     *
     * @ORM\Column(name="birthdate", type="date", nullable=false)
     */
    private $birthdate;
    
    /**
     * @var date $email
     *
     * @ORM\Column(name="email", type="string", nullable=false, unique=true)
     */
    private $email;

    /**
     * @var date $lastConnection
     *
     * @ORM\Column(name="last_connection", type="date", nullable=false)
     */
    private $lastConnection;

    /**
     * @var string $picture
     *
     * @ORM\Column(name="picture", type="string", length=100, nullable=true)
     */
    private $picture;
    
    /**
     * @var boolean $report
     *
     * @ORM\Column(name="report", type="boolean", nullable=true)
     */
    private $report;
    
    /**
     * @var boolean $active
     *
     * @ORM\Column(name="active", type="boolean", nullable=false)
     */
    private $active;
    
    /**
     * @ORM\ManyToOne(targetEntity="Role")
     */
    private $role;
    
    /**
     * @ORM\ManyToOne(targetEntity="Sanction")
     */
    private $sanction;
    
    /**
     * @ORM\Column(name="date_sanction", type="date", nullable=true)
     */
    private $dateSanction;

    /**
     * @ORM\Column(name="latitude", type="float", nullable=false)
     */
    private $latitude;
    
    /**
     * @ORM\Column(name="longitude", type="float", nullable=false)
     */
    private $longitude;  

    /**
     * @ORM\Column(name="amount", type="integer", nullable=false)
     */
    private $amount;
    
    /**
     * @ORM\Column(name="commentaire", type="string", nullable=true)
     */
    private $commentaire;
    
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
     * Set password
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set salt
     *
     * @param string $salt
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;
    }

    /**
     * Get salt
     *
     * @return string 
     */
    public function getSalt()
    {
        return $this->salt;
    }

    /**
     * Set name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * Get firstname
     *
     * @return string 
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set birthdate
     *
     * @param date $birthdate
     */
    public function setBirthdate($birthdate)
    {
        $this->birthdate = $birthdate;
    }

    /**
     * Get birthdate
     *
     * @return date 
     */
    public function getBirthdate()
    {
        return $this->birthdate;
    }

    /**
     * Set email
     *
     * @param string $email
     */
    public function setEmail($email)
    {
    	$this->email = $email;
    }
    
    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
    	return $this->email;
    }
    
    /**
     * Set lastConnection
     *
     * @param date $lastConnection
     */
    public function setLastConnection($lastConnection)
    {
        $this->lastConnection = $lastConnection;
    }

    /**
     * Get lastConnection
     *
     * @return date 
     */
    public function getLastConnection()
    {
        return $this->lastConnection;
    }

    /**
     * Set picture
     *
     * @param string $picture
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;
    }

    /**
     * Get picture
     *
     * @return string 
     */
    public function getPicture()
    {
        return $this->picture;
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
     * Set role
     *
     * @param Role $role
     */
    public function setRole($role)
    {
    	$this->role = $role;
    }
    
    /**
     * Get role
     *
     * @return Role
     */
    public function getRole()
    {
    	return $this->role;
    }
    
    /**
     * Set sanction
     *
     * @param Sanction $sanction
     */
    public function setSanction($sanction)
    {
    	$this->sanction = $sanction;
    }
    
    /**
     * Get sanction
     *
     * @return Sanction
     */
    public function getSanction()
    {
    	return $this->sanction;
    }
    
    /**
     * Set dateSanction
     *
     * @param date $dateSanction
     */
    public function setDateSanction($dateSanction)
    {
    	$this->dateSanction = $dateSanction;
    }
    
    /**
     * Get dateSanction
     *
     * @return date
     */
    public function getDateSanction()
    {
    	return $this->dateSanction;
    }
    
    /**
     * Set latitude
     *
     * @param integer $latitude
     */
    public function setLatitude($latitude)
    {
    	$this->latitude = $latitude;
    }
    
    /**
     * Get latitude
     *
     * @return integer
     */
    public function getLatitude()
    {
    	return $this->latitude;
    }
    
	/**
     * Set longitude
     *
     * @param float $longitude
     */
    public function setLongitude($longitude)
    {
    	$this->longitude = $longitude;
    }
    
    /**
     * Get longitude
     *
     * @return float
     */
    public function getLongitude()
    {
    	return $this->longitude;
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
     * Set description
     *
     * @param String $description
     */
    public function setDescription($description)
    {
    	$this->description = $description;
    }
    
    /**
     * Get description
     *
     * @return String
     */
    public function getDescription()
    {
    	return $this->description;
    }
    
    public function toArray($bool=true){
//    	return array(
//    		'id'		=>
//    		'active'		=>
//	    	'birthdate'		=>
//	    	'firstname'		=>
//	    	'lastConnection'		=>
//	    	'latitude'		=>
//	    	'longitude'		=>
//	    	'name'		=>
//    	);

    	$arrayReturn = get_object_vars($this);
    	$arrayReturn['status'] = 'ok';
    	return $arrayReturn;
    }
    
}