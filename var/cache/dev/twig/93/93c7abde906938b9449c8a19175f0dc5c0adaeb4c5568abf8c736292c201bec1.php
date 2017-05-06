<?php

/* @WebProfiler/Collector/twig.html.twig */
class __TwigTemplate_c6ddd04794b74bedb6f01116fe842d3ff8c52145a5b9ec3fd2ef4b945c4028ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/twig.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_53a9107a6ec0c9250bfb6d7842ff6c395324c74a2887f7ba00b54b8cad769bab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53a9107a6ec0c9250bfb6d7842ff6c395324c74a2887f7ba00b54b8cad769bab->enter($__internal_53a9107a6ec0c9250bfb6d7842ff6c395324c74a2887f7ba00b54b8cad769bab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/twig.html.twig"));

        $__internal_2fb387f0e0083526e0cd0f94a54d6f88628a5895dac3897682f6927ea88564fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fb387f0e0083526e0cd0f94a54d6f88628a5895dac3897682f6927ea88564fa->enter($__internal_2fb387f0e0083526e0cd0f94a54d6f88628a5895dac3897682f6927ea88564fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/twig.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_53a9107a6ec0c9250bfb6d7842ff6c395324c74a2887f7ba00b54b8cad769bab->leave($__internal_53a9107a6ec0c9250bfb6d7842ff6c395324c74a2887f7ba00b54b8cad769bab_prof);

        
        $__internal_2fb387f0e0083526e0cd0f94a54d6f88628a5895dac3897682f6927ea88564fa->leave($__internal_2fb387f0e0083526e0cd0f94a54d6f88628a5895dac3897682f6927ea88564fa_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4569d67de4d57c2dcfa10de2795bbfa090e5172a250dc454c8ef45e0087c34f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4569d67de4d57c2dcfa10de2795bbfa090e5172a250dc454c8ef45e0087c34f6->enter($__internal_4569d67de4d57c2dcfa10de2795bbfa090e5172a250dc454c8ef45e0087c34f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_8408c49a97ade252fd258dd200c2afa0ec5b1488e568e57919d65888027a84a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8408c49a97ade252fd258dd200c2afa0ec5b1488e568e57919d65888027a84a4->enter($__internal_8408c49a97ade252fd258dd200c2afa0ec5b1488e568e57919d65888027a84a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        $context["time"] = (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "templatecount", array())) ? (sprintf("%0.0f", $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "time", array()))) : ("n/a"));
        // line 5
        echo "    ";
        ob_start();
        // line 6
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/twig.svg");
        echo "
        <span class=\"sf-toolbar-value\">";
        // line 7
        echo twig_escape_filter($this->env, ($context["time"] ?? $this->getContext($context, "time")), "html", null, true);
        echo "</span>
        <span class=\"sf-toolbar-label\">ms</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        echo "
    ";
        // line 11
        ob_start();
        // line 12
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Render Time</b>
            <span>";
        // line 14
        echo twig_escape_filter($this->env, ($context["time"] ?? $this->getContext($context, "time")), "html", null, true);
        echo " ms</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Template Calls</b>
            <span class=\"sf-toolbar-status\">";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "templatecount", array()), "html", null, true);
        echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Block Calls</b>
            <span class=\"sf-toolbar-status\">";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "blockcount", array()), "html", null, true);
        echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Macro Calls</b>
            <span class=\"sf-toolbar-status\">";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "macrocount", array()), "html", null, true);
        echo "</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => ($context["profiler_url"] ?? $this->getContext($context, "profiler_url"))));
        echo "
";
        
        $__internal_8408c49a97ade252fd258dd200c2afa0ec5b1488e568e57919d65888027a84a4->leave($__internal_8408c49a97ade252fd258dd200c2afa0ec5b1488e568e57919d65888027a84a4_prof);

        
        $__internal_4569d67de4d57c2dcfa10de2795bbfa090e5172a250dc454c8ef45e0087c34f6->leave($__internal_4569d67de4d57c2dcfa10de2795bbfa090e5172a250dc454c8ef45e0087c34f6_prof);

    }

    // line 33
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1b2fc9cb9337ad94844f42df7e400c949f23ac5ac1a3c994ebf08a288dc42b08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b2fc9cb9337ad94844f42df7e400c949f23ac5ac1a3c994ebf08a288dc42b08->enter($__internal_1b2fc9cb9337ad94844f42df7e400c949f23ac5ac1a3c994ebf08a288dc42b08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_66e589a8e63f243a7da70ecddd57fba811b9a8bb53968755240fa566a441ae56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66e589a8e63f243a7da70ecddd57fba811b9a8bb53968755240fa566a441ae56->enter($__internal_66e589a8e63f243a7da70ecddd57fba811b9a8bb53968755240fa566a441ae56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 34
        echo "    <span class=\"label\">
        <span class=\"icon\">";
        // line 35
        echo twig_include($this->env, $context, "@WebProfiler/Icon/twig.svg");
        echo "</span>
        <strong>Twig</strong>
    </span>
";
        
        $__internal_66e589a8e63f243a7da70ecddd57fba811b9a8bb53968755240fa566a441ae56->leave($__internal_66e589a8e63f243a7da70ecddd57fba811b9a8bb53968755240fa566a441ae56_prof);

        
        $__internal_1b2fc9cb9337ad94844f42df7e400c949f23ac5ac1a3c994ebf08a288dc42b08->leave($__internal_1b2fc9cb9337ad94844f42df7e400c949f23ac5ac1a3c994ebf08a288dc42b08_prof);

    }

    // line 40
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5a15dede24802924c59c5a6529388bb1b79f54443eee0d0a1c197a7c044102f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a15dede24802924c59c5a6529388bb1b79f54443eee0d0a1c197a7c044102f5->enter($__internal_5a15dede24802924c59c5a6529388bb1b79f54443eee0d0a1c197a7c044102f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b3615568e34efc6a716f2e612043f3b8f2f81ee8bc4c2297abe3ce875649cbd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3615568e34efc6a716f2e612043f3b8f2f81ee8bc4c2297abe3ce875649cbd8->enter($__internal_b3615568e34efc6a716f2e612043f3b8f2f81ee8bc4c2297abe3ce875649cbd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 41
        echo "    ";
        if (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "templatecount", array()) == 0)) {
            // line 42
            echo "        <h2>Twig</h2>

        <div class=\"empty\">
            <p>No Twig templates were rendered for this request.</p>
        </div>
    ";
        } else {
            // line 48
            echo "        <h2>Twig Metrics</h2>

        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">";
            // line 52
            echo twig_escape_filter($this->env, sprintf("%0.0f", $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "time", array())), "html", null, true);
            echo " <span class=\"unit\">ms</span></span>
                <span class=\"label\">Render time</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "templatecount", array()), "html", null, true);
            echo "</span>
                <span class=\"label\">Template calls</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "blockcount", array()), "html", null, true);
            echo "</span>
                <span class=\"label\">Block calls</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "macrocount", array()), "html", null, true);
            echo "</span>
                <span class=\"label\">Macro calls</span>
            </div>
        </div>

        <p class=\"help\">
            Render time includes sub-requests rendering time (if any).
        </p>

        <h2>Rendered Templates</h2>

        <table>
            <thead>
                <tr>
                    <th scope=\"col\">Template Name</th>
                    <th scope=\"col\">Render Count</th>
                </tr>
            </thead>
            <tbody>
            ";
            // line 86
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "templates", array()));
            foreach ($context['_seq'] as $context["template"] => $context["count"]) {
                // line 87
                echo "                <tr>
                    <td>";
                // line 88
                echo twig_escape_filter($this->env, $context["template"], "html", null, true);
                echo "</td>
                    <td class=\"font-normal\">";
                // line 89
                echo twig_escape_filter($this->env, $context["count"], "html", null, true);
                echo "</td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['template'], $context['count'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "            </tbody>
        </table>

        <h2>Rendering Call Graph</h2>

        <div id=\"twig-dump\">
            ";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "htmlcallgraph", array()), "html", null, true);
            echo "
        </div>
    ";
        }
        
        $__internal_b3615568e34efc6a716f2e612043f3b8f2f81ee8bc4c2297abe3ce875649cbd8->leave($__internal_b3615568e34efc6a716f2e612043f3b8f2f81ee8bc4c2297abe3ce875649cbd8_prof);

        
        $__internal_5a15dede24802924c59c5a6529388bb1b79f54443eee0d0a1c197a7c044102f5->leave($__internal_5a15dede24802924c59c5a6529388bb1b79f54443eee0d0a1c197a7c044102f5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/twig.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 98,  237 => 92,  228 => 89,  224 => 88,  221 => 87,  217 => 86,  195 => 67,  187 => 62,  179 => 57,  171 => 52,  165 => 48,  157 => 42,  154 => 41,  145 => 40,  131 => 35,  128 => 34,  119 => 33,  107 => 30,  104 => 29,  98 => 26,  91 => 22,  84 => 18,  77 => 14,  73 => 12,  71 => 11,  68 => 10,  62 => 7,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set time = collector.templatecount ? '%0.0f'|format(collector.time) : 'n/a' %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/twig.svg') }}
        <span class=\"sf-toolbar-value\">{{ time }}</span>
        <span class=\"sf-toolbar-label\">ms</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b>Render Time</b>
            <span>{{ time }} ms</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Template Calls</b>
            <span class=\"sf-toolbar-status\">{{ collector.templatecount }}</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Block Calls</b>
            <span class=\"sf-toolbar-status\">{{ collector.blockcount }}</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Macro Calls</b>
            <span class=\"sf-toolbar-status\">{{ collector.macrocount }}</span>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url }) }}
{% endblock %}

{% block menu %}
    <span class=\"label\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/twig.svg') }}</span>
        <strong>Twig</strong>
    </span>
{% endblock %}

{% block panel %}
    {% if collector.templatecount == 0 %}
        <h2>Twig</h2>

        <div class=\"empty\">
            <p>No Twig templates were rendered for this request.</p>
        </div>
    {% else %}
        <h2>Twig Metrics</h2>

        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">{{ '%0.0f'|format(collector.time) }} <span class=\"unit\">ms</span></span>
                <span class=\"label\">Render time</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">{{ collector.templatecount }}</span>
                <span class=\"label\">Template calls</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">{{ collector.blockcount }}</span>
                <span class=\"label\">Block calls</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">{{ collector.macrocount }}</span>
                <span class=\"label\">Macro calls</span>
            </div>
        </div>

        <p class=\"help\">
            Render time includes sub-requests rendering time (if any).
        </p>

        <h2>Rendered Templates</h2>

        <table>
            <thead>
                <tr>
                    <th scope=\"col\">Template Name</th>
                    <th scope=\"col\">Render Count</th>
                </tr>
            </thead>
            <tbody>
            {% for template, count in collector.templates %}
                <tr>
                    <td>{{ template }}</td>
                    <td class=\"font-normal\">{{ count }}</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>

        <h2>Rendering Call Graph</h2>

        <div id=\"twig-dump\">
            {{ collector.htmlcallgraph }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/twig.html.twig", "/var/www/table_test/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/twig.html.twig");
    }
}