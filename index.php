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

require "loginControlller.php";
if ($action=="login"){
    login();
}
if ($action=="loginCheck"){
    loginTry();
}

?>