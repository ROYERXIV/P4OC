<?php session_start();

require "controllers/userController.php";
$action = $_GET["action"];

if ($action=="inscription"){
    inscription();
}

if ($action=="saveInscription"){
    saveInscription();
}

if ($action=="login"){
    login();
}
if ($action=="loginCheck"){
    loginTry();
}

require "postController.php";

if ($action=="newPost"){
    newPost();
}

if ($action=="sendNewPost"){
    sendNewPost();
}

if($action=="getPostList"){
    postList();
}
?>