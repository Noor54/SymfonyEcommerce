<?php

/* ::layout/layout.html.twig */
class __TwigTemplate_c3bddd6922244b5e8e17e2069f733c42df6ded578a07e8b0c467aa50167d0fe3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap-responsive.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/font-awesome.css"), "html", null, true);
        echo "\" />
        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
       <div class=\"navbar navbar-inverse navbar-fixed-top\">
        <div class=\"navbar-inner\">
            <div class=\"container\">
                <button class=\"btn btn-navbar\" data-target=\".nav-collapse\" data-toggle=\"collapse\" type=\"button\">
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"brand\" href=\"index.php\">DevAndClick</a>
                <div class=\"nav-collapse collapse\">
                    ";
        // line 24
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("EcommerceBundle:Produits:recherche"), array());
        // line 25
        echo "                                   </div>
            </div>
        </div>
    </div>
";
        // line 29
        $this->displayBlock('body', $context, $blocks);
        // line 30
        echo "       <hr />

       <footer id=\"footer\" class=\"vspace20\">
           <div class=\"container\">
               <div class=\"row\">
                   <div class=\"span4 offset1\">
                       <h4>Informations</h4>
                       <ul class=\"nav nav-stacked\">
                           <li><a href=\"#\">CGV</a>
                           <li><a href=\"#\">Mentions légales</a>
                       </ul>
                   </div>

                   <div class=\"span4\">
                       <h4>Notre entrepôt</h4>
                       <p><i class=\"icon-map-marker\"></i>&nbsp;";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["adresse"]) ? $context["adresse"] : $this->getContext($context, "adresse")), "html", null, true);
        echo "</p>
                   </div>

                   <div class=\"span2\">
                       <h4>Nous contacter</h4>
                       <p><i class=\"icon-phone\"></i>&nbsp;Tel: ";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["telephone"]) ? $context["telephone"] : $this->getContext($context, "telephone")), "html", null, true);
        echo "</p>
                       <p><i class=\"icon-print\"></i>&nbsp;Fax: ";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["fax"]) ? $context["fax"] : $this->getContext($context, "fax")), "html", null, true);
        echo "</p>
                   </div>
               </div>

               <div class=\"row\">
                   <div class=\"span4\">
                       <p>&copy; Copyright ";
        // line 57
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " - DevAndClick</p>
                   </div>
               </div>
           </div>
       </footer>
       <script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.10.0.min.js"), "html", null, true);
        echo "\"></script>
       <script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("../js/bootstrap.js"), "html", null, true);
        echo "\"></script>
       ";
        // line 64
        $this->displayBlock('javascripts', $context, $blocks);
        // line 65
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 29
    public function block_body($context, array $blocks = array())
    {
    }

    // line 64
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::layout/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 64,  151 => 29,  146 => 10,  140 => 5,  134 => 65,  132 => 64,  128 => 63,  124 => 62,  116 => 57,  107 => 51,  103 => 50,  95 => 45,  78 => 30,  76 => 29,  70 => 25,  68 => 24,  51 => 11,  49 => 10,  45 => 9,  41 => 8,  37 => 7,  33 => 6,  29 => 5,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" />*/
/*         <link rel="stylesheet" href="{{ asset ('css/bootstrap-responsive.css')}}" />*/
/*         <link rel="stylesheet" href="{{ asset('css/style.css') }}" />*/
/*         <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}" />*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*        <div class="navbar navbar-inverse navbar-fixed-top">*/
/*         <div class="navbar-inner">*/
/*             <div class="container">*/
/*                 <button class="btn btn-navbar" data-target=".nav-collapse" data-toggle="collapse" type="button">*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                 </button>*/
/*                 <a class="brand" href="index.php">DevAndClick</a>*/
/*                 <div class="nav-collapse collapse">*/
/*                     {% render (controller('EcommerceBundle:Produits:recherche')) %}*/
/*                                    </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% block body %}{% endblock %}*/
/*        <hr />*/
/* */
/*        <footer id="footer" class="vspace20">*/
/*            <div class="container">*/
/*                <div class="row">*/
/*                    <div class="span4 offset1">*/
/*                        <h4>Informations</h4>*/
/*                        <ul class="nav nav-stacked">*/
/*                            <li><a href="#">CGV</a>*/
/*                            <li><a href="#">Mentions légales</a>*/
/*                        </ul>*/
/*                    </div>*/
/* */
/*                    <div class="span4">*/
/*                        <h4>Notre entrepôt</h4>*/
/*                        <p><i class="icon-map-marker"></i>&nbsp;{{ adresse }}</p>*/
/*                    </div>*/
/* */
/*                    <div class="span2">*/
/*                        <h4>Nous contacter</h4>*/
/*                        <p><i class="icon-phone"></i>&nbsp;Tel: {{ telephone }}</p>*/
/*                        <p><i class="icon-print"></i>&nbsp;Fax: {{ fax }}</p>*/
/*                    </div>*/
/*                </div>*/
/* */
/*                <div class="row">*/
/*                    <div class="span4">*/
/*                        <p>&copy; Copyright {{ "now"|date('Y') }} - DevAndClick</p>*/
/*                    </div>*/
/*                </div>*/
/*            </div>*/
/*        </footer>*/
/*        <script src="{{ asset('js/jquery-1.10.0.min.js') }}"></script>*/
/*        <script src="{{ asset('../js/bootstrap.js') }}"></script>*/
/*        {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
