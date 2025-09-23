<?php
    // === Belajar Fungsi Foreach di PHP ===

    // $namaSiswa = array("Agus", "Budi", "Eko", "Ahmad", "Abdul", 150, 200);
    // var_dump($namaSiswa);

    // echo "<br> <br>";

    // foreach ($namaSiswa as $key) {
    //     echo "Key: $key <br>";
    // }


    $namaSiswa = array(
        "Agus" => "London",
        "Budi" => "Jakarta",
        "Eko" => "New York",
        "Ahmad" => "Roma",
        "Abdul" => "Tokyo"
    );
    var_dump($namaSiswa);
    echo "<br>";

    foreach ($namaSiswa as $x => $y) {
        echo "<br> $x : $y <br>";
    }
?>