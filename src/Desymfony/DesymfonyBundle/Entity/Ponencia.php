<?php

namespace Desymfony\DesymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

use Desymfony\DesymfonyBundle\Resources\util\Util;

/**
 * Desymfony\DesymfonyBundle\Entity
 *
 * @ORM\Table(name="ponencia")
 * @ORM\Entity(repositoryClass="Desymfony\DesymfonyBundle\Entity\PonenciaRepository")
 */
class Ponencia
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank()
     */
    protected $title;

    /**
     * @ORM\Column(type="string")
     */
    protected $slug;

    /**
     * @ORM\Column(type="text")
     * @Assert\NotBlank()
     */
    protected $description;

    /**
     * @ORM\Column(type="date")
     * @Assert\Date()
     */
    protected $fecha;

    /**
     * @ORM\Column(type="time")
     * @Assert\Time()
     */
    protected $hora;

    /**
     * @ORM\Column(type="integer")
     */
    protected $duracion;

    /**
     * @ORM\Column(type="string")
     */
    protected $idioma;

    /**
     * @ORM\ManyToOne(targetEntity="Ponente", inversedBy="ponencias", cascade={"remove"})
     * @ORM\JoinColumn(name="ponente_id", referencedColumnName="id")
     */
    protected $ponente;

    /**
     * @ORM\ManyToMany(targetEntity="Usuario", inversedBy="ponencias")
     * @ORM\JoinTable(name="ponencia_usuario",
     *      joinColumns={@ORM\JoinColumn(name="ponencia_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="usuario_id", referencedColumnName="id")}
     * )
     */
    protected $usuarios;

    public function __construct()
    {
        $this->usuarios = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function __toString()
    {
        return $this->gettitle();
    }

    /**
     * Get id
     *
     * @return integer $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     */
    public function settTitle($title)
    {
        $this->title = $title;
        $this->setSlug(Util::slugify($title));
    }

    /**
     * Get title
     *
     * @return string $title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set slug
     *
     * @param string $slug
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
    }

    /**
     * Get slug
     *
     * @return string $slug
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set description
     *
     * @param text $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Get description
     *
     * @return text $description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set fecha
     *
     * @param date $fecha
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }

    /**
     * Get fecha
     *
     * @return date $fecha
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set hora
     *
     * @param time $hora
     */
    public function setHora($hora)
    {
        $this->hora = $hora;
    }

    /**
     * Get hora
     *
     * @return time $hora
     */
    public function getHora()
    {
        return $this->hora;
    }

    /**
     * Get horaFinalizacion
     *
     * @return time $horafinalizacion
     */
    public function getHoraFinalizacion()
    {
        return $this->hora->add(new \DateInterval('PT'. $this->duracion . 'M'));
    }

    /**
     * Set duracion
     *
     * @param integer $duracion
     */
    public function setDuracion($duracion)
    {
        $this->duracion = $duracion;
    }

    /**
     * Get duracion
     *
     * @return integer $duracion
     */
    public function getDuracion()
    {
        return $this->duracion;
    }

    /**
     * Set idioma
     *
     * @param string $idioma
     */
    public function setIdioma($idioma)
    {
        $this->idioma = $idioma;
    }

    /**
     * Get idioma
     *
     * @return string $idioma
     */
    public function getIdioma()
    {
        return $this->idioma;
    }

    /**
     * Set ponente
     *
     * @param Desymfony\DesymfonyBundle\Entity\Ponente $ponente
     */
    public function setPonente(\Desymfony\DesymfonyBundle\Entity\Ponente $ponente)
    {
        $this->ponente = $ponente;
    }

    /**
     * Get ponente
     *
     * @return Desymfony\DesymfonyBundle\Entity\Ponente $ponente
     */
    public function getPonente()
    {
        return $this->ponente;
    }

    /**
     * Add usuarios
     *
     * @param Desymfony\DesymfonyBundle\Entity\Usuario $usuarios
     */
    public function addUsuarios(\Desymfony\DesymfonyBundle\Entity\Usuario $usuario)
    {
        if (!$this->hasUsuario($usuario)) {
            $this->usuarios[] = $usuario;
            return true;
        }

        return false;
    }

    public function hasUsuario(\Desymfony\DesymfonyBundle\Entity\Usuario $usuario)
    {
        foreach ($this->usuarios as $value) {
            if ($value->getId() == $usuario->getId()) {
                return true;
            }
        }

        return false;
    }



    /**
     * Get usuarios
     *
     * @return Doctrine\Common\Collections\Collection $usuarios
     */
    public function getUsuarios()
    {
        return $this->usuarios;
    }
}
