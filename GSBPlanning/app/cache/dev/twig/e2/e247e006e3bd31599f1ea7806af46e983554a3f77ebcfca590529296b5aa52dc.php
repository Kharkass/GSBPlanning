<?php

/* GsbGsbBundle:Default:modifier.html.twig */
class __TwigTemplate_d011ba0a1c3684e222d8169de8463b25d6db17f43c7cf45c99cb25f4bf5287a2 extends Twig_Template
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
        $__internal_7886bc27a21b820347ae1fb9a406ad274b82ade398a7ec9a0c78045a90114795 = $this->env->getExtension("native_profiler");
        $__internal_7886bc27a21b820347ae1fb9a406ad274b82ade398a7ec9a0c78045a90114795->enter($__internal_7886bc27a21b820347ae1fb9a406ad274b82ade398a7ec9a0c78045a90114795_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GsbGsbBundle:Default:modifier.html.twig"));

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
    <div class=\"span4 offset4 login-inputs2\">
    <center><h2 style=\"padding-top:1rem;\">Modifier événements</h2></center>
        <form style=\"margin-left:3rem;margin-right:3rem;\" name=\"modification\" method=\"POST\">
            ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesDonnees"]) ? $context["lesDonnees"] : $this->getContext($context, "lesDonnees")));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            // line 29
            echo "            <b>Date</b></br> <input class=\"site\" type=\"date\" name=\"date\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "date_e", array()), "html", null, true);
            echo "\" required> </br>
            <b>Libellé</b> <input class=\"site\" type=\"text\" name=\"libelle\" value=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "libelle_e", array()), "html", null, true);
            echo "\" required> </br>
            <b>Durée</b> <input class=\"site\" type=\"text\" name=\"duree\" value=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "duree", array()), "html", null, true);
            echo "\" required> </br>
            <b>Heure</b> <input class=\"site\" type=\"text\" name=\"heure\" value=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "heure_e", array()), "html", null, true);
            echo "\" required> </br>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "            <input class=\"btnSite\" type=\"submit\" name=\"Valider\" value=\"Valider\">
        </form>
    </div>
    <br></br>

    <div class=\"span4 offset4 login-inputs3\">
        <center><h2 style=\"margin-left: 2.5%; padding-top:1rem;\">Sélectionner un employé à ajouter</h2></center>
        <form style=\"margin-left:3rem;margin-right:3rem;\" name=\"ajouterEMP\" method=\"POST\">
        <select class=\"site\" style=\"height:2rem;\" name=\"selection\">
            ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesEmployeNotIn"]) ? $context["lesEmployeNotIn"] : $this->getContext($context, "lesEmployeNotIn")));
        foreach ($context['_seq'] as $context["_key"] => $context["eni"]) {
            // line 44
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["eni"], "id", array()), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["eni"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["eni"], "Nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["eni"], "Prenom", array()), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['eni'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "
        </select>
            <input class=\"btnSite\" type=\"submit\" name=\"Ajouter\" value=\"Ajouter\">
        </form>
    </div>

    <div style=\"margin-top: 22rem;\">
        <table style=\"width:95%;margin-left:2.5%;\">
            <h2 style=\"padding-top:5rem;margin-left:2.5%;\">Liste des participants à l'événement</h2>
            <tr class=\"ligneBlanche\">
                <td><b>Nom</b></td>
                <td><b>Prénom</b></td>
                <td><b>Mail</b></td>
                <td><b>Supprimer</b></td>
            </tr>
            ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesEmploye"]) ? $context["lesEmploye"] : $this->getContext($context, "lesEmploye")));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 62
            echo "                <tr class=\"ligne\">
                    <td> <i class=\"fa fa-user\"></i> ";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "Nom", array()), "html", null, true);
            echo " </td>
                    <td> <i class=\"fa fa-user\"></i> ";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "Prenom", array()), "html", null, true);
            echo " </td>
                    <td> <i class=\"fa fa-envelope-o\"></i> ";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "Mail", array()), "html", null, true);
            echo " </td>
                    <td>
                        <form style=\"margin-top:1rem;\" name=\"recup_id\" method=\"POST\">
                            <input type=\"hidden\" name=\"id_emp\" value=\" ";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "id", array()), "html", null, true);
            echo "\">
                            <input class=\"btnSite\" type=\"submit\" value=\"Supprimer\" name=\"Supprimer\" class=\"btn\">
                        </form>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "        </table>
    </div>


</div>
</center>
</body>
</html>";
        
        $__internal_7886bc27a21b820347ae1fb9a406ad274b82ade398a7ec9a0c78045a90114795->leave($__internal_7886bc27a21b820347ae1fb9a406ad274b82ade398a7ec9a0c78045a90114795_prof);

    }

    public function getTemplateName()
    {
        return "GsbGsbBundle:Default:modifier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 74,  147 => 68,  141 => 65,  137 => 64,  133 => 63,  130 => 62,  126 => 61,  109 => 46,  94 => 44,  90 => 43,  79 => 34,  71 => 32,  67 => 31,  63 => 30,  58 => 29,  54 => 28,  26 => 3,  22 => 1,);
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
/*     <div class="span4 offset4 login-inputs2">*/
/*     <center><h2 style="padding-top:1rem;">Modifier événements</h2></center>*/
/*         <form style="margin-left:3rem;margin-right:3rem;" name="modification" method="POST">*/
/*             {% for d in lesDonnees %}*/
/*             <b>Date</b></br> <input class="site" type="date" name="date" value="{{ d.date_e }}" required> </br>*/
/*             <b>Libellé</b> <input class="site" type="text" name="libelle" value="{{ d.libelle_e }}" required> </br>*/
/*             <b>Durée</b> <input class="site" type="text" name="duree" value="{{ d.duree }}" required> </br>*/
/*             <b>Heure</b> <input class="site" type="text" name="heure" value="{{ d.heure_e }}" required> </br>*/
/*             {% endfor %}*/
/*             <input class="btnSite" type="submit" name="Valider" value="Valider">*/
/*         </form>*/
/*     </div>*/
/*     <br></br>*/
/* */
/*     <div class="span4 offset4 login-inputs3">*/
/*         <center><h2 style="margin-left: 2.5%; padding-top:1rem;">Sélectionner un employé à ajouter</h2></center>*/
/*         <form style="margin-left:3rem;margin-right:3rem;" name="ajouterEMP" method="POST">*/
/*         <select class="site" style="height:2rem;" name="selection">*/
/*             {% for eni in lesEmployeNotIn %}*/
/*             <option value="{{ eni.id }}" name="{{ eni.id }}">{{ eni.Nom }} {{ eni.Prenom }}</option>*/
/*             {% endfor %}*/
/* */
/*         </select>*/
/*             <input class="btnSite" type="submit" name="Ajouter" value="Ajouter">*/
/*         </form>*/
/*     </div>*/
/* */
/*     <div style="margin-top: 22rem;">*/
/*         <table style="width:95%;margin-left:2.5%;">*/
/*             <h2 style="padding-top:5rem;margin-left:2.5%;">Liste des participants à l'événement</h2>*/
/*             <tr class="ligneBlanche">*/
/*                 <td><b>Nom</b></td>*/
/*                 <td><b>Prénom</b></td>*/
/*                 <td><b>Mail</b></td>*/
/*                 <td><b>Supprimer</b></td>*/
/*             </tr>*/
/*             {% for e in lesEmploye %}*/
/*                 <tr class="ligne">*/
/*                     <td> <i class="fa fa-user"></i> {{ e.Nom }} </td>*/
/*                     <td> <i class="fa fa-user"></i> {{ e.Prenom }} </td>*/
/*                     <td> <i class="fa fa-envelope-o"></i> {{ e.Mail }} </td>*/
/*                     <td>*/
/*                         <form style="margin-top:1rem;" name="recup_id" method="POST">*/
/*                             <input type="hidden" name="id_emp" value=" {{ e.id }}">*/
/*                             <input class="btnSite" type="submit" value="Supprimer" name="Supprimer" class="btn">*/
/*                         </form>*/
/*                     </td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*         </table>*/
/*     </div>*/
/* */
/* */
/* </div>*/
/* </center>*/
/* </body>*/
/* </html>*/
