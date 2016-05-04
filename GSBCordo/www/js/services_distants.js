 /*var ServiceAuthentification = function() {
    var url;
	this.initialize = function(serviceURL) {
		url = serviceURL ? serviceURL : "http://localhost/BoursiCordo/";
	}
	this.authentifierUser = function(log, pass) {
		return $.ajax({
			url: url + "/authentification.php",
			type: "GET",
			dataType: "json",
			data: {
				login: log,
				mdp: pass
			}
		});
	}
}
     */