<?php

/* ::nav.html.twig */
class __TwigTemplate_aa7cbefd0ffbb2f52b77df60da8967e3ddbdaf38258d4b024710b1ff1e70b005 extends Twig_Template
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
        echo "<nav class=\"navbar navbar-fixed-top navbar-default\" role=\"navigation\">
    <div class=\"container\">
    <div class=\"container-fluid\">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("portfolio_general_homepage");
        echo "\">Loïs Ménissier</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav\">
                <li><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("portfolio_general_homepage");
        echo "\"><i class=\"fa fa-home\"></i>  Accueil</a></li>
                <li><a href=\"\"><i class=\"fa fa-file-text\"></i>  Projects</a></li>
                <li><a href=\"\"><i class=\"fa fa-share\"></i>  Contact</a></li>
            </ul>
                <ul class=\"nav navbar-nav navbar-right\">
                ";
        // line 22
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 23
            echo "                    <li class=\"dropdown\">
                        <a href=\"";
            // line 24
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "<span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\" role=\"menu\">
                        <li><a href=\"";
            // line 26
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "\"><i class=\"fa fa-send-o\"></i>  Profil</a></li>
                        <li><a href=\"";
            // line 27
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                        <i class=\"fa fa-send-o\"></i>  ";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></li>
                    </ul>
                    </li>
                ";
        } else {
            // line 32
            echo "                    <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "\"><i class=\"fa fa-send-o\"></i>  Login</a></li>
                ";
        }
        // line 34
        echo "                </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
    </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "::nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 34,  75 => 32,  68 => 28,  64 => 27,  60 => 26,  53 => 24,  50 => 23,  48 => 22,  40 => 17,  31 => 11,  19 => 1,);
    }
}
