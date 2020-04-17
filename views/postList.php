<?php $title = 'Liste des billets'; ?>
<body>
<?php ob_start(); ?>
<div id="postList">
<?php
foreach($data as $post)
{
?>
    <div class="card">
    <div class="card-body">
        <h2 class="cardTitle"> <a href="index.php?action=getPost&postID=<?= $post['postID'];?> "><?=$post['titre'];?> </a></h2>
        <p class="cardText"><?=$post['billet'];?></p>
        <a href="index.php?action=editPost&postID=<?= $post['postID'];?>" class="card-link"> Modifier </a>
        <a href="index.php?action=deletePost&postID=<?= $post['postID'];?>" class="card-link"> Supprimer </a>
    </div>
    </div>
<?php
}
?>
</div>
<?php $content = ob_get_clean(); ?>
<?php require("views/template.php");?>
