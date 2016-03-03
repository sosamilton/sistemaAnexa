<?php

namespace Anexa\CooperadoraBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ResponsableType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('borrado')
            ->add('tipoDNI')
            ->add('dni')
            ->add('tipoResponsable')
            ->add('apellido')
            ->add('nombre')
            ->add('fechaNacimiento')
            ->add('sexo')
            ->add('email')
            ->add('telefono')
            ->add('direccion')
            ->add('alumnos')
            ->add('user')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Anexa\CooperadoraBundle\Entity\Responsable'
        ));
    }
}
