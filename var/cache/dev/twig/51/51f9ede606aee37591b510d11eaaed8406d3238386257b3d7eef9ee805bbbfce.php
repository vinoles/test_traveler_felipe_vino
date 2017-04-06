<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_d652bb4174510d6893ef5c603a08b455274e2758f164b3127e69e92be482e234 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_e44c7eb8990a48239a9b6aa5f87974ac083812c66aa7bcbcd990ba3b4995c6c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e44c7eb8990a48239a9b6aa5f87974ac083812c66aa7bcbcd990ba3b4995c6c4->enter($__internal_e44c7eb8990a48239a9b6aa5f87974ac083812c66aa7bcbcd990ba3b4995c6c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_005adb368ff0f4f17a1a711de23356692003c8ad047ab1d488a78e96e346f3b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_005adb368ff0f4f17a1a711de23356692003c8ad047ab1d488a78e96e346f3b6->enter($__internal_005adb368ff0f4f17a1a711de23356692003c8ad047ab1d488a78e96e346f3b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e44c7eb8990a48239a9b6aa5f87974ac083812c66aa7bcbcd990ba3b4995c6c4->leave($__internal_e44c7eb8990a48239a9b6aa5f87974ac083812c66aa7bcbcd990ba3b4995c6c4_prof);

        
        $__internal_005adb368ff0f4f17a1a711de23356692003c8ad047ab1d488a78e96e346f3b6->leave($__internal_005adb368ff0f4f17a1a711de23356692003c8ad047ab1d488a78e96e346f3b6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_630a728bb0b4ee7ef9685111ca3b379176ee70e02c42d4d4872e2c107eb554ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_630a728bb0b4ee7ef9685111ca3b379176ee70e02c42d4d4872e2c107eb554ef->enter($__internal_630a728bb0b4ee7ef9685111ca3b379176ee70e02c42d4d4872e2c107eb554ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1acb265c61cfc8bb5ac45845c68e33574a0622561e5433de9c5924bc9b2b4ee0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1acb265c61cfc8bb5ac45845c68e33574a0622561e5433de9c5924bc9b2b4ee0->enter($__internal_1acb265c61cfc8bb5ac45845c68e33574a0622561e5433de9c5924bc9b2b4ee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_1acb265c61cfc8bb5ac45845c68e33574a0622561e5433de9c5924bc9b2b4ee0->leave($__internal_1acb265c61cfc8bb5ac45845c68e33574a0622561e5433de9c5924bc9b2b4ee0_prof);

        
        $__internal_630a728bb0b4ee7ef9685111ca3b379176ee70e02c42d4d4872e2c107eb554ef->leave($__internal_630a728bb0b4ee7ef9685111ca3b379176ee70e02c42d4d4872e2c107eb554ef_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e027bc9a1d63d89c7b2313d2572e0445e3d16a3ab2275a9c7cdde035ee72f263 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e027bc9a1d63d89c7b2313d2572e0445e3d16a3ab2275a9c7cdde035ee72f263->enter($__internal_e027bc9a1d63d89c7b2313d2572e0445e3d16a3ab2275a9c7cdde035ee72f263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0ba3d0335edff0505c2a4c71544e5ac6a4aeb5501b46aefa98153c61c942bd2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ba3d0335edff0505c2a4c71544e5ac6a4aeb5501b46aefa98153c61c942bd2b->enter($__internal_0ba3d0335edff0505c2a4c71544e5ac6a4aeb5501b46aefa98153c61c942bd2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_0ba3d0335edff0505c2a4c71544e5ac6a4aeb5501b46aefa98153c61c942bd2b->leave($__internal_0ba3d0335edff0505c2a4c71544e5ac6a4aeb5501b46aefa98153c61c942bd2b_prof);

        
        $__internal_e027bc9a1d63d89c7b2313d2572e0445e3d16a3ab2275a9c7cdde035ee72f263->leave($__internal_e027bc9a1d63d89c7b2313d2572e0445e3d16a3ab2275a9c7cdde035ee72f263_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_32e4bb17da12033cac7ae4dd9475dd8295b9f93e15c36ce60b50449f287612ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32e4bb17da12033cac7ae4dd9475dd8295b9f93e15c36ce60b50449f287612ad->enter($__internal_32e4bb17da12033cac7ae4dd9475dd8295b9f93e15c36ce60b50449f287612ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f5d2a54e2c32fa8cdb6bd96cad865ef52afdd49de398df6a6f01d8f1c8fa4aaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5d2a54e2c32fa8cdb6bd96cad865ef52afdd49de398df6a6f01d8f1c8fa4aaf->enter($__internal_f5d2a54e2c32fa8cdb6bd96cad865ef52afdd49de398df6a6f01d8f1c8fa4aaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_f5d2a54e2c32fa8cdb6bd96cad865ef52afdd49de398df6a6f01d8f1c8fa4aaf->leave($__internal_f5d2a54e2c32fa8cdb6bd96cad865ef52afdd49de398df6a6f01d8f1c8fa4aaf_prof);

        
        $__internal_32e4bb17da12033cac7ae4dd9475dd8295b9f93e15c36ce60b50449f287612ad->leave($__internal_32e4bb17da12033cac7ae4dd9475dd8295b9f93e15c36ce60b50449f287612ad_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/proyectos/testTravelerFelipe/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
