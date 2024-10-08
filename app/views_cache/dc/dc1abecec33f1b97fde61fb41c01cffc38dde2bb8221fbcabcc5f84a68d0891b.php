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

/* index.html */
class __TwigTemplate_8ddb3df54a07f72e56c9be120638da36f9d6939165fb76d80c56b5fd84422e6e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'header' => [$this, 'block_header'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("base.html", "index.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
    }

    // line 5
    public function block_header($context, array $blocks = [])
    {
        echo "<h1 class=\"header__title\">";
        echo twig_escape_filter($this->env, ($context["header_title"] ?? null), "html", null, true);
        echo "</h1>";
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        // line 8
        echo "<div class=\"container\">
    <div class=\"content__articles articles\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 11
            echo "        <div class=\"content__article article\">
                <p>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "articles_title", []), "html", null, true);
            echo "</p>
                <p>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "articles_date", []), "html", null, true);
            echo "</p>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 16,  73 => 13,  69 => 12,  66 => 11,  62 => 10,  58 => 8,  55 => 7,  47 => 5,  41 => 3,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html\" %}

{% block title %}{{title}}{% endblock %}

{% block header %}<h1 class=\"header__title\">{{header_title}}</h1>{% endblock %}

{% block content %}
<div class=\"container\">
    <div class=\"content__articles articles\">
        {% for article in articles %}
        <div class=\"content__article article\">
                <p>{{article.articles_title}}</p>
                <p>{{article.articles_date}}</p>
        </div>
        {% endfor %}
    </div>
</div>
{% endblock %}", "index.html", "D:\\openserver\\OSPanel\\domains\\blog\\app\\views\\index.html");
    }
}
