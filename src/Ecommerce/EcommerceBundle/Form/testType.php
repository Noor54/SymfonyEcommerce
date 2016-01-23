<?php
namespace Ecommerce\EcommerceBundle\Form ;

    use Symfony\Component\Form\AbstractType;
    use Symfony\Component\Form\FormBuilderInterface;

    class testType extends AbstractType
    {
        /**
         * @param FormBuilderInterface $builder
         * @param array $options
         */
        public function buildForm(FormBuilderInterface $builder, array $options)
        {
            $builder
                ->add('email','email',array('required'=>false))
                ->add('nom')
                ->add('sexe','choice',array('choices'=>array('0'=>'Homme',
                                                              '1'=>'Femme'),'preferred_choices'=>array('1'),'expanded'=>false))
                ->add('date','date')
                ->add('pays','country')
                ->add('utilisateurs','entity',array('class'=>'Utilisateurs\UtilisateursBundle\Entity\Utilisateurs'))
                ->add('content','textarea')
                ->add('Envoyer','submit')
            ;

        }
        public function getName()
        {
            return 'ecommerce_ecommercebundle_test';
        }

    }
