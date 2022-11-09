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

/* modules/custom/nikadevs_cms/templates/nikadevs-cms-layout-page.html.twig */
class __TwigTemplate_150941b5865f15682e4a228ec54758a4 extends \Twig\Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["layout"] ?? null), "rows", [], "any", false, false, true, 1));
        foreach ($context['_seq'] as $context["id"] => $context["row"]) {
            // line 2
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "settings", [], "any", false, true, true, 2), "tag", [], "any", true, true, true, 2)) {
                // line 3
                echo "      ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "settings", [], "any", false, false, true, 3), "tag", [], "any", false, false, true, 3) == "none")) {
                    // line 4
                    echo "          ";
                    $context["tag"] = "";
                    // line 5
                    echo "      ";
                } else {
                    // line 6
                    echo "          ";
                    $context["tag"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "settings", [], "any", false, false, true, 6), "tag", [], "any", false, false, true, 6);
                    // line 7
                    echo "      ";
                }
                // line 8
                echo "    ";
            } else {
                // line 9
                echo "        ";
                $context["tag"] = "";
                // line 10
                echo "    ";
            }
            // line 11
            echo "
    ";
            // line 12
            if (($context["tag"] ?? null)) {
                // line 13
                echo "        <";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tag"] ?? null), 13, $this->source), "html", null, true);
                echo " class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_join_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "wrap", [], "any", false, false, true, 13), "attributes", [], "any", false, false, true, 13), "class", [], "any", false, false, true, 13), 13, $this->source), " "), "html", null, true);
                echo "\" style=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "wrap", [], "any", false, false, true, 13), "attributes", [], "any", false, false, true, 13), "style", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
                echo "\">
    ";
            }
            // line 15
            echo "
    ";
            // line 16
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "settings", [], "any", false, true, true, 16), "full_width", [], "any", true, true, true, 16)) {
                // line 17
                echo "        ";
                $context["container_class"] = "-fluid";
                // line 18
                echo "    ";
            } else {
                // line 19
                echo "        ";
                $context["container_class"] = "";
                // line 20
                echo "    ";
            }
            // line 21
            echo "
      <div class=\"container";
            // line 22
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container_class"] ?? null), 22, $this->source), "html", null, true);
            echo "\">
        <div id=\"";
            // line 23
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "attributes", [], "any", false, false, true, 23), "id", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
            echo "\" class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_join_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "attributes", [], "any", false, false, true, 23), "class", [], "any", false, false, true, 23), 23, $this->source), " "), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_join_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "settings", [], "any", false, false, true, 23), "class", [], "any", false, false, true, 23), 23, $this->source), " "), "html", null, true);
            echo "\">
          ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["layout"] ?? null), "regions", [], "any", false, false, true, 24));
            foreach ($context['_seq'] as $context["region_key"] => $context["region"]) {
                // line 25
                echo "            ";
                if ((($context["id"] == twig_get_attribute($this->env, $this->source, $context["region"], "row_id", [], "any", false, false, true, 25)) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["region"], "content", [], "any", false, false, true, 25)))) {
                    // line 26
                    echo "              ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["region"], "settings", [], "any", false, false, true, 26), "tag", [], "any", false, false, true, 26)) {
                        // line 27
                        echo "                <";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["region"], "settings", [], "any", false, false, true, 27), "tag", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
                        echo " id=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["region"], "attributes", [], "any", false, false, true, 27), "id", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
                        echo "\" class=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_join_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["region"], "attributes", [], "any", false, false, true, 27), "class", [], "any", false, false, true, 27), 27, $this->source), " "), "html", null, true);
                        echo "\" style=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["region"], "attributes", [], "any", false, false, true, 27), "style", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
                        echo "\">
              ";
                    }
                    // line 29
                    echo "                ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["region"], "content", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
                    echo "
              ";
                    // line 30
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["region"], "settings", [], "any", false, false, true, 30), "tag", [], "any", false, false, true, 30)) {
                        // line 31
                        echo "                </";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["region"], "settings", [], "any", false, false, true, 31), "tag", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
                        echo ">
              ";
                    }
                    // line 33
                    echo "            ";
                }
                // line 34
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['region_key'], $context['region'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "        </div>
      </div>

    ";
            // line 38
            if (($context["tag"] ?? null)) {
                // line 39
                echo "        </";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tag"] ?? null), 39, $this->source), "html", null, true);
                echo ">
    ";
            }
            // line 41
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "modules/custom/nikadevs_cms/templates/nikadevs-cms-layout-page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 41,  168 => 39,  166 => 38,  161 => 35,  155 => 34,  152 => 33,  146 => 31,  144 => 30,  139 => 29,  127 => 27,  124 => 26,  121 => 25,  117 => 24,  109 => 23,  105 => 22,  102 => 21,  99 => 20,  96 => 19,  93 => 18,  90 => 17,  88 => 16,  85 => 15,  75 => 13,  73 => 12,  70 => 11,  67 => 10,  64 => 9,  61 => 8,  58 => 7,  55 => 6,  52 => 5,  49 => 4,  46 => 3,  43 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/custom/nikadevs_cms/templates/nikadevs-cms-layout-page.html.twig", "/var/www/html/web/modules/custom/nikadevs_cms/templates/nikadevs-cms-layout-page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 1, "if" => 2, "set" => 4);
        static $filters = array("escape" => 13, "join" => 13);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if', 'set'],
                ['escape', 'join'],
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
