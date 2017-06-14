<?php

/* SonataAdminBundle:CRUD:list__batch.html.twig */
class __TwigTemplate_1708113d9348b01b93ca83e132dfd16f0d9669eea8c26d656ad399b8589c1fdf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__batch.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f48f40da562cc60be3fb0910c2fb854bd6548f2f0370ff10ad8a95e36e1c8b26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f48f40da562cc60be3fb0910c2fb854bd6548f2f0370ff10ad8a95e36e1c8b26->enter($__internal_f48f40da562cc60be3fb0910c2fb854bd6548f2f0370ff10ad8a95e36e1c8b26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f48f40da562cc60be3fb0910c2fb854bd6548f2f0370ff10ad8a95e36e1c8b26->leave($__internal_f48f40da562cc60be3fb0910c2fb854bd6548f2f0370ff10ad8a95e36e1c8b26_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_7a52c468481b83564bfd418ddfbb2ff89b21c7a50b3f3ba1d0654c59f62a0bb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a52c468481b83564bfd418ddfbb2ff89b21c7a50b3f3ba1d0654c59f62a0bb5->enter($__internal_7a52c468481b83564bfd418ddfbb2ff89b21c7a50b3f3ba1d0654c59f62a0bb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
";
        
        $__internal_7a52c468481b83564bfd418ddfbb2ff89b21c7a50b3f3ba1d0654c59f62a0bb5->leave($__internal_7a52c468481b83564bfd418ddfbb2ff89b21c7a50b3f3ba1d0654c59f62a0bb5_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__batch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    <input type=\"checkbox\" name=\"idx[]\" value=\"{{ admin.id(object) }}\">
{% endblock %}
", "SonataAdminBundle:CRUD:list__batch.html.twig", "/var/www/symfony2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list__batch.html.twig");
    }
}
