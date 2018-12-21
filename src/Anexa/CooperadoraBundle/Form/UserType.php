<?php

namespace Anexa\CooperadoraBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Anexa\CooperadoraBundle\Form\DataTransformer\StringToArrayTransformer;

use Doctrine\ORM\EntityRepository;

class UserType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options){
      $builder
          ->add('roles', ChoiceType::class, array(
                'multiple'=> true,
                'choices' => array(
                    'Administrador' => 'ROLE_SUPER_ADMIN',
                    'Cobrador'  => 'ROLE_COBRADOR'
                )))

          ->add('tipo', EntityType::class, array(
            'class' => 'AnexaCooperadoraBundle:TipoCobrador',
            'choice_label' => function ($tipo) {
                return $tipo->getDenominacion();
            },
            'label' => 'Tipo de Cobrador'))
          ->add('habilitado', CheckboxType::class, array(
              'label'    => 'Habilitado',
              'required' => false,
          ));
    }

     public function getParent()
     {
         return 'FOS\UserBundle\Form\Type\RegistrationFormType';
     }

     public function getBlockPrefix()
     {
         return 'app_user_registration';
     }

     /**
      * @param OptionsResolver $resolver
      */
     public function configureOptions(OptionsResolver $resolver)
     {
         $resolver->setDefaults(array(
           'data_class' => 'Anexa\CooperadoraBundle\Entity\User'
         ));
     }

}
