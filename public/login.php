<?php

session_start();

if (($_POST['password'] ?? '') === '123') {
    $_SESSION['auth'] = true;
    header('LOCATION: private-page.php', true, 302);
    exit();
} else {
    $_SESSION['auth'] = false;
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