<?php

namespace Tienda\VentaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Tienda\VentaBundle\Entity\Products;


class DefaultController extends Controller

{
    public function indexAction()
    {
        $algo = $servicio->obtenerProductos()
         return array('productos'=>$algo)   
        return $this->render('VentaBundle:Default:index.html.twig');
        
    }
}
