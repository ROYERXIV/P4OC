<?php $data= $postData->fetch(); ?>
<?php $title= $data['titre'];?>
<?php ob_start();?>

<body>
<h1> Modifier : <?= $title;?> </h1>
<form method="post" action="index.php?action=updatePost">
            <textarea id="titlePostArea" name="titlePostArea">
                <?= $title;?>
            </textarea>
            <textarea id="createPostArea" name="createPostArea">
                <?= $data['billet'];?>
            </textarea>
    <input type="hidden" id="postID" name="postID" value="<?= $data['ID'];?>">
    <input type="submit" value="Modifier le billet"/>
</form>
</body>
<?php $content = ob_get_clean();?>
<?php require("views/template.php");?>
