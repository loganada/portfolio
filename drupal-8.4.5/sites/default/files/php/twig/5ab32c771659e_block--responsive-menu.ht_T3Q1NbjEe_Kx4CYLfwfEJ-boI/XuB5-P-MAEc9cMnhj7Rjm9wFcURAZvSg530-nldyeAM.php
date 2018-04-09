<?php

/* themes/adaptivetheme/at_core/templates/block/block--responsive-menu.html.twig */
class __TwigTemplate_918e8bd27f549d8a1b40fa49978836c2ac58aac0c008d3f88f5bc929e5e1f382 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 29, "block" => 62, "if" => 65, "trans" => 70);
        $filters = array("clean_class" => 31, "clean_id" => 36, "t" => 37, "without" => 50);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'block', 'if', 'trans'),
                array('clean_class', 'clean_id', 't', 'without'),
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

        // line 29
        $context["classes"] = array(0 => "rm-block", 1 => ("rm-config-provider--" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 31
($context["configuration"] ?? null), "provider", array()))), 2 => ("rm-plugin-id--" . \Drupal\Component\Utility\Html::getClass(        // line 32
($context["plugin_id_clean"] ?? null))), 3 => "js-hide");
        // line 36
        $context["heading_id"] = ($this->getAttribute(($context["attributes"] ?? null), "id", array()) . \Drupal\Component\Utility\Html::getId("-menu"));
        // line 37
        $context["config_label"] = (($this->getAttribute(($context["configuration"] ?? null), "label", array())) ? ($this->getAttribute(($context["configuration"] ?? null), "label", array())) : (t("Main menu")));
        // line 38
        $context["rm_label_class"] = (($this->getAttribute(($context["configuration"] ?? null), "label", array())) ? ("rm-toggle__label") : ("visually-hidden"));
        // line 40
        echo "<svg style=\"display:none;\">
  ";
        // line 42
        echo "  <symbol id=\"rm-toggle__icon--open\" viewBox=\"0 0 1792 1792\" preserveAspectRatio=\"xMinYMid meet\">
    <path class=\"rm-toggle__icon__path\" d=\"M1664 1344v128q0 26-19 45t-45 19h-1408q-26 0-45-19t-19-45v-128q0-26 19-45t45-19h1408q26 0 45 19t19 45zm0-512v128q0 26-19 45t-45 19h-1408q-26 0-45-19t-19-45v-128q0-26 19-45t45-19h1408q26 0 45 19t19 45zm0-512v128q0 26-19 45t-45 19h-1408q-26 0-45-19t-19-45v-128q0-26 19-45t45-19h1408q26 0 45 19t19 45z\"/>
  </symbol>
  ";
        // line 46
        echo "  <symbol id=\"rm-toggle__icon--close\" viewBox=\"0 0 1792 1792\" preserveAspectRatio=\"xMinYMid meet\">
    <path class=\"rm-toggle__icon__path\" d=\"M1490 1322q0 40-28 68l-136 136q-28 28-68 28t-68-28l-294-294-294 294q-28 28-68 28t-68-28l-136-136q-28-28-28-68t28-68l294-294-294-294q-28-28-28-68t28-68l136-136q28-28 68-28t68 28l294 294 294-294q28-28 68-28t68 28l136 136q28 28 28 68t-28 68l-294 294 294 294q28 28 28 68z\"/>
  </symbol>
</svg>
<nav role=\"navigation\" aria-labelledby=\"";
        // line 50
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["heading_id"] ?? null), "html", null, true));
        echo "\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_without($this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "role", "aria-labelledby"), "html", null, true));
        echo " id=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, \Drupal\Component\Utility\Html::getId(($context["plugin_id"] ?? null)), "html", null, true));
        echo "\">
  <div class=\"rm-block__inner\">
    <div";
        // line 52
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_without($this->getAttribute(($context["title_attributes"] ?? null), "addClass", array(0 => "rm-toggle"), "method"), "id"), "html", null, true));
        echo ">
      <button href=\"#rm-content\" class=\"rm-toggle__link un-button\" role='button' aria-controls=\"rm-content\" aria-expanded=\"false\">
        ";
        // line 55
        echo "        <svg class=\"rm-toggle__icon\">
          <use id=\"rm-toggle__icon--use\" xlink:href=\"#rm-toggle__icon--open\"></use>
        </svg>
        ";
        // line 59
        echo "        <span class=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rm_label_class"] ?? null), "html", null, true));
        echo "\" id=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["heading_id"] ?? null), "html", null, true));
        echo "\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["config_label"] ?? null), "html", null, true));
        echo "</span>
      </button>
    </div>";
        // line 62
        $this->displayBlock('content', $context, $blocks);
        // line 77
        echo "</div>
</nav>
";
    }

    // line 62
    public function block_content($context, array $blocks = array())
    {
        // line 63
        echo "<div class=\"rm-block__content\" id=\"rm-content\">
        ";
        // line 65
        if (($context["click_menus_enabled"] ?? null)) {
            // line 66
            echo "<span id=\"rm-accordion-trigger\" class=\"hidden\">
            <button class=\"rm-accordion-trigger un-button\" role='button' aria-controls=\"child-menu\" aria-expanded=\"false\">
              <svg class=\"rm-accordion-trigger__icon\" viewBox=\"0 0 1792 1792\" preserveAspectRatio=\"xMinYMid meet\"><path d=\"M1600 736v192q0 40-28 68t-68 28h-416v416q0 40-28 68t-68 28h-192q-40 0-68-28t-28-68v-416h-416q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h416v-416q0-40 28-68t68-28h192q40 0 68 28t28 68v416h416q40 0 68 28t28 68z\"/></svg>
              ";
            // line 70
            echo "              <span class=\"visually-hidden\">";
            echo t("Toggle sub-menu", array());
            echo "</span>
            </button>
          </span>";
        }
        // line 74
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
        // line 75
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "themes/adaptivetheme/at_core/templates/block/block--responsive-menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 75,  125 => 74,  118 => 70,  113 => 66,  111 => 65,  108 => 63,  105 => 62,  99 => 77,  97 => 62,  87 => 59,  82 => 55,  77 => 52,  68 => 50,  62 => 46,  57 => 42,  54 => 40,  52 => 38,  50 => 37,  48 => 36,  46 => 32,  45 => 31,  44 => 29,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/adaptivetheme/at_core/templates/block/block--responsive-menu.html.twig", "/home1/adamloga/public_html/drupal-8.4.5/themes/adaptivetheme/at_core/templates/block/block--responsive-menu.html.twig");
    }
}
