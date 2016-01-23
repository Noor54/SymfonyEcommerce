<?php

/* EcommerceBundle:Default:panier/layout/validation.html.twig */
class __TwigTemplate_acc00c13102633f8a8b986a7ded0919bb2c8bbed1997413bf5d304b8eef5a40a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "EcommerceBundle:Default:panier/layout/validation.html.twig", 1);
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
        $this->loadTemplate("::modulesUsed/navigation.html.twig", "EcommerceBundle:Default:panier/layout/validation.html.twig", 6)->display($context);
        // line 7
        echo "        <div/>
        <div class=\"span9\">
            <h2>Valider mon parnier</h2>
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
                            2
                        </td>
                        <td>333,33€</td>
                        <td>333,33€</td>
                    </tr>
                    <tr>
                        <td>AC34423</td>
                        <td>
                            1
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
                <dd>999,99€ TTC</dd>
            </dl>
            <div class=\"clearfix\"></div>
            <a href=\"#\" class=\"btn btn-success pull-right\">Payer</a>
        </div>

    </div>
</div>
    ";
    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:panier/layout/validation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 7,  36 => 6,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "::layout/layout.html.twig" %}*/
/* {% block body %}*/
/* <div class="container">*/
/*     <div class="row">*/
/*         <div class="span3">*/
/*             {% include "::modulesUsed/navigation.html.twig"  %}*/
/*         <div/>*/
/*         <div class="span9">*/
/*             <h2>Valider mon parnier</h2>*/
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
/*                             2*/
/*                         </td>*/
/*                         <td>333,33€</td>*/
/*                         <td>333,33€</td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <td>AC34423</td>*/
/*                         <td>*/
/*                             1*/
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
/*                 <dd>999,99€ TTC</dd>*/
/*             </dl>*/
/*             <div class="clearfix"></div>*/
/*             <a href="#" class="btn btn-success pull-right">Payer</a>*/
/*         </div>*/
/* */
/*     </div>*/
/* </div>*/
/*     {% endblock %}*/
