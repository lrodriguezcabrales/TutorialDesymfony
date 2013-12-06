<?php

namespace Desymfony\DesymfonyBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
//use Symfony\Component\Form\FormBuilder;

class UsuarioType extends AbstractType
{

	//public function buildForm(FormBuilder $builder, array $options)
	public function buildForm(FormBuilderInterface $builder, array $options)
    {
    	//Los campos que se añaden al formulario
        $builder->add('nombre', 'text', array());
        $builder->add('apellidos');
        $builder->add('dni', 'text', array('label' => 'DNI'));
        $builder->add('telefono');
        $builder->add('direccion', 'textarea');
        $builder->add('email', 'email');
        $builder->add('password', 'repeated', array('first_name' => 'Clave'));
    }

    //Se encarga de poblar el fomrulario con opcione por defecto
    public function getDefaultOptions(array $options)
    {
    	//Nombre completo de la clase Desymfony\DesymfonyBundle\Entity\Usuario
        return array(
            'data_class' => 'Desymfony\DesymfonyBundle\Entity\Usuario',
        );
    }

	public function getName()
    {
        return 'Usuario';
    }
   
	
}