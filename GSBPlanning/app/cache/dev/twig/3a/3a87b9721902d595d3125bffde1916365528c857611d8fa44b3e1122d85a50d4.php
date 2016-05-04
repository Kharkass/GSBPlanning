<?php

/* GsbGsbBundle:Default:employe.html.twig */
class __TwigTemplate_9aebb2d1353d7c74baf7ec090600b676c90b736b2088bb4270cccf896f225e43 extends Twig_Template
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
        $__internal_f1a9b6c6a46e20e36226899c8411f2a7b5f13a13929577342349fd5b94c9cea2 = $this->env->getExtension("native_profiler");
        $__internal_f1a9b6c6a46e20e36226899c8411f2a7b5f13a13929577342349fd5b94c9cea2->enter($__internal_f1a9b6c6a46e20e36226899c8411f2a7b5f13a13929577342349fd5b94c9cea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GsbGsbBundle:Default:employe.html.twig"));

        // line 1
        echo "<html>
<body>
<link rel=\"stylesheet\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/cssGeneral.css"), "html", null, true);
        echo "\" type=\"text/css\" />
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css\">

<!--<div id=\"dashboard\">
    <center><h2>Outil de Gestion GSB</h2><br></center>
    <div id=\"l1en\">
        <div class=\"menu\"><a href=\"./admin\"><FONT size=\"5.5\"><i class=\"fa fa-home\"></i> Accueil</FONT></span></a></div>
        <div class=\"menu\"><a href=\"./employe\"><FONT size=\"5.5\"><i class=\"fa fa-users\"></i> Employés</FONT></span></a></div>
        <div class=\"menu\"><a href=\"./ajout\"><FONT size=\"5.5\"><i class=\"fa fa-plus\"></i> Ajouter événement</FONT></span></a></div>
        <div class=\"menu\"><a class=\"deco\" href=\"./deconnexion\"><FONT size=\"5.5\"><i class=\"fa fa-times\"></i> Déconnexion</FONT></span></a></div>
    </div>
</div>-->

<div style=\"background-color:#293F54;color:#ffffff;font-size: 2rem;padding-top:0.5rem;\"><center> Outil de Gestion GSB</center></div>
<nav id=\"nav-1\">
    <a href=\"./admin\" class=\"link-1\" href=\"#\"> <i class=\"fa fa-home\"></i> Accueil</a>
    <a href=\"./employe\" class=\"link-1\" href=\"#\"> <i class=\"fa fa-users\"></i> Employés</a>
    <a href=\"./ajout\" class=\"link-1\" href=\"#\"> <i class=\"fa fa-plus\"></i> Ajouter événement</a>
    <a href=\"./deconnexion\" class=\"link-1\" href=\"#\"> <i class=\"fa fa-times\"></i> Déconnexion</a>
</nav>
<center>
<div id=\"conteneur\">
    <h1 style=\"margin-left:2.5%;\">Liste des employés</h1>

    <b style=\"margin-left:2.5%\">Trier par</b></br>

    <form style=\"margin-left:2.5%; float:left; margin-top:1rem;\" name=\"recup_cat\" method=\"POST\">
        <input style=\"margin-left:2.5%;float:left;\" class=\"btnSite\" type=\"submit\" name=\"Nom\" value=\"Nom\">
    </form>
    <form style=\"margin-left:2.5%; float:left; margin-top:1rem;\" name=\"recup_cat\" method=\"POST\">
        <input style=\"margin-left:2.5%;float:left;\" class=\"btnSite\" type=\"submit\" name=\"Prenom\" value=\"Prenom\">
    </form>
    <br><br><br><br>
    <b style=\"margin-left:2.5%\">Barre de recherche</b></br>
    <form style=\"margin-left: 2.5%;margin-top:1rem;\" name=\"recherche\" method=\"POST\">
        <input style=\"\" class=\"site\" type=\"text\" name=\"champRecherche\">
        <input style=\"\" type=\"submit\" name=\"Rechercher\" value=\"Rechercher\" class=\"btnSite\">
    </form>

    <center><table style=\"width:95%;margin-left:2.5%;\">
            <tr class=\"ligneBlanche\">
                <td><b>Avatar</b></td>
                <td><b>Nom</b></td>
                <td><b>Prénom</b></td>
                <td><b>Adresse e-mail</b></td>
                <td><b>Planning</b></td>
            </tr>
            ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesDonnees"]) ? $context["lesDonnees"] : $this->getContext($context, "lesDonnees")));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            // line 51
            echo "                <tr class=\"ligne\">
                <td style=\"border: 0px;\"> <img style=\"wdith:100%;height:100%;\" src=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "image", array()), "html", null, true);
            echo "\"> </td>
                <td style=\"border: 0px;\"> <i class=\"fa fa-user\"></i> ";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "nom", array()), "html", null, true);
            echo " </td>
                <td style=\"border: 0px;\"> <i class=\"fa fa-user\"></i> ";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "prenom", array()), "html", null, true);
            echo " </td>
                <td style=\"border: 0px;\"> <i class=\"fa fa-envelope-o\" aria-hidden=\"true\"></i> ";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "mail", array()), "html", null, true);
            echo " </td>
                <td style=\"border: 0px;\">
                        <form style=\"margin-top:1rem;\" name=\"Planning_Form\" method=\"POST\">
                            <input type=\"hidden\" name=\"id_cacher\" value=\" ";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "id", array()), "html", null, true);
            echo "\">
                            <input type=\"submit\" name=\"Planning\" value=\"Planning\" class=\"btnSite\">
                        </form>
                    </td></tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "            </table>
</center>
</div>

</body>
</html>
";
        
        $__internal_f1a9b6c6a46e20e36226899c8411f2a7b5f13a13929577342349fd5b94c9cea2->leave($__internal_f1a9b6c6a46e20e36226899c8411f2a7b5f13a13929577342349fd5b94c9cea2_prof);

    }

    public function getTemplateName()
    {
        return "GsbGsbBundle:Default:employe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 63,  101 => 58,  95 => 55,  91 => 54,  87 => 53,  83 => 52,  80 => 51,  76 => 50,  26 => 3,  22 => 1,);
    }
}
/* <html>*/
/* <body>*/
/* <link rel="stylesheet" href="{{ asset('bundles/framework/css/cssGeneral.css') }}" type="text/css" />*/
/* <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">*/
/* */
/* <!--<div id="dashboard">*/
/*     <center><h2>Outil de Gestion GSB</h2><br></center>*/
/*     <div id="l1en">*/
/*         <div class="menu"><a href="./admin"><FONT size="5.5"><i class="fa fa-home"></i> Accueil</FONT></span></a></div>*/
/*         <div class="menu"><a href="./employe"><FONT size="5.5"><i class="fa fa-users"></i> Employés</FONT></span></a></div>*/
/*         <div class="menu"><a href="./ajout"><FONT size="5.5"><i class="fa fa-plus"></i> Ajouter événement</FONT></span></a></div>*/
/*         <div class="menu"><a class="deco" href="./deconnexion"><FONT size="5.5"><i class="fa fa-times"></i> Déconnexion</FONT></span></a></div>*/
/*     </div>*/
/* </div>-->*/
/* */
/* <div style="background-color:#293F54;color:#ffffff;font-size: 2rem;padding-top:0.5rem;"><center> Outil de Gestion GSB</center></div>*/
/* <nav id="nav-1">*/
/*     <a href="./admin" class="link-1" href="#"> <i class="fa fa-home"></i> Accueil</a>*/
/*     <a href="./employe" class="link-1" href="#"> <i class="fa fa-users"></i> Employés</a>*/
/*     <a href="./ajout" class="link-1" href="#"> <i class="fa fa-plus"></i> Ajouter événement</a>*/
/*     <a href="./deconnexion" class="link-1" href="#"> <i class="fa fa-times"></i> Déconnexion</a>*/
/* </nav>*/
/* <center>*/
/* <div id="conteneur">*/
/*     <h1 style="margin-left:2.5%;">Liste des employés</h1>*/
/* */
/*     <b style="margin-left:2.5%">Trier par</b></br>*/
/* */
/*     <form style="margin-left:2.5%; float:left; margin-top:1rem;" name="recup_cat" method="POST">*/
/*         <input style="margin-left:2.5%;float:left;" class="btnSite" type="submit" name="Nom" value="Nom">*/
/*     </form>*/
/*     <form style="margin-left:2.5%; float:left; margin-top:1rem;" name="recup_cat" method="POST">*/
/*         <input style="margin-left:2.5%;float:left;" class="btnSite" type="submit" name="Prenom" value="Prenom">*/
/*     </form>*/
/*     <br><br><br><br>*/
/*     <b style="margin-left:2.5%">Barre de recherche</b></br>*/
/*     <form style="margin-left: 2.5%;margin-top:1rem;" name="recherche" method="POST">*/
/*         <input style="" class="site" type="text" name="champRecherche">*/
/*         <input style="" type="submit" name="Rechercher" value="Rechercher" class="btnSite">*/
/*     </form>*/
/* */
/*     <center><table style="width:95%;margin-left:2.5%;">*/
/*             <tr class="ligneBlanche">*/
/*                 <td><b>Avatar</b></td>*/
/*                 <td><b>Nom</b></td>*/
/*                 <td><b>Prénom</b></td>*/
/*                 <td><b>Adresse e-mail</b></td>*/
/*                 <td><b>Planning</b></td>*/
/*             </tr>*/
/*             {% for d in lesDonnees %}*/
/*                 <tr class="ligne">*/
/*                 <td style="border: 0px;"> <img style="wdith:100%;height:100%;" src="{{ d.image }}"> </td>*/
/*                 <td style="border: 0px;"> <i class="fa fa-user"></i> {{ d.nom }} </td>*/
/*                 <td style="border: 0px;"> <i class="fa fa-user"></i> {{ d.prenom }} </td>*/
/*                 <td style="border: 0px;"> <i class="fa fa-envelope-o" aria-hidden="true"></i> {{ d.mail }} </td>*/
/*                 <td style="border: 0px;">*/
/*                         <form style="margin-top:1rem;" name="Planning_Form" method="POST">*/
/*                             <input type="hidden" name="id_cacher" value=" {{ d.id }}">*/
/*                             <input type="submit" name="Planning" value="Planning" class="btnSite">*/
/*                         </form>*/
/*                     </td></tr>*/
/*             {% endfor %}*/
/*             </table>*/
/* </center>*/
/* </div>*/
/* */
/* </body>*/
/* </html>*/
/* */
