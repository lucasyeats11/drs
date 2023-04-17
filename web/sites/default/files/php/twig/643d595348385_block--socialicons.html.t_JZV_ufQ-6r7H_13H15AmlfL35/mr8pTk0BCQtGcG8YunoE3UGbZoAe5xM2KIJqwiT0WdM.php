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

/* themes/custom/deposit_return_theme/templates/block/block--socialicons.html.twig */
class __TwigTemplate_944da7489b2f9a1638311b776a6fe408 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        $context["classes"] = [0 => "block", 1 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 32
($context["configuration"] ?? null), "provider", [], "any", false, false, true, 32), 32, $this->source))), 2 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 33
($context["plugin_id"] ?? null), 33, $this->source)))];
        // line 36
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 36), 36, $this->source), "html", null, true);
        echo ">
  ";
        // line 37
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 37, $this->source), "html", null, true);
        echo "
  ";
        // line 38
        if (($context["label"] ?? null)) {
            // line 39
            echo "    <h2";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_attributes"] ?? null), 39, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 39, $this->source), "html", null, true);
            echo "</h2>
  ";
        }
        // line 41
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 41, $this->source), "html", null, true);
        echo "
  ";
        // line 42
        $this->displayBlock('content', $context, $blocks);
        // line 48
        echo "</div>
";
    }

    // line 42
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 43
        echo "    <a href=\"https://urldefense.proofpoint.com/v2/url?u=https-3A__www.facebook.com_depositreturnscotland&d=DwMFAg&c=euGZstcaTDllvimEN8b7jXrwqOf-v5A_CdpgnVfiiMM&r=zG-RZQWjDWRDHoo0x9OdXsbBmTFoTqed4Cb5slDxLEw&m=YE3IR4_ZPyyre06A9Gx6FtmKF8SFBsNgjqV1yDqjpGI&s=eNGj8ZA0txGG5JoUX7uO56Xvkimdah_Omcj2S92LbTU&e=\" target=\"_blank\">    <svg width=\"64\" height=\"64\" viewBox=\"0 0 64 64\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><g clip-path=\"url(#clip0_1_7)\"><path d=\"M64 32C64 14.33 49.67 0 32 0C14.33 0 0 14.33 0 32C0 47.97 11.7 61.21 27 63.61V41.25H18.88V32H27V24.95C27 16.93 31.78 12.5 39.09 12.5C42.59 12.5 46.25 13.12 46.25 13.12V21H42.21C38.23 21 37 23.47 37 26V32H45.88L44.46 41.25H37V63.61C52.3 61.21 64 47.97 64 32Z\" fill=\"#660269\"></path></g><defs><clippath id=\"clip0_1_7\"><rect width=\"64\" height=\"63.61\" fill=\"white\"></rect></clippath></defs></svg>
    </a>
    <a href=\"https://www.instagram.com/deposit_return_scotland/\" target=\"_blank\">    <svg width=\"64\" height=\"64\" viewBox=\"0 0 64 64\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><g clip-path=\"url(#clip0_1_3)\"><path d=\"M32 5.77C40.54 5.77 41.56 5.8 44.93 5.96C48.05 6.1 49.74 6.62 50.87 7.06C52.36 7.64 53.43 8.33 54.55 9.45C55.67 10.57 56.36 11.64 56.94 13.13C57.38 14.26 57.9 15.95 58.04 19.07C58.19 22.44 58.23 23.46 58.23 32C58.23 40.54 58.2 41.56 58.04 44.93C57.9 48.05 57.38 49.74 56.94 50.87C56.36 52.36 55.67 53.43 54.55 54.55C53.43 55.67 52.36 56.36 50.87 56.94C49.74 57.38 48.05 57.9 44.93 58.04C41.56 58.19 40.54 58.23 32 58.23C23.46 58.23 22.44 58.2 19.07 58.04C15.95 57.9 14.26 57.38 13.13 56.94C11.64 56.36 10.57 55.67 9.45 54.55C8.33 53.43 7.64 52.36 7.06 50.87C6.62 49.74 6.1 48.05 5.96 44.93C5.81 41.56 5.77 40.54 5.77 32C5.77 23.46 5.8 22.44 5.96 19.07C6.1 15.95 6.62 14.26 7.06 13.13C7.64 11.64 8.33 10.57 9.45 9.45C10.57 8.33 11.64 7.64 13.13 7.06C14.26 6.62 15.95 6.1 19.07 5.96C22.44 5.81 23.46 5.77 32 5.77ZM32 0C23.31 0 22.22 0.04 18.81 0.19C15.4 0.35 13.08 0.89 11.04 1.68C8.94 2.5 7.15 3.59 5.37 5.37C3.59 7.15 2.5 8.93 1.68 11.04C0.89 13.08 0.35 15.4 0.19 18.81C0.03 22.22 0 23.31 0 32C0 40.69 0.04 41.78 0.19 45.19C0.35 48.6 0.89 50.92 1.68 52.96C2.5 55.06 3.59 56.85 5.37 58.63C7.15 60.41 8.93 61.5 11.04 62.32C13.08 63.11 15.4 63.65 18.81 63.81C22.22 63.97 23.31 64 32 64C40.69 64 41.78 63.96 45.19 63.81C48.6 63.65 50.92 63.11 52.96 62.32C55.06 61.5 56.85 60.41 58.63 58.63C60.41 56.85 61.5 55.07 62.32 52.96C63.11 50.92 63.65 48.6 63.81 45.19C63.97 41.78 64 40.69 64 32C64 23.31 63.96 22.22 63.81 18.81C63.65 15.4 63.11 13.08 62.32 11.04C61.5 8.94 60.41 7.15 58.63 5.37C56.85 3.59 55.07 2.5 52.96 1.68C50.92 0.89 48.6 0.35 45.19 0.19C41.78 0.03 40.69 0 32 0Z\" fill=\"#660269\"></path><path d=\"M32 15.57C22.92 15.57 15.57 22.93 15.57 32C15.57 41.07 22.93 48.43 32 48.43C41.07 48.43 48.43 41.07 48.43 32C48.43 22.93 41.07 15.57 32 15.57ZM32 42.67C26.11 42.67 21.33 37.89 21.33 32C21.33 26.11 26.11 21.33 32 21.33C37.89 21.33 42.67 26.11 42.67 32C42.67 37.89 37.89 42.67 32 42.67Z\" fill=\"#660269\"></path><path d=\"M49.08 18.76C51.2008 18.76 52.92 17.0408 52.92 14.92C52.92 12.7992 51.2008 11.08 49.08 11.08C46.9592 11.08 45.24 12.7992 45.24 14.92C45.24 17.0408 46.9592 18.76 49.08 18.76Z\" fill=\"#660269\"></path></g><defs><clippath id=\"clip0_1_3\"><rect width=\"64\" height=\"64\" fill=\"white\"></rect></clippath></defs></svg>
    </a>
  ";
    }

    public function getTemplateName()
    {
        return "themes/custom/deposit_return_theme/templates/block/block--socialicons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 43,  75 => 42,  70 => 48,  68 => 42,  63 => 41,  55 => 39,  53 => 38,  49 => 37,  44 => 36,  42 => 33,  41 => 32,  40 => 30,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override to display a block.
 *
 * Available variables:
 * - plugin_id: The ID of the block implementation.
 * - label: The configured label of the block if visible.
 * - configuration: A list of the block's configuration values.
 *   - label: The configured label for the block.
 *   - label_display: The display settings for the label.
 *   - provider: The module or other provider that provided this block plugin.
 *   - Block plugin specific settings will also be stored here.
 * - in_preview: Whether the plugin is being rendered in preview mode.
 * - content: The content of this block.
 * - attributes: array of HTML attributes populated by modules, intended to
 *   be added to the main container tag of this template.
 *   - id: A valid HTML ID and guaranteed unique.
 * - title_attributes: Same as attributes, except applied to the main title
 *   tag that appears in the template.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 *
 * @see template_preprocess_block()
 */
#}
{%
  set classes = [
  'block',
  'block-' ~ configuration.provider|clean_class,
  'block-' ~ plugin_id|clean_class,
]
%}
<div{{ attributes.addClass(classes) }}>
  {{ title_prefix }}
  {% if label %}
    <h2{{ title_attributes }}>{{ label }}</h2>
  {% endif %}
  {{ title_suffix }}
  {% block content %}
    <a href=\"https://urldefense.proofpoint.com/v2/url?u=https-3A__www.facebook.com_depositreturnscotland&d=DwMFAg&c=euGZstcaTDllvimEN8b7jXrwqOf-v5A_CdpgnVfiiMM&r=zG-RZQWjDWRDHoo0x9OdXsbBmTFoTqed4Cb5slDxLEw&m=YE3IR4_ZPyyre06A9Gx6FtmKF8SFBsNgjqV1yDqjpGI&s=eNGj8ZA0txGG5JoUX7uO56Xvkimdah_Omcj2S92LbTU&e=\" target=\"_blank\">    <svg width=\"64\" height=\"64\" viewBox=\"0 0 64 64\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><g clip-path=\"url(#clip0_1_7)\"><path d=\"M64 32C64 14.33 49.67 0 32 0C14.33 0 0 14.33 0 32C0 47.97 11.7 61.21 27 63.61V41.25H18.88V32H27V24.95C27 16.93 31.78 12.5 39.09 12.5C42.59 12.5 46.25 13.12 46.25 13.12V21H42.21C38.23 21 37 23.47 37 26V32H45.88L44.46 41.25H37V63.61C52.3 61.21 64 47.97 64 32Z\" fill=\"#660269\"></path></g><defs><clippath id=\"clip0_1_7\"><rect width=\"64\" height=\"63.61\" fill=\"white\"></rect></clippath></defs></svg>
    </a>
    <a href=\"https://www.instagram.com/deposit_return_scotland/\" target=\"_blank\">    <svg width=\"64\" height=\"64\" viewBox=\"0 0 64 64\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><g clip-path=\"url(#clip0_1_3)\"><path d=\"M32 5.77C40.54 5.77 41.56 5.8 44.93 5.96C48.05 6.1 49.74 6.62 50.87 7.06C52.36 7.64 53.43 8.33 54.55 9.45C55.67 10.57 56.36 11.64 56.94 13.13C57.38 14.26 57.9 15.95 58.04 19.07C58.19 22.44 58.23 23.46 58.23 32C58.23 40.54 58.2 41.56 58.04 44.93C57.9 48.05 57.38 49.74 56.94 50.87C56.36 52.36 55.67 53.43 54.55 54.55C53.43 55.67 52.36 56.36 50.87 56.94C49.74 57.38 48.05 57.9 44.93 58.04C41.56 58.19 40.54 58.23 32 58.23C23.46 58.23 22.44 58.2 19.07 58.04C15.95 57.9 14.26 57.38 13.13 56.94C11.64 56.36 10.57 55.67 9.45 54.55C8.33 53.43 7.64 52.36 7.06 50.87C6.62 49.74 6.1 48.05 5.96 44.93C5.81 41.56 5.77 40.54 5.77 32C5.77 23.46 5.8 22.44 5.96 19.07C6.1 15.95 6.62 14.26 7.06 13.13C7.64 11.64 8.33 10.57 9.45 9.45C10.57 8.33 11.64 7.64 13.13 7.06C14.26 6.62 15.95 6.1 19.07 5.96C22.44 5.81 23.46 5.77 32 5.77ZM32 0C23.31 0 22.22 0.04 18.81 0.19C15.4 0.35 13.08 0.89 11.04 1.68C8.94 2.5 7.15 3.59 5.37 5.37C3.59 7.15 2.5 8.93 1.68 11.04C0.89 13.08 0.35 15.4 0.19 18.81C0.03 22.22 0 23.31 0 32C0 40.69 0.04 41.78 0.19 45.19C0.35 48.6 0.89 50.92 1.68 52.96C2.5 55.06 3.59 56.85 5.37 58.63C7.15 60.41 8.93 61.5 11.04 62.32C13.08 63.11 15.4 63.65 18.81 63.81C22.22 63.97 23.31 64 32 64C40.69 64 41.78 63.96 45.19 63.81C48.6 63.65 50.92 63.11 52.96 62.32C55.06 61.5 56.85 60.41 58.63 58.63C60.41 56.85 61.5 55.07 62.32 52.96C63.11 50.92 63.65 48.6 63.81 45.19C63.97 41.78 64 40.69 64 32C64 23.31 63.96 22.22 63.81 18.81C63.65 15.4 63.11 13.08 62.32 11.04C61.5 8.94 60.41 7.15 58.63 5.37C56.85 3.59 55.07 2.5 52.96 1.68C50.92 0.89 48.6 0.35 45.19 0.19C41.78 0.03 40.69 0 32 0Z\" fill=\"#660269\"></path><path d=\"M32 15.57C22.92 15.57 15.57 22.93 15.57 32C15.57 41.07 22.93 48.43 32 48.43C41.07 48.43 48.43 41.07 48.43 32C48.43 22.93 41.07 15.57 32 15.57ZM32 42.67C26.11 42.67 21.33 37.89 21.33 32C21.33 26.11 26.11 21.33 32 21.33C37.89 21.33 42.67 26.11 42.67 32C42.67 37.89 37.89 42.67 32 42.67Z\" fill=\"#660269\"></path><path d=\"M49.08 18.76C51.2008 18.76 52.92 17.0408 52.92 14.92C52.92 12.7992 51.2008 11.08 49.08 11.08C46.9592 11.08 45.24 12.7992 45.24 14.92C45.24 17.0408 46.9592 18.76 49.08 18.76Z\" fill=\"#660269\"></path></g><defs><clippath id=\"clip0_1_3\"><rect width=\"64\" height=\"64\" fill=\"white\"></rect></clippath></defs></svg>
    </a>
  {% endblock %}
</div>
", "themes/custom/deposit_return_theme/templates/block/block--socialicons.html.twig", "/var/www/html/web/themes/custom/deposit_return_theme/templates/block/block--socialicons.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 30, "if" => 38, "block" => 42);
        static $filters = array("clean_class" => 32, "escape" => 36);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
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
