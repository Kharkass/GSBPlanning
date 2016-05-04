<?php

require('classes/PDOGsb.php');

$cnx = PDOGsb::getPDOGsb();
$resu = $cnx->verifierUser($_REQUEST['Mail'], $_REQUEST['mdp']);

echo json_encode($resu);

?>