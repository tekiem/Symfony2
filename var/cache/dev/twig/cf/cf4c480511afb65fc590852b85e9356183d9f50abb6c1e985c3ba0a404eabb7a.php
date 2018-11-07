<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c5a292fbc85278c2808530c6051f2ad1f860a6a980104aee99325daeb7c04685 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7aa4935ad43cfdce5e3f570b695ce6a509495a4e42aa2f06fc3837265ef80166 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7aa4935ad43cfdce5e3f570b695ce6a509495a4e42aa2f06fc3837265ef80166->enter($__internal_7aa4935ad43cfdce5e3f570b695ce6a509495a4e42aa2f06fc3837265ef80166_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7aa4935ad43cfdce5e3f570b695ce6a509495a4e42aa2f06fc3837265ef80166->leave($__internal_7aa4935ad43cfdce5e3f570b695ce6a509495a4e42aa2f06fc3837265ef80166_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a4d2c5bf0501f6ad54edb11606c714bcc4a2f07aa52b36c351b2db1bbe8e8674 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4d2c5bf0501f6ad54edb11606c714bcc4a2f07aa52b36c351b2db1bbe8e8674->enter($__internal_a4d2c5bf0501f6ad54edb11606c714bcc4a2f07aa52b36c351b2db1bbe8e8674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a4d2c5bf0501f6ad54edb11606c714bcc4a2f07aa52b36c351b2db1bbe8e8674->leave($__internal_a4d2c5bf0501f6ad54edb11606c714bcc4a2f07aa52b36c351b2db1bbe8e8674_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_91539bb4860331cfc8a264f425ffd22502b1e0ebd7dab5cefcf991bb0e4e7624 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91539bb4860331cfc8a264f425ffd22502b1e0ebd7dab5cefcf991bb0e4e7624->enter($__internal_91539bb4860331cfc8a264f425ffd22502b1e0ebd7dab5cefcf991bb0e4e7624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_91539bb4860331cfc8a264f425ffd22502b1e0ebd7dab5cefcf991bb0e4e7624->leave($__internal_91539bb4860331cfc8a264f425ffd22502b1e0ebd7dab5cefcf991bb0e4e7624_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7462673a44322a2de9a42cbecba44eeb9359e4a3563c034cfdb3b58fe18146dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7462673a44322a2de9a42cbecba44eeb9359e4a3563c034cfdb3b58fe18146dd->enter($__internal_7462673a44322a2de9a42cbecba44eeb9359e4a3563c034cfdb3b58fe18146dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7462673a44322a2de9a42cbecba44eeb9359e4a3563c034cfdb3b58fe18146dd->leave($__internal_7462673a44322a2de9a42cbecba44eeb9359e4a3563c034cfdb3b58fe18146dd_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\my_project_kevin\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
