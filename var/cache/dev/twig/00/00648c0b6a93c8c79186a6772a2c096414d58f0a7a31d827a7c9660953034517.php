<?php

/* UserBundle:Admin:login.html.twig */
class __TwigTemplate_7a80a1bb25913ca2ac68dcddc9cdbac2774fc0103d0f00eee691471ad86e6167 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_user_login' => array($this, 'block_sonata_user_login'),
            'sonata_user_login_error' => array($this, 'block_sonata_user_login_error'),
            'sonata_user_login_form' => array($this, 'block_sonata_user_login_form'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_60f0e8a53f896f1be8f359be4cfdbbc47ae026c2827e4acc0ba3f49aa6b4287e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60f0e8a53f896f1be8f359be4cfdbbc47ae026c2827e4acc0ba3f49aa6b4287e->enter($__internal_60f0e8a53f896f1be8f359be4cfdbbc47ae026c2827e4acc0ba3f49aa6b4287e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Admin:login.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/favicon.ico"), "html", null, true);
        echo "\">

    <title>TeAjut - Admin Signin</title>

    <!-- Bootstrap core CSS -->
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/assets.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Scripts
    ================================================== -->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
        <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
  </head>

  <body>

    <div class=\"container\">

      <div class=\"row\">
    <div class=\"col-sm-6\">
        ";
        // line 33
        $this->displayBlock('sonata_user_login', $context, $blocks);
        // line 89
        echo "    </div>
</div>

    </div> <!-- /container -->
  </body>
</html>




";
        
        $__internal_60f0e8a53f896f1be8f359be4cfdbbc47ae026c2827e4acc0ba3f49aa6b4287e->leave($__internal_60f0e8a53f896f1be8f359be4cfdbbc47ae026c2827e4acc0ba3f49aa6b4287e_prof);

    }

    // line 33
    public function block_sonata_user_login($context, array $blocks = array())
    {
        $__internal_8cf28c86638f89433df9e548a1abf7e776727ad667b9af23232405b7b2798dfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cf28c86638f89433df9e548a1abf7e776727ad667b9af23232405b7b2798dfc->enter($__internal_8cf28c86638f89433df9e548a1abf7e776727ad667b9af23232405b7b2798dfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_user_login"));

        // line 34
        echo "            <div class=\"panel panel-info\">

            <div class=\"panel-heading\">
                <h2 class=\"panel-title\">";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_user_authentication", array(), "SonataUserBundle"), "html", null, true);
        echo "</h2>
            </div>

            <div class=\"panel-body\">
                ";
        // line 41
        $this->displayBlock('sonata_user_login_error', $context, $blocks);
        // line 46
        echo "
                ";
        // line 47
        $this->displayBlock('sonata_user_login_form', $context, $blocks);
        // line 86
        echo "            </div>
        </div>
        ";
        
        $__internal_8cf28c86638f89433df9e548a1abf7e776727ad667b9af23232405b7b2798dfc->leave($__internal_8cf28c86638f89433df9e548a1abf7e776727ad667b9af23232405b7b2798dfc_prof);

    }

    // line 41
    public function block_sonata_user_login_error($context, array $blocks = array())
    {
        $__internal_41bfb6dfdcad16459341f5de94be2328d4ba66ff45957c1ee87c4d40cce98b23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41bfb6dfdcad16459341f5de94be2328d4ba66ff45957c1ee87c4d40cce98b23->enter($__internal_41bfb6dfdcad16459341f5de94be2328d4ba66ff45957c1ee87c4d40cce98b23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_user_login_error"));

        // line 42
        echo "                    ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 43
            echo "                        <div class=\"alert alert-danger alert-error\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
                    ";
        }
        // line 45
        echo "                ";
        
        $__internal_41bfb6dfdcad16459341f5de94be2328d4ba66ff45957c1ee87c4d40cce98b23->leave($__internal_41bfb6dfdcad16459341f5de94be2328d4ba66ff45957c1ee87c4d40cce98b23_prof);

    }

    // line 47
    public function block_sonata_user_login_form($context, array $blocks = array())
    {
        $__internal_2a8451b96be809b6765b70776392d92bada949ee31285247bae2747ddae85023 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a8451b96be809b6765b70776392d92bada949ee31285247bae2747ddae85023->enter($__internal_2a8451b96be809b6765b70776392d92bada949ee31285247bae2747ddae85023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_user_login_form"));

        // line 48
        echo "                    <form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_user_security_check");
        echo "\" method=\"post\" role=\"form\" class=\"form-horizontal\">
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\"/>

                        <div class=\"form-group\">
                            <label for=\"username\" class=\"col-sm-4 control-label\">";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "SonataUserBundle"), "html", null, true);
        echo "</label>
                            <div class=\"col-sm-8\"><input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\"/></div>
                        </div>


                        <div class=\"form-group control-group\">
                            <label for=\"password\" class=\"col-sm-4 control-label\">";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "SonataUserBundle"), "html", null, true);
        echo "</label>
                            <div class=\"col-sm-8\"><input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" required=\"required\"/></div>
                        </div>

                        <div class=\"form-group\">
                            <div class=\"col-sm-offset-4 col-sm-8\">
                                <div class=\"checkbox control-group\">
                                    <label for=\"remember_me\">
                                        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"/>
                                        ";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class=\"form-group control-group\">
                            <div class=\"controls col-sm-offset-4 col-sm-8\">
                                <a href=\"";
        // line 75
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_request");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("forgotten_password", array(), "SonataUserBundle"), "html", null, true);
        echo "</a>
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <div class=\"col-sm-offset-4 col-sm-8\">
                                <input type=\"submit\" id=\"_submit\" name=\"_submit\" class=\"btn btn-primary\" value=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\"/>
                            </div>
                        </div>
                    </form>
                ";
        
        $__internal_2a8451b96be809b6765b70776392d92bada949ee31285247bae2747ddae85023->leave($__internal_2a8451b96be809b6765b70776392d92bada949ee31285247bae2747ddae85023_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Admin:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 81,  195 => 75,  184 => 67,  172 => 58,  164 => 53,  160 => 52,  154 => 49,  149 => 48,  143 => 47,  136 => 45,  130 => 43,  127 => 42,  121 => 41,  112 => 86,  110 => 47,  107 => 46,  105 => 41,  98 => 37,  93 => 34,  87 => 33,  70 => 89,  68 => 33,  48 => 16,  44 => 15,  36 => 10,  25 => 1,);
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
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" href=\"{{ asset('images/favicon.ico') }}\">

    <title>TeAjut - Admin Signin</title>

    <!-- Bootstrap core CSS -->
    <link href=\"{{ asset('css/style.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('css/assets.css') }}\" rel=\"stylesheet\">

    <!-- Scripts
    ================================================== -->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
        <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
  </head>

  <body>

    <div class=\"container\">

      <div class=\"row\">
    <div class=\"col-sm-6\">
        {% block sonata_user_login %}
            <div class=\"panel panel-info\">

            <div class=\"panel-heading\">
                <h2 class=\"panel-title\">{{ 'title_user_authentication'|trans({}, 'SonataUserBundle') }}</h2>
            </div>

            <div class=\"panel-body\">
                {% block sonata_user_login_error %}
                    {% if error %}
                        <div class=\"alert alert-danger alert-error\">{{ error|trans({}, 'FOSUserBundle') }}</div>
                    {% endif %}
                {% endblock %}

                {% block sonata_user_login_form %}
                    <form action=\"{{ path(\"sonata_user_security_check\") }}\" method=\"post\" role=\"form\" class=\"form-horizontal\">
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\"/>

                        <div class=\"form-group\">
                            <label for=\"username\" class=\"col-sm-4 control-label\">{{ 'security.login.username'|trans({}, 'SonataUserBundle') }}</label>
                            <div class=\"col-sm-8\"><input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\"/></div>
                        </div>


                        <div class=\"form-group control-group\">
                            <label for=\"password\" class=\"col-sm-4 control-label\">{{ 'security.login.password'|trans({}, 'SonataUserBundle') }}</label>
                            <div class=\"col-sm-8\"><input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" required=\"required\"/></div>
                        </div>

                        <div class=\"form-group\">
                            <div class=\"col-sm-offset-4 col-sm-8\">
                                <div class=\"checkbox control-group\">
                                    <label for=\"remember_me\">
                                        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"/>
                                        {{ 'security.login.remember_me'|trans({}, 'FOSUserBundle') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class=\"form-group control-group\">
                            <div class=\"controls col-sm-offset-4 col-sm-8\">
                                <a href=\"{{ path('fos_user_resetting_request') }}\">{{ 'forgotten_password'|trans({}, 'SonataUserBundle') }}</a>
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <div class=\"col-sm-offset-4 col-sm-8\">
                                <input type=\"submit\" id=\"_submit\" name=\"_submit\" class=\"btn btn-primary\" value=\"{{ 'security.login.submit'|trans({}, 'FOSUserBundle') }}\"/>
                            </div>
                        </div>
                    </form>
                {% endblock %}
            </div>
        </div>
        {% endblock %}
    </div>
</div>

    </div> <!-- /container -->
  </body>
</html>




", "UserBundle:Admin:login.html.twig", "/var/www/symfony2/src/UserBundle/Resources/views/Admin/login.html.twig");
    }
}
