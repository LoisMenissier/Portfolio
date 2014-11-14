<?php

/* portfolioGeneralBundle:Default:index.html.twig */
class __TwigTemplate_c96d817e95c387fa649875398d11dcbfb48eb1e8a5b32b2dbb9cfff5e79d4c73 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Accueil";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>Welcome on my portfolio !<br>
        You can find here all the necessary stuff that involved my coding style during my scolarity.<br>
        Have a good visit !</h1>
";
    }

    public function getTemplateName()
    {
        return "portfolioGeneralBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 4,  35 => 3,  29 => 2,);
    }
}
