<?php

namespace Anexa\CooperadoraBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

use Doctrine\ORM\EntityRepository;
use Anexa\CooperadoraBundle\Entity\Responsable;

class AlumnoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('tipoDNI',
             ChoiceType::class, array(
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
            ->add('sexo', ChoiceType::class, array(
                                            'choices'  => array(
                                                'Femenino' => 'F',
                                                'Masculino' => 'M',
                                                'Otro' => 'O'),
                                            'label' => 'Sexo'))
            ->add('calle', TextType::class, array('label' => 'Calle'))
            ->add('numero', TextType::class, array('label' => 'Número'))
            ->add('ciudad', TextType::class, array('label' => 'Ciudad'))
            ->add('provincia', TextType::class, array('label' => 'Provincia'))
            ->add('codigoPostal', TextType::class, array('label' => 'Código Postal'))
            ->add('pais', TextType::class, array('label' => 'País'))
            ->add('telefono', TextType::class, array('label' => 'Teléfono'))
            ->add('email', TextType::class, array('label' => 'Email'))
            ->add('latitud', HiddenType::class, array('label' => 'Latitud'))
            ->add('longitud', HiddenType::class, array('label' => 'Longitud'))

            ->add('fechaNacimiento',TextType::class, array('label' => 'Fecha de Nacimiento'))
            ->add('fechaAlta',HiddenType::class)
            ->add('fechaIngreso', TextType::class, array('label' => 'Fecha de Ingreso'))
            ->add('fechaEgreso',TextType::class, array('label' => 'Fecha de Egreso'))
            ->add('responsables', EntityType::class, array(
                                                    'class' => 'AnexaCooperadoraBundle:Responsable',
                                                    'multiple' => true,
                                                    'required' => false,
                                                    'label' => 'Responsables',
                                                    'query_builder' => function(EntityRepository $er) {
                                                        return $er -> createQueryBuilder('r')
                                                                    ->where('r.borrado = 0');
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
            'data_class' => 'Anexa\CooperadoraBundle\Entity\Alumno'
        ));
    }
}
