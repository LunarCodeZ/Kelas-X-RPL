<?php 
    // === Cookie PHP ===

    $cookie_name = 'user';
    $cookie_value = 'Budi';
    setcookie($cookie_name, $cookie_value);

    $cookie_value = 'Bagas';
    setcookie($cookie_name, $cookie_value);
    echo $_COOKIE[$cookie_name];

    setcookie('user', "", time() - 3600);
    echo "<br>";
    var_dump($_COOKIE);
?>