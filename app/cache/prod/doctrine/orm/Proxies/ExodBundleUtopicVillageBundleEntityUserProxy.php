<?php

namespace Proxies;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class ExodBundleUtopicVillageBundleEntityUserProxy extends \Exod\Bundle\UtopicVillageBundle\Entity\User implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }
    
    
    public function getId()
    {
        $this->__load();
        return parent::getId();
    }

    public function setPassword($password)
    {
        $this->__load();
        return parent::setPassword($password);
    }

    public function getPassword()
    {
        $this->__load();
        return parent::getPassword();
    }

    public function setSalt($salt)
    {
        $this->__load();
        return parent::setSalt($salt);
    }

    public function getSalt()
    {
        $this->__load();
        return parent::getSalt();
    }

    public function setName($name)
    {
        $this->__load();
        return parent::setName($name);
    }

    public function getName()
    {
        $this->__load();
        return parent::getName();
    }

    public function setFirstname($firstname)
    {
        $this->__load();
        return parent::setFirstname($firstname);
    }

    public function getFirstname()
    {
        $this->__load();
        return parent::getFirstname();
    }

    public function setBirthdate($birthdate)
    {
        $this->__load();
        return parent::setBirthdate($birthdate);
    }

    public function getBirthdate()
    {
        $this->__load();
        return parent::getBirthdate();
    }

    public function setEmail($email)
    {
        $this->__load();
        return parent::setEmail($email);
    }

    public function getEmail()
    {
        $this->__load();
        return parent::getEmail();
    }

    public function setLastConnection($lastConnection)
    {
        $this->__load();
        return parent::setLastConnection($lastConnection);
    }

    public function getLastConnection()
    {
        $this->__load();
        return parent::getLastConnection();
    }

    public function setPicture($picture)
    {
        $this->__load();
        return parent::setPicture($picture);
    }

    public function getPicture()
    {
        $this->__load();
        return parent::getPicture();
    }

    public function setReport($report)
    {
        $this->__load();
        return parent::setReport($report);
    }

    public function getReport()
    {
        $this->__load();
        return parent::getReport();
    }

    public function setActive($active)
    {
        $this->__load();
        return parent::setActive($active);
    }

    public function getActive()
    {
        $this->__load();
        return parent::getActive();
    }

    public function setRole($role)
    {
        $this->__load();
        return parent::setRole($role);
    }

    public function getRole()
    {
        $this->__load();
        return parent::getRole();
    }

    public function setSanction($sanction)
    {
        $this->__load();
        return parent::setSanction($sanction);
    }

    public function getSanction()
    {
        $this->__load();
        return parent::getSanction();
    }

    public function setDateSanction($dateSanction)
    {
        $this->__load();
        return parent::setDateSanction($dateSanction);
    }

    public function getDateSanction()
    {
        $this->__load();
        return parent::getDateSanction();
    }

    public function setLatitude($latitude)
    {
        $this->__load();
        return parent::setLatitude($latitude);
    }

    public function getLatitude()
    {
        $this->__load();
        return parent::getLatitude();
    }

    public function setLongitude($longitude)
    {
        $this->__load();
        return parent::setLongitude($longitude);
    }

    public function getLongitude()
    {
        $this->__load();
        return parent::getLongitude();
    }

    public function setAmount($amount)
    {
        $this->__load();
        return parent::setAmount($amount);
    }

    public function getAmount()
    {
        $this->__load();
        return parent::getAmount();
    }

    public function setDescription($description)
    {
        $this->__load();
        return parent::setDescription($description);
    }

    public function getDescription()
    {
        $this->__load();
        return parent::getDescription();
    }

    public function toArray($bool = true)
    {
        $this->__load();
        return parent::toArray($bool);
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'password', 'salt', 'name', 'firstname', 'birthdate', 'email', 'lastConnection', 'picture', 'report', 'active', 'role', 'sanction', 'dateSanction', 'latitude', 'longitude', 'amount', 'commentaire');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields AS $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}