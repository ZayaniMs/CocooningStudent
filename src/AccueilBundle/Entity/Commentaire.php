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
     *   @ORM\JoinColumn(name="proprietaire", referencedColumnName="idUsers")
     * })
     */
    private $proprietaire;

    /**
     * @var \Users
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="commenteur", referencedColumnName="idUsers")
     * })
     */
    private $commenteur;


}
