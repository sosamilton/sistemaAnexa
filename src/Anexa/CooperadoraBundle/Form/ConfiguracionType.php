<?php

namespace Anexa\CooperadoraBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class ConfiguracionType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titulo', TextType::class, array('label' => 'Título'))
            ->add('descripcion', TextType::class, array('label' => 'Descripción del sitio'))
            ->add('email', TextType::class, array('label' => 'Email de contacto'))
            ->add('paginacion', TextType::class, array('label' => 'Paginacion'))
            ->add('estado_sitio', TextType::class, array('label' => 'Estado del sitio'))
            ->add('mensaje_deshabilitado', TextType::class, array('label' => 'Mensaje del sitio deshabilitado'))
            ->add('button', SubmitType::class)
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Anexa\CooperadoraBundle\Entity\Configuracion'
        ));
    }
}
