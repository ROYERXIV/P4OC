<?php
require_once "models/DbModel.php";

class PostModel extends DbModel
{
    public function createPost($newPostTitle, $newPost)
    {
        $bdd = $this->dbConnect();
        $requete = $bdd->prepare("INSERT INTO billets (titre,billet) VALUE (?,?)");
        $requete->execute([$newPostTitle,$newPost]);
    }

    public function getPostList(){
        $bdd = $this->dbConnect();
        $requete = $bdd->query("SELECT * FROM billets ORDER BY postID DESC");
        return $requete;
    }

    public function getPost($postID){
        $bdd = $this->dbConnect();
        $requete = $bdd->prepare("SELECT * FROM billets WHERE postID = ?");
        $requete->execute([$postID]);
        return $requete;
    }

    public function getLastPosts(){
        $bdd = $this->dbConnect();
        $requete = $bdd->query("SELECT * FROM billets LIMIT 3");
        return $requete;
    }

    public function updatePost($updateTitle, $updatePost,$postID)
    {
        $bdd = $this->dbConnect();
        $requete = $bdd->prepare("UPDATE billets SET titre= ?, billet=? WHERE postID = ? ");
        $requete->execute([$updateTitle,$updatePost,$postID]);
    }

    public function deletePost($postID){

        $bdd = $this->dbConnect();
        $requete = $bdd->prepare("DELETE FROM billets WHERE postID = ? ");
        $requete->execute([$postID]);
    }

    public function sendComment($postID, $pseudo, $comment)
    {
        $bdd = $this->dbConnect();
        $requete = $bdd->prepare("INSERT INTO commentaires (postID,pseudo,comment) VALUE (?,?,?)");
        $requete->execute([$postID,$pseudo,$comment]);
    }

    public function getComments($postID)
    {
        $bdd = $this->dbConnect();
        $requete = $bdd->prepare("SELECT * FROM commentaires WHERE postID = ? ");
        $requete->execute([$postID]);
        return $requete;
    }


    public function reportComment($commentID)
    {
        $bdd = $this->dbConnect();
        $requete = $bdd->prepare("UPDATE commentaires SET isReported = 1 WHERE commentID = ?");
        $requete->execute([$commentID]);
    }

    public function getReportedComments()
    {
        $bdd = $this->dbConnect();
        $requete = $bdd->query("SELECT * FROM commentaires WHERE isReported = 1");
        return $requete;
    }

    public function approveComment($commentID)
    {
        $bdd = $this->dbConnect();
        $requete = $bdd->prepare("UPDATE commentaires SET isReported = 0 WHERE commentID = ?");
        $requete->execute([$commentID]);
    }

    public function deleteComment($commentID)
    {
        $bdd = $this->dbConnect();
        $requete = $bdd->prepare("DELETE FROM commentaires WHERE commentID = ?");
        $requete->execute([$commentID]);
    }

    public function deleteAllComments($postID)
    {
        $bdd = $this->dbConnect();
        $requete = $bdd->prepare("DELETE FROM commentaires WHERE postID = ?");
        $requete->execute([$postID]);
    }
}

?>