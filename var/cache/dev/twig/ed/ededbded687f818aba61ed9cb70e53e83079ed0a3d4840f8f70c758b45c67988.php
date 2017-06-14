<?php

/* :admin:standard_layout.html.twig */
class __TwigTemplate_0ae78d52dd0de183c9443499bfc1e850afdd88405e062af36f6e48659cfa01c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'html_attributes' => array($this, 'block_html_attributes'),
            'meta_tags' => array($this, 'block_meta_tags'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'sonata_head_title' => array($this, 'block_sonata_head_title'),
            'body_attributes' => array($this, 'block_body_attributes'),
            'sonata_header' => array($this, 'block_sonata_header'),
            'sonata_header_noscript_warning' => array($this, 'block_sonata_header_noscript_warning'),
            'logo' => array($this, 'block_logo'),
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'sonata_breadcrumb' => array($this, 'block_sonata_breadcrumb'),
            'sonata_top_nav_menu' => array($this, 'block_sonata_top_nav_menu'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'sonata_side_nav' => array($this, 'block_sonata_side_nav'),
            'sonata_sidebar_search' => array($this, 'block_sonata_sidebar_search'),
            'side_bar_before_nav' => array($this, 'block_side_bar_before_nav'),
            'side_bar_nav' => array($this, 'block_side_bar_nav'),
            'side_bar_after_nav' => array($this, 'block_side_bar_after_nav'),
            'side_bar_after_nav_content' => array($this, 'block_side_bar_after_nav_content'),
            'sonata_page_content' => array($this, 'block_sonata_page_content'),
            'sonata_page_content_header' => array($this, 'block_sonata_page_content_header'),
            'sonata_page_content_nav' => array($this, 'block_sonata_page_content_nav'),
            'tab_menu_navbar_header' => array($this, 'block_tab_menu_navbar_header'),
            'sonata_admin_content_actions_wrappers' => array($this, 'block_sonata_admin_content_actions_wrappers'),
            'sonata_admin_content' => array($this, 'block_sonata_admin_content'),
            'notice' => array($this, 'block_notice'),
            'bootlint' => array($this, 'block_bootlint'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_35c850d9e6545e82e6930cafdf10e9a8871369c45f4fd237ea842f0f2a065ff1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35c850d9e6545e82e6930cafdf10e9a8871369c45f4fd237ea842f0f2a065ff1->enter($__internal_35c850d9e6545e82e6930cafdf10e9a8871369c45f4fd237ea842f0f2a065ff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin:standard_layout.html.twig"));

        // line 11
        $context["_preview"] =         $this->renderBlock("preview", $context, $blocks);
        // line 12
        $context["_form"] =         $this->renderBlock("form", $context, $blocks);
        // line 13
        $context["_show"] =         $this->renderBlock("show", $context, $blocks);
        // line 14
        $context["_list_table"] =         $this->renderBlock("list_table", $context, $blocks);
        // line 15
        $context["_list_filters"] =         $this->renderBlock("list_filters", $context, $blocks);
        // line 16
        $context["_tab_menu"] =         $this->renderBlock("tab_menu", $context, $blocks);
        // line 17
        $context["_content"] =         $this->renderBlock("content", $context, $blocks);
        // line 18
        $context["_title"] =         $this->renderBlock("title", $context, $blocks);
        // line 19
        $context["_breadcrumb"] =         $this->renderBlock("breadcrumb", $context, $blocks);
        // line 20
        $context["_actions"] =         $this->renderBlock("actions", $context, $blocks);
        // line 21
        $context["_navbar_title"] =         $this->renderBlock("navbar_title", $context, $blocks);
        // line 22
        $context["_list_filters_actions"] =         $this->renderBlock("list_filters_actions", $context, $blocks);
        // line 23
        echo "
<!DOCTYPE html>
<html ";
        // line 25
        $this->displayBlock('html_attributes', $context, $blocks);
        echo ">
    <head>
        ";
        // line 27
        $this->displayBlock('meta_tags', $context, $blocks);
        // line 32
        echo "
        ";
        // line 33
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 54
        echo "
        ";
        // line 55
        $this->displayBlock('javascripts', $context, $blocks);
        // line 102
        echo "        <title>
        ";
        // line 103
        $this->displayBlock('sonata_head_title', $context, $blocks);
        // line 123
        echo "        </title>
    </head>
    <body ";
        // line 125
        $this->displayBlock('body_attributes', $context, $blocks);
        echo ">

    <div class=\"wrapper\">

        ";
        // line 129
        $this->displayBlock('sonata_header', $context, $blocks);
        // line 227
        echo "
        ";
        // line 228
        $this->displayBlock('sonata_wrapper', $context, $blocks);
        // line 368
        echo "    </div>

    ";
        // line 370
        if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_bootlint"), "method")) {
            // line 371
            echo "        ";
            $this->displayBlock('bootlint', $context, $blocks);
            // line 377
            echo "    ";
        }
        // line 378
        echo "
    </body>
</html>
";
        
        $__internal_35c850d9e6545e82e6930cafdf10e9a8871369c45f4fd237ea842f0f2a065ff1->leave($__internal_35c850d9e6545e82e6930cafdf10e9a8871369c45f4fd237ea842f0f2a065ff1_prof);

    }

    // line 25
    public function block_html_attributes($context, array $blocks = array())
    {
        $__internal_f32ffbf446d2c3a6d1563ebd4ddf4e3e77c06c87d54e8cc1c56b2ea1e557ff66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f32ffbf446d2c3a6d1563ebd4ddf4e3e77c06c87d54e8cc1c56b2ea1e557ff66->enter($__internal_f32ffbf446d2c3a6d1563ebd4ddf4e3e77c06c87d54e8cc1c56b2ea1e557ff66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html_attributes"));

        echo "class=\"no-js\"";
        
        $__internal_f32ffbf446d2c3a6d1563ebd4ddf4e3e77c06c87d54e8cc1c56b2ea1e557ff66->leave($__internal_f32ffbf446d2c3a6d1563ebd4ddf4e3e77c06c87d54e8cc1c56b2ea1e557ff66_prof);

    }

    // line 27
    public function block_meta_tags($context, array $blocks = array())
    {
        $__internal_4fd9ea00eaa854197a1c8c036caa634b62e394b25944aafe2f10adeb4e4e5860 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fd9ea00eaa854197a1c8c036caa634b62e394b25944aafe2f10adeb4e4e5860->enter($__internal_4fd9ea00eaa854197a1c8c036caa634b62e394b25944aafe2f10adeb4e4e5860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_tags"));

        // line 28
        echo "            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta charset=\"UTF-8\">
            <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        ";
        
        $__internal_4fd9ea00eaa854197a1c8c036caa634b62e394b25944aafe2f10adeb4e4e5860->leave($__internal_4fd9ea00eaa854197a1c8c036caa634b62e394b25944aafe2f10adeb4e4e5860_prof);

    }

    // line 33
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a98c1390fa5dfa4fd0217f244a1bf43f4fcbce72e9e5a549e415af4aaad1eba2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a98c1390fa5dfa4fd0217f244a1bf43f4fcbce72e9e5a549e415af4aaad1eba2->enter($__internal_a98c1390fa5dfa4fd0217f244a1bf43f4fcbce72e9e5a549e415af4aaad1eba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 34
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "stylesheets", 1 => array()), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["stylesheet"]) {
            // line 35
            echo "                    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["stylesheet"]), "html", null, true);
            echo "\">
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stylesheet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "            <style type=\"text/css\">
            #findAddress {
                width: 170px;
                height: 33px;
                color: black;
                font-size: 15px;
            }
            </style>

            ";
        // line 46
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "aa12467_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_aa12467_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/build/css/aa12467_flat-form-admin_1.css");
            // line 50
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
            ";
        } else {
            // asset "aa12467"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_aa12467") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/build/css/aa12467.css");
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
            ";
        }
        unset($context["asset_url"]);
        // line 52
        echo "
        ";
        
        $__internal_a98c1390fa5dfa4fd0217f244a1bf43f4fcbce72e9e5a549e415af4aaad1eba2->leave($__internal_a98c1390fa5dfa4fd0217f244a1bf43f4fcbce72e9e5a549e415af4aaad1eba2_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fdc9dd9ed0ef400177df1f01c3f478d3bf1b3585b59c40be0be9a0ddf78c8737 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdc9dd9ed0ef400177df1f01c3f478d3bf1b3585b59c40be0be9a0ddf78c8737->enter($__internal_fdc9dd9ed0ef400177df1f01c3f478d3bf1b3585b59c40be0be9a0ddf78c8737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 56
        echo "            <script>
                window.SONATA_CONFIG = {
                    CONFIRM_EXIT: ";
        // line 58
        if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "confirm_exit"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                    USE_SELECT2: ";
        // line 59
        if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_select2"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                    USE_ICHECK: ";
        // line 60
        if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_icheck"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                    USE_STICKYFORMS: ";
        // line 61
        if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_stickyforms"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        // line 62
        echo "                };
                window.SONATA_TRANSLATIONS = {
                    CONFIRM_EXIT:  '";
        // line 64
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("confirm_exit", array(), "SonataAdminBundle"), "js"), "html", null, true);
        echo "'
                };

                // http://getbootstrap.com/getting-started/#support-ie10-width
                if (navigator.userAgent.match(/IEMobile\\/10\\.0/)) {
                    var msViewportStyle = document.createElement('style');
                    msViewportStyle.appendChild(document.createTextNode('@-ms-viewport{width:auto!important}'));
                    document.querySelector('head').appendChild(msViewportStyle);
                }
            </script>

            ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "javascripts", 1 => array()), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["javascript"]) {
            // line 76
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["javascript"]), "html", null, true);
            echo "\"></script>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['javascript'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "
            ";
        // line 79
        $context["locale"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array());
        // line 80
        echo "            ";
        // line 81
        echo "            ";
        if ((twig_slice($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), 0, 2) != "en")) {
            // line 82
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/sonatacore/vendor/moment/locale/" . twig_replace_filter((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), array("_" => "-"))) . ".js")), "html", null, true);
            echo "\"></script>
            ";
        }
        // line 84
        echo "
            ";
        // line 86
        echo "            ";
        if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_select2"), "method")) {
            // line 87
            echo "                ";
            if (((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")) == "pt")) {
                $context["locale"] = "pt_PT";
            }
            // line 88
            echo "
                ";
            // line 90
            echo "                ";
            if ((twig_slice($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), 0, 2) != "en")) {
                // line 91
                echo "                    <script src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/sonatacore/vendor/select2/select2_locale_" . twig_replace_filter((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), array("_" => "-"))) . ".js")), "html", null, true);
                echo "\"></script>
                ";
            }
            // line 93
            echo "            ";
        }
        // line 94
        echo "
            ";
        // line 95
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "db8ceae_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_db8ceae_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/build/js/db8ceae_fancySelect_1.js");
            // line 99
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
        } else {
            // asset "db8ceae"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_db8ceae") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/build/js/db8ceae.js");
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
        }
        unset($context["asset_url"]);
        // line 101
        echo "        ";
        
        $__internal_fdc9dd9ed0ef400177df1f01c3f478d3bf1b3585b59c40be0be9a0ddf78c8737->leave($__internal_fdc9dd9ed0ef400177df1f01c3f478d3bf1b3585b59c40be0be9a0ddf78c8737_prof);

    }

    // line 103
    public function block_sonata_head_title($context, array $blocks = array())
    {
        $__internal_d5aacbba329d628ab589a3864aea1ce1d11ac4d85e7acf338b1526c642e27c7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5aacbba329d628ab589a3864aea1ce1d11ac4d85e7acf338b1526c642e27c7e->enter($__internal_d5aacbba329d628ab589a3864aea1ce1d11ac4d85e7acf338b1526c642e27c7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_head_title"));

        // line 104
        echo "            ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Admin", array(), "SonataAdminBundle"), "html", null, true);
        echo "

            ";
        // line 106
        if ( !twig_test_empty((isset($context["_title"]) ? $context["_title"] : $this->getContext($context, "_title")))) {
            // line 107
            echo "                ";
            echo (isset($context["_title"]) ? $context["_title"] : $this->getContext($context, "_title"));
            echo "
            ";
        } else {
            // line 109
            echo "                ";
            if (array_key_exists("action", $context)) {
                // line 110
                echo "                    -
                    ";
                // line 111
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "breadcrumbs", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"));
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
                foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                    // line 112
                    echo "                        ";
                    if ( !$this->getAttribute($context["loop"], "first", array())) {
                        // line 113
                        echo "                            ";
                        if (($this->getAttribute($context["loop"], "index", array()) != 2)) {
                            // line 114
                            echo "                                &gt;
                            ";
                        }
                        // line 116
                        echo "
                            ";
                        // line 117
                        echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "label", array()), "html", null, true);
                        echo "
                        ";
                    }
                    // line 119
                    echo "                    ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 120
                echo "                ";
            }
            // line 121
            echo "            ";
        }
        // line 122
        echo "        ";
        
        $__internal_d5aacbba329d628ab589a3864aea1ce1d11ac4d85e7acf338b1526c642e27c7e->leave($__internal_d5aacbba329d628ab589a3864aea1ce1d11ac4d85e7acf338b1526c642e27c7e_prof);

    }

    // line 125
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_e1da99c06cea69a7da805b9ae40d42a7caf4ebe0c506e504c4da13c926701829 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1da99c06cea69a7da805b9ae40d42a7caf4ebe0c506e504c4da13c926701829->enter($__internal_e1da99c06cea69a7da805b9ae40d42a7caf4ebe0c506e504c4da13c926701829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc skin-black fixed\"";
        
        $__internal_e1da99c06cea69a7da805b9ae40d42a7caf4ebe0c506e504c4da13c926701829->leave($__internal_e1da99c06cea69a7da805b9ae40d42a7caf4ebe0c506e504c4da13c926701829_prof);

    }

    // line 129
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_0303ba9c4aef98a74234f188c06d48b659607a7620abe6146ff59bb3df37d602 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0303ba9c4aef98a74234f188c06d48b659607a7620abe6146ff59bb3df37d602->enter($__internal_0303ba9c4aef98a74234f188c06d48b659607a7620abe6146ff59bb3df37d602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        // line 130
        echo "            <header class=\"main-header\">
                ";
        // line 131
        $this->displayBlock('sonata_header_noscript_warning', $context, $blocks);
        // line 138
        echo "                ";
        $this->displayBlock('logo', $context, $blocks);
        // line 150
        echo "                ";
        $this->displayBlock('sonata_nav', $context, $blocks);
        // line 225
        echo "            </header>
        ";
        
        $__internal_0303ba9c4aef98a74234f188c06d48b659607a7620abe6146ff59bb3df37d602->leave($__internal_0303ba9c4aef98a74234f188c06d48b659607a7620abe6146ff59bb3df37d602_prof);

    }

    // line 131
    public function block_sonata_header_noscript_warning($context, array $blocks = array())
    {
        $__internal_41648db9bfd4f141b0028f161008f5ce95d6461731dfe54c1db9399db0a6ff9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41648db9bfd4f141b0028f161008f5ce95d6461731dfe54c1db9399db0a6ff9c->enter($__internal_41648db9bfd4f141b0028f161008f5ce95d6461731dfe54c1db9399db0a6ff9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header_noscript_warning"));

        // line 132
        echo "                    <noscript>
                        <div class=\"noscript-warning\">
                            ";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("noscript_warning", array(), "SonataAdminBundle"), "html", null, true);
        echo "
                        </div>
                    </noscript>
                ";
        
        $__internal_41648db9bfd4f141b0028f161008f5ce95d6461731dfe54c1db9399db0a6ff9c->leave($__internal_41648db9bfd4f141b0028f161008f5ce95d6461731dfe54c1db9399db0a6ff9c_prof);

    }

    // line 138
    public function block_logo($context, array $blocks = array())
    {
        $__internal_e3af10b7a685547006cab15e5bc5cadbcfa33945dc7827d30ed2346f1d2b1cc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3af10b7a685547006cab15e5bc5cadbcfa33945dc7827d30ed2346f1d2b1cc9->enter($__internal_e3af10b7a685547006cab15e5bc5cadbcfa33945dc7827d30ed2346f1d2b1cc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        // line 139
        echo "                    ";
        ob_start();
        // line 140
        echo "                        <a class=\"logo\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_admin_dashboard");
        echo "\">
                            ";
        // line 141
        if ((("single_image" == $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")) || ("both" == $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")))) {
            // line 142
            echo "                                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "titlelogo", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "title", array()), "html", null, true);
            echo "\">
                            ";
        }
        // line 144
        echo "                            ";
        if ((("single_text" == $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")) || ("both" == $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")))) {
            // line 145
            echo "                                <span>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "title", array()), "html", null, true);
            echo "</span>
                            ";
        }
        // line 147
        echo "                        </a>
                    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 149
        echo "                ";
        
        $__internal_e3af10b7a685547006cab15e5bc5cadbcfa33945dc7827d30ed2346f1d2b1cc9->leave($__internal_e3af10b7a685547006cab15e5bc5cadbcfa33945dc7827d30ed2346f1d2b1cc9_prof);

    }

    // line 150
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_339c4bd3e5123bb929d83b88c173b73cea56a927942f9aae58f9e6c25cfda421 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_339c4bd3e5123bb929d83b88c173b73cea56a927942f9aae58f9e6c25cfda421->enter($__internal_339c4bd3e5123bb929d83b88c173b73cea56a927942f9aae58f9e6c25cfda421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        // line 151
        echo "                    <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                        <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                            <span class=\"sr-only\">Toggle navigation</span>
                        </a>

                        <div class=\"navbar-left\">
                            ";
        // line 157
        $this->displayBlock('sonata_breadcrumb', $context, $blocks);
        // line 184
        echo "                        </div>

                        ";
        // line 186
        $this->displayBlock('sonata_top_nav_menu', $context, $blocks);
        // line 223
        echo "                    </nav>
                ";
        
        $__internal_339c4bd3e5123bb929d83b88c173b73cea56a927942f9aae58f9e6c25cfda421->leave($__internal_339c4bd3e5123bb929d83b88c173b73cea56a927942f9aae58f9e6c25cfda421_prof);

    }

    // line 157
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_17855fc26f085b4b265196398298d39f52ae97f700f33d4348f81803a7bac965 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17855fc26f085b4b265196398298d39f52ae97f700f33d4348f81803a7bac965->enter($__internal_17855fc26f085b4b265196398298d39f52ae97f700f33d4348f81803a7bac965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        // line 158
        echo "                                <div class=\"hidden-xs\">
                                    ";
        // line 159
        if (( !twig_test_empty((isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : $this->getContext($context, "_breadcrumb"))) || array_key_exists("action", $context))) {
            // line 160
            echo "                                        <ol class=\"nav navbar-top-links breadcrumb\">
                                            ";
            // line 161
            if (twig_test_empty((isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : $this->getContext($context, "_breadcrumb")))) {
                // line 162
                echo "                                                ";
                if (array_key_exists("action", $context)) {
                    // line 163
                    echo "                                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "breadcrumbs", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                        // line 164
                        echo "                                                        ";
                        if ( !$this->getAttribute($context["loop"], "last", array())) {
                            // line 165
                            echo "                                                            <li>
                                                                ";
                            // line 166
                            if ( !twig_test_empty($this->getAttribute($context["menu"], "uri", array()))) {
                                // line 167
                                echo "                                                                    <a href=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "uri", array()), "html", null, true);
                                echo "\">";
                                echo $this->getAttribute($context["menu"], "label", array());
                                echo "</a>
                                                                ";
                            } else {
                                // line 169
                                echo "                                                                    ";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "label", array()), "html", null, true);
                                echo "
                                                                ";
                            }
                            // line 171
                            echo "                                                            </li>
                                                        ";
                        } else {
                            // line 173
                            echo "                                                            <li class=\"active\"><span>";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "label", array()), "html", null, true);
                            echo "</span></li>
                                                        ";
                        }
                        // line 175
                        echo "                                                    ";
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 176
                    echo "                                                ";
                }
                // line 177
                echo "                                            ";
            } else {
                // line 178
                echo "                                                ";
                echo (isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : $this->getContext($context, "_breadcrumb"));
                echo "
                                            ";
            }
            // line 180
            echo "                                        </ol>
                                    ";
        }
        // line 182
        echo "                                </div>
                            ";
        
        $__internal_17855fc26f085b4b265196398298d39f52ae97f700f33d4348f81803a7bac965->leave($__internal_17855fc26f085b4b265196398298d39f52ae97f700f33d4348f81803a7bac965_prof);

    }

    // line 186
    public function block_sonata_top_nav_menu($context, array $blocks = array())
    {
        $__internal_352ca6147b3e88c0972afa5d639657ca0b9faf4f9eea58b8c42fd49d175956c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_352ca6147b3e88c0972afa5d639657ca0b9faf4f9eea58b8c42fd49d175956c6->enter($__internal_352ca6147b3e88c0972afa5d639657ca0b9faf4f9eea58b8c42fd49d175956c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu"));

        // line 187
        echo "                            <div class=\"navbar-custom-menu\">
                                <ul class=\"nav navbar-nav\">
                                    <li class=\"dropdown\">
                                        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                            <i class=\"fa fa-plus-square fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>
                                        </a>
                                        ";
        // line 193
        $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "add_block"), "method"), ":admin:standard_layout.html.twig", 193)->display($context);
        // line 194
        echo "                                    </li>
                                    <li class=\"dropdown user-menu\">
                                        <a href=\"";
        // line 196
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("homepage");
        echo "\">
                                            ";
        // line 198
        echo "                                            <i class=\"fa fa-sitemap fa-fw\"></i>
                                        </a>
                                        ";
        // line 205
        echo "                                    </li>
                                    
                                    ";
        // line 207
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 208
            echo "                                    <li class=\"dropdown user-menu\">
                                        <a href=\"";
            // line 209
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("admin_user_user_edit", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
            echo "\">
                                        <i class=\"fa fa-user fa-fw\"></i>
                                        </a>
                                    </li>
                                    ";
        }
        // line 214
        echo "
                                    <li class=\"dropdown user-menu\">
                                        <a href=\"";
        // line 216
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("sonata_user_security_logout");
        echo "\">
                                        <i class=\"fa fa-sign-out fa-fw\"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        ";
        
        $__internal_352ca6147b3e88c0972afa5d639657ca0b9faf4f9eea58b8c42fd49d175956c6->leave($__internal_352ca6147b3e88c0972afa5d639657ca0b9faf4f9eea58b8c42fd49d175956c6_prof);

    }

    // line 228
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_ea1f702ec658a0db7abb06cd574bfcf66c61bb79a3adce36aef26d124027fa9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea1f702ec658a0db7abb06cd574bfcf66c61bb79a3adce36aef26d124027fa9d->enter($__internal_ea1f702ec658a0db7abb06cd574bfcf66c61bb79a3adce36aef26d124027fa9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 229
        echo "            ";
        $this->displayBlock('sonata_left_side', $context, $blocks);
        // line 267
        echo "
            <div class=\"content-wrapper\">
                ";
        // line 269
        $this->displayBlock('sonata_page_content', $context, $blocks);
        // line 366
        echo "            </div>
        ";
        
        $__internal_ea1f702ec658a0db7abb06cd574bfcf66c61bb79a3adce36aef26d124027fa9d->leave($__internal_ea1f702ec658a0db7abb06cd574bfcf66c61bb79a3adce36aef26d124027fa9d_prof);

    }

    // line 229
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_80f0d4fa233211f1c00f85fb68a6f866e7c8116e7295a733fbc09b14a7064548 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80f0d4fa233211f1c00f85fb68a6f866e7c8116e7295a733fbc09b14a7064548->enter($__internal_80f0d4fa233211f1c00f85fb68a6f866e7c8116e7295a733fbc09b14a7064548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        // line 230
        echo "                <aside class=\"main-sidebar\">
                    <section class=\"sidebar\">
                        ";
        // line 232
        $this->displayBlock('sonata_side_nav', $context, $blocks);
        // line 264
        echo "                    </section>
                </aside>
            ";
        
        $__internal_80f0d4fa233211f1c00f85fb68a6f866e7c8116e7295a733fbc09b14a7064548->leave($__internal_80f0d4fa233211f1c00f85fb68a6f866e7c8116e7295a733fbc09b14a7064548_prof);

    }

    // line 232
    public function block_sonata_side_nav($context, array $blocks = array())
    {
        $__internal_0da682df91902babd122124d9b5a021a94050bb2be7190b4f4e3b1784c95be8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0da682df91902babd122124d9b5a021a94050bb2be7190b4f4e3b1784c95be8f->enter($__internal_0da682df91902babd122124d9b5a021a94050bb2be7190b4f4e3b1784c95be8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_side_nav"));

        // line 233
        echo "                            ";
        $this->displayBlock('sonata_sidebar_search', $context, $blocks);
        // line 249
        echo "
                            ";
        // line 250
        $this->displayBlock('side_bar_before_nav', $context, $blocks);
        // line 251
        echo "                            ";
        $this->displayBlock('side_bar_nav', $context, $blocks);
        // line 256
        echo "                            ";
        $this->displayBlock('side_bar_after_nav', $context, $blocks);
        // line 263
        echo "                        ";
        
        $__internal_0da682df91902babd122124d9b5a021a94050bb2be7190b4f4e3b1784c95be8f->leave($__internal_0da682df91902babd122124d9b5a021a94050bb2be7190b4f4e3b1784c95be8f_prof);

    }

    // line 233
    public function block_sonata_sidebar_search($context, array $blocks = array())
    {
        $__internal_f5c4bba9272e35ddb00ec429e834c7073c28eeffd1189e70b90e7835a07114b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5c4bba9272e35ddb00ec429e834c7073c28eeffd1189e70b90e7835a07114b9->enter($__internal_f5c4bba9272e35ddb00ec429e834c7073c28eeffd1189e70b90e7835a07114b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_sidebar_search"));

        // line 234
        echo "                                ";
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SONATA_ADMIN"))) {
            // line 235
            echo "                                ";
            // line 247
            echo "                                ";
        }
        // line 248
        echo "                            ";
        
        $__internal_f5c4bba9272e35ddb00ec429e834c7073c28eeffd1189e70b90e7835a07114b9->leave($__internal_f5c4bba9272e35ddb00ec429e834c7073c28eeffd1189e70b90e7835a07114b9_prof);

    }

    // line 250
    public function block_side_bar_before_nav($context, array $blocks = array())
    {
        $__internal_13b75272d12eeb02ed3ea777584193b0ac98a001002b85eda56e2ecd99a04ef9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13b75272d12eeb02ed3ea777584193b0ac98a001002b85eda56e2ecd99a04ef9->enter($__internal_13b75272d12eeb02ed3ea777584193b0ac98a001002b85eda56e2ecd99a04ef9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_before_nav"));

        echo " ";
        
        $__internal_13b75272d12eeb02ed3ea777584193b0ac98a001002b85eda56e2ecd99a04ef9->leave($__internal_13b75272d12eeb02ed3ea777584193b0ac98a001002b85eda56e2ecd99a04ef9_prof);

    }

    // line 251
    public function block_side_bar_nav($context, array $blocks = array())
    {
        $__internal_d8411afd1c4db90bf7224f9ab57474e91db94b8fe51e114489702c3761b93088 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8411afd1c4db90bf7224f9ab57474e91db94b8fe51e114489702c3761b93088->enter($__internal_d8411afd1c4db90bf7224f9ab57474e91db94b8fe51e114489702c3761b93088_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_nav"));

        // line 252
        echo "                                ";
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SONATA_ADMIN"))) {
            // line 253
            echo "                                    ";
            echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render("sonata_admin_sidebar", array("template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "knp_menu_template"), "method")));
            echo "
                                ";
        }
        // line 255
        echo "                            ";
        
        $__internal_d8411afd1c4db90bf7224f9ab57474e91db94b8fe51e114489702c3761b93088->leave($__internal_d8411afd1c4db90bf7224f9ab57474e91db94b8fe51e114489702c3761b93088_prof);

    }

    // line 256
    public function block_side_bar_after_nav($context, array $blocks = array())
    {
        $__internal_58fd8f425f50ddea41bacd6989af83e80ab8b022af8dd08bf97628754bf16e88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58fd8f425f50ddea41bacd6989af83e80ab8b022af8dd08bf97628754bf16e88->enter($__internal_58fd8f425f50ddea41bacd6989af83e80ab8b022af8dd08bf97628754bf16e88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav"));

        // line 257
        echo "                                <p class=\"text-center small\" style=\"border-top: 1px solid #444444; padding-top: 10px\">
                                    ";
        // line 258
        $this->displayBlock('side_bar_after_nav_content', $context, $blocks);
        // line 261
        echo "                                </p>
                            ";
        
        $__internal_58fd8f425f50ddea41bacd6989af83e80ab8b022af8dd08bf97628754bf16e88->leave($__internal_58fd8f425f50ddea41bacd6989af83e80ab8b022af8dd08bf97628754bf16e88_prof);

    }

    // line 258
    public function block_side_bar_after_nav_content($context, array $blocks = array())
    {
        $__internal_ac63ebf8a4559eafbaae8d7909dff2fa7e410978ed3f7632aac2324652904d9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac63ebf8a4559eafbaae8d7909dff2fa7e410978ed3f7632aac2324652904d9b->enter($__internal_ac63ebf8a4559eafbaae8d7909dff2fa7e410978ed3f7632aac2324652904d9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav_content"));

        // line 259
        echo "                                        ";
        // line 260
        echo "                                    ";
        
        $__internal_ac63ebf8a4559eafbaae8d7909dff2fa7e410978ed3f7632aac2324652904d9b->leave($__internal_ac63ebf8a4559eafbaae8d7909dff2fa7e410978ed3f7632aac2324652904d9b_prof);

    }

    // line 269
    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_b6e892f89a939355c994fa00dd302a14b96781bd810c0f960baf63acf71b91d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6e892f89a939355c994fa00dd302a14b96781bd810c0f960baf63acf71b91d5->enter($__internal_b6e892f89a939355c994fa00dd302a14b96781bd810c0f960baf63acf71b91d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 270
        echo "                    <section class=\"content-header\">

                        ";
        // line 272
        $this->displayBlock('sonata_page_content_header', $context, $blocks);
        // line 326
        echo "                    </section>

                    <section class=\"content\">
                        ";
        // line 329
        $this->displayBlock('sonata_admin_content', $context, $blocks);
        // line 364
        echo "                    </section>
                ";
        
        $__internal_b6e892f89a939355c994fa00dd302a14b96781bd810c0f960baf63acf71b91d5->leave($__internal_b6e892f89a939355c994fa00dd302a14b96781bd810c0f960baf63acf71b91d5_prof);

    }

    // line 272
    public function block_sonata_page_content_header($context, array $blocks = array())
    {
        $__internal_d076f16475bf0d9f401dbc8015d3cdacbbac731635cd5df7d02ce24895e17150 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d076f16475bf0d9f401dbc8015d3cdacbbac731635cd5df7d02ce24895e17150->enter($__internal_d076f16475bf0d9f401dbc8015d3cdacbbac731635cd5df7d02ce24895e17150_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_header"));

        // line 273
        echo "                            ";
        $this->displayBlock('sonata_page_content_nav', $context, $blocks);
        // line 325
        echo "                        ";
        
        $__internal_d076f16475bf0d9f401dbc8015d3cdacbbac731635cd5df7d02ce24895e17150->leave($__internal_d076f16475bf0d9f401dbc8015d3cdacbbac731635cd5df7d02ce24895e17150_prof);

    }

    // line 273
    public function block_sonata_page_content_nav($context, array $blocks = array())
    {
        $__internal_1dcd509b6645f2a9cf4198d613967e052dbfd6e1f78cf53e21d27db71ab4f881 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dcd509b6645f2a9cf4198d613967e052dbfd6e1f78cf53e21d27db71ab4f881->enter($__internal_1dcd509b6645f2a9cf4198d613967e052dbfd6e1f78cf53e21d27db71ab4f881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_nav"));

        // line 274
        echo "                                ";
        if ((( !twig_test_empty((isset($context["_tab_menu"]) ? $context["_tab_menu"] : $this->getContext($context, "_tab_menu"))) ||  !twig_test_empty((isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions")))) ||  !twig_test_empty((isset($context["_list_filters_actions"]) ? $context["_list_filters_actions"] : $this->getContext($context, "_list_filters_actions"))))) {
            // line 275
            echo "                                    <nav class=\"navbar navbar-default\" role=\"navigation\">
                                        <div class=\"container-fluid\">
                                            ";
            // line 277
            $this->displayBlock('tab_menu_navbar_header', $context, $blocks);
            // line 284
            echo "
                                            <div class=\"navbar-collapse\">
                                                <div class=\"navbar-left\">
                                                    ";
            // line 287
            if ( !twig_test_empty((isset($context["_tab_menu"]) ? $context["_tab_menu"] : $this->getContext($context, "_tab_menu")))) {
                // line 288
                echo "                                                        ";
                echo (isset($context["_tab_menu"]) ? $context["_tab_menu"] : $this->getContext($context, "_tab_menu"));
                echo "
                                                    ";
            }
            // line 290
            echo "                                                </div>

                                                ";
            // line 292
            if ((((array_key_exists("admin", $context) && array_key_exists("action", $context)) && ((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")) == "list")) && (twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "listModes", array())) > 1))) {
                // line 293
                echo "                                                    <div class=\"nav navbar-right btn-group\">
                                                        ";
                // line 294
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "listModes", array()));
                foreach ($context['_seq'] as $context["mode"] => $context["settings"]) {
                    // line 295
                    echo "                                                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "all", array()), array("_list_mode" => $context["mode"]))), "method"), "html", null, true);
                    echo "\" class=\"btn btn-default navbar-btn btn-sm";
                    if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getListMode", array(), "method") == $context["mode"])) {
                        echo " active";
                    }
                    echo "\"><i class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["settings"], "class", array()), "html", null, true);
                    echo "\"></i></a>
                                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['mode'], $context['settings'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 297
                echo "                                                    </div>
                                                ";
            }
            // line 299
            echo "
                                                ";
            // line 300
            $this->displayBlock('sonata_admin_content_actions_wrappers', $context, $blocks);
            // line 316
            echo "
                                                ";
            // line 317
            if ( !twig_test_empty((isset($context["_list_filters_actions"]) ? $context["_list_filters_actions"] : $this->getContext($context, "_list_filters_actions")))) {
                // line 318
                echo "                                                    ";
                echo (isset($context["_list_filters_actions"]) ? $context["_list_filters_actions"] : $this->getContext($context, "_list_filters_actions"));
                echo "
                                                ";
            }
            // line 320
            echo "                                            </div>
                                        </div>
                                    </nav>
                                ";
        }
        // line 324
        echo "                            ";
        
        $__internal_1dcd509b6645f2a9cf4198d613967e052dbfd6e1f78cf53e21d27db71ab4f881->leave($__internal_1dcd509b6645f2a9cf4198d613967e052dbfd6e1f78cf53e21d27db71ab4f881_prof);

    }

    // line 277
    public function block_tab_menu_navbar_header($context, array $blocks = array())
    {
        $__internal_945d9b7f64e50113be36b0f639d2c6fad55a4f956385ddbcd8d7d604816900e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_945d9b7f64e50113be36b0f639d2c6fad55a4f956385ddbcd8d7d604816900e5->enter($__internal_945d9b7f64e50113be36b0f639d2c6fad55a4f956385ddbcd8d7d604816900e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu_navbar_header"));

        // line 278
        echo "                                                ";
        if ( !twig_test_empty((isset($context["_navbar_title"]) ? $context["_navbar_title"] : $this->getContext($context, "_navbar_title")))) {
            // line 279
            echo "                                                    <div class=\"navbar-header\">
                                                        <a class=\"navbar-brand\" href=\"#\">";
            // line 280
            echo (isset($context["_navbar_title"]) ? $context["_navbar_title"] : $this->getContext($context, "_navbar_title"));
            echo "</a>
                                                    </div>
                                                ";
        }
        // line 283
        echo "                                            ";
        
        $__internal_945d9b7f64e50113be36b0f639d2c6fad55a4f956385ddbcd8d7d604816900e5->leave($__internal_945d9b7f64e50113be36b0f639d2c6fad55a4f956385ddbcd8d7d604816900e5_prof);

    }

    // line 300
    public function block_sonata_admin_content_actions_wrappers($context, array $blocks = array())
    {
        $__internal_0a42ced0782156a904ece5e3120eb968434e7b11b67deb8ec3e2cc618b0394aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a42ced0782156a904ece5e3120eb968434e7b11b67deb8ec3e2cc618b0394aa->enter($__internal_0a42ced0782156a904ece5e3120eb968434e7b11b67deb8ec3e2cc618b0394aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content_actions_wrappers"));

        // line 301
        echo "                                                    ";
        if ( !twig_test_empty(twig_trim_filter(twig_replace_filter((isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions")), array("<li>" => "", "</li>" => ""))))) {
            // line 302
            echo "                                                        <ul class=\"nav navbar-nav navbar-right\">
                                                        ";
            // line 303
            if ((twig_length_filter($this->env, twig_split_filter($this->env, (isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions")), "</a>")) > 2)) {
                // line 304
                echo "                                                            <li class=\"dropdown sonata-actions\">
                                                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                // line 305
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_actions", array(), "SonataAdminBundle"), "html", null, true);
                echo " <b class=\"caret\"></b></a>
                                                                <ul class=\"dropdown-menu\" role=\"menu\">
                                                                    ";
                // line 307
                echo (isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions"));
                echo "
                                                                </ul>
                                                            </li>
                                                        ";
            } else {
                // line 311
                echo "                                                            ";
                echo (isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions"));
                echo "
                                                        ";
            }
            // line 313
            echo "                                                        </ul>
                                                    ";
        }
        // line 315
        echo "                                                ";
        
        $__internal_0a42ced0782156a904ece5e3120eb968434e7b11b67deb8ec3e2cc618b0394aa->leave($__internal_0a42ced0782156a904ece5e3120eb968434e7b11b67deb8ec3e2cc618b0394aa_prof);

    }

    // line 329
    public function block_sonata_admin_content($context, array $blocks = array())
    {
        $__internal_40a76bf890817b1e0aef24f990f263b30c7788560341284e93ae90a685f448d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40a76bf890817b1e0aef24f990f263b30c7788560341284e93ae90a685f448d2->enter($__internal_40a76bf890817b1e0aef24f990f263b30c7788560341284e93ae90a685f448d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content"));

        // line 330
        echo "
                            ";
        // line 331
        $this->displayBlock('notice', $context, $blocks);
        // line 334
        echo "
                            ";
        // line 335
        if ( !twig_test_empty((isset($context["_preview"]) ? $context["_preview"] : $this->getContext($context, "_preview")))) {
            // line 336
            echo "                                <div class=\"sonata-ba-preview\">";
            echo (isset($context["_preview"]) ? $context["_preview"] : $this->getContext($context, "_preview"));
            echo "</div>
                            ";
        }
        // line 338
        echo "
                            ";
        // line 339
        if ( !twig_test_empty((isset($context["_content"]) ? $context["_content"] : $this->getContext($context, "_content")))) {
            // line 340
            echo "                                <div class=\"sonata-ba-content\">";
            echo (isset($context["_content"]) ? $context["_content"] : $this->getContext($context, "_content"));
            echo "</div>
                            ";
        }
        // line 342
        echo "
                            ";
        // line 343
        if ( !twig_test_empty((isset($context["_show"]) ? $context["_show"] : $this->getContext($context, "_show")))) {
            // line 344
            echo "                                <div class=\"sonata-ba-show\">";
            echo (isset($context["_show"]) ? $context["_show"] : $this->getContext($context, "_show"));
            echo "</div>
                            ";
        }
        // line 346
        echo "
                            ";
        // line 347
        if ( !twig_test_empty((isset($context["_form"]) ? $context["_form"] : $this->getContext($context, "_form")))) {
            // line 348
            echo "                                <div class=\"sonata-ba-form\">";
            echo (isset($context["_form"]) ? $context["_form"] : $this->getContext($context, "_form"));
            echo "</div>
                            ";
        }
        // line 350
        echo "
                            ";
        // line 351
        if (( !twig_test_empty((isset($context["_list_table"]) ? $context["_list_table"] : $this->getContext($context, "_list_table"))) ||  !twig_test_empty((isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters"))))) {
            // line 352
            echo "                                ";
            if (twig_trim_filter((isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters")))) {
                // line 353
                echo "                                    <div class=\"row\">
                                        ";
                // line 354
                echo (isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters"));
                echo "
                                    </div>
                                ";
            }
            // line 357
            echo "
                                <div class=\"row\">
                                    ";
            // line 359
            echo (isset($context["_list_table"]) ? $context["_list_table"] : $this->getContext($context, "_list_table"));
            echo "
                                </div>

                            ";
        }
        // line 363
        echo "                        ";
        
        $__internal_40a76bf890817b1e0aef24f990f263b30c7788560341284e93ae90a685f448d2->leave($__internal_40a76bf890817b1e0aef24f990f263b30c7788560341284e93ae90a685f448d2_prof);

    }

    // line 331
    public function block_notice($context, array $blocks = array())
    {
        $__internal_cb19b4bbd8d3dcca308bd045ab28747f39df8dd5c26346bea5139b8b351ef7f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb19b4bbd8d3dcca308bd045ab28747f39df8dd5c26346bea5139b8b351ef7f3->enter($__internal_cb19b4bbd8d3dcca308bd045ab28747f39df8dd5c26346bea5139b8b351ef7f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "notice"));

        // line 332
        echo "                                ";
        $this->loadTemplate("SonataCoreBundle:FlashMessage:render.html.twig", ":admin:standard_layout.html.twig", 332)->display($context);
        // line 333
        echo "                            ";
        
        $__internal_cb19b4bbd8d3dcca308bd045ab28747f39df8dd5c26346bea5139b8b351ef7f3->leave($__internal_cb19b4bbd8d3dcca308bd045ab28747f39df8dd5c26346bea5139b8b351ef7f3_prof);

    }

    // line 371
    public function block_bootlint($context, array $blocks = array())
    {
        $__internal_a59bf6239628be52af182fa1b7517a591f6820fb9b1452fb59ea5dc8538cee52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a59bf6239628be52af182fa1b7517a591f6820fb9b1452fb59ea5dc8538cee52->enter($__internal_a59bf6239628be52af182fa1b7517a591f6820fb9b1452fb59ea5dc8538cee52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bootlint"));

        // line 372
        echo "            ";
        // line 373
        echo "            <script type=\"text/javascript\">
                javascript:(function(){var s=document.createElement(\"script\");s.onload=function(){bootlint.showLintReportForCurrentDocument([], {hasProblems: false, problemFree: false});};s.src=\"https://maxcdn.bootstrapcdn.com/bootlint/latest/bootlint.min.js\";document.body.appendChild(s)})();
            </script>
        ";
        
        $__internal_a59bf6239628be52af182fa1b7517a591f6820fb9b1452fb59ea5dc8538cee52->leave($__internal_a59bf6239628be52af182fa1b7517a591f6820fb9b1452fb59ea5dc8538cee52_prof);

    }

    public function getTemplateName()
    {
        return ":admin:standard_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1233 => 373,  1231 => 372,  1225 => 371,  1218 => 333,  1215 => 332,  1209 => 331,  1202 => 363,  1195 => 359,  1191 => 357,  1185 => 354,  1182 => 353,  1179 => 352,  1177 => 351,  1174 => 350,  1168 => 348,  1166 => 347,  1163 => 346,  1157 => 344,  1155 => 343,  1152 => 342,  1146 => 340,  1144 => 339,  1141 => 338,  1135 => 336,  1133 => 335,  1130 => 334,  1128 => 331,  1125 => 330,  1119 => 329,  1112 => 315,  1108 => 313,  1102 => 311,  1095 => 307,  1090 => 305,  1087 => 304,  1085 => 303,  1082 => 302,  1079 => 301,  1073 => 300,  1066 => 283,  1060 => 280,  1057 => 279,  1054 => 278,  1048 => 277,  1041 => 324,  1035 => 320,  1029 => 318,  1027 => 317,  1024 => 316,  1022 => 300,  1019 => 299,  1015 => 297,  1000 => 295,  996 => 294,  993 => 293,  991 => 292,  987 => 290,  981 => 288,  979 => 287,  974 => 284,  972 => 277,  968 => 275,  965 => 274,  959 => 273,  952 => 325,  949 => 273,  943 => 272,  935 => 364,  933 => 329,  928 => 326,  926 => 272,  922 => 270,  916 => 269,  909 => 260,  907 => 259,  901 => 258,  893 => 261,  891 => 258,  888 => 257,  882 => 256,  875 => 255,  869 => 253,  866 => 252,  860 => 251,  848 => 250,  841 => 248,  838 => 247,  836 => 235,  833 => 234,  827 => 233,  820 => 263,  817 => 256,  814 => 251,  812 => 250,  809 => 249,  806 => 233,  800 => 232,  791 => 264,  789 => 232,  785 => 230,  779 => 229,  771 => 366,  769 => 269,  765 => 267,  762 => 229,  756 => 228,  742 => 216,  738 => 214,  730 => 209,  727 => 208,  725 => 207,  721 => 205,  717 => 198,  713 => 196,  709 => 194,  707 => 193,  699 => 187,  693 => 186,  685 => 182,  681 => 180,  675 => 178,  672 => 177,  669 => 176,  655 => 175,  649 => 173,  645 => 171,  639 => 169,  631 => 167,  629 => 166,  626 => 165,  623 => 164,  605 => 163,  602 => 162,  600 => 161,  597 => 160,  595 => 159,  592 => 158,  586 => 157,  578 => 223,  576 => 186,  572 => 184,  570 => 157,  562 => 151,  556 => 150,  549 => 149,  545 => 147,  539 => 145,  536 => 144,  528 => 142,  526 => 141,  521 => 140,  518 => 139,  512 => 138,  501 => 134,  497 => 132,  491 => 131,  483 => 225,  480 => 150,  477 => 138,  475 => 131,  472 => 130,  466 => 129,  454 => 125,  447 => 122,  444 => 121,  441 => 120,  427 => 119,  422 => 117,  419 => 116,  415 => 114,  412 => 113,  409 => 112,  392 => 111,  389 => 110,  386 => 109,  380 => 107,  378 => 106,  372 => 104,  366 => 103,  359 => 101,  345 => 99,  341 => 95,  338 => 94,  335 => 93,  329 => 91,  326 => 90,  323 => 88,  318 => 87,  315 => 86,  312 => 84,  306 => 82,  303 => 81,  301 => 80,  299 => 79,  296 => 78,  287 => 76,  283 => 75,  269 => 64,  265 => 62,  259 => 61,  251 => 60,  243 => 59,  235 => 58,  231 => 56,  225 => 55,  217 => 52,  203 => 50,  199 => 46,  188 => 37,  179 => 35,  174 => 34,  168 => 33,  158 => 28,  152 => 27,  140 => 25,  130 => 378,  127 => 377,  124 => 371,  122 => 370,  118 => 368,  116 => 228,  113 => 227,  111 => 129,  104 => 125,  100 => 123,  98 => 103,  95 => 102,  93 => 55,  90 => 54,  88 => 33,  85 => 32,  83 => 27,  78 => 25,  74 => 23,  72 => 22,  70 => 21,  68 => 20,  66 => 19,  64 => 18,  62 => 17,  60 => 16,  58 => 15,  56 => 14,  54 => 13,  52 => 12,  50 => 11,);
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
{% set _preview              = block('preview') %}
{% set _form                 = block('form') %}
{% set _show                 = block('show') %}
{% set _list_table           = block('list_table') %}
{% set _list_filters         = block('list_filters') %}
{% set _tab_menu             = block('tab_menu') %}
{% set _content              = block('content') %}
{% set _title                = block('title') %}
{% set _breadcrumb           = block('breadcrumb') %}
{% set _actions              = block('actions') %}
{% set _navbar_title         = block('navbar_title') %}
{% set _list_filters_actions = block('list_filters_actions') %}

<!DOCTYPE html>
<html {% block html_attributes %}class=\"no-js\"{% endblock %}>
    <head>
        {% block meta_tags %}
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta charset=\"UTF-8\">
            <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        {% endblock %}

        {% block stylesheets %}
            {% for stylesheet in sonata_admin.adminPool.getOption('stylesheets', []) %}
                    <link rel=\"stylesheet\" href=\"{{ asset(stylesheet) }}\">
            {% endfor %}
            <style type=\"text/css\">
            #findAddress {
                width: 170px;
                height: 33px;
                color: black;
                font-size: 15px;
            }
            </style>

            {% stylesheets
                'assets/flat-form/css/flat-form-admin.css'
                filter='cssrewrite'
                output='build/css/*.css' %}
                <link rel=\"stylesheet\" href=\"{{ asset_url }}\" />
            {% endstylesheets %}

        {% endblock %}

        {% block javascripts %}
            <script>
                window.SONATA_CONFIG = {
                    CONFIRM_EXIT: {% if sonata_admin.adminPool.getOption('confirm_exit') %}true{% else %}false{% endif %},
                    USE_SELECT2: {% if sonata_admin.adminPool.getOption('use_select2') %}true{% else %}false{% endif %},
                    USE_ICHECK: {% if sonata_admin.adminPool.getOption('use_icheck') %}true{% else %}false{% endif %},
                    USE_STICKYFORMS: {% if sonata_admin.adminPool.getOption('use_stickyforms') %}true{% else %}false{% endif %}
                };
                window.SONATA_TRANSLATIONS = {
                    CONFIRM_EXIT:  '{{ 'confirm_exit'|trans({}, 'SonataAdminBundle')|escape('js') }}'
                };

                // http://getbootstrap.com/getting-started/#support-ie10-width
                if (navigator.userAgent.match(/IEMobile\\/10\\.0/)) {
                    var msViewportStyle = document.createElement('style');
                    msViewportStyle.appendChild(document.createTextNode('@-ms-viewport{width:auto!important}'));
                    document.querySelector('head').appendChild(msViewportStyle);
                }
            </script>

            {% for javascript in sonata_admin.adminPool.getOption('javascripts', []) %}
                <script src=\"{{ asset(javascript) }}\"></script>
            {% endfor %}

            {% set locale = app.request.locale %}
            {# localize moment #}
            {% if locale[:2] != 'en' %}
                <script src=\"{{ asset('bundles/sonatacore/vendor/moment/locale/' ~ locale|replace({'_':'-'}) ~ '.js') }}\"></script>
            {% endif %}

            {# localize select2 #}
            {% if sonata_admin.adminPool.getOption('use_select2') %}
                {% if locale == 'pt' %}{% set locale = 'pt_PT' %}{% endif %}

                {# omit default EN locale #}
                {% if locale[:2] != 'en' %}
                    <script src=\"{{ asset('bundles/sonatacore/vendor/select2/select2_locale_' ~ locale|replace({'_':'-'}) ~ '.js') }}\"></script>
                {% endif %}
            {% endif %}

            {% javascripts
                'assets/flat-form/js/fancySelect.js'
                output='build/js/*.js'
            %}
                <script src=\"{{ asset_url }}\"></script>
            {% endjavascripts %}
        {% endblock %}
        <title>
        {% block sonata_head_title %}
            {{ 'Admin'|trans({}, 'SonataAdminBundle') }}

            {% if _title is not empty %}
                {{ _title|raw }}
            {% else %}
                {% if action is defined %}
                    -
                    {% for menu in admin.breadcrumbs(action) %}
                        {% if not loop.first %}
                            {%  if loop.index != 2 %}
                                &gt;
                            {% endif %}

                            {{ menu.label }}
                        {% endif %}
                    {% endfor %}
                {% endif %}
            {% endif%}
        {% endblock %}
        </title>
    </head>
    <body {% block body_attributes %}class=\"sonata-bc skin-black fixed\"{% endblock %}>

    <div class=\"wrapper\">

        {% block sonata_header %}
            <header class=\"main-header\">
                {% block sonata_header_noscript_warning %}
                    <noscript>
                        <div class=\"noscript-warning\">
                            {{ 'noscript_warning'|trans({}, 'SonataAdminBundle') }}
                        </div>
                    </noscript>
                {% endblock %}
                {% block logo %}
                    {% spaceless %}
                        <a class=\"logo\" href=\"{{ path('sonata_admin_dashboard') }}\">
                            {% if 'single_image' == sonata_admin.adminPool.getOption('title_mode') or 'both' == sonata_admin.adminPool.getOption('title_mode') %}
                                <img src=\"{{ asset(sonata_admin.adminPool.titlelogo) }}\" alt=\"{{ sonata_admin.adminPool.title }}\">
                            {% endif %}
                            {% if 'single_text' == sonata_admin.adminPool.getOption('title_mode') or 'both' == sonata_admin.adminPool.getOption('title_mode') %}
                                <span>{{ sonata_admin.adminPool.title }}</span>
                            {% endif %}
                        </a>
                    {% endspaceless %}
                {% endblock %}
                {% block sonata_nav %}
                    <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                        <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                            <span class=\"sr-only\">Toggle navigation</span>
                        </a>

                        <div class=\"navbar-left\">
                            {% block sonata_breadcrumb %}
                                <div class=\"hidden-xs\">
                                    {% if _breadcrumb is not empty or action is defined %}
                                        <ol class=\"nav navbar-top-links breadcrumb\">
                                            {% if _breadcrumb is empty %}
                                                {% if action is defined %}
                                                    {% for menu in admin.breadcrumbs(action) %}
                                                        {% if not loop.last  %}
                                                            <li>
                                                                {% if menu.uri is not empty %}
                                                                    <a href=\"{{ menu.uri }}\">{{ menu.label|raw }}</a>
                                                                {% else %}
                                                                    {{ menu.label }}
                                                                {% endif %}
                                                            </li>
                                                        {% else %}
                                                            <li class=\"active\"><span>{{ menu.label }}</span></li>
                                                        {% endif %}
                                                    {% endfor %}
                                                {% endif %}
                                            {% else %}
                                                {{ _breadcrumb|raw }}
                                            {% endif %}
                                        </ol>
                                    {% endif %}
                                </div>
                            {% endblock sonata_breadcrumb %}
                        </div>

                        {% block sonata_top_nav_menu %}
                            <div class=\"navbar-custom-menu\">
                                <ul class=\"nav navbar-nav\">
                                    <li class=\"dropdown\">
                                        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                            <i class=\"fa fa-plus-square fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>
                                        </a>
                                        {% include sonata_admin.adminPool.getTemplate('add_block') %}
                                    </li>
                                    <li class=\"dropdown user-menu\">
                                        <a href=\"{{ url('homepage') }}\">
                                            {#<i class=\"fa fa-user fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>#}
                                            <i class=\"fa fa-sitemap fa-fw\"></i>
                                        </a>
                                        {#
                                        <ul class=\"dropdown-menu dropdown-user\">
                                            {% include sonata_admin.adminPool.getTemplate('user_block') %}
                                        </ul>
                                        #}
                                    </li>
                                    
                                    {% if app.user %}
                                    <li class=\"dropdown user-menu\">
                                        <a href=\"{{ url('admin_user_user_edit', {'id':app.user.id}) }}\">
                                        <i class=\"fa fa-user fa-fw\"></i>
                                        </a>
                                    </li>
                                    {% endif %}

                                    <li class=\"dropdown user-menu\">
                                        <a href=\"{{ url('sonata_user_security_logout') }}\">
                                        <i class=\"fa fa-sign-out fa-fw\"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        {% endblock %}
                    </nav>
                {% endblock sonata_nav %}
            </header>
        {% endblock sonata_header %}

        {% block sonata_wrapper %}
            {% block sonata_left_side %}
                <aside class=\"main-sidebar\">
                    <section class=\"sidebar\">
                        {% block sonata_side_nav %}
                            {% block sonata_sidebar_search %}
                                {% if app.user and is_granted('ROLE_SONATA_ADMIN') %}
                                {#
                                    <form action=\"{{ path('sonata_admin_search') }}\" method=\"GET\" class=\"sidebar-form\" role=\"search\">
                                        <div class=\"input-group custom-search-form\">
                                            <input type=\"text\" name=\"q\" value=\"{{ app.request.get('q') }}\" class=\"form-control\" placeholder=\"{{ 'search_placeholder'|trans({}, 'SonataAdminBundle') }}\">
                                                <span class=\"input-group-btn\">
                                                    <button class=\"btn btn-flat\" type=\"submit\">
                                                        <i class=\"fa fa-search\"></i>
                                                    </button>
                                                </span>
                                        </div>
                                    </form>
                                #}
                                {% endif %}
                            {% endblock sonata_sidebar_search %}

                            {% block side_bar_before_nav %} {% endblock %}
                            {% block side_bar_nav %}
                                {% if app.user and is_granted('ROLE_SONATA_ADMIN') %}
                                    {{ knp_menu_render('sonata_admin_sidebar', {template: sonata_admin.adminPool.getTemplate('knp_menu_template')}) }}
                                {% endif %}
                            {% endblock side_bar_nav %}
                            {% block side_bar_after_nav %}
                                <p class=\"text-center small\" style=\"border-top: 1px solid #444444; padding-top: 10px\">
                                    {% block side_bar_after_nav_content %}
                                        {#<a href=\"https://sonata-project.org\" rel=\"noreferrer\" target=\"_blank\">sonata project</a>#}
                                    {% endblock %}
                                </p>
                            {% endblock %}
                        {% endblock sonata_side_nav %}
                    </section>
                </aside>
            {% endblock sonata_left_side %}

            <div class=\"content-wrapper\">
                {% block sonata_page_content %}
                    <section class=\"content-header\">

                        {% block sonata_page_content_header %}
                            {% block sonata_page_content_nav %}
                                {% if _tab_menu is not empty or _actions is not empty or _list_filters_actions is not empty %}
                                    <nav class=\"navbar navbar-default\" role=\"navigation\">
                                        <div class=\"container-fluid\">
                                            {% block tab_menu_navbar_header %}
                                                {% if _navbar_title is not empty %}
                                                    <div class=\"navbar-header\">
                                                        <a class=\"navbar-brand\" href=\"#\">{{ _navbar_title|raw }}</a>
                                                    </div>
                                                {% endif %}
                                            {% endblock %}

                                            <div class=\"navbar-collapse\">
                                                <div class=\"navbar-left\">
                                                    {% if _tab_menu is not empty %}
                                                        {{ _tab_menu|raw }}
                                                    {% endif %}
                                                </div>

                                                {% if admin is defined and action is defined and action == 'list' and admin.listModes|length > 1 %}
                                                    <div class=\"nav navbar-right btn-group\">
                                                        {% for mode, settings in admin.listModes %}
                                                            <a href=\"{{ admin.generateUrl('list', app.request.query.all|merge({_list_mode: mode})) }}\" class=\"btn btn-default navbar-btn btn-sm{% if admin.getListMode() == mode %} active{% endif %}\"><i class=\"{{ settings.class }}\"></i></a>
                                                        {% endfor %}
                                                    </div>
                                                {% endif %}

                                                {% block sonata_admin_content_actions_wrappers %}
                                                    {% if _actions|replace({ '<li>': '', '</li>': '' })|trim is not empty %}
                                                        <ul class=\"nav navbar-nav navbar-right\">
                                                        {% if _actions|split('</a>')|length > 2 %}
                                                            <li class=\"dropdown sonata-actions\">
                                                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">{{ 'link_actions'|trans({}, 'SonataAdminBundle') }} <b class=\"caret\"></b></a>
                                                                <ul class=\"dropdown-menu\" role=\"menu\">
                                                                    {{ _actions|raw }}
                                                                </ul>
                                                            </li>
                                                        {% else %}
                                                            {{ _actions|raw }}
                                                        {% endif %}
                                                        </ul>
                                                    {% endif %}
                                                {% endblock sonata_admin_content_actions_wrappers %}

                                                {% if _list_filters_actions is not empty %}
                                                    {{ _list_filters_actions|raw }}
                                                {% endif %}
                                            </div>
                                        </div>
                                    </nav>
                                {% endif %}
                            {% endblock sonata_page_content_nav %}
                        {% endblock sonata_page_content_header %}
                    </section>

                    <section class=\"content\">
                        {% block sonata_admin_content %}

                            {% block notice %}
                                {% include 'SonataCoreBundle:FlashMessage:render.html.twig' %}
                            {% endblock notice %}

                            {% if _preview is not empty %}
                                <div class=\"sonata-ba-preview\">{{ _preview|raw }}</div>
                            {% endif %}

                            {% if _content is not empty %}
                                <div class=\"sonata-ba-content\">{{ _content|raw }}</div>
                            {% endif %}

                            {% if _show is not empty %}
                                <div class=\"sonata-ba-show\">{{ _show|raw }}</div>
                            {% endif %}

                            {% if _form is not empty %}
                                <div class=\"sonata-ba-form\">{{ _form|raw }}</div>
                            {% endif %}

                            {% if _list_table is not empty or _list_filters is not empty %}
                                {% if _list_filters|trim %}
                                    <div class=\"row\">
                                        {{ _list_filters|raw }}
                                    </div>
                                {% endif %}

                                <div class=\"row\">
                                    {{ _list_table|raw }}
                                </div>

                            {% endif %}
                        {% endblock sonata_admin_content %}
                    </section>
                {% endblock sonata_page_content %}
            </div>
        {% endblock sonata_wrapper %}
    </div>

    {% if sonata_admin.adminPool.getOption('use_bootlint') %}
        {% block bootlint %}
            {# Bootlint - https://github.com/twbs/bootlint#in-the-browser #}
            <script type=\"text/javascript\">
                javascript:(function(){var s=document.createElement(\"script\");s.onload=function(){bootlint.showLintReportForCurrentDocument([], {hasProblems: false, problemFree: false});};s.src=\"https://maxcdn.bootstrapcdn.com/bootlint/latest/bootlint.min.js\";document.body.appendChild(s)})();
            </script>
        {% endblock %}
    {% endif %}

    </body>
</html>
", ":admin:standard_layout.html.twig", "/var/www/symfony2/app/Resources/views/admin/standard_layout.html.twig");
    }
}
