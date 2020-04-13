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
}

?>