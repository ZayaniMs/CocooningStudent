<?php

namespace AccueilBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contact
 *
 * @ORM\Table(name="contact", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_4C62E638E7927C74", columns={"email"}), @ORM\UniqueConstraint(name="UNIQ_4C62E6389366B456", columns={"idcontact"})})
 * @ORM\Entity
 */
class Contact
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="idcontact", type="integer", nullable=true)
     */
    private $idcontact;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="subject", type="string", length=255, nullable=false)
     */
    private $subject;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="string", length=500, nullable=false)
     */
    private $message;
    
    
    function getId() {
        return $this->id;
    }

    function getIdcontact() {
        return $this->idcontact;
    }

    function getNom() {
        return $this->nom;
    }

    function getEmail() {
        return $this->email;
    }

    function getSubject() {
        return $this->subject;
    }

    function getMessage() {
        return $this->message;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setIdcontact($idcontact) {
        $this->idcontact = $idcontact;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setSubject($subject) {
        $this->subject = $subject;
    }

    function setMessage($message) {
        $this->message = $message;
    }




}
