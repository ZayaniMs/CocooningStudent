<?php

namespace ConnexionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservation
 *
 * @ORM\Table(name="reservation", indexes={@ORM\Index(name="fk_Reservation_Annonces1_idx", columns={"Annonces_idannonces"}), @ORM\Index(name="fk_Reservation_Users1_idx", columns={"Users_idUsers"})})
 * @ORM\Entity
 */
class Reservation
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="debut", type="datetime", nullable=true)
     */
    private $debut;

    /**
     * @var string
     *
     * @ORM\Column(name="statut", type="string", length=45, nullable=true)
     */
    private $statut;

    /**
     * @var string
     *
     * @ORM\Column(name="payer", type="string", length=45, nullable=true)
     */
    private $payer;

    /**
     * @var integer
     *
     * @ORM\Column(name="idReservation", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idreservation;

    /**
     * @var \ConnexionBundle\Entity\Users
     *
     * @ORM\ManyToOne(targetEntity="ConnexionBundle\Entity\Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Users_idUsers", referencedColumnName="idUsers")
     * })
     */
    private $usersusers;

    /**
     * @var \ConnexionBundle\Entity\Annonces
     *
     * @ORM\ManyToOne(targetEntity="ConnexionBundle\Entity\Annonces")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Annonces_idannonces", referencedColumnName="idannonces")
     * })
     */
    private $annoncesannonces;



    /**
     * Set debut
     *
     * @param \DateTime $debut
     * @return Reservation
     */
    public function setDebut($debut)
    {
        $this->debut = $debut;

        return $this;
    }

    /**
     * Get debut
     *
     * @return \DateTime 
     */
    public function getDebut()
    {
        return $this->debut;
    }

    /**
     * Set statut
     *
     * @param string $statut
     * @return Reservation
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * Get statut
     *
     * @return string 
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * Set payer
     *
     * @param string $payer
     * @return Reservation
     */
    public function setPayer($payer)
    {
        $this->payer = $payer;

        return $this;
    }

    /**
     * Get payer
     *
     * @return string 
     */
    public function getPayer()
    {
        return $this->payer;
    }

    /**
     * Get idreservation
     *
     * @return integer 
     */
    public function getIdreservation()
    {
        return $this->idreservation;
    }

    /**
     * Set usersusers
     *
     * @param \ConnexionBundle\Entity\Users $usersusers
     * @return Reservation
     */
    public function setUsersusers(\ConnexionBundle\Entity\Users $usersusers = null)
    {
        $this->usersusers = $usersusers;

        return $this;
    }

    /**
     * Get usersusers
     *
     * @return \ConnexionBundle\Entity\Users 
     */
    public function getUsersusers()
    {
        return $this->usersusers;
    }

    /**
     * Set annoncesannonces
     *
     * @param \ConnexionBundle\Entity\Annonces $annoncesannonces
     * @return Reservation
     */
    public function setAnnoncesannonces(\ConnexionBundle\Entity\Annonces $annoncesannonces = null)
    {
        $this->annoncesannonces = $annoncesannonces;

        return $this;
    }

    /**
     * Get annoncesannonces
     *
     * @return \ConnexionBundle\Entity\Annonces 
     */
    public function getAnnoncesannonces()
    {
        return $this->annoncesannonces;
    }
}
