<?php

namespace Exod\Bundle\UtopicVillageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Exod\Bundle\UtopicVillageBundle\Entity\User
 *
 * @ORM\Table("user")
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
     * @var string $login
     *
     * @ORM\Column(name="login", type="string", length=100, unique=true, nullable=false	)
     */
    private $login;

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
     * @var date $lastConnection
     *
     * @ORM\Column(name="last_connection", type="date", nullable=false)
     */
    private $lastConnection;

    /**
     * @var string $picture
     *
     * @ORM\Column(name="picture", type="string", length=100)
     */
    private $picture;
    
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
     * @ORM\OneToOne(targetEntity="Role")
     */
    private $role;
    
    /**
     * @ORM\OneToOne(targetEntity="Namespace\Bundle\Entity\Adresse")
     */
    private $sanction;

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
     * Set login
     *
     * @param string $login
     */
    public function setLogin($login)
    {
        $this->login = $login;
    }

    /**
     * Get login
     *
     * @return string 
     */
    public function getLogin()
    {
        return $this->login;
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
}