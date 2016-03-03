<?php

namespace Anexa\CooperadoraBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AlumnoType extends AbstractType
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
            ->add('apellido')
            ->add('nombre')
            ->add('sexo')
            ->add('calle')
            ->add('numero')
            ->add('ciudad')
            ->add('provincia')
            ->add('codigoPostal')
            ->add('pais')
            ->add('telefono')
            ->add('email')
            ->add('latitud')
            ->add('longitud')
            ->add('responsables')
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Anexa\CooperadoraBundle\Entity\Alumno'
        ));
    }
}
