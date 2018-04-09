<?php

/* themes/adaptivetheme/at_core/templates/navigation/menu.html.twig */
class __TwigTemplate_72f3b3c47da806ed5d62a8fe2bec2977414c51c2957c5561f33408ec5c474f21 extends Twig_Template
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
        $tags = array("import" => 21, "macro" => 28, "if" => 31, "for" => 41, "set" => 43);
        $filters = array("clean_class" => 35, "render" => 60, "without" => 65, "clean_id" => 65);
        $functions = array("cycle" => 37, "link" => 69);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('import', 'macro', 'if', 'for', 'set'),
                array('clean_class', 'render', 'without', 'clean_id'),
                array('cycle', 'link')
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

        // line 21
        $context["menus"] = $this;
        // line 26
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links(($context["items"] ?? null), ($context["attributes"] ?? null), 0, ($context["menu_name"] ?? null))));
        echo "

";
    }

    // line 28
    public function getmenu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, $__menu_name__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "menu_name" => $__menu_name__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 29
            $context["menus"] = $this;
            // line 31
            if (($context["items"] ?? null)) {
                // line 32
                echo "
    <ul";
                // line 34
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 35
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => array(0 => "menu", 1 => "odd", 2 => "menu-level-1", 3 => ((($context["menu_name"] ?? null)) ? (("menu-name--" . \Drupal\Component\Utility\Html::getClass(($context["menu_name"] ?? null)))) : ("")))), "method"), "html", null, true));
                } else {
                    // line 37
                    echo "      class=\"menu is-child ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), ($context["menu_level"] ?? null)), "html", null, true));
                    echo " ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ("menu-level-" . (($context["menu_level"] ?? null) + 1)), "html", null, true));
                    echo "\"";
                }
                // line 39
                echo ">";
                // line 41
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 43
                    $context["is_parent"] = false;
                    // line 44
                    echo "      ";
                    if (($this->getAttribute($context["item"], "below", array()) && $this->getAttribute($context["item"], "is_expanded", array()))) {
                        // line 45
                        echo "        ";
                        $context["is_parent"] = true;
                        // line 46
                        echo "      ";
                    }
                    // line 47
                    echo "
      ";
                    // line 49
                    echo "      ";
                    if ((($this->getAttribute($this->getAttribute($context["item"], "url", array()), "isExternal", array(), "method") == false) && ($this->getAttribute($this->getAttribute($context["item"], "url", array()), "isRouted", array(), "method") == true))) {
                        // line 50
                        echo "        ";
                        $context["nolink"] = ((($this->getAttribute($this->getAttribute($context["item"], "url", array()), "getRouteName", array(), "method") == "<nolink>")) ? (true) : (false));
                        // line 51
                        echo "      ";
                    }
                    // line 52
                    echo "
      ";
                    // line 53
                    $context["item_classes"] = array(0 => "menu__item", 1 => ((                    // line 55
($context["is_parent"] ?? null)) ? ("is-parent") : ("")), 2 => (($this->getAttribute(                    // line 56
$context["item"], "is_expanded", array())) ? ("menu__item--expanded") : ("")), 3 => (($this->getAttribute(                    // line 57
$context["item"], "is_collapsed", array())) ? ("menu__item--collapsed") : ("")), 4 => (($this->getAttribute(                    // line 58
$context["item"], "in_active_trail", array())) ? ("menu__item--active-trail") : ("")), 5 => ((                    // line 59
($context["nolink"] ?? null)) ? ("menu__item--no-link") : ("")), 6 => ("menu__item-title--" . \Drupal\Component\Utility\Html::getClass($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(                    // line 60
$context["item"], "title", array())))));
                    // line 63
                    echo "
      ";
                    // line 65
                    echo "      <li";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_without($this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "addClass", array(0 => ($context["item_classes"] ?? null)), "method"), "role"), "html", null, true));
                    echo " id=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ((("menu-name--" . ($context["menu_name"] ?? null)) . "__") . \Drupal\Component\Utility\Html::getId($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute($context["item"], "title", array())))), "html", null, true));
                    echo "\">

        <span class=\"menu__link--wrapper";
                    // line 67
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["is_parent"] ?? null)) ? (" is-parent__wrapper") : (""))));
                    echo "\">
          ";
                    // line 68
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getLink($this->getAttribute(                    // line 70
$context["item"], "title", array()), $this->getAttribute(                    // line 71
$context["item"], "url", array()), twig_without($this->getAttribute($this->getAttribute($this->getAttribute(                    // line 72
$context["item"], "attributes", array()), "removeClass", array(0 => ($context["item_classes"] ?? null)), "method"), "addClass", array(0 => "menu__link"), "method"), "id", "role")), "html", null, true));
                    // line 74
                    echo "
        </span>

        ";
                    // line 77
                    if ($this->getAttribute($context["item"], "below", array())) {
                        // line 78
                        echo "          ";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links($this->getAttribute($context["item"], "below", array()), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1), ($context["menu_name"] ?? null))));
                        echo "
        ";
                    }
                    // line 80
                    echo "
      </li>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 85
                echo "</ul>
  ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "themes/adaptivetheme/at_core/templates/navigation/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 85,  159 => 80,  153 => 78,  151 => 77,  146 => 74,  144 => 72,  143 => 71,  142 => 70,  141 => 68,  137 => 67,  129 => 65,  126 => 63,  124 => 60,  123 => 59,  122 => 58,  121 => 57,  120 => 56,  119 => 55,  118 => 53,  115 => 52,  112 => 51,  109 => 50,  106 => 49,  103 => 47,  100 => 46,  97 => 45,  94 => 44,  92 => 43,  88 => 41,  86 => 39,  79 => 37,  76 => 35,  74 => 34,  71 => 32,  69 => 31,  67 => 29,  52 => 28,  45 => 26,  43 => 21,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/adaptivetheme/at_core/templates/navigation/menu.html.twig", "/home1/adamloga/public_html/drupal-8.4.5/themes/adaptivetheme/at_core/templates/navigation/menu.html.twig");
    }
}
