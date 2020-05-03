<?php $title = "Se connecter";?>
<?php ob_start();?>

    <div class="container">
    <h1>Se connecter</h1>
    <form method="post" action="index.php?action=loginCheck">
        <div class="form-group">
            <label for="pseudo"> Votre Pseudo:</label>
            <input type="text" name="pseudo" class="form-control"/>
        </div>
        <div class="form-group">
            <label for="password"> Votre mot de passe:</label>
            <input type="text" name="password" class="form-control"/>
        </div>
        <button type="submit" class="btn btn-primary"> Se connecter </button>
    </form>
    </div>
<?php $content = ob_get_clean();?>
<?php include("views/template.php");?>
