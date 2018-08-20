<?php

namespace Tienda\VentaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFundation\Response;

class CarritoController extends Controller
{



    public function indexAction()
    {
        return $this->render('TiendaVentaBundle:cart.html.twig');
    }
}