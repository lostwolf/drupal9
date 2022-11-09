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

/* themes/custom/jango/templates/comment/field--comment.html.twig */
class __TwigTemplate_5507c47758453e2dbef1e06b998e2c62 extends \Twig\Template
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
        // line 30
        $context["h3_classes"] = [0 => "c-font-uppercase", 1 => "c-font-bold"];
        // line 35
        echo "
<section";
        // line 36
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "c-comments"], "method", false, false, true, 36), 36, $this->source), "html", null, true);
        echo ">
  ";
        // line 37
        if (($context["comments"] ?? null)) {
            // line 38
            echo "    <div class=\"c-content-title-1\">
      <h3";
            // line 39
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => ($context["h3_classes"] ?? null)], "method", false, false, true, 39), 39, $this->source), "html", null, true);
            echo ">
        ";
            // line 40
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Comments"));
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = ($context["element"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#items"] ?? null) : null), "comment_count", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
            echo "
      </h3>
      <div class=\"c-line-left\"></div>
    </div>
    <div class=\"c-comment-list\">
      ";
            // line 45
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["comments"] ?? null), 45, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 48
        echo "
  ";
        // line 49
        if (($context["comment_form"] ?? null)) {
            // line 50
            echo "    <div class=\"c-content-title-1\">
      <h3";
            // line 51
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => ($context["h3_classes"] ?? null)], "method", false, false, true, 51), 51, $this->source), "html", null, true);
            echo ">
        ";
            // line 52
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Leave a Comment"));
            echo "
      </h3>
      <div class=\"c-line-left\"></div>
    </div>
    ";
            // line 56
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["comment_form"] ?? null), 56, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 58
        echo "</section>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/jango/templates/comment/field--comment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 58,  92 => 56,  85 => 52,  81 => 51,  78 => 50,  76 => 49,  73 => 48,  67 => 45,  57 => 40,  53 => 39,  50 => 38,  48 => 37,  44 => 36,  41 => 35,  39 => 30,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/jango/templates/comment/field--comment.html.twig", "/var/www/html/web/themes/custom/jango/templates/comment/field--comment.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 30, "if" => 37);
        static $filters = array("escape" => 36, "t" => 40);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 't'],
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
