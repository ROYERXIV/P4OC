<?php
require "postModel.php";

function newPost()
{
    include("views/createPost.php");
}

function sendPost()
{
    $model = new PostModel();
    $model->createPost($_POST['titlePostArea'], $_POST['createPostArea']);
    postList();
}

function postList(){
    $model = new postModel();
    $data = $model->getPostList();
    include ("views/postList.php");
}

function getPostController(){
    if(isset($_GET['ID'])){
        $postID = $_GET['ID'];
        echo " ID OK";
    } else {
        echo " PAS D'ID";
    };
    $model = new postModel();
    $postData = $model->getPost($postID);
    include ("views/getPost.php");
}

function getPostUpdate(){
    if(isset($_GET['ID'])){
        $postID = $_GET['ID'];
        echo " ID OK";
    } else {
        echo " PAS D'ID";
    };
    $model = new postModel();
    $postData = $model->getPost($postID);
    include ("views/updatePost.php");
}

function updatePost(){
    $model = new PostModel();
    $model->updatePost($_POST['titlePostArea'], $_POST['createPostArea'],$_POST['postID']);
    postList();
}

function deletePost(){
    if(isset($_GET['ID'])){
        $postID = $_GET['ID'];
        echo " ID OK";
    } else {
        echo " PAS D'ID";
    };
    $model = new postModel();
    $model->deletePost($postID);
    postList();
}




?>