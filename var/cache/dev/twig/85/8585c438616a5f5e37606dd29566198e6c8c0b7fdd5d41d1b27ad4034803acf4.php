<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_eaffccbf12f0807b0fcd6befc6240299a3eae36aa7a6618a61fa7f8ea911be84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fd52a643041788934845264f84354c1d5bcfa5dd7df1f19848a8b4717a019c34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd52a643041788934845264f84354c1d5bcfa5dd7df1f19848a8b4717a019c34->enter($__internal_fd52a643041788934845264f84354c1d5bcfa5dd7df1f19848a8b4717a019c34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_2798193cf4924b41ac4d88998f2dd23f46aac054b74c2abce92f096fb6661853 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2798193cf4924b41ac4d88998f2dd23f46aac054b74c2abce92f096fb6661853->enter($__internal_2798193cf4924b41ac4d88998f2dd23f46aac054b74c2abce92f096fb6661853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd52a643041788934845264f84354c1d5bcfa5dd7df1f19848a8b4717a019c34->leave($__internal_fd52a643041788934845264f84354c1d5bcfa5dd7df1f19848a8b4717a019c34_prof);

        
        $__internal_2798193cf4924b41ac4d88998f2dd23f46aac054b74c2abce92f096fb6661853->leave($__internal_2798193cf4924b41ac4d88998f2dd23f46aac054b74c2abce92f096fb6661853_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_437750ca8067dc8c0302a37be9d679403233d2104c50740926af206641d0e226 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_437750ca8067dc8c0302a37be9d679403233d2104c50740926af206641d0e226->enter($__internal_437750ca8067dc8c0302a37be9d679403233d2104c50740926af206641d0e226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_adf8e2095d8e3a75b7c05fcc000433a84a559cb15367513030b330ad40c1f0dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adf8e2095d8e3a75b7c05fcc000433a84a559cb15367513030b330ad40c1f0dd->enter($__internal_adf8e2095d8e3a75b7c05fcc000433a84a559cb15367513030b330ad40c1f0dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_adf8e2095d8e3a75b7c05fcc000433a84a559cb15367513030b330ad40c1f0dd->leave($__internal_adf8e2095d8e3a75b7c05fcc000433a84a559cb15367513030b330ad40c1f0dd_prof);

        
        $__internal_437750ca8067dc8c0302a37be9d679403233d2104c50740926af206641d0e226->leave($__internal_437750ca8067dc8c0302a37be9d679403233d2104c50740926af206641d0e226_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_58212387371626c354f6e959bd66bcaf6adffd638cc93b3fab3b080d1b68b418 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58212387371626c354f6e959bd66bcaf6adffd638cc93b3fab3b080d1b68b418->enter($__internal_58212387371626c354f6e959bd66bcaf6adffd638cc93b3fab3b080d1b68b418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5c9f0702c277c618b7a947e2cd16621b19e13c4c426499d48d7896d6f16424cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c9f0702c277c618b7a947e2cd16621b19e13c4c426499d48d7896d6f16424cd->enter($__internal_5c9f0702c277c618b7a947e2cd16621b19e13c4c426499d48d7896d6f16424cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5c9f0702c277c618b7a947e2cd16621b19e13c4c426499d48d7896d6f16424cd->leave($__internal_5c9f0702c277c618b7a947e2cd16621b19e13c4c426499d48d7896d6f16424cd_prof);

        
        $__internal_58212387371626c354f6e959bd66bcaf6adffd638cc93b3fab3b080d1b68b418->leave($__internal_58212387371626c354f6e959bd66bcaf6adffd638cc93b3fab3b080d1b68b418_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_d0d20551d532322ba1ad0505911191ad46d9cb9b616929ebd6c6620db55e4250 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0d20551d532322ba1ad0505911191ad46d9cb9b616929ebd6c6620db55e4250->enter($__internal_d0d20551d532322ba1ad0505911191ad46d9cb9b616929ebd6c6620db55e4250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e5f8f3082873fd6fc9d21f4c2609a7314013cbc1280a23e0aaeb9d4d3721965d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5f8f3082873fd6fc9d21f4c2609a7314013cbc1280a23e0aaeb9d4d3721965d->enter($__internal_e5f8f3082873fd6fc9d21f4c2609a7314013cbc1280a23e0aaeb9d4d3721965d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_e5f8f3082873fd6fc9d21f4c2609a7314013cbc1280a23e0aaeb9d4d3721965d->leave($__internal_e5f8f3082873fd6fc9d21f4c2609a7314013cbc1280a23e0aaeb9d4d3721965d_prof);

        
        $__internal_d0d20551d532322ba1ad0505911191ad46d9cb9b616929ebd6c6620db55e4250->leave($__internal_d0d20551d532322ba1ad0505911191ad46d9cb9b616929ebd6c6620db55e4250_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/table_test/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
