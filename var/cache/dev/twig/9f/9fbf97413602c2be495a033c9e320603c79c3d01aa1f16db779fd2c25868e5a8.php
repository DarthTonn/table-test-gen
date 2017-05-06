<?php

/* default/index.html.twig */
class __TwigTemplate_5d04d389cc45e7dcb96571085e7073eef0c0fa0ae64c81e0136e791ac5735c58 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_615f04efdcd36a8eeb21bf7d75e855a5bc71c80581c6794802e9a004bdeb71be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_615f04efdcd36a8eeb21bf7d75e855a5bc71c80581c6794802e9a004bdeb71be->enter($__internal_615f04efdcd36a8eeb21bf7d75e855a5bc71c80581c6794802e9a004bdeb71be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_890223f29ff14bac24e2b7f8ccf8595c090b68fa4715146282aaafc9c47fd68f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_890223f29ff14bac24e2b7f8ccf8595c090b68fa4715146282aaafc9c47fd68f->enter($__internal_890223f29ff14bac24e2b7f8ccf8595c090b68fa4715146282aaafc9c47fd68f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_615f04efdcd36a8eeb21bf7d75e855a5bc71c80581c6794802e9a004bdeb71be->leave($__internal_615f04efdcd36a8eeb21bf7d75e855a5bc71c80581c6794802e9a004bdeb71be_prof);

        
        $__internal_890223f29ff14bac24e2b7f8ccf8595c090b68fa4715146282aaafc9c47fd68f->leave($__internal_890223f29ff14bac24e2b7f8ccf8595c090b68fa4715146282aaafc9c47fd68f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_02df0abe128ec53f0553e842cca91be3f774b376ee89e18f74595dd840baae75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02df0abe128ec53f0553e842cca91be3f774b376ee89e18f74595dd840baae75->enter($__internal_02df0abe128ec53f0553e842cca91be3f774b376ee89e18f74595dd840baae75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_36dc5df039ab328019b3273de2bb83836fbbf1da81488788783607545d0ad558 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36dc5df039ab328019b3273de2bb83836fbbf1da81488788783607545d0ad558->enter($__internal_36dc5df039ab328019b3273de2bb83836fbbf1da81488788783607545d0ad558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div id=\"wrapper\">
        <div id=\"container\">
            <div class=\"header clearfix\">
                <nav>
                    <ul class=\"nav nav-pills pull-right\">
                        <li role=\"presentation\">
                            <a href=\"#\" @click=\"currentView='manage-posts'\">Manage Posts</a>
                        </li>
                        <li role=\"presentation\">
                            <a href=\"#\" @click=\"currentView='create-post'\">Create Post</a>
                        </li>
                    </ul>
                </nav>
                <h3 class=\"text-muted\">Admin Panel</h3>
            </div>

            <div class=\"container\">
                <component :is=\"currentView\" transition=\"fade\" transition-mode=\"out-in\"></component>
            </div>

            <template id=\"manage-template\">
                <div>
                    <h1>Manage Posts</h1>
                    <div class=\"list-group\">
                        <a v-for=\"post in posts\" href=\"#\" class=\"list-group-item clearfix\">
                            \${ post }
                            <span class=\"pull-right\">
            <button class=\"btn btn-xs btn-info\">
              <span class=\"glyphicon glyphicon-edit\"></span>
            </button>
            <button class=\"btn btn-xs btn-warning\">
              <span class=\"glyphicon glyphicon-trash\"></span>
            </button>
          </span>
                        </a>
                    </div>
                </div>
            </template>

            <template id=\"create-template\">
                <div>
                    <h1>Create Post</h1>
                    <form class=\"form-horizontal\">
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\">Post title</label>
                            <div class=\"col-sm-10\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"Post title\">
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\">Post body</label>
                            <div class=\"col-sm-10\">
                                <textarea class=\"form-control\" rows=\"5\"></textarea>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"col-sm-offset-2 col-sm-10\">
                                <button type=\"submit\" class=\"btn btn-primary\">Create</button>
                            </div>
                        </div>
                    </form>
                </div>
            </template>

        </div>
    </div>

";
        
        $__internal_36dc5df039ab328019b3273de2bb83836fbbf1da81488788783607545d0ad558->leave($__internal_36dc5df039ab328019b3273de2bb83836fbbf1da81488788783607545d0ad558_prof);

        
        $__internal_02df0abe128ec53f0553e842cca91be3f774b376ee89e18f74595dd840baae75->leave($__internal_02df0abe128ec53f0553e842cca91be3f774b376ee89e18f74595dd840baae75_prof);

    }

    // line 73
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e0a5c601f92ce53732d131b0f356e5041df144f9f3319ffeccc2c9b32c4bfea2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0a5c601f92ce53732d131b0f356e5041df144f9f3319ffeccc2c9b32c4bfea2->enter($__internal_e0a5c601f92ce53732d131b0f356e5041df144f9f3319ffeccc2c9b32c4bfea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ba9dbe48299f3de320380eb6e47a0aec952cff05c392b5766a8e85bfceb2eb07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba9dbe48299f3de320380eb6e47a0aec952cff05c392b5766a8e85bfceb2eb07->enter($__internal_ba9dbe48299f3de320380eb6e47a0aec952cff05c392b5766a8e85bfceb2eb07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 74
        echo "
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
    <script src=\"https://unpkg.com/axios/dist/axios.min.js\"></script>
    <script src=\"https://unpkg.com/vue\"></script>
    ";
        // line 79
        echo "        ";
        // line 80
        echo "            ";
        // line 81
        echo "            ";
        // line 82
        echo "                ";
        // line 83
        echo "                    ";
        // line 84
        echo "                        ";
        // line 85
        echo "                        ";
        // line 86
        echo "                        ";
        // line 87
        echo "                        ";
        // line 88
        echo "                    ";
        // line 89
        echo "                ";
        // line 90
        echo "            ";
        // line 91
        echo "        ";
        // line 92
        echo "
        ";
        // line 94
        echo "            ";
        // line 95
        echo "        ";
        // line 96
        echo "
        ";
        // line 98
        echo "            ";
        // line 99
        echo "            ";
        // line 100
        echo "            ";
        // line 101
        echo "                ";
        // line 102
        echo "            ";
        // line 103
        echo "        ";
        // line 104
        echo "
    </script>
    ";
        // line 107
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("includes/create.js"), "html", null, true);
        echo "\"></script>


";
        
        $__internal_ba9dbe48299f3de320380eb6e47a0aec952cff05c392b5766a8e85bfceb2eb07->leave($__internal_ba9dbe48299f3de320380eb6e47a0aec952cff05c392b5766a8e85bfceb2eb07_prof);

        
        $__internal_e0a5c601f92ce53732d131b0f356e5041df144f9f3319ffeccc2c9b32c4bfea2->leave($__internal_e0a5c601f92ce53732d131b0f356e5041df144f9f3319ffeccc2c9b32c4bfea2_prof);

    }

    // line 112
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_684c3cee8b5c21f3e6875f89fc7f0e6b0e6c3c64cc66adb25c8dacacdb199eaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_684c3cee8b5c21f3e6875f89fc7f0e6b0e6c3c64cc66adb25c8dacacdb199eaf->enter($__internal_684c3cee8b5c21f3e6875f89fc7f0e6b0e6c3c64cc66adb25c8dacacdb199eaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_9caaf9e3a1c80a833e790e8515d2bce9ea426416a2db512226bd1a063fd48eee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9caaf9e3a1c80a833e790e8515d2bce9ea426416a2db512226bd1a063fd48eee->enter($__internal_9caaf9e3a1c80a833e790e8515d2bce9ea426416a2db512226bd1a063fd48eee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 113
        echo "<style>
    body { background: #F5F5F5; font: 18px/1.5 sans-serif; }
    h1, h2 { line-height: 1.2; margin: 0 0 .5em; }
    h1 { font-size: 36px; }
    h2 { font-size: 21px; margin-bottom: 1em; }
    p { margin: 0 0 1em 0; }
    a { color: #0000F0; }
    a:hover { text-decoration: none; }
    code { background: #F5F5F5; max-width: 100px; padding: 2px 6px; word-wrap: break-word; }
    #wrapper { background: #FFF; margin: 1em auto; max-width: 800px; width: 95%; }
    #container { padding: 2em; }
    #welcome, #status { margin-bottom: 2em; }
    #welcome h1 span { display: block; font-size: 75%; }
    #icon-status, #icon-book { float: left; height: 64px; margin-right: 1em; margin-top: -4px; width: 64px; }
    #icon-book { display: none; }

    @media (min-width: 768px) {
        #wrapper { width: 80%; margin: 2em auto; }
        #icon-book { display: inline-block; }
        #status a, #next a { display: block; }

        @-webkit-keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        @keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        .sf-toolbar { opacity: 0; -webkit-animation: fade-in 1s .2s forwards; animation: fade-in 1s .2s forwards;}
    }
</style>
";
        
        $__internal_9caaf9e3a1c80a833e790e8515d2bce9ea426416a2db512226bd1a063fd48eee->leave($__internal_9caaf9e3a1c80a833e790e8515d2bce9ea426416a2db512226bd1a063fd48eee_prof);

        
        $__internal_684c3cee8b5c21f3e6875f89fc7f0e6b0e6c3c64cc66adb25c8dacacdb199eaf->leave($__internal_684c3cee8b5c21f3e6875f89fc7f0e6b0e6c3c64cc66adb25c8dacacdb199eaf_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 113,  210 => 112,  195 => 107,  191 => 104,  189 => 103,  187 => 102,  185 => 101,  183 => 100,  181 => 99,  179 => 98,  176 => 96,  174 => 95,  172 => 94,  169 => 92,  167 => 91,  165 => 90,  163 => 89,  161 => 88,  159 => 87,  157 => 86,  155 => 85,  153 => 84,  151 => 83,  149 => 82,  147 => 81,  145 => 80,  143 => 79,  137 => 74,  128 => 73,  51 => 4,  42 => 3,  11 => 1,);
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
    <div id=\"wrapper\">
        <div id=\"container\">
            <div class=\"header clearfix\">
                <nav>
                    <ul class=\"nav nav-pills pull-right\">
                        <li role=\"presentation\">
                            <a href=\"#\" @click=\"currentView='manage-posts'\">Manage Posts</a>
                        </li>
                        <li role=\"presentation\">
                            <a href=\"#\" @click=\"currentView='create-post'\">Create Post</a>
                        </li>
                    </ul>
                </nav>
                <h3 class=\"text-muted\">Admin Panel</h3>
            </div>

            <div class=\"container\">
                <component :is=\"currentView\" transition=\"fade\" transition-mode=\"out-in\"></component>
            </div>

            <template id=\"manage-template\">
                <div>
                    <h1>Manage Posts</h1>
                    <div class=\"list-group\">
                        <a v-for=\"post in posts\" href=\"#\" class=\"list-group-item clearfix\">
                            \${ post }
                            <span class=\"pull-right\">
            <button class=\"btn btn-xs btn-info\">
              <span class=\"glyphicon glyphicon-edit\"></span>
            </button>
            <button class=\"btn btn-xs btn-warning\">
              <span class=\"glyphicon glyphicon-trash\"></span>
            </button>
          </span>
                        </a>
                    </div>
                </div>
            </template>

            <template id=\"create-template\">
                <div>
                    <h1>Create Post</h1>
                    <form class=\"form-horizontal\">
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\">Post title</label>
                            <div class=\"col-sm-10\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"Post title\">
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\">Post body</label>
                            <div class=\"col-sm-10\">
                                <textarea class=\"form-control\" rows=\"5\"></textarea>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"col-sm-offset-2 col-sm-10\">
                                <button type=\"submit\" class=\"btn btn-primary\">Create</button>
                            </div>
                        </div>
                    </form>
                </div>
            </template>

        </div>
    </div>

{% endblock %}

{% block javascripts %}

    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
    <script src=\"https://unpkg.com/axios/dist/axios.min.js\"></script>
    <script src=\"https://unpkg.com/vue\"></script>
    {#<script>#}
        {#Vue.component('manage-posts', {#}
            {#template: '#manage-template',#}
            {#data: function() {#}
                {#return {#}
                    {#posts: [#}
                        {#'Vue.js: The Basics',#}
                        {#'Vue.js Components',#}
                        {#'Server Side Rendering with Vue',#}
                        {#'Vue + Firebase'#}
                    {#]#}
                {#}#}
            {#}#}
        {#})#}

        {#Vue.component('create-post', {#}
            {#template: '#create-template'#}
        {#})#}

        {#new Vue({#}
            {#delimiters: ['\${', '}'],#}
            {#el: 'body',#}
            {#data: {#}
                {#currentView: 'manage-posts'#}
            {#}#}
        {#})#}

    </script>
    {#<script src=\"{{ asset('includes/modal.js') }}\"></script>#}
    <script src=\"{{ asset('includes/create.js') }}\"></script>


{% endblock %}

{% block stylesheets %}
<style>
    body { background: #F5F5F5; font: 18px/1.5 sans-serif; }
    h1, h2 { line-height: 1.2; margin: 0 0 .5em; }
    h1 { font-size: 36px; }
    h2 { font-size: 21px; margin-bottom: 1em; }
    p { margin: 0 0 1em 0; }
    a { color: #0000F0; }
    a:hover { text-decoration: none; }
    code { background: #F5F5F5; max-width: 100px; padding: 2px 6px; word-wrap: break-word; }
    #wrapper { background: #FFF; margin: 1em auto; max-width: 800px; width: 95%; }
    #container { padding: 2em; }
    #welcome, #status { margin-bottom: 2em; }
    #welcome h1 span { display: block; font-size: 75%; }
    #icon-status, #icon-book { float: left; height: 64px; margin-right: 1em; margin-top: -4px; width: 64px; }
    #icon-book { display: none; }

    @media (min-width: 768px) {
        #wrapper { width: 80%; margin: 2em auto; }
        #icon-book { display: inline-block; }
        #status a, #next a { display: block; }

        @-webkit-keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        @keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        .sf-toolbar { opacity: 0; -webkit-animation: fade-in 1s .2s forwards; animation: fade-in 1s .2s forwards;}
    }
</style>
{% endblock %}", "default/index.html.twig", "/var/www/table_test/app/Resources/views/default/index.html.twig");
    }
}
