<?php

namespace Muni\Arq\ArqBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Propiedad
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Muni\Arq\ArqBundle\Entity\PropiedadRepository")
 */
class Propiedad
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
     * @ORM\Column(name="numero", type="string", length=10)
     */
    private $numero;

    /**
     * @var string
     *
     * @ORM\Column(name="seccion", type="string", length=10)
     */
    private $seccion;

    /**
     * @var string
     *
     * @ORM\Column(name="manzana", type="string", length=10)
     */
    private $manzana;

    /**
     * @var string
     *
     * @ORM\Column(name="parcela", type="string", length=10)
     */
    private $parcela;

    /**
     * @var string
     *
     * @ORM\Column(name="lote", type="string", length=10)
     */
    private $lote;

    /**
     * @var string
     *
     * @ORM\Column(name="categoria", type="string", length=45)
     */
    private $categoria;

    /**
     * @var string
     *
     * @ORM\Column(name="partida", type="string", length=10)
     */
    private $partida;


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
     * Set numero
     *
     * @param string $numero
     * @return Propiedad
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
     * Set seccion
     *
     * @param string $seccion
     * @return Propiedad
     */
    public function setSeccion($seccion)
    {
        $this->seccion = $seccion;
    
        return $this;
    }

    /**
     * Get seccion
     *
     * @return string 
     */
    public function getSeccion()
    {
        return $this->seccion;
    }

    /**
     * Set manzana
     *
     * @param string $manzana
     * @return Propiedad
     */
    public function setManzana($manzana)
    {
        $this->manzana = $manzana;
    
        return $this;
    }

    /**
     * Get manzana
     *
     * @return string 
     */
    public function getManzana()
    {
        return $this->manzana;
    }

    /**
     * Set parcela
     *
     * @param string $parcela
     * @return Propiedad
     */
    public function setParcela($parcela)
    {
        $this->parcela = $parcela;
    
        return $this;
    }

    /**
     * Get parcela
     *
     * @return string 
     */
    public function getParcela()
    {
        return $this->parcela;
    }

    /**
     * Set lote
     *
     * @param string $lote
     * @return Propiedad
     */
    public function setLote($lote)
    {
        $this->lote = $lote;
    
        return $this;
    }

    /**
     * Get lote
     *
     * @return string 
     */
    public function getLote()
    {
        return $this->lote;
    }

    /**
     * Set categoria
     *
     * @param string $categoria
     * @return Propiedad
     */
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;
    
        return $this;
    }

    /**
     * Get categoria
     *
     * @return string 
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * Set partida
     *
     * @param string $partida
     * @return Propiedad
     */
    public function setPartida($partida)
    {
        $this->partida = $partida;
    
        return $this;
    }

    /**
     * Get partida
     *
     * @return string 
     */
    public function getPartida()
    {
        return $this->partida;
    }
    
     /**
     * @ORM\ManyToOne(targetEntity="Calle", inversedBy="Propiedad")
     * @ORM\JoinColumn(name="calle_id", referencedColumnName="id")
     * @return integer
     */
    private $calle;
    public function setCalle(\Muni\Arq\Entity\Calle $calle)
    {
        $this->calle = $calle;
    }

    public function getCalle()
    {
        return $this->calle;
    }
    
     /**
     * @ORM\ManyToOne(targetEntity="Ciudadano", inversedBy="Propiedad")
     * @ORM\JoinColumn(name="ciudadano_id", referencedColumnName="id")
     * @return integer
     */
    private $ciudadano;
    public function setCiudadano(\Muni\Arq\Entity\Calle $ciudadano)
    {
        $this->ciudadano = $ciudadano;
    }

    public function getCiudadano()
    {
        return $this->ciudadano;
    }
}
