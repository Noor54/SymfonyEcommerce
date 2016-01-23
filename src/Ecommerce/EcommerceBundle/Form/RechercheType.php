<?php
namespace Ecommerce\EcommerceBundle\Form;
use Symfony\component\Form\AbstractType;
use Symfony\component\Form\FormBuilderInterface;


 class RechercheType extends AbstractType
{
public function buildForm(FormBuilderInterface $builder ,array $option)
{
    $builder->add('recherche','text',array('attr'=>array('input-medium search-query')));
}
     public function getName()
     {
         return 'ecommerce_ecommercebundle_recherche';
     }
 }
