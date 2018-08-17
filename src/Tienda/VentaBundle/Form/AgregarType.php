<?php
namespace Tienda\VentaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AgregarType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('id','hidden')
            ->add('name','hidden')
            ->add('price', 'hidden')
            ->add('quantity', 'hidden');
    }

	public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Tienda\VentaBundle\Entity\Cart'
        ));
    }

    public function getName()
    {
        return '';
    }
}