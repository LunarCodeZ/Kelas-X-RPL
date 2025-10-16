<?php 

    $status = ['active','','','','',''];

    if (isset($_GET['menu'])) {
        $page = $_GET['menu'];

        if ($page == 'profil') {
            $status[0] = 'active';
            $status[1] = '';
            $status[2] = '';
            $status[3] = '';
            $status[4] = '';
            $status[5] = '';
        }

        if ($page == 'sejarah') {
            $status[0] = '';
            $status[1] = 'active';
            $status[2] = '';
            $status[3] = '';
            $status[4] = '';
            $status[5] = '';
        }

        if ($page == 'jurusan') {
            $status[0] = '';
            $status[1] = '';
            $status[2] = 'active';
            $status[3] = '';
            $status[4] = '';
            $status[5] = '';
        }

        if ($page == 'prestasi') {
            $status[0] = '';
            $status[1] = '';
            $status[2] = '';
            $status[3] = 'active';
            $status[4] = '';
            $status[5] = '';
        }

        if ($page == 'kegiatan') {
            $status[0] = '';
            $status[1] = '';
            $status[2] = '';
            $status[3] = '';
            $status[4] = 'active';
            $status[5] = '';
        }

        if ($page == 'kontak') {
            $status[0] = '';
            $status[1] = '';
            $status[2] = '';
            $status[3] = '';
            $status[4] = '';
            $status[5] = 'active';
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="Bootstrap/bootstrap-5.3.7-dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: cornsilk;
        }

        .card-container {
            display: flex;
            flex-direction: row;
            justify-content: space-around;
            flex-wrap: wrap;
        }

        .card-container > div {
            width: 20rem;
            height: 30rem;
            margin-bottom: 5rem;
        }
    </style>
</head>
<body>
    <div class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1">SMKN 2 Buduran</span>
        </div>
        <ul class="navbar-nav">
            <li class="nav-item ms-3">
                <a href="?menu=profil" class="nav-link <?php echo $status[0] ?>">Profil</a>
            </li>
            <li class="nav-item ms-3">
                <a href="?menu=sejarah" class="nav-link <?php echo $status[1] ?>">Sejarah</a>
            </li>
            <li class="nav-item ms-3">
                <a href="?menu=jurusan" class="nav-link <?php echo $status[2] ?>">Jurusan</a>
            </li>
            <li class="nav-item ms-3">
                <a href="?menu=prestasi" class="nav-link <?php echo $status[3] ?>">Prestasi</a>
            </li>
            <li class="nav-item ms-3">
                <a href="?menu=kegiatan" class="nav-link <?php echo $status[4] ?>">Kegiatan</a>
            </li>
            <li class="nav-item ms-3">
                <a href="?menu=kontak" class="nav-link <?php echo $status[5] ?>">Kontak</a>
            </li>
        </ul>
    </div>

    <div>
        
        <section>
            <?php 
            
                if (isset($_GET['menu'])) {
                    $isi = $_GET['menu'];

                    if ($isi == "sejarah") {
                        require_once "pages/sejarah.php";
                    }

                    if ($isi == "jurusan") {
                        require_once "pages/jurusan.php";
                    }

                    if ($isi == "profil") {
                        require_once "pages/profil.php";
                    }

                    if ($isi == "prestasi") {
                        require_once "pages/prestasi.php";
                    }

                    if ($isi == "kegiatan") {
                        require_once "pages/kegiatan.php";
                    }

                    if ($isi == "kontak") {
                        require_once "pages/kontak.php";
                    }
                    
                    // require_once "pages/$isi.php";
                    // header("location:pages/$isi.php");
                } else {
                    require_once "pages/profil.php";
                }

                if (isset($_POST['tombol'])) {
                    $nama = $_POST['nama'];
                    $pesan = $_POST['pesan'];
                    $email = $_POST['email'];

                    echo $nama;
                    echo '<br>';
                    echo $pesan;
                    echo '<br>';
                    echo $email;
                }
            
            ?>

            <!-- 
            'name': nama variabel
            'value': nilai variabel
            -->
        </section>

        <footer style="margin-top:150px; padding:60px;" class="bg-danger">
            <p style="text-align: center; margin-top:30px;">
                Web ini dibuat oleh Erik Yanuar Putra, X-RPL<br>
                SMKN 2 Buduran &copy All rights reserved
            </p>
        </footer>
    </div>
</body>
</html>