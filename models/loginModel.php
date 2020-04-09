<?php
class LoginModel
{
    public function loginUser($pseudo,$password)
    {
        try {
            $bdd = new PDO('mysql:host=localhost;port=3308;dbname=p4oc;charset=utf8', 'root', '');
            $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
        if (strlen($pseudo) > 5 && strlen($pseudo) < 20 && strlen($password) > 5 && strlen($password) < 20) {
           $requete = $bdd->prepare( " SELECT pseudo, password as hash FROM users where pseudo = ? ");
           $requete-> execute([$pseudo]);
           $results = $requete->fetch();
           $hash = $results['hash'];
           var_dump($hash);
           var_dump($password);
           if (password_verify ( $password , $hash )){
                echo "Bonjour $pseudo";
                $_SESSION['pseudo'] = $pseudo;
           }
           else {
               echo " c pas bon";
           }


        } else if (strlen($pseudo) < 5 || strlen($password) < 5) {
            echo "<script>alert(\"Vous avez mal rentré vos identifiants\")</script>";
        }
    }
}
?>