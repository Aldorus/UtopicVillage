<?php

namespace Exod\Bundle\UtopicVillageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Exod\Bundle\UtopicVillageBundle\Entity\Contenu
 *
 * @ORM\Table("contenu")
 * @ORM\Entity(repositoryClass="Exod\Bundle\UtopicVillageBundle\Repository\ContenuRepository")
 */
class Contenu
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
     * @var text $value
     *
     * @ORM\Column(name="value", type="text", nullable=false)
     */
    private $value;


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
     * Get idFonctionnel
     *
     * @return string 
     */
    public function getIdFonctionnel()
    {
        return $this->idFonctionnel;
    }

    /**
     * Set value
     *
     * @param text $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * Get value
     *
     * @return text 
     */
    public function getValue()
    {
        return $this->value;
    }
}