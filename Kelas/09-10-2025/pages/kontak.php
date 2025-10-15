<?php 
    $menu = ["Profil", "Kontak", "Kegiatan", "Jadwal"];
    $berita = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus libero, rerum ad eos aperiam in dolore? Consectetur eveniet molestias fuga ad tempora distinctio! Nam obcaecati doloribus aliquam adipisci, amet sequi!";
    $gambar = "gambar/malam.jpg";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Sekolah SMPN 4 Sidoarjo</title>

    <link rel="stylesheet" href="../Bootstrap/bootstrap-5.3.7-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="navbar navbar-expand-lg bg-info">
        <ul class="navbar-nav">
            <li class="nav-item ms-3">
                <a href="../tugas.php" class="nav-link"><?=$menu[0] ?></a>
            </li>
            <li class="nav-item ms-3">
                <a href="#" class="nav-link active"><?=$menu[1] ?></a>
            </li>
            <li class="nav-item ms-3">
                <a href="kegiatan.php" class="nav-link"><?=$menu[2] ?></a>
            </li>
            <li class="nav-item ms-3">
                <a href="jadwal.php" class="nav-link"><?=$menu[3] ?></a>
            </li>
        </ul>
    </div>

    <div>

        
    </div>
</body>
</html>