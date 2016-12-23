<?php

namespace Seveinfo\FrontCarteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Montant
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Seveinfo\FrontCarteBundle\Entity\MontantRepository")
 */
class Montant
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var float
     *
     * @ORM\Column(name="montant", type="float")
     */
    private $montant;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
    *@ORM\ManyToOne(targetEntity="Seveinfo\FrontCarteBundle\Entity\Client")
    *
    * @ORM\JoinColumn(nullable=false)
    *
    */
    private $client;

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
     * Set montant
     *
     * @param float $montant
     * @return Montant
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get montant
     *
     * @return float 
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Montant
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }
}
