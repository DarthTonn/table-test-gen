<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_20a34671231c95d3c753144508fb395ea4cc163d7f226dae157989a4858b6089 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_12a246ceae5b617ea177b18585632df18d64184c8801a1663ba42c27dcc0f03f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12a246ceae5b617ea177b18585632df18d64184c8801a1663ba42c27dcc0f03f->enter($__internal_12a246ceae5b617ea177b18585632df18d64184c8801a1663ba42c27dcc0f03f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_f9958a110e21c3e731ef66b1385c7fc453f7aa03bf1185991632efbecc952e9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9958a110e21c3e731ef66b1385c7fc453f7aa03bf1185991632efbecc952e9f->enter($__internal_f9958a110e21c3e731ef66b1385c7fc453f7aa03bf1185991632efbecc952e9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12a246ceae5b617ea177b18585632df18d64184c8801a1663ba42c27dcc0f03f->leave($__internal_12a246ceae5b617ea177b18585632df18d64184c8801a1663ba42c27dcc0f03f_prof);

        
        $__internal_f9958a110e21c3e731ef66b1385c7fc453f7aa03bf1185991632efbecc952e9f->leave($__internal_f9958a110e21c3e731ef66b1385c7fc453f7aa03bf1185991632efbecc952e9f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_799c5252aac1c91b917ca6555cb0c0e359cc49184134e65e7143d92520b4cd27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_799c5252aac1c91b917ca6555cb0c0e359cc49184134e65e7143d92520b4cd27->enter($__internal_799c5252aac1c91b917ca6555cb0c0e359cc49184134e65e7143d92520b4cd27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_58fd129c16b81a36774d40a8b2aeca151c045c7705422ad7c94a15a8225c7467 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58fd129c16b81a36774d40a8b2aeca151c045c7705422ad7c94a15a8225c7467->enter($__internal_58fd129c16b81a36774d40a8b2aeca151c045c7705422ad7c94a15a8225c7467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_58fd129c16b81a36774d40a8b2aeca151c045c7705422ad7c94a15a8225c7467->leave($__internal_58fd129c16b81a36774d40a8b2aeca151c045c7705422ad7c94a15a8225c7467_prof);

        
        $__internal_799c5252aac1c91b917ca6555cb0c0e359cc49184134e65e7143d92520b4cd27->leave($__internal_799c5252aac1c91b917ca6555cb0c0e359cc49184134e65e7143d92520b4cd27_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0fa110d3b2febbd930fd3a55be9680e72597eb9a1d7a9ac0ae2adb576eea8fc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fa110d3b2febbd930fd3a55be9680e72597eb9a1d7a9ac0ae2adb576eea8fc7->enter($__internal_0fa110d3b2febbd930fd3a55be9680e72597eb9a1d7a9ac0ae2adb576eea8fc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f246095830ed8ed70c628556cea838312da245abcaebac9d7147a95436ac903b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f246095830ed8ed70c628556cea838312da245abcaebac9d7147a95436ac903b->enter($__internal_f246095830ed8ed70c628556cea838312da245abcaebac9d7147a95436ac903b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f246095830ed8ed70c628556cea838312da245abcaebac9d7147a95436ac903b->leave($__internal_f246095830ed8ed70c628556cea838312da245abcaebac9d7147a95436ac903b_prof);

        
        $__internal_0fa110d3b2febbd930fd3a55be9680e72597eb9a1d7a9ac0ae2adb576eea8fc7->leave($__internal_0fa110d3b2febbd930fd3a55be9680e72597eb9a1d7a9ac0ae2adb576eea8fc7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_33d159236b059a0feebe76a91f1eb56ea78d20ca2c8de82f95bf3cc20a73776a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33d159236b059a0feebe76a91f1eb56ea78d20ca2c8de82f95bf3cc20a73776a->enter($__internal_33d159236b059a0feebe76a91f1eb56ea78d20ca2c8de82f95bf3cc20a73776a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_561bc8893a765ffa11c6cfc9000244bc8a1d65f8eea66c4cf5bac30bbdfa12db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_561bc8893a765ffa11c6cfc9000244bc8a1d65f8eea66c4cf5bac30bbdfa12db->enter($__internal_561bc8893a765ffa11c6cfc9000244bc8a1d65f8eea66c4cf5bac30bbdfa12db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_561bc8893a765ffa11c6cfc9000244bc8a1d65f8eea66c4cf5bac30bbdfa12db->leave($__internal_561bc8893a765ffa11c6cfc9000244bc8a1d65f8eea66c4cf5bac30bbdfa12db_prof);

        
        $__internal_33d159236b059a0feebe76a91f1eb56ea78d20ca2c8de82f95bf3cc20a73776a->leave($__internal_33d159236b059a0feebe76a91f1eb56ea78d20ca2c8de82f95bf3cc20a73776a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/table_test/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
