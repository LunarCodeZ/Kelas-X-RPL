<?php 

    $status = "";

    // Session: Variabel global yang disediakan oleh PHP agar dapat diakses oleh file lain
    //          di lain browser selama browser tersebut masih aktif

    // Menyalakan session
    session_start();


    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        $status = "Login berhasil, silahkan kunjungi ke <a href='login.php'>sini</a>";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

    <style>
        body {
            background-color: rgb(17, 17, 17);
            color: white;
            margin: 10px;
            font-family: cursive;
        }

        form {
            margin: auto;
        }

        #form-input {
            padding-top: 5px;
            padding-bottom: 5px;
            padding-right: 10%;
            background-color: rgb(51, 51, 51);
            transition: 0.55s;
        }

        #form-input:focus {
            background-color: rgb(132, 211, 237);
            padding-top: 10px;
            padding-bottom: 10px;
            padding-right: 60%;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Login Page</h1>
    <hr />
    <br />

    <form action="" method="post">
        <fieldset>
            <br />
            <fieldset>
                Email: <br />
                <input id="form-input" type="email" name="email" placeholder="Masukkan Email" required><br />
                Password: <br />
                <input id="form-input" type="password" name="password" placeholder="Masukkan Password" required><br />
            </fieldset>
            <br />

            <fieldset>
                <legend>Status</legend>
                <p style="text-align: center;">
                    <?php echo $status; ?>
                </p>
            </fieldset>
            <br />
            <input type="submit" name="login" value="Login" style="float: right;">
        </fieldset>
    </form>
</body>
</html>

<?php 
    

    // $isi = "halo dunia";
    // $hasil = isset($isi);

    // echo $hasil.'<br>';

    // if (isset($isi)) {
    //     echo "Variabel sudah ada isinya <br>";
    // } else {
    //     echo "Variabel tidak ada isinya <br>";
    // }


    // var_dump($isi);
?>