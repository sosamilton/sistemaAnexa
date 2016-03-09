<?php

namespace Anexa\CooperadoraBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateType;


class CuotaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('anio', IntegerType::class, array('label' => 'Año'))
            ->add('mes', IntegerType::class, array('label' => 'Mes'))
            ->add('numero', IntegerType::class, array('label' => 'Número de Cuota'))
            ->add('monto', NumberType::class, array('label' =>'Monto'))
            ->add('tipo', ChoiceType::class, array(
                                    'choices'  => array(
                                        'Mensual' => 'mensual',
                                        'Matrícula' => 'matricula'),
                                    'label' => 'Tipo')
                )
            ->add('comisionCobrador', NumberType::class, array(
                                                            'label' =>'Comisión del Cobrador',
                                                             'scale' => 1))
            ->add('fechaAlta',DateType::class, array(
                                                'widget' => 'single_text', 
                                                'html5' => true, 
                                                'label' => 'Fecha de Alta'))
            ->add('button', SubmitType::class)
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Anexa\CooperadoraBundle\Entity\Cuota'
        ));
    }
}
