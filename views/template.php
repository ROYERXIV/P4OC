<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"/>
    <title> <?php echo $title; ?> </title>
    <link href="public/stylesheet.css" rel="stylesheet">
</head>

<body>
    <header>
        <div id="navbar">
          <div id="logo">
            <p> LOGO ICI</p>
          </div>
          <nav id="main_nav">
            <ul>
                <li> Accueil</li>
                <li> Nimp</li>
                <li> Nimp</li>
            </ul>
          </nav>
       </div>
    <header>
       <?= $content ?>

        <footer>
    <a href="views/inscription.php"> Inscription </a>
    <a href="connexion.php"> Connexion </a>
        </footer>
</body>
</html>