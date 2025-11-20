<h1 style="text-align: center;">Login Page</h1>

<form action="" method="post">
    <fieldset>
        <fieldset>
            <legend></legend>
            Email:
            <input type="email" name="email" placeholder="Masukkan Email" required><br />
            Password:
            <input type="password" name="password" placeholder="Masukkan Password" required><br />
        </fieldset>
        <br />

        <fieldset>
            <legend>Output</legend>
        </fieldset>
        <input type="reset">
        <input type="submit" name="login" value="Login">
    </fieldset>
</form>

<?php 

    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        echo "Data sudah dikirim <br>";
    }

    $isi;
    $hasil = isset($isi);

    echo $hasil;

    if (isset($isi)) {
        echo "Variabel sudah ada isinya";
    } else {
        echo "Variabel tidak ada isinya";
    }

    // Isset ialah syntax untuk mengecek isi dari variabel
    // Jika variabel tidak diisi, maka isset akan bernilai 0 atau false
    // Sedangkan jika variabel diisi, maka isset akan bernilai 1 atau true

    var_dump($isi);
    // Menampilkan isi variabel dan jenis datanya
?>