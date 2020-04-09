<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"/>
    <title> Login </title>
    <link href="../public/stylesheet.css" rel="stylesheet">
</head>
<body>
<div id="inscription">
    <h1> Connexion </h1>
    <form method="post" action="index.php?action=loginCheck">
        <p> Pseudo </p>
        <input type="text" name="pseudo"/>
        <p> Mot de passe</p>
        <input type="text" name="password"/>
        <input type="submit" value="Se connecter "/>
    </form>
</div>
</body>
</html>