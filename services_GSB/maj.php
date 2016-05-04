<?php

require('classes/PDOGsb.php');

$cnx = PDOGsb::getPDOGsb();
$resu = $cnx->MajCompteur($_REQUEST['mail']);


echo json_encode($resu);
?>
