<?php

/* product/new.html.twig */
class __TwigTemplate_43f33d9433a2707aa6894b35bb3776c2429d28ff3c8dc11ead4cec082e023f83 extends Twig_Template
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
        $__internal_b6cd0ff38c2366f99a2f40a6d3cc2721db0718ca71d2809b50de5a3c50c6bd86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6cd0ff38c2366f99a2f40a6d3cc2721db0718ca71d2809b50de5a3c50c6bd86->enter($__internal_b6cd0ff38c2366f99a2f40a6d3cc2721db0718ca71d2809b50de5a3c50c6bd86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/new.html.twig"));

        $__internal_5ae3b743a7d13c24b1368675b1fcb6fe1dff10f0542fdda2172da8f510002687 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ae3b743a7d13c24b1368675b1fcb6fe1dff10f0542fdda2172da8f510002687->enter($__internal_5ae3b743a7d13c24b1368675b1fcb6fe1dff10f0542fdda2172da8f510002687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/new.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
<div class=\"form-group\">
    <label for=\"appbundle_product_name\" class=\"required\">Name</label>
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", array()), 'widget', array("attr" => array("v-model" => "name ", "class" => "form-control")));
        echo "
</div>
<div class=\"form-group\">
    <label for=\"appbundle_product_category\" class=\"required\">Category</label>
    ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "category", array()), 'widget', array("attr" => array("v-model" => "category", "class" => "form-control")));
        echo "
</div>
<div class=\"form-group\">
    <label for=\"appbundle_product_manufacturer\" class=\"required\">Manufacturer</label>
    ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "manufacturer", array()), 'widget', array("attr" => array("v-model" => "manufacturer", "class" => "form-control")));
        echo "
</div>
<input type=\"submit\" @click=\"onSubmitCreate\" value=\"Create\"/>
<input type=\"hidden\" name=\"_csrf_token\"
       value=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
>
";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
";
        // line 19
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        
        $__internal_b6cd0ff38c2366f99a2f40a6d3cc2721db0718ca71d2809b50de5a3c50c6bd86->leave($__internal_b6cd0ff38c2366f99a2f40a6d3cc2721db0718ca71d2809b50de5a3c50c6bd86_prof);

        
        $__internal_5ae3b743a7d13c24b1368675b1fcb6fe1dff10f0542fdda2172da8f510002687->leave($__internal_5ae3b743a7d13c24b1368675b1fcb6fe1dff10f0542fdda2172da8f510002687_prof);

    }

    public function getTemplateName()
    {
        return "product/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 19,  57 => 18,  52 => 16,  45 => 12,  38 => 8,  31 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ form_start(form) }}
<div class=\"form-group\">
    <label for=\"appbundle_product_name\" class=\"required\">Name</label>
    {{ form_widget(form.name, {'attr': {'v-model': 'name ','class': 'form-control'}}) }}
</div>
<div class=\"form-group\">
    <label for=\"appbundle_product_category\" class=\"required\">Category</label>
    {{ form_widget(form.category, {'attr': {'v-model': 'category', 'class': 'form-control'}}) }}
</div>
<div class=\"form-group\">
    <label for=\"appbundle_product_manufacturer\" class=\"required\">Manufacturer</label>
    {{ form_widget(form.manufacturer, {'attr': {'v-model': 'manufacturer', 'class': 'form-control'}}) }}
</div>
<input type=\"submit\" @click=\"onSubmitCreate\" value=\"Create\"/>
<input type=\"hidden\" name=\"_csrf_token\"
       value=\"{{ csrf_token('authenticate') }}\"
>
{{ form_errors(form) }}
{{ form_end(form) }}", "product/new.html.twig", "/var/www/table_test/app/Resources/views/product/new.html.twig");
    }
}
