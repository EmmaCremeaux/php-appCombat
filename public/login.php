<?php

session_start();

if (($_POST['password'] ?? '') === '123') {
    // l'utilisateur a renseigné le bon mot de passe
    // il est authentifié
    $_SESSION['auth'] = true;

    // on redirige l'utilisateur vers la page privé
    header('LOCATION: private-page.php', true, 302);
    exit();
}

?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="password" id="" >
    </form>
</body>
</html>