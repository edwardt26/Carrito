<?php

namespace Tienda\VentaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Tienda\VentaBundle\Entity\Cart;


class DefaultController extends Controller

{
    public function indexAction()
    {
        $service = $this->get('tienda.ventabundle.cart');
        $producto = $service->mostrarCompra();    
        return $this->render('VentaBundle:Cart:cart.html.twig', array('productos'=>$producto));
        
    }
}