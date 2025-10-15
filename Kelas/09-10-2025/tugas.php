<?php
$menu = ["Profil", "Kontak", "Kegiatan", "Jadwal"];
$berita = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus libero, rerum ad eos aperiam in dolore? Consectetur eveniet molestias fuga ad tempora distinctio! Nam obcaecati doloribus aliquam adipisci, amet sequi!";
$gambar = "gambar/malam.jpg";

$namaSekolah = "SMPN 4 Sidoarjo";
$sejarahSekolah = [
    "SMP Negeri 4 Sidoarjo merupakan salah satu sekolah menengah pertama negeri yang terletak di Jalan Suko, Kelurahan Suko, Kecamatan Sidoarjo, Kabupaten Sidoarjo, Jawa Timur. Sekolah ini didirikan berdasarkan Surat Keputusan Nomor 0472/0/1983 dan mulai beroperasi pada tanggal 7 November tahun 1983.",
    "Sejak awal berdirinya sekolah, SMP Negeri 4 Sidoarjo berada di bawah aturan Dinas Pendidikan Kabupaten Sidoarjo dan memiliki status sebagai sekolah negeri. Dengan luas tanah mencapai sekitar 14 ribu meter persegi, sekolah ini memiliki fasilitas belajar yang memadai untuk menunjang kegiatan-kegiatan akademik maupun nonakademik seluruh siswa.",
    "Dalam perjalanannya, SMP Negeri 4 Sidoarjo telah berkembang menjadi salah satu sekolah favorit di wilayah Sidoarjo dengan berbagai prestasi yang diraih oleh siswa-siswinya. Berdasarkan data Kemendikbud, sekolah ini telah memperoleh akreditasi A sebagai bentuk pengakuan atas kualitas pendidikan dan manajemen sekolah yang baik."
];
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Sekolah SMPN 4 Sidoarjo</title>

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="navbar navbar-expand-lg bg-info">
        <ul class="navbar-nav">
            <li class="nav-item ms-3">
                <a href="#" class="nav-link active"><?= $menu[0] ?></a>
            </li>
            <li class="nav-item ms-3">
                <a href="pages/kontak.php" class="nav-link"><?= $menu[1] ?></a>
            </li>
            <li class="nav-item ms-3">
                <a href="pages/kegiatan.php" class="nav-link"><?= $menu[2] ?></a>
            </li>
            <li class="nav-item ms-3">
                <a href="pages/jadwal.php" class="nav-link"><?= $menu[3] ?></a>
            </li>
        </ul>
    </div>

    <div id="container">
        <div>
            <h1 id="page-title" style="font-size: 50px;"><?php echo $namaSekolah ?></h1>
        </div>

        <br><br>

        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://yt3.googleusercontent.com/Vveuh5Alsp9hk2pszH97J6e6zI3GyGhBTD7GufB-aXqt-PpCLdmejrKBdG1uMtde15m3hjQwjQ=s900-c-k-c0x00ffffff-no-rj" class="d-block" alt="..." style="height: 400px; width: 400px; margin-left:auto; margin-right:auto; ">
                    <div class="carousel-caption d-none d-md-block" style="color: black;">
                        <h5>SMPN 4 Sidoarjo</h5>
                        <p>
                            Salah satu Sekolah berprestasi Menengah Pertama yang terletak di Suko, Sidoarjo, Jawa Timur dengan
                            murid-muridnya yang aktif, inovatif, kreatif, dan berprestasi.
                        </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://beritajatim.com/cdn-cgi/image/quality=80,format=auto,onerror=redirect,metadata=none/wp-content/uploads/2022/08/IMG-20220831-WA0052.jpg" class="d-block" alt="..." style="height: 500px; width: 900px; margin-left:auto; margin-right:auto; filter:brightness(50%);">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Cetak Rekor 1000 Udeng Pacul Gowang</h5>
                        <p>
                            Sekolah ini telah mencetak rekor dengan cara membuat udeng pacul gowang pada tahun 2022 yang bertujuan
                            untuk memupuk rasa cinta terhadap kearifan lokal di Indonesia, khususnya Sidoarjo.
                        </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://radarjatim.id/wp-content/uploads/2023/09/WhatsApp-Image-2023-09-04-at-14.10.09.jpeg" class="d-block" alt="..." style="height: 500px; width: 900px; margin-left:auto; margin-right:auto; filter:brightness(50%);">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Adiwiyata Tingkat Nasional</h5>
                        <p>
                            Sekolah ini telah berhasil meraih gelar 'Sekolah Adiwiyata' tingkat Nasional berkat kerja keras, usaha
                            dan juga semangat yang dimiliki oleh murid-muridnya dalam berpartisipasi.
                        </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://i.ytimg.com/vi/zF4oBiksfBk/sddefault.jpg" class="d-block" alt="..." style="height: 500px; width: 900px; margin-left:auto; margin-right:auto; filter:brightness(50%);">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Rekor Muri Nugget Bandeng</h5>
                        <p>
                            Sekolah ini telah sukses mencetak Rekor Muri dengan cara membuat sekitar 10750 nugget bandeng, sajian khas
                            Sidoarjo yang berupa olahan daging ayam dan ikan, dan dibalut dengan tepung.
                        </p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <br><br><br><br><br>

        <h3 style="text-align: center;">Informasi Sekolah</h3>
        <div id="card-container">
            <div class="card">
                <img src="gambar/sejarah.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Sejarah</h5>
                    <p class="card-text">Sejarah sekolah SMP Negeri 4 Sidoarjo</p>
                    <button type="button" class="d-grid gap-2 btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Baca sejarah</button>
                </div>
            </div>
            <div class="card">
                <img src="gambar/visimisi.jpg" class="card-img-top" alt="..." style="height: 200px;">
                <div class="card-body">
                    <h5 class="card-title">Visi & Misi</h5>
                    <p class="card-text">Visi dan Misi sekolah SMP Negeri 4 Sidoarjo.</p>
                    <a href="#" class="btn btn-primary">Baca visi dan misi</a>
                </div>
            </div>
            <div class="card">
                <img src="gambar/alamat.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Alamat</h5>
                    <p class="card-text">Lokasi sekolah SMP Negeri 4 Sidoarjo.</p>
                    <a href="#" class="btn btn-primary">Lihat alamat</a>
                </div>
            </div>
            <div class="card">
                <img src="gambar/akademik.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Data Akademik</h5>
                    <p class="card-text">Data-data akademik di sekolah SMP Negeri 4 Sidoarjo.</p>
                    <a href="#" class="btn btn-primary">Lihat data</a>
                </div>
            </div>
            <div class="card">
                <img src="gambar/beritapengumuman.jpg" class="card-img-top" alt="Berita pengumuman" style="height: 180px;">
                <div class="card-body">
                    <h5 class="card-title">Berita Pengumuman</h5>
                    <p class="card-text">Berita berisi pengumuman-pengumuman yang terkait dengan sekolah SMP Negeri 4 Sidoarjo.</p>
                    <a href="#" class="btn btn-primary">Baca berita</a>
                </div>
            </div>
            <div class="card">
                <img src="gambar/pendaftaran.jpg" class="card-img-top" alt="Pendaftar sekolah" style="height: 180px;">
                <div class="card-body">
                    <h5 class="card-title">Pendaftaran Sekolah</h5>
                    <p class="card-text">Klik untuk mendaftarkan putra dan putri anda agar dapat bersekolah di SMP Negeri 4 Sidoarjo.</p>
                    <a href="#" class="btn btn-success">Daftar sekarang</a>
                </div>
            </div>
        </div>

        <!-- === Modals === -->
        <!-- Modal Sejarah -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Sejarah Sekolah</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <img src="gambar/sejarah.jpg" alt="" style="width: 100%; height:150px;">
                        <div class="card-title">
                            <h3 style="position:absolute; bottom:570px; left:200px;">Sejarah</h3>
                            <h3 style="position:absolute; bottom:530px; left:140px;">SMPN 4 Sidoarjo</h3>
                        </div>
                        <p style="text-align: justify; margin:10px;">
                            <?php
                            foreach ($sejarahSekolah as $sejarah) {
                                echo "<p style='text-indent:30px;'>$sejarah</p>";
                            }
                            ?>
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>

        <br><br><br><br><br>

        <p style="text-align: center;">
            SMPN 4 Sidoarjo &copy All rights reserved
        </p>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
</body>

</html>