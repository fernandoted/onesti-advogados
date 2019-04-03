<?php

/* partials/base.html.twig */
class __TwigTemplate_f710882ade001a597eb8fbcff04dc372c7fe9c72118481fcc66e7038d62dcc38 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body_classes' => [$this, 'block_body_classes'],
            'header' => [$this, 'block_header'],
            'header_navigation' => [$this, 'block_header_navigation'],
            'banner' => [$this, 'block_banner'],
            'hero' => [$this, 'block_hero'],
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'bottom' => [$this, 'block_bottom'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["body_classes"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->bodyClassFunc([0 => "header-fixed", 1 => "header-animated", 2 => "header-dark", 3 => "header-transparent", 4 => "sticky-footer"]);
        // line 2
        $context["grid_size"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("grid-size");
        // line 3
        $context["compress"] = (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("production-mode")) ? (".min.css") : (".css"));
        // line 4
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 5
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", []), "site", []), "default_lang", [])));
        echo "\">
<head>
";
        // line 7
        $this->displayBlock('head', $context, $blocks);
        // line 53
        echo "</head>
<body id=\"top\" class=\"";
        // line 54
        $this->displayBlock('body_classes', $context, $blocks);
        echo "\">
    <div id=\"page-wrapper\">
    ";
        // line 56
        $this->displayBlock('header', $context, $blocks);
        // line 108
        echo "
    ";
        // line 109
        $this->displayBlock('banner', $context, $blocks);
        // line 112
        echo "
    ";
        // line 113
        $this->displayBlock('hero', $context, $blocks);
        // line 114
        echo "
        <section id=\"start\">
        ";
        // line 116
        $this->displayBlock('body', $context, $blocks);
        // line 127
        echo "        </section>

    </div>

    ";
        // line 131
        $this->displayBlock('footer', $context, $blocks);
        // line 134
        echo "    
    <div class=\"mobile-container\">
        <div class=\"overlay\" id=\"overlay\">
            <div class=\"mobile-logo\">
                ";
        // line 138
        $this->loadTemplate("partials/logo.html.twig", "partials/base.html.twig", 138)->display(array_merge($context, ["mobile" => true]));
        // line 139
        echo "            </div>
            <nav class=\"overlay-menu\">
                ";
        // line 141
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 141)->display(array_merge($context, ["tree" => true]));
        // line 142
        echo "            </nav>
        </div>
    </div>

";
        // line 146
        $this->displayBlock('bottom', $context, $blocks);
        // line 149
        echo "
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.4/jquery.touchSwipe.min.js'></script>
<script src=\"https://code.jquery.com/jquery-2.2.0.min.js\" type=\"text/javascript\"></script>
<script src=\"/onesti-proj/user/themes/onesti/js/slick.min.js\" type=\"text/javascript\" charset=\"utf-8\"></script>

</body>
</html>
";
    }

    // line 7
    public function block_head($context, array $blocks = [])
    {
        // line 8
        echo "    <meta charset=\"utf-8\" />
    ";
        // line 10
        echo "    <title>Onesti Advogados</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 14
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 14)->display($context);
        // line 15
        echo "
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 16
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/favicon.png");
        echo "\" />
    <link rel=\"canonical\" href=\"";
        // line 17
        echo $this->getAttribute(($context["page"] ?? null), "url", [0 => true, 1 => true], "method");
        echo "\" />
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.7.1/css/all.css\" integrity=\"sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr\" crossorigin=\"anonymous\">
    <link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css'>
    ";
        // line 21
        echo "
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js\"></script>
    ";
        // line 24
        echo "
    ";
        // line 25
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 35
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "

    ";
        // line 37
        $this->displayBlock('javascripts', $context, $blocks);
        // line 50
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "

";
    }

    // line 25
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 26
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => ("theme://css-compiled/spectre" . ($context["compress"] ?? null))], "method");
        // line 27
        echo "        ";
        if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("spectre.exp")) {
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => ("theme://css-compiled/spectre-exp" . ($context["compress"] ?? null))], "method");
        }
        // line 28
        echo "        ";
        if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("spectre.icons")) {
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => ("theme://css-compiled/spectre-icons" . ($context["compress"] ?? null))], "method");
        }
        // line 29
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => ("theme://css-compiled/theme" . ($context["compress"] ?? null))], "method");
        // line 30
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/custom.css"], "method");
        // line 31
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/line-awesome.min.css"], "method");
        // line 32
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/slick-theme.css"], "method");
        // line 33
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/slick.css"], "method");
        // line 34
        echo "    ";
    }

    // line 37
    public function block_javascripts($context, array $blocks = [])
    {
        // line 38
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "jquery", 1 => 101], "method");
        // line 39
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/jquery.treemenu.js", 1 => ["group" => "bottom"]], "method");
        // line 40
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/site.js", 1 => ["group" => "bottom"]], "method");
        // line 41
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/toggle_block.js", 1 => ["group" => "bottom"]], "method");
        // line 42
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/smooth-scroll.js", 1 => ["group" => "bottom"]], "method");
        // line 43
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/back-top.js", 1 => ["group" => "bottom"]], "method");
        // line 44
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/all-collapse.js", 1 => ["group" => "bottom"]], "method");
        // line 45
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/language.js", 1 => ["group" => "bottom"]], "method");
        // line 46
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/carousel-slide.js", 1 => ["group" => "bottom"]], "method");
        // line 47
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/header.js", 1 => ["group" => "bottom"]], "method");
        // line 48
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/slick-slide.js", 1 => ["group" => "bottom"]], "method");
        // line 49
        echo "    ";
    }

    // line 54
    public function block_body_classes($context, array $blocks = [])
    {
        echo ($context["body_classes"] ?? null);
    }

    // line 56
    public function block_header($context, array $blocks = [])
    {
        // line 57
        echo "        <section id=\"header\" class=\"section\">
            ";
        // line 59
        echo "            <section class=\"topbarInner\">
                <nav class=\"navbar\">
                    <section class=\"navbar-section logo\">
                        <div class=\"navbar-wrapper\">
                            ";
        // line 63
        $this->loadTemplate("partials/logo.html.twig", "partials/base.html.twig", 63)->display($context);
        // line 64
        echo "                            <div class=\"menuIcon-wrapper\">
                                <i class=\"fas fa-bars\" style=\"color: #FFF\"></i>
                                <nav class=\"dropmenu animated\">
                                ";
        // line 67
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 70
        echo "                                </nav>
                            </div>
                        </div>
                        <div class=\"languageItem\">
                            <ul>
                                <li>
                                    <a href=\"#\">IDIOMA</a>
                                    ";
        // line 85
        echo "                                </li>
                            </ul>
                        </div>
                    </section>
                    ";
        // line 90
        echo "                        

                        ";
        // line 95
        echo "
                    ";
        // line 97
        echo "                </nav>
            </section>
        </section>
        <div class=\"mobile-menu\">
            <div class=\"button_container\" id=\"toggle\">
                <span class=\"top\"></span>
                <span class=\"middle\"></span>
                <span class=\"bottom\"></span>
            </div>
        </div>
    ";
    }

    // line 67
    public function block_header_navigation($context, array $blocks = [])
    {
        // line 68
        echo "                                    ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 68)->display($context);
        // line 69
        echo "                                ";
    }

    // line 109
    public function block_banner($context, array $blocks = [])
    {
        // line 110
        echo "        ";
        $this->loadTemplate("partials/banner.html.twig", "partials/base.html.twig", 110)->display($context);
        // line 111
        echo "    ";
    }

    // line 113
    public function block_hero($context, array $blocks = [])
    {
    }

    // line 116
    public function block_body($context, array $blocks = [])
    {
        // line 117
        echo "            <section id=\"body-wrapper\" class=\"section\">
                ";
        // line 119
        echo "                <section class=\"";
        echo ($context["grid_size"] ?? null);
        echo "\">
                    ";
        // line 123
        echo "                    ";
        $this->displayBlock('content', $context, $blocks);
        // line 124
        echo "                </section>
            </section>
        ";
    }

    // line 123
    public function block_content($context, array $blocks = [])
    {
    }

    // line 131
    public function block_footer($context, array $blocks = [])
    {
        // line 132
        echo "        ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 132)->display($context);
        // line 133
        echo "    ";
    }

    // line 146
    public function block_bottom($context, array $blocks = [])
    {
        // line 147
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", [0 => "bottom"], "method");
        echo "
";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  369 => 147,  366 => 146,  362 => 133,  359 => 132,  356 => 131,  351 => 123,  345 => 124,  342 => 123,  337 => 119,  334 => 117,  331 => 116,  326 => 113,  322 => 111,  319 => 110,  316 => 109,  312 => 69,  309 => 68,  306 => 67,  292 => 97,  289 => 95,  285 => 90,  279 => 85,  270 => 70,  268 => 67,  263 => 64,  261 => 63,  255 => 59,  252 => 57,  249 => 56,  243 => 54,  239 => 49,  236 => 48,  233 => 47,  230 => 46,  227 => 45,  224 => 44,  221 => 43,  218 => 42,  215 => 41,  212 => 40,  209 => 39,  206 => 38,  203 => 37,  199 => 34,  196 => 33,  193 => 32,  190 => 31,  187 => 30,  184 => 29,  179 => 28,  174 => 27,  171 => 26,  168 => 25,  160 => 50,  158 => 37,  152 => 35,  150 => 25,  147 => 24,  143 => 21,  137 => 17,  133 => 16,  130 => 15,  128 => 14,  122 => 10,  119 => 8,  116 => 7,  103 => 149,  101 => 146,  95 => 142,  93 => 141,  89 => 139,  87 => 138,  81 => 134,  79 => 131,  73 => 127,  71 => 116,  67 => 114,  65 => 113,  62 => 112,  60 => 109,  57 => 108,  55 => 56,  50 => 54,  47 => 53,  45 => 7,  40 => 5,  37 => 4,  35 => 3,  33 => 2,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set body_classes = body_class(['header-fixed', 'header-animated', 'header-dark', 'header-transparent', 'sticky-footer']) %}
{% set grid_size = theme_var('grid-size') %}
{% set compress = theme_var('production-mode') ? '.min.css' : '.css' %}
<!DOCTYPE html>
<html lang=\"{{ grav.language.getActive ?: grav.config.site.default_lang }}\">
<head>
{% block head %}
    <meta charset=\"utf-8\" />
    {# <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title> #}
    <title>Onesti Advogados</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    {% include 'partials/metadata.html.twig' %}

    <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/favicon.png') }}\" />
    <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.7.1/css/all.css\" integrity=\"sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr\" crossorigin=\"anonymous\">
    <link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css'>
    {# <link rel=\"stylesheet\" type=\"text/css\" href=\"//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css\"/> #}

    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js\"></script>
    {# <script type=\"text/javascript\" src=\"//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js\"></script> #}

    {% block stylesheets %}
        {% do assets.addCss('theme://css-compiled/spectre'~compress) %}
        {% if theme_var('spectre.exp') %}{% do assets.addCss('theme://css-compiled/spectre-exp'~compress)  %}{% endif %}
        {% if theme_var('spectre.icons') %}{%  do assets.addCss('theme://css-compiled/spectre-icons'~compress) %}{% endif %}
        {% do assets.addCss('theme://css-compiled/theme'~compress) %}
        {% do assets.addCss('theme://css/custom.css') %}
        {% do assets.addCss('theme://css/line-awesome.min.css') %}
        {% do assets.addCss('theme://css/slick-theme.css') %}
        {% do assets.addCss('theme://css/slick.css') %}
    {% endblock %}
    {{ assets.css()|raw }}

    {% block javascripts %}
        {% do assets.addJs('jquery', 101) %}
        {% do assets.addJs('theme://js/jquery.treemenu.js', {group:'bottom'}) %}
        {% do assets.addJs('theme://js/site.js', {group:'bottom'}) %}
        {% do assets.addJs('theme://js/toggle_block.js', {group:'bottom'}) %}
        {% do assets.addJs('theme://js/smooth-scroll.js', {group:'bottom'}) %}
        {% do assets.addJs('theme://js/back-top.js', {group:'bottom'}) %}
        {% do assets.addJs('theme://js/all-collapse.js', {group:'bottom'}) %}
        {% do assets.addJs('theme://js/language.js', {group:'bottom'}) %}
        {% do assets.addJs('theme://js/carousel-slide.js', {group:'bottom'}) %}
        {% do assets.addJs('theme://js/header.js', {group:'bottom'}) %}
        {% do assets.addJs('theme://js/slick-slide.js', {group:'bottom'}) %}
    {% endblock %}
    {{ assets.js()|raw }}

{% endblock head %}
</head>
<body id=\"top\" class=\"{% block body_classes %}{{ body_classes }}{% endblock %}\">
    <div id=\"page-wrapper\">
    {% block header %}
        <section id=\"header\" class=\"section\">
            {# <section class=\"container {{ grid_size }}\"> #}
            <section class=\"topbarInner\">
                <nav class=\"navbar\">
                    <section class=\"navbar-section logo\">
                        <div class=\"navbar-wrapper\">
                            {% include 'partials/logo.html.twig' %}
                            <div class=\"menuIcon-wrapper\">
                                <i class=\"fas fa-bars\" style=\"color: #FFF\"></i>
                                <nav class=\"dropmenu animated\">
                                {% block header_navigation %}
                                    {% include 'partials/navigation.html.twig' %}
                                {% endblock %}
                                </nav>
                            </div>
                        </div>
                        <div class=\"languageItem\">
                            <ul>
                                <li>
                                    <a href=\"#\">IDIOMA</a>
                                    {# <ul>
                                        <li>
                                            <a>inglês</a>
                                        </li>
                                        <li>
                                            <a>espanhol</a>
                                        </li>
                                    </ul> #}
                                </li>
                            </ul>
                        </div>
                    </section>
                    {# <section class=\"navbar-section desktop-menu\"> #}
                        

                        {# {% if config.plugins.login.enabled and grav.user.username %}
                            <span class=\"login-status-wrapper\"><i class=\"fa fa-user\"></i> {% include 'partials/login-status.html.twig' %}</span>
                        {% endif %} #}

                    {# </section> #}
                </nav>
            </section>
        </section>
        <div class=\"mobile-menu\">
            <div class=\"button_container\" id=\"toggle\">
                <span class=\"top\"></span>
                <span class=\"middle\"></span>
                <span class=\"bottom\"></span>
            </div>
        </div>
    {% endblock %}

    {% block banner %}
        {% include 'partials/banner.html.twig' %}
    {% endblock %}

    {% block hero %}{% endblock %}

        <section id=\"start\">
        {% block body %}
            <section id=\"body-wrapper\" class=\"section\">
                {# <section class=\"container {{ grid_size }}\"> #}
                <section class=\"{{ grid_size }}\">
                    {# {% block messages %}
                        {% include 'partials/messages.html.twig' ignore missing %}
                    {% endblock %} #}
                    {% block content %}{% endblock %}
                </section>
            </section>
        {% endblock %}
        </section>

    </div>

    {% block footer %}
        {% include 'partials/footer.html.twig' %}
    {% endblock %}
    
    <div class=\"mobile-container\">
        <div class=\"overlay\" id=\"overlay\">
            <div class=\"mobile-logo\">
                {% include 'partials/logo.html.twig' with {mobile: true} %}
            </div>
            <nav class=\"overlay-menu\">
                {% include 'partials/navigation.html.twig' with {tree: true} %}
            </nav>
        </div>
    </div>

{% block bottom %}
    {{ assets.js('bottom')|raw }}
{% endblock %}

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.4/jquery.touchSwipe.min.js'></script>
<script src=\"https://code.jquery.com/jquery-2.2.0.min.js\" type=\"text/javascript\"></script>
<script src=\"/onesti-proj/user/themes/onesti/js/slick.min.js\" type=\"text/javascript\" charset=\"utf-8\"></script>

</body>
</html>
", "partials/base.html.twig", "/Users/fernandoted/Sites/onesti-proj/user/themes/onesti/templates/partials/base.html.twig");
    }
}
