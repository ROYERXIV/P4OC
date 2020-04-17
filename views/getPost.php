<?php $post= $postData->fetch(); ?>
<?php $title= $post['titre'];?>
<?php ob_start();?>
<div id="full-post">
    <h1><?php echo $post['titre']; ?> </h1>
    <p><?php echo $post['billet'];?></p>
    <a class="nav-item" href="index.php?action=writeComment&ID=<?=$post['postID'];?>"> Ecrire un commentaire </a>
</div>
<div id="commentaires">
    <?php foreach($commentData as $commentaire)
        {
            ?>
    <p> <?= $commentaire['pseudo'];?></p>
    <p> <?= $commentaire['comment'];?></p>
    <?php
    }
    ?>
</div>
<?php $content = ob_get_clean(); ?>
<?php require("views/template.php");?>
