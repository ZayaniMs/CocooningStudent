<?php

namespace ConnexionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Includ
 *
 * @ORM\Table(name="includ", indexes={@ORM\Index(name="fk_includ_Service1_idx", columns={"Service_idService"}), @ORM\Index(name="fk_includ_Annonces1_idx", columns={"Annonces_idannonces"})})
 * @ORM\Entity
 */
class Includ
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idinclud", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idinclud;

    /**
     * @var \ConnexionBundle\Entity\Service
     *
     * @ORM\ManyToOne(targetEntity="ConnexionBundle\Entity\Service")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Service_idService", referencedColumnName="idService")
     * })
     */
    private $serviceservice;

    /**
     * @var \ConnexionBundle\Entity\Annonces
     *
     * @ORM\ManyToOne(targetEntity="ConnexionBundle\Entity\Annonces")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Annonces_idannonces", referencedColumnName="idannonces")
     * })
     */
    private $annoncesannonces;



    /**
     * Get idinclud
     *
     * @return integer 
     */
    public function getIdinclud()
    {
        return $this->idinclud;
    }

    /**
     * Set serviceservice
     *
     * @param \ConnexionBundle\Entity\Service $serviceservice
     * @return Includ
     */
    public function setServiceservice(\ConnexionBundle\Entity\Service $serviceservice = null)
    {
        $this->serviceservice = $serviceservice;

        return $this;
    }

    /**
     * Get serviceservice
     *
     * @return \ConnexionBundle\Entity\Service 
     */
    public function getServiceservice()
    {
        return $this->serviceservice;
    }

    /**
     * Set annoncesannonces
     *
     * @param \ConnexionBundle\Entity\Annonces $annoncesannonces
     * @return Includ
     */
    public function setAnnoncesannonces(\ConnexionBundle\Entity\Annonces $annoncesannonces = null)
    {
        $this->annoncesannonces = $annoncesannonces;

        return $this;
    }

    /**
     * Get annoncesannonces
     *
     * @return \ConnexionBundle\Entity\Annonces 
     */
    public function getAnnoncesannonces()
    {
        return $this->annoncesannonces;
    }
}
