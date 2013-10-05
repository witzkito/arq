<?php

namespace Muni\Arq\ArqBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Calle
 */
class Calle
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombreCalle;

    /**
     * @var string
     */
    private $numeroInicio;

    /**
     * @var string
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
     * Set nombreCalle
     *
     * @param string $nombreCalle
     * @return Calle
     */
    public function setNombreCalle($nombreCalle)
    {
        $this->nombreCalle = $nombreCalle;
    
        return $this;
    }

    /**
     * Get nombreCalle
     *
     * @return string 
     */
    public function getNombreCalle()
    {
        return $this->nombreCalle;
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
}
