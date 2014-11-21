<?php

/* MremiContactBundle:Contact:confirm.html.twig */
class __TwigTemplate_96ec1d8f378cfc855194728e06a12e3bec5acf099ab944f28ebfa9cccf6414be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
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

    // line 16
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("mremi_contact.confirm_page_title", array(), "MremiContactBundle"), "html", null, true);
    }

    // line 18
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 19
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mremibootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\"  />
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mremibootstrap/css/bootstrap-theme.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        // line 24
        echo "    <section>
        <h3>";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("mremi_contact.confirm_title", array("%title%" => $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "titleValue", array()), array(), "MremiContactBundle"), "%fullName%" => $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "fullName", array())), "MremiContactBundle"), "html", null, true);
        // line 28
        echo "</h3>
    </section>

    <p>";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("mremi_contact.confirm_message", array(), "MremiContactBundle"), "html", null, true);
        echo "</p>
";
    }

    public function getTemplateName()
    {
        return "MremiContactBundle:Contact:confirm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 31,  58 => 28,  56 => 25,  53 => 24,  50 => 23,  44 => 20,  39 => 19,  36 => 18,  30 => 16,);
    }
}
