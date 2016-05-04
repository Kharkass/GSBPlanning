 <?php

 
class PDOGsb
{   		
      	private static $serveur='mysql:host=172.18.204.11';
      	private static $bdd='dbname=gsb';   		
      	private static $user='john';    		
      	private static $mdp='john';	
		private static $monPdo;
		private static $monPDOGsb = null;
/**
 * Constructeur privé, crée l'instance de PDO qui sera sollicitée
 * pour toutes les méthodes de la classe
 */				
	private function __construct()
	{
    		PDOGsb::$monPdo = new PDO(PDOGsb::$serveur.';'.PDOGsb::$bdd, PDOGsb::$user, PDOGsb::$mdp); 
			PDOGsb::$monPdo->query("SET CHARACTER SET utf8");
	}
	public function _destruct(){
		PDOGsb::$monPdo = null;
	}
/**
 * Fonction statique qui crée l'unique instance de la classe
 *
 * Appel : $instancePdolafleur = PdoLafleur::getPdoLafleur();
 * @return l'unique objet de la classe PdoLafleur
 */
	public  static function getPDOGsb()
	{
		if(PDOGsb::$monPDOGsb == null)
		{
			PDOGsb::$monPDOGsb= new PDOGsb();
		}
		return PDOGsb::$monPDOGsb;  
	}
	
	public function verifierUser($mail, $mdp){
		$req = "select count(*) as nb from personnel where Mail='".$mail."' and mdp='".$mdp."'";
		$res = PdoGSB::$monPdo->query($req);
		$LaLigne = $res->fetch();
		$nombre = $LaLigne['nb'];
		if ($nombre == 1){
			return true;
		}else{
			return false;
		}
	}
	
	public function RecupEvent($mail)
	{	
	$req = "select date_e,libelle_e, heure_e, duree from evenement inner join convoquer on convoquer.id_e = evenement.id_e inner join personnel on personnel.id=convoquer.id where mail ='".$mail."'";
	$res = PdoGSB::$monPdo->query($req);
	$LesLignes = $res->fetchAll();
	return $LesLignes;
	
	}
	
	public function CompterEvent($mail)
	{
	
	$req = "select Count(libelle_e) from evenement inner join convoquer on convoquer.id_e = evenement.id_e inner join personnel on personnel.id=convoquer.id where mail ='".$mail."'";
	$res = PdoGSB::$monPdo->query($req);
	$Laligne = $res->fetch();
	
	$req2 = "select nombre from compteur inner join personnel on personnel.id=compteur.id_Client where mail='".$mail."'";
	$res2 = PdoGSB::$monPdo->query($req2);
	$Laligne2 = $res2->fetch();

		if ($Laligne[0] != $Laligne2[0]){
		return true;
		}
		else{
		return false;
		}
	}
	
	public function MajCompteur($mail)
	{
	
	$reqcli ="select id from personnel where Mail = '".$mail."'";
	$rescli = PdoGSB::$monPdo->query($reqcli);
	$client = $rescli->fetch();
	
	$req = "update compteur set nombre = (select count(evenement.id_e) from evenement inner join convoquer on convoquer.id_e = evenement.id_e inner join personnel on personnel.id=convoquer.id where personnel.id = ".$client['id'].") where id_client=".$client['id'];
	$res = PdoGSB::$monPdo->query($req);
	return true;
	
	}

}
?>