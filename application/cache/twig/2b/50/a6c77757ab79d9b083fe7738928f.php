<?php

/* login_view.html.twig */
class __TwigTemplate_2b50a6c77757ab79d9b083fe7738928f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
 <head>
   <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
 </head>
 <body>
   <h1>Simple Login with CodeIgniter : ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</h1>
   <?php echo validation_errors(); ?>
   <?php echo form_open('verifylogin'); ?>
     <label for=\"username\">Username:</label>
     <input type=\"text\" size=\"20\" id=\"username\" name=\"username\"/>
     <br/>
     <label for=\"password\">Password:</label>
     <input type=\"password\" size=\"20\" id=\"passowrd\" name=\"password\"/>
     <br/>
     <input type=\"submit\" value=\"Login\"/>
   
 </body>
</html>
";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Simple Login with CodeIgniter";
    }

    public function getTemplateName()
    {
        return "login_view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  31 => 7,  25 => 4,  20 => 1,  28 => 2,);
    }
}
