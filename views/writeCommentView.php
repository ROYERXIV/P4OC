<?php $title="Ecrire un commentaire";?>
<?php ob_start();?>

<div class="container">
    <h2>Ecrire un commentaire : </h2>
<form method="post" action="index.php?action=sendComment">
    <div class="form-group">
        <label for="pseudo"> Votre Pseudo:</label>
        <input type="text" name="pseudo" class="form-control"/>
    </div>
    <div class="form-group">
        <label for="commentaire"> Commentaire:</label>
        <input type="text" name="commentaire" class="form-control"/>
    </div>
    <input type="hidden" name="postID" value="<?=$postID;?>">
    <input type="submit" value="Envoyer mon commentaire" class="btn btn-primary">
</form>
</div>
<?php $content = ob_get_clean();?>
<?php require("views/template.php");?>
