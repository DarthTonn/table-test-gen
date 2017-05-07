<?php

/* base.html.twig */
class __TwigTemplate_6f05d78eba1f6eca400f9419ad3a555b4e96748c7173ebf17f6bb62d7fa1c24e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_14bd5e9d4eccb15ed3deefa4589e558fa4007993598212e6348811d0094b9f15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14bd5e9d4eccb15ed3deefa4589e558fa4007993598212e6348811d0094b9f15->enter($__internal_14bd5e9d4eccb15ed3deefa4589e558fa4007993598212e6348811d0094b9f15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_b8ee5fdd50b8562edc8b281165e00b5bc964573ce4b38cce6d866223c65a035e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8ee5fdd50b8562edc8b281165e00b5bc964573ce4b38cce6d866223c65a035e->enter($__internal_b8ee5fdd50b8562edc8b281165e00b5bc964573ce4b38cce6d866223c65a035e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\"/>
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
</head>
<body>
";
        // line 16
        $this->displayBlock('body', $context, $blocks);
        // line 17
        $this->displayBlock('javascripts', $context, $blocks);
        // line 27
        echo "</body>
</html>
";
        
        $__internal_14bd5e9d4eccb15ed3deefa4589e558fa4007993598212e6348811d0094b9f15->leave($__internal_14bd5e9d4eccb15ed3deefa4589e558fa4007993598212e6348811d0094b9f15_prof);

        
        $__internal_b8ee5fdd50b8562edc8b281165e00b5bc964573ce4b38cce6d866223c65a035e->leave($__internal_b8ee5fdd50b8562edc8b281165e00b5bc964573ce4b38cce6d866223c65a035e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b59c500be2317749d69c6d6d7af82bb818dcdef0ffc8de791fd75d176b8fbeaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b59c500be2317749d69c6d6d7af82bb818dcdef0ffc8de791fd75d176b8fbeaa->enter($__internal_b59c500be2317749d69c6d6d7af82bb818dcdef0ffc8de791fd75d176b8fbeaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_489b5fa64a7ed97b1e2d37348c85a13c4081f74582d260f880b3626098fd8cee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_489b5fa64a7ed97b1e2d37348c85a13c4081f74582d260f880b3626098fd8cee->enter($__internal_489b5fa64a7ed97b1e2d37348c85a13c4081f74582d260f880b3626098fd8cee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_489b5fa64a7ed97b1e2d37348c85a13c4081f74582d260f880b3626098fd8cee->leave($__internal_489b5fa64a7ed97b1e2d37348c85a13c4081f74582d260f880b3626098fd8cee_prof);

        
        $__internal_b59c500be2317749d69c6d6d7af82bb818dcdef0ffc8de791fd75d176b8fbeaa->leave($__internal_b59c500be2317749d69c6d6d7af82bb818dcdef0ffc8de791fd75d176b8fbeaa_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c0c9e2ac4d94e0133208e93ab4ac01666935bd2cd03580bc89bf6a2d96b57ba5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0c9e2ac4d94e0133208e93ab4ac01666935bd2cd03580bc89bf6a2d96b57ba5->enter($__internal_c0c9e2ac4d94e0133208e93ab4ac01666935bd2cd03580bc89bf6a2d96b57ba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f6821450f8c0c77e664b6b80599afd31cdaaec6d0194ac60d71cef5c67be3b89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6821450f8c0c77e664b6b80599afd31cdaaec6d0194ac60d71cef5c67be3b89->enter($__internal_f6821450f8c0c77e664b6b80599afd31cdaaec6d0194ac60d71cef5c67be3b89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\"
              integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\"
              crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.1/css/bulma.css\">

    ";
        
        $__internal_f6821450f8c0c77e664b6b80599afd31cdaaec6d0194ac60d71cef5c67be3b89->leave($__internal_f6821450f8c0c77e664b6b80599afd31cdaaec6d0194ac60d71cef5c67be3b89_prof);

        
        $__internal_c0c9e2ac4d94e0133208e93ab4ac01666935bd2cd03580bc89bf6a2d96b57ba5->leave($__internal_c0c9e2ac4d94e0133208e93ab4ac01666935bd2cd03580bc89bf6a2d96b57ba5_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_afdb3be3bc73b413c0fc05841d714387c6351423899ae7b9de3f92a455a1fb20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afdb3be3bc73b413c0fc05841d714387c6351423899ae7b9de3f92a455a1fb20->enter($__internal_afdb3be3bc73b413c0fc05841d714387c6351423899ae7b9de3f92a455a1fb20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3ca72864c4c02d2fcdb1879fe9076280c8064e7a306efc154dcda82e29937df2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ca72864c4c02d2fcdb1879fe9076280c8064e7a306efc154dcda82e29937df2->enter($__internal_3ca72864c4c02d2fcdb1879fe9076280c8064e7a306efc154dcda82e29937df2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3ca72864c4c02d2fcdb1879fe9076280c8064e7a306efc154dcda82e29937df2->leave($__internal_3ca72864c4c02d2fcdb1879fe9076280c8064e7a306efc154dcda82e29937df2_prof);

        
        $__internal_afdb3be3bc73b413c0fc05841d714387c6351423899ae7b9de3f92a455a1fb20->leave($__internal_afdb3be3bc73b413c0fc05841d714387c6351423899ae7b9de3f92a455a1fb20_prof);

    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6e2ff91681933b0cc1671da25d0b7532080b4c92cf4be9cf7df3600364c89c07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e2ff91681933b0cc1671da25d0b7532080b4c92cf4be9cf7df3600364c89c07->enter($__internal_6e2ff91681933b0cc1671da25d0b7532080b4c92cf4be9cf7df3600364c89c07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_786066b654759f174321fe775ce54ee0e0c4acfcfd182e8b26563b5107cc1520 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_786066b654759f174321fe775ce54ee0e0c4acfcfd182e8b26563b5107cc1520->enter($__internal_786066b654759f174321fe775ce54ee0e0c4acfcfd182e8b26563b5107cc1520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 18
        echo "    ";
        // line 19
        echo "    ";
        // line 20
        echo "    ";
        // line 21
        echo "    ";
        // line 22
        echo "    ";
        // line 23
        echo "    ";
        // line 24
        echo "    ";
        // line 25
        echo "    ";
        
        $__internal_786066b654759f174321fe775ce54ee0e0c4acfcfd182e8b26563b5107cc1520->leave($__internal_786066b654759f174321fe775ce54ee0e0c4acfcfd182e8b26563b5107cc1520_prof);

        
        $__internal_6e2ff91681933b0cc1671da25d0b7532080b4c92cf4be9cf7df3600364c89c07->leave($__internal_6e2ff91681933b0cc1671da25d0b7532080b4c92cf4be9cf7df3600364c89c07_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 25,  144 => 24,  142 => 23,  140 => 22,  138 => 21,  136 => 20,  134 => 19,  132 => 18,  123 => 17,  106 => 16,  91 => 7,  82 => 6,  64 => 5,  52 => 27,  50 => 17,  48 => 16,  41 => 13,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\"/>
    <title>{% block title %}Welcome!{% endblock %}</title>
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\"
              integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\"
              crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.1/css/bulma.css\">

    {% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\"/>
</head>
<body>
{% block body %}{% endblock %}
{% block javascripts %}
    {#<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>#}
    {#<script src=\"https://unpkg.com/axios/dist/axios.min.js\"></script>#}
    {#<script src=\"https://unpkg.com/vue\"></script>#}
    {#<script src=\"{{ asset('includes/modal.js') }}\"></script>#}
    {#<script src=\"{{ asset('includes/create.js') }}\"></script>#}
    {#<script src=\"https://unpkg.com/axios/dist/axios.min.js\"></script>#}
    {#<script src=\"https://unpkg.com/vue\"></script>#}
    {#<script src=\"{{ asset('includes/modal.js') }}\"></script>#}
{% endblock %}
</body>
</html>
", "base.html.twig", "/var/www/table_test/app/Resources/views/base.html.twig");
    }
}
