<?php

namespace Anexa\CooperadoraBundle\Form;

use Symfony\Component\Form\AbstractType;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

use Doctrine\ORM\EntityRepository;
use Anexa\CooperadoraBundle\Entity\Alumno;
use Anexa\CooperadoraBundle\Entity\User;


class ResponsableType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            
            ->add('tipoDNI', ChoiceType::class, array(
                                                    'choices'  => array(
                                                        'DNI' => 'DNI',
                                                        'Cédula de Identidad' => 'CI',
                                                        'Libreta Cívica' => 'LC',
                                                        'Libreta de Enrolamiento' => 'LE'),
                                                    'label' => 'Tipo de Documento')
             )
            ->add('dni', TextType::class, array('label' => 'Número de Documento'))
            ->add('apellido', TextType::class, array('label' => 'Apellido'))
            ->add('nombre', TextType::class, array('label' => 'Nombre'))
            ->add('fechaNacimiento', DateType::class, array(
                                                'widget' => 'single_text', 
                                                'html5' => true, 
                                                'label' => 'Fecha de Nacimiento')
                )
            ->add('sexo', ChoiceType::class, array(
                                            'choices'  => array(
                                                'Femenino' => 'F',
                                                'Masculino' => 'M',
                                                'Otro' => 'O'),
                                            'label' => 'Sexo'))
            ->add('email', TextType::class, array('label' => 'Email'))
            ->add('telefono', TextType::class, array('label' => 'Teléfono'))
            ->add('direccion', TextType::class, array('label' => 'Dirección'))
            ->add('tipoResponsable', ChoiceType::class, array(
                                                    'choices'  => array(
                                                        'Padre' => 'Padre',
                                                        'Madre' => 'Madre',
                                                        'Tutor' => 'Tutor'),
                                                    'label' => 'Tipo de Responsable')
                                )
            ->add('alumnos', EntityType::class, array(
                                                    'class' => 'AnexaCooperadoraBundle:Alumno',
                                                    'multiple' => true,
                                                    'required' => false,
                                                    'label' => 'Alumnos',
                                                    'query_builder' => function(EntityRepository $er) {
                                                        return $er -> createQueryBuilder('a')
                                                                    ->where('a.borrado = 0'); 
                                                        }
                                                )
                )
            ->add('usuario', EntityType::class, array(
                                                    'class' => 'AnexaCooperadoraBundle:User',
                                                    'multiple' => false,
                                                    'required' => false,
                                                    'label' => 'Usuario',
                                                    'query_builder' => function(EntityRepository $er) {
                                                        return $er -> createQueryBuilder('u')
                                                                    -> where('u.borrado = 0');
                                                    })
                )
            ->add('button', SubmitType::class)
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
