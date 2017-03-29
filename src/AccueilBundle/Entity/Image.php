<?php

namespace AccueilBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Image
 *
 * @ORM\Table(name="image")
 * @ORM\Entity
 */
class Image
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
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=false)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="alt", type="string", length=255, nullable=false)
     */
    private $alt;
    
    
    function getId() {
        return $this->id;
    }

    function getUrl() {
        return $this->url;
    }

    function getAlt() {
        return $this->alt;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setUrl($url) {
        $this->url = $url;
    }

    function setAlt($alt) {
        $this->alt = $alt;
    }




}
