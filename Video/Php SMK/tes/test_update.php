<form action="" method="post">
    <fieldset>
        <fieldset>
            <legend>Update Kategori from ID</legend>
            Update Kategori:
            <input type="text" name="newKategori">
            <br>
            ID:
            <input type="number" name="id">
        </fieldset>

        <br>

        <fieldset>
            <legend>Update ID from Kategori</legend>
            Update ID:
            <input type="number" name="newId">
            <br>
            Kategori:
            <input type="text" name="Kategori">
        </fieldset>
        <br>
        <input type="submit" name="perbaruiData" value="Perbarui Data">
    </fieldset>
</form>

<?php 

    require_once "../restoran/function.php";

    if (isset($_POST['perbaruiData'])) {

        if (empty($_POST['newKategori'])) {
            echo "Update Kategori tidak boleh kosong <br>";
        } else {

            if (empty($_POST['id'])) {
                echo "ID pada update kategori tidak boleh kosong";
            } else {
                $newKategori = $_POST['newKategori'];
                $id = $_POST['id'];

                $sql = "UPDATE tblkategori SET kategori='$newKategori' WHERE idkategori=$id";
                $result = mysqli_query($koneksi, $sql);
                echo "Data Kategori pada ID: $id telah berhasil diubah menjadi: $newKategori <br>";
            }
        }

        if (empty($_POST['newId'])) {
            echo "Update ID tidak boleh kosong <br>";
        } else {

            if (empty($_POST['kategori'])) {
                echo "Kategori pada update kategori tidak boleh kosong";
            } else {
                $newId = $_POST['newId'];
                $kategori = $_POST['kategori'];

                $sql = "UPDATE tblkategori SET idkategori=$newId WHERE kategori='$kategori'";
                $result = mysqli_query($koneksi, $sql);
                echo "Data ID pada Kategori: $kategori telah berhasil diubah menjadi: $newId <br>";
            }
        }
    }


    // $sql = "UPDATE tblkategori SET kategori='Lemper' WHERE idkategori=14";
    // $result = mysqli_query($koneksi, $sql);

    // echo "Data telah diubah !";

?>