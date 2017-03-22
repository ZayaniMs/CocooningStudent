<?php

namespace AccueilBundle\Entity;

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
     * @var \Users
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Users_idUsers", referencedColumnName="idUsers")
     * })
     */
    private $usersusers;

    /**
     * @var \Annonces
     *
     * @ORM\ManyToOne(targetEntity="Annonces")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Annonces_idannonces", referencedColumnName="idannonces")
     * })
     */
    private $annoncesannonces;


}
