<?php

require('classes/PDOGsb.php');

$cnx = PDOGsb::getPDOGsb();
$resu = $cnx->CompterEvent($_REQUEST['mail']);


echo json_encode(array("resu"=>$resu));
?>