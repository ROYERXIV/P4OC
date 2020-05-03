<?php $post= $postData->fetch(); ?>
<?php $title= $post['titre'];?>
<?php ob_start();?>
<div class="container">
<div id="full-post">
    <h1><?php echo $post['titre']; ?> </h1>
    <p><?php echo $post['billet'];?></p>
    <a class="nav-item" href="index.php?action=writeComment&postID=<?=$post['postID'];?>"> Ecrire un commentaire </a>
</div>
<div class="commentaires">
    <?php foreach($commentData as $commentaire)
        {
            ?>
    <div class="card">
    <p> <?= $commentaire['pseudo'];?> a écrit:</p>
    <p> <?= $commentaire['comment'];?></p>
    <?php if($commentaire['isReported'] == 0){
        echo "<a href=\"index.php?action=reportComment&commentID=".$commentaire['commentID']."&postID=".$post['postID']."\"> Signaler...</a>";
    } else {
            echo "<p> Ce commentaire a déja été signalé </p>";
        } ?>
    </div>
    <?php
    }
    ?>
</div>
</div>
<?php $content = ob_get_clean(); ?>
<?php require("views/template.php");?>
