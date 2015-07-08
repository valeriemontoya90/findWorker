<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_b3811bc913261aba627bc2468f5a8d1a9e4d4e87c3b63b502be718c26ed58f9e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_15bdeecf3eb33d47038924442e3347aebe1c26ed776b57527f7fafa5ee8aea70 = $this->env->getExtension("native_profiler");
        $__internal_15bdeecf3eb33d47038924442e3347aebe1c26ed776b57527f7fafa5ee8aea70->enter($__internal_15bdeecf3eb33d47038924442e3347aebe1c26ed776b57527f7fafa5ee8aea70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15bdeecf3eb33d47038924442e3347aebe1c26ed776b57527f7fafa5ee8aea70->leave($__internal_15bdeecf3eb33d47038924442e3347aebe1c26ed776b57527f7fafa5ee8aea70_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8bc9d877094ee219e7be382ed7498eb0e9ea8bc08e60b44839c24312827b300a = $this->env->getExtension("native_profiler");
        $__internal_8bc9d877094ee219e7be382ed7498eb0e9ea8bc08e60b44839c24312827b300a->enter($__internal_8bc9d877094ee219e7be382ed7498eb0e9ea8bc08e60b44839c24312827b300a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_8bc9d877094ee219e7be382ed7498eb0e9ea8bc08e60b44839c24312827b300a->leave($__internal_8bc9d877094ee219e7be382ed7498eb0e9ea8bc08e60b44839c24312827b300a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_528e693340467673720e3000ff0f7388fb144a2c506b3fd3f06ba644642501e3 = $this->env->getExtension("native_profiler");
        $__internal_528e693340467673720e3000ff0f7388fb144a2c506b3fd3f06ba644642501e3->enter($__internal_528e693340467673720e3000ff0f7388fb144a2c506b3fd3f06ba644642501e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_528e693340467673720e3000ff0f7388fb144a2c506b3fd3f06ba644642501e3->leave($__internal_528e693340467673720e3000ff0f7388fb144a2c506b3fd3f06ba644642501e3_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1b68c4b09337fb738d690a46f7c9c1d93e7f56582d746819f1031565b55e925a = $this->env->getExtension("native_profiler");
        $__internal_1b68c4b09337fb738d690a46f7c9c1d93e7f56582d746819f1031565b55e925a->enter($__internal_1b68c4b09337fb738d690a46f7c9c1d93e7f56582d746819f1031565b55e925a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_1b68c4b09337fb738d690a46f7c9c1d93e7f56582d746819f1031565b55e925a->leave($__internal_1b68c4b09337fb738d690a46f7c9c1d93e7f56582d746819f1031565b55e925a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
