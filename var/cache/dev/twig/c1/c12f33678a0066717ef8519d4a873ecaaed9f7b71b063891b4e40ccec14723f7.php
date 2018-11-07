<?php

/* SonataBlockBundle:Block:block_core_text.html.twig */
class __TwigTemplate_4fecc701c7066370b6e26d5036bbd1aef49b88212eeebfb998b9e0cab57d0293 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["sonata_block"] ?? $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5b380357105deb6313f2246b6b6783c0d2ff24c3d4c96e776cd27af62743be0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b380357105deb6313f2246b6b6783c0d2ff24c3d4c96e776cd27af62743be0a->enter($__internal_5b380357105deb6313f2246b6b6783c0d2ff24c3d4c96e776cd27af62743be0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b380357105deb6313f2246b6b6783c0d2ff24c3d4c96e776cd27af62743be0a->leave($__internal_5b380357105deb6313f2246b6b6783c0d2ff24c3d4c96e776cd27af62743be0a_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_20edc57722330cdd4e88e2435e48b24d1b30f48594be7c0256efece2c95d9acc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20edc57722330cdd4e88e2435e48b24d1b30f48594be7c0256efece2c95d9acc->enter($__internal_20edc57722330cdd4e88e2435e48b24d1b30f48594be7c0256efece2c95d9acc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->getAttribute(($context["settings"] ?? $this->getContext($context, "settings")), "content", array());
        echo "
";
        
        $__internal_20edc57722330cdd4e88e2435e48b24d1b30f48594be7c0256efece2c95d9acc->leave($__internal_20edc57722330cdd4e88e2435e48b24d1b30f48594be7c0256efece2c95d9acc_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends sonata_block.templates.block_base %}

{% block block %}
    {{ settings.content|raw }}
{% endblock %}
", "SonataBlockBundle:Block:block_core_text.html.twig", "C:\\wamp64\\www\\my_project_kevin\\vendor\\sonata-project\\block-bundle/Resources/views/Block/block_core_text.html.twig");
    }
}
