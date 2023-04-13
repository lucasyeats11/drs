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

/* themes/custom/deposit_return_theme/templates/paragraphs/paragraph--text-image.html.twig */
class __TwigTemplate_4ffcc23f043281bef2cd63f75e9aa20f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'paragraph' => [$this, 'block_paragraph'],
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "
";
        // line 2
        $context["classes"] = [0 => "paragraph", 1 => ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 4
($context["paragraph"] ?? null), "bundle", [], "any", false, false, true, 4), 4, $this->source))), 2 => ((        // line 5
($context["view_mode"] ?? null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 5, $this->source)))) : ("")), 3 => (( !twig_get_attribute($this->env, $this->source,         // line 6
($context["paragraph"] ?? null), "isPublished", [], "method", false, false, true, 6)) ? ("paragraph--unpublished") : (""))];
        // line 8
        $this->displayBlock('paragraph', $context, $blocks);
    }

    public function block_paragraph($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "  <div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 9), 9, $this->source), "html", null, true);
        echo ">
    ";
        // line 10
        $this->displayBlock('content', $context, $blocks);
        // line 41
        echo "  </div>
";
    }

    // line 10
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "      <div class=\"text-image\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-10 offset-lg-1\">
              <div class=\"row\">
                ";
        // line 16
        if (((($__internal_compile_0 = (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image_location", [], "any", false, false, true, 16)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[0] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#plain_text"] ?? null) : null) == "left")) {
            // line 17
            echo "
                  <div class=\"col-lg-5 image\">
                    ";
            // line 19
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image_upload", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
            echo "
                  </div>
                  <div class=\"col-lg-5  offset-lg-2 content\">
                    <h2>";
            // line 22
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_title", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
            echo "</h2>
                    <p>";
            // line 23
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_text", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
            echo "</p>
                  </div>
                ";
        } else {
            // line 26
            echo "                  <div class=\"col-lg-5 content\">
                    <h2>";
            // line 27
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_title", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
            echo "</h2>
                    <p>";
            // line 28
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_text", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
            echo "</p>
                  </div>
                  <div class=\"col-lg-5 offset-lg-2 image\">
                    ";
            // line 31
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image_upload", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
            echo "
                  </div>
                ";
        }
        // line 34
        echo "
              </div>
            </div>
          </div>
        </div>
      </div>
    ";
    }

    public function getTemplateName()
    {
        return "themes/custom/deposit_return_theme/templates/paragraphs/paragraph--text-image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 34,  114 => 31,  108 => 28,  104 => 27,  101 => 26,  95 => 23,  91 => 22,  85 => 19,  81 => 17,  79 => 16,  72 => 11,  68 => 10,  63 => 41,  61 => 10,  56 => 9,  49 => 8,  47 => 6,  46 => 5,  45 => 4,  44 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% set classes = [
  'paragraph',
  'paragraph--type--' ~ paragraph.bundle|clean_class,
  view_mode ? 'paragraph--view-mode--' ~ view_mode|clean_class,
  not paragraph.isPublished() ? 'paragraph--unpublished',
] %}
{% block paragraph %}
  <div{{ attributes.addClass(classes) }}>
    {% block content %}
      <div class=\"text-image\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-10 offset-lg-1\">
              <div class=\"row\">
                {% if content.field_image_location[0]['#plain_text'] == \"left\" %}

                  <div class=\"col-lg-5 image\">
                    {{ content.field_image_upload }}
                  </div>
                  <div class=\"col-lg-5  offset-lg-2 content\">
                    <h2>{{ content.field_title }}</h2>
                    <p>{{ content.field_text }}</p>
                  </div>
                {% else %}
                  <div class=\"col-lg-5 content\">
                    <h2>{{ content.field_title }}</h2>
                    <p>{{ content.field_text }}</p>
                  </div>
                  <div class=\"col-lg-5 offset-lg-2 image\">
                    {{ content.field_image_upload }}
                  </div>
                {% endif %}

              </div>
            </div>
          </div>
        </div>
      </div>
    {% endblock %}
  </div>
{% endblock paragraph %}
", "themes/custom/deposit_return_theme/templates/paragraphs/paragraph--text-image.html.twig", "/var/www/html/web/themes/custom/deposit_return_theme/templates/paragraphs/paragraph--text-image.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 2, "block" => 8, "if" => 16);
        static $filters = array("clean_class" => 4, "escape" => 9);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if'],
                ['clean_class', 'escape'],
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
