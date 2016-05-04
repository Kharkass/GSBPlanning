<?php

/* GsbGsbBundle:Default:dashboard.html.twig */
class __TwigTemplate_179e4bfbcf7b241ea60f407379397763ad322cd593a33e49116433f95f89042e extends Twig_Template
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
        $__internal_e9cf974100f958e553191dd494c6d64c8a69da779a089d946e1ecb297ef28cd2 = $this->env->getExtension("native_profiler");
        $__internal_e9cf974100f958e553191dd494c6d64c8a69da779a089d946e1ecb297ef28cd2->enter($__internal_e9cf974100f958e553191dd494c6d64c8a69da779a089d946e1ecb297ef28cd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GsbGsbBundle:Default:dashboard.html.twig"));

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
    <h1 style=\"margin-left:2.5%;\">Événements à venir</h1>
        <b style=\"margin-left:2.5%\">Trier par</b></br>

    <form style=\"margin-left:2.5%; float:left; margin-top:1rem;\" name=\"recup_cat\" method=\"POST\">
        <input class=\"btnSite\" type=\"submit\" name=\"allCat\" value=\"Tout afficher\">
    </form>

    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesBoutons"]) ? $context["lesBoutons"] : $this->getContext($context, "lesBoutons")));
        foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
            // line 33
            echo "        <form style=\"margin-left:2.5%; float:left; margin-top:1rem;\" name=\"recup_cat\" method=\"POST\">
            <input type=\"hidden\" name=\"id_cacher_cat\" value=\" ";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["b"], "id", array()), "html", null, true);
            echo "\">
            <input class=\"btnSite\" type=\"submit\" name=\"Cat\" value=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["b"], "libelle", array()), "html", null, true);
            echo "\">
        </form>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "
    <br><br><br><br>
    <b style=\"margin-left:2.5%\">Barre de recherche</b></br>
    <form style=\"margin-left: 2.5%;margin-top:1rem;\" name=\"recherche\" method=\"POST\">
        <input style=\"\" class=\"site\" type=\"text\" name=\"champRecherche\">
        <input style=\"\" type=\"submit\" name=\"Rechercher\" value=\"Rechercher\" class=\"btnSite\">
    </form>

    <center><table style=\"width:95%;margin-left:2.5%;\">
        <tr class=\"ligneBlanche\">
            <td><b>Date</b></td>
            <td><b>Libelle</b></td>
            <td><b>Heure</b></td>
            <td><b>Durée</b></td>
            <td><b>Créateur de l'évenement</b></td>
            <td><b>Editer</b></td>
            <td><b>Supprimer</b></td>
        </tr>
    ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesDonnees"]) ? $context["lesDonnees"] : $this->getContext($context, "lesDonnees")));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            // line 57
            echo "        <tr class=\"ligne\">
            <td> <i class=\"fa fa-calendar\"></i> ";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "date_e", array()), "html", null, true);
            echo "</td>
            <td> <i class=\"fa fa-file-text-o\"></i> ";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "libelle_e", array()), "html", null, true);
            echo "</td>
            <td> <i class=\"fa fa-clock-o\"></i> ";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "heure_e", array()), "html", null, true);
            echo "</td>
            <td> <i class=\"fa fa-hourglass-half\"></i> ";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "duree", array()), "html", null, true);
            echo "</td>
            <td> <i class=\"fa fa-user\"></i> ";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "prenom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "nom", array()), "html", null, true);
            echo "</td>
            <td>
                <form style=\"margin-top:1rem;\" name=\"recup_id\" method=\"POST\">
                    <input type=\"hidden\" name=\"id_cacher\" value=\" ";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "id_e", array()), "html", null, true);
            echo "\">
                    <input type=\"submit\" value=\"Modifier\" name=\"Modifier\" class=\"btnSite\">
                </form>
            </td>


            <td>
                <form style=\"margin-top:1rem;\" name=\"recup_id\" method=\"POST\">
                    <input type=\"hidden\" name=\"id_cacher\" value=\" ";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "id_e", array()), "html", null, true);
            echo "\">
                    <input type=\"submit\" value=\"Supprimer\" name=\"Supprimer\" class=\"btnSite\">
                </form>
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "    </table>
    </center>

</div>
</center>

</body>
</html>";
        
        $__internal_e9cf974100f958e553191dd494c6d64c8a69da779a089d946e1ecb297ef28cd2->leave($__internal_e9cf974100f958e553191dd494c6d64c8a69da779a089d946e1ecb297ef28cd2_prof);

    }

    public function getTemplateName()
    {
        return "GsbGsbBundle:Default:dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 79,  140 => 73,  129 => 65,  121 => 62,  117 => 61,  113 => 60,  109 => 59,  105 => 58,  102 => 57,  98 => 56,  78 => 38,  69 => 35,  65 => 34,  62 => 33,  58 => 32,  26 => 3,  22 => 1,);
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
/*     <h1 style="margin-left:2.5%;">Événements à venir</h1>*/
/*         <b style="margin-left:2.5%">Trier par</b></br>*/
/* */
/*     <form style="margin-left:2.5%; float:left; margin-top:1rem;" name="recup_cat" method="POST">*/
/*         <input class="btnSite" type="submit" name="allCat" value="Tout afficher">*/
/*     </form>*/
/* */
/*     {% for b in lesBoutons %}*/
/*         <form style="margin-left:2.5%; float:left; margin-top:1rem;" name="recup_cat" method="POST">*/
/*             <input type="hidden" name="id_cacher_cat" value=" {{ b.id }}">*/
/*             <input class="btnSite" type="submit" name="Cat" value="{{ b.libelle }}">*/
/*         </form>*/
/*     {% endfor %}*/
/* */
/*     <br><br><br><br>*/
/*     <b style="margin-left:2.5%">Barre de recherche</b></br>*/
/*     <form style="margin-left: 2.5%;margin-top:1rem;" name="recherche" method="POST">*/
/*         <input style="" class="site" type="text" name="champRecherche">*/
/*         <input style="" type="submit" name="Rechercher" value="Rechercher" class="btnSite">*/
/*     </form>*/
/* */
/*     <center><table style="width:95%;margin-left:2.5%;">*/
/*         <tr class="ligneBlanche">*/
/*             <td><b>Date</b></td>*/
/*             <td><b>Libelle</b></td>*/
/*             <td><b>Heure</b></td>*/
/*             <td><b>Durée</b></td>*/
/*             <td><b>Créateur de l'évenement</b></td>*/
/*             <td><b>Editer</b></td>*/
/*             <td><b>Supprimer</b></td>*/
/*         </tr>*/
/*     {% for d in lesDonnees %}*/
/*         <tr class="ligne">*/
/*             <td> <i class="fa fa-calendar"></i> {{ d.date_e }}</td>*/
/*             <td> <i class="fa fa-file-text-o"></i> {{ d.libelle_e }}</td>*/
/*             <td> <i class="fa fa-clock-o"></i> {{ d.heure_e }}</td>*/
/*             <td> <i class="fa fa-hourglass-half"></i> {{ d.duree }}</td>*/
/*             <td> <i class="fa fa-user"></i> {{ d.prenom }} {{ d.nom }}</td>*/
/*             <td>*/
/*                 <form style="margin-top:1rem;" name="recup_id" method="POST">*/
/*                     <input type="hidden" name="id_cacher" value=" {{ d.id_e }}">*/
/*                     <input type="submit" value="Modifier" name="Modifier" class="btnSite">*/
/*                 </form>*/
/*             </td>*/
/* */
/* */
/*             <td>*/
/*                 <form style="margin-top:1rem;" name="recup_id" method="POST">*/
/*                     <input type="hidden" name="id_cacher" value=" {{ d.id_e }}">*/
/*                     <input type="submit" value="Supprimer" name="Supprimer" class="btnSite">*/
/*                 </form>*/
/*             </td>*/
/*         </tr>*/
/*     {% endfor %}*/
/*     </table>*/
/*     </center>*/
/* */
/* </div>*/
/* </center>*/
/* */
/* </body>*/
/* </html>*/
