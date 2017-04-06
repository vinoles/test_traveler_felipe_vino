<?php

/* WebSiteAdminBundle::layout.html.twig */
class __TwigTemplate_feb6885ddf623b5ed4d3d04d1663fc7c358a9905453ade7ed9ee927ef352e536 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'menu_lateral' => array($this, 'block_menu_lateral'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b639875de3c7b4d0ed0ef4543d67dfea041ba923ec65911e1e8713b1d3868cd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b639875de3c7b4d0ed0ef4543d67dfea041ba923ec65911e1e8713b1d3868cd4->enter($__internal_b639875de3c7b4d0ed0ef4543d67dfea041ba923ec65911e1e8713b1d3868cd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebSiteAdminBundle::layout.html.twig"));

        $__internal_f083767629ea09d0b327053ebd85cb8ae39f4cacaab13f66bca4c87696473ebe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f083767629ea09d0b327053ebd85cb8ae39f4cacaab13f66bca4c87696473ebe->enter($__internal_f083767629ea09d0b327053ebd85cb8ae39f4cacaab13f66bca4c87696473ebe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebSiteAdminBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html class=\"no-js\">

    <head>
        <title>Admin Home Page</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 22
        echo "
    </head>

    <body>

        ";
        // line 27
        $this->displayBlock('header', $context, $blocks);
        // line 30
        echo "
        <div class=\"container-fluid\">
            <div class=\"row-fluid\">
                ";
        // line 33
        $this->displayBlock('menu_lateral', $context, $blocks);
        // line 37
        echo "                ";
        $this->displayBlock('content', $context, $blocks);
        // line 40
        echo "            </div>
            <hr>
            <footer>
                <p>&copy; Test Felipe Viñoles / felipe.vinoles@gmail.com </p>
            </footer>
        </div>
        ";
        // line 46
        $this->displayBlock('javascripts', $context, $blocks);
        // line 78
        echo "        ";
        $this->displayBlock('scripts', $context, $blocks);
        // line 81
        echo "    </body>

</html>
";
        
        $__internal_b639875de3c7b4d0ed0ef4543d67dfea041ba923ec65911e1e8713b1d3868cd4->leave($__internal_b639875de3c7b4d0ed0ef4543d67dfea041ba923ec65911e1e8713b1d3868cd4_prof);

        
        $__internal_f083767629ea09d0b327053ebd85cb8ae39f4cacaab13f66bca4c87696473ebe->leave($__internal_f083767629ea09d0b327053ebd85cb8ae39f4cacaab13f66bca4c87696473ebe_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5001d325d6f4be8fe34574f161676497186bae1c662db5b31c1b24fd123d5c23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5001d325d6f4be8fe34574f161676497186bae1c662db5b31c1b24fd123d5c23->enter($__internal_5001d325d6f4be8fe34574f161676497186bae1c662db5b31c1b24fd123d5c23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d8c350695605f234e7405b1309650ae0737546c5218c658202ac3a4e4c5889fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8c350695605f234e7405b1309650ae0737546c5218c658202ac3a4e4c5889fd->enter($__internal_d8c350695605f234e7405b1309650ae0737546c5218c658202ac3a4e4c5889fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <!-- Bootstrap -->
            <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/websiteadmin/plugins/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\"  rel=\"stylesheet\" media=\"screen\">
            <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/websiteadmin/plugins/bootstrap/css/bootstrap-responsive.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
            <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/websiteadmin/plugins/vendors/easypiechart/jquery.easy-pie-chart.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
            <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/websiteadmin/plugins/assets/styles.css"), "html", null, true);
        echo "\"  rel=\"stylesheet\" media=\"screen\">
            <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/websiteadmin/plugins/assets/DT_bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
            <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/websiteadmin/plugins/vendors/datepicker.css"), "html", null, true);
        echo "\"rel=\"stylesheet\" media=\"screen\">
            <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/websiteadmin/plugins/vendors/uniform.default.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
            <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/websiteadmin/plugins/vendors/chosen.min.css"), "html", null, true);
        echo "\"rel=\"stylesheet\" media=\"screen\">
            <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
            <!--[if lt IE 9]>
                <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
            <![endif]-->
            <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/websiteadmin/plugins/vendors/modernizr-2.6.2-respond-1.1.0.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_d8c350695605f234e7405b1309650ae0737546c5218c658202ac3a4e4c5889fd->leave($__internal_d8c350695605f234e7405b1309650ae0737546c5218c658202ac3a4e4c5889fd_prof);

        
        $__internal_5001d325d6f4be8fe34574f161676497186bae1c662db5b31c1b24fd123d5c23->leave($__internal_5001d325d6f4be8fe34574f161676497186bae1c662db5b31c1b24fd123d5c23_prof);

    }

    // line 27
    public function block_header($context, array $blocks = array())
    {
        $__internal_ec7995f431acec5bcd22169f88bf7c448c511242997a1d56538cf4ce66a034d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec7995f431acec5bcd22169f88bf7c448c511242997a1d56538cf4ce66a034d1->enter($__internal_ec7995f431acec5bcd22169f88bf7c448c511242997a1d56538cf4ce66a034d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_a63441c2659ab0dad7694a764c83d68201873722b10d2352dc553a30eaacb91c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a63441c2659ab0dad7694a764c83d68201873722b10d2352dc553a30eaacb91c->enter($__internal_a63441c2659ab0dad7694a764c83d68201873722b10d2352dc553a30eaacb91c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 28
        echo "                ";
        $this->loadTemplate("WebSiteAdminBundle::menu_top.html.twig", "WebSiteAdminBundle::layout.html.twig", 28)->display($context);
        // line 29
        echo "        ";
        
        $__internal_a63441c2659ab0dad7694a764c83d68201873722b10d2352dc553a30eaacb91c->leave($__internal_a63441c2659ab0dad7694a764c83d68201873722b10d2352dc553a30eaacb91c_prof);

        
        $__internal_ec7995f431acec5bcd22169f88bf7c448c511242997a1d56538cf4ce66a034d1->leave($__internal_ec7995f431acec5bcd22169f88bf7c448c511242997a1d56538cf4ce66a034d1_prof);

    }

    // line 33
    public function block_menu_lateral($context, array $blocks = array())
    {
        $__internal_f324ea4b3252099b4dcb0a28a28c87d822ed6943044b54258b720b6e57d7e299 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f324ea4b3252099b4dcb0a28a28c87d822ed6943044b54258b720b6e57d7e299->enter($__internal_f324ea4b3252099b4dcb0a28a28c87d822ed6943044b54258b720b6e57d7e299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_lateral"));

        $__internal_16944d5e3ac90113154564244569b09795f9cb6fc464d8d62bb51fa4d7f2bbb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16944d5e3ac90113154564244569b09795f9cb6fc464d8d62bb51fa4d7f2bbb9->enter($__internal_16944d5e3ac90113154564244569b09795f9cb6fc464d8d62bb51fa4d7f2bbb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_lateral"));

        // line 34
        echo "                ";
        $this->loadTemplate("WebSiteAdminBundle::menu_left.html.twig", "WebSiteAdminBundle::layout.html.twig", 34)->display($context);
        // line 35
        echo "   
                ";
        
        $__internal_16944d5e3ac90113154564244569b09795f9cb6fc464d8d62bb51fa4d7f2bbb9->leave($__internal_16944d5e3ac90113154564244569b09795f9cb6fc464d8d62bb51fa4d7f2bbb9_prof);

        
        $__internal_f324ea4b3252099b4dcb0a28a28c87d822ed6943044b54258b720b6e57d7e299->leave($__internal_f324ea4b3252099b4dcb0a28a28c87d822ed6943044b54258b720b6e57d7e299_prof);

    }

    // line 37
    public function block_content($context, array $blocks = array())
    {
        $__internal_a2608a0fbc494ad9dc58db426fc4d52bab335e22789bb875cbbf4f1d0c100f1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2608a0fbc494ad9dc58db426fc4d52bab335e22789bb875cbbf4f1d0c100f1d->enter($__internal_a2608a0fbc494ad9dc58db426fc4d52bab335e22789bb875cbbf4f1d0c100f1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_e6b848163a47d17a797d7cd3511ce107644fdec80af44fecfb2786fb21e5bd70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6b848163a47d17a797d7cd3511ce107644fdec80af44fecfb2786fb21e5bd70->enter($__internal_e6b848163a47d17a797d7cd3511ce107644fdec80af44fecfb2786fb21e5bd70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo " <!--  content of the page -->

                ";
        
        $__internal_e6b848163a47d17a797d7cd3511ce107644fdec80af44fecfb2786fb21e5bd70->leave($__internal_e6b848163a47d17a797d7cd3511ce107644fdec80af44fecfb2786fb21e5bd70_prof);

        
        $__internal_a2608a0fbc494ad9dc58db426fc4d52bab335e22789bb875cbbf4f1d0c100f1d->leave($__internal_a2608a0fbc494ad9dc58db426fc4d52bab335e22789bb875cbbf4f1d0c100f1d_prof);

    }

    // line 46
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bb895667ab37d23a3d5f4c2f0494f73758b0ae9b24ddaae128e8c002012a1d83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb895667ab37d23a3d5f4c2f0494f73758b0ae9b24ddaae128e8c002012a1d83->enter($__internal_bb895667ab37d23a3d5f4c2f0494f73758b0ae9b24ddaae128e8c002012a1d83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_311506157a894ce89fdba9ec5f7e5731c33e6ed1ff5b99b14bb2d2d27f40a440 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_311506157a894ce89fdba9ec5f7e5731c33e6ed1ff5b99b14bb2d2d27f40a440->enter($__internal_311506157a894ce89fdba9ec5f7e5731c33e6ed1ff5b99b14bb2d2d27f40a440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 47
        echo "            <!--/.fluid-container-->
            <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/websiteadmin/plugins/vendors/jquery-1.9.1.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/websiteadmin/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/websiteadmin/plugins/vendors/easypiechart/jquery.easy-pie-chart.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/websiteadmin/plugins/assets/scripts.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/websiteadmin/plugins/vendors/datatables/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/websiteadmin/plugins/assets/DT_bootstrap.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/websiteadmin/plugins/vendors/jquery.uniform.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/websiteadmin/plugins/vendors/chosen.jquery.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/websiteadmin/plugins/vendors/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/websiteadmin/plugins/vendors/wysiwyg/wysihtml5-0.3.0.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/websiteadmin/plugins/vendors/wysiwyg/bootstrap-wysihtml5.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/websiteadmin/plugins/vendors/wizard/jquery.bootstrap.wizard.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/websiteadmin/plugins/vendors/jquery-validation/dist/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/websiteadmin/js/functions.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/websiteadmin/js/bootbox.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>

            <script>
                \$(function () {
                    // Easy pie charts
                    \$('.chart').easyPieChart({animate: 1000});
                });
                   \$('#list_table').dataTable({
                       \"oLanguage\": {
\t\t\t\"sUrl\": \"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/websiteadmin/js/español-data-table.json"), "html", null, true);
        echo "\"
\t\t}
                });
            </script>
        ";
        
        $__internal_311506157a894ce89fdba9ec5f7e5731c33e6ed1ff5b99b14bb2d2d27f40a440->leave($__internal_311506157a894ce89fdba9ec5f7e5731c33e6ed1ff5b99b14bb2d2d27f40a440_prof);

        
        $__internal_bb895667ab37d23a3d5f4c2f0494f73758b0ae9b24ddaae128e8c002012a1d83->leave($__internal_bb895667ab37d23a3d5f4c2f0494f73758b0ae9b24ddaae128e8c002012a1d83_prof);

    }

    // line 78
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_b9f0d38f19a85b00cf00654c5acd0f68348877784461cf7c80b25c0ae2ad5579 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9f0d38f19a85b00cf00654c5acd0f68348877784461cf7c80b25c0ae2ad5579->enter($__internal_b9f0d38f19a85b00cf00654c5acd0f68348877784461cf7c80b25c0ae2ad5579_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_bb9c6dfaf7064aeb43eb98a41a1fecc7fd58d8bfda20d50f2870c89b8e25a28e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb9c6dfaf7064aeb43eb98a41a1fecc7fd58d8bfda20d50f2870c89b8e25a28e->enter($__internal_bb9c6dfaf7064aeb43eb98a41a1fecc7fd58d8bfda20d50f2870c89b8e25a28e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 79
        echo "            ";
        // line 80
        echo "        ";
        
        $__internal_bb9c6dfaf7064aeb43eb98a41a1fecc7fd58d8bfda20d50f2870c89b8e25a28e->leave($__internal_bb9c6dfaf7064aeb43eb98a41a1fecc7fd58d8bfda20d50f2870c89b8e25a28e_prof);

        
        $__internal_b9f0d38f19a85b00cf00654c5acd0f68348877784461cf7c80b25c0ae2ad5579->leave($__internal_b9f0d38f19a85b00cf00654c5acd0f68348877784461cf7c80b25c0ae2ad5579_prof);

    }

    public function getTemplateName()
    {
        return "WebSiteAdminBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  324 => 80,  322 => 79,  313 => 78,  298 => 73,  286 => 64,  282 => 63,  278 => 62,  274 => 61,  270 => 60,  266 => 59,  262 => 58,  258 => 57,  254 => 56,  250 => 55,  246 => 54,  242 => 53,  238 => 52,  234 => 51,  230 => 50,  226 => 49,  222 => 48,  219 => 47,  210 => 46,  190 => 37,  179 => 35,  176 => 34,  167 => 33,  157 => 29,  154 => 28,  145 => 27,  133 => 20,  125 => 15,  121 => 14,  117 => 13,  113 => 12,  109 => 11,  105 => 10,  101 => 9,  97 => 8,  94 => 7,  85 => 6,  72 => 81,  69 => 78,  67 => 46,  59 => 40,  56 => 37,  54 => 33,  49 => 30,  47 => 27,  40 => 22,  38 => 6,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html class=\"no-js\">

    <head>
        <title>Admin Home Page</title>
        {% block stylesheets %}
            <!-- Bootstrap -->
            <link href=\"{{ asset('bundles/websiteadmin/plugins/bootstrap/css/bootstrap.min.css') }}\"  rel=\"stylesheet\" media=\"screen\">
            <link href=\"{{ asset('bundles/websiteadmin/plugins/bootstrap/css/bootstrap-responsive.min.css') }}\" rel=\"stylesheet\" media=\"screen\">
            <link href=\"{{ asset('bundles/websiteadmin/plugins/vendors/easypiechart/jquery.easy-pie-chart.css') }}\" rel=\"stylesheet\" media=\"screen\">
            <link href=\"{{ asset('bundles/websiteadmin/plugins/assets/styles.css') }}\"  rel=\"stylesheet\" media=\"screen\">
            <link href=\"{{ asset('bundles/websiteadmin/plugins/assets/DT_bootstrap.css') }}\" rel=\"stylesheet\" media=\"screen\">
            <link href=\"{{ asset('bundles/websiteadmin/plugins/vendors/datepicker.css') }}\"rel=\"stylesheet\" media=\"screen\">
            <link href=\"{{ asset('bundles/websiteadmin/plugins/vendors/uniform.default.css') }}\" rel=\"stylesheet\" media=\"screen\">
            <link href=\"{{ asset('bundles/websiteadmin/plugins/vendors/chosen.min.css') }}\"rel=\"stylesheet\" media=\"screen\">
            <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
            <!--[if lt IE 9]>
                <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
            <![endif]-->
            <script src=\"{{ asset('bundles/websiteadmin/plugins/vendors/modernizr-2.6.2-respond-1.1.0.min.js')}}\"></script>
        {% endblock stylesheets %}

    </head>

    <body>

        {% block header %}
                {% include \"WebSiteAdminBundle::menu_top.html.twig\" %}
        {% endblock header%}

        <div class=\"container-fluid\">
            <div class=\"row-fluid\">
                {% block menu_lateral %}
                {% include \"WebSiteAdminBundle::menu_left.html.twig\" %}
   
                {% endblock menu_lateral%}
                {% block content %} <!--  content of the page -->

                {% endblock content%}
            </div>
            <hr>
            <footer>
                <p>&copy; Test Felipe Viñoles / felipe.vinoles@gmail.com </p>
            </footer>
        </div>
        {% block javascripts %}
            <!--/.fluid-container-->
            <script src=\"{{ asset('bundles/websiteadmin/plugins/vendors/jquery-1.9.1.min.js')}}\"></script>
            <script src=\"{{ asset('bundles/websiteadmin/plugins/bootstrap/js/bootstrap.min.js')}}\"></script>
            <script src=\"{{ asset('bundles/websiteadmin/plugins/vendors/easypiechart/jquery.easy-pie-chart.js')}}\"></script>
            <script src=\"{{ asset('bundles/websiteadmin/plugins/assets/scripts.js')}}\"></script>
            <script src=\"{{ asset('bundles/websiteadmin/plugins/vendors/datatables/js/jquery.dataTables.min.js')}}\"></script>
            <script src=\"{{ asset('bundles/websiteadmin/plugins/assets/DT_bootstrap.js')}}\"></script>
            <script src=\"{{ asset('bundles/websiteadmin/plugins/vendors/jquery.uniform.min.js')}}\"></script>
            <script src=\"{{ asset('bundles/websiteadmin/plugins/vendors/chosen.jquery.min.js')}}\"></script>
            <script src=\"{{ asset('bundles/websiteadmin/plugins/vendors/bootstrap-datepicker.js')}}\"></script>
            <script src=\"{{ asset('bundles/websiteadmin/plugins/vendors/wysiwyg/wysihtml5-0.3.0.js')}}\"></script>
            <script src=\"{{ asset('bundles/websiteadmin/plugins/vendors/wysiwyg/bootstrap-wysihtml5.js')}}\"></script>
            <script src=\"{{ asset('bundles/websiteadmin/plugins/vendors/wizard/jquery.bootstrap.wizard.min.js')}}\"></script>
            <script type=\"text/javascript\" src=\"{{ asset('bundles/websiteadmin/plugins/vendors/jquery-validation/dist/jquery.validate.min.js')}}\"></script>
            <script type=\"text/javascript\" src=\"{{ asset('bundles/websiteadmin/js/functions.js')}}\"></script>
            <script type=\"text/javascript\" src=\"{{ asset('bundles/websiteadmin/js/bootbox.js')}}\"></script>
            <script type=\"text/javascript\" src=\"{{ asset('bundles/fosjsrouting/js/router.js') }}\"></script>
            <script type=\"text/javascript\" src=\"{{ path('fos_js_routing_js', {\"callback\": \"fos.Router.setData\"}) }}\"></script>

            <script>
                \$(function () {
                    // Easy pie charts
                    \$('.chart').easyPieChart({animate: 1000});
                });
                   \$('#list_table').dataTable({
                       \"oLanguage\": {
\t\t\t\"sUrl\": \"{{ asset('bundles/websiteadmin/js/español-data-table.json')}}\"
\t\t}
                });
            </script>
        {% endblock javascripts %}
        {% block scripts %}
            {# scripts JS#}
        {% endblock %}
    </body>

</html>
", "WebSiteAdminBundle::layout.html.twig", "/var/www/html/proyectos/testTravelerFelipe/src/WebSite/AdminBundle/Resources/views/layout.html.twig");
    }
}
