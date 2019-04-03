<?php

/* partials/banner.html.twig */
class __TwigTemplate_4f7a50e07e2eefefb10876c2de229d4c76b04ee75814f6b095fb2e0669e94e0b extends Twig_Template
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
    </h2>
    <div class=\"arrowDown-wrapper\">
        <a href=\"#second-screen\"><i class=\"fas fa-angle-down\"></i></a>
    </div>
    ";
        // line 10
        echo "    <button onclick=\"topFunction()\" id=\"backTop\" title=\"go to top\"><i class=\"fas fa-arrow-up\"></i></button>
    ";
        // line 12
        echo "</section>";
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
        return array (  35 => 12,  32 => 10,  23 => 3,  19 => 1,);
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
    </h2>
    <div class=\"arrowDown-wrapper\">
        <a href=\"#second-screen\"><i class=\"fas fa-angle-down\"></i></a>
    </div>
    {# <div class=\"backTop-wrapper\"> #}
    <button onclick=\"topFunction()\" id=\"backTop\" title=\"go to top\"><i class=\"fas fa-arrow-up\"></i></button>
    {# </div> #}
</section>", "partials/banner.html.twig", "/Users/fernandoted/Sites/onesti-proj/user/themes/onesti/templates/partials/banner.html.twig");
    }
}
