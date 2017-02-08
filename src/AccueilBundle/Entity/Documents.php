<?php

namespace AccueilBundle\Entity;

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
     * @var integer
     *
     * @ORM\Column(name="idDocuments", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iddocuments;

    /**
     * @var \AccueilBundle\Entity\Reservation
     *
     * @ORM\ManyToOne(targetEntity="AccueilBundle\Entity\Reservation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Reservation_idReservation", referencedColumnName="idReservation")
     * })
     */
    private $reservationreservation;



    /**
     * Set type
     *
     * @param string $type
     * @return Documents
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set chemin
     *
     * @param string $chemin
     * @return Documents
     */
    public function setChemin($chemin)
    {
        $this->chemin = $chemin;

        return $this;
    }

    /**
     * Get chemin
     *
     * @return string 
     */
    public function getChemin()
    {
        return $this->chemin;
    }

    /**
     * Get iddocuments
     *
     * @return integer 
     */
    public function getIddocuments()
    {
        return $this->iddocuments;
    }

    /**
     * Set reservationreservation
     *
     * @param \AccueilBundle\Entity\Reservation $reservationreservation
     * @return Documents
     */
    public function setReservationreservation(\AccueilBundle\Entity\Reservation $reservationreservation = null)
    {
        $this->reservationreservation = $reservationreservation;

        return $this;
    }

    /**
     * Get reservationreservation
     *
     * @return \AccueilBundle\Entity\Reservation 
     */
    public function getReservationreservation()
    {
        return $this->reservationreservation;
    }
}
