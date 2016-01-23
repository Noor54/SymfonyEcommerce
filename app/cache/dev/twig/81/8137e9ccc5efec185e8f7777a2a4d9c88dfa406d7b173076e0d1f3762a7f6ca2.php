<?php

/* EcommerceBundle:Default:produits/layout/presentation.html.twig */
class __TwigTemplate_c5b47ce0c6a26ae262aef1691fa2ecfe6afe7abd5883046d76645e85be8f489a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "EcommerceBundle:Default:produits/layout/presentation.html.twig", 1);
        $this->blocks = array(
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

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"span3\">
            ";
        // line 6
        $this->loadTemplate("::modulesUsed/navigation.html.twig", "EcommerceBundle:Default:produits/layout/presentation.html.twig", 6)->display($context);
        // line 7
        echo "            <div/>

        <div class=\"span9\">
            <div class=\"row\">
                <div class=\"span5\">
                    <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "image", array()), "path", array()), "html", null, true);
        echo "\" alt=\"DevAndClick\" width=\"470\" height=\"310\">
                </div>

                <div class=\"span4\">
                    <h4>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "nom", array()), "html", null, true);
        echo "</h4>
                    <h5>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "categorie", array()), "nom", array()), "html", null, true);
        echo "</h5>
                    <p>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "description", array()), "html", null, true);
        echo "</p>
                    <h4>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "prix", array()), "html", null, true);
        echo "€</h4>
                    <form action=\"";
        // line 20
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
        return array (  68 => 20,  64 => 19,  60 => 18,  56 => 17,  52 => 16,  45 => 12,  38 => 7,  36 => 6,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "::layout/layout.html.twig" %}*/
/* {% block body %}*/
/* <div class="container">*/
/*     <div class="row">*/
/*         <div class="span3">*/
/*             {% include "::modulesUsed/navigation.html.twig"  %}*/
/*             <div/>*/
/* */
/*         <div class="span9">*/
/*             <div class="row">*/
/*                 <div class="span5">*/
/*                     <img src="{{ produit.image.path }}" alt="DevAndClick" width="470" height="310">*/
/*                 </div>*/
/* */
/*                 <div class="span4">*/
/*                     <h4>{{ produit.nom }}</h4>*/
/*                     <h5>{{ produit.categorie.nom }}</h5>*/
/*                     <p>{{ produit.description }}</p>*/
/*                     <h4>{{ produit.prix }}€</h4>*/
/*                     <form action="{{ path('panier') }}">*/
/* */
/* */
/*                         <select name="qte" class="span1">*/
/*                             <option>1</option>*/
/*                         </select>*/
/* */
/*                         <div>*/
/*                             <button class="btn btn-primary">Ajouter au panier</button>*/
/*                         </div>*/
/*                     </form>*/
/* */
/*                 </div>*/
/*             </div>*/
/* */
/* */
/*         </div>*/
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
