<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_b0d34787e7e0720e6d300754bde692cbb5d8b27642c40aef7384e39037251128 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_765c3354cdf5483a1e24332c209f43f0d8d4a47b668c00f73fb13579927755a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_765c3354cdf5483a1e24332c209f43f0d8d4a47b668c00f73fb13579927755a3->enter($__internal_765c3354cdf5483a1e24332c209f43f0d8d4a47b668c00f73fb13579927755a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_3da0517102f8627f7fc9eac9f634ab7011cd76b632bb1617fb7f91e6af61b4a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3da0517102f8627f7fc9eac9f634ab7011cd76b632bb1617fb7f91e6af61b4a2->enter($__internal_3da0517102f8627f7fc9eac9f634ab7011cd76b632bb1617fb7f91e6af61b4a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_765c3354cdf5483a1e24332c209f43f0d8d4a47b668c00f73fb13579927755a3->leave($__internal_765c3354cdf5483a1e24332c209f43f0d8d4a47b668c00f73fb13579927755a3_prof);

        
        $__internal_3da0517102f8627f7fc9eac9f634ab7011cd76b632bb1617fb7f91e6af61b4a2->leave($__internal_3da0517102f8627f7fc9eac9f634ab7011cd76b632bb1617fb7f91e6af61b4a2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a38d5143d308a28369066430cf0f13f7b798a0cf7ef2893641c8eb6589007fee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a38d5143d308a28369066430cf0f13f7b798a0cf7ef2893641c8eb6589007fee->enter($__internal_a38d5143d308a28369066430cf0f13f7b798a0cf7ef2893641c8eb6589007fee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_33bccf6b3fda86925a13eb939d24bbde89596222c4ca2538dfbe108f2b5b03d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33bccf6b3fda86925a13eb939d24bbde89596222c4ca2538dfbe108f2b5b03d4->enter($__internal_33bccf6b3fda86925a13eb939d24bbde89596222c4ca2538dfbe108f2b5b03d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_33bccf6b3fda86925a13eb939d24bbde89596222c4ca2538dfbe108f2b5b03d4->leave($__internal_33bccf6b3fda86925a13eb939d24bbde89596222c4ca2538dfbe108f2b5b03d4_prof);

        
        $__internal_a38d5143d308a28369066430cf0f13f7b798a0cf7ef2893641c8eb6589007fee->leave($__internal_a38d5143d308a28369066430cf0f13f7b798a0cf7ef2893641c8eb6589007fee_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/var/www/html/proyectos/testTravelerFelipe/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
