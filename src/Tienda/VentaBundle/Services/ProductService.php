<?php
namespace Tienda\VentaBundle\Service;

use Symfony\Component\Security\Acl\Model\DomainObjectInterface;
use Doctrine\ORM\EntityManager;
use Symfony\Component\HttpFoundation\Request;
use Tienda\VentaBundle\Entity\Products;

        
        
        //Entity manager y conexión a la BD
        $em = $this->getDoctrine()->getEntityManager();
        $db = $em->getConnection();
 
        $query = "SELECT * FROM Products; ";
        $stmt = $db->prepare($query);
        $params = array('productos' => $producto);
        $stmt->execute($params);
        $producto=$stmt->fetchAll();
 
        return $producto;
        

?>