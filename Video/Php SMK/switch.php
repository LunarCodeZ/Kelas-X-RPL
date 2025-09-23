<?php 
    // === Belajar Pemilihan atau Selector PHP ===
    // $hari = 10;
    // $tampilkanHari = 'Sekarang ialah hari: ';

    // switch ($hari) {
    //     case 1:
    //         echo $tampilkanHari . 'Senin';
    //         break;
    //     case 2:
    //         echo $tampilkanHari . 'Selasa';
    //         break;
    //     case 3:
    //         echo $tampilkanHari . 'Rabu';
    //         break;
    //     case 4:
    //         echo $tampilkanHari . 'Kamis';
    //         break;
    //     case 5:
    //         echo $tampilkanHari . 'Jumat';
    //         break;
    //     case 6:
    //         echo $tampilkanHari . 'Sabtu';
    //         break;
    //     case 7:
    //         echo $tampilkanHari . 'Minggu';
    //         break;
    //     default:
    //         echo "Sepertinya tidak ada nama hari ke-$hari";
    //         break;
    // }

    $orderMakanan = 'Sate';

    switch ($orderMakanan) {
        case 'Burger':
            echo "Burger, itu makanan enak";
            break;
        case 'Kupang':
            echo "Makanan khas Sidoarjo, Kupang";
            break;
        case 'French Fries':
            echo "French Fries, Kentang goreng pipih yang biasa disajikan dengan mayones dan saos tomat";
            break;
        default:
            echo "Aku belum pernah mencoba $orderMakanan sebelumnya";
            break;
    }
?>