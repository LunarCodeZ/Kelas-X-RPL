<form action="" method="get">

    Nama :
    <input type="text" name="nama">
    Alamat :
    <input type="text" name="alamat">
    <input type="submit" name="kirim" value="Simpan">
</form>

<?php 
    // === GET PHP ===


    if (isset($_GET['kirim'])) {
        $nama = $_GET['nama'];
        $alamat = $_GET['alamat'];

        echo "Nama anda: $nama";
        echo '<br>';
        echo "Alamat anda: $alamat";
    }

?>