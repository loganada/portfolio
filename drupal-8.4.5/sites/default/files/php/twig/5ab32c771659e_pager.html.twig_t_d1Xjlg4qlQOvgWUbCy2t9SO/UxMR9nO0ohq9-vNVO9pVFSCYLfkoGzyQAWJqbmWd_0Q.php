<?php

/* themes/adaptivetheme/at_core/templates/navigation/pager.html.twig */
class __TwigTemplate_8c0bba8b14e2f99d3b703f1974f391db937cd34fd407db57206a32db522c14a8 extends Twig_Template
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
        $tags = array("if" => 32, "for" => 63, "set" => 65);
        $filters = array("t" => 34, "default" => 45, "trim" => 73, "join" => 73);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'for', 'set'),
                array('t', 'default', 'trim', 'join'),
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

        // line 32
        if (($context["items"] ?? null)) {
            // line 33
            echo "<nav class=\"pager pager--full\" role=\"navigation\" aria-labelledby=\"pagination-heading\">
    <h4 id=\"pagination-heading\" class=\"visually-hidden\">";
            // line 34
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Pagination")));
            echo "</h4>
    <ul class=\"pager__items\">
      ";
            // line 37
            if (($this->getAttribute(($context["items"] ?? null), "first", array()) || $this->getAttribute(($context["items"] ?? null), "previous", array()))) {
                // line 38
                echo "<ul class=\"pager__items__first-previous js-pager__items\">";
            }
            // line 41
            if ($this->getAttribute(($context["items"] ?? null), "first", array())) {
                // line 42
                echo "<li class=\"pager__item pager__item--first pager__item--text\">
            <a href=\"";
                // line 43
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["items"] ?? null), "first", array()), "href", array()), "html", null, true));
                echo "\" class=\"pager__link\" title=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Go to first page")));
                echo "\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["items"] ?? null), "first", array()), "attributes", array()), "html", null, true));
                echo ">
              <span class=\"visually-hidden\">";
                // line 44
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("First page")));
                echo "</span>
              <span class=\"pager__first\" aria-hidden=\"true\">";
                // line 45
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($this->getAttribute($this->getAttribute(($context["items"] ?? null), "first", array(), "any", false, true), "text", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["items"] ?? null), "first", array(), "any", false, true), "text", array()), t("« first"))) : (t("« first"))), "html", null, true));
                echo "</span>
            </a>
          </li>";
            }
            // line 50
            if ($this->getAttribute(($context["items"] ?? null), "previous", array())) {
                // line 51
                echo "<li class=\"pager__item pager__item--previous pager__item--text\">
            <a href=\"";
                // line 52
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["items"] ?? null), "previous", array()), "href", array()), "html", null, true));
                echo "\" class=\"pager__link\" title=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Go to previous page")));
                echo "\" rel=\"prev\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["items"] ?? null), "previous", array()), "attributes", array()), "html", null, true));
                echo ">
              <span class=\"visually-hidden\">";
                // line 53
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Previous page")));
                echo "</span>
              <span class=\"pager__previous\" aria-hidden=\"true\">";
                // line 54
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($this->getAttribute($this->getAttribute(($context["items"] ?? null), "previous", array(), "any", false, true), "text", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["items"] ?? null), "previous", array(), "any", false, true), "text", array()), t("‹ previous"))) : (t("‹ previous"))), "html", null, true));
                echo "</span>
            </a>
          </li>";
            }
            // line 58
            if (($this->getAttribute(($context["items"] ?? null), "first", array()) || $this->getAttribute(($context["items"] ?? null), "previous", array()))) {
                // line 59
                echo "</ul>";
            }
            // line 62
            echo "      <ul class=\"pager__items__num-pages js-pager__items\">";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["items"] ?? null), "pages", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 65
                $context["classes"] = array(0 => "pager__item", 1 => "pager__item--num", 2 => (($this->getAttribute(                // line 68
$context["loop"], "first", array())) ? ("pager__item--num-first") : ("")), 3 => (($this->getAttribute(                // line 69
$context["loop"], "last", array())) ? ("pager__item--num-last") : ("")), 4 => (((                // line 70
($context["current"] ?? null) == $context["key"])) ? ("is-active") : ("")));
                // line 73
                echo "<li class=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter(twig_join_filter(($context["classes"] ?? null), " ")), "html", null, true));
                echo "\">";
                // line 74
                if ((($context["current"] ?? null) == $context["key"])) {
                    // line 75
                    $context["title"] = t("Current page");
                } else {
                    // line 77
                    $context["title"] = t("Go to page @key", array("@key" => $context["key"]));
                }
                // line 79
                echo "<a href=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "href", array()), "html", null, true));
                echo "\" class=\"pager__link";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["current"] ?? null) == $context["key"])) ? (" pager__link--is-active") : (""))));
                echo "\" title=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
                echo "\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "attributes", array()), "html", null, true));
                echo ">
              <span class=\"visually-hidden\">";
                // line 80
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["current"] ?? null) == $context["key"])) ? (t("Current page")) : (t("Page")))));
                echo "</span>
              ";
                // line 82
                if (($this->getAttribute(($context["ellipses"] ?? null), "previous", array()) && $this->getAttribute($context["loop"], "first", array()))) {
                    // line 83
                    echo "<span class=\"pager__ellipsis pager__ellipsis--before\" role=\"presentation\">&hellip;</span>";
                }
                // line 85
                echo "<span class=\"pager__key\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["key"], "html", null, true));
                echo "</span>
              ";
                // line 87
                if (($this->getAttribute(($context["ellipses"] ?? null), "next", array()) && $this->getAttribute($context["loop"], "last", array()))) {
                    // line 88
                    echo "<span class=\"pager__ellipsis pager__ellipsis--after\" role=\"presentation\">&hellip;</span>";
                }
                // line 90
                echo "</a>
          </li>
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
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "      </ul>
      ";
            // line 95
            if (($this->getAttribute(($context["items"] ?? null), "next", array()) || $this->getAttribute(($context["items"] ?? null), "last", array()))) {
                // line 96
                echo "<ul class=\"pager__items__next-last js-pager__items\">";
            }
            // line 99
            if ($this->getAttribute(($context["items"] ?? null), "next", array())) {
                // line 100
                echo "<li class=\"pager__item pager__item--next pager__item--text\">
            <a href=\"";
                // line 101
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["items"] ?? null), "next", array()), "href", array()), "html", null, true));
                echo "\" class=\"pager__link\" title=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Go to next page")));
                echo "\" rel=\"next\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["items"] ?? null), "next", array()), "attributes", array()), "html", null, true));
                echo ">
              <span class=\"visually-hidden\">";
                // line 102
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Next page")));
                echo "</span>
              <span class=\"pager__next\" aria-hidden=\"true\">";
                // line 103
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($this->getAttribute($this->getAttribute(($context["items"] ?? null), "next", array(), "any", false, true), "text", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["items"] ?? null), "next", array(), "any", false, true), "text", array()), t("next ›"))) : (t("next ›"))), "html", null, true));
                echo "</span>
            </a>
          </li>";
            }
            // line 108
            if ($this->getAttribute(($context["items"] ?? null), "last", array())) {
                // line 109
                echo "<li class=\"pager__item pager__item--last pager__item--text\">
            <a href=\"";
                // line 110
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["items"] ?? null), "last", array()), "href", array()), "html", null, true));
                echo "\" class=\"pager__link\" title=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Go to last page")));
                echo "\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["items"] ?? null), "last", array()), "attributes", array()), "html", null, true));
                echo ">
              <span class=\"visually-hidden\">";
                // line 111
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Last page")));
                echo "</span>
              <span class=\"pager__last\" aria-hidden=\"true\">";
                // line 112
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($this->getAttribute($this->getAttribute(($context["items"] ?? null), "last", array(), "any", false, true), "text", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["items"] ?? null), "last", array(), "any", false, true), "text", array()), t("last »"))) : (t("last »"))), "html", null, true));
                echo "</span>
            </a>
          </li>";
            }
            // line 116
            if (($this->getAttribute(($context["items"] ?? null), "next", array()) || $this->getAttribute(($context["items"] ?? null), "last", array()))) {
                // line 117
                echo "</ul>";
            }
            // line 119
            echo "</ul>
  </nav>";
        }
    }

    public function getTemplateName()
    {
        return "themes/adaptivetheme/at_core/templates/navigation/pager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 119,  247 => 117,  245 => 116,  239 => 112,  235 => 111,  227 => 110,  224 => 109,  222 => 108,  216 => 103,  212 => 102,  204 => 101,  201 => 100,  199 => 99,  196 => 96,  194 => 95,  191 => 93,  175 => 90,  172 => 88,  170 => 87,  165 => 85,  162 => 83,  160 => 82,  156 => 80,  145 => 79,  142 => 77,  139 => 75,  137 => 74,  133 => 73,  131 => 70,  130 => 69,  129 => 68,  128 => 65,  111 => 63,  109 => 62,  106 => 59,  104 => 58,  98 => 54,  94 => 53,  86 => 52,  83 => 51,  81 => 50,  75 => 45,  71 => 44,  63 => 43,  60 => 42,  58 => 41,  55 => 38,  53 => 37,  48 => 34,  45 => 33,  43 => 32,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/adaptivetheme/at_core/templates/navigation/pager.html.twig", "/home1/adamloga/public_html/drupal-8.4.5/themes/adaptivetheme/at_core/templates/navigation/pager.html.twig");
    }
}
