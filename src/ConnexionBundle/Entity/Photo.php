<?php

namespace ConnexionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Photo
 *
 * @ORM\Table(name="photo", indexes={@ORM\Index(name="fk_Photo_Annonces1_idx", columns={"Annonces_idannonces"})})
 * @ORM\Entity
 */
class Photo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idPhoto", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idphoto;

    /**
     * @var string
     *
     * @ORM\Column(name="chemin", type="string", length=45, nullable=true)
     */
    private $chemin;

    /**
     * @var string
     *
     * @ORM\Column(name="pcouv", type="string", length=45, nullable=true)
     */
    private $pcouv;

    /**
     * @var \Annonces
     *
     * @ORM\ManyToOne(targetEntity="Annonces")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Annonces_idannonces", referencedColumnName="idannonces")
     * })
     */
    private $annoncesannonces;


    function getIdphoto() {
        return $this->idphoto;
    }

    function getChemin() {
        return $this->chemin;
    }

    function getPcouv() {
        return $this->pcouv;
    }

    function getAnnoncesannonces() {
        return $this->annoncesannonces;
    }

    function setIdphoto($idphoto) {
        $this->idphoto = $idphoto;
    }

    function setChemin($chemin) {
        $this->chemin = $chemin;
    }

    function setPcouv($pcouv) {
        $this->pcouv = $pcouv;
    }

    function setAnnoncesannonces(\Annonces $annoncesannonces) {
        $this->annoncesannonces = $annoncesannonces;
    }


}
