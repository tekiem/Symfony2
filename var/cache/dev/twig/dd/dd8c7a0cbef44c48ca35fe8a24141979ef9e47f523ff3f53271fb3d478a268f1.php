<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_b7ea2bdbc2e90c66fbba5f8f539642f2359de93287ae4c4e3c981a3d795df900 extends Twig_Template
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
        $__internal_b0c49e60644c1c01505b26a494a1935f35845bad95cb76cba6fc8676dec6bfdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0c49e60644c1c01505b26a494a1935f35845bad95cb76cba6fc8676dec6bfdc->enter($__internal_b0c49e60644c1c01505b26a494a1935f35845bad95cb76cba6fc8676dec6bfdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_b0c49e60644c1c01505b26a494a1935f35845bad95cb76cba6fc8676dec6bfdc->leave($__internal_b0c49e60644c1c01505b26a494a1935f35845bad95cb76cba6fc8676dec6bfdc_prof);

    }

    public function getTemplateName()
    {
        return "knp_menu_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if options.compressed %}{{ block('compressed_root') }}{% else %}{{ block('root') }}{% endif %}
", "knp_menu_base.html.twig", "C:\\wamp64\\www\\my_project_kevin\\vendor\\knplabs\\knp-menu\\src\\Knp\\Menu\\Resources\\views\\knp_menu_base.html.twig");
    }
}
