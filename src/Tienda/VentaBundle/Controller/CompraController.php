<?php

namespace Tienda\VentaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFundation\Response;

class CompraController extends Controller
{



    public function indexAction()
    {
        return $this->render('TiendaVentaBundle:compra.html.twig');
    }
}