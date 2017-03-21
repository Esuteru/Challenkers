<?php

namespace Challenkers\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Serveur
 *
 * @ORM\Table(name="serveur")
 * @ORM\Entity(repositoryClass="Challenkers\MainBundle\Repository\ServeurRepository")
 */
class Serveur
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nomServeur", type="string", length=255)
     */
    private $nomServeur;

    /**
     * @var string
     *
     * @ORM\Column(name="nomMDJ", type="string", length=255)
     */
    private $nomMDJ;

    /**
     * @ORM\OneToMany(targetEntity="Guilde", mappedBy="serveur")
     */
    private $guildes;

    public function __construct()
    {
        $this->guildes = new ArrayCollection();
    }

    /**
     * @ORM\OneToMany(targetEntity="Membres", mappedBy="serveur")
     */
    private $membres;

    public function __construct2()
    {
        $this->membres = new ArrayCollection();
    }

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
     * Set nomServeur
     *
     * @param string $nomServeur
     * @return Serveur
     */
    public function setNomServeur($nomServeur)
    {
        $this->nomServeur = $nomServeur;

        return $this;
    }

    /**
     * Get nomServeur
     *
     * @return string 
     */
    public function getNomServeur()
    {
        return $this->nomServeur;
    }

    /**
     * Set nomMDJ
     *
     * @param string $nomMDJ
     * @return Serveur
     */
    public function setNomMDJ($nomMDJ)
    {
        $this->nomMDJ = $nomMDJ;

        return $this;
    }

    /**
     * Get nomMDJ
     *
     * @return string 
     */
    public function getNomMDJ()
    {
        return $this->nomMDJ;
    }
}
