<?php

/* SeveinfoFrontCarteBundle:Default:client.html.twig */
class __TwigTemplate_e723cefe63a9853e5b905dd27ee47ed4d79fd6e687773c02ee870c0f850e0fad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SeveinfoFrontCarteBundle::layout.html.twig");

        $this->blocks = array(
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

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<strong>Client Id</strong>&nbsp; ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "id", array()), "html", null, true);
        echo "<br>
<strong>Client Nom Prénom</strong>&nbsp; ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "nom", array()), "html", null, true);
        echo " 
";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "prenom", array()), "html", null, true);
        echo "<br>
<strong>Client Mail</strong>&nbsp; ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "mail", array()), "html", null, true);
        echo "<br>
";
    }

    public function getTemplateName()
    {
        return "SeveinfoFrontCarteBundle:Default:client.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  40 => 5,  36 => 4,  31 => 3,  28 => 2,);
    }
}
