<?php

/* partials/navigation.html.twig */
class __TwigTemplate_7a44c79d345fdb723ae4dd82f9148012f8f4457bb2948b0f64177522f6438de1 extends Twig_Template
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
        // line 6
        echo "
<ul>
    <li>
        <a href=\"#unicos\">únicos</a>
    </li>
    <li>
        <a href=\"#viemos\">viemos</a>
    </li>
    <li>
        <a href=\"#estivemos\">estivemos</a>
    </li>
    <li>
        <a href=\"#vemos\">vemos</a>
    </li>
    <li>
        <a href=\"#pensamos\">pensamos</a>
    </li>
    <li>
        <a href=\"#vivemos\">vivemos</a>
    </li>
    <li>
        <a href=\"#vemos\">vemos</a>
    </li>
    <li>
        <a href=\"#solucoes\">soluções</a>
    </li>
    <li>
        <a href=\"#atuacao\">atuação</a>
    </li>
    <li>
        <a href=\"#atendimento\">atendimento</a>
    </li>
    <li>
        <a href=\"#cases\">cases</a>
    </li>
</ul>";
    }

    public function getTemplateName()
    {
        return "partials/navigation.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# {% import 'macros/macros.html.twig' as macros %}

<ul {{ tree ? 'class=\"tree\"' : '' }}>
    {{ macros.nav_loop(pages) }}
</ul> #}

<ul>
    <li>
        <a href=\"#unicos\">únicos</a>
    </li>
    <li>
        <a href=\"#viemos\">viemos</a>
    </li>
    <li>
        <a href=\"#estivemos\">estivemos</a>
    </li>
    <li>
        <a href=\"#vemos\">vemos</a>
    </li>
    <li>
        <a href=\"#pensamos\">pensamos</a>
    </li>
    <li>
        <a href=\"#vivemos\">vivemos</a>
    </li>
    <li>
        <a href=\"#vemos\">vemos</a>
    </li>
    <li>
        <a href=\"#solucoes\">soluções</a>
    </li>
    <li>
        <a href=\"#atuacao\">atuação</a>
    </li>
    <li>
        <a href=\"#atendimento\">atendimento</a>
    </li>
    <li>
        <a href=\"#cases\">cases</a>
    </li>
</ul>", "partials/navigation.html.twig", "/Users/fernandoted/Sites/onesti-proj/user/themes/base-theme/templates/partials/navigation.html.twig");
    }
}
