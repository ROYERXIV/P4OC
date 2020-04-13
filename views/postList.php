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
        <h2 class="cardTitle"><?=$row['titre'];?></h2>
        <p class="cardText"><?=$row['billet'];?></p>
        <a href="#" class="card-link"> Modifier </a>
        <a href="#" class="card-link"> Supprimer </a>
    </div>
    </div>
<?php
}
?>
</div>
<?php $content = ob_get_clean(); ?>
<?php require("views/template.php");?>
