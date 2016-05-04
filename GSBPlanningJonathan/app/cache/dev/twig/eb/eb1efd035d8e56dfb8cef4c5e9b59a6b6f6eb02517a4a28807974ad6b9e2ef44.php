<?php

/* GsbGsbBundle:Default:planning.html.twig */
class __TwigTemplate_941227f150667c6d73ed5a81574fa789818cb27f5b975bef06f6d4aba5ae6bef extends Twig_Template
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
        $__internal_df1d506a35cff27e7e5505e290577e99e7b026ed31454f333b4df8c20f478bf0 = $this->env->getExtension("native_profiler");
        $__internal_df1d506a35cff27e7e5505e290577e99e7b026ed31454f333b4df8c20f478bf0->enter($__internal_df1d506a35cff27e7e5505e290577e99e7b026ed31454f333b4df8c20f478bf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GsbGsbBundle:Default:planning.html.twig"));

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
    <h1 style=\"margin-left:2.5%;\">Convocations aux événements de ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["leNom"]) ? $context["leNom"] : $this->getContext($context, "leNom")));
        foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["n"], "Prenom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["n"], "Nom", array()), "html", null, true);
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['n'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</h1>
    <center>
        <table style=\"width:95%; margin-left:2.5%;\">
                    <tr class=\"ligneBlanche\">
                        <!--<td><b>Prénom</b></td>
                        <td><b>Nom</b></td>-->
                        <td><b>Date</b></td>
                        <td><b>Libellé</b></td>
                        <td><b>Heure</b></td>
                        <td><b>Durée</b></td>
                    </tr>
            ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesDonnees"]) ? $context["lesDonnees"] : $this->getContext($context, "lesDonnees")));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            // line 37
            echo "                <tr class=\"ligne\">
                    <!--<td> ";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "Prenom", array()), "html", null, true);
            echo "</td>
                    <td> ";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "Nom", array()), "html", null, true);
            echo "</td>-->
                    <td> <i class=\"fa fa-calendar\"></i> ";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "date_e", array()), "html", null, true);
            echo "</td>
                    <td> <i class=\"fa fa-file-text-o\"></i> ";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "libelle_e", array()), "html", null, true);
            echo "</td>
                    <td> <i class=\"fa fa-clock-o\"></i> ";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "heure_e", array()), "html", null, true);
            echo " </td>
                    <td> <i class=\"fa fa-hourglass-half\"></i> ";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "duree", array()), "html", null, true);
            echo " </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "        </table>
    </center>
</div>

</body>
</html>";
        
        $__internal_df1d506a35cff27e7e5505e290577e99e7b026ed31454f333b4df8c20f478bf0->leave($__internal_df1d506a35cff27e7e5505e290577e99e7b026ed31454f333b4df8c20f478bf0_prof);

    }

    public function getTemplateName()
    {
        return "GsbGsbBundle:Default:planning.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 46,  103 => 43,  99 => 42,  95 => 41,  91 => 40,  87 => 39,  83 => 38,  80 => 37,  76 => 36,  51 => 25,  26 => 3,  22 => 1,);
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
/*     <h1 style="margin-left:2.5%;">Convocations aux événements de {% for n in leNom %} {{ n.Prenom }} {{ n.Nom }} {% endfor %}</h1>*/
/*     <center>*/
/*         <table style="width:95%; margin-left:2.5%;">*/
/*                     <tr class="ligneBlanche">*/
/*                         <!--<td><b>Prénom</b></td>*/
/*                         <td><b>Nom</b></td>-->*/
/*                         <td><b>Date</b></td>*/
/*                         <td><b>Libellé</b></td>*/
/*                         <td><b>Heure</b></td>*/
/*                         <td><b>Durée</b></td>*/
/*                     </tr>*/
/*             {% for d in lesDonnees %}*/
/*                 <tr class="ligne">*/
/*                     <!--<td> {{ d.Prenom }}</td>*/
/*                     <td> {{ d.Nom }}</td>-->*/
/*                     <td> <i class="fa fa-calendar"></i> {{ d.date_e }}</td>*/
/*                     <td> <i class="fa fa-file-text-o"></i> {{ d.libelle_e }}</td>*/
/*                     <td> <i class="fa fa-clock-o"></i> {{ d.heure_e }} </td>*/
/*                     <td> <i class="fa fa-hourglass-half"></i> {{ d.duree }} </td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*         </table>*/
/*     </center>*/
/* </div>*/
/* */
/* </body>*/
/* </html>*/
