<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_8d0e4d6c852fe0ac80512f4fb017499c690f6a3be9c040f055e7749226586dd5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ae00d059b817886f628aa419e5e33f00f53afa41d6a78a5738f13a4dc41dbd12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae00d059b817886f628aa419e5e33f00f53afa41d6a78a5738f13a4dc41dbd12->enter($__internal_ae00d059b817886f628aa419e5e33f00f53afa41d6a78a5738f13a4dc41dbd12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

        // line 11
        echo "<div id=\"cms-block-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "id", array()), "html", null, true);
        echo "\" class=\"cms-block cms-block-element\">
    ";
        // line 12
        $this->displayBlock('block', $context, $blocks);
        // line 13
        echo "</div>
";
        
        $__internal_ae00d059b817886f628aa419e5e33f00f53afa41d6a78a5738f13a4dc41dbd12->leave($__internal_ae00d059b817886f628aa419e5e33f00f53afa41d6a78a5738f13a4dc41dbd12_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_6ae0f15229d1aed4c72d24d71fc4b841692d5efdb0b7f0c12e18d16f117e707c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ae0f15229d1aed4c72d24d71fc4b841692d5efdb0b7f0c12e18d16f117e707c->enter($__internal_6ae0f15229d1aed4c72d24d71fc4b841692d5efdb0b7f0c12e18d16f117e707c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_6ae0f15229d1aed4c72d24d71fc4b841692d5efdb0b7f0c12e18d16f117e707c->leave($__internal_6ae0f15229d1aed4c72d24d71fc4b841692d5efdb0b7f0c12e18d16f117e707c_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 12,  30 => 13,  28 => 12,  23 => 11,);
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
<div id=\"cms-block-{{ block.id }}\" class=\"cms-block cms-block-element\">
    {% block block %}EMPTY CONTENT{% endblock %}
</div>
", "SonataBlockBundle:Block:block_base.html.twig", "/var/www/symfony2/vendor/sonata-project/block-bundle/Resources/views/Block/block_base.html.twig");
    }
}
