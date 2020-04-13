<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"/>
    <title> Nouveau Billet </title>
</head>
<body>
    <h1> Créer un nouveau billet</h1>
        <form method="post" action="index.php?action=sendNewPost">
            <textarea id="titlePostArea" name="titlePostArea">
                Titre
            </textarea>
            <textarea id="createPostArea" name="createPostArea">

            </textarea>
            <input type="submit" value="Envoyer le billet"/>
        </form>
</body>
</html>
