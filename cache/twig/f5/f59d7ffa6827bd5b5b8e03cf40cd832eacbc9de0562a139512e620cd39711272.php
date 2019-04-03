<?php

/* partials/banner.html.twig */
class __TwigTemplate_30d0df642e437f81a44430187f3e217c2b37a1685882da9ec0fc1c2f988e9b53 extends Twig_Template
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
        // line 1
        echo "<section id=\"bannerTop\">
    <h2>
        <img src=\"";
        // line 3
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/avatar-dark.png");
        echo "\" alt=\"Amamos o que fazemos\" />
        MAMOS O QUE FAZEMOS
    <h2>
</section>";
    }

    public function getTemplateName()
    {
        return "partials/banner.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"bannerTop\">
    <h2>
        <img src=\"{{ url('theme://images/avatar-dark.png') }}\" alt=\"Amamos o que fazemos\" />
        MAMOS O QUE FAZEMOS
    <h2>
</section>", "partials/banner.html.twig", "/Users/fernandoted/Sites/onesti-proj/user/themes/base-theme/templates/partials/banner.html.twig");
    }
}
