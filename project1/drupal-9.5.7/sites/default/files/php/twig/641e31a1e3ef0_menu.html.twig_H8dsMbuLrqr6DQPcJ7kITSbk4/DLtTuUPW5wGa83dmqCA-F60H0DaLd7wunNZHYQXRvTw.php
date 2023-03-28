<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/theme__100249/templates/menu.html.twig */
class __TwigTemplate_eeb7e9f69941ba855e3042d93e8f1aba extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 2
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0], 2, $context, $this->getSourceContext()));
        echo "
";
    }

    // line 3
    public function macro_menu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 4
            $context["justify"] = false;
            // line 5
            $macros["menus"] = $this;
            // line 6
            if (($context["items"] ?? null)) {
                // line 7
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    echo "  
";
                    // line 8
                    if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 8), "class", [], "any", false, false, true, 8) == "ttr_menu_items_parent_link_active") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 8), "class", [], "any", false, false, true, 8) == "ttr_menu_items_parent_link_active_arrow dropdown-toggle"))) {
                        echo " 
";
                        // line 9
                        $context["list_class"] = " ttr_menu_items_parent active";
                        echo " 
";
                    } elseif (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 10
$context["item"], "attributes", [], "any", false, false, true, 10), "class", [], "any", false, false, true, 10) == "ttr_menu_items_parent_link") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 10), "class", [], "any", false, false, true, 10) == "ttr_menu_items_parent_link_arrow dropdown-toggle"))) {
                        echo " 
";
                        // line 11
                        $context["list_class"] = " ttr_menu_items_parent";
                        echo " 
";
                    } elseif (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 12
$context["item"], "attributes", [], "any", false, false, true, 12), "class", [], "any", false, false, true, 12) == "ttr_vmenu_items_parent_link_active") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 12), "class", [], "any", false, false, true, 12) == "ttr_vmenu_items_parent_link_active_arrow dropdown-toggle"))) {
                        echo " 
";
                        // line 13
                        $context["list_class"] = " ttr_vmenu_items_parent active";
                        echo " 
";
                    } elseif (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 14
$context["item"], "attributes", [], "any", false, false, true, 14), "class", [], "any", false, false, true, 14) == "ttr_vmenu_items_parent_link") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 14), "class", [], "any", false, false, true, 14) == "ttr_vmenu_items_parent_link_arrow dropdown-toggle"))) {
                        echo " 
";
                        // line 15
                        $context["list_class"] = " ttr_vmenu_items_parent";
                        echo " 
";
                    }
                    // line 16
                    echo " 
";
                    // line 17
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 17)) {
                        // line 18
                        echo "<li class=\" ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["list_class"] ?? null), 18, $this->source) . " dropdown"), "html", null, true);
                        echo "\">
<a  href=\"";
                        // line 19
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
                        echo "\" data-toggle=\"dropdown\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
                        echo ">
<span class=\"menuchildicon\"></span>";
                        // line 20
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
                        echo "<span class=\"menuarrowicon  \"></span></a>
<hr class=\" horiz_separator\"/>
";
                        // line 22
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_level1_menu_links", [twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 22), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)], 22, $context, $this->getSourceContext()));
                        echo "
";
                    } else {
                        // line 24
                        echo "<li class=\" ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["list_class"] ?? null), 24, $this->source), "html", null, true);
                        echo " \">
<a  href=\"";
                        // line 25
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
                        echo "\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
                        echo ">
<span class=\"menuchildicon\"></span>";
                        // line 26
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
                        echo "</a>
<hr class=\" horiz_separator\"/>
";
                    }
                    // line 29
                    echo "</li>
";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 33
    public function macro_level1_menu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 34
            $context["magmenu"] = false;
            // line 35
            $macros["menus"] = $this;
            // line 36
            if (($context["items"] ?? null)) {
                // line 37
                echo "<ul class=\"child dropdown-menu menu-dropdown-styles\"role=\"menu\">
";
                // line 38
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    echo " 
";
                    // line 39
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 39)) {
                        echo " 
";
                        // line 40
                        if (($context["magmenu"] ?? null)) {
                            // line 41
                            echo "<li class=\"span1 unstyled dropdown dropdown-submenu\">
<a class=\"subchild dropdown-toggle\" data-toggle=\"dropdown\" href=\"";
                            // line 42
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
                            echo "\" tabindex=\"0\">
<span class=\"menuchildicon\"></span>";
                            // line 43
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
                            echo "<span class=\"menuarrowicon\"></span></a>
<hr class=\"horiz_separator\"/>
";
                        } else {
                            // line 46
                            echo "<li class=\"dropdown dropdown-submenu\">
<a class=\"subchild dropdown-toggle\" data-toggle=\"dropdown\" href=\"";
                            // line 47
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
                            echo "\" tabindex=\"0\">
<span class=\"menuchildicon\"></span>";
                            // line 48
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
                            echo "<span class=\"menuarrowicon\"></span></a>
<hr class=\"horiz_separator\"/>
";
                        }
                        // line 51
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_level2_menu_links", [twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 51), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)], 51, $context, $this->getSourceContext()));
                        echo "
</li>
";
                    } else {
                        // line 54
                        if (($context["magmenu"] ?? null)) {
                            // line 55
                            echo "<li class=\"span1 unstyled\">
";
                        } else {
                            // line 57
                            echo "<li>
";
                        }
                        // line 59
                        echo "<a href=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
                        echo "\" ><span class=\"menuchildicon\"></span>";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
                        echo "<span class=\"menuarrowicon  \"></span></a>
<hr class=\"separator\"/>
</li>
";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 64
                echo "</ul>
";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 67
    public function macro_level2_menu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 68
            $context["magmenu"] = false;
            // line 69
            $context["menuh"] = false;
            // line 70
            $macros["menus"] = $this;
            // line 71
            if (($context["items"] ?? null)) {
                // line 72
                if (($context["magmenu"] ?? null)) {
                    // line 73
                    echo "<ul role=\"menu\" >
";
                } elseif (                // line 74
($context["menuh"] ?? null)) {
                    // line 75
                    echo "<ul class=\"sub-menu\" role=\"menu\">
";
                } else {
                    // line 77
                    echo "<ul class=\"dropdown-menu sub-menu menu-dropdown-styles \" role=\"menu\">
";
                }
                // line 79
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    echo " 
";
                    // line 80
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 80)) {
                        // line 81
                        echo "<li class=\"dropdown dropdown-submenu\">
<a class=\"subchild dropdown-toggle\" data-toggle=\"dropdown\" href=\"";
                        // line 82
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 82), 82, $this->source), "html", null, true);
                        echo "\"tabindex=\"0\">
<span class=\"menuchildicon\"></span>";
                        // line 83
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 83), 83, $this->source), "html", null, true);
                        echo "<span class=\"menuarrowicon\"></span></a>
<hr class=\"horiz_separator\"/>
";
                        // line 85
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_level2_menu_links", [twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 85), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)], 85, $context, $this->getSourceContext()));
                        echo "
</li>
";
                    } else {
                        // line 88
                        echo "<li>
<a href=\"";
                        // line 89
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 89), 89, $this->source), "html", null, true);
                        echo "\" ><span class=\"menuchildicon\"></span>";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 89), 89, $this->source), "html", null, true);
                        echo "<span class=\"menuarrowicon  \"></span></a>
<hr class=\"horiz_separator\"/>
</li>
";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 94
                echo "</ul>
";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "themes/theme__100249/templates/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  348 => 94,  335 => 89,  332 => 88,  326 => 85,  321 => 83,  317 => 82,  314 => 81,  312 => 80,  306 => 79,  302 => 77,  298 => 75,  296 => 74,  293 => 73,  291 => 72,  289 => 71,  287 => 70,  285 => 69,  283 => 68,  268 => 67,  257 => 64,  243 => 59,  239 => 57,  235 => 55,  233 => 54,  227 => 51,  221 => 48,  217 => 47,  214 => 46,  208 => 43,  204 => 42,  201 => 41,  199 => 40,  195 => 39,  189 => 38,  186 => 37,  184 => 36,  182 => 35,  180 => 34,  165 => 33,  150 => 29,  144 => 26,  138 => 25,  133 => 24,  128 => 22,  123 => 20,  117 => 19,  112 => 18,  110 => 17,  107 => 16,  102 => 15,  98 => 14,  94 => 13,  90 => 12,  86 => 11,  82 => 10,  78 => 9,  74 => 8,  68 => 7,  66 => 6,  64 => 5,  62 => 4,  47 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/theme__100249/templates/menu.html.twig", "C:\\xampp\\htdocs\\project1\\drupal-9.5.7\\themes\\theme__100249\\templates\\menu.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 1, "macro" => 3, "set" => 4, "if" => 6, "for" => 7);
        static $filters = array("escape" => 18);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'set', 'if', 'for'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
