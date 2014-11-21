<?php

/* MremiContactBundle:Contact:index.html.twig */
class __TwigTemplate_e5cc22283514d3d90844b64c3bef0af00dab9ec4ef519300042be1d208665107 extends Twig_Template
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
        // line 16
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "MremiContactBundle:Contact:bootstrap_form_theme.html.twig"));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 18
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("mremi_contact.form_page_title", array(), "MremiContactBundle"), "html", null, true);
    }

    // line 20
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 21
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mremibootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\"  />
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mremibootstrap/css/bootstrap-theme.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
    }

    // line 25
    public function block_body($context, array $blocks = array())
    {
        // line 26
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("mremi_contact_form")));
        echo "
        <fieldset>
            <legend>";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("mremi_contact.form_title", array(), "MremiContactBundle"), "html", null, true);
        echo "</legend>

            ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        </fieldset>
    ";
        // line 32
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "MremiContactBundle:Contact:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 32,  66 => 30,  61 => 28,  55 => 26,  52 => 25,  46 => 22,  41 => 21,  38 => 20,  32 => 18,  27 => 16,);
    }
}
