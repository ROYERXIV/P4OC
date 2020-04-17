<?php $title = 'Erreur'; ?>
<?php ob_start(); ?>
<div id="error">
    <h1> Erreur <?= $errorCode ;?> </h1>
    <p> <?= $errorMessage ;?> </p>
</div>
<?php $content=ob_get_clean();?>
<?php include ("views/template.php");?>
