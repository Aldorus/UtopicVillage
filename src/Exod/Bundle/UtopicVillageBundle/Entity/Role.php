<?php

namespace Exod\Bundle\UtopicVillageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Exod\Bundle\UtopicVillageBundle\Entity\Role
 *
 * @ORM\Table("role")
 * @ORM\Entity(repositoryClass="Exod\Bundle\UtopicVillageBundle\Repository\RoleRepository")
 */
class Role
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
     * @var string $idFonctionel
     *
     * @ORM\Column(name="id_fonctionel", type="string", length=100, unique=true, nullable=false)
     */
    private $idFonctionel;


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
     * Set idFonctionel
     *
     * @param string $idFonctionel
     */
    public function setIdFonctionel($idFonctionel)
    {
        $this->idFonctionel = $idFonctionel;
    }

    /**
     * Get id_fonctionel
     *
     * @return string 
     */
    public function getIdFonctionel()
    {
        return $this->idFonctionel;
    }
}