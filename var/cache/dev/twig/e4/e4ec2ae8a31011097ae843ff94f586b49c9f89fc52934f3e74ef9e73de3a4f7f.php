<?php

/* product/index.html.twig */
class __TwigTemplate_f5c77a8f51bc6c3c949587f947605ff2a1d00b48e4354ae51c93dd11fe3dbd9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "product/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aad25631e89a17f9ac8df76eb0ef39a70bb043fea58c8426e7ba32f48a698bac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aad25631e89a17f9ac8df76eb0ef39a70bb043fea58c8426e7ba32f48a698bac->enter($__internal_aad25631e89a17f9ac8df76eb0ef39a70bb043fea58c8426e7ba32f48a698bac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $__internal_1733ee04d099b4ba68a82d1d41feaf124e2ff60727400cacdf03ff15234960d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1733ee04d099b4ba68a82d1d41feaf124e2ff60727400cacdf03ff15234960d1->enter($__internal_1733ee04d099b4ba68a82d1d41feaf124e2ff60727400cacdf03ff15234960d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aad25631e89a17f9ac8df76eb0ef39a70bb043fea58c8426e7ba32f48a698bac->leave($__internal_aad25631e89a17f9ac8df76eb0ef39a70bb043fea58c8426e7ba32f48a698bac_prof);

        
        $__internal_1733ee04d099b4ba68a82d1d41feaf124e2ff60727400cacdf03ff15234960d1->leave($__internal_1733ee04d099b4ba68a82d1d41feaf124e2ff60727400cacdf03ff15234960d1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9a61f89e89929b19beecad760d7f738a0d940f38a879767b74e9a5027450ab01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a61f89e89929b19beecad760d7f738a0d940f38a879767b74e9a5027450ab01->enter($__internal_9a61f89e89929b19beecad760d7f738a0d940f38a879767b74e9a5027450ab01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e2e8dd89a65af9c985897b03d943475c65c4afc76d5f6dc898f06cb2cff0c044 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2e8dd89a65af9c985897b03d943475c65c4afc76d5f6dc898f06cb2cff0c044->enter($__internal_e2e8dd89a65af9c985897b03d943475c65c4afc76d5f6dc898f06cb2cff0c044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Products list</h1>

    <div id=\"main\" class=\"container\">
        <table class=\"table\" id=\"\">
            <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Category</th>
                <th>Manufacturer</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
                <tr is=\"viewlist\" v-for=\"product in products\" :product=\"product\" :key=\"product.id\"  @edit=\"editProduct(product)\">

                    <modal-edit v-show=\"showEditModal\" :product=\"product\" @close=\"showEditModal = false\">
                        ";
        // line 22
        echo "                    </modal-edit>
                </tr>
                ";
        // line 25
        echo "
            </tbody>
        </table>
        <button class=\"btn btn-default\" @click=\"showCreateModal = true\">Create a new product</button>

        <modal-edit v-show=\"showEditModal\" @close=\"showEditModal = false\">
            ";
        // line 32
        echo "        </modal-edit>

        <modal v-show=\"showCreateModal\" @close=\"showCreateModal = false\">
            ";
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Product:new"));
        echo "
        </modal>

    </div>
";
        
        $__internal_e2e8dd89a65af9c985897b03d943475c65c4afc76d5f6dc898f06cb2cff0c044->leave($__internal_e2e8dd89a65af9c985897b03d943475c65c4afc76d5f6dc898f06cb2cff0c044_prof);

        
        $__internal_9a61f89e89929b19beecad760d7f738a0d940f38a879767b74e9a5027450ab01->leave($__internal_9a61f89e89929b19beecad760d7f738a0d940f38a879767b74e9a5027450ab01_prof);

    }

    // line 41
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6c2775299e15c6d6c427c76a49bb51ddebfcb976a602329034472739a6008cd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c2775299e15c6d6c427c76a49bb51ddebfcb976a602329034472739a6008cd9->enter($__internal_6c2775299e15c6d6c427c76a49bb51ddebfcb976a602329034472739a6008cd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ff8727006ad2bef300b0fb910e8dc5a8e2b40ab82a5d749c2d1e4f7a3292a0a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff8727006ad2bef300b0fb910e8dc5a8e2b40ab82a5d749c2d1e4f7a3292a0a9->enter($__internal_ff8727006ad2bef300b0fb910e8dc5a8e2b40ab82a5d749c2d1e4f7a3292a0a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 42
        echo "    ";
        // line 43
        echo "        ";
        // line 44
        echo "    ";
        // line 45
        echo "    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
    <script src=\"https://unpkg.com/axios/dist/axios.min.js\"></script>
    <script src=\"https://unpkg.com/vue\"></script>
    <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("includes/modal.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("includes/create.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_ff8727006ad2bef300b0fb910e8dc5a8e2b40ab82a5d749c2d1e4f7a3292a0a9->leave($__internal_ff8727006ad2bef300b0fb910e8dc5a8e2b40ab82a5d749c2d1e4f7a3292a0a9_prof);

        
        $__internal_6c2775299e15c6d6c427c76a49bb51ddebfcb976a602329034472739a6008cd9->leave($__internal_6c2775299e15c6d6c427c76a49bb51ddebfcb976a602329034472739a6008cd9_prof);

    }

    public function getTemplateName()
    {
        return "product/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 49,  121 => 48,  116 => 45,  114 => 44,  112 => 43,  110 => 42,  101 => 41,  86 => 35,  81 => 32,  73 => 25,  69 => 22,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Products list</h1>

    <div id=\"main\" class=\"container\">
        <table class=\"table\" id=\"\">
            <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Category</th>
                <th>Manufacturer</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
                <tr is=\"viewlist\" v-for=\"product in products\" :product=\"product\" :key=\"product.id\"  @edit=\"editProduct(product)\">

                    <modal-edit v-show=\"showEditModal\" :product=\"product\" @close=\"showEditModal = false\">
                        {#{{ render(controller('AppBundle:Product:edit')) }}#}
                    </modal-edit>
                </tr>
                {#<tr v-if=\"product.editable\" is=\"viewlist-edit\" v-for=\"product in products\" :product=\"product\" :key=\"product.id\"></tr>#}

            </tbody>
        </table>
        <button class=\"btn btn-default\" @click=\"showCreateModal = true\">Create a new product</button>

        <modal-edit v-show=\"showEditModal\" @close=\"showEditModal = false\">
            {#{{ render(controller('AppBundle:Product:edit')) }}#}
        </modal-edit>

        <modal v-show=\"showCreateModal\" @close=\"showCreateModal = false\">
            {{ render(controller('AppBundle:Product:new')) }}
        </modal>

    </div>
{% endblock %}

{% block javascripts %}
    {#<script type=\"x-template\" id=\"view\">#}
        {##}
    {#</script>#}
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
    <script src=\"https://unpkg.com/axios/dist/axios.min.js\"></script>
    <script src=\"https://unpkg.com/vue\"></script>
    <script src=\"{{ asset('includes/modal.js') }}\"></script>
    <script src=\"{{ asset('includes/create.js') }}\"></script>
{% endblock %}
", "product/index.html.twig", "/var/www/table_test/app/Resources/views/product/index.html.twig");
    }
}
