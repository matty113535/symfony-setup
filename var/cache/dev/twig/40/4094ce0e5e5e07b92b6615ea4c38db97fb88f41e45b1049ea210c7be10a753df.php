<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_6ef5b61d39b3abba1b34f3143b38edbd0f3a24e83a23f4600828785bc7cc37b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f56213004a0a4ab2b3f41f8e9bb755177b9a84beb52a2bcd3c38d5fcc15571fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f56213004a0a4ab2b3f41f8e9bb755177b9a84beb52a2bcd3c38d5fcc15571fc->enter($__internal_f56213004a0a4ab2b3f41f8e9bb755177b9a84beb52a2bcd3c38d5fcc15571fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_f56213004a0a4ab2b3f41f8e9bb755177b9a84beb52a2bcd3c38d5fcc15571fc->leave($__internal_f56213004a0a4ab2b3f41f8e9bb755177b9a84beb52a2bcd3c38d5fcc15571fc_prof);

    }

    public function getTemplateName()
    {
        return "knp_menu_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if options.compressed %}{{ block('compressed_root') }}{% else %}{{ block('root') }}{% endif %}
", "knp_menu_base.html.twig", "/var/www/symfony2/vendor/knplabs/knp-menu/src/Knp/Menu/Resources/views/knp_menu_base.html.twig");
    }
}
