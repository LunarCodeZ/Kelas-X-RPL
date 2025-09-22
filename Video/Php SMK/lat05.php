<?php 
    // === Belajar If dan Else di PHP===
    $tanggal = 31;

    $hasil = $tanggal < 32;

    echo "Tanggal: $tanggal <br>";
    echo "Hasil: $hasil <br><br>";


    if ($tanggal < 32) {
        if ($tanggal > 0) {
            echo "Benar <br>";
        } else {
            echo "Salah <br>";
        }
    } else {
        echo "Salah <br>";
    }


    $nilaiUjian = 50;

    // if ($nilaiUjian <= 100) {
    //     if ($nilaiUjian >= 80) {
    //         echo "Selamat, kamu lulus ! <br>";
    //     }
    //     else {
    //         echo "Nilai kamu cukup bagus <br>";
    //     }
    // } else {
    //     echo "Belajar lebih rajin... <br>";
    // }


    // --- Kondisi AND (&&) ---
    // if ($nilaiUjian >= 0 && $nilaiUjian <= 100) {
    //     echo "Nilai lebih dari 0 dan kurang dari atau sama dengan 100";
    // } else {
    //     echo "Nilai lebih kecil dari 0 atau lebih besar dari 100";
    // }
    /* >> Pengertian: 
    Menjalankan kode jika seluruh pertanyaan diatas bernilai
    benar atau true
    */

    // --- Kondisi OR (||) ---
    if ($nilaiUjian >= 0 || $nilaiUjian <= 100) {
        echo "Nilai lebih dari 0 atau kurang dari / sama dengan 100";
    } else {
        echo "Nilai lebih kecil dari 0 atau lebih besar dari 100";
    }
    /* >> Pengertian: 
    Menjalankan kode jika salah satu saja pernyataan diatas
    bernilai benar atau true.
    */
    
?>