<?php

/* MremiContactBundle:Contact:email.txt.twig */
class __TwigTemplate_a04b6de4855f5f04f20dcbeafcab24659ca40d713b4bc81d43433ca224181296 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
";
        // line 13
        echo "
";
        // line 14
        $this->displayBlock('body_text', $context, $blocks);
        // line 25
        echo "
";
        // line 26
        $this->displayBlock('body_html', $context, $blocks);
    }

    // line 14
    public function block_body_text($context, array $blocks = array())
    {
        // line 16
        echo $this->env->getExtension('translator')->trans("mremi_contact.email_message_txt", array("%title%" => $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "titleValue", array()), array(), "MremiContactBundle"), "%firstName%" => $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "firstName", array()), "%lastName%" => $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "lastName", array()), "%email%" => $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "email", array()), "%message%" => $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "message", array())), "MremiContactBundle");
        // line 22
        echo "
";
    }

    // line 26
    public function block_body_html($context, array $blocks = array())
    {
        // line 28
        echo $this->env->getExtension('translator')->trans("mremi_contact.email_message_html", array("%title%" => $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "titleValue", array()), array(), "MremiContactBundle"), "%firstName%" => $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "firstName", array()), "%lastName%" => $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "lastName", array()), "%email%" => $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "email", array()), "%message%" => nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "message", array()), "html", null, true))), "MremiContactBundle");
        // line 34
        echo "
";
    }

    public function getTemplateName()
    {
        return "MremiContactBundle:Contact:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  51 => 34,  49 => 28,  46 => 26,  41 => 22,  39 => 16,  36 => 14,  32 => 26,  29 => 25,  27 => 14,  24 => 13,  21 => 11,);
    }
}
