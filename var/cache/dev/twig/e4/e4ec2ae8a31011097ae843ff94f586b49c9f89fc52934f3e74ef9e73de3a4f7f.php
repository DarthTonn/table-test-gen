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
        $__internal_c978591c21f853358753a0cfdd56ebc115427da8a6e8a1766c893a51f1e03922 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c978591c21f853358753a0cfdd56ebc115427da8a6e8a1766c893a51f1e03922->enter($__internal_c978591c21f853358753a0cfdd56ebc115427da8a6e8a1766c893a51f1e03922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $__internal_061920663af584f65b5795b852ca0dde0d6097e161de9accb264a639adf34141 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_061920663af584f65b5795b852ca0dde0d6097e161de9accb264a639adf34141->enter($__internal_061920663af584f65b5795b852ca0dde0d6097e161de9accb264a639adf34141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c978591c21f853358753a0cfdd56ebc115427da8a6e8a1766c893a51f1e03922->leave($__internal_c978591c21f853358753a0cfdd56ebc115427da8a6e8a1766c893a51f1e03922_prof);

        
        $__internal_061920663af584f65b5795b852ca0dde0d6097e161de9accb264a639adf34141->leave($__internal_061920663af584f65b5795b852ca0dde0d6097e161de9accb264a639adf34141_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5e3e364836e955d25d49d523c348845192e613e86b34dc16af59c4b08a836bb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e3e364836e955d25d49d523c348845192e613e86b34dc16af59c4b08a836bb0->enter($__internal_5e3e364836e955d25d49d523c348845192e613e86b34dc16af59c4b08a836bb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_035044d74bb00c9f809e3fcbc9fb1b26f144b525701fd7a22023cffe43331a47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_035044d74bb00c9f809e3fcbc9fb1b26f144b525701fd7a22023cffe43331a47->enter($__internal_035044d74bb00c9f809e3fcbc9fb1b26f144b525701fd7a22023cffe43331a47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                <tr is=\"viewlist\" v-for=\"(product, key) in products\"
                    :product=\"product\"
                    :key=\"product.id\"
                    ";
        // line 22
        echo "                    @remove=\"removeProduct(key, product)\">

                    ";
        // line 25
        echo "                        ";
        // line 26
        echo "                    ";
        // line 27
        echo "                </tr>
                ";
        // line 29
        echo "
            </tbody>
        </table>
        <button class=\"btn btn-default\" @click=\"showCreateModal = true\">Create a new product</button>

        ";
        // line 35
        echo "            ";
        // line 36
        echo "        ";
        // line 37
        echo "
        <modal v-show=\"showCreateModal\" @close=\"showCreateModal = false\">
            ";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Product:new"));
        echo "
        </modal>

    </div>
";
        
        $__internal_035044d74bb00c9f809e3fcbc9fb1b26f144b525701fd7a22023cffe43331a47->leave($__internal_035044d74bb00c9f809e3fcbc9fb1b26f144b525701fd7a22023cffe43331a47_prof);

        
        $__internal_5e3e364836e955d25d49d523c348845192e613e86b34dc16af59c4b08a836bb0->leave($__internal_5e3e364836e955d25d49d523c348845192e613e86b34dc16af59c4b08a836bb0_prof);

    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_69a8a4278dc89a3e092f9ab6995d62c6713fee707088f4309a61bc7f49c5aaf9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69a8a4278dc89a3e092f9ab6995d62c6713fee707088f4309a61bc7f49c5aaf9->enter($__internal_69a8a4278dc89a3e092f9ab6995d62c6713fee707088f4309a61bc7f49c5aaf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_22e18834ee93e4a4779a8c45427978b09f3e8dba8ba3e2b68d2c06c5a879d082 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22e18834ee93e4a4779a8c45427978b09f3e8dba8ba3e2b68d2c06c5a879d082->enter($__internal_22e18834ee93e4a4779a8c45427978b09f3e8dba8ba3e2b68d2c06c5a879d082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 46
        echo "    ";
        // line 47
        echo "        ";
        // line 48
        echo "    ";
        // line 49
        echo "    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
    <script src=\"https://unpkg.com/axios/dist/axios.min.js\"></script>
    <script src=\"https://unpkg.com/vue\"></script>
    <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("includes/modal.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("includes/create.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_22e18834ee93e4a4779a8c45427978b09f3e8dba8ba3e2b68d2c06c5a879d082->leave($__internal_22e18834ee93e4a4779a8c45427978b09f3e8dba8ba3e2b68d2c06c5a879d082_prof);

        
        $__internal_69a8a4278dc89a3e092f9ab6995d62c6713fee707088f4309a61bc7f49c5aaf9->leave($__internal_69a8a4278dc89a3e092f9ab6995d62c6713fee707088f4309a61bc7f49c5aaf9_prof);

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
        return array (  134 => 53,  130 => 52,  125 => 49,  123 => 48,  121 => 47,  119 => 46,  110 => 45,  95 => 39,  91 => 37,  89 => 36,  87 => 35,  80 => 29,  77 => 27,  75 => 26,  73 => 25,  69 => 22,  50 => 4,  41 => 3,  11 => 1,);
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
                <tr is=\"viewlist\" v-for=\"(product, key) in products\"
                    :product=\"product\"
                    :key=\"product.id\"
                    {#@remove=\"todos.splice(key, 1)\"#}
                    @remove=\"removeProduct(key, product)\">

                    {#<modal-edit v-show=\"showEditModal\" :product=\"product\" @close=\"showEditModal = false\">#}
                        {#{{ render(controller('AppBundle:Product:edit')) }}#}
                    {#</modal-edit>#}
                </tr>
                {#<tr v-if=\"product.editable\" is=\"viewlist-edit\" v-for=\"product in products\" :product=\"product\" :key=\"product.id\"></tr>#}

            </tbody>
        </table>
        <button class=\"btn btn-default\" @click=\"showCreateModal = true\">Create a new product</button>

        {#<modal-edit v-show=\"showEditModal\" @close=\"showEditModal = false\">#}
            {#{{ render(controller('AppBundle:Product:edit')) }}#}
        {#</modal-edit>#}

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
