<?php

/* WebSiteAdminBundle::menu_left.html.twig */
class __TwigTemplate_8e061b79066d4ad82182b65c4c66a1c7858974e87f3da59f3e56c85d32677adf extends Twig_Template
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
        $__internal_2713c870317827febb4a2674ec2a5829727075287a3a5b9520aa5ac1026481fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2713c870317827febb4a2674ec2a5829727075287a3a5b9520aa5ac1026481fb->enter($__internal_2713c870317827febb4a2674ec2a5829727075287a3a5b9520aa5ac1026481fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebSiteAdminBundle::menu_left.html.twig"));

        $__internal_31aec62844e80bcf5454b4bef2480c0adb03a6e3c3c0bae8b6e8aa4c9a3421e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31aec62844e80bcf5454b4bef2480c0adb03a6e3c3c0bae8b6e8aa4c9a3421e6->enter($__internal_31aec62844e80bcf5454b4bef2480c0adb03a6e3c3c0bae8b6e8aa4c9a3421e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebSiteAdminBundle::menu_left.html.twig"));

        // line 2
        echo "<div class=\"span3\" id=\"sidebar\">
    <ul class=\"nav nav-list bs-docs-sidenav nav-collapse collapse\">
        <li id=\"list\">
            <a href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_app_index");
        echo "\"><i class=\"icon-chevron-right\"></i>Todas las listas</a>
        </li>
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("WebSiteAppBundle:Default:listMenu"));
        echo "
       
        
    </ul>
</div>";
        
        $__internal_2713c870317827febb4a2674ec2a5829727075287a3a5b9520aa5ac1026481fb->leave($__internal_2713c870317827febb4a2674ec2a5829727075287a3a5b9520aa5ac1026481fb_prof);

        
        $__internal_31aec62844e80bcf5454b4bef2480c0adb03a6e3c3c0bae8b6e8aa4c9a3421e6->leave($__internal_31aec62844e80bcf5454b4bef2480c0adb03a6e3c3c0bae8b6e8aa4c9a3421e6_prof);

    }

    public function getTemplateName()
    {
        return "WebSiteAdminBundle::menu_left.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 7,  30 => 5,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# empty Twig template #}
<div class=\"span3\" id=\"sidebar\">
    <ul class=\"nav nav-list bs-docs-sidenav nav-collapse collapse\">
        <li id=\"list\">
            <a href=\"{{ path('list_app_index')}}\"><i class=\"icon-chevron-right\"></i>Todas las listas</a>
        </li>
        {{ render(controller('WebSiteAppBundle:Default:listMenu')) }}
       
        
    </ul>
</div>", "WebSiteAdminBundle::menu_left.html.twig", "/var/www/html/proyectos/testTravelerFelipe/src/WebSite/AdminBundle/Resources/views/menu_left.html.twig");
    }
}
