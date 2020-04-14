<?php $title = 'Accueil';?>
<?php ob_start() ;?>
<body>
<section id="header">
    <div id="welcome">
        <img src="public/img/home_alaska.jpg" id="welcome_img">
        <div id="welcome_text">
            <p> Billet Simple Pour L'Alaska</p>
            <p> Jean Forteroche</p>
        </div>
    </div>
</section>
<section id="home_content">
    <div id="presentation">
        <h1>
            Présentation
        </h1>
        <div id="presentation_content">
            <p>
                Jean Forteroche, écrivain de 68 ans. Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
            </p>
            <img src="public/img/man-2785071_1920.jpg">
        </div>
        <div id="last_post">
            <?php include('lastpost.php') ?>
        </div>
</section>
</body>
<?php $content = ob_get_clean();?>
<?php require "views/template.php";?>
