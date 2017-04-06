<?php

/* WebSiteAppBundle:ListApp:show.html.twig */
class __TwigTemplate_2c679216cfb05cabeb7d5b7705eb8ff1007f29d59b03d0da344d4d160e890a41 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WebSiteAdminBundle::layout.html.twig", "WebSiteAppBundle:ListApp:show.html.twig", 1);
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
        $__internal_e5f5a1152cdd3a6727de8711c8ff547c7b19919e037deb7350d128f6ec3929c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5f5a1152cdd3a6727de8711c8ff547c7b19919e037deb7350d128f6ec3929c3->enter($__internal_e5f5a1152cdd3a6727de8711c8ff547c7b19919e037deb7350d128f6ec3929c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebSiteAppBundle:ListApp:show.html.twig"));

        $__internal_e4beb28ebc37027b211d8aa34adb94e4be4edc0db53e614967e0be01f6374670 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4beb28ebc37027b211d8aa34adb94e4be4edc0db53e614967e0be01f6374670->enter($__internal_e4beb28ebc37027b211d8aa34adb94e4be4edc0db53e614967e0be01f6374670_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebSiteAppBundle:ListApp:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5f5a1152cdd3a6727de8711c8ff547c7b19919e037deb7350d128f6ec3929c3->leave($__internal_e5f5a1152cdd3a6727de8711c8ff547c7b19919e037deb7350d128f6ec3929c3_prof);

        
        $__internal_e4beb28ebc37027b211d8aa34adb94e4be4edc0db53e614967e0be01f6374670->leave($__internal_e4beb28ebc37027b211d8aa34adb94e4be4edc0db53e614967e0be01f6374670_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_4420f64e033f6cf585c5a78fc8add65e4f553a4b5bba9b5cb0cfd3c2164b7be3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4420f64e033f6cf585c5a78fc8add65e4f553a4b5bba9b5cb0cfd3c2164b7be3->enter($__internal_4420f64e033f6cf585c5a78fc8add65e4f553a4b5bba9b5cb0cfd3c2164b7be3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ba6a9b5ed288c5ba50b2b90377e8f7ef3dcc01a72afe699ac243c25d89c3df31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba6a9b5ed288c5ba50b2b90377e8f7ef3dcc01a72afe699ac243c25d89c3df31->enter($__internal_ba6a9b5ed288c5ba50b2b90377e8f7ef3dcc01a72afe699ac243c25d89c3df31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
    ";
        // line 4
        $this->displayBlock('content', $context, $blocks);
        // line 73
        echo "                        ";
        $this->displayBlock('scripts', $context, $blocks);
        // line 80
        echo "                        ";
        
        $__internal_ba6a9b5ed288c5ba50b2b90377e8f7ef3dcc01a72afe699ac243c25d89c3df31->leave($__internal_ba6a9b5ed288c5ba50b2b90377e8f7ef3dcc01a72afe699ac243c25d89c3df31_prof);

        
        $__internal_4420f64e033f6cf585c5a78fc8add65e4f553a4b5bba9b5cb0cfd3c2164b7be3->leave($__internal_4420f64e033f6cf585c5a78fc8add65e4f553a4b5bba9b5cb0cfd3c2164b7be3_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_04d4ae37c70165142f3058a23a2d94e2e111b0ae81651af2d61e3b95dec2a634 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04d4ae37c70165142f3058a23a2d94e2e111b0ae81651af2d61e3b95dec2a634->enter($__internal_04d4ae37c70165142f3058a23a2d94e2e111b0ae81651af2d61e3b95dec2a634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_dbda70c76b13a5d360084bf0203732b49d8a594ed16976f8515e35e9a560f424 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbda70c76b13a5d360084bf0203732b49d8a594ed16976f8515e35e9a560f424->enter($__internal_dbda70c76b13a5d360084bf0203732b49d8a594ed16976f8515e35e9a560f424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "        <div class=\"span9\" id=\"content\">

            <div class=\"row-fluid\">
                <div class=\"block\">
                    <div class=\"navbar navbar-inner block-header\">
                        <div class=\"muted pull-left\">Nombre: ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listApp"]) ? $context["listApp"] : $this->getContext($context, "listApp")), "name", array()), "html", null, true);
        echo " | Fecha: ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["listApp"]) ? $context["listApp"] : $this->getContext($context, "listApp")), "created", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</div>
                    </div>
                    <div class=\"block-content collapse in\">
                        <div class=\"span12\">
                            <div class=\"table-toolbar\">
                                <div class=\"btn-group pull-right\">
                                    <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("activity_new", array("list" => $this->getAttribute((isset($context["listApp"]) ? $context["listApp"] : $this->getContext($context, "listApp")), "id", array()))), "html", null, true);
        echo "\"><button class=\"btn btn-success\">Nueva Actividad <i class=\"icon-plus icon-white\"></i></button></a>
                                </div>
                            </div>
                            <br>

                            <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"table table-striped table-bordered\" id=\"list_table\">

                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Fecha de creación</th>
                                        <th>Fecha limite</th>
                                        <th>Fecha de término</th>
                                        <th>Realizada</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["listApp"]) ? $context["listApp"] : $this->getContext($context, "listApp")), "activities", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["activity"]) {
            // line 35
            echo "                                        <tr id=\"activity-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["activity"], "id", array()), "html", null, true);
            echo "\">
                                            <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["activity"], "name", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 37
            if ($this->getAttribute($context["activity"], "created", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["activity"], "created", array()), "d-M-Y H:i"), "html", null, true);
            }
            echo "</td>
                                            <td>";
            // line 38
            if ($this->getAttribute($context["activity"], "deadline", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["activity"], "deadline", array()), "d-M-Y H:i"), "html", null, true);
            }
            echo "</td>
                                            <td id=\"end-date-";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["activity"], "id", array()), "html", null, true);
            echo "\">";
            if ($this->getAttribute($context["activity"], "endDate", array())) {
                // line 40
                echo "                                                ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["activity"], "endDate", array()), "d-M-Y H:i"), "html", null, true);
                echo "
                                            ";
            } else {
                // line 42
                echo "                                                Sin concluir
                                                ";
            }
            // line 43
            echo "</td>
                                                <td>
                                                    ";
            // line 45
            if ($this->getAttribute($context["activity"], "status", array())) {
                // line 46
                echo "                                                        ";
                $context["class"] = "badge btn-success";
                // line 47
                echo "                                                        ";
                $context["message"] = "si";
                // line 48
                echo "                                                    ";
            } else {
                // line 49
                echo "                                                        ";
                $context["class"] = "badge btn-danger";
                // line 50
                echo "                                                        ";
                $context["message"] = "no";
                // line 51
                echo "                                                    ";
            }
            // line 52
            echo "                                                    <div class=\"";
            echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
            echo "\" id=\"status-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["activity"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo "</div>
                                                </td>
                                                <td>
                                                    ";
            // line 55
            if ( !$this->getAttribute($context["activity"], "status", array())) {
                // line 56
                echo "                                                        <a class=\"btn-mini btn-primary btn\" onclick=\"confirmed(";
                echo twig_escape_filter($this->env, $this->getAttribute($context["activity"], "id", array()), "html", null, true);
                echo ")\" id=\"confirm-button-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["activity"], "id", array()), "html", null, true);
                echo "\">finalizar</a>
                                                    ";
            }
            // line 58
            echo "                                                    <a class=\"btn-mini btn-info btn\"href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("activity_edit", array("id" => $this->getAttribute($context["activity"], "id", array()), "listId" => $this->getAttribute($this->getAttribute($context["activity"], "list", array()), "id", array()))), "html", null, true);
            echo "\">editar</a>
                                                    <a class=\"btn-mini btn-danger btn\" onclick=\"opendDelete(";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["activity"], "id", array()), "html", null, true);
            echo ")\">X</a>
                                                </td>
                                            </tr>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>  
                    <input type=\"hidden\" value=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listApp"]) ? $context["listApp"] : $this->getContext($context, "listApp")), "id", array()), "html", null, true);
        echo "\" id=\"li_menu\">
                    ";
        
        $__internal_dbda70c76b13a5d360084bf0203732b49d8a594ed16976f8515e35e9a560f424->leave($__internal_dbda70c76b13a5d360084bf0203732b49d8a594ed16976f8515e35e9a560f424_prof);

        
        $__internal_04d4ae37c70165142f3058a23a2d94e2e111b0ae81651af2d61e3b95dec2a634->leave($__internal_04d4ae37c70165142f3058a23a2d94e2e111b0ae81651af2d61e3b95dec2a634_prof);

    }

    // line 73
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_366ee3cbbeaabb1c265e2ff11665c839a72635ef246bc9db94e045decf5b8079 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_366ee3cbbeaabb1c265e2ff11665c839a72635ef246bc9db94e045decf5b8079->enter($__internal_366ee3cbbeaabb1c265e2ff11665c839a72635ef246bc9db94e045decf5b8079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_181dcab1189f8a7eaafc21e08cb1d4484e04cd95e72ee9acd6d38fbfb619523e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_181dcab1189f8a7eaafc21e08cb1d4484e04cd95e72ee9acd6d38fbfb619523e->enter($__internal_181dcab1189f8a7eaafc21e08cb1d4484e04cd95e72ee9acd6d38fbfb619523e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 74
        echo "                            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/websiteapp/js/Activity/list.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
                            <script>
                                                        var li_menu = \$(\"#li_menu\").val();
                                                        \$(\"#list-menu-\" + li_menu).addClass(\"active\");
                            </script>
                        ";
        
        $__internal_181dcab1189f8a7eaafc21e08cb1d4484e04cd95e72ee9acd6d38fbfb619523e->leave($__internal_181dcab1189f8a7eaafc21e08cb1d4484e04cd95e72ee9acd6d38fbfb619523e_prof);

        
        $__internal_366ee3cbbeaabb1c265e2ff11665c839a72635ef246bc9db94e045decf5b8079->leave($__internal_366ee3cbbeaabb1c265e2ff11665c839a72635ef246bc9db94e045decf5b8079_prof);

    }

    public function getTemplateName()
    {
        return "WebSiteAppBundle:ListApp:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 74,  238 => 73,  226 => 71,  216 => 63,  206 => 59,  201 => 58,  193 => 56,  191 => 55,  180 => 52,  177 => 51,  174 => 50,  171 => 49,  168 => 48,  165 => 47,  162 => 46,  160 => 45,  156 => 43,  152 => 42,  146 => 40,  142 => 39,  136 => 38,  130 => 37,  126 => 36,  121 => 35,  117 => 34,  96 => 16,  85 => 10,  78 => 5,  69 => 4,  59 => 80,  56 => 73,  54 => 4,  51 => 3,  42 => 2,  11 => 1,);
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
                        <div class=\"muted pull-left\">Nombre: {{listApp.name}} | Fecha: {{ listApp.created|date('Y-m-d H:i:s') }}</div>
                    </div>
                    <div class=\"block-content collapse in\">
                        <div class=\"span12\">
                            <div class=\"table-toolbar\">
                                <div class=\"btn-group pull-right\">
                                    <a href=\"{{ path('activity_new', { 'list': listApp.id }) }}\"><button class=\"btn btn-success\">Nueva Actividad <i class=\"icon-plus icon-white\"></i></button></a>
                                </div>
                            </div>
                            <br>

                            <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"table table-striped table-bordered\" id=\"list_table\">

                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Fecha de creación</th>
                                        <th>Fecha limite</th>
                                        <th>Fecha de término</th>
                                        <th>Realizada</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {% for activity in listApp.activities %}
                                        <tr id=\"activity-{{activity.id}}\">
                                            <td>{{ activity.name }}</td>
                                            <td>{% if activity.created %}{{ activity.created|date('d-M-Y H:i') }}{% endif %}</td>
                                            <td>{% if activity.deadline %}{{ activity.deadline|date('d-M-Y H:i') }}{% endif %}</td>
                                            <td id=\"end-date-{{activity.id}}\">{% if activity.endDate %}
                                                {{ activity.endDate|date('d-M-Y H:i') }}
                                            {%else%}
                                                Sin concluir
                                                {% endif %}</td>
                                                <td>
                                                    {% if activity.status %}
                                                        {% set class = \"badge btn-success\" %}
                                                        {% set message = \"si\" %}
                                                    {% else %}
                                                        {% set class = \"badge btn-danger\" %}
                                                        {% set message = \"no\" %}
                                                    {% endif %}
                                                    <div class=\"{{class}}\" id=\"status-{{activity.id}}\">{{message}}</div>
                                                </td>
                                                <td>
                                                    {% if not activity.status %}
                                                        <a class=\"btn-mini btn-primary btn\" onclick=\"confirmed({{activity.id}})\" id=\"confirm-button-{{activity.id}}\">finalizar</a>
                                                    {% endif %}
                                                    <a class=\"btn-mini btn-info btn\"href=\"{{ path('activity_edit', { 'id': activity.id, 'listId': activity.list.id }) }}\">editar</a>
                                                    <a class=\"btn-mini btn-danger btn\" onclick=\"opendDelete({{activity.id}})\">X</a>
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
                    <input type=\"hidden\" value=\"{{listApp.id}}\" id=\"li_menu\">
                    {% endblock %}
                        {% block scripts %}
                            <script src=\"{{ asset('bundles/websiteapp/js/Activity/list.js')}}\" type=\"text/javascript\"></script>
                            <script>
                                                        var li_menu = \$(\"#li_menu\").val();
                                                        \$(\"#list-menu-\" + li_menu).addClass(\"active\");
                            </script>
                        {% endblock %}
                        {% endblock %}", "WebSiteAppBundle:ListApp:show.html.twig", "/var/www/html/proyectos/testTravelerFelipe/src/WebSite/AppBundle/Resources/views/ListApp/show.html.twig");
    }
}
