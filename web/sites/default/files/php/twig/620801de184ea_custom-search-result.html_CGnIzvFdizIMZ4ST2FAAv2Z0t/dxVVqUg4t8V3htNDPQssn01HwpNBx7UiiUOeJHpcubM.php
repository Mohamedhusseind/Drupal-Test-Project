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

/* modules/custom_search/templates/custom-search-result.html.twig */
class __TwigTemplate_509fc51037fa0f53c1fd91075429263727c67f93eba687eca72f278b857847dd extends \Twig\Template
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
        // line 61
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 61, $this->source), "html", null, true);
        echo "
<h3 class=\"title\"";
        // line 62
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_attributes"] ?? null), 62, $this->source), "html", null, true);
        echo ">
  <a href=\"";
        // line 63
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 63, $this->source), "html", null, true);
        echo "\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 63, $this->source), "html", null, true);
        echo "</a>
</h3>
";
        // line 65
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 65, $this->source), "html", null, true);
        echo "
<div class=\"search-snippet-info\">
  ";
        // line 67
        if (($context["snippet"] ?? null)) {
            // line 68
            echo "    <p class=\"search-snippet\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_attributes"] ?? null), 68, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["snippet"] ?? null), 68, $this->source), "html", null, true);
            echo "</p>
  ";
        }
        // line 70
        echo "  ";
        if (($context["info"] ?? null)) {
            // line 71
            echo "    <p class=\"search-info\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["info"] ?? null), 71, $this->source), "html", null, true);
            echo "</p>
  ";
        }
        // line 73
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "modules/custom_search/templates/custom-search-result.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 73,  72 => 71,  69 => 70,  61 => 68,  59 => 67,  54 => 65,  47 => 63,  43 => 62,  39 => 61,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/custom_search/templates/custom-search-result.html.twig", "/var/www/dailynews/web/modules/custom_search/templates/custom-search-result.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 67);
        static $filters = array("escape" => 61);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
