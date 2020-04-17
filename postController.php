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
    if(isset($_GET['postID'])){
        $postID = $_GET['postID'];
        $model = new postModel();
        $postData = $model->getPost($postID);
        include ("views/getPost.php");
    } else {
        $errorCode="404";
        $errorMessage="Cette page n'existe pas";
        include ("views/error.php");
    };

}

function getPostUpdate(){
    if(isset($_GET['postID']) && is_numeric($_GET['postID'])){
        $postID = $_GET['postID'];
        $model = new postModel();
        $postData = $model->getPost($postID);
        include ("views/updatePost.php");
    } else {
        $errorCode = "404 ";
        $errorMessage = " Cette page n'existe pas";
        include ("views/error.php");
    };
}

function updatePost(){
    $model = new PostModel();
    $model->updatePost($_POST['titlePostArea'], $_POST['createPostArea'],$_POST['postID']);
    postList();
}

function deletePost(){
    if(isset($_GET['postID'])){
        $postID = $_GET['postID'];
        echo " ID OK";
    } else {
        $errorCode = "404 ";
        $errorMessage = " Cette page n'existe pas";
        include ("views/error.php");
    };
    $model = new postModel();
    $model->deletePost($postID);
    postList();
}

function writeCommentController(){
    if(isset($_GET['postID'])){
        $postID = $_GET['postID'];
        include("views/writeCommentView.php");
    } else {
        $errorCode = "404";
        $errorMessage = " Cette page n'existe pas";
        include ("views/error.php");
    }

}

function sendCommentController(){
        $model = new PostModel();
        $model->sendComment($_POST['postID'],$_POST['pseudo'],$_POST['commentaire']);
        postList();
}

function getPostWithComments(){
    if(isset($_GET['postID'])){
        $postID = $_GET['postID'];
        $model = new postModel();
        $postData = $model->getPost($postID);
        $commentData = $model->getComments($postID);
        include("views/getPost.php");
    } else {
        $errorCode = "404";
        $errorMessage = " Cette page n'existe pas";
        include ("views/error.php");
    }
}
?>