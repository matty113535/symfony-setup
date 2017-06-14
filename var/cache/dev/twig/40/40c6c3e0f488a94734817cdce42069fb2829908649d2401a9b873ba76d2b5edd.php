<?php

/* ::base.html.twig */
class __TwigTemplate_831322a25be50b7ab84138c3e8be92160167e5b28c13f3880c7eb3f82a5a2e06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d9aaf366dc49824c9b8e4374ef74d9655679e82749ac9c6bd8ab9ef40b065ac3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9aaf366dc49824c9b8e4374ef74d9655679e82749ac9c6bd8ab9ef40b065ac3->enter($__internal_d9aaf366dc49824c9b8e4374ef74d9655679e82749ac9c6bd8ab9ef40b065ac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        
        ";
        // line 12
        $this->loadTemplate(":includes:alert_messages.html.twig", "::base.html.twig", 12)->display($context);
        // line 13
        echo "
        ";
        // line 14
        $this->displayBlock('body', $context, $blocks);
        // line 16
        echo "        
        ";
        // line 17
        $this->displayBlock('javascripts', $context, $blocks);
        // line 19
        echo "    </body>
</html>
";
        
        $__internal_d9aaf366dc49824c9b8e4374ef74d9655679e82749ac9c6bd8ab9ef40b065ac3->leave($__internal_d9aaf366dc49824c9b8e4374ef74d9655679e82749ac9c6bd8ab9ef40b065ac3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_74b5b320d8ddc5097fd56dfd6d369a9380291ca7d10888ac798d996e2178c4f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74b5b320d8ddc5097fd56dfd6d369a9380291ca7d10888ac798d996e2178c4f6->enter($__internal_74b5b320d8ddc5097fd56dfd6d369a9380291ca7d10888ac798d996e2178c4f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Te Ajut!";
        
        $__internal_74b5b320d8ddc5097fd56dfd6d369a9380291ca7d10888ac798d996e2178c4f6->leave($__internal_74b5b320d8ddc5097fd56dfd6d369a9380291ca7d10888ac798d996e2178c4f6_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c508de2ed939f1a38cb959ae5d85e11099a084d48fc4fe4808ec26914fe98c36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c508de2ed939f1a38cb959ae5d85e11099a084d48fc4fe4808ec26914fe98c36->enter($__internal_c508de2ed939f1a38cb959ae5d85e11099a084d48fc4fe4808ec26914fe98c36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        ";
        
        $__internal_c508de2ed939f1a38cb959ae5d85e11099a084d48fc4fe4808ec26914fe98c36->leave($__internal_c508de2ed939f1a38cb959ae5d85e11099a084d48fc4fe4808ec26914fe98c36_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_09a00c00be2d6e4b575b8a2607866adabbdf4e573069f9d4c085a47878add34c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09a00c00be2d6e4b575b8a2607866adabbdf4e573069f9d4c085a47878add34c->enter($__internal_09a00c00be2d6e4b575b8a2607866adabbdf4e573069f9d4c085a47878add34c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "        ";
        
        $__internal_09a00c00be2d6e4b575b8a2607866adabbdf4e573069f9d4c085a47878add34c->leave($__internal_09a00c00be2d6e4b575b8a2607866adabbdf4e573069f9d4c085a47878add34c_prof);

    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_afb4b3f6784871ed755cab3784641b12f8b00b70365127fc66aab546587801eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afb4b3f6784871ed755cab3784641b12f8b00b70365127fc66aab546587801eb->enter($__internal_afb4b3f6784871ed755cab3784641b12f8b00b70365127fc66aab546587801eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 18
        echo "        ";
        
        $__internal_afb4b3f6784871ed755cab3784641b12f8b00b70365127fc66aab546587801eb->leave($__internal_afb4b3f6784871ed755cab3784641b12f8b00b70365127fc66aab546587801eb_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 18,  105 => 17,  98 => 15,  92 => 14,  85 => 7,  79 => 6,  67 => 5,  58 => 19,  56 => 17,  53 => 16,  51 => 14,  48 => 13,  46 => 12,  38 => 8,  36 => 6,  32 => 5,  26 => 1,);
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
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Te Ajut!{% endblock %}</title>
        {% block stylesheets %}
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        
        {% include ':includes:alert_messages.html.twig' %}

        {% block body %}
        {% endblock %}
        
        {% block javascripts %}
        {% endblock %}
    </body>
</html>
", "::base.html.twig", "/var/www/symfony2/app/Resources/views/base.html.twig");
    }
}
