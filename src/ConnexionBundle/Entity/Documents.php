<?php

namespace ConnexionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Documents
 *
 * @ORM\Table(name="documents", indexes={@ORM\Index(name="fk_Documents_Reservation1_idx", columns={"Reservation_idReservation"})})
 * @ORM\Entity
 */
class Documents
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idDocuments", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iddocuments;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=45, nullable=true)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="chemin", type="string", length=45, nullable=true)
     */
    private $chemin;

    /**
     * @var \Reservation
     *
     * @ORM\ManyToOne(targetEntity="Reservation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Reservation_idReservation", referencedColumnName="idReservation")
     * })
     */
    private $reservationreservation;


    function getIddocuments() {
        return $this->iddocuments;
    }

    function getType() {
        return $this->type;
    }

    function getChemin() {
        return $this->chemin;
    }

    function getReservationreservation() {
        return $this->reservationreservation;
    }

    function setIddocuments($iddocuments) {
        $this->iddocuments = $iddocuments;
    }

    function setType($type) {
        $this->type = $type;
    }

    function setChemin($chemin) {
        $this->chemin = $chemin;
    }

    function setReservationreservation(\Reservation $reservationreservation) {
        $this->reservationreservation = $reservationreservation;
    }


}
