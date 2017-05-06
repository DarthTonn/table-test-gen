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
        $__internal_ecd0720af54255f45f51d8c1cf4004f4cc8feef6cabe29aac90b5e319ab7f529 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecd0720af54255f45f51d8c1cf4004f4cc8feef6cabe29aac90b5e319ab7f529->enter($__internal_ecd0720af54255f45f51d8c1cf4004f4cc8feef6cabe29aac90b5e319ab7f529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_d732bdbf4611bbd666d065337155605494e152ecf1157a360b46f6ffbe812697 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d732bdbf4611bbd666d065337155605494e152ecf1157a360b46f6ffbe812697->enter($__internal_d732bdbf4611bbd666d065337155605494e152ecf1157a360b46f6ffbe812697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_ecd0720af54255f45f51d8c1cf4004f4cc8feef6cabe29aac90b5e319ab7f529->leave($__internal_ecd0720af54255f45f51d8c1cf4004f4cc8feef6cabe29aac90b5e319ab7f529_prof);

        
        $__internal_d732bdbf4611bbd666d065337155605494e152ecf1157a360b46f6ffbe812697->leave($__internal_d732bdbf4611bbd666d065337155605494e152ecf1157a360b46f6ffbe812697_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_20c0a8318a46e683f3df8ffb7effbd1e8b8f93d2a478dd2050b90ba87e1f2528 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20c0a8318a46e683f3df8ffb7effbd1e8b8f93d2a478dd2050b90ba87e1f2528->enter($__internal_20c0a8318a46e683f3df8ffb7effbd1e8b8f93d2a478dd2050b90ba87e1f2528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4fa4ffb5015228ea4b9f82b063a259a2879c105b01233409b56dd5f47c7005f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fa4ffb5015228ea4b9f82b063a259a2879c105b01233409b56dd5f47c7005f5->enter($__internal_4fa4ffb5015228ea4b9f82b063a259a2879c105b01233409b56dd5f47c7005f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_4fa4ffb5015228ea4b9f82b063a259a2879c105b01233409b56dd5f47c7005f5->leave($__internal_4fa4ffb5015228ea4b9f82b063a259a2879c105b01233409b56dd5f47c7005f5_prof);

        
        $__internal_20c0a8318a46e683f3df8ffb7effbd1e8b8f93d2a478dd2050b90ba87e1f2528->leave($__internal_20c0a8318a46e683f3df8ffb7effbd1e8b8f93d2a478dd2050b90ba87e1f2528_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_138f3a10aa5b80bbda7aa795bf8a14f3f260f8dacfe2e970bb6ec26124d6a2d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_138f3a10aa5b80bbda7aa795bf8a14f3f260f8dacfe2e970bb6ec26124d6a2d2->enter($__internal_138f3a10aa5b80bbda7aa795bf8a14f3f260f8dacfe2e970bb6ec26124d6a2d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_00991234f18e1c2497527cb3bb764418761956ff6678c08929d81641ff1c3863 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00991234f18e1c2497527cb3bb764418761956ff6678c08929d81641ff1c3863->enter($__internal_00991234f18e1c2497527cb3bb764418761956ff6678c08929d81641ff1c3863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\"
              integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\"
              crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.1/css/bulma.css\">

    ";
        
        $__internal_00991234f18e1c2497527cb3bb764418761956ff6678c08929d81641ff1c3863->leave($__internal_00991234f18e1c2497527cb3bb764418761956ff6678c08929d81641ff1c3863_prof);

        
        $__internal_138f3a10aa5b80bbda7aa795bf8a14f3f260f8dacfe2e970bb6ec26124d6a2d2->leave($__internal_138f3a10aa5b80bbda7aa795bf8a14f3f260f8dacfe2e970bb6ec26124d6a2d2_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_451cd4ad815e5c6162f70cd4741bd876d43f558705051ae26bd556a4e0b02be7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_451cd4ad815e5c6162f70cd4741bd876d43f558705051ae26bd556a4e0b02be7->enter($__internal_451cd4ad815e5c6162f70cd4741bd876d43f558705051ae26bd556a4e0b02be7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7214d1443a8bcf6bc98497ff2b9ae06ee0807336633b5bd76eff6d07194ab3d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7214d1443a8bcf6bc98497ff2b9ae06ee0807336633b5bd76eff6d07194ab3d2->enter($__internal_7214d1443a8bcf6bc98497ff2b9ae06ee0807336633b5bd76eff6d07194ab3d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7214d1443a8bcf6bc98497ff2b9ae06ee0807336633b5bd76eff6d07194ab3d2->leave($__internal_7214d1443a8bcf6bc98497ff2b9ae06ee0807336633b5bd76eff6d07194ab3d2_prof);

        
        $__internal_451cd4ad815e5c6162f70cd4741bd876d43f558705051ae26bd556a4e0b02be7->leave($__internal_451cd4ad815e5c6162f70cd4741bd876d43f558705051ae26bd556a4e0b02be7_prof);

    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4fdd44eac9a593f65296fef642458eed141f18075d04da4b8aadb9dc5b9d5b95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fdd44eac9a593f65296fef642458eed141f18075d04da4b8aadb9dc5b9d5b95->enter($__internal_4fdd44eac9a593f65296fef642458eed141f18075d04da4b8aadb9dc5b9d5b95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_74f8b530de80c8904135177f56a37bf34639f3e3e47842bd3526d0c90786156b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74f8b530de80c8904135177f56a37bf34639f3e3e47842bd3526d0c90786156b->enter($__internal_74f8b530de80c8904135177f56a37bf34639f3e3e47842bd3526d0c90786156b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_74f8b530de80c8904135177f56a37bf34639f3e3e47842bd3526d0c90786156b->leave($__internal_74f8b530de80c8904135177f56a37bf34639f3e3e47842bd3526d0c90786156b_prof);

        
        $__internal_4fdd44eac9a593f65296fef642458eed141f18075d04da4b8aadb9dc5b9d5b95->leave($__internal_4fdd44eac9a593f65296fef642458eed141f18075d04da4b8aadb9dc5b9d5b95_prof);

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
