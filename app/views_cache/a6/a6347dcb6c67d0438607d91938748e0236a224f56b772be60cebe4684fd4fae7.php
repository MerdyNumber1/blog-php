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

/* error.php.twig */
class __TwigTemplate_988c89b3b0bbc7d5582154f4ca39ed8aa05b7023e124f0bc5787fd7cebd32cf6 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'header' => [$this, 'block_header'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.php.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("base.php.twig", "error.php.twig", 1);
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
        echo "</h1><button class=\"btn-error\">На главную</button>";
    }

    public function getTemplateName()
    {
        return "error.php.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 5,  40 => 3,  30 => 1,);
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

{% block header %}<h1 class=\"header__title\">{{header_title}}</h1><button class=\"btn-error\">На главную</button>{% endblock %}
 ", "error.php.twig", "D:\\openserver\\OSPanel\\domains\\blog\\app\\views\\error.php.twig");
    }
}
