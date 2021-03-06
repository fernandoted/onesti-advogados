<?php

/* partials/logo.html.twig */
class __TwigTemplate_c07c05e4c9d782304dbb919f5b3277d858d670884d97c7ea6948fb8b31e27ff3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 10
        echo "
<img src=\"";
        // line 11
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/logo/logo-white-02.png");
        echo "\" alt=\"";
        echo $this->getAttribute(($context["site"] ?? null), "name", []);
        echo "\" />";
    }

    public function getTemplateName()
    {
        return "partials/logo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 11,  19 => 10,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# {% set logo = theme_var(mobile ? 'custom_logo_mobile' : 'custom_logo') %}
<a href=\"{{ home_url }}\" class=\"navbar-brand mr-10\">
{% if logo %}
  {% set logo_file = (logo|first).name %}
  <img src=\"{{ url('theme://images/logo/' ~ logo_file)  }}\" alt=\"{{ site.name }}\" />
{% else %}
  {% include('@images/logo.png') %}
{% endif %}
</a> #}

<img src=\"{{ url('theme://images/logo/logo-white-02.png') }}\" alt=\"{{ site.name }}\" />", "partials/logo.html.twig", "/Users/fernandoted/Sites/onesti-proj/user/themes/base-theme/templates/partials/logo.html.twig");
    }
}
