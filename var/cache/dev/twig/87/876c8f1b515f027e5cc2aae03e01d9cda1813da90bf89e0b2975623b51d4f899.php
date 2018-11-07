<?php

/* PagePrincipale/index.html.twig */
class __TwigTemplate_c6bb0dec3fabb632cbaeb1d50daf405a4605d12e5f5dd780ca3db7aea4bc1cbe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'kevinplatform_body' => array($this, 'block_kevinplatform_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cd7b3fdb3d9f3bd69670be454f580837c05e02c0970b30a523ae362fc297732d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd7b3fdb3d9f3bd69670be454f580837c05e02c0970b30a523ae362fc297732d->enter($__internal_cd7b3fdb3d9f3bd69670be454f580837c05e02c0970b30a523ae362fc297732d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PagePrincipale/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en\">
    <head>
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
            <head>
        <title>Welcome to my site</title>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <!--Oswald Font -->
        <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"css/tooltipster.css\" />
        <!-- home slider-->
        <link href=\"css/pgwslider.css\" rel=\"stylesheet\">
        <!-- Font Awesome -->
        <link rel=\"stylesheet\" href=\"css/font-awesome.min.css\">
        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("PagePrincipale/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\"> 
        <link href=\"responsive.css\" rel=\"stylesheet\" media=\"screen\">   
    <body>
    </head>

    <section id=\"header_area\">
            <div class=\"wrapper header\">
                <div class=\"clearfix header_top\">
                    <div class=\"clearfix logo floatleft\">
                        <a href=\"\"><h1><span>Yellow</span> Blog</h1></a>
                    </div>
                    <div class=\"clearfix search floatright\">
                        <form>
                            <input type=\"text\" placeholder=\"Search\"/>
                            <input type=\"submit\" />
                        </form>
                    </div>
                </div>
                <div class=\"header_bottom\">
                    <nav>
                        <ul id=\"nav\">
                            <li><a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("kevin_platform_home");
        echo "\">Home</a></li>
                            <li><a href=\"\">Category</a></li>
                            <li id=\"dropdown\"><a href=\"\">Drop Down</a>
                                <ul>
                                    <li><a href=\"\">Home</a></li>
                                    <li><a href=\"\">Category</a></li>
                                    <li><a href=\"\">Category</a></li>
                                </ul>
                            </li>

                            <li><a href=\"\">About us</a></li>
                            <li><a href=\"\">Contact us</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </section>
        
";
        // line 55
        $this->displayBlock('kevinplatform_body', $context, $blocks);
        // line 128
        echo "           
        <section id=\"footer_top_area\">
            <div class=\"clearfix wrapper footer_top\">
                <div class=\"clearfix footer_top_container\">
                    <div class=\"clearfix single_footer_top floatleft\">
                        <h2>From Twitter</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. <a href=\"\">Lorem Ipsum has been the industry</a> standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    </div>
                    <div class=\"clearfix single_footer_top floatleft\">
                        <h2>Recent Post</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy <a href=\"\">Lorem Ipsum has been the industry</a> text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    </div>
                    <div class=\"clearfix single_footer_top floatleft\">
                        <h2>Usefull Links</h2>
                        <ul>
                            <li><a href=\"\">Important links of this site</a></li>
                            <li><a href=\"\">Important links of this site</a></li>
                            <li><a href=\"\">Important links of this site</a></li>
                            <li><a href=\"\">Important links of this site</a></li>
                            <li><a href=\"\">Important links of this site</a></li>
                            <li><a href=\"\">Important links of this site</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        
        <section id=\"footer_bottom_area\">
            <div class=\"clearfix wrapper footer_bottom\">
                <div class=\"clearfix copyright floatleft\">
                    <p> Copyright &copy; All rights reserved by <span>Wpfreeware.com</span></p>
                </div>
                <div class=\"clearfix social floatright\">
                    <ul>
                        <li><a class=\"tooltip\" title=\"Facebook\" href=\"\"><i class=\"fa fa-facebook-square\"></i></a></li>
                        <li><a class=\"tooltip\" title=\"Twitter\" href=\"\"><i class=\"fa fa-twitter-square\"></i></a></li>
                        <li><a class=\"tooltip\" title=\"Google+\" href=\"\"><i class=\"fa fa-google-plus-square\"></i></a></li>
                        <li><a class=\"tooltip\" title=\"LinkedIn\" href=\"\"><i class=\"fa fa-linkedin-square\"></i></a></li>
                        <li><a class=\"tooltip\" title=\"tumblr\" href=\"\"><i class=\"fa fa-tumblr-square\"></i></a></li>
                        <li><a class=\"tooltip\" title=\"Pinterest\" href=\"\"><i class=\"fa fa-pinterest-square\"></i></a></li>
                        <li><a class=\"tooltip\" title=\"RSS Feed\" href=\"\"><i class=\"fa fa-rss-square\"></i></a></li>
                        <li><a class=\"tooltip\" title=\"Sitemap\" href=\"\"><i class=\"fa fa-sitemap\"></i> </a></li>
                    </ul>
                </div>
            </div>
        </section>
        
        <script type=\"text/javascript\" src=\"http://code.jquery.com/jquery-1.7.0.min.js\"></script>   
        <script type=\"text/javascript\" src=\"js/jquery.tooltipster.min.js\"></script>     
        <script type=\"text/javascript\">
            \$(document).ready(function() {
                \$('.tooltip').tooltipster();
            });
        </script>
         <script type=\"text/javascript\" src=\"js/selectnav.min.js\"></script>
        <script type=\"text/javascript\">
            selectnav('nav', {
              label: '-Navigation-',
              nested: true,
              indent: '-'
            });
        </script>       
        <script src=\"js/pgwslider.js\"></script>
        <script type=\"text/javascript\">
            \$(document).ready(function() {
                \$('.pgwSlider').pgwSlider({
                    
                    intervalDuration: 5000
                
                });
            });
        </script>
        <script type=\"text/javascript\" src=\"js/placeholder_support_IE.js\"></script>
        
<!--
---- Clean html template by http://WpFreeware.com
---- This is the main file (index.html).
---- You are allowed to change anything you like. Find out more Awesome Templates @ wpfreeware.com
---- Read License-readme.txt file to learn more.
--> 
        
    </body>
</html>
";
        
        $__internal_cd7b3fdb3d9f3bd69670be454f580837c05e02c0970b30a523ae362fc297732d->leave($__internal_cd7b3fdb3d9f3bd69670be454f580837c05e02c0970b30a523ae362fc297732d_prof);

    }

    // line 55
    public function block_kevinplatform_body($context, array $blocks = array())
    {
        $__internal_f1887637b376ade3d0e7aba934744c188a84589b2a04a2f67d1d480f152f1c84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1887637b376ade3d0e7aba934744c188a84589b2a04a2f67d1d480f152f1c84->enter($__internal_f1887637b376ade3d0e7aba934744c188a84589b2a04a2f67d1d480f152f1c84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "kevinplatform_body"));

        echo "           
        <section id=\"content_area\">
            <div class=\"clearfix wrapper main_content_area\">
            
                <div class=\"clearfix main_content floatleft\">
                    ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["BlogPost"] ?? $this->getContext($context, "BlogPost")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            echo "       


                    <div class=\"clearfix content\">
                        <div class=\"content_title\">
                        <h2>Latest Blog Post</h2></div>
                         
                        <div class=\"clearfix single_content\">
                            <div class=\"clearfix post_date floatleft\">
                                <div class=\"date\">
                                    <h3>27</h3>
                                    <p>January</p>
                                </div>
                            </div>
                            <div class=\"clearfix post_detail\">
                                <h2><a href=\"\"> ";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
            echo " </a></h2>
                                <div class=\"clearfix post-meta\">
                                    <p><span><i class=\"fa fa-user\"></i> Admin</span> <span><i class=\"fa fa-clock-o\"></i> 20 Jan 2014</span> <span><i class=\"fa fa-comment\"></i> 4 comments</span> <span><i class=\"fa fa-folder\"></i> ";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "category", array()), "name", array()), "html", null, true);
            echo "</span></p>
                                </div>
                                <div class=\"clearfix post_excerpt\">
                                    <img src=\"images/thumb.png\" alt=\"\"/>
                                    <p>";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "body", array()), "html", null, true);
            echo " </p>
                                </div>
                                <a href=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("kevin_platform_view", array("id" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
            echo "\">Continue Reading</a>
                            </div>
                        </div>
  
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "                    
                    <div class=\"pagination\">
                        <nav>
                            <ul>
                                <li><a href=\"\"> << </a></li>
                                <li><a href=\"\">1</a></li>
                                <li><a href=\"\">2</a></li>
                                <li><a href=\"\">3</a></li>
                                <li><a href=\"\">4</a></li>
                                <li><a href=\"\"> >> </a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class=\"clearfix sidebar_container floatright\">
                    <div class=\"clearfix sidebar\">
                        <div class=\"clearfix single_sidebar\">
                            <div class=\"popular_post\">
                                <div class=\"sidebar_title\"><h2>Most Popular</h2></div>
                                ";
        // line 108
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["BlogPost"] ?? $this->getContext($context, "BlogPost")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            echo "   
                                <ul>
                                    <li><a href=\"\">";
            // line 110
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
            echo "</a></li>
                                </ul>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "                            </div>
                        </div>
                        
                        <div class=\"clearfix single_sidebar\">
                            <h2>Categories</h2>
                             ";
        // line 118
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Categorie"] ?? $this->getContext($context, "Categorie")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            echo "  
                            <ul>
                                <li><a href=\"\">";
            // line 120
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
            echo "</a></li>
                            </ul>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "                        </div>
                    </div>
                </div>
            </div>
        </section>
 ";
        
        $__internal_f1887637b376ade3d0e7aba934744c188a84589b2a04a2f67d1d480f152f1c84->leave($__internal_f1887637b376ade3d0e7aba934744c188a84589b2a04a2f67d1d480f152f1c84_prof);

    }

    public function getTemplateName()
    {
        return "PagePrincipale/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  301 => 123,  292 => 120,  285 => 118,  278 => 113,  269 => 110,  262 => 108,  241 => 89,  229 => 83,  224 => 81,  217 => 77,  212 => 75,  192 => 60,  180 => 55,  90 => 128,  88 => 55,  67 => 37,  43 => 16,  28 => 4,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en\">
    <head>
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
            <head>
        <title>Welcome to my site</title>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <!--Oswald Font -->
        <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"css/tooltipster.css\" />
        <!-- home slider-->
        <link href=\"css/pgwslider.css\" rel=\"stylesheet\">
        <!-- Font Awesome -->
        <link rel=\"stylesheet\" href=\"css/font-awesome.min.css\">
        <link href=\"{{ asset('PagePrincipale/style.css') }}\" rel=\"stylesheet\" media=\"screen\"> 
        <link href=\"responsive.css\" rel=\"stylesheet\" media=\"screen\">   
    <body>
    </head>

    <section id=\"header_area\">
            <div class=\"wrapper header\">
                <div class=\"clearfix header_top\">
                    <div class=\"clearfix logo floatleft\">
                        <a href=\"\"><h1><span>Yellow</span> Blog</h1></a>
                    </div>
                    <div class=\"clearfix search floatright\">
                        <form>
                            <input type=\"text\" placeholder=\"Search\"/>
                            <input type=\"submit\" />
                        </form>
                    </div>
                </div>
                <div class=\"header_bottom\">
                    <nav>
                        <ul id=\"nav\">
                            <li><a href=\"{{ path('kevin_platform_home') }}\">Home</a></li>
                            <li><a href=\"\">Category</a></li>
                            <li id=\"dropdown\"><a href=\"\">Drop Down</a>
                                <ul>
                                    <li><a href=\"\">Home</a></li>
                                    <li><a href=\"\">Category</a></li>
                                    <li><a href=\"\">Category</a></li>
                                </ul>
                            </li>

                            <li><a href=\"\">About us</a></li>
                            <li><a href=\"\">Contact us</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </section>
        
{% block kevinplatform_body %}           
        <section id=\"content_area\">
            <div class=\"clearfix wrapper main_content_area\">
            
                <div class=\"clearfix main_content floatleft\">
                    {% for item in BlogPost %}       


                    <div class=\"clearfix content\">
                        <div class=\"content_title\">
                        <h2>Latest Blog Post</h2></div>
                         
                        <div class=\"clearfix single_content\">
                            <div class=\"clearfix post_date floatleft\">
                                <div class=\"date\">
                                    <h3>27</h3>
                                    <p>January</p>
                                </div>
                            </div>
                            <div class=\"clearfix post_detail\">
                                <h2><a href=\"\"> {{ item.title }} </a></h2>
                                <div class=\"clearfix post-meta\">
                                    <p><span><i class=\"fa fa-user\"></i> Admin</span> <span><i class=\"fa fa-clock-o\"></i> 20 Jan 2014</span> <span><i class=\"fa fa-comment\"></i> 4 comments</span> <span><i class=\"fa fa-folder\"></i> {{ item.category.name }}</span></p>
                                </div>
                                <div class=\"clearfix post_excerpt\">
                                    <img src=\"images/thumb.png\" alt=\"\"/>
                                    <p>{{ item.body }} </p>
                                </div>
                                <a href=\"{{ path('kevin_platform_view', {'id': item.id}) }}\">Continue Reading</a>
                            </div>
                        </div>
  
                    </div>
                    {% endfor %}
                    
                    <div class=\"pagination\">
                        <nav>
                            <ul>
                                <li><a href=\"\"> << </a></li>
                                <li><a href=\"\">1</a></li>
                                <li><a href=\"\">2</a></li>
                                <li><a href=\"\">3</a></li>
                                <li><a href=\"\">4</a></li>
                                <li><a href=\"\"> >> </a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class=\"clearfix sidebar_container floatright\">
                    <div class=\"clearfix sidebar\">
                        <div class=\"clearfix single_sidebar\">
                            <div class=\"popular_post\">
                                <div class=\"sidebar_title\"><h2>Most Popular</h2></div>
                                {% for item in BlogPost %}   
                                <ul>
                                    <li><a href=\"\">{{ item.title }}</a></li>
                                </ul>
                                {% endfor %}
                            </div>
                        </div>
                        
                        <div class=\"clearfix single_sidebar\">
                            <h2>Categories</h2>
                             {% for item in Categorie %}  
                            <ul>
                                <li><a href=\"\">{{ item.name }}</a></li>
                            </ul>
                            {% endfor %}
                        </div>
                    </div>
                </div>
            </div>
        </section>
 {% endblock %}           
        <section id=\"footer_top_area\">
            <div class=\"clearfix wrapper footer_top\">
                <div class=\"clearfix footer_top_container\">
                    <div class=\"clearfix single_footer_top floatleft\">
                        <h2>From Twitter</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. <a href=\"\">Lorem Ipsum has been the industry</a> standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    </div>
                    <div class=\"clearfix single_footer_top floatleft\">
                        <h2>Recent Post</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy <a href=\"\">Lorem Ipsum has been the industry</a> text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    </div>
                    <div class=\"clearfix single_footer_top floatleft\">
                        <h2>Usefull Links</h2>
                        <ul>
                            <li><a href=\"\">Important links of this site</a></li>
                            <li><a href=\"\">Important links of this site</a></li>
                            <li><a href=\"\">Important links of this site</a></li>
                            <li><a href=\"\">Important links of this site</a></li>
                            <li><a href=\"\">Important links of this site</a></li>
                            <li><a href=\"\">Important links of this site</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        
        <section id=\"footer_bottom_area\">
            <div class=\"clearfix wrapper footer_bottom\">
                <div class=\"clearfix copyright floatleft\">
                    <p> Copyright &copy; All rights reserved by <span>Wpfreeware.com</span></p>
                </div>
                <div class=\"clearfix social floatright\">
                    <ul>
                        <li><a class=\"tooltip\" title=\"Facebook\" href=\"\"><i class=\"fa fa-facebook-square\"></i></a></li>
                        <li><a class=\"tooltip\" title=\"Twitter\" href=\"\"><i class=\"fa fa-twitter-square\"></i></a></li>
                        <li><a class=\"tooltip\" title=\"Google+\" href=\"\"><i class=\"fa fa-google-plus-square\"></i></a></li>
                        <li><a class=\"tooltip\" title=\"LinkedIn\" href=\"\"><i class=\"fa fa-linkedin-square\"></i></a></li>
                        <li><a class=\"tooltip\" title=\"tumblr\" href=\"\"><i class=\"fa fa-tumblr-square\"></i></a></li>
                        <li><a class=\"tooltip\" title=\"Pinterest\" href=\"\"><i class=\"fa fa-pinterest-square\"></i></a></li>
                        <li><a class=\"tooltip\" title=\"RSS Feed\" href=\"\"><i class=\"fa fa-rss-square\"></i></a></li>
                        <li><a class=\"tooltip\" title=\"Sitemap\" href=\"\"><i class=\"fa fa-sitemap\"></i> </a></li>
                    </ul>
                </div>
            </div>
        </section>
        
        <script type=\"text/javascript\" src=\"http://code.jquery.com/jquery-1.7.0.min.js\"></script>   
        <script type=\"text/javascript\" src=\"js/jquery.tooltipster.min.js\"></script>     
        <script type=\"text/javascript\">
            \$(document).ready(function() {
                \$('.tooltip').tooltipster();
            });
        </script>
         <script type=\"text/javascript\" src=\"js/selectnav.min.js\"></script>
        <script type=\"text/javascript\">
            selectnav('nav', {
              label: '-Navigation-',
              nested: true,
              indent: '-'
            });
        </script>       
        <script src=\"js/pgwslider.js\"></script>
        <script type=\"text/javascript\">
            \$(document).ready(function() {
                \$('.pgwSlider').pgwSlider({
                    
                    intervalDuration: 5000
                
                });
            });
        </script>
        <script type=\"text/javascript\" src=\"js/placeholder_support_IE.js\"></script>
        
<!--
---- Clean html template by http://WpFreeware.com
---- This is the main file (index.html).
---- You are allowed to change anything you like. Find out more Awesome Templates @ wpfreeware.com
---- Read License-readme.txt file to learn more.
--> 
        
    </body>
</html>
", "PagePrincipale/index.html.twig", "C:\\wamp64\\www\\my_project_kevin\\app\\Resources\\views\\PagePrincipale\\index.html.twig");
    }
}
