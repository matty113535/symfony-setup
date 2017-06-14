<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_0f18b079afaa451fe3208896339569f783389274f20076107e06543197a2af4a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1534292e99db9c5e7806565f29be82d84b01f12da3e4f63346503702f19835c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1534292e99db9c5e7806565f29be82d84b01f12da3e4f63346503702f19835c4->enter($__internal_1534292e99db9c5e7806565f29be82d84b01f12da3e4f63346503702f19835c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1534292e99db9c5e7806565f29be82d84b01f12da3e4f63346503702f19835c4->leave($__internal_1534292e99db9c5e7806565f29be82d84b01f12da3e4f63346503702f19835c4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_456f834d2978c20d58d982f94c6642b8302bc7faaf4689a6d1e406736b1cafc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_456f834d2978c20d58d982f94c6642b8302bc7faaf4689a6d1e406736b1cafc7->enter($__internal_456f834d2978c20d58d982f94c6642b8302bc7faaf4689a6d1e406736b1cafc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_456f834d2978c20d58d982f94c6642b8302bc7faaf4689a6d1e406736b1cafc7->leave($__internal_456f834d2978c20d58d982f94c6642b8302bc7faaf4689a6d1e406736b1cafc7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1d02b7052961bb0e5433545684eaf9504f72995b2c6c8e5052d66d64aa09014a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d02b7052961bb0e5433545684eaf9504f72995b2c6c8e5052d66d64aa09014a->enter($__internal_1d02b7052961bb0e5433545684eaf9504f72995b2c6c8e5052d66d64aa09014a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1d02b7052961bb0e5433545684eaf9504f72995b2c6c8e5052d66d64aa09014a->leave($__internal_1d02b7052961bb0e5433545684eaf9504f72995b2c6c8e5052d66d64aa09014a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_30b4f76b17fc196c03e7db6139512e4d8fed34757fa672fb101527fca764a7c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30b4f76b17fc196c03e7db6139512e4d8fed34757fa672fb101527fca764a7c9->enter($__internal_30b4f76b17fc196c03e7db6139512e4d8fed34757fa672fb101527fca764a7c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_30b4f76b17fc196c03e7db6139512e4d8fed34757fa672fb101527fca764a7c9->leave($__internal_30b4f76b17fc196c03e7db6139512e4d8fed34757fa672fb101527fca764a7c9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/symfony2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
