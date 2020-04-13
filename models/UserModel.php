<?php
require_once "models/DbModel.php";

class UserModel extends DbModel
{
    public function createUser($pseudo, $password)
    {
        try {
            $bdd = new PDO('mysql:host=localhost;port=3308;dbname=p4oc;charset=utf8', 'root', '');
            $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
        if (isset($pseudo) && strlen($pseudo) > 5 && strlen($pseudo) < 20 && isset($password) && strlen($password) > 5 && strlen($password) < 20) {
            $requete = $bdd->prepare("INSERT INTO users (pseudo,password) VALUES (?,?)");
            $requete->execute([htmlspecialchars($pseudo), password_hash($password, PASSWORD_DEFAULT)]);
        } else {
            echo "<script>alert(\"Vous avez mal rentré vos identifiants\")</script>";
        }
    }
    public function loginUser($pseudo, $password)
    {
        $bdd = $this->dbConnect();
        if (strlen($pseudo) > 5 && strlen($pseudo) < 20 && strlen($password) > 5 && strlen($password) < 20) {
            $requete = $bdd->prepare(" SELECT pseudo, password as hash FROM users where pseudo = ? ");
            $requete->execute([$pseudo]);
            $results = $requete->fetch();
            $hash = $results['hash'];
            if (password_verify($password, $hash)) {
                $_SESSION['pseudo'] = $pseudo;
                echo $_SESSION['pseudo'];
            } else {
                echo " c pas bon";
            }


        } else if (strlen($pseudo) < 5 || strlen($password) < 5) {
            echo "<script>alert(\"Vous avez mal rentré vos identifiants\")</script>";
        }
    }

}

?>