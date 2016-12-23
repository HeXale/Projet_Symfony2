<?php

/* SeveinfoFrontCarteBundle:Deust:appel.html.twig */
class __TwigTemplate_9742e56bc2b598189e468d762c78fe02b42fb61df6e5b2859548ece33f410c46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SeveinfoFrontCarteBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SeveinfoFrontCarteBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Demos";
    }

    // line 5
    public function block_content_header($context, array $blocks = array())
    {
        echo "";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["arg"]) ? $context["arg"] : $this->getContext($context, "arg")), "html", null, true);
        echo " : ";
        echo twig_escape_filter($this->env, (isset($context["laDate"]) ? $context["laDate"] : $this->getContext($context, "laDate")), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "SeveinfoFrontCarteBundle:Deust:appel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  42 => 7,  36 => 5,  30 => 3,);
    }
}
