<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"/>
    <title> <?php echo $title; ?> </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="public/stylesheet.css" rel="stylesheet">
</head>

<body>
<header id="header">
    <nav class="navbar navbar-dark bg-dark">
       <a class="navbar-brand" href="index.php?action=accueil"> Billet Simple Pour L'Alaska</a>
        <ul class="navbar-nav navbar-expand-sm">
            <li class="nav-item"><a class="nav-link" href="index.php?action=accueil"> Accueil</a></li>
            <li class="nav-item"><a class="nav-link" href="index.php?action=getPostList"> Les billets</a></li>
            <li class="nav-item"><a class="nav-link" href="index.php?action=biographie"> Jean Forteroche</a></li>
        </ul>
    </nav>
</header>

<section id="main">
    <?= $content ?>
</section>
<footer id="page-footer">
    <p> Ceci est un site fictif dédié a un projet Openclassrooms</p>
    <div id="button-container">
        <?php if(isset($_SESSION['pseudo'])){
            echo "<a role=\"button\" class=\"btn btn-secondary\" href=\"index.php?action=deconnexion\">Deconnexion</a>";
            echo "<a role=\"button\" class=\"btn btn-secondary\" href=\"index.php?action=adminPanel\">Gestion du site</a>";
        } else {
            echo "<a role=\"button\" class=\"btn btn-success\" href=\"index.php?action=login\">Connexion</a>";
    }
    ?>
    </div>
</footer>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</html>