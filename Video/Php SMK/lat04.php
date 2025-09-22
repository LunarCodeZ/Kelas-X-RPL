<?php 
    // === Belajar Operator PHP ===

    
    // Operator Matematika
    $x = 12;
    $y = 5;

    echo 'x: ' . $x . '<br>';
    echo 'y: ' . $y . '<br> <br>';

    $z = $x + $y;
    echo 'x + y = ' . $z . '  --> Ini adalah penjumlahan' . '<br>';

    $z = $x - $y;
    echo 'x - y = ' . $z . '  --> Ini adalah pengurangan' . '<br>';

    $z = $x * $y;
    echo 'x * y = ' . $z . '  --> Ini adalah perkalian' . '<br>';

    $z = $x / $y;
    echo 'x / y = ' . $z . '  --> Ini adalah pembagian' . '<br>';

    $z = $x / $y;
    echo 'x / y = ' . floor($z) . '  --> Ini adalah pembagian dengan floor()' . '<br>';

    $z = $x % $y;
    echo 'x / y = ' . $z . '  --> Ini adalah sisa bagi atau modulus' . '<br> <br>';


    // Operator Logika
    $z = $x < $y;
    echo 'x < y: ' . $z . ' --> Bernilai 0 karena pernyataan salah' . '<br>';
    
    $z = $x > $y;
    echo 'x > y: ' . $z . ' --> Bernilai 1 karena pernyataan benar' . '<br>';

    $z = $x == $y;
    echo 'x == y: ' . $z . ' --> Bernilai 0 karena pernyataan salah' . '<br>';

    $z = $x != $y;
    echo 'x != y: ' . $z . ' --> Bernilai 1 karena pernyataan benar' . '<br> <br>';


    // Increment: Pertambahan Nilai
    $x++;
    echo 'Increment x: ' . $x . '<br>';


    // Increment: Pertambahan Nilai
    $y--;
    echo 'Decrement y: ' . $y . '<br>';


    // Operator String
    $kata = 'Sura';
    $kota = 'Baya';

    $hasil = $kata.$kota;
    $hasil .= ' KOTA PAHLAWAN';
    echo $hasil;
?>