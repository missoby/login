<?php

/* login_view.php */
class __TwigTemplate_055b3ee74e23c0a528beac500c19d3c4 extends Twig_Template
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
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
 <head>
   <title>Simple Login with CodeIgniter</title>
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

    public function getTemplateName()
    {
        return "login_view.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 7,  19 => 1,);
    }
}
