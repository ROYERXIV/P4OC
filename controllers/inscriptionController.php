<?php
require "userModel.php";

function inscription(){
include("inscription.php");
}

function saveInscription(){
echo "controlleur";
$model = new UserModel();
// controller que pseudo et password existent
$model->createUser($_POST['pseudo'],$_POST['password']);
include("confirmInscription.php");
}