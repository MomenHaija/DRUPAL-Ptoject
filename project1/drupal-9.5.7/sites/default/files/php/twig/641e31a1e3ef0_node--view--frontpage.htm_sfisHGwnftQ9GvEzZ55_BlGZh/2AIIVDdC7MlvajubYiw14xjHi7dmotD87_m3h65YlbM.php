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

/* themes/theme__100249/templates/node--view--frontpage.html.twig */
class __TwigTemplate_29e63ff5dc17d8221f8ab97e4c3a7f83 extends \Twig\Template
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
        $context["classes"] = [0 => ((twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "isSticky", [], "method", false, false, true, 1)) ? ("ttnode--sticky") : (""))];
        echo " 
<article id=\"node-";
        // line 2
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "id", [], "any", false, false, true, 2), 2, $this->source), "html", null, true);
        echo "\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "ttr_post", 1 => ($context["classes"] ?? null)], "method", false, false, true, 2), 2, $this->source), "html", null, true);
        echo ">
<header>
<div class=\"ttr_post_content_inner\">
<div class=\"ttr_post_inner_box\">
";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 6, $this->source), "html", null, true);
        echo "
";
        // line 7
        if ( !($context["page"] ?? null)) {
            // line 8
            echo "<h2";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "ttr_post_title"], "method", false, false, true, 8), 8, $this->source), "html", null, true);
            echo ">
";
            // line 9
            $context["theme_path"] = ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 9, $this->source) . $this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath());
            // line 10
            echo "<a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 10, $this->source), "html", null, true);
            echo "\">
";
            // line 11
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 11, $this->source), "html", null, true);
            echo "
</a>
</h2>
";
        }
        // line 15
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 15, $this->source), "html", null, true);
        echo "
</div>
<div class=\"ttr_article\">
";
        // line 18
        if (($context["display_submitted"] ?? null)) {
            // line 19
            echo "<div  class=\"postedon node_meta\">
<span  class=\"meta\" ";
            // line 20
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_attributes"] ?? null), 20, $this->source), "html", null, true);
            echo ">
";
            // line 21
            echo t("Posted on", array());
            echo " 
<img src=\"";
            // line 22
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl(($this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath() . "/images/datebutton.png")), "html", null, true);
            echo "\" alt=\"date\" />
";
            // line 23
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["date"] ?? null), 23, $this->source), "html", null, true);
            echo " ";
            echo t("by", array());
            echo " 
<img src=\"";
            // line 24
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl(($this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath() . "/images/authorbutton.png")), "html", null, true);
            echo "\" alt=\"author\" />
";
            // line 25
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_name"] ?? null), 25, $this->source), "html", null, true);
            echo "
</span>";
            // line 26
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["metadata"] ?? null), 26, $this->source), "html", null, true);
            echo "
</div>
";
        }
        // line 29
        echo "<div  id=\"main-content\" class=\"postcontent\" ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_attributes"] ?? null), 29, $this->source), "html", null, true);
        echo ">
";
        // line 30
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "comments", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
        echo "
";
        // line 31
        $context["columncounter"] = (($context["columncounter"] ?? null) + 1);
        // line 32
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 32, $this->source), "html", null, true);
        echo "
<div style=\"clear:both;\"></div>
</div>
</div>
</div>
</header>
</article>
";
    }

    public function getTemplateName()
    {
        return "themes/theme__100249/templates/node--view--frontpage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 32,  129 => 31,  125 => 30,  120 => 29,  114 => 26,  110 => 25,  106 => 24,  100 => 23,  96 => 22,  92 => 21,  88 => 20,  85 => 19,  83 => 18,  77 => 15,  70 => 11,  65 => 10,  63 => 9,  58 => 8,  56 => 7,  52 => 6,  43 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/theme__100249/templates/node--view--frontpage.html.twig", "C:\\xampp\\htdocs\\project1\\drupal-9.5.7\\themes\\theme__100249\\templates\\node--view--frontpage.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 7, "trans" => 21);
        static $filters = array("escape" => 2);
        static $functions = array("active_theme_path" => 9, "file_url" => 22);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'trans'],
                ['escape'],
                ['active_theme_path', 'file_url']
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
