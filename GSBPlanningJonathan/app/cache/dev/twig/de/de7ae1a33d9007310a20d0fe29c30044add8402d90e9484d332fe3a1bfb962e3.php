<?php

/* GsbGsbBundle:Default:index.html.twig */
class __TwigTemplate_3891e1a61e74fb3738ebf96be6bc70a165633788f05b0424323aef9d98c73ad3 extends Twig_Template
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
        $__internal_91edf6228ec8d9d2748084a5a87b2770299c10e3764019bd63a7ba77b00cf658 = $this->env->getExtension("native_profiler");
        $__internal_91edf6228ec8d9d2748084a5a87b2770299c10e3764019bd63a7ba77b00cf658->enter($__internal_91edf6228ec8d9d2748084a5a87b2770299c10e3764019bd63a7ba77b00cf658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GsbGsbBundle:Default:index.html.twig"));

        // line 1
        echo "<html class=\"index\">
<body class=\"index\">
</html><link rel=\"stylesheet\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/cssGeneral.css"), "html", null, true);
        echo "\" type=\"text/css\" />
<br>
<center>
    <p style=\"color:white;font-size:3rem;font-family:Segoe UI;\">
        Laboratoire GSB
    </p>
</center>
<br><br>
<div class=\"site\">
    <div class=\"login\">
        <center>
            <form name=\"connexion\" method=\"POST\">
                <br>
                <Legend><h1>Espace Administrateur</h1></Legend>
                <p>
                    <input id=\"mail\" type=\"text\" name=\"mail\" placeholder=\"E-Mail Client\" style=\"height:2.2rem;\" required=\"required\"/></br>
                </p>
                <p>
                    <input id=\"mdp\" type=\"password\" name=\"mdp\" placeholder=\"Mot de Passe\"  style=\"height:2.2rem;\" required=\"required\"/>
                </p>
                <p>
                    <input type=\"submit\" value=\"Connexion\" name=\"submit\" class=\"btn btn-primary btn-block btn-large\">
                </p>

                ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 28
            echo "                    <center><div class=\"flashnotice\">
                            ";
            // line 29
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                        </div></center>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "
            </form>
        </center>
    </div>
</div>
</body>
</html>";
        
        $__internal_91edf6228ec8d9d2748084a5a87b2770299c10e3764019bd63a7ba77b00cf658->leave($__internal_91edf6228ec8d9d2748084a5a87b2770299c10e3764019bd63a7ba77b00cf658_prof);

    }

    public function getTemplateName()
    {
        return "GsbGsbBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 32,  60 => 29,  57 => 28,  53 => 27,  26 => 3,  22 => 1,);
    }
}
/* <html class="index">*/
/* <body class="index">*/
/* </html><link rel="stylesheet" href="{{ asset('bundles/framework/css/cssGeneral.css') }}" type="text/css" />*/
/* <br>*/
/* <center>*/
/*     <p style="color:white;font-size:3rem;font-family:Segoe UI;">*/
/*         Laboratoire GSB*/
/*     </p>*/
/* </center>*/
/* <br><br>*/
/* <div class="site">*/
/*     <div class="login">*/
/*         <center>*/
/*             <form name="connexion" method="POST">*/
/*                 <br>*/
/*                 <Legend><h1>Espace Administrateur</h1></Legend>*/
/*                 <p>*/
/*                     <input id="mail" type="text" name="mail" placeholder="E-Mail Client" style="height:2.2rem;" required="required"/></br>*/
/*                 </p>*/
/*                 <p>*/
/*                     <input id="mdp" type="password" name="mdp" placeholder="Mot de Passe"  style="height:2.2rem;" required="required"/>*/
/*                 </p>*/
/*                 <p>*/
/*                     <input type="submit" value="Connexion" name="submit" class="btn btn-primary btn-block btn-large">*/
/*                 </p>*/
/* */
/*                 {% for flashMessage in app.session.flashbag.get('notice') %}*/
/*                     <center><div class="flashnotice">*/
/*                             {{ flashMessage }}*/
/*                         </div></center>*/
/*                 {% endfor %}*/
/* */
/*             </form>*/
/*         </center>*/
/*     </div>*/
/* </div>*/
/* </body>*/
/* </html>*/
