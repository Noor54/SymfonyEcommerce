<?php

/* EcommerceBundle:Default:produits/layout/produits.html.twig */
class __TwigTemplate_b268381364c3d8b6c7f521f7f5fb85bfcfe9601ebc3601e15a6ae48bbffe617c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "EcommerceBundle:Default:produits/layout/produits.html.twig", 1);
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
        $this->loadTemplate("::modulesUsed/navigation.html.twig", "EcommerceBundle:Default:produits/layout/produits.html.twig", 6)->display($context);
        // line 7
        echo "            ";
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 8
            echo "                 ";
            $this->loadTemplate("UtilisateursBundle:Default:modulesUsed/utilisateurs.html.twig", "EcommerceBundle:Default:produits/layout/produits.html.twig", 8)->display($context);
            // line 9
            echo "            ";
        }
        // line 10
        echo "

           <div class=\"span9\">
                ";
        // line 13
        if ((twig_length_filter($this->env, (isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits"))) != 0)) {
            // line 14
            echo "                <ul class=\"thumbnails\">
                    ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
            foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                // line 16
                echo "                        <li class=\"span3\">
                            <div class=\"thumbnail\">
                                <img src=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "image", array()), "path", array()), "html", null, true);
                echo "\" alt=\"Ecommerce\" width=\"200\" height=\"200\">
                                <div class=\"caption\">
                                    <h4>";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nom", array()), "html", null, true);
                echo "</h4>
                                    <p>";
                // line 21
                echo twig_escape_filter($this->env, $this->env->getExtension('tva_extension')->calculTva($this->getAttribute($context["produit"], "prix", array()), $this->getAttribute($this->getAttribute($context["produit"], "tva", array()), "multiplicate", array())), "html", null, true);
                echo " €</p>
                                    <a class=\"btn btn-primary\" href=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("presentation", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
                echo "\">Plus d'infos</a>
                                    <a class=\"btn btn-success\" href=\"";
                // line 23
                echo $this->env->getExtension('routing')->getPath("panier");
                echo "\">Ajouter au panier</a>
                                 </div>
                            </div>
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "
                </ul>

                    <div class=\"pagination\">
                    <ul>
                        <li class=\"disabled\"><span>Précédent</span></li>
                        <li class=\"disabled\"><span>1</span></li>
                        <li><a href=\"#\">2</a></li>
                        <li><a href=\"#\">3</a></li>
                        <li><a href=\"#\">4</a></li>
                        <li><a href=\"#\">5</a></li>
                        <li><a href=\"#\">Suivant</a></li>
                    </ul>
                </div>
                ";
        } else {
            // line 43
            echo "                Aucun produit
                ";
        }
        // line 45
        echo " </div>
</div>
           </div>
</div>
</div>
    ";
    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:produits/layout/produits.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 45,  110 => 43,  93 => 28,  82 => 23,  78 => 22,  74 => 21,  70 => 20,  65 => 18,  61 => 16,  57 => 15,  54 => 14,  52 => 13,  47 => 10,  44 => 9,  41 => 8,  38 => 7,  36 => 6,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "::layout/layout.html.twig" %}*/
/* {% block body %}*/
/* <div class="container">*/
/*     <div class="row">*/
/*         <div class="span3">*/
/*             {% include '::modulesUsed/navigation.html.twig'  %}*/
/*             {% if is_granted('IS_AUTHENTICATED_FULLY') %}*/
/*                  {% include 'UtilisateursBundle:Default:modulesUsed/utilisateurs.html.twig' %}*/
/*             {% endif %}*/
/* */
/* */
/*            <div class="span9">*/
/*                 {% if produits|length!=0 %}*/
/*                 <ul class="thumbnails">*/
/*                     {% for produit in produits %}*/
/*                         <li class="span3">*/
/*                             <div class="thumbnail">*/
/*                                 <img src="{{ produit.image.path }}" alt="Ecommerce" width="200" height="200">*/
/*                                 <div class="caption">*/
/*                                     <h4>{{ produit.nom }}</h4>*/
/*                                     <p>{{ produit.prix|tva(produit.tva.multiplicate) }} €</p>*/
/*                                     <a class="btn btn-primary" href="{{ path('presentation',{'id':produit.id}) }}">Plus d'infos</a>*/
/*                                     <a class="btn btn-success" href="{{ path('panier') }}">Ajouter au panier</a>*/
/*                                  </div>*/
/*                             </div>*/
/*                         </li>*/
/*                     {% endfor %}*/
/* */
/*                 </ul>*/
/* */
/*                     <div class="pagination">*/
/*                     <ul>*/
/*                         <li class="disabled"><span>Précédent</span></li>*/
/*                         <li class="disabled"><span>1</span></li>*/
/*                         <li><a href="#">2</a></li>*/
/*                         <li><a href="#">3</a></li>*/
/*                         <li><a href="#">4</a></li>*/
/*                         <li><a href="#">5</a></li>*/
/*                         <li><a href="#">Suivant</a></li>*/
/*                     </ul>*/
/*                 </div>*/
/*                 {% else %}*/
/*                 Aucun produit*/
/*                 {% endif %}*/
/*  </div>*/
/* </div>*/
/*            </div>*/
/* </div>*/
/* </div>*/
/*     {% endblock %}*/
/* */
