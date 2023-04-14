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

/* themes/custom/deposit_return_theme/templates/field/field--paragraph--field-add-item--accordion.html.twig */
class __TwigTemplate_f91698c5848e702ff33fdffa0925e8d5 extends Template
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
        // line 41
        $context["classes"] = [0 => "field", 1 => ("field--name-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 43
($context["field_name"] ?? null), 43, $this->source))), 2 => ("field--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 44
($context["field_type"] ?? null), 44, $this->source))), 3 => ("field--label-" . $this->sandbox->ensureToStringAllowed(        // line 45
($context["label_display"] ?? null), 45, $this->source)), 4 => (((        // line 46
($context["label_display"] ?? null) == "inline")) ? ("clearfix") : (""))];
        // line 50
        $context["title_classes"] = [0 => "field__label", 1 => (((        // line 52
($context["label_display"] ?? null) == "visually_hidden")) ? ("visually-hidden") : (""))];
        // line 55
        if (($context["label_hidden"] ?? null)) {
            // line 56
            echo "  ";
            if (($context["multiple"] ?? null)) {
                // line 57
                echo "    <div";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null), 1 => "field__items"], "method", false, false, true, 57), 57, $this->source), "html", null, true);
                echo ">
      ";
                // line 58
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 59
                    echo "        <div";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 59), "addClass", [0 => "field__item"], "method", false, false, true, 59), 59, $this->source), "html", null, true);
                    echo ">
          <div class=\"accordion-item\">
              <span class=\"accordion-header\" id=\"headingOne-";
                    // line 61
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 61)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#paragraph"] ?? null) : null), "id", [], "any", false, false, true, 61), "value", [], "any", false, false, true, 61), 61, $this->source), "html", null, true);
                    echo "\">
                ";
                    // line 62
                    if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 62)) {
                        // line 63
                        echo "                  <button class=\"accordion-button\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseOne-";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 63)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#paragraph"] ?? null) : null), "id", [], "any", false, false, true, 63), "value", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
                        echo "\" aria-expanded=\"true\" aria-controls=\"collapseOne-";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 63)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#paragraph"] ?? null) : null), "id", [], "any", false, false, true, 63), "value", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
                        echo "\">
                  ";
                        // line 64
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 64)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["#paragraph"] ?? null) : null), "field_title", [], "any", false, false, true, 64), "value", [], "any", false, false, true, 64), 64, $this->source), "html", null, true);
                        echo "
                </button>
                ";
                    } else {
                        // line 67
                        echo "                  <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseOne-";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_4 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 67)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["#paragraph"] ?? null) : null), "id", [], "any", false, false, true, 67), "value", [], "any", false, false, true, 67), 67, $this->source), "html", null, true);
                        echo "\" aria-expanded=\"false\" aria-controls=\"collapseOne-";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_5 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 67)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["#paragraph"] ?? null) : null), "id", [], "any", false, false, true, 67), "value", [], "any", false, false, true, 67), 67, $this->source), "html", null, true);
                        echo "\">
                  ";
                        // line 68
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_6 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 68)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["#paragraph"] ?? null) : null), "field_title", [], "any", false, false, true, 68), "value", [], "any", false, false, true, 68), 68, $this->source), "html", null, true);
                        echo "
                </button>
                ";
                    }
                    // line 71
                    echo "              </span>
            ";
                    // line 72
                    if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 72)) {
                        // line 73
                        echo "              <div id=\"collapseOne-";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_7 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 73)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["#paragraph"] ?? null) : null), "id", [], "any", false, false, true, 73), "value", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
                        echo "\" class=\"accordion-collapse collapse show\" aria-labelledby=\"headingOne-";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_8 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 73)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["#paragraph"] ?? null) : null), "id", [], "any", false, false, true, 73), "value", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
                        echo "\" data-bs-parent=\"#accordion\">
                <div class=\"accordion-body\">";
                        // line 74
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_9 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 74)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["#paragraph"] ?? null) : null), "field_text", [], "any", false, false, true, 74), "value", [], "any", false, false, true, 74), 74, $this->source));
                        echo "</div>
              </div>
            ";
                    } else {
                        // line 77
                        echo "              <div id=\"collapseOne-";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_10 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 77)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["#paragraph"] ?? null) : null), "id", [], "any", false, false, true, 77), "value", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
                        echo "\" class=\"accordion-collapse collapse\" aria-labelledby=\"headingOne-";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_11 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 77)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["#paragraph"] ?? null) : null), "id", [], "any", false, false, true, 77), "value", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
                        echo "\" data-bs-parent=\"#accordion\">
                <div class=\"accordion-body\">";
                        // line 78
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_12 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 78)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["#paragraph"] ?? null) : null), "field_text", [], "any", false, false, true, 78), "value", [], "any", false, false, true, 78), 78, $this->source));
                        echo "</div>
              </div>
            ";
                    }
                    // line 81
                    echo "          </div>
        </div>
      ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 84
                echo "    </div>
  ";
            } else {
                // line 86
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 87
                    echo "      <div";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null), 1 => "field__items"], "method", false, false, true, 87), 87, $this->source), "html", null, true);
                    echo ">
        ";
                    // line 88
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                    $context['loop'] = [
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    ];
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 89
                        echo "          <div";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 89), "addClass", [0 => "field__item"], "method", false, false, true, 89), 89, $this->source), "html", null, true);
                        echo ">
            <div class=\"accordion-item\">
              <span class=\"accordion-header\" id=\"headingOne-";
                        // line 91
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_13 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 91)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["#paragraph"] ?? null) : null), "id", [], "any", false, false, true, 91), "value", [], "any", false, false, true, 91), 91, $this->source), "html", null, true);
                        echo "\">
                ";
                        // line 92
                        if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 92)) {
                            // line 93
                            echo "                  <button class=\"accordion-button\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseOne-";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_14 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 93)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["#paragraph"] ?? null) : null), "id", [], "any", false, false, true, 93), "value", [], "any", false, false, true, 93), 93, $this->source), "html", null, true);
                            echo "\" aria-expanded=\"true\" aria-controls=\"collapseOne-";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_15 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 93)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["#paragraph"] ?? null) : null), "id", [], "any", false, false, true, 93), "value", [], "any", false, false, true, 93), 93, $this->source), "html", null, true);
                            echo "\">
                  ";
                            // line 94
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_16 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 94)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["#paragraph"] ?? null) : null), "field_title", [], "any", false, false, true, 94), "value", [], "any", false, false, true, 94), 94, $this->source), "html", null, true);
                            echo "
                </button>
                ";
                        } else {
                            // line 97
                            echo "                  <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseOne-";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_17 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 97)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["#paragraph"] ?? null) : null), "id", [], "any", false, false, true, 97), "value", [], "any", false, false, true, 97), 97, $this->source), "html", null, true);
                            echo "\" aria-expanded=\"false\" aria-controls=\"collapseOne-";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_18 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 97)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["#paragraph"] ?? null) : null), "id", [], "any", false, false, true, 97), "value", [], "any", false, false, true, 97), 97, $this->source), "html", null, true);
                            echo "\">
                  ";
                            // line 98
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_19 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 98)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["#paragraph"] ?? null) : null), "field_title", [], "any", false, false, true, 98), "value", [], "any", false, false, true, 98), 98, $this->source), "html", null, true);
                            echo "
                </button>
                ";
                        }
                        // line 101
                        echo "              </span>
              ";
                        // line 102
                        if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 102)) {
                            // line 103
                            echo "                <div id=\"collapseOne-";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_20 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 103)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["#paragraph"] ?? null) : null), "id", [], "any", false, false, true, 103), "value", [], "any", false, false, true, 103), 103, $this->source), "html", null, true);
                            echo "\" class=\"accordion-collapse collapse show\" aria-labelledby=\"headingOne-";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_21 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 103)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["#paragraph"] ?? null) : null), "id", [], "any", false, false, true, 103), "value", [], "any", false, false, true, 103), 103, $this->source), "html", null, true);
                            echo "\" data-bs-parent=\"#accordion\">
                  <div class=\"accordion-body\">";
                            // line 104
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_22 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 104)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["#paragraph"] ?? null) : null), "field_text", [], "any", false, false, true, 104), "value", [], "any", false, false, true, 104), 104, $this->source));
                            echo "</div>
                </div>
              ";
                        } else {
                            // line 107
                            echo "                <div id=\"collapseOne-";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_23 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 107)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["#paragraph"] ?? null) : null), "id", [], "any", false, false, true, 107), "value", [], "any", false, false, true, 107), 107, $this->source), "html", null, true);
                            echo "\" class=\"accordion-collapse collapse\" aria-labelledby=\"headingOne-";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_24 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 107)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24["#paragraph"] ?? null) : null), "id", [], "any", false, false, true, 107), "value", [], "any", false, false, true, 107), 107, $this->source), "html", null, true);
                            echo "\" data-bs-parent=\"#accordion\">
                  <div class=\"accordion-body\">";
                            // line 108
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_25 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 108)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25["#paragraph"] ?? null) : null), "field_text", [], "any", false, false, true, 108), "value", [], "any", false, false, true, 108), 108, $this->source));
                            echo "</div>
                </div>
              ";
                        }
                        // line 111
                        echo "            </div>
          </div>
        ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 114
                    echo "      </div>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 116
                echo "  ";
            }
        } else {
            // line 118
            echo "  <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 118), 118, $this->source), "html", null, true);
            echo ">
    <div";
            // line 119
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => ($context["title_classes"] ?? null)], "method", false, false, true, 119), 119, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 119, $this->source), "html", null, true);
            echo "</div>
    ";
            // line 120
            if (($context["multiple"] ?? null)) {
                // line 121
                echo "    <div class=\"field__items\">
      ";
            }
            // line 123
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 124
                echo "        <div";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null), 1 => "field__items"], "method", false, false, true, 124), 124, $this->source), "html", null, true);
                echo ">
          ";
                // line 125
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 126
                    echo "            <div";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 126), "addClass", [0 => "field__item"], "method", false, false, true, 126), 126, $this->source), "html", null, true);
                    echo ">
              <div class=\"accordion-item\">
              <span class=\"accordion-header\" id=\"headingOne-";
                    // line 128
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_26 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 128)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26["#paragraph"] ?? null) : null), "id", [], "any", false, false, true, 128), "value", [], "any", false, false, true, 128), 128, $this->source), "html", null, true);
                    echo "\">
                ";
                    // line 129
                    if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 129)) {
                        // line 130
                        echo "                  <button class=\"accordion-button\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseOne-";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_27 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 130)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27["#paragraph"] ?? null) : null), "id", [], "any", false, false, true, 130), "value", [], "any", false, false, true, 130), 130, $this->source), "html", null, true);
                        echo "\" aria-expanded=\"true\" aria-controls=\"collapseOne-";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_28 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 130)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28["#paragraph"] ?? null) : null), "id", [], "any", false, false, true, 130), "value", [], "any", false, false, true, 130), 130, $this->source), "html", null, true);
                        echo "\">
                  ";
                        // line 131
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_29 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 131)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29["#paragraph"] ?? null) : null), "field_title", [], "any", false, false, true, 131), "value", [], "any", false, false, true, 131), 131, $this->source), "html", null, true);
                        echo "
                </button>
                ";
                    } else {
                        // line 134
                        echo "                  <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseOne-";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_30 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 134)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30["#paragraph"] ?? null) : null), "id", [], "any", false, false, true, 134), "value", [], "any", false, false, true, 134), 134, $this->source), "html", null, true);
                        echo "\" aria-expanded=\"false\" aria-controls=\"collapseOne-";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_31 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 134)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31["#paragraph"] ?? null) : null), "id", [], "any", false, false, true, 134), "value", [], "any", false, false, true, 134), 134, $this->source), "html", null, true);
                        echo "\">
                  ";
                        // line 135
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_32 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 135)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32["#paragraph"] ?? null) : null), "field_title", [], "any", false, false, true, 135), "value", [], "any", false, false, true, 135), 135, $this->source), "html", null, true);
                        echo "
                </button>
                ";
                    }
                    // line 138
                    echo "              </span>
                ";
                    // line 139
                    if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 139)) {
                        // line 140
                        echo "                  <div id=\"collapseOne-";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_33 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 140)) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33["#paragraph"] ?? null) : null), "id", [], "any", false, false, true, 140), "value", [], "any", false, false, true, 140), 140, $this->source), "html", null, true);
                        echo "\" class=\"accordion-collapse collapse show\" aria-labelledby=\"headingOne-";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_34 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 140)) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34["#paragraph"] ?? null) : null), "id", [], "any", false, false, true, 140), "value", [], "any", false, false, true, 140), 140, $this->source), "html", null, true);
                        echo "\" data-bs-parent=\"#accordion\">
                    <div class=\"accordion-body\">";
                        // line 141
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_35 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 141)) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35["#paragraph"] ?? null) : null), "field_text", [], "any", false, false, true, 141), "value", [], "any", false, false, true, 141), 141, $this->source));
                        echo "</div>
                  </div>
                ";
                    } else {
                        // line 144
                        echo "                  <div id=\"collapseOne-";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_36 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 144)) && is_array($__internal_compile_36) || $__internal_compile_36 instanceof ArrayAccess ? ($__internal_compile_36["#paragraph"] ?? null) : null), "id", [], "any", false, false, true, 144), "value", [], "any", false, false, true, 144), 144, $this->source), "html", null, true);
                        echo "\" class=\"accordion-collapse collapse\" aria-labelledby=\"headingOne-";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_37 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 144)) && is_array($__internal_compile_37) || $__internal_compile_37 instanceof ArrayAccess ? ($__internal_compile_37["#paragraph"] ?? null) : null), "id", [], "any", false, false, true, 144), "value", [], "any", false, false, true, 144), 144, $this->source), "html", null, true);
                        echo "\" data-bs-parent=\"#accordion\">
                    <div class=\"accordion-body\">";
                        // line 145
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_38 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 145)) && is_array($__internal_compile_38) || $__internal_compile_38 instanceof ArrayAccess ? ($__internal_compile_38["#paragraph"] ?? null) : null), "field_text", [], "any", false, false, true, 145), "value", [], "any", false, false, true, 145), 145, $this->source));
                        echo "</div>
                  </div>
                ";
                    }
                    // line 148
                    echo "              </div>
            </div>
          ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 151
                echo "        </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 153
            echo "      ";
            if (($context["multiple"] ?? null)) {
                // line 154
                echo "    </div>
    ";
            }
            // line 156
            echo "  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/deposit_return_theme/templates/field/field--paragraph--field-add-item--accordion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  430 => 156,  426 => 154,  423 => 153,  416 => 151,  400 => 148,  394 => 145,  387 => 144,  381 => 141,  374 => 140,  372 => 139,  369 => 138,  363 => 135,  356 => 134,  350 => 131,  343 => 130,  341 => 129,  337 => 128,  331 => 126,  314 => 125,  309 => 124,  304 => 123,  300 => 121,  298 => 120,  292 => 119,  287 => 118,  283 => 116,  276 => 114,  260 => 111,  254 => 108,  247 => 107,  241 => 104,  234 => 103,  232 => 102,  229 => 101,  223 => 98,  216 => 97,  210 => 94,  203 => 93,  201 => 92,  197 => 91,  191 => 89,  174 => 88,  169 => 87,  164 => 86,  160 => 84,  144 => 81,  138 => 78,  131 => 77,  125 => 74,  118 => 73,  116 => 72,  113 => 71,  107 => 68,  100 => 67,  94 => 64,  87 => 63,  85 => 62,  81 => 61,  75 => 59,  58 => 58,  53 => 57,  50 => 56,  48 => 55,  46 => 52,  45 => 50,  43 => 46,  42 => 45,  41 => 44,  40 => 43,  39 => 41,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override for a field.
 *
 * To override output, copy the \"field.html.twig\" from the templates directory
 * to your theme's directory and customize it, just like customizing other
 * Drupal templates such as page.html.twig or node.html.twig.
 *
 * Instead of overriding the theming for all fields, you can also just override
 * theming for a subset of fields using
 * @link themeable Theme hook suggestions. @endlink For example,
 * here are some theme hook suggestions that can be used for a field_foo field
 * on an article node type:
 * - field--node--field-foo--article.html.twig
 * - field--node--field-foo.html.twig
 * - field--node--article.html.twig
 * - field--field-foo.html.twig
 * - field--text-with-summary.html.twig
 * - field.html.twig
 *
 * Available variables:
 * - attributes: HTML attributes for the containing element.
 * - label_hidden: Whether to show the field label or not.
 * - title_attributes: HTML attributes for the title.
 * - label: The label for the field.
 * - multiple: TRUE if a field can contain multiple items.
 * - items: List of all the field items. Each item contains:
 *   - attributes: List of HTML attributes for each item.
 *   - content: The field item's content.
 * - entity_type: The entity type to which the field belongs.
 * - field_name: The name of the field.
 * - field_type: The type of the field.
 * - label_display: The display settings for the label.
 *
 *
 * @see template_preprocess_field()
 */
#}
{%
  set classes = [
  'field',
  'field--name-' ~ field_name|clean_class,
  'field--type-' ~ field_type|clean_class,
  'field--label-' ~ label_display,
  label_display == 'inline' ? 'clearfix',
]
%}
{%
  set title_classes = [
  'field__label',
  label_display == 'visually_hidden' ? 'visually-hidden',
]
%}
{% if label_hidden %}
  {% if multiple %}
    <div{{ attributes.addClass(classes, 'field__items') }}>
      {% for item in items %}
        <div{{ item.attributes.addClass('field__item') }}>
          <div class=\"accordion-item\">
              <span class=\"accordion-header\" id=\"headingOne-{{ item.content['#paragraph'].id.value }}\">
                {% if loop.first %}
                  <button class=\"accordion-button\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseOne-{{ item.content['#paragraph'].id.value }}\" aria-expanded=\"true\" aria-controls=\"collapseOne-{{ item.content['#paragraph'].id.value }}\">
                  {{ item.content['#paragraph'].field_title.value }}
                </button>
                {% else %}
                  <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseOne-{{ item.content['#paragraph'].id.value }}\" aria-expanded=\"false\" aria-controls=\"collapseOne-{{ item.content['#paragraph'].id.value }}\">
                  {{ item.content['#paragraph'].field_title.value }}
                </button>
                {% endif %}
              </span>
            {% if loop.first %}
              <div id=\"collapseOne-{{ item.content['#paragraph'].id.value }}\" class=\"accordion-collapse collapse show\" aria-labelledby=\"headingOne-{{ item.content['#paragraph'].id.value }}\" data-bs-parent=\"#accordion\">
                <div class=\"accordion-body\">{{ item.content['#paragraph'].field_text.value|raw }}</div>
              </div>
            {% else %}
              <div id=\"collapseOne-{{ item.content['#paragraph'].id.value }}\" class=\"accordion-collapse collapse\" aria-labelledby=\"headingOne-{{ item.content['#paragraph'].id.value }}\" data-bs-parent=\"#accordion\">
                <div class=\"accordion-body\">{{ item.content['#paragraph'].field_text.value|raw }}</div>
              </div>
            {% endif %}
          </div>
        </div>
      {% endfor %}
    </div>
  {% else %}
    {% for item in items %}
      <div{{ attributes.addClass(classes, 'field__items') }}>
        {% for item in items %}
          <div{{ item.attributes.addClass('field__item') }}>
            <div class=\"accordion-item\">
              <span class=\"accordion-header\" id=\"headingOne-{{ item.content['#paragraph'].id.value }}\">
                {% if loop.first %}
                  <button class=\"accordion-button\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseOne-{{ item.content['#paragraph'].id.value }}\" aria-expanded=\"true\" aria-controls=\"collapseOne-{{ item.content['#paragraph'].id.value }}\">
                  {{ item.content['#paragraph'].field_title.value }}
                </button>
                {% else %}
                  <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseOne-{{ item.content['#paragraph'].id.value }}\" aria-expanded=\"false\" aria-controls=\"collapseOne-{{ item.content['#paragraph'].id.value }}\">
                  {{ item.content['#paragraph'].field_title.value }}
                </button>
                {% endif %}
              </span>
              {% if loop.first %}
                <div id=\"collapseOne-{{ item.content['#paragraph'].id.value }}\" class=\"accordion-collapse collapse show\" aria-labelledby=\"headingOne-{{ item.content['#paragraph'].id.value }}\" data-bs-parent=\"#accordion\">
                  <div class=\"accordion-body\">{{ item.content['#paragraph'].field_text.value|raw }}</div>
                </div>
              {% else %}
                <div id=\"collapseOne-{{ item.content['#paragraph'].id.value }}\" class=\"accordion-collapse collapse\" aria-labelledby=\"headingOne-{{ item.content['#paragraph'].id.value }}\" data-bs-parent=\"#accordion\">
                  <div class=\"accordion-body\">{{ item.content['#paragraph'].field_text.value|raw }}</div>
                </div>
              {% endif %}
            </div>
          </div>
        {% endfor %}
      </div>
    {% endfor %}
  {% endif %}
{% else %}
  <div{{ attributes.addClass(classes) }}>
    <div{{ title_attributes.addClass(title_classes) }}>{{ label }}</div>
    {% if multiple %}
    <div class=\"field__items\">
      {% endif %}
      {% for item in items %}
        <div{{ attributes.addClass(classes, 'field__items') }}>
          {% for item in items %}
            <div{{ item.attributes.addClass('field__item') }}>
              <div class=\"accordion-item\">
              <span class=\"accordion-header\" id=\"headingOne-{{ item.content['#paragraph'].id.value }}\">
                {% if loop.first %}
                  <button class=\"accordion-button\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseOne-{{ item.content['#paragraph'].id.value }}\" aria-expanded=\"true\" aria-controls=\"collapseOne-{{ item.content['#paragraph'].id.value }}\">
                  {{ item.content['#paragraph'].field_title.value }}
                </button>
                {% else %}
                  <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseOne-{{ item.content['#paragraph'].id.value }}\" aria-expanded=\"false\" aria-controls=\"collapseOne-{{ item.content['#paragraph'].id.value }}\">
                  {{ item.content['#paragraph'].field_title.value }}
                </button>
                {% endif %}
              </span>
                {% if loop.first %}
                  <div id=\"collapseOne-{{ item.content['#paragraph'].id.value }}\" class=\"accordion-collapse collapse show\" aria-labelledby=\"headingOne-{{ item.content['#paragraph'].id.value }}\" data-bs-parent=\"#accordion\">
                    <div class=\"accordion-body\">{{ item.content['#paragraph'].field_text.value|raw }}</div>
                  </div>
                {% else %}
                  <div id=\"collapseOne-{{ item.content['#paragraph'].id.value }}\" class=\"accordion-collapse collapse\" aria-labelledby=\"headingOne-{{ item.content['#paragraph'].id.value }}\" data-bs-parent=\"#accordion\">
                    <div class=\"accordion-body\">{{ item.content['#paragraph'].field_text.value|raw }}</div>
                  </div>
                {% endif %}
              </div>
            </div>
          {% endfor %}
        </div>
      {% endfor %}
      {% if multiple %}
    </div>
    {% endif %}
  </div>
{% endif %}
", "themes/custom/deposit_return_theme/templates/field/field--paragraph--field-add-item--accordion.html.twig", "/var/www/html/web/themes/custom/deposit_return_theme/templates/field/field--paragraph--field-add-item--accordion.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 41, "if" => 55, "for" => 58);
        static $filters = array("clean_class" => 43, "escape" => 57, "raw" => 74);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['clean_class', 'escape', 'raw'],
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
