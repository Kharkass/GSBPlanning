<?php
namespace models;
class PDOGsb
{
    private static $serveur='mysql:host=127.0.0.1';
    private static $bdd='dbname=gsb';
    private static $user='root';
    private static $mdp='';
    private static $monPdo;
    private static $monPDOGsb = null;
    private function __construct()
    {
    PDOGsb::$monPdo = new \PDO(PDOGsb::$serveur.';'.PDOGsb::$bdd, PDOGsb::$user, PDOGsb::$mdp);
    PDOGsb::$monPdo->query("SET CHARACTER SET utf8");
    }
    public function _destruct(){
    PDOGsb::$monPdo = null;
    }

    public  static function getPDOGsb()
    {
        if(PDOGsb::$monPDOGsb == null)
        {
            PDOGsb::$monPDOGsb= new PDOGsb();
        }
        return PDOGsb::$monPDOGsb;
    }
    public function connecter($mail,$mdp)
        {
            $req = "SELECT count(*) as nb FROM personnel where Mail='$mail' and mdp='$mdp' and id_Service = 1";
           
            $res = PDOGsb::$monPdo->query($req);
            $laLigne = $res->fetch();
          //  $_SESSION["mail"] = $laLigne["id"];

            $nb = $laLigne['nb'] ;
            if($nb == 0){
                return false;

            }else{
                return true;
            }
        }

    public function afficherTableau()
    {
        $req = "SELECT evenement.id_e,date_e,libelle_e,heure_e,duree,nom,prenom FROM `evenement` INNER JOIN personnel on personnel.id = evenement.id where date_e >= NOW() order by date_e ";
        $res = PDOGsb::$monPdo->query($req);
        $lesLignes = $res->fetchAll();
        return $lesLignes;
    }
    public function afficherEmp()
    {
        $req="Select id,nom,prenom,mail,image from personnel";
        $res = PDOGsb::$monPdo->query($req);
        $lesLignes = $res->fetchAll();
        return $lesLignes;
    }

    public function afficherEmpTri($idtype)
    {
        $req = "select id,nom,prenom,mail,image from personnel where id_Service=2 order by $idtype";
        $res = PDOGsb::$monPdo->query($req);
        $lesLignes = $res->fetchAll();
        return $lesLignes;
    }

    public function SupprEve($id_cacher)
    {
        $req= "Delete from evenement where id_e=$id_cacher";
        $res = PDOGsb::$monPdo->query($req);
    }
    public function afficherTableauid($id_cacher)
    {
        $req = "SELECT evenement.id_e,date_e,libelle_e,heure_e,duree,nom,prenom FROM `evenement` INNER JOIN personnel on personnel.id = evenement.id where id_e=$id_cacher";
        $res = PDOGsb::$monPdo->query($req);
        $lesLignes = $res->fetchAll();
        return $lesLignes;
    }

    public function modifEvenement($id_cacher, $duree, $date, $libelle, $heure){
        $req = "UPDATE evenement SET duree='$duree', date_e='$date', libelle_e='$libelle', heure_e='$heure' where id_e=$id_cacher";
        $res = PDOGsb::$monPdo->exec($req);
        dump($req);
    }

    public function afficherEvEmp($id)
    {
        $req = "select * from evenement inner join convoquer on convoquer.id_e = evenement.id_e inner join personnel on personnel.id = convoquer.id where convoquer.id = $id and evenement.date_e >= NOW()";
        $res = PDOGsb::$monPdo->query($req);
        $lesLignes = $res->fetchAll();
        return $lesLignes;
    }

    public function afficherEvEmpName($id)
    {
        $req = "select * from evenement inner join convoquer on convoquer.id_e = evenement.id_e inner join personnel on personnel.id = convoquer.id where convoquer.id = $id and evenement.date_e >= NOW() order by convoquer.id limit 1";
        $res = PDOGsb::$monPdo->query($req);
        $laLigne = $res->fetchAll();
        return $laLigne;
    }

    public function afficherEmpConvoc($id_e)
    {
        $req="select personnel.id,Nom,Prenom,Mail from personnel inner join convoquer on convoquer.id = personnel.id inner join evenement on evenement.id_e = convoquer.id_e where evenement.id_e = $id_e";
        $res = PDOGsb::$monPdo->query($req);
        $lesLignes = $res->fetchAll();
        return $lesLignes;
    }

    public function SupprConvoc($id_cacher, $id_emp)
    {
        $req= "delete from convoquer where id = $id_emp and id_e = $id_cacher";
        $res = PDOGsb::$monPdo->query($req);
    }

    public function afficherNotIn($id_e)
    {
        $req="select * from personnel WHERE id NOT IN (SELECT id FROM convoquer where id_e = $id_e)";
        $res = PDOGsb::$monPdo->query($req);
        $lesLignes = $res->fetchAll();
        return $lesLignes;
    }

    public function ajouterConvoquer($id, $id_e)
    {
        $req="INSERT INTO convoquer VALUES ($id, $id_e)";
        $res = PDOGsb::$monPdo->query($req);
    }

    public function ajouterEvenement($date, $libelle, $heure, $duree, $idAdmin, $idType)
    {
        $req="INSERT INTO evenement (date_e, libelle_e, heure_e, duree, id, id_Type) VALUES ('$date', '$libelle', '$heure', '$duree', $idAdmin, $idType)";
        $res = PDOGsb::$monPdo->query($req);
    }

    public function recupID($mail)
    {
        $req="select id as nb from personnel where mail = '$mail'";
        $res = PDOGsb::$monPdo->query($req);
        $laLigne = $res->fetch();
        return $laLigne['nb'];
    }

    public function trierEvenement()
    {
        $req="select * from type";
        $res = PDOGsb::$monPdo->query($req);
        $lesLignes = $res->fetchAll();
        return $lesLignes;
    }
    public function AfficherEveTri($idtype)
    {
        $req = "SELECT evenement.id_e,date_e,libelle_e,heure_e,duree,nom,prenom, evenement.id_Type  FROM `evenement` INNER JOIN personnel on personnel.id = evenement.id where date_e >= NOW() and evenement.id_Type=$idtype";
        $res = PDOGsb::$monPdo->query($req);
        $lesLignes = $res->fetchAll();
        return $lesLignes;
    }

    public function listeEvenement(){
        $req="select * from type";
        $res = PDOGsb::$monPdo->query($req);
        $lesLignes = $res->fetchAll();
        return $lesLignes;
    }

    public function modifContenuMail($id){
        $req = "select Mail from personnel where id = $id";
        $res = PDOGsb::$monPdo->query($req);
        $lesLignes = $res->fetch();
        return $lesLignes;
    }

    public function rechecheEmp($recherche){
        $req = "select id,nom,prenom,mail,image from personnel where Prenom like '%$recherche%' or Nom like '%$recherche%' or Mail like '%$recherche%'";
        $res = PDOGsb::$monPdo->query($req);
        $lesLignes = $res->fetchAll();
        return $lesLignes;
    }

    public function rechercheEv($recherche){
        $req = "SELECT evenement.id_e,date_e,libelle_e,heure_e,duree,nom,prenom FROM `evenement` INNER JOIN personnel on personnel.id = evenement.id where libelle_e like '%$recherche%' and date_e >= NOW() order by date_e";
        $res = PDOGsb::$monPdo->query($req);
        $lesLignes = $res->fetchAll();
        return $lesLignes;
    }


}
