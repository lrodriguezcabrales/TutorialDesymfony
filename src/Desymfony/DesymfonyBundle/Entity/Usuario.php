<?php

namespace Desymfony\DesymfonyBundle\Entity;

use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Desymfony\DesymfonyBundle\Validator\DNI;

/**
 * Desymfony\DesymfonyBundle\Entity
 *
 * @ORM\Table(name="usuario")
 * @ORM\Entity
 */

class Usuario implements UserInterface
{
    //El usuario es el correo
    public function getUsername()
    {
        return $this->email;
    }

    //Incrementar dificultad de password
    public function getSalt()
    {
        return false;
    }

    public function getRoles()
    {
        return array('ROLE_USER');
    }

    //Metodo que se invoca una vez que el usuario se desautentica
    public function eraseCredentials()
    {
        return false;
    }

    //Cuando el usuario es igual a ese usuario
    public function equals(UserInterface $user)
    {
        return $user->getUsername() == $this->getUsername();
    }

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
    * @ORM\Column(type="string")
    */
    protected $nombre;

    /**
    * @ORM\Column(type="string")
    */
    protected $apellidos;

    /**
    * @ORM\Column(type="string")
    */
    protected $dni;

    /**
    * @ORM\Column(type="string")
    */
    protected $direccion;

    /**
    * @ORM\Column(type="string")
    * @Assert\NotBlank()
    */
    protected $telefono;

    /**
    * @ORM\Column(type="string")
    * @Assert\NotBlank()
    * @Assert\Email()
    */
    protected $email;

    /**
    * @ORM\Column(type="string")
    * @Assert\NotBlank()
    */
    protected $password;

    /**
    * @ORM\ManyToMany(targetEntity="Ponencia", mappedBy="usuarios")
    */
    protected $ponencias;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->ponencias = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
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
     * @return Usuario
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
     * Set apellidos
     *
     * @param string $apellidos
     * @return Usuario
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;
    
        return $this;
    }

    /**
     * Get apellidos
     *
     * @return string 
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set dni
     *
     * @param string $dni
     * @return Usuario
     */
    public function setDni($dni)
    {
        $this->dni = $dni;
    
        return $this;
    }

    /**
     * Get dni
     *
     * @return string 
     */
    public function getDni()
    {
        return $this->dni;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     * @return Usuario
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    
        return $this;
    }

    /**
     * Get direccion
     *
     * @return string 
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     * @return Usuario
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    
        return $this;
    }

    /**
     * Get telefono
     *
     * @return string 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Usuario
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return Usuario
     */
    public function setPassword($password)
    {
        $this->password = $password;
    
        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Add ponencias
     *
     * @param \Desymfony\DesymfonyBundle\Entity\Ponencia $ponencias
     * @return Usuario
     */
    public function addPonencia(\Desymfony\DesymfonyBundle\Entity\Ponencia $ponencias)
    {
        $this->ponencias[] = $ponencias;
    
        return $this;
    }

    /**
     * Remove ponencias
     *
     * @param \Desymfony\DesymfonyBundle\Entity\Ponencia $ponencias
     */
    public function removePonencia(\Desymfony\DesymfonyBundle\Entity\Ponencia $ponencias)
    {
        $this->ponencias->removeElement($ponencias);
    }

    /**
     * Get ponencias
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPonencias()
    {
        return $this->ponencias;
    }
}