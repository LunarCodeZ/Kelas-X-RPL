<?php
    if (!isset($_SESSION['email'])) {
        header("location:login.php");
    }
?>

<h1>Selamat datang, <?php echo $_SESSION['email'] ?></h1>

<?php
    echo '<strong>Email anda: </strong>'.$_SESSION['email'].'<br>';
    echo '<strong>Password anda: </strong>'.$_SESSION['password'].'<br>';
?>