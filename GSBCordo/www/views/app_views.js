var loginTpl = Handlebars.compile($("#login-tpl").html());
var homeTpl = Handlebars.compile($("#home-tpl").html());
//var detailPortTpl = Handlebars.compile($("#detail-port-tpl").html());
//var alertesTpl = Handlebars.compile($("#alertes-tpl").html());
var userTpl = Handlebars.compile($("#profile-tpl").html());


var LoginView = function(){
   $('body').html(loginTpl());
   var permanentStorage = window.localStorage;
   if (permanentStorage.getItem("utilisateur")){
      var util = permanentStorage.getItem("utilisateur");
      $('.login').val( util);
   }
};

var HomeView = function(){
   // on doit récupérer les portefeuilles de l'utilisateur
  // var service = new ServiceGetPortefeuilles();
   var service = new ServiceGetEvenements();
   service.initialize();

   service.getEvent(localStorage.utilisateur).done(function (data) {
      var context = {listeEvent: data};
      montimer=window.setInterval("Alert()",5000);
      $('body').html(homeTpl(context));
   });
};

var Alert = function(){

   var service2 = new ServiceGetAlert();
   service2.initialize();
   //var resalert = service2.getAlert(localStorage.utilisateur);
   service2.getAlert(localStorage.utilisateur).done(function(data){
      if (data['resu'] == true)
      {
         alert ("Le nombre d'évènement auquel vous êtes conviés à était modifier !");
         var service3=new ServiceMajBDD();
         service3.initialize();
         service3.Maj(localStorage.utilisateur);
      }
   });
   /*
    */
}

/*var DetailPortView = function(portID){
   // on doit récupérer les portefeuilles de l'utilisateur
   var service = new ServiceGetContenuPortefeuilles();
   service.initialize();

   var lesA = service.getPortefeuillesDetail(1);
   var context = { nomEvenement:'Evenement', listeActions : lesA };

   $('body').html(detailPortTpl(context));
};*/

/*var AlertesListView = function(portID){
   // on doit récupérer les portefeuilles de l'utilisateur
   var service = new ServiceGetAlertes();
   service.initialize();

   var lesA = service.getAlertes(1);
   var context = { listeAlertes : lesA };

   $('body').html(alertesTpl(context));
};*/

var UserView = function(){
   var permanentStorage = window.localStorage;
   var util = permanentStorage.getItem("utilisateur");
   var context = { utilisateur : util }
   $('body').html(userTpl(context));
};


