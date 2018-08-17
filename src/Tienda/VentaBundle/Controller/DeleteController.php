<?php

namespace Tienda\VentaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Tienda\VentaBundle\Entity\Cart;


class DeleteController extends Controller

{
    public function eliminarCarrito()
    {
        $service = $this->get('tienda.ventabundle.product');
        $producto = $service->eliminarCarrito();    
        return $this->render('VentaBundle:Default:index.html.twig', array('productos'=>$producto));
        
    }
}
