<?php 

    $status = ['active','','','','',''];
    $requiredForm = "<span style='color:red;'>*</span>";

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

        .container-sejarah {
            margin: 50px 20px 20px 30px;
        }

        .cerita-sejarah {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            margin: 0 30px 0 30px;
            text-align: justify;
            text-indent: 40px;
        }

        .profil-page {
            display: grid;
            grid: 1fr / 1fr 1fr;
            margin: 50px 20px 20px 30px;
            text-align: center;
            gap: 70px;
        }

        .profil-page > div {
            border: 1px solid black;
            padding: 20px;
            transition: 0.7s;   
        }

        .profil-page > div:hover {
            background-color: yellow;
            padding-top: 50px;
        }

        .profil-page > div > .slogan {
            font-size: 30px;
            color: lightslategray;
            transition: 0.7s;
        }

        .profil-page > div > ul {
            text-align: justify;
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
                <a href="?menu=kontak" class="nav-link <?php echo $status[5] ?> " data-bs-toggle="modal" data-bs-target="#exampleModal">Kontak</a>
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

    <!-- Modal for Kontak -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Kontak SMKN 2 Buduran</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <form action="" method="post">
                <div class="mb-3">
                    <label class="form-label"> Nama Lengkap: <?php echo $requiredForm ?> </label>
                    <input type="text" class="form-control" placeholder="Erik Yanuar Putra" name="nama" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Asal Kelas:</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="kelas" id="rpl" value="Rekayasa Perangkat Lunak" checked>
                        <label class="form-check-label" for="rpl">
                            Rekayasa Perangkat Lunak
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="kelas" id="dkv" value="Desain Komunikasi Visual">
                        <label class="form-check-label" for="dkv">
                            Desain Komunikasi Visual
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="kelas" id="ak" value="Akuntansi">
                        <label class="form-check-label" for="ak">
                            Akuntansi
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="kelas" id="bd" value="Bisnis Digital">
                        <label class="form-check-label" for="bd">
                            Bisnis Digital
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="kelas" id="mp" value="Manajemen Perkantoran">
                        <label class="form-check-label" for="mp">
                            Manajemen Perkantoran
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="kelas" id="lpb" value="Layanan Perbankan">
                        <label class="form-check-label" for="lpb">
                            Layanan Perbankan
                        </label>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Alamat: </label>
                    <input type="text" class="form-control" placeholder="Jl Bintang No. 54, Sidoarjo, Jawa Timur" name="alamat">
                </div>
                <div class="mb-3">
                    <label class="form-label">No. HP: </label>
                    <input type="number" class="form-control" placeholder="08123456" name="hp">
                </div>
                <div class="mb-3">
                    <label class="form-label">Email: <?php echo $requiredForm ?> </label>
                    <input type="email" class="form-control" placeholder="contoh@gmail.com" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label" required>Pesan anda: <?php echo $requiredForm ?> </label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Sekolah SMKN 2 Buduran Sidoarjo keren." name="pesan"></textarea>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-success" name="kirim" value="kirim">Kirim Pesan</button>
                </div>

                <hr />
                <div class="form-output" style="margin: 30px; text-align: center;">
                    <h3>Output:</h3>

                    <?php 
                    
                        if (isset($_POST['kirim'])) {
                            $nama = $_POST['nama'];
                            $email = $_POST['email'];
                            $pesan = $_POST['pesan'];


                            if (empty($_POST['kelas'])) {
                                $kelas = "-";
                            } else {
                                $kelas = $_POST['kelas'];
                            }

                            if (empty($_POST['alamat'])) {
                                $alamat = "-";
                            } else {
                                $alamat = $_POST['alamat'];
                            }

                            if (empty($_POST['hp'])) {
                                $hp = "-";
                            } else {
                                $hp = $_POST['hp'];
                            }
                            
                        
                            echo "Nama: $nama <br>";
                            echo "Kelas: $kelas <br>";
                            echo "Alamat: $alamat <br>";
                            echo "Email: $email <br>";
                            echo "No. HP: $hp <br>";
                            echo "Pesan: $pesan <br>";

                            echo "<h5>Pesan berhasil dikirim !</h5>";
                        }

                    ?>

                </div>
            </form>

        </div>
        </div>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
</body>
</html>