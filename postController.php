<?php
require "postModel.php";

function newPost()
{
    include("views/createPost.php");
}

function sendNewPost()
{
    $model = new PostModel();
    $model->createPost($_POST['titlePostArea'], $_POST['createPostArea']);
}

function postList(){
    $model = new postModel();
    $data = $model->getPostList();
    include ("views/postList.php");
}

?>