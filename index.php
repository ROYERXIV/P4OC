<?php session_start();

require "controllers/inscriptionController.php";
$action = $_GET["action"];

if ($action=="inscription"){
    inscription();
}

if ($action=="saveInscription"){
    saveInscription();
}

require "controllers/loginController.php";
if ($action=="login"){
    login();
}
if ($action=="loginCheck"){
    loginTry();
}

?>