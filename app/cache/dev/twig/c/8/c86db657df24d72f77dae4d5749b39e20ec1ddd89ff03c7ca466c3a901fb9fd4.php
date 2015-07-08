<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_c86db657df24d72f77dae4d5749b39e20ec1ddd89ff03c7ca466c3a901fb9fd4 extends Twig_Template
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
        $__internal_e57534e4f6ce02d4d3e0df8040def3c6c55cd1957188a6ed5010c62c809faafd = $this->env->getExtension("native_profiler");
        $__internal_e57534e4f6ce02d4d3e0df8040def3c6c55cd1957188a6ed5010c62c809faafd->enter($__internal_e57534e4f6ce02d4d3e0df8040def3c6c55cd1957188a6ed5010c62c809faafd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("TwigBundle:Exception:trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_e57534e4f6ce02d4d3e0df8040def3c6c55cd1957188a6ed5010c62c809faafd->leave($__internal_e57534e4f6ce02d4d3e0df8040def3c6c55cd1957188a6ed5010c62c809faafd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
