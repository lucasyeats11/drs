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

/* themes/custom/deposit_return_theme/templates/paragraphs/paragraph--banner.html.twig */
class __TwigTemplate_b7be06d7475f109287bfac11630012a6 extends Template
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
        $context["classes"] = [0 => "paragraph", 1 => ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 3
($context["paragraph"] ?? null), "bundle", [], "any", false, false, true, 3), 3, $this->source))), 2 => ((        // line 4
($context["view_mode"] ?? null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 4, $this->source)))) : ("")), 3 => (( !twig_get_attribute($this->env, $this->source,         // line 5
($context["paragraph"] ?? null), "isPublished", [], "method", false, false, true, 5)) ? ("paragraph--unpublished") : (""))];
        // line 7
        $this->displayBlock('paragraph', $context, $blocks);
    }

    public function block_paragraph($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "  <div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 8), 8, $this->source), "html", null, true);
        echo ">
    ";
        // line 9
        $this->displayBlock('content', $context, $blocks);
        // line 18
        echo "  </div>
";
    }

    // line 9
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "      <div class=\"main-banner ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_lower_filter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_background_colour", [], "any", false, false, true, 10), 0, [], "any", false, false, true, 10), 10, $this->source))), "html", null, true);
        echo "\" style=\"background-image: url('";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_image_upload", [], "any", false, false, true, 10), "entity", [], "any", false, false, true, 10), "field_media_image", [], "any", false, false, true, 10), "entity", [], "any", false, false, true, 10), "fileuri", [], "any", false, false, true, 10), 10, $this->source)), "html", null, true);
        echo "') \">
            <div class=\"content\">
              <h1>";
        // line 12
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_title", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
        echo "</h1>
              <p>";
        // line 13
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_text", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
        echo "</p>
              ";
        // line 14
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
        echo "
            </div>
      </div>
    ";
    }

    public function getTemplateName()
    {
        return "themes/custom/deposit_return_theme/templates/paragraphs/paragraph--banner.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 14,  81 => 13,  77 => 12,  69 => 10,  65 => 9,  60 => 18,  58 => 9,  53 => 8,  46 => 7,  44 => 5,  43 => 4,  42 => 3,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set classes = [
  'paragraph',
  'paragraph--type--' ~ paragraph.bundle|clean_class,
  view_mode ? 'paragraph--view-mode--' ~ view_mode|clean_class,
  not paragraph.isPublished() ? 'paragraph--unpublished',
] %}
{% block paragraph %}
  <div{{ attributes.addClass(classes) }}>
    {% block content %}
      <div class=\"main-banner {{ content.field_background_colour.0|render|lower}}\" style=\"background-image: url('{{ file_url(paragraph.field_image_upload.entity.field_media_image.entity.fileuri) }}') \">
            <div class=\"content\">
              <h1>{{ content.field_title }}</h1>
              <p>{{ content.field_text }}</p>
              {{ content.field_link }}
            </div>
      </div>
    {% endblock %}
  </div>
{% endblock paragraph %}
", "themes/custom/deposit_return_theme/templates/paragraphs/paragraph--banner.html.twig", "/var/www/html/web/themes/custom/deposit_return_theme/templates/paragraphs/paragraph--banner.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "block" => 7);
        static $filters = array("clean_class" => 3, "escape" => 8, "lower" => 10, "render" => 10);
        static $functions = array("file_url" => 10);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block'],
                ['clean_class', 'escape', 'lower', 'render'],
                ['file_url']
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
