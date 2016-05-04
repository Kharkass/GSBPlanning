var ClassePortefeuilles = function () {

    this.initialize = function () {
        // No Initialization required     
    }

    this.portefeuilles = [
        { "id": 1, "libelle": "Reunion du personnel", "date": "25/03/2016", "horaire": "17h00", "duree": "1h"},
        { "id": 2, "libelle": "Conseil d'administration", "date": "30/03/2016", "horaire": "15h30", "duree": "3h"},
    ];

    this.actions =[
        { "ticker": 'UG', "libelle": "Peugeot", "nombre": 30, "variation_initiale": 15.31, "variation_veille": 1.04, "PRU" : 13.23, "cours" : 15.21, "montant" : 2103},
        { "ticker": 'RNO', "libelle": "Renault", "nombre": 15, "variation_initiale": 27.31, "variation_veille": 4.04, "PRU" : 78.23, "cours" : 81.21, "montant" : 578},
        { "ticker": 'SNF', "libelle": "Sanofi", "nombre": 41, "variation_initiale": -4.52, "variation_veille": -1.37, "PRU" : 71.23, "cours" : 73.20, "montant" : 1103},
    ];

    this.alertes =[
        { "ticker": 'UG', "libelle": "Peugeot", "cours" : 15.21, "alerte" : 15.00, "date": "13h45 le 15/02/2016"},
        { "ticker": 'UG', "libelle": "Peugeot", "cours" : 15.21, "alerte" : 14.80, "date": "13h45 le 15/02/2016"},
        { "ticker": 'RNO', "libelle": "Renault", "cours" : 78.00, "alerte" : 79.00, "date": "13h45 le 15/02/2016"},
    ];
}