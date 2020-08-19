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

/* article.php.twig */
class __TwigTemplate_5e13630339685c4d8a69a6b1e97f1dbb842f79e12d2555101ce8c8cbb0f78b72 extends \Twig\Template
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
        return "base.php.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("base.php.twig", "article.php.twig", 1);
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
    <div class=\"article-alone\">  
        ";
        // line 10
        if ( !(null === $this->getAttribute(($context["article"] ?? null), "article_image", []))) {
            echo "<img class=\"article__image\" src=\"/";
            echo twig_escape_filter($this->env, ($context["path_to_articles_images"] ?? null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? null), "article_image", []), "html", null, true);
            echo "\" />";
        }
        echo " 
        <p class=\"article__content\">";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? null), "article_content", []), "html", null, true);
        echo "</p>
        <p class=\"article__date\">";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? null), "article_date", []), "html", null, true);
        echo "</p> 
        <button><a href=\"/\">На главную</a></button>
    </div> 
</div>
";
    }

    public function getTemplateName()
    {
        return "article.php.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 12,  72 => 11,  62 => 10,  58 => 8,  55 => 7,  47 => 5,  41 => 3,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.php.twig\" %}

{% block title %}{{title}}{% endblock %}

{% block header %}<h1 class=\"header__title\">{{header_title}}</h1>{% endblock %}

{% block content %}
<div class=\"container\">
    <div class=\"article-alone\">  
        {%if article.article_image is not null %}<img class=\"article__image\" src=\"/{{path_to_articles_images}}/{{article.article_image}}\" />{% endif %} 
        <p class=\"article__content\">{{article.article_content}}</p>
        <p class=\"article__date\">{{article.article_date}}</p> 
        <button><a href=\"/\">На главную</a></button>
    </div> 
</div>
{% endblock %}", "article.php.twig", "D:\\openserver\\OSPanel\\domains\\blog\\app\\views\\article.php.twig");
    }
}
