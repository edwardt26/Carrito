<?php

namespace Tienda\VentaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFundation\Response;
use Symfony\Component\HttpFundation\Request;


class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('VentaBundle:Default:index.html.twig');
    }
}
