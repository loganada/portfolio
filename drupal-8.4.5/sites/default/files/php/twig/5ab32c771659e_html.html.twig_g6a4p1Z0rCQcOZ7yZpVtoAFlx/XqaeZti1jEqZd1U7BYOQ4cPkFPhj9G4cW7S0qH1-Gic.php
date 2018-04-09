<?php

/* themes/adaptivetheme/at_core/templates/layout/html.html.twig */
class __TwigTemplate_e62caa84c0d3a26db715d774da48c465e80da549c9df1e7e98a3e3dc3e17f034 extends Twig_Template
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
        $tags = array("if" => 33, "set" => 44);
        $filters = array("raw" => 31, "safe_join" => 39, "clean_class" => 47, "without" => 56, "t" => 58);
        $functions = array("attach_library" => 26);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'set'),
                array('raw', 'safe_join', 'clean_class', 'without', 't'),
                array('attach_library')
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

        // line 26
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("at_core/at.breakpoints"), "html", null, true));
        // line 27
        echo "<!DOCTYPE html>
<html";
        // line 28
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["html_attributes"] ?? null), "addClass", array(0 => "no-js", 1 => "adaptivetheme"), "method"), "html", null, true));
        echo ">
  <head>
    ";
        // line 30
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["touch_icons"] ?? null), "html", null, true));
        echo "
    <head-placeholder token=\"";
        // line 31
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["placeholder_token"] ?? null)));
        echo "\">
    <link rel=\"dns-prefetch\" href=\"//cdnjs.cloudflare.com\">";
        // line 33
        if (($context["google_dns_prefetch"] ?? null)) {
            // line 34
            echo "<link rel=\"dns-prefetch\" href=\"//fonts.googleapis.com\">";
        }
        // line 36
        if (($context["typekit_dns_prefetch"] ?? null)) {
            // line 37
            echo "<link rel=\"dns-prefetch\" href=\"//use.typekit.net\">";
        }
        // line 39
        echo "<title>";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->safeJoin($this->env, ($context["head_title"] ?? null), " | ")));
        echo "</title>
    <css-placeholder token=\"";
        // line 40
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["placeholder_token"] ?? null)));
        echo "\">
    <js-placeholder token=\"";
        // line 41
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["placeholder_token"] ?? null)));
        echo "\">
  </head>";
        // line 44
        $context["body_classes"] = array(0 => ((        // line 45
($context["logged_in"] ?? null)) ? ("user-logged-in") : ("user-logged-out")), 1 => ((        // line 46
($context["is_front"] ?? null)) ? ("path-frontpage") : ("path-not-frontpage")), 2 => ((        // line 47
($context["root_path"] ?? null)) ? (("path-" . \Drupal\Component\Utility\Html::getClass(($context["root_path"] ?? null)))) : ("")), 3 => (($this->getAttribute(        // line 48
($context["path_info"] ?? null), "args", array())) ? (("path-" . $this->getAttribute(($context["path_info"] ?? null), "args", array()))) : ("")), 4 => (($this->getAttribute(        // line 49
($context["path_info"] ?? null), "query", array())) ? (("path-query-" . $this->getAttribute(($context["path_info"] ?? null), "query", array()))) : ("")), 5 => ((        // line 50
($context["node_type"] ?? null)) ? (("page-node-type--" . \Drupal\Component\Utility\Html::getClass(($context["node_type"] ?? null)))) : ("")), 6 => (($this->getAttribute(        // line 51
($context["head_title_array"] ?? null), "name", array())) ? (("site-name--" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(($context["head_title_array"] ?? null), "name", array())))) : ("")), 7 => (($this->getAttribute(        // line 52
($context["theme"] ?? null), "name", array())) ? (("theme-name--" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(($context["theme"] ?? null), "name", array())))) : ("")), 8 => ((        // line 53
($context["db_offline"] ?? null)) ? ("db-offline") : ("")));
        // line 56
        echo "<body role=\"document\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_without($this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["body_classes"] ?? null)), "method"), "role"), "html", null, true));
        echo ">
    ";
        // line 58
        echo "    <a href=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["skip_link_target"] ?? null), "html", null, true));
        echo "\" class=\"visually-hidden focusable skip-link\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Skip to main content")));
        echo "</a>
    ";
        // line 59
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["page_top"] ?? null), "html", null, true));
        echo "
    ";
        // line 60
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["page"] ?? null), "html", null, true));
        echo "
    ";
        // line 61
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["page_bottom"] ?? null), "html", null, true));
        echo "
    <js-bottom-placeholder token=\"";
        // line 62
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["placeholder_token"] ?? null)));
        echo "\">
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "themes/adaptivetheme/at_core/templates/layout/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 62,  115 => 61,  111 => 60,  107 => 59,  100 => 58,  95 => 56,  93 => 53,  92 => 52,  91 => 51,  90 => 50,  89 => 49,  88 => 48,  87 => 47,  86 => 46,  85 => 45,  84 => 44,  80 => 41,  76 => 40,  71 => 39,  68 => 37,  66 => 36,  63 => 34,  61 => 33,  57 => 31,  53 => 30,  48 => 28,  45 => 27,  43 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/adaptivetheme/at_core/templates/layout/html.html.twig", "/home1/adamloga/public_html/drupal-8.4.5/themes/adaptivetheme/at_core/templates/layout/html.html.twig");
    }
}
