<?php $data= $postData->fetch(); ?>
<?php $title= $data['titre'];?>
<?php var_dump($commentData->fetch());
<?php ob_start();?>
<div id="full-post">
    <h1><?php echo $data['titre']; ?> </h1>
    <p><?php echo $data['billet'];?></p>
    <a class="nav-item" href="index.php?action=writeComment&ID=<?=$data['postID'];?>"> Ecrire un commentaire </a>
</div>
<div id="commentaires">
</div>
<?php $content = ob_get_clean(); ?>
<?php require("views/template.php");?>
