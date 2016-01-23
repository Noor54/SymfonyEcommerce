<?php

/* EcommerceBundle:Default:produits/layout/presentation.html.twig */
class __TwigTemplate_b5f3fc02ad6b78671bf6635cf5aa49ffce48e229dc529d9be4cd207298980caf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "EcommerceBundle:Default:produits/layout/presentation.html.twig", 1);
        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
            'description' => array($this, 'block_description'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_titre($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "nom", array()), "html", null, true);
    }

    // line 4
    public function block_description($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "description", array()), "html", null, true);
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "
<div class=\"container\">
    <div class=\"row\">
        <div class=\"span3\">
            ";
        // line 11
        $this->loadTemplate("::modulesUsed/navigation.html.twig", "EcommerceBundle:Default:produits/layout/presentation.html.twig", 11)->display($context);
        // line 12
        echo "        <div/>

        <div class=\"span9\">
            <div class=\"row\">
                <div class=\"span3\">
                    <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "image", array()), "path", array()), "html", null, true);
        echo "\" alt=\"Ecommerce\" width=\"470\" height=\"310\">
                </div>
                <div class=\"span6\">
                    <h4>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "nom", array()), "html", null, true);
        echo "</h4>
                    <h5>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "categorie", array()), "nom", array()), "html", null, true);
        echo "</h5>
                    <p>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "description", array()), "html", null, true);
        echo "</p>
                    <h4>";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('tva_extension')->calculTva($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "prix", array()), $this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "tva", array()), "multiplicate", array())), "html", null, true);
        echo "€</h4>
                     <form action=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("panier");
        echo "\">
                    <select name=\"qte\" class=\"span1\">
                    <option>1</option>
                    </select>

                        <div>
                            <button class=\"btn btn-primary\">Ajouter au panier</button>
                        </div>
                        </form>
                </div>
            </div>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:produits/layout/presentation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 24,  78 => 23,  74 => 22,  70 => 21,  66 => 20,  60 => 17,  53 => 12,  51 => 11,  45 => 7,  42 => 6,  36 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* {% block titre %}{{ produit.nom }}{% endblock %}*/
/* {% block description%}{{ produit.description }}{% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* <div class="container">*/
/*     <div class="row">*/
/*         <div class="span3">*/
/*             {% include "::modulesUsed/navigation.html.twig"  %}*/
/*         <div/>*/
/* */
/*         <div class="span9">*/
/*             <div class="row">*/
/*                 <div class="span3">*/
/*                     <img src="{{ produit.image.path }}" alt="Ecommerce" width="470" height="310">*/
/*                 </div>*/
/*                 <div class="span6">*/
/*                     <h4>{{ produit.nom }}</h4>*/
/*                     <h5>{{ produit.categorie.nom }}</h5>*/
/*                     <p>{{ produit.description }}</p>*/
/*                     <h4>{{ produit.prix|tva(produit.tva.multiplicate) }}€</h4>*/
/*                      <form action="{{ path('panier') }}">*/
/*                     <select name="qte" class="span1">*/
/*                     <option>1</option>*/
/*                     </select>*/
/* */
/*                         <div>*/
/*                             <button class="btn btn-primary">Ajouter au panier</button>*/
/*                         </div>*/
/*                         </form>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock %}*/
