<?php

require "inscriptionController.php";
$action = $_GET["action"];

if ($action=="inscription"){
    inscription();
}

if ($action=="saveInscription"){
    echo " routeur";
    saveInscription();
}
?>