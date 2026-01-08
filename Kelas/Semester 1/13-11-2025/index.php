<?php 

    $host = "127.0.0.1";
    $user = "root";
    $pass = "";
    $db = "dbsekolah";

    $connect = mysqli_connect($host, $user, $pass, $db);

    $output = "Menunggu...";

    if (isset($_POST['kirim'])) {
        $nis = $_POST['nis'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $telepon = $_POST['telepon'];

        $output = "
        Nis: $nis<br>
        Nama: $nama<br>
        Alamat: $alamat<br>
        Nomor Telepon: $telepon<br>";

        $sql = "INSERT INTO tblsiswa (nis, nama, alamat, telepon) VALUES ($nis, '$nama', '$alamat', '$telepon')";
        $query = mysqli_query($connect, $sql);

        header("location:#");

        
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 style="text-align: center;">Materi MySQL</h1>
    <hr />

    <form action="" method="post">
        <br />
        <fieldset>
            <fieldset>
                <legend>Isi Form</legend>
                <div class="form-container">
                    Nis: <br />
                    <input id="form-input" type="number" name="nis" placeholder="Nis anda" required> <br />
                    Nama: <br />
                    <input id="form-input" type="text" name="nama" placeholder="Nama anda" required> <br />
                    Alamat: <br />
                    <input id="form-input" type="text" name="alamat" placeholder="Alamat anda"> <br />
                    Telepon: <br />
                    <input id="form-input" type="text" name="telepon" placeholder="Telepon anda" required> <br />
                </div>
            </fieldset>
            <br />
            <fieldset>
                <legend>Select Status</legend>
                <table border="1" style="text-align: center; margin: auto;">
                    <thead>
                        <th>NIS</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Telepon</th>
                    </thead>
                    <tbody>
                        <?php 
                            $sql = "SELECT * FROM tblsiswa";
                            $query = mysqli_query($connect, $sql);
                            while ($siswa = mysqli_fetch_array($query)) {
                        ?>
                        <tr>
                            <td><?php echo $siswa['nis'] ?></td>
                            <td><?php echo $siswa['nama'] ?></td>
                            <td><?php echo $siswa['alamat'] ?></td>
                            <td><?php echo $siswa['telepon'] ?></td>
                        </tr>
                        <?php
                             }
                        ?>
                    </tbody>
                </table>
            </fieldset>
            <br />
            <fieldset>
                <legend>Status</legend>
                <p style="text-align: center;">
                    <?php 
                        echo $output;
                    ?>
                </p>
            </fieldset>
            <br />
            <input type="submit" name="kirim" value="kirim" style="float: right;">
        </fieldset>
    </form>
</body>
</html>

<?php 

    

?>