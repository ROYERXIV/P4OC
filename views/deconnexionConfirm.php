<?php $title = " Vous êtes déconnecté ";?>
<?php ob_start();?>
<div class="container">
    <h2 class="text-center"> Vous êtes déconnecté.</h2>
</div>
<?php $content = ob_get_clean();?>
<?php include("views/template.php");?>
