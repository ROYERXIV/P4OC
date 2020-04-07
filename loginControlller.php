<?php
require"loginModel.php";

function login(){
 include("login.php");
}

function loginTry(){
$model = new LoginModel();
$model->loginUser($_POST['pseudo'],$_POST['password']);
}
?>