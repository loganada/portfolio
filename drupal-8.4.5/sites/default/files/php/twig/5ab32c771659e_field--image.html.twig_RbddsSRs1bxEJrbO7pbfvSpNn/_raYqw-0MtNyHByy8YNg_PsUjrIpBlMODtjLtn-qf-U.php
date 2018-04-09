<?php

/* themes/adaptivetheme/at_core/templates/field/field--image.html.twig */
class __TwigTemplate_917ee245532a27e9904aa8089471c3b3e0158abff5a9e2afb9f04669255b2614 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 39, "if" => 57, "for" => 66);
        $filters = array("clean_class" => 39, "length" => 57);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'for'),
                array('clean_class', 'length'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 39
        $context["field_name_class"] = \Drupal\Component\Utility\Html::getClass(($context["field_name"] ?? null));
        // line 41
        $context["classes"] = array(0 => "field", 1 => ((("field-" . \Drupal\Component\Utility\Html::getClass(        // line 43
($context["entity_type"] ?? null))) . "--") . ($context["field_name_class"] ?? null)), 2 => ((        // line 44
($context["field_formatter"] ?? null)) ? (("field-formatter-" . \Drupal\Component\Utility\Html::getClass(($context["field_formatter"] ?? null)))) : ("")), 3 => ("field-name-" .         // line 45
($context["field_name_class"] ?? null)), 4 => ("field-type-" . \Drupal\Component\Utility\Html::getClass(        // line 46
($context["field_type"] ?? null))), 5 => ("field-label-" .         // line 47
($context["label_display"] ?? null)), 6 => (((        // line 48
($context["label_display"] ?? null) == "inline")) ? ("clearfix") : ("")));
        // line 52
        $context["title_classes"] = array(0 => "field__label", 1 => (((        // line 54
($context["label_display"] ?? null) == "visually_hidden")) ? ("visually-hidden") : ("")));
        // line 57
        if ((twig_length_filter($this->env, ($context["items"] ?? null)) > 1)) {
            // line 58
            $context["count_class"] = "has-multiple";
        } else {
            // line 60
            $context["count_class"] = "has-single";
        }
        // line 62
        echo "<div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null), 1 => ($context["count_class"] ?? null)), "method"), "html", null, true));
        echo ">";
        // line 63
        if ( !($context["label_hidden"] ?? null)) {
            // line 64
            echo "<h3";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["title_attributes"] ?? null), "addClass", array(0 => ($context["title_classes"] ?? null)), "method"), "html", null, true));
            echo ">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
            echo "</h3>";
        }
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["delta"] => $context["item"]) {
            // line 67
            if (($this->getAttribute($this->getAttribute($context["item"], "caption", array()), "show", array()) == true)) {
                // line 68
                echo "<figure";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "addClass", array(0 => "field-type-image__figure", 1 => ("image-count-" . ($context["delta"] + 1)), 2 => "caption", 3 => "caption-img"), "method"), "html", null, true));
                echo " role=\"group\">";
            } else {
                // line 70
                echo "<figure";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "addClass", array(0 => "field-type-image__figure", 1 => ("image-count-" . ($context["delta"] + 1))), "method"), "html", null, true));
                echo ">";
            }
            // line 72
            echo "<div class=\"field-type-image__item\">
        ";
            // line 73
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "content", array()), "html", null, true));
            // line 74
            if (($this->getAttribute($this->getAttribute($context["item"], "caption", array()), "show", array()) == true)) {
                // line 75
                if ($this->getAttribute($this->getAttribute($context["item"], "caption", array()), "width", array())) {
                    // line 76
                    echo "            ";
                    $context["caption_width"] = ((" style=max-width:" . $this->getAttribute($this->getAttribute($context["item"], "caption", array()), "width", array())) . "px");
                }
                // line 78
                echo "<figcaption class=\"field-type-image__figcaption\" property=\"schema:description\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["caption_width"] ?? null), "html", null, true));
                echo ">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["item"], "caption", array()), "title", array()), "html", null, true));
                echo "</figcaption>";
            }
            // line 80
            echo "</div>
    </figure>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['delta'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/adaptivetheme/at_core/templates/field/field--image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 83,  113 => 80,  106 => 78,  102 => 76,  100 => 75,  98 => 74,  96 => 73,  93 => 72,  88 => 70,  83 => 68,  81 => 67,  77 => 66,  70 => 64,  68 => 63,  64 => 62,  61 => 60,  58 => 58,  56 => 57,  54 => 54,  53 => 52,  51 => 48,  50 => 47,  49 => 46,  48 => 45,  47 => 44,  46 => 43,  45 => 41,  43 => 39,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/adaptivetheme/at_core/templates/field/field--image.html.twig", "/home1/adamloga/public_html/drupal-8.4.5/themes/adaptivetheme/at_core/templates/field/field--image.html.twig");
    }
}
