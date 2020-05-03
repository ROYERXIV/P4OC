<?php $title = "inscription";?>
<?php ob_start();?>
<div class="container">
    <h1> Inscription </h1>
    <form method="post" action="index.php?action=saveInscription">
        <div class="form-group">
            <label for="pseudo"> Votre Pseudo:</label>
            <input type="text" name="pseudo" class="form-control"/>
        </div>
        <div class="form-group">
            <label for="password"> Votre mot de passe:</label>
            <input type="text" name="password" class="form-control"/>
        </div>


        <input type="submit" value="Je m'inscris " class="btn btn-primary"/>
    </form>
</div>
<?php $content = ob_get_clean();?>
<?php include("views/template.php");?>
