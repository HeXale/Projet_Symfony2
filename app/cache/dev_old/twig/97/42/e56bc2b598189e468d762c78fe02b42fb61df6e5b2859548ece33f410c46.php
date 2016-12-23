<?php

/* SeveinfoFrontCarteBundle:Deust:appel.html.twig */
class __TwigTemplate_9742e56bc2b598189e468d762c78fe02b42fb61df6e5b2859548ece33f410c46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["arg"]) ? $context["arg"] : $this->getContext($context, "arg")), "html", null, true);
        echo " : ";
        echo twig_escape_filter($this->env, (isset($context["laDate"]) ? $context["laDate"] : $this->getContext($context, "laDate")), "html", null, true);
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
        return array (  19 => 1,);
    }
}
