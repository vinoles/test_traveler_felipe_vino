<?php

/* WebSiteAdminBundle::menu_top.html.twig */
class __TwigTemplate_793a6d7012fdb6614acf881bdbd8ab8e77832eb3d06fec4a70b801cb6e895ad8 extends Twig_Template
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
        $__internal_82ac2ab38cc5e151cd62d73cbcfa062e0a6827dbe003a653fb64a6b9bf8dc788 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82ac2ab38cc5e151cd62d73cbcfa062e0a6827dbe003a653fb64a6b9bf8dc788->enter($__internal_82ac2ab38cc5e151cd62d73cbcfa062e0a6827dbe003a653fb64a6b9bf8dc788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebSiteAdminBundle::menu_top.html.twig"));

        $__internal_5e9a5ca26ecfee08383fe592ddf7c0553626ad86fbafbb4db3b0dc8f92e5f347 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e9a5ca26ecfee08383fe592ddf7c0553626ad86fbafbb4db3b0dc8f92e5f347->enter($__internal_5e9a5ca26ecfee08383fe592ddf7c0553626ad86fbafbb4db3b0dc8f92e5f347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebSiteAdminBundle::menu_top.html.twig"));

        // line 2
        echo "<div class=\"navbar navbar-fixed-top\">
    <div class=\"navbar-inner\">
        <div class=\"container-fluid\">
            <a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\"> <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </a>
            <a class=\"brand\" href=\"#\">Admin Panel</a>
            <div class=\"nav-collapse collapse\">
                <ul class=\"nav pull-right\">
                    <li class=\"dropdown\">
                        <a href=\"#\" role=\"button\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"> 
                            <i class=\"icon-adjust\"></i>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstName", array()), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastName", array()), "html", null, true);
        echo " <i class=\"caret\"></i>

                        </a>
                        <ul class=\"dropdown-menu\">
                            <li>
                                <a tabindex=\"-1\" href=\"#\">Perfil</a>
                            </li>
                            <li class=\"divider\"></li>
                            <li>
                                <a tabindex=\"-1\" href=\"#\">Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
               
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>
</div>";
        
        $__internal_82ac2ab38cc5e151cd62d73cbcfa062e0a6827dbe003a653fb64a6b9bf8dc788->leave($__internal_82ac2ab38cc5e151cd62d73cbcfa062e0a6827dbe003a653fb64a6b9bf8dc788_prof);

        
        $__internal_5e9a5ca26ecfee08383fe592ddf7c0553626ad86fbafbb4db3b0dc8f92e5f347->leave($__internal_5e9a5ca26ecfee08383fe592ddf7c0553626ad86fbafbb4db3b0dc8f92e5f347_prof);

    }

    public function getTemplateName()
    {
        return "WebSiteAdminBundle::menu_top.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 14,  25 => 2,);
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
<div class=\"navbar navbar-fixed-top\">
    <div class=\"navbar-inner\">
        <div class=\"container-fluid\">
            <a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\"> <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </a>
            <a class=\"brand\" href=\"#\">Admin Panel</a>
            <div class=\"nav-collapse collapse\">
                <ul class=\"nav pull-right\">
                    <li class=\"dropdown\">
                        <a href=\"#\" role=\"button\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"> 
                            <i class=\"icon-adjust\"></i>{{user.firstName}} / {{user.lastName}} <i class=\"caret\"></i>

                        </a>
                        <ul class=\"dropdown-menu\">
                            <li>
                                <a tabindex=\"-1\" href=\"#\">Perfil</a>
                            </li>
                            <li class=\"divider\"></li>
                            <li>
                                <a tabindex=\"-1\" href=\"#\">Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
               
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>
</div>", "WebSiteAdminBundle::menu_top.html.twig", "/var/www/html/proyectos/testTravelerFelipe/src/WebSite/AdminBundle/Resources/views/menu_top.html.twig");
    }
}
