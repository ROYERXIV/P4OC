<?php
class UserModel
{
   public function createUser($pseudo,$password)
    {
        echo " userModel";
        try {
            $bdd = new PDO('mysql:host=localhost;port=3308;dbname=p4oc;charset=utf8', 'root', '');
            $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
        if (isset($pseudo) && strlen($pseudo) > 5 && strlen($pseudo) < 20 && isset($password) && strlen($password) > 5 && strlen($password) < 20) {
            $requete = $bdd->prepare("INSERT INTO users (pseudo,password) VALUES (?,?)");
            $requete->execute([htmlspecialchars($pseudo), password_hash($password, PASSWORD_DEFAULT)]);
            var_dump($password);
            die();

        } else {
            echo "<script>alert(\"Vous avez mal rentré vos identifiants\")</script>";
        }
    }
}
?>