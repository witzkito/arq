<?php

namespace Muni\Arq\ArqBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Calle
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Muni\Arq\ArqBundle\Entity\CalleRepository")
 */
class Calle
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=100)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_inicio", type="string", length=10)
     */
    private $numeroInicio;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_fin", type="string", length=10)
     */
    private $numeroFin;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Calle
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    
        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set numeroInicio
     *
     * @param string $numeroInicio
     * @return Calle
     */
    public function setNumeroInicio($numeroInicio)
    {
        $this->numeroInicio = $numeroInicio;
    
        return $this;
    }

    /**
     * Get numeroInicio
     *
     * @return string 
     */
    public function getNumeroInicio()
    {
        return $this->numeroInicio;
    }

    /**
     * Set numeroFin
     *
     * @param string $numeroFin
     * @return Calle
     */
    public function setNumeroFin($numeroFin)
    {
        $this->numeroFin = $numeroFin;
    
        return $this;
    }

    /**
     * Get numeroFin
     *
     * @return string 
     */
    public function getNumeroFin()
    {
        return $this->numeroFin;
    }
    
    /**
     * @ORM\OneToMany(targetEntity="Propiedad", mappedBy="Calle")
     */
    private $propiedad;
    public function __construct()
    {
        $this->propiedad = new \Doctrine\Common\Collections\ArrayCollection();
    }
    public function addPropiedad(\Mdw\BlogBundle\Entity\Comments $propiedad)
    {
        $this->propiedad[] = $propiedad;
    }

    public function getPropiedad()
    {
        return $this->propiedad;
    }
   
}
