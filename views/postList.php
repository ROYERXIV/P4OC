<?php $title = 'Liste des billets'; ?>
<body>
<?php ob_start(); ?>
<div class="container">
<?php
foreach($data as $post)
{
    $substr = substr($post['billet'], 0, 1000);
    $extrait = substr($substr, 0, strrpos($substr, ' '));
?>
    <div class="card">
    <div class="card-body">
        <h2 class="cardTitle"> <a href="index.php?action=getPostWithComments&postID=<?= $post['postID'];?> "><?=$post['titre'];?> </a></h2>
        <p class="cardText"><?php echo "$extrait...";?></p>
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
