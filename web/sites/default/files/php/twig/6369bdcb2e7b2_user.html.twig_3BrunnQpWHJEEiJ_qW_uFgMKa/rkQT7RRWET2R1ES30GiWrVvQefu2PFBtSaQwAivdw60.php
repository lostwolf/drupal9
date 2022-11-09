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

/* themes/custom/jango/templates/user/user.html.twig */
class __TwigTemplate_2f7fda2dad31f4cfc2123e0d8c82afb6 extends \Twig\Template
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
        // line 21
        echo "
";
        // line 22
        $context["current"] = (($__internal_compile_0 = $this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>")) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#markup"] ?? null) : null);
        // line 23
        $context["user_page"] = $this->extensions['Drupal\Core\Template\TwigExtension']->getPath("entity.user.canonical", ["user" => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, true, 23)]);
        // line 24
        echo "
";
        // line 25
        if (twig_in_filter(($context["user_page"] ?? null), ($context["current"] ?? null))) {
            // line 26
            echo "
  ";
            // line 27
            $context["username"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, true, 27), "value", [], "any", false, false, true, 27);
            // line 28
            echo "  <div class=\"c-content-title-1\">
    <h3 class=\"c-font-uppercase c-font-bold\">";
            // line 29
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("My Dashboard"));
            echo "</h3>
    <div class=\"c-line-left\"></div>
    <p>
      ";
            // line 32
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Hello"));
            echo "
      <a href=\"";
            // line 33
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getPath("entity.user.canonical", ["user" => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, true, 33)]), "html", null, true);
            echo "\" class=\"c-theme-link\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["username"] ?? null), 33, $this->source), "html", null, true);
            echo "</a>
      (";
            // line 34
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("not"));
            echo "
      <a href=\"";
            // line 35
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getPath("entity.user.canonical", ["user" => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, true, 35)]), "html", null, true);
            echo "\" class=\"c-theme-link\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["username"] ?? null), 35, $this->source), "html", null, true);
            echo "</a>?
      <a href=\"";
            // line 36
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("user.logout"));
            echo "\" class=\"c-theme-link\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Sign out"));
            echo "</a>).
      <br>
    </p>
  </div>
  <article";
            // line 40
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "profile", 1 => "row"], "method", false, false, true, 40), 40, $this->source), "html", null, true);
            echo ">
    <div class=\"col-md-6 col-sm-6 col-xs-12 c-margin-b-20\">
      <h3 class=\"c-font-uppercase c-font-bold\">";
            // line 42
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["username"] ?? null), 42, $this->source), "html", null, true);
            echo "</h3>
      ";
            // line 43
            if (($context["content"] ?? null)) {
                // line 44
                echo "        ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 44, $this->source), "user_picture", "member_for"), "html", null, true);
                echo "
      ";
            }
            // line 46
            echo "    </div>
  </article>

";
        } else {
            // line 50
            echo "
  <article";
            // line 51
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 51, $this->source), "html", null, true);
            echo ">
    ";
            // line 52
            if (($context["content"] ?? null)) {
                // line 53
                echo "      <div style=\"width: 50px;\">";
                // line 54
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 54, $this->source), "html", null, true);
                // line 55
                echo "</div>
    ";
            }
            // line 57
            echo "  </article>

";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/jango/templates/user/user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 57,  130 => 55,  128 => 54,  126 => 53,  124 => 52,  120 => 51,  117 => 50,  111 => 46,  105 => 44,  103 => 43,  99 => 42,  94 => 40,  85 => 36,  79 => 35,  75 => 34,  69 => 33,  65 => 32,  59 => 29,  56 => 28,  54 => 27,  51 => 26,  49 => 25,  46 => 24,  44 => 23,  42 => 22,  39 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/jango/templates/user/user.html.twig", "/var/www/html/web/themes/custom/jango/templates/user/user.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 22, "if" => 25);
        static $filters = array("t" => 29, "escape" => 33, "without" => 44);
        static $functions = array("url" => 22, "path" => 23);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['t', 'escape', 'without'],
                ['url', 'path']
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
