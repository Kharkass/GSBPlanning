<?php

require('classes/PDOGsb.php');

$cnx = PDOGsb::getPDOGsb();
$resu = $cnx->RecupEvent($_REQUEST['mail']);

echo json_encode($resu);
?>