/*var ServiceGetPortefeuilles = function () {

    var url;

    this.initialize = function (serviceURL) {
        url = serviceURL ? serviceURL : "http://127.0.0.1/gsb_services/";
    }

    this.getPortefeuillesUser = function (idUser) {


        return $.ajax({
            url: url + "/demandes_devis.php",
            type: "GET",
            dataType: "json",
            data: {
                vendeur: idVendeur
            }
        });

        var service = new ClassePortefeuilles();
        return service.portefeuilles;
    }
}*/


/*var ServiceGetContenuPortefeuilles = function () {

    var url;

    this.initialize = function (serviceURL) {
        url = serviceURL ? serviceURL : "http://127.0.0.1/gsb_services/";
    }

    this.getPortefeuillesDetail = function (idPort) {


        return $.ajax({
            url: url + "/demandes_devis.php",
            type: "GET",
            dataType: "json",
            data: {
                vendeur: idVendeur
            }
        });

        var service = new ClassePortefeuilles();
        return service.actions;
    }
}*/

/*var ServiceGetAlertes = function () {

    var url;

    this.initialize = function (serviceURL) {
        url = serviceURL ? serviceURL : "http://127.0.0.1/gsb_services/";
    }

    this.getAlertes = function (idUser) {


        return $.ajax({
            url: url + "/demandes_devis.php",
            type: "GET",
            dataType: "json",
            data: {
                vendeur: idVendeur
            }
        });

        var service = new ClassePortefeuilles();
        return service.alertes;
    }
}*/

// Vérifie la connexion utilisateur

var ServiceAuthentification = function() {
    var url;
    this.initialize = function(serviceURL) {
        url = serviceURL ? serviceURL : "http://localhost/services_GSB/";

          }
    this.authentifierUser = function(login, mdp) {
        return $.ajax({
            url: url + "authentification.php",
            type: "GET",
            dataType: "json",
            data: {
                login: login,
                mdp: mdp
            }
        });
    }
}

var ServiceGetEvenements = function() {
    var url;
    this.initialize = function(serviceURL) {
        url = serviceURL ? serviceURL : "http://localhost/services_GSB/";
    }
    this.getEvent = function(mail)
    {
        return $.ajax({
           url : url + "recup.php",
            type: "GET",
            dataType: "json",
            data : {
                mail: mail
            }
        });
    }

}

var ServiceGetAlert = function()
{
    var url;
    this.initialize = function(serviceURL){
        url = serviceURL ? serviceURL : "http://localhost/services_GSB/"
    }

    this.getAlert = function(mail)
    {
        return $.ajax({
            url : url +"alerte.php",
            type: "GET",
            dataType: "json",
            data : {
                mail: mail
            }
        });
    }
}

var ServiceMajBDD = function()
{
    var url;
    this.initialize = function(serviceURL)
    {
        url = serviceURL ? serviceURL : "http://localhost/services_GSB/"
    }

    this.Maj = function(mail)
    {
        return $.ajax({
            url : url + "maj.php",
            type: "GET",
            dataType: "json",
            data : {
                mail : mail
            }
        });
    }
}