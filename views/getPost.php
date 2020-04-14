<?php $data= $postData->fetch(); ?>
<?php $title= $data['titre'];?>
<?php ob_start();?>
<div id="full-post">
    <h1><?php echo $data['titre']; ?> </h1>
    <p><?php echo $data['billet'];?></p>

</div>
<?php $content = ob_get_clean(); ?>
<?php require("views/template.php");?>
