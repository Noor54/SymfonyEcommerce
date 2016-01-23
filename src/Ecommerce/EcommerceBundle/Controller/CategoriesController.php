<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CategoriesController extends Controller
{
    public function menuAction()
    {
        $em=$this->getDoctrine()->getManager();
        $categories=$em->getRepository('EcommerceBundle:Categorie')->findAll();
        return $this->render('EcommerceBundle:Default:categories/ModulesUsed/menu.html.twig',array('categories'=>$categories));
    }
}
