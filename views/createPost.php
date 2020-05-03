<?php $title = "Ecrire un nouveau billet";?>
<?php ob_start();?>
<head>
    <script src="https://cdn.tiny.cloud/1/accvbusmvooc45yzjm0lidfq3n1low6sabhigj7i9qj2aik5/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
    tinymce.init({
    selector: '#createPostArea'
    });
    </script>

</head>
<div class="container">
    <h1> Créer un nouveau billet</h1>
        <form method="post" action="index.php?action=sendNewPost">
            <p> Titre du billet :</p>
            <textarea id="titlePostArea" name="titlePostArea">
                Titre
            </textarea>
            <p>Contenu du billet :</p>
            <textarea id="createPostArea" name="createPostArea">

            </textarea>
            <input type="submit" value="Envoyer le billet"/>
        </form>
</div>
<?php $content=ob_get_clean();?>
<?php include("views/template.php");?>
