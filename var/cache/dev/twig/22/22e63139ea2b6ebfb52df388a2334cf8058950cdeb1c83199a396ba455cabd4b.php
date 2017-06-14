<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_6dc4266c59215ebc6bd317876a70a4f9371efbe9fd738acebb7fb46354037028 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b52a342a2a2d76be3af53d4e9b34e8f4960e76c869db26e0db72ada2bfe77622 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b52a342a2a2d76be3af53d4e9b34e8f4960e76c869db26e0db72ada2bfe77622->enter($__internal_b52a342a2a2d76be3af53d4e9b34e8f4960e76c869db26e0db72ada2bfe77622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b52a342a2a2d76be3af53d4e9b34e8f4960e76c869db26e0db72ada2bfe77622->leave($__internal_b52a342a2a2d76be3af53d4e9b34e8f4960e76c869db26e0db72ada2bfe77622_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2fdb47fd7478a56772b0ae8953f91280175afb682daaabb5fd592df3a62de9b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fdb47fd7478a56772b0ae8953f91280175afb682daaabb5fd592df3a62de9b2->enter($__internal_2fdb47fd7478a56772b0ae8953f91280175afb682daaabb5fd592df3a62de9b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_2fdb47fd7478a56772b0ae8953f91280175afb682daaabb5fd592df3a62de9b2->leave($__internal_2fdb47fd7478a56772b0ae8953f91280175afb682daaabb5fd592df3a62de9b2_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block body %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock body %}
", "@FOSUser/Security/login.html.twig", "/var/www/symfony2/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
