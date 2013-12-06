<?php

namespace Desymfony\DesymfonyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;

use Desymfony\DesymfonyBundle\Form\UsuarioType;

class UsuarioController extends Controller
{

	public function loginAction(){

		return $this->render('DesymfonyBundle:Usuario:login.html.twig' , array(
				'last_username' => $this->get('request')
										->getSession()
										->get('SecurityContext::LAST_USERNAME'),

				'error' 		=> $this->get('request')
										->getSession()
										->get('SecurityContext::AUTHENTICATION_ERROR'),										

			));
	}

    public function registroAction(){
    	//Instanciar formulario
    	$form = $this->get('form.factory')->create(
    			new UsuarioType(), //Nuevo formulario
    			array() //Valores por defecto para el formulario en este caso vacios

    	);

    	//Recoger la peticion
    	 $request = $this->get('request');

    	//El metodo de la peticion sea de tipo POST
    	if($request->getMethod() == 'POST'){

    		//Vincular el formulario a la peticion    		
			$form->bind($request);

    		//Es valido el formulario?
    		if($form->isValid()){
    			//
    		}
    	}

    	/*Pasar el formulario a la vista
    	  Por medio de array con el nombre de la variable con la que se lo pasamos a la vista y el nombre del 
    	  formulario
    	*/
    	return $this->render("DesymfonyBundle:Usuario:registro.html.twig", array('form' => $form->createView()));
        	
    }
}