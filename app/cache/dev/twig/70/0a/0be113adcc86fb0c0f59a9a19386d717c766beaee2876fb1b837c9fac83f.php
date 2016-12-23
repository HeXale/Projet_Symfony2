<?php

/* monProjetBundle:Default:accueil.html.twig */
class __TwigTemplate_700a0be113adcc86fb0c0f59a9a19386d717c766beaee2876fb1b837c9fac83f extends Twig_Template
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
        echo "Symfony - Accueil";
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
        echo "<html  style=\"background-color:blue; color:#fff; height:100%; width:100%; font-size:35px; text-align:center; padding-top:20px;\">
<div>
<br><br>
<strong>Date actuelle : </strong>";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["date_jour"]) ? $context["date_jour"] : $this->getContext($context, "date_jour")), "html", null, true);
        echo "<br>
<strong>Heure actuelle : </strong>";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["heure_jour"]) ? $context["heure_jour"] : $this->getContext($context, "heure_jour")), "html", null, true);
        echo "

<br><br><br><quote>Par Richard Meunier</quote>

</div>
</html>
";
    }

    public function getTemplateName()
    {
        return "monProjetBundle:Default:accueil.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  60 => 10,  56 => 9,  51 => 6,  48 => 5,  42 => 3,  36 => 1,  32 => 5,  29 => 4,  27 => 3,  24 => 2,  22 => 1,);
    }
}
