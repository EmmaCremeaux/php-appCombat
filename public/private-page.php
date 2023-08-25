<?php

session_start();

if (($_SESSION['auth'] ?? null) != true) {
    // l'utilisateur n'est pas authentifié
    // on le renvoie a la page de login
    header('LOCATION: login.php', true, 302);
    exit();
}

?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page privée</title>
</head>
<body>
    <h1>page privée</h1>
</body>
</html>
