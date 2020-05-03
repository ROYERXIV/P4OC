<?php $data= $postData->fetch(); ?>
<?php $title= $data['titre'];?>
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
<h1> Modifier : <?= $title;?> </h1>
<form method="post" action="index.php?action=updatePost">
            <p> Titre du billet :</p>
            <textarea id="titlePostArea" name="titlePostArea">
                <?= $title;?>
            </textarea>
            <p> Contenu du billet :</p>
            <textarea id="createPostArea" name="createPostArea">
                <?= $data['billet'];?>
            </textarea>
    <input type="hidden" id="postID" name="postID" value="<?= $data['postID'];?>">
    <input type="submit" value="Modifier le billet"/>
</form>
</div>

<?php $content = ob_get_clean();?>
<?php require("views/template.php");?>
