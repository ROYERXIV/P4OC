<?php $title="Ecrire un commentaire";?>
<?php ob_start();?>
<h2>Ecrire un commentaire : </h2>
<form method="post" action="index.php?action=sendComment">
    <p> Veuillez indiquer votre pseudo :</p>
    <input type="text" name="pseudo">
    <p> Commentaire :</p>
    <input type="text"  name="commentaire">
    <input type="hidden" name="postID" value="<?=$postID;?>">
    <input type="submit" value="Envoyer mon commentaire">
</form>
<?php $content = ob_get_clean();?>
<?php require("views/template.php");?>
