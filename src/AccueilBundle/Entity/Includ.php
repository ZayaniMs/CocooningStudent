<?php

namespace AccueilBundle\Entity;

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
     * @var \AccueilBundle\Entity\Service
     *
     * @ORM\ManyToOne(targetEntity="AccueilBundle\Entity\Service")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Service_idService", referencedColumnName="idService")
     * })
     */
    private $serviceservice;

    /**
     * @var \AccueilBundle\Entity\Annonces
     *
     * @ORM\ManyToOne(targetEntity="AccueilBundle\Entity\Annonces")
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
     * @param \AccueilBundle\Entity\Service $serviceservice
     * @return Includ
     */
    public function setServiceservice(\AccueilBundle\Entity\Service $serviceservice = null)
    {
        $this->serviceservice = $serviceservice;

        return $this;
    }

    /**
     * Get serviceservice
     *
     * @return \AccueilBundle\Entity\Service 
     */
    public function getServiceservice()
    {
        return $this->serviceservice;
    }

    /**
     * Set annoncesannonces
     *
     * @param \AccueilBundle\Entity\Annonces $annoncesannonces
     * @return Includ
     */
    public function setAnnoncesannonces(\AccueilBundle\Entity\Annonces $annoncesannonces = null)
    {
        $this->annoncesannonces = $annoncesannonces;

        return $this;
    }

    /**
     * Get annoncesannonces
     *
     * @return \AccueilBundle\Entity\Annonces 
     */
    public function getAnnoncesannonces()
    {
        return $this->annoncesannonces;
    }
}
