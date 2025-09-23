<?php 

    session_start();

    echo 'User: ' . $_SESSION['user'];
    echo '<br>';
    echo 'Nama: ' . $_SESSION['nama'];
    echo '<br>';
    echo 'Asal Negara: ' . $_SESSION['asalNegara'];
    echo '<br> <br>';

    foreach ($_SESSION as $key => $value) {
        echo "$key ==> $value <br>";
    }

?>