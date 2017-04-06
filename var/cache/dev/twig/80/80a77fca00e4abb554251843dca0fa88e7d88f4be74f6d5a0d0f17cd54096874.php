<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_cb96da3c872770fcfc01bc2c991ff705c341c0006de6b68ce364b4e228b69788 extends Twig_Template
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
        $__internal_cde036d17440e58d3b8b9e76c049b277d3edd95d8971744d923d461f8d34978f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cde036d17440e58d3b8b9e76c049b277d3edd95d8971744d923d461f8d34978f->enter($__internal_cde036d17440e58d3b8b9e76c049b277d3edd95d8971744d923d461f8d34978f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_d9385a0d5b074c632926dc2c39b5245b0b2acbdf3c4476905e6517c415187cae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9385a0d5b074c632926dc2c39b5245b0b2acbdf3c4476905e6517c415187cae->enter($__internal_d9385a0d5b074c632926dc2c39b5245b0b2acbdf3c4476905e6517c415187cae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cde036d17440e58d3b8b9e76c049b277d3edd95d8971744d923d461f8d34978f->leave($__internal_cde036d17440e58d3b8b9e76c049b277d3edd95d8971744d923d461f8d34978f_prof);

        
        $__internal_d9385a0d5b074c632926dc2c39b5245b0b2acbdf3c4476905e6517c415187cae->leave($__internal_d9385a0d5b074c632926dc2c39b5245b0b2acbdf3c4476905e6517c415187cae_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7350ddd72c8b66e3e98606c3e9a13267af7575c20648c3f2cf545914b32cfec1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7350ddd72c8b66e3e98606c3e9a13267af7575c20648c3f2cf545914b32cfec1->enter($__internal_7350ddd72c8b66e3e98606c3e9a13267af7575c20648c3f2cf545914b32cfec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1a45493a6cd3f8f8b62316e1e17514878d6ea37abe3f02dd0ea7031c0584d482 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a45493a6cd3f8f8b62316e1e17514878d6ea37abe3f02dd0ea7031c0584d482->enter($__internal_1a45493a6cd3f8f8b62316e1e17514878d6ea37abe3f02dd0ea7031c0584d482_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_1a45493a6cd3f8f8b62316e1e17514878d6ea37abe3f02dd0ea7031c0584d482->leave($__internal_1a45493a6cd3f8f8b62316e1e17514878d6ea37abe3f02dd0ea7031c0584d482_prof);

        
        $__internal_7350ddd72c8b66e3e98606c3e9a13267af7575c20648c3f2cf545914b32cfec1->leave($__internal_7350ddd72c8b66e3e98606c3e9a13267af7575c20648c3f2cf545914b32cfec1_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_5ed4f636818e53f6ab7eb590e36eb3b9dcf98a7aa95073988c4a8c4747844ca2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ed4f636818e53f6ab7eb590e36eb3b9dcf98a7aa95073988c4a8c4747844ca2->enter($__internal_5ed4f636818e53f6ab7eb590e36eb3b9dcf98a7aa95073988c4a8c4747844ca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_dbaccd6b482b659081cb8feecec2214612b594e2517ecb1dccbec8c18b953c81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbaccd6b482b659081cb8feecec2214612b594e2517ecb1dccbec8c18b953c81->enter($__internal_dbaccd6b482b659081cb8feecec2214612b594e2517ecb1dccbec8c18b953c81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_dbaccd6b482b659081cb8feecec2214612b594e2517ecb1dccbec8c18b953c81->leave($__internal_dbaccd6b482b659081cb8feecec2214612b594e2517ecb1dccbec8c18b953c81_prof);

        
        $__internal_5ed4f636818e53f6ab7eb590e36eb3b9dcf98a7aa95073988c4a8c4747844ca2->leave($__internal_5ed4f636818e53f6ab7eb590e36eb3b9dcf98a7aa95073988c4a8c4747844ca2_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_871af2d1b6dfca2b66d2f2872fd0e25e70c51fb47b85b7de2ed409aec616a5dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_871af2d1b6dfca2b66d2f2872fd0e25e70c51fb47b85b7de2ed409aec616a5dc->enter($__internal_871af2d1b6dfca2b66d2f2872fd0e25e70c51fb47b85b7de2ed409aec616a5dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0b7b341e2f3d3dabf1fa0fdb6b836bd2853905e10fcafffecaa232a3e7171bca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b7b341e2f3d3dabf1fa0fdb6b836bd2853905e10fcafffecaa232a3e7171bca->enter($__internal_0b7b341e2f3d3dabf1fa0fdb6b836bd2853905e10fcafffecaa232a3e7171bca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_0b7b341e2f3d3dabf1fa0fdb6b836bd2853905e10fcafffecaa232a3e7171bca->leave($__internal_0b7b341e2f3d3dabf1fa0fdb6b836bd2853905e10fcafffecaa232a3e7171bca_prof);

        
        $__internal_871af2d1b6dfca2b66d2f2872fd0e25e70c51fb47b85b7de2ed409aec616a5dc->leave($__internal_871af2d1b6dfca2b66d2f2872fd0e25e70c51fb47b85b7de2ed409aec616a5dc_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/proyectos/testTravelerFelipe/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
