<?php

/* GsbGsbBundle:Default:ajout.html.twig */
class __TwigTemplate_b01c1228e4d71ed183b856095f99ef73e259fc5424c7b6f6d9ab7db6f1842fc6 extends Twig_Template
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
        $__internal_85312d8387f2294677c3e61c569e778f1a50796ff9bf0569ba9e6e1b577687e5 = $this->env->getExtension("native_profiler");
        $__internal_85312d8387f2294677c3e61c569e778f1a50796ff9bf0569ba9e6e1b577687e5->enter($__internal_85312d8387f2294677c3e61c569e778f1a50796ff9bf0569ba9e6e1b577687e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GsbGsbBundle:Default:ajout.html.twig"));

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
    <div class=\"span4 offset4 login-inputs5\">
        <center><h2 style=\"padding-top:1rem;\">Ajouter un événement</h2></center>
        <form style=\"margin-left:3rem;margin-right:3rem;\" name=\"modification\" method=\"POST\">
                <b>Date</b><br> <input class=\"site\" type=\"date\" name=\"date\" value=\"\" required></br></br>
                <b>Libellé</b><br> <input class=\"site\" type=\"text\" name=\"libelle\" value=\"\" required> </br>
                <b>Heure</b><br> <input class=\"site\" type=\"text\" name=\"duree\" value=\"\" required> </br>
                <b>Durée</b><br> <input class=\"site\" type=\"text\" name=\"heure\" value=\"\" required> </br>
                <b>Type d'événement</b><br>
                <select class=\"site\" name=\"selectionEvenement\">
                    ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesDonnees"]) ? $context["lesDonnees"] : $this->getContext($context, "lesDonnees")));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            // line 35
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "libelle", array()), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "                </select></br><br>
            <input class=\"btnSite\" type=\"submit\" name=\"Valider\" value=\"Valider\">
        </form>
    </div>

    <div class=\"span4 offset4 login-inputs4\" style=\"float:left;margin-left:2.5%;margin-top: 2.5%;\">
        <h2 style=\"margin-left:1rem;padding-top:1rem;\">Indications</h2>
        <p style=\"margin-left: 1rem;\">
            Cette page va vous permettre de créer un événement. Pour que l'ajout soit effectué, il faut respecter certains formats.<br>
            <i style=\"margin-left:2rem; margin-top:1rem;\" class=\"fa fa-check-square-o\" aria-hidden=\"true\"></i> Pour le champ \"Date\", le formalisme utilisé doit être le suivant <i class=\"fa fa-long-arrow-right\" aria-hidden=\"true\"></i> date-mois-jour.<br>
            <i style=\"margin-left:2rem; margin-top:1rem;\" class=\"fa fa-check-square-o\" aria-hidden=\"true\"></i> Le champ \"Libellé\" va permettre de donner des indications sur le sujet principal de l'événement.<br>
            <i style=\"margin-left:2rem; margin-top:1rem;\" class=\"fa fa-check-square-o\" aria-hidden=\"true\"></i> Le champ \"Heure\" doit utilisé la mise en forme suivante <i class=\"fa fa-long-arrow-right\" aria-hidden=\"true\"></i> 14h00.<br>
            <i style=\"margin-left:2rem; margin-top:1rem;\" class=\"fa fa-check-square-o\" aria-hidden=\"true\"></i> Le champ \"Durée\" doit être présenté comme suit <i class=\"fa fa-long-arrow-right\" aria-hidden=\"true\"></i> 2 heures.</br>
            <i style=\"margin-left:2rem; margin-top:1rem;\" class=\"fa fa-check-square-o\" aria-hidden=\"true\"></i> Le champ \"Type d'événement\" va caractériser le contexte de l'événement.
        </p>
    </div>

</div>
</body>
</html>";
        
        $__internal_85312d8387f2294677c3e61c569e778f1a50796ff9bf0569ba9e6e1b577687e5->leave($__internal_85312d8387f2294677c3e61c569e778f1a50796ff9bf0569ba9e6e1b577687e5_prof);

    }

    public function getTemplateName()
    {
        return "GsbGsbBundle:Default:ajout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 37,  64 => 35,  60 => 34,  26 => 3,  22 => 1,);
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
/*     <div class="span4 offset4 login-inputs5">*/
/*         <center><h2 style="padding-top:1rem;">Ajouter un événement</h2></center>*/
/*         <form style="margin-left:3rem;margin-right:3rem;" name="modification" method="POST">*/
/*                 <b>Date</b><br> <input class="site" type="date" name="date" value="" required></br></br>*/
/*                 <b>Libellé</b><br> <input class="site" type="text" name="libelle" value="" required> </br>*/
/*                 <b>Heure</b><br> <input class="site" type="text" name="duree" value="" required> </br>*/
/*                 <b>Durée</b><br> <input class="site" type="text" name="heure" value="" required> </br>*/
/*                 <b>Type d'événement</b><br>*/
/*                 <select class="site" name="selectionEvenement">*/
/*                     {% for d in lesDonnees %}*/
/*                     <option value="{{ d.id }}">{{ d.libelle }}</option>*/
/*                     {% endfor %}*/
/*                 </select></br><br>*/
/*             <input class="btnSite" type="submit" name="Valider" value="Valider">*/
/*         </form>*/
/*     </div>*/
/* */
/*     <div class="span4 offset4 login-inputs4" style="float:left;margin-left:2.5%;margin-top: 2.5%;">*/
/*         <h2 style="margin-left:1rem;padding-top:1rem;">Indications</h2>*/
/*         <p style="margin-left: 1rem;">*/
/*             Cette page va vous permettre de créer un événement. Pour que l'ajout soit effectué, il faut respecter certains formats.<br>*/
/*             <i style="margin-left:2rem; margin-top:1rem;" class="fa fa-check-square-o" aria-hidden="true"></i> Pour le champ "Date", le formalisme utilisé doit être le suivant <i class="fa fa-long-arrow-right" aria-hidden="true"></i> date-mois-jour.<br>*/
/*             <i style="margin-left:2rem; margin-top:1rem;" class="fa fa-check-square-o" aria-hidden="true"></i> Le champ "Libellé" va permettre de donner des indications sur le sujet principal de l'événement.<br>*/
/*             <i style="margin-left:2rem; margin-top:1rem;" class="fa fa-check-square-o" aria-hidden="true"></i> Le champ "Heure" doit utilisé la mise en forme suivante <i class="fa fa-long-arrow-right" aria-hidden="true"></i> 14h00.<br>*/
/*             <i style="margin-left:2rem; margin-top:1rem;" class="fa fa-check-square-o" aria-hidden="true"></i> Le champ "Durée" doit être présenté comme suit <i class="fa fa-long-arrow-right" aria-hidden="true"></i> 2 heures.</br>*/
/*             <i style="margin-left:2rem; margin-top:1rem;" class="fa fa-check-square-o" aria-hidden="true"></i> Le champ "Type d'événement" va caractériser le contexte de l'événement.*/
/*         </p>*/
/*     </div>*/
/* */
/* </div>*/
/* </body>*/
/* </html>*/
