<?php 

    session_start();

    // if (isset($_SESSION['email'])) {
    //     echo 'Email: '.$_SESSION['email'].'<br>';
    //     echo '<a href="logout.php">Logout</a>';
    // } else {
    //     echo "Register";
    //     echo "<br>";
    //     echo '<a href="index.php">Login</a>';
    // }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Result</title>

    <link rel="stylesheet" href="../13-11-2025/style.css">
    <style>
        body {
            font-family: cursive;
        }

        a {
            text-decoration: none;
        }

        .container {
            margin: auto;
            width: 350px;
            border: 1px solid white;
            background-color: rgba(24, 24, 24, 1);
            text-align: center;
        }

        .notlogin-txt {
            text-align: center;
            margin: 30px 20px;
        }

        .btn {
            width: 100px;
            height: 40px;
            border: 1px solid black;
            margin: auto;
            text-align: center;
            margin-bottom: 15px;
            margin-top: 10px;
        }

        .btn > p {
            position: relative;
            bottom: 6px;
        }

        #logout {
            background-color: rgba(244, 66, 7, 1);
        }

        #logout > p > a {
            color: white;
        }

        #register {
            background-color: rgba(0, 234, 255, 1);
            color: black;
        }

        #register > p > a {
            color: black;
        }

        #login {
            background-color: rgba(0, 255, 34, 1);
            color: black;
        }

        #login > p > a {
            color: black;
        }

        .unlogged-btn {
            display: flex;
            flex-direction: row;
            justify-content: space-around;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center; margin-bottom:40px;">Login Result</h1>
    <hr />

    <br />
    <div class="container">
        <div class="login-container">

            <?php if (isset($_SESSION['email'])) { ?>
            <div>
                <p>
                    Email: <?php echo $_SESSION['email']; ?>
                </p>
            </div>
            <div>
                <p>
                    Password: <?php echo $_SESSION['password']; ?>
                </p>
            </div>
            <?php } else {?>
            <h3 class="notlogin-txt">Mohon login atau register terlebih dahulu</h3>
            <?php } ?>

        </div>
        <div class="unlogged-btn">
            <?php 
                if (!isset($_SESSION['email'])) {
            ?>
            <div class="btn" id="register">
                <p>
                    Register
                </p>
            </div>
            <div class="btn" id="login">
                <p>
                    <a href="index.php">Login</a>
                </p>
            </div>
            <?php
                } else {
            ?>
        </div>
        <div class="btn" id="logout">
            <p>
                <a href="logout.php">Logout</a>
            </p>
        </div>
        <?php } ?>
    </div>
</body>
</html>