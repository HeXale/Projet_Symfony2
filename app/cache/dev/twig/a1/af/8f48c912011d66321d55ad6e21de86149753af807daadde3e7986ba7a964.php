<?php

/* monProjetBundle:Default:createPersonne.html.twig */
class __TwigTemplate_a1af8f48c912011d66321d55ad6e21de86149753af807daadde3e7986ba7a964 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('title', $context, $blocks);
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('content_header', $context, $blocks);
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('content', $context, $blocks);
    }

    // line 1
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Création d'un nouveau client";
    }

    // line 3
    public function block_content_header($context, array $blocks = array())
    {
        echo "";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<html  style=\"background-color:green; color:#fff; height:100%; width:100%; font-size:24px; text-align:left; padding-top:20px;\">

<div>
<p>Vous allez créer un nouveau client</p>
<br><br>
";
        // line 11
        $this->env->loadTemplate("monProjetBundle:Default:formulaire.html.twig")->display($context);
        // line 12
        echo "

</div>
</html>
";
    }

    public function getTemplateName()
    {
        return "monProjetBundle:Default:createPersonne.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  60 => 12,  58 => 11,  51 => 6,  48 => 5,  42 => 3,  36 => 1,  32 => 5,  29 => 4,  27 => 3,  24 => 2,  22 => 1,);
    }
}
