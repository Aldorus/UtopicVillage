<?php

namespace Exod\Bundle\UtopicVillageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Exod\Bundle\UtopicVillageBundle\Entity\Role
 *
 * @ORM\Table(name="role")
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
     * @var string $idFonctionnel
     *
     * @ORM\Column(name="id_fonctionnel", type="string", length=100, unique=true, nullable=false)
     */
    private $idFonctionnel;


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
     * Set idFonctionnel
     *
     * @param string $idFonctionnel
     */
    public function setIdFonctionnel($idFonctionnel)
    {
        $this->idFonctionnel = $idFonctionnel;
    }

    /**
     * Get id_fonctionnel
     *
     * @return string 
     */
    public function getIdFonctionnel()
    {
        return $this->idFonctionnel;
    }
}