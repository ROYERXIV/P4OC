<?php
require_once "models/DbModel.php";

class PostModel extends DbModel
{
    public function createPost($newPostTitle, $newPost)
    {
        $bdd = $this->dbConnect();
        $requete = $bdd->prepare("INSERT INTO billets (titre,billet) VALUE (?,?)");
        $requete->execute([htmlspecialchars($newPostTitle), htmlspecialchars($newPost)]);
    }

    public function getPostList(){
        $bdd = $this->dbConnect();
        $requete = $bdd->query("SELECT * FROM billets");
        return $requete;
    }

    public function getPost($postID){
        $bdd = $this->dbConnect();
        $requete = $bdd->prepare("SELECT * FROM billets WHERE ID = ?");
        $requete->execute([$postID]);
        return $requete;
    }

    public function updatePost($updateTitle, $updatePost,$ID)
    {
        $bdd = $this->dbConnect();
        $requete = $bdd->prepare("UPDATE billets SET titre= ?, billet=? WHERE ID = ? ");
        $requete->execute([htmlspecialchars($updateTitle), htmlspecialchars($updatePost),htmlspecialchars($ID)]);
    }

    public function deletePost($postID){

        $bdd = $this->dbConnect();
        $requete = $bdd->prepare("DELETE FROM billets WHERE ID = ? ");
        $requete->execute([$postID]);
    }
}

?>