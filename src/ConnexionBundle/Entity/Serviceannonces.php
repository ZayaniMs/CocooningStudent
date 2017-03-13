<?php

namespace ConnexionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Serviceannonces
 *
 * @ORM\Table(name="serviceannonces", indexes={@ORM\Index(name="fk_includ_Service1_idx", columns={"Service_idService"}), @ORM\Index(name="fk_includ_Annonces1_idx", columns={"Annonces_idannonces"})})
 * @ORM\Entity
 */
class Serviceannonces
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Service_idService", type="integer", nullable=true)
     */
    private $serviceIdservice;

    /**
     * @var integer
     *
     * @ORM\Column(name="Annonces_idannonces", type="integer", nullable=true)
     */
    private $annoncesIdannonces;

    /**
     * @var integer
     *
     * @ORM\Column(name="idServiceAnnonces", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idserviceannonces;

    
    function getServiceIdservice() {
        return $this->serviceIdservice;
    }

    function getAnnoncesIdannonces() {
        return $this->annoncesIdannonces;
    }

    function getIdserviceannonces() {
        return $this->idserviceannonces;
    }

    function setServiceIdservice($serviceIdservice) {
        $this->serviceIdservice = $serviceIdservice;
    }

    function setAnnoncesIdannonces($annoncesIdannonces) {
        $this->annoncesIdannonces = $annoncesIdannonces;
    }

    function setIdserviceannonces($idserviceannonces) {
        $this->idserviceannonces = $idserviceannonces;
    }



}
