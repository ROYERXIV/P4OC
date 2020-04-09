<?php
require "models/loginModel.php";

function login(){
 include("views/login.php");
}

function loginTry(){
$model = new LoginModel();
$model->loginUser($_POST['pseudo'],$_POST['password']);
}
?>