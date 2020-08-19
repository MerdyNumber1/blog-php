<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.twig */
class __TwigTemplate_06a361afc44a010d3e7771f69858d4b99780228e7ac50354e887a2cc1d598461 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'header' => [$this, 'block_header'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 10
        echo "</head>
<body>
    ";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 18
        echo "</body>
</html>";
    }

    // line 4
    public function block_head($context, array $blocks = [])
    {
        // line 5
        echo "    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo " - Блог</title>
    <link rel=\"stylesheet\" href=\"static/style/style.css\">
    ";
    }

    public function block_title($context, array $blocks = [])
    {
    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        // line 13
        echo "    <main class=\"main\">
        <header class=\"main__header header\">";
        // line 14
        $this->displayBlock('header', $context, $blocks);
        echo "</header>
        <section class=\"main__content content\">";
        // line 15
        $this->displayBlock('content', $context, $blocks);
        echo "</section>
    </main>
    ";
    }

    // line 14
    public function block_header($context, array $blocks = [])
    {
    }

    // line 15
    public function block_content($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  93 => 15,  88 => 14,  81 => 15,  77 => 14,  74 => 13,  71 => 12,  60 => 7,  56 => 5,  53 => 4,  48 => 18,  46 => 12,  42 => 10,  40 => 4,  35 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    {% block head %}
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>{% block title %}{% endblock %} - Блог</title>
    <link rel=\"stylesheet\" href=\"static/style/style.css\">
    {% endblock %}
</head>
<body>
    {% block body %}
    <main class=\"main\">
        <header class=\"main__header header\">{% block header %}{% endblock %}</header>
        <section class=\"main__content content\">{% block content %}{% endblock %}</section>
    </main>
    {% endblock %}
</body>
</html>", "base.html.twig", "D:\\openserver\\OSPanel\\domains\\blog\\app\\views\\base.html.twig");
    }
}
