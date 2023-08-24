<?php

require __DIR__.'/../vendor/autoload.php';

?><!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
<body>
    <div>
        <?php
        dump($_COOKIE);
        ?>
    </div>
    <ul id="cookie"></ul>
    <script>
        let cookies = document.getElementById('cookies');
        cookies.innerHTML = document.cookie;
        </script>
    
</body>
</html>