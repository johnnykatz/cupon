<?php

namespace Cupon\OfertaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function ayudaAction()
    {
    	//return new Response('Ayuda');   
    	return $this->render('OfertaBundle:Sitio:ayuda.html.twig');    
    }
    public function portadaAction()
	{
		$em = $this->getDoctrine()->getManager();
		$oferta = $em->getRepository('OfertaBundle:Oferta')->findOneBy(array(
			'ciudad'=>1,			
			'fechaPublicacion'=> new \DateTime("now")ddddd));
		return $this->render(
			'OfertaBundle:Default:portada.html.twig',
			array('oferta'=>$oferta)
			);
		
	}
}
