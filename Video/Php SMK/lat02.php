<?php 

    /* === Belajar Tipe Data Variabel dan Komentar === */


    $tulisan = 'Saya Belajar PHP';
    # $tulisan ialah variabel, sedangkan di bagian kanannya ialah isi berupa tipe data string

    echo $tulisan."<br>";
    # Menampilkan nilai variabel

    $angka = 25;
    # Membuat variabel bertipe data integer atau bilangan

    echo "Angka saya ialah: ".$angka."<br>";
    # Menampilkan isi dari variabel 'angka'

    $desimal = 3.14;
    # Membuat variabel bertipe data float atau desimal

    echo $desimal."<br>";

    # Mengetahui tipe data
    var_dump($tulisan);
    echo "<br>";
    var_dump($angka); 


    # - - - Konversi Tipe Data Menjadi Tipe Data Lain - - -

    echo "<br>";
    echo "<br>".$desimal." diubah menjadi integer : ".(int)$desimal."<br>";
    // (Int) diatas ialah syntax yang mengubah tipe data berikutnya menjadi tipe data Integer


    # - - - Komentar - - -

    # Ini adalah komentar single line, baris kode didalam ini akan diabaikan, tetapi baris kode di luarnya akan dijalankan

    // Ini juga komentar single line

    /*
      Ini adalah komentar multi-line, baris kode diantara dua simbol akan diabaikan, tetapi baris kode lainnya
      yang berada di luar komentar ini akan dijalankan
    */

    # echo "Halo";
    # echo diatas tidak akan menampilkan apa-apa

    /* 
    echo "Hai";
    */
    # Begitu juga dengan echo yang ini

?>