<?php

/* ::modulesUsed/navigation.html.twig */
class __TwigTemplate_c1e8920f956d72a7b975ce5cd081a32cac665293877b7b45359c26043cf7e4c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"well\">
        <ul class=\"nav nav-list\">
            <li class=\"nav-header\">Nos produits</li>
            ";
        // line 4
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("EcommerceBundle:Categories:menu"), array());
        // line 5
        echo "        </ul>

</div>
</div>";
    }

    public function getTemplateName()
    {
        return "::modulesUsed/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 5,  24 => 4,  19 => 1,);
    }
}
/* <div class="well">*/
/*         <ul class="nav nav-list">*/
/*             <li class="nav-header">Nos produits</li>*/
/*             {% render (controller('EcommerceBundle:Categories:menu')) %}*/
/*         </ul>*/
/* */
/* </div>*/
/* </div>*/
