<?php

/* WebSiteAppBundle:ListApp:index.html.twig */
class __TwigTemplate_aeff3a90774a73703a51a1060015f52d114a4af0a632f44b7f1eb70a4e3b4696 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WebSiteAdminBundle::layout.html.twig", "WebSiteAppBundle:ListApp:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebSiteAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ae391b53f5212fe396d8442cf261fd4ce5d4ba32ee3f1ac068341df9815a296e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae391b53f5212fe396d8442cf261fd4ce5d4ba32ee3f1ac068341df9815a296e->enter($__internal_ae391b53f5212fe396d8442cf261fd4ce5d4ba32ee3f1ac068341df9815a296e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebSiteAppBundle:ListApp:index.html.twig"));

        $__internal_4a0cea0830b260a21af5b6f2284b7657bcd8500bc140c2b8b410731e27a6ba90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a0cea0830b260a21af5b6f2284b7657bcd8500bc140c2b8b410731e27a6ba90->enter($__internal_4a0cea0830b260a21af5b6f2284b7657bcd8500bc140c2b8b410731e27a6ba90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebSiteAppBundle:ListApp:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae391b53f5212fe396d8442cf261fd4ce5d4ba32ee3f1ac068341df9815a296e->leave($__internal_ae391b53f5212fe396d8442cf261fd4ce5d4ba32ee3f1ac068341df9815a296e_prof);

        
        $__internal_4a0cea0830b260a21af5b6f2284b7657bcd8500bc140c2b8b410731e27a6ba90->leave($__internal_4a0cea0830b260a21af5b6f2284b7657bcd8500bc140c2b8b410731e27a6ba90_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_5aa2cb587beb768bb5c20cf46eaacb83ebd8e4276b2a18bb83e23ed112d303ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5aa2cb587beb768bb5c20cf46eaacb83ebd8e4276b2a18bb83e23ed112d303ec->enter($__internal_5aa2cb587beb768bb5c20cf46eaacb83ebd8e4276b2a18bb83e23ed112d303ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_469a2df010e3c19f10decc0f655840f98816a3573a478f703bf8bca7a537c449 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_469a2df010e3c19f10decc0f655840f98816a3573a478f703bf8bca7a537c449->enter($__internal_469a2df010e3c19f10decc0f655840f98816a3573a478f703bf8bca7a537c449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
    ";
        // line 4
        $this->displayBlock('content', $context, $blocks);
        // line 65
        echo "    ";
        $this->displayBlock('scripts', $context, $blocks);
        
        $__internal_469a2df010e3c19f10decc0f655840f98816a3573a478f703bf8bca7a537c449->leave($__internal_469a2df010e3c19f10decc0f655840f98816a3573a478f703bf8bca7a537c449_prof);

        
        $__internal_5aa2cb587beb768bb5c20cf46eaacb83ebd8e4276b2a18bb83e23ed112d303ec->leave($__internal_5aa2cb587beb768bb5c20cf46eaacb83ebd8e4276b2a18bb83e23ed112d303ec_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_b072b51582aa2197c423811732c2fe56664d68dca96d8d0914c1e7394597e3f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b072b51582aa2197c423811732c2fe56664d68dca96d8d0914c1e7394597e3f9->enter($__internal_b072b51582aa2197c423811732c2fe56664d68dca96d8d0914c1e7394597e3f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_56583dbdbd2f57e68dbf5d8f98054fc8320abc9af958cab04bd0486b39c34c9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56583dbdbd2f57e68dbf5d8f98054fc8320abc9af958cab04bd0486b39c34c9e->enter($__internal_56583dbdbd2f57e68dbf5d8f98054fc8320abc9af958cab04bd0486b39c34c9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "        <div class=\"span9\" id=\"content\">
            <div class=\"row-fluid\">
                <div class=\"block\">
                    <div class=\"navbar navbar-inner block-header\">
                        <div class=\"muted pull-left\">Listas</div>
                    </div>
                    <div class=\"block-content collapse in\">
                        <div class=\"span12\">
                            <div class=\"table-toolbar\">
                                <div class=\"btn-group pull-right\">
                                    <a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_app_new");
        echo "\"><button class=\"btn btn-success\">Nueva Lista <i class=\"icon-plus icon-white\"></i></button></a>
                                </div>
                            </div>
                            <br>

                            <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"table table-striped table-bordered\" id=\"list_table\">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Fecha de creación</th>
                                        <th>Actividades pendientes</th>
                                        <th>Actividades completadas</th>
                                        <th>Actividades por  vencer</th>
                                        <th colspan=\"3\">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lists", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["listApp"]) {
            // line 33
            echo "                                        <tr id=\"list-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["listApp"], "id", array()), "html", null, true);
            echo "\">
                                            <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["listApp"], "name", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 35
            if ($this->getAttribute($context["listApp"], "created", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["listApp"], "created", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                                            <td>                                               
                                                ";
            // line 37
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("WebSiteAppBundle:Activity:getSatatusFalse", array("idList" => $this->getAttribute($context["listApp"], "id", array()))));
            echo "
                                            </td>
                                            <td>
                                                ";
            // line 40
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("WebSiteAppBundle:Activity:getSatatusTrue", array("idList" => $this->getAttribute($context["listApp"], "id", array()))));
            echo "
                                            </td>
                                            <td>
                                                ";
            // line 43
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("WebSiteAppBundle:Activity:activitisForExpiring", array("idList" => $this->getAttribute($context["listApp"], "id", array()))));
            echo "
                                            </td>
                                            <td>
                                                <a class=\"btn-mini btn-primary btn\" href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_app_show", array("id" => $this->getAttribute($context["listApp"], "id", array()))), "html", null, true);
            echo "\">actividades</a>
                                            </td>
                                            <td>

                                                <a class=\"btn-mini btn-info btn\"href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_app_edit", array("id" => $this->getAttribute($context["listApp"], "id", array()))), "html", null, true);
            echo "\">editar</a>
                                            </td>
                                            <td>
                                                <a class=\"btn-mini btn-danger btn\" onclick=\"opendDelete(";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["listApp"], "id", array()), "html", null, true);
            echo ")\">X</a>
                                            </td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listApp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    ";
        
        $__internal_56583dbdbd2f57e68dbf5d8f98054fc8320abc9af958cab04bd0486b39c34c9e->leave($__internal_56583dbdbd2f57e68dbf5d8f98054fc8320abc9af958cab04bd0486b39c34c9e_prof);

        
        $__internal_b072b51582aa2197c423811732c2fe56664d68dca96d8d0914c1e7394597e3f9->leave($__internal_b072b51582aa2197c423811732c2fe56664d68dca96d8d0914c1e7394597e3f9_prof);

    }

    // line 65
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_aeb83f69be12597f9391b535364035a194471c9cbcb4aab0cc4d808a86f05b45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aeb83f69be12597f9391b535364035a194471c9cbcb4aab0cc4d808a86f05b45->enter($__internal_aeb83f69be12597f9391b535364035a194471c9cbcb4aab0cc4d808a86f05b45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_f96496564c9961cbd79495a79a9eda0d761634922fad2536eb8f95829715bda2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f96496564c9961cbd79495a79a9eda0d761634922fad2536eb8f95829715bda2->enter($__internal_f96496564c9961cbd79495a79a9eda0d761634922fad2536eb8f95829715bda2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 66
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/websiteapp/js/List/list.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script type=\"text/javascript\">
                                                    \$(\"#list\").addClass(\"active\");
        </script>
    ";
        
        $__internal_f96496564c9961cbd79495a79a9eda0d761634922fad2536eb8f95829715bda2->leave($__internal_f96496564c9961cbd79495a79a9eda0d761634922fad2536eb8f95829715bda2_prof);

        
        $__internal_aeb83f69be12597f9391b535364035a194471c9cbcb4aab0cc4d808a86f05b45->leave($__internal_aeb83f69be12597f9391b535364035a194471c9cbcb4aab0cc4d808a86f05b45_prof);

    }

    public function getTemplateName()
    {
        return "WebSiteAppBundle:ListApp:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 66,  186 => 65,  169 => 57,  159 => 53,  153 => 50,  146 => 46,  140 => 43,  134 => 40,  128 => 37,  121 => 35,  117 => 34,  112 => 33,  108 => 32,  88 => 15,  76 => 5,  67 => 4,  56 => 65,  54 => 4,  51 => 3,  42 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"WebSiteAdminBundle::layout.html.twig\" %}
{% block body %}

    {% block content %}
        <div class=\"span9\" id=\"content\">
            <div class=\"row-fluid\">
                <div class=\"block\">
                    <div class=\"navbar navbar-inner block-header\">
                        <div class=\"muted pull-left\">Listas</div>
                    </div>
                    <div class=\"block-content collapse in\">
                        <div class=\"span12\">
                            <div class=\"table-toolbar\">
                                <div class=\"btn-group pull-right\">
                                    <a href=\"{{ path('list_app_new') }}\"><button class=\"btn btn-success\">Nueva Lista <i class=\"icon-plus icon-white\"></i></button></a>
                                </div>
                            </div>
                            <br>

                            <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"table table-striped table-bordered\" id=\"list_table\">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Fecha de creación</th>
                                        <th>Actividades pendientes</th>
                                        <th>Actividades completadas</th>
                                        <th>Actividades por  vencer</th>
                                        <th colspan=\"3\">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {% for listApp in user.lists %}
                                        <tr id=\"list-{{listApp.id}}\">
                                            <td>{{ listApp.name }}</td>
                                            <td>{% if listApp.created %}{{ listApp.created|date('Y-m-d H:i:s') }}{% endif %}</td>
                                            <td>                                               
                                                {{ render(controller('WebSiteAppBundle:Activity:getSatatusFalse',{ 'idList': listApp.id})) }}
                                            </td>
                                            <td>
                                                {{ render(controller('WebSiteAppBundle:Activity:getSatatusTrue',{ 'idList': listApp.id})) }}
                                            </td>
                                            <td>
                                                {{ render(controller('WebSiteAppBundle:Activity:activitisForExpiring',{ 'idList': listApp.id})) }}
                                            </td>
                                            <td>
                                                <a class=\"btn-mini btn-primary btn\" href=\"{{ path('list_app_show', { 'id': listApp.id }) }}\">actividades</a>
                                            </td>
                                            <td>

                                                <a class=\"btn-mini btn-info btn\"href=\"{{ path('list_app_edit', { 'id': listApp.id }) }}\">editar</a>
                                            </td>
                                            <td>
                                                <a class=\"btn-mini btn-danger btn\" onclick=\"opendDelete({{listApp.id}})\">X</a>
                                            </td>
                                        </tr>
                                    {% endfor %}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {% endblock %}
    {% block scripts %}
        <script src=\"{{ asset('bundles/websiteapp/js/List/list.js')}}\" type=\"text/javascript\"></script>
        <script type=\"text/javascript\">
                                                    \$(\"#list\").addClass(\"active\");
        </script>
    {% endblock %}
{% endblock %}", "WebSiteAppBundle:ListApp:index.html.twig", "/var/www/html/proyectos/testTravelerFelipe/src/WebSite/AppBundle/Resources/views/ListApp/index.html.twig");
    }
}
