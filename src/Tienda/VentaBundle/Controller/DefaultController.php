<?php

namespace Tienda\VentaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Tienda\VentaBundle\Entity\Products;


class DefaultController extends Controller

{
    public function indexAction()
    {
        
        $em = $this->getDoctrine()->getEntityManager();
        $productos = $em->getRepository('Tienda:Products')->findAll();     
        return $this->render('VentaBundle:Default:index.html.twig', array('productos' => $productos));
        
    }
}
