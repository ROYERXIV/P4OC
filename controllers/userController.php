<?php
require "models/UserModel.php";

function inscription()
{
    include("views/inscription.php");
}

function saveInscription()
{
    $model = new UserModel();
// controller que pseudo et password existent
    $model->createUser($_POST['pseudo'], $_POST['password']);
    include("views/confirmInscription.php");
    echo "confirmationnnnn";
}

function login()
{
    include("views/login.php");
}

function loginTry()
{
    $model = new UserModel();
    $model->loginUser($_POST['pseudo'], $_POST['password']);
}

?>