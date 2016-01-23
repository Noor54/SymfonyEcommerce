<?php

/* ::layout/layout.html.twig */
class __TwigTemplate_06990fcff83c1b8d2f94cd92a936ff4f4631eee5f976e5d4f31390fdb06cd019 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
            'motsCles' => array($this, 'block_motsCles'),
            'description' => array($this, 'block_description'),
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
        $this->displayBlock('titre', $context, $blocks);
        echo "</title>
        <meta name=\"keywords\" content=\"";
        // line 6
        $this->displayBlock('motsCles', $context, $blocks);
        echo "\"/>
        <meta name=\"description\" content=\"";
        // line 7
        $this->displayBlock('description', $context, $blocks);
        echo "\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap-responsive.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/font-awesome.css"), "html", null, true);
        echo "\" />
        ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
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
                <a class=\"brand\" href=\"index.php\">E-Commerce By Symfony</a>
                <div class=\"nav-collapse collapse\">
                    ";
        // line 26
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("EcommerceBundle:Produits:recherche"), array());
        // line 27
        echo "                </div>
            </div>
        </div>
    </div>
";
        // line 31
        $this->displayBlock('body', $context, $blocks);
        // line 32
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
        // line 47
        echo twig_escape_filter($this->env, (isset($context["adresse"]) ? $context["adresse"] : $this->getContext($context, "adresse")), "html", null, true);
        echo "</p>
                   </div>

                   <div class=\"span2\">
                       <h4>Nous contacter</h4>
                       <p><i class=\"icon-phone\"></i>&nbsp;Tel: ";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["telephone"]) ? $context["telephone"] : $this->getContext($context, "telephone")), "html", null, true);
        echo "</p>
                       <p><i class=\"icon-print\"></i>&nbsp;Fax: ";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["fax"]) ? $context["fax"] : $this->getContext($context, "fax")), "html", null, true);
        echo "</p>
                   </div>
               </div>

               <div class=\"row\">
                   <div class=\"span4\">
                       <p>&copy; Copyright ";
        // line 59
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " - Tuto de DevAndClick-</p>
                   </div>
               </div>
           </div>
       </footer>
       <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.10.0.min.js"), "html", null, true);
        echo "\"></script>
       <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("../js/bootstrap.js"), "html", null, true);
        echo "\"></script>
       ";
        // line 66
        $this->displayBlock('javascripts', $context, $blocks);
        // line 67
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_titre($context, array $blocks = array())
    {
        echo "Ecommerce Fruits & légumes";
    }

    // line 6
    public function block_motsCles($context, array $blocks = array())
    {
    }

    // line 7
    public function block_description($context, array $blocks = array())
    {
    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
    }

    // line 66
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
        return array (  176 => 66,  171 => 31,  166 => 12,  161 => 7,  156 => 6,  150 => 5,  144 => 67,  142 => 66,  138 => 65,  134 => 64,  126 => 59,  117 => 53,  113 => 52,  105 => 47,  88 => 32,  86 => 31,  80 => 27,  78 => 26,  61 => 13,  59 => 12,  55 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block titre %}Ecommerce Fruits & légumes{% endblock %}</title>*/
/*         <meta name="keywords" content="{% block motsCles%}{% endblock %}"/>*/
/*         <meta name="description" content="{% block description%}{% endblock %}"/>*/
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
/*                 <a class="brand" href="index.php">E-Commerce By Symfony</a>*/
/*                 <div class="nav-collapse collapse">*/
/*                     {% render (controller('EcommerceBundle:Produits:recherche')) %}*/
/*                 </div>*/
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
/*                        <p>&copy; Copyright {{ "now"|date('Y') }} - Tuto de DevAndClick-</p>*/
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
