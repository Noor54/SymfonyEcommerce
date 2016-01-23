<?php
 namespace Ecommerce\EcommerceBundle\Twig\Extensions;//avertir symony qu on va utiliser une fct dans services.yml
 class TvaExtension extends  \Twig_Extension
 {

     public function getFilters()
 {
     return array(new \Twig_SimpleFilter('tva',array($this,'calculTva')) );
 }
     function calculTva($prixHT,$tva)
     {
        return  round($prixHT/$tva,2);
     }
     public function getName()
     {
         return 'tva_extension';
     }
 }