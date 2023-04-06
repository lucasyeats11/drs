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

/* themes/custom/deposit_return_theme/templates/field/field--node--title.html.twig */
class __TwigTemplate_686dfd67ac8dab9f2acf57abdcdaacd1 extends Template
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
    }

    public function getTemplateName()
    {
        return "themes/custom/deposit_return_theme/templates/field/field--node--title.html.twig";
    }

    public function getDebugInfo()
    {
        return array ();
    }

    public function getSourceContext()
    {
        return new Source("{##}
{#/**#}
{# * @file#}
{# * Theme override for the node title field.#}
{# *#}
{# * This is an override of field.html.twig for the node title field. See that#}
{# * template for documentation about its details and overrides.#}
{# *#}
{# * Available variables:#}
{# * - attributes: HTML attributes for the containing span element.#}
{# * - items: List of all the field items. Each item contains:#}
{# *   - attributes: List of HTML attributes for each item.#}
{# *   - content: The field item content.#}
{# * - entity_type: The entity type to which the field belongs.#}
{# * - field_name: The name of the field.#}
{# * - field_type: The type of the field.#}
{# * - label_display: The display settings for the label.#}
{# * - is_inline: If false, display an ordinary field.#}
{# *   If true, display an inline format, suitable for inside elements such as#}
{# *   <span>, <h2> and so on.#}
{# *#}
{# * @see field.html.twig#}
{# * @see node_preprocess_field__node()#}
{# *#}
{# * @todo Delete as part of https://www.drupal.org/node/3015623#}
{# */#}
{##}
{#{% if not is_inline %}#}
{#  {% include \"field.html.twig\" %}#}
{#{% else %}#}
{#{%#}
{#  set classes = [#}
{#    'field',#}
{#    'field--name-' ~ field_name|clean_class,#}
{#    'field--type-' ~ field_type|clean_class,#}
{#    'field--label-' ~ label_display,#}
{#  ]#}
{#%}#}
{#<span{{ attributes.addClass(classes) }}>#}
{#  {%- for item in items -%}#}
{#    {{ item.content }}#}
{#  {%- endfor -%}#}
{#</span>#}
{#{% endif %}#}
", "themes/custom/deposit_return_theme/templates/field/field--node--title.html.twig", "/var/www/html/web/themes/custom/deposit_return_theme/templates/field/field--node--title.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
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
