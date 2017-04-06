<?php

/* WebSiteAppBundle:Default:listMenu.html.twig */
class __TwigTemplate_f80df8742a138813f859c9022acab23343c7fc1cd5f7fad8ec8bc926496fceab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1f94c09ae84da620952f7e2bea482e016ba5879cb478e182181620ab42bd2605 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f94c09ae84da620952f7e2bea482e016ba5879cb478e182181620ab42bd2605->enter($__internal_1f94c09ae84da620952f7e2bea482e016ba5879cb478e182181620ab42bd2605_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebSiteAppBundle:Default:listMenu.html.twig"));

        $__internal_63be6d960629127df2157f109eeeb4cf161f0753e1459b445c7c950dccd26618 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63be6d960629127df2157f109eeeb4cf161f0753e1459b445c7c950dccd26618->enter($__internal_63be6d960629127df2157f109eeeb4cf161f0753e1459b445c7c950dccd26618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebSiteAppBundle:Default:listMenu.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listApps"]) ? $context["listApps"] : $this->getContext($context, "listApps")));
        foreach ($context['_seq'] as $context["_key"] => $context["listApp"]) {
            // line 2
            echo "    <li id=\"list-menu-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["listApp"], "id", array()), "html", null, true);
            echo "\">
        <a href=\"";
            // line 3
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_app_show", array("id" => $this->getAttribute($context["listApp"], "id", array()))), "html", null, true);
            echo "\"><i class=\"icon-chevron-right\"></i>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["listApp"], "name", array()), "html", null, true);
            echo "</a>
    </li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listApp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_1f94c09ae84da620952f7e2bea482e016ba5879cb478e182181620ab42bd2605->leave($__internal_1f94c09ae84da620952f7e2bea482e016ba5879cb478e182181620ab42bd2605_prof);

        
        $__internal_63be6d960629127df2157f109eeeb4cf161f0753e1459b445c7c950dccd26618->leave($__internal_63be6d960629127df2157f109eeeb4cf161f0753e1459b445c7c950dccd26618_prof);

    }

    public function getTemplateName()
    {
        return "WebSiteAppBundle:Default:listMenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 3,  29 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for listApp in listApps %}
    <li id=\"list-menu-{{listApp.id}}\">
        <a href=\"{{ path('list_app_show', { 'id': listApp.id }) }}\"><i class=\"icon-chevron-right\"></i>{{ listApp.name }}</a>
    </li>
{% endfor %}", "WebSiteAppBundle:Default:listMenu.html.twig", "/var/www/html/proyectos/testTravelerFelipe/src/WebSite/AppBundle/Resources/views/Default/listMenu.html.twig");
    }
}
