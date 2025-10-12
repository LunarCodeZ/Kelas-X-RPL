<h1>Hapus Data</h1>
<form action="" method="post">
    Kategori :
    <input type="text" name="data">
    <br>
    ID :
    <input type="number" name="id">
    <br>
    <input type="submit" name="hapus" value="hapus data">
</form>

<?php 

    require_once "../restoran/function.php";

    if (isset($_POST['hapus'])) {

        if (empty($_POST['data'])) {
            echo "Kategori tidak boleh kosong ! <br>";
        } else {
            $data = $_POST['data'];
            $sql = "DELETE FROM tblkategori WHERE kategori='$data'";
            $result = mysqli_query($koneksi, $sql);

            echo "$data berhasil dihapus !";
        }
        
        if (empty($_POST['id'])) {
            echo "ID tidak boleh kosong !";
        } else {
            $id = $_POST['id'];
            $sql = "DELETE FROM tblkategori WHERE idkategori='$id'";
            $result = mysqli_query($koneksi, $sql);

            echo "Data dengan ID: $id berhasil dihapus !";
        }

    }

    
?>