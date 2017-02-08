<?php

namespace AccueilBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Annonces
 *
 * @ORM\Table(name="annonces", indexes={@ORM\Index(name="fk_Annonces_Adresse_idx", columns={"Adresse_idAdresse"})})
 * @ORM\Entity
 */
class Annonces
{
    /**
     * @var string
     *
     * @ORM\Column(name="rue", type="string", length=45, nullable=true)
     */
    private $rue;

    /**
     * @var string
     *
     * @ORM\Column(name="numero", type="string", length=45, nullable=true)
     */
    private $numero;

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
     * @var integer
     *
     * @ORM\Column(name="idannonces", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idannonces;

    /**
     * @var \AccueilBundle\Entity\Adresse
     *
     * @ORM\ManyToOne(targetEntity="AccueilBundle\Entity\Adresse")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Adresse_idAdresse", referencedColumnName="idAdresse")
     * })
     */
    private $adresseadresse;



    /**
     * Set rue
     *
     * @param string $rue
     * @return Annonces
     */
    public function setRue($rue)
    {
        $this->rue = $rue;

        return $this;
    }

    /**
     * Get rue
     *
     * @return string 
     */
    public function getRue()
    {
        return $this->rue;
    }

    /**
     * Set numero
     *
     * @param string $numero
     * @return Annonces
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return string 
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Annonces
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set prix
     *
     * @param string $prix
     * @return Annonces
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return string 
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Annonces
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set visible
     *
     * @param string $visible
     * @return Annonces
     */
    public function setVisible($visible)
    {
        $this->visible = $visible;

        return $this;
    }

    /**
     * Get visible
     *
     * @return string 
     */
    public function getVisible()
    {
        return $this->visible;
    }

    /**
     * Get idannonces
     *
     * @return integer 
     */
    public function getIdannonces()
    {
        return $this->idannonces;
    }

    /**
     * Set adresseadresse
     *
     * @param \AccueilBundle\Entity\Adresse $adresseadresse
     * @return Annonces
     */
    public function setAdresseadresse(\AccueilBundle\Entity\Adresse $adresseadresse = null)
    {
        $this->adresseadresse = $adresseadresse;

        return $this;
    }

    /**
     * Get adresseadresse
     *
     * @return \AccueilBundle\Entity\Adresse 
     */
    public function getAdresseadresse()
    {
        return $this->adresseadresse;
    }
}
