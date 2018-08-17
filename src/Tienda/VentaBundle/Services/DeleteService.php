<?php
namespace Tienda\VentaBundle\Services;

use Symfony\Component\Security\Acl\Model\DomainObjectInterface;
use Doctrine\ORM\EntityManager;
use Symfony\Component\HttpFoundation\Request;
use Tienda\VentaBundle\Entity\Cart;

class DeleteService{

    public function eliminarCarrito()
    {
        $entityManager = $this->getDoctrine()->getManager();
        $product = $entityManager->getRepository(Cart::class);

        $entityManager->remove($producto);
        $entityManager->flush();;

        return $producto;
    }
}
?>