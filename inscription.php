<?php session_start() ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"/>
    <title> inscription </title>
    <link href="stylesheet.css" rel="stylesheet">
</head>
<body>
<div id="inscription">
    <h1> Inscription </h1>
    <form method="post" action="index.php?action=saveInscription">
        <p> Pseudo </p>
        <input type="text" name="pseudo"/>
        <p> Mot de passe</p>
        <input type="text" name="password"/>
        <input type="submit" value="Je m'inscris "/>
    </form>
</div>
</body>
</html>