<?php $title = " Commentaires signalés "; ?>
<?php ob_start();?>
<div class="container">
<?php foreach ($reportedComments as $commentaire)
{?>
    <div class="text-center">
    <p><?= $commentaire['pseudo'];?> a écrit:</p>
    <p> <?= $commentaire['comment'];?> </p>
    <a role="button" class="btn btn-success" href="index.php?action=approveComment&commentID=<?= $commentaire['commentID'];?>">Autoriser</a>
    <a role="button" class="btn btn-danger" href="index.php?action=deleteComment&commentID=<?= $commentaire['commentID'];?>">Supprimer</a>
    </div>
<?php
}
?>
</div>
<?php $content = ob_get_clean();?>
<?php require("views/template.php");?>
