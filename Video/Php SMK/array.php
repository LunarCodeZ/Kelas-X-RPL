<?php 
    // === Belajar Array di PHP ===

    // >> Array Dimensi :

    // $daftarNama = array("Alice", "Alex", "Bob", "Daniel", "Joseph", 40, 35, true, 3.14);
    // var_dump($daftarNama);
    // // echo "<br>Data index ke-2: $daftarNama[2] <br> <br>";
    // echo "<br>";

    // // for ($x=0; $x < 9; $x++) { 
    // //     // echo $x;
    // //     echo "<br>Data index ke-$x: $daftarNama[$x]";
    // // }

    // foreach ($daftarNama as $nama) {
    //     echo "<br> $nama";
    // }



    // >> Array Asosiasi : Array Berpasangan
    // $daftarNama = array(
    //     "Alice" => "London",
    //     "Alex" => "Jakarta",
    //     "Bob" => "New York",
    //     "Daniel" => "Roma",
    //     "Joseph" => "Tokyo"
    // );
    # Mengubah Nilai
    $daftarNama["Alice"] = "Jakarta";
    $daftarNama["Alex"] = "Kuala Lumpur";
    $daftarNama["Bob"] = "Brazilia";
    $daftarNama["Daniel"] = "Tokyo";
    $daftarNama["Joseph"] = "New Delhi";

    var_dump($daftarNama);
    echo "<br> <br>";

    // echo '<br> <br> '. $daftarNama["Bob"];
    foreach ($daftarNama as $nama => $lokasi) {
        echo "$nama ==> $lokasi <br>";
    }

?>