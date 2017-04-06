<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_8fcc3c7c49df1fe047f8b9b43521a01bdc6f041c4f1172345c7ad5c4984ef97b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_aeecf4c68527f47e0deceeb25b92c2a01f23cf30c7cebbd0a5f62e6201cc6278 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aeecf4c68527f47e0deceeb25b92c2a01f23cf30c7cebbd0a5f62e6201cc6278->enter($__internal_aeecf4c68527f47e0deceeb25b92c2a01f23cf30c7cebbd0a5f62e6201cc6278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_f52efe4cdc49a9308d073bacbc04026d2b9070d05c3914c9c3596ac83038f4f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f52efe4cdc49a9308d073bacbc04026d2b9070d05c3914c9c3596ac83038f4f4->enter($__internal_f52efe4cdc49a9308d073bacbc04026d2b9070d05c3914c9c3596ac83038f4f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aeecf4c68527f47e0deceeb25b92c2a01f23cf30c7cebbd0a5f62e6201cc6278->leave($__internal_aeecf4c68527f47e0deceeb25b92c2a01f23cf30c7cebbd0a5f62e6201cc6278_prof);

        
        $__internal_f52efe4cdc49a9308d073bacbc04026d2b9070d05c3914c9c3596ac83038f4f4->leave($__internal_f52efe4cdc49a9308d073bacbc04026d2b9070d05c3914c9c3596ac83038f4f4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_67f76b3d41c2dc287ca21692d45d9703d2cd4568fdf42d4243bb9176dc29b677 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67f76b3d41c2dc287ca21692d45d9703d2cd4568fdf42d4243bb9176dc29b677->enter($__internal_67f76b3d41c2dc287ca21692d45d9703d2cd4568fdf42d4243bb9176dc29b677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_cd284191140f59389cc195f4104fd7326192dc6261e608bc842b3f85f6b4dd04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd284191140f59389cc195f4104fd7326192dc6261e608bc842b3f85f6b4dd04->enter($__internal_cd284191140f59389cc195f4104fd7326192dc6261e608bc842b3f85f6b4dd04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_cd284191140f59389cc195f4104fd7326192dc6261e608bc842b3f85f6b4dd04->leave($__internal_cd284191140f59389cc195f4104fd7326192dc6261e608bc842b3f85f6b4dd04_prof);

        
        $__internal_67f76b3d41c2dc287ca21692d45d9703d2cd4568fdf42d4243bb9176dc29b677->leave($__internal_67f76b3d41c2dc287ca21692d45d9703d2cd4568fdf42d4243bb9176dc29b677_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0aee75fbfdbf3b217068fe1904673283fc289ae7230b5912501e66142d3232d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0aee75fbfdbf3b217068fe1904673283fc289ae7230b5912501e66142d3232d7->enter($__internal_0aee75fbfdbf3b217068fe1904673283fc289ae7230b5912501e66142d3232d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a671b1ba1a6cdc4e5cacd34b1337e136e13e7e4fe29c9416224930c7d2ba4dab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a671b1ba1a6cdc4e5cacd34b1337e136e13e7e4fe29c9416224930c7d2ba4dab->enter($__internal_a671b1ba1a6cdc4e5cacd34b1337e136e13e7e4fe29c9416224930c7d2ba4dab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a671b1ba1a6cdc4e5cacd34b1337e136e13e7e4fe29c9416224930c7d2ba4dab->leave($__internal_a671b1ba1a6cdc4e5cacd34b1337e136e13e7e4fe29c9416224930c7d2ba4dab_prof);

        
        $__internal_0aee75fbfdbf3b217068fe1904673283fc289ae7230b5912501e66142d3232d7->leave($__internal_0aee75fbfdbf3b217068fe1904673283fc289ae7230b5912501e66142d3232d7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b6059c095afcf9f91d9bda1aaeb62f5e6296eaccfc5efb5447e4fbd9e1de2c24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6059c095afcf9f91d9bda1aaeb62f5e6296eaccfc5efb5447e4fbd9e1de2c24->enter($__internal_b6059c095afcf9f91d9bda1aaeb62f5e6296eaccfc5efb5447e4fbd9e1de2c24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4be0f4682929a8a7b3896e6997546bcf96cc25773b7fe6eaf8c0429735179f8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4be0f4682929a8a7b3896e6997546bcf96cc25773b7fe6eaf8c0429735179f8b->enter($__internal_4be0f4682929a8a7b3896e6997546bcf96cc25773b7fe6eaf8c0429735179f8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4be0f4682929a8a7b3896e6997546bcf96cc25773b7fe6eaf8c0429735179f8b->leave($__internal_4be0f4682929a8a7b3896e6997546bcf96cc25773b7fe6eaf8c0429735179f8b_prof);

        
        $__internal_b6059c095afcf9f91d9bda1aaeb62f5e6296eaccfc5efb5447e4fbd9e1de2c24->leave($__internal_b6059c095afcf9f91d9bda1aaeb62f5e6296eaccfc5efb5447e4fbd9e1de2c24_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/proyectos/testTravelerFelipe/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
