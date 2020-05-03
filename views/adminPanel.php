<?php $title = "Panneau d'administation";?>
<?php ob_start();?>
    <div class="container">
        <h2 class="text-center"> Bonjour <?= $_SESSION['pseudo'];?></h2>
        <div id="admin-panel-container">
            <a role="button" class="btn btn-secondary" href="index.php?action=newPost">Ecrire un nouveau billet</a>
            <a role="button" class="btn btn-secondary" href="index.php?action=getReportedComments">Gerer les commentaires</a>
            <a role="button" class="btn btn-secondary" href="index.php?action=inscription">Creer un compte administrateur</a>
        </div>
    </div>
<?php $content = ob_get_clean();?>
<?php require("views/template.php");?>
