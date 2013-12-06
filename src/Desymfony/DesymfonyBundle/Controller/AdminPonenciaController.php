<?php

namespace Desymfony\DesymfonyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

use Desymfony\DesymfonyBundle\Entity\Ponencia,
    Desymfony\DesymfonyBundle\Form\PonenciaType;

class AdminPonenciaController extends Controller
{
	public function listAction()
    {
    	//Consulta a la base de datos
		//Obtener entity manager
        $em = $this->get('doctrine')->getEntityManager();

		//Toma todo del repositorio, es como si fuera la tabla 
		//En la variable ponencias estas todas 
        return $this->render('DesymfonyBundle:AdminPonencia:list.html.twig', array(
            'ponencias' => $em->getRepository('DesymfonyBundle:Ponencia')->findAll()
        ));
    }

    public function editAction($id)
    {
        $peticion = $this->get('request');
        $em = $this->get('doctrine')->getEntityManager();

        if (null == $ponencia = $em->find('DesymfonyBundle:Ponencia', $id)) {
            throw new NotFoundHttpException('No existe la ponencia que se quiere modificar');
        }

        $formulario = $this->get('form.factory')->create(new PonenciaType());
        $formulario->setData($ponencia);

        if ($peticion->getMethod() == 'POST') {
            $formulario->bindRequest($peticion);

            if ($formulario->isValid()) {
                $em->persist($ponencia);
                $em->flush();

                return $this->redirect($this->generateUrl('admin_ponencia_list'));
            }
        }

        return $this->render('DesymfonyBundle:AdminPonencia:edit.html.twig', array(
            'formulario' => $formulario->createView(),
            'ponencia'   => $ponencia
        ));
    }

    public function showAction($id)
    {
        $em = $this->get('doctrine')->getEntityManager();

        if (null == $ponencia = $em->find('DesymfonyBundle:Ponencia', $id)) {
            throw new NotFoundHttpException('No existe la ponencia que se quiere ver');
        }

        return $this->render('DesymfonyBundle:AdminPonencia:show.html.twig', array(
            'ponencia'   => $ponencia
        ));
    }
}