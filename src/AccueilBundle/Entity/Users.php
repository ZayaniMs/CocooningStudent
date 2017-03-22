<?php

namespace AccueilBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Users
 *
 * @ORM\Table(name="users")
 * @ORM\Entity
 */
class Users
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idUsers", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idusers;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=45, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="Prenom", type="string", length=45, nullable=true)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="mdp", type="string", length=45, nullable=true)
     */
    private $mdp;

    /**
     * @var string
     *
     * @ORM\Column(name="addresse", type="string", length=45, nullable=true)
     */
    private $addresse;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=45, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=10, nullable=true)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="codePostall", type="string", length=5, nullable=true)
     */
    private $codepostall;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=45, nullable=true)
     */
    private $ville;
    
    
    
    
    function getIdusers() {
        return $this->idusers;
    }

    function getNom() {
        return $this->nom;
    }

    function getPrenom() {
        return $this->prenom;
    }

    function getMdp() {
        return $this->mdp;
    }

    function getAddresse() {
        return $this->addresse;
    }

    function getEmail() {
        return $this->email;
    }

    function getTelephone() {
        return $this->telephone;
    }

    function getCodepostall() {
        return $this->codepostall;
    }

    function getVille() {
        return $this->ville;
    }

    function setIdusers($idusers) {
        $this->idusers = $idusers;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    function setMdp($mdp) {
        $this->mdp = $mdp;
    }

    function setAddresse($addresse) {
        $this->addresse = $addresse;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setTelephone($telephone) {
        $this->telephone = $telephone;
    }

    function setCodepostall($codepostall) {
        $this->codepostall = $codepostall;
    }

    function setVille($ville) {
        $this->ville = $ville;
    }




}
