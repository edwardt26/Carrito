<?php
namespace Tienda\VentaBundle\Services;

use Symfony\Component\Security\Acl\Model\DomainObjectInterface;
use Doctrine\ORM\EntityManager;
use Symfony\Component\HttpFoundation\Request;
use Tienda\VentaBundle\Entity\Product;

class ProductService {
        
        protected $entityManager;

        public function __construct(EntityManager $entityManager) {
                $this->entityManager = $entityManager;
                }

        public function listarProductos(){
        
        //Entity manager y conexión a la BD
        
        $db = $this->entityManager->getConnection();
        

        $query = "SELECT * FROM Products; ";
        $stmt = $db->prepare($query);
        $stmt->execute();
        $producto=$stmt->fetchAll();
 
        return $producto;
        
        }

}
?>