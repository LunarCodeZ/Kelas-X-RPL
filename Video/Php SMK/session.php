<nav>
    <ul>
        <li><a href="?menu=isi">Isi</a></li>
        <li><a href="?menu=hapus">Hapus</a></li>
        <li><a href="?menu=destroy">Destroy</a></li>
    </ul>
</nav>



<?php 
    // === Session PHP ===


    // Syntax pada PHP yang dapat digunakan untuk menyimpan 
    // variabel dalam waktu lama agar dapat digunakan oleh file lain

    session_start();

    // $_SESSION['user'] = 'Agus';
    // $_SESSION['nama'] = 'Agus Salim';
    // $_SESSION['asalNegara'] = 'Indonesia';

    if (isset($_GET['menu'])) {
        $menu = $_GET['menu'];
        echo $menu;

        switch ($menu) {
            case 'isi':
                isiSession();
                break;

            case 'hapus':
                unset($_SESSION['user']);
                break;

            case 'destroy':
                session_destroy();
                break;
            
            default:
                # code...
                break;
        }
    }

    echo '<br>';
    var_dump($_SESSION);

    function isiSession() {
        $_SESSION['user'] = 'Agus';
        $_SESSION['nama'] = 'Agus Salim';
        $_SESSION['asalNegara'] = 'Indonesia';
    }
?>