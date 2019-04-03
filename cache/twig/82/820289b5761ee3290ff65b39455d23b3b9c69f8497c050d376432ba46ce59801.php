<?php

/* partials/navigation.html.twig */
class __TwigTemplate_a0d249d35c22362be4be133986464152d8f59e92dd48d535ab1e88ced3da31b4 extends Twig_Template
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
        <a>ESCRITÓRIO</a>
        <ul class=\"dropdown-box\">
            <li>
                <a href=\"#unicosLink\">SOMOS ÚNICOS | porque nós</a>
            </li>
            <li>
                <a href=\"#viemosLink\">DE ONDE VIEMOS | história</a>
            </li>
            <li>
                <a href=\"#vemosLink\">O QUE VEMOS | visão</a>
            </li>
            <li>
                <a href=\"#pensamosLink\">COMO PENSAMOS | política</a>
            </li>
            <li>
                <a href=\"#vivemosLink\">COMO VIVEMOS | valores</a>
            </li>
            <li>
                <a href=\"#praticamosLink\">COMO PRATICAMOS | responsabilidades</a>
            </li>
        </ul>
    </li>
    <li>
        <a>PRÁTICA</a>
        <ul class=\"dropdown-box\">
            <li>
                <a href=\"#temosLink\">O QUE TEMOS | base</a>
            </li>
            <li>
                <a href=\"#atenderLink\">PRONTOS PRA TE ATENDER | estrutura</a>
            </li>
            <li>
                <a href=\"#solucoesLink\">NOSSA SOLUÇÕES | soluções</a>
            </li>
            <li>
                <a href=\"#atuacaoLink\">NOSSA ATUAÇÃO | área</a>
            </li>
        </ul>
    <li>
        <a href=\"#vemos\">RECONHECIMENTO</a>
        <ul class=\"dropdown-box\">
            <li>
                <a href=\"#estivemosLink\">ONDE ESTIVEMOS | mídia</a>
            </li>
            <li>
                <a href=\"#\">O QUE DIZEM POR AÍ | testemunhos</a>
            </li>
            <li>
                <a href=\"#casesLink\">CASES DE SUCESSO | conquistas</a>
            </li>
        </ul>
    </li>
    <li>
        <a href=\"#vemos\">MÍDIAS</a>
        <ul class=\"dropdown-box\">
            <li>
                <a href=\"#\">FACEBOOK</a>
            </li>
            <li>
                <a href=\"#\">LINKEDIN</a>
            </li>
            <li>
                <a href=\"#\">INSTAGRAM</a>
            </li>
            <li>
                <a href=\"#\">TWITTER</a>
            </li>
            <li>
                <a href=\"#\">GOOGLE +</a>
            </li>
            <li>
                <a href=\"#\">YOUTUBE</a>
            </li>
            <li>
                <a href=\"#\">YELP</a>
            </li>
            <li>
                <a href=\"#\">BLOG</a>
            </li>
        </ul>
    </li>
    ";
        // line 101
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "partials/navigation.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  105 => 101,  19 => 6,);
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
        <a>ESCRITÓRIO</a>
        <ul class=\"dropdown-box\">
            <li>
                <a href=\"#unicosLink\">SOMOS ÚNICOS | porque nós</a>
            </li>
            <li>
                <a href=\"#viemosLink\">DE ONDE VIEMOS | história</a>
            </li>
            <li>
                <a href=\"#vemosLink\">O QUE VEMOS | visão</a>
            </li>
            <li>
                <a href=\"#pensamosLink\">COMO PENSAMOS | política</a>
            </li>
            <li>
                <a href=\"#vivemosLink\">COMO VIVEMOS | valores</a>
            </li>
            <li>
                <a href=\"#praticamosLink\">COMO PRATICAMOS | responsabilidades</a>
            </li>
        </ul>
    </li>
    <li>
        <a>PRÁTICA</a>
        <ul class=\"dropdown-box\">
            <li>
                <a href=\"#temosLink\">O QUE TEMOS | base</a>
            </li>
            <li>
                <a href=\"#atenderLink\">PRONTOS PRA TE ATENDER | estrutura</a>
            </li>
            <li>
                <a href=\"#solucoesLink\">NOSSA SOLUÇÕES | soluções</a>
            </li>
            <li>
                <a href=\"#atuacaoLink\">NOSSA ATUAÇÃO | área</a>
            </li>
        </ul>
    <li>
        <a href=\"#vemos\">RECONHECIMENTO</a>
        <ul class=\"dropdown-box\">
            <li>
                <a href=\"#estivemosLink\">ONDE ESTIVEMOS | mídia</a>
            </li>
            <li>
                <a href=\"#\">O QUE DIZEM POR AÍ | testemunhos</a>
            </li>
            <li>
                <a href=\"#casesLink\">CASES DE SUCESSO | conquistas</a>
            </li>
        </ul>
    </li>
    <li>
        <a href=\"#vemos\">MÍDIAS</a>
        <ul class=\"dropdown-box\">
            <li>
                <a href=\"#\">FACEBOOK</a>
            </li>
            <li>
                <a href=\"#\">LINKEDIN</a>
            </li>
            <li>
                <a href=\"#\">INSTAGRAM</a>
            </li>
            <li>
                <a href=\"#\">TWITTER</a>
            </li>
            <li>
                <a href=\"#\">GOOGLE +</a>
            </li>
            <li>
                <a href=\"#\">YOUTUBE</a>
            </li>
            <li>
                <a href=\"#\">YELP</a>
            </li>
            <li>
                <a href=\"#\">BLOG</a>
            </li>
        </ul>
    </li>
    {# <li>
        <a>IDIOMAS</a>
        <ul>
            <li>
                <a class=\"port lang select\">PT</a>
            </li>
            <li>
                <a class=\"spanish lang\">ESP</a>
            </li>
        </ul>
    </li> #}
</ul>", "partials/navigation.html.twig", "/Users/fernandoted/Sites/onesti-proj/user/themes/onesti/templates/partials/navigation.html.twig");
    }
}
