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
        $__internal_1c3ef8067831703a14b55595eed55bc7d4d51d781b727452ca705d5128e085c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c3ef8067831703a14b55595eed55bc7d4d51d781b727452ca705d5128e085c1->enter($__internal_1c3ef8067831703a14b55595eed55bc7d4d51d781b727452ca705d5128e085c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_a72ca942fe70af77b1b5e1a27382e8a4833d15a63788e65550ae5a8d9164ffa1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a72ca942fe70af77b1b5e1a27382e8a4833d15a63788e65550ae5a8d9164ffa1->enter($__internal_a72ca942fe70af77b1b5e1a27382e8a4833d15a63788e65550ae5a8d9164ffa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c3ef8067831703a14b55595eed55bc7d4d51d781b727452ca705d5128e085c1->leave($__internal_1c3ef8067831703a14b55595eed55bc7d4d51d781b727452ca705d5128e085c1_prof);

        
        $__internal_a72ca942fe70af77b1b5e1a27382e8a4833d15a63788e65550ae5a8d9164ffa1->leave($__internal_a72ca942fe70af77b1b5e1a27382e8a4833d15a63788e65550ae5a8d9164ffa1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f8bbd3016ba713aa5dc74f9c1d9070cecdf7768f0d1ab4fa5d3bd3d52bf83417 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8bbd3016ba713aa5dc74f9c1d9070cecdf7768f0d1ab4fa5d3bd3d52bf83417->enter($__internal_f8bbd3016ba713aa5dc74f9c1d9070cecdf7768f0d1ab4fa5d3bd3d52bf83417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_db9be1ec8d46ba41913a678c671e16c91b67600cadce78db5fda4e55bf64c367 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db9be1ec8d46ba41913a678c671e16c91b67600cadce78db5fda4e55bf64c367->enter($__internal_db9be1ec8d46ba41913a678c671e16c91b67600cadce78db5fda4e55bf64c367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_db9be1ec8d46ba41913a678c671e16c91b67600cadce78db5fda4e55bf64c367->leave($__internal_db9be1ec8d46ba41913a678c671e16c91b67600cadce78db5fda4e55bf64c367_prof);

        
        $__internal_f8bbd3016ba713aa5dc74f9c1d9070cecdf7768f0d1ab4fa5d3bd3d52bf83417->leave($__internal_f8bbd3016ba713aa5dc74f9c1d9070cecdf7768f0d1ab4fa5d3bd3d52bf83417_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ac221f1105964fd64ca2d9fb1cfa2e6b657357f4b066cd403ac8e201bcb6728a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac221f1105964fd64ca2d9fb1cfa2e6b657357f4b066cd403ac8e201bcb6728a->enter($__internal_ac221f1105964fd64ca2d9fb1cfa2e6b657357f4b066cd403ac8e201bcb6728a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_24e05c2b43790cd6246b63082d2627b2e2b4cf6767e95fe328eed8c86dc0f63b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24e05c2b43790cd6246b63082d2627b2e2b4cf6767e95fe328eed8c86dc0f63b->enter($__internal_24e05c2b43790cd6246b63082d2627b2e2b4cf6767e95fe328eed8c86dc0f63b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_24e05c2b43790cd6246b63082d2627b2e2b4cf6767e95fe328eed8c86dc0f63b->leave($__internal_24e05c2b43790cd6246b63082d2627b2e2b4cf6767e95fe328eed8c86dc0f63b_prof);

        
        $__internal_ac221f1105964fd64ca2d9fb1cfa2e6b657357f4b066cd403ac8e201bcb6728a->leave($__internal_ac221f1105964fd64ca2d9fb1cfa2e6b657357f4b066cd403ac8e201bcb6728a_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4abb24307459ff6b0771bb35014d51f49859abd719ff1edae4b95662d7d1fee4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4abb24307459ff6b0771bb35014d51f49859abd719ff1edae4b95662d7d1fee4->enter($__internal_4abb24307459ff6b0771bb35014d51f49859abd719ff1edae4b95662d7d1fee4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_94bd227875247b91d3661df53d59354b6373d4595cfef8d6a4a1b3df4d7940af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94bd227875247b91d3661df53d59354b6373d4595cfef8d6a4a1b3df4d7940af->enter($__internal_94bd227875247b91d3661df53d59354b6373d4595cfef8d6a4a1b3df4d7940af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_94bd227875247b91d3661df53d59354b6373d4595cfef8d6a4a1b3df4d7940af->leave($__internal_94bd227875247b91d3661df53d59354b6373d4595cfef8d6a4a1b3df4d7940af_prof);

        
        $__internal_4abb24307459ff6b0771bb35014d51f49859abd719ff1edae4b95662d7d1fee4->leave($__internal_4abb24307459ff6b0771bb35014d51f49859abd719ff1edae4b95662d7d1fee4_prof);

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
