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

/* index.php.twig */
class __TwigTemplate_fef72e85202ffaa65bb19a7e22603a06904e9ca29f5b19c93a4738ed3950dd96 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.php.twig", "index.php.twig", 1);
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
            echo "            <div class=\"content__article article\"> 
                ";
            // line 12
            if ( !(null === $this->getAttribute($context["article"], "article_image", []))) {
                echo "<img class=\"article_image\" src=\"";
                echo twig_escape_filter($this->env, ($context["path_to_articles_images"] ?? null), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "article_image", []), "html", null, true);
                echo "\" />";
            }
            // line 13
            echo "                <h3 class=\"article__title\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "article_title", []), "html", null, true);
            echo "</h3>
                <p class=\"article__date\">";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "article_date", []), "html", null, true);
            echo "</p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo " 
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "index.php.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 16,  82 => 14,  77 => 13,  69 => 12,  66 => 11,  62 => 10,  58 => 8,  55 => 7,  47 => 5,  41 => 3,  31 => 1,);
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
    <div class=\"content__articles articles\">
        {% for article in articles %}
            <div class=\"content__article article\"> 
                {%if article.article_image is not null %}<img class=\"article_image\" src=\"{{path_to_articles_images}}/{{article.article_image}}\" />{% endif %}
                <h3 class=\"article__title\">{{article.article_title}}</h3>
                <p class=\"article__date\">{{article.article_date}}</p>
            </div>
        {% endfor %} 
    </div>
</div>
{% endblock %}", "index.php.twig", "D:\\openserver\\OSPanel\\domains\\blog\\app\\views\\index.php.twig");
    }
}
