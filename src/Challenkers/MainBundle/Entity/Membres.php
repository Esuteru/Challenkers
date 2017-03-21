<?php

namespace Challenkers\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Membres
 *
 * @ORM\Table(name="membres")
 * @ORM\Entity(repositoryClass="Challenkers\MainBundle\Repository\MembresRepository")
 */
class Membres
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
     * @ORM\Column(name="Pseudo", type="string", length=255, unique=true)
     */
    private $pseudo;

    /**
     * @var int
     *
     * @ORM\Column(name="Level", type="integer")
     */
    private $level;

    /**
     * @var string
     *
     * @ORM\Column(name="Classe", type="string", length=255)
     */
    private $classe;

    /**
     * @var int
     *
     * @ORM\Column(name="Points", type="integer")
     */
    private $points;

    /**
     * @ORM\ManyToOne(targetEntity="Guilde", inversedBy="membres")
     *
     * @ORM\JoinColumn(name="idGuilde", referencedColumnName="id", nullable=true)
     */
    private $idGuilde;

    /**
     * @ORM\ManyToOne(targetEntity="Serveur", inversedBy="membres")
     *
     * @ORM\JoinColumn(name="idServeur", referencedColumnName="id")
     */
    private $idServeur;


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
     * Set pseudo
     *
     * @param string $pseudo
     * @return Membres
     */
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    /**
     * Get pseudo
     *
     * @return string 
     */
    public function getPseudo()
    {
        return $this->pseudo;
    }

    /**
     * Set level
     *
     * @param integer $level
     * @return Membres
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return integer 
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set classe
     *
     * @param string $classe
     * @return Membres
     */
    public function setClasse($classe)
    {
        $this->classe = $classe;

        return $this;
    }

    /**
     * Get classe
     *
     * @return string 
     */
    public function getClasse()
    {
        return $this->classe;
    }

    /**
     * Set points
     *
     * @param integer $points
     * @return Membres
     */
    public function setPoints($points)
    {
        $this->points = $points;

        return $this;
    }

    /**
     * Get points
     *
     * @return integer 
     */
    public function getPoints()
    {
        return $this->points;
    }

    /**
     * Set idGuilde
     *
     * @param integer $idGuilde
     * @return Membres
     */
    public function setIdGuilde($idGuilde)
    {
        $this->idGuilde = $idGuilde;

        return $this;
    }

    /**
     * Get idGuilde
     *
     * @return integer 
     */
    public function getIdGuilde()
    {
        return $this->idGuilde;
    }

    /**
     * Set idServeur
     *
     * @param integer $idServeur
     * @return Membres
     */
    public function setIdServeur($idServeur)
    {
        $this->idServeur = $idServeur;

        return $this;
    }

    /**
     * Get idServeur
     *
     * @return integer 
     */
    public function getIdServeur()
    {
        return $this->idServeur;
    }
}
