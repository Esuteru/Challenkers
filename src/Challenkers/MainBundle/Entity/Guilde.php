<?php

namespace Challenkers\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Guilde
 *
 * @ORM\Table(name="guilde")
 * @ORM\Entity(repositoryClass="Challenkers\MainBundle\Repository\GuildeRepository")
 */
class Guilde
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
     * @ORM\Column(name="nomGuilde", type="string", length=255, unique=true)
     */
    private $nomGuilde;

    /**
     * @ORM\ManyToOne(targetEntity="Serveur", inversedBy="guildes")
     * 
     * @ORM\JoinColumn(name="idServeur", referencedColumnName="id")
     */
    private $idServeur;

    /**
     * @ORM\OneToMany(targetEntity="Membres", mappedBy="guilde")
     */
    private $membres;

    public function __construct()
    {
        $this->membres = new ArrayCollection();
    }
    
    /**
     * @ORM\OneToOne(targetEntity="Membres")
     * @ORM\JoinColumn(name="idMaitreGuilde", referencedColumnName="id", nullable=False)
     */
    private $idMaitreGuilde;


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
     * Set nomGuilde
     *
     * @param string $nomGuilde
     * @return Guilde
     */
    public function setNomGuilde($nomGuilde)
    {
        $this->nomGuilde = $nomGuilde;

        return $this;
    }

    /**
     * Get nomGuilde
     *
     * @return string 
     */
    public function getNomGuilde()
    {
        return $this->nomGuilde;
    }

    /**
     * Set idServeur
     *
     * @param integer $idServeur
     * @return Guilde
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

    /**
     * Add membres
     *
     * @param \Challenkers\MainBundle\Entity\Membres $membres
     * @return Guilde
     */
    public function addMembre(\Challenkers\MainBundle\Entity\Membres $membres)
    {
        $this->membres[] = $membres;

        return $this;
    }

    /**
     * Remove membres
     *
     * @param \Challenkers\MainBundle\Entity\Membres $membres
     */
    public function removeMembre(\Challenkers\MainBundle\Entity\Membres $membres)
    {
        $this->membres->removeElement($membres);
    }

    /**
     * Get membres
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMembres()
    {
        return $this->membres;
    }

   /**
     * Set idMaitreGuilde
     *
     * @param \Challenkers\MainBundle\Entity\Membres $idMaitreGuilde
     * @return Guilde
     */
    public function setIdMaitreGuilde(\Challenkers\MainBundle\Entity\Membres $idMaitreGuilde = null)
    {
        $this->idMaitreGuilde = $idMaitreGuilde;

        return $this;
    }

    /**
     * Get idMaitreGuilde
     *
     * @return \Challenkers\MainBundle\Entity\Membres 
     */
    public function getIdMaitreGuilde()
    {
        return $this->idMaitreGuilde;
    }
    
    public function __toString(){
        return $this->getIdMaitreGuilde();
    }
    
}
