<?php

/* DoctrineBundle:Collector:db.html.twig */
class __TwigTemplate_28736d54f8069023558cabf99f5f41a2a9e9643954f139608a551806963908d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
            'queries' => array($this, 'block_queries'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array())) ? ("WebProfilerBundle:Profiler:ajax_layout.html.twig") : ("WebProfilerBundle:Profiler:layout.html.twig")), "DoctrineBundle:Collector:db.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        <img width=\"20\" height=\"28\" alt=\"Database\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcCAYAAABh2p9gAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAQRJREFUeNpi/P//PwM1ARMDlcGogZQDlpMnT7pxc3NbA9nhQKxOpL5rQLwJiPeBsI6Ozl+YBOOOHTv+AOllQNwtLS39F2owKYZ/gRq8G4i3ggxEToggWzvc3d2Pk+1lNL4fFAs6ODi8JzdS7mMRVyDVoAMHDsANdAPiOCC+jCQvQKqBQB/BDbwBxK5AHA3E/kB8nKJkA8TMQBwLxaBIKQbi70AvTADSBiSadwFXpCikpKQU8PDwkGTaly9fHFigkaKIJid4584dkiMFFI6jkTJII0WVmpHCAixZQEXWYhDeuXMnyLsVlEQKI45qFBQZ8eRECi4DBaAlDqle/8A48ip6gAADANdQY88Uc0oGAAAAAElFTkSuQmCC\" />
        <span class=\"sf-toolbar-status";
        // line 6
        if ((50 < $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "querycount", array()))) {
            echo " sf-toolbar-status-yellow";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "querycount", array()), "html", null, true);
        echo "</span>
        ";
        // line 7
        if (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "querycount", array()) > 0)) {
            // line 8
            echo "            <span class=\"sf-toolbar-info-piece-additional-detail\">in ";
            echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "time", array()) * 1000)), "html", null, true);
            echo " ms</span>
        ";
        }
        // line 10
        echo "        ";
        if (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "invalidEntityCount", array()) > 0)) {
            // line 11
            echo "            <span class=\"sf-toolbar-info-piece-additional sf-toolbar-status sf-toolbar-status-red\"> </span>
        ";
        }
        // line 13
        echo "    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 14
        echo "    ";
        ob_start();
        // line 15
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>DB Queries</b>
            <span>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "querycount", array()), "html", null, true);
        echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Query time</b>
            <span>";
        // line 21
        echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "time", array()) * 1000)), "html", null, true);
        echo " ms</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Invalid entities</b>
            <span class=\"sf-toolbar-status sf-toolbar-status-";
        // line 25
        echo ((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "invalidEntityCount", array()) > 0)) ? ("red") : ("green"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "invalidEntityCount", array()), "html", null, true);
        echo "</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 28
        echo "    ";
        $this->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig", "DoctrineBundle:Collector:db.html.twig", 28)->display(array_merge($context, array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")))));
    }

    // line 31
    public function block_menu($context, array $blocks = array())
    {
        // line 32
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAcCAYAAAB/E6/TAAABLUlEQVR42u3TP0vDQBiA8UK/gDiLzi0IhU4OEunk5OQUAhGSOBUCzqWfIKSzX8DRySF0URCcMjWLIJjFD9Cpk/D6HITecEPUuzhIAz8CIdyTP/f2iqI4qaqqDx8l5Ic2uIeP/bquezCokOAFF+oCN3t4gPzSEjc4NEPaCldQbzjELTYW0RJzHDchwwem+ons6ZBpLSJ7nueJC22h0V+FzmwWV0ee59vQNV67CGVZJmEYbkNjfpY6X6I0Qo4/3RMmTdDDspuQVsJvgkP3IdMbIkIjLPBoadG2646iKJI0Ta2wxm6OdnP0/Tk6DYJgHcfxpw21RtscDTDDnaVZ26474GkkSRIrrPEv5sgMTfHe+cA2O6wPH6vOBpYQNALneHb96XTEDI6dzpEZ0VzO0Rf3pP5LMLI4tAAAAABJRU5ErkJggg==\" alt=\"\" /></span>
    <strong>Doctrine</strong>
    <span class=\"count\">
        <span>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "querycount", array()), "html", null, true);
        echo "</span>
        <span>";
        // line 37
        echo twig_escape_filter($this->env, sprintf("%0.0f", ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "time", array()) * 1000)), "html", null, true);
        echo " ms</span>
    </span>
</span>
";
    }

    // line 42
    public function block_panel($context, array $blocks = array())
    {
        // line 43
        echo "    ";
        if (("explain" == (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))) {
            // line 44
            echo "        ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("DoctrineBundle:Profiler:explain", array("token" =>             // line 45
(isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "panel" => "db", "connectionName" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 47
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "connection"), "method"), "query" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 48
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "query"), "method"))));
            // line 49
            echo "
    ";
        } else {
            // line 51
            echo "        ";
            $this->displayBlock("queries", $context, $blocks);
            echo "
    ";
        }
    }

    // line 55
    public function block_queries($context, array $blocks = array())
    {
        // line 56
        echo "    <h2>Queries</h2>

    ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "queries", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["connection"] => $context["queries"]) {
            // line 59
            echo "        <h3>Connection <em>";
            echo twig_escape_filter($this->env, $context["connection"], "html", null, true);
            echo "</em></h3>
        ";
            // line 60
            if (twig_test_empty($context["queries"])) {
                // line 61
                echo "            <p>
                <em>No queries.</em>
            </p>
        ";
            } else {
                // line 65
                echo "            <ul class=\"alt\" id=\"queriesPlaceholder-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\">
                ";
                // line 66
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["queries"]);
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["i"] => $context["query"]) {
                    // line 67
                    echo "                    <li class=\"";
                    echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), $context["i"]), "html", null, true);
                    echo "\" data-extra-info=\"";
                    echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute($context["query"], "executionMS", array()) * 1000)), "html", null, true);
                    echo "\" data-target-id=\"";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "\">
                        <div style=\"margin-top: 4px\" id=\"queryNo-";
                    // line 68
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                    echo "\">
                            <div onclick=\"return expandQuery(this);\" title=\"Expand query\" data-target-id=\"code-";
                    // line 69
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                    echo "\" style=\"cursor: pointer;\">
                                <img alt=\"+\" src=\"";
                    // line 70
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/images/blue_picto_more.gif"), "html", null, true);
                    echo "\" style=\"display: inline;\" />
                                <img alt=\"-\" src=\"";
                    // line 71
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/images/blue_picto_less.gif"), "html", null, true);
                    echo "\" style=\"display: none;\" />
                                <span style=\"display: none\">Shrink query</span>
                                <span id=\"smallcode-";
                    // line 73
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                    echo "\">
                                    ";
                    // line 74
                    echo $this->env->getExtension('doctrine_extension')->minifyQuery($this->getAttribute($context["query"], "sql", array()));
                    echo "
                                </span>
                            </div>
                            <code id=\"code-";
                    // line 77
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                    echo "\">
                                ";
                    // line 78
                    echo SqlFormatter::format($this->getAttribute($context["query"], "sql", array()), $context["i"], $this->getAttribute($this->getAttribute($this->getAttribute($context["loop"], "parent", array()), "loop", array()), "index", array()));
                    echo "
                            </code>
                            <span id=\"original-query-";
                    // line 80
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                    echo "\" style=\"display: none;\">
                                ";
                    // line 81
                    echo $this->env->getExtension('doctrine_extension')->replaceQueryParameters($this->getAttribute($context["query"], "sql", array()), $this->getAttribute($context["query"], "params", array()));
                    echo "
                            </span>
                            <small>
                                <strong>Parameters</strong>: ";
                    // line 84
                    echo twig_escape_filter($this->env, $this->env->getExtension('yaml')->encode($this->getAttribute($context["query"], "params", array())), "html", null, true);
                    echo " <br />
                                [<span id=\"expandParams-";
                    // line 85
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                    echo "\" onclick=\"javascript:toggleRunnableQuery(this);\" target-data-id=\"original-query-";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                    echo "\" style=\"cursor: pointer;\">Display runnable query</span>]<br/>
                                <strong>Time</strong>: ";
                    // line 86
                    echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute($context["query"], "executionMS", array()) * 1000)), "html", null, true);
                    echo " ms
                            </small>
                            ";
                    // line 88
                    if ($this->getAttribute($context["query"], "explainable", array())) {
                        // line 89
                        echo "                                [<a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("panel" => "db", "token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "page" => "explain", "connection" => $context["connection"], "query" => $context["i"])), "html", null, true);
                        echo "\" onclick=\"return explain(this);\" style=\"text-decoration: none;\" title=\"Explains the query\" data-target-id=\"explain-";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo "-";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                        echo "\" >
                                    <img alt=\"+\" src=\"";
                        // line 90
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/images/blue_picto_more.gif"), "html", null, true);
                        echo "\" style=\"display: inline; width: 12px; height: 12px;\" />
                                    <img alt=\"-\" src=\"";
                        // line 91
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/images/blue_picto_less.gif"), "html", null, true);
                        echo "\" style=\"display: none; width: 12px; height: 12px;\" />
                                    <span style=\"vertical-align:top\">Explain query</span>
                                </a>]
                            ";
                    } else {
                        // line 95
                        echo "                                This query cannot be explained
                            ";
                    }
                    // line 97
                    echo "                        </div>
                        ";
                    // line 98
                    if ($this->getAttribute($context["query"], "explainable", array())) {
                        // line 99
                        echo "                        <div id=\"explain-";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo "-";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                        echo "\" class=\"loading\"></div>
                        ";
                    }
                    // line 101
                    echo "                    </li>
                ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['query'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 103
                echo "            </ul>
        ";
            }
            // line 105
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['connection'], $context['queries'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "
    <h2>Database Connections</h2>

    ";
        // line 109
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "connections", array())) {
            // line 110
            echo "        ";
            $this->loadTemplate("WebProfilerBundle:Profiler:table.html.twig", "DoctrineBundle:Collector:db.html.twig", 110)->display(array("data" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "connections", array())));
            // line 111
            echo "    ";
        } else {
            // line 112
            echo "        <p>
            <em>No connections.</em>
        </p>
    ";
        }
        // line 116
        echo "
    <h2>Entity Managers</h2>

    ";
        // line 119
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "managers", array())) {
            // line 120
            echo "        ";
            $this->loadTemplate("WebProfilerBundle:Profiler:table.html.twig", "DoctrineBundle:Collector:db.html.twig", 120)->display(array("data" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "managers", array())));
            // line 121
            echo "    ";
        } else {
            // line 122
            echo "        <p>
            <em>No entity managers.</em>
        </p>
    ";
        }
        // line 126
        echo "
    <h2>Mapping</h2>

    ";
        // line 129
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "entities", array()));
        foreach ($context['_seq'] as $context["manager"] => $context["classes"]) {
            // line 130
            echo "        <h3>Manager <em>";
            echo twig_escape_filter($this->env, $context["manager"], "html", null, true);
            echo "</em></h3>
        ";
            // line 131
            if (twig_test_empty($context["classes"])) {
                // line 132
                echo "            <p><em>No loaded entities.</em></p>
        ";
            } else {
                // line 134
                echo "            <table>
                <thead>
                <tr>
                    <th scope=\"col\">Class</th>
                    <th scope=\"col\">Mapping errors</th>
                </tr>
                </thead>
                <tbody>
                ";
                // line 142
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["classes"]);
                foreach ($context['_seq'] as $context["_key"] => $context["class"]) {
                    // line 143
                    echo "                    <tr>
                        <td>";
                    // line 144
                    echo twig_escape_filter($this->env, $context["class"], "html", null, true);
                    echo "</td>
                        <td>
                            ";
                    // line 146
                    if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "mappingErrors", array(), "any", false, true), $context["manager"], array(), "array", false, true), $context["class"], array(), "array", true, true)) {
                        // line 147
                        echo "                                <ul>
                                    ";
                        // line 148
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "mappingErrors", array()), $context["manager"], array(), "array"), $context["class"], array(), "array"));
                        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                            // line 149
                            echo "                                        <li>";
                            echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                            echo "</li>
                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 151
                        echo "                                </ul>
                            ";
                    } else {
                        // line 153
                        echo "                                Valid
                            ";
                    }
                    // line 155
                    echo "                        </td>
                    </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['class'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 158
                echo "                </tbody>
            </table>
        ";
            }
            // line 161
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['manager'], $context['classes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 162
        echo "
    <script type=\"text/javascript\">//<![CDATA[
        function explain(link) {
            \"use strict\";

            var imgs = link.children,
                target = link.getAttribute('data-target-id');

            Sfjs.toggle(target, imgs[0], imgs[1])
                .load(
                    target,
                    link.href,
                    null,
                    function(xhr, el) {
                        el.innerHTML = 'An error occurred while loading the details';
                        Sfjs.removeClass(el, 'loading');
                    }
                );

            return false;
        }

        function expandQuery(link) {
            var sections = link.children,
                target = link.getAttribute('data-target-id'),
                targetId = target.replace('code', ''),
                queriesParameters = document.getElementById('original-query' + targetId);

            if (queriesParameters.style.display != 'none') {
                queriesParameters.style.display = 'none';
                document.getElementById('small' + target).style.display = 'inline';
                document.getElementById('expandParams' + targetId).innerHTML = 'Display runnable query';
            }

            if (document.getElementById('small' + target).style.display != 'none') {
                document.getElementById('small' + target).style.display = 'none';
                document.getElementById(target).style.display = 'inline';

                sections[0].style.display = 'none';
                sections[1].style.display = 'inline';
                sections[2].style.display = 'inline';
            } else {
                document.getElementById('small' + target).style.display = 'inline';
                document.getElementById(target).style.display = 'none';

                sections[0].style.display = 'inline';
                sections[1].style.display = 'none';
                sections[2].style.display = 'none';
            }

            return false;
        }

        function toggleRunnableQuery(target) {
            var targetId = target.getAttribute('target-data-id').replace('original-query', ''),
                targetElement = document.getElementById(target.getAttribute('target-data-id')),
                elem;

            if (targetElement.style.display != 'block') {
                targetElement.style.display = 'block';
                target.innerHTML = 'Hide runnable query';

                document.getElementById('smallcode' + targetId).style.display = 'none';
                document.getElementById('code' + targetId).style.display = 'none';

                elem = document.getElementById('code' + targetId).parentElement.children[0];

                elem.children[0].style.display = 'inline';
                elem.children[1].style.display = 'none';
                elem.children[2].style.display = 'none';

            } else {
                targetElement.style.display = 'none';
                target.innerHTML = 'Display runnable query';

                document.getElementById('smallcode' + targetId).style.display = 'inline';
            }
        }

    //]]></script>

    <style>
        h3 {
            margin-bottom: 0px;
        }

        code {
            display: none;
        }

        code pre {
            padding: 5px;
        }
    </style>
";
    }

    public function getTemplateName()
    {
        return "DoctrineBundle:Collector:db.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  484 => 162,  478 => 161,  473 => 158,  465 => 155,  461 => 153,  457 => 151,  448 => 149,  444 => 148,  441 => 147,  439 => 146,  434 => 144,  431 => 143,  427 => 142,  417 => 134,  413 => 132,  411 => 131,  406 => 130,  402 => 129,  397 => 126,  391 => 122,  388 => 121,  385 => 120,  383 => 119,  378 => 116,  372 => 112,  369 => 111,  366 => 110,  364 => 109,  359 => 106,  345 => 105,  341 => 103,  326 => 101,  318 => 99,  316 => 98,  313 => 97,  309 => 95,  302 => 91,  298 => 90,  289 => 89,  287 => 88,  282 => 86,  272 => 85,  268 => 84,  262 => 81,  256 => 80,  251 => 78,  245 => 77,  239 => 74,  233 => 73,  228 => 71,  224 => 70,  218 => 69,  212 => 68,  203 => 67,  186 => 66,  181 => 65,  175 => 61,  173 => 60,  168 => 59,  151 => 58,  147 => 56,  144 => 55,  136 => 51,  132 => 49,  130 => 48,  129 => 47,  128 => 45,  126 => 44,  123 => 43,  120 => 42,  112 => 37,  108 => 36,  102 => 32,  99 => 31,  94 => 28,  86 => 25,  79 => 21,  72 => 17,  68 => 15,  65 => 14,  62 => 13,  58 => 11,  55 => 10,  49 => 8,  47 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,  21 => 1,);
    }
}
/* {% extends app.request.isXmlHttpRequest ? 'WebProfilerBundle:Profiler:ajax_layout.html.twig' : 'WebProfilerBundle:Profiler:layout.html.twig' %}*/
/* */
/* {% block toolbar %}*/
/*     {% set icon %}*/
/*         <img width="20" height="28" alt="Database" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcCAYAAABh2p9gAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAQRJREFUeNpi/P//PwM1ARMDlcGogZQDlpMnT7pxc3NbA9nhQKxOpL5rQLwJiPeBsI6Ozl+YBOOOHTv+AOllQNwtLS39F2owKYZ/gRq8G4i3ggxEToggWzvc3d2Pk+1lNL4fFAs6ODi8JzdS7mMRVyDVoAMHDsANdAPiOCC+jCQvQKqBQB/BDbwBxK5AHA3E/kB8nKJkA8TMQBwLxaBIKQbi70AvTADSBiSadwFXpCikpKQU8PDwkGTaly9fHFigkaKIJid4584dkiMFFI6jkTJII0WVmpHCAixZQEXWYhDeuXMnyLsVlEQKI45qFBQZ8eRECi4DBaAlDqle/8A48ip6gAADANdQY88Uc0oGAAAAAElFTkSuQmCC" />*/
/*         <span class="sf-toolbar-status{% if 50 < collector.querycount %} sf-toolbar-status-yellow{% endif %}">{{ collector.querycount }}</span>*/
/*         {% if collector.querycount > 0 %}*/
/*             <span class="sf-toolbar-info-piece-additional-detail">in {{ '%0.2f'|format(collector.time * 1000) }} ms</span>*/
/*         {% endif %}*/
/*         {% if collector.invalidEntityCount > 0 %}*/
/*             <span class="sf-toolbar-info-piece-additional sf-toolbar-status sf-toolbar-status-red"> </span>*/
/*         {% endif %}*/
/*     {% endset %}*/
/*     {% set text %}*/
/*         <div class="sf-toolbar-info-piece">*/
/*             <b>DB Queries</b>*/
/*             <span>{{ collector.querycount }}</span>*/
/*         </div>*/
/*         <div class="sf-toolbar-info-piece">*/
/*             <b>Query time</b>*/
/*             <span>{{ '%0.2f'|format(collector.time * 1000) }} ms</span>*/
/*         </div>*/
/*         <div class="sf-toolbar-info-piece">*/
/*             <b>Invalid entities</b>*/
/*             <span class="sf-toolbar-status sf-toolbar-status-{{ collector.invalidEntityCount > 0 ? 'red' : 'green' }}">{{ collector.invalidEntityCount }}</span>*/
/*         </div>*/
/*     {% endset %}*/
/*     {% include 'WebProfilerBundle:Profiler:toolbar_item.html.twig' with { 'link': profiler_url } %}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAcCAYAAAB/E6/TAAABLUlEQVR42u3TP0vDQBiA8UK/gDiLzi0IhU4OEunk5OQUAhGSOBUCzqWfIKSzX8DRySF0URCcMjWLIJjFD9Cpk/D6HITecEPUuzhIAz8CIdyTP/f2iqI4qaqqDx8l5Ic2uIeP/bquezCokOAFF+oCN3t4gPzSEjc4NEPaCldQbzjELTYW0RJzHDchwwem+ons6ZBpLSJ7nueJC22h0V+FzmwWV0ee59vQNV67CGVZJmEYbkNjfpY6X6I0Qo4/3RMmTdDDspuQVsJvgkP3IdMbIkIjLPBoadG2646iKJI0Ta2wxm6OdnP0/Tk6DYJgHcfxpw21RtscDTDDnaVZ26474GkkSRIrrPEv5sgMTfHe+cA2O6wPH6vOBpYQNALneHb96XTEDI6dzpEZ0VzO0Rf3pP5LMLI4tAAAAABJRU5ErkJggg==" alt="" /></span>*/
/*     <strong>Doctrine</strong>*/
/*     <span class="count">*/
/*         <span>{{ collector.querycount }}</span>*/
/*         <span>{{ '%0.0f'|format(collector.time * 1000) }} ms</span>*/
/*     </span>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {% if 'explain' == page %}*/
/*         {{ render(controller('DoctrineBundle:Profiler:explain', {*/
/*             'token': token,*/
/*             'panel': 'db',*/
/*             'connectionName': app.request.query.get('connection'),*/
/*             'query': app.request.query.get('query')*/
/*         })) }}*/
/*     {% else %}*/
/*         {{ block('queries') }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block queries %}*/
/*     <h2>Queries</h2>*/
/* */
/*     {% for connection, queries in collector.queries %}*/
/*         <h3>Connection <em>{{ connection }}</em></h3>*/
/*         {% if queries is empty %}*/
/*             <p>*/
/*                 <em>No queries.</em>*/
/*             </p>*/
/*         {% else %}*/
/*             <ul class="alt" id="queriesPlaceholder-{{ loop.index }}">*/
/*                 {% for i, query in queries %}*/
/*                     <li class="{{ cycle(['odd', 'even'], i) }}" data-extra-info="{{ '%0.2f'|format(query.executionMS * 1000) }}" data-target-id="{{ i }}">*/
/*                         <div style="margin-top: 4px" id="queryNo-{{ i }}-{{ loop.parent.loop.index }}">*/
/*                             <div onclick="return expandQuery(this);" title="Expand query" data-target-id="code-{{ i }}-{{ loop.parent.loop.index }}" style="cursor: pointer;">*/
/*                                 <img alt="+" src="{{ asset('bundles/framework/images/blue_picto_more.gif') }}" style="display: inline;" />*/
/*                                 <img alt="-" src="{{ asset('bundles/framework/images/blue_picto_less.gif') }}" style="display: none;" />*/
/*                                 <span style="display: none">Shrink query</span>*/
/*                                 <span id="smallcode-{{ i }}-{{ loop.parent.loop.index }}">*/
/*                                     {{ query.sql|doctrine_minify_query|raw }}*/
/*                                 </span>*/
/*                             </div>*/
/*                             <code id="code-{{ i }}-{{ loop.parent.loop.index }}">*/
/*                                 {{ query.sql|doctrine_pretty_query(i, loop.parent.loop.index)|raw }}*/
/*                             </code>*/
/*                             <span id="original-query-{{ i }}-{{ loop.parent.loop.index }}" style="display: none;">*/
/*                                 {{ query.sql|doctrine_replace_query_parameters(query.params)|raw }}*/
/*                             </span>*/
/*                             <small>*/
/*                                 <strong>Parameters</strong>: {{ query.params|yaml_encode }} <br />*/
/*                                 [<span id="expandParams-{{ i }}-{{ loop.parent.loop.index }}" onclick="javascript:toggleRunnableQuery(this);" target-data-id="original-query-{{ i }}-{{ loop.parent.loop.index }}" style="cursor: pointer;">Display runnable query</span>]<br/>*/
/*                                 <strong>Time</strong>: {{ '%0.2f'|format(query.executionMS * 1000) }} ms*/
/*                             </small>*/
/*                             {% if query.explainable %}*/
/*                                 [<a href="{{ path('_profiler', {'panel': 'db', 'token': token, 'page': 'explain', 'connection': connection, 'query': i}) }}" onclick="return explain(this);" style="text-decoration: none;" title="Explains the query" data-target-id="explain-{{ i }}-{{ loop.parent.loop.index }}" >*/
/*                                     <img alt="+" src="{{ asset('bundles/framework/images/blue_picto_more.gif') }}" style="display: inline; width: 12px; height: 12px;" />*/
/*                                     <img alt="-" src="{{ asset('bundles/framework/images/blue_picto_less.gif') }}" style="display: none; width: 12px; height: 12px;" />*/
/*                                     <span style="vertical-align:top">Explain query</span>*/
/*                                 </a>]*/
/*                             {% else %}*/
/*                                 This query cannot be explained*/
/*                             {% endif %}*/
/*                         </div>*/
/*                         {% if query.explainable %}*/
/*                         <div id="explain-{{ i }}-{{ loop.parent.loop.index }}" class="loading"></div>*/
/*                         {% endif %}*/
/*                     </li>*/
/*                 {% endfor %}*/
/*             </ul>*/
/*         {% endif %}*/
/*     {% endfor %}*/
/* */
/*     <h2>Database Connections</h2>*/
/* */
/*     {% if collector.connections %}*/
/*         {% include 'WebProfilerBundle:Profiler:table.html.twig' with {data: collector.connections} only %}*/
/*     {% else %}*/
/*         <p>*/
/*             <em>No connections.</em>*/
/*         </p>*/
/*     {% endif %}*/
/* */
/*     <h2>Entity Managers</h2>*/
/* */
/*     {% if collector.managers %}*/
/*         {% include 'WebProfilerBundle:Profiler:table.html.twig' with {data: collector.managers} only %}*/
/*     {% else %}*/
/*         <p>*/
/*             <em>No entity managers.</em>*/
/*         </p>*/
/*     {% endif %}*/
/* */
/*     <h2>Mapping</h2>*/
/* */
/*     {% for manager, classes in collector.entities %}*/
/*         <h3>Manager <em>{{ manager }}</em></h3>*/
/*         {% if classes is empty %}*/
/*             <p><em>No loaded entities.</em></p>*/
/*         {% else %}*/
/*             <table>*/
/*                 <thead>*/
/*                 <tr>*/
/*                     <th scope="col">Class</th>*/
/*                     <th scope="col">Mapping errors</th>*/
/*                 </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                 {% for class in classes %}*/
/*                     <tr>*/
/*                         <td>{{ class }}</td>*/
/*                         <td>*/
/*                             {% if collector.mappingErrors[manager][class] is defined %}*/
/*                                 <ul>*/
/*                                     {% for error in collector.mappingErrors[manager][class] %}*/
/*                                         <li>{{ error }}</li>*/
/*                                     {% endfor %}*/
/*                                 </ul>*/
/*                             {% else %}*/
/*                                 Valid*/
/*                             {% endif %}*/
/*                         </td>*/
/*                     </tr>*/
/*                 {% endfor %}*/
/*                 </tbody>*/
/*             </table>*/
/*         {% endif %}*/
/*     {% endfor %}*/
/* */
/*     <script type="text/javascript">//<![CDATA[*/
/*         function explain(link) {*/
/*             "use strict";*/
/* */
/*             var imgs = link.children,*/
/*                 target = link.getAttribute('data-target-id');*/
/* */
/*             Sfjs.toggle(target, imgs[0], imgs[1])*/
/*                 .load(*/
/*                     target,*/
/*                     link.href,*/
/*                     null,*/
/*                     function(xhr, el) {*/
/*                         el.innerHTML = 'An error occurred while loading the details';*/
/*                         Sfjs.removeClass(el, 'loading');*/
/*                     }*/
/*                 );*/
/* */
/*             return false;*/
/*         }*/
/* */
/*         function expandQuery(link) {*/
/*             var sections = link.children,*/
/*                 target = link.getAttribute('data-target-id'),*/
/*                 targetId = target.replace('code', ''),*/
/*                 queriesParameters = document.getElementById('original-query' + targetId);*/
/* */
/*             if (queriesParameters.style.display != 'none') {*/
/*                 queriesParameters.style.display = 'none';*/
/*                 document.getElementById('small' + target).style.display = 'inline';*/
/*                 document.getElementById('expandParams' + targetId).innerHTML = 'Display runnable query';*/
/*             }*/
/* */
/*             if (document.getElementById('small' + target).style.display != 'none') {*/
/*                 document.getElementById('small' + target).style.display = 'none';*/
/*                 document.getElementById(target).style.display = 'inline';*/
/* */
/*                 sections[0].style.display = 'none';*/
/*                 sections[1].style.display = 'inline';*/
/*                 sections[2].style.display = 'inline';*/
/*             } else {*/
/*                 document.getElementById('small' + target).style.display = 'inline';*/
/*                 document.getElementById(target).style.display = 'none';*/
/* */
/*                 sections[0].style.display = 'inline';*/
/*                 sections[1].style.display = 'none';*/
/*                 sections[2].style.display = 'none';*/
/*             }*/
/* */
/*             return false;*/
/*         }*/
/* */
/*         function toggleRunnableQuery(target) {*/
/*             var targetId = target.getAttribute('target-data-id').replace('original-query', ''),*/
/*                 targetElement = document.getElementById(target.getAttribute('target-data-id')),*/
/*                 elem;*/
/* */
/*             if (targetElement.style.display != 'block') {*/
/*                 targetElement.style.display = 'block';*/
/*                 target.innerHTML = 'Hide runnable query';*/
/* */
/*                 document.getElementById('smallcode' + targetId).style.display = 'none';*/
/*                 document.getElementById('code' + targetId).style.display = 'none';*/
/* */
/*                 elem = document.getElementById('code' + targetId).parentElement.children[0];*/
/* */
/*                 elem.children[0].style.display = 'inline';*/
/*                 elem.children[1].style.display = 'none';*/
/*                 elem.children[2].style.display = 'none';*/
/* */
/*             } else {*/
/*                 targetElement.style.display = 'none';*/
/*                 target.innerHTML = 'Display runnable query';*/
/* */
/*                 document.getElementById('smallcode' + targetId).style.display = 'inline';*/
/*             }*/
/*         }*/
/* */
/*     //]]></script>*/
/* */
/*     <style>*/
/*         h3 {*/
/*             margin-bottom: 0px;*/
/*         }*/
/* */
/*         code {*/
/*             display: none;*/
/*         }*/
/* */
/*         code pre {*/
/*             padding: 5px;*/
/*         }*/
/*     </style>*/
/* {% endblock %}*/
/* */
