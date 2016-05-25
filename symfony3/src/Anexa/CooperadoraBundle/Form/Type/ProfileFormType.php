<?php

/*
 * This file is part of the FOSUserBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CB\InicioBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProfileFormType extends AbstractType 
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);
        $builder
            ->add('username')
            ->add('email')
            ->add('nombre')
            ->add('apellido')
            ->add('dni')
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
            ->add('current_password', 'password', array(
                'label' => 'form.current_password',
                'translation_domain' => 'FOSUserBundle',
                'mapped' => false,
            ))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CB\InicioBundle\Entity\Usuario',
            'intention'  => 'profile',
        ));
    }

    public function getName()
    {
        return 'inicio_main_profile';
    }
}
