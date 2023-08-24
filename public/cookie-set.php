<?php

// définir une valeur dans les cookies
setcookie('foo', '123');


// supprimer une valeur dans les cookies
setcookie('bar', '', -1);
unset($_COOKIE['bar']);
