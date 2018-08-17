<?php

namespace Tienda\VentaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Tienda\VentaBundle\Entity\Products;


class DefaultController extends Controller

{
    public function indexAction()
    {
        $service = $this->get('tienda.ventabundle.product');
        $producto = $service->listarProductos();    
        return $this->render('VentaBundle:Default:index.html.twig', array('productos'=>$producto));
        
    }
}
