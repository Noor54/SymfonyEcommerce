<?php

namespace Ecommerce\EcommerceBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ecommerce\EcommerceBundle\Entity\Produits;
use Ecommerce\EcommerceBundle\Form\testType;

class TestController extends Controller
{
    public function testAction()
    {
        $form=$this->createForm(new testType());
        if($this->get('request')->getMethod()=='POST'){
            $form->bind($this->get('request'));
          echo $form['utilisateurs']->getData();

            die();
        }

        return $this->render('EcommerceBundle:Default:test.html.twig',array('form'=>$form->createView()));
    }

}
