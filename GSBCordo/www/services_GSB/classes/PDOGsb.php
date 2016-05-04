 <?php

class PDOGsb
{   		
      	private static $serveur='mysql:host=127.0.0.1';
      	private static $bdd='dbname=gsb';   		
      	private static $user='root';    		
      	private static $mdp='';	
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
	
	public function verifierUser($l, $m){
		$req = "select count(*) as nb from personnel where Mail='".$l."' and mdp='".$m."'";
		$res = PdoGSB::$monPdo->query($req);
		$LaLigne = $res->fetch();
		$nombre = $LaLigne['nb'];
		if ($nombre == 1){
			return true;
		}else{
			return false;
		}
	}
	}
?>