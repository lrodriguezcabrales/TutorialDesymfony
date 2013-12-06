<?php

namespace Desymfony\DesymfonyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('DesymfonyBundle:Default:index.html.twig', array('name' => $name));
    }

    // public function contactoAction()
    // {
    //     #return new Response("Contacto");
    //     return $this->render(
    //     	'DesymfonyBundle:Default:contacto.html.twig'
    //     );
    // }

    public function estaticaAction($nombre)
    {
        return $this->render(
        	'DesymfonyBundle:Estaticas:'.$nombre.'.html.twig'
        );
    }
}






