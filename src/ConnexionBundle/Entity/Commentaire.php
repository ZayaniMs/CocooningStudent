<?php

namespace ConnexionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commentaire
 *
 * @ORM\Table(name="commentaire", indexes={@ORM\Index(name="fk_Commentaire_Users1_idx", columns={"commenteur"}), @ORM\Index(name="fk_Commentaire_Users2_idx", columns={"proprietaire"})})
 * @ORM\Entity
 */
class Commentaire
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idcommentaire", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcommentaire;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="string", length=45, nullable=true)
     */
    private $contenu;

    /**
     * @var \Users
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="commenteur", referencedColumnName="idUsers")
     * })
     */
    private $commenteur;

    /**
     * @var \Users
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="proprietaire", referencedColumnName="idUsers")
     * })
     */
    private $proprietaire;


    function getIdcommentaire() {
        return $this->idcommentaire;
    }

    function getContenu() {
        return $this->contenu;
    }

    function getCommenteur() {
        return $this->commenteur;
    }

    function getProprietaire() {
        return $this->proprietaire;
    }

    function setIdcommentaire($idcommentaire) {
        $this->idcommentaire = $idcommentaire;
    }

    function setContenu($contenu) {
        $this->contenu = $contenu;
    }

    function setCommenteur(\Users $commenteur) {
        $this->commenteur = $commenteur;
    }

    function setProprietaire(\Users $proprietaire) {
        $this->proprietaire = $proprietaire;
    }


}
