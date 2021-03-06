<?php

namespace AccueilBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Annonces
 *
 * @ORM\Table(name="annonces", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_CB988C6F3DA5256D", columns={"image_id"})})
 * @ORM\Entity
 */
class Annonces
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idannonces", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idannonces;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=45, nullable=true)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="prix", type="string", length=45, nullable=true)
     */
    private $prix;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=true)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="visible", type="string", length=45, nullable=true)
     */
    private $visible;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=45, nullable=true)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="codePostal", type="string", length=5, nullable=true)
     */
    private $codepostal;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=45, nullable=true)
     */
    private $ville;

    /**
     * @var \Image
     *
     * @ORM\ManyToOne(targetEntity="Image")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="image_id", referencedColumnName="id")
     * })
     */
    private $image;
    
    
     /**
     * @var \Users
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="idusers")
     * })
     */
    private $user;
    
    
    function getIdannonces() {
        return $this->idannonces;
    }

    function getAdresse() {
        return $this->adresse;
    }

    function getDescription() {
        return $this->description;
    }

    function getPrix() {
        return $this->prix;
    }

    function getDate() {
        return $this->date;
    }

    function getVisible() {
        return $this->visible;
    }

    function getTitre() {
        return $this->titre;
    }

    function getCodepostal() {
        return $this->codepostal;
    }

    function getVille() {
        return $this->ville;
    }

    function getImage() {
        return $this->image;
    }

    function setIdannonces($idannonces) {
        $this->idannonces = $idannonces;
    }

    function setAdresse($adresse) {
        $this->adresse = $adresse;
    }

    function setDescription($description) {
        $this->description = $description;
    }

    function setPrix($prix) {
        $this->prix = $prix;
    }

    function setDate(\DateTime $date) {
        $this->date = $date;
    }

    function setVisible($visible) {
        $this->visible = $visible;
    }

    function setTitre($titre) {
        $this->titre = $titre;
    }

    function setCodepostal($codepostal) {
        $this->codepostal = $codepostal;
    }

    function setVille($ville) {
        $this->ville = $ville;
    }

    function setImage(\Image $image) {
        $this->image = $image;
    }

    
    function getUser() {
        return $this->user;
    }

    function setUser(\Users $user) {
        $this->user = $user;
    }





}
