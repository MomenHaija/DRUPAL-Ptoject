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

/* themes/theme__100249/templates/page.html.twig */
class __TwigTemplate_42fd74d41a4903f78aeee7b7ed24eb68 extends \Twig\Template
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
        $context["theme_path"] = ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 1, $this->source) . $this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath());
        // line 2
        $context["theme_path1"] = ($this->sandbox->ensureToStringAllowed(($context["theme_path"] ?? null), 2, $this->source) . "/content");
        // line 3
        echo "<div class=\"ttr_banner_menu\">
";
        // line 5
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "menuabovecolumn1", [], "any", false, false, true, 5) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "menuabovecolumn2", [], "any", false, false, true, 5)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "menuabovecolumn3", [], "any", false, false, true, 5)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "menuabovecolumn4", [], "any", false, false, true, 5))) {
            // line 7
            echo "<div class=\"ttr_banner_menu_inner_above_widget_container\">
<div class=\"ttr_banner_menu_inner_above0 container row\">
";
            // line 9
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "menuabovecolumn1", [], "any", false, false, true, 9);
            // line 10
            if (($context["showcolumn"] ?? null)) {
                // line 11
                echo "<div class=\"cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"menuabovecolumn1\">
";
                // line 13
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "menuabovecolumn1", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 17
                echo "<div class=\"cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 21
            echo "<div class=\" visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 22
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "menuabovecolumn2", [], "any", false, false, true, 22);
            // line 23
            if (($context["showcolumn"] ?? null)) {
                // line 24
                echo "<div class=\"cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"menuabovecolumn2\">
";
                // line 26
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "menuabovecolumn2", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 30
                echo "<div class=\"cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 34
            echo "<div class=\" visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 35
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "menuabovecolumn3", [], "any", false, false, true, 35);
            // line 36
            if (($context["showcolumn"] ?? null)) {
                // line 37
                echo "<div class=\"cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"menuabovecolumn3\">
";
                // line 39
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "menuabovecolumn3", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 43
                echo "<div class=\"cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 47
            echo "<div class=\" visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 48
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "menuabovecolumn4", [], "any", false, false, true, 48);
            // line 49
            if (($context["showcolumn"] ?? null)) {
                // line 50
                echo "<div class=\"cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"menuabovecolumn4\">
";
                // line 52
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "menuabovecolumn4", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 56
                echo "<div class=\"cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 60
            echo "<div class=\" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
<div class=\" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
</div>
</div>
<div style=\"clear: both;\"></div>
";
        }
        // line 66
        echo "</div>
<div id=\"ttr_menu\"> 
<div class=\"margin_collapsetop\"></div>
<nav class=\"navbar-default navbar-expand-md navbar\">
<div id=\"ttr_menu_inner_in\"> 
<div class=\"ttr_menu_element_alignment container\">
<div class=\"ttr_images_container\">
<div class=\"ttr_menu_logo\">
<a href=\"\">
<img src=\"";
        // line 75
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["theme_path"] ?? null), 75, $this->source) . "/menulogo.png"), "html", null, true);
        echo "\" alt=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
        echo "\"class=\"\" />
</a>
</div>
</div>
</div>
<div class=\"ttr_images_container\">
</div>
<div id=\"navigationmenu\">
<div class=\"navbar-header\">
<button id=\"nav-expander\" data-target=\".navbar-collapse\" data-toggle=\"collapse\" class=\"navbar-toggle\" type=\"button\">
<span class=\"ttr_menu_toggle_button\">
<span class=\"sr-only\">
</span>
<span class=\"icon-bar\">
</span>
<span class=\"icon-bar\">
</span>
<span class=\"icon-bar\">
</span>
</span>
<span class=\"ttr_menu_button_text\">
Menu
</span>
</button>
</div>
<div class=\"menu-center collapse navbar-collapse\">
";
        // line 101
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 101), 101, $this->source), "html", null, true);
        echo "
</div>
</div>
</div>
</nav>
</div>
<div class=\"ttr_banner_menu\">
";
        // line 109
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "menubelowcolumn1", [], "any", false, false, true, 109) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "menubelowcolumn2", [], "any", false, false, true, 109)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "menubelowcolumn3", [], "any", false, false, true, 109)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "menubelowcolumn4", [], "any", false, false, true, 109))) {
            // line 111
            echo "<div class=\"ttr_banner_menu_inner_below_widget_container\">
<div class=\"ttr_banner_menu_inner_below0 container row\">
";
            // line 113
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "menubelowcolumn1", [], "any", false, false, true, 113);
            // line 114
            if (($context["showcolumn"] ?? null)) {
                // line 115
                echo "<div class=\"cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"menubelowcolumn1\">
";
                // line 117
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "menubelowcolumn1", [], "any", false, false, true, 117), 117, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 121
                echo "<div class=\"cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 125
            echo "<div class=\" visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 126
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "menubelowcolumn2", [], "any", false, false, true, 126);
            // line 127
            if (($context["showcolumn"] ?? null)) {
                // line 128
                echo "<div class=\"cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"menubelowcolumn2\">
";
                // line 130
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "menubelowcolumn2", [], "any", false, false, true, 130), 130, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 134
                echo "<div class=\"cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 138
            echo "<div class=\" visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 139
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "menubelowcolumn3", [], "any", false, false, true, 139);
            // line 140
            if (($context["showcolumn"] ?? null)) {
                // line 141
                echo "<div class=\"cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"menubelowcolumn3\">
";
                // line 143
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "menubelowcolumn3", [], "any", false, false, true, 143), 143, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 147
                echo "<div class=\"cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 151
            echo "<div class=\" visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 152
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "menubelowcolumn4", [], "any", false, false, true, 152);
            // line 153
            if (($context["showcolumn"] ?? null)) {
                // line 154
                echo "<div class=\"cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"menubelowcolumn4\">
";
                // line 156
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "menubelowcolumn4", [], "any", false, false, true, 156), 156, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 160
                echo "<div class=\"cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 164
            echo "<div class=\" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
<div class=\" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
</div>
</div>
<div style=\"clear: both;\"></div>
";
        }
        // line 170
        echo "</div>
<div class=\"ttr_banner_slideshow\">
";
        // line 173
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowabovecolumn1", [], "any", false, false, true, 173) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowabovecolumn2", [], "any", false, false, true, 173)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowabovecolumn3", [], "any", false, false, true, 173)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowabovecolumn4", [], "any", false, false, true, 173))) {
            // line 175
            echo "<div class=\"ttr_banner_slideshow_inner_above_widget_container\">
<div class=\"ttr_banner_slideshow_inner_above0 container row\">
";
            // line 177
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowabovecolumn1", [], "any", false, false, true, 177);
            // line 178
            if (($context["showcolumn"] ?? null)) {
                // line 179
                echo "<div class=\"cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"slideshowabovecolumn1\">
";
                // line 181
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowabovecolumn1", [], "any", false, false, true, 181), 181, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 185
                echo "<div class=\"cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 189
            echo "<div class=\" visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 190
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowabovecolumn2", [], "any", false, false, true, 190);
            // line 191
            if (($context["showcolumn"] ?? null)) {
                // line 192
                echo "<div class=\"cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"slideshowabovecolumn2\">
";
                // line 194
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowabovecolumn2", [], "any", false, false, true, 194), 194, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 198
                echo "<div class=\"cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 202
            echo "<div class=\" visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 203
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowabovecolumn3", [], "any", false, false, true, 203);
            // line 204
            if (($context["showcolumn"] ?? null)) {
                // line 205
                echo "<div class=\"cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"slideshowabovecolumn3\">
";
                // line 207
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowabovecolumn3", [], "any", false, false, true, 207), 207, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 211
                echo "<div class=\"cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 215
            echo "<div class=\" visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 216
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowabovecolumn4", [], "any", false, false, true, 216);
            // line 217
            if (($context["showcolumn"] ?? null)) {
                // line 218
                echo "<div class=\"cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"slideshowabovecolumn4\">
";
                // line 220
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowabovecolumn4", [], "any", false, false, true, 220), 220, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 224
                echo "<div class=\"cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 228
            echo "<div class=\" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
<div class=\" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
</div>
</div>
<div style=\"clear: both;\"></div>
";
        }
        // line 234
        echo "</div>
<div class=\"ttr_slideshow\">
<div class=\"margin_collapsetop\"></div>
<div id=\"ttr_slideshow_inner\">
<ul>
<li id=\"Slide0\" class=\"ttr_slide\" data-slideEffect=\"None\">
<div class=\"ttr_slideshow_last\">
<div class=\"ttr_slideshow_element_alignment container\" data-begintime=\"0\" data-effect=\"None\" data-easing=\"linear\" data-slide=\"None\" data-duration=\"0\">
</div>
</div>
</li>
<li id=\"Slide1\" class=\"ttr_slide\" data-slideEffect=\"None\">
<div class=\"ttr_slideshow_last\">
<div class=\"ttr_slideshow_element_alignment container\" data-begintime=\"0\" data-effect=\"None\" data-easing=\"linear\" data-slide=\"None\" data-duration=\"0\">
</div>
</div>
</li>
</ul>
</div>
<div class=\"ttr_slideshow_in\">
<div class=\"ttr_slideshow_last\">
<div class=\"ttr_slideshow_element_alignment container\">
</div>
<div id=\"nav\"></div>
<div class=\"ttr_slideshow_logo\">
</div>
<div class=\"ttr_stickyslideshowshape1\">
<div class=\"html_content\"><p style=\"text-align:Center; display:block; \"><span style=\"font-family:'Amaranth','Arial';font-size:5.714em;color:rgba(255,255,255,1);\">Best&nbsp;&nbsp;Roof Service</span></p><p style=\"margin:5px 0px 20px 0px;text-align:Center; display:block; line-height:1.79em;\"><span style=\"font-family:'Signika','Arial';font-weight:300;font-size:1.143em;color:rgba(255,255,255,1);\">Lorem ipsum dolor sit amet, test link adipiscing elit.Nullam dignissim convallis est.Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui.Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, </span></p><p style=\"text-align:Center; display:block; \"><span><a href=\"https://templatetoaster.com\" target=\"_self\" class=\"btn btn-md btn-default\">Learn More</a></span></p><p style=\"text-align:Center; display:block; \"><span></span></p></div>
</div>
</div>
</div>
</div>
<div class=\"ttr_banner_slideshow\">
";
        // line 268
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowbelowcolumn1", [], "any", false, false, true, 268) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowbelowcolumn2", [], "any", false, false, true, 268)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowbelowcolumn3", [], "any", false, false, true, 268)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowbelowcolumn4", [], "any", false, false, true, 268))) {
            // line 270
            echo "<div class=\"ttr_banner_slideshow_inner_below_widget_container\">
<div class=\"ttr_banner_slideshow_inner_below0 container row\">
";
            // line 272
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowbelowcolumn1", [], "any", false, false, true, 272);
            // line 273
            if (($context["showcolumn"] ?? null)) {
                // line 274
                echo "<div class=\"cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"slideshowbelowcolumn1\">
";
                // line 276
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowbelowcolumn1", [], "any", false, false, true, 276), 276, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 280
                echo "<div class=\"cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 284
            echo "<div class=\" visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 285
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowbelowcolumn2", [], "any", false, false, true, 285);
            // line 286
            if (($context["showcolumn"] ?? null)) {
                // line 287
                echo "<div class=\"cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"slideshowbelowcolumn2\">
";
                // line 289
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowbelowcolumn2", [], "any", false, false, true, 289), 289, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 293
                echo "<div class=\"cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 297
            echo "<div class=\" visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 298
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowbelowcolumn3", [], "any", false, false, true, 298);
            // line 299
            if (($context["showcolumn"] ?? null)) {
                // line 300
                echo "<div class=\"cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"slideshowbelowcolumn3\">
";
                // line 302
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowbelowcolumn3", [], "any", false, false, true, 302), 302, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 306
                echo "<div class=\"cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 310
            echo "<div class=\" visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 311
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowbelowcolumn4", [], "any", false, false, true, 311);
            // line 312
            if (($context["showcolumn"] ?? null)) {
                // line 313
                echo "<div class=\"cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"slideshowbelowcolumn4\">
";
                // line 315
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowbelowcolumn4", [], "any", false, false, true, 315), 315, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 319
                echo "<div class=\"cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 323
            echo "<div class=\" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
<div class=\" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
</div>
</div>
<div style=\"clear: both;\"></div>
";
        }
        // line 329
        echo "</div>
<div class=\"margin_collapsetop\"></div>
<div id=\"ttr_page\" class=\"container\">
<div id=\"ttr_content_and_sidebar_container\">
<div id=\"ttr_content\">
";
        // line 334
        $context["type"] = twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "getType", [], "any", false, false, true, 334);
        // line 335
        if ((($context["type"] ?? null) == "page")) {
            // line 336
            echo "<div id=\"ttr_html_content_margin\" class=\"container-fluid\">
";
        } else {
            // line 338
            echo "<div id=\"ttr_content_margin\" class=\"container-fluid\">
";
        }
        // line 340
        echo "<div class=\"margin_collapsetop\"></div>
";
        // line 341
        if (($context["breadcrumb"] ?? null)) {
            // line 342
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["breadcrumb"] ?? null), 342, $this->source), "html", null, true);
            echo "
";
        }
        // line 345
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttopcolumn1", [], "any", false, false, true, 345) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttopcolumn2", [], "any", false, false, true, 345)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttopcolumn3", [], "any", false, false, true, 345)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttopcolumn4", [], "any", false, false, true, 345))) {
            // line 347
            echo "<div class=\"ttr_topcolumn_widget_container\">
<div class=\"contenttopcolumn0 row\">
";
            // line 349
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttopcolumn1", [], "any", false, false, true, 349);
            // line 350
            if (($context["showcolumn"] ?? null)) {
                // line 351
                echo "<div class=\"cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"topcolumn1\">
";
                // line 353
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttopcolumn1", [], "any", false, false, true, 353), 353, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 357
                echo "<div class=\"cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 361
            echo "<div class=\" visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 362
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttopcolumn2", [], "any", false, false, true, 362);
            // line 363
            if (($context["showcolumn"] ?? null)) {
                // line 364
                echo "<div class=\"cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"topcolumn2\">
";
                // line 366
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttopcolumn2", [], "any", false, false, true, 366), 366, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 370
                echo "<div class=\"cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 374
            echo "<div class=\" visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 375
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttopcolumn3", [], "any", false, false, true, 375);
            // line 376
            if (($context["showcolumn"] ?? null)) {
                // line 377
                echo "<div class=\"cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"topcolumn3\">
";
                // line 379
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttopcolumn3", [], "any", false, false, true, 379), 379, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 383
                echo "<div class=\"cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 387
            echo "<div class=\" visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 388
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttopcolumn4", [], "any", false, false, true, 388);
            // line 389
            if (($context["showcolumn"] ?? null)) {
                // line 390
                echo "<div class=\"cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"topcolumn4\">
";
                // line 392
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttopcolumn4", [], "any", false, false, true, 392), 392, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 396
                echo "<div class=\"cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 400
            echo "<div class=\" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
<div class=\" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
</div>
</div>
<div style=\"clear: both;\"></div>
";
        }
        // line 406
        echo "<div style=\"clear:both;\">
</div>
";
        // line 408
        if (($context["tabs"] ?? null)) {
            // line 409
            echo "<div style=\"clear:both;\" class=\"tabs\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tabs"] ?? null), 409, $this->source), "html", null, true);
            echo "</div>
";
        }
        // line 411
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 411), 411, $this->source), "html", null, true);
        echo "
";
        // line 412
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "messages", [], "any", false, false, true, 412), 412, $this->source), "html", null, true);
        echo "
";
        // line 413
        if (($context["action_links"] ?? null)) {
            // line 414
            echo "<ul class=\"action-links\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["action_links"] ?? null), 414, $this->source), "html", null, true);
            echo "</ul>";
        }
        // line 415
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 415), 415, $this->source), "html", null, true);
        echo "
";
        // line 417
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottomcolumn1", [], "any", false, false, true, 417) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottomcolumn2", [], "any", false, false, true, 417)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottomcolumn3", [], "any", false, false, true, 417)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottomcolumn4", [], "any", false, false, true, 417))) {
            // line 419
            echo "<div class=\"ttr_bottomcolumn_widget_container\">
<div class=\"contentbottomcolumn0 row\">
";
            // line 421
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottomcolumn1", [], "any", false, false, true, 421);
            // line 422
            if (($context["showcolumn"] ?? null)) {
                // line 423
                echo "<div class=\"cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"bottomcolumn1\">
";
                // line 425
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottomcolumn1", [], "any", false, false, true, 425), 425, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 429
                echo "<div class=\"cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 433
            echo "<div class=\" visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 434
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottomcolumn2", [], "any", false, false, true, 434);
            // line 435
            if (($context["showcolumn"] ?? null)) {
                // line 436
                echo "<div class=\"cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"bottomcolumn2\">
";
                // line 438
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottomcolumn2", [], "any", false, false, true, 438), 438, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 442
                echo "<div class=\"cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 446
            echo "<div class=\" visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 447
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottomcolumn3", [], "any", false, false, true, 447);
            // line 448
            if (($context["showcolumn"] ?? null)) {
                // line 449
                echo "<div class=\"cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"bottomcolumn3\">
";
                // line 451
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottomcolumn3", [], "any", false, false, true, 451), 451, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 455
                echo "<div class=\"cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 459
            echo "<div class=\" visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 460
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottomcolumn4", [], "any", false, false, true, 460);
            // line 461
            if (($context["showcolumn"] ?? null)) {
                // line 462
                echo "<div class=\"cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"bottomcolumn4\">
";
                // line 464
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottomcolumn4", [], "any", false, false, true, 464), 464, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 468
                echo "<div class=\"cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 472
            echo "<div class=\" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
<div class=\" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
</div>
</div>
<div style=\"clear: both;\"></div>
";
        }
        // line 478
        echo "<div class=\"margin_collapsetop\"></div>
</div> 
</div> 
<div style=\"clear:both;\">
</div>
</div>
</div>
<div class=\"footer-widget-area\">
<div class=\"footer-widget-area_left_border_image\">
<div class=\"footer-widget-area_right_border_image\">
<div class=\"footer-widget-area_inner\">
";
        // line 490
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerabovecolumn1", [], "any", false, false, true, 490) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerabovecolumn2", [], "any", false, false, true, 490)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerabovecolumn3", [], "any", false, false, true, 490)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerabovecolumn4", [], "any", false, false, true, 490))) {
            // line 492
            echo "<div class=\"ttr_footer-widget-area_inner_above_widget_container\">
<div class=\"ttr_footer-widget-area_inner_above0 container row\">
";
            // line 494
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerabovecolumn1", [], "any", false, false, true, 494);
            // line 495
            if (($context["showcolumn"] ?? null)) {
                // line 496
                echo "<div class=\"cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"footerabovecolumn1\">
";
                // line 498
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerabovecolumn1", [], "any", false, false, true, 498), 498, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 502
                echo "<div class=\"cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 506
            echo "<div class=\" visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 507
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerabovecolumn2", [], "any", false, false, true, 507);
            // line 508
            if (($context["showcolumn"] ?? null)) {
                // line 509
                echo "<div class=\"cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"footerabovecolumn2\">
";
                // line 511
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerabovecolumn2", [], "any", false, false, true, 511), 511, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 515
                echo "<div class=\"cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 519
            echo "<div class=\" visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 520
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerabovecolumn3", [], "any", false, false, true, 520);
            // line 521
            if (($context["showcolumn"] ?? null)) {
                // line 522
                echo "<div class=\"cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"footerabovecolumn3\">
";
                // line 524
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerabovecolumn3", [], "any", false, false, true, 524), 524, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 528
                echo "<div class=\"cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 532
            echo "<div class=\" visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 533
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerabovecolumn4", [], "any", false, false, true, 533);
            // line 534
            if (($context["showcolumn"] ?? null)) {
                // line 535
                echo "<div class=\"cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"footerabovecolumn4\">
";
                // line 537
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerabovecolumn4", [], "any", false, false, true, 537), 537, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 541
                echo "<div class=\"cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 545
            echo "<div class=\" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
<div class=\" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
</div>
</div>
<div style=\"clear: both;\"></div>
";
        }
        // line 551
        echo "</div>
</div>
</div>
</div>
<div class=\"margin_collapsetop\"></div>
<footer id=\"ttr_footer\">
<div class=\"margin_collapsetop\"></div>
 <div id=\"ttr_footer_inner\">
";
        // line 560
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footercellcolumn1", [], "any", false, false, true, 560) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footercellcolumn2", [], "any", false, false, true, 560)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footercellcolumn3", [], "any", false, false, true, 560)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footercellcolumn4", [], "any", false, false, true, 560))) {
            // line 562
            echo "<div class=\"ttr_footer-widget-cell_inner_widget_container\">
<div class=\"ttr_footer-widget-cell_inner0 container row\">
";
            // line 564
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footercellcolumn1", [], "any", false, false, true, 564);
            // line 565
            if (($context["showcolumn"] ?? null)) {
                // line 566
                echo "<div class=\"cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"footercellcolumn1\">
";
                // line 568
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footercellcolumn1", [], "any", false, false, true, 568), 568, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 572
                echo "<div class=\"cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 576
            echo "<div class=\" visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 577
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footercellcolumn2", [], "any", false, false, true, 577);
            // line 578
            if (($context["showcolumn"] ?? null)) {
                // line 579
                echo "<div class=\"cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"footercellcolumn2\">
";
                // line 581
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footercellcolumn2", [], "any", false, false, true, 581), 581, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 585
                echo "<div class=\"cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 589
            echo "<div class=\" visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 590
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footercellcolumn3", [], "any", false, false, true, 590);
            // line 591
            if (($context["showcolumn"] ?? null)) {
                // line 592
                echo "<div class=\"cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"footercellcolumn3\">
";
                // line 594
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footercellcolumn3", [], "any", false, false, true, 594), 594, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 598
                echo "<div class=\"cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 602
            echo "<div class=\" visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 603
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footercellcolumn4", [], "any", false, false, true, 603);
            // line 604
            if (($context["showcolumn"] ?? null)) {
                // line 605
                echo "<div class=\"cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"footercellcolumn4\">
";
                // line 607
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footercellcolumn4", [], "any", false, false, true, 607), 607, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 611
                echo "<div class=\"cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 615
            echo "<div class=\" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
<div class=\" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
</div>
</div>
<div style=\"clear: both;\"></div>
";
        }
        // line 621
        echo "<div id=\"ttr_footer_top_for_widgets\">
<div  class=\"ttr_footer_top_for_widgets_inner\">
";
        // line 623
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "leftfooterarea", [], "any", false, false, true, 623) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "centerfooterarea", [], "any", false, false, true, 623)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "rightfooterarea", [], "any", false, false, true, 623))) {
            // line 624
            echo "<div class=\"footer-widget-area_fixed row\">
<div style=\"margin:0 auto;\"></div>
";
            // line 626
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "leftfooterarea", [], "any", false, false, true, 626)) {
                // line 627
                echo "<div  id=\"first\" class=\"widget-area col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12\">
";
                // line 628
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "leftfooterarea", [], "any", false, false, true, 628), 628, $this->source), "html", null, true);
                echo "
</div>
<div class=\" visible-xs d-block\" style=\"clear:both;\"></div>
";
            } else {
                // line 632
                echo "<div  id=\"first\" class=\"widget-area  col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12\">
 
</div>
<div class=\" visible-xs d-block\"></div>
";
            }
            // line 637
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "centerfooterarea", [], "any", false, false, true, 637)) {
                // line 638
                echo "<div  id=\"second\" class=\"widget-area  col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12\">
";
                // line 639
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "centerfooterarea", [], "any", false, false, true, 639), 639, $this->source), "html", null, true);
                echo "
</div>
<div class=\" visible-xs d-block\" style=\"clear:both;\"></div>
";
            } else {
                // line 643
                echo "<div  id=\"second\" class=\"widget-area  col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12\">
 
</div>
<div class=\" visible-xs d-block\" style=\"clear:both;\"></div>
";
            }
            // line 648
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "rightfooterarea", [], "any", false, false, true, 648)) {
                // line 649
                echo "<div  id=\"third\" class=\"widget-area  col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12\">
";
                // line 650
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "rightfooterarea", [], "any", false, false, true, 650), 650, $this->source), "html", null, true);
                echo "
</div>
<div class=\" visible-lg visible-md visible-sm visible-xs d-xl-block d-lg-block d-md-block d-sm-block d-block\" style=\"clear:both;\"></div>
";
            } else {
                // line 654
                echo "<div  id=\"third\" class=\"widget-area  col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12\">
 
</div>
<div class=\" visible-lg visible-md visible-sm visible-xs d-xl-block d-lg-block d-md-block d-sm-block d-block\" style=\"clear:both;\"></div>
";
            }
            // line 659
            echo "</div>
";
        }
        // line 661
        echo "</div>
</div>
<div class=\"ttr_footer_bottom_footer\">
<div class=\"ttr_footer_bottom_footer_inner\">
<div class=\"ttr_footer_element_alignment container\">
</div>
<div id=\"ttr_footer_designed_by_links\">
<a href=\"https://templatetoaster.com\" target=\"_self\"> Drupal Theme </a>
<span id=\"ttr_footer_designed_by\"> Designed With TemplateToaster </span>
</div>
";
        // line 671
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["feed_icons"] ?? null), 671, $this->source), "html", null, true);
        echo "
<a href=\"https://www.facebook.com/TemplateToaster\" class=\"ttr_footer_facebook \" target=\"_blank\" >
</a>
<a href=\"https://www.linkedin.com/company/templatetoaster/\" class=\"ttr_footer_linkedin \" target=\"_blank\" >
</a>
<a href=\"https://twitter.com/templatetoaster\" class=\"ttr_footer_twitter \" target=\"_blank\" >
</a>
<a href=\"https://www.instagram.com/templatetoaster/\" class=\"ttr_footer_instagram \" target=\"_blank\" >
</a>
<a href=\"https://www.youtube.com/templatetoaster\" class=\"ttr_footer_youtube \" target=\"_blank\" >
</a>
</div>
</div>
</div>
</footer>
<div class=\"margin_collapsetop\"></div>
<div class=\"footer-widget-area\">
";
        // line 689
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerbelowcolumn1", [], "any", false, false, true, 689) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerbelowcolumn2", [], "any", false, false, true, 689)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerbelowcolumn3", [], "any", false, false, true, 689)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerbelowcolumn4", [], "any", false, false, true, 689))) {
            // line 691
            echo "<div class=\"ttr_footer-widget-area_inner_below_widget_container\">
<div class=\"ttr_footer-widget-area_inner_below0 container row\">
";
            // line 693
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerbelowcolumn1", [], "any", false, false, true, 693);
            // line 694
            if (($context["showcolumn"] ?? null)) {
                // line 695
                echo "<div class=\"cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"footerbelowcolumn1\">
";
                // line 697
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerbelowcolumn1", [], "any", false, false, true, 697), 697, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 701
                echo "<div class=\"cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 705
            echo "<div class=\" visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 706
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerbelowcolumn2", [], "any", false, false, true, 706);
            // line 707
            if (($context["showcolumn"] ?? null)) {
                // line 708
                echo "<div class=\"cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"footerbelowcolumn2\">
";
                // line 710
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerbelowcolumn2", [], "any", false, false, true, 710), 710, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 714
                echo "<div class=\"cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 718
            echo "<div class=\" visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 719
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerbelowcolumn3", [], "any", false, false, true, 719);
            // line 720
            if (($context["showcolumn"] ?? null)) {
                // line 721
                echo "<div class=\"cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"footerbelowcolumn3\">
";
                // line 723
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerbelowcolumn3", [], "any", false, false, true, 723), 723, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 727
                echo "<div class=\"cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 731
            echo "<div class=\" visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 732
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerbelowcolumn4", [], "any", false, false, true, 732);
            // line 733
            if (($context["showcolumn"] ?? null)) {
                // line 734
                echo "<div class=\"cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"footerbelowcolumn4\">
";
                // line 736
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerbelowcolumn4", [], "any", false, false, true, 736), 736, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 740
                echo "<div class=\"cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 744
            echo "<div class=\" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
<div class=\" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
</div>
</div>
<div style=\"clear: both;\"></div>
";
        }
        // line 750
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/theme__100249/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1286 => 750,  1278 => 744,  1272 => 740,  1265 => 736,  1261 => 734,  1259 => 733,  1257 => 732,  1254 => 731,  1248 => 727,  1241 => 723,  1237 => 721,  1235 => 720,  1233 => 719,  1230 => 718,  1224 => 714,  1217 => 710,  1213 => 708,  1211 => 707,  1209 => 706,  1206 => 705,  1200 => 701,  1193 => 697,  1189 => 695,  1187 => 694,  1185 => 693,  1181 => 691,  1179 => 689,  1159 => 671,  1147 => 661,  1143 => 659,  1136 => 654,  1129 => 650,  1126 => 649,  1124 => 648,  1117 => 643,  1110 => 639,  1107 => 638,  1105 => 637,  1098 => 632,  1091 => 628,  1088 => 627,  1086 => 626,  1082 => 624,  1080 => 623,  1076 => 621,  1068 => 615,  1062 => 611,  1055 => 607,  1051 => 605,  1049 => 604,  1047 => 603,  1044 => 602,  1038 => 598,  1031 => 594,  1027 => 592,  1025 => 591,  1023 => 590,  1020 => 589,  1014 => 585,  1007 => 581,  1003 => 579,  1001 => 578,  999 => 577,  996 => 576,  990 => 572,  983 => 568,  979 => 566,  977 => 565,  975 => 564,  971 => 562,  969 => 560,  959 => 551,  951 => 545,  945 => 541,  938 => 537,  934 => 535,  932 => 534,  930 => 533,  927 => 532,  921 => 528,  914 => 524,  910 => 522,  908 => 521,  906 => 520,  903 => 519,  897 => 515,  890 => 511,  886 => 509,  884 => 508,  882 => 507,  879 => 506,  873 => 502,  866 => 498,  862 => 496,  860 => 495,  858 => 494,  854 => 492,  852 => 490,  839 => 478,  831 => 472,  825 => 468,  818 => 464,  814 => 462,  812 => 461,  810 => 460,  807 => 459,  801 => 455,  794 => 451,  790 => 449,  788 => 448,  786 => 447,  783 => 446,  777 => 442,  770 => 438,  766 => 436,  764 => 435,  762 => 434,  759 => 433,  753 => 429,  746 => 425,  742 => 423,  740 => 422,  738 => 421,  734 => 419,  732 => 417,  728 => 415,  723 => 414,  721 => 413,  717 => 412,  713 => 411,  707 => 409,  705 => 408,  701 => 406,  693 => 400,  687 => 396,  680 => 392,  676 => 390,  674 => 389,  672 => 388,  669 => 387,  663 => 383,  656 => 379,  652 => 377,  650 => 376,  648 => 375,  645 => 374,  639 => 370,  632 => 366,  628 => 364,  626 => 363,  624 => 362,  621 => 361,  615 => 357,  608 => 353,  604 => 351,  602 => 350,  600 => 349,  596 => 347,  594 => 345,  589 => 342,  587 => 341,  584 => 340,  580 => 338,  576 => 336,  574 => 335,  572 => 334,  565 => 329,  557 => 323,  551 => 319,  544 => 315,  540 => 313,  538 => 312,  536 => 311,  533 => 310,  527 => 306,  520 => 302,  516 => 300,  514 => 299,  512 => 298,  509 => 297,  503 => 293,  496 => 289,  492 => 287,  490 => 286,  488 => 285,  485 => 284,  479 => 280,  472 => 276,  468 => 274,  466 => 273,  464 => 272,  460 => 270,  458 => 268,  423 => 234,  415 => 228,  409 => 224,  402 => 220,  398 => 218,  396 => 217,  394 => 216,  391 => 215,  385 => 211,  378 => 207,  374 => 205,  372 => 204,  370 => 203,  367 => 202,  361 => 198,  354 => 194,  350 => 192,  348 => 191,  346 => 190,  343 => 189,  337 => 185,  330 => 181,  326 => 179,  324 => 178,  322 => 177,  318 => 175,  316 => 173,  312 => 170,  304 => 164,  298 => 160,  291 => 156,  287 => 154,  285 => 153,  283 => 152,  280 => 151,  274 => 147,  267 => 143,  263 => 141,  261 => 140,  259 => 139,  256 => 138,  250 => 134,  243 => 130,  239 => 128,  237 => 127,  235 => 126,  232 => 125,  226 => 121,  219 => 117,  215 => 115,  213 => 114,  211 => 113,  207 => 111,  205 => 109,  195 => 101,  164 => 75,  153 => 66,  145 => 60,  139 => 56,  132 => 52,  128 => 50,  126 => 49,  124 => 48,  121 => 47,  115 => 43,  108 => 39,  104 => 37,  102 => 36,  100 => 35,  97 => 34,  91 => 30,  84 => 26,  80 => 24,  78 => 23,  76 => 22,  73 => 21,  67 => 17,  60 => 13,  56 => 11,  54 => 10,  52 => 9,  48 => 7,  46 => 5,  43 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/theme__100249/templates/page.html.twig", "C:\\xampp\\htdocs\\project1\\drupal-9.5.7\\themes\\theme__100249\\templates\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 5);
        static $filters = array("escape" => 13, "t" => 75);
        static $functions = array("active_theme_path" => 1);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 't'],
                ['active_theme_path']
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
