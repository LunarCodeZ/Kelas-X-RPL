<h1>Login</h1>

<form action="" method="post">
    <fieldset>
        Email:
        <input type="email" name="email" placeholder="Email">
        <br />
        Password:
        <input type="password" name="password" placeholder="Password">
        <br />
        <input type="submit"  name="login" value="Login">
    </fieldset>
</form>

<?php 

    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        if ($email == 'erik@gmail.com' && $password == 'eriksukaminikrep') {
            session_start();
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
            header("location:index.php");
        } else {
            echo "Email atau Password salah !";
        }
    }

?>