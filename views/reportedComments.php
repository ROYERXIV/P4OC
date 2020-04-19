<?php $title = " Commentaires signalés "; ?>
<?php ob_start();?>
<div id="reported-comments">
<?php foreach ($reportedComments as $commentaire)
{?>
    <p><?= $commentaire['pseudo'];?></p>
    <p> <?= $commentaire['comment'];?> </p>
    <a href="index.php?action=approveComment&commentID=<?= $commentaire['commentID'];?>">Autoriser</a>
    <a href="index.php?action=deleteComment&commentID=<?= $commentaire['commentID'];?>">Supprimer</a>
<?php
}
?>
</div>
<?php $content = ob_get_clean();?>
<?php require("views/template.php");?>
