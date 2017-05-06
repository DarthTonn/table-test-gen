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
        $__internal_2d813f3c0b4148f439de2a5ffbddb21d035f4cd52e8cc2c6eb237ee13cffa208 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d813f3c0b4148f439de2a5ffbddb21d035f4cd52e8cc2c6eb237ee13cffa208->enter($__internal_2d813f3c0b4148f439de2a5ffbddb21d035f4cd52e8cc2c6eb237ee13cffa208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_176a07b078476c5bfa33c6857883c7827ad5fce7a6431d79055b253eb1715f70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_176a07b078476c5bfa33c6857883c7827ad5fce7a6431d79055b253eb1715f70->enter($__internal_176a07b078476c5bfa33c6857883c7827ad5fce7a6431d79055b253eb1715f70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d813f3c0b4148f439de2a5ffbddb21d035f4cd52e8cc2c6eb237ee13cffa208->leave($__internal_2d813f3c0b4148f439de2a5ffbddb21d035f4cd52e8cc2c6eb237ee13cffa208_prof);

        
        $__internal_176a07b078476c5bfa33c6857883c7827ad5fce7a6431d79055b253eb1715f70->leave($__internal_176a07b078476c5bfa33c6857883c7827ad5fce7a6431d79055b253eb1715f70_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8d84da47fb755b2f10237af0803183dbb281a334e058caa338cc5a54a916fead = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d84da47fb755b2f10237af0803183dbb281a334e058caa338cc5a54a916fead->enter($__internal_8d84da47fb755b2f10237af0803183dbb281a334e058caa338cc5a54a916fead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_88cf5862b2335ec48a702856c60a988bb8650e0a5a249e797cbb736212f39de9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88cf5862b2335ec48a702856c60a988bb8650e0a5a249e797cbb736212f39de9->enter($__internal_88cf5862b2335ec48a702856c60a988bb8650e0a5a249e797cbb736212f39de9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_88cf5862b2335ec48a702856c60a988bb8650e0a5a249e797cbb736212f39de9->leave($__internal_88cf5862b2335ec48a702856c60a988bb8650e0a5a249e797cbb736212f39de9_prof);

        
        $__internal_8d84da47fb755b2f10237af0803183dbb281a334e058caa338cc5a54a916fead->leave($__internal_8d84da47fb755b2f10237af0803183dbb281a334e058caa338cc5a54a916fead_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ac8770cef78740b01490cc32b9bd131b8e430dcf65f630093e2473618c79a9c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac8770cef78740b01490cc32b9bd131b8e430dcf65f630093e2473618c79a9c1->enter($__internal_ac8770cef78740b01490cc32b9bd131b8e430dcf65f630093e2473618c79a9c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_46cf9fcb8d67d5e15ddb76b628862127c09b5e20320b4d5486f873f70a253117 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46cf9fcb8d67d5e15ddb76b628862127c09b5e20320b4d5486f873f70a253117->enter($__internal_46cf9fcb8d67d5e15ddb76b628862127c09b5e20320b4d5486f873f70a253117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_46cf9fcb8d67d5e15ddb76b628862127c09b5e20320b4d5486f873f70a253117->leave($__internal_46cf9fcb8d67d5e15ddb76b628862127c09b5e20320b4d5486f873f70a253117_prof);

        
        $__internal_ac8770cef78740b01490cc32b9bd131b8e430dcf65f630093e2473618c79a9c1->leave($__internal_ac8770cef78740b01490cc32b9bd131b8e430dcf65f630093e2473618c79a9c1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5e391a655684054cb76b52343558fdfe816d71f88798656a2e99ff611100e341 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e391a655684054cb76b52343558fdfe816d71f88798656a2e99ff611100e341->enter($__internal_5e391a655684054cb76b52343558fdfe816d71f88798656a2e99ff611100e341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_206475f25e81a35f533443da051a2cae7b3656023ec69493d25fabbf846b597a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_206475f25e81a35f533443da051a2cae7b3656023ec69493d25fabbf846b597a->enter($__internal_206475f25e81a35f533443da051a2cae7b3656023ec69493d25fabbf846b597a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_206475f25e81a35f533443da051a2cae7b3656023ec69493d25fabbf846b597a->leave($__internal_206475f25e81a35f533443da051a2cae7b3656023ec69493d25fabbf846b597a_prof);

        
        $__internal_5e391a655684054cb76b52343558fdfe816d71f88798656a2e99ff611100e341->leave($__internal_5e391a655684054cb76b52343558fdfe816d71f88798656a2e99ff611100e341_prof);

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
