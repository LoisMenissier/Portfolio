<?php

/* portfolioProjectBundle:Default:index.html.twig */
class __TwigTemplate_ab64255d02d5a6b1b43f4bc5cdc7873048b85f76bd41d67ead3e2bb9ac3799ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("portfolioProjectBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "portfolioProjectBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Projects";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"row\">
        <div class=\"col-sm-6 col-md-4\">
            <div class=\"thumbnail\">
                <img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/projet0.jpg"), "html", null, true);
        echo "\" alt=\"Hello\">
                <div class=\"caption\">
                    <h3>Projet 0</h3>
                    <p>Voici le premier projet de l'année de licence !</p>
                    <p><a href=\"#\" class=\"btn btn-primary\" role=\"button\">Détails</a></p>
                </div>
            </div>
        </div>
        <div class=\"col-sm-6 col-md-4\">
            <div class=\"thumbnail\">
                <img data-src=\"holder.js/300x300\" alt=\"...\">
                <div class=\"caption\">
                    <h3>Projet 0</h3>
                    <p>Voici le premier projet de l'année de licence !</p>
                    <p><a href=\"#\" class=\"btn btn-primary\" role=\"button\">Détails</a></p>
                </div>
            </div>
        </div>
        <div class=\"col-sm-6 col-md-4\">
            <div class=\"thumbnail\">
                <img data-src=\"holder.js/300x300\" alt=\"...\">
                <div class=\"caption\">
                    <h3>Projet 0</h3>
                    <p>Voici le premier projet de l'année de licence !</p>
                    <p><a href=\"#\" class=\"btn btn-primary\" role=\"button\">Détails</a></p>
                </div>
            </div>
        </div>
    </div>
    ";
    }

    public function getTemplateName()
    {
        return "portfolioProjectBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 8,  46 => 5,  39 => 4,  36 => 3,  30 => 2,);
    }
}
