<?php

/* EcommerceBundle:Default:panier/layout/panier.html.twig */
class __TwigTemplate_6c0124d22a88832fce9d9b9d00182af7819a46658378b25959a0ed23249eb874 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "EcommerceBundle:Default:panier/layout/panier.html.twig", 1);
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
        $this->loadTemplate("::modulesUsed/navigation.html.twig", "EcommerceBundle:Default:panier/layout/panier.html.twig", 6)->display($context);
        // line 7
        echo "            <div/>
        <div class=\"span9\">
            <h2>Votre parnier</h2>
            <form>
                <table class=\"table table-striped table-hover\">
                    <thead>
                    <tr>
                        <th>Références</th>
                        <th>Quantité</th>
                        <th>Prix unitaire</th>
                        <th>Total HT</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>AB29837</td>
                        <td>
                            <select class=\"span1\"><option>1</option></select>&nbsp;
                            <a href=\"#\"><i class=\"icon-refresh\"></i></a>
                            <a href=\"#\"><i class=\"icon-trash\"></i></a>
                        </td>
                        <td>333,33€</td>
                        <td>333,33€</td>
                    </tr>
                    <tr>
                        <td>AC34423</td>
                        <td>
                            <select class=\"span1\"><option>1</option></select>&nbsp;
                            <a href=\"#\"><i class=\"icon-refresh\"></i></a>
                            <a href=\"#\"><i class=\"icon-trash\"></i></a>
                        </td>
                        <td>333,33€</td>
                        <td>666,66€</td>
                    </tr>
                    </tbody>
                </table>
            </form>

            <dl class=\"dl-horizontal pull-right\">
                <dt>Total HT :</dt>
                <dd>799,99€</dd>

                <dt>TVA :</dt>
                <dd>200€</dd>

                <dt>Total:</dt>
                <dd>999,99€</dd>
            </dl>
            <div class=\"clearfix\"></div>
            <a href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("livraison");
        echo "\" class=\"btn btn-success pull-right\">Valider mon panier</a>
            <a href=\"index.php\" class=\"btn btn-primary\">Continuer mes achats</a>
        </div>

    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:panier/layout/panier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 56,  38 => 7,  36 => 6,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "::layout/layout.html.twig" %}*/
/* {% block body %}*/
/* <div class="container">*/
/*     <div class="row">*/
/*         <div class="span3">*/
/*         {% include "::modulesUsed/navigation.html.twig"  %}*/
/*             <div/>*/
/*         <div class="span9">*/
/*             <h2>Votre parnier</h2>*/
/*             <form>*/
/*                 <table class="table table-striped table-hover">*/
/*                     <thead>*/
/*                     <tr>*/
/*                         <th>Références</th>*/
/*                         <th>Quantité</th>*/
/*                         <th>Prix unitaire</th>*/
/*                         <th>Total HT</th>*/
/*                     </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                     <tr>*/
/*                         <td>AB29837</td>*/
/*                         <td>*/
/*                             <select class="span1"><option>1</option></select>&nbsp;*/
/*                             <a href="#"><i class="icon-refresh"></i></a>*/
/*                             <a href="#"><i class="icon-trash"></i></a>*/
/*                         </td>*/
/*                         <td>333,33€</td>*/
/*                         <td>333,33€</td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <td>AC34423</td>*/
/*                         <td>*/
/*                             <select class="span1"><option>1</option></select>&nbsp;*/
/*                             <a href="#"><i class="icon-refresh"></i></a>*/
/*                             <a href="#"><i class="icon-trash"></i></a>*/
/*                         </td>*/
/*                         <td>333,33€</td>*/
/*                         <td>666,66€</td>*/
/*                     </tr>*/
/*                     </tbody>*/
/*                 </table>*/
/*             </form>*/
/* */
/*             <dl class="dl-horizontal pull-right">*/
/*                 <dt>Total HT :</dt>*/
/*                 <dd>799,99€</dd>*/
/* */
/*                 <dt>TVA :</dt>*/
/*                 <dd>200€</dd>*/
/* */
/*                 <dt>Total:</dt>*/
/*                 <dd>999,99€</dd>*/
/*             </dl>*/
/*             <div class="clearfix"></div>*/
/*             <a href="{{ path('livraison') }}" class="btn btn-success pull-right">Valider mon panier</a>*/
/*             <a href="index.php" class="btn btn-primary">Continuer mes achats</a>*/
/*         </div>*/
/* */
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
