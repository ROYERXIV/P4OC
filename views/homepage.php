<?php $title = 'Accueil';?>
<?php ob_start() ;?>
    <div id="welcome">
        <img src="public/img/home_alaska.jpg" id="welcome_img">
        <div id="welcome_text">
            <p> Billet Simple Pour L'Alaska</p>
            <p> Jean Forteroche</p>
        </div>
    </div>

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
                cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum equat. Duis aute irure dolor
                in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum equat. Duis aute irure dolor
                in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum equat. Duis aute irure dolor
                in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborumequat. Duis aute irure dolor
                in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            </p>
            <img src="public/img/man-2785071_1920.jpg" id="photo-forteroche">
        </div>
        <div id="last-posts">
            <h2> Les derniers billets:</h2>
            <div id="cards-container">
        <?php foreach ($data as $post)
            {
                $extrait = substr($post['billet'],0,250);
                ?>
                <div class="lastpost-card card">
                    <div class="card-body">
                        <h5 class="card-title"><a class="card-title" href="index.php?action=getPostWithComments&postID=<?= $post['postID'];?> "> <?= $post['titre'];?></a></h5>
                        <p><?= "$extrait...";?></p>
                    </div>
                </div>
        <?php
            }
            ?>
            </div>
        </div>
    </div>

<?php $content = ob_get_clean();?>
<?php require "views/template.php";?>
