<?php 

    // === Membuat function ===

    function katakanHai() {
        echo "Halo semua, saya belajar bahasa PHP <br><br>";
    }

    function hitungLuasPersegi($s = 10) {
        $luas = $s * $s;
        echo "<br>Diketahui, sisi persegi ialah: $s <br>";
        echo "Maka, luasnya ialah: $luas <br>";
    }

    // variabel didalam kurung function dinamakan parameter,
    // Fungsinya ialah untuk menyimpan nilai agar bisa digunakan
    // didalam function tersebut.

    function output() {
        return "belajar function di PHP";
    }

    function luasPersegi($s = 5) {
        $luas = $s * $s;
        return $luas;
    }



    // Menjalankan function
    katakanHai();
    hitungLuasPersegi();

    // Memanggil function dan mengatur nilai variabel
    hitungLuasPersegi(12);
    echo '<h1>' . output() . '</h1>';

    echo 'Luas persegi: ' . luasPersegi(15) * 4 . 'cm';

?>