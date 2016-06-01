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
use FOS\UserBundle\Util\LegacyFormHelper;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use Doctrine\ORM\EntityRepository;

class UserType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options){
      $builder
          ->add('email', LegacyFormHelper::getType('Symfony\Component\Form\Extension\Core\Type\EmailType'), array('label' => 'form.email', 'translation_domain' => 'FOSUserBundle'))
          ->add('username', TextType::class, array('label' => 'form.username', 'translation_domain' => 'FOSUserBundle'))
          ->add('plainPassword', LegacyFormHelper::getType('Symfony\Component\Form\Extension\Core\Type\RepeatedType'), array(
              'type' => LegacyFormHelper::getType('Symfony\Component\Form\Extension\Core\Type\PasswordType'),
              'required' => false,
              'options' => array('translation_domain' => 'FOSUserBundle'),
              'first_options' => array('label' => 'form.password'),
              'second_options' => array('label' => 'form.password_confirmation'),
              'invalid_message' => 'fos_user.password.mismatch',
          ))
          ->add('roles', ChoiceType::class, array(
                      'multiple'=> true,
                      'choices' => array(
                          'Administrador' => 'ROLE_ADMIN',
                          'Gestion'  => 'ROLE_GESTION',
                          'Consulta'  => 'ROLE_CONSULTA'
                      )));
    }

     public function getParent()
     {
         return 'FOS\UserBundle\Form\Type\RegistrationFormType';
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
