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
        <h2 class="cardTitle"> <a href="index.php?action=getPostWithComments&postID=<?= $post['postID'];?> "><?=$post['titre'];?> </a></h2>
        <p class="cardText"><?=$post['billet'];?></p>
        <?php
        if(isset($_SESSION['pseudo'])){
            echo "<a href=\"index.php?action=editPost&postID=".$post['postID']."\" class=\"card-link\"> Modifier </a>";
            echo "<a href=\"index.php?action=deletePost&postID=". $post['postID']."\" class=\"card-link\"> Supprimer </a>";
        } else {
            echo "<a href=\"index.php?action=getPostWithComments&postID=". $post['postID']."\" > Lire la suite </a>";
        }
        ?>
    </div>
    </div>
<?php
}
?>
</div>
<?php $content = ob_get_clean(); ?>
<?php require("views/template.php");?>
