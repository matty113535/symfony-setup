<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_6bde6d90d7e0e2b3d3a8588bb30bc708039c338fcab4538b3cfa5ade37f8ddd3 extends Twig_Template
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
        $__internal_1c49fb4b4fcf3fad14abb3c7a7d93c64159c99f79b090be4b9e491866336edaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c49fb4b4fcf3fad14abb3c7a7d93c64159c99f79b090be4b9e491866336edaf->enter($__internal_1c49fb4b4fcf3fad14abb3c7a7d93c64159c99f79b090be4b9e491866336edaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c49fb4b4fcf3fad14abb3c7a7d93c64159c99f79b090be4b9e491866336edaf->leave($__internal_1c49fb4b4fcf3fad14abb3c7a7d93c64159c99f79b090be4b9e491866336edaf_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_65f9e633304cbf4b5b0f3a8e799e1604e3614b42a0bd9c19cfaecb1a82139a09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65f9e633304cbf4b5b0f3a8e799e1604e3614b42a0bd9c19cfaecb1a82139a09->enter($__internal_65f9e633304cbf4b5b0f3a8e799e1604e3614b42a0bd9c19cfaecb1a82139a09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_65f9e633304cbf4b5b0f3a8e799e1604e3614b42a0bd9c19cfaecb1a82139a09->leave($__internal_65f9e633304cbf4b5b0f3a8e799e1604e3614b42a0bd9c19cfaecb1a82139a09_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b7013b6455ffd884185c00c75ba4fe21171d06c5fc20bb765039c33948215c4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7013b6455ffd884185c00c75ba4fe21171d06c5fc20bb765039c33948215c4a->enter($__internal_b7013b6455ffd884185c00c75ba4fe21171d06c5fc20bb765039c33948215c4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b7013b6455ffd884185c00c75ba4fe21171d06c5fc20bb765039c33948215c4a->leave($__internal_b7013b6455ffd884185c00c75ba4fe21171d06c5fc20bb765039c33948215c4a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2c4c203af896528ec15a2d27fe3e20b4ba10b62e2ee01ef120c8f8db5d2c5071 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c4c203af896528ec15a2d27fe3e20b4ba10b62e2ee01ef120c8f8db5d2c5071->enter($__internal_2c4c203af896528ec15a2d27fe3e20b4ba10b62e2ee01ef120c8f8db5d2c5071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2c4c203af896528ec15a2d27fe3e20b4ba10b62e2ee01ef120c8f8db5d2c5071->leave($__internal_2c4c203af896528ec15a2d27fe3e20b4ba10b62e2ee01ef120c8f8db5d2c5071_prof);

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
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
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
", "@WebProfiler/Collector/router.html.twig", "/var/www/symfony2/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
