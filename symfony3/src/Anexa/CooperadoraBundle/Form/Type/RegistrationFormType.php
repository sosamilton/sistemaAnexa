<?php

namespace CB\InicioBundle\Form\Type;

use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;
use CB\InicioBundle\Form\SistemaType;

class RegistrationFormType extends BaseType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);
        $builder
            ->add('nombre', 'text')
            ->add('apellido', 'text')
            ->add('dni', 'text')
            ->add('fechaNacimiento', 'date',array(
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd'
                ))
            ->add('carrera', 'text')
            ->add('direccion', 'text', array(
                'label' => 'Dirección'
            ))
            ->add('telefono', 'text', array(
                'label' => 'Teléfono'
            ))
            ->add('sistemas')
            ->add('roles', 'choice', array(
            'multiple'=> true,
            'choices' => array(
                'ROLE_ADMIN' => 'Administración',
                'ROLE_USER'  => 'Edición y carga',
                'ROLE_VIEW'  => 'Solo lectura'
            ),
        ));
    }

    public function getName()
    {
        return 'inicio_user_registration';
    }
}
