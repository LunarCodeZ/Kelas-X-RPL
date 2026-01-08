<!-- Belajar PHP -->
<h1>Saya Belajar PHP</h1>

<?php 

    $nama = "Erik Yanuar Putra";
    $kelas = 12;
    $umur = 16;
    $alamat = "Perumahan Griya Candi Pratama rt x rw y, blok Ax-x, Durung Bedug, Candi, Sidoarjo, Jawa Timur, Indonesia, Asean, Asia, Bumi, Bimasakti, Universe, Multiverse, Metaverse, Megaverse, Ultraverse, Gigaverse, Teraverse";
    $hobi = "Bermain game, tidur";
    $citaCita = "Menjadi seorang dev";

    // echo "<h1>Saya Belajar PHP</h1>";
    // echo "Saya Kelas: ";
    // echo "12 <br><br>";


    echo "Nama: $nama";
    echo "<br>";

    echo "Umur: $umur tahun";
    echo "<br>";

    echo "Kelas: $kelas-RPL";
    echo "<br>";

    echo "Alamat: $alamat";
    echo "<br>";

    echo "Hobi: $hobi";
    echo "<br>";

    echo "Cita-cita: $citaCita";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Erik</title>
</head>
<body>
    <div>
        <h1>Identitas</h1>
        <table border="1">
            <tbody>
                <tr>
                    <td>Nama:</td>
                    <td><?= $nama; ?></td>
                </tr>
                <tr>
                    <td>Umur:</td>
                    <td><?= $umur; ?></td>
                </tr>
                <tr>
                    <td>Kelas:</td>
                    <td><?= $kelas; ?></td>
                </tr>
                <tr>
                    <td>Alamat:</td>
                    <td><?= $alamat; ?></td>
                </tr>
                <tr>
                    <td>Hobi:</td>
                    <td><?= $hobi; ?></td>
                </tr>
                <tr>
                    <td>Cita-cita:</td>
                    <td><?= $citaCita; ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>