<?php

/* WebSiteAppBundle:Activity:edit.html.twig */
class __TwigTemplate_48493a9d8ade487c5318c881425f003b191a2b50aa31c6848293d60f8a4ce2a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WebSiteAdminBundle::layout.html.twig", "WebSiteAppBundle:Activity:edit.html.twig", 1);
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
        $__internal_fbe95f14b124e0399b564b3b5a4730d93639cc47bf8d5a1fe73ecf3dcc291856 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbe95f14b124e0399b564b3b5a4730d93639cc47bf8d5a1fe73ecf3dcc291856->enter($__internal_fbe95f14b124e0399b564b3b5a4730d93639cc47bf8d5a1fe73ecf3dcc291856_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebSiteAppBundle:Activity:edit.html.twig"));

        $__internal_de7e75d5afb899f4a81f08da2ca41de40f02b6808e0d050b8510ed8f30ab9a93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de7e75d5afb899f4a81f08da2ca41de40f02b6808e0d050b8510ed8f30ab9a93->enter($__internal_de7e75d5afb899f4a81f08da2ca41de40f02b6808e0d050b8510ed8f30ab9a93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebSiteAppBundle:Activity:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fbe95f14b124e0399b564b3b5a4730d93639cc47bf8d5a1fe73ecf3dcc291856->leave($__internal_fbe95f14b124e0399b564b3b5a4730d93639cc47bf8d5a1fe73ecf3dcc291856_prof);

        
        $__internal_de7e75d5afb899f4a81f08da2ca41de40f02b6808e0d050b8510ed8f30ab9a93->leave($__internal_de7e75d5afb899f4a81f08da2ca41de40f02b6808e0d050b8510ed8f30ab9a93_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_2944da2cc19be313bb9d840783462c8f5dc54ec61da3678b36e445f88fef2f5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2944da2cc19be313bb9d840783462c8f5dc54ec61da3678b36e445f88fef2f5e->enter($__internal_2944da2cc19be313bb9d840783462c8f5dc54ec61da3678b36e445f88fef2f5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_18cab79988b0270b31dd610af68c0c3220d97b614516177820cddb54fcccbf4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18cab79988b0270b31dd610af68c0c3220d97b614516177820cddb54fcccbf4b->enter($__internal_18cab79988b0270b31dd610af68c0c3220d97b614516177820cddb54fcccbf4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
    ";
        // line 4
        $this->displayBlock('content', $context, $blocks);
        // line 41
        echo "    ";
        $this->displayBlock('scripts', $context, $blocks);
        
        $__internal_18cab79988b0270b31dd610af68c0c3220d97b614516177820cddb54fcccbf4b->leave($__internal_18cab79988b0270b31dd610af68c0c3220d97b614516177820cddb54fcccbf4b_prof);

        
        $__internal_2944da2cc19be313bb9d840783462c8f5dc54ec61da3678b36e445f88fef2f5e->leave($__internal_2944da2cc19be313bb9d840783462c8f5dc54ec61da3678b36e445f88fef2f5e_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_0ff20db4c2da59284b218e94b73123eda64cbd3c0c129837f320b38fdc1e5350 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ff20db4c2da59284b218e94b73123eda64cbd3c0c129837f320b38fdc1e5350->enter($__internal_0ff20db4c2da59284b218e94b73123eda64cbd3c0c129837f320b38fdc1e5350_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_ded9f48c37997b9052216efecf84f018e9bec8a0e668ea849e0248c31fe1b7a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ded9f48c37997b9052216efecf84f018e9bec8a0e668ea849e0248c31fe1b7a3->enter($__internal_ded9f48c37997b9052216efecf84f018e9bec8a0e668ea849e0248c31fe1b7a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "        <div class=\"span9\" id=\"content\">

            <div class=\"row-fluid\">
                <div class=\"block\">
                    <div class=\"navbar navbar-inner block-header\">
                        <div class=\"muted pull-left\">Editar la actividad</div>
                    </div>
                    <div class=\"block-content collapse in\">
                        <div class=\"span12\">
                            ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal", "id" => "form_activity", "novalidate" => "novalidate", "role" => "form")));
        echo "
                            ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                            <fieldset>
                                <legend>Lista</legend>
                                ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                                <div class=\"form-actions\">
                                    <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_app_show", array("id" => (isset($context["listId"]) ? $context["listId"] : $this->getContext($context, "listId")))), "html", null, true);
        echo "\" class=\"btn btn-danger btn-small\">
                                        ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Cancelar", array(), "messages");
        // line 22
        echo "                                    </a>
                                    <button type=\"reset\" class=\"btn btn-info btn-small\">
                                        ";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Resetear", array(), "messages");
        // line 25
        echo "                                    </button>
                                    <button type=\"submit\" class=\"btn btn-success green btn-small\">
                                        ";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Editar", array(), "messages");
        // line 28
        echo "                                    </button>
                                </div>
                                ";
        // line 30
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                            </fieldset>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>    
        <input type=\"hidden\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["listId"]) ? $context["listId"] : $this->getContext($context, "listId")), "html", null, true);
        echo "\" id=\"li_menu\">
    ";
        
        $__internal_ded9f48c37997b9052216efecf84f018e9bec8a0e668ea849e0248c31fe1b7a3->leave($__internal_ded9f48c37997b9052216efecf84f018e9bec8a0e668ea849e0248c31fe1b7a3_prof);

        
        $__internal_0ff20db4c2da59284b218e94b73123eda64cbd3c0c129837f320b38fdc1e5350->leave($__internal_0ff20db4c2da59284b218e94b73123eda64cbd3c0c129837f320b38fdc1e5350_prof);

    }

    // line 41
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_8bf195076380df2bd0117d7f632b50189d8fabd4308ea745df82b5497fb4cdec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bf195076380df2bd0117d7f632b50189d8fabd4308ea745df82b5497fb4cdec->enter($__internal_8bf195076380df2bd0117d7f632b50189d8fabd4308ea745df82b5497fb4cdec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_64cd8148937ee984080b251d0af8d5bf298f98261f7a6779e26d5d85e0e3d9e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64cd8148937ee984080b251d0af8d5bf298f98261f7a6779e26d5d85e0e3d9e5->enter($__internal_64cd8148937ee984080b251d0af8d5bf298f98261f7a6779e26d5d85e0e3d9e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 42
        echo "        <script>
            var li_menu = \$(\"#li_menu\").val();
             \$(\"#list-menu-\" + li_menu).addClass(\"active\");
        </script>
    ";
        
        $__internal_64cd8148937ee984080b251d0af8d5bf298f98261f7a6779e26d5d85e0e3d9e5->leave($__internal_64cd8148937ee984080b251d0af8d5bf298f98261f7a6779e26d5d85e0e3d9e5_prof);

        
        $__internal_8bf195076380df2bd0117d7f632b50189d8fabd4308ea745df82b5497fb4cdec->leave($__internal_8bf195076380df2bd0117d7f632b50189d8fabd4308ea745df82b5497fb4cdec_prof);

    }

    public function getTemplateName()
    {
        return "WebSiteAppBundle:Activity:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 42,  148 => 41,  136 => 39,  124 => 30,  120 => 28,  118 => 27,  114 => 25,  112 => 24,  108 => 22,  106 => 21,  102 => 20,  97 => 18,  91 => 15,  87 => 14,  76 => 5,  67 => 4,  56 => 41,  54 => 4,  51 => 3,  42 => 2,  11 => 1,);
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
                        <div class=\"muted pull-left\">Editar la actividad</div>
                    </div>
                    <div class=\"block-content collapse in\">
                        <div class=\"span12\">
                            {{ form_start(form,{ 'attr': {'class': 'form-horizontal', \"id\": \"form_activity\", \"novalidate\":\"novalidate\", 'role':'form'} }) }}
                            {{ form_errors(form) }}
                            <fieldset>
                                <legend>Lista</legend>
                                {{ form_widget(form) }}
                                <div class=\"form-actions\">
                                    <a href=\"{{ path('list_app_show', { 'id': listId}) }}\" class=\"btn btn-danger btn-small\">
                                        {% trans %}Cancelar{% endtrans %}
                                    </a>
                                    <button type=\"reset\" class=\"btn btn-info btn-small\">
                                        {% trans %}Resetear{% endtrans %}
                                    </button>
                                    <button type=\"submit\" class=\"btn btn-success green btn-small\">
                                        {% trans %}Editar{% endtrans %}
                                    </button>
                                </div>
                                {{ form_end(form) }}
                            </fieldset>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>    
        <input type=\"hidden\" value=\"{{listId}}\" id=\"li_menu\">
    {% endblock %}
    {% block scripts %}
        <script>
            var li_menu = \$(\"#li_menu\").val();
             \$(\"#list-menu-\" + li_menu).addClass(\"active\");
        </script>
    {% endblock %}
{% endblock %}", "WebSiteAppBundle:Activity:edit.html.twig", "/var/www/html/proyectos/testTravelerFelipe/src/WebSite/AppBundle/Resources/views/Activity/edit.html.twig");
    }
}
