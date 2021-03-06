<?php

namespace Desymfony\DesymfonyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PonenteController extends Controller
{
	//Los controladores obtienes datos del model y lo llevan a una vista
    public function indexAction()
    {
        $em = $this->get('doctrine')->getEntityManager();
        $ponentes = $em->getRepository('DesymfonyBundle:Ponente')->findTodosAlfabeticamente();

        return $this->render('DesymfonyBundle:Ponente:index.html.twig', array(
            'ponentes' => $ponentes
        ));
    }
}