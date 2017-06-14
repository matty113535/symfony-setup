<?php

/* :admin:list_array.html.twig */
class __TwigTemplate_76108a6d542a4f7ec0ea1c60f592c838db48d116830b75f313cf4d6a6f6b198e extends Twig_Template
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
        // line 1
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), ":admin:list_array.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6fb7f6fd942be6dbad32484aa3bbb0a5319b4c4e0e46605aa963a7585566220b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fb7f6fd942be6dbad32484aa3bbb0a5319b4c4e0e46605aa963a7585566220b->enter($__internal_6fb7f6fd942be6dbad32484aa3bbb0a5319b4c4e0e46605aa963a7585566220b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin:list_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6fb7f6fd942be6dbad32484aa3bbb0a5319b4c4e0e46605aa963a7585566220b->leave($__internal_6fb7f6fd942be6dbad32484aa3bbb0a5319b4c4e0e46605aa963a7585566220b_prof);

    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        $__internal_a950ef78525c1192e02430cd2ad58d6d64a96aa41b73e007afacd1ee14a294f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a950ef78525c1192e02430cd2ad58d6d64a96aa41b73e007afacd1ee14a294f1->enter($__internal_a950ef78525c1192e02430cd2ad58d6d64a96aa41b73e007afacd1ee14a294f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 4
        echo "\t";
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
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 6
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["val"]), "html", null, true);
            echo "
        ";
            // line 7
            if ( !$this->getAttribute($context["loop"], "last", array())) {
                echo ",";
            }
            // line 8
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_a950ef78525c1192e02430cd2ad58d6d64a96aa41b73e007afacd1ee14a294f1->leave($__internal_a950ef78525c1192e02430cd2ad58d6d64a96aa41b73e007afacd1ee14a294f1_prof);

    }

    public function getTemplateName()
    {
        return ":admin:list_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 8,  65 => 7,  60 => 6,  42 => 5,  39 => 4,  33 => 3,  18 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends admin.getTemplate('base_list_field') %}

{% block field %}
\t{% set len = value|length %}
    {% for val in value|slice(0,len-1) %}
        {{ val | trans() }}
        {% if not loop.last %},{% endif %}
    {% endfor %}
{% endblock %}
", ":admin:list_array.html.twig", "/var/www/symfony2/app/Resources/views/admin/list_array.html.twig");
    }
}
