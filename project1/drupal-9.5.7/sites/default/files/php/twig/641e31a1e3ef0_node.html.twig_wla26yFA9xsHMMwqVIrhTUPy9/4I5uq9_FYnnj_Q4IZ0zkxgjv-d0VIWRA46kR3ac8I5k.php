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

/* themes/theme__100249/templates/node.html.twig */
class __TwigTemplate_80855289906ed8609beb362bb1e0c39f extends \Twig\Template
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
        // line 2
        $context["body_classes"] = [0 => ((        // line 3
($context["logged_in"] ?? null)) ? ("user-logged-in") : ("")), 1 => (( !        // line 4
($context["root_path"] ?? null)) ? ("path-frontpage") : (("path-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["root_path"] ?? null), 4, $this->source))))), 2 => ((        // line 5
($context["node_type"] ?? null)) ? (("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["node_type"] ?? null), 5, $this->source)))) : ("")), 3 => ((        // line 6
($context["db_offline"] ?? null)) ? ("db-offline") : (""))];
        // line 9
        $context["type"] = twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "getType", [], "any", false, false, true, 9);
        // line 10
        echo "<div class=\"ttr_post\">
<div class=\"ttr_post_content_inner\">
<div class=\"ttr_post_inner_box\">
";
        // line 13
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 13, $this->source), "html", null, true);
        echo "
";
        // line 14
        if ((((($context["type"] ?? null) == "page") &&  !($context["page"] ?? null)) || ((($context["type"] ?? null) == "article") && ($context["page"] ?? null)))) {
            // line 15
            echo "<h2";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "ttr_post_title"], "method", false, false, true, 15), 15, $this->source), "html", null, true);
            echo ">
<a href=\"";
            // line 16
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 16, $this->source), "html", null, true);
            echo "\">
";
            // line 17
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 17, $this->source), "html", null, true);
            echo "
</a>
</h2>
";
        }
        // line 21
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 21, $this->source), "html", null, true);
        echo "
</div>
<div class=\"ttr_article\">
";
        // line 24
        if (($context["display_submitted"] ?? null)) {
            // line 25
            echo "<div  class=\"postedon node_meta\">
<span  class=\"meta\" ";
            // line 26
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_attributes"] ?? null), 26, $this->source), "html", null, true);
            echo ">
";
            // line 27
            echo t("Posted on", array());
            echo " 
<img src=\"";
            // line 28
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl(($this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath() . "/images/datebutton.png")), "html", null, true);
            echo "\" alt=\"date\" />
";
            // line 29
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["date"] ?? null), 29, $this->source), "html", null, true);
            echo " ";
            echo t("by", array());
            echo " 
<img src=\"";
            // line 30
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl(($this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath() . "/images/authorbutton.png")), "html", null, true);
            echo "\" alt=\"author\" />
";
            // line 31
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_name"] ?? null), 31, $this->source), "html", null, true);
            echo "
</span>";
            // line 32
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["metadata"] ?? null), 32, $this->source), "html", null, true);
            echo "
</div>
";
        }
        // line 35
        echo "<div  id=\"main-content\" class=\"postcontent\" ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_attributes"] ?? null), 35, $this->source), "html", null, true);
        echo ">
";
        // line 36
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "comments", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
        echo "
";
        // line 37
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 37, $this->source), "html", null, true);
        echo "
";
        // line 38
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "comments", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
        echo "
</div>
<div style=\"clear:both;\"></div>
</div>
</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/theme__100249/templates/node.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 38,  126 => 37,  122 => 36,  117 => 35,  111 => 32,  107 => 31,  103 => 30,  97 => 29,  93 => 28,  89 => 27,  85 => 26,  82 => 25,  80 => 24,  74 => 21,  67 => 17,  63 => 16,  58 => 15,  56 => 14,  52 => 13,  47 => 10,  45 => 9,  43 => 6,  42 => 5,  41 => 4,  40 => 3,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/theme__100249/templates/node.html.twig", "C:\\xampp\\htdocs\\project1\\drupal-9.5.7\\themes\\theme__100249\\templates\\node.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 2, "if" => 14, "trans" => 27);
        static $filters = array("clean_class" => 4, "escape" => 13);
        static $functions = array("file_url" => 28, "active_theme_path" => 28);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'trans'],
                ['clean_class', 'escape'],
                ['file_url', 'active_theme_path']
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
