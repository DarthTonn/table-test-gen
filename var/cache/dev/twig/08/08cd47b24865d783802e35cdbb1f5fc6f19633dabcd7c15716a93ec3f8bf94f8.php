<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_a7a4bdf347ac436c2b4fccc97c9805c4c6294646549851e17f96e6b69e938f43 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_0b3e808ff94e00f49e4c6f12ab35a0cef3b90e4690f88b568fc4afa180179b40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b3e808ff94e00f49e4c6f12ab35a0cef3b90e4690f88b568fc4afa180179b40->enter($__internal_0b3e808ff94e00f49e4c6f12ab35a0cef3b90e4690f88b568fc4afa180179b40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_eb42db5a18b7e2125f4d1b8d052ee4558ff2eb1a1247a8c3d39e1007b1a41d7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb42db5a18b7e2125f4d1b8d052ee4558ff2eb1a1247a8c3d39e1007b1a41d7d->enter($__internal_eb42db5a18b7e2125f4d1b8d052ee4558ff2eb1a1247a8c3d39e1007b1a41d7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b3e808ff94e00f49e4c6f12ab35a0cef3b90e4690f88b568fc4afa180179b40->leave($__internal_0b3e808ff94e00f49e4c6f12ab35a0cef3b90e4690f88b568fc4afa180179b40_prof);

        
        $__internal_eb42db5a18b7e2125f4d1b8d052ee4558ff2eb1a1247a8c3d39e1007b1a41d7d->leave($__internal_eb42db5a18b7e2125f4d1b8d052ee4558ff2eb1a1247a8c3d39e1007b1a41d7d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_18ad5549d5d8ac1f79a7423d0ed25248894a69a680238cd5a523cd6e69944850 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18ad5549d5d8ac1f79a7423d0ed25248894a69a680238cd5a523cd6e69944850->enter($__internal_18ad5549d5d8ac1f79a7423d0ed25248894a69a680238cd5a523cd6e69944850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e563afc7053f0850bae0be0a5053fe3f770669e9b4e58825a74992e04e7d50d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e563afc7053f0850bae0be0a5053fe3f770669e9b4e58825a74992e04e7d50d6->enter($__internal_e563afc7053f0850bae0be0a5053fe3f770669e9b4e58825a74992e04e7d50d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_e563afc7053f0850bae0be0a5053fe3f770669e9b4e58825a74992e04e7d50d6->leave($__internal_e563afc7053f0850bae0be0a5053fe3f770669e9b4e58825a74992e04e7d50d6_prof);

        
        $__internal_18ad5549d5d8ac1f79a7423d0ed25248894a69a680238cd5a523cd6e69944850->leave($__internal_18ad5549d5d8ac1f79a7423d0ed25248894a69a680238cd5a523cd6e69944850_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2577862d3099cef7bfc6d6d13f6b6cada1e02e092430c0e8dbbb2a3c51b46fec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2577862d3099cef7bfc6d6d13f6b6cada1e02e092430c0e8dbbb2a3c51b46fec->enter($__internal_2577862d3099cef7bfc6d6d13f6b6cada1e02e092430c0e8dbbb2a3c51b46fec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d3e4312e2b906f092dcb3cbb9486824d302a5047bc803973497a91a98cacf449 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3e4312e2b906f092dcb3cbb9486824d302a5047bc803973497a91a98cacf449->enter($__internal_d3e4312e2b906f092dcb3cbb9486824d302a5047bc803973497a91a98cacf449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_d3e4312e2b906f092dcb3cbb9486824d302a5047bc803973497a91a98cacf449->leave($__internal_d3e4312e2b906f092dcb3cbb9486824d302a5047bc803973497a91a98cacf449_prof);

        
        $__internal_2577862d3099cef7bfc6d6d13f6b6cada1e02e092430c0e8dbbb2a3c51b46fec->leave($__internal_2577862d3099cef7bfc6d6d13f6b6cada1e02e092430c0e8dbbb2a3c51b46fec_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8d27b486f9eefef658e753217b9bc9804cc9c421760b6d1e91cad14548598df4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d27b486f9eefef658e753217b9bc9804cc9c421760b6d1e91cad14548598df4->enter($__internal_8d27b486f9eefef658e753217b9bc9804cc9c421760b6d1e91cad14548598df4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a0422b4812d04b96e741789f19f82851d1547874a7b8ed0835d761b727912a43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0422b4812d04b96e741789f19f82851d1547874a7b8ed0835d761b727912a43->enter($__internal_a0422b4812d04b96e741789f19f82851d1547874a7b8ed0835d761b727912a43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_a0422b4812d04b96e741789f19f82851d1547874a7b8ed0835d761b727912a43->leave($__internal_a0422b4812d04b96e741789f19f82851d1547874a7b8ed0835d761b727912a43_prof);

        
        $__internal_8d27b486f9eefef658e753217b9bc9804cc9c421760b6d1e91cad14548598df4->leave($__internal_8d27b486f9eefef658e753217b9bc9804cc9c421760b6d1e91cad14548598df4_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/table_test/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
