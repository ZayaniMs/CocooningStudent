<?php

namespace AccueilBundle\Entity;

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
     * @var integer
     *
     * @ORM\Column(name="idPhoto", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idphoto;

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
     * Set chemin
     *
     * @param string $chemin
     * @return Photo
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
     * Set pcouv
     *
     * @param string $pcouv
     * @return Photo
     */
    public function setPcouv($pcouv)
    {
        $this->pcouv = $pcouv;

        return $this;
    }

    /**
     * Get pcouv
     *
     * @return string 
     */
    public function getPcouv()
    {
        return $this->pcouv;
    }

    /**
     * Get idphoto
     *
     * @return integer 
     */
    public function getIdphoto()
    {
        return $this->idphoto;
    }

    /**
     * Set annoncesannonces
     *
     * @param \AccueilBundle\Entity\Annonces $annoncesannonces
     * @return Photo
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
