<?php

namespace AccueilBundle\Entity;

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
     * @var string
     *
     * @ORM\Column(name="contenu", type="string", length=45, nullable=true)
     */
    private $contenu;

    /**
     * @var integer
     *
     * @ORM\Column(name="idcommentaire", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcommentaire;

    /**
     * @var \AccueilBundle\Entity\Users
     *
     * @ORM\ManyToOne(targetEntity="AccueilBundle\Entity\Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="proprietaire", referencedColumnName="idUsers")
     * })
     */
    private $proprietaire;

    /**
     * @var \AccueilBundle\Entity\Users
     *
     * @ORM\ManyToOne(targetEntity="AccueilBundle\Entity\Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="commenteur", referencedColumnName="idUsers")
     * })
     */
    private $commenteur;



    /**
     * Set contenu
     *
     * @param string $contenu
     * @return Commentaire
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string 
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Get idcommentaire
     *
     * @return integer 
     */
    public function getIdcommentaire()
    {
        return $this->idcommentaire;
    }

    /**
     * Set proprietaire
     *
     * @param \AccueilBundle\Entity\Users $proprietaire
     * @return Commentaire
     */
    public function setProprietaire(\AccueilBundle\Entity\Users $proprietaire = null)
    {
        $this->proprietaire = $proprietaire;

        return $this;
    }

    /**
     * Get proprietaire
     *
     * @return \AccueilBundle\Entity\Users 
     */
    public function getProprietaire()
    {
        return $this->proprietaire;
    }

    /**
     * Set commenteur
     *
     * @param \AccueilBundle\Entity\Users $commenteur
     * @return Commentaire
     */
    public function setCommenteur(\AccueilBundle\Entity\Users $commenteur = null)
    {
        $this->commenteur = $commenteur;

        return $this;
    }

    /**
     * Get commenteur
     *
     * @return \AccueilBundle\Entity\Users 
     */
    public function getCommenteur()
    {
        return $this->commenteur;
    }
}
