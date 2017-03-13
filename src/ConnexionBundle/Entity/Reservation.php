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
     * @var integer
     *
     * @ORM\Column(name="idReservation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idreservation;

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
     * @var \Annonces
     *
     * @ORM\ManyToOne(targetEntity="Annonces")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Annonces_idannonces", referencedColumnName="idannonces")
     * })
     */
    private $annoncesannonces;

    /**
     * @var \Users
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Users_idUsers", referencedColumnName="idUsers")
     * })
     */
    private $usersusers;


    function getIdreservation() {
        return $this->idreservation;
    }

    function getDebut() {
        return $this->debut;
    }

    function getStatut() {
        return $this->statut;
    }

    function getPayer() {
        return $this->payer;
    }

    function getAnnoncesannonces() {
        return $this->annoncesannonces;
    }

    function getUsersusers() {
        return $this->usersusers;
    }

    function setIdreservation($idreservation) {
        $this->idreservation = $idreservation;
    }

    function setDebut(\DateTime $debut) {
        $this->debut = $debut;
    }

    function setStatut($statut) {
        $this->statut = $statut;
    }

    function setPayer($payer) {
        $this->payer = $payer;
    }

    function setAnnoncesannonces(\Annonces $annoncesannonces) {
        $this->annoncesannonces = $annoncesannonces;
    }

    function setUsersusers(\Users $usersusers) {
        $this->usersusers = $usersusers;
    }


}
