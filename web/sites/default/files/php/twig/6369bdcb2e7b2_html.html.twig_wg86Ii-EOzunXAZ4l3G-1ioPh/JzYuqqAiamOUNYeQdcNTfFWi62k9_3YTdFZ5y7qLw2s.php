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

/* themes/custom/jango/templates/html.html.twig */
class __TwigTemplate_ce14572fe1e1982a639d2fe5d901df16 extends \Twig\Template
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
        // line 28
        echo "<!DOCTYPE html>
<html";
        // line 29
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["html_attributes"] ?? null), 29, $this->source), "html", null, true);
        echo ">
  <head>
    <head-placeholder token=\"";
        // line 31
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 31, $this->source), "html", null, true);
        echo "\">
    <title>";
        // line 32
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->safeJoin($this->env, $this->sandbox->ensureToStringAllowed(($context["head_title"] ?? null), 32, $this->source), " | "));
        echo "</title>
    <css-placeholder token=\"";
        // line 33
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 33, $this->source), "html", null, true);
        echo "\">
    <js-placeholder token=\"";
        // line 34
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 34, $this->source), "html", null, true);
        echo "\">
    ";
        // line 36
        echo "  </head>
  <body";
        // line 37
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 37, $this->source), "html", null, true);
        echo ">
    ";
        // line 42
        echo "    <a href=\"#main-content\" class=\"visually-hidden focusable\">
      ";
        // line 43
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Skip to main content"));
        echo "
    </a>
    ";
        // line 45
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_top"] ?? null), 45, $this->source), "html", null, true);
        echo "
    ";
        // line 46
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page"] ?? null), 46, $this->source), "html", null, true);
        echo "
    ";
        // line 47
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_bottom"] ?? null), 47, $this->source), "html", null, true);
        echo "
    <js-bottom-placeholder token=\"";
        // line 48
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 48, $this->source), "html", null, true);
        echo "\">
    <div class=\"c-layout-go2top\" style=\"display: block;\">
      <i class=\"icon-arrow-up\"></i>
    </div>

    ";
        // line 53
        if (($context["dev"] ?? null)) {
            // line 54
            echo "      <nav class=\"c-layout-quick-sidebar\">
        <div class=\"c-header\">
          <button type=\"button\" class=\"c-link c-close\">
            <i class=\"icon-login\"></i>
          </button>
        </div>
        <div class=\"c-content\">
          <div class=\"c-section\">
            <h3>";
            // line 62
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Theme Colors"));
            echo "</h3>
            <div class=\"c-settings\">
              <span class=\"c-color c-default c-active\" data-color=\"default\"></span>
              <span class=\"c-color c-green1\" data-color=\"green1\"></span>
              <span class=\"c-color c-green2\" data-color=\"green2\"></span>
              <span class=\"c-color c-green3\" data-color=\"green3\"></span>
              <span class=\"c-color c-yellow1\" data-color=\"yellow1\"></span>
              <span class=\"c-color c-yellow2\" data-color=\"yellow2\"></span>
              <span class=\"c-color c-yellow3\" data-color=\"yellow3\"></span>
              <span class=\"c-color c-red1\" data-color=\"red1\"></span>
              <span class=\"c-color c-red2\" data-color=\"red2\"></span>
              <span class=\"c-color c-red3\" data-color=\"red3\"></span>
              <span class=\"c-color c-purple1\" data-color=\"purple1\"></span>
              <span class=\"c-color c-purple2\" data-color=\"purple2\"></span>
              <span class=\"c-color c-purple3\" data-color=\"purple3\"></span>
              <span class=\"c-color c-blue1\" data-color=\"blue1\"></span>
              <span class=\"c-color c-blue2\" data-color=\"blue2\"></span>
              <span class=\"c-color c-blue3\" data-color=\"blue3\"></span>
              <span class=\"c-color c-brown1\" data-color=\"brown1\"></span>
              <span class=\"c-color c-brown2\" data-color=\"brown2\"></span>
              <span class=\"c-color c-brown3\" data-color=\"brown3\"></span>
              <span class=\"c-color c-dark1\" data-color=\"dark1\"></span>
              <span class=\"c-color c-dark2\" data-color=\"dark2\"></span>
              <span class=\"c-color c-dark3\" data-color=\"dark3\"></span>
            </div>
          </div>
          <div class=\"c-section\">
            <h3>";
            // line 89
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Header Type"));
            echo "</h3>
            <div class=\"c-settings\">
              <input type=\"button\" class=\"c-setting_header-type btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-sbold c-btn-uppercase active\" data-value=\"boxed\" value=\"boxed\">
              <input type=\"button\" class=\"c-setting_header-type btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-sbold c-btn-uppercase\" data-value=\"fluid\" value=\"fluid\">
            </div>
          </div>
          <div class=\"c-section\">
            <h3>";
            // line 96
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Header Mode"));
            echo "</h3>
            <div class=\"c-settings\">
              <input type=\"button\" class=\"c-setting_header-mode btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-sbold c-btn-uppercase active\" data-value=\"fixed\" value=\"fixed\">
              <input type=\"button\" class=\"c-setting_header-mode btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-sbold c-btn-uppercase\" data-value=\"static\" value=\"static\">
            </div>
          </div>
          <div class=\"c-section\">
            <h3>";
            // line 103
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Mega Menu Style"));
            echo "</h3>
            <div class=\"c-settings\">
              <input type=\"button\" class=\"c-setting_megamenu-style btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-sbold c-btn-uppercase active\" data-value=\"dark\" value=\"dark\">
              <input type=\"button\" class=\"c-setting_megamenu-style btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-sbold c-btn-uppercase\" data-value=\"light\" value=\"light\">
            </div>
          </div>
          <div class=\"c-section\">
            <h3>";
            // line 110
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Font Style"));
            echo "</h3>
            <div class=\"c-settings\">
              <input type=\"button\" class=\"c-setting_font-style btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-sbold c-btn-uppercase active\" data-value=\"default\" value=\"default\">
              <input type=\"button\" class=\"c-setting_font-style btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-sbold c-btn-uppercase\" data-value=\"light\" value=\"light\">
            </div>
          </div>
        </div>
      </nav>
    ";
        }
        // line 119
        echo "
    <!--[if lt IE 9]>
    <script src=\"../assets/global/plugins/excanvas.min.js\"></script>
    <![endif]-->
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/jango/templates/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 119,  170 => 110,  160 => 103,  150 => 96,  140 => 89,  110 => 62,  100 => 54,  98 => 53,  90 => 48,  86 => 47,  82 => 46,  78 => 45,  73 => 43,  70 => 42,  66 => 37,  63 => 36,  59 => 34,  55 => 33,  51 => 32,  47 => 31,  42 => 29,  39 => 28,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/jango/templates/html.html.twig", "/var/www/html/web/themes/custom/jango/templates/html.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 53);
        static $filters = array("escape" => 29, "safe_join" => 32, "t" => 43);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'safe_join', 't'],
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
