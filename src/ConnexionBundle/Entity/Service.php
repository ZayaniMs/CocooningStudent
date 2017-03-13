<?php

namespace ConnexionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Service
 *
 * @ORM\Table(name="service")
 * @ORM\Entity
 */
class Service
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idService", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idservice;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=45, nullable=true)
     */
    private $nom;


    function getIdservice() {
        return $this->idservice;
    }

    function getNom() {
        return $this->nom;
    }

    function setIdservice($idservice) {
        $this->idservice = $idservice;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }


}
