<?php

/* :admin:show_array.html.twig */
class __TwigTemplate_175412cd83ce69bdadf78a0ee1f21c0cd484e6484075e0416663d1a33ac0ea4b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", ":admin:show_array.html.twig", 1);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_141545327c28888cd4bdf9590856b57478eb511e4e8fb33c8c1dbc2728802e53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_141545327c28888cd4bdf9590856b57478eb511e4e8fb33c8c1dbc2728802e53->enter($__internal_141545327c28888cd4bdf9590856b57478eb511e4e8fb33c8c1dbc2728802e53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin:show_array.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_141545327c28888cd4bdf9590856b57478eb511e4e8fb33c8c1dbc2728802e53->leave($__internal_141545327c28888cd4bdf9590856b57478eb511e4e8fb33c8c1dbc2728802e53_prof);

    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        $__internal_fe9bcaa32571205cb7e2c4467d0ab9f1da617229092005c65ab357a0bf33757a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe9bcaa32571205cb7e2c4467d0ab9f1da617229092005c65ab357a0bf33757a->enter($__internal_fe9bcaa32571205cb7e2c4467d0ab9f1da617229092005c65ab357a0bf33757a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 4
        echo "    ";
        $context["len"] = twig_length_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
        // line 5
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), 0, ((isset($context["len"]) ? $context["len"] : $this->getContext($context, "len")) - 1)));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["key"] => $context["val"]) {
            // line 6
            echo "        ";
            if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "safe", array())) {
                // line 7
                echo "            ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["val"]);
                echo "
        ";
            } else {
                // line 9
                echo "            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["val"]), "html", null, true);
                echo "
        ";
            }
            // line 11
            echo "
        ";
            // line 12
            if ( !$this->getAttribute($context["loop"], "last", array())) {
                // line 13
                echo "            ";
                if (( !$this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "inline", array(), "any", true, true) || (false == $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "inline", array())))) {
                    echo ", ";
                }
                // line 14
                echo "        ";
            }
            // line 15
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_fe9bcaa32571205cb7e2c4467d0ab9f1da617229092005c65ab357a0bf33757a->leave($__internal_fe9bcaa32571205cb7e2c4467d0ab9f1da617229092005c65ab357a0bf33757a_prof);

    }

    public function getTemplateName()
    {
        return ":admin:show_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 15,  86 => 14,  81 => 13,  79 => 12,  76 => 11,  70 => 9,  64 => 7,  61 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}

{% block field%}
    {% set len = value|length %}
    {% for key, val in value|slice(0,len-1) %}
        {% if field_description.options.safe %}
            {{ val|trans()|raw }}
        {% else %}
            {{ val | trans()}}
        {% endif %}

        {% if not loop.last %}
            {% if field_description.options.inline is not defined or false == field_description.options.inline %}, {% endif %}
        {% endif %}
    {% endfor %}
{% endblock %}
", ":admin:show_array.html.twig", "/var/www/symfony2/app/Resources/views/admin/show_array.html.twig");
    }
}
