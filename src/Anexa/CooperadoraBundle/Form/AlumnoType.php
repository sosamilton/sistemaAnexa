<?php

namespace Anexa\CooperadoraBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;

use Doctrine\ORM\EntityRepository;

class AlumnoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            
            ->add('dni', TextType::class, array('label' => 'Número de Documento'))
            ->add('apellido', TextType::class, array('label' => 'Apellido'))
            ->add('nombre', TextType::class, array('label' => 'Nombre'))
            ->add('fechaNacimiento',TextType::class, array('label' => 'Fecha de Nacimiento'))
            ->add('direccion', TextType::class, array('label' => 'Dirección'))
            ->add('telefono', TextType::class, array('label' => 'Teléfono'))
            ->add('email', TextType::class, array('label' => 'Email'))
            ->add('anioIngreso', IntegerType::class, array('label' => 'Año de Ingreso'))
            ->add('curso', TextType::class, array('label' => 'Curso'))
            ->add('division', ChoiceType::class, array(
                                    'choices' => array(
                                        'A' => 'A',
                                        'B' => 'B',
                                        'C' => 'C',
                                        'D' => 'D',
                                        'E' => 'E'),
                                'label' => 'División')
            )
            ->add('nuevo', ChoiceType::class, array(
                                    'choices' => array(
                                        'Si' => '1',
                                        'No' => '0'),
                                'label' => 'Nuevo')
            )
            ->add('contacto', TextType::class, array('label' => 'Contacto'))
            ->add('comentario', TextType::class, array('label' => 'Comentario'))
            ->add('saldoFavor', NumberType::class, array('label' => 'Saldo a favor'))
            ->add('nivel', ChoiceType::class, array(
                                    'choices' => array(
                                        'Inicial/Jardín' => 'I',
                                        'Primaria' => 'P'),
                                    'label' => 'Nivel')
            )
                                        
            
            ->add('button', SubmitType::class);
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
