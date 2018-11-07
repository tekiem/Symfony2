<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_3ca1ca60cbef473359766c90067e43b93f7564080c1d74c07ff331c30f9e3a9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_284fb20ea5d37fce8d4d5a46b53e1133b7653dae6cd7668210a8c2d25483cfa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_284fb20ea5d37fce8d4d5a46b53e1133b7653dae6cd7668210a8c2d25483cfa2->enter($__internal_284fb20ea5d37fce8d4d5a46b53e1133b7653dae6cd7668210a8c2d25483cfa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

        // line 11
        echo "<div id=\"cms-block-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["block"] ?? $this->getContext($context, "block")), "id", array()), "html", null, true);
        echo "\" class=\"cms-block cms-block-element\">
    ";
        // line 12
        $this->displayBlock('block', $context, $blocks);
        // line 13
        echo "</div>
";
        
        $__internal_284fb20ea5d37fce8d4d5a46b53e1133b7653dae6cd7668210a8c2d25483cfa2->leave($__internal_284fb20ea5d37fce8d4d5a46b53e1133b7653dae6cd7668210a8c2d25483cfa2_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_46252b532195b0964e6db447b62db77785a9a1d43c519a414f93ba59794c7abb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46252b532195b0964e6db447b62db77785a9a1d43c519a414f93ba59794c7abb->enter($__internal_46252b532195b0964e6db447b62db77785a9a1d43c519a414f93ba59794c7abb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_46252b532195b0964e6db447b62db77785a9a1d43c519a414f93ba59794c7abb->leave($__internal_46252b532195b0964e6db447b62db77785a9a1d43c519a414f93ba59794c7abb_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 12,  30 => 13,  28 => 12,  23 => 11,);
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
<div id=\"cms-block-{{ block.id }}\" class=\"cms-block cms-block-element\">
    {% block block %}EMPTY CONTENT{% endblock %}
</div>
", "SonataBlockBundle:Block:block_base.html.twig", "C:\\wamp64\\www\\my_project_kevin\\vendor\\sonata-project\\block-bundle/Resources/views/Block/block_base.html.twig");
    }
}
