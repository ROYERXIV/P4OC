<?php $title = 'Liste des billets'; ?>
<body>
<?php ob_start(); ?>
<div id="postList">
<?php
foreach($data as $row)
{
?>
    <div class="card">
    <div class="card-body">
        <h2 class="cardTitle"> <a href="index.php?action=getPost&ID=<?= $row['ID'];?> "><?=$row['titre'];?> </a></h2>
        <p class="cardText"><?=$row['billet'];?></p>
        <a href="index.php?action=editPost&ID=<?= $row['ID'];?>" class="card-link"> Modifier </a>
        <a href="index.php?action=deletePost&ID=<?= $row['ID'];?>" class="card-link"> Supprimer </a>
    </div>
    </div>
<?php
}
?>
</div>
<?php $content = ob_get_clean(); ?>
<?php require("views/template.php");?>
