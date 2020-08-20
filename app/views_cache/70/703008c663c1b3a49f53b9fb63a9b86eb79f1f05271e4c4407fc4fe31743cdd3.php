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

/* signup.php.twig */
class __TwigTemplate_70be42f59b5c35ca2558215cbd36c6a7888607331ee22e353bacd9d613c162a1 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.php.twig", "signup.php.twig", 1);
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
    }

    public function getTemplateName()
    {
        return "signup.php.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 7,  47 => 5,  41 => 3,  31 => 1,);
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

{% block content %}{% endblock %}", "signup.php.twig", "D:\\openserver\\OSPanel\\domains\\blog\\app\\views\\signup.php.twig");
    }
}
