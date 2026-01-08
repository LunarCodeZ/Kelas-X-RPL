<?php 

    class kalkulator
    {
        function penjumlahan($a, $b) {
            echo 'Penjumlahan: <br>';
            echo $a + $b;
            echo '<br>';
        }

        function pengurangan($a, $b) {
            echo 'Pengurangan: <br>';
            echo $a - $b;
            echo '<br>';
        }

        function perkalian($a, $b) {
            echo 'Perkalian: <br>';
            echo $a * $b;
            echo '<br>';
        }

        function pembagian($a, $b) {
            echo 'Pembagian: <br>';
            echo $a / $b;
            echo '<br>';
        }
    }

    $kalkulator = new kalkulator();
    $kalkulator->penjumlahan(1,2);
    $kalkulator->perkalian(1,2);
    

?>